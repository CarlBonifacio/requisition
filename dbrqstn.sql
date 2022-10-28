-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 09:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrqstn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblauthn`
--

CREATE TABLE `tblauthn` (
  `auth_stdnt_id` int(11) NOT NULL,
  `auth_username` varchar(30) NOT NULL,
  `auth_pass` varchar(15) NOT NULL,
  `auth_admn_user` varchar(30) NOT NULL,
  `auth_admn_pass` varchar(15) NOT NULL,
  `authtype_stdnt_id` varchar(30) NOT NULL,
  `user_stdnt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblauthn`
--

INSERT INTO `tblauthn` (`auth_stdnt_id`, `auth_username`, `auth_pass`, `auth_admn_user`, `auth_admn_pass`, `authtype_stdnt_id`, `user_stdnt_id`) VALUES
(1, '', '', 'Admin', 'pass', '', 1),
(2, '20200831', 'Cmu@20', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblauthuserlog`
--

CREATE TABLE `tblauthuserlog` (
  `userlog_id` int(11) NOT NULL,
  `log_username` varchar(30) NOT NULL,
  `log_admin_name` varchar(30) NOT NULL,
  `log_dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblrqstfrm`
--

CREATE TABLE `tblrqstfrm` (
  `rqstform_id` int(11) NOT NULL,
  `rqst_purpose` text NOT NULL,
  `rqst_docmgt` varchar(50) NOT NULL,
  `rqst_release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblstdinfo`
--

CREATE TABLE `tblstdinfo` (
  `user_stdnt_id` int(11) NOT NULL,
  `user_first_name` varchar(15) NOT NULL,
  `user_middle_name` varchar(10) NOT NULL,
  `user_last_name` varchar(15) NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_home_address` varchar(50) NOT NULL,
  `user_email_add` varchar(30) NOT NULL,
  `user_course` varchar(50) NOT NULL,
  `user_year` varchar(15) NOT NULL,
  `user_departmentLst` varchar(50) NOT NULL,
  `user_contact_no` int(11) NOT NULL,
  `auth_username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_docmgt`
--

CREATE TABLE `tbl_docmgt` (
  `rqst_doc_id` int(11) NOT NULL,
  `rqst_doc_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rcrdmgt`
--

CREATE TABLE `tbl_rcrdmgt` (
  `rcrd_stdnt_id` int(11) NOT NULL,
  `rcrd_docRcvd` blob NOT NULL,
  `rcrd_docUpld` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rqststat`
--

CREATE TABLE `tbl_rqststat` (
  `rqstStat_id` int(11) NOT NULL,
  `rqstStat_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblauthn`
--
ALTER TABLE `tblauthn`
  ADD PRIMARY KEY (`auth_stdnt_id`);

--
-- Indexes for table `tblauthuserlog`
--
ALTER TABLE `tblauthuserlog`
  ADD PRIMARY KEY (`userlog_id`);

--
-- Indexes for table `tblrqstfrm`
--
ALTER TABLE `tblrqstfrm`
  ADD PRIMARY KEY (`rqstform_id`);

--
-- Indexes for table `tblstdinfo`
--
ALTER TABLE `tblstdinfo`
  ADD PRIMARY KEY (`user_stdnt_id`);

--
-- Indexes for table `tbl_docmgt`
--
ALTER TABLE `tbl_docmgt`
  ADD PRIMARY KEY (`rqst_doc_id`);

--
-- Indexes for table `tbl_rcrdmgt`
--
ALTER TABLE `tbl_rcrdmgt`
  ADD PRIMARY KEY (`rcrd_stdnt_id`);

--
-- Indexes for table `tbl_rqststat`
--
ALTER TABLE `tbl_rqststat`
  ADD PRIMARY KEY (`rqstStat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblauthn`
--
ALTER TABLE `tblauthn`
  MODIFY `auth_stdnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblauthuserlog`
--
ALTER TABLE `tblauthuserlog`
  MODIFY `userlog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblstdinfo`
--
ALTER TABLE `tblstdinfo`
  MODIFY `user_stdnt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rqststat`
--
ALTER TABLE `tbl_rqststat`
  MODIFY `rqstStat_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
