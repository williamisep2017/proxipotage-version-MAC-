-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 01 Juin 2015 à 11:00
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id_villes` int(11) NOT NULL,
  `nom_villes` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`id_villes`, `nom_villes`) VALUES
(1, 'Paris'),
(2, 'Marseille'),
(3, 'Lyon'),
(4, 'Toulouse'),
(5, 'Nice'),
(6, 'Nantes'),
(7, 'Strasbourg'),
(8, 'Montpellier'),
(9, 'Bordeaux'),
(10, 'Lille'),
(11, 'Rennes'),
(12, 'Reims'),
(13, 'Le Havre'),
(14, 'Saint-Etienne'),
(15, 'Toulon'),
(16, 'Grenoble'),
(17, 'Dijon'),
(18, 'Angers'),
(19, 'Nîmes'),
(20, 'Villeurbanne'),
(21, 'Saint-Dennis'),
(22, 'Le-Mans'),
(23, 'Clermont-Ferrand'),
(24, 'Aix-en-provence'),
(25, 'Brest'),
(26, 'Limoges');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id_villes`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id_villes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
