-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2015 at 12:12 PM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `microfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `emp_id` varchar(124) NOT NULL,
  `balance` float NOT NULL,
  `acct_type` int(14) NOT NULL,
  `d_opened` date NOT NULL,
  `duration` date NOT NULL,
  `acct_no` varchar(124) NOT NULL,
  `save_amt` float NOT NULL,
  `acct_name` varchar(124) NOT NULL,
  `amt_todate` float DEFAULT NULL,
  `department` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `emp_id`, `balance`, `acct_type`, `d_opened`, `duration`, `acct_no`, `save_amt`, `acct_name`, `amt_todate`, `department`) VALUES
(1, '5', 3510, 1, '2015-09-02', '2115-09-02', 'TSA6046007', 5000, 'smile mmumene', 15800, 1),
(4, '5', 45, 2, '2015-09-02', '1970-01-01', 'SSA0276544', 5000, 'smile mmumene', NULL, 0),
(5, '5', 0, 2, '2015-09-02', '2020-09-02', 'SSA4645268', 5000, 'smile mmumene', NULL, 0),
(6, '5', 0, 2, '2015-09-02', '2020-09-02', 'SSA3809260', 5000, 'smile mmumene', NULL, 0),
(7, '5', 0, 1, '2015-09-02', '2115-09-02', 'TSA3929672', 5000, 'smile mmumene', NULL, 0),
(8, '5', 0, 1, '2015-09-02', '2115-09-02', 'TSA8061204', 5000, 'smile mmumene', NULL, 0),
(9, '5', 0, 1, '2015-09-02', '2115-09-02', 'TSA8992366', 9000, 'jjjks jsjksjk', NULL, 0),
(10, '5', 0, 1, '2015-09-02', '2115-09-02', 'TSA7428188', 9000, 'jjjks jsjksjk', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acct_type`
--

CREATE TABLE IF NOT EXISTS `acct_type` (
`id` int(11) NOT NULL,
  `name` varchar(124) NOT NULL,
  `fixed_duration` int(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acct_type`
--

INSERT INTO `acct_type` (`id`, `name`, `fixed_duration`) VALUES
(1, 'Thrift', 5),
(2, 'Special', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_income`
--

CREATE TABLE IF NOT EXISTS `ad_income` (
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_income`
--

INSERT INTO `ad_income` (`balance`) VALUES
(5746.8);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(11) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `sex` text NOT NULL,
  `img_url` varchar(196) DEFAULT NULL,
  `faculty` int(11) DEFAULT NULL,
  `dept` int(11) DEFAULT NULL,
  `address` text,
  `phone` int(196) DEFAULT NULL,
  `state` text,
  `lga` text,
  `nok_name` text,
  `n_phone` int(11) DEFAULT NULL,
  `reg_date` date NOT NULL,
  `uname` varchar(124) NOT NULL,
  `pwd` text NOT NULL,
  `priviledge` int(124) NOT NULL,
  `email` varchar(124) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `employee_no` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `middle_name`, `dob`, `sex`, `img_url`, `faculty`, `dept`, `address`, `phone`, `state`, `lga`, `nok_name`, `n_phone`, `reg_date`, `uname`, `pwd`, `priviledge`, `email`, `title`, `surname`, `firstname`, `employee_no`) VALUES
(1, 'jkkjkjk', '2015-08-27', 'male', '1.jpg', 1, 1, 'jkjkkj', 2147483647, '', '', 'jkjkj', 9090, '2015-08-26', 'admin', '12345', 0, 'jkjk@gmail.com', NULL, 'jkjk', 'jjsjkskds', ''),
(5, 'Smile', '1992-10-22', 'male', '5.jpg', 1, 1, '66 new airport road', 2147483647, 'Cross River', 'abi', 'smle', 2147483647, '2015-08-31', 'smilecs', '12345', 2, 'mumene@gmail.com', NULL, 'Mmumene', 'Smile', 'em5670po'),
(6, 'egbai', '1992-10-22', 'male', NULL, 1, 2, '66 new airport road', 2147483647, 'Cross River', 'abi', 'n/a', 2147483647, '2015-09-14', 'teller', '12345', 1, 'mumene@gmail.com', 'prof', 'egbai', 'egbai', 'polki908');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`id` int(11) NOT NULL,
  `dep_name` varchar(124) NOT NULL,
  `faculty` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_name`, `faculty`) VALUES
(1, 'Computer Science', 1),
(2, 'Chemistry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE IF NOT EXISTS `deposit` (
`id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `acct_no` varchar(124) NOT NULL,
  `teller_id` int(30) NOT NULL,
  `balance` float NOT NULL,
  `acct_type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `amount`, `date`, `acct_no`, `teller_id`, `balance`, `acct_type`) VALUES
(1, 800, '2015-09-04', 'TSA6046007', 1, 0, 2),
(2, 5000, '2015-09-16', 'TSA6046007', 1, 0, 2),
(3, 5000, '2015-09-18', 'TSA6046007', 1, 0, 1),
(4, 5000, '2015-09-18', 'TSA6046007', 1, 0, 1),
(5, 800, '2015-09-04', 'TSA6046007', 0, 0, 2),
(6, 5000, '2015-09-16', 'TSA6046007', 0, 0, 2),
(7, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1),
(8, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1),
(9, 800, '2015-09-04', 'TSA6046007', 0, 0, 2),
(10, 5000, '2015-09-16', 'TSA6046007', 0, 0, 2),
(11, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1),
(12, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1),
(13, 800, '2015-09-04', 'TSA6046007', 0, 0, 2),
(14, 5000, '2015-09-16', 'TSA6046007', 0, 0, 2),
(15, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1),
(16, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1),
(17, 5000, '2015-09-28', 'TSA6046007', 1, 5000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
`id` int(11) NOT NULL,
  `name` varchar(124) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
(1, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `id` int(11) NOT NULL,
  `income_type` int(11) NOT NULL,
  `amount` float NOT NULL,
  `balance` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `income_type`, `amount`, `balance`, `date`) VALUES
(0, 1, 0, 100, '0000-00-00'),
(0, 1, 0, 1100, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 1, 0, 0, '0000-00-00'),
(0, 3, 3900, 3900, '0000-00-00'),
(0, 2, 90, 3090, '0000-00-00'),
(0, 3, 143.6, -2766.4, '0000-00-00'),
(0, 3, 43.1, -2723.3, '0000-00-00'),
(0, 3, 143.6, -2579.7, '0000-00-00'),
(0, 3, 43.1, -2536.6, '0000-00-00'),
(0, 3, 143.6, -2393, '0000-00-00'),
(0, 3, 43.1, -2349.9, '0000-00-00'),
(0, 3, 143.6, -2206.3, '0000-00-00'),
(0, 1, 43.1, -2163.2, '0000-00-00'),
(0, 3, 7910, 5746.8, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `income_type`
--

CREATE TABLE IF NOT EXISTS `income_type` (
`id` int(11) NOT NULL,
  `name` varchar(124) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_type`
--

INSERT INTO `income_type` (`id`, `name`) VALUES
(1, 'loan'),
(2, 'withdraw');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
`id` int(11) NOT NULL,
  `emp_no` varchar(124) NOT NULL,
  `date_incured` date NOT NULL,
  `amount` float NOT NULL,
  `paid` float NOT NULL,
  `interest` int(124) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `total` float NOT NULL,
  `amort` float NOT NULL,
  `interest_amount` float NOT NULL,
  `amort_interest` float NOT NULL,
  `amort_loan` float NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `emp_no`, `date_incured`, `amount`, `paid`, `interest`, `status`, `total`, `amort`, `interest_amount`, `amort_interest`, `amort_loan`, `duration`) VALUES
(11, '5', '2015-09-18', 6000, 746.8, 10, 0, 95800, 186.7, 1800, 43.1, 143.6, 36),
(12, '6', '2015-09-16', 4000, 0, 10, 0, 8800, 700.3, 4800, 382, 318.3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `amount_pay` float NOT NULL,
  `balance` float NOT NULL,
  `l_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amort_loan` float NOT NULL,
  `amort_interest` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `emp_id`, `amount_pay`, `balance`, `l_id`, `date`, `amort_loan`, `amort_interest`) VALUES
(1, 5, 0, 0, 1, '2015-09-04', 0, 0),
(2, 5, 0, 88000, 1, '2015-09-17', 0, 0),
(3, 5, 0, 88000, 1, '2015-09-17', 0, 0),
(4, 5, 0, 88000, 1, '2015-09-17', 0, 0),
(5, 5, 0, 88000, 1, '2015-09-17', 0, 0),
(6, 5, 186.7, 95613.3, 1, '2015-09-18', 143.6, 43.1),
(7, 5, 186.7, 95426.6, 1, '2015-09-18', 143.6, 43.1),
(8, 5, 186.7, 95239.9, 1, '2015-09-18', 143.6, 43.1),
(9, 5, 186.7, 95053.2, 1, '2015-09-18', 143.6, 43.1);

-- --------------------------------------------------------

--
-- Table structure for table `percent`
--

CREATE TABLE IF NOT EXISTS `percent` (
`id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `value` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percent`
--

INSERT INTO `percent` (`id`, `p_name`, `value`) VALUES
(1, 'withdraw', 10),
(2, 'loan', 10),
(3, 'duration', 100);

-- --------------------------------------------------------

--
-- Table structure for table `sub_income`
--

CREATE TABLE IF NOT EXISTS `sub_income` (
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_income`
--

INSERT INTO `sub_income` (`balance`) VALUES
(1867);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
`id` int(11) NOT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `amount` float NOT NULL,
  `emp_id` int(11) NOT NULL,
  `balance` float NOT NULL,
  `total_deduction` float DEFAULT NULL,
  `acct_no` varchar(124) NOT NULL,
  `interest_amount` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `debit`, `credit`, `date`, `amount`, `emp_id`, `balance`, `total_deduction`, `acct_no`, `interest_amount`) VALUES
(1, 4, NULL, '0000-00-00', 4, 5, -4.4, 4.4, 'TSA6046007', 0),
(2, 100, NULL, '0000-00-00', 1000, 5, -100, 100, 'TSA6046007', 0),
(3, 1100, NULL, '0000-00-00', 1000, 5, -1100, 1100, 'TSA6046007', 0),
(4, 990, NULL, '2015-09-18', 900, 5, 2910, 990, 'TSA6046007', 90),
(5, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL),
(6, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(7, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(8, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(9, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL),
(10, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(11, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(12, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(13, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL),
(14, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(15, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(16, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(17, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL),
(18, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(19, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL),
(20, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE IF NOT EXISTS `withdraw` (
`id` int(11) NOT NULL,
  `acct_no` varchar(124) NOT NULL,
  `amount` float NOT NULL,
  `total_deduction` float NOT NULL,
  `date` date NOT NULL,
  `teller_id` int(11) NOT NULL,
  `balance` float NOT NULL,
  `emp_id` int(11) NOT NULL,
  `interest_amount` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `acct_no`, `amount`, `total_deduction`, `date`, `teller_id`, `balance`, `emp_id`, `interest_amount`) VALUES
(1, 'TSA6046007', 4, 4.4, '0000-00-00', 0, -4.4, 5, 0),
(2, 'TSA6046007', 1000, 100, '0000-00-00', 0, -100, 5, 0),
(3, 'TSA6046007', 1000, 1100, '0000-00-00', 1, -1100, 5, 0),
(4, 'TSA6046007', 900, 990, '2015-09-18', 1, 2910, 5, 90),
(5, 'TSA6046007', 4000, 4400, '2015-09-28', 1, 3510, 5, 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acct_type`
--
ALTER TABLE `acct_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_type`
--
ALTER TABLE `income_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `percent`
--
ALTER TABLE `percent`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `acct_type`
--
ALTER TABLE `acct_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `income_type`
--
ALTER TABLE `income_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `percent`
--
ALTER TABLE `percent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
