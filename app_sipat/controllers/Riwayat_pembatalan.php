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
        $this->helper->is_login();
        if ($this->helper->in_groups('admin')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'riwayat_pembatalan' => $this->model->riwayat_pembatalan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/riwayat_pembatalan', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'riwayat_pembatalan' => $this->model->riwayat_pembatalan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/riwayat_pembatalan', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('user')) {
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
            $this->helper->redirect(BASEURL . "/m4s_sislog/logout.php");
        }
    }
}
