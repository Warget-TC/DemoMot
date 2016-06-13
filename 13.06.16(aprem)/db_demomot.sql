-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 13 Juin 2016 à 16:27
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
  `memAvatar` text NOT NULL,
  PRIMARY KEY (`idMember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `t_member`
--

INSERT INTO `t_member` (`idMember`, `memPseudo`, `memPassword`, `memFirstName`, `memLastName`, `memMail`, `memAvatar`) VALUES
(10, 'Warget', '123', 'Tamour', 'Cheema', 'tamour_Cheema@hotmail.fr', 'steins_gate_sonuvabitch_by_lawdelgado-d4mf37h.png'),
(11, 'Tuturu', '123', '? ? ? ? ?', '? ? ? ? ?', 'Mayuri@hotmail.jp', 'mayushii_by_betamax777-d4x1f9a.png');

-- --------------------------------------------------------

--
-- Structure de la table `t_script`
--

CREATE TABLE IF NOT EXISTS `t_script` (
  `idScript` int(11) NOT NULL AUTO_INCREMENT,
  `srcNom` text NOT NULL,
  `srcCode` text NOT NULL,
  `srcExplanation` text NOT NULL,
  `srcSyntax` text NOT NULL,
  `srcParam1` varchar(50) DEFAULT NULL,
  `srcParam2` varchar(50) DEFAULT NULL,
  `srcParam3` varchar(50) DEFAULT NULL,
  `srcParam4` varchar(50) DEFAULT NULL,
  `fkMember` int(11) NOT NULL,
  PRIMARY KEY (`idScript`),
  KEY `fkMember` (`fkMember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `t_script`
--

INSERT INTO `t_script` (`idScript`, `srcNom`, `srcCode`, `srcExplanation`, `srcSyntax`, `srcParam1`, `srcParam2`, `srcParam3`, `srcParam4`, `fkMember`) VALUES
(18, 'ChangeComputerName', 'Rename-Computer -NewName -Param1', 'Ce script permet de renommer son PC\r\n', 'Rename-Computer -NewName -Nom', '', '', '', '', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
