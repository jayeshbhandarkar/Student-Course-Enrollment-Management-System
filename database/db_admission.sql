-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 03:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `branch` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `class` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `fname`, `branch`, `class`, `course`) VALUES
(101, 'Jayesh', 'Information Technology', 'TY', 'ds'),
(102, 'Sushant', 'IT', 'TY', 'ad'),
(103, 'Kalparatna', 'Information Technology', 'TY', 'ml'),
(104, 'Rohit', 'Computer', 'SY', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `qualification` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `experience` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `contact`, `email`, `qualification`, `course`, `experience`) VALUES
(701, 'Virat Kohi', '9545040940', 'vk@gmail.com', 'ME', 'Android Development', '5 yrs'),
(702, 'Dhoni', '54268792252', 'dhoni@gmail.com', 'PHD', 'Web Development', '10 yrs');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `class` varchar(10) NOT NULL,
  `category` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sname`, `contact`, `email`, `address`, `class`, `category`, `gender`, `city`) VALUES
(101, 'Jayesh', '9545040940', 'bhandarkarjayesh721@gmail.com', 'Pune', 'TY', '2', 'male', '2'),
(102, 'Sushant', '9999933333', 'abc@gmail.com', 'Mumbai', 'TY', '2', 'male', '1'),
(103, 'Kalparatna', '5252521469', 'admin@gmail.com', 'Nashik', 'TY', '2', 'male', '3'),
(104, 'Rohit', '9595959595', 'hitman@gmail.com', 'Navi Mumbai', 'SY', '3', 'male', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
