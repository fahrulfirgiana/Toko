<script>
    window.print()
</script>
<h1 align="center"> Laporan Keuangan</h1>
<hr>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Kategori</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Pemasok</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $db = new database();
        $data_barang = $db->data_barang();
        $no = 1;
        foreach ($data_barang as $row) {
        ?>
            <tr>
                <td scope="row"><?= $no++; ?></td>
                <td><?php echo $row['kode']; ?></td>
                <td><?php echo $row['nama_kategori']; ?></td>
                <td><?php echo $row['nm_barang']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><?php echo $row['nama_pemasok']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<br>
<table align="right" cellspadding="0" cellspacing="0">
    <tr>
        <td>
            <center>Cirebon, <?php echo date("d F Y") ?></center>
        </td>
    </tr>
    <tr>
        <td>
            <center>Pemilik</center>
            <br>
            <br>
            <p>Fahrul Firgiana M.kom S.kom</p>
        </td>
    </tr>
</table>