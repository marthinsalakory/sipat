<?php

class Riwayat_pengajuan extends Controller
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
                    'riwayat_pengajuan' => $this->model->riwayat_pengajuan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/riwayat_pengajuan', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'riwayat_pengajuan' => $this->model->riwayat_pengajuan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/riwayat_pengajuan', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('user')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'riwayat_pengajuan' => $this->model->riwayat_pengajuan(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('users/riwayat_pengajuan', $data);
            $this->view('templates/footer', $data);
        } else {
            $this->helper->redirect(BASEURL . "/m4s_sislog/logout.php");
        }
    }
}
