-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 01:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `ID` int(8) NOT NULL,
  `BRAND` varchar(25) NOT NULL,
  `MODEL` varchar(25) NOT NULL,
  `YEAR` varchar(50) NOT NULL,
  `COLOR` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone` int(13) NOT NULL,
  `Birth` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `PICTURE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`ID`, `BRAND`, `MODEL`, `YEAR`, `COLOR`, `Email`, `Phone`, `Birth`, `Gender`, `Address`, `PICTURE`) VALUES
(21, 'BMW', 'sasd', '2005', 'a', 'Rifai@gmail.com', 21231, '2023-10-03', 'Female', 'damanhuri', ''),
(23, 'Ferrari', 's', '2004', 'Red', 'Rifai@gmail.com', 2345, '2023-10-22', 'Female', 'damanhuri', ''),
(24, 'Ferrari', 'd', '2133', 'Red', 'Rifai@gmail.com', 12314, '2023-10-12', 'Male', 'damanhuri', ''),
(27, 'Nissan', 's', '2133', 'Black', 'Rifai@gmail.com', 2441, '2023-10-04', 'Female', 'damanhuri', ''),
(28, 'Nissan', 's', '2004213', 'Black', 'Rifai@gmail.com', 76232, '2023-10-19', 'Male', 'damanhuri', ''),
(31, 'Nissan', 'fesdsfef', '5685', 'White', 'Rifai@gmail.comasd', 425678, '0000-00-00', '2023-1', 'Male', 'Rifai@gmail.comasd.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'jack', '$2y$10$TBPIE1n.udPQdodVLfdEeuRHASPO1fMpvvCnoD.fsFjkuAXIx199.', 'lorem@gmail.com', 3221921);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
