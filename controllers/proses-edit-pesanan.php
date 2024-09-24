<?php
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/controllers/proses-cek-login.php';
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/connection/koneksi.php';

$id = $_POST['id'];
$namaPemesanan = $_POST['namaPemesanan'];
$nomorHp = $_POST['nomorHp'];
$tanggalPesan = $_POST['tanggalPesan'];
$waktuPelaksanaanPerjalanan = $_POST['waktuPelaksanaanPerjalanan'];
$jumlahPeserta = $_POST['jumlahPeserta'];
$penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
$transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
$makan = isset($_POST['makan']) ? 'Y' : 'N';
// $penginapan = $_POST['penginapanValue'];
// $transportasi = $_POST['transportasiValue'];
// $makan = $_POST['servisMakanValue'];
// $hargaPaketPerjalanan = $_POST['hargaPaketPerjalanan'];
// $jumlahTagihan = $_POST['jumlahTagihan'];

$hargaPenginapan = ($penginapan == 'Y') ? 1000000 : 0;
$hargaTransportasi = ($transportasi == 'Y') ? 1200000 : 0;
$hargaServis = ($makan == 'Y') ? 500000 : 0;

$hargaPaketPerjalanan = $hargaPenginapan + $hargaTransportasi + $hargaServis;
$jumlahTagihan = $waktuPelaksanaanPerjalanan * $jumlahPeserta * $hargaPaketPerjalanan;



$query = "UPDATE pemesananpaketwisata SET namaPemesanan = '$namaPemesanan', nomorHp = '$nomorHp', tanggalPesan = '$tanggalPesan', waktuPelaksanaanPerjalanan = '$waktuPelaksanaanPerjalanan', penginapan = '$penginapan', transportasi = '$transportasi', makan = '$makan', jumlahPeserta = '$jumlahPeserta',hargaPaketPerjalanan = '$hargaPaketPerjalanan' , jumlahTagihan = '$jumlahTagihan' WHERE id = $id";

// Debugging: Lihat query yang dijalankan
// echo "Query: " . $query . "<br>";


mysqli_query($db, $query);

// var_dump($_POST);
// die;
if (mysqli_errno($db) == 0) {
    if (mysqli_affected_rows($db) > 0) {
        echo "<script>
        alert('Data Berhasil Diupdate');
        document.location.href = '/pertemuan13c/view/tampil-pesanan.php';
        </script>";
    } else {
        echo "<script>
        alert('Tidak ada data yang diupdate karena tidak ada perubahan');
        document.location.href = '/pertemuan13c/view/tampil-pesanan.php';
        </script>";
    }
} else {
    echo "Data Gagal Diupdate <br>";
    echo mysqli_error($db);
}

