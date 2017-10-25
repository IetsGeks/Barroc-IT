-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 okt 2017 om 11:46
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
  `email` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `company_name`, `adress1`, `postal_code1`, `place_of_residence1`, `adress2`, `postal_code2`, `place_of_residence2`, `contact_person`, `initials`, `telephone_number`, `fax_number`, `email`, `active`, `updated_at`) VALUES
(1, 'binkies', 'terheijdenseweg21', '3232ds', 'breda', NULL, NULL, NULL, 'tiny', 'tel', 4374343, 84394, 'Jarnotouw14@gmail.com', 1, '2017-10-23 11:34:48'),
(2, 'kersemus', 'ufhwefhweifh', 'ui', 'iih', NULL, NULL, NULL, 'r3rededew', NULL, 3432423, NULL, 'Jarnotouw312@gmail.com', 1, '2017-10-23 06:38:34'),
(3, 'binkies2.0', 'dwedwe', 'dewdwed', 'edwd', NULL, NULL, NULL, 'dwedwed', NULL, 12312312, NULL, '312fewdwe', 1, '2017-10-23 06:34:14');

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
  `tax_code` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_finances`
--

INSERT INTO `tbl_finances` (`project_id`, `bankaccount_number`, `balance`, `amount_invoices`, `sales_amount`, `limit`, ` ledgeraccounts_number`, `tax_code`, `updated_at`) VALUES
(1, '3423434', 200, 2, 1200, 300, '32423423', 10, '0000-00-00 00:00:00'),
(2, '87423490238', 200, 2, 200, 100, '2321de', 12, '0000-00-00 00:00:00'),
(3, '4323423', 2000, 2, 222, 400, 'd23d', 3, '0000-00-00 00:00:00'),
(4, '4534534', 200, 100, 10000, 250, '2334d43', 2, '2017-10-24 07:37:58');

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
  `active` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_projects`
--

INSERT INTO `tbl_projects` (`customer_id`, `project_id`, `applications`, `hardware`, `operating_system`, `active`, `updated_at`) VALUES
(1, 1, 'none', 'npne', 'none', 1, '0000-00-00 00:00:00'),
(2, 2, 'none', 'none', 'none', 0, '2017-10-13 07:49:06'),
(3, 3, 'none', 'none', 'none', 1, '2017-10-13 07:34:12'),
(2, 4, 'none', 'hard disk', 'ios', 1, '2017-10-13 07:14:45');

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
(4, 'finance', 'a', 'finance', 'LX6UIyb2eZPeNHbmt6D5bVBH9mZrORuXcA99SIXFAd56Z9821butXA7A0zfd'),
(5, 'sales', '$2y$10$WUphDLEjuCH/DPQ35dVpouNTxA/gIHf.7s1Mn8y98IiwaqlYSh.3q', 'sales', NULL);

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
-- Indexen voor tabel `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `username` (`user`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `offer_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
