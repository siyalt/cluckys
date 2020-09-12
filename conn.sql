-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 12:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_detail`
--

CREATE TABLE `bussiness_detail` (
  `Company` varchar(25) NOT NULL,
  `Company_Details` varchar(50) NOT NULL,
  `current_Bussines` varchar(50) NOT NULL,
  `Experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bussiness_detail`
--

INSERT INTO `bussiness_detail` (`Company`, `Company_Details`, `current_Bussines`, `Experience`) VALUES
('Talha', 'this is my company', 'shop', '1'),
('Mavensol', 'Our comapny', 'software House ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Name`, `Email`, `phone_No`, `Message`) VALUES
('Muhammad Talha', 'abcde', '123', 'wxyz'),
('Muhammad Talha', 'frogrigami@gmail.com', '03360342810', 'abouuut.');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_No` varchar(11) NOT NULL,
  `country` varchar(11) NOT NULL,
  `city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`Name`, `Email`, `Phone_No`, `country`, `city`) VALUES
('Muhammad Talha', 'abcde', '12345', 'wxyz', 'ola'),
('Ahmed', '41738@students.buitms.edu.pk', '03325279448', 'pakistan', 'lahore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
