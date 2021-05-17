-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 mai 2021 à 12:10
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `pfc_categorie`
--

DROP TABLE IF EXISTS `pfc_categorie`;
CREATE TABLE IF NOT EXISTS `pfc_categorie` (
  `id_Categ` int(11) NOT NULL,
  `Libelle` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_Categ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pfc_categorie`
--

INSERT INTO `pfc_categorie` (`id_Categ`, `Libelle`) VALUES
(1, 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `pfc_competences`
--

DROP TABLE IF EXISTS `pfc_competences`;
CREATE TABLE IF NOT EXISTS `pfc_competences` (
  `id_Competences` int(11) NOT NULL AUTO_INCREMENT,
  `Competences` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `niveau` int(11) DEFAULT NULL,
  `Categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Competences`),
  KEY `Categorie` (`Categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pfc_competences`
--

INSERT INTO `pfc_competences` (`id_Competences`, `Competences`, `niveau`, `Categorie`) VALUES
(85, 'php', 7, 0),
(71, 'valentin ', 10, NULL),
(82, 'test', 1, 0),
(83, 'test', 1, 0),
(84, 'html', 8, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pfc_exp`
--

DROP TABLE IF EXISTS `pfc_exp`;
CREATE TABLE IF NOT EXISTS `pfc_exp` (
  `id_exp` int(11) NOT NULL AUTO_INCREMENT,
  `Experiences` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `niveau` int(10) DEFAULT NULL,
  `Categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_exp`),
  KEY `Categorie` (`Categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pfc_exp`
--

INSERT INTO `pfc_exp` (`id_exp`, `Experiences`, `niveau`, `Categorie`) VALUES
(20, 'Experience 1', 1, NULL),
(24, 'test', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pfc_formations`
--

DROP TABLE IF EXISTS `pfc_formations`;
CREATE TABLE IF NOT EXISTS `pfc_formations` (
  `id_formations` int(11) NOT NULL AUTO_INCREMENT,
  `Formations` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `niveau` int(10) DEFAULT NULL,
  `Categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_formations`),
  KEY `Categorie` (`Categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pfc_formations`
--

INSERT INTO `pfc_formations` (`id_formations`, `Formations`, `niveau`, `Categorie`) VALUES
(6, 'Formation 1', 1, NULL),
(10, 'test', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pfc_identifiant`
--

DROP TABLE IF EXISTS `pfc_identifiant`;
CREATE TABLE IF NOT EXISTS `pfc_identifiant` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pfc_identifiant`
--

INSERT INTO `pfc_identifiant` (`id`, `identifiant`, `mdp`) VALUES
(1, 'admin', '$2y$10$VhdrlFZLOFTWTRfOpmGm2eEBQNWE3qSshgNGAQDtN8XIa9sqVkaSK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
