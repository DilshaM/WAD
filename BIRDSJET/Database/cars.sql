-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2022 at 04:34 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_type` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `hire_cost` double NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(1, 'Mercedes Benz', 'Mercedes Benz', 'images/car1.jpg', 20000, 5, 'Available'),
(2, 'Range Rover', 'LandRover', 'images/car2.jpg', 30000, 6, 'Available'),
(3, 'Harrier', 'Toyota', 'images/car3.jpg', 20000, 6, 'Available'),
(4, 'LandCruiser V8', 'LandCruiser', 'images/car4.jpg', 20000, 5, 'Available'),
(5, 'Security Vehicles', 'Hammar Cars', 'images/car5.jpg', 30000, 8, 'Available'),
(6, 'Wedding Limousine', 'Wedding Limousine', 'images/car6.jpg', 50000, 10, 'Available'),
(7, 'Chevrolet Tahoe', 'Chevrolet', 'images/car7.jpg', 40000, 5, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_no` varchar(15) NOT NULL,
  `phone` char(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `car_id` int(11) NOT NULL,
  `transaction_id` varchar(15) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `transaction_id`) VALUES
(1, 'D.M.G.B.Nawarathna', 'bimsaranawarathna@gmail.com', '200128302171', '778682110', 'Kandy', 'Male', 4, '1235'),
(2, 'A.B.C.Defgh Ijklm', 'abcd123@abc.com', '123456789089v', '778682110', 'Colombo', 'Female', 6, '1235'),
(5, 'FinalTest', 'final@test.com', '123498346712', '147852369', 'finallocation', 'Female', 2, '12rt67gje4h9'),
(4, 'TestName', 'test@mail.com', '123434565678', '987654321', 'TestLocation', 'Male', 3, '123a425b45w6'),
(3, 'M.A.D.Mallawaarachchie', 'sandanidilsha@gmail.com', '199812345678', '772450326', 'Aladeniya', 'Female', 7, '123497468204');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

DROP TABLE IF EXISTS `hire`;
CREATE TABLE IF NOT EXISTS `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  PRIMARY KEY (`hire_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hire_id`, `client_id`, `car_id`) VALUES
(1, 1, 4),
(4, 4, 3),
(3, 6, 7),
(2, 2, 6),
(5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `email`, `message`, `time`) VALUES
(1, 'abcd@gmail.com', 'Will you provide a driver along with the car?', '2022-03-14 07:39:00'),
(2, 'bimsara123@outlook.com', 'Will the vehicle be sent to our location or do we have to come and get it?', '2022-03-15 00:25:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
