<?php

session_start();

// koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sipat';

$conn = new mysqli($servername, $username, $password, $dbname);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// clash untuk pesan login
function set_pesan_login($pesan, $warna)
{
    $_SESSION['flash'] = [
        'pesan' => $pesan,
        'warna'  => $warna
    ];
}

function pesan_login()
{
    if (isset($_SESSION['flash'])) {
        echo '<h5 class="text-center font-weight-bold text-' . $_SESSION['flash']['warna'] . ' mb-4">
                    ' . $_SESSION['flash']['pesan'] . '
                  </h5>';
        unset($_SESSION['flash']);
    }
}

// untuk menampilkan data user saja
function user($key)
{
    $kuy = $_SESSION["user"];
    return query("SELECT * FROM users WHERE id  = $kuy")[0][$key];
}

// untuk menampilkan data user saja
function in_groups($key)
{
    $user_id = user('id');
    $group_id = query("SELECT * FROM auth_groups WHERE name  = '$key'")[0]['id'];
    $result = query("SELECT * FROM auth_groups_users WHERE user_id  = '$user_id'")[0]['group_id'];

    if ($result == $group_id) {
        return true;
    }
    return false;
}
