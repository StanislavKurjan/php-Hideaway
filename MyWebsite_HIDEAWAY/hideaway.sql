-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 03:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hideaway`
--

-- --------------------------------------------------------

--
-- Table structure for table `hideaway_clients`
--

CREATE TABLE `hideaway_clients` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone number` varchar(15) NOT NULL,
  `Message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hideaway_clients`
--

INSERT INTO `hideaway_clients` (`Name`, `Email`, `Phone number`, `Message`) VALUES
('Ivan', 'susanin@gmail.com', '+371 2989086', 'Hello, I would like to ask about different types of projects and their price. Just to know I understood correctly'),
('James', 'asdas@gmail.com', '12312', 'asdasdasd'),
('julia', 'asa@gmail.com', '20064545', 'Hello, I would like to ask about different types of projects and their price. Just to know I understood correctly');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
