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
        $this->helper->is_login();
        if ($this->helper->in_groups('admin')) {
            $data =
                [
                    'title' => 'Halaman Pengajuan Barang',
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/ajukan_barang', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('operator')) {
            $this->helper->redirect(BASEURL);
        } elseif ($this->helper->in_groups('user')) {
            $data =
                [
                    'title' => 'Halaman Pengajuan Barang',
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('users/ajukan_barang', $data);
            $this->view('templates/footer', $data);
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }

    public function tambah()
    {
        $this->helper->is_login();
        if ($this->helper->in_groups('operator')) {
            redirect(BASEURL);
        } else if ($this->helper->in_groups('admin') || $this->helper->in_groups('user')) {
            if (isset($_POST['submit'])) {

                $data =
                    [
                        'id' => uniqid(),
                        'sub_bagian' => $this->helper->user('nama_lengkap'),
                        'keperluan' => $_POST['keperluan'],
                        'waktu' => $this->helper->dateTimeNow(),
                        'nama_barang' => $_POST['nama_barang'],
                        'jumlah' => $_POST['jumlah'],
                        'satuan' => $_POST['satuan'],
                        'user_id' => $this->helper->user('id'),
                    ];

                if ($this->model->ajukan_barang($data) > 0) {
                    Flasher::setFlash('success', 'Berhasil mengajukan barang');
                    $this->helper->redirect(BASEURL . '/belum_ditinjau');
                } else {
                    Flasher::setFlash('danger', 'Gagal membuat pengajuan');
                    $this->helper->redirect(BASEURL . '/ajukan_barang');
                }
            } else {
                $this->helper->redirect(BASEURL);
            }
        } else {
            $this->helper->redirect(BASEURL . "/m4s_sislog/logout.php");
        }
        $this->helper->redirect(BASEURL);
    }
}
