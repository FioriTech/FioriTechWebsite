-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 03:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fioritech`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(10) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `job_code` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `openings` varchar(200) NOT NULL,
  `requirement` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `job_type`, `location`, `job_code`, `experience`, `openings`, `requirement`) VALUES
(1, 'Digital Marketing Executive', 'Delhi', '00102', '0-3 Years', '1', 'Good skills in Email Marketing, Content Marketing, Web Analytics, SEO & Social Media Marketing. Excellent verbal and written English communication. Eagerness to learn and grow in the digital marketing industry. Analytical mindset and critical thinking.'),
(2, 'Senior Web Developer', 'Delhi', '00102', '2-5 Years', '3', 'Good skills in Core PHP, wordpress, Magento, Shopify, MYSQL, XML, HTML, DHTML, Java Script, JQuery. Google & Third Party API Integration Developed PHP Applications with various IDE tools like Eclipse.'),
(3, 'Web Developer', 'Delhi', '00101', '0-1 Year', '2', 'Need experience in HTMLCSS, JavaScript, jQuery, Ajax Good with PHP, MySQL, Bootstrap Very good communication skills.');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `message` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_application_form`
--

CREATE TABLE `job_application_form` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `employment_status` varchar(100) NOT NULL,
  `resume_url` varchar(200) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `ref_first_name` varchar(100) NOT NULL,
  `ref_last_name` varchar(100) NOT NULL,
  `ref_email` varchar(100) NOT NULL,
  `job_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application_form`
--

INSERT INTO `job_application_form` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `employment_status`, `resume_url`, `reference`, `ref_first_name`, `ref_last_name`, `ref_email`, `job_type`) VALUES
(1, 'love', 'sharma', 'lokesharma95@gmail.com', '9711137280', 'Employed', 'any', 'yes', 'nikhil', 'khapre', 'nikhil.khapre', ''),
(2, 'love', 'sharma', 'lokeshs301@gmail.com', '9711137280', 'Employed', 'any', 'yes', 'nikhil', 'khapre', 'nikhil.khapre', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_application_form`
--
ALTER TABLE `job_application_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_application_form`
--
ALTER TABLE `job_application_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;