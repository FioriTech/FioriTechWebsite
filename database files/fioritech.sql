-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 03:11 PM
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
(1, 'Digital Marketing Executive', 'Delhi', '00102', '0-3 Years', '1', '<ul>\r\n<li>Good Skills in Email Marketing, Content Marketing, Web Analytics</li>\r\n<li>SEO & Social Media Marketing</li>\r\n<li>Excellent Verbal and written English Communication</li>\r\n<li>Eagerness to learn and grow in digital marketing field</li>\r\n<li>Analytical mindset and critical thinking</li>\r\n</ul>'),
(2, 'Senior Web Developer', 'Delhi', '00102', '2-5 Years', '3', '<ul>\r\n<li>Good skills in Core PHP, wordpress, Magento, Shopify, MYSQL, XML, HTML, DHTML, Java Script, JQuery</li>\r\n<li>Google & Third Party API Integration</li>\r\n<li>Developed PHP Applications with various IDE tools like Eclipse</li>\r\n</ul>'),
(3, 'Web Developer', 'Delhi', '00101', '0-1 Year', '2', '<ul>\r\n<li>Need experience in HTML, CSS, JavaScript, jQuery, Ajax</li>\r\n<li>Good with PHP, MySQL, Bootstrap</li> <li>Very good communication skills</li>\r\n</ul>');

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
  `resume_url` varchar(200) NOT NULL,
  `message` varchar(300) NOT NULL,
  `job_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
