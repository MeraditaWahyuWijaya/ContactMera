-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 01:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactmera`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmera`
--

CREATE TABLE `contactmera` (
  `No ID` int(11) NOT NULL,
  `Nama` varchar(60) DEFAULT NULL,
  `NIM` int(30) DEFAULT NULL,
  `Kelas` varchar(3) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `saran` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactmera`
--

INSERT INTO `contactmera` (`No ID`, `Nama`, `NIM`, `Kelas`, `Email`, `Gender`, `saran`) VALUES
(1, 'guggg', 34343, 'GUY', 'meraditaw@gmail.com', 'Male', 'vyvhvhvhvhv'),
(2, 'gggh', 6778, '6y', 'ghhni@gnakl.con', 'Male', 'hhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmera`
--
ALTER TABLE `contactmera`
  ADD PRIMARY KEY (`No ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmera`
--
ALTER TABLE `contactmera`
  MODIFY `No ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
