-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 09:44 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testmarksanalysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`name`, `password`) VALUES
('aishwarya', 'darshana'),
('varsha', 'surabhi');

-- --------------------------------------------------------

--
-- Table structure for table `facultyinfo`
--

CREATE TABLE `facultyinfo` (
  `facultyname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `class1` varchar(30) NOT NULL,
  `sub1` varchar(30) NOT NULL,
  `class2` varchar(30) NOT NULL,
  `sub2` varchar(30) NOT NULL,
  `class3` varchar(30) NOT NULL,
  `sub3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyinfo`
--

INSERT INTO `facultyinfo` (`facultyname`, `username`, `password`, `class1`, `sub1`, `class2`, `sub2`, `class3`, `sub3`) VALUES
('chhaya', 'chhaya', 'chhaya123', 'se_c', 'DLDA', 'se_c', 'MP', 'se_c', 'MP'),
('madhura', 'madhura', 'madhura123', 'se_a', 'ECCF', 'te_a', 'OS', 'te_b', 'SOOAD'),
('surabhi', 'surabhi', 'surabhi123', 'se_b', 'DLDA', 'se_c', 'DS', 'se_b', 'MP'),
('Swaroopa Mane', 'Swaroopa', 'swaroopa123', 'se_a', 'AM_III', 'se_c', 'DLDA', 'te_b', 'WT');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_reg`
--

CREATE TABLE `faculty_reg` (
  `facuty name` varchar(40) NOT NULL,
  `faculty id` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(11) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_reg`
--

INSERT INTO `faculty_reg` (`facuty name`, `faculty id`, `email`, `contact`, `dob`, `password`) VALUES
('aishwarya tandel', '14ce1016', 'aish_541997@rediffmail.com', 1234567890, '2016-10-05', '123123123'),
('Darshana Tandel', '14ce1009', 'darsh@123.com', 1234567890, '2016-10-04', '123123123'),
('Darshana Tandel', '14ce1009', 'darsh@123.com', 1234567890, '2016-10-04', '123123123'),
('advs', 'avvsc', 'vacv@absb.com', 152354321, '2016-10-27', '123456789'),
('trupti', '15CE1011', 'trupti@123.com', 1234567890, '2016-11-07', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `se_a`
--

CREATE TABLE `se_a` (
  `sr_no` int(11) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `DLDA` int(11) NOT NULL,
  `AM_III` int(11) NOT NULL,
  `ECCF` int(11) NOT NULL,
  `DIS` int(11) NOT NULL,
  `OOPM` int(11) NOT NULL,
  `DS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se_a`
--

INSERT INTO `se_a` (`sr_no`, `rollno`, `student_name`, `DLDA`, `AM_III`, `ECCF`, `DIS`, `OOPM`, `DS`) VALUES
(1, '14CE1001', 'Suvarna Maji', 29, 11, 0, 0, 0, 0),
(2, '14CE1002', 'Arshi Mansuri', 29, 13, 0, 0, 0, 0),
(3, '14CE1003', 'Revathi Mahadevan', 22, 14, 0, 0, 0, 0),
(4, '14CE1004', 'Khushboo Nemade', 26, 27, 0, 0, 0, 0),
(5, '14CE1005', 'Shraddha Metkar', 27, 28, 0, 0, 0, 0),
(6, '14CE1006', 'Sheetal Sabale', 16, 29, 0, 0, 0, 0),
(7, '14CE1007', 'Snehal Ahire', 12, 21, 0, 0, 0, 0),
(8, '14CE1008', 'Sneha Baranwal', 20, 23, 0, 0, 0, 0),
(9, '14CE1009', 'Pooja Patil', 19, 22, 0, 0, 0, 0),
(10, '14CE1010', 'Priyanka Pawar', 18, 24, 0, 0, 0, 0),
(11, '14CE1011', 'Prachi Suryavanshi', 17, 18, 0, 0, 0, 0),
(12, '14CE1012', 'Samrudhhi Suryavanshi', 16, 19, 0, 0, 0, 0),
(13, '14CE1013', 'Mohini Gawade', 15, 20, 0, 0, 0, 0),
(14, '14CE1014', 'Rucha Varade', 14, 23, 0, 0, 0, 0),
(15, '14CE1015', 'Sana Rajani', 13, 25, 0, 0, 0, 0),
(16, '14CE1016', 'Meghana Patki', 0, 26, 0, 0, 0, 0),
(17, '14CE1017', 'Aishwarya Bangera', 0, 27, 0, 0, 0, 0),
(18, '14CE1018', 'Pooja Rai', 17, 28, 0, 0, 0, 0),
(19, '14CE1019', 'Varsha Wanave', 18, 29, 0, 0, 0, 0),
(20, '14CE1020', 'Tanvi Pradhan', 19, 30, 0, 0, 0, 0),
(21, '14CE1021', 'Madhura Bhope', 22, 23, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `se_b`
--

CREATE TABLE `se_b` (
  `sr_no` int(11) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `DLDA` int(11) NOT NULL,
  `AM_III` int(11) NOT NULL,
  `ECCF` int(11) NOT NULL,
  `DIS` int(11) NOT NULL,
  `OOPM` int(11) NOT NULL,
  `DS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se_b`
--

INSERT INTO `se_b` (`sr_no`, `rollno`, `student_name`, `DLDA`, `AM_III`, `ECCF`, `DIS`, `OOPM`, `DS`) VALUES
(1, '15ce1008', 'Babli Guru', 0, 0, 0, 0, 0, 0),
(2, '15CE1009', 'Monali Tike', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `se_c`
--

CREATE TABLE `se_c` (
  `sr_no` int(11) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `DLDA` int(11) NOT NULL,
  `AM_III` int(11) NOT NULL,
  `ECCF` int(11) NOT NULL,
  `DIS` int(11) NOT NULL,
  `OOPM` int(11) NOT NULL,
  `DS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se_c`
--

INSERT INTO `se_c` (`sr_no`, `rollno`, `student_name`, `DLDA`, `AM_III`, `ECCF`, `DIS`, `OOPM`, `DS`) VALUES
(1, '15CE3009', 'Manasi Shinde', 13, 0, 0, 0, 0, 0),
(2, '15CE3008', 'Prajakta Deshpande', 11, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `te_a`
--

CREATE TABLE `te_a` (
  `sr_no` int(11) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `OS` int(11) NOT NULL,
  `MP` int(11) NOT NULL,
  `SOOAD` int(11) NOT NULL,
  `BCE` int(11) NOT NULL,
  `CN` int(11) NOT NULL,
  `WT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `te_a`
--

INSERT INTO `te_a` (`sr_no`, `rollno`, `student_name`, `OS`, `MP`, `SOOAD`, `BCE`, `CN`, `WT`) VALUES
(1, '13CE1001', 'Aishwarya Tandel', 0, 0, 0, 0, 0, 0),
(2, '13CE1002', 'Varsha Wanave', 0, 0, 0, 0, 0, 0),
(3, '13CE1003', 'Surabhi Revandkar', 0, 0, 0, 0, 0, 0),
(4, '13CE1004', 'Jagruti Manjule', 0, 0, 0, 0, 0, 0),
(5, '13CE1005', 'Pooja Naik', 0, 0, 0, 0, 0, 0),
(6, '13CE1006', 'Pooja Patil', 0, 0, 0, 0, 0, 0),
(7, '13CE1007', 'Aishwarya Walawalkar', 0, 0, 0, 0, 0, 0),
(8, '13CE1008', 'Apeksha Shetty', 0, 0, 0, 0, 0, 0),
(9, '13CE1009', 'Madhura Bhope', 0, 0, 0, 0, 0, 0),
(10, '13CE1010', 'Krutanjali Chavan', 0, 0, 0, 0, 0, 0),
(11, '13CE1011', 'Sweta Yadav', 0, 0, 0, 0, 0, 0),
(12, '13CE1012', 'Madhuri Dhok', 0, 0, 0, 0, 0, 0),
(13, '13CE1013', 'Poonam Pote', 0, 0, 0, 0, 0, 0),
(14, '13CE1014', 'Sriya Chavan', 0, 0, 0, 0, 0, 0),
(15, '13CE1015', 'Darshana Tandel', 0, 0, 0, 0, 0, 0),
(16, '13CE1016', 'Chhaya Tandel', 0, 0, 0, 0, 0, 0),
(17, '13CE1017', 'Vijaya Tandel', 0, 0, 0, 0, 0, 0),
(18, '13CE1018', 'Hema Tandel', 0, 0, 0, 0, 0, 0),
(19, '13CE1019', 'Jyotsna Tandel', 0, 0, 0, 0, 0, 0),
(20, '13CE1020', 'Tanmayee Patil', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `te_b`
--

CREATE TABLE `te_b` (
  `sr_no` int(11) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `OS` int(11) NOT NULL,
  `MP` int(11) NOT NULL,
  `SOOAD` int(11) NOT NULL,
  `BCE` int(11) NOT NULL,
  `CN` int(11) NOT NULL,
  `WT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `te_b`
--

INSERT INTO `te_b` (`sr_no`, `rollno`, `student_name`, `OS`, `MP`, `SOOAD`, `BCE`, `CN`, `WT`) VALUES
(1, '14CE2001', 'Ashlesha Narkar', 23, 25, 26, 23, 24, 11),
(2, '14CE2002', 'Megha Vichare', 12, 14, 16, 18, 29, 11),
(3, '14CE2003', 'Vijaya Shetty', 22, 24, 25, 26, 17, 18),
(4, '14CE2004', 'Damini Koli', 30, 23, 24, 28, 29, 30),
(5, '14CE2006', 'Reshma Bhoir', 24, 27, 28, 29, 19, 20),
(6, '14CE1008', 'Dolly Vinod', 13, 26, 17, 20, 23, 24),
(7, '14CE1009', 'Shreejita Patani', 11, 25, 26, 27, 21, 22),
(8, '14CE2007', 'Geeta Das', 24, 25, 26, 27, 28, 29);

-- --------------------------------------------------------

--
-- Table structure for table `te_c`
--

CREATE TABLE `te_c` (
  `sr_no` int(11) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `OS` int(11) NOT NULL,
  `MP` int(11) NOT NULL,
  `SOOAD` int(11) NOT NULL,
  `BCE` int(11) NOT NULL,
  `CN` int(11) NOT NULL,
  `WT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `te_c`
--

INSERT INTO `te_c` (`sr_no`, `rollno`, `student_name`, `OS`, `MP`, `SOOAD`, `BCE`, `CN`, `WT`) VALUES
(1, '14CE3001', 'Vidya Vale', 0, 0, 0, 0, 0, 0),
(2, '14CE3002', 'Vijaya Achare', 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `se_a`
--
ALTER TABLE `se_a`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `se_b`
--
ALTER TABLE `se_b`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `se_c`
--
ALTER TABLE `se_c`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `te_a`
--
ALTER TABLE `te_a`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `te_b`
--
ALTER TABLE `te_b`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `te_c`
--
ALTER TABLE `te_c`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `se_a`
--
ALTER TABLE `se_a`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `te_a`
--
ALTER TABLE `te_a`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `te_b`
--
ALTER TABLE `te_b`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `te_c`
--
ALTER TABLE `te_c`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
