-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 okt 2017 om 08:18
-- Serverversie: 5.7.14
-- PHP-versie: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barroc-it`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_costumers`
--

CREATE TABLE `tbl_costumers` (
  `bedrijfsnaam` varchar(255) NOT NULL,
  `adres1` varchar(255) NOT NULL,
  `postcode1` varchar(255) NOT NULL,
  `woon1` varchar(255) NOT NULL,
  `adres2` varchar(255) DEFAULT NULL,
  `postcode2` varchar(255) DEFAULT NULL,
  `woonplaats2` varchar(255) DEFAULT NULL,
  `contactpersoon` varchar(255) NOT NULL,
  `voorletters` varchar(255) NOT NULL,
  `telefoonnummer` int(11) NOT NULL,
  `faxnummer` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
