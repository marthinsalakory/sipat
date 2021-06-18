<?php

class Ubah_password extends Controller
{
    public function __construct()
    {
        $this->helper = new Helper;
        $this->model = $this->model('sipatModel');
    }

    public function index()
    {
        if (isset($_POST['submit'])) {

            // Cek apakah sudah diisi atau belum
            if (!$_POST['password_awal']) {
                Flasher::setFlash('danger', 'Gagal mengubah password, karena password awal belum diisi');
                $this->helper->redirect(BASEURL);
            } else if (!$_POST['password']) {
                Flasher::setFlash('danger', 'Gagal mengubah password, karena password baru belum diisi');
                $this->helper->redirect(BASEURL);
            } else if (!$_POST['password2']) {
                Flasher::setFlash('danger', 'Gagal mengubah password, karena konfirmasi password baru belum diisi');
                $this->helper->redirect(BASEURL);
            }

            // cek password lama benar atau tidak
            $d = $this->helper->get_first('users', 'id', $this->helper->user('id'));
            if (!password_verify($_POST['password_awal'], $d['password'])) {
                Flasher::setFlash('danger', 'Gagal mengubah password, karena password awal salah');
                $this->helper->redirect(BASEURL);
            }

            // cek password konfirmasi password
            if ($_POST['password'] != $_POST['password2']) {
                Flasher::setFlash('danger', 'Gagal mengubah password, karena konfirmasi password tidak sesuai');
                $this->helper->redirect(BASEURL);
            }


            $data =
                [
                    'id' => $this->helper->user('id'),
                    'nama_lengkap' => $this->helper->user('nama_lengkap'),
                    'username' => $this->helper->user('username'),
                    'email' => $this->helper->user('email'),
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                ];

            if ($this->model->Ubah_password($data) > 0) {
                Flasher::setFlash('success', 'Berhasil mengubah password');
                $this->helper->redirect(BASEURL);
            } else {
                Flasher::setFlash('danger', 'Gagal mengubah password');
                $this->helper->redirect(BASEURL);
            }
        }
    }
}
