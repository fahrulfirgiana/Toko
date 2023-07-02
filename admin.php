<?php
ob_start();
session_start();

if (!isset($_SESSION['iduser'])) {
    die("<b>Oops!<b> Acces Failed.
    <p>Sistem Logout. Anda harus melakukan Login
    kembali.</p>
    <button type='button'
    onclick=location.href='./'>Back</button>");
}
if ($_SESSION['namauser'] != "admin") {
    die("<b>Oops!<b> Acces Failed.
    <p>Anda bukan Admin.</p>
    <button type='button'
    onclick=location.href='./'>Back</button>");
}

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
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon&family=Nuosu+SIL&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" href="img/cic2.png" type="image/ico" />

    <title>Teknik Informatika!</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="poi">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-lg">
            <div class="container-fluid">
                <div class="pt">
                    <a class="navbar-brand" href="?page=home"><i class="fa-brands fa-nfc-symbol"></i> PT. Fahrul Dutch.Inc</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="oi">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" class="menu" aria-current="page" href="?page=home"><i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="menu" href="?page=tbl_barang">Barang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="menu" href="?page=tbl_pemasok">Pemasok</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="menu" href="?page=tbl_kategori">Kategori</a>
                            </li>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['nm']   ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"></h1>

        <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        switch ($queries['page']) {
            case 'tbl_barang':
                include 'tblbarang.php';
                break;
            case 'tambah':
                include 'tambah.php';
                break;
            case 'tbl_pemasok':
                include 'tblpemasok.php';
                break;
            case 'tambahpemasok':
                include  'tambahpemasok.php';
                break;
            case 'tbl_kategori':
                include 'tblkategori.php';
                break;
            case 'tambahkategori':
                include 'tambahkategori.php';
                break;
            case 'logout':
                include 'logout.php';
                break;
            default:
                #code...
                include 'home.php';
                break;
        }
        ?>

    </div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>