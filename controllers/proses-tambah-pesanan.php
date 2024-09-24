<?php
include '../connection/koneksi.php';

$namaPemesanan = $_POST['namaPemesanan'];
$nomorHp = $_POST['nomorHp'];
$tanggalPesan = $_POST['tanggalPesan'];
$waktuPelaksanaanPerjalanan = $_POST['waktuPelaksanaanPerjalanan'];
$jumlahPeserta = $_POST['jumlahPeserta'];
$penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
$transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
$makan = isset($_POST['makan']) ? 'Y' : 'N';
// $penginapan = $_POST['penginapan'];
// $transportasi = $_POST['transportasi'];
// $makan = $_POST['makan'];
// $hargaPaketPerjalanan = $_POST['hargaPaketPerjalanan'];
// $jumlahTagihan = $_POST['jumlahTagihan'];

$hargaPenginapan = ($penginapan == 'Y') ? 1000000 : 0;
$hargaTransportasi = ($transportasi == 'Y') ? 1200000 : 0;
$hargaServis = ($makan == 'Y') ? 500000 : 0;

$hargaPaketPerjalanan = $hargaPenginapan + $hargaTransportasi + $hargaServis;
$jumlahTagihan = $waktuPelaksanaanPerjalanan * $jumlahPeserta * $hargaPaketPerjalanan;

$query = "INSERT INTO pemesananpaketwisata(namaPemesanan, nomorHp, tanggalPesan, waktuPelaksanaanPerjalanan, penginapan, transportasi, makan, jumlahPeserta, hargaPaketPerjalanan, jumlahTagihan) VALUES ('$namaPemesanan', '$nomorHp', '$tanggalPesan', '$waktuPelaksanaanPerjalanan', '$penginapan', '$transportasi', '$makan', '$jumlahPeserta', '$hargaPaketPerjalanan', '$jumlahTagihan')";
// INSERT INTO `pemesananpaketwisata` (`id`, `namaPemesanan`, `nomorHp`, `tanggalPesan`, `waktuPelaksanaanPerjalanan`, `penginapan`, `transportasi`, `makan`, `jumlahPeserta`, `hargaPaketPerjalanan`, `jumlahTagihan`) VALUES (NULL, '21', '2', '2024-08-08', '2', 'y', 'y', 'y', '2', '1700000', '3400000');
mysqli_query($db, $query);


if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = '../view/tambah-pesanan.php';        
    </script>";
} else {
    echo "Data Gagal Ditambahkan<br>";
    echo mysqli_error($db);
}
