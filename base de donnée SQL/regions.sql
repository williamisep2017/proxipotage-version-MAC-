-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 29 Mai 2015 à 22:26
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id_regions` int(11) NOT NULL,
  `nom_regions` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `regions`
--

INSERT INTO `regions` (`id_regions`, `nom_regions`) VALUES
(1, 'Alsace'),
(2, 'Aquitaine'),
(3, 'Auvergne'),
(4, 'Basse Normandie'),
(5, 'Bourgogne'),
(6, 'Bretagne'),
(7, 'Centre'),
(8, 'Champagne-Ardenne'),
(9, 'Corse'),
(10, 'Franche-Comté'),
(11, 'Haute Normandie'),
(12, 'Ile-de-France'),
(13, 'Languedoc-Roussillon'),
(14, 'Limousin'),
(15, 'Lorraine'),
(16, 'Midi-Pyrénées'),
(17, 'Nord-Pas-de-Calais'),
(18, 'Pays de la Loire'),
(19, 'Picardie'),
(20, 'Poitou-Charentes'),
(31, 'Haute Normandie'),
(32, 'Ile-de-France'),
(33, 'Languedoc-Roussillon'),
(34, 'Limousin'),
(35, 'Lorraine'),
(36, 'Midi-Pyrénées'),
(37, 'Nord-Pas-de-Calais'),
(38, 'Pays de la Loire'),
(39, 'Picardie'),
(40, 'Poitou-Charentes'),
(41, 'Provence-Alpes-Côte-d''Azur'),
(42, 'Rhône-Alpes'),
(43, 'Provence-Alpes-Côte-d''Azur'),
(44, 'Rhône-Alpes');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id_regions`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id_regions` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;