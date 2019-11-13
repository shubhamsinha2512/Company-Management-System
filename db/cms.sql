-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 06:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(30) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `cust_city` varchar(20) DEFAULT NULL,
  `serv_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `rating`, `cust_city`, `serv_id`) VALUES
(1, 'Mukesh Ambani', 4, 'Mumbai', 1),
(2, 'Ratan Tata', 5, 'Jamshedpur', 2),
(3, 'Bill Gates', 5, 'Delhi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(3) NOT NULL,
  `dep_name` varchar(20) DEFAULT NULL,
  `no_of_emp` int(11) DEFAULT NULL,
  `no_of_proj` int(11) DEFAULT NULL,
  `mgrssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `no_of_emp`, `no_of_proj`, `mgrssn`) VALUES
(1, 'Account & Finance', 3, NULL, 5),
(2, 'Research&Development', 3, NULL, 2),
(3, 'IT Services', 3, NULL, 6),
(4, 'Product Development', 4, 5, 1),
(5, 'Sales & Management', 2, NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `superssn` int(11) DEFAULT NULL,
  `depd_name` varchar(30) DEFAULT NULL,
  `depd_sex` varchar(10) DEFAULT NULL,
  `depd_dob` date DEFAULT NULL,
  `depd_rel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependent`
--

INSERT INTO `dependent` (`superssn`, `depd_name`, `depd_sex`, `depd_dob`, `depd_rel`) VALUES
(1, 'Ben', 'M', '2019-11-04', 'Son'),
(2, 'Emma', 'F', '2019-10-15', 'Daughter'),
(3, 'Payal', 'F', '2019-07-02', 'Daughter'),
(4, 'Varun', 'M', '2019-03-15', 'Brother'),
(5, 'Phoebe', 'F', '2012-08-21', 'Sister');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ssn` int(11) NOT NULL,
  `emp_name` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `emp_address` varchar(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `proj_id` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ssn`, `emp_name`, `dob`, `sex`, `emp_address`, `salary`, `contact`, `email`, `proj_id`, `dep_id`) VALUES
(1, 'Shubham Sinha', '1998-12-25', 'Male', 'R.R.Nagar', 300000, 2147483647, 'shubham.sinha2512@gmail.com', 1, 4),
(2, 'Shivam Tiwari', '1999-02-27', 'Male', 'R.R.Nagar', 300000, 2147483647, 'shivamtiwari2702@gmail.com', 4, 2),
(3, 'Shreyank Jaiswal', '1998-06-29', 'Male', 'Raipur', 60000, 1257327262, 'shreyankjaiswal@gmail.com', 4, 1),
(4, 'Keshav Jha', '1998-02-11', 'Male', 'Delhi', 70000, 1245236425, 'keshavjha@gmail.com', 3, 2),
(5, 'Vignesh Sharma', '1998-04-10', 'Male', 'Jodhpur', 75000, 2147483647, 'vigneshsharma@gmail.com', 4, 1),
(6, 'Kartik Gupta', '1999-09-17', 'Male', 'Haridwar', 70000, 2147483647, 'kartikgupta@gmail.com', 5, 3),
(7, 'Jatin Singh', '1998-08-30', 'Male', 'Allahabad', 70000, 1235628167, 'jatinsingh@gmail.com', 5, 5),
(8, 'Hemang Dixit', '1998-10-11', 'Male', 'Bareli', 75000, 1263517871, 'hemangdixit@gmail.com', 1, 4),
(9, 'Aditya Singh', '1997-02-10', 'Male', 'Varanasi', 75000, 1247161887, 'adityasingh@gmail.com', 2, 2),
(10, 'Shubham Kumar', '1998-11-26', 'Male', 'Bihar', 80000, 1263816832, 'shubhamkumar@gmail.com', 3, 3),
(11, 'Nikhil Yadav', '1998-04-16', 'Male', 'Haryan', 70000, 1263816171, 'nikhilyadav@gmail.com', 2, 1),
(12, 'Abhishek Kumar', '1997-08-28', 'Male', 'Patna', 80000, 2147483647, 'abhishekKumar@gmail.com', 3, 3),
(14, 'Harsh Dalmia', '1998-08-11', 'Male', 'Siligudi', 60000, 1981328436, 'harshdalmia@gmail.com', 4, 5),
(17, 'Vishal Sahoo', '1998-12-22', 'M', 'Ranchi', 60000, 1734761267, 'vishalsahoo@gmail.com', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `proj_id` int(11) NOT NULL,
  `proj_name` varchar(30) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `proj_deadline` date DEFAULT NULL,
  `proj_desc` varchar(240) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`proj_id`, `proj_name`, `cust_id`, `proj_deadline`, `proj_desc`, `dep_id`) VALUES
(1, 'Health Services App', 1, '2019-12-18', 'Mobile app to provide all the necessary information to manage your health based on your regular activities.', 4),
(2, 'Phone Manager', 3, '2020-02-05', 'A windows app to manage your android phone or iphone from your desktop. Your phone notification will also appear on your desktop ', 4),
(3, 'To-Do List App', 1, '2020-03-04', 'An app to list your daily goals with reminder.', 4),
(4, 'Note Manager App', 2, '2020-05-20', 'A mobile app for taking note at any time hassle-free and to keep it in sync with your account', 4),
(5, 'Endless Runner', 2, '2020-04-21', 'A casual mobile game in which the player takes an endless run to beat the previous high score ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serv_id` int(11) NOT NULL,
  `serv_name` varchar(30) DEFAULT NULL,
  `serv_desc` varchar(240) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serv_id`, `serv_name`, `serv_desc`, `dep_id`) VALUES
(1, 'VOIP SERVICE', 'This offers an online service that allows your clients to communicate with other via voice calling.', 3),
(2, 'SOFTWARE SUPPORT', 'This provides support for any of the procuct or services provided by the company.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
