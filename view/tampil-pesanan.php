<?php
// Link header
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/layout/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/controllers/proses-cek-login.php';

?>


<!-- content -->
<h4 class="h4 mt-4">Daftar Pesanan</h4>
<table class="table table-striped table-bordered mb-4">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Phone</th>
            <th>Jumlah Peserta</th>
            <th>Jumlah Hari</th>
            <th>Akomodasi</th>
            <th>Transportasi</th>
            <th>Service/Makanan</th>
            <th>Harga Paket</th>
            <th>Total Tagihan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/connection/koneksi.php';
        $data = mysqli_query($db, "SELECT * FROM pemesananpaketwisata");
        while ($d = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?php echo $d['namaPemesanan']; ?></td>
                <td><?php echo $d['nomorHp']; ?></td>
                <td><?php echo $d['jumlahPeserta']; ?></td>
                <td><?php echo $d['waktuPelaksanaanPerjalanan']; ?></td>
                <td><?php echo $d['penginapan']; ?></td>
                <td><?php echo $d['transportasi']; ?></td>
                <td><?php echo $d['makan']; ?></td>
                 <td><?= number_format($d['hargaPaketPerjalanan'], 0, ',', '.');  ?></td>
                <td><?= number_format($d['jumlahTagihan'], 0, ',', '.');  ?></td> 
                <td>
                    <a href="/pertemuan13c/view/edit-pesanan.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="/pertemuan13c/controllers/proses-hapus-pesanan.php?id=<?php echo $d['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<!-- /content -->

<!-- link footer -->
<?php
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/layout/footer.php';
?>