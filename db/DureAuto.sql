-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 jan 2023 om 11:54
-- Serverversie: 5.7.36
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `DureAuto`
--

DROP TABLE IF EXISTS `DureAuto`;
CREATE TABLE IF NOT EXISTS `DureAuto` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `merk` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `topsnelheid` smallint(4) NOT NULL,
  `prijs` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `DureAuto`
--

INSERT INTO `DureAuto` (`id`, `merk`, `model`, `topsnelheid`, `prijs`) VALUES
(1, 'Bugatti', 'La viture noire', 420, 16500000),
(2, 'Rolls-Royce', 'Swaptail', 250, 10960000),
(3, 'Bugatti', 'EB110', 390, 7500000),
(4, 'Mercedes-Benz', 'Maybach Exelero', 66, 6700000),
(5, 'Koenigsegg', 'CCXR Trevita', 401, 4000000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
