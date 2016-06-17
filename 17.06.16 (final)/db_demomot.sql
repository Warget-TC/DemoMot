-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Juin 2016 à 15:31
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
-- Structure de la table `t_comment`
--

CREATE TABLE IF NOT EXISTS `t_comment` (
  `idComment` int(11) NOT NULL AUTO_INCREMENT,
  `comPseudo` varchar(25) NOT NULL,
  `comComment` text NOT NULL,
  `fkScript` int(11) NOT NULL,
  PRIMARY KEY (`idComment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `t_comment`
--

INSERT INTO `t_comment` (`idComment`, `comPseudo`, `comComment`, `fkScript`) VALUES
(7, 'Illidan', 'Need les épées', 18),
(8, 'Onyxia', 'Rush sur le heal', 18),
(10, 'sdf', 'df', 20),
(11, 'Merci', 'jai utilisé ce script dans un but précis', 20);

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
  `memDescription` varchar(255) NOT NULL,
  PRIMARY KEY (`idMember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `t_member`
--

INSERT INTO `t_member` (`idMember`, `memPseudo`, `memPassword`, `memFirstName`, `memLastName`, `memMail`, `memAvatar`, `memDescription`) VALUES
(15, 'Warget', '123', 'Tamour', 'Cheema', 'tamour_Cheema@hotmail.fr', '../../resources/images/stock-photo-64396363-businessman-silhouette-as-avatar-or-default-profile-picture.jpg', 'Je suis heureux que vous soyez là !'),
(16, 'Tuturu', '123', 'Mayuri', 'Shiina', 'Mayuri@hotmail.jp', '20151206010226_24052.jpg', 'Tuturu~ Mayushii Desu');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `t_script`
--

INSERT INTO `t_script` (`idScript`, `srcNom`, `srcCode`, `srcExplanation`, `srcSyntax`, `srcParam1`, `srcParam2`, `srcParam3`, `srcParam4`, `fkMember`) VALUES
(21, 'ChangeComputerName', 'Rename-Computer -NewName -Param1', 'Rename-Computer -NewName -Name', 'Exemple :  INF509', '', '', '', '', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
