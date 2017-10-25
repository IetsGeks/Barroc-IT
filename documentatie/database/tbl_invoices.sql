-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 okt 2017 om 08:03
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
-- Tabelstructuur voor tabel `tbl_invoices`
--

CREATE TABLE `tbl_invoices` (
  `id` int(5) UNSIGNED NOT NULL,
  `customer_id` int(5) UNSIGNED NOT NULL,
  `project_id` int(5) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `paid` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`id`, `customer_id`, `project_id`, `amount`, `description`, `paid`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 500, 'this is a test invoice', 0, '0000-00-00 00:00:00', '2017-10-23 12:13:49'),
(2, 2, 2, 1200, 'this is another invoice test', 0, '0000-00-00 00:00:00', '2017-10-23 12:13:51'),
(3, 3, 3, 1900, 'dijoedjwue', 0, '0000-00-00 00:00:00', '2017-10-23 12:13:47'),
(4, 3, 3, 100, 'antohet tes just fucking pay mait', 0, '0000-00-00 00:00:00', '2017-10-23 12:14:03'),
(5, 3, 1, 500, 'this is an invoice that i made hope it works', 0, '2017-10-18 08:47:14', '2017-10-23 12:14:06'),
(6, 2, 2, 250, 'ihewuhidoweuhw', 0, '2017-10-23 09:42:10', '2017-10-23 12:14:04');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
