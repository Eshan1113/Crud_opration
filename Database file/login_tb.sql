-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 01:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `id` int(255) NOT NULL,
  `Login_email` varchar(100) NOT NULL,
  `Login_pswrd` varchar(255) NOT NULL,
  `Login_role` varchar(10) NOT NULL,
  `Login_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`id`, `Login_email`, `Login_pswrd`, `Login_role`, `Login_status`) VALUES
(3, 'eshandananjaya99@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 1),
(7, 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 1),
(8, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1),
(9, 'eshandananjaya98@gmail.com', '4a35b3631f8d05ec0bed7c5edef53174', 'user', 1),
(10, 'eshandananjaya97@gmail.com', '4a35b3631f8d05ec0bed7c5edef53174', 'user', 1),
(11, 'eshandananjaya96@gmail.com', '4a35b3631f8d05ec0bed7c5edef53174', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
