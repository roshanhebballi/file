-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 11:57 AM
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
-- Database: `developthon`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `gravida` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `babyweight` float NOT NULL,
  `mortality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Hname` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `DOD` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `taluka` varchar(255) NOT NULL,
  `cluster` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engagement`
--

CREATE TABLE `engagement` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `Hrisk` varchar(255) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `timespent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `clarity` varchar(255) NOT NULL,
  `useful` varchar(255) NOT NULL,
  `understand` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itablet`
--

CREATE TABLE `itablet` (
  `id` int(11) NOT NULL,
  `3month` varchar(255) NOT NULL,
  `4month` varchar(255) NOT NULL,
  `5month` varchar(255) NOT NULL,
  `inject` varchar(255) NOT NULL,
  `inject1` varchar(255) NOT NULL,
  `inject2` varchar(255) NOT NULL,
  `Bdose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mrecord`
--

CREATE TABLE `mrecord` (
  `id` int(11) NOT NULL,
  `HB` int(11) NOT NULL,
  `BP` float NOT NULL,
  `Weigth` float NOT NULL,
  `urine` varchar(255) NOT NULL,
  `scan1` varchar(255) NOT NULL,
  `scan2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD KEY `id` (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagement`
--
ALTER TABLE `engagement`
  ADD KEY `id` (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `id` (`id`);

--
-- Indexes for table `itablet`
--
ALTER TABLE `itablet`
  ADD KEY `id` (`id`);

--
-- Indexes for table `mrecord`
--
ALTER TABLE `mrecord`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`id`) REFERENCES `details` (`id`);

--
-- Constraints for table `engagement`
--
ALTER TABLE `engagement`
  ADD CONSTRAINT `engagement_ibfk_1` FOREIGN KEY (`id`) REFERENCES `details` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id`) REFERENCES `details` (`id`);

--
-- Constraints for table `itablet`
--
ALTER TABLE `itablet`
  ADD CONSTRAINT `itablet_ibfk_1` FOREIGN KEY (`id`) REFERENCES `details` (`id`);

--
-- Constraints for table `mrecord`
--
ALTER TABLE `mrecord`
  ADD CONSTRAINT `mrecord_ibfk_1` FOREIGN KEY (`id`) REFERENCES `details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
