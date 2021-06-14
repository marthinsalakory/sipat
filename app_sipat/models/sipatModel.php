<?php

class sipatModel
{
    private $table = 'sipat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function belum_ditinjau()
    {
        $this->db->query('SELECT * FROM ' . 'belum_ditinjau');
        return $this->db->resultSet();
        // return get_all('belum_ditinjau');
    }

    public function dalam_proses()
    {
        $this->db->query('SELECT * FROM ' . 'dalam_proses');
        return $this->db->resultSet();
        // return get_all('belum_ditinjau');
    }

    public function riwayat_pembatalan()
    {
        $this->db->query('SELECT * FROM ' . 'riwayat_pembatalan');
        return $this->db->resultSet();
        // return get_all('belum_ditinjau');
    }

    public function riwayat_pengajuan()
    {
        $this->db->query('SELECT * FROM ' . 'berhasil_diproses');
        return $this->db->resultSet();
        // return get_all('belum_ditinjau');
    }

    public function ajukan_barang($data)
    {

        $tabel = "belum_ditinjau";

        return save("$tabel", "$data");
    }

    public function hapus_belum_ditinjau($id)
    {
        $tabel = "belum_ditinjau";

        return delete($tabel, 'id', $id);
    }

    public function konfirmasi_belum_ditinjau($data)
    {
        $tabel = "dalam_proses";

        return save("$tabel", "$data");
    }

    public function batal($data)
    {
        $tabel = "riwayat_pembatalan";

        return save("$tabel", "$data");
    }

    public function konfirmasi_akhir($data)
    {
        $tabel = "berhasil_diproses";

        return save("$tabel", "$data");
    }
}
