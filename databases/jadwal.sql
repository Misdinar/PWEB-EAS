-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 06:44 AM
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
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(8) NOT NULL,
  `Kode guru` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `mapel`, `jam`, `hari`, `Kode guru`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
