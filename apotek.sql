-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2019 pada 03.42
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` enum('jpg','jpeg','png','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`) VALUES
(8, 'DUM 1.jpg', 0, ''),
(9, 'DUM 2.jpg', 1868896, ''),
(10, 'DUM 2.jpg', 1868896, ''),
(11, 'DUM 3.jpg', 0, ''),
(12, 'DUM 4.jpg', 0, ''),
(13, 'DUM 5.jpg', 0, ''),
(14, 'beef keju1.jpg', 84755, ''),
(15, 'coklat keju.jpg', 94777, ''),
(16, 'COKLAT MESIS.jpg', 1561255, ''),
(17, 'COKLAT.jpg', 1547928, ''),
(18, 'sosiskeju.jpg', 88012, ''),
(19, 'TELUR GULUNG BAKSO.jpg', 41256, ''),
(20, 'TELUR GULUNG SOSIS.jpg', 64645, ''),
(21, 'TELUR GULUNG.jpg', 38879, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `tanggal`, `email`) VALUES
(53, 'AM', 'Asam Mefenamat', '', 15000, 1, 15000, '2019-10-25 09:01:27', '0000-00-00', 'ero@admin.com'),
(52, 'PCTM', 'Paracetamol', '', 12000, 1, 12000, '2019-10-25 09:00:56', '0000-00-00', 'ero@admin.com'),
(45, 'pctm', 'Paracetamol', '', 10000, 1, 10000, '2019-10-24 03:21:28', '0000-00-00', '083845679448'),
(51, 'AMX', 'Amoxillin', '', 20000, 1, 20000, '2019-10-25 09:00:56', '0000-00-00', 'ero@admin.com'),
(50, 'AM', 'Asam Mefenamat', '', 15000, 1, 15000, '2019-10-25 08:01:47', '0000-00-00', '081234567890'),
(54, 'AMX', 'Amoxillin', '', 20000, 1, 20000, '2019-10-25 09:01:27', '0000-00-00', 'ero@admin.com'),
(55, 'PCTM', 'Paracetamol', '', 12000, 1, 12000, '2019-10-25 09:01:27', '0000-00-00', 'ero@admin.com'),
(56, 'ABC', 'ABC', '', 20000, 1, 20000, '2019-11-01 13:58:57', '0000-00-00', 'ero@admin.com'),
(57, 'AMX', 'Amoxillin', '', 20000, 1, 20000, '2019-11-01 13:58:57', '0000-00-00', 'ero@admin.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(45, 'AM', 'Asam Mefenamat', '', 'asam mefenamat.jpg', 8, 15000),
(46, 'AMX', 'Amoxillin', '', 'amoxicin.jpg', 7, 20000),
(47, 'PCTM', 'Paracetamol', '', 'paracetamol.jpg', 98, 12000),
(48, 'ABC', 'ABC', '', 'game.png', 99, 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `phone`, `password`, `type`) VALUES
(18, 'Tita', 'Ruci', 'Semarang', '', 0, 'tita@admin.com', 'tita123', 'admin'),
(19, 'ero', 'wahyu', 'jkl', 'jlk', 16, '081234567890', 'ero123', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`phone`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
