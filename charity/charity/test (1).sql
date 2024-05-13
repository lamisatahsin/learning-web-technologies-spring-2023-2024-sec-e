-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 08:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthDate` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPhoneNum` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `userName`, `gender`, `birthDate`, `userEmail`, `userPhoneNum`, `userPassword`) VALUES
(0, 'admin', 'admin', 'admin', 'Male', '2024-04-03', 'admin@gmail.com', '01826611700', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `request_donation`
--

CREATE TABLE `request_donation` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(11) NOT NULL,
  `from_userID` int(100) NOT NULL,
  `to_userID` int(100) NOT NULL,
  `amout` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `from_userID`, `to_userID`, `amout`) VALUES
(0, 0, 0, 200),
(0, 0, 0, 200),
(0, 4, 6, 200),
(0, 11, 10, 200),
(0, 10, 11, 200),
(0, 10, 10, 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthDate` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPhoneNum` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `userName`, `gender`, `birthDate`, `userEmail`, `userPhoneNum`, `userPassword`) VALUES
(10, 'test', 'test', 'test', 'male', '2024-05-06', 'test@gmail.com', '01826611700', 'test'),
(11, 'test2', 'test2', 'test2', 'female', '2024-05-09', 'test2@gmail.com', '01826611700', 'test2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_donation`
--
ALTER TABLE `request_donation`
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
-- AUTO_INCREMENT for table `request_donation`
--
ALTER TABLE `request_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
