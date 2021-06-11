<?php

class Ajukan_barang extends Controller
{

    function __construct()
    {
        $this->helper = new Helper;
    }

    public function index()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'title' => 'Halaman Pengajuan Barang',
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/ajukan_barang', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('operator')) {
            header("Location: " . BASEURL);
        } elseif (in_groups('user')) {
            $data =
                [
                    'title' => 'Halaman Pengajuan Barang',
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('users/ajukan_barang', $data);
            $this->view('templates/footer', $data);
        } else {
            header("Location: " . BASEURL . "/m4s_sislog/logout.php");
        }
    }

    public function tambah()
    {
        if (in_groups('admin') || in_groups('user')) {
            if (isset($_POST['submit'])) {
                // $_post
                $d = $_POST;

                // mengambil data post
                $sub_bagian = user('nama_lengkap');
                $keperluan = $d['keperluan'];
                $waktu = 21;
                $nama_barang = $d['nama_barang'];
                $jumlah = $d['jumlah'];
                $satuan = $d['satuan'];
                $keterangan = $d['keterangan'];
                $user_id = user('id');

                // masukan kedalam variabel
                $data = "'', '$sub_bagian', '$keperluan', '$waktu', '$nama_barang', '$jumlah', '$satuan', '$keterangan', '$user_id'";

                $model = $this->model('sipatModel')->belum_ditinjau($data);

                if ($model > 0) {
                    // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    redirect(BASEURL);
                    exit;
                } else {
                    // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    redirect(BASEURL . '/ajukan_barang');
                    exit;
                }
            } else {
                header("Location: " . BASEURL);
            }
        } else {
            header("Location: " . BASEURL . "/m4s_sislog/logout.php");
        }
        header("Location: " . BASEURL);
    }
}
