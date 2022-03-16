-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 12:30 PM
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
-- Table structure for table `form_desa`
--

CREATE TABLE `form_desa` (
  `desa` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_desa`
--

INSERT INTO `form_desa` (`desa`, `id`) VALUES
('Pringgasela', 1),
('Pringgasela Selatan', 2),
('Aik Dewa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `form_kecamatan`
--

CREATE TABLE `form_kecamatan` (
  `kecamatan` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_kecamatan`
--

INSERT INTO `form_kecamatan` (`kecamatan`, `id`) VALUES
('Pringgasela', 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_rw`
--

CREATE TABLE `form_rw` (
  `alamat` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_rw`
--

INSERT INTO `form_rw` (`alamat`, `id`) VALUES
('RW RAPI', 1),
('RW AMAN', 2),
('RW DAMAI', 3),
('RW ADIL', 4),
('RW MAKMUR', 5),
('RW SEHATI', 6),
('RW SEPAKAT', 7),
('RW SETIA KAWAN', 8),
('RW SEPONGKOR', 9),
('RW HIKMAH', 10),
('RW KARANG DALEM', 11),
('RW DAYA DESA', 12),
('OTAK REBAN', 13),
('TEMPASAN', 14),
('ORONG GERES', 15),
('KEBON ASIN', 16),
('BUD', 17),
('KEDONDONG DAYA', 18),
('NYELAK', 19),
('KEDONDONG LAUK', 20),
('PANCOR KOPONG', 21);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `create_at`, `update_at`) VALUES
(1, 'Rumah Tangga', '2022-03-14 19:58:49', '2022-03-14 19:58:49'),
(2, 'Bisnis', '2022-03-14 19:58:49', '2022-03-14 19:58:49'),
(3, 'Sosial', '2022-03-14 19:58:49', '2022-03-14 19:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `menu_pembayaran`
--

CREATE TABLE `menu_pembayaran` (
  `harga_air` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `beban` int(10) NOT NULL,
  `pma` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_pembayaran`
--

INSERT INTO `menu_pembayaran` (`harga_air`, `id`, `beban`, `pma`) VALUES
(500, 1, 1500, 500);

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
  `tggl_pemasangan` date NOT NULL,
  `tahun_pemasangan` year(4) NOT NULL DEFAULT current_timestamp(),
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `j_kelamin`, `desa`, `kecamatan`, `rt`, `rw`, `kategori`, `tggl_pemasangan`, `tahun_pemasangan`, `create_at`, `update_at`) VALUES
('PMD-02', 'Muhammad Wasil', 'L', 'Pringgasela', 'Kecamatan Pringgasela', 2, 3, 'std', '2018-02-26', 2018, '2022-02-28 12:11:50', '2022-03-10 14:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_pelanggan` varchar(8) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `meter_awal` int(10) DEFAULT NULL,
  `meter_akhir` int(10) DEFAULT NULL,
  `pemakaian` int(6) DEFAULT NULL,
  `id_petugas` int(5) DEFAULT NULL,
  `total_tagihan` int(10) DEFAULT NULL,
  `bayar` int(6) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pelanggan`, `tahun`, `bulan`, `meter_awal`, `meter_akhir`, `pemakaian`, `id_petugas`, `total_tagihan`, `bayar`, `create_at`, `update_at`) VALUES
(12, 'PMD-02', 2022, 'Januari', 0, 10, 10, NULL, 5000, 5000, '0000-00-00 00:00:00', '2022-03-16 14:55:43'),
(13, 'PMD-02', 2022, 'Februari', 10, 30, 20, NULL, 10000, 10000, '0000-00-00 00:00:00', '2022-03-16 14:56:32'),
(14, 'PMD-02', 2022, 'Maret', 30, 40, 10, NULL, 5000, 0, '0000-00-00 00:00:00', '2022-03-16 16:18:26');

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
-- Indexes for table `form_desa`
--
ALTER TABLE `form_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_kecamatan`
--
ALTER TABLE `form_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_rw`
--
ALTER TABLE `form_rw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu_pembayaran`
--
ALTER TABLE `menu_pembayaran`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `form_desa`
--
ALTER TABLE `form_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form_kecamatan`
--
ALTER TABLE `form_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_rw`
--
ALTER TABLE `form_rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_pembayaran`
--
ALTER TABLE `menu_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
