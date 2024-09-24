<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Pulesari</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/pertemuan13c/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/pertemuan13c/image/logo.jpg">

    <style>
        /* mengatur ukuran header image */
        .header-image {
            width: 100%;
            height: auto;
        }
        /* warna background header */
        .background-costum {
            background-color: #9ec0de;
        }

        /* mengatur agar video youtube  ukurannya sesuai dengan card yang ada */
        .embed-responsive-16by9 {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .embed-responsive-16by9::before {
            content: "";
            display: block;
            padding-top: 56.25%;
        }

        .embed-responsive-item {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }  
        /*    /mengatur agar video youtube  ukurannya sesuai dengan card yang ada */

        /* menghilangkan scroll horizontal di bagian bawah dekat footer */
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header class="background-costum text-center">
        <h1 class="h1">Selamat Datang Di Desa Wisata Pulesari</h1>
        <img src="/pertemuan13c/image/header-img.jpg" alt="Desa Wisata Pulesari" class="header-image">
        <nav class="navbar navbar-expand navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="/pertemuan13c/index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pertemuan13c/view/tambah-pesanan.php">Daftar Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pertemuan13c/view/tampil-pesanan.php">Modifikasi Pesanan</a>
                    </li>
                    <!-- cek user apakah dalam kondisi login atau tidak -->
                    <?php
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    if (isset($_SESSION['login'])) {

                    ?>
                        <ul class="navbar-nav position-absolute top-0 end-0 p-2">
                            <li class="nav-item">
                                <a class="nav-link" href="/pertemuan13c/controllers/proses-logout.php">Logout</a>
                            </li>
                        </ul>
                    <?php } ?>
                    <!-- /cek user apakah dalam kondisi login atau tidak -->
                </ul>
            </div>
        </nav>
    </header>

    <!-- /header -->
</body>

</html>