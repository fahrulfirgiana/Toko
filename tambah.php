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
    <link rel="stylesheet" type="text/css" href="css/teks.css">
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
    <div class="container">
        <div class=tol>
            <br>
            <h2>Input Data Barang Toko</h2>
            <br>
        </div>
        <form method="POST" action="<?php echo "proses_barang.php?aksi=tambah"; ?>">
            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="input" class="form-control" id="" name="kode" value="<?php echo date("Ymd") . rand(1, 100) ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori Barang</label>
                <input type="input" class="form-control" id="" name="id_kategori">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="input" class="form-control" id="" name="nm_barang">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Barang</label>
                <input type="input" class="form-control" id="" name="harga">
            </div>
            <div class="mb-3">
                <label class="form-label">Pemasok Barang</label>
                <input type="input" class="form-control" id="" name="id_pemasok">
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" id="" rows="3" name="keterangan"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
                <input type="reset" class="btn btn-secondary" value="Reset">
            </div>
        </form>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>