-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 06:10 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mocktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `aptitude`
--

CREATE TABLE IF NOT EXISTS `aptitude` (
  `qno` int(2) NOT NULL,
  `ques` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `correct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aptitude`
--

INSERT INTO `aptitude` (`qno`, `ques`, `a`, `b`, `c`, `d`, `correct`) VALUES
(1, 'The largest number amongst the following that will perfectly divide (101^100)?1 is', '100', '10000', '100^100', '100000', '2'),
(2, 'Find the remainder when first 1000 digits of the number?P?are divided by 16?', '7', '9', '11', '13', '4'),
(3, 'Let?n?be the number of different 5 digit numbers, divisible by 4 with the digits 1, 2, 3, 4, 5 and 6, no digit being repeated in the numbers. What is the value of n?', '144', '168', '192', '        none', '3'),
(4, 'A set of S consists of, i). All odd numbers from 1 to 55.  ii). All even numbers from 56 to 150.\nWhat is the index of the highest power of 3 in the product of all the elements of the set S?', '35', '48', '6', '36', '35'),
(5, 'Let?X?be a four-digit number with exactly three consecutive digits being same and is a multiple of 9. How many such?X?s are possible?', '12', '16', '19', '20', '20'),
(6, 'The remainder when m+n is divided by 12 is 8, and the remainder when m?n is divided by 12 is 6 .  If m>n, then what is the remainder when mn divided by 6?', '1', '2', '3', '4', '1'),
(7, 'How many ordered pairs of integer?(x,y)?are there such that their product is a positive integer less than 100.', '546', '646', '1090', '946', '946'),
(8, 'a,b,c,d?and?e?are five consecutive integers in increasing order of size. Which one of the following expressions is not odd?', 'ab+c', 'ab+d', 'ac+d', 'ac+e', 'ac+e'),
(9, 'Find the sun of the digits of the least natural number?P, such that the sum of the cubes of the four smallest distinct divisors of?P?equals?2P.', '7', '8', '9', '10', '9'),
(10, 'If a three digit number ?abc? has 3 factors, how many factors does the 6-digit number ?abcabc? have?', '16', '24', '16 or 24', '20', '16 or 24'),
(11, 'How many numbers are there less than 100 that cannot be written as a multiple of a perfect square greater than 1', '61', '52', '56', '65', '61'),
(12, 'How many factors of 1080 are perfect squares?', '4', '6', '5', '8', '4'),
(13, 'The sum of the squares of three numbers is 138, while the sum of their products taken two at a time is 131. Their sum is', '5', '15', '20', '30', '20'),
(14, 'Find the largest five digit number that is divisible by 7, 10, 15, 21 and 28.', '99840', '99900', '99960', '99990', '99960'),
(15, 'If both 112?and 33?are factors of the number a * 43?* 62?* 1311, what is the smallest possible value of ''a''?', '121', '3261', '363', '36', '363'),
(16, 'What is the highest power of 7 that will divide 5000! without leaving a remainder? (5000! means factorial 5000', '4998', '714', '832', '816', '832'),
(17, 'Find the remainder when first 1000 digits of the number?P?are divided by 16?  Where p = 12345678910????..99989991000', '7', '9', '11', '13', '13'),
(18, 'Let?n?be the number of different 5 digit numbers, divisible by 4 with the digits 1, 2, 3, 4, 5 and 6, no digit being repeated in the numbers. What is the value of n? ', '144', '168', '192', 'none', '192'),
(19, 'What is the minimum number of square marbles required to tile a floor of length 5 metres 78 cm and width 3 metres 74 cm?', '176', '187', '540', '748', '187'),
(20, 'Find the remainder when?289?is divided by?89?', '1', '2', '87', '88', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `sno` int(3) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`sno`, `uname`, `password`) VALUES
(1, 'rohit', 'rohit'),
(2, 'badde', 'badde');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
