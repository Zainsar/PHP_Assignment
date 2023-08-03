-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 10:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`FirstName`, `LastName`, `Email`, `Password`, `Age`, `Gender`) VALUES
('Zain', 'Sarfraz', 'zainsarfraz82@gmail.com', 'zain123', 19, 'male'),
('Mahrukh', 'Bilal', 'mahrukhbilal2001@gmail.com', 'mano', 20, 'Female'),
('Tayyaba', 'Zain', 'tayyabashakeel23@gmail.com', 'Tabbu', 21, 'Female'),
('Sohaib ', 'Sarfraz', 'sohaibsarfraz88@gmail.com', 'Zain1122', 17, 'Male'),
('Taha', 'Zahid', 'taha123@gmail.com', 'taha12345', 17, 'Male'),
('Ebad', 'uddin', 'Ebad@gmail.com', 'Ebad', 25, 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
