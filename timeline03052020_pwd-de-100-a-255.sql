-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2020 at 04:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timeline`
--

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `idTL` tinyint(3) NOT NULL,
  `idEv` tinyint(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`idTL`, `idEv`, `name`, `fecha`, `descrip`, `links`) VALUES
(3, 1, 'event 1', '2020-04-30', 'desc', 'link 1'),
(3, 2, 'event 2', '2020-04-30', 'desc2', 'link 2'),
(3, 3, 'even 3', '2020-04-30', 'desc3 ', 'link 3');

-- --------------------------------------------------------

--
-- Table structure for table `TL`
--

CREATE TABLE `TL` (
  `idUser` tinyint(3) NOT NULL,
  `idTL` tinyint(3) NOT NULL,
  `nameTL` varchar(50) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TL`
--

INSERT INTO `TL` (`idUser`, `idTL`, `nameTL`, `year`) VALUES
(37, 3, 'new timeline', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `idUser` tinyint(3) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `rol` varchar(6) NOT NULL DEFAULT 'custom'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`idUser`, `userName`, `email`, `pwd`, `rol`) VALUES
(37, 'apr30', 'apr30@hot.com', '$2y$10$cNdYHHIbvTyINTn2nh01O.NaZ4w6EWvir9r5JaswdWyajRCamCLlG', 'custom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`idEv`),
  ADD KEY `ID_TL` (`idTL`),
  ADD KEY `idTL` (`idTL`,`idEv`);

--
-- Indexes for table `TL`
--
ALTER TABLE `TL`
  ADD PRIMARY KEY (`idTL`),
  ADD KEY `ID_user` (`idUser`),
  ADD KEY `idUser` (`idUser`,`idTL`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `id` (`idUser`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idUser_2` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Event`
--
ALTER TABLE `Event`
  MODIFY `idEv` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `TL`
--
ALTER TABLE `TL`
  MODIFY `idTL` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `idUser` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `fk_idTL` FOREIGN KEY (`idTL`) REFERENCES `TL` (`idTL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `TL`
--
ALTER TABLE `TL`
  ADD CONSTRAINT `fk_idUser` FOREIGN KEY (`idUser`) REFERENCES `Users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
