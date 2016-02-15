-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 14 jan 2016 om 11:14
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `hospital`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `species` varchar(50) DEFAULT NULL,
  `status` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `client`
--

INSERT INTO `client` (`id`, `name`, `species`, `status`) VALUES
(1, 'Hank', 'Human', 'Hank is a character from the Marvel universe, his alter ego is Ant-Man, one of the Avengers');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `species_id` int(11) DEFAULT NULL,
  `status` text,
  PRIMARY KEY (`id`),
  KEY `species_id` (`species_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `patient`
--

INSERT INTO `patient` (`id`, `name`, `species_id`, `status`) VALUES
(1, 'Bobbie', 2, 'Koorts, eet slecht, blaft veel te veel'),
(2, 'Minoes', 3, 'Drinkt niet, haaruitval, mager'),
(3, 'Kees', 2, 'Eet te veel, vetzucht, jankt en kotst'),
(4, 'hond', 1, 'is toch een hond\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `species`
--

CREATE TABLE IF NOT EXISTS `species` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `species`
--

INSERT INTO `species` (`id`, `name`) VALUES
(1, 'Human'),
(2, 'hond'),
(3, 'kat'),
(4, 'Alien');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`species_id`) REFERENCES `species` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
