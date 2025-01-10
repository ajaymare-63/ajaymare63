-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 06:44 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_reg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_tb`
--

CREATE TABLE `class_tb` (
  `class_id` int(10) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_tb`
--

INSERT INTO `class_tb` (`class_id`, `class_name`, `status`) VALUES
(1, 'BCA FIRST YEAR', 1),
(2, 'BCA SECOND YEAR', 1),
(3, 'BCA THIRD YEAR', 1),
(4, 'BSc (CS) FIRST YEAR', 1),
(5, 'BSc (CS) SECOND YEAR', 1),
(6, 'BSc (CS) THIRD YEAR', 1),
(7, 'BSc (SE) FIRST YEAR', 1),
(8, 'BSc (SE) SECOND YEAR', 1),
(9, 'BSc (SE) THIRD YEAR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `login_name` varchar(50) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `stud_id`, `login_name`, `login_password`, `login_status`) VALUES
(1, 1, 'admin', 'admin', 1),
(2, 0, 'sameer', '12345678', 1),
(3, 1, 'shaikh', '123456', 1),
(4, 2, 'demo_dfgstud', 'demo@123f', 1),
(5, 3, 'stud_demo', '123456123', 1),
(6, 4, 'balaji', '123654', 1),
(7, 5, 'sss', 'sss@123', 1),
(8, 6, 'sameer', '123456', 1),
(9, 7, 'xcvcxv', 'xcvxcv', 1),
(10, 8, 'zmr', 'zmr@321', 1),
(11, 9, 'sasif', 'a@321654', 1),
(12, 10, 'sasif', 'a@321654', 1),
(13, 11, 'SAMPLE1', 'sample1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stud_registration_tb`
--

CREATE TABLE `stud_registration_tb` (
  `stud_id` int(11) NOT NULL,
  `stud_full_name` varchar(50) NOT NULL,
  `stud_mobile` varchar(12) NOT NULL,
  `stud_email` varchar(30) NOT NULL,
  `stud_address` text NOT NULL,
  `stud_gender` varchar(20) NOT NULL,
  `class_id` int(10) NOT NULL,
  `stud_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_registration_tb`
--

INSERT INTO `stud_registration_tb` (`stud_id`, `stud_full_name`, `stud_mobile`, `stud_email`, `stud_address`, `stud_gender`, `class_id`, `stud_status`) VALUES
(1, 'SHAIKH SAMEER', '9028885845', '', '', 'male', 3, 1),
(2, 'FDG', 'dfg', '', 'latur city', 'female', 2, 1),
(3, 'NEW STUDENT', '3216549878', '', 'Pune', 'male', 3, 1),
(4, 'BALAJI SONTAKKE', '1234567895', '', 'nanded', 'male', 1, 1),
(5, 'SAM', '1234567898', 'sam@gmail', 'latur', 'male', 2, 1),
(6, 'SAMEER', '7894556123', 'sam@gmail', 'mkmlkm', 'male', 2, 1),
(7, 'SAMEER', '7894564565', 'xcv@gg', 'xcv', 'male', 1, 1),
(8, 'ZAMEER', '8987543212', 'zmr@gmail', 'latur', 'male', 2, 1),
(9, 'ASIF SAUDAGAR', '8456123456', 'ashif@gmail', 'sfdd', 'male', 1, 1),
(10, 'ASIF SAUDAGAR', '8456123456', 'ashif@gmail', 'sfdd', 'male', 3, 1),
(11, 'SAMPLE1', '1234567890', 'sample1@gmail.com', 'latur', 'male', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_tb`
--
ALTER TABLE `class_tb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `stud_registration_tb`
--
ALTER TABLE `stud_registration_tb`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_tb`
--
ALTER TABLE `class_tb`
  MODIFY `class_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stud_registration_tb`
--
ALTER TABLE `stud_registration_tb`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
