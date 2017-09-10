-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 02:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cour_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cour_id`, `name`, `description`) VALUES
('01', 'BSES', 'Bachelor of Science in Environmental Science'),
('02', 'BSIT', 'Bachelor of Science in Information Technology'),
('03', 'BSCS', 'Bachelor of Science in Computer Science'),
('04', 'BSCE', 'Bachelor of Science in Civil Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `idno` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idno`, `lname`, `fname`, `mname`, `course`, `sex`) VALUES
('15-037-042', 'Aricayos', 'Red ', 'Mauhay', 'BSIT', 'male'),
('15-021-45', 'Policarpio', 'Catherine', 'Gabuten', 'BSIT', 'female'),
('15-037-066', 'Benusa', 'Noel', 'Dale', 'BSIT', 'male'),
('15-022-043', 'Angeles', 'Alvin', 'Dale', 'BSIT', 'M'),
('51', 'Aricayos', 'Maria', 'Cecillia', 'BSIT', 'F'),
('15-037-046', 'Armando', 'Alexia', 'Maria', 'BSIT', 'F'),
('16', 'So', 'SO', 'So', 'BSIT', 'F'),
('15-078-043', 'Cortez', 'Franchesca', 'Marie', 'BSCE', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cour_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
