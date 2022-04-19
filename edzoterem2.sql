-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 12:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edzoterem2`
--

-- --------------------------------------------------------

--
-- Table structure for table `edzok`
--

CREATE TABLE `edzok` (
  `userID` bigint(20) NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `edzok`
--

INSERT INTO `edzok` (`userID`, `nev`) VALUES
(2, 'Pál Zsuzsanna'),
(3, 'Orsai Gergely'),
(4, 'Dobóczy Maja'),
(6, 'Éliás-Szalay Dávid');

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `id` bigint(20) NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` text COLLATE utf8_hungarian_ci NOT NULL,
  `email` text COLLATE utf8_hungarian_ci NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `web_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `felhasznalo`
--

INSERT INTO `felhasznalo` (`id`, `nev`, `jelszo`, `email`, `nem`, `web_admin`) VALUES
(4, 'david', '172522ec1028ab781d9dfd17eaca4427', 'nagyhazu.david@gmail.com', 2, 1),
(5, 'davesko', 'e9417a059bddd1487bd81814230579fe', 'davesko@gmail.com', 1, 0),
(6, 'geri', 'd41d8cd98f00b204e9800998ecf8427e', 'gerivagyok@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL,
  `email` text COLLATE utf8_hungarian_ci NOT NULL,
  `targy` text COLLATE utf8_hungarian_ci NOT NULL,
  `tartalom` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `nev`, `email`, `targy`, `tartalom`) VALUES
(5, 'Nagyházu Dávid', 'nagyhazu.david@gmail.com', 'anya', 'apa');

-- --------------------------------------------------------

--
-- Table structure for table `orak`
--

CREATE TABLE `orak` (
  `oraID` bigint(20) NOT NULL,
  `userID` bigint(20) DEFAULT NULL,
  `edzoID` bigint(20) NOT NULL,
  `datum` datetime NOT NULL,
  `tipus` text COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `orak`
--

INSERT INTO `orak` (`oraID`, `userID`, `edzoID`, `datum`, `tipus`, `ar`) VALUES
(8, 4, 4, '2022-04-15 23:39:36', 'MAX TRAINING', 3500),
(9, 5, 2, '2022-04-15 23:40:01', 'FUNKCIONÁLIS EDZÉS', 1500),
(11, 4, 3, '2022-04-15 23:40:34', 'SZEMÉLYI EDZÉS', 3000),
(22, 4, 3, '2022-09-21 20:00:00', 'FUNKCIONÁLIS', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edzok`
--
ALTER TABLE `edzok`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orak`
--
ALTER TABLE `orak`
  ADD PRIMARY KEY (`oraID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `edzoID` (`edzoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edzok`
--
ALTER TABLE `edzok`
  MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orak`
--
ALTER TABLE `orak`
  MODIFY `oraID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orak`
--
ALTER TABLE `orak`
  ADD CONSTRAINT `orak_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `felhasznalo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orak_ibfk_2` FOREIGN KEY (`edzoID`) REFERENCES `edzok` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
