<?php

class Tes extends Controller
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
        $this->view('tes', $data);
    }
}
