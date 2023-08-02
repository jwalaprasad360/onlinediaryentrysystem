-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 04:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlits`
--

-- --------------------------------------------------------

--
-- Table structure for table `creds`
--

CREATE TABLE `creds` (
  `name` varchar(1000) NOT NULL,
  `unqid` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creds`
--

INSERT INTO `creds` (`name`, `unqid`, `password`) VALUES
('dinesh', 'dinnu@gmail.com', 'dinnu@gmail.com'),
('vidya', 'vidyajyothula9@gmail.com', 'aadwik'),
('raj', 'rajuu@gmail.com', 'rajuu@gmail.com'),
('veeru', 'veeru@gmail.com', 'veeru@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `unqid` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(1000) NOT NULL,
  `diary` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`unqid`, `date`, `title`, `diary`) VALUES
('dinnu@gmail.com', '2023-02-21', 'vamsi', 'today succesfully complete cd lab.'),
('vidyajyothula9@gmail.com', '2023-02-22', 'assignment', 'sdjbefl,fksav,\r\nvbregfrelfgrlj\r\nkjerjf'),
('veeru@gmail.com', '2023-02-22', 'veeru', 'today i played free fire a lot with sahil raj bammardhi.');

-- --------------------------------------------------------

--
-- Table structure for table `todos1`
--

CREATE TABLE `todos1` (
  `id` int(255) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `unqid` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos1`
--

INSERT INTO `todos1` (`id`, `Title`, `unqid`) VALUES
(1, 'unit teaching', 'vidyajyothula9@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos1`
--
ALTER TABLE `todos1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos1`
--
ALTER TABLE `todos1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
