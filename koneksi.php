<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $nama_db = "toko";
    var $koneksi = "";


    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->nama_db);
    }
    function data_barang()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $data_barang = mysqli_query(
                $this->koneksi,
                "SELECT tbl_pemasok.*, tbl_kategori.*, tbl_barang.* 
            from tbl_barang
            JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
            JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori 
            where tbl_barang.kode like '%" . $cari . "%' OR tbl_barang.nm_barang like '%" . $cari . "%'"
            );
            while ($row = mysqli_fetch_array($data_barang)) {
                $hasil_barang[] = $row;
            }
            return $hasil_barang;
        } else {
            $data_barang = mysqli_query(
                $this->koneksi,
                "SELECT tbl_pemasok.*, tbl_kategori.*, tbl_barang.* 
        from tbl_barang
        JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
        JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori;"
            );
            while ($row = mysqli_fetch_array($data_barang)) {
                $hasil_barang[] = $row;
            }
            return $hasil_barang;
        }
    }
    function input_barang($kode, $kategori_barang, $pemasok, $nm_barang, $harga, $keterangan)
    {
        mysqli_query($this->koneksi, "insert into tbl_barang values ('$kode','$kategori_barang','$pemasok','$nm_barang','$harga','$keterangan')");
    }

    function login_user($username, $password)
    {
        $pass = mysqli_real_escape_string($this->koneksi, md5($password));
        $un = mysqli_real_escape_string($this->koneksi, $username);
        $data = mysqli_query($this->koneksi, "select * from tbl_user where
        username='$un' and password='$pass'");
        $row = mysqli_num_rows($data);

        if ($row > 0) {
            $cek = mysqli_fetch_assoc($data);
            if ($cek['level'] == "admin") {
                session_start();
                $_SESSION['namauser'] = $cek['username'];
                $_SESSION['passuser'] = $cek['password'];
                $_SESSION['iduser'] = $cek['id_user'];
                $_SESSION['nm'] = $cek['nama'];
                $_SESSION['l'] = $cek['level'];
                echo  "<script language = 'javascript'>
                alert('Berhasil Login Ke Halaman Login');
                document.location='admin.php';
                </script>";
            } else {
                echo  "<script language = 'javascript'>
                alert('Gagal Login');
                document.location='index.php?pesan=Gagallogin';
                </script>";
            }
        }
    }

    //delete data
    function delete_barang($kode)
    {
        $query = mysqli_query($this->koneksi, "Delete from tbl_barang where kode = '$kode'");
    }

    function tampil_update($kode)
    {
        $query = mysqli_query($this->koneksi, "select *from tbl_barang where kode = '$kode'");
        return $query->fetch_array();
    }
    function update_barang($kode, $kategori_barang, $nm_barang, $harga, $pemasok, $keterangan)
    {
        $query = mysqli_query($this->koneksi, "update tbl_barang set id_kategori='$kategori_barang',id_pemasok ='$pemasok',nm_barang = '$nm_barang',harga = '$harga',keterangan ='$keterangan' where kode='$kode'");
    }
    // BAGIAN PEMASOK
    function data_pemasok()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $data_barang = mysqli_query(
                $this->koneksi,
                "SELECT tbl_pemasok.*, tbl_kategori.*, tbl_barang.* 
            from tbl_barang
            JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
            JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori 
            where tbl_pemasok.id_pemasok like '%" . $cari . "%' OR tbl_pemasok.nama_pemasok like '%" . $cari . "%'"
            );
            while ($row = mysqli_fetch_array($data_barang)) {
                $hasil_barang[] = $row;
            }
            return $hasil_barang;
        } else {
            $data_barang = mysqli_query(
                $this->koneksi,
                "SELECT tbl_pemasok.*, tbl_kategori.*, tbl_barang.* 
        from tbl_barang
        JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
        JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori;"
            );
            while ($row = mysqli_fetch_array($data_barang)) {
                $hasil_barang[] = $row;
            }
            return $hasil_barang;
        }
    }
    function input_pemasok($id_pemasok, $nama_pemasok, $alamat, $keterangan, $nama_pemilik, $nomor_hp)
    {
        mysqli_query($this->koneksi, "insert into tbl_pemasok values ('$id_pemasok','$nama_pemasok','$alamat','$keterangan','$nama_pemilik','$nomor_hp')");
    }

    //delete data
    function hapus_barang($id_pemasok)
    {
        $query = mysqli_query($this->koneksi, "Delete from tbl_pemasok where id_pemasok = '$id_pemasok'");
    }

    function muncul_update($id_pemasok)
    {
        $query = mysqli_query($this->koneksi, "select *from tbl_pemasok where id_pemasok = '$id_pemasok'");
        return $query->fetch_array();
    }
    function update_pemasok($id_pemasok, $nama_pemasok, $alamat, $keterangan, $nama_pemilik, $nomor_hp)
    {
        $query = mysqli_query($this->koneksi, "update tbl_pemasok set nama_pemasok='$nama_pemasok',alamat ='$alamat',keterangan = '$keterangan',nama_pemilik = '$nama_pemilik',nomor_hp ='$nomor_hp' where id_pemasok='$id_pemasok'");
    }
    // Bagian Kategori
    function data_kategori()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $data_barang = mysqli_query(
                $this->koneksi,
                "SELECT tbl_pemasok.*, tbl_kategori.*, tbl_barang.* 
            from tbl_barang
            JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
            JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori 
            where tbl_kategori.id_kategori like '%" . $cari . "%' OR tbl_kategori.nama_kategori like '%" . $cari . "%'"
            );
            while ($row = mysqli_fetch_array($data_barang)) {
                $hasil_barang[] = $row;
            }
            return $hasil_barang;
        } else {
            $data_barang = mysqli_query(
                $this->koneksi,
                "SELECT tbl_pemasok.*, tbl_kategori.*, tbl_barang.* 
        from tbl_barang
        JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
        JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori;"
            );
            while ($row = mysqli_fetch_array($data_barang)) {
                $hasil_barang[] = $row;
            }
            return $hasil_barang;
        }
    }
    function input_kategori($id_kategori, $nama_kategori)
    {
        mysqli_query($this->koneksi, "insert into tbl_kategori values ('$id_kategori','$nama_kategori')");
    }

    //delete data
    function hapus_kategori($id_kategori)
    {
        $query = mysqli_query($this->koneksi, "Delete from tbl_kategori where id_kategori = '$id_kategori'");
    }

    function kategori_update($id_kategori)
    {
        $query = mysqli_query($this->koneksi, "select *from tbl_kategori where id_kategori = '$id_kategori'");
        return $query->fetch_array();
    }
    function update_kategori($id_kategori, $nama_kategori)
    {
        $query = mysqli_query($this->koneksi, "update tbl_kategori set nama_kategori='$nama_kategori' where id_kategori='$id_kategori'");
    }
}
