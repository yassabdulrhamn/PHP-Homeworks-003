-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`fname`, `lname`, `birth`, `mobile`, `email`, `job`) VALUES
('Ahmed', 'alquhtani', '2017-12-13', 543449244, 'Ahmed@gmail.com', 'Doctor'),
('Sara', 'almosea', '2017-12-13', 574717016, 'Sara@gmail.com', 'IT support'),
('Yaser', 'almajed', '2017-12-13', 568602234, 'Yaser@gmail.com', 'medcanic'),
('Mohamed', 'aljedaie', '2017-12-13', 532634584, 'Mohamed@gmail.com', 'eng'),
('Majed', 'almohamdy', '2017-12-13', 577332645, 'Majed@gmail.com', 'Pailot'),
('Abdualla', 'albssam', '2013-01-02', 523485344, 'Abdualla@gmail.com', 'football player'),
('Khalid', 'alnafisah', '2017-11-07', 532395955, 'Khalid@gmail.com', 'singer'),
('Meshari', 'alfheed', '2017-11-07', 528465016, 'Meshari@gmail.com', 'hrlp desk'),
('Yazeed', 'alsaud', '2017-11-07', 563847412, 'Yazeed@gmail.com', 'chasher'),
('Turki', 'alshrani', '2017-11-07', 582135653, 'Turki@gmail.com', 'sales man'),
('Nasser', 'alshahri', '2013-10-02', 55979419, 'Nasser@gmail.com', 'securtiy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
