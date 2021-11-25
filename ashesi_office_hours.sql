-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 11:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashesi_office_hours`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Booking_ID` int(11) NOT NULL,
  `studentID` varchar(15) DEFAULT NULL,
  `teacherID` varchar(15) DEFAULT NULL,
  `courseID` varchar(20) DEFAULT NULL,
  `bookingDate` date DEFAULT NULL,
  `bookingTime` varchar(15) NOT NULL,
  `additionalComments` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Booking_ID`, `studentID`, `teacherID`, `courseID`, `bookingDate`, `bookingTime`, `additionalComments`) VALUES
(43, '98312023', 'CSMISBA2', 'CSMISBA2', '2021-11-22', '9 am - 10 am', 'dsvcd'),
(48, '54482022', 'CSMISBA1', 'CSMISBA1', '2021-11-22', '9 am - 10 am', 'lol'),
(49, '54482022', 'CSMISBA1', 'CSMISBA1', '2021-11-22', '9 am - 10 am', 'lol'),
(50, '38242019', 'CSMISBA1', 'CSMISBA1', '2021-11-22', '9 am - 10 am', 'lolool'),
(67, '98312023', 'BAMIS1', 'BAMIS1', '2021-11-22', '9 am - 10 am', ''),
(69, '98312023', 'CSMIS1', 'CSMIS1', '2021-01-22', '1 pm - 2 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` varchar(20) NOT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `Department_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`, `Department_ID`) VALUES
('BA1', 'Investment', 4),
('BAMIS1', 'Managerial Accounting', 4),
('CS1', 'Intermediate Computer Programming', 3),
('CSMIS1', 'Web Technologies', 3),
('CSMISBA1', 'Calculus', 1),
('CSMISBA2', 'Pre-Calculus', 1),
('ENG1', 'Engineering Calculus', 1),
('ENGBACSMIS1', 'Leadership', 2),
('ENGBACSMIS2', 'Written and oral communication', 2),
('ENGCS1', 'Data Strunctures', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentID` int(10) NOT NULL,
  `departmentName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentID`, `departmentName`) VALUES
(1, 'Maths'),
(2, 'English'),
(3, 'Science'),
(4, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `yearGroup` int(4) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `name`, `contact`, `email`, `dob`, `yearGroup`, `Gender`) VALUES
('02052023', 'Aaron Kwame Andoh', '0552782355', 'aaron.andoh@ashesi.edu.gh', '2000-07-15', 2023, 'Male'),
('123452023', 'Bethel At´ndlw', '0545951999', 'bethel.ayodeji@ashesi.edu.gh', '2000-02-08', 2023, 'Male'),
('12452023', 'Bethel Ayodeji', '0582358923', 'bethelayodeji@yahoo.com', '2000-02-08', 2023, 'Male'),
('38242019', 'David Ebo', '2234202093', 'ayeyidjan@ashesi.edu.gh', '2021-11-23', 2024, 'Female'),
('44442020', 'Panashe Taruwinga', '0453262372', 'panashe.taruwinga@ashesi.edu.gh', '2000-07-15', 2023, 'Male'),
('45342024', 'Nathan Badu Basoah', '0546311188', 'ayeyidjan@ashesi.edu.gh', '2001-09-15', 2024, 'Male'),
('47472023', 'David Sampah', '0546311188', 'ayeyidjan@ashesi.edu.gh', '2000-02-08', 2023, 'Male'),
('54482019', 'David Ebo', '8402404352', 'ayeyidjan@ashesi.edu.gh', '2021-11-21', 2023, 'Female'),
('54482022', 'David Ebo', '8402404352', 'ayeyidjan@ashesi.edu.gh', '2021-11-21', 2023, 'Female'),
('67602023', 'Nathan Badu Basoah', '0263208359', 'nathan.basoah@ashesi.edu.gh', '2001-09-15', 2023, 'Male'),
('74372023', 'lol123', '0546311188', 'ayeyidjan@ashesi.edu.gh', '2000-02-08', 2023, 'Male'),
('74872023', 'food', '8402849604', 'qqq@ashesi.edu.gh', '2001-09-15', 2023, ''),
('84272023', 'Selasi Azumah', '0084223743', 'selasi.azumah@ashesi.edu.gh', '2000-02-08', 2023, 'Male'),
('84272025', 'Nathan Badu Basoah', '0546311188', 'ayeyidjan@ashesi.edu.gh', '2001-09-15', 2025, 'Male'),
('84732024', 'David Sampah', '0546311188', 'ayeyidjan@ashesi.edu.gh', '2000-02-08', 2024, 'Female'),
('84892023', 'ofori', '0209535914', 'michael.ofori@ashesi.edu.gh', '1999-01-01', 2023, ''),
('98312023', 'Nana Banyin Ayeyi Djan', '0546311192', 'banyin.djan@ashesi.edu.gh', '2001-09-15', 2023, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherID` varchar(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `courseID` varchar(20) NOT NULL,
  `departmentID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `Name`, `email`, `courseID`, `departmentID`) VALUES
('BA1', 'Nana Sefah', 'nana.sefah@ashesi.edu.gh', 'BA1', 4),
('BAMIS1', 'Michael Asamoah', 'michael.asamoah@ashesi.edu.gh', 'BAMIS1', 4),
('CS1', 'David Ebo Agyepong', 'david.agyepong@ashesi.edu.gh', 'CS1', 3),
('CSMIS1', 'David Sampah', 'david.sampah@ashesi.edu.gh', 'CSMIS1', 3),
('CSMISBA1', 'Joseph Agyepong Mensah', 'joseph.mensah@ashesi.edu.gh', 'CSMISBA1', 1),
('CSMISBA2', 'Enock Opoku', 'enock.opoku@ashesi.edu.gh', 'CSMISBA2', 1),
('ENG1', 'Joseph Agyepong Mensah', 'joseph.mensah@ashesi.edu.gh', 'ENG1', 1),
('ENGBACSMIS1', 'Takako Mino', 'takako.mino@ashesi.edu.gh', 'ENGBACSMIS1', 2),
('ENGBACSMIS2', 'Sarah Kunkel', 'sarah.kunkel@ashesi.edu.gh', 'ENGBACSMIS2', 2),
('ENGCS1', 'David Ebo Agyepong', 'david.agyepong@ashesi.edu.gh', 'ENGCS1', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `teacherID` (`teacherID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`),
  ADD KEY `Department_ID` (`Department_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentID`),
  ADD UNIQUE KEY `departmentID` (`departmentID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherID`),
  ADD UNIQUE KEY `teacherID` (`teacherID`),
  ADD KEY `courseID` (`courseID`),
  ADD KEY `departmentID` (`departmentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`teacherID`) REFERENCES `teachers` (`teacherID`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`courseID`) REFERENCES `courses` (`courseID`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`departmentID`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `courses` (`courseID`),
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
