-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 06:54 AM
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
-- Database: `internet-cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminName` varchar(100) NOT NULL,
  `adminPassword` varchar(30) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPhone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'sha', 'sha@gmail.com', '1234567890', '$2y$10$DnMqxS9nwxDC.xGyagifD.ENZXIvPlhejakFf/XYf6i9xbrR/8Fua'),
(3, 'siva', 'siva@gmail.com', '1234567899', '$2y$10$xZv7BU6keIyGN673VyloMeX5ByNcGUna3XGIWsDGsfhEXbi08QZWG'),
(4, 'Thiru', 'thiru@gmail.com', '1234567890', '$2y$10$t03/6qsPlPxCkzxCA4YCF.XTOqxHCevrpPax9k/4as2onOITQv46W'),
(5, 'Vel', 'vel@gmail.com', '1234567890', '$2y$10$ko34e7TWPlOXjScJE4WXAee93USDdlhAzpeFXqE28FboccZ9lYcUS'),
(6, 'sankar', 'sankar@gmail.com', '1234567890', '$2y$10$o5SQiolCMbavzn/FteE23.AHqydTOWOX56J24Yku/.gDp9nsY731u'),
(7, 'kiru', 'kiru@gmail.com', '9876543210', '$2y$10$n3vcfKBYKarNyIa5wGuKxu260ka.KuaY/X1mshUj.0TNduKb41d8i'),
(8, 'shree', 'shree@gmail.com', '0123456789', '$2y$10$7Rni5STyGVbaJmxsoPW1ruAa//VsOkybb272Ca.sVx4O1dZqlwzHu'),
(9, 'pandy', 'pandy@gmail.com', '1234567890', '$2y$10$kWc4DQU7WbW4vdmdPBhPS.UJRkA2v1W1uZhcoEGsRwhpHAhDJsQn2'),
(10, 'Shaganashree P L', 'shaganashree.22cs@gmail.com', '7094521319', '$2y$10$e.ofJ0mg8FRUnmt4dzxkneG6cvOAXT.YFHgrHM3C2fPvaMEy2p6.a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
