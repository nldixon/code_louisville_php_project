-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 11:13 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pcs`
--

CREATE TABLE `pcs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcs`
--

INSERT INTO `pcs` (`id`, `name`, `race`, `class`, `level`) VALUES
(1, 'Iris', 'Dragonborn', 'Sorcerer', 1),
(2, 'Gary', 'Drow', 'Rogue', 1),
(3, 'Miranda', 'Dwarf', 'Cleric', 1),
(4, 'Guadalupe', 'Dwarf', 'Fighter', 1),
(5, 'Rafael', 'Elf', 'Wizard', 1),
(6, 'Lucy', 'Elf', 'Ranger', 3),
(7, 'Terri', 'Half-Elf', 'Bard', 3),
(8, 'Juan', 'Halfling', 'Monk', 3),
(9, 'Eloise', 'Halfling', 'Rogue', 3),
(10, 'Leigh', 'Half-Orc', 'Barbarian', 5),
(11, 'Belinda', 'Elf', 'Fighter', 5),
(12, 'Ira', 'Elf', 'Wizard', 5),
(13, 'Jimmie', 'Human', 'Barbarian', 5),
(14, 'Ernesto', 'Human', 'Bard', 7),
(15, 'Lionel', 'Human', 'Cleric', 7),
(16, 'Roberta', 'Human', 'Druid', 7),
(17, 'Norman', 'Human', 'Fighter', 7),
(18, 'Carla', 'Human', 'Monk', 9),
(19, 'Norma', 'Human', 'Paladin', 9),
(20, 'Jodi', 'Tiefling', 'Warlock', 9),
(21, 'Gwen', 'Elf', 'Ranger', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pcs`
--
ALTER TABLE `pcs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pcs`
--
ALTER TABLE `pcs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
