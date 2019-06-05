-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2019 at 02:39 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewhunt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_me`
--

CREATE TABLE `tbl_about_me` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Desription` longtext NOT NULL,
  `Btn_Name` varchar(100) NOT NULL,
  `Btn_Url` int(200) NOT NULL,
  `Skill_Name` varchar(100) NOT NULL,
  `Skill_Percent` varchar(50) NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` longtext NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

CREATE TABLE `tbl_contacts` (
  `Id` int(11) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Map_Url` varchar(255) NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts_email`
--

CREATE TABLE `tbl_contacts_email` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` longtext NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headers_info`
--

CREATE TABLE `tbl_headers_info` (
  `Id` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Designation` varchar(300) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Icon_Url` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Display` tinyint(3) NOT NULL,
  `CreateBy` int(11) NOT NULL,
  `CreateDateTime` datetime NOT NULL,
  `UpdateBy` int(11) NOT NULL,
  `UpdateDateTime` datetime NOT NULL,
  `DeleteBy` int(11) NOT NULL,
  `DeleteDateTime` datetime NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`Id`, `Name`, `Display`, `CreateBy`, `CreateDateTime`, `UpdateBy`, `UpdateDateTime`, `DeleteBy`, `DeleteDateTime`, `Status`) VALUES
(1, 'Dew Hunt', 1, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1),
(2, 'Salman Sabbir', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1),
(3, 'Muhammad Shishir', 0, 0, '0000-00-00 00:00:00', 1, '2019-06-04 23:08:46', 0, '0000-00-00 00:00:00', 1),
(4, 'Sajjad', 0, 1, '2019-06-04 19:11:27', 0, '0000-00-00 00:00:00', 1, '2019-06-04 20:16:42', 0),
(5, 'Salman', 0, 1, '2019-06-04 19:43:25', 0, '0000-00-00 00:00:00', 1, '2019-06-04 20:17:44', 0),
(6, 'Sabbir', 0, 1, '2019-06-04 19:58:24', 0, '0000-00-00 00:00:00', 1, '2019-06-04 23:08:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_designation`
--

CREATE TABLE `tbl_home_designation` (
  `Id` int(11) NOT NULL,
  `Designation` varchar(300) NOT NULL,
  `Display` tinyint(3) NOT NULL,
  `CreateBy` int(11) NOT NULL,
  `CreateDateTime` datetime NOT NULL,
  `UpdateBy` int(11) NOT NULL,
  `UpdateDateTime` datetime NOT NULL,
  `DeleteBy` int(11) NOT NULL,
  `DeleteDateTime` datetime NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home_designation`
--

INSERT INTO `tbl_home_designation` (`Id`, `Designation`, `Display`, `CreateBy`, `CreateDateTime`, `UpdateBy`, `UpdateDateTime`, `DeleteBy`, `DeleteDateTime`, `Status`) VALUES
(1, 'Web Designer', 1, 1, '2019-06-04 20:55:26', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1),
(2, 'Web Developer', 1, 1, '2019-06-04 21:00:07', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1),
(3, 'Photographer', 1, 1, '2019-06-04 21:00:23', 1, '2019-06-04 23:25:42', 0, '0000-00-00 00:00:00', 1),
(4, 'Actor', 0, 1, '2019-06-04 23:26:09', 0, '0000-00-00 00:00:00', 1, '2019-06-04 23:32:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latest_news`
--

CREATE TABLE `tbl_latest_news` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Description` longtext NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Background_Image` varchar(200) NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolios`
--

CREATE TABLE `tbl_portfolios` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Description` longtext NOT NULL,
  `Portfolio_Category` varchar(200) NOT NULL,
  `Portfolio_Url` varchar(200) NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Description` longtext NOT NULL,
  `CreateBy` int(11) NOT NULL,
  `CreateDateTime` datetime NOT NULL,
  `UpdateBy` int(11) NOT NULL,
  `UpdateDateTime` datetime NOT NULL,
  `DeleteBy` int(11) NOT NULL,
  `DeleteDateTime` datetime NOT NULL,
  `Status` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`Id`, `Title`, `Icon`, `Description`, `CreateBy`, `CreateDateTime`, `UpdateBy`, `UpdateDateTime`, `DeleteBy`, `DeleteDateTime`, `Status`) VALUES
(1, 'Web Development.', 'web_development_ok_icon.png', 'I am a profession Web Developer. I have developed several websites with PHP based framework CodeIgniter.', 1, '2019-05-20 22:52:47', 1, '2019-05-29 16:41:38', 0, '0000-00-00 00:00:00', 1),
(2, 'Web Design', 'web_design_icon.png', 'I am a Professional Web Designer.', 1, '2019-05-24 16:10:43', 1, '2019-06-04 10:29:18', 0, '0000-00-00 00:00:00', 1),
(3, 'Test', 'test_icon.jpg', 'Test', 1, '2019-05-29 16:43:40', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_footer`
--

CREATE TABLE `tbl_services_footer` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Description` longtext NOT NULL,
  `Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Status` tinyint(3) NOT NULL DEFAULT '1',
  `Created` date NOT NULL,
  `Modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`Id`, `UserName`, `Email`, `Password`, `Status`, `Created`, `Modified`) VALUES
(1, 'dew', 'dew.fog1553@gmail.com', '1553', 1, '2019-05-20', '2019-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_me`
--
ALTER TABLE `tbl_about_me`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_contacts_email`
--
ALTER TABLE `tbl_contacts_email`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_headers_info`
--
ALTER TABLE `tbl_headers_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_home_designation`
--
ALTER TABLE `tbl_home_designation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_latest_news`
--
ALTER TABLE `tbl_latest_news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_portfolios`
--
ALTER TABLE `tbl_portfolios`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_services_footer`
--
ALTER TABLE `tbl_services_footer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_me`
--
ALTER TABLE `tbl_about_me`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contacts_email`
--
ALTER TABLE `tbl_contacts_email`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_headers_info`
--
ALTER TABLE `tbl_headers_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_home_designation`
--
ALTER TABLE `tbl_home_designation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_latest_news`
--
ALTER TABLE `tbl_latest_news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_portfolios`
--
ALTER TABLE `tbl_portfolios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_services_footer`
--
ALTER TABLE `tbl_services_footer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
