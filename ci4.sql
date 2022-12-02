-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2022 pada 16.23
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
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_brand` varchar(255) NOT NULL,
  `device_quantity` int(11) NOT NULL,
  `device_status` tinyint(1) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `device`
--

INSERT INTO `device` (`id`, `gambar`, `device_name`, `device_brand`, `device_quantity`, `device_status`, `aksi`, `slug`) VALUES
(1, 'arduino.jpg\r\n\r\n', 'Arduino', 'Genuino', 19, 1, 'Details', 'arduino'),
(2, 'komputer.jpg', 'Komputer', 'Samsung', 20, 1, 'Details', 'komputer'),
(3, 'projector.jpg', 'Projector', 'Canon', 2, 0, 'Details', 'projector');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
