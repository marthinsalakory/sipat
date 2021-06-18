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
        $this->helper->is_login();
        if ($this->helper->in_groups('admin')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'dalam_proses' => $this->model->dalam_proses(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/dalam_proses', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('operator')) {
            $data =
                [
                    'title' => 'Permintaan Belum Ditinjau',
                    'dalam_proses' => $this->model->dalam_proses(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('operators/dalam_proses', $data);
            $this->view('templates/footer', $data);
        } elseif ($this->helper->in_groups('user')) {
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
            $this->helper->redirect(BASEURL . "/m4s_sislog/logout.php");
        }
    }

    public function konfirmasi($id)
    {
        $this->helper->is_login();
        if ($this->helper->in_groups('operator')) {
            $this->helper->redirect(BASEURL);
        } elseif ($this->helper->in_groups('user') || $this->helper->in_groups('admin')) {
            $d = $this->helper->get_first('dalam_proses', 'id', $id);

            $data =
                [
                    'id' => $d['id'],
                    'sub_bagian' => $d['sub_bagian'],
                    'keperluan' => $d['keperluan'],
                    'waktu' => $d['waktu'],
                    'nama_barang' => $d['nama_barang'],
                    'jumlah' => $d['jumlah'],
                    'satuan' => $d['satuan'],
                    'user_id' => $d['user_id'],
                    'operator_id' => $d['operator_id'],
                ];

            if ($this->model->konfirmasi_akhir($data) > 0) {
                Flasher::setFlash('success', 'Proses pengajuan selesay');
                $this->helper->redirect(BASEURL . '/riwayat_pengajuan');
            } else {
                $this->helper->redirect(BASEURL . '/belum_ditinjau');
            }
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }
}
