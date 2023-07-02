<?php
include 'koneksi.php';
$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->input_kategori(
        $_POST['id_kategori'],
        $_POST['nama_kategori']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil disimpan');
        document.location='index.php?page=tbl_kategori';
        </script>";
} else if ($aksi == "delete") {
    $id_kategori = $_GET['id'];
    $db->hapus_kategori($id_kategori);
    header('location: index.php?page=tbl_kategori');
} else if ($aksi == "update") {
    $db->update_kategori(
        $_POST['id_kategori'],
        $_POST['nama_kategori']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil diupdate');
        document.location='index.php?page=tbl_kategori';
        </script>";
} else {
    echo "Database anada error silahkan kembali lagi
        <a href='index.php?'>klik disini</a>";
}
