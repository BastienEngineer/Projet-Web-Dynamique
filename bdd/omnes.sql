-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 23 mai 2022 à 15:53
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `omnes`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  PRIMARY KEY (`aID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`aID`, `Nom`, `Prenom`, `Mail`) VALUES
(1, 'Thomas', 'Bastien', 'admin@gmail.com'),
(2, 'Thomas', 'Louis', 'admin2@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `cb`
--

DROP TABLE IF EXISTS `cb`;
CREATE TABLE IF NOT EXISTS `cb` (
  `cbID` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` int(16) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Code` int(3) NOT NULL,
  PRIMARY KEY (`cbID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `cb`
--

INSERT INTO `cb` (`cbID`, `Numero`, `Nom`, `Date`, `Code`) VALUES
(1, 11111, 's', '2022-05-24', 0);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `mID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `MotdePasse` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Postal` int(5) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `CarteE` int(10) NOT NULL,
  PRIMARY KEY (`mID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`mID`, `Nom`, `Prenom`, `Mail`, `MotdePasse`, `Adresse`, `Ville`, `Postal`, `Pays`, `Tel`, `CarteE`) VALUES
(1, 'Thomas', 'Bastien', 'bast@gmail.com', '123', 'rue de', 'Paris', 75000, 'France', '0101', 101001),
(4, 'thomas', 'louis', 'louis@gmail.com', '123', 'rue ', 'Paris', 75000, 'France', '06', 1111);

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `cID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Specialite` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Bureau` varchar(255) NOT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `echange`
--

DROP TABLE IF EXISTS `echange`;
CREATE TABLE IF NOT EXISTS `echange` (
  `msgID` int(11) NOT NULL AUTO_INCREMENT,
  `sms` text NOT NULL,
  `dest` int(11) NOT NULL,
  `emet` int(11) NOT NULL,
  PRIMARY KEY (`msgID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `echange`
--

INSERT INTO `echange` (`msgID`, `sms`, `dest`, `emet`) VALUES
(11, 'aaz', 1, 1),
(12, 'eet oui \r\n', 1, 1),
(13, 'eet oui \r\n', 1, 1),
(14, 'eet oui \r\n', 1, 1),
(15, 'ckdnfk', 1, 1),
(16, 'ckdnfk', 1, 1),
(17, 'ckdnfk', 1, 1),
(18, 'ckdnfk', 1, 1),
(19, 'ckdnfk', 1, 1),
(20, 'ckdnfk', 1, 1),
(21, 'ckdnfk', 1, 1),
(22, 'ckdnfk', 1, 1),
(23, 'ckdnfk', 1, 1),
(24, 'ckdnfk', 1, 1),
(25, 'ckdnfk', 1, 1),
(26, 'ckdnfk', 1, 1),
(27, 'ckdnfk', 1, 1),
(28, 'coucou toi ', 1, 1),
(29, 'coucou \r\n', 4, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cb`
--
ALTER TABLE `cb`
  ADD CONSTRAINT `cb_ibfk_1` FOREIGN KEY (`cbID`) REFERENCES `client` (`mID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
