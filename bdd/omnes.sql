-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 mai 2022 à 16:29
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `cb`
--

INSERT INTO `cb` (`cbID`, `Numero`, `Nom`, `Date`, `Code`) VALUES
(20, '4532908893850456', 'Coupart', '2025-02-22', 936),
(22, '1111111111111111', 'a', '2022-05-03', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`mID`, `Nom`, `Prenom`, `Mail`, `MotdePasse`, `Adresse`, `Ville`, `Postal`, `Pays`, `Tel`, `CarteE`) VALUES
(20, 'Coupart', 'Clarice', 'clarice@gmail.com ', 'clarice', 'Grand Rue', 'Marseille', 13005, 'France', '0494747768', 127675),
(21, 'Gosselin', 'Landers', 'landers@gmail.com ', 'landers', 'Place de la Gare', 'Colombes', 92700, 'France', '0186680100', 173088),
(22, 'Client', 'Client', 'test@gmail.com', '123', 'rue', 'Paris', 75000, 'France', '0601010101', 222222);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`cID`, `Nom`, `Prenom`, `Photo`, `Specialite`, `Mail`, `Bureau`) VALUES
(1, 'Inshape', 'Tibo', 'img/tibo.jpeg', 'musculation', 'tibo@gmail.com', 'G015'),
(2, 'Mua', 'Sissy', 'img/sissy.jpg', 'fitness', 'sissy@gmail.com', 'G011'),
(3, 'Sahili', 'Nassim', 'img/nassim.jpg', 'biking', 'nassim@gmail.com', 'G009'),
(4, 'Sansone', 'Leslie', 'img/leslie.jpg', 'cardio', 'leslie@gmail.com', 'G016'),
(5, 'Smith', 'Jessica', 'img/jessica.jpg', 'collectif', 'jessica@gmail.com', 'G012'),
(6, 'Durant', 'Kevin', 'img/kevin.jpg', 'basket', 'kevin@gmail.com', 'G007'),
(7, 'Ronaldo ', 'Cristiano', 'img/ronaldo.jpg', 'football', 'cristiano@gmail.com', 'G001'),
(8, 'Dupont', 'Antoine', 'img/antoine.jpg', 'rugby', 'antoine@gmail.com', 'G002'),
(9, 'Nadal', 'Rafael ', 'img/nadal.jpg', 'tennis', 'rafael@gmail.com', 'G005'),
(10, 'Manaudou', 'Laure', 'img/laure.jpg', 'natation', 'laure@gmail.com', 'G008'),
(11, 'Rosset', 'Matthieu', 'img/matthieu.jpg', 'plongeon', 'matthieu@gmail.com', 'G003');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `cvID` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  PRIMARY KEY (`cvID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`cvID`, `prenom`, `formation`, `experience`) VALUES
(1, 'Tibo', 'prof de sport', 'BAC S'),
(2, 'Sissy', 'Prof de fitness', 'BAC ES'),
(3, 'Nassim', 'Formation au e-commerce', 'Diplome en commerce'),
(4, 'Leslie', 'Prof de fitness', 'Diplome de droit'),
(5, 'Jessica', 'Enseignante d EPS', 'DESJEPS'),
(6, 'Kevin', 'prof de basket', 'BAC S'),
(7, 'Cristiano', 'club de football au portugal', 'Joueur pro de football '),
(8, 'Antoine', 'joueur pro de rugby dans l equipe de France', 'BAC S'),
(9, 'Rafael', 'Joueur de tennis professionnel', 'CPJEPS'),
(10, 'Laure', 'nageuse de competition', 'BPJEPS'),
(11, 'Matthieu', 'Prof de plongeon', 'Diplome de plongeon');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `emploistemps`
--

DROP TABLE IF EXISTS `emploistemps`;
CREATE TABLE IF NOT EXISTS `emploistemps` (
  `c_id` int(11) NOT NULL,
  `lundi_AM` tinyint(1) NOT NULL,
  `lundi_PM` tinyint(1) NOT NULL,
  `mardi_AM` tinyint(1) NOT NULL,
  `mardi_PM` tinyint(1) NOT NULL,
  `mercredi_AM` tinyint(1) NOT NULL,
  `mercredi_PM` tinyint(1) NOT NULL,
  `jeudi_AM` tinyint(1) NOT NULL,
  `jeudi_PM` tinyint(1) NOT NULL,
  `vendredi_AM` tinyint(1) NOT NULL,
  `vendredi_PM` tinyint(1) NOT NULL,
  `samedi_AM` tinyint(1) NOT NULL,
  `samediPM` tinyint(1) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `emploistemps`
--

INSERT INTO `emploistemps` (`c_id`, `lundi_AM`, `lundi_PM`, `mardi_AM`, `mardi_PM`, `mercredi_AM`, `mercredi_PM`, `jeudi_AM`, `jeudi_PM`, `vendredi_AM`, `vendredi_PM`, `samedi_AM`, `samediPM`) VALUES
(1, 0, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0),
(2, 1, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 0),
(3, 0, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1),
(4, 1, 1, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0),
(5, 0, 0, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1),
(6, 1, 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0),
(7, 0, 1, 0, 1, 0, 1, 1, 1, 0, 0, 1, 0),
(8, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0),
(9, 0, 0, 1, 0, 1, 0, 0, 0, 1, 1, 1, 1),
(10, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1),
(11, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `eID` int(11) NOT NULL AUTO_INCREMENT,
  `destID` int(11) NOT NULL,
  `email` text NOT NULL,
  `dest` varchar(255) NOT NULL,
  `emet` varchar(255) NOT NULL,
  PRIMARY KEY (`eID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `rID` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `spe` varchar(255) NOT NULL,
  `ligne` int(11) NOT NULL,
  `colonne` int(11) NOT NULL,
  `reserve` tinyint(1) NOT NULL,
  PRIMARY KEY (`rID`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cb`
--
ALTER TABLE `cb`
  ADD CONSTRAINT `cb_ibfk_1` FOREIGN KEY (`cbID`) REFERENCES `client` (`mID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`cvID`) REFERENCES `coach` (`cID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `emploistemps`
--
ALTER TABLE `emploistemps`
  ADD CONSTRAINT `emploistemps_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `coach` (`cID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `mail_ibfk_1` FOREIGN KEY (`eID`) REFERENCES `rdv` (`rID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `coach` (`cID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
