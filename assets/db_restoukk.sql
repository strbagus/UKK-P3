-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2022 at 09:29 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restoukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `level_id` int NOT NULL,
  `level_nama` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`level_id`, `level_nama`) VALUES
(1, 'Administrator'),
(2, 'Waiter'),
(3, 'Kasir'),
(4, 'Owner'),
(5, 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_meja`
--

CREATE TABLE `tb_meja` (
  `meja_no` int NOT NULL,
  `meja_status` enum('Dipakai','Kosong') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_meja`
--

INSERT INTO `tb_meja` (`meja_no`, `meja_status`) VALUES
(1, 'Kosong'),
(2, 'Kosong'),
(3, 'Kosong'),
(4, 'Kosong'),
(5, 'Kosong'),
(6, 'Kosong'),
(7, 'Kosong'),
(8, 'Kosong'),
(9, 'Kosong'),
(10, 'Kosong'),
(11, 'Kosong'),
(12, 'Kosong'),
(13, 'Kosong'),
(14, 'Kosong'),
(15, 'Kosong'),
(16, 'Kosong'),
(17, 'Kosong'),
(18, 'Kosong'),
(19, 'Kosong'),
(20, 'Kosong'),
(21, 'Kosong'),
(22, 'Kosong'),
(23, 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `menu_id` int NOT NULL,
  `menu_nama` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_harga` int NOT NULL,
  `menu_status` enum('Tersedia','Habis') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_tipe` enum('Makanan','Minuman') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu_gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`menu_id`, `menu_nama`, `menu_harga`, `menu_status`, `menu_tipe`, `menu_gambar`) VALUES
(1, 'Nasi Goreng Gila', 15000, 'Tersedia', 'Makanan', ''),
(2, 'Nasi Goreng Setan', 17000, 'Tersedia', 'Makanan', ''),
(3, 'Nasi Goreng Seafood', 19000, 'Tersedia', 'Makanan', ''),
(4, 'Ikan Nila Bakar', 15000, 'Tersedia', 'Makanan', ''),
(5, 'Nasi Putih', 4000, 'Tersedia', 'Makanan', ''),
(6, 'Soda Gembira', 10000, 'Tersedia', 'Minuman', ''),
(7, 'Ikan Nila Asam Manis', 20000, 'Tersedia', 'Makanan', ''),
(8, 'Jeruk Nipis Panas/Es', 5000, 'Tersedia', 'Minuman', ''),
(9, 'Teh Panas/Es', 5000, 'Tersedia', 'Minuman', ''),
(11, 'Bakmi Jawa Goreng', 18000, 'Tersedia', 'Makanan', ''),
(12, 'Jus Alpokat', 9000, 'Tersedia', 'Minuman', ''),
(13, 'Jus Mangga', 8000, 'Tersedia', 'Minuman', ''),
(14, 'Bakmi Jawa Godhog', 17500, 'Habis', 'Makanan', ''),
(18, 'aaa test', 150000, 'Tersedia', 'Makanan', '/assets/img/neofetch.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int NOT NULL,
  `order_transaksi` int NOT NULL,
  `order_menu` int NOT NULL,
  `order_jumlah` int NOT NULL,
  `order_sub_total` int NOT NULL,
  `order_keterangan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pelanggan_id` int NOT NULL,
  `pelanggan_nama` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `user_username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pelanggan_nohp` varchar(18) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`pelanggan_id`, `pelanggan_nama`, `user_username`, `pelanggan_nohp`, `user_password`) VALUES
(1, 'Ananda Aditya', 'adit', '08924496847', '357344787fa3d91429f000604af9667f'),
(2, 'Natha Kuncoro', 'natha', '0879993421', 'b78a97e50286a66ebb44a77336484ee9'),
(3, 'Ipul Yusuf', 'ipul', '08999335212', 'ec59bd496016bb82280c4ee444129d54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` int NOT NULL,
  `transaksi_meja` int NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_total` int NOT NULL,
  `transaksi_pelanggan` int NOT NULL,
  `transaksi_status` enum('Dibayar','Belum') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int NOT NULL,
  `user_username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `user_nama` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `user_nohp` varchar(18) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_password`, `user_nama`, `user_nohp`, `user_level`) VALUES
(1, 'bagus', 'a89407b9014f6f6d9a85f2d5b6a2c118', 'Satrio Bagus', NULL, 1),
(2, 'silvia', 'e77bb954488789ddafb45eb980d5c49f', 'Diva Silvia', NULL, 3),
(5, 'gazi', '82562a9599428103cfa944261b2726fb', 'Gazi Avriza', NULL, 2),
(25, 'natha', 'b78a97e50286a66ebb44a77336484ee9', 'Natha Kuncoro', '082362352', 5),
(26, 'adit', '357344787fa3d91429f000604af9667f', 'Ananda Aditya', '08963432532', 5),
(27, 'ipul', 'ec59bd496016bb82280c4ee444129d54', 'Ipul Yusuf', '08823123552', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tb_meja`
--
ALTER TABLE `tb_meja`
  ADD PRIMARY KEY (`meja_no`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `ordertransaksi` (`order_transaksi`),
  ADD KEY `ordermenu` (`order_menu`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `transaksimeja` (`transaksi_meja`),
  ADD KEY `transaksiuser` (`transaksi_pelanggan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD KEY `roleuser` (`user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `level_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `menu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pelanggan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `ordermenu` FOREIGN KEY (`order_menu`) REFERENCES `tb_menu` (`menu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ordertransaksi` FOREIGN KEY (`order_transaksi`) REFERENCES `tb_transaksi` (`transaksi_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `transaksimeja` FOREIGN KEY (`transaksi_meja`) REFERENCES `tb_meja` (`meja_no`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `transaksiuser` FOREIGN KEY (`transaksi_pelanggan`) REFERENCES `tb_user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `roleuser` FOREIGN KEY (`user_level`) REFERENCES `tb_level` (`level_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
