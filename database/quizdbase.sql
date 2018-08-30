-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 04:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `a_id` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`a_id`, `answer`, `ans_id`) VALUES
(1, '1994 ', 1),
(2, '1996', 1),
(3, '1992', 1),
(4, '1990 ', 1),
(5, 'SCM', 2),
(6, 'EDI ', 2),
(7, 'Both of these ', 2),
(8, 'None of these ', 2),
(9, 'Commerce ', 3),
(10, 'E-Commerce', 3),
(11, 'E-Business', 3),
(12, 'None of these', 3),
(13, 'EDI ', 4),
(14, 'Protocols', 4),
(15, 'TCP/IP', 4),
(16, 'None of these', 4),
(17, ' Books ', 5),
(18, 'Vegetables', 5),
(19, 'All of these', 5),
(20, 'None of these', 5),
(21, 'EDI', 6),
(22, 'Protocols', 6),
(23, ' Standards', 6),
(24, 'Business applications', 6),
(25, 'E-commerce ', 7),
(26, 'E-Business', 7),
(27, ' EDI', 7),
(28, ' None of these ', 7),
(29, 'E-commerce', 8),
(30, 'EDI', 8),
(31, 'Networking', 8),
(32, ' SCM', 8),
(33, 'Suppliers', 9),
(34, ' Manufacturers', 9),
(35, 'Distributors', 9),
(36, 'Customers', 9),
(37, 'E-commerce ', 10),
(38, 'SCM ', 10),
(39, 'EDI ', 10),
(40, 'None of these', 10);

-- --------------------------------------------------------

--
-- Table structure for table `answers1`
--

CREATE TABLE `answers1` (
  `a_id` int(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers1`
--

INSERT INTO `answers1` (`a_id`, `answer`, `ans_id`) VALUES
(1, 'RFID', 1),
(2, 'Micro Sensors', 1),
(3, 'UNII', 1),
(4, 'ISM', 1),
(5, 'Access Point ', 2),
(6, 'Antenna', 2),
(7, 'Network Adaptor', 2),
(8, 'Repeater', 2),
(9, 'Network Adaptor   ', 3),
(10, 'Access Point', 3),
(11, 'Antenna', 3),
(12, 'Repeater', 3),
(13, 'Interoperable', 4),
(14, 'Accessible', 4),
(15, 'Portable', 4),
(16, 'Scalable', 4),
(17, 'ISM', 5),
(18, 'RFID', 5),
(19, 'SOHO', 5),
(20, 'UNII', 5),
(21, 'RFI', 6),
(22, 'RFID', 6),
(23, 'FCC', 6),
(24, 'ISM', 6),
(25, 'Scalability           ', 7),
(26, 'Portability', 7),
(27, 'Interoperability', 7),
(28, 'Accessibility', 7),
(29, 'Cables      ', 8),
(30, 'Access Point', 8),
(31, 'Router', 8),
(32, 'Bridges', 8),
(33, 'RF Interferences      ', 9),
(34, 'Flexibility', 9),
(35, 'Ease of installation', 9),
(36, 'Scalability', 9),
(37, 'Portability      ', 10),
(38, 'Scalability', 10),
(39, 'Flexibility', 10),
(40, 'Interoperability', 10),
(41, 'ISO ', 11),
(42, 'SIO', 11),
(43, 'IOS', 11),
(44, 'SOI', 11),
(45, 'Access Point', 12),
(46, 'Router', 12),
(47, 'NIC', 12),
(48, 'PC Card', 12),
(49, 'Router       ', 13),
(50, 'Bridge', 13),
(51, 'PC Card', 13),
(52, 'NIC', 13),
(53, 'VoIP      ', 14),
(54, 'RFID', 14),
(55, 'PDA', 14),
(56, 'Repeater', 14),
(57, '13.56 MHz', 15),
(58, '5 GHz', 15),
(59, '2.4 GHz', 15),
(60, '614 MHz', 15);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(250) NOT NULL,
  `question` varchar(300) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question`, `ans_id`) VALUES
(1, '1. World Wide Web (WWW) was introduced in the year .', 1),
(2, ' 2. ----.is an early form of E-commerce', 6),
(3, '3. ----.is concerned with the buying and selling information, products and services over computer communication networks', 10),
(4, '4.----.is a set of standards developed in the 1960s to exchange business. information and to do electronic transactions', 13),
(5, '5. Which among the following product is suitable for E-Commerce ?', 17),
(6, '6. ----allows a business application on the computer of one organization to communicate directly with the business application on the computer of another company.', 21),
(7, '7. Electronic Exchange of business documents in a standard format is known as ------', 27),
(8, '8. ----is essentially a business process that connects manufacturers, retailers, customers and suppliers in the form of a chain to develop and deliver products.\r\n', 32),
(9, '9. Which of the following is not a party of SCM ?\r\n', 35),
(10, '10.----is a commercial process that includes production, distribution, sales or delivery of goods and services through electronic means.', 37);

-- --------------------------------------------------------

--
-- Table structure for table `questions1`
--

CREATE TABLE `questions1` (
  `q_id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions1`
--

INSERT INTO `questions1` (`q_id`, `question`, `ans_id`) VALUES
(1, '1. What is the wireless communications technology used in retail operations to identify and secure merchandise?', 1),
(2, '2. What WLAN device provides communications management services to wireless workstations?', 5),
(3, '3. What WLAN device is installed in or attached to a PC to provide an interface to a wireless network?', 9),
(4, '4. What is the term used to describe the ability for networking devices from different manufacturers to communicate effectively?', 13),
(5, '5. Which of the FCC\'s RF bands operates in the frequency range of 2.4 GHz to 2.4835 GHz .', 17),
(6, '6.What is the term used to identify the broadcast or generated electrical signals that can disrupt wireless communications?', 21),
(7, '7.What is the term used to describe the ability of a network technology to be easily resized to meet the growing or changing requirements of an organization?', 25),
(8, '8. A wireless extension to a wired network can eliminate the need for new __________ to be installed.', 29),
(9, '9.Which one of the following is not a consideration when deciding between a WLAN and a wired LAN beyond the network medium?', 33),
(10, '10. In a software world, __________ refers to the capability of a software program to run on different operating systems or hardware models.', 37),
(11, '11.The acronym for International Organization for Standardization is:', 41),
(12, '12.This device serves as an interface point and bridge between wireless workstations and a wired network, so the wireless workstations can access the resources of the wired network.', 45),
(13, '13.A wireless __________ includes and supports the functions of an access point, a wireless switch, and a router.', 49),
(14, '14. Implementing wireless __________ requires the use of telephones that include an RF transmitter and antenna.', 53),
(15, '15.The read/write unit of an RFID system constantly scans on its __________ frequency for any transponders within its range sending out a signal that causes the transponder to respond with its encoded information.', 57);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(250) NOT NULL,
  `username` varchar(300) NOT NULL,
  `totalquiz` varchar(250) NOT NULL,
  `answercorrect` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `reg_no` int(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `reg_no`, `dept`, `email`, `mobile`, `sex`, `password`) VALUES
(10, 'dhiraj', 22222, 'computer science', 'dk123@gmail.com', '2147483647', 'Male', 22222),
(11, 'ckumar', 55555, 'computer science', 'ckj40856@gmail.com', '2147483647', 'Male', 55555),
(12, 'ckj', 11111, 'computer science', 'ckj40856@gmail.com', '2147483647', 'Male', 11111),
(13, 'ckumarj', 16352063, 'computer science', 'ckj40856@gmail.com', '2147483647', 'Male', 33333),
(14, 'Manish Kumar', 16352044, 'computer science', 'mk234@gmail.com', '2147483647', 'Male', 222222),
(15, 'Raja Kumar', 16352045, 'computer science', 'rk333@gmail.com', '2147483647', '', 212121),
(16, 'Priya Raj', 17352066, 'computer science', 'priya1223@gmail.com', '2147483647', 'female', 123456),
(17, 'Priya Raj', 16352063, 'computer science', '9487810674', '2147483647', 'female', 1234567),
(18, 'sanjay kua', 16352055, 'computer science', 'sanjay333@rediffmail.com', '986754322', 'male', 16352063),
(19, 'Dipu Kumari', 12345, 'physics', 'dipu456@gmail.com', '9487810674', 'female', 9876),
(20, '', 0, '', '', '', '', 0),
(21, 'administrator', 16352003, 'computer science', 'ckj40856@gmail.com', '9487810674', 'female', 33333),
(22, 'chandan', 16352063, 'computer science', 'chandankjaiswal231@gmail.com', '9487810674', 'male', 707038),
(23, 'sangita roy', 17352066, 'physics', 'sk1233rediffmail.com', '9487810674', 'female', 99999),
(24, 'birju kumar', 16352055, 'computer science', 'bkm123r@gmail.com', '9487810674', 'male', 123456),
(25, 'Rahul Kumar', 16352124, 'computer science', 'rk333@gmail.com', '8709567434', 'male', 44444),
(26, 'Nikesh Jha', 16352022, 'computer science', 'nikeshjha29@gmail.com', '9786653535', 'male', 77777),
(27, 'Anita ', 1745055, 'Maths', 'ank123@gmail.com', '67847534745', 'male', 0),
(28, 'sanjay', 234556, 'M.SC', 'sanjay123@gmai.com', '987676754', 'male', 999999),
(29, 'Logesh', 16352003, 'computer science', 'logesh235@gmail.com', '97675665454', 'male', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `answers1`
--
ALTER TABLE `answers1`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `questions1`
--
ALTER TABLE `questions1`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `a_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `answers1`
--
ALTER TABLE `answers1`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions1`
--
ALTER TABLE `questions1`
  MODIFY `q_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
