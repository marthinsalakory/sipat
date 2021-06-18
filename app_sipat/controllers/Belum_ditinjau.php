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
        $this->helper->is_login();
        if ($this->helper->in_groups('admin')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'belum_ditinjau' => $this->model->belum_ditinjau(),
                    'dashboard' => 'active',
                ];
            $this->view('templates/header', $data);
            $this->view('admin/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'belum_ditinjau' => $this->model->belum_ditinjau(),
                    'dashboard' => 'active',
                ];
            $this->view('templates/header', $data);
            $this->view('operators/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('user')) {
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
        $this->helper->is_login();
        if ($this->helper->in_groups('operator')) {
            $this->helper->redirect(BASEURL);
            exit;
        } elseif ($this->helper->in_groups('user') || $this->helper->in_groups('admin')) {
            if ($this->model->hapus_belum_ditinjau($key) > 0) {
                Flasher::setFlash('success', 'Berhasil dihapus');
                $this->helper->redirect(BASEURL . '/belum_ditinjau');
                exit;
            }
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }

    public function konfirmasi($key)
    {
        $this->helper->is_login();
        if ($this->helper->in_groups('operator') || $this->helper->in_groups('admin')) {

            // untuk mengambil data dari tabel belum ditinjau
            $d = $this->helper->get_first('belum_ditinjau', 'id', $key);

            // memasukan data tabel ke array data
            $data =
                [
                    'id' => $d['id'],
                    'sub_bagian' => $d['sub_bagian'],
                    'keperluan' => $d['keperluan'],
                    'waktu' => $d['waktu'],
                    'nama_barang' => $d['nama_barang'],
                    'jumlah' => $d['jumlah'],
                    'satuan' => $d['satuan'],
                    'user_id' => $d['user_id'],
                    'operator_id' => $this->helper->user('id'),
                ];



            if ($this->model->konfirmasi_belum_ditinjau($data) > 0) {
                Flasher::setFlash('success', 'Barang berhasil dikonfirmasi');
                $this->helper->redirect(BASEURL . '/dalam_proses');
                exit;
            }
        } elseif ($this->helper->in_groups('user')) {
            $this->helper->redirect(BASEURL);
            exit;
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }

    public function batal()
    {
        $this->helper->is_login();
        if ($this->helper->in_groups('operator') || $this->helper->in_groups('admin')) {
            if (isset($_POST['submit'])) :

                // untuk mengambil data dari tabel belum ditinjau
                $d = $this->helper->get_first('belum_ditinjau', 'id', $_POST['id']);

                // memasukan data tabel ke array data
                $data =
                    [
                        'id' => $d['id'],
                        'sub_bagian' => $d['sub_bagian'],
                        'keperluan' => $d['keperluan'],
                        'waktu' => $d['waktu'],
                        'nama_barang' => $d['nama_barang'],
                        'jumlah' => $d['jumlah'],
                        'satuan' => $d['satuan'],
                        'alasan' => $_POST['alasan'],
                        'user_id' => $d['user_id'],
                        'operator_id' => $this->helper->user('id'),
                    ];

                if ($this->model->batal($data) > 0) {
                    Flasher::setFlash('success', 'Berhasil melakukan pembatalan barang');
                    $this->helper->redirect(BASEURL . '/riwayat_pembatalan');
                    exit;
                }
            endif;
        } elseif ($this->helper->in_groups('user')) {
            $this->helper->redirect(BASEURL);
            exit;
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }
}
