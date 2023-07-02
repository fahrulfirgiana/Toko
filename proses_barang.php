<?php
include 'koneksi.php';
$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->input_barang(
        $_POST['kode'],
        $_POST['id_kategori'],
        $_POST['nm_barang'],
        $_POST['harga'],
        $_POST['id_pemasok'],
        $_POST['keterangan']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil disimpan');
        document.location='index.php?page=tbl_barang';
        </script>";
} else if ($aksi == "delete") {
    $kode = $_GET['id'];
    $db->delete_barang($kode);
    header('location: index.php?page=tbl_barang');
} else if ($aksi == "update") {
    $db->update_barang(
        $_POST['kode'],
        $_POST['id_kategori'],
        $_POST['nm_barang'],
        $_POST['harga'],
        $_POST['id_pemasok'],
        $_POST['keterangan']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil diupdate');
        document.location='index.php?page=tbl_barang';
        </script>";
} else {
    echo "Database anada error silahkan kembali lagi
        <a href='index.php?'>klik disini</a>";
}
