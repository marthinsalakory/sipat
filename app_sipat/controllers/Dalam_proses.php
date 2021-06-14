<?php

class Dalam_proses extends Controller
{

    function __construct()
    {
        $this->helper = new Helper;
        $this->model = $this->model('sipatModel');
    }

    public function index()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'dalam_proses' => $this->model->dalam_proses(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/dalam_proses', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'dalam_proses' => $this->model->dalam_proses(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/dalam_proses', $data);
            $this->view('templates/footer', $data);
        } elseif (in_groups('user')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'dalam_proses' => $this->model->dalam_proses(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('users/dalam_proses', $data);
            $this->view('templates/footer', $data);
        } else {
            redirect(BASEURL . "/m4s_sislog/logout.php");
        }
    }

    public function konfirmasi($id)
    {
        if (in_groups('admin')) {
            redirect(BASEURL);
        } elseif (in_groups('operator')) {
            redirect(BASEURL);
        } elseif (in_groups('user')) {
            $d = get_first('dalam_proses', 'id', $id);

            // mengambil data post
            $id = $d['id'];
            $sub_bagian = $d['sub_bagian'];
            $keperluan = $d['keperluan'];
            $waktu = $d['waktu'];
            $nama_barang = $d['nama_barang'];
            $jumlah = $d['jumlah'];
            $satuan = $d['satuan'];
            $user_id = $d['user_id'];
            $operator_id = $d['operator_id'];

            // masukan kedalam variabel
            $data = "'$id', '$sub_bagian', '$keperluan', '$waktu', '$nama_barang', '$jumlah', '$satuan', '$user_id', '$operator_id'";

            $model = $this->model->konfirmasi_akhir($data);

            if ($model > 0) {
                if (delete('dalam_proses', 'id', $id) > 0) :
                    setFlash('success', 'Misi pengajuan anda telah selesay');
                    redirect(BASEURL . '/riwayat_pengajuan');
                endif;
            } else {
                redirect(BASEURL . '/belum_ditinjau');
            }
        } else {
            redirect(LOGOUT);
        }
    }
}
