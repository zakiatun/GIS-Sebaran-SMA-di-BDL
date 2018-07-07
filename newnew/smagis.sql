-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 01:13 AM
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
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `akreditas` varchar(10) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `luas` varchar(20) NOT NULL,
  `jumlah_guru` int(20) NOT NULL,
  `jumlah_siswa` int(20) NOT NULL,
  `fasilitas` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smagis`
--

INSERT INTO `smagis` (`id_sekolah`, `nama_sekolah`, `status`, `akreditas`, `website`, `no_hp`, `alamat`, `provinsi`, `luas`, `jumlah_guru`, `jumlah_siswa`, `fasilitas`, `latitude`, `longitude`, `icon`) VALUES
(1, 'SMAN 1 BANDAR LAMPUNG', 'Negeri', 'A', 'http://smansa-bdl.sch.id', '(0721) 252190', 'Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213', 'Lampung', '2.000 m^2', 60, 20, 'Sarana ibadah, ruang guru, olahraga, laboratorium, perpustakaan, internet & hotspot, keamanan, lokasi parkir', '-5.422539', '105.265223', ''),
(4, 'SMAN 2 BANDAR LAMPUNG', 'Negeri', 'A', 'http://smanda-bdl.sch.id', NULL, 'Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '2.000 m^2', 60, 200, 'GSG, Ruang Ibadah, Laboratorium, Lapangan Tenis, Lapangan Upacara', '-5.426919', '105.255014', ''),
(5, 'SMAN 3 BANDAR LAMPUNG', 'Negeri', 'A', 'http://www.sman3bandarlampung.sch.id/', ' (0721) 255600', 'Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '6050 m^2', 70, 200, 'Ruang Kelas, Mushola, Kantin, UKS, Lobby Utama, Ruang Bimbingan Konseling, Ruang OSIS/MPK dan Sekretariat Ekstrakurikuler, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Laboratorium Bahasa', '-5.419715', '105.244251', ''),
(6, 'SMAN 4 BANDAR LAMPUNG', 'Negeri', 'B', 'https://sman4bl.sch.id/', '(0721) 481121', 'Jl. Dr. Cipto Mangunkusumo, No 88, Teluk Betung, Kupang Teba, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35228', 'Lampung', '6.286 m^2', 48, 200, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.435388', '105.270226', ''),
(7, 'SMAN 5 BANDAR LAMPUNG', 'Negeri', 'B', 'http://sman5-bdl.sch.id', '(0721) 703930', 'Jalan Soekarno Hatta, Way Dadi, Sukarame, Way Dadi, Sukarame, Kota Bandar Lampung, Lampung 35132', 'Lampung', '10.000 m^2', 67, 1, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Mushola, Kantin', '-5.379347', '105.284828', ''),
(8, 'SMAN 6 BANDAR LAMPUNG', 'Negeri', 'B', 'sman6bdl.sch.id', '(0721) 3338', 'Jl. KH. Agus Anang No.35, Ketapang, Tlk. Betung Sel., Kota Bandar Lampung, Lampung 35245', '', '11.900 m^2', 49, 684, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, lapangan, studio musik, kantin sehat, wc 24 pintu', '-5.438214', '105.296496', ''),
(9, 'SMAN 7 BANDAR LAMPUNG', 'Negeri', 'A', 'www.sman7bandarlampung.sch.id/', '(0721) 540270', 'Jalan Teuku Cik Ditro No.2, Beringin Raya, Kemiling, Kota Bandar Lampung, Lampung 35158', 'Lampung', '8800 m^2', 74, 1169, '    Kelas\r\n    Perpustakaan\r\n    Laboratorium Biologi\r\n    Laboratorium Fisika\r\n    Laboratorium Kimia\r\n    Laboratorium Komputer\r\n    Laboratorium Bahasa Inggris\r\n    Laboratorium Multimedia\r\n    Aula\r\n    Mushola\r\n    Lapangan\r\n    Toilet', '-5.404068', '105.201146', ''),
(10, 'SMAN 8 BANDAR LAMPUNG', 'Negeri', 'B', 'www.sman8bdl.sch.id', '(0721) 540270', 'Jalan LAKSAMANA MALAHAYATI No.10, Talang, Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35229', 'Lampung', '8.800 m^2', 72, 940, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.449122', '105.257897', ''),
(11, 'SMAN 9 BANDAR LAMPUNG', 'Negeri', 'A', 'smalan.sch.id', ' (0721) 772924', 'Jalan Panglima Polim No.18, Segala Mider, Tanjung Karang Barat, Kota Bandar Lampung, Lampung 35152', 'Lampung', '44725 m^2', 60, 1080, 'Ruang Kelas (Full AC, CCTV, Speaker, Proyektor, Loker siswa), Perpustakaan (Digital Library), Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Laboratorium Bahasa, Laboratorium Seni, Laboratorium Film, Gallery Eco Youth, Kantin, WC, Aula, UKS, Musholla As-Syifa, Kesekretariatan Ekstrakurikuler, Lapangan Basket, Lapangan Merah, Lapangan Voli, Lapangan Upacara, Daur Ulang Limbah, Full WiFi 24 Jam (kec. 50Mbps), Semua titik disekolah dilengkapi kamera keamanan CCTV', '-5.390601', '105.248198', ''),
(12, 'SMAN 10 BANDAR LAMPUNG', 'Negeri', 'A', ' sman10bdl.sch.id', '(0721) 251516', 'Jalan GATOT SUBROTO No.81, Tanjung Gading, North Teluk Betung, Kedamaian, Tj. Gading, Kedamaian, Kota Bandar Lampung, Lampung 35226', 'Lampung', '8.000 m^2', 61, 1, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Laboratorium Bahasa, Laboratorium Multimedia, Gedung Sistem Informasi', '-5.428743', '105.275725', ''),
(13, 'SMAN 11 BANDAR LAMPUNG', 'Negeri', 'B', 'sman11bandarlampung.sch.id', '(0721) 480719', 'Jl. Laksamana R.E.Martadinata No.km 4, Sukamaju, Tlk. Betung Tim., Kota Bandar Lampung, Lampung 35231', 'Lampung', '9.706 m^2', 36, 582, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.472951', '105.243144', ''),
(14, 'SMAN 12 BANDAR LAMPUNG', 'Negeri', 'B', 'sman12bdl.sch.id', '0821-7823-1000', 'Jl. Hi. Endro Suratmin, Harapan Jaya, Sukarame, Kota Bandar Lampung, Lampung 35133', 'Lampung', '23.000 m^2', 60, 976, 'Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer', '-5.376734', '105.311723', ''),
(15, 'SMAN 13 BANDAR LAMPUNG', 'Negeri', 'A', 'http://sman13bdl.sch.id/', '0813-8379-0139', 'Jl. Padat Karya, Sinar Harapan, Rajabasa Jaya, Rajabasa, Rajabasa Jaya, Rajabasa, Kota Bandar Lampung, Lampung 35141', 'Lampung', '18.211 m^2', 50, 791, 'Ruang Kelas, Perpustakaan, Laboratorium Biologi, Laboratorium Fisika, Laboratorium Kimia, Laboratorium Komputer, Lapangan Sepak Bola, Lapangan Basket, Lapangan Voli, Masjid, Toilet, Kantin Sehat, Kebun Sekolah', '-5.346666', '105.256170', ''),
(16, 'SMAN 14 BANDAR LAMPUNG', 'Negeri', 'B', 'sman14bl.sch.id', '(0721) 7571424', 'Jl. Perum Bukit Kemiling Permai, Kemiling Permai, Kemiling, Kota Bandar Lampung, Lampung 35152', 'Lampung', '10.047 m^2', 56, 818, 'Perpustakaan, Laboratorium IPA, Laboratorium Bahasa, Laboratorium Komputer', '-5.379955', '105.212618', ''),
(17, 'SMAN 15 BANDAR LAMPUNG', 'Negeri', 'A', 'sman15-bdl.sch.id', '(0721) 789569', 'Jl. Turi Raya, Labuhan Dalam, Tj. Senang, Kota Bandar Lampung, Lampung 35141', 'Lampung', '9.258 m^2', 54, 720, 'RUANG KELAS, PERPUSTAKAAN, LAB IPA, LAB KOMPUTER, RUANG KEPALA SEKOLAH, RUANG GURU, RUANG TU, MUSHOLA, RUANG BK, RUANG OSIS, UKS, WC, KANTIN, LAPANGAN', '-5.36055', '105.267474', ''),
(18, 'SMAN 16 BANDAR LAMPUNG', 'Negeri', 'B', 'sman16-bdl.sch.id', '(0721) 5602651', 'Jalan DARUSSALAM, Susunan Baru, Tanjung Karang, Langkapura, Kota Bandar Lampung, Lampung 35111', 'Lampung', '1.000 m^2', 50, 712, 'Laboratorium Ilmu Pengetahuan Alam, Laboratorium Komputer, Perpustakaan, Mushala, Lapangan Volly, Lapangan Basket, Taman Apotik Hidup, Kantin', '-5.402923', '105.229383', ''),
(19, 'SMAN 17 BANDAR LAMPUNG', 'Negeri', 'B', 'sman17bdl.sch.id', '(0721) 341047', 'Jl. Soekarno - Hatta, Pidada, Panjang, Kota Bandar Lampung, Lampung 35241', 'Lampung', '19.000 m^2', 25, 325, 'Ruang Kelas, Laboratorium, Perpustakaan, Sanitasi Siswa', '-5.463311', '105.324735', ''),
(20, 'SMA UTAMA 2 BANDAR LAMPUNG', 'Swasta', '-', NULL, '0721-253938', 'Jl. Jend. Sudirman No.39, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213', 'Lampung', '1,600 m^2', 60, 682, 'Kelas, Perpustakaan, Laboratorium, Lapangan Olahraga, Mushola', '-5.422172', '105.264967', ''),
(21, 'SMA NUSANTARA BANDAR LAMPUNG', 'Swasta', '-', NULL, '0721-262109', 'Jl. Gelatik No.16, Tj. Agung Raya, Tj. Karang Tim., Kota Bandar Lampung, Lampung 35126', 'Lampung', '2.300 m^2', 16, 102, 'Kelas, Perpustakaan, Laboratorium, lapangan, kantin ', '-5.412641', '105.268759', ''),
(22, 'SMA SURYA DHARMA 2 KEDATON BANDAR LAMPUNG', 'Swasta', 'B', 'smasuryadharma2.blogspot.com/p/profil-sekolah.html', '(0721) 770665', '\r\nJL. KI MAJA Gg. Pertama No.1, Kedaton, Kota Bandar Lampung, Lampung 35132', 'Lampung', '7,005 m^2', 0, 0, '- Lab. Bahasa, Lab. Komputer (+Internet) , Lab.IPA\r\n- Lapangan Olahraga yang luas\r\n- Perpustakaan\r\n- Lab. Musik (Band)\r\n- Memiliki Hotspot Area / Wifi\r\n- Kantin\r\n- Musholla', '-5.383214', '105.267234', ''),
(24, 'SMA YADIKA BANDAR LAMPUNG ', 'Swasta', 'A', 'https://smayadikabalam.sch.id/', '(0721) 784370', 'Jl. Soekarno - Hatta, Labuhan Dalam, Tj. Senang, Kota Bandar Lampung, Lampung 35142', 'Lampung', '00', 22, 432, '    Gedung permanen 4 Lantai ( milik Sendiri )\r\n    Ruang Kelas yang nyaman\r\n    Ruangan Serba Guna ( AULA )\r\n    Lapangan Olahraga ( Futsall , Basketball , Volleyball , Badminton . dll )\r\n    Musholla\r\n    Tempat Parkir yang luas dan aman\r\n    Perpustakaan\r\n    Koperasi Sekolah\r\n    Laboratorium IPA ( Fisika , Biologi dan Kimia )\r\n    Lab . Bahasa Inggris\r\n    Lab . Komputer\r\nlaboratorium TKJ ( hardware , Sofware )\r\nlaboratorium multimedia\r\nBengkel Otomotif \r\n    UKS\r\n    Warung Sekolah / Kantin ( Caffetaria ) yang sehat\r\n    Ruang Band', '-5.358900', '105.254701', ''),
(25, 'SMA GAJAH MADA BANDAR LAMPUNG ', 'Swasta', 'A', '\r\ngajahmadabdlsma.blogspot.com/ ,\r\n http://smagamabdl.sch.id', '0721-788304', 'Jl. Soekarno - Hatta No.1, Tj. Senang, Kota Bandar Lampung, Lampung 35141', 'Lampung', '3000 m^2', 27, 520, '-', '-5.372228', '105.276920', ''),
(26, '\r\nSMA IT AR RAIHAN BANDAR LAMPUNG \r\n', 'Swasta', 'B', 'sma.arraihan.sch.id/\r\n', '0721-785652 ', 'Jalan Purnawirawan No.114, Gunung Terang, Tanjung Karang Barat, Gn. Terang, Langkapura, Kota Bandar Lampung, Lampung 35142', 'Lampung', '6150 m^2', 33, 330, '-', '-5.380324', '105.241139', ''),
(27, 'SMA PELITA BANGSA BANDAR LAMPUNG ', 'Swasta', 'A', 'pelitabangsa.info/', '(0721) 253788', ' Jl. P. Emir Moh. Noer No.33, Durian Payung, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214', 'Lampung', '1000 m^2', 0, 0, '-', '-5.420797', '105.247094', ''),
(28, 'SMA ADIGUNA BANDAR LAMPUNG ', 'Swasta', 'A', 'adiguna-sma.blogspot.com/', '0721-267202', 'Jl. Khairil Anwar No.79, Durian Payung, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '2500 m^2', 23, 280, '\r\nRUANG KELAS, RUANG KEPALA SEKOLAH, LAB KOMPUTER, PERPUSTAKAAN, RUANG GURU, RUANG SERBA GUNA, RUANG TU, GUDANG, RUANG OSIS, RUANG BK, KAMAR MANDI\r\n\r\n', '-5.419383', '105.245521', ''),
(29, 'SMA BODHISATVA BANDAR LAMPUNG \r\n', 'Swasta', 'B', 'www.sma.bodhisattva.sch.id/', '0721-486798', ' JL. DR. SETIA BUDI NO. 7/8 Kuripan Kec. Teluk Betung Barat Kota Bandar Lampung Prov. Lampung', 'Lampung', '1920 m^2', 17, 94, 'RUANG KELAS, LABORATORIUM, PERPUSTAKAAN, RUANG GURU, RUANG KEPALA SEKOLAH\r\n', '-5.370670', '105.273098', ''),
(30, 'SMA UTAMA 3 BANDAR LAMPUNG  ', 'Swasta', '-', '-', ' 0721-253938', 'Jl. Jend. Sudirman No.39, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213\r\n', 'Lampung', '2800 m^2', 11, 89, '\r\nFASILITAS UTAMA \r\n    Classroom\r\n    Library\r\n    Science Lab\r\n    Computer Lab\r\n    Language Lab \r\n\r\nFasilitas Tambahaan\r\n\r\n    Cafeteria\r\n    Medical Clinic\r\n    Gym\r\n    Playground\r\n    Parking\r\n    Rest Room \r\n\r\nFasilitas Lainnya\r\n\r\n    Internet\r\n    Wifi\r\n    Classroom AC \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '-5.422372', '105.264922', ''),
(31, 'SMA ARJUNA', 'Swasta', 'C', 'smaarjuna@yahoo.com', '254273', ' JL. TULANG BAWANG No. 35, Enggal, Kec. Enggal, Kota Bandar Lampung Prov. Lampung', 'Lampung', '3,500 m^2', 7, 24, 'Ruang Kelas : 6 *\r\n Laboratorium : 2 *\r\n Perpustakaan : 1 *\r\n', '-5.417654', '105.261682', ''),
(32, 'SMA AL HUSNA BANDAR LAMPUNG', 'Swasta', '-', 'alhusnalampung@yahoo.co.id', ' 0721272816', 'Jalan Imam Bonjol Gang Terong No.29, Kemiling Permai, Kemiling, Kota Bandar Lampung, Lampung 35153', 'Lampung', '627  m^2', 6, 15, '-', '-5.388716', '105.212063', ''),
(33, 'SMA PERINTIS 1 BANDAR LAMPUNG', 'Swasta', 'A', NULL, '(0721) 263936', 'Jalan Cut Nyak Dien Gang Duane No. 4, Palapa, Tanjung Karang Pusat, Palapa, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 'Lampung', '2450 m^2', 27, 462, ' Ruang Kelas : 23 *\r\n Laboratorium : 2 *\r\n Perpustakaan : 1 *', '-5.417712', '105.24807', ''),
(34, ' SMA TAMAN SISWA TELUK BETUNG UTARA', 'Swasta', 'B', 'http://tamansiswatbetung.sch.id', NULL, 'Jl. W. R. Supratman No.74, Tlk. Betung, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35221', 'Lampung', ' 4,430 m^2', 16, 451, ' Ruang Kelas : 11 *\r\n Laboratorium : 3 *\r\n Perpustakaan : 1 *', '-5.430553', '105.245811', ''),
(35, 'SMA PENYIMBANG BANDAR LAMPUNG', 'Swasta', '-', NULL, NULL, 'Jl. Teuku Umar Gg. Suci, Kedaton, Kec. Kedaton, Kota Bandar Lampung Prov. Lampung ', 'Lampung', '800 m^2', 4, 25, ' Ruang Kelas : 3 *\r\n Laboratorium : 0 *\r\n Perpustakaan : 1 *\r\n', '-5.383045', '105.260665', ''),
(36, 'SMA BPK PENABUR BANDAR LAMPUNG', 'Swasta', 'A', 'http://sdk.bandarlampung.bpkpenabur.or.id/', '(0721) 255681', 'Jl. DI. Panjaitan No. 18, Tanjung Karang, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214', 'Lampung', '3015 m^2', 13, 190, 'Ruang Kelas : 8 *\r\n Laboratorium : 2 *\r\n Perpustakaan : 1 *', '-5.423338', '105.256029', ''),
(37, 'SMA IMMANUEL BANDAR LAMPUNG', 'Swasta', '-', 'https://smaimmanuelbandarlampung.sch.id/', NULL, 'Jalan Dokter Susilo No.6, Sumur Batu, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35214 ', 'Lampung', '5330 m^2', 17, 376, ' Ruang Kelas : 12 *\r\n Laboratorium : 1 *\r\n Perpustakaan : 1 *', '-5.429557', '105.26373', ''),
(38, 'SMA YPPL PANJANG BANDAR LAMPUNG', 'Swasta', 'B', 'http://kampusbiruyppl.blogspot.com/2016/11/sma-yppl.html\r\n', NULL, 'Jl. Soekarno - Hatta, Karang Maritim, Panjang, Kota Bandar Lampung, Lampung 35243', 'Lampung', '-', 0, 0, '1. Kantor \r\n2. Ruang Kelas\r\n3. Laboratorium IPA\r\n4. Laboratorium Komputer\r\n5. Perpustakaan\r\n6. UKS\r\n7. Mushala\r\n8. Lap. Olah Raga\r\n9. Toilet', '-5.483804', '105.324041', ''),
(39, 'SMK NEGERI 1 BANDAR LAMPUNG \r\n', 'Negeri', 'A', 'http://www.smkn1bdl.sch.id/', '0721-705529 ', 'Jl. P. Morotai No.33 Jagabaya III, Sukabumi, Way Halim, Kota Bandar Lampung, Lampung 35132', 'Lampung', '17.745 m^2', 81, 1220, '    Perpustakaan\r\n    Ruang Kelas\r\n    Laboratorium Komputer\r\n    Ruang Praktik Siswa TKR\r\n    Ruang Kepala Sekolah\r\n    Ruang Guru\r\n    Kantin\r\n    Lapangan', '-5.393935', '105.279480 ', ''),
(40, 'SMK NEGERI 2 BANDAR LAMPUNG', 'Negeri', 'A', 'http://smkn2bdl.sch.id/', '0721-701966', 'Jl. Prof. Dr. Sumantri Brojonegoro, Rajabasa, Gedung Meneng, Rajabasa, Kota Bandar Lampung, Lampung 35145', 'Lampung', '28000 m^2', 137, 1869, '\r\nRUANG KELAS, RUANG KANTOR, AULA, MUSHOLA, UKS, RUANG KOPERASI, LAB TKJ, LAB K.BATU, LAB K.KAYU MESIN, LAB MR.MESIN, LAB T.MESIN, LAB TAV, LAB SURVEY, LAB LISTRIK, LAB KKPI, LAB OTOMOTIF, BKL.AHASS, LAB ZYREX, R.LPTK KOM\r\n', '-5.363917', '105.245401 ', ''),
(41, ' SMTI TANJUNGKARANG BANDAR LAMPUNG ', 'Swasta', '-', 'http://www.smksmti-bdl.sch.id/', ' 0721-253383  ', 'Jl. Jend. Sudirman No. 43, Rawa Laut, Tanjung Karang Timur, Kota Bandar Lampung 35127', 'Lampung', '6000 m^2', 56, 753, '\r\nPERPUSTAKAAN, LAPANGAN, MUSHOLA, WiFi Access 24 Jam, UKS ( School Medical Center), Kantin Sekolah\r\n', ' -5.422331', '105.265902 ', ''),
(42, 'MAN 1 (MODEL) Bandar Lampung', 'Negeri', '-', 'http://man1bandarlampung.sch.id/', ' 0721-706448', 'Jalan Letnan Kolonel Endro Suratmin, Harapan Jaya, Sukarame, Harapan Jaya, Sukarame, Kota Bandar Lampung, Lampung 35131', 'Lampung', '-', 0, 0, '-', '-5.375385', '105.302463', ''),
(43, 'MAN 2 BANDAR LAMPUNG', 'Negeri', '-', NULL, NULL, '-', 'Lampung', '-', 0, 0, '-', '-5.434603', '105.280001', ''),
(44, 'MAN 2 BANDAR LAMPUNG', 'Negeri', '-', NULL, NULL, '-', 'Lampung', '-', 0, 0, '0', '-5.434603', '105.280001', ''),
(45, 'MA AL JAUHAR BANDAR LAMPUNG', 'Swasta', '-', NULL, NULL, '-', 'Lampung', '-', 0, 0, '-', '-5.408995', '105.270851', '');

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
  MODIFY `id_sekolah` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
