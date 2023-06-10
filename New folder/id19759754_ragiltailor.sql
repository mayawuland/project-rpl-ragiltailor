-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jun 2023 pada 13.17
-- Versi server: 10.5.20-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19759754_ragiltailor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_whatsapp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_whatsapp`) VALUES
(2, 'Adit', 'jl dirgantara', '0917'),
(3, 'nanda', 'seturan', '085672'),
(4, 'manda', 'sleman', '089123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjahit`
--

CREATE TABLE `penjahit` (
  `id_penjahit` int(11) NOT NULL,
  `nama_penjahit` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjahit`
--

INSERT INTO `penjahit` (`id_penjahit`, `nama_penjahit`, `password`, `username`) VALUES
(2, 'ragil', 'rgl2', 'rgl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `ket_tindakan` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_ambil` date DEFAULT NULL,
  `status_pesanan` varchar(50) NOT NULL,
  `total_bayar` int(50) DEFAULT NULL,
  `status_bayar` varchar(20) DEFAULT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_penjahit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `ket_tindakan`, `tgl_masuk`, `tgl_ambil`, `status_pesanan`, `total_bayar`, `status_bayar`, `id_pelanggan`, `id_penjahit`) VALUES
(2, 'jahit celana', '2023-06-06', '2023-06-12', 'Dalam Antrian', 50000, 'belum bayar', 2, 2),
(3, 'jahit seragam', '2023-06-05', '0000-00-00', 'Dalam Antrian', 0, '', 3, 2),
(4, 'vermak jeans', '2023-06-01', '0000-00-00', 'Dalam Antrian', 0, '', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `penjahit`
--
ALTER TABLE `penjahit`
  ADD PRIMARY KEY (`id_penjahit`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `penjahit`
--
ALTER TABLE `penjahit`
  MODIFY `id_penjahit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
