-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 07:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b115`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`_id`, `email`, `password`) VALUES
(1, 'arshibli19@gmail.com', '$2y$10$bWKkQMiF18LzoFSS.xAGtesrVkBDKo8MYYyV/wmPulSOWyAGFKgl6'),
(2, 'arshibli191@gmail.com', '$2y$10$JtqGXi5VK3oOfDbIGGTa9O5SD/VW6tQ85a86yeQNhX306MT0QMaky'),
(3, 'arshibli193@gmail.com', '$2y$10$ex6eaTC4ccg8L/C.jn0L4.g0LYS.bu8OuH1UnrCt5fYb.cwQZDNtm'),
(4, 'arshibli194@gmail.com', '$2y$10$52H7MvWawPzUJ/EfU7JVTOHO5X/r9eVI925PPO7qfJCxn2UIUhWoC');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `timeWhen` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`_id`, `name`, `email`, `subject`, `message`, `timeWhen`) VALUES
(1, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 'Testing Messages', 'fvb', '2025-01-25 00:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  `improvement` text NOT NULL,
  `timeWhen` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`_id`, `name`, `email`, `rating`, `feedback`, `improvement`, `timeWhen`) VALUES
(1, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 'good', 'f', 'df', '2025-01-25 00:24:18'),
(2, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', '0', 'bgn', 'fdv', '2025-01-25 00:24:18'),
(3, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 'poor', 'fgd', 'df', '2025-01-25 00:24:18'),
(4, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 'excellent', 'egrf', '', '2025-01-25 00:24:18'),
(5, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 'average', 'bn', 'gf', '2025-01-25 00:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `mentees`
--

CREATE TABLE `mentees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `highest_degree` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `degree_pursuing` varchar(5) DEFAULT NULL,
  `current_position` varchar(255) DEFAULT NULL,
  `organisation` varchar(255) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `support_guidance` text DEFAULT NULL,
  `academic_aspirations` text DEFAULT NULL,
  `mentor_interest` varchar(3) DEFAULT NULL,
  `specialisation` varchar(255) DEFAULT NULL,
  `social_activity` text DEFAULT NULL,
  `timeWhen` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentees`
--

INSERT INTO `mentees` (`id`, `first_name`, `phone`, `email`, `last_name`, `city`, `country`, `highest_degree`, `discipline`, `institute`, `degree_pursuing`, `current_position`, `organisation`, `expertise`, `support_guidance`, `academic_aspirations`, `mentor_interest`, `specialisation`, `social_activity`, `timeWhen`) VALUES
(1, 'Ahmad Raza Shibli', '1234', 'arshibli19@gmail.com', 'dv', 'Gottingen', 'India', 'Ahmad Raza Shibli', 'Creative Arts', 'Ahmad Raza Shibli', 'yes', 'Ahmad Raza Shibli', 'amu', 'sc', 'dcv', 'yes', 'fdg', 'sf', 'df', '2025-01-25 01:33:39'),
(2, 'Ahmad', '7903042618', 'arshibli19@gmail.com', 'Shibli', 'Gottingen', '', 'Ahmad Raza Shibli', 'Creative Arts', 'Ahmad Raza Shibli', 'yes', 'Ahmad Raza Shibli', '', 'sc', 'tr', 'gfh', 'yes', 'fd', 'thr', '2025-02-17 18:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `degree_name` varchar(500) NOT NULL,
  `discipline` varchar(500) NOT NULL,
  `institution_name` varchar(500) NOT NULL,
  `position_name` varchar(500) NOT NULL,
  `institute_name` varchar(500) NOT NULL,
  `expertise_area` text NOT NULL,
  `motivation` text NOT NULL,
  `mentees_count` varchar(3) NOT NULL,
  `recommend_mentor` text NOT NULL,
  `matching_preferences` text NOT NULL,
  `suggestions` varchar(3) NOT NULL,
  `timeWhen` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`_id`, `first_name`, `phone`, `email`, `last_name`, `city`, `country`, `degree_name`, `discipline`, `institution_name`, `position_name`, `institute_name`, `expertise_area`, `motivation`, `mentees_count`, `recommend_mentor`, `matching_preferences`, `suggestions`, `timeWhen`) VALUES
(1, 'Ahmad Raza Shibli', '1234', 'arshibli19@gmail.com', '123', 'Gottingen', '123', '12', '12', '12', '12', '12', '12', '12', '1', '12', '212', '12', '2025-01-25 00:54:18'),
(2, 'Ahmad Raza Shibli', '1234', 'arshibli19@gmail.com', '123', 'Gottingen', '123', '12', '12', '12', '12', '12', '12', '12', '1', '12', '212', '12', '2025-01-25 00:56:44'),
(3, 'Ahmad Raza Shibli', '1234', 'arshibli19@gmail.com', '123', 'Gottingen', '123', '12', '12', '12', '12', '12', '12', '12', '1', '12', '212', '12', '2025-01-25 00:56:49'),
(4, 'Ahmad Raza Shibli', '1234', 'arshibli19@gmail.com', '123', 'Gottingen', '123', '12', '12', '12', '12', '12', '12', '12', '1', '12', '212', '12', '2025-01-25 00:57:10'),
(5, 'Ahmad', '1234', 'arshibli19@gmail.com', 'Shibli', 'Gottingen', '', 'Ahmad Raza Shibli', 'Creative Arts', 'fsd', 'Ahmad Raza Shibli', 'Ahmad Raza Shibli', '12', 'Yes', '1-3', 'Yes', 'fd', 'r', '2025-02-17 18:11:30'),
(6, 'Ahmad', '7903042618', 'arshibli19@gmail.com', 'Shibli', 'Gottingen', '', 'Ahmad Raza Shibli', 'Creative Arts', 'fsd', 'Ahmad Raza Shibli', 'Ahmad Raza Shibli', '12', 'dfg', 'No', 'dfg', 'dfg', 'fgd', '2025-02-17 18:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `university_place` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `discipline` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fields` varchar(500) NOT NULL,
  `research` varchar(500) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`_id`, `name`, `location`, `university_place`, `bio`, `discipline`, `email`, `fields`, `research`, `comment`, `created_at`) VALUES
(1, 'Shibli', 'India', 'Computer Science', 'good k and the well-being of others is truly inspiring...', 'jhdf', 'arshibli19@gmail.com', 'Data Science', 'Neural Networks', 'retertgergfedr', '2025-01-24 23:28:12'),
(2, 'Ahmad Shibli', '', '', '', '', 'arshibli191@gmail.com', '', '', '', '2025-01-24 23:58:51'),
(3, 'Ahmad Shibli', '', '', '', '', 'arshibli193@gmail.com', '', '', '', '2025-01-26 05:03:07'),
(4, 'Ahmad Shibli', '', '', '', '', 'arshibli194@gmail.com', '', '', '', '2025-01-26 05:03:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `mentees`
--
ALTER TABLE `mentees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mentees`
--
ALTER TABLE `mentees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
