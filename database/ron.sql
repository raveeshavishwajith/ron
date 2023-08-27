-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2023 at 10:12 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `role`) VALUES
('r.vishvajith@gmail.com', '$2y$10$McQiwlGa.iSVLhk7NOJRseAdhEonLNwaCWMUjdwBwUS5sjcZVEkiK', 'member'),
('raveesha@ieee.org', '$2y$10$3nFQCyilxCQUdQhK6MGHIOz/OIYYfeIB7qPL2nrxlhn5T5Ym6rDOu', 'manager'),
('raveeshavishwajith@gmail.com', '$2y$10$ANP7Yzfp1z4FI8pF9/TAHuYqxjUy7fy8DHYK2neOguaJ22cEUcrKm', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `managers_details`
--

CREATE TABLE `managers_details` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `membership` varchar(10) NOT NULL,
  `validation` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers_details`
--

INSERT INTO `managers_details` (`first_name`, `last_name`, `gender`, `email`, `password`, `contact_number`, `membership`, `validation`) VALUES
('Raveesha', 'Pathirana', 'male', 'raveesha@ieee.org', '$2y$10$3nFQCyilxCQUdQhK6MGHIOz/OIYYfeIB7qPL2nrxlhn5T5Ym6rDOu', 717144135, '', 0);

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
('2020csc001', 'Raveesha', 'Pathirana', 'male', 5, 'raveeshavishwajith@gmail.com', 'wseh', 717144135, '$2y$10$ANP7Yzfp1z4FI8pF9/TAHuYqxjUy7fy8DHYK2neOguaJ22cEUcrKm', 'lsjdg', 'Array', '2020csc001.png', 0),
('2020csc045', 'Raveesha', 'Pathirana', 'male', 2, 'r.vishvajith@gmail.com', 'Computer Science', 717144135, '$2y$10$McQiwlGa.iSVLhk7NOJRseAdhEonLNwaCWMUjdwBwUS5sjcZVEkiK', 'hehe', 'Array', '2020csc045.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `organization` varchar(10) NOT NULL,
  `confirm_code` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization`, `confirm_code`) VALUES
('AIESEC', 7945631086),
('CSSL', 9048776692),
('Gavel', 3022506096),
('IEEE', 5634886514);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `managers_details`
--
ALTER TABLE `managers_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `members_details`
--
ALTER TABLE `members_details`
  ADD PRIMARY KEY (`reg_number`,`email`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organization`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
