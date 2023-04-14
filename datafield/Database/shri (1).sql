-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 05:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `adminpassword`) VALUES
('amit', 'amit'),
('shrinath', 'shrinath');

-- --------------------------------------------------------

--
-- Table structure for table `bookappointment`
--

CREATE TABLE `bookappointment` (
  `AppoID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Test` text NOT NULL,
  `Address` text NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `Pname` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookappointment`
--

INSERT INTO `bookappointment` (`AppoID`, `Date`, `Test`, `Address`, `ContactNo`, `Pname`, `Email`) VALUES
(6363, '2023-04-28 18:20:00', 'MRI Scan', 'At.Post.kasarkheda', '8459498907', ' Amit', '');

-- --------------------------------------------------------

--
-- Table structure for table `des`
--

CREATE TABLE `des` (
  `AppoID` int(10) NOT NULL,
  `Pname` text NOT NULL,
  `treatment` text NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `des`
--

INSERT INTO `des` (`AppoID`, `Pname`, `treatment`, `Note`) VALUES
(6363, ' Amit', 'Blood Test', 'Your Test Has been done Successfully! ');

-- --------------------------------------------------------

--
-- Table structure for table `pfeedback`
--

CREATE TABLE `pfeedback` (
  `Sr. No.` int(100) NOT NULL,
  `Pid` int(20) NOT NULL,
  `Pname` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pfeedback`
--

INSERT INTO `pfeedback` (`Sr. No.`, `Pid`, `Pname`, `feedback`) VALUES
(11, 6464, 'Adhav Shrinath', 'Helooo'),
(12, 65665, 'Amit', 'dhhs');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(20) NOT NULL,
  `Staff Name` text NOT NULL,
  `email` text NOT NULL,
  `Address` text NOT NULL,
  `ContactNumber` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `Staff Name`, `email`, `Address`, `ContactNumber`, `password`) VALUES
('4545', 'Shrinath Adhav', 'shrinathadhav45@gmail.com', 'At.Post.kasarkheda', '8459498907', 'shrinath');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userName` text NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `ContactNumber` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `Name`, `Address`, `ContactNumber`, `Email`, `Password`) VALUES
('shrinath45', 'Adhav Shrinath', 'nanded', '8459498907', 'shrinath45@gmail.com', 'shrinath45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `AdminID` (`AdminID`);

--
-- Indexes for table `bookappointment`
--
ALTER TABLE `bookappointment`
  ADD PRIMARY KEY (`AppoID`);

--
-- Indexes for table `pfeedback`
--
ALTER TABLE `pfeedback`
  ADD PRIMARY KEY (`Sr. No.`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookappointment`
--
ALTER TABLE `bookappointment`
  MODIFY `AppoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123555556;

--
-- AUTO_INCREMENT for table `pfeedback`
--
ALTER TABLE `pfeedback`
  MODIFY `Sr. No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
