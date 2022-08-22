-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 07:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
('takib', 'sarker', '2022-08-02', '312/16 K Blo', '01779011690', 'gamertib@gmail.com', '123', 'XYZ123', '../files/cv/sakib_2022-08-17.pdf', '../files/photos/takib_2022-08-22.jpg', 0),
('Shan', 'Hosasin', '2000-02-29', 'Dit Projecty', '01548454545', 'shanhossain@gmail.com', '5632632+-+6*&ughujLLkj(89890', '123', '../files/cv/Shan_2022-08-15.pdf', '../files/photos/Shan_2022-08-15.jpg', 0),
('shanto', 'Khan', '2000-02-01', 'Mirpur, Dhaka, Bangladesh', '01524845110', 'shanto@yeahoo.com', '123', 'go', '../files/cv/shanto_2022-08-22.pdf', '../files/photos/shanto_2022-08-22.jpg', 0),
('Shan', 'sarker', '1999-05-10', '312/16, block -k', '01779011696', 'shn@h.com', 'HJHkh78&*78bnj', '123', '../files/cv/Shan_2022-08-22.pdf', '../files/photos/Shan_2022-08-22.jpg', 0);

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
('demo');

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `cName` varchar(50) NOT NULL,
  `CAccNo` int(10) NOT NULL,
  `balance` int(10) NOT NULL,
  `takenLoan` int(10) NOT NULL,
  `unPaidLoan` int(10) NOT NULL,
  `cEmail` varchar(50) NOT NULL,
  `cMobile` int(15) NOT NULL,
  `cAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`cName`, `CAccNo`, `balance`, `takenLoan`, `unPaidLoan`, `cEmail`, `cMobile`, `cAddress`) VALUES
('Nuhin', 2000012546, 1600, 5, 3, 'nuhi@gimail.co', 1634857425, 'DIT road, Dhaka'),
('rafi', 2000012548, 15000, 2, 1, 'rafi@g.co', 1345874541, 'Badda, Dhaka'),
('safi', 2000012549, 6500, 7, 6, 'shafi@g.co', 1345657542, ' New Badda, Dhaka'),
('Rifat', 2000012566, 6600, 6, 0, 'anf@gimail.co', 1634856545, 'Banasree, Dhaka'),
('Kamal', 2000012599, 600, 0, 0, 'kaml@g.co', 1854657542, ' Gulshan, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `employeedata`
--

CREATE TABLE `employeedata` (
  `eFName` varchar(50) NOT NULL,
  `eLName` varchar(50) NOT NULL,
  `ePhone` int(50) NOT NULL,
  `eAddress` varchar(50) NOT NULL,
  `eMail` varchar(50) NOT NULL,
  `eJobTitle` varchar(50) NOT NULL,
  `ePhoto` varchar(200) NOT NULL,
  `eSalary` int(50) NOT NULL,
  `eDob` varchar(50) NOT NULL,
  `eCv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeedata`
--

INSERT INTO `employeedata` (`eFName`, `eLName`, `ePhone`, `eAddress`, `eMail`, `eJobTitle`, `ePhoto`, `eSalary`, `eDob`, `eCv`) VALUES
('Saadi', 'Saidul', 136475842, 'Bashundhora, Dhaka', 'sadi@gmail.com', 'Manager', '../files/photos/_2022-08-22.jpg', 20000, '2000-10-02', '../files/cv/Saadi_2022-08-22.pdf'),
('Saadi', 'Sadman', 1658425465, '312/16, block -k', 'sadman@gmail.com', 'Executive Officer', '../files/photos/Saadi_2022-08-22.jpg', 1000, '2000-02-01', '../files/cv/Saadi_2022-08-22.pdf'),
('sifat', 'Hasan', 1457484575, 'Hossain Market, Badda, Dhaka', 'sifat@gmail.com', 'Executive Officer', '../files/photos/_2022-08-22.jpg', 20000, '2000-01-02', '../files/cv/sifat_2022-08-22.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`adminemail`);

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`CAccNo`);

--
-- Indexes for table `employeedata`
--
ALTER TABLE `employeedata`
  ADD PRIMARY KEY (`eMail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
