-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2021 at 01:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `grupe`
--

DROP TABLE IF EXISTS `grupe`;
CREATE TABLE IF NOT EXISTS `grupe` (
  `id_grupa` int(2) NOT NULL AUTO_INCREMENT,
  `grupa` int(3) NOT NULL,
  PRIMARY KEY (`id_grupa`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `grupe`
--

INSERT INTO `grupe` (`id_grupa`, `grupa`) VALUES
(1, 226),
(2, 227);

-- --------------------------------------------------------

--
-- Table structure for table `proiecte`
--

DROP TABLE IF EXISTS `proiecte`;
CREATE TABLE IF NOT EXISTS `proiecte` (
  `id_proiect` int(11) NOT NULL AUTO_INCREMENT,
  `proiect` varchar(50) COLLATE utf8_romanian_ci NOT NULL,
  `ales` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_proiect`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `proiecte`
--

INSERT INTO `proiecte` (`id_proiect`, `proiect`, `ales`) VALUES
(7, 'Magazin online', 1),
(6, 'Chestionare auto', 1),
(5, 'Site web', 1),
(8, 'Licitatii online', 0),
(9, 'Avizier examene', 0),
(10, 'Content Management System', 1),
(11, 'Registru matricol', 0),
(12, 'Prezente online', 1),
(18, 'Editare fisiere prin FTP -> HTML ', 0),
(19, 'Sistem alegere teme proiect', 0),
(20, 'Biblioteca virtuala cu imprumut carti', 0);

-- --------------------------------------------------------

--
-- Table structure for table `proiecte_alese`
--

DROP TABLE IF EXISTS `proiecte_alese`;
CREATE TABLE IF NOT EXISTS `proiecte_alese` (
  `id_proiecte_alese` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_proiect` int(11) NOT NULL,
  PRIMARY KEY (`id_proiecte_alese`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `proiecte_alese`
--

INSERT INTO `proiecte_alese` (`id_proiecte_alese`, `id_user`, `id_proiect`) VALUES
(2, 3, 5),
(3, 4, 7),
(5, 6, 6),
(10, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `useri`
--

DROP TABLE IF EXISTS `useri`;
CREATE TABLE IF NOT EXISTS `useri` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nume_user` varchar(20) COLLATE utf8_romanian_ci NOT NULL,
  `prenume_user` varchar(20) COLLATE utf8_romanian_ci NOT NULL,
  `parola` varchar(20) COLLATE utf8_romanian_ci NOT NULL,
  `id_grupa` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `useri`
--

INSERT INTO `useri` (`id_user`, `nume_user`, `prenume_user`, `parola`, `id_grupa`) VALUES
(1, 'admin', 'admin', 'admin', 0),
(2, 'Anghelescu', 'Angel', 'anghelescuangel', 1),
(3, 'Popescu', 'Pop', 'popescupop', 2),
(4, 'Ionescu', 'Ion', 'ionescuion', 2),
(5, 'Amza', 'Adrian', 'amzaadrian', 1),
(6, 'Paun', 'Mihai', 'paunmihai', 1),
(8, 'Dinica', 'Justinian', '123', 1),
(9, 'Ionescu', 'Ionel', '123', 1),
(10, 'Vladescu', 'Vlad', '123', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
