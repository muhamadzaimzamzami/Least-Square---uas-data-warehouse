-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2022 at 05:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datawarehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `least`
--

CREATE TABLE `least` (
  `a` varchar(40) NOT NULL,
  `b` varchar(40) NOT NULL,
  `x` varchar(40) NOT NULL,
  `n` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `least`
--

INSERT INTO `least` (`a`, `b`, `x`, `n`) VALUES
('589.00', '71.25', '3', 7);

-- --------------------------------------------------------

--
-- Table structure for table `omset`
--

CREATE TABLE `omset` (
  `tanggal` date NOT NULL,
  `omset` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `omset`
--

INSERT INTO `omset` (`tanggal`, `omset`) VALUES
('2005-05-24', '29.9'),
('2005-05-25', '573.60'),
('2005-05-26', '754.30'),
('2005-05-27', '684.30'),
('2005-05-28', '804.00'),
('2005-05-29', '648.50'),
('2005-05-30', '628.40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
