-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2015 at 01:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webox`
--
CREATE DATABASE `webox` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webox`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_password` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_hash` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_skype` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_contact_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_gender` tinyint(4) DEFAULT NULL,
  `admin_birthdate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_profile` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `admin_firstname`, `admin_lastname`, `admin_username`, `admin_password`, `admin_hash`, `admin_email`, `admin_skype`, `admin_contact_no`, `admin_gender`, `admin_birthdate`, `admin_profile`) VALUES
(1, 'john roberts', 'jerodiaz', 'johnrobert', 'c0da0903211601d058250824485fa0a2', NULL, 'johnrobertjerodiiaz@gmail.com', 'jeremae.jerodiaz', '09239117973', 1, 'December 13, 1993', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_log`
--

CREATE TABLE IF NOT EXISTS `admin_user_log` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_id` int(3) DEFAULT NULL,
  `admin_api_token` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_role` tinyint(4) DEFAULT NULL,
  `admin_created_date` datetime DEFAULT NULL,
  `admin_modified_date` datetime DEFAULT NULL,
  `admin_last_login_date` datetime DEFAULT NULL,
  `admin_last_logout_date` datetime DEFAULT NULL,
  `admin_ip_address` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user_log`
--

INSERT INTO `admin_user_log` (`id`, `admin_id`, `admin_api_token`, `admin_role`, `admin_created_date`, `admin_modified_date`, `admin_last_login_date`, `admin_last_logout_date`, `admin_ip_address`, `admin_status`) VALUES
(1, 1, '9Qdn4HMklA7p8cfoKL3C', 1, '2015-08-01 04:37:17', '2015-08-01 04:42:59', '2015-08-01 05:06:50', '2015-08-01 05:04:16', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE IF NOT EXISTS `company_information` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_profile` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_address_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_address_two` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_city` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_province` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_country` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `company_video` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_information_log`
--

CREATE TABLE IF NOT EXISTS `company_information_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` bigint(20) NOT NULL,
  `company_created_by` bigint(20) NOT NULL,
  `company_create_date` date NOT NULL,
  `company_modified_date` date NOT NULL,
  `company_ip_address` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employer_member`
--

CREATE TABLE IF NOT EXISTS `employer_member` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `employer_email` varchar(50) DEFAULT NULL,
  `employer_password` varchar(200) DEFAULT NULL,
  `employer_firstname` varchar(50) DEFAULT NULL,
  `employer_lastname` varchar(60) DEFAULT NULL,
  `employer_gender` tinyint(4) DEFAULT NULL,
  `employer_birth_date` varchar(50) DEFAULT NULL,
  `employer_address_one` varchar(100) DEFAULT NULL,
  `employer_address_two` varchar(100) DEFAULT NULL,
  `employer_country` varchar(100) DEFAULT NULL,
  `employer_status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employer_member`
--

INSERT INTO `employer_member` (`id`, `employer_email`, `employer_password`, `employer_firstname`, `employer_lastname`, `employer_gender`, `employer_birth_date`, `employer_address_one`, `employer_address_two`, `employer_country`, `employer_status`) VALUES
(1, 'johnrobertjerodiaz@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'john robert', 'jerodiaz', 1, 'December 13 1993', 'Tapon Cansayahon Ronda Cebu', 'Tuyan Naga Cebu', 'Philippines', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employer_member_log`
--

CREATE TABLE IF NOT EXISTS `employer_member_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `employer_id` bigint(20) DEFAULT NULL,
  `employer_coins` bigint(20) DEFAULT NULL,
  `employer_api_token` varchar(150) DEFAULT NULL,
  `employer_date_created` datetime DEFAULT NULL,
  `employer_date_modified` datetime DEFAULT NULL,
  `employer_last_login_date` datetime DEFAULT NULL,
  `employer_last_logout_date` datetime DEFAULT NULL,
  `employer_ip_address` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employer_member_log`
--

INSERT INTO `employer_member_log` (`id`, `employer_id`, `employer_coins`, `employer_api_token`, `employer_date_created`, `employer_date_modified`, `employer_last_login_date`, `employer_last_logout_date`, `employer_ip_address`) VALUES
(1, 1, 2500, 'gYkfZCAM89GNB7KmihlF', '2015-07-18 09:28:59', NULL, '2015-08-02 09:31:20', NULL, '192.168.8.67');

-- --------------------------------------------------------

--
-- Table structure for table `job_location`
--

CREATE TABLE IF NOT EXISTS `job_location` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(50) DEFAULT NULL,
  `status_flag` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_location`
--

INSERT INTO `job_location` (`id`, `location_name`, `status_flag`) VALUES
(1, 'cebu', 1),
(2, 'bacolod', 1),
(3, 'davao', 1),
(4, 'iloilo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE IF NOT EXISTS `job_post` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job_level` int(10) NOT NULL,
  `job_description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job_qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job_number_of_vacancies` int(100) NOT NULL,
  `job_how_to_apply` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_post_log`
--

CREATE TABLE IF NOT EXISTS `job_post_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_id` bigint(20) NOT NULL,
  `job_created_by` bigint(20) NOT NULL,
  `job_created_date` datetime NOT NULL,
  `job_modified_date` datetime NOT NULL,
  `job_ip_address` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
