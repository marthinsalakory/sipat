<?php

class Tes extends Controller
{

    function __construct()
    {
        $this->helper = new Helper;
    }

    public function index()
    {
        var_dump($_SESSION);
        die;
    }
}
