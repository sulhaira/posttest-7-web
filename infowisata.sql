-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2022 pada 16.32
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infowisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nama_hotel` varchar(25) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id`, `nama_hotel`, `harga`, `no_hp`, `alamat`) VALUES
(2, 'hera', '12', '081354096548', 'jl. pramuka 15,'),
(3, 'senyiur', '12', '081354096548', 'jl. pramuka 15, sempaja selatan, samarinda utara, '),
(5, 'Mesra', '4-10', '8129313', 'jl, batu bara RT 009, kab kutai timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_hotel`
--

CREATE TABLE `nama_hotel` (
  `id` int(11) NOT NULL,
  `nama_hotel` varchar(25) NOT NULL,
  `jenis_kamar` varchar(20) NOT NULL,
  `layanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_hotel` (`nama_hotel`);

--
-- Indeks untuk tabel `nama_hotel`
--
ALTER TABLE `nama_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_hotel` (`nama_hotel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nama_hotel`
--
ALTER TABLE `nama_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nama_hotel`
--
ALTER TABLE `nama_hotel`
  ADD CONSTRAINT `nama_hotel_ibfk_1` FOREIGN KEY (`nama_hotel`) REFERENCES `hotel` (`nama_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
