-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 11:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `userid`, `name`, `contact`, `address`, `email`) VALUES
(84, 2, 'esha', 2147483647, 'panjim goa', 'sdnd710@gmail.com'),
(85, 2, 'shika', 2147483647, 'panjim goa', 'shika.07.d@gmail.com'),
(88, 26, 'Shika Desai', 2147483647, 'Alto Porvorim Goa', 'sdnd710@gmail.com'),
(89, 26, 'Shika Desai', 2147483647, 'Alto Porvorim Goa', 'sdnd710@gmail.com'),
(101, 28, 'Shika Desai', 1234567891, 'Alto Porvorim Goa', 'sdnd710@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `username`, `password`) VALUES
(2, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(4, 'esha', '6057f13c496ecf7fd777ceb9e79ae285'),
(5, 'esha', '1bada9cfa956b4ad333f3694d4280d8f'),
(7, 'hello', '14ccb749cedee05915e38584ef35b596'),
(8, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(9, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(10, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(11, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(12, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(13, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(14, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(15, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(16, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(17, 'shikadesai', '202cb962ac59075b964b07152d234b70'),
(18, 'shikadesai', '77ec8952be7c961a1b975a00de15a630'),
(19, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(20, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(21, 'shika shika', '14ccb749cedee05915e38584ef35b596'),
(22, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(23, 'tyro', '49f68a5c8493ec2c0bf489821c21fc3b'),
(24, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(25, 'djkhskjhd', '14ccb749cedee05915e38584ef35b596'),
(26, 'shika', '14ccb749cedee05915e38584ef35b596'),
(27, 'hey', '14ccb749cedee05915e38584ef35b596'),
(28, 'nilima', '14ccb749cedee05915e38584ef35b596');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
