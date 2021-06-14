<?php

class Auth extends Controller
{

    function __construct()
    {
        $this->helper = new Helper;
    }

    public function index()
    {
        $data =
            [
                'title' => 'System Permintaan Alat',
                'dashboard' => 'active',

            ];
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer', $data);
    }
}
