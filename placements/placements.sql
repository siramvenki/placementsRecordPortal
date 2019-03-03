-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 01:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placements`
--

-- --------------------------------------------------------

--
-- Table structure for table `user2016`
--

CREATE TABLE `user2016` (
  `email` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `year` int(10) NOT NULL,
  `valid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user2016`
--

INSERT INTO `user2016` (`email`, `name`, `roll`, `password`, `year`, `valid`) VALUES
('a@gmail.com', 'j', '2016', 'j', 2016, 0),
('b@gmail.com', 'j', '2016', 'j', 2016, 0),
('c@gmail.com', 'j', '2016', 'j', 2016, 0),
('venky@gmail', 'j', '2016', 's', 2016, 0),
('venky@gmail.com', 'j', '2016', 's', 2016, 0),
('vikas.reddem568@gmail.com', 'a', '2016', 'a', 2016, 0),
('z@gmail.com', 'j', '2016', 'j', 2016, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user2016`
--
ALTER TABLE `user2016`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
