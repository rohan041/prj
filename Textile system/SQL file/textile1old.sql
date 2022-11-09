-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 05:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textile1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mob` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `mob`, `name`) VALUES
('navnit', 'navnit', 'onlinetextileportal159@gmail.com', 1234456772, 'Rohan');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) NOT NULL,
  `inquiryname` varchar(200) NOT NULL,
  `description` varchar(1100) NOT NULL,
  `machine` int(10) NOT NULL,
  `inquiryimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `inquiryname`, `description`, `machine`, `inquiryimage`) VALUES
(1, 'd', 'd', 3, ''),
(2, 'kj', 'sd', 3, ''),
(3, 'kk', 'kkkk', 2, 'example2.jpeg'),
(4, 'k', 'as', 3, 'example2.jpeg'),
(5, 'jkk', 'uytu', 2, 'example2-300x300.jpg'),
(6, 'ff', 'ff', 3, 'example2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phno1` int(13) NOT NULL,
  `phno2` int(13) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `birthdate` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `salarye` int(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `adress` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `phno1`, `phno2`, `emailid`, `birthdate`, `age`, `gender`, `salarye`, `shift`, `adress`, `city`, `state`, `pincode`, `proof`) VALUES
(12, 'Rahul', 2147483647, 2147483647, 'rohanpadasala041@gmail.com', '2021-12-28', 21, 'Male', 12500, 'Day', '39, Narved sagar soc...', 'Surat', 'Gujarat', 395010, 'laheriyagotapatti.jpg'),
(19, 'h', 1234567891, 1237894561, 'b@gmail.com', '2022-01-08', 21, 'Female', 50000, 'Day', 'bjh', 'hgv', 'Kerala', 391760, '0 lvl.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `threadname` varchar(50) NOT NULL,
  `colorcode` varchar(30) NOT NULL,
  `type` varchar(25) NOT NULL,
  `remainthread` int(10) NOT NULL,
  `totalstock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `threadname`, `colorcode`, `type`, `remainthread`, `totalstock`) VALUES
(1, '', '#765', 'saree', 11, 40),
(2, 'yellow', '#765', 'saree', 0, 40),
(3, 'hnh', '5252', 'vbg', 0, 52);

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`id`, `name`, `phone`, `email`, `password`, `type`, `status`) VALUES
(1, 'hetupatel', 1234567890, 'hpatel@gmail.com', '1234', 'Worker', ''),
(2, 'hetupatel', 1234567890, 'hpatel@gmail.com', 'h123', 'Supplier', ''),
(3, 'h', 2147483647, 'h@gmail.com', 'h123', 'Broker', ''),
(4, 'h', 2147483647, 'h@gmail.com', 'h123', 'Broker', ''),
(5, 'kk', 2147483647, 'hpatel@gmail.com', 'h123', 'Supplier', ''),
(6, 'kk', 2147483647, 'hpatel@gmail.com', 'h123', 'Supplier', ''),
(7, 'kk', 2147483647, 'hpatel@gmail.com', 'h123', 'Supplier', ''),
(8, 'kk', 2147483647, 'hpatel@gmail.com', 'h123', 'Worker', ''),
(9, 'kk', 2147483647, 'hpatel@gmail.com', 'h123', 'Worker', ''),
(10, 'kk', 2147483647, 'hpatel@gmail.com', 'h123', 'Worker', ''),
(11, 'kk', 2147483647, 'hpatel@gmail.com', '1234', 'Worker', ''),
(12, 'hetvi', 2147483647, 'h@gmail.com', 'h123', 'Worker', '');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `stock` int(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `name`, `photo`, `type`, `stock`, `price`) VALUES
(1, 'laheriya gota patti1', 'gotapatti.jpeg', 'pallu', 35, 800),
(2, 'yellow Jari', 'laheriyagotapatti.jpg', 'palluu', 150, 200),
(3, 'Sample ', 'bandhnigotapatti.jpg', 'Butta', 28, 0),
(5, 'full', 'gotapatti.jpeg', 'yuio', 2, 200),
(30, 'Rohan', 'laheriyagotapatti.jpg', 'gotapatti', 0, 1000),
(31, 'Rohan', 'laheriyagotapatti.jpg', 'laheriya', 0, 2000),
(32, 'fg', 'bandhnigotapatti.jpg', 'pallu', 0, 552),
(33, 'sddf', 'laheriyagotapatti.jpg', 'df', 0, 36),
(34, 'frfr', 'laheriyagotapatti.jpg', 'efe', 0, 55),
(35, 'dfvf', 'laheriyagotapatti.jpg', 'fgf', 0, 22),
(36, 'frg', 'gotapatti.jpeg', 'ddgf', 0, 425),
(37, 'ffrg', 'gotapatti.jpeg', '75', 0, 588),
(38, 'ddf', 'gotapatti.jpeg', '52', 0, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
