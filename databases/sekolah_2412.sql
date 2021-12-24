-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 06:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`, `level`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggal lahir` date NOT NULL,
  `tempat lahir` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `NIP`, `nama`, `password`, `tanggal lahir`, `tempat lahir`, `foto`) VALUES
(1, '20000923', 'Tomking Munch', '47f3e13cf5ef1ec5771ff26b6e665124', '2000-09-23', 'Bontang', ''),
(2, '200101101', 'Hana Glorya', '42c5bd6564f82f11b76811e98f093baa', '2001-10-01', 'Batang', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(8) NOT NULL,
  `Kode_guru` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `mapel`, `jam`, `hari`, `Kode_guru`) VALUES
(1, 'PJORK', '07:00:00', 'Senin', 'OT'),
(2, 'BIologi', '08:30:00', 'Senin', 'SW'),
(3, 'Agama', '10:15:00', 'Senin', 'PO'),
(4, 'Kesenian', '11:45:00', 'Senin', 'SM'),
(5, 'Matematika Minat', '07:00:00', 'Selasa', 'UL'),
(6, 'Sejarah Indonesia', '08:30:00', 'Selasa', 'RL'),
(7, 'Fisika', '10:15:00', 'Selasa', 'PS'),
(8, 'TIK', '11:45:00', 'Selasa', 'TD'),
(9, 'Kimia', '07:00:00', 'Rabu', 'SS'),
(10, 'Bahasa Inggris', '08:30:00', 'Rabu', 'WS'),
(11, 'Bahasa Indonesia', '10:15:00', 'Rabu', 'MH'),
(12, 'PPkn', '11:45:00', 'Rabu', 'AS'),
(13, 'Bahasa Inggris LM', '07:00:00', 'Kamis', 'WS'),
(14, 'BTQ', '08:30:00', 'Kamis', 'SP'),
(15, 'Seni Budaya', '10:15:00', 'Kamis', 'TU'),
(16, 'Tahfidz', '11:45:00', 'Kamis', 'TI'),
(17, 'Matematika', '07:00:00', 'Jumat', 'MM'),
(18, 'KWU', '08:30:00', 'Jumat', 'UT'),
(19, 'Sosiologi LM', '10:15:00', 'Jumat', 'SB'),
(20, 'EC', '12:45:00', 'Jumat', 'KO');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`id`, `nama`, `pekerjaan`, `telepon`) VALUES
(1, 'Alip fiyanto', 'Kuli Metaverse', '085218165138'),
(2, 'Alrov', 'Kuli in Real life', '04513214');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `id_orangtua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `NIS`, `nama`, `Agama`, `tanggal_lahir`, `tempat_lahir`, `kelas`, `foto`, `password`, `Jenis_kelamin`, `id_orangtua`) VALUES
(1, '1234567890', 'Andi', 'Islam', '2021-11-11', 'Samarinda', 'IPA 1', 'images/241220210608131619442388210.jpg', '8555f45b58e4806a1f68627339644129', 'Perempuan', 0),
(2, '1234567891', 'Nizar', 'Islam', '2009-12-18', 'Balikpapan', 'IPS 3', 'images/24122021060804sample foto.jpg', 'bf93e5f003e40c3fba44e512aecd3cdc', 'Perempuan', 0),
(5, '1234567892', 'Thomas Dwi Awaka', 'Budha', '2000-07-14', 'Bandung', 'IPA 0', 'images/241220210607541619442152869.jpg', '', 'Perempuan', 0),
(6, '1234567893', 'Hana', 'Islam', '2000-05-16', 'Jakarta', 'IPA 1', 'images/241220210515441618478760999.jpg', '', 'Perempuan', 0),
(7, '1234567894', 'alexunder', 'Konghucu', '2001-09-24', 'Bontang', 'IPA 2', 'images/241220210517171619442317584.jpg', '', 'Perempuan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
