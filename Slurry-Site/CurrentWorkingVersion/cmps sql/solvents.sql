-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2025 at 10:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmps`
--

-- --------------------------------------------------------

--
-- Table structure for table `solvents`
--

CREATE TABLE `solvents` (
  `Solvents` varchar(50) NOT NULL,
  `Purpose` varchar(200) NOT NULL
) ;

--
-- Dumping data for table `solvents`
--

INSERT INTO `solvents` (`Solvents`, `Purpose`) VALUES
('Ethylenediamine', 'Capping or Stablizing'),
('Ethanol', 'Emulsion'),
('Ethylene Glycol', 'Surfactant and Capping'),
('Cyclohexane', 'Emulsion'),
('Hexanol', 'Emulsion'),
('Diphenyl Ether', 'Shape Control'),
('Oleylamine', 'Surfactant and Capping'),
('1,4 Butanediol	', 'Capping Agent\r\n');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
