-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pelajar`
--

CREATE TABLE `info_pelajar` (
  `id` int(3) NOT NULL,
  `no_ndp` int(9) NOT NULL,
  `nama_pelajar` varchar(50) NOT NULL,
  `no_kp` varchar(50) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pelajar`
--

INSERT INTO `info_pelajar` (`id`, `no_ndp`, `nama_pelajar`, `no_kp`, `jantina`, `no_hp`) VALUES
(1, 23221084, 'AINA ATIKAH BINTI MOHD AZHAR', '20828160168', 'Perempuan', 'aina@gmail.com'),
(2, 23221102, 'AINA NAJWA BINTI AMRAN', '21013031452', 'Perempuan', 'najwa@gmail.com'),
(3, 23221157, 'ALLYSSA BINTI ABDULLAH', '31206140104', 'Perempuan', 'allyssa@gmail.com'),
(4, 23221132, 'HANIF FAISAL BIN HASMAZI', '20723081107', 'Lelaki', 'faisal@gmail.com'),
(5, 23221100, 'ISHUAARIYAA A/P KRISHNAN', '30526141256', 'Perempuan', 'ishu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
