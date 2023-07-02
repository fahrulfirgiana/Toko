<?php
include 'koneksi.php';
$db = new database();
$data_pemasok = $db->data_pemasok();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/fontt.css">
    <link rel="stylesheet" type="text/css" href="css/troll.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" href="img/cic2.png" type="image/ico" />

    <title>Teknik Informatika!</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="tebel">
        <nav class="navbar bg-light">
            <div>
                <form class="d-flex" method="POST" href="?page=tbl_barang">
                    <input class="form-control me-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <a class="btn btn-primary btn-sm" href="?page=tambahpemasok"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pemasok</th>
                    <th>Nama Pemasok</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th>Nama Pemilik</th>
                    <th>Nomor Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_pemasok as $row) {
                ?>
                    <tr>
                        <td scope="row"><?= $no++; ?></td>
                        <td><?= $row['id_pemasok']; ?></td>
                        <td><?= $row['nama_pemasok']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td><?= $row['nama_pemilik']; ?></td>
                        <td><?= $row['nomor_hp']; ?></td>
                        <td><a href="<?php echo "ubahdatapemasok.php?aksi=update&&id=$row[id_pemasok]" ?>" class="btn btn-sm btn-warning"> <i class="bi bi-pencil-square" data-toggle="tooltip" title="Ubah"></i> Ubah</a>
                            <a href="<?php echo "proses_pemasok.php?aksi=delete&&id=$row[id_pemasok]"; ?>" class="btn btn-sm btn-warning" onclick="javascript: return confirm('Apakah yakin ingin menghapus data ini')"> <i class="fa-solid fa-circle-minus"></i> Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>