<?php

class Kelola_users extends Controller
{
    public function __construct()
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
                    'riwayat_pengajuan' => $this->model->users(),
                    'dashboard' => 'active',

                ];
            $this->view('templates/header', $data);
            $this->view('admin/kelola_users', $data);
            $this->view('templates/footer', $data);
        } else if ($this->helper->in_groups('operator') || $this->helper->in_groups('users')) {
            $this->helper->redirect(BASEURL);
            exit;
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }

    public function tambah()
    {
        $this->helper->is_login();
        if ($this->helper->in_groups('admin')) {
            if (isset($_POST['submit'])) {

                if (!$_POST['password']) {
                    Flasher::setFlash('danger', 'Gagal menambahkan pengguna, karena password belum diisi');
                    $this->helper->redirect(BASEURL . '/kelola_users');
                }

                $data =
                    [
                        'id' => uniqid(),
                        'nama_lengkap' => $_POST['nama_lengkap'],
                        'username' => $_POST['username'],
                        'email' => $_POST['email'],
                        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                        'level' => $_POST['level'],
                    ];

                if ($this->model->tambah_user($data) > 0) {
                    Flasher::setFlash('success', 'Berhasil menambahkan 1 pengguna');
                    $this->helper->redirect(BASEURL . '/kelola_users');
                } else {
                    Flasher::setFlash('danger', 'Gagal menambahkan pengguna baru');
                    $this->helper->redirect(BASEURL . '/kelola_users');
                }
            } else {
                $this->helper->redirect(BASEURL . "/kelola_users");
            }
        } else if ($this->helper->in_groups('operator') || $this->helper->in_groups('users')) {
            $this->helper->redirect(BASEURL);
            exit;
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }

    public function ubah()
    {
        $this->helper->is_login();
        if ($this->helper->in_groups('admin')) {
            $d = $this->helper->get_first('users', 'id', $_POST['id']);

            if (!$d) {
                Flasher::setFlash('danger', 'Maaf kemampuan anda masih rendah');
                $this->helper->redirect(BASEURL . "/kelola_users");
            }

            // cek password sama atau tidak
            $password = $d['password'];
            if ($_POST['password'] != '') {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            }

            $data =
                [
                    'id' => $d['id'],
                    'nama_lengkap' => $_POST['nama_lengkap'],
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => $password,
                    'level' => $_POST['level'],
                ];


            if ($this->model->ubah_users($data) > 0) {
                if ($this->model->role($data) > 0) {
                    Flasher::setFlash('success', 'Berhasil mengubah data pengguna dan level pengguna');
                    $this->helper->redirect(BASEURL . '/kelola_users');
                } else {
                    Flasher::setFlash('success', 'Berhasil mengubah data pengguna');
                    $this->helper->redirect(BASEURL . '/kelola_users');
                }
            } else {
                if ($this->model->role($data) > 0) {
                    Flasher::setFlash('success', 'Berhasil mengubah level pengguna');
                    $this->helper->redirect(BASEURL . '/kelola_users');
                } else {
                    Flasher::setFlash('success', 'Gagal mengubah data pengguna dan level pengguna');
                    $this->helper->redirect(BASEURL . '/kelola_users');
                }
            }
        } else if ($this->helper->in_groups('operator') || $this->helper->in_groups('users')) {
            $this->helper->redirect(BASEURL);
            exit;
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }

    public function hapus($key)
    {
        $this->helper->is_login();
        $this->helper->is_login();
        if ($this->helper->in_groups('admin')) {
            if ($this->model->hapus_user($key) > 0) {
                Flasher::setFlash('success', 'Berhasil dihapus');
                $this->helper->redirect(BASEURL . '/kelola_users');
                exit;
            }
        } else if ($this->helper->in_groups('operator') || $this->helper->in_groups('users')) {
            $this->helper->redirect(BASEURL);
            exit;
        } else {
            $this->helper->redirect(LOGOUT);
        }
    }

    public function getubah()
    {
        $this->helper->is_login();
        // echo $this->model->usersById($_POST['id']);
        echo json_encode($this->model->usersById($_POST['id']));
    }
}
