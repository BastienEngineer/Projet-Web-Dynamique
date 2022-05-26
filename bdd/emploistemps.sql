-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 26 mai 2022 à 13:19
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `omnes`
--

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
  `samediPM` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploistemps`
--

INSERT INTO `emploistemps` (`c_id`, `lundi_AM`, `lundi_PM`, `mardi_AM`, `mardi_PM`, `mercredi_AM`, `mercredi_PM`, `jeudi_AM`, `jeudi_PM`, `vendredi_AM`, `vendredi_PM`, `samedi_AM`, `samediPM`) VALUES
(1, 0, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
