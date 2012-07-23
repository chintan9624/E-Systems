-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
-- 
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2012 at 05:03 PM
-- Server version: 5.0.50
-- PHP Version: 5.3.15
-- 
-- Database: `mocktest`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `mock_batches`
-- 

CREATE TABLE `mock_batches` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `comments` text NOT NULL,
  `institute_id` int(20) NOT NULL,
  `institute_code` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `mock_batches`
-- 

INSERT DELAYED IGNORE INTO `mock_batches` (`id`, `code`, `location`, `start_date`, `end_date`, `comments`, `institute_id`, `institute_code`) VALUES (1, '', '', 0, 0, '', 0, '');
