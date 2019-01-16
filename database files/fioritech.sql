-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 11:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'Digital Marketing Executive', 'Delhi', '00102', '0-3 Years', '1', 'Good Skills in Email Marketing, Content Marketing, Web Analytics, \r\nSEO & Social Media Marketing\r\nExcellent Verbal and written English Communication\r\nEagerness to learn and grow in digital marketing field\r\nAnalytical mindset and critical thinking\r\n'),
(2, 'Senior Web Developer', 'Delhi', '00102', '2-5 Years', '3', 'Good skills in Core PHP, wordpress, Magento, Shopify, MYSQL, XML, HTML, DHTML, Java Script, JQuery\r\nGoogle & Third Party API Integration\r\nDeveloped PHP Applications with various IDE tools like Eclipse\r\n'),
(3, 'Web Developer', 'Delhi', '00101', '0-1 Year', '2', 'Need experience in HTML, CSS, JavaScript, jQuery, Ajax\r\nGood with PHP, MySQL, Bootstrap, Very good communication skills\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `logo_alt` varchar(255) NOT NULL,
  `hyperlink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `logo`, `logo_alt`, `hyperlink`) VALUES
(1, 'DRDO.png', 'DRDO logo', 'https://www.drdo.gov.in/drdo/labs1/SAG/English/indexnew.jsp?pg=homepage.jsp'),
(2, 'Airtel.png', 'airtel logo', 'https://www.airtel.in/'),
(3, 'Samsung.png', 'Samsung logo', 'https://www.samsungsds.com/'),
(4, 'Railtel.png', 'Railtel logo', 'https://www.railtelindia.com/'),
(5, 'bankbazaar.jpg', 'bankbazaar logo', 'https://www.bankbazaar.com/'),
(6, 'Brightstar.png', 'Brightstar logo', 'http://www.brightstarcorp.in/'),
(7, 'PowerGrid.png', 'PowerGrid logo', 'https://www.powergridindia.com/'),
(8, 'NRI.png', 'NRI logo', 'http://www.nrifintech.com/'),
(9, 'matrimony.jpg', 'matrimony logo', 'https://www.matrimony.com/'),
(10, 'airforce.png', 'airforce logo', 'http://indianairforce.nic.in/content/eastern-air-command'),
(11, 'Karix.png', 'Karix logo', 'http://www.karix.com/'),
(12, 'thapar.png', 'thapar logo', 'http://www.thapar.edu/'),
(13, 'tafe.png', 'tafe logo', 'https://www.tafe.com/'),
(14, 'qa_infotech.png', 'QA infotech logo', 'https://www.qainfotech.com/');

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
-- Dumping data for table `job_application_form`
--

INSERT INTO `job_application_form` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `resume_url`, `message`, `job_type`) VALUES
(1, 'love', 'sharma', 'lokesharma95@gmail.com', '9910637035', 'LOVE SHARMA.pdf', 'hello world!', 'Digital Marketing Executive'),
(2, 'love', 'sharma', 'lokesharma97111@gmail.com', '9910637035', 'LOVE SHARMA.pdf', 'hi', 'Digital Marketing Executive'),
(3, 'love', 'sharma', 'lokesharma95@gmail.com', '9711137280', 'LOVE SHARMA.pdf', 'hi', 'Digital Marketing Executive'),
(4, 'love', 'sharma', 'love.sharma@fioritech.com', '9711137280', 'fiori technology.pdf', 'hi', 'Digital Marketing Executive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'love', 'love.sharma@fioritech.com', '123456789'),
(2, 'lokesh', 'lokesharma95@gmail.com', '987654321'),
(3, 'nikhil', 'lokeshs301@gmail.com', '9711137280');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_application_form`
--
ALTER TABLE `job_application_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
