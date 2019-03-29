-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 11:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(100) NOT NULL,
  `barangay_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
(98, 'TABOC SUR'),
(2434, 'mobod');

-- --------------------------------------------------------

--
-- Table structure for table `bclearance`
--

CREATE TABLE `bclearance` (
  `clearance_id` int(100) NOT NULL,
  `persons_id` int(100) DEFAULT NULL,
  `barangay_id` int(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(100) DEFAULT NULL,
  `cedula_id` int(100) DEFAULT NULL,
  `captain_id` int(100) DEFAULT NULL,
  `staff_id` int(100) DEFAULT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `captain`
--

CREATE TABLE `captain` (
  `captain_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `barangay_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captain`
--

INSERT INTO `captain` (`captain_id`, `first_name`, `middle_name`, `last_name`, `barangay_id`) VALUES
(456, 'aileen', 'manon-og', 'taladua', 98);

-- --------------------------------------------------------

--
-- Table structure for table `cedula`
--

CREATE TABLE `cedula` (
  `cedula_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `amount` int(100) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cedula`
--

INSERT INTO `cedula` (`cedula_id`, `date`, `amount`, `place`) VALUES
(231, '2019-03-21', 16, 'oroquieta city');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `persons_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `barangay_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`persons_id`, `firstname`, `middlename`, `lastname`, `status`, `address`, `birth_date`, `barangay_id`) VALUES
(43534, 'sdfgdg', 'fgdgd', 'dgdfg', 'gfdg', 'dfgdf', '2019-03-22', 2434),
(45345, 'sdfsdfsfsd', 'ffsdfs', 'sdfs', 'sdfsdf', 'sfsdfsdf', '2019-03-14', 98);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(100) NOT NULL,
  `first_name1` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `barangay_id` int(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name1`, `middle_name`, `last_name`, `barangay_id`, `username`, `password`) VALUES
(234, 'jude', 'bigcas', 'buron', 98, 'staff', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'admin', 'admin'),
(5, 'fred', '570a90bfbf8c7eab5dc5d4e26832d5b1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `bclearance`
--
ALTER TABLE `bclearance`
  ADD PRIMARY KEY (`clearance_id`),
  ADD KEY `persons_id` (`persons_id`),
  ADD KEY `barangay_id` (`barangay_id`),
  ADD KEY `cedula_id` (`cedula_id`),
  ADD KEY `captain_id` (`captain_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `captain`
--
ALTER TABLE `captain`
  ADD PRIMARY KEY (`captain_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `cedula`
--
ALTER TABLE `cedula`
  ADD PRIMARY KEY (`cedula_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`persons_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bclearance`
--
ALTER TABLE `bclearance`
  ADD CONSTRAINT `bclearance_ibfk_1` FOREIGN KEY (`persons_id`) REFERENCES `person` (`persons_id`),
  ADD CONSTRAINT `bclearance_ibfk_2` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`),
  ADD CONSTRAINT `bclearance_ibfk_3` FOREIGN KEY (`cedula_id`) REFERENCES `cedula` (`cedula_id`),
  ADD CONSTRAINT `bclearance_ibfk_4` FOREIGN KEY (`captain_id`) REFERENCES `captain` (`captain_id`),
  ADD CONSTRAINT `bclearance_ibfk_5` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `captain`
--
ALTER TABLE `captain`
  ADD CONSTRAINT `captain_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
