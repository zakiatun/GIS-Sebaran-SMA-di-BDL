-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 12:52 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `smagis`
--

CREATE TABLE `smagis` (
  `id_sekolah` int(8) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL,
  `akreditas` varchar(10) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `luas` varchar(20) NOT NULL,
  `jumlah_guru` int(20) NOT NULL,
  `jumlah_siswa` int(20) NOT NULL,
  `fasilitas` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smagis`
--

INSERT INTO `smagis` (`id_sekolah`, `nama_sekolah`, `status`, `akreditas`, `website`, `no_hp`, `alamat`, `provinsi`, `luas`, `jumlah_guru`, `jumlah_siswa`, `fasilitas`, `latitude`, `longitude`) VALUES
(1, 'SMAN 1 BANDAR LAMPUNG', 'Negeri', 'A', 'http://smansa-bdl.sch.id', '(0721) 252190', 'Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213', 'Lampung', '2000', 60, 20, 'Sarana ibadah, ruang guru, olahraga, laboratorium, perpustakaan, internet & hotspot, keamanan, lokasi parkir', '-5.422571', '105.265161'),
(4, 'SMAN 2 BANDAR LAMPUNG', 'Negeri', 'A', 'http://smanda-bdl.sch.id', NULL, 'Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '2000', 60, 200, 'GSG, Ruang Ibadah, Laboratorium, Lapangan Tenis, Lapangan Upacara', '-5.427049', '105.254837'),
(5, 'SMAN 3 BANDAR LAMPUNG', 'Negeri', 'A', NULL, NULL, 'Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '2000', 60, 200, 'GSG, Ruang Ibadah, Laboratorium, Lapangan Tenis, Lapangan Upacara', '-5.419214', '105.244381');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smagis`
--
ALTER TABLE `smagis`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smagis`
--
ALTER TABLE `smagis`
  MODIFY `id_sekolah` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
