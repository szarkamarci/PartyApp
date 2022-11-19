-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 01:09 PM
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
-- Database: `redfly_buliapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ertekeles`
--

CREATE TABLE `ertekeles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `esemeny_id` int(11) NOT NULL,
  `ertek` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `esemenyek`
--

CREATE TABLE `esemenyek` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `kep` varchar(500) NOT NULL,
  `idopont` date NOT NULL,
  `leiras` varchar(400) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `helyszin` varchar(100) NOT NULL,
  `event` varchar(50) NOT NULL,
  `jegylink` varchar(100) NOT NULL,
  `szervezo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esemenyek`
--

INSERT INTO `esemenyek` (`id`, `nev`, `kep`, `idopont`, `leiras`, `helyszin`, `event`, `jegylink`, `szervezo_id`) VALUES
(226, 'Krubileum - Krubi', 'https://pb2.jegy.hu/imgs/system-4/program/000/140/591/campus-party-valmar-de-hallgatoi-474-279-199140.jpg', '2023-07-20', 'Kr?bi gecire tr?', 'Budapest Park', 'koncert', 'tixa', 19),
(227, 'Citromail Gang', 'nicns', '2022-10-01', 'Beton Hofi ?s a Gang', 'Budapest Park', 'koncert', 'tixa', 19),
(228, 'Dzsudló', 'https://tixa.hu/kepek/0020/20654-1_20220729153257.', '2023-08-23', 'Dzsudl? Budapest Park', 'Budapest Park', 'koncert', 'tixa', 19),
(229, 'Szerdai hall', 'nicns', '2023-11-16', 'nincs', 'nicns', 'koncert', 'tixa', 19),
(230, 'random hall', 'nincs', '2022-11-25', 'nincs', 'hall', 'koncert', 'tixa.hu', 19),
(232, 'random hall', 'https://pb2.jegy.hu/imgs/system-4/program/000/140/591/campus-party-valmar-de-hallgatoi-474-279-199140.jpg', '2022-10-26', 'gyere jo lesz', 'hall', 'koncert', 'https://www.jegy.hu/program/campus-party-valmar-de-hallgatoi-140591', 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `szervezo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `szervezo`) VALUES
(19, 'Balazs', 'balazs@gmail.com', '8cb7c97bffd03803b57089e1f41f8e55', 2),
(20, 'Szabi', 'szabi@szabi.hu', 'f032e51afa6cfff30a252f990af60114', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ertekeles`
--
ALTER TABLE `ertekeles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `esemeny_id` (`esemeny_id`);

--
-- Indexes for table `esemenyek`
--
ALTER TABLE `esemenyek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`szervezo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ertekeles`
--
ALTER TABLE `ertekeles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `esemenyek`
--
ALTER TABLE `esemenyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ertekeles`
--
ALTER TABLE `ertekeles`
  ADD CONSTRAINT `ertekeles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ertekeles_ibfk_2` FOREIGN KEY (`esemeny_id`) REFERENCES `esemenyek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `esemenyek`
--
ALTER TABLE `esemenyek`
  ADD CONSTRAINT `esemenyek_ibfk_1` FOREIGN KEY (`szervezo_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
