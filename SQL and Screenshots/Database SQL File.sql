-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 11:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacifictrails`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activityid` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `summary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activityid`, `description`, `summary`) VALUES
(1, 'hiking', 'Hiking'),
(2, 'kayaking', 'Kayaking'),
(3, 'birdwatching', 'Bird Watching'),
(4, 'zorbing', 'Zorbing');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `resid` int(11) NOT NULL,
  `activityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `fname`, `lname`, `address`, `phone`, `email`, `resid`, `activityid`) VALUES
(1, 'Kartik', 'Gole', 'Arl TX', '6825546890', 'kartikgole77@gmail.com', 28, 2),
(68, 'Snehith', 'Raj', '', '8847476990', 'snehith@gmail.com', 73, 3),
(69, 'Maheswara', 'Reddy', '', '5434235627', 'mahesh@gmail.com', 74, 2),
(70, 'Antonio', 'KKKonte', '', '9898989898', 'wigman@gmail.com', 75, 1),
(71, 'Kunal', 'Bijlani', '', '6255454545', 'kunal@gmail.com', 76, 1),
(72, 'Brock', 'Lesnar', '', '7676767676', 'brock@gmail.com', 77, 1),
(73, 'Chunti', 'Man', '', '7675565656', 'chunti@gmail.com', 78, 1),
(74, 'Naman', 'Sharma', '', '8392795950', 'naman@gmail.com', 79, 2),
(75, 'Naman', 'Sharma', '', '8392795950', 'naman@gmail.com', 80, 2),
(76, 'Demba', 'Ba', '', '7656443322', 'demba@gmail.com', 81, 2),
(77, 'Tanmay', 'Sharma', '', '7556644664', 'tanmay@gmail.com', 82, 2),
(78, 'Tanmay', 'Sharma', '', '7556644664', 'tanmay@gmail.com', 83, 2),
(79, 'Tanmay', 'Sharma', '', '7556644664', 'tanmay@gmail.com', 84, 2),
(80, 'Tanmay', 'Sharma', '', '7556644664', 'tanmay@gmail.com', 85, 2),
(81, 'Dak', 'Prescott', '', '4551828212', 'dak@gmail.com', 86, 1),
(82, 'Roger', 'Federer', '', '9889070707', 'roger@gmail.com', 87, 3);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageid` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `noofnights` int(11) NOT NULL,
  `cost` double NOT NULL,
  `summary` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageid`, `description`, `noofnights`, `cost`, `summary`, `name`) VALUES
(1, 'weekendescape', 2, 450, 'Two breakfasts, a trail map, and a picnic snack', 'Weekend Escape'),
(2, 'zenretreat', 4, 600, 'Four breakfasts, a trail map, a picnic snack, and a pass for the daily sunrise Yoga sessions', 'Zen Retreat'),
(3, 'kayakaway', 2, 500, 'Two breakfasts, two hours of kayak rental daily, and a trail map ', 'Kayak Away'),
(4, 'veteranpackage', 4, 300, 'Spa,Complimentary breakfast and lunch with access to Private pool', 'Veteran\'s Package');

-- --------------------------------------------------------

--
-- Table structure for table `reservationyurt`
--

CREATE TABLE `reservationyurt` (
  `resid` int(11) NOT NULL,
  `arrivalDate` date NOT NULL,
  `noofnights` int(11) NOT NULL,
  `packageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservationyurt`
--

INSERT INTO `reservationyurt` (`resid`, `arrivalDate`, `noofnights`, `packageid`) VALUES
(28, '1996-12-01', 5, 3),
(73, '2018-02-02', 10, 2),
(74, '2017-08-08', 4, 2),
(75, '2018-02-02', 7, 3),
(76, '2017-05-05', 5, 3),
(77, '2018-01-01', 2, 1),
(78, '2018-07-07', 9, 1),
(79, '2018-01-01', 7, 2),
(80, '2018-01-01', 7, 2),
(81, '2017-05-05', 5, 2),
(82, '2017-08-08', 9, 3),
(83, '2017-08-08', 9, 3),
(84, '2017-08-08', 9, 3),
(85, '2017-08-08', 9, 3),
(86, '2017-08-08', 5, 1),
(87, '2017-05-05', 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `whenres`
--

CREATE TABLE `whenres` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `activityid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whenres`
--

INSERT INTO `whenres` (`id`, `date`, `activityid`, `clientid`) VALUES
(23, '1996-12-01', 1, 1),
(65, '2018-03-02', 3, 68),
(66, '2017-11-08', 2, 69),
(67, '2018-02-03', 1, 70),
(68, '2017-05-07', 1, 71),
(69, '2018-01-02', 1, 72),
(70, '2018-07-07', 1, 73),
(71, '2018-01-02', 2, 74),
(72, '2018-01-02', 2, 75),
(73, '2017-05-07', 2, 76),
(74, '2017-08-10', 2, 77),
(75, '2017-08-10', 2, 78),
(76, '2017-08-10', 2, 79),
(77, '2017-08-10', 2, 80),
(78, '2017-08-10', 1, 81),
(79, '2017-05-07', 3, 82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`),
  ADD KEY `activityid` (`activityid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `reservationyurt`
--
ALTER TABLE `reservationyurt`
  ADD PRIMARY KEY (`resid`),
  ADD KEY `packageid` (`packageid`);

--
-- Indexes for table `whenres`
--
ALTER TABLE `whenres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activityid` (`activityid`),
  ADD KEY `clientid` (`clientid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservationyurt`
--
ALTER TABLE `reservationyurt`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `whenres`
--
ALTER TABLE `whenres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`activityid`) REFERENCES `activity` (`activityid`);

--
-- Constraints for table `reservationyurt`
--
ALTER TABLE `reservationyurt`
  ADD CONSTRAINT `reservationyurt_ibfk_1` FOREIGN KEY (`packageid`) REFERENCES `package` (`packageid`);

--
-- Constraints for table `whenres`
--
ALTER TABLE `whenres`
  ADD CONSTRAINT `whenres_ibfk_1` FOREIGN KEY (`activityid`) REFERENCES `activity` (`activityid`),
  ADD CONSTRAINT `whenres_ibfk_2` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
