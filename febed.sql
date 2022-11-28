-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 11:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `febed`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `service_name` varchar(999) NOT NULL,
  `description` text NOT NULL,
  `price` int(99) NOT NULL,
  `status` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `service_name`, `description`, `price`, `status`) VALUES
(1, 'ayo', 'mo ay oajlahsjkhb', 5333, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactionservice`
--

CREATE TABLE `transactionservice` (
  `tsid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `name` varchar(999) NOT NULL,
  `description` varchar(999) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trasaction`
--

CREATE TABLE `trasaction` (
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `sex` varchar(9) NOT NULL,
  `phone_number` varchar(99) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `status` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `sex`, `phone_number`, `email`, `password`, `status`) VALUES
(17, 'nicodemie', 'delgado', 'Male', '09166323504', 'dnicodemie@gmail.com', '1234', 1),
(18, 'Adrean', 'delgado', 'Male', '09166323504', 'dnicodemie@gmail.com', '1234', 1),
(24, 'qweqw', 'eqweqwe', 'Male', 'qweqwe', 'eqweewrwe', 'werwerwer', 1),
(25, 'nicodemie', 'delgado', 'Male', '123', 'dnicodemie@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `transactionservice`
--
ALTER TABLE `transactionservice`
  ADD PRIMARY KEY (`tsid`);

--
-- Indexes for table `trasaction`
--
ALTER TABLE `trasaction`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactionservice`
--
ALTER TABLE `transactionservice`
  MODIFY `tsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trasaction`
--
ALTER TABLE `trasaction`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
