-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2017 at 06:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_inconference`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `absen_id` int(11) NOT NULL,
  `peserta_id` int(11) NOT NULL,
  `hari_1` int(11) NOT NULL,
  `hari_2` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`absen_id`, `peserta_id`, `hari_1`, `hari_2`, `user_id`, `created_at`) VALUES
(3, 1007, 1, 1, NULL, '2017-05-28 11:28:30'),
(4, 1008, 1, 1, NULL, '2017-05-28 11:29:04'),
(5, 1009, 1, 0, 1, '2017-05-28 11:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feed` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `pesan_pengirim` text NOT NULL,
  `tanggal_dikirim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_periksa` tinyint(4) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feed`, `nama_pengirim`, `email_pengirim`, `pesan_pengirim`, `tanggal_dikirim`, `is_periksa`, `user_id`, `updated_at`) VALUES
(1, 'Indra Kusuma', 'indrakusuma.udinus@gmail.com', 'Test pengirim', '2017-05-27 04:33:20', 1, 1, '2017-05-27 06:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `bank_pengirim` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peserta_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `nama_pengirim`, `bank_pengirim`, `catatan`, `tanggal_transaksi`, `peserta_id`, `user_id`) VALUES
(1, 'Indra Kusuma', 'BTPN', 'jeniys', '2017-05-27 09:12:30', 1003, 1),
(2, 'Indra', 'BCA', 'test', '2017-05-28 07:54:48', 1005, 1),
(3, 'ariawan', 'BCA', 'test test', '2017-05-28 07:56:21', 1004, 1),
(4, 'ari', 'ari 2', 'testari', '2017-05-28 07:57:34', 1006, 1),
(5, 'test ', 'test', 'tes', '2017-05-28 07:58:36', 1007, 1),
(6, 'test', 'test', 'test', '2017-05-28 10:12:41', 1008, 1),
(7, 'ariawan', 'bca', 'test', '2017-05-28 11:31:22', 1009, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `peserta_id` int(11) NOT NULL,
  `tipe` enum('1','2') NOT NULL,
  `jumlah_peserta` int(2) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `j_kelamin` enum('l','p') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `wa_line` varchar(16) NOT NULL,
  `asal_organisasi` varchar(255) NOT NULL,
  `alamat_organisasi` text NOT NULL,
  `pelayanan` varchar(255) NOT NULL,
  `total_tagihan` varchar(100) NOT NULL,
  `is_bayar` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`peserta_id`, `tipe`, `jumlah_peserta`, `nama`, `j_kelamin`, `tgl_lahir`, `alamat`, `email`, `wa_line`, `asal_organisasi`, `alamat_organisasi`, `pelayanan`, `total_tagihan`, `is_bayar`, `user_id`, `created_at`, `update_at`) VALUES
(1004, '1', 1, 'INDRA ARIAWAN', 'l', '1999-11-11', 'Ariawan rumahnya disitu lho gaes', 'ardanriyanto17@gmail.com', '081212725911', 'greja abcs', 'http://localhost/inconference/daftar http://localhost/inconference/daftar http://localhost/inconference/daftar', 'drumer', '30077', 1, 1, '2017-05-27 09:33:56', '2017-05-28 07:56:21'),
(1005, '1', 1, 'INDRA ARIAWAN', 'l', '1999-11-11', 'Ariawan rumahnya disitu lho gaes', 'ardanriyanto17@gmail.com', '081212725911', 'greja abcs', 'http://localhost/inconference/daftar http://localhost/inconference/daftar http://localhost/inconference/daftar', 'drumer', '30062', 1, 1, '2017-05-27 09:37:51', '2017-05-28 07:54:48'),
(1006, '1', 1, 'INDRA ARIAWAN', 'l', '1999-11-11', 'Ariawan rumahnya disitu lho gaes', 'indrakusuma.udinus@gmail.com', '081212725911', 'greja abcs', 'http://localhost/inconference/daftar http://localhost/inconference/daftar http://localhost/inconference/daftar', 'drumer', '30032', 1, 1, '2017-05-27 09:39:30', '2017-05-28 07:57:34'),
(1007, '1', 1, 'INDRA ARIAWAN', 'l', '1999-11-11', 'Ariawan rumahnya disitu lho gaes', 'indrakusuma.udinus@gmail.com', '081212725911', 'greja abcs', 'http://localhost/inconference/daftar http://localhost/inconference/daftar http://localhost/inconference/daftar', 'drumer', '30042', 1, 1, '2017-05-27 09:41:02', '2017-05-28 07:58:36'),
(1008, '1', 1, 'INDRA ARIAWAN', 'l', '1999-11-11', 'Ariawan rumahnya disitu lho gaes', 'indrakusuma.udinus@gmail.com', '081212725911', 'greja abcs', 'http://localhost/inconference/daftar http://localhost/inconference/daftar http://localhost/inconference/daftar', 'drumer', '30040', 1, 1, '2017-05-27 09:47:47', '2017-05-28 10:12:41'),
(1009, '1', 1, 'INDRA ARIAWAN', 'l', '1999-11-11', 'Ariawan rumahnya disitu lho gaes', 'indrakusuma.udinus@gmail.com', '081212725911', 'greja abcs', 'http://localhost/inconference/daftar http://localhost/inconference/daftar http://localhost/inconference/daftar', 'drumer', '30067', 1, 1, '2017-05-27 09:54:03', '2017-05-28 11:31:22'),
(1010, '1', 1, 'INDRA ARIAWAN', 'l', '1999-11-11', 'Ariawan rumahnya disitu lho gaes', 'indrakusuma.udinus@gmail.com', '081212725911', 'greja abcs', 'http://localhost/inconference/daftar http://localhost/inconference/daftar http://localhost/inconference/daftar', 'drumer', '30074', 0, NULL, '2017-05-27 09:57:21', '2017-05-27 09:57:21'),
(1011, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150049', 0, NULL, '2017-05-27 11:08:28', '2017-05-27 11:08:28'),
(1012, '1', 1, 'INDRA ARIAWAN', 'l', '1972-12-05', 'http://localhost/inconference/index.php/register', 'indrakusuma.udinus@gmail.com', '08115011663', 'http://localhost/inconference/index.php/register', 'http://localhost/inconference/index.php/register', 'http://localhost/inconference/index.php/register', '30056', 0, NULL, '2017-05-27 11:11:22', '2017-05-27 11:11:22'),
(1013, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150106', 0, NULL, '2017-05-27 11:14:35', '2017-05-27 11:14:35'),
(1014, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150059', 0, NULL, '2017-05-27 11:17:34', '2017-05-27 11:17:34'),
(1015, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150060', 0, NULL, '2017-05-27 11:22:12', '2017-05-27 11:22:12'),
(1016, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150099', 0, NULL, '2017-05-27 11:23:20', '2017-05-27 11:23:20'),
(1017, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150026', 0, NULL, '2017-05-27 11:23:21', '2017-05-27 11:23:21'),
(1018, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150084', 0, NULL, '2017-05-27 11:23:59', '2017-05-27 11:23:59'),
(1019, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150082', 0, NULL, '2017-05-27 11:25:58', '2017-05-27 11:25:58'),
(1020, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150033', 0, NULL, '2017-05-27 11:26:45', '2017-05-27 11:26:45'),
(1021, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150104', 0, NULL, '2017-05-27 11:26:45', '2017-05-27 11:26:45'),
(1022, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150037', 0, NULL, '2017-05-27 11:28:02', '2017-05-27 11:28:02'),
(1023, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150070', 0, NULL, '2017-05-27 11:28:48', '2017-05-27 11:28:48'),
(1024, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150061', 0, NULL, '2017-05-27 11:31:11', '2017-05-27 11:31:11'),
(1025, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150103', 0, NULL, '2017-05-27 11:31:48', '2017-05-27 11:31:48'),
(1026, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150093', 0, NULL, '2017-05-27 11:33:07', '2017-05-27 11:33:07'),
(1027, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150035', 0, NULL, '2017-05-27 11:33:08', '2017-05-27 11:33:08'),
(1028, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150059', 0, NULL, '2017-05-27 11:35:32', '2017-05-27 11:35:32'),
(1029, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150043', 0, NULL, '2017-05-27 11:36:35', '2017-05-27 11:36:35'),
(1030, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150108', 0, NULL, '2017-05-27 11:40:22', '2017-05-27 11:40:22'),
(1031, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150075', 0, NULL, '2017-05-27 11:43:55', '2017-05-27 11:43:55'),
(1032, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150040', 0, NULL, '2017-05-27 11:46:21', '2017-05-27 11:46:21'),
(1033, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150080', 0, NULL, '2017-05-27 11:47:07', '2017-05-27 11:47:07'),
(1034, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150077', 0, NULL, '2017-05-27 11:55:50', '2017-05-27 11:55:50'),
(1035, '2', 5, 'Indra kusuma', 'l', '1999-11-11', 'nk misal emaile no-replay@inconference2017.com', 'indrakusuma.udinus@gmail.com', '081215618571', 'test aja sih', 'nk misal emaile no-replay@inconference2017.com', 'nk misal emaile', '150109', 0, NULL, '2017-05-27 11:57:09', '2017-05-27 11:57:09'),
(1036, '2', 4, 'Indra Kusuma', 'l', '1997-05-13', 'Semarang Barat, Pusponjolo', 'indrakusuma.udinus@gmail.com', '089522248642', 'DNCC Semarang', 'Jalan Nakula Raya 1', 'Komputer', '120039', 0, NULL, '2017-05-28 03:55:00', '2017-05-28 03:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE `slide_show` (
  `slide_id` int(11) NOT NULL,
  `nama_slide` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sys_log`
--

CREATE TABLE `sys_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(4) NOT NULL,
  `log_jenis` tinyint(4) NOT NULL,
  `log_waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_foto` varchar(200) NOT NULL,
  `user_role` enum('admin','comm','pid','marketing') NOT NULL,
  `user_status` enum('0','1') NOT NULL DEFAULT '1',
  `user_gabung` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_nama`, `user_email`, `user_password`, `user_foto`, `user_role`, `user_status`, `user_gabung`) VALUES
(1, 'Indra Kusuma', 'id.indrakusuma@gmail.com', '300a29a2fe6e701da25021b20bb3f00151bc5498', '', 'admin', '1', '2017-05-13 15:40:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`absen_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `perserta_id` (`peserta_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feed`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`peserta_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `slide_show`
--
ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `sys_log`
--
ALTER TABLE `sys_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`,`log_jenis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `absen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `peserta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1037;
--
-- AUTO_INCREMENT for table `slide_show`
--
ALTER TABLE `slide_show`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sys_log`
--
ALTER TABLE `sys_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`peserta_id`) REFERENCES `peserta` (`peserta_id`),
  ADD CONSTRAINT `absen_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `sys_log`
--
ALTER TABLE `sys_log`
  ADD CONSTRAINT `sys_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
