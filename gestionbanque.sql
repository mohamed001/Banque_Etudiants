-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 22 Juin 2013 à 11:35
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestionbanque`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Login` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`Login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`Login`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT,
  `CLIENT_NOM` text NOT NULL,
  `CLIENT_PRENOM` text NOT NULL,
  `Mot_de_pass` varchar(250) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `DateNais` date NOT NULL,
  `CLIENT_ADRESSE` text NOT NULL,
  `E_mail` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_CLIENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID_CLIENT`, `CLIENT_NOM`, `CLIENT_PRENOM`, `Mot_de_pass`, `Telephone`, `DateNais`, `CLIENT_ADRESSE`, `E_mail`) VALUES
(27, 'MOULKAF', '', 'imadimad', 0, '1970-01-01', '  ', ''),
(28, 'MOULKAF', 'IMAD', 'imadimad1992', 662645021, '1992-09-19', 'Boulevard MEd 5', 'imadkaf@gmail.com'),
(29, 'HAMIDA', 'HALIM', 'halim1992', 655487825, '1992-06-22', ' Berkane alqods', 'HAMIDA.HALIM@gmai.com'),
(30, 'LOUIZI', 'HAMZA', 'hamza1992', 666231478, '1992-12-22', ' OUJDA alqods', 'LOUIZI.HAMZA@gmail.com'),
(31, 'ZOUGA', 'MOHAMED', '', 652148796, '1992-06-04', 'Nador fetwaki boulevard  ', 'zouga.med@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE IF NOT EXISTS `comptes` (
  `COMPTE` int(11) NOT NULL AUTO_INCREMENT,
  `Client_Compte` int(11) NOT NULL,
  `COMPTE_NUMERO` text NOT NULL,
  `COMPTE_DATE_OUVERTURE` date NOT NULL,
  `ANCIEN_SOLDE` text NOT NULL,
  `SOLDE_ACTUEL` text NOT NULL,
  `Type` varchar(30) NOT NULL,
  PRIMARY KEY (`COMPTE`),
  KEY `Client_Compte` (`Client_Compte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`COMPTE`, `Client_Compte`, `COMPTE_NUMERO`, `COMPTE_DATE_OUVERTURE`, `ANCIEN_SOLDE`, `SOLDE_ACTUEL`, `Type`) VALUES
(2, 28, '123456789', '2013-06-22', '0.0', '500000', 'Cheque'),
(3, 29, '987654321', '2013-06-22', '0.0', '900000', 'Cheque'),
(4, 30, '147852369', '2013-06-22', '0.0', '1000000', 'Cheque'),
(5, 31, '258741369', '2013-06-22', '0.0', '750000', 'Cheque');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE IF NOT EXISTS `operation` (
  `ID_OPERATION` decimal(8,0) NOT NULL,
  `COMPTE` int(11) DEFAULT NULL,
  `ID_RELEVE` decimal(8,0) DEFAULT NULL,
  `OPERATION_MONTANT` decimal(10,0) NOT NULL,
  `OPERATION_DATE` datetime NOT NULL,
  `Type` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_OPERATION`),
  KEY `FK_MOUVMENTER` (`COMPTE`),
  KEY `Type` (`Type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `operation`
--


-- --------------------------------------------------------

--
-- Structure de la table `releve_compte`
--

CREATE TABLE IF NOT EXISTS `releve_compte` (
  `ID_RELEVE` decimal(8,0) NOT NULL,
  `COMPTE` int(11) DEFAULT NULL,
  `DETAIL_CLIENT` text NOT NULL,
  `DETAIL_COMPTE` text NOT NULL,
  `DETAIL_OPERATION` text NOT NULL,
  PRIMARY KEY (`ID_RELEVE`),
  KEY `FK_CONCERNER` (`COMPTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `releve_compte`
--


-- --------------------------------------------------------

--
-- Structure de la table `type_compte`
--

CREATE TABLE IF NOT EXISTS `type_compte` (
  `ID_TYPE` varchar(30) NOT NULL,
  `TYPE_LIBELLE` text NOT NULL,
  `TAUXINTERRETTYPE` decimal(8,0) NOT NULL,
  PRIMARY KEY (`ID_TYPE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_compte`
--


-- --------------------------------------------------------

--
-- Structure de la table `type_operation`
--

CREATE TABLE IF NOT EXISTS `type_operation` (
  `ID_TYPE_OP` varchar(30) NOT NULL,
  `ID_OPERATION` decimal(8,0) NOT NULL,
  `TYPE_OP_LIBELLE` text NOT NULL,
  PRIMARY KEY (`ID_TYPE_OP`),
  KEY `FK_ETRE` (`ID_OPERATION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_operation`
--


--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD CONSTRAINT `comptes_ibfk_4` FOREIGN KEY (`Client_Compte`) REFERENCES `client` (`ID_CLIENT`);

--
-- Contraintes pour la table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `operation_ibfk_1` FOREIGN KEY (`COMPTE`) REFERENCES `comptes` (`COMPTE`);

--
-- Contraintes pour la table `releve_compte`
--
ALTER TABLE `releve_compte`
  ADD CONSTRAINT `releve_compte_ibfk_1` FOREIGN KEY (`COMPTE`) REFERENCES `comptes` (`COMPTE`);

--
-- Contraintes pour la table `type_operation`
--
ALTER TABLE `type_operation`
  ADD CONSTRAINT `FK_ETRE` FOREIGN KEY (`ID_OPERATION`) REFERENCES `operation` (`ID_OPERATION`);
