-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 08:44 PM
-- Server version: 5.6.24-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restoranwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vijest` int(11) NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `vijest` (`vijest`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `vijest`, `tekst`, `autor`, `vrijeme`) VALUES
(1, 1, 'Super', 'Aldin Prutina', '2015-05-28 18:40:44'),
(2, 2, 'Predobro', 'Anesa Drakovac', '2015-05-28 18:41:34'),
(3, 3, 'Nesto', 'Neki autor', '2015-05-28 18:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `vijest`
--

CREATE TABLE IF NOT EXISTS `vijest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vijest`
--

INSERT INTO `vijest` (`id`, `naslov`, `tekst`, `autor`, `vrijeme`) VALUES
(1, 'Petak - vecer uz gitaru', 'U restoranu Aurora svaka vecer je posebna, ali petkom jos posebnija, jer svakog petka samo za Vas, organiziramo veceri uz gitaru s Jadrankom Mikulicem, proslavljenim mostarskim gitaristom i pjevacem. Dobrodosli!', 'Anesa Drakovac', '2015-05-28 18:10:21'),
(2, 'Summer season opening party', 'Dragi gosti zadovoljstvo nam je pozvati vas na otvorenje ljetne sezone naseg i Vaseg restorana Aurora, sa najljepsom bastom u gradu, koja vec uveliko radi.\r\n\r\nSpecijalno za ovu priliku osigurali smo nastup popularnog pjevaca iz Mostara, Adnana Jakupovica. Sjajan zabavljac, pobjednik na Hayatovom projektu "Zvijezda mozes biti Ti", uz vrhunske glasovne mogucnosti, garancija je za nezaboravni provod i ugodjaj. Osigurali smo i podrsku nasih partnera: Bavaria pivo, Jaegermeister i Jim Beam sa njihovim promoterkama i nagradama. Rezervacije su obavezne na telefon broj: 033 123 456', 'Neki autor', '2015-05-28 18:36:54'),
(3, 'Vecer vrhunske gastronomije', 'Najavljujemo vam vecer vrhunske gastronomije sa visestruko nagradjivanim kuharom Draganom Sljivicem koja ce se odrzati 15.5.2015. u nasem restoranu Aurora. Kupovina kupona za rezervaciju je na recepciji restorana Aurora. Napominjemo da je broj mjesta ogranicen te da dodatne informacije mozete dobiti na broj telefona 033 123 456.', 'Aldin Prutina', '2015-05-28 18:37:12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`vijest`) REFERENCES `vijest` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
