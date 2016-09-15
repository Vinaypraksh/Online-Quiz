-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 09:39 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `sno` int(255) NOT NULL,
  `ques` text NOT NULL,
  `opta` text NOT NULL,
  `optb` text NOT NULL,
  `optc` text NOT NULL,
  `optd` text NOT NULL,
  `correct` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`sno`, `ques`, `opta`, `optb`, `optc`, `optd`, `correct`) VALUES
(1, 'The largest number amongst the following that will perfectly divide (101^100)?1 is', '100', '10000', '100^100', '100000', 2),
(2, 'Find the remainder when first 1000 digits of the number?P?are divided by 16?', '7', '9', '11', '13', 2),
(3, 'Let?n?be the number of different 5 digit numbers, divisible by 4 with the digits 1, 2, 3, 4, 5 and 6, no digit being repeated in the numbers. What is the value of n?', '144', '168', '192', '        none', 2),
(4, 'A set of S consists of, i). All odd numbers from 1 to 55.  ii). All even numbers from 56 to 150.\nWhat is the index of the highest power of 3 in the product of all the elements of the set S?', '35', '48', '6', '36', 2),
(5, 'Let?X?be a four-digit number with exactly three consecutive digits being same and is a multiple of 9. How many such?X?s are possible?', '12', '16', '19', '20', 2),
(6, 'The remainder when m+n is divided by 12 is 8, and the remainder when m?n is divided by 12 is 6 .  If m>n, then what is the remainder when mn divided by 6?', '1', '2', '3', '4', 2),
(7, 'How many ordered pairs of integer?(x,y)?are there such that their product is a positive integer less than 100.', '546', '646', '1090', '946', 2),
(8, 'a,b,c,d?and?e?are five consecutive integers in increasing order of size. Which one of the following expressions is not odd?', 'ab+c', 'ab+d', 'ac+d', 'ac+e', 2),
(9, 'Find the sun of the digits of the least natural number?P, such that the sum of the cubes of the four smallest distinct divisors of?P?equals?2P.', '7', '8', '9', '10', 2),
(10, 'If a three digit number ?abc? has 3 factors, how many factors does the 6-digit number ?abcabc? have?', '16', '24', '16 or 24', '20', 2),
(11, 'How many numbers are there less than 100 that cannot be written as a multiple of a perfect square greater than 1', '61', '52', '56', '65', 61),
(12, 'How many factors of 1080 are perfect squares?', '4', '6', '5', '8', 4),
(13, 'The sum of the squares of three numbers is 138, while the sum of their products taken two at a time is 131. Their sum is', '5', '15', '20', '30', 20),
(14, 'Find the largest five digit number that is divisible by 7, 10, 15, 21 and 28.', '99840', '99900', '99960', '99990', 99960),
(15, 'If both 112?and 33?are factors of the number a * 43?* 62?* 1311, what is the smallest possible value of ''a''?', '121', '3261', '363', '36', 363),
(16, 'What is the highest power of 7 that will divide 5000! without leaving a remainder? (5000! means factorial 5000', '4998', '714', '832', '816', 832),
(17, 'Find the remainder when first 1000 digits of the number?P?are divided by 16?  Where p = 12345678910????..99989991000', '7', '9', '11', '13', 13),
(18, 'Let?n?be the number of different 5 digit numbers, divisible by 4 with the digits 1, 2, 3, 4, 5 and 6, no digit being repeated in the numbers. What is the value of n? ', '144', '168', '192', 'none', 192),
(19, 'What is the minimum number of square marbles required to tile a floor of length 5 metres 78 cm and width 3 metres 74 cm?', '176', '187', '540', '748', 187),
(20, 'Find the remainder when?289?is divided by?89?', '1', '2', '87', '88', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `s_no` int(2) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `correct` int(200) NOT NULL,
  `marks` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`s_no`, `user_name`, `password`, `correct`, `marks`) VALUES
(1, 'sachin', 'sachin', 9, 9),
(2, 'rohit', 'rohit', 1, 1),
(3, 'vinay', 'vinay', 0, 0),
(4, 'en01', 'en01', 0, 0),
(5, 'en02', 'en02', 0, 0),
(6, 'en03', 'en03', 0, 0),
(7, 'en04', 'en04', 0, 0),
(8, 'en05', 'en05', 2, 2),
(9, 'en06', 'en06', 0, 0),
(10, 'en07', 'en07', 0, 0),
(11, 'en08', 'en08', 0, 0),
(12, 'en09', 'en09', 0, 0),
(13, 'en10', 'en10', 8, 8),
(14, 'en11', 'en11', 0, 0),
(15, 'en12', 'en12', 0, 0),
(16, 'en13', 'en13', 0, 0),
(17, 'en14', 'en14', 0, 0),
(18, 'en15', 'en15', 0, 0),
(19, 'en16', 'en16', 0, 0),
(20, 'en17', 'en17', 0, 0),
(21, 'en18', 'en18', 0, 0),
(22, 'en19', 'en19', 6, 6),
(23, 'en20', 'en20', 0, 0),
(24, 'en21', 'en21', 3, 3),
(25, 'en22', 'en22', 0, 0),
(26, 'en23', 'en23', 0, 0),
(27, 'en24', 'en24', 0, 0),
(28, 'en25', 'en25', 0, 0),
(29, 'en26', 'en26', 0, 0),
(30, 'en27', 'en27', 0, 0),
(31, 'en28', 'en28', 0, 0),
(32, 'en29', 'en29', 0, 0),
(33, 'en30', 'en30', 0, 0),
(34, 'en31', 'en31', 0, 0),
(35, 'en32', 'en32', 0, 0),
(36, 'en33', 'en33', 0, 0),
(37, 'en34', 'en34', 0, 0),
(38, 'en35', 'en35', 9, 9),
(39, 'en36', 'en36', 0, 0),
(40, 'en37', 'en37', 0, 0),
(41, 'en38', 'en38', 0, 0),
(42, 'en39', 'en39', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`sno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
