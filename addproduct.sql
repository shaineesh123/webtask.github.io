-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 06:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educretinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(10) NOT NULL,
  `names` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `dess` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `names`, `price`, `dess`, `image`) VALUES
(36, 'Gown', 5000, 'Stylish', 'all_images/43513b5911cc545ff98edcf4464be83cgown.jpg'),
(37, 'Top', 5800, 'Black and white', 'all_images/c10ac5312ba5f918d19426ec9bac9164top.jpg'),
(38, 'Lungi', 600, 'White', 'all_images/e1b348ba222aafefa48bc2ba81e11ebelungi.jpg'),
(41, 'shorts', 250, 'good', 'all_images/3f862b0e0201eda7242e758e6dca7d54chaddi.jpg'),
(42, 'shorts', 250, 'good', 'all_images/062590df906fd0fa037b80b9f6f1c46bchaddi.jpg'),
(43, 'asa', 200, 'Pure Cotton', 'all_images/389deba25a580c2760ba2aea4490ad1ashirt.jpg'),
(44, 'asa', 200, 'Pure Cotton', 'all_images/50b23c4ddbd04de62874aab1e7c8a18cshirt.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
