-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 06:00 PM
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
(32, 'Ahmedabad', 1, '2018-10-16 13:00:45', '0000-00-00 00:00:00', '', '', '', 1, ''),
(33, 'Lahore', 3, '2018-11-01 11:31:21', '0000-00-00 00:00:00', '', '', '', 1, ''),
(34, 'Islamabad', 3, '2018-11-01 11:31:39', '0000-00-00 00:00:00', '', '', '', 1, ''),
(35, 'Faisalabad', 3, '2018-11-01 11:32:09', '0000-00-00 00:00:00', '', '', '', 1, ''),
(36, 'Rawalpindi', 3, '2018-11-01 11:32:56', '0000-00-00 00:00:00', '', '', '', 1, ''),
(37, 'Sitka', 6, '2018-11-01 11:37:29', '0000-00-00 00:00:00', '', '', '', 1, ''),
(38, 'Los Angeles', 9, '2018-11-01 11:45:22', '0000-00-00 00:00:00', '', '', '', 1, ''),
(39, 'San Francisco', 9, '2018-11-01 11:45:47', '0000-00-00 00:00:00', '', '', '', 1, ''),
(40, 'San Diego', 9, '2018-11-01 11:46:06', '0000-00-00 00:00:00', '', '', '', 1, ''),
(41, 'San Jose', 9, '2018-11-01 11:46:21', '0000-00-00 00:00:00', '', '', '', 1, ''),
(42, 'Pune', 1, '2018-11-01 11:47:08', '0000-00-00 00:00:00', '', '', '', 1, ''),
(43, 'Kolkata', 1, '2018-11-01 11:48:05', '0000-00-00 00:00:00', '', '', '', 1, ''),
(44, 'Bakersfield', 9, '2018-11-01 11:51:26', '0000-00-00 00:00:00', '', '', '', 1, ''),
(45, 'Jakarta', 10, '2018-11-01 11:56:12', '0000-00-00 00:00:00', '', '', '', 1, ''),
(46, 'Palu', 10, '2018-11-01 11:56:26', '0000-00-00 00:00:00', '', '', '', 1, ''),
(47, 'Bandung', 10, '2018-11-01 11:56:40', '0000-00-00 00:00:00', '', '', '', 1, ''),
(48, 'Surabaya', 10, '2018-11-01 11:56:52', '0000-00-00 00:00:00', '', '', '', 1, ''),
(49, 'Makassar', 10, '2018-11-01 11:57:03', '0000-00-00 00:00:00', '', '', '', 1, ''),
(50, 'Semarang', 10, '2018-11-01 11:57:19', '0000-00-00 00:00:00', '', '', '', 1, ''),
(51, 'Palembang', 10, '2018-11-01 11:57:31', '0000-00-00 00:00:00', '', '', '', 1, ''),
(52, 'Madrid', 11, '2018-11-01 11:58:45', '0000-00-00 00:00:00', '', '', '', 1, ''),
(53, 'Barcelona', 11, '2018-11-01 11:59:07', '0000-00-00 00:00:00', '', '', '', 1, ''),
(54, 'Seville', 11, '2018-11-01 11:59:20', '0000-00-00 00:00:00', '', '', '', 1, ''),
(55, 'Málaga', 11, '2018-11-01 11:59:32', '0000-00-00 00:00:00', '', '', '', 1, ''),
(56, 'Granada', 11, '2018-11-01 11:59:43', '0000-00-00 00:00:00', '', '', '', 1, ''),
(57, 'Valencia', 11, '2018-11-01 11:59:56', '0000-00-00 00:00:00', '', '', '', 1, ''),
(58, 'Córdoba', 11, '2018-11-01 12:00:08', '0000-00-00 00:00:00', '', '', '', 1, ''),
(59, 'Bilbao', 11, '2018-11-01 12:00:21', '0000-00-00 00:00:00', '', '', '', 1, ''),
(60, 'Lisbon', 12, '2018-11-01 12:01:30', '0000-00-00 00:00:00', '', '', '', 1, ''),
(61, 'Porto', 12, '2018-11-01 12:01:43', '0000-00-00 00:00:00', '', '', '', 1, ''),
(62, 'Coimbra', 12, '2018-11-01 12:01:54', '0000-00-00 00:00:00', '', '', '', 1, ''),
(63, 'Braga', 12, '2018-11-01 12:02:04', '0000-00-00 00:00:00', '', '', '', 1, ''),
(64, 'Sintra', 12, '2018-11-01 12:02:15', '0000-00-00 00:00:00', '', '', '', 1, ''),
(65, 'Faro', 12, '2018-11-01 12:02:26', '0000-00-00 00:00:00', '', '', '', 1, ''),
(66, 'Lagos', 12, '2018-11-01 12:02:40', '0000-00-00 00:00:00', '', '', '', 1, ''),
(67, 'Amsterdam', 13, '2018-11-01 12:04:57', '0000-00-00 00:00:00', '', '', '', 1, ''),
(68, 'Rotterdam', 13, '2018-11-01 12:05:10', '0000-00-00 00:00:00', '', '', '', 1, ''),
(69, 'The Hague', 13, '2018-11-01 12:05:31', '0000-00-00 00:00:00', '', '', '', 1, ''),
(70, 'Groningen', 13, '2018-11-01 12:06:53', '0000-00-00 00:00:00', '', '', '', 1, ''),
(71, 'Maastricht', 13, '2018-11-01 12:07:07', '0000-00-00 00:00:00', '', '', '', 1, ''),
(72, 'Eindhoven', 13, '2018-11-01 12:07:20', '0000-00-00 00:00:00', '', '', '', 1, ''),
(73, 'Delft', 13, '2018-11-01 12:07:31', '0000-00-00 00:00:00', '', '', '', 1, ''),
(74, 'Cape Town', 14, '2018-11-01 12:08:46', '0000-00-00 00:00:00', '', '', '', 1, ''),
(75, 'Johannesburg', 14, '2018-11-01 12:09:14', '0000-00-00 00:00:00', '', '', '', 1, ''),
(76, 'Durban', 14, '2018-11-01 12:10:06', '0000-00-00 00:00:00', '', '', '', 1, ''),
(77, 'Pretoria', 14, '2018-11-01 12:10:20', '0000-00-00 00:00:00', '', '', '', 1, ''),
(78, 'Port Elizabeth', 14, '2018-11-01 12:10:33', '0000-00-00 00:00:00', '', '', '', 1, ''),
(79, 'Soweto', 14, '2018-11-01 12:10:50', '0000-00-00 00:00:00', '', '', '', 1, ''),
(80, 'Stellenbosch', 14, '2018-11-01 12:11:10', '0000-00-00 00:00:00', '', '', '', 1, ''),
(81, 'Rome', 15, '2018-11-01 12:11:54', '0000-00-00 00:00:00', '', '', '', 1, ''),
(82, 'Venice', 15, '2018-11-01 12:12:06', '0000-00-00 00:00:00', '', '', '', 1, ''),
(83, 'Florence', 15, '2018-11-01 12:12:20', '0000-00-00 00:00:00', '', '', '', 1, ''),
(84, 'Milan', 15, '2018-11-01 12:12:31', '0000-00-00 00:00:00', '', '', '', 1, ''),
(85, 'Naples', 15, '2018-11-01 12:15:24', '0000-00-00 00:00:00', '', '', '', 1, ''),
(86, 'Bologna', 15, '2018-11-01 12:20:18', '0000-00-00 00:00:00', '', '', '', 1, ''),
(87, 'Turin', 15, '2018-11-01 12:20:33', '0000-00-00 00:00:00', '', '', '', 1, ''),
(88, 'London', 16, '2018-11-01 12:21:48', '0000-00-00 00:00:00', '', '', '', 1, ''),
(89, 'Edinburgh', 16, '2018-11-01 12:22:30', '0000-00-00 00:00:00', '', '', '', 1, ''),
(90, 'Liverpool', 16, '2018-11-01 12:22:45', '0000-00-00 00:00:00', '', '', '', 1, ''),
(91, 'Glasgow', 16, '2018-11-01 12:22:59', '0000-00-00 00:00:00', '', '', '', 1, ''),
(92, 'Bristol', 16, '2018-11-01 12:23:15', '0000-00-00 00:00:00', '', '', '', 1, ''),
(93, 'Cardiff', 16, '2018-11-01 12:23:30', '0000-00-00 00:00:00', '', '', '', 1, ''),
(94, 'Oxford', 16, '2018-11-01 12:26:59', '0000-00-00 00:00:00', '', '', '', 1, ''),
(95, 'Paris', 17, '2018-11-01 12:28:18', '0000-00-00 00:00:00', '', '', '', 1, ''),
(96, 'Lyon', 17, '2018-11-01 12:28:24', '0000-00-00 00:00:00', '', '', '', 1, ''),
(97, 'Marseille', 17, '2018-11-01 12:28:36', '0000-00-00 00:00:00', '', '', '', 1, ''),
(98, 'Bordeaux', 17, '2018-11-01 12:28:54', '0000-00-00 00:00:00', '', '', '', 1, ''),
(99, 'Strasbourg', 17, '2018-11-01 12:29:09', '0000-00-00 00:00:00', '', '', '', 1, ''),
(100, 'Toulouse', 17, '2018-11-01 12:29:20', '0000-00-00 00:00:00', '', '', '', 1, ''),
(101, 'Nantes', 17, '2018-11-01 12:29:48', '0000-00-00 00:00:00', '', '', '', 1, ''),
(102, 'Montpellier', 17, '2018-11-01 12:30:04', '0000-00-00 00:00:00', '', '', '', 1, ''),
(103, 'Cannes', 17, '2018-11-01 12:30:16', '0000-00-00 00:00:00', '', '', '', 1, ''),
(104, 'Rennes', 17, '2018-11-01 12:30:29', '0000-00-00 00:00:00', '', '', '', 1, ''),
(105, 'Annecy', 17, '2018-11-01 12:30:43', '0000-00-00 00:00:00', '', '', '', 1, ''),
(106, 'Stockholm', 19, '2018-11-01 12:34:45', '0000-00-00 00:00:00', '', '', '', 1, ''),
(107, 'Gothenburg', 19, '2018-11-01 12:34:59', '0000-00-00 00:00:00', '', '', '', 1, ''),
(108, 'Malmö', 19, '2018-11-01 12:35:10', '0000-00-00 00:00:00', '', '', '', 1, ''),
(109, 'Uppsala', 19, '2018-11-01 12:35:21', '0000-00-00 00:00:00', '', '', '', 1, ''),
(110, 'Helsingborg', 19, '2018-11-01 12:35:34', '0000-00-00 00:00:00', '', '', '', 1, ''),
(111, 'Visby', 19, '2018-11-01 12:35:44', '0000-00-00 00:00:00', '', '', '', 1, ''),
(112, 'Linköping', 19, '2018-11-01 12:35:59', '0000-00-00 00:00:00', '', '', '', 1, ''),
(113, 'Goa', 1, '2018-11-21 14:43:33', '0000-00-00 00:00:00', '', '', '', 1, 'India');

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
(5, 'Alabama', '', '', '', '2018-10-15 21:23:17', '0000-00-00 00:00:00'),
(6, 'Alaska', '', '', '', '2018-10-15 21:25:11', '0000-00-00 00:00:00'),
(7, 'Massachusetts', '', '', '', '2018-10-15 21:27:23', '0000-00-00 00:00:00'),
(8, 'Korea', '', '', '', '2018-10-15 21:30:41', '0000-00-00 00:00:00'),
(9, 'California', '', '', '', '2018-11-01 11:44:29', '0000-00-00 00:00:00'),
(10, 'Indonesia', '', '', '', '2018-11-01 11:55:54', '0000-00-00 00:00:00'),
(11, 'Spain', '', '', '', '2018-11-01 11:58:29', '0000-00-00 00:00:00'),
(12, 'Portugal', '', '', '', '2018-11-01 12:01:07', '0000-00-00 00:00:00'),
(13, 'Netherlands', '', '', '', '2018-11-01 12:04:34', '0000-00-00 00:00:00'),
(14, 'South Africa', '', '', '', '2018-11-01 12:08:28', '0000-00-00 00:00:00'),
(15, 'Italy', '', '', '', '2018-11-01 12:11:32', '0000-00-00 00:00:00'),
(16, 'U K', '', '', '', '2018-11-01 12:21:23', '2018-11-01 12:24:32'),
(17, 'France', '', '', '', '2018-11-01 12:27:37', '0000-00-00 00:00:00'),
(19, 'Sweden', '', '', '', '2018-11-01 12:34:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email_id`, `contact`, `created_date`, `status`) VALUES
(1, 'jay rathod', '12345', 'prince.rathod111@gmail.com', '9967313968', '2018-10-18 03:28:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fk_user_id`, `title`, `name`, `contact`, `email`, `city_id`, `city_name`, `country_id`, `country_name`, `website`, `age`, `status`, `created_date`, `created_by`, `descriptions`) VALUES
(3, 1, 'Bangalore Independent Escorts Service | Bangalore Escorts Girls - Rinki Patel', 'Komal Sharma', '+919999999999', 'ks0450186@gmail.com', 1, 'Mumbai', 1, 'India', 'https://www.komalshrma.com/', 25, 1, '2018-11-21 14:32:35', 1, 'Our Bangalore escorts are well dressed and mannered in nature where they know the tricks to keep their guest happy. High profile model Bangalore escorts are also demanded by most of the clients who wanted to take the services of these Bangalore escorts whatever the charges they are demanded. These escorts maintain themselves in the best way where they keep their body clean in order to attract the customers.\r\n\r\nOur escort goes for regular waxing which makes them more gorgeous in nature. Anyone can easily avail the facility of escorts as their images are uploaded in the site from where you easily look them for service. The rates of them are affordable in nature which can be taken by business and middle class people.Model escorts in Bangalore are providing the same services as provided by other escorts. They are stunning and attractive to offer their escorts services to high elite.'),
(4, 1, 'Neha Tandan Enjoy with Independent Pune escorts girl - Pune VIP Model', 'Neha', '09999999999', 'nehatandan367@yahoo.com', 3, 'Delhi', 1, 'India', 'http://www.nehatandan.net/', 22, 1, '2018-11-21 14:33:18', 1, 'Hello World'),
(5, 1, 'Mumbai Call Girls In Bangalore Service Escorts Mumbai Escorts', 'Karishma', '09999999999', 'karismaaacool78@gmail.com', 1, 'Mumbai', 1, 'India', 'http://www.karishmasharma.com/', 25, 1, '2018-10-30 18:57:30', 1, ' who is having amazing collections of escort girls forever. Our services carry out the best one and most people are eagerly fulfilling the lusty desires by us. So, we create this opportunity for everyone who needs a sexy figure girl for their personal need. The entire hot babes are passionate about delivering such a quality service for the customers. You can make friends with them because the services are very friendly to everyone. Therefore, this quickly delivers awesome results and thus includes good personality when booking them. Each and everyone fulfills their desires by picking '),
(6, 1, 'Escorts Mumbai, escort girls Mumbai, independent escorts Mumbai, escort agencies Mumbai, clubs Mumbai', 'eurogirlsescort', '09999999999', 'eurogirlsescort@gmail.com', 1, 'Mumbai', 1, 'India', 'https://www.eurogirlsescort.com/', 22, 1, '2018-11-18 11:28:53', 1, 'Europe biggest escort directory of independent escorts and escort agencies. At Euro Girls Escort directory you find over 30 000 high class escorts and porn-star escorts'),
(7, 1, 'Mumbai Escorts |VIP Escorts Service Available 24/7', 'hotkiran', '1234567890', 'hotkiran@gmail.com', 1, 'Mumbai', 1, 'India', 'http://www.hotkiran.com/', 25, 1, '2018-11-18 11:30:57', 1, 'The young beauty of our Mumbai escort service and call girls makes you stun and gives you an unforgettable experience, that you can enjoy beyond your limits.'),
(8, 1, 'Mumbai Escorts 9967062565 Andheri East Escorts Call Girls Services', 'andheriescortsinmumbai', '9967062565 ', 'andheriescortsinmumbai@gmail.com', 1, 'Mumbai', 1, 'India', 'https://andheriescortsinmumbai.com/', 21, 1, '2018-11-18 11:33:13', 1, 'Mumbai escorts for 100% satisfaction at cheap rate. High profile andheri east escorts college models avail here with mumbai call girls & escort service in mumbai. Start booking for the rare and unbeatable female mumbai escorts services and get unlimited pleasure.'),
(9, 1, 'Mumbai Escorts | Services 24/7 | VIP Model Escorts in Mumbai', 'mumbaihotcollection', '1234567890', 'mumbaihotcollection@gmail.com', 1, 'Mumbai', 1, 'India', 'http://mumbaihotcollection.com/', 22, 1, '2018-11-18 11:35:30', 1, 'MHC is the Mumbai\'s most reliable and stylish escort services agency that provides high-profile, gorgeous, and independent Mumbai escorts girls in Mumbai.'),
(10, 1, 'asdadasd', 'anikakaur', '9839456123', 'anikakaur@gmail.com', 1, 'Mumbai', 1, 'India', 'http://www.anikakaur.com/', 25, 1, '2018-11-21 14:28:39', 1, 'Mumbai Escorts | Female Independent Model Escort Services in Mumbai for Fun'),
(16, 1, 'Goa Escorts', 'bhumikamalhotra', '1593574560', 'bhumikamalhotra@gmail.com', 113, 'Goa', 1, 'India', 'http://www.bhumikamalhotra.com/', 25, 1, '2018-11-21 14:45:14', 1, 'Guys who are seeking immediate fun can look for some sizzling Goa escorts. We at Lavanya Menon agency ensure to offer broad-minded girls who can serve you their hot services. These beauties are well-known for rejuvenating the romantic life of individuals and providing immense physical satisfaction. We keep on hiring the fresh adult entertainers every month so that we can give amazing sensuous experiences to our clients. The young and dynamic girls are available to satisfy your intimate desires and put a big smile on your face.\r\n\r\nWe are an elite escort agency in Goa and serving only genuine clients. We believe in offering trustworthy services to make you feel exceptional. Stunning girls enthusiastically serve their exclusive moves and spread jovial experiences. Dating a right partner can be an interesting strategy for you to cherish unique time. Arouse your sleeping desires with the sizzling companions and fill your life with better memories. The passionate girls are ready to offer their electrifying sensuous services enthusiastically. We bring the gorgeous ladies for some erotic fun. If you are also desperate for some unforgettable experiences, hire the red-hot companions and avail their seductive services.');

-- --------------------------------------------------------

--
-- Table structure for table `profile_images`
--

CREATE TABLE `profile_images` (
  `id` int(11) NOT NULL,
  `fk_profile_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `alt_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_images`
--

INSERT INTO `profile_images` (`id`, `fk_profile_id`, `image_name`, `alt_tag`) VALUES
(1, 1, 'f837e69faad4c816b15cf912bd8ee6ed.jpg', 'cityxguid'),
(2, 1, '005a2aeca690e0b050bb8fb33a2df184.jpg', 'cityxguid'),
(3, 1, 'a12e9cd5e06524d06ae2dad1b8e92133.jpg', 'cityxguid'),
(4, 1, '66bdbd90dc8e93148aaa8f4301fa0037.jpg', 'cityxguid'),
(5, 1, '79a2bb3db56daf3ebbbfc49a16e1ab1e.jpg', 'cityxguid'),
(6, 1, '3c0be5a53e5a50d7e3ee0295b6b69f30.jpg', 'cityxguid'),
(7, 2, 'd6fd94ca25d46e240d86cc78542c7ec3.jpg', 'cityxguid'),
(8, 2, '22be203a639d5a709cd216b68b0bc868.jpg', 'cityxguid'),
(9, 2, '4bdf3ddc85b1871db2ba15c9a65b1f27.jpg', 'cityxguid'),
(10, 2, '913878309ef94837f6c0f83b397b632d.jpg', 'cityxguid'),
(11, 2, '3fb4ec33fe0bb9ffb41e55cba40c433f.jpg', 'cityxguid'),
(12, 2, '32b9a507eb42eee5350d78bcaf89400c.jpg', 'cityxguid'),
(13, 2, '4c52bddb9441c6f61d5504f1390c68c1.jpg', 'cityxguid'),
(14, 3, '53e77b9c7147bff3565ddb666d0de771.jpg', 'cityxguid'),
(15, 3, '7c01fb9dc78198958d8ff480335dd767.jpg', 'cityxguid'),
(16, 3, 'ad165f32454cd982f517d6c380d7f86a.jpg', 'cityxguid'),
(17, 3, 'a875d7584bf66ad9e60c91c6ad95af96.jpg', 'cityxguid'),
(18, 3, 'd1d3e46282472d328523b404898399c5.jpg', 'cityxguid'),
(19, 4, '553b4f003d5a7adecac6586e4f3493fa.jpg', 'cityxguid'),
(20, 4, 'd917c485f72ee22457acf242e6313650.jpg', 'cityxguid'),
(21, 5, '50137ff9372d81f7f897980322dc5bf0.jpg', 'cityxguid'),
(22, 5, 'f202b4c280d7990d7e3c7c9ce2280fb5.jpg', 'cityxguid'),
(23, 5, 'ab887b6fa5af001c86721b94e6279bff.jpg', 'cityxguid'),
(24, 5, '47b454c327cf8979424685b9e78c523d.jpg', 'cityxguid'),
(25, 6, '7f28160bcee5fbbc3422891a7fb67209.jpg', 'cityxguid'),
(26, 6, '8cf602d70ab7999f770896ab8654ec2f.jpg', 'cityxguid'),
(27, 7, 'f4ab3f36bd08b21e741da1c9eb4fb8ad.jpg', 'cityxguid'),
(28, 7, '8aeda8009195b7ad6a649ecdc42ecbba.jpg', 'cityxguid'),
(29, 8, '42367a538cd11765cfd9fa4eb71f8c8b.jpg', 'cityxguid'),
(30, 8, '84a88fb62b988ba50a68ffc35a989d5b.jpg', 'cityxguid'),
(31, 8, '88b02f4f73df08b5e351e6cd8a2c48d7.jpg', 'cityxguid'),
(32, 8, 'dc29b343dbe9753eab24198cbf74361c.jpg', 'cityxguid'),
(33, 8, 'fe3260c0c750acda02591574cf17dbcf.jpg', 'cityxguid'),
(34, 9, '7c63f3b1a72a0fb1fe12a3b61dcf444f.jpg', 'cityxguid'),
(35, 9, '967a3a0087be9f359c0c1ef41f90856a.jpg', 'cityxguid'),
(36, 9, '55fa9c76714bdacbd1623f6615e3c16d.jpg', 'cityxguid'),
(37, 9, '449a4a3540e5e2c21facbb98e8dca5f5.jpg', 'cityxguid'),
(38, 9, '46f486a04f44fa70e71b7cef2ebeeb5d.jpg', 'cityxguid'),
(39, 9, '3f2ca01de5fac9b7ef973d016ec3052c.jpg', 'cityxguid'),
(40, 9, 'a207c927c0bc13281fc1412ed7dc9c01.jpg', 'cityxguid'),
(41, 9, '4729c8b3b554f377ac09c452b5de953a.jpg', 'cityxguid'),
(42, 10, 'b17e0000eae6e440b68ff8d67d68df1d.jpg', 'cityxguid'),
(43, 10, 'e304e5e92298bda1dbb14b30cfb0b169.jpg', 'cityxguid'),
(44, 10, '036bb4f319be9b0a9d2eb0edda702440.jpg', 'cityxguid'),
(45, 10, '0ac55f10ecea0830efc0ed982ba65b47.jpg', 'cityxguid'),
(46, 10, '19204d003c24d77949234c62819d9a74.jpg', 'cityxguid'),
(47, 3, 'a64f30a255976afdfb7d61f30cc34a9f.jpg', 'cityxguid'),
(48, 4, '4c7fcfcb81234d537b8884e88018e086.png', 'cityxguid'),
(49, 16, '33dccaad9b459c3e217dd6ee19783d35.jpg', 'cityxguid'),
(50, 16, 'f846dc6590c37a9aeec77b45cf347ec6.jpg', 'cityxguid'),
(51, 16, '96351f73217fa4f5a907a41b4c6b7867.jpg', 'cityxguid'),
(52, 16, '49cc6d5cf4de372d52dd9946d44ec419.jpg', 'cityxguid'),
(53, 16, '9e749fa8288880df7aadffe9fc4244be.jpg', 'cityxguid'),
(54, 16, '992462f92500ce86e269d4f82f31b591.jpg', 'cityxguid'),
(55, 16, '1ff1ceb305ca020b4ecd009df281d2f9.jpg', 'cityxguid');

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
('email_id', 'prince.rathod111@gmail.com'),
('site_name', 'cityxguid');

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
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_images`
--
ALTER TABLE `profile_images`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `profile_images`
--
ALTER TABLE `profile_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
