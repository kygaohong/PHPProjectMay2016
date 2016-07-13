-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2016 at 01:59 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftskids`
--

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(11) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `minimum_age` int(11) NOT NULL DEFAULT '6'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `name`, `minimum_age`) VALUES
(1, 'Harry Potter and the Sorcerer\'s Stone', 7),
(2, 'Harry Potter and the Chamber of Secrets', 7),
(3, 'Harry Potter and the Goblet of Fire', 7),
(4, 'Harry Potter and the Prisoner of Azkaban', 7),
(5, 'Magic Tree House Ghost Town at Sundown', 6),
(6, 'Magic Tree House Dolphins at Daybreak', 6),
(7, 'Magic Tree House Midnight on the Moon', 6),
(8, 'Magic Tree House Sunset of the Sabertooth', 6),
(9, 'Magic Tree House Afternoon on the Amazon', 6),
(10, 'Magic Tree House Lions at Lunchtime', 6),
(11, 'My Name is Elmo', 1),
(12, 'Elmo Loves You', 1),
(13, 'A Perfect Picnic', 2),
(14, 'Twiddlebug Fun', 2),
(15, 'Abby in Wonderland', 2),
(16, 'Rosita\'s Easter', 2),
(18, 'Abby in Wonderland', 2),
(22, 'Ivy and Bean', 5),
(23, 'Red or Blue, I Like You! ', 3),
(24, 'My father\'s dragon', 5),
(25, 'Night, night, Elmo!', 2),
(26, 'Junie B. Jones Is Not a Crook', 5),
(27, 'Junie B. Jones and the Stupid Smelly Bus', 5),
(32, 'Junie B. Jones and Her Big Fat Mouth', 5),
(33, 'Junie B. Jones and That Meanie Jim\'s Birthday', 5),
(34, 'Junie B. Jones Has a Monster Under Her Bed', 5),
(35, 'Junie B. Jones Has a Monster Under Her House', 5),
(39, 'Junie B. Jones and Some Sneaky Peeky Spying', 5),
(40, 'Judy Moody and Stink: The Big Bad Blackout', 5),
(42, 'Judy Moody & Stink: The Holly Joliday', 5),
(43, 'Judy Moody and Stink: The Mad, Mad, Mad, Mad Treasure Hunt', 5),
(44, 'Junie B. Jones and the Yucky Blucky Fruitcake', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
