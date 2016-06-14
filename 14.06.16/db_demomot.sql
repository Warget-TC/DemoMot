-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 06 Juin 2016 à 16:28
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db_demomot`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_member`
--

CREATE TABLE IF NOT EXISTS `t_member` (
  `idMember` int(11) NOT NULL AUTO_INCREMENT,
  `memPseudo` varchar(50) NOT NULL,
  `memPassword` varchar(50) NOT NULL,
  `memFirstName` varchar(50) NOT NULL,
  `memLastName` varchar(50) NOT NULL,
  `memMail` varchar(50) NOT NULL,
  PRIMARY KEY (`idMember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `t_member`
--

INSERT INTO `t_member` (`idMember`, `memPseudo`, `memPassword`, `memFirstName`, `memLastName`, `memMail`) VALUES
(3, 'Warget', '123', 'Tamour', 'Cheema', 'tamour_Cheema@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `t_script`
--

CREATE TABLE IF NOT EXISTS `t_script` (
  `idScript` int(11) NOT NULL AUTO_INCREMENT,
  `srcNom` varchar(50) NOT NULL,
  `srcCode` text NOT NULL,
  `srcParam1` varchar(50) DEFAULT NULL,
  `srcParam2` varchar(50) DEFAULT NULL,
  `srcParam3` varchar(50) DEFAULT NULL,
  `srcParam4` varchar(50) DEFAULT NULL,
  `fkMember` int(11) NOT NULL,
  PRIMARY KEY (`idScript`),
  KEY `fkMember` (`fkMember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `t_script`
--

INSERT INTO `t_script` (`idScript`, `srcNom`, `srcCode`, `srcParam1`, `srcParam2`, `srcParam3`, `srcParam4`, `fkMember`) VALUES
(1, 'AddUser', '', NULL, NULL, NULL, NULL, 3),
(2, 'changeIp', '', NULL, NULL, NULL, NULL, 3),
(3, 'sdas', 'dsadsa', 'adas', 'dsadas', 'dasd', 'sdas', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
