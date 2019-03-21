-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 05:20 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saptrang`
--
CREATE DATABASE IF NOT EXISTS `saptrang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `saptrang`;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'CSE'),
(2, 'ISE'),
(3, 'EC'),
(4, 'ME'),
(5, 'CE'),
(6, 'BSE & H');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`) VALUES
(1, 'Classical Solo Dance'),
(2, 'Group Dance'),
(3, 'Battle of Bands'),
(4, 'Fashion Show'),
(5, 'Beat Boxing'),
(6, 'Painting'),
(7, 'Sketching'),
(8, 'Rangoli'),
(9, 'Collage'),
(10, 'Photography'),
(11, 'Hogathon'),
(12, 'Minute To Win it'),
(13, 'Antakshari'),
(14, 'PUBG'),
(15, 'Solo Dance'),
(16, 'Group Dance'),
(17, 'Indian Solo'),
(18, 'Classical vocal Solo'),
(19, 'Western vocal Solo'),
(20, 'Poetry'),
(21, 'Debate'),
(22, 'Creative Writing'),
(23, 'Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `usn` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL,
  `department_id` varchar(11) DEFAULT NULL,
  `semeseter` int(11) DEFAULT NULL,
  `transaction_no` varchar(20) DEFAULT NULL,
  `phno` varchar(15) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`usn`, `name`, `email`, `event_id`, `department_id`, `semeseter`, `transaction_no`, `phno`, `college`) VALUES
('', 'John Karamchand', 'johnkaramchand@gmail.com', 0, '0', 2, '', '08197316244', NULL),
('1AT16IS091', 'Sachin', 'sachin@gmail.com', 1, '2', 6, NULL, NULL, NULL),
('1AT16IS091', 'Sachin', 'sachin@gmail.com', 2, '2', 6, NULL, NULL, NULL),
('CD', 'cdcd', 'vijayameena1@gmail.com', 1, 'CSE', 3, 'eee', '8197316244', 'Atria Institute of Technology'),
('CDCDC', 'John Karamchand', 'johnkaramchand@gmail.com', 1, 'CSE', 3, '3e3e', '08197316244', 'Atria Institute of Technology'),
('DCDC', 'hehe', 'communities.atria@gmail.com', 1, 'CSE', 3, 'cdc', '08795214589', NULL),
('DEDED', 'hello', 'communities.atria@gmail.com', 1, 'CSE', 4, 'jjdjf', '08795214589', NULL),
('GGGGGGG', 'ayesha', 'communities.atria@gmail.com', 1, '0', 8, 'hjjkkl', '08795214589', NULL),
('hhhhh', 'John Karamchand', 'johnkaramchand@gmail.com', 0, '0', 2, 'hjjkkl', '08197316244', NULL),
('HHHHH', 'John Karamchand', 'johnkaramchand@gmail.com', 1, '0', 5, 'hjjkkl', '08197316244', NULL),
('HHHHHDD', 'John Karamchand', 'johnkaramchand@gmail.com', 0, '0', 2, 'hjjkkl', '08197316244', NULL),
('HHHWWWHH', 'John Karamchand', 'johnkaramchand@gmail.com', 0, '0', 2, 'hjjkkl', '8197316244', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`usn`,`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
