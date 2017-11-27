-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 09 Janvier 2017 à 11:26
-- Version du serveur :  5.6.31-0ubuntu0.15.10.1
-- Version de PHP :  5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cve`
--

-- --------------------------------------------------------

--
-- Structure de la table `article_coursparticulier`
--

CREATE TABLE IF NOT EXISTS `article_coursparticulier` (
  `id_article` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `nb_personne` text NOT NULL,
  `nb_heure` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_coursparticulier`
--

INSERT INTO `article_coursparticulier` (`id_article`, `nom`, `nb_personne`, `nb_heure`, `prix`) VALUES
(1, 'Cours de planche à voile', '1', 2, 40),
(2, 'Cours de planche à voile', '2', 2, 60),
(3, 'Cours de dériveur', '1', 2, 50),
(4, 'Cours de dériveur', '2', 2, 70);

-- --------------------------------------------------------

--
-- Structure de la table `article_sportloisir`
--

CREATE TABLE IF NOT EXISTS `article_sportloisir` (
  `id_article` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prix` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_sportloisir`
--

INSERT INTO `article_sportloisir` (`id_article`, `nom`, `prix`) VALUES
(1, 'Licence Familiale ', 124),
(2, 'Licence Adulte né avant le 1.1.95 ', 109),
(3, 'Licence Jeune né à partir du 1.1.95 ', 75),
(4, 'Renouvellement Licence Familiale ', 108),
(5, 'Renouvellement Licence Adulte né avant le 1.1.95 ', 84),
(6, 'Renouvellement Licence Jeune né à partir du 1.1.95', 68);

-- --------------------------------------------------------

--
-- Structure de la table `article_voileliberté`
--

CREATE TABLE IF NOT EXISTS `article_voileliberté` (
  `id_article` int(11) NOT NULL,
  `engin` varchar(256) NOT NULL,
  `adherence` tinyint(1) NOT NULL,
  `prix` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_voileliberté`
--

INSERT INTO `article_voileliberté` (`id_article`, `engin`, `adherence`, `prix`) VALUES
(1, 'Planche 1H', 1, 10),
(2, 'Planche 2H', 1, 14),
(3, 'Laser 2 à 3H ', 1, 20),
(4, 'Laser pico ', 1, 20),
(5, 'Funboard', 1, 20),
(6, 'Hobie Cat 13 ', 1, 20),
(7, '420 2 à 3H', 1, 30),
(8, 'Déclic 2 à 3H', 1, 35),
(9, 'Optimist 2 à 3H', 1, 35);

-- --------------------------------------------------------

--
-- Structure de la table `article_voileliberté2`
--

CREATE TABLE IF NOT EXISTS `article_voileliberté2` (
  `id_article` int(11) NOT NULL,
  `engin` varchar(256) NOT NULL,
  `nb_heure` int(11) NOT NULL,
  `nb_place` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_voileliberté2`
--

INSERT INTO `article_voileliberté2` (`id_article`, `engin`, `nb_heure`, `nb_place`, `prix`) VALUES
(1, 'Canoé', 1, 2, 6),
(2, 'Kayak', 1, 1, 4),
(3, 'Kayak', 1, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

CREATE TABLE IF NOT EXISTS `recuperation` (
  `id` int(11) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `code` int(11) NOT NULL,
  `confirmer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `login` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datedn` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telephone` text NOT NULL,
  `adresse` text NOT NULL,
  `codepost` text NOT NULL,
  `ville` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article_coursparticulier`
--
ALTER TABLE `article_coursparticulier`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `article_sportloisir`
--
ALTER TABLE `article_sportloisir`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `article_voileliberté`
--
ALTER TABLE `article_voileliberté`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `article_voileliberté2`
--
ALTER TABLE `article_voileliberté2`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `recuperation`
--
ALTER TABLE `recuperation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article_coursparticulier`
--
ALTER TABLE `article_coursparticulier`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `article_sportloisir`
--
ALTER TABLE `article_sportloisir`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `article_voileliberté`
--
ALTER TABLE `article_voileliberté`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `article_voileliberté2`
--
ALTER TABLE `article_voileliberté2`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `recuperation`
--
ALTER TABLE `recuperation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
