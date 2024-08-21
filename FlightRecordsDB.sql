-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2024 at 09:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FlightRecordsDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `FlightRecords`
--

CREATE TABLE `FlightRecords` (
  `Recordid` int(11) NOT NULL,
  `FlightNumber` varchar(50) DEFAULT NULL,
  `FlightName` varchar(100) DEFAULT NULL,
  `Source` varchar(100) DEFAULT NULL,
  `Destination` varchar(100) DEFAULT NULL,
  `DepartureTime` varchar(50) DEFAULT NULL,
  `ArrivalTime` varchar(50) DEFAULT NULL,
  `Duration` varchar(50) DEFAULT NULL,
  `Cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `FlightRecords`
--

INSERT INTO `FlightRecords` (`Recordid`, `FlightNumber`, `FlightName`, `Source`, `Destination`, `DepartureTime`, `ArrivalTime`, `Duration`, `Cost`) VALUES
(3, 'AI101', 'Air India', 'Delhi', 'Mumbai', '2024-09-01 06:00', '2024-09-01 08:00', '2h', 5000.00),
(4, '6E202', 'IndiGo', 'Mumbai', 'Bangalore', '2024-09-02 09:00', '2024-09-02 11:00', '2h', 4500.00),
(5, 'SG303', 'SpiceJet', 'Chennai', 'Kolkata', '2024-09-03 14:00', '2024-09-03 16:30', '2h 30m', 4800.00),
(6, 'UK404', 'Vistara', 'Delhi', 'Goa', '2024-09-04 07:00', '2024-09-04 09:30', '2h 30m', 5200.00),
(7, 'G805', 'GoAir', 'Hyderabad', 'Pune', '2024-09-05 20:00', '2024-09-05 21:45', '1h 45m', 4100.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FlightRecords`
--
ALTER TABLE `FlightRecords`
  ADD PRIMARY KEY (`Recordid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FlightRecords`
--
ALTER TABLE `FlightRecords`
  MODIFY `Recordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
