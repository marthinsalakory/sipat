<?php

// BaseURL
$BASEURL = "http://localhost/sipat";

include "function.php";


if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $active = 1;

    // cek konfirmasi password
    $konfirmasi_password = "";
    if ($password != $password2) {
        $konfirmasi_password = "<li>Confirm password does not match</li>";
        $error_pw = true;
    }

    // cek apakah email sudah pernah digunakan atau belum
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    $pesan_email = "";
    if (mysqli_fetch_assoc($result)) {
        $pesan_email = "<li>E-mail has been registered</li>";
        $error_email = true;
    }

    // kembalikan kesalahan error
    if (isset($error_pw) || isset($error_email)) {
        set_pesan_login($konfirmasi_password . " " . $pesan_email, "danger");
        header("Location: register.php");
        exit;
    }

    // query insert data ke tabel users
    $query = "INSERT INTO users
                    VALUES
                    ('', '$email', '$username', '$nama_lengkap', '$password', '$active')
                    ";
    mysqli_query($conn, $query);


    $users_rows =  mysqli_affected_rows($conn);

    // insert data auth_groups_users
    $groups_id = 2;
    $users_id = query("SELECT * FROM users ORDER BY id DESC LIMIT 1")[0]['id'];

    // query insert data ke tabel auth_groups_users
    $query = "INSERT INTO auth_groups_users
                    VALUES
                    ('$groups_id', '$users_id')
                    ";
    mysqli_query($conn, $query);


    $auth_groups_users_rows =  mysqli_affected_rows($conn);

    if ($users_rows > 0 && $auth_groups_users_rows > 0) {
        $berhasil = "Successfully registered!";
        set_pesan_login($berhasil, "success");
        header("Location: login.php");
        exit;
    }

    header("Location: register.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $resultu = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $resulti = mysqli_query($conn, "SELECT * FROM users WHERE email = '$username'");
    if (mysqli_num_rows($resultu) === 1) {
        // cek password
        $pass = query("SELECT * FROM users WHERE username = '$username'")[0];
        if ($password == $pass['password']) {
            $_SESSION["login"] = true;
            $_SESSION["user"] = $pass['id'];
            header("Location: beranda.php");
            exit;
        }
    } elseif (mysqli_num_rows($resulti) === 1) {
        // cek password
        $pass = query("SELECT * FROM users WHERE email = '$username'")[0];
        if ($password == $pass['password']) {
            $_SESSION["login"] = true;
            $_SESSION["user"] = $pass['id'];
            header("Location: beranda.php");
            exit;
        }
    }

    $pesan = "<li>Your username, email or password is wrong</li>";
    set_pesan_login($pesan, "danger");
    header("Location: login.php");
    exit;
}
