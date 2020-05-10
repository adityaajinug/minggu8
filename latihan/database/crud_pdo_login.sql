-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 18.43
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_pdo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama`, `alamat`, `logo`) VALUES
(24, 'Aditya Ajie Nugroho', 'Ungaran, Jawa Tengah', '1.png'),
(25, 'M. Bagus Chalil Akbar', 'Semarang, Jawa Tengah', 'img-1.jpg'),
(26, 'Dani Handoko', 'Pati, Jawa Tengah', 'img-4.jpg'),
(27, 'Fandi Okta Nugraha', 'Surabaya, Jawa Timur', 'img-5.jpg'),
(28, 'Haudi Alkatiri', 'Bandung, Jawa Barat', 'img-2.jpg'),
(29, 'Nia Permata', 'Tasikmalaya, Jawa Barat', 'basket.png'),
(30, 'Ferisa Putri', 'Trenggalek, Jawa Timur', 'camera.png'),
(31, 'Raras Muftining', 'Sleman, Yogyakarta', 'laptop.png'),
(32, 'Yandi Sofyan', 'Kutai, Kalimantan Timur', 'img-5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` char(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `hak` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `hak`) VALUES
('admin', '123', 'Aditya Ajie Nugroho', 11),
('dinoheri', '098', 'Dino Heryanto', 1),
('randynugrah', '321', 'Randy Nugraha', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
