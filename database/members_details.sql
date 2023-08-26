-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2023 at 07:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ron`
--

-- --------------------------------------------------------

--
-- Table structure for table `members_details`
--

CREATE TABLE `members_details` (
  `reg_number` varchar(12) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `yos` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `past_volunteer_experience` varchar(500) NOT NULL,
  `memberships` varchar(100) NOT NULL,
  `prof_location` varchar(100) NOT NULL,
  `validation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_details`
--

INSERT INTO `members_details` (`reg_number`, `first_name`, `last_name`, `gender`, `yos`, `email`, `course`, `contact_no`, `password`, `past_volunteer_experience`, `memberships`, `prof_location`, `validation`) VALUES
('2020csc045', 'Raveesha', 'Pathirana', 'male', 4, 'r.vishvajith@gmail.com', 'dcs', 717144135, '$2y$10$rubN2X5QTtSZUCOA0Ldbm.FZjyNGvD4EY9k8u.IaagfFR1DkID7Na', 'no', 'ieee', '2020csc045.jpg', 378293);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members_details`
--
ALTER TABLE `members_details`
  ADD PRIMARY KEY (`reg_number`,`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
