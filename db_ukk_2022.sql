-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 08:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukk_2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `no_kamar`, `foto`) VALUES
(13, 1, '281-Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_umum`
--

CREATE TABLE `tb_fasilitas_umum` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fasilitas_umum`
--

INSERT INTO `tb_fasilitas_umum` (`id`, `nama_fasilitas`, `gambar`) VALUES
(9, 'Kolam Renang', '639-swimming-pool.jpg'),
(10, 'Ruangan GYM', '313-gym-room.jpg'),
(11, 'Lapangan Golf', '951-golf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `tipe`, `jumlah`, `harga`, `gambar`, `keterangan`) VALUES
(10, '', 23, 500000, '986-hotel-room1.jpg', 'Full AC'),
(15, '', 2, 500000, '162-hotel-room2.jpg', 'Full AC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('resepsionis','admin','tamu','') NOT NULL,
  `no_hp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`, `no_hp`) VALUES
(4, 'jedidta', 'jedidta', '123123', 'resepsionis', 1),
(6, 'menghadeh', 'menghadeh', '123123', 'admin', 344);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id` int(11) NOT NULL,
  `nama_tamu` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jen_kel` enum('P','L') NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`id`, `nama_tamu`, `username`, `password`, `jen_kel`, `email`, `no_hp`) VALUES
(1, 'user', 'user', 'user', 'P', 'user', 8888),
(2, '', '', '', '', '', 0),
(4, 'hadeh', 'hadeh', 'hadeh', 'L', 'adoni.091203@gmail.com', 2147483647),
(5, 'jedidta adoni', 'jedidta', '123123', 'L', 'adoni.091203@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pesanan` int(11) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  `id_tamu` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `jumlah_kamar` int(4) NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pesanan`, `tgl_check_in`, `tgl_check_out`, `id_tamu`, `id_kamar`, `jumlah_kamar`, `status`) VALUES
(5, '2022-05-10', '2022-05-10', 1, 15, 23, '2'),
(6, '2022-05-10', '2022-05-10', 1, 10, 2, '2'),
(7, '2022-05-10', '2022-05-10', 4, 10, 2, '2'),
(8, '2022-05-10', '2022-05-12', 5, 10, 1, '2'),
(9, '2022-05-11', '2022-06-10', 1, 10, 2, '2'),
(10, '2022-05-11', '2022-05-11', 1, 10, 23, '2'),
(11, '2022-05-11', '2022-05-12', 1, 10, 23, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_fasilitas_umum`
--
ALTER TABLE `tb_fasilitas_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_fasilitas_umum`
--
ALTER TABLE `tb_fasilitas_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
