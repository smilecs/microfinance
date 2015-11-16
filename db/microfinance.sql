-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2015 at 11:40 AM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

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
  `department` int(11) NOT NULL,
  `shares` float NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `emp_id`, `balance`, `acct_type`, `d_opened`, `duration`, `acct_no`, `save_amt`, `acct_name`, `amt_todate`, `department`, `shares`, `number`) VALUES
(1, '5', 3210, 1, '2015-09-02', '2115-09-02', 'TSA6046007', 5000, 'smile mmumene', 31800, 1, 0, 5),
(4, '5', 11510, 2, '2015-09-02', '1970-01-01', 'SSA0276544', 5000, 'smile mmumene', 10000, 0, 0, 5),
(5, '5', 410, 2, '2015-09-02', '2020-09-02', 'SSA4645268', 5000, 'smile mmumene', NULL, 0, 0, 5),
(6, '5', 1510, 2, '2015-09-02', '2020-09-02', 'SSA3809260', 5000, 'smile mmumene', NULL, 0, 0, 5),
(7, '5', 1400, 1, '2015-09-02', '2115-09-02', 'TSA3929672', 5000, 'smile mmumene', 10000, 0, 0, 5),
(8, '5', 1510, 1, '2015-09-02', '2115-09-02', 'TSA8061204', 5000, 'smile mmumene', NULL, 0, 0, 5),
(9, '5', 10510, 1, '2015-09-02', '2115-09-02', 'TSA8992366', 9000, 'jjjks jsjksjk', 9000, 0, 0, 5),
(10, '5', 1510, 1, '2015-09-02', '2115-09-02', 'TSA7428188', 9000, 'jjjks jsjksjk', NULL, 0, 0, 5),
(11, '10', 0, 1, '2015-11-10', '2115-11-10', 'TSA4953866', 15, 'Attiah Uduak', NULL, 0, 0, 0),
(12, '9', 14500, 1, '2015-11-10', '2115-11-10', 'TSA1775963', 20000, 'AMUKA CHIKA', 20000, 0, 0, 0),
(13, '11', 15600, 1, '2015-11-10', '2115-11-10', 'TSA8507226', 10000, 'odey joseph', 20000, 0, 0, 0),
(14, '12', 10000, 1, '2015-11-10', '2115-11-10', 'TSA0474826', 0, 'duke    goddy ', 10000, 0, 0, 0),
(15, '8', 5600, 1, '2015-11-10', '2115-11-10', 'TSA1342458', 10000, 'Emeka John', 10000, 0, 0, 0),
(16, '10', 0, 2, '2015-11-10', '1970-01-01', 'SSA0196609', 10000, 'Attiah Uduak', NULL, 0, 0, 0),
(17, '11', 0, 2, '2015-11-10', '1970-01-01', 'SSA8729974', 10000, 'odey joseph', NULL, 0, 0, 0),
(18, '9', 0, 2, '2015-11-10', '2016-11-10', 'SSA0405293', 0, 'AMUKA CHIKA', NULL, 0, 0, 0);

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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `desc` text NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(101620);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charge`
--

INSERT INTO `charge` (`id`, `emp_no`, `amount`, `type`, `date`) VALUES
(1, 6, 800, 1, '0000-00-00'),
(3, 5, 2000, 2, '2015-09-30'),
(4, 7, 110, 1, '2015-10-02'),
(5, 5, 963.532, 1, '2015-11-10');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `middle_name`, `dob`, `sex`, `img_url`, `faculty`, `dept`, `address`, `phone`, `state`, `lga`, `nok_name`, `n_phone`, `reg_date`, `uname`, `pwd`, `priviledge`, `email`, `title`, `surname`, `firstname`, `employee_no`) VALUES
(1, 'jkkjkjk', '2015-08-27', 'male', '1.jpg', 1, 1, 'jkjkkj', 2147483647, '', '', 'jkjkj', 9090, '2015-08-26', 'admin', '12345', 0, 'jkjk@gmail.com', NULL, 'jkjk', 'jjsjkskds', ''),
(5, 'Smile', '1992-10-22', 'male', '5.jpg', 1, 1, '66 new airport road', 2147483647, 'Cross River', 'abi', 'smle', 2147483647, '2015-08-31', 'smilecs', '12345', 2, 'mumene@gmail.com', NULL, 'Mmumene', 'Smile', 'em5670po'),
(6, 'egbai', '1992-10-22', 'male', NULL, 1, 2, '66 new airport road', 2147483647, 'Cross River', 'abi', 'n/a', 2147483647, '2015-09-14', 'teller', '12345', 1, 'mumene@gmail.com', 'prof', 'egbai', 'egbai', 'polki908'),
(7, 'Obhazi', '1991-07-06', 'male', NULL, 1, 1, '66 new airport road', 2147483647, 'Cross River', 'Abi', 'me', 2147483647, '2015-10-02', 'rabba', '12345', 2, 'ram@gmail.com', 'Mr', 'Rhazzep', 'Ekponta', 'emoli987'),
(8, 'Samuel', '1980-10-22', 'male', NULL, 1, 2, '66 new airport road', 2147483647, 'Cross River', 'Akampka', 'me Myself and I alone', 2147483647, '2015-11-10', 'smile', '12345', 2, 'mumene@gmail.com', 'Mr', 'Emeka', 'John', 'emp09878'),
(9, 'AMAKA', '1966-12-05', 'female', NULL, 1, 1, '35 IMO STREET CALABAR', 2147483647, 'Cross River', 'ABIA', 'AMUKA KENNY', 2147483647, '2015-11-10', 'AMUKA', '12345', 2, 'AMUKA32@YAHOO.COM', 'Mr', 'AMUKA', 'CHIKA', 'AO5/56'),
(10, 'Justine', '1985-01-07', 'female', NULL, 1, 0, 'University of Calabar', 2147483647, 'Cross River', 'Calabar South', 'Otobong', 2147483647, '2015-11-10', 'Barr Eno', '12345', 2, 'quintexventures@yahoo.com', 'Mr', 'Attiah', 'Uduak', 'S05/150'),
(11, 'john', '2015-09-10', 'male', NULL, 1, 0, '10 agbor  rd calabar', 2147483647, 'Cross River', 'calabar south', 'ogbor blessing', 2147483647, '2015-11-10', 'simply', '12345', 2, 'blessing2010@yahoo.com', 'Mr', 'odey', 'joseph', 'so5120'),
(12, 'ekong', '0000-00-00', 'male', NULL, 1, 1, 'edem8 abasi', 2147483647, 'Cross River', 'biase', 'nyong', 2147483647, '2015-11-10', 'owan john', '12345', 2, 'johnokon@yahoo.com', 'Mr', 'duke   ', 'goddy ', 's02/s6');

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
  `acct_type` int(11) NOT NULL,
  `bank_teller` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `amount`, `date`, `acct_no`, `teller_id`, `balance`, `acct_type`, `bank_teller`) VALUES
(1, 800, '2015-09-04', 'TSA6046007', 1, 0, 2, ''),
(2, 5000, '2015-09-16', 'TSA6046007', 1, 0, 2, ''),
(3, 5000, '2015-09-18', 'TSA6046007', 1, 0, 1, ''),
(4, 5000, '2015-09-18', 'TSA6046007', 1, 0, 1, ''),
(5, 800, '2015-09-04', 'TSA6046007', 0, 0, 2, ''),
(6, 5000, '2015-09-16', 'TSA6046007', 0, 0, 2, ''),
(7, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1, ''),
(8, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1, ''),
(9, 800, '2015-09-04', 'TSA6046007', 0, 0, 2, ''),
(10, 5000, '2015-09-16', 'TSA6046007', 0, 0, 2, ''),
(11, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1, ''),
(12, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1, ''),
(13, 800, '2015-09-04', 'TSA6046007', 0, 0, 2, ''),
(14, 5000, '2015-09-16', 'TSA6046007', 0, 0, 2, ''),
(15, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1, ''),
(16, 5000, '2015-09-18', 'TSA6046007', 0, 0, 1, ''),
(17, 5000, '2015-09-28', 'TSA6046007', 1, 5000, 1, ''),
(18, 5000, '2015-09-28', 'TSA3929672', 1, 5000, 1, ''),
(19, 5000, '2015-09-28', 'TSA3929672', 1, 5000, 1, ''),
(20, 5000, '2015-09-28', 'TSA3929672', 1, 5000, 1, ''),
(21, 5000, '2015-09-28', 'TSA3929672', 1, 10000, 1, ''),
(22, 5000, '2015-10-01', 'TSA6046007', 1, 6510, 1, ''),
(23, 1000, '2015-10-01', 'TSA6046007', 1, 7510, 1, ''),
(24, 5000, '2015-10-14', 'SSA0276544', 1, 6510, 2, ''),
(25, 5000, '2015-10-14', 'SSA0276544', 1, 11510, 2, ''),
(26, 5000, '2015-10-14', 'TSA6046007', 1, 10310, 1, ''),
(27, 5000, '2015-10-14', 'TSA6046007', 1, 15310, 1, ''),
(28, 9000, '2015-10-14', 'TSA8992366', 1, 10510, 1, ''),
(29, 10000, '2015-11-10', 'TSA1342458', 1, 10000, 1, ''),
(30, 20000, '2015-11-10', 'TSA1775963', 1, 20000, 1, '089657'),
(31, 10000, '2015-11-10', 'TSA8507226', 1, 10000, 1, '1233789'),
(32, 10000, '2015-11-10', 'TSA8507226', 1, 20000, 1, '1233789'),
(33, 10000, '2015-11-10', 'tsa0474826', 1, 10000, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
`id` int(11) NOT NULL,
  `name` varchar(124) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
(1, 'Science'),
(2, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `icas`
--

CREATE TABLE IF NOT EXISTS `icas` (
`id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `amount` float NOT NULL,
  `interest` float NOT NULL,
  `total` float NOT NULL,
  `date` date NOT NULL,
  `take_home` float NOT NULL,
  `charge` float NOT NULL,
  `paid` float NOT NULL,
  `voucher_id` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icas`
--

INSERT INTO `icas` (`id`, `emp_no`, `amount`, `interest`, `total`, `date`, `take_home`, `charge`, `paid`, `voucher_id`) VALUES
(1, 9, 1000, 5.83333, 1005.83, '2015-10-26', 10000, 0, 0, NULL),
(2, 5, 2000, 11.6667, 2011.67, '2015-11-03', 1000, 20.1167, 0, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

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
(1, 83.33, 16624.4, '0000-00-00', 38),
(3, 6510, 23134.4, '2015-10-14', 39),
(3, 11510, 34644.4, '2015-10-14', 40),
(2, 200, 32844.4, '0000-00-00', 41),
(3, 10310, 43154.4, '2015-10-14', 42),
(3, 15310, 58464.4, '2015-10-14', 43),
(3, 10510, 68974.4, '2015-10-14', 44),
(4, 0, 67974.4, '0000-00-00', 45),
(4, 0, 66974.4, '0000-00-00', 46),
(2, 500, 62474.4, '0000-00-00', 47),
(2, 500, 57974.4, '0000-00-00', 48),
(2, 100, 57074.4, '0000-00-00', 49),
(2, 100, 56174.4, '0000-00-00', 50),
(2, 100, 55274.4, '0000-00-00', 51),
(2, 100, 54374.4, '0000-00-00', 52),
(2, 100, 53474.4, '0000-00-00', 53),
(2, 100, 52574.4, '0000-00-00', 54),
(2, 100, 51674.4, '0000-00-00', 55),
(2, 10, 51584.4, '0000-00-00', 56),
(4, 0, 49584.4, '0000-00-00', 57),
(2, 100, 48684.4, '0000-00-00', 58),
(3, 10000, 58684.4, '2015-11-10', 59),
(3, 20000, 78684.4, '2015-11-10', 60),
(3, 10000, 88684.4, '2015-11-10', 61),
(3, 20000, 108684, '2015-11-10', 62),
(3, 10000, 118684, '2015-11-10', 63),
(2, 400, 115084, '0000-00-00', 64),
(2, 500, 110584, '0000-00-00', 65),
(2, 100, 109684, '0000-00-00', 66),
(2, 400, 106084, '0000-00-00', 67),
(2, 0, 106084, '0000-00-00', 68),
(2, 0, 106084, '0000-00-00', 69),
(2, 0, 106084, '0000-00-00', 70),
(2, 0, 106084, '0000-00-00', 71),
(2, 0, 106084, '0000-00-00', 72),
(2, 500, 101584, '0000-00-00', 73),
(2, 0, 101584, '0000-00-00', 74),
(3, 27.7778, 101612, '0000-00-00', 75),
(1, 8.33333, 101620, '0000-00-00', 76);

-- --------------------------------------------------------

--
-- Table structure for table `income_type`
--

CREATE TABLE IF NOT EXISTS `income_type` (
`id` int(11) NOT NULL,
  `name` varchar(124) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_type`
--

INSERT INTO `income_type` (`id`, `name`) VALUES
(1, 'loan'),
(2, 'withdraw'),
(3, 'deposit');

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
  `duration` int(11) NOT NULL,
  `admin_charge` float DEFAULT NULL,
  `p_no` int(11) DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `suretie1` varchar(124) DEFAULT NULL,
  `suretie2` varchar(124) DEFAULT NULL,
  `suretie_1fone` int(11) DEFAULT NULL,
  `suretie2_fone` int(11) DEFAULT NULL,
  `voucher_id` varchar(124) DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `emp_no`, `date_incured`, `amount`, `paid`, `interest`, `status`, `total`, `amort`, `interest_amount`, `duration`, `admin_charge`, `p_no`, `balance`, `suretie1`, `suretie2`, `suretie_1fone`, `suretie2_fone`, `voucher_id`, `flag`) VALUES
(11, '5', '2015-10-26', 1000, 782.91, 10, 0, 96353.2, 36.11, 300, 36, 963.532, 1, 95570.3, NULL, NULL, NULL, NULL, NULL, 0),
(12, '6', '2015-09-16', 4000, 3700.9, 10, 0, 8800, 700.3, 4800, 12, 800, 1, 5099.1, NULL, NULL, NULL, NULL, NULL, 0),
(13, '7', '2015-10-02', 10000, 916.66, 10, 0, 11000, 916.66, 1000, 12, 110, 1, 10083.3, NULL, NULL, NULL, NULL, NULL, 0);

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
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `emp_id`, `amount_pay`, `balance`, `l_id`, `date`) VALUES
(1, 5, 0, 0, 1, '2015-09-04'),
(2, 5, 0, 88000, 1, '2015-09-17'),
(3, 5, 0, 88000, 1, '2015-09-17'),
(4, 5, 0, 88000, 1, '2015-09-17'),
(5, 5, 0, 88000, 1, '2015-09-17'),
(6, 5, 186.7, 95613.3, 1, '2015-09-18'),
(7, 5, 186.7, 95426.6, 1, '2015-09-18'),
(8, 5, 186.7, 95239.9, 1, '2015-09-18'),
(9, 5, 186.7, 95053.2, 1, '2015-09-18'),
(10, 6, 1500.3, 7299.7, 1, '2015-09-30'),
(11, 6, 1500.3, 5799.4, 1, '2015-09-30'),
(12, 6, 700.3, 5099.1, 1, '2015-09-30'),
(13, 7, 916.66, 10083.3, 1, '2015-10-02'),
(14, 5, 36.11, 95570.3, 1, '2015-11-10');

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
(11768.4);

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
  `description` varchar(124) DEFAULT NULL,
  `bank_teller` varchar(124) DEFAULT NULL,
  `voucher_id` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `debit`, `credit`, `date`, `amount`, `emp_id`, `balance`, `total_deduction`, `acct_no`, `interest_amount`, `description`, `bank_teller`, `voucher_id`) VALUES
(1, 4, NULL, '0000-00-00', 4, 5, -4.4, 4.4, 'TSA6046007', 0, NULL, '', NULL),
(2, 100, NULL, '0000-00-00', 1000, 5, -100, 100, 'TSA6046007', 0, NULL, '', NULL),
(3, 1100, NULL, '0000-00-00', 1000, 5, -1100, 1100, 'TSA6046007', 0, NULL, '', NULL),
(4, 990, NULL, '2015-09-18', 900, 5, 2910, 990, 'TSA6046007', 90, NULL, '', NULL),
(5, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, 'deposit', '', NULL),
(6, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(7, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(8, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(9, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(10, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(11, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(12, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(13, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(14, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(15, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(16, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(17, NULL, 800, '2015-09-04', 800, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(18, NULL, 5000, '2015-09-16', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(19, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(20, NULL, 5000, '2015-09-18', 5000, 0, 0, NULL, 'TSA6046007', NULL, NULL, '', NULL),
(21, NULL, 5000, '2015-09-28', 0, 0, 5000, NULL, 'TSA3929672', NULL, NULL, '', NULL),
(22, NULL, 5000, '2015-09-28', 0, 0, 10000, NULL, 'TSA3929672', NULL, NULL, '', NULL),
(23, 4400, NULL, '2015-09-28', 4000, 5, 1200, NULL, 'TSA3929672', 400, NULL, '', NULL),
(24, 0, NULL, '2015-09-28', 4000, 5, 1200, NULL, 'TSA3929672', 400, NULL, '', NULL),
(25, 0, NULL, '2015-09-28', 4000, 5, 1200, NULL, 'TSA3929672', 400, NULL, '', NULL),
(26, 440, NULL, '2015-09-28', 400, 5, 760, NULL, 'TSA3929672', 40, NULL, '', NULL),
(27, 2000, NULL, '2015-09-30', 2000, 0, 1510, NULL, '', NULL, 'passbook', '', NULL),
(28, NULL, 5000, '2015-10-01', 0, 0, 6510, NULL, 'TSA6046007', NULL, 'deposit', '', NULL),
(29, NULL, 1000, '2015-10-01', 0, 0, 7510, NULL, 'TSA6046007', NULL, 'deposit', '', NULL),
(30, NULL, 5000, '2015-10-14', 0, 0, 6510, NULL, 'SSA0276544', NULL, 'deposit', '', NULL),
(31, NULL, 5000, '2015-10-14', 0, 0, 11510, NULL, 'SSA0276544', NULL, 'deposit', '', NULL),
(32, 2200, NULL, '2015-10-14', 2000, 5, 5310, NULL, 'TSA6046007', 200, 'withdrawal', '', NULL),
(33, NULL, 5000, '2015-10-14', 0, 0, 10310, NULL, 'TSA6046007', NULL, 'deposit', '', NULL),
(34, NULL, 5000, '2015-10-14', 0, 0, 15310, NULL, 'TSA6046007', NULL, 'deposit', '', NULL),
(35, NULL, 9000, '2015-10-14', 0, 0, 10510, NULL, 'TSA8992366', NULL, 'deposit', '', NULL),
(36, 5500, NULL, '2015-10-27', 5000, 5, 9810, NULL, 'TSA6046007', 500, 'withdrawal', NULL, NULL),
(37, 5500, NULL, '2015-10-27', 5000, 5, 4310, NULL, 'TSA6046007', 500, 'withdrawal', NULL, NULL),
(38, 1100, NULL, '2015-10-27', 1000, 5, 3210, NULL, 'TSA6046007', 100, 'withdrawal', NULL, NULL),
(39, 0, NULL, '2015-10-27', 1000, 5, 3210, NULL, 'TSA6046007', 100, 'withdrawal', NULL, NULL),
(40, 0, NULL, '2015-10-27', 1000, 5, 3210, NULL, 'TSA6046007', 100, 'withdrawal', NULL, NULL),
(41, 0, NULL, '2015-10-27', 1000, 5, 3210, NULL, 'TSA6046007', 100, 'withdrawal', NULL, NULL),
(42, 0, NULL, '2015-10-27', 1000, 5, 3210, NULL, 'TSA6046007', 100, 'withdrawal', NULL, NULL),
(43, 0, NULL, '2015-10-27', 1000, 5, 3210, NULL, 'TSA6046007', 100, 'withdrawal', NULL, NULL),
(44, 0, NULL, '2015-10-27', 1000, 5, 3210, NULL, 'TSA6046007', 100, 'withdrawal', NULL, NULL),
(45, 110, NULL, '2015-10-27', 100, 5, 1400, NULL, 'TSA3929672', 10, 'withdrawal', NULL, 'TSA39296721445946852.jpg'),
(46, 1100, NULL, '2015-11-04', 1000, 5, 410, NULL, 'SSA4645268', 100, 'withdrawal', NULL, 'SSA46452681446625252.jpg'),
(47, NULL, 10000, '2015-11-10', 0, 0, 10000, NULL, 'TSA1342458', NULL, 'deposit', '', NULL),
(48, NULL, 20000, '2015-11-10', 0, 0, 20000, NULL, 'TSA1775963', NULL, 'deposit', '089657', 'TSA17759631447161948.jpg'),
(49, NULL, 10000, '2015-11-10', 0, 0, 10000, NULL, 'TSA8507226', NULL, 'deposit', '1233789', NULL),
(50, NULL, 10000, '2015-11-10', 0, 0, 20000, NULL, 'TSA8507226', NULL, 'deposit', '1233789', NULL),
(51, NULL, 10000, '2015-11-10', 0, 0, 10000, NULL, 'tsa0474826', NULL, 'deposit', '', NULL),
(52, 4400, NULL, '2015-11-10', 4000, 8, 5600, NULL, 'TSA1342458', 400, 'withdrawal', NULL, NULL),
(53, 5500, NULL, '2015-11-10', 5000, 9, 14500, NULL, 'TSA1775963', 500, 'withdrawal', NULL, 'TSA17759631447161948.jpg'),
(54, 0, NULL, '2015-11-10', 1000, 10, 0, NULL, 'TSA4953866', 100, 'withdrawal', NULL, NULL),
(55, 4400, NULL, '2015-11-10', 4000, 11, 15600, NULL, 'TSA8507226', 400, 'withdrawal', NULL, NULL),
(56, 0, NULL, '2015-11-10', 0, 12, 10000, NULL, 'tsa0474826', 0, 'withdrawal', NULL, NULL),
(57, 0, NULL, '2015-11-10', 0, 12, 10000, NULL, 'tsa0474826', 0, 'withdrawal', NULL, NULL),
(58, 0, NULL, '2015-11-10', 0, 12, 10000, NULL, 'tsa0474826', 0, 'withdrawal', NULL, NULL),
(59, 0, NULL, '2015-11-10', 0, 12, 10000, NULL, 'tsa0474826', 0, 'withdrawal', NULL, NULL),
(60, 0, NULL, '2015-11-10', 0, 12, 10000, NULL, 'tsa0474826', 0, 'withdrawal', NULL, NULL),
(61, 0, NULL, '2015-11-10', 5000, 9, 14500, NULL, 'TSA1775963', 500, 'withdrawal', NULL, NULL),
(62, 0, NULL, '2015-11-10', 0, 10, 0, NULL, 'TSA4953866', 0, 'withdrawal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `acct_no` varchar(124) NOT NULL,
  `date` date DEFAULT NULL,
  `voucher_id` varchar(124) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`acct_no`, `date`, `voucher_id`, `id`) VALUES
('TSA3929672', '2015-10-27', 'TSA39296721445946852.jpg', 1),
('SSA4645268', '2015-11-04', 'SSA46452681446625252.jpg', 2),
('TSA1775963', '2015-11-10', 'TSA17759631447161948.jpg', 3);

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
  `voucher_id` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `acct_no`, `amount`, `total_deduction`, `date`, `teller_id`, `balance`, `emp_id`, `voucher_id`) VALUES
(1, 'TSA6046007', 4, 4.4, '0000-00-00', 0, -4.4, 5, NULL),
(2, 'TSA6046007', 1000, 100, '0000-00-00', 0, -100, 5, NULL),
(3, 'TSA6046007', 1000, 1100, '0000-00-00', 1, -1100, 5, NULL),
(4, 'TSA6046007', 900, 990, '2015-09-18', 1, 2910, 5, NULL),
(5, 'TSA6046007', 4000, 4400, '2015-09-28', 1, 3510, 5, NULL),
(6, 'TSA3929672', 4000, 4400, '2015-09-28', 1, 5600, 5, NULL),
(7, 'TSA3929672', 4000, 4400, '2015-09-28', 1, 1200, 5, NULL),
(8, 'TSA3929672', 4000, 0, '2015-09-28', 1, 1200, 5, NULL),
(9, 'TSA3929672', 4000, 0, '2015-09-28', 1, 1200, 5, NULL),
(10, 'TSA3929672', 400, 440, '2015-09-28', 1, 760, 5, NULL),
(11, 'TSA6046007', 2000, 2200, '2015-10-14', 1, 5310, 5, NULL),
(12, 'TSA6046007', 5000, 5500, '2015-10-27', 1, 9810, 5, NULL),
(13, 'TSA6046007', 5000, 5500, '2015-10-27', 1, 4310, 5, NULL),
(14, 'TSA6046007', 1000, 1100, '2015-10-27', 1, 3210, 5, NULL),
(15, 'TSA6046007', 1000, 0, '2015-10-27', 1, 3210, 5, NULL),
(16, 'TSA6046007', 1000, 0, '2015-10-27', 1, 3210, 5, NULL),
(17, 'TSA6046007', 1000, 0, '2015-10-27', 1, 3210, 5, NULL),
(18, 'TSA6046007', 1000, 0, '2015-10-27', 1, 3210, 5, NULL),
(19, 'TSA6046007', 1000, 0, '2015-10-27', 1, 3210, 5, NULL),
(20, 'TSA6046007', 1000, 0, '2015-10-27', 1, 3210, 5, NULL),
(21, 'TSA3929672', 100, 110, '2015-10-27', 1, 1400, 5, 'TSA39296721445946852.jpg'),
(22, 'SSA4645268', 1000, 1100, '2015-11-04', 1, 410, 5, 'SSA46452681446625252.jpg'),
(23, 'TSA1342458', 4000, 4400, '2015-11-10', 1, 5600, 8, NULL),
(24, 'TSA1775963', 5000, 5500, '2015-11-10', 1, 14500, 9, 'TSA17759631447161948.jpg'),
(25, 'TSA4953866', 1000, 0, '2015-11-10', 1, 0, 10, NULL),
(26, 'TSA8507226', 4000, 4400, '2015-11-10', 1, 15600, 11, NULL),
(27, 'tsa0474826', 0, 0, '2015-11-10', 1, 10000, 12, NULL),
(28, 'tsa0474826', 0, 0, '2015-11-10', 1, 10000, 12, NULL),
(29, 'tsa0474826', 0, 0, '2015-11-10', 1, 10000, 12, NULL),
(30, 'tsa0474826', 0, 0, '2015-11-10', 1, 10000, 12, NULL),
(31, 'tsa0474826', 0, 0, '2015-11-10', 1, 10000, 12, NULL),
(32, 'TSA1775963', 5000, 0, '2015-11-10', 1, 14500, 9, NULL),
(33, 'TSA4953866', 0, 0, '2015-11-10', 1, 0, 10, NULL);

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- Indexes for table `icas`
--
ALTER TABLE `icas`
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
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `acct_type`
--
ALTER TABLE `acct_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `charge`
--
ALTER TABLE `charge`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `icas`
--
ALTER TABLE `icas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `income_type`
--
ALTER TABLE `income_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `percent`
--
ALTER TABLE `percent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
