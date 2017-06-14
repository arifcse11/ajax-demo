-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 12:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_names`
--

CREATE TABLE `car_names` (
  `id` int(11) NOT NULL,
  `cars` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_names`
--

INSERT INTO `car_names` (`id`, `cars`) VALUES
(1, 'BMW'),
(2, 'Yamaha'),
(3, 'Honda'),
(4, 'Maruti'),
(5, 'Suzuki'),
(6, 'Discover'),
(7, 'Pulsar'),
(8, 'Bajaj'),
(9, 'Hero'),
(10, 'Toyota'),
(11, 'New Car'),
(12, 'Bad Car'),
(16, 'Example');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_names`
--
ALTER TABLE `car_names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_names`
--
ALTER TABLE `car_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
