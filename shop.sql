-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 04:26 AM
-- Server version: 8.0.22
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productCode` int NOT NULL,
  `productName` varchar(250) DEFAULT NULL,
  `productType` varchar(250) DEFAULT NULL,
  `buyPrice` varchar(250) DEFAULT NULL,
  `productCount` varchar(250) DEFAULT NULL,
  `productDate` varchar(250) DEFAULT NULL,
  `productDesc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productCode`, `productName`, `productType`, `buyPrice`, `productCount`, `productDate`, `productDesc`) VALUES
(5, 'vvvvvvvvvv', 'Tủ vvv', 'vvvvvv', 'vvvv', '11/11/2020', 'asdasdsad'),
(6, 'sadasdsad', 'Điện thoại', 'asdasdasd', 'asdsadsad', '11/11/2020', 'sadasds'),
(7, 'Duc', 'Điều hòa', '70000', '10', '11/11/2020', 'akkakka'),
(8, 'Anh duong', 'Tivi', 'aaaaaa', 'aaaaa', '11/11/2020', 'aaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productCode` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
