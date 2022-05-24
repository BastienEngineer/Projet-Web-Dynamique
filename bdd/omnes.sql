-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 mai 2022 à 16:37
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`aID`, `Nom`, `Prenom`, `Mail`) VALUES
(1, 'Thomas', 'Bastien', 'admin@gmail.com'),
(2, 'Thomas', 'Louis', 'admin2@gmail.com'),
(3, 'Chen', 'Eric', 'admin3@gmail.com'),
(4, 'Yu', 'Shihao', 'admin4@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `cb`
--

DROP TABLE IF EXISTS `cb`;
CREATE TABLE IF NOT EXISTS `cb` (
  `cbID` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Code` int(3) NOT NULL,
  PRIMARY KEY (`cbID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `cb`
--

INSERT INTO `cb` (`cbID`, `Numero`, `Nom`, `Date`, `Code`) VALUES
(20, '4532908893850456', 'Coupart', '2025-02-22', 936);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`mID`, `Nom`, `Prenom`, `Mail`, `MotdePasse`, `Adresse`, `Ville`, `Postal`, `Pays`, `Tel`, `CarteE`) VALUES
(20, 'Coupart', 'Clarice', 'clarice@gmail.com ', 'clarice', 'Grand Rue', 'Marseille', 13005, 'France', '0494747768', 127675),
(21, 'Gosselin', 'Landers', 'landers@gmail.com ', 'landers', 'Place de la Gare', 'Colombes', 92700, 'France', '0186680100', 173088);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`cID`, `Nom`, `Prenom`, `Photo`, `Specialite`, `Mail`, `Bureau`) VALUES
(1, 'Tibo', 'Inshape', 'img/tibo.jpeg', 'musculation', 'tibo@gmail.com', 'G015'),
(2, 'Mua', 'Sissy', 'img/sissy.jpg', 'fitness', 'sissy@gmail.com', 'G011'),
(3, 'Sahili', 'Nassim', 'img/nassim.jpg', 'biking', 'nassim@gmail.com', 'G009'),
(4, 'Sansone', 'Leslie', 'img/leslie.jpg', 'cardio', 'leslie@gmail.com', 'G016'),
(5, 'Smith', 'Jessica', 'img/jessica.jpg', 'collectif', 'jessica@gmail.com', 'G012'),
(6, 'Durant', 'Kevin', 'img/kevin.jpg', 'basket', 'kevin@gmail.com', 'G007'),
(7, 'Cristiano', 'Ronaldo ', 'img/ronaldo.jpg', 'football', 'ronaldo@gmail.com', 'G001'),
(8, 'Dupont', 'Antoine', 'img/antoine.jpg', 'rugby', 'antoine@gmail.com', 'G002'),
(9, 'Nadal', 'Rafael ', 'img/nadal.jpg', 'tennis', 'rafael@gmail.com', 'G005'),
(10, 'Manaudou', 'Laure', 'img/laure.jpg', 'natation', 'laure@gmail.com', 'G008'),
(11, 'Rosset', 'Matthieu', 'img/matthieu.jpg', 'plongeon', 'matthieu@gmail.com', 'G003');

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf32;

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
