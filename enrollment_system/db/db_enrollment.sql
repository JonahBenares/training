-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 07:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`student_id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `address` text,
  `phone_no` varchar(20) DEFAULT NULL,
  `year_level` varchar(20) DEFAULT NULL,
  `hs_graduated` varchar(100) DEFAULT NULL,
  `hs_year_graduated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `middlename`, `lastname`, `address`, `phone_no`, `year_level`, `hs_graduated`, `hs_year_graduated`) VALUES
(1, 'Hennelen', 'Olandria', 'Tanan', 'Cauayan, Negros Occidental', '09505154547', '4th Year', 'St. Columbans Academy', '2018'),
(2, 'Kitch Miyage', 'Olandria', 'Pua', 'Dubai, UAE', '165498489', '4th Year', 'University of St. Lasalle Bacolod', '2014'),
(3, 'Larah Isabel', 'Olandria', 'Escobar', 'Brgy. Bata, Bacolod City', '095646565', '4th Year', 'St. Johns Institute', '2016'),
(5, 'Justine', 'Olandria', 'Zialcita', 'Visalia, California', '46516579', '1st Year', 'University of California', '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
