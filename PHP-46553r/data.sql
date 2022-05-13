-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 10:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php46553r`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `EGN` bigint(10) NOT NULL,
  `full_name` text NOT NULL,
  `gender` tinytext NOT NULL,
  `age` tinyint(4) NOT NULL,
  `income_value` int(11) NOT NULL,
  `social_help` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`EGN`, `full_name`, `gender`, `age`, `income_value`, `social_help`) VALUES
(1234567899, 'Kire Vko Radinski', 'Male', 20, 1000, 0),
(3216549875, 'Mark Tom Cruise', 'Male', 48, 36584, 0),
(5648972315, 'Lili Sneza Snezanova', 'Female', 48, 1200, 1),
(6543219876, 'Sneki Leona Spit', 'Female', 28, 899556, 0),
(7856927364, 'Leidy Queen Gaga', 'Female', 42, 9856425, 0),
(9874563210, 'Poki Aco Predare', 'Male', 62, 1200, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`EGN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
