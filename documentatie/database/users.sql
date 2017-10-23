-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 okt 2017 om 10:10
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
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(2) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `type`, `remember_token`) VALUES
(2, 'development', '$2y$10$.oo1cS/Ph9dNtvSow8f6guh4FGZaoUrMKlQmat4ghs2XXHgXOUFAa', 'development', 'CrP7V3LkNTk0YCP9m87VWuLIirwJNLdiMOfWclesXrl7GZBz7Fz6vGFUoYlR'),
(3, 'admin', '$2y$10$1Sy/ackhcSwrb88rguNcVeiXlcZiawbH0inuQvi94AxL2U0Is7bdS', 'admin', 'nG4upif16hZjzr0Jq0jRz6vmesf3r4teiBgF8QEmVHZr9pi8l51DgNtEcDNZ'),
(4, 'finance', '$2y$10$YWnoTBpcSN8NIHF5nuUUI.NyT6QYdx1eEaFMWeSeiCD5vIeBvsZ2O', 'finance', 'LX6UIyb2eZPeNHbmt6D5bVBH9mZrORuXcA99SIXFAd56Z9821butXA7A0zfd'),
(5, 'sales', '$2y$10$WUphDLEjuCH/DPQ35dVpouNTxA/gIHf.7s1Mn8y98IiwaqlYSh.3q', 'sales', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`user`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
