<?php

class Logout
{
    public function index()
    {
        unset($_SESSION['login']);
        unset($_SESSION['user']);

        header("Location: " . BASEURL);
        exit;
    }
}
