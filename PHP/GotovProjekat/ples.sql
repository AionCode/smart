-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 03:09 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ples`
--

-- --------------------------------------------------------

--
-- Table structure for table `drzava`
--

DROP TABLE IF EXISTS `drzava`;
CREATE TABLE IF NOT EXISTS `drzava` (
  `sif_drzave` int(11) NOT NULL,
  `naz_drzave` varchar(20) NOT NULL,
  PRIMARY KEY (`sif_drzave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drzava`
--

INSERT INTO `drzava` (`sif_drzave`, `naz_drzave`) VALUES
(1, 'Srbija'),
(2, 'Bosna i Hercegovina'),
(3, 'Crna Gora'),
(4, 'Hrvatska'),
(5, 'Slovenia'),
(6, 'Makedonija');

-- --------------------------------------------------------

--
-- Table structure for table `pl_org`
--

DROP TABLE IF EXISTS `pl_org`;
CREATE TABLE IF NOT EXISTS `pl_org` (
  `sif_pl_org` int(11) NOT NULL AUTO_INCREMENT,
  `naz_pl_org` varchar(35) NOT NULL,
  `mesto_pl_org` varchar(20) NOT NULL,
  `rukovodilac` varchar(40) NOT NULL,
  `sif_drzave` int(11) NOT NULL,
  PRIMARY KEY (`sif_pl_org`),
  KEY `sif_drzave` (`sif_drzave`)
) ENGINE=InnoDB AUTO_INCREMENT=375 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pl_org`
--

INSERT INTO `pl_org` (`sif_pl_org`, `naz_pl_org`, `mesto_pl_org`, `rukovodilac`, `sif_drzave`) VALUES
(114, 'Sirmium Dance', 'Sremska Mitrovica', 'Svetlana Olena Rimac', 1),
(174, 'Olena', 'Bijeljina', 'Olena', 2),
(198, 'Ritam Plus', 'Skopje', 'Dimce Aleksoski', 6),
(201, 'Art Ballet', 'Skopje', 'Tamara Gjurchinovska', 6),
(246, 'Bolero', 'Osijek', 'Igor Vajnberger', 4),
(247, 'BAMBI KIDS', 'Zagreb', 'Slobodanka Tintor', 4),
(248, 'New Ada Dance', 'Ada', 'Orovec Béla', 1),
(249, 'Univerzalni Plesni Studio Feel', 'Varazdin', 'Romana Ratkaj', 4),
(251, 'Žute dunje', 'Bihać', 'Hadžić Refik', 2),
(263, 'Plesni Klub Releve ', 'Niš ', 'Olga Cogo', 1),
(264, 'AB DANCE', 'Beograd', 'Andjela Brckalo', 1),
(266, 'IMPULS', 'NOVI SAD', 'SNEZANA ANDREJEVIC', 1),
(267, 'Sky Steps', 'Backa Palanka', 'Monja Kuburovic', 1),
(268, 'Plesni klub 101', 'Bijeljina', 'Stojadin Knežević', 2),
(271, 'PLAY DANCE STUDIO', 'Novi Sad', 'Aleksandra Spasic', 1),
(286, 'MO-STARS', 'Mostar', 'Nataša Jekić', 2),
(287, 'Bolero Maribor', 'Maribor', 'Nastja Masten', 5),
(294, 'We dance', 'Gacko', 'Emilija Stojanović', 2),
(297, 'LUKEC', 'KRŠKO', 'DUŠAN VODLAN', 5);


-- --------------------------------------------------------

--
-- Table structure for table `igrac`
--

DROP TABLE IF EXISTS `igrac`;
CREATE TABLE IF NOT EXISTS `igrac` (
  `sif_igrac` int(11) NOT NULL AUTO_INCREMENT,
  `ime_i` varchar(20) NOT NULL,
  `prezime_i` varchar(25) NOT NULL,
  `dat_rodjenja_i` date NOT NULL,
  `sif_pl_org` int(11) NOT NULL,
  PRIMARY KEY (`sif_igrac`),
  KEY `sif_pl_org` (`sif_pl_org`)
) ENGINE=InnoDB AUTO_INCREMENT=2897 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `igrac`
--

INSERT INTO `igrac` (`sif_igrac`, `ime_i`, `prezime_i`, `dat_rodjenja_i`, `sif_pl_org`) VALUES
(1, 'Luka', 'Geyer', '2003-03-18', 246),
(2, 'Lucija ', 'Tošić', '2004-12-29', 246),
(3, 'Bruno', 'Toth', '2003-05-24', 246),
(4, 'Lucija', 'Kelava Mihajlović', '2003-04-15', 246),
(5, 'Josip', 'Sever Smrček', '2004-03-29', 246),
(6, 'Irena', 'Stojkov', '2003-06-20', 246),
(7, 'Angelika ', 'Španić', '2007-01-10', 246),
(8, 'Mihaela', 'Grgić', '2003-07-22', 246),
(76, 'Lana', 'Horvatiček', '2007-10-15', 247),
(77, 'Leonarda', 'Carević', '2007-04-10', 247),
(119, 'Lara', 'Drcec', '2005-11-18', 249),
(129, 'Paula', 'Jovan', '2007-05-21', 249),
(130, 'Ernest', 'Štimac', '2006-03-24', 249),
(131, 'Max', 'Tišljar Vitez', '2005-07-15', 249),
(132, 'Dino', 'Iličić', '2003-05-23', 249),
(133, 'Vedran', 'Pintarić', '2012-05-13', 249),
(134, 'Fran', 'Kipa', '2007-01-31', 249),
(139, 'Adam', 'Harrane', '2007-05-13', 249),
(140, 'Nadin', 'Harrane', '2008-12-31', 249),
(181, 'Nika', 'Cerovcec', '2003-07-14', 249),
(182, 'Katja', 'Gradicek', '2009-06-16', 249),
(190, 'Nika', 'Galinec', '2007-08-16', 249),
(402, 'Dunja', 'Mihajlović', '2009-02-20', 264),
(403, 'Zorana', 'Galić', '2008-08-30', 264),
(404, 'Sara', 'Mihajlović', '2008-07-05', 264),
(405, 'Anđela', 'Mihajlović', '2008-03-24', 264),
(406, 'Sara', 'Stefanović', '2008-03-02', 264),
(407, 'Vaja', 'Tsareas', '2004-07-03', 264),
(527, 'Maša', 'Jokić', '2006-10-19', 266),
(528, 'Tijana', 'Dasović', '2007-04-14', 266),
(529, 'Lena', 'Mirković', '2007-04-29', 266),
(550, 'Maja', 'Horvat', '2004-03-11', 266),
(551, 'Marija', 'Dobrić', '2004-05-10', 266),
(552, 'Teodora', 'Dobrić', '2004-05-10', 266),
(553, 'Iva', 'Divild', '2004-08-31', 266),
(555, 'Zlata', 'Čerevicki', '2006-01-18', 266),
(559, 'Andjela', 'Azlen', '2006-01-09', 266),
(563, 'Andjela', 'Poljak', '2005-10-19', 266),
(566, 'Milica', 'Borovnica', '2005-04-19', 266),
(567, 'Lidija', 'Mrkaja', '2005-07-05', 266),
(610, 'Nevena', 'Živić', '2008-06-16', 263),
(613, 'Katarina', 'Živkovic', '2009-05-10', 263),
(617, 'Neda', 'Katic', '2007-04-23', 263),
(633, 'Vera', 'Stojković', '2002-01-02', 263),
(635, 'Anđela ', 'Maksimović ', '2003-04-19', 263),
(667, 'Milica', 'Zelenović', '2006-01-01', 268),
(671, 'Andrea', 'Radivojević', '2006-01-01', 268),
(674, 'Nina', 'Radivojević', '2006-01-01', 268),
(676, 'Mihaela', 'Jevtić', '2007-01-01', 268),
(716, 'Nevena', 'Mićić', '2007-01-01', 268),
(717, 'Anastasija', 'Kukričar', '2008-01-01', 268),
(718, 'Sonja', 'Mitrović', '2008-01-01', 268),
(719, 'Emilija', 'Lazić', '2005-01-01', 268),
(721, 'Anđela', 'Tanacković', '2006-01-01', 268),
(723, 'Katarina', 'Rikić', '2005-01-01', 268),
(725, 'Nikolina', 'Rikić', '2005-01-01', 268),
(744, 'Davor', 'Jović', '2005-01-01', 268),
(746, 'Milica', 'Zelenović', '2005-01-01', 268),
(752, 'Katarina', 'Rikić', '2005-01-01', 268),
(754, 'Nikolina', 'Rikić', '2005-01-01', 268),
(756, 'Marija', 'Zarić', '2006-01-01', 268),
(775, 'Teodora', 'Grbić', '2000-12-10', 271),
(776, 'Anja', 'Herman', '2002-08-20', 271),
(783, 'Miona ', 'Peković', '2002-09-09', 271),
(932, 'Sara', 'Tihić', '2010-01-01', 247),
(951, 'Rania', 'Zukanović', '2006-06-19', 286),
(952, 'Lana', 'Đukić', '2006-03-19', 286),
(953, 'Asja', 'Bašić', '2004-07-10', 286),
(954, 'Đana', 'Kazazić', '2006-07-18', 286),
(955, 'Sarah', 'Suljić', '2006-09-04', 286),
(970, 'Amina', 'Kmetaš', '2004-11-21', 286),
(971, 'Safeta-Dea', 'Tule', '2006-04-17', 286),
(972, 'Zana', 'Zukanović', '2005-05-22', 286),
(973, 'Lajla', 'Rahimić', '2005-12-10', 286),
(980, 'Berina', 'Crnomerović', '2006-10-19', 286),
(981, 'Lana', 'Grabovica', '2006-03-09', 286),
(982, 'Bea', 'Selimotić', '2007-05-01', 286),
(1047, 'Lea ', 'Hajcman', '2004-06-25', 246),
(1048, 'Anđela', 'Domazet', '2006-08-29', 246),
(1049, 'Ivna', 'Bježančević', '2005-03-02', 246),
(1050, 'Lana', 'Mihelčić', '2008-05-12', 246),
(1080, 'Nikolina ', 'Adžić', '2007-12-18', 294),
(1081, 'Anastasija ', 'Šupić ', '2007-01-01', 294),
(1085, 'Sretenka', 'Pecelj', '2006-02-15', 294),
(1087, 'Njegoš ', 'Milidrag ', '2006-08-22', 294),
(1089, 'Anja ', 'Dubljević', '2005-10-02', 294),
(1332, 'Antonio', 'Bježančević', '2009-05-11', 246),
(1333, 'Mia', 'Dronk', '2010-06-07', 246),
(1334, 'Lana', 'Grizelj', '2009-01-01', 246),
(1335, 'Ana ', 'Mihelčić', '2009-09-15', 246),
(1753, 'Mia', 'Bešvir', '2010-11-13', 249),
(1754, 'Ana Marija', 'Dubovečak', '2010-09-02', 249),
(1755, 'Lena', 'Glavaš', '2011-09-05', 249),
(1756, 'Lota', 'Kelemen', '2010-12-23', 249),
(1781, 'Lana', 'Stolnik', '2006-06-20', 249),
(1783, 'Doroteja', 'Črepinko', '2008-05-31', 249),
(1784, 'Karolina', 'Kokot', '2006-09-14', 249),
(1785, 'Antonija', 'Prekrit', '2001-05-25', 249),
(1786, 'Petra', 'Belščak', '2008-12-17', 249),
(1787, 'Damjan', 'Marković', '2004-11-28', 249),
(1788, 'Marko', 'Malčić', '2006-03-18', 249),
(1789, 'Mihael', 'Zebec', '2007-11-03', 249),
(1790, 'Martin', 'Brezovec', '2008-06-27', 249),
(1791, 'Maja', 'Nalesnik', '2011-06-20', 249),
(1792, 'Nina', 'Nalesnik', '2011-06-20', 249),
(1807, 'Lara', 'Novosel', '2010-02-15', 249),
(1808, 'Ivona', 'Šafar', '2011-01-01', 249),
(1809, 'Maša', 'Županić', '2006-11-13', 249),
(1810, 'Lara', 'Posavec', '2008-05-24', 249),
(1811, 'Valentina', 'Slunjski', '2006-10-23', 249),
(1812, 'Matija', 'Krajačić', '2000-01-16', 249),
(1813, 'Dino', 'Ratkaj', '2009-07-13', 249),
(1814, 'Gabriel', 'Novotny', '2007-05-10', 249),
(1815, 'Roko', 'Poljak', '2006-05-10', 249),
(1816, 'Olivia', 'Cindori', '2008-07-01', 249),
(1817, 'Lana', 'Knok', '2008-01-01', 249),
(1829, 'Alisa', 'Pevec', '2002-06-14', 249),
(1943, 'Lena', 'Ostojić', '2005-01-01', 247),
(2745, 'Jana ', 'Slavkovic', '2008-07-03', 201),
(2746, 'Nina', 'Dimitrioska', '2007-07-03', 201),
(2747, 'Gala', 'Shumkoski', '2007-07-03', 201),
(2748, 'Zorica ', 'Tasevska', '2007-07-03', 201),
(2753, 'Anja', 'Davitkovska', '2003-01-01', 201),
(2754, 'Sara ', 'Dimovska', '2003-01-01', 201),
(2755, 'Ivana ', 'Dimitrova', '2003-01-01', 201),
(2756, 'Stefanija', 'Jovceska', '2003-01-01', 201),
(2757, 'Elena ', 'Adzieva', '2006-01-01', 201),
(2773, 'Dujmić', 'Pia', '2009-01-02', 247),
(2818, 'Hristina', 'Grunovska', '2003-01-01', 201),
(2819, 'Martina', 'Terzieva', '2004-01-01', 201),
(2822, 'Mila ', 'Cakic', '2005-01-01', 201),
(2823, 'Afrodita', 'Siljanoska', '2005-01-01', 201);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
