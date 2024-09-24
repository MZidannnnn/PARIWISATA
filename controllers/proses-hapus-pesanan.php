<?php
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/controllers/proses-cek-login.php';
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/connection/koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM pemesananpaketwisata WHERE id = $id";

mysqli_query($db, $query);

if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href='/pertemuan13c/view/tampil-pesanan.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus');
    </script>";
    echo mysqli_error($db);
}
