<?php

class Belum_ditinjau extends Controller
{

    function __construct()
    {
        $this->helper = new Helper;
        $this->model = $this->model('sipatModel');
    }

    public function index()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'belum_ditinjau' => $this->model->belum_ditinjau(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'belum_ditinjau' => $this->model->belum_ditinjau(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('user')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'belum_ditinjau' => $this->model->belum_ditinjau(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('users/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } else {
            header("Location: " . BASEURL . "/m4s_sislog/logout.php");
        }
    }

    public function hapus($key)
    {
        if (in_groups('admin')) {
            $model = $this->model->hapus_belum_ditinjau($key);

            if ($model > 0) {
                // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            } else {
                // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            }
        } elseif (in_groups('operator')) {
            redirect(BASEURL);
            exit;
        } elseif (in_groups('user')) {

            $model = $this->model->hapus_belum_ditinjau($key);

            if ($model > 0) {
                // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            } else {
                // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            }
        } else {
            header("Location: " . LOGOUT);
        }
    }

    public function konfirmasi($key)
    {
        if (in_groups('admin')) {
            $model = $this->model->hapus_belum_ditinjau($key);

            if ($model > 0) {
                // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            } else {
                // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            }
        } elseif (in_groups('operator')) {

            $d = get_first('belum_ditinjau', 'id', $key);

            // mengambil data post
            $id = $key;
            $sub_bagian = $d['sub_bagian'];
            $keperluan = $d['keperluan'];
            $waktu = $d['waktu'];
            $nama_barang = $d['nama_barang'];
            $jumlah = $d['jumlah'];
            $satuan = $d['satuan'];
            $user_id = $d['user_id'];
            $operator_id = user('id');

            // masukan kedalam variabel
            $data = "'$id', '$sub_bagian', '$keperluan', '$waktu', '$nama_barang', '$jumlah', '$satuan', '$user_id', '$operator_id'";

            $model = $this->model->konfirmasi_belum_ditinjau($data);

            if ($model > 0) {
                if (delete('belum_ditinjau', 'id', $key) > 0) :
                    // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    redirect(BASEURL . '/dalam_proses');
                    exit;
                endif;
            } else {
                // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            }
        } elseif (in_groups('user')) {
            redirect(BASEURL);
            exit;
        } else {
            header("Location: " . LOGOUT);
        }
    }

    public function batal()
    {
        if (in_groups('admin')) {
            $model = $this->model->hapus_belum_ditinjau();

            if ($model > 0) {
                // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            } else {
                // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                redirect(BASEURL . '/belum_ditinjau');
                exit;
            }
        } elseif (in_groups('operator')) {
            if (isset($_POST['submit'])) :

                $dt = $_POST;

                $d = get_first('belum_ditinjau', 'id', $dt['id']);


                // mengambil data post
                $id = $d['id'];
                $sub_bagian = $d['sub_bagian'];
                $keperluan = $d['keperluan'];
                $waktu = $d['waktu'];
                $nama_barang = $d['nama_barang'];
                $jumlah = $d['jumlah'];
                $satuan = $d['satuan'];
                $alasan = $dt['alasan'];
                $user_id = $d['user_id'];
                $operator_id = user('id');

                // masukan kedalam variabel
                $data = "'$id', '$sub_bagian', '$keperluan', '$waktu', '$nama_barang', '$jumlah', '$satuan', '$alasan', '$user_id', '$operator_id'";

                $model = $this->model->batal($data);

                if ($model > 0) {
                    if (delete('belum_ditinjau', 'id', $id) > 0) :
                        // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                        redirect(BASEURL . '/riwayat_pembatalan');
                        exit;
                    endif;
                } else {
                    // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    redirect(BASEURL . '/belum_ditinjau');
                    exit;
                }
            endif;
        } elseif (in_groups('user')) {
            redirect(BASEURL);
            exit;
        } else {
            header("Location: " . LOGOUT);
        }
    }
}
