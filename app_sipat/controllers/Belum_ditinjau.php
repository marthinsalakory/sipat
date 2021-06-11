<?php

class Belum_ditinjau extends Controller
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
                    'title' => 'Permintaan Belum Ditinjau',
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('user')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('users/belum_ditinjau', $data);
            $this->view('templates/footer', $data);
        } else {
            header("Location: " . BASEURL . "/m4s_sislog/logout.php");
        }
    }
}
