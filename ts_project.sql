-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 fév. 2018 à 18:27
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ts_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
CREATE TABLE IF NOT EXISTS `achievements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `achievement_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achievements`
--

INSERT INTO `achievements` (`id`, `achievement_date`, `id_user`, `id_exercice`) VALUES
(1, '2017-12-01 18:52:29', 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'teacher'),
(2, 'pupil');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

DROP TABLE IF EXISTS `exercices`;
CREATE TABLE IF NOT EXISTS `exercices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_notion` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `exercices`
--

INSERT INTO `exercices` (`id`, `id_notion`, `id_level`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 5, 1),
(14, 5, 2),
(15, 5, 3),
(16, 6, 1),
(17, 6, 2),
(18, 6, 3),
(19, 7, 1),
(20, 7, 2),
(21, 7, 3),
(22, 8, 1),
(23, 8, 2),
(24, 8, 3),
(25, 9, 1),
(26, 9, 2),
(27, 9, 3),
(28, 10, 1),
(29, 10, 2),
(30, 10, 3),
(31, 11, 1),
(32, 11, 2),
(33, 11, 3),
(34, 12, 1),
(35, 12, 2),
(36, 12, 3);

-- --------------------------------------------------------

--
-- Structure de la table `levels`
--

DROP TABLE IF EXISTS `levels`;
CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `levels`
--

INSERT INTO `levels` (`id`, `level`) VALUES
(1, 'facile'),
(2, 'moyen'),
(3, 'difficile');

-- --------------------------------------------------------

--
-- Structure de la table `notions`
--

DROP TABLE IF EXISTS `notions`;
CREATE TABLE IF NOT EXISTS `notions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notion` varchar(255) NOT NULL,
  `id_subject` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notions`
--

INSERT INTO `notions` (`id`, `notion`, `id_subject`) VALUES
(1, 'Somme et soustraction', 1),
(2, 'Multiplication et division', 1),
(3, 'Géométrie', 1),
(4, 'Conjugaison', 2),
(5, 'Orthographe', 2),
(6, 'Grammaire', 2),
(7, 'Antiquité', 3),
(8, 'Moyen-Age', 3),
(9, 'Renaissance', 3),
(10, 'Maroc', 4),
(11, 'Afrique', 4),
(12, 'Monde', 4);

-- --------------------------------------------------------

--
-- Structure de la table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(1, 'Mathématiques'),
(2, 'Langue'),
(3, 'Histoire'),
(4, 'Géographie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `login_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `age`, `login_name`, `password`, `class`, `category`) VALUES
(1, 'SALAH', 'Jabir', 48, 'jabir', 'test', 'A', 'teacher'),
(2, 'TUBAA', 'Sana', 51, 'sana', 'uam4peiZ1koo', 'B', 'teacher'),
(3, 'DURAR', 'Iman', 13, 'iman', 'test2', 'A', 'pupil'),
(4, 'MUFEEDA', 'Linah', 15, 'linah', 'nieChi8di8m', 'A', 'pupil'),
(5, 'THAMIR', 'Khalil', 14, 'khalil', 'aiv2Caenei', 'A', 'pupil'),
(6, 'NARJIS', 'Ishfaq', 13, 'ishfaq', 'aiGeeg9aSoo', 'A', 'pupil'),
(7, 'RABAH', 'Shadi', 10, 'shadi', 'Vap8zieCeeL9', 'A', 'pupil'),
(8, 'NAIFEH', 'Labib', 11, 'labib', 'CuSh2eN6cho', 'A', 'pupil'),
(9, 'NIMR', 'Zafar', 9, 'zafar', 'ivaghie0Ai', 'A', 'pupil'),
(10, 'WAFEEQ', 'Muflih', 11, 'muflih', 'iR3feiti5', 'A', 'pupil'),
(11, 'MASAHIR', 'Huriyyah', 13, 'huriyyah', 'Oopiegh9shie', 'A', 'pupil'),
(12, 'BASHIR', 'Nabighah', 9, 'nabighah', 'Zei3Aethit', 'B', 'pupil'),
(13, 'SAFWAH', 'Nuhaid', 8, 'nuhaid', 'WuV1sahxeF', 'B', 'pupil'),
(14, 'HAWA', 'Takiyah', 8, 'takiyah', 'shoh6Coo1', 'B', 'pupil'),
(15, 'LULOAH', 'Rabeea', 8, 'rabeea', 'sei3Phaw4pae', 'B', 'pupil'),
(16, 'JANAAN', 'Ilham', 15, 'ilham', 'Eemahhei7qu', 'B', 'pupil'),
(17, 'LUBAID', 'Dhakwan', 13, 'dhakwan', 'lah0AiCah', 'B', 'pupil'),
(18, 'SALWA', 'Nuzhah', 12, 'nuzhah', 'eeh3lahyaF0', 'B', 'pupil'),
(19, 'IMAD', 'Moosa', 14, 'moosa', 'ohGai3ee', 'B', 'pupil'),
(20, 'TOUMA', 'Tariq', 13, 'tariq', 'ogheegea4Ezut', 'B', 'pupil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
