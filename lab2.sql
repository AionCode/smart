-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2012 at 07:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `analiza`
--

CREATE TABLE IF NOT EXISTS `analiza` (
  `id_analiza` int(11) NOT NULL AUTO_INCREMENT,
  `naz_analize` varchar(30) DEFAULT NULL,
  `jm_analize` varchar(10) DEFAULT NULL,
  `ref_vred_analize` varchar(20) DEFAULT NULL,
  `cena_analize` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_analiza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `analiza`
--

INSERT INTO `analiza` (`id_analiza`, `naz_analize`, `jm_analize`, `ref_vred_analize`, `cena_analize`) VALUES
(1, 'Analiza 1', 'jm1', 'ref_vred1', '100.00'),
(2, 'Analiza 2', 'jm2', 'ref_vred2', '100.00'),
(3, 'Analiza 3', 'jm2', 'ref_vred3', '200.00'),
(4, 'Analiza 4', 'jm3', 'ref_vred3', '200.00'),
(5, 'Analiza 5', 'jm3', 'ref_vred4', '300.00'),
(6, 'Analiza 6', 'jm3', 'ref_vred4', '400.00'),
(7, 'Analiza 7', 'jm4', 'ref_vred4', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `izvrseno`
--

CREATE TABLE IF NOT EXISTS `izvrseno` (
  `id_protokol` int(11) NOT NULL,
  `id_analiza` int(11) NOT NULL,
  `nalaz` varchar(15) DEFAULT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_protokol`,`id_analiza`),
  KEY `id_analiza` (`id_analiza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `izvrseno`
--

INSERT INTO `izvrseno` (`id_protokol`, `id_analiza`, `nalaz`, `cena`) VALUES
(1, 7, '45', '500.00'),
(2, 1, '34', '100.00'),
(2, 2, '2', '100.00'),
(2, 4, '56', '200.00'),
(3, 1, '4', '100.00'),
(3, 7, '34', '500.00'),
(4, 1, '49', '100.00'),
(4, 3, '44', '200.00'),
(4, 5, '259', '300.00'),
(4, 6, '334', '400.00'),
(5, 4, '2034', '200.00'),
(5, 6, '400', '400.00'),
(6, 1, '42', '100.00'),
(6, 2, '3004', '100.00'),
(6, 3, '63', '200.00'),
(7, 7, '634', '500.00'),
(8, 4, '834', '200.00'),
(8, 5, '634', '300.00'),
(9, 6, '474', '400.00'),
(10, 3, '534', '200.00'),
(10, 7, '644', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `pacijent`
--

CREATE TABLE IF NOT EXISTS `pacijent` (
  `id_pacijent` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(20) DEFAULT NULL,
  `prezime` varchar(30) DEFAULT NULL,
  `dat_rodjenja` date DEFAULT NULL,
  `mesto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_pacijent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `pacijent`
--

INSERT INTO `pacijent` (`id_pacijent`, `ime`, `prezime`, `dat_rodjenja`, `mesto`) VALUES
(1, 'Ana', 'Sarić', '2002-03-12', 'Novi Sad'),
(2, 'Anica', 'Bakus', '1998-06-04', 'Novi Sad'),
(3, 'Bojan', 'Bakus', '1987-06-24', 'Sombor'),
(4, 'Zoran', 'Ris', '1988-12-04', 'Subotica'),
(5, 'Dragan', 'Ribić', NULL, NULL),
(6, 'Tijana', 'Radovanović', '1995-07-08', NULL),
(7, 'Jovana', 'Radovanović', '1994-02-27', NULL),
(8, 'Anja', 'Kopčalić', '1993-08-15', NULL),
(9, 'Nevena', 'Ilić', '1994-06-16', NULL),
(10, 'Marija', 'Jovanović', '1993-03-10', NULL),
(11, 'Milica', 'Ganović', '1994-05-15', NULL),
(12, 'Tijana', 'Zarić', '1994-03-05', NULL),
(13, 'Nisa', 'Krajcer Daša', '1994-04-18', NULL),
(14, 'Nevena', 'Žigić', '1994-05-24', NULL),
(15, 'Tijana', 'Milanović', '1993-09-15', NULL),
(16, 'Božidarka', 'Prole', '1993-07-01', NULL),
(17, 'Linda', 'Abadi', '1995-11-05', NULL),
(18, 'Daria', 'Topić', '1994-04-30', NULL),
(19, 'Jelena', 'Čolić', '1993-07-29', NULL),
(20, 'Nastasija', 'Đurić Janković', '1995-06-04', NULL),
(21, 'Dunja', 'Grbić', '1994-08-09', NULL),
(22, 'Neda', 'Širec', '1991-08-07', NULL),
(23, 'Katarina', 'Milosavljević', '1992-12-06', NULL),
(24, 'Jelena', 'Draškoci', '1986-05-03', NULL),
(25, 'Teodora', 'Filipović', '1991-09-02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `protokol`
--

CREATE TABLE IF NOT EXISTS `protokol` (
  `id_protokol` int(11) NOT NULL AUTO_INCREMENT,
  `dat_protokola` date NOT NULL,
  `id_pacijent` int(11) NOT NULL,
  PRIMARY KEY (`id_protokol`),
  KEY `id_pacijent` (`id_pacijent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `protokol`
--

INSERT INTO `protokol` (`id_protokol`, `dat_protokola`, `id_pacijent`) VALUES
(1, '2012-03-17', 10),
(2, '2012-08-25', 8),
(3, '2012-04-03', 7),
(4, '2012-10-16', 4),
(5, '2012-12-25', 13),
(6, '2012-07-08', 14),
(7, '2012-02-27', 10),
(8, '2012-08-15', 4),
(9, '2012-06-16', 8),
(10, '2012-03-10', 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `izvrseno`
--
ALTER TABLE `izvrseno`
  ADD CONSTRAINT `izvrseno_ibfk_2` FOREIGN KEY (`id_analiza`) REFERENCES `analiza` (`id_analiza`) ON UPDATE CASCADE,
  ADD CONSTRAINT `izvrseno_ibfk_1` FOREIGN KEY (`id_protokol`) REFERENCES `protokol` (`id_protokol`) ON UPDATE CASCADE;

--
-- Constraints for table `protokol`
--
ALTER TABLE `protokol`
  ADD CONSTRAINT `protokol_ibfk_1` FOREIGN KEY (`id_pacijent`) REFERENCES `pacijent` (`id_pacijent`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
