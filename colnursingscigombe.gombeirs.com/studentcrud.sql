-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 12:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `studentid` int(11) NOT NULL,
  `refNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `dateTime` datetime NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`studentid`, `refNo`, `firstName`, `email`, `purpose`, `dateTime`, `amount`) VALUES
(1, 'ND752533422206', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-15 15:32:03', 2000.00),
(2, 'ND620263785512', 'Musa Musa', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-15 15:32:10', 5000.00),
(3, 'ND931488644590', 'hdfgh', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 01:13:02', 7000.00),
(4, 'ND977653575071', 'Abdul Abdul', 'test@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:27:35', 10000.00),
(5, 'ND109413874773', 'Test', 'cls@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:30:23', 100.00),
(6, 'ND620235134743', 'Another', 'anothe@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:35:10', 1000.00),
(7, 'ND854004353271', '', '', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:35:35', 0.00),
(8, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(9, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(10, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(11, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(12, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(13, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(14, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(15, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(16, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(17, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(18, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00),
(19, 'ND929613391250', 'Abdulrahman Ibn-Saeed', 'abdrhmnsaeed@gmail.com', 'Screening Fees 2023/2024 Session (Basic Nursing ND/HND)', '2024-03-17 10:39:19', 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin123', '2024-03-17 10:00:00'),
(2, 'test', '$2y$10$/E5m30r7.xubT3xZ0HynbePoTWkdtmlD861JfQ1OotNzmk5jPwb6S', '2024-03-16 23:24:15'),
(3, 'ibnsaeed', '$2y$10$FJk9GN1UFXpVcmBb5/MkDO.wC6Hh.fJ12dcf6gONgejGGiCm6WeoS', '2024-03-17 09:40:27'),
(4, 'test2', '$2y$10$B8Q7Z52iCUHd/0RkHSh0DuQ59pRbkTAFFvrYS986KuAKMKITFDoFG', '2024-03-17 09:42:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
