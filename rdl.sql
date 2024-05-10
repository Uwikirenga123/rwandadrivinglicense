-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 04:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(20) NOT NULL,
  `AdminName` varchar(69) DEFAULT NULL,
  `Password` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Password`) VALUES
(1, 'MBARUSHIMANA', '12345'),
(2, 'Tide', '11111'),
(3, 'MBARUSHIMANA', 'ytrwe'),
(4, 'Kenny', 'qwercxza'),
(5, 'Mukunzi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `CandidateNationalId` varchar(112) NOT NULL,
  `FirstName` varchar(122) DEFAULT NULL,
  `LastName` varchar(122) DEFAULT NULL,
  `Gender` varchar(155) DEFAULT NULL,
  `DOB` varchar(64) DEFAULT NULL,
  `ExamDate` varchar(142) DEFAULT NULL,
  `PhoneNumber` varchar(122) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateNationalId`, `FirstName`, `LastName`, `Gender`, `DOB`, `ExamDate`, `PhoneNumber`) VALUES
('1198880075590074', 'kami', 'Kaze', 'Male', '2023-05-24', '2023-06-10', '0788811118'),
('120013467448562', 'UMUHOZA', 'Sonia', 'Female', '2001-06-05', '2023-06-10', '0784567239'),
('1200135698449329', 'GWANEZA', 'gislain', 'Female', '2001-02-08', '2023-06-22', '0790390713'),
('1200345863309611', 'Mbarushimana', 'Fabrice', 'Male', '2004-02-02', '2023-05-31', '0789425744'),
('12004568453286935', 'Uwase kenia', 'Gloria', 'Male', '2004-02-02', '2023-05-30', '0789485321'),
('1200456859342119', 'Nurukundo', 'Digne de confiance', 'Male', '2005-01-05', '2023-05-30', '0781441732'),
('1200545870034277', 'Umuhire', 'Vedaste', 'Male', '2005-03-24', '2023-05-29', '0783455932');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `CandidateNationalId` varchar(122) DEFAULT NULL,
  `LicenseExamCategory` varchar(122) DEFAULT NULL,
  `ObtainedMarks` varchar(177) DEFAULT NULL,
  `Decision` varchar(122) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`CandidateNationalId`, `LicenseExamCategory`, `ObtainedMarks`, `Decision`) VALUES
('1198880075590074', 'C', '15', 'Pass'),
('1198880075590074', 'D', '11', 'Failed'),
('120013467448562', 'D', '10', 'Failed'),
('1200135698449329', 'D', '11', 'Failed'),
('12004568453286935', 'D', '9', 'Failed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`CandidateNationalId`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD KEY `CandidateNationalId` (`CandidateNationalId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`CandidateNationalId`) REFERENCES `candidate` (`CandidateNationalId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
