-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2015 at 11:45 AM
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
(1, '5', 7510, 1, '2015-09-02', '2115-09-02', 'TSA6046007', 5000, 'smile mmumene', 21800, 1),
(4, '5', 1510, 2, '2015-09-02', '1970-01-01', 'SSA0276544', 5000, 'smile mmumene', NULL, 0),
(5, '5', 1510, 2, '2015-09-02', '2020-09-02', 'SSA4645268', 5000, 'smile mmumene', NULL, 0),
(6, '5', 1510, 2, '2015-09-02', '2020-09-02', 'SSA3809260', 5000, 'smile mmumene', NULL, 0),
(7, '5', 1510, 1, '2015-09-02', '2115-09-02', 'TSA3929672', 5000, 'smile mmumene', 10000, 0),
(8, '5', 1510, 1, '2015-09-02', '2115-09-02', 'TSA8061204', 5000, 'smile mmumene', NULL, 0),
(9, '5', 1510, 1, '2015-09-02', '2115-09-02', 'TSA8992366', 9000, 'jjjks jsjksjk', NULL, 0),
(10, '5', 1510, 1, '2015-09-02', '2115-09-02', 'TSA7428188', 9000, 'jjjks jsjksjk', NULL, 0);

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
(16624.4);

-- --------------------------------------------------------

--
-- Table structure for table `charge`
--

CREATE TABLE IF NOT EXISTS `charge` (
`id` int(11) NOT NULL,
  `emp_no` float NOT NULL,
  `amount` float DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charge`
--

INSERT INTO `charge` (`id`, `emp_no`, `amount`, `type`, `date`) VALUES
(1, 6, 800, 1, '0000-00-00'),
(3, 5, 2000, 2, '2015-09-30'),
(4, 7, 110, 1, '2015-10-02');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `middle_name`, `dob`, `sex`, `img_url`, `faculty`, `dept`, `address`, `phone`, `state`, `lga`, `nok_name`, `n_phone`, `reg_date`, `uname`, `pwd`, `priviledge`, `email`, `title`, `surname`, `firstname`, `employee_no`) VALUES
(1, 'jkkjkjk', '2015-08-27', 'male', '1.jpg', 1, 1, 'jkjkkj', 2147483647, '', '', 'jkjkj', 9090, '2015-08-26', 'admin', '12345', 0, 'jkjk@gmail.com', NULL, 'jkjk', 'jjsjkskds', ''),
(5, 'Smile', '1992-10-22', 'male', '5.jpg', 1, 1, '66 new airport road', 2147483647, 'Cross River', 'abi', 'smle', 2147483647, '2015-08-31', 'smilecs', '12345', 2, 'mumene@gmail.com', NULL, 'Mmumene', 'Smile', 'em5670po'),
(6, 'egbai', '1992-10-22', 'male', NULL, 1, 2, '66 new airport road', 2147483647, 'Cross River', 'abi', 'n/a', 2147483647, '2015-09-14', 'teller', '12345', 1, 'mumene@gmail.com', 'prof', 'egbai', 'egbai', 'polki908'),
(7, 'Obhazi', '1991-07-06', 'male', NULL, 1, 1, '66 new airport road', 2147483647, 'Cross River', 'Abi', 'me', 2147483647, '2015-10-02', 'rabba', '12345', 2, 'ram@gmail.com', 'Mr', 'Rhazzep', 'Ekponta', 'emoli987');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

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
(17, 5000, '2015-09-28', 'TSA6046007', 1, 5000, 1),
(18, 5000, '2015-09-28', 'TSA3929672', 1, 5000, 1),
(19, 5000, '2015-09-28', 'TSA3929672', 1, 5000, 1),
(20, 5000, '2015-09-28', 'TSA3929672', 1, 5000, 1),
(21, 5000, '2015-09-28', 'TSA3929672', 1, 10000, 1),
(22, 5000, '2015-10-01', 'TSA6046007', 1, 6510, 1),
(23, 1000, '2015-10-01', 'TSA6046007', 1, 7510, 1);

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
  `income_type` int(11) NOT NULL,
  `amount` float NOT NULL,
  `balance` float NOT NULL,
  `date` date NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_type`, `amount`, `balance`, `date`, `id`) VALUES
(1, 0, 100, '0000-00-00', 1),
(1, 0, 1100, '0000-00-00', 2),
(1, 0, 0, '0000-00-00', 3),
(1, 0, 0, '0000-00-00', 4),
(1, 0, 0, '0000-00-00', 5),
(1, 0, 0, '0000-00-00', 6),
(1, 0, 0, '0000-00-00', 7),
(1, 0, 0, '0000-00-00', 8),
(1, 0, 0, '0000-00-00', 9),
(1, 0, 0, '0000-00-00', 10),
(3, 3900, 3900, '0000-00-00', 11),
(2, 90, 3090, '0000-00-00', 12),
(3, 143.6, -2766.4, '0000-00-00', 13),
(3, 43.1, -2723.3, '0000-00-00', 14),
(3, 143.6, -2579.7, '0000-00-00', 15),
(3, 43.1, -2536.6, '0000-00-00', 16),
(3, 143.6, -2393, '0000-00-00', 17),
(3, 43.1, -2349.9, '0000-00-00', 18),
(3, 143.6, -2206.3, '0000-00-00', 19),
(1, 43.1, -2163.2, '0000-00-00', 20),
(3, 7910, 5746.8, '0000-00-00', 21),
(3, 5000, 10746.8, '0000-00-00', 22),
(3, 10000, 20746.8, '0000-00-00', 23),
(2, 400, 17146.8, '0000-00-00', 24),
(2, 400, 13546.8, '0000-00-00', 25),
(2, 400, 9946.8, '0000-00-00', 26),
(2, 40, 9586.8, '0000-00-00', 27),
(3, 318.3, 9905.1, '0000-00-00', 28),
(1, 382, 10287.1, '0000-00-00', 29),
(3, 318.3, 10605.4, '0000-00-00', 30),
(1, 382, 10987.4, '0000-00-00', 31),
(3, 318.3, 11305.7, '0000-00-00', 32),
(1, 382, 11687.7, '0000-00-00', 33),
(3, 6510, 18197.7, '2015-10-01', 34),
(3, 7510, 25707.7, '2015-10-01', 35),
(4, 0, 15707.7, '0000-00-00', 36),
(3, 833.33, 16541, '0000-00-00', 37),
(1, 83.33, 16624.4, '0000-00-00', 38);

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
  `duration` int(11) NOT NULL,
  `admin_charge` float DEFAULT NULL,
  `p_no` int(11) DEFAULT NULL,
  `balance` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `emp_no`, `date_incured`, `amount`, `paid`, `interest`, `status`, `total`, `amort`, `interest_amount`, `amort_interest`, `amort_loan`, `duration`, `admin_charge`, `p_no`, `balance`) VALUES
(11, '5', '2015-09-18', 6000, 746.8, 10, 0, 95800, 186.7, 1800, 43.1, 143.6, 36, NULL, NULL, 95053.2),
(12, '6', '2015-09-16', 4000, 3700.9, 10, 0, 8800, 700.3, 4800, 382, 318.3, 12, 800, 1, 5099.1),
(13, '7', '2015-10-02', 10000, 916.66, 10, 0, 11000, 916.66, 1000, 83.33, 833.33, 12, 110, 1, 10083.3);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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
(9, 5, 186.7, 95053.2, 1, '2015-09-18', 143.6, 43.1),
(10, 6, 1500.3, 7299.7, 1, '2015-09-30', 318.3, 382),
(11, 6, 1500.3, 5799.4, 1, '2015-09-30', 318.3, 382),
(12, 6, 700.3, 5099.1, 1, '2015-09-30', 318.3, 382),
(13, 7, 916.66, 10083.3, 1, '2015-10-02', 833.33, 83.33);

-- --------------------------------------------------------

--
-- Table structure for table `percent`
--

CREATE TABLE IF NOT EXISTS `percent` (
`id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `value` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percent`
--

INSERT INTO `percent` (`id`, `p_name`, `value`) VALUES
(1, 'withdraw', 10),
(2, 'loan', 10),
(3, 'duration', 100),
(4, 'slip', 2000);

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
(10985.5);

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
  `interest_amount` float DEFAULT NULL,
  `description` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `debit`, `credit`, `date`, `amount`, `emp_id`, `balance`, `total_deduction`, `acct_no`, `interest_amount`, `description`) VALUES
(1, 4, NULL, '0000-00-00', 4, 5, -4.4, 4.4, 'TSA6046007', 0, NULL),
(2, 100, NULL, '0000-00-00', 1000, 5, -100, 100, 'TSA6046007', 0, NULL),
(3, 1100, NULL, '0000-00-00', 1000, 5, -1100, 1100, 'TSA6046007', 0, NULL),
(4, 990, NULL, '2015-09-18', 900, 5, 2910, 990, 'TSA6046007', 90, NULL),
(5, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, 'deposit'),
(6, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(7, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(8, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(9, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(10, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(11, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(12, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(13, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(14, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(15, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(16, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(17, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(18, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(19, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(20, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL),
(21, NULL, 5000, '2015-09-28', 0, 0, 5000, NULL, 'TSA3929672', NULL, NULL),
(22, NULL, 5000, '2015-09-28', 0, 0, 10000, NULL, 'TSA3929672', NULL, NULL),
(23, 4400, NULL, '2015-09-28', 4000, 5, 1200, NULL, 'TSA3929672', 400, NULL),
(24, 0, NULL, '2015-09-28', 4000, 5, 1200, NULL, 'TSA3929672', 400, NULL),
(25, 0, NULL, '2015-09-28', 4000, 5, 1200, NULL, 'TSA3929672', 400, NULL),
(26, 440, NULL, '2015-09-28', 400, 5, 760, NULL, 'TSA3929672', 40, NULL),
(27, 2000, NULL, '2015-09-30', 2000, 0, 1510, NULL, '', NULL, 'passbook'),
(28, NULL, 5000, '2015-10-01', 0, 0, 6510, NULL, 'TSA6046007', NULL, 'deposit'),
(29, NULL, 1000, '2015-10-01', 0, 0, 7510, NULL, 'TSA6046007', NULL, 'deposit');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `acct_no`, `amount`, `total_deduction`, `date`, `teller_id`, `balance`, `emp_id`, `interest_amount`) VALUES
(1, 'TSA6046007', 4, 4.4, '0000-00-00', 0, -4.4, 5, 0),
(2, 'TSA6046007', 1000, 100, '0000-00-00', 0, -100, 5, 0),
(3, 'TSA6046007', 1000, 1100, '0000-00-00', 1, -1100, 5, 0),
(4, 'TSA6046007', 900, 990, '2015-09-18', 1, 2910, 5, 90),
(5, 'TSA6046007', 4000, 4400, '2015-09-28', 1, 3510, 5, 400),
(6, 'TSA3929672', 4000, 4400, '2015-09-28', 1, 5600, 5, 400),
(7, 'TSA3929672', 4000, 4400, '2015-09-28', 1, 1200, 5, 400),
(8, 'TSA3929672', 4000, 0, '2015-09-28', 1, 1200, 5, 400),
(9, 'TSA3929672', 4000, 0, '2015-09-28', 1, 1200, 5, 400),
(10, 'TSA3929672', 400, 440, '2015-09-28', 1, 760, 5, 40);

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
-- Indexes for table `charge`
--
ALTER TABLE `charge`
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
-- Indexes for table `income`
--
ALTER TABLE `income`
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
-- AUTO_INCREMENT for table `charge`
--
ALTER TABLE `charge`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `income_type`
--
ALTER TABLE `income_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `percent`
--
ALTER TABLE `percent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
