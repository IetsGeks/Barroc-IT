-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 okt 2017 om 09:24
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
-- Tabelstructuur voor tabel `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `adress1` varchar(255) NOT NULL,
  `postal_code1` varchar(255) NOT NULL,
  `place_of_residence1` varchar(255) NOT NULL,
  `adress2` varchar(255) DEFAULT NULL,
  `postal_code2` varchar(255) DEFAULT NULL,
  `place_of_residence2` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) NOT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `telephone_number` bigint(11) NOT NULL,
  `fax_number` bigint(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_developments`
--

CREATE TABLE `tbl_developments` (
  `project_id` int(3) NOT NULL,
  `maintenance_contract` tinyint(1) NOT NULL,
  `appointments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_finances`
--

CREATE TABLE `tbl_finances` (
  `project_id` int(10) NOT NULL,
  `bankaccount_number` varchar(255) NOT NULL,
  `balance` int(6) NOT NULL,
  `amount_invoices` int(6) NOT NULL,
  `sales_amount` int(6) NOT NULL,
  `limit` int(6) NOT NULL,
  ` ledgeraccounts_number` varchar(255) NOT NULL,
  `tax_code` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `customer_id` int(10) NOT NULL,
  `project_id` int(11) NOT NULL,
  `applications` varchar(255) NOT NULL,
  `hardware` varchar(255) NOT NULL,
  `operating_system` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `offer_id` int(11) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `offer_status` varchar(255) NOT NULL,
  `prospect` tinyint(1) NOT NULL,
  `date_of_action` datetime NOT NULL,
  `last_contactdate` datetime NOT NULL,
  `next_action` varchar(255) DEFAULT NULL,
  `sale_percentage` int(3) NOT NULL,
  `creditworthy` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(2) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexen voor tabel `tbl_finances`
--
ALTER TABLE `tbl_finances`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexen voor tabel `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `project_id` (`project_id`);

--
-- Indexen voor tabel `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `offer_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
