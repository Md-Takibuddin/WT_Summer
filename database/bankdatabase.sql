-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 10:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `adminfname` varchar(100) NOT NULL,
  `adminlname` varchar(100) NOT NULL,
  `admindob` date NOT NULL,
  `adminaddress` varchar(100) NOT NULL,
  `adminmobileno` varchar(20) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `adminpassword` varchar(100) NOT NULL,
  `adminkey` varchar(20) NOT NULL,
  `admincv` varchar(100) NOT NULL,
  `adminphoto` varchar(100) NOT NULL,
  `adminid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`adminfname`, `adminlname`, `admindob`, `adminaddress`, `adminmobileno`, `adminemail`, `adminpassword`, `adminkey`, `admincv`, `adminphoto`, `adminid`) VALUES
('shan@gmail.com', 'shanto', '2022-08-10', '4/10, Dit Project, Badda, Dhaka', '0167266062         ', 'demo', 'demo', '[value-8]', '', '', 0),
('takib', 'sarker', '2022-08-02', '312/16 K Block', '01779011690', 'gamertakib@gmail.com', 'asdASD777&&&', 'XYZ123', '../files/cv/sakib_2022-08-17.pdf', '../files/photos/takib_2022-08-17.jpg', 0),
('shan', 'xfvdsain', '2022-08-10', '4/10, Dit Project, Badda, Dhaka', '01672660622         ', 'shan123@gmail.com', '123', 'XYZ123', '', '', 0),
('Shan', 'Hosasin', '2000-02-29', 'Dit Projecty', '01548454545', 'shanhossain@gmail.com', '5632632+-+6*&ughujLLkj(89890', '123', '../files/cv/Shan_2022-08-15.pdf', '../files/photos/Shan_2022-08-15.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `adminkey`
--

CREATE TABLE `adminkey` (
  `key` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminkey`
--

INSERT INTO `adminkey` (`key`) VALUES
('xyz'),
('123'),
('test'),
('demo'),
('go');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`adminemail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
