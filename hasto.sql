-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2016 at 06:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasto`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `deskripsi_produk` varchar(500) DEFAULT NULL,
  `kategori_produk` varchar(10) DEFAULT NULL,
  `harga_produk` int(10) DEFAULT NULL,
  `id_toko` int(5) DEFAULT NULL,
  `gambar_produk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `kategori_produk`, `harga_produk`, `id_toko`, `gambar_produk`) VALUES
(26, 'Kentang', 'Kentang kualitas impor dijamin gurih ', 'umbi', 10000, 16, '../img/kentang.jpg'),
(27, 'Anggur Hijau', 'Anggur Hijau organik manis  ', 'buah', 18000, 16, '../img/anggur.jpg'),
(28, 'Bawang Merah', 'Bawang merah lokal ', 'biji', 20000, 16, '../img/bawang merah.jpg'),
(29, 'Beras', 'Beras bramo super', 'biji', 15000, 17, '../img/beras.jpg'),
(30, 'Cabe Rawit', 'Cabe rawit super pedas', 'sayur', 20000, 17, '../img/cabai.jpg'),
(31, 'Durian', 'Durian masak pohon', 'buah', 30000, 17, '../img/durian.jpg'),
(32, 'Beras Merah', 'Beras Merah Organik', 'umbi', 25000, 17, '../img/beras merah.jpg'),
(33, 'Jagung Manis', 'Jagung manis cocok untuk dibuat sayur atau dibakar', 'umbi', 10000, 17, '../img/jagung.jpg'),
(34, 'Jambu Mente', 'Jambu Mente', 'buah', 30000, 17, '../img/jambu mente.jpg'),
(35, 'Jeruk', 'Jeruk manis masak pohon', 'buah', 15000, 18, '../img/jeruk.jpg'),
(36, 'Kangkung', 'Kangkung organik', 'sayur', 3000, 18, '../img/kangkung.jpg'),
(37, 'Beras Organik', 'Beras Organik Tanpa Bahan Kimia', 'biji', 20000, 18, '../img/beras organik.jpg'),
(38, 'Kubis', 'Kubis Organik', 'sayur', 3000, 18, '../img/kubis.jpg'),
(40, 'Kunr', 'Kunir organik', 'umbi', 2000, 19, '../img/kunir.jpg'),
(41, 'Labu', 'Labu Halloween', 'sayur', 8000, 19, '../img/labu.jpg'),
(42, 'Nanas', 'Nanas Organik', 'buah', 9000, 19, '../img/nanas.jpg'),
(43, 'Pare', 'Pare organik', 'sayur', 9000, 19, '../img/pare.jpg'),
(44, 'Pepaya', 'Pepaya masak pohon', 'buah', 5000, 19, '../img/pepaya.jpg'),
(45, 'Petai', 'Pete', 'sayur', 2000, 20, '../img/petai.jpg'),
(46, 'Rambutan ', 'Rambutan binjai', 'buah', 15000, 20, '../img/rambutan.jpg'),
(47, 'Daun Seledri', 'Daun seledri organik', 'sayur', 5000, 20, '../img/seledri.jpg'),
(48, 'Semangka Kotak', 'Semangka Kotak Asli Malang', 'buah', 10000, 20, '../img/semangka kotak.jpg'),
(49, 'Strawberry', 'Strawberry manis', 'buah', 10000, 21, '../img/strawberry.jpg'),
(50, 'Terong', 'Terong Organik', 'sayur', 5000, 21, '../img/terong.jpg'),
(51, 'Tomat Cherry', 'Tomat Cherry Organik', 'sayur', 20000, 21, '../img/tomat cery.jpg'),
(52, 'Tomat', 'Tomat Sayur', 'sayur', 5000, 21, '../img/tomat.jpg'),
(53, 'Wortel', 'Wortel Organik tanpa bahan kimia', 'sayur', 8000, 21, '../img/wortel.jpg'),
(54, 'Cabai Besar', 'Cabai besar kualitas import', 'sayur', 20000, 21, '../img/cabe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(5) NOT NULL,
  `nama_toko` varchar(20) DEFAULT NULL,
  `pemilik_toko` varchar(50) DEFAULT NULL,
  `alamat_toko` varchar(100) DEFAULT NULL,
  `hp_toko` varchar(20) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  `gambar_toko` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `pemilik_toko`, `alamat_toko`, `hp_toko`, `id_user`, `gambar_toko`) VALUES
(16, 'EcoFarm', 'Sugeno', 'Perumahan  Joyogrand G-2', '089728173617', 18, '../img/f.jpg'),
(17, 'Toko Alif', 'Alif Firmansyah', 'Villa Bukit Tidar A-9', '081228173617', 19, '../img/i.jpg'),
(18, 'Toko Ema', 'Emanuel', 'Perumahan Permata Jingga J-9', '081228173625', 20, '../img/w.png'),
(19, 'Bluera', 'Ravika', 'Jl Joyoraharjo no 34', '081291503625', 21, '../img/e.jpg'),
(20, 'Skmart', 'Sulistiyo', 'Jl dewandaru no 5', '087546503625', 22, '../img/sk.png'),
(21, 'Ttoko', 'Ravizal', 'Jl arumba no 21', '081291523625', 23, '../img/t.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(18, 'ecofarm', 'b3d837d736bd9a55e695d331f6e444c4', 2),
(19, 'tokoalif', '329d6c4db5968bf7eb8a02159a6f5d1a', 2),
(20, 'tokoema', 'd063522db32d0065f9a6986ce217f59f', 2),
(21, 'bluera', '680b6b4ab9a35cc0812b67b7bebe356d', 2),
(22, 'skmart', '41a547516e12d0c867aecfc0a98fe3a3', 2),
(23, 'ttoko', 'bbb48314e5e6ee68d2d8bc1364b8599b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `nama_produk` (`nama_produk`),
  ADD KEY `toko_id_toko` (`id_toko`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `user_id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `toko_id_toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `user_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
