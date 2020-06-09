-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 10:08 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp3tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan_umum`
--

CREATE TABLE `kunjungan_umum` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bulan` varchar(20) NOT NULL,
  `jumlah_data` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan_umum`
--

INSERT INTO `kunjungan_umum` (`id`, `nama`, `nomor_telepon`, `instansi`, `nama_karyawan`, `keperluan`, `date`, `bulan`, `jumlah_data`) VALUES
(87, 'angggaaaaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-04-19 16:20:54', '04', 1),
(88, 'angggaaaaaa', '085299665037', 'bank', 'pak_abdul', 'asdas', '2019-04-19 16:25:17', '04', 2),
(89, 'angggaaaaaa', '12323', 'bank', 'pak_abdul', 'asdas', '2019-03-19 16:27:04', '03', 3),
(90, 'angggaaa', '085299665037', 'sasd', 'Bu_anti', 'asdas', '2019-03-19 16:27:35', '03', 4),
(91, 'angggaaaaaa', '12323', 'bank', 'pak_abdul', 'asdas', '2019-03-19 16:27:43', '03', 5),
(92, 'angggaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-03-19 16:27:51', '03', 6),
(93, 'angggaaaaaa', '12323', 'bank', 'pak_abdul', 'asdas', '2019-03-19 16:27:59', '03', 7),
(94, 'angggaaa', '12323', 'bank', 'pak_abdul', 'asdas', '2019-03-19 16:28:06', '03', 8),
(95, 'angggaaa', '12323', 'sasd', 'Bu_anti', 'asdas', '2019-05-19 16:29:45', '05', 9),
(96, 'angggaaaaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-05-19 16:29:54', '05', 10),
(97, 'angggaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-04-20 03:19:40', '04', 11),
(98, 'angggaaa', '12323', 'bank', 'Bu_anti', 'asdas', '2019-04-20 03:19:49', '04', 12),
(99, 'ina', '12323', 'sasd', 'Bu_anti', 'asdas', '2019-04-20 03:19:58', '04', 13),
(100, 'a', '12323', 'sasd', 'pak_abdul', 'sadasd', '2019-05-20 03:20:44', '05', 14),
(101, 'angggaaaaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-05-20 03:21:11', '05', 15),
(102, 'angggaaaaaa', '12323', 'sasd', 'Bu_anti', 'asdas', '2019-05-20 03:21:19', '05', 16),
(103, 'angggaaaaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-05-20 03:22:29', '05', 17),
(104, 'angggaaa', '12323', 'bank', 'pak_abdul', 'asdas', '2019-05-20 03:28:45', '05', 18),
(105, 'angggaaaaaa', '085299665037', 'bank', 'pak_abdul', 'sadasd', '2019-05-20 03:28:55', '05', 19),
(106, 'angggaaaaaa', 'asdasd', 'bank', 'Bu_anti', 'asdas', '2019-05-20 03:29:06', '05', 20),
(107, 'angggaaaaaa', '085299665037', 'sasd', 'Bu_anti', 'sadasd', '2019-05-20 03:29:14', '05', 21),
(108, 'angggaaaaaa', '12323', 'sasd', 'pak_abdul', 'asdas', '2019-04-20 03:29:59', '04', 22),
(109, 'angggaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-04-20 03:30:42', '04', 23),
(110, 'angggaaa', '085299665037', 'bank', 'pak_abdul', 'asdas', '2019-01-20 03:31:07', '01', 24),
(111, 'angggaaa', '085299665037', 'bank', 'Bu_anti', 'sadasd', '2019-02-20 03:31:33', '02', 25),
(112, 'angggaaaaaa', '085299665037', 'sasd', 'Bu_anti', 'asdas', '2019-02-20 03:31:41', '02', 26),
(113, 'angggaaaaaa', '085299665037', 'sasd', 'Bu_anti', 'asdas', '2019-02-20 03:31:50', '02', 27),
(114, 'angggaaaaaa', '12323', 'bank', 'pak_abdul', 'sadasd', '2019-06-20 03:32:30', '06', 28),
(115, 'angggaaa', '12323', 'sasd', 'pak_abdul', 'asdas', '2019-06-20 03:32:44', '06', 29),
(116, 'angggaaa', '12323', 'sasd', 'Pak_rahmat', 'asdas', '2019-07-20 03:33:35', '07', 30),
(117, 'angggaaaaaa', '085299665037', 'sasd', 'Bu_anti', 'asdas', '2019-07-20 03:33:51', '07', 31),
(118, 'angggaaaaaa', '085299665037', 'bank', 'Bu_anti', 'asdas', '2019-07-20 03:34:09', '07', 32),
(119, 'angggaaa', '085299665037', 'sasd', 'Ingin bertemu dengan..', 'asdas', '2019-07-20 03:34:39', '07', 33),
(120, 'angggaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-08-20 03:35:02', '08', 34),
(121, 'angggaaaaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-08-20 03:35:29', '08', 35),
(122, 'angggaaaaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-09-20 03:35:49', '09', 36),
(123, 'angggaaaaaa', '12323', 'bank', 'pak_abdul', 'asdas', '2019-09-20 03:36:00', '09', 37),
(124, 'angggaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-09-20 03:36:12', '09', 38),
(125, 'angggaaa', '085299665037', 'sasd', 'pak_abdul', 'asdas', '2019-10-20 03:37:05', '10', 39),
(126, 'angggaaa', '12323', 'sasd', 'pak_abdul', 'asdas', '2019-10-20 03:37:14', '10', 40),
(127, 'angggaaaaaa', '085299665037', 'sasd', 'Bu_anti', 'asdas', '2019-11-20 03:37:29', '11', 41),
(128, 'angggaaa', 'asdasd', 'adasdas', 'pak_abdul', 'asdas', '2019-11-20 03:37:41', '11', 42),
(129, 'angggaaaaaa', '085299665037', 'bank', 'pak_abdul', 'asdas', '2019-12-20 03:38:18', '12', 43),
(130, 'angggaaa', '085299665037', 'bank', 'pak_abdul', 'asdas', '2019-12-20 03:38:29', '12', 44),
(131, 'angggaaaaaa', '085299665037', 'Dinas', 'pak_abdul', 'asdas', '2019-04-20 05:19:43', '04', 45),
(132, 'angggaaaaaa', '12323', 'Perguruan_Tinggi', 'Bu_anti', 'sadasd', '2019-05-05 20:04:29', '05', 46),
(133, 'angggaaaaaa', '12323', 'Sekolah', 'Bu_anti', 'asdas', '2019-05-05 20:04:40', '05', 47),
(134, 'ina', '085299665037', 'Sekolah', 'Bu_anti', 'sadasd', '2019-05-05 21:23:42', '05', 48),
(135, 'angggaaaaaa', '085299665037', 'Dinas Pendidikan', 'Pak Imran', 'sadasd', '2019-05-10 11:08:47', '05', 49),
(136, 'Iqram', '085299665037', 'Dinas', 'Pak Ma''mur', 'asdas', '2019-05-10 11:09:30', '05', 50);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(20) NOT NULL,
  `id_absen` varchar(40) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `unit_kerja` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `id_absen`, `nama_karyawan`, `unit_kerja`, `status`, `date`) VALUES
(63, '23123', 'angggaaaaaa', 'pegawai', 'Active', '2019-04-19 20:17:45'),
(64, '23123322321', 'ina', 'pegawai', 'Non Active', '2019-05-06 21:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `rombongan`
--

CREATE TABLE `rombongan` (
  `id` int(50) NOT NULL,
  `perwakilan` varchar(50) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `anggota` int(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rombongan`
--

INSERT INTO `rombongan` (`id`, `perwakilan`, `nomor_telepon`, `instansi`, `anggota`, `nama_karyawan`, `keperluan`, `bulan`, `date`) VALUES
(17, 'asdasd', '12', 'Pemerintah_Daerah', 1213, 'pak_abdul', 'asdas', '01', '2019-01-25 21:33:23'),
(18, 'asdasd', '12', 'Dinas', 1213, 'pak_abdul', 'asdas', '01', '2019-01-25 21:33:32'),
(19, 'asdasd', '085299665037', 'Dinas', 1213, 'pak_rahmat', 'asdas', '01', '2019-01-25 21:33:42'),
(20, 'asdasd', '085299665037', 'Pribadi', 1213, 'bu_anti', 'asdas', '01', '2019-01-25 21:34:44'),
(21, 'asdasd', '085299665037', 'Dinas', 12, 'bu_anti', 'asdas', '02', '2019-02-25 21:35:02'),
(22, 'asdasd', '085299665037', 'Dinas', 12, 'bu_anti', 'asdas', '02', '2019-02-25 21:35:10'),
(23, 'asdasd', '12323', 'Sekolah', 12, 'pak_abdul', 'sadasd', '02', '2019-02-25 21:35:20'),
(24, 'asdasd', '085299665037', 'Dinas', 1213, 'pak_abdul', 'asdas', '03', '2019-03-25 21:35:45'),
(25, 'asdasd', 'asdasd', 'Pribadi', 1213, 'pak_abdul', 'asdas', '03', '2019-03-25 21:35:54'),
(26, 'asdasd', '085299665037', 'Dinas', 12, 'bu_anti', 'sadasd', '03', '2019-03-25 21:36:02'),
(27, 'asdasd', '12323', 'Dinas', 12, 'pak_abdul', 'asdas', '03', '2019-03-25 21:36:10'),
(28, 'asdasd', '12323', 'Pribadi', 1213, 'bu_anti', 'asdas', '04', '2019-04-25 21:36:29'),
(29, 'asdasd', '12323', 'Sekolah', 1213, 'bu_anti', 'asdas', '04', '2019-04-25 21:36:37'),
(30, 'asdasd', '12323', 'Dinas', 1213, 'bu_anti', 'asdas', '04', '2019-04-25 21:36:46'),
(31, 'asdasd', '085299665037', 'Dinas', 1213, 'bu_anti', 'asdas', '04', '2019-04-25 21:36:58'),
(32, 'asdasd', '12', 'Dinas_Pendidikan', 12, 'pak_abdul', 'asdas', '04', '2019-04-25 21:38:21'),
(33, 'asdasd', 'asdasd', 'Dinas', 12, 'bu_anti', 'asdas', '04', '2019-04-25 21:38:32'),
(34, 'asdasd', '085299665037', 'Sekolah', 1213, 'bu_anti', 'asdas', '04', '2019-04-25 21:38:40'),
(35, 'asdasd', '085299665037', 'Dinas', 1213, 'Ingin bertemu dengan..', 'asdas', '05', '2019-05-25 22:33:23'),
(36, 'asdasd', '085299665037', 'Dinas', 1213, 'bu_anti', 'sadasd', '05', '2019-05-25 22:33:34'),
(37, 'asdasd', '12323', 'Dinas', 1213, 'bu_anti', 'sadasd', '05', '2019-05-25 22:33:44'),
(38, 'asdasd', '12323', 'Dinas', 1213, 'bu_anti', 'asdas', '05', '2019-05-25 22:33:56'),
(39, 'asdasd', '12323', 'Sekolah', 12, 'bu_anti', 'sadasd', '05', '2019-05-25 22:34:10'),
(40, 'asdasd', '085299665037', 'Dinas', 1213, 'pak_rahmat', 'asdas', '06', '2019-06-25 22:34:25'),
(41, 'asdasd', '12323', 'Dinas_Pendidikan', 12, 'pak_rahmat', 'sadasd', '06', '2019-06-25 22:34:35'),
(42, 'asdasd', '12', 'Lembaga_Non_Pemerintahan', 12, 'bu_anti', 'asdas', '06', '2019-06-25 22:34:46'),
(43, 'asdasd', '12323', 'Dinas_Pendidikan', 12, 'bu_anti', 'sadasd', '06', '2019-06-25 22:34:58'),
(44, 'asdasd', '085299665037', 'Dinas_Pendidikan', 1213, 'bu_anti', 'sadasd', '06', '2019-06-25 22:35:08'),
(45, 'asdasd', '085299665037', 'Dinas', 1213, 'pak_abdul', 'sadasd', '07', '2019-07-25 22:40:41'),
(46, 'asdasd', '12323', 'Dinas', 12, 'pak_rahmat', 'asdas', '08', '2019-08-25 22:41:02'),
(47, 'asdasd', '12323', 'Dinas_Pendidikan', 12, 'pak_abdul', 'asdas', '08', '2019-08-25 22:41:15'),
(48, 'asdasd', '12323', 'Dinas_Pendidikan', 12, 'bu_anti', 'asdas', '08', '2019-08-25 22:41:25'),
(49, 'asdasd', '12323', 'Sekolah', 1213, 'bu_anti', 'asdas', '09', '2019-09-25 22:41:43'),
(50, 'asdasd', '12323', 'Sekolah', 12, 'pak_rahmat', 'asdas', '09', '2019-09-25 22:41:53'),
(51, 'asdasd', '085299665037', 'Dinas', 12, 'bu_anti', 'sadasd', '10', '2019-10-25 22:42:06'),
(52, 'asdasd', '12323', 'Dinas_Pendidikan', 1213, 'bu_anti', 'sadasd', '10', '2019-10-25 22:42:16'),
(53, 'asdasd', '12323', 'Dinas', 12, 'bu_anti', 'asdas', '10', '2019-10-25 22:42:26'),
(54, 'asdasd', 'asdasd', 'Pribadi', 12, 'pak_abdul', 'asdas', '11', '2019-11-25 22:42:39'),
(55, 'asdasd', 'dasd', 'Dinas', 12, 'bu_anti', 'asdas', '11', '2019-11-25 22:42:48'),
(56, 'asdasd', '085299665037', 'Dinas', 12, 'bu_anti', 'asdas', '11', '2019-11-25 23:43:00'),
(57, 'asdasd', '12323', 'Dinas', 1213, 'pak_abdul', 'asdas', '11', '2019-11-25 23:43:09'),
(58, 'asdasd', '12323', 'Kemdikbud', 1213, 'bu_anti', 'sadasd', '04', '2019-04-25 12:44:18'),
(59, 'asdasd', '12323', 'Sekolah', 12, 'pak_abdul', 'sadasd', '12', '2019-12-25 22:45:01'),
(60, 'asdasd', '085299665037', 'Sekolah', 12, 'bu_anti', 'asdas', '12', '2019-12-25 22:45:15'),
(61, 'asdasd', '085299665037', 'Sekolah', 1213, 'Pak Imran', 'sadasd', '05', '2019-05-10 19:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_admin` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `keterangan` longtext,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_admin`, `nama`, `email`, `password`, `akses_level`, `keterangan`, `date`) VALUES
(1, '1629041008', 'Angga kuriawan', 'angga99124@gmail.com', 'angga123', 'admin', NULL, '0000-00-00 00:00:00'),
(2, '1629041002', 'fikri', 'iqramnugraha@gmail.com', 'angga123', 'Admin', '21323', '2019-05-05 20:44:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunjungan_umum`
--
ALTER TABLE `kunjungan_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`id_absen`);

--
-- Indexes for table `rombongan`
--
ALTER TABLE `rombongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_admin_2` (`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunjungan_umum`
--
ALTER TABLE `kunjungan_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `rombongan`
--
ALTER TABLE `rombongan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
