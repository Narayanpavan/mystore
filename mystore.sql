-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 06:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `dob` date NOT NULL,
  `acno` int(25) NOT NULL,
  `slno` text NOT NULL,
  `contactno` int(10) NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`id`, `name`, `email`, `gender`, `dob`, `acno`, `slno`, `contactno`, `city`, `address`) VALUES
(4, 'koushik', 'koushik@gmail.com', 'male', '2000-12-14', 2147483647, 'P12SDT58HI', 2147483647, 'rajamundry', 'near town police station'),
(5, 'pavan', 'pavan@gmail.com', 'male', '0000-00-00', 2147483647, '4LO123SW5L', 2147483647, 'rajamundry', 'ramalyam veedhi'),
(6, 'narayan', 'narayan@gmail.com', 'male', '1992-12-27', 2147483647, '2AHJ34KL56', 871225886, 'ramavaram', 'main road');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(4, 'pavan', 'pavan@gmail.com', '01df6b2cdb347085cfaf79ebb985a25b', '7995350886', 'samarlakota', 'ramalayam veedhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
