-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 12:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pamdes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kubikasi_kategori`
--

CREATE TABLE `kubikasi_kategori` (
  `id_kubik` int(5) NOT NULL,
  `kategori` varchar(5) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `bpm` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(6) NOT NULL,
  `tahun` year(4) NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tahun`, `update_at`) VALUES
(1, 2018, '2022-03-05 16:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(8) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `j_kelamin` varchar(1) NOT NULL,
  `desa` text NOT NULL,
  `kecamatan` text NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `kategori` varchar(5) NOT NULL,
  `meter_pertama` int(10) NOT NULL,
  `tggl_pemasangan` date NOT NULL,
  `tahun_pemasangan` year(4) NOT NULL DEFAULT current_timestamp(),
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `j_kelamin`, `desa`, `kecamatan`, `rt`, `rw`, `kategori`, `meter_pertama`, `tggl_pemasangan`, `tahun_pemasangan`, `create_at`, `update_at`) VALUES
('PMD-02', 'Muhammad Wasil', 'L', 'Pringgasela', 'Kecamatan Pringgasela', 2, 3, 'std', 10, '2018-02-26', 2018, '2022-02-28 12:11:50', '2022-03-10 14:15:04'),
('PMD-03', 'Ahmad Zainuri', 'L', 'Pringgasela', 'Kecamatan Pringgasela', 1, 3, 'ins', 20, '2018-02-28', 2018, '2022-02-28 20:00:12', '2022-03-08 16:52:18'),
('PMD-04', 'M Hafizul Kheri', 'L', 'Pringgasela', 'Kecamatan Pringgasela', 2, 3, 'kms', 10, '2018-03-15', 2018, '2022-03-03 13:23:16', '2022-03-09 19:23:16'),
('PMD-05', 'jul', 'L', 'Pringgasela', 'Kecamatan Pringgasela', 2, 3, 'std', 10, '2022-03-22', 2022, '2022-03-10 12:41:52', '2022-03-10 12:41:52'),
('PMD-06', 'sarinah', 'P', 'Aik Dewa', 'Kecamatan Pringgasela', 2, 3, 'std', 20, '2022-03-17', 2022, '2022-03-10 12:42:31', '2022-03-10 12:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_pelanggan` varchar(8) NOT NULL,
  `tahun` year(4) NOT NULL DEFAULT current_timestamp(),
  `bulan` varchar(20) NOT NULL,
  `beban` int(6) NOT NULL,
  `id_petugas` int(5) NOT NULL,
  `total_tagihan` int(10) NOT NULL,
  `bayar` int(6) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pelanggan`, `tahun`, `bulan`, `beban`, `id_petugas`, `total_tagihan`, `bayar`, `create_at`, `update_at`) VALUES
(1, 'pmd-02', 2018, 'januari', 10, 1, 5000, 5000, '2018-03-03 10:34:53', '2022-03-08 16:52:52'),
(3, 'pmd-03', 2019, 'februairi', 20, 1, 10000, 10000, '2018-03-03 13:43:51', '2022-03-10 17:05:20'),
(5, 'PMD-04', 2022, 'Maret', 20, 0, 10000, 10000, '0000-00-00 00:00:00', '2022-03-10 17:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_petugas` int(5) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_petugas`, `nama_petugas`, `username`, `password`, `is_active`, `create_at`, `update_at`) VALUES
(2, 'Wasil', 'admin', '$2y$10$neBEvKpL4Xk9OM5jd0UvHuKqggei8mpzce7cLXPVxkmGQ7Wqz.Dri', 1, '2022-02-24 13:15:25', '2022-02-24 13:16:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kubikasi_kategori`
--
ALTER TABLE `kubikasi_kategori`
  ADD PRIMARY KEY (`id_kubik`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kubikasi_kategori`
--
ALTER TABLE `kubikasi_kategori`
  MODIFY `id_kubik` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
