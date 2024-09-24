<?php
// Link header
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/controllers/proses-cek-login.php';
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/layout/header.php';

// menampilkan data yang dipilih
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/connection/koneksi.php';
$id = $_GET['id'];

$query = "SELECT * FROM pemesananpaketwisata WHERE id=$id";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);
?>


<!-- content -->
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <!-- form -->
            <h5 class="card-title">Form Pemesanan Paket Wisata</h5>
            <form class="row g-3" id="myForm" action="/pertemuan13c/controllers/proses-edit-pesanan.php" method="post">
                <div class="col-12">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <label for="namaPemesanan" class="form-label">Nama Pemesanan:</label>
                    <input type="text" class="form-control" id="namaPemesanan" name="namaPemesanan" required value="<?= $data['namaPemesanan'] ?>">
                </div>
                <div class="col-12">
                    <label for="nomorHp" class="form-label">Nomor HP/Telp:</label>
                    <input type="text" class="form-control" id="nomorHp" name="nomorHp" required value="<?= $data['nomorHp'] ?>">
                </div>
                <div class="col-12">
                    <label for="tanggalPesan" class="form-label">Tanggal Pesan:</label>
                    <input type="date" class="form-control" id="tanggalPesan" name="tanggalPesan" required value="<?= $data['tanggalPesan'] ?>">
                </div>
                <div class="col-12">
                    <label for="waktuPelaksanaanPerjalanan" class="form-label">Waktu Pelaksanaan Perjalanan:</label>
                    <input type="number" class="form-control" id="waktuPelaksanaanPerjalanan" name="waktuPelaksanaanPerjalanan" required value="<?= $data['waktuPelaksanaanPerjalanan'] ?>">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Pelayanan Paket Perjalanan:</label>
                    <br>
                    <label class="form-label" for="penginapan">Penginapan (Rp1.000.000):</label>
                    <br>
                </div>
                <div class="col-md-6">
                    <br>
                    <input class="form-check-input" type="checkbox" name="penginapan"  id="penginapan" <?= $data['penginapan'] == 'Y' ? 'checked' : '' ?>>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="transportasi">Transportasi (Rp1.200.000):</label>
                    <br>
                </div>
                <div class="col-md-6">
                    <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" <?= $data['transportasi'] == 'Y' ? 'checked' : '' ?>>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="makan">Servis/Makan (Rp500.000):</label>    
                </div>
                <div class="col-md-6">
                    <input class="form-check-input" type="checkbox" name="makan" id="makan" <?= $data['makan'] == 'Y' ? 'checked' : '' ?>>
                </div>
                <div class="col-12">
                    <label for="jumlahPeserta" class="form-label">Jumlah Peserta:</label>
                    <input type="number" class="form-control" id="jumlahPeserta" name="jumlahPeserta" value="<?= $data['jumlahPeserta'] ?>">
                </div>
                <div class="col-12">
                    <label for="hargaPaketPerjalanan" class="form-label">Harga Paket Perjalanan:</label>
                    <input type="text" class="form-control" id="hargaPaketPerjalanan" name="hargaPaketPerjalanan" readonly value="<?= $data['hargaPaketPerjalanan'] ?>">
                </div>
                <div class="col-12">
                    <label for="jumlahTagihan" class="form-label">Jumlah Tagihan:</label>
                    <input type="text" class="form-control" id="jumlahTagihan" name="jumlahTagihan" readonly value="<?= $data['jumlahTagihan'] ?>">
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <!-- <input type="button" id="hitungTotal" class="btn btn-primary" value="Hitung"> -->
                    <button type="button" class="btn btn-primary" id="hitungBtn">Hitung</button>
                    <input type="button" id="resetButton" onclick="myFunction()" class="btn btn-danger" value="Reset">
                </div>
            </form>
            <!-- /form -->
        </div>
    </div>
</div>

<!-- scrip jquery dan java script -->
<script src="/pertemuan13c/jquery/jquery-3.7.1.min.js"></script>
<script>
    // function menghitung total tagihan dan harga paket perjalanan
    $(document).ready(function () {
        $('#hitungBtn').click(function () {
            var penginapan = $("#penginapan").is(':checked') ? 1000000 : 0;
            var transportasi = $("#transportasi").is(':checked') ? 1200000 : 0;
            var makan = $("#makan").is(':checked') ? 500000 : 0;
            var waktuPelaksanaanPerjalanan = parseInt($("#waktuPelaksanaanPerjalanan").val()) || 0;
            var jumlahPeserta = parseInt($("#jumlahPeserta").val()) || 0;

            var hargaPaketPerjalanan = penginapan + transportasi + makan;
            var jumlahTagihan = waktuPelaksanaanPerjalanan * jumlahPeserta * hargaPaketPerjalanan;

            $("#hargaPaketPerjalanan").val(hargaPaketPerjalanan);
            $("#jumlahTagihan").val(jumlahTagihan);
        });
    });

    // function reset tombol terbaru
    $('#resetButton').click(function() {
        // Mengosongkan setiap field
        $('#myForm').find('input[type="text"], input[type="number"], input[type="date"]').val('');
        $('#myForm').find('input[type="checkbox"]').prop('checked', false);
    });


 
</script>
<!-- /scrip jquery dan java script -->

<!-- /content -->

<!-- link footer -->
<?php
include $_SERVER['DOCUMENT_ROOT'].'/pertemuan13c/layout/footer.php';
?>