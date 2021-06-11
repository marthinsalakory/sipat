<?php

class sipatModel
{
    private $table = 'sipat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function belum_ditinjau($data)
    {

        $tabel = "belum_ditinjau";

        return save("$tabel", "$data");
    }
}
