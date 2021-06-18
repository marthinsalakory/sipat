<?php

class Login extends Controller
{

    function __construct()
    {
        $this->helper = new Helper;
        // $this->model = $this->model('loginModel');
        $this->db = new Database;
        // $this->conn = $this->db->conn;
    }

    public function index()
    {
        if (isset($_SESSION['login']) || isset($_SESSION['user'])) header("Location: " . BASEURL . "/dashboard");
        $data =
            [
                'title' => 'Login',
                'dashboard' => 'active',

            ];
        $this->view('login/index', $data);
    }

    public function login()
    {
        if (isset($_SESSION['login']) || isset($_SESSION['user'])) header("Location: " . BASEURL . "/dashboard");
        if (isset($_POST['login'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $username = preg_replace("/[^a-zA-Z0-9,. ]/", "", $username);
            $password = preg_replace("/[^a-zA-Z0-9,. ]/", "", $password);

            $resultu = $this->db->query("SELECT * FROM users WHERE username = :username");
            $resultu = $this->db->bind('username', $username);
            $resultu = $this->db->count();
            $resulti = $this->db->query("SELECT * FROM users WHERE email = :email");
            $resulti = $this->db->bind('email', $username);
            $resulti = $this->db->count();
            if ($resultu === 1) {
                // cek password
                $pass = $this->db->query("SELECT * FROM users WHERE username = :username");
                $pass = $this->db->bind('username', $username);
                $pass = $this->db->single();
                if (password_verify($password, $pass['password'])) {
                    $_SESSION["login"] = true;
                    $_SESSION["user"] = $pass['id'];
                    header("Location: " . BASEURL . "/dashboard");
                    exit;
                }
            } elseif ($resulti === 1) {
                // cek password
                $pass = $this->db->query("SELECT * FROM users WHERE email = :email");
                $pass = $this->db->bind('email', $username)[0];
                $pass = $this->db->single();
                if (password_verify($password, $pass['password'])) {
                    $_SESSION["login"] = true;
                    $_SESSION["user"] = $pass['id'];
                    header("Location: " . BASEURL . "/dashboard");
                    exit;
                }
            }

            // $pesan = "<li>Your username, email or password is wrong</li>";
            // set_pesan_login($pesan, "danger");
            header("Location: " . BASEURL);
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        unset($_SESSION['user']);

        header("Location: " . BASEURL);
        exit;
    }
}
