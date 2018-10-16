-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 10:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityxguid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email_id`, `contact_number`) VALUES
(1, 'admin', 'admin123', 'admin@admin.com', '9967313968');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `fk_city_id` int(11) NOT NULL,
  `fk_country_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `excel_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_name`, `fk_city_id`, `fk_country_id`, `created_date`, `status`, `city_name`, `country_name`, `excel_code`) VALUES
(1, 'Borivali', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(2, 'Kandivali', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(3, 'Malad', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(4, 'Goregao', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(5, 'Virar', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(6, 'Nalasopara', 1, 1, '2018-09-11 17:49:28', 1, 'Mumbai', 'India', 12345),
(7, 'M G Road', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(8, 'Kormengala', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(9, 'Indranagar', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(10, 'J P nagar', 2, 1, '2018-09-11 17:49:28', 1, 'Banglore', 'India', 12345),
(11, 'Dwarka', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(12, 'Canought plaace', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(13, 'Naheru place', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(14, 'Saket', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(15, 'Chatrapur', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(16, 'Janak puri', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(17, 'Rajouri gardan', 3, 1, '2018-09-11 17:49:29', 1, 'Delhi', 'India', 12345),
(18, 'test', 8, 3, '2018-09-11 17:51:58', 1, 'Karachi', 'Pakistan', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `fk_country_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_descripton` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `fk_country_id`, `created_date`, `updated_date`, `meta_title`, `meta_descripton`, `meta_keywords`, `status`, `country_name`) VALUES
(1, 'Mumbai', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(2, 'Banglore', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(3, 'Delhi', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(4, 'Panjab', 1, '2018-09-10 01:16:25', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(5, 'Haiyana', 1, '2018-09-10 01:16:26', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(7, 'Rajastan', 1, '2018-09-10 01:16:26', '0000-00-00 00:00:00', '', '', '', 1, 'India'),
(8, 'Karachi', 3, '2018-09-10 01:16:26', '0000-00-00 00:00:00', '', '', '', 1, 'Pakistan'),
(9, 'Auburn', 5, '2018-10-15 21:23:39', '0000-00-00 00:00:00', '', '', '', 1, ''),
(10, 'Birmingham', 5, '2018-10-15 21:23:49', '0000-00-00 00:00:00', '', '', '', 1, ''),
(11, 'Dothan', 5, '2018-10-15 21:23:58', '0000-00-00 00:00:00', '', '', '', 1, ''),
(12, 'Gadsden', 5, '2018-10-15 21:24:09', '0000-00-00 00:00:00', '', '', '', 1, ''),
(13, 'Huntsville', 5, '2018-10-15 21:24:18', '0000-00-00 00:00:00', '', '', '', 1, ''),
(14, 'Mobile', 5, '2018-10-15 21:24:27', '0000-00-00 00:00:00', '', '', '', 1, ''),
(15, 'Montgomery', 5, '2018-10-15 21:24:40', '0000-00-00 00:00:00', '', '', '', 1, ''),
(16, 'Muscle Shoals', 5, '2018-10-15 21:24:51', '0000-00-00 00:00:00', '', '', '', 1, ''),
(17, 'Tuscaloosa', 5, '2018-10-15 21:25:01', '0000-00-00 00:00:00', '', '', '', 1, ''),
(18, 'Anchorage', 6, '2018-10-15 21:25:30', '0000-00-00 00:00:00', '', '', '', 1, ''),
(19, 'Fairbanks', 6, '2018-10-15 21:25:41', '0000-00-00 00:00:00', '', '', '', 1, ''),
(20, 'Juneau', 6, '2018-10-15 21:25:51', '0000-00-00 00:00:00', '', '', '', 1, ''),
(21, 'Kenai Peninsula', 6, '2018-10-15 21:26:01', '0000-00-00 00:00:00', '', '', '', 1, ''),
(22, 'Boston', 7, '2018-10-15 21:27:44', '0000-00-00 00:00:00', '', '', '', 1, ''),
(23, 'Cape Cod', 7, '2018-10-15 21:27:55', '0000-00-00 00:00:00', '', '', '', 1, ''),
(24, 'South Coast', 7, '2018-10-15 21:28:05', '0000-00-00 00:00:00', '', '', '', 1, ''),
(25, 'Springfield', 7, '2018-10-15 21:28:16', '0000-00-00 00:00:00', '', '', '', 1, ''),
(26, 'Worcester', 7, '2018-10-15 21:28:27', '0000-00-00 00:00:00', '', '', '', 1, ''),
(27, 'Busan', 8, '2018-10-15 21:30:58', '0000-00-00 00:00:00', '', '', '', 1, ''),
(28, 'Daegu', 8, '2018-10-15 21:31:09', '0000-00-00 00:00:00', '', '', '', 1, ''),
(29, 'Incheon', 8, '2018-10-15 21:31:20', '0000-00-00 00:00:00', '', '', '', 1, ''),
(30, 'Seoul', 8, '2018-10-15 21:31:31', '0000-00-00 00:00:00', '', '', '', 1, ''),
(31, 'Suwon', 8, '2018-10-15 21:31:40', '0000-00-00 00:00:00', '', '', '', 1, ''),
(32, 'Ahmedabad', 1, '2018-10-16 13:00:45', '0000-00-00 00:00:00', '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desscription` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `meta_title`, `meta_desscription`, `meta_keyword`, `created_date`, `updated_date`) VALUES
(1, 'India', '', '', '', '2018-09-10 01:16:25', '0000-00-00 00:00:00'),
(3, 'Pakistan', '', '', '', '2018-09-10 01:16:26', '0000-00-00 00:00:00'),
(4, ' India', '', '', '', '2018-09-10 02:39:04', '0000-00-00 00:00:00'),
(5, 'Alabama', '', '', '', '2018-10-15 21:23:17', '0000-00-00 00:00:00'),
(6, 'Alaska', '', '', '', '2018-10-15 21:25:11', '0000-00-00 00:00:00'),
(7, 'Massachusetts', '', '', '', '2018-10-15 21:27:23', '0000-00-00 00:00:00'),
(8, 'Korea', '', '', '', '2018-10-15 21:30:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`) VALUES
('email_id', 'prince.rathod111@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
