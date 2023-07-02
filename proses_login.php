<?php
include 'koneksi.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "login") {
    $db->login_user($_POST['username'], $_POST['password']);
} else if ($aksi == "logout") {
    session_start();
    $_SESSION['namauser'] = '';
    unset($_SESSION['namauser']);
    session_unset();
    session_destroy();
    echo "<script language = 'javascript'>
    alert('Logout Berhasil');
    document.location='index.php';
    </script>";
} else {
    echo "Database anda error silahkan login lagi <a href='index.php'> kembali
    Login</a>";
}
