-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2024 pada 15.36
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesananpaketwisata`
--

CREATE TABLE `pemesananpaketwisata` (
  `id` int(11) NOT NULL,
  `namaPemesanan` varchar(100) NOT NULL,
  `nomorHp` varchar(13) NOT NULL,
  `tanggalPesan` date NOT NULL,
  `waktuPelaksanaanPerjalanan` int(10) NOT NULL,
  `penginapan` char(1) NOT NULL,
  `transportasi` char(1) NOT NULL,
  `makan` char(1) NOT NULL,
  `jumlahPeserta` int(10) NOT NULL,
  `hargaPaketPerjalanan` varchar(100) NOT NULL,
  `jumlahTagihan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesananpaketwisata`
--

INSERT INTO `pemesananpaketwisata` (`id`, `namaPemesanan`, `nomorHp`, `tanggalPesan`, `waktuPelaksanaanPerjalanan`, `penginapan`, `transportasi`, `makan`, `jumlahPeserta`, `hargaPaketPerjalanan`, `jumlahTagihan`) VALUES
(13, 'Agus Sutarman', '087789876545', '2024-08-07', 1, 'Y', 'Y', 'Y', 2, '2.700.000', '5.400.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '$2y$10$aVCntcWm.khBSl0VQFNlS.GUWJLUJ.gs4glU3pjYLgIjC4FpllsGy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesananpaketwisata`
--
ALTER TABLE `pemesananpaketwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesananpaketwisata`
--
ALTER TABLE `pemesananpaketwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
