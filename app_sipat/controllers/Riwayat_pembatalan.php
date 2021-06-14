<?php

class Riwayat_pembatalan extends Controller
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
                    'riwayat_pembatalan' => $this->model->riwayat_pembatalan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/riwayat_pembatalan', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'riwayat_pembatalan' => $this->model->riwayat_pembatalan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/riwayat_pembatalan', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('user')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'riwayat_pembatalan' => $this->model->riwayat_pembatalan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('users/riwayat_pembatalan', $data);
            $this->view('templates/footer', $data);
        } else {
            header("Location: " . BASEURL . "/m4s_sislog/logout.php");
        }
    }
}
