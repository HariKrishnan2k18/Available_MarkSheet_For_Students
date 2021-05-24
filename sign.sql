-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 03:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign`
--

-- --------------------------------------------------------

--
-- Table structure for table `agri`
--

CREATE TABLE `agri` (
  `Register Number` int(20) NOT NULL,
  `Name of the Student` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `Department` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `End Semester Mark Sheet` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Provisional Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Consolidate Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Degree Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Contact Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE `civil` (
  `Register Number` int(20) NOT NULL,
  `Name of the Student` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `Department` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `End Semester Mark Sheet` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Provisional Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Consolidate Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Degree Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Contact Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE `cse` (
  `Register Number` int(20) NOT NULL,
  `Name of the Student` varchar(50) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `End Semester Mark Sheet` varchar(20) NOT NULL,
  `Provisional Certificate` varchar(20) NOT NULL,
  `Consolidate Certificate` varchar(20) NOT NULL,
  `Degree Certificate` varchar(20) NOT NULL,
  `Contact Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ece`
--

CREATE TABLE `ece` (
  `Register Number` int(20) NOT NULL,
  `Name of the Student` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `Department` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `End Semester Mark Sheet` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Provisional Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Consolidate Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Degree Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Contact Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `eee`
--

CREATE TABLE `eee` (
  `Register Number` int(20) NOT NULL,
  `Name of the Student` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `Department` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `End Semester Mark Sheet` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Provisional Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Consolidate Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Degree Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Contact Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `mech`
--

CREATE TABLE `mech` (
  `Register Number` int(20) NOT NULL,
  `Name of the Student` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `Department` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `End Semester Mark Sheet` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Provisional Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Consolidate Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Degree Certificate` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Contact Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `pwd` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`username`, `pwd`) VALUES
('admin', 'admin@1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
