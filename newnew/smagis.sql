-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 03:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smagis`
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
(1, 'SMAN 1 BANDAR LAMPUNG', 'Negeri', 'A', 'http://smansa-bdl.sch.id', '(0721) 252190', 'Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213', 'Lampung', '2.000 m^2', 60, 20, 'Sarana ibadah, ruang guru, olahraga, laboratorium, perpustakaan, internet & hotspot, keamanan, lokasi parkir', '-5.422539', '105.265223'),
(4, 'SMAN 2 BANDAR LAMPUNG', 'Negeri', 'A', 'http://smanda-bdl.sch.id', NULL, 'Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '2.000 m^2', 60, 200, 'GSG, Ruang Ibadah, Laboratorium, Lapangan Tenis, Lapangan Upacara', '-5.426919', '105.255014'),
(5, 'SMAN 3 BANDAR LAMPUNG', 'Negeri', 'A', 'http://www.sman3bandarlampung.sch.id/', ' (0721) 255600', 'Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '6050 m^2', 70, 200, 'Ruang Kelas, Mushola, Kantin, UKS, Lobby Utama, Ruang Bimbingan Konseling, Ruang OSIS/MPK dan Sekretariat Ekstrakurikuler, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Laboratorium Bahasa', '-5.419715', '105.244251'),
(6, 'SMAN 4 BANDAR LAMPUNG', 'Negeri', 'B', 'https://sman4bl.sch.id/', '(0721) 481121', 'Jl. Dr. Cipto Mangunkusumo, No 88, Teluk Betung, Kupang Teba, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35228', 'Lampung', '6.286 m^2', 48, 200, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.435388', '105.270226'),
(7, 'SMAN 5 BANDAR LAMPUNG', 'Negeri', 'B', 'http://sman5-bdl.sch.id', '(0721) 703930', 'Jalan Soekarno Hatta, Way Dadi, Sukarame, Way Dadi, Sukarame, Kota Bandar Lampung, Lampung 35132', 'Lampung', '10.000 m^2', 67, 1, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Mushola, Kantin', '-5.379347', '105.284828'),
(8, 'SMAN 6 BANDAR LAMPUNG', 'Negeri', 'B', 'sman6bdl.sch.id', '(0721) 3338', 'Jl. KH. Agus Anang No.35, Ketapang, Tlk. Betung Sel., Kota Bandar Lampung, Lampung 35245', '', '11.900 m^2', 49, 684, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, lapangan, studio musik, kantin sehat, wc 24 pintu', '-5.438214', '105.296496'),
(9, 'SMAN 7 BANDAR LAMPUNG', 'Negeri', 'A', 'www.sman8bdl.sch.id', '(0721) 540270', 'Jalan Teuku Cik Ditro No.2, Beringin Raya, Kemiling, Kota Bandar Lampung, Lampung 35158', 'Lampung', '8800 m^2', 72, 940, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.404068', '105.201146'),
(10, 'SMAN 7 BANDAR LAMPUNG', 'Negeri', 'B', 'www.sman8bdl.sch.id', '(0721) 540270', 'Jalan LAKSAMANA MALAHAYATI No.10, Talang, Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35229', 'Lampung', '8.800 m^2', 72, 940, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.449122', '105.257897'),
(11, 'SMAN 9 BANDAR LAMPUNG', 'Negeri', 'A', 'smalan.sch.id', ' (0721) 772924', 'Jalan Panglima Polim No.18, Segala Mider, Tanjung Karang Barat, Kota Bandar Lampung, Lampung 35152', 'Lampung', '44725 m^2', 60, 1080, 'Ruang Kelas (Full AC, CCTV, Speaker, Proyektor, Loker siswa), Perpustakaan (Digital Library), Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Laboratorium Bahasa, Laboratorium Seni, Laboratorium Film, Gallery Eco Youth, Kantin, WC, Aula, UKS, Musholla As-Syifa, Kesekretariatan Ekstrakurikuler, Lapangan Basket, Lapangan Merah, Lapangan Voli, Lapangan Upacara, Daur Ulang Limbah, Full WiFi 24 Jam (kec. 50Mbps), Semua titik disekolah dilengkapi kamera keamanan CCTV', '-5.390601', '105.248198'),
(12, 'SMAN 10 BANDAR LAMPUNG', 'Negeri', 'A', ' sman10bdl.sch.id', '(0721) 251516', 'Jalan GATOT SUBROTO No.81, Tanjung Gading, North Teluk Betung, Kedamaian, Tj. Gading, Kedamaian, Kota Bandar Lampung, Lampung 35226', 'Lampung', '8.000 m^2', 61, 1, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Laboratorium Bahasa, Laboratorium Multimedia, Gedung Sistem Informasi', '-5.428743', '105.275725'),
(13, 'SMAN 11 BANDAR LAMPUNG', 'Negeri', 'B', 'sman11bandarlampung.sch.id', '(0721) 480719', 'Jl. Laksamana R.E.Martadinata No.km 4, Sukamaju, Tlk. Betung Tim., Kota Bandar Lampung, Lampung 35231', 'Lampung', '9.706 m^2', 36, 582, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.472951', '105.243144'),
(14, 'SMAN 12 BANDAR LAMPUNG', 'Negeri', 'B', 'sman12bdl.sch.id', '0821-7823-1000', 'Jl. Hi. Endro Suratmin, Harapan Jaya, Sukarame, Kota Bandar Lampung, Lampung 35133', 'Lampung', '23.000 m^2', 60, 976, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.376734', '105.311723'),
(15, 'SMAN 13 BANDAR LAMPUNG', 'Negeri', 'A', 'http://sman13bdl.sch.id/', '0813-8379-0139', 'Jl. Padat Karya, Sinar Harapan, Rajabasa Jaya, Rajabasa, Rajabasa Jaya, Rajabasa, Kota Bandar Lampung, Lampung 35141', 'Lampung', '18.211 m^2', 50, 791, 'Ruang Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Lapangan Sepak Bola, Lapangan Basket, Lapangan Voli, Masjid, Toilet, Kantin Sehat, Kebun Sekolah', '-5.346666', '105.256170'),
(16, 'SMAN 14 BANDAR LAMPUNG', 'Negeri', 'B', 'sman14bl.sch.id', '(0721) 7571424', 'Jl. Perum Bukit Kemiling Permai, Kemiling Permai, Kemiling, Kota Bandar Lampung, Lampung 35152', 'Lampung', '10.047 m^2', 56, 818, 'Perpustakaan, Laboratorium IPA, Laboratorium Bahasa, Laboratorium Komputer', '-5.379955', '105.212618'),
(17, 'SMAN 15 BANDAR LAMPUNG', 'Negeri', 'A', 'sman15-bdl.sch.id', '(0721) 789569', 'Jl. Turi Raya, Labuhan Dalam, Tj. Senang, Kota Bandar Lampung, Lampung 35141', 'Lampung', '9.258 m^2', 54, 720, 'RUANG KELAS, PERPUSTAKAAN, LAB IPA, LAB KOMPUTER, RUANG KEPALA SEKOLAH, RUANG GURU, RUANG TU, MUSHOLA, RUANG BK, RUANG OSIS, UKS, WC, KANTIN, LAPANGAN', '-5.36055', '105.267474'),
(18, 'SMAN 16 BANDAR LAMPUNG', 'Negeri', 'B', 'sman16-bdl.sch.id', '(0721) 5602651', 'Jalan DARUSSALAM, Susunan Baru, Tanjung Karang, Langkapura, Kota Bandar Lampung, Lampung 35111', 'Lampung', '1.000 m^2', 50, 712, 'Laboratorium Ilmu Pengetahuan Alam, Laboratorium Komputer, Perpustakaan, Mushala, Lapangan Volly, Lapangan Basket, Taman Apotik Hidup, Kantin', '-5.402923', '105.229383'),
(19, 'SMAN 17 BANDAR LAMPUNG', 'Negeri', 'B', 'sman17bdl.sch.id', '(0721) 341047', 'Jl. Soekarno - Hatta, Pidada, Panjang, Kota Bandar Lampung, Lampung 35241', 'Lampung', '19.000 m^2', 25, 325, 'Ruang Kelas, Laboratorium, Perpustakaan, Sanitasi Siswa', '-5.463311', '105.324735'),
(20, 'SMA S UTAMA 2 BANDAR LAMPUNG', 'Swasta', '-', NULL, '0721-253938', 'Jl. Jend. Sudirman No.39, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213', 'Lampung', '1,600 m²', 60, 682, 'Kelas, Perpustakaan, Laboratorium, Lapangan Olahraga, Mushola', '-5.422172', '105.264967'),
(21, 'SMAS NUSANTARA BANDAR LAMPUNG', 'Swasta', '-', NULL, '0721-262109', 'Jl. Gelatik No.16, Tj. Agung Raya, Tj. Karang Tim., Kota Bandar Lampung, Lampung 35126', 'Lampung', '2.300 m²', 16, 102, 'Kelas, Perpustakaan, Laboratorium, lapangan, kantin ', '-5.412641', '105.268759');

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
  MODIFY `id_sekolah` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
