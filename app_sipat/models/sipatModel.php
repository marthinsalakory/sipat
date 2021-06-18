<?php

class sipatModel
{
    // private $table = 'sipat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function users()
    {
        $this->db->query('SELECT * FROM `v_users`');
        return $this->db->resultSet();
    }

    public function tambah_user($data)
    {
        $query = "INSERT INTO users
                    VALUES
                  (
                    :id, :email, :username, :nama_lengkap, :password
                    )";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('id', $data['id']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('password', $data['password']);
        $this->db->count();

        $query = "INSERT INTO auth_groups_users
                    VALUES
                  (
                    :group_id, :user_id
                    )";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('group_id', $data['level']);
        $this->db->bind('user_id', $data['id']);
        return $this->db->count();
    }

    public function hapus_user($id)
    {
        $query = "DELETE FROM users WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubah_users($data)
    {
        $query = "UPDATE users SET
                    email = :email,
                    username = :username,
                    nama_lengkap = :nama_lengkap,
                    password = :password
                  WHERE id = :id";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('email', $data['email']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function role($data)
    {
        // ubah role
        $query = "UPDATE auth_groups_users SET
                    group_id = :group_id,
                    user_id = :user_id
                  WHERE user_id = :user_id";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('group_id', $data['level']);
        $this->db->bind('user_id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function usersById($id)
    {
        $this->db->query('SELECT * FROM v_users WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function Ubah_password($data)
    {
        $query = "UPDATE users SET
                    email = :email,
                    username = :username,
                    nama_lengkap = :nama_lengkap,
                    password = :password
                  WHERE id = :id";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('email', $data['email']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function belum_ditinjau()
    {
        $this->db->query('SELECT * FROM ' . 'belum_ditinjau');
        return $this->db->resultSet();
    }

    public function dalam_proses()
    {
        $this->db->query('SELECT * FROM ' . 'dalam_proses');
        return $this->db->resultSet();
    }

    public function riwayat_pembatalan()
    {
        $this->db->query('SELECT * FROM ' . 'riwayat_pembatalan');
        return $this->db->resultSet();
    }

    public function riwayat_pengajuan()
    {
        $this->db->query('SELECT * FROM ' . 'berhasil_diproses');
        return $this->db->resultSet();
    }

    public function ajukan_barang($data)
    {

        $query = "INSERT INTO belum_ditinjau
                    VALUES
                  (
                    :id, :sub_bagian, :keperluan, :waktu, :nama_barang, :jumlah, :satuan, :user_id
                    )";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('id', $data['id']);
        $this->db->bind('sub_bagian', $data['sub_bagian']);
        $this->db->bind('keperluan', $data['keperluan']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('user_id', $data['user_id']);

        return $this->db->count();
    }

    public function hapus_belum_ditinjau($id)
    {
        $query = "DELETE FROM belum_ditinjau WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function konfirmasi_belum_ditinjau($data)
    {
        // (start tambah data ke tabel riwayat_pembatalan
        $query = "INSERT INTO dalam_proses
                    VALUES
                  (
                    :id, :sub_bagian, :keperluan, :waktu, :nama_barang, :jumlah, :satuan, :user_id, :operator_id
                    )";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('id', $data['id']);
        $this->db->bind('sub_bagian', $data['sub_bagian']);
        $this->db->bind('keperluan', $data['keperluan']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('operator_id', $data['operator_id']);
        $this->db->count();
        //  akhir tambah data ke tabel riwayat_pembatalan)

        // (hapus data dari tabel belum_ditinjau
        $this->db->query("DELETE FROM belum_ditinjau WHERE id = :id");
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        // kembalikan hasil
        return $this->db->rowCount();
        // akhir data dari tabel belum_ditinjau)
    }

    public function batal($data)
    {
        // (start tambah data ke tabel riwayat_pembatalan
        $query = "INSERT INTO riwayat_pembatalan
                    VALUES
                  (
                    :id, :sub_bagian, :keperluan, :waktu, :nama_barang, :jumlah, :satuan, :alasan, :user_id, :operator_id
                    )";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('id', $data['id']);
        $this->db->bind('sub_bagian', $data['sub_bagian']);
        $this->db->bind('keperluan', $data['keperluan']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('alasan', $data['alasan']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('operator_id', $data['operator_id']);
        $this->db->count();
        //  akhir tambah data ke tabel riwayat_pembatalan)

        // (hapus data dari tabel belum_ditinjau
        $this->db->query("DELETE FROM belum_ditinjau WHERE id = :id");
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        // kembalikan hasil
        return $this->db->rowCount();
        // akhir data dari tabel belum_ditinjau)
    }

    public function konfirmasi_akhir($data)
    {
        // (start tambah data ke tabel riwayat_pembatalan
        $query = "INSERT INTO berhasil_diproses
                    VALUES
                  (
                    :id, :sub_bagian, :keperluan, :waktu, :nama_barang, :jumlah, :satuan, :user_id, :operator_id
                    )";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('id', $data['id']);
        $this->db->bind('sub_bagian', $data['sub_bagian']);
        $this->db->bind('keperluan', $data['keperluan']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('operator_id', $data['operator_id']);
        $this->db->count();
        //  akhir tambah data ke tabel riwayat_pembatalan)

        // (hapus data dari tabel belum_ditinjau
        $this->db->query("DELETE FROM dalam_proses WHERE id = :id");
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        // kembalikan hasil
        return $this->db->rowCount();
        // akhir data dari tabel belum_ditinjau)
    }
}
