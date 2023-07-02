<?php
include 'koneksi.php';
$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambahpemasok") {
    $db->input_pemasok(
        $_POST['id_pemasok'],
        $_POST['nama_pemasok'],
        $_POST['alamat'],
        $_POST['keterangan'],
        $_POST['nama_pemilik'],
        $_POST['nomor_hp']
    );
    echo "<script language = 'JavaScript'>
        alert('Data Berhasil disimpan');
        document.location='index.php?page=tbl_pemasok';
        </script>";
} else if ($aksi == "delete") {
    $id_pemasok = $_GET['id'];
    $db->hapus_barang($id_pemasok);
    header('location: index.php?page=tbl_pemasok');
} else if ($aksi == "update") {
    $db->update_pemasok(
        $_POST['id_pemasok'],
        $_POST['nama_pemasok'],
        $_POST['alamat'],
        $_POST['keterangan'],
        $_POST['nama_pemilik'],
        $_POST['nomor_hp']
    );
    echo "<script language = 'JavaScript'>
    alert('Data Berhasil diubah');
    document.location='index.php?page=tbl_pemasok';
    </script>";
} else {
    echo "Database anada error silahkan kembali lagi
        <a href='index.php?'>klik disini</a>";
}
