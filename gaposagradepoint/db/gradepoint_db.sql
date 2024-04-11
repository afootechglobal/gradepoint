-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 11:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradepoint_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_tab`
--

CREATE TABLE `course_tab` (
  `sn` int(11) NOT NULL,
  `faculty_id` varchar(200) NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_tab`
--

CREATE TABLE `department_tab` (
  `sn` int(11) NOT NULL,
  `faculty_id` varchar(200) NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `department_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_tab`
--

INSERT INTO `department_tab` (`sn`, `faculty_id`, `department_id`, `department_name`) VALUES
(3, 'FAC00120230706021708', 'DEPT00320230706053233', 'UNDEFINED');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_tab`
--

CREATE TABLE `faculty_tab` (
  `sn` int(11) NOT NULL,
  `faculty_id` varchar(200) NOT NULL,
  `faculty_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_tab`
--

INSERT INTO `faculty_tab` (`sn`, `faculty_id`, `faculty_name`) VALUES
(1, 'FAC00120230706021708', 'FACULTY OF SCIENCE AND TECHNOLOGY'),
(2, 'FAC00220230706031800', 'FACULTY OF ENGINEERING');

-- --------------------------------------------------------

--
-- Table structure for table `membership_tab`
--

CREATE TABLE `membership_tab` (
  `sn` int(11) NOT NULL,
  `mem_id` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `country_id` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mem_type_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `staff_id` varchar(100) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setup_counter_tab`
--

CREATE TABLE `setup_counter_tab` (
  `sn` int(11) NOT NULL,
  `counter_id` int(11) NOT NULL,
  `counter_description` varchar(500) NOT NULL,
  `counter_value` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup_counter_tab`
--

INSERT INTO `setup_counter_tab` (`sn`, `counter_id`, `counter_description`, `counter_value`) VALUES
(1, 1, 'count number of staff', '1'),
(2, 2, 'count number of faculties', '3'),
(3, 3, 'count number of department', '3');

-- --------------------------------------------------------

--
-- Table structure for table `setup_role_tab`
--

CREATE TABLE `setup_role_tab` (
  `sn` int(10) UNSIGNED NOT NULL,
  `role_id` int(100) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup_role_tab`
--

INSERT INTO `setup_role_tab` (`sn`, `role_id`, `role_name`) VALUES
(1, 1, 'STAFF'),
(2, 2, 'ADMIN'),
(3, 3, 'SUPER ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `setup_status_tab`
--

CREATE TABLE `setup_status_tab` (
  `sn` int(10) UNSIGNED NOT NULL,
  `status_id` varchar(100) NOT NULL,
  `status_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup_status_tab`
--

INSERT INTO `setup_status_tab` (`sn`, `status_id`, `status_name`) VALUES
(1, '1', 'ACTIVE'),
(2, '2', 'SUSPEND'),
(3, '3', 'PENDING'),
(4, '4', 'SUCCESSFUL'),
(5, '5', 'CANCELED');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tab`
--

CREATE TABLE `staff_tab` (
  `sn` int(11) NOT NULL,
  `access_key` varchar(100) NOT NULL,
  `staff_id` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` varchar(100) NOT NULL,
  `mem_type_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_tab`
--

INSERT INTO `staff_tab` (`sn`, `access_key`, `staff_id`, `fullname`, `mobile`, `email`, `address`, `country_id`, `mem_type_id`, `position_id`, `password`, `otp`, `passport`, `role_id`, `status_id`, `create_time`, `updated_time`) VALUES
(1, 'c99cd6056662d2236b43618a96cd1828', 'STF0000', 'AFOLABI TAIWO ABAYOMI', '09021947874', 'afolabitaiwoabayomi112@gmail.com', '12, KOTCO ROAD, ODE REMO, OGUN STATE', 'C191', 0, 2, '36b233405285c282990f0fee2e3ba0e9', '796339', '202305220307_STF0000_646b6927442a8.png', 3, 1, '2023-05-04 11:52:41', '2023-07-06 07:32:37'),
(2, '', 'STF00120230523124748', 'AAAA', '2244444', 'AAAA@gmail.com', 'SSA', 'C061', 0, 1, 'd1cd2d1a56fcf427d3daa239931cbb9c', '', '202305231252_STF00120230523124748_646c9ad61faf0.jpg', 1, 2, '2023-05-23 11:47:48', '2023-05-23 10:53:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_tab`
--
ALTER TABLE `course_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `department_tab`
--
ALTER TABLE `department_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `faculty_tab`
--
ALTER TABLE `faculty_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `membership_tab`
--
ALTER TABLE `membership_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `setup_counter_tab`
--
ALTER TABLE `setup_counter_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `setup_role_tab`
--
ALTER TABLE `setup_role_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `setup_status_tab`
--
ALTER TABLE `setup_status_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `staff_tab`
--
ALTER TABLE `staff_tab`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_tab`
--
ALTER TABLE `course_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_tab`
--
ALTER TABLE `department_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_tab`
--
ALTER TABLE `faculty_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `membership_tab`
--
ALTER TABLE `membership_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setup_counter_tab`
--
ALTER TABLE `setup_counter_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setup_role_tab`
--
ALTER TABLE `setup_role_tab`
  MODIFY `sn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setup_status_tab`
--
ALTER TABLE `setup_status_tab`
  MODIFY `sn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_tab`
--
ALTER TABLE `staff_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
