-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2024 at 06:38 AM
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
-- Database: `navanga`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `code` varchar(5) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `daysavailable` text DEFAULT NULL,
  `nin` int(11) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `cvurl` varchar(50) DEFAULT NULL,
  `profilepic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `code`, `phone`, `title`, `specialization`, `address`, `city`, `password`, `zip`, `bio`, `daysavailable`, `nin`, `district`, `cvurl`, `profilepic`) VALUES
(2, 'joh@gmail.com', 'Grace', 'jay', '255', '', 'mr', 'General Medicine', 'kinondoni , Dar es salaamklgealgja', 'Dar es Salaam', '$2y$10$fKD8.3AFm7JtQLiE/jRFuuJlvGwLWR0gll6RjDi17hJJINDVpbq7G', '11101', 'it is me', '', 358740, 'kinondoni', '', ''),
(3, 'joeh@gmail.com', 'Joe', 'Joe', '+255', '7987987', NULL, NULL, NULL, NULL, '$2y$10$yamsl/Lcih1mrt8Lw2KoGOaP2JtmBLvtn6fcBLfGWpkSbLE8eFdv2', '', '', '', 0, '', '', ''),
(10, 'naah@gmail.com', 'nachy', 'b', '+255', '58320859', NULL, NULL, NULL, NULL, '$2y$10$2ZfcBbDRdK8Qz8hJPLh.x.7FZ2xrJ9BaJcGj0UorImFElD2uxTYue', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
