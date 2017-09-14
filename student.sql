-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 11:47 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE IF NOT EXISTS `admini` (
  `ano` varchar(20) NOT NULL,
  `cono` varchar(20) DEFAULT NULL,
  `aname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ano`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`ano`, `cono`, `aname`, `password`) VALUES
('1', '1', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `clno` varchar(20) NOT NULL,
  `mno` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`clno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`clno`, `mno`) VALUES
('1403', '1'),
('1404', '1');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `cono` varchar(20) NOT NULL,
  `coname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cono`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`cono`, `coname`) VALUES
('1', '信息学院'),
('2', '园艺林学学院');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cno` varchar(20) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cno`, `cname`) VALUES
('1', '微积分'),
('10', 'C语言程序设计'),
('2', '概率论'),
('3', '数据库系统概论'),
('4', '线性代数'),
('5', '大学英语1'),
('6', '大学英语2'),
('7', '大学英语3'),
('8', '大学英语4'),
('9', '数据结构');

-- --------------------------------------------------------

--
-- Table structure for table `elect`
--

CREATE TABLE IF NOT EXISTS `elect` (
  `cno` varchar(20) NOT NULL,
  `sno` varchar(20) NOT NULL,
  `garde` int(11) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cno`,`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE IF NOT EXISTS `major` (
  `mno` varchar(20) NOT NULL,
  `cono` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`mno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`mno`, `cono`, `mname`) VALUES
('1', NULL, '计算机科学与技术'),
('2', NULL, '风景园林设计');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sno` varchar(20) NOT NULL,
  `clno` varchar(20) DEFAULT NULL,
  `sname` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `clno`, `sname`, `password`) VALUES
('7', '1404', '孔繁奎', '123456'),
('5', '1403', '宋琦敏', '123456'),
('1', '1403', '康宇', '123456'),
('3', '1403', '江晖', '123456'),
('6', '1403', '祁芳芳', '123456'),
('2', '1403', '胡君凡', '456789'),
('4', '1403', '董怡慧', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `stu_course`
--

CREATE TABLE IF NOT EXISTS `stu_course` (
  `sno` varchar(20) NOT NULL,
  `class` varchar(5) NOT NULL,
  `course` varchar(8) NOT NULL,
  `grade` varchar(4) NOT NULL,
  `syear` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stu_course`
--

INSERT INTO `stu_course` (`sno`, `class`, `course`, `grade`, `syear`) VALUES
('1', '1403', '概率论', '80', '2'),
('2', '1403', 'C++实验', '90', '1'),
('3', '1403', '概率论', '80', '2'),
('4', '1403', '数据结构', '90', '2'),
('5', '1403', '数据库', '80', '2'),
('6', '1403', '汇编语言', '90', '2'),
('7', '1404', '数字电路', '79', '2'),
('1', '1403', '大学英语', '80', '1'),
('1', '1403', '数据库', '85', '3'),
('2', '1403', '概率论', '84', '1'),
('3', '1403', 'C++实验', '91', '1'),
('3', '1403', '汇编语言', '85', '2'),
('4', '1403', '数据库', '84', '3'),
('5', '1403', '数字电路', '76', '3'),
('5', '1403', 'C++实验', '81', '1'),
('5', '1403', '汇编语言', '84', '2'),
('6', '1403', '数据结构', '84', '2'),
('6', '1403', '汇编语言', '78', '2'),
('7', '1404', '大学英语', '78', '3'),
('7', '1404', '数据结构', '84', '2'),
('2', '1403', '大学英语', '80', '3'),
('2', '1403', '汇编语言', '84', '2');

-- --------------------------------------------------------

--
-- Table structure for table `teachcl`
--

CREATE TABLE IF NOT EXISTS `teachcl` (
  `tno` varchar(20) NOT NULL,
  `clno` varchar(20) NOT NULL,
  PRIMARY KEY (`tno`,`clno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `tno` varchar(20) NOT NULL,
  `cno` varchar(20) DEFAULT NULL,
  `mno` varchar(20) DEFAULT NULL,
  `cono` varchar(20) DEFAULT NULL,
  `tname` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`tno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tno`, `cno`, `mno`, `cono`, `tname`, `password`) VALUES
('1', '1', '1', '1', '康宇', '123456'),
('2', '1', '1', '1', '王颖', '123456'),
('3', '1403', '1', '3', '刘建晓', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
