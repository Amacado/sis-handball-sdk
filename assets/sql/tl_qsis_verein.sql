-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2017 a las 10:05:33
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contaotest`
--

--
-- Volcado de datos para la tabla `tl_qsis_verein`
--

INSERT INTO `tl_qsis_verein` (`id`, `name`, `tstamp`, `code`, `idLiga`, `image`) VALUES
(1, 'HSG Burgwedel', 1492067481, 1220403116, 1, 0x613a313a7b693a303b733a31363a22fa6566a61f7b11e7bd2aac2b6e865c1c223b7d),
(2, 'HSC Bad Neustadt', 1492068896, 1520101152, 1, 0x613a313a7b693a303b733a31363a22a470ecc7201b11e78354ac2b6e865c1c223b7d),
(3, 'HC Elbfloren', 1492009663, 1530303113, 1, 0x613a313a7b693a303b733a31363a2247e5dcb31f9111e7bd2aac2b6e865c1c223b7d),
(4, 'Eintracht Hildesheim', 1492067494, 1220404118, 1, 0x613a313a7b693a303b733a31363a22542d14901f9211e7bd2aac2b6e865c1c223b7d),
(5, 'TV Großwallstadt', 1492067488, 1410901118, 1, 0x613a313a7b693a303b733a31363a228c37ec7a1f9211e7bd2aac2b6e865c1c223b7d),
(7, 'HF Springe', 1492067605, 1220403168, 1, 0x613a313a7b693a303b733a31363a22a78cab5b201811e78354ac2b6e865c1c223b7d),
(8, 'HSG Rodgau Nieder-Roden', 1492067728, 1410701151, 1, 0x613a313a7b693a303b733a31363a22f1df6001201811e78354ac2b6e865c1c223b7d),
(9, 'MSG Groß Bieberau/Modau', 1492067973, 1410901115, 1, 0x613a313a7b693a303b733a31363a22821da7ca201911e78354ac2b6e865c1c223b7d),
(10, 'HSV Hannover', 1492068063, 1220403103, 1, 0x613a313a7b693a303b733a31363a22bc4ac21c201911e78354ac2b6e865c1c223b7d),
(11, 'HSG Hanau', 1492068144, 1410701156, 1, 0x613a313a7b693a303b733a31363a22ebe06740201911e78354ac2b6e865c1c223b7d),
(12, 'TSV Burgdorf II', 1492068232, 1220403115, 1, 0x613a313a7b693a303b733a31363a22140813b3201a11e78354ac2b6e865c1c223b7d),
(13, 'TV Gelnhausen', 1492068330, 1410701116, 1, 0x613a313a7b693a303b733a31363a225a22c92f201a11e78354ac2b6e865c1c223b7d),
(14, 'SG LVB Leipzig', 1492068412, 1530101021, 1, 0x613a313a7b693a303b733a31363a228808e5e2201a11e78354ac2b6e865c1c223b7d),
(15, 'HSC 2000 Coburg II', 1492068492, 1520201166, 1, 0x613a313a7b693a303b733a31363a22b88272e7201a11e78354ac2b6e865c1c223b7d),
(16, 'MSG Groß Umstadt', 1492068621, 1410901117, 1, 0x613a313a7b693a303b733a31363a22fee338c4201a11e78354ac2b6e865c1c223b7d),
(17, 'TV Krichzell', 1492068707, 1410901127, 1, 0x613a313a7b693a303b733a31363a2238e28e0c201b11e78354ac2b6e865c1c223b7d);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
