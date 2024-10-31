-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 10:21 AM
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
-- Database: `resume_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `resumeinfo`
--

CREATE TABLE `resumeinfo` (
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skl1` varchar(50) NOT NULL,
  `skl2` varchar(50) NOT NULL,
  `skl3` varchar(50) NOT NULL,
  `skl4` varchar(50) NOT NULL,
  `skl5` varchar(50) NOT NULL,
  `rc1` varchar(50) NOT NULL,
  `rc2` varchar(50) NOT NULL,
  `rc3` varchar(50) NOT NULL,
  `rc4` varchar(50) NOT NULL,
  `rc5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumeinfo`
--

INSERT INTO `resumeinfo` (`fullname`, `address`, `phone`, `email`, `skl1`, `skl2`, `skl3`, `skl4`, `skl5`, `rc1`, `rc2`, `rc3`, `rc4`, `rc5`) VALUES
('John Brent S. Gonzales', 'Sta.Barbara Aldama, Baliwag Bulacan', '09352660989', '202111813@btech.ph.education', 'Communication Skills', 'Serious and Honest Outlook', 'Positive Attitude', 'Proficient in English', 'Technology Literate', 'Technical Writing', 'Professional Ethics', 'Organizational Behavior', 'English Language and Literature', 'Computer Programming');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
