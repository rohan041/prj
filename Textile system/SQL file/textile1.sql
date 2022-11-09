-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 04:25 PM
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
-- Table structure for table `dailywork`
--

CREATE TABLE `dailywork` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `done` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailywork`
--

INSERT INTO `dailywork` (`id`, `date`, `e_name`, `type`, `done`, `price`, `d_name`, `email`) VALUES
(1, '2022-01-27', 'Rohan', 'C-Pallu', 20, 210, 'Golden', 'rohanpadasala041@gmail.com'),
(2, '2022-01-27', 'kirti', 'C-Pallu', 10, 210, 'Golden', 'rohanpadasala041@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `edec` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `ename`, `edec`, `date`, `amount`) VALUES
(1, 'tea', '4 chai ', '2022-01-27', 250),
(2, 'coffe', '2 chai', '0000-00-00', 0),
(3, 'coffe', 'wdefef', '2022-01-27', 525),
(4, 'Coffe', '4 Coffe', '0000-00-00', 250);

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
  `birthdate` date NOT NULL,
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
(30, 'Rohan Padasala', 2147483647, 2147483647, 'rahulpadasala041@gmail.com', '2022-01-12', 21, 'Male', 10500, 'Day', '39, Narved sagar soc ', 'Surat', 'Gujarat', 395010, '20201108_221438.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `wname` varchar(250) NOT NULL,
  `userid` int(11) NOT NULL,
  `withdraw` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `wname`, `userid`, `withdraw`, `datetime`, `image`) VALUES
(1, '', 0, 1000, '2022-01-22 10:37:00', 'laheriyagotapatti.jpg'),
(2, '', 0, 1000, '2022-01-13 03:42:00', 'gotapatti.jpeg'),
(3, '', 0, 1000, '2022-01-13 03:42:00', 'gotapatti.jpeg'),
(4, '', 0, 1000, '2022-01-13 03:42:00', 'gotapatti.jpeg'),
(5, '', 0, 1000, '2022-01-13 03:42:00', 'gotapatti.jpeg'),
(6, '', 0, 1000, '2022-01-13 03:42:00', 'gotapatti.jpeg'),
(7, '', 0, 1000, '2022-01-13 03:42:00', 'gotapatti.jpeg'),
(8, '', 0, 1000, '2022-01-13 03:42:00', 'gotapatti.jpeg'),
(9, '', 0, 1000, '2022-01-26 02:51:00', 'laheriyagotapatti.jpg'),
(10, '', 0, 2000, '2022-01-20 02:55:00', 'laheriyagotapatti.jpg'),
(11, '', 0, 2000, '2022-01-20 02:55:00', 'laheriyagotapatti.jpg'),
(13, '', 37, 2000, '2022-01-21 15:18:00', 'laheriyagotapatti.jpg'),
(14, '', 23, 2000, '2022-01-21 15:18:00', 'laheriyagotapatti.jpg'),
(15, '', 23, 2000, '2022-01-21 15:18:00', 'laheriyagotapatti.jpg'),
(16, '', 23, 500, '2022-01-27 15:45:00', 'laheriyagotapatti.jpg'),
(17, 'hello', 23, 500, '2022-01-27 15:45:00', 'laheriyagotapatti.jpg'),
(18, 'lkjkl', 37, 2000, '2022-01-19 16:15:00', 'bandhnigotapatti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'yellow', '#765', 'saree', 20, 110),
(3, 'hnh', '5252', 'vbg', 0, 52),
(4, 'tp', '2580', 'plo', 0, 250),
(5, 'dffv', 'fvfvf', 'bgbgb', 0, 25),
(6, '', '', '', 0, 0),
(7, '', '', '', 0, 0),
(8, 'hgf', 'hgf', 'hgfgh', 0, 2147483647),
(9, 'gtgg', 'rftg', 'tgtg', 0, 100);

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
(23, 'Rohan', 2147483647, 'rohanpadasala041@gmail.com', 'kk', 'worker', 'Active'),
(37, 'kirti', 2147483647, 'solankikirtiraj2001@gmail.com', 'kk', 'Worker', 'deactive');

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
  `updatestock` int(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `name`, `photo`, `type`, `stock`, `updatestock`, `price`) VALUES
(53, 'Golden', 'gotapatti.jpeg', 'C-Pallu', 250, 170, 210),
(54, 'Silver', 'bandhnigotapatti.jpg', 'Butta', 250, 150, 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailywork`
--
ALTER TABLE `dailywork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `dailywork`
--
ALTER TABLE `dailywork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
