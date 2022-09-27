-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 01:13 AM
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
-- Table structure for table `esemenyek`
--

CREATE TABLE `esemenyek` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `kep` varchar(50) NOT NULL,
  `idopont` date NOT NULL,
  `leiras` varchar(400) NOT NULL,
  `helyszin` varchar(100) NOT NULL,
  `event` varchar(50) NOT NULL,
  `jegylink` varchar(100) NOT NULL,
  `szervezo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esemenyek`
--

INSERT INTO `esemenyek` (`id`, `nev`, `kep`, `idopont`, `leiras`, `helyszin`, `event`, `jegylink`, `szervezo_id`) VALUES
(226, 'Krubileum - Krubi', 'nicns', '2023-07-20', 'Krúbi gecire tré', 'Budapest Park', 'koncert', 'tixa', 19);

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
(19, 'Balazs', 'balazs@gmail.com', '8cb7c97bffd03803b57089e1f41f8e55', 2);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `esemenyek`
--
ALTER TABLE `esemenyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `esemenyek`
--
ALTER TABLE `esemenyek`
  ADD CONSTRAINT `esemenyek_ibfk_1` FOREIGN KEY (`szervezo_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
