-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 03:09 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgform`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `addr` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sno`, `name`, `email`, `addr`, `phone`, `course`) VALUES
(1, 'asdfgh', 'saurav.tisu@gmail.com', 'TC Palya', 9798960543, 'BBA'),
(5, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'B.TECH'),
(6, 'Saurav', 'saurav.tisu@gmail.com', 'fg', 6799457123, 'BMS'),
(8, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(87, 'Anid', 'anid@gmail.com', 'k r puram', 6799457123, 'BBA'),
(88, 'Gaurav', 'ravi@gmail.com', 'k r puram', 6799457123, 'BCA'),
(89, 'Ravi', 'ravi@gmail.com', 'k r puram', 989604187, 'M.Tech'),
(103, 'Anid', 'anid@gmail.com', 'rt nagar', 6799485672, 'BCA'),
(109, 'Saurav', 'anid@gmail.com', 'rt nagar', 9798960418, 'BCA'),
(122, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(123, 'as', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(124, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(125, 'as', 'saurav.tisu@gmail.com', 'TC Palya', 6799485672, 'BCA'),
(126, 'as', 'saurav18189@gmail.com', 'TC Palya', 6799485672, 'BCA'),
(127, 'as', 'saurav18189@gmail.com', 'k r puram', 6799485672, 'BCA'),
(128, 'as', 'saurav.tisu@gmail.com', 'TC Palya', 1234, 'MBA'),
(129, 'Saurav', 'saurav18189@gmail.com', 'fgh', 6799457123, 'BCA'),
(130, 'Saurav', 'saurav18189@gmail.com', 'jk', 9798960418, 'MBA'),
(131, 'Saurav', 'saurav.tisu@gmail.com', 'fgh', 6799457123, 'BBA'),
(132, 'Saurav', 'saurav.tisu@gmail.com', 'TC Paly', 6799457123, 'BBAqqqqqqqqqqqq'),
(133, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 7677479005, 'BBA'),
(134, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 7677479005, 'BBA'),
(135, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(136, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(137, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBAqqqqqqqqqq'),
(138, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(139, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(140, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(141, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBAqqqqqqqqqq'),
(142, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(143, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BCA'),
(144, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799485672, 'B.TECH'),
(145, 'Saurav kumar singh', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(146, 'saurav kumar singh', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(147, 'saurav kumar singh', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(148, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(149, 'Anid', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(150, 'Saurav', 'anid@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(151, 'asasa', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(152, 'asasa', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(153, 'Anid', 'anid@gmail.com', 'k r puram', 6799457123, 'BBA'),
(154, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799485672, 'B.TECH'),
(155, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799485672, 'B.TECH'),
(156, 'Sa', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(157, 'as', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(158, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(159, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(160, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(161, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'ðŸ¤£'),
(162, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(163, 'Saurav//', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(164, 'sdfgh', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA'),
(165, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'ðŸ˜Š'),
(166, 'Saurav', 'dummy@gmail.com', 'rt nagar', 6799457123, 'BBA'),
(167, 'Saurav', 'saurav.tisu@gmail.com', 'TC Palya', 6799457123, 'BBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
