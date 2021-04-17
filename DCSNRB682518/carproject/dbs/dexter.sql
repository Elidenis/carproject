-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 08:31 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dexter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'eli', 'eli@gmail.com', 'a38ec82c62af264c0a0768d1a2dcec22'),
(2, 'Eli', 'eli.com', 'b785441ca9558aec6f646d29f57debfe');

-- --------------------------------------------------------


--
-- Table structure for table `cars`
--
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `brand` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL,
  `seates` varchar(254) NOT NULL,
  `fuel_type` varchar(20) NOT NULL,
  `condition` varchar(54) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `image`, `seates`, `fuel_type`, `condition`, `price`) VALUES
(1, 'Harrier', 'Toyota', '1.jpg', '4-leathered', 'Deasel', 'Brand new', 5750.00),
(2, 'Hilux', 'Toyota', '2.jpg', '4-leathered', 'Deasel', 'Brand new', 4750.00),
(3, 'Probox', 'Toyota', '3.jpg', '6-nonleathered', 'super', 'Used', 3000.00),
(4, 'Wish', 'Toyota', '4.jpg', '4-non-leathered', 'super', 'Used', 3750.00),
(5, ' Aventador S', 'lamborghini', 'aventador.jpg', '2-leathered', 'premium fuel', 'Brand new', 13750.00),
(6, 'Urus', 'Lamborghini', '5.jpg', '4-leathered', 'premium fuel', 'Brand new', 9750.00),
(7, 'Camaro', 'Chevrolet', 'chevy1.jpg', '4-leathered', 'petrol', 'New', 7500.00),
(9, 'Cherolett 2011', 'Chevrolet', 'chevy2011.jpg', '4-non leathered', 'Diesel', 'New', 5500.00),
(11, 'Chevrolet 2017', 'Chevrolet', 'chevy2017.jpg', '2 Leathered', 'Diesel', 'New', 7500.00),
(14, 'Ferrari 458', 'Ferrari', 'f1.jpg', '2 Leathered', 'Premeum ', 'New', 7000.00),
(15, ' Fc Kerbeck Aston Martin ', 'Aston Martin ', 'Am1.jpg', '2 Leathered', 'Premeum', 'New', 8000.00),
(17, 'Aston Martin 2017', 'Aston Martin ', 'Am2.jpg', '2 non-Leathered', 'Premeum', 'New', 7000.00);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--
 DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
);

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`) VALUES
(3, 'user', '2019-03-31 18:47:37', 'hi'),
(4, 'user', '2019-03-31 18:54:49', 'good to have the comment section working as usual\r\nbut some times it sucks....   :-)'),
(5, 'user', '2019-04-01 00:03:59', 'comments testing too'),
(6, 'user', '2019-04-01 11:15:53', 'charles'),
(7, 'user', '2019-04-02 11:59:18', 'the service was great'),
(8, 'user', '2019-04-05 11:46:23', 'i love probox'),
(9, 'user', '2019-04-11 21:37:56', 'last check ups of the system to ensure no monkey businesses are encountered');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
 DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('', '', 'good to have the comment section working as usual\r\nbut some times it sucks.... :-)'),
('kioko', 'reubenkioko5@gmail.com', 'good to have the comment section working as usual\r\nbut some times it sucks.... :-)'),
('reuben', 'reubenkioko5@gmail.com', 'i am requesting for the new car if they are available'),
('reuben', 'reubenkioko5@gmail.com', 'new message from Charles'),
('aswani', 'reubenkioko5@gmail.com', 'The first comment from Aswani'),
('Reuben', 'reubenkioko@live.com', 'test of the comment section to ensure that all the messages are working as requested'),
('lewis ', 'lewisawiti@gmail.com', 'message test fro lewis Awiti'),
('chris', 'chrismumbo@gmail.com', 'i love general motors website');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
 DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Dexter', '$2y$10$EPGF25Bgyjr6Z.Sst58Uau.tRoiu.KwWKlkGFhG.Zo90jb/OMdsvy', '2019-03-31 18:08:16'),
(2, 'Alex', '$2y$10$gdI1yH.1ZpGjaDj57sl75ePc0j/jxQhqTH4YnG/tXZ9ljZ..cuz86', '2019-03-31 18:28:34'),
(3, 'kioko', '$2y$10$p5bWWaSbazoH8uAzBi1dheLhMUU3VBrWdi7y1RfGJG/JAnXyImmha', '2019-03-31 18:29:06'),
(4, 'ann', '$2y$10$KR8EE1A8S7GZcnrQtSXGPuBWnypzpqYgE1tvAdofUR4joQ7rmnjcK', '2019-04-02 11:20:08'),
(5, 'Aswani', '$2y$10$b8opgKeNNgbb01t76d51/uaH/V65lTvgyoc62kbk7Q75U57hQV8AO', '2019-04-02 11:57:30'),
(6, 'chris', '$2y$10$MwdPCpREcwbJvYlP0IKpnef8tKDBoww8n0chWZkwjAFVms9Qso8aq', '2019-04-05 11:45:51'),
(7, 'vincent', '$2y$10$zJJCIRCM9at3EU8kzDEtZeo/B0MGMJQoH1BEC.jHai/1Rg36PzAJG', '2019-04-11 17:17:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

