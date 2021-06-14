<?php

class Ajukan_barang extends Controller
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
            header("Location: " . LOGOUT);
        }
    }

    public function tambah()
    {
        if (in_groups('admin') || in_groups('user')) {
            if (isset($_POST['submit'])) {
                // $_post
                $d = $_POST;

                // mengambil data post
                $id = uniqid();
                $sub_bagian = user('nama_lengkap');
                $keperluan = $d['keperluan'];
                $waktu = 21;
                $nama_barang = $d['nama_barang'];
                $jumlah = $d['jumlah'];
                $satuan = $d['satuan'];
                $user_id = user('id');

                // masukan kedalam variabel
                $data = "'$id', '$sub_bagian', '$keperluan', '$waktu', '$nama_barang', '$jumlah', '$satuan', '$user_id'";

                $model = $this->model->ajukan_barang($data);

                if ($model > 0) {
                    setFlash('success', 'Berhasil mengajukan barang');
                    redirect(BASEURL . "/belum_ditinjau");
                    exit;
                } else {
                    setFlash('danger', 'Gagal membuat pengajuan');
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
