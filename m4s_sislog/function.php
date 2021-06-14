<?php

session_start();

// koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sipat';

$conn = new mysqli($servername, $username, $password, $dbname);

function save($tabel, $data)
{
    global $conn;
    $query = "INSERT INTO $tabel
                VALUES
                ($data)
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);;
}

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

// untuk set flash
function setFlash($warna, $pesan)
{
    $_SESSION['flash'] = [
        'pesan' => $pesan,
        'warna'  => $warna
    ];
}

// untuk menampilakan flash
function flash()
{
    if (isset($_SESSION['flash'])) {
        echo '<div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="alert alert-danger background-' . $_SESSION['flash']["warna"] . '">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="icofont icofont-close-line-circled text-white"></i>
                        </button>
                        <code class="col-xl-11 text-center">' . $_SESSION['flash']['pesan'] . '</code>
                    </div>
                </div>';
        unset($_SESSION['flash']);
    }
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

function delete($tabel, $key, $id)
{;
    global $conn;
    mysqli_query($conn, "DELETE FROM $tabel WHERE $key = '$id'");

    return mysqli_affected_rows($conn);
}

function get_all($key)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM $key");
}

function get_first($tabel, $key, $data)
{
    return  query("SELECT * FROM $tabel WHERE $key = '$data'")[0];
}

function redirect($url)
{
    header("Location: " . $url);
    exit;
}

// untuk var_dump tanpa mengakhiri program
function d($key)
{
    var_dump($key);
}

// untuk var_dump selanjutnya diakhiri program
function dd($key)
{
    var_dump($key);
    die;
}
