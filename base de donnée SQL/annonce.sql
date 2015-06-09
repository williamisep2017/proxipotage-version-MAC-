-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 08 Juin 2015 à 19:41
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `choix_vente` varchar(255) NOT NULL,
  `choix_produits` varchar(255) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `pdsKg` int(255) NOT NULL,
  `pdsG` int(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `userid` varchar(255) NOT NULL,
  `adresse_de_vente` varchar(255) NOT NULL,
  `REGIONS` varchar(255) NOT NULL,
  `VILLES` varchar(255) NOT NULL,
  `num_tel` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `choix_vente`, `choix_produits`, `NOM`, `pdsKg`, `pdsG`, `prix`, `comment`, `date_ajout`, `userid`, `adresse_de_vente`, `REGIONS`, `VILLES`, `num_tel`) VALUES
(2, 'Vendre', 'Fruits', 'Tomate', 2, 0, 0, '', '0000-00-00 00:00:00', '0', '', '', '', ''),
(3, 'Vendre et Echanger', 'Légumes', 'carotte', 4, 0, 0, '', '0000-00-00 00:00:00', '0', '', '', '', ''),
(9, 'Echanger', 'Fruits', 'Tomate', 3, 0, 0, '', '0000-00-00 00:00:00', '0', '', '', '', ''),
(10, 'Vendre', 'Fruits', 'abricot', 1, 100, 0, '', '0000-00-00 00:00:00', '0', '', '', '', ''),
(11, 'Vendre', 'Fruits', 'abricot', 1, 100, 0, '', '0000-00-00 00:00:00', '0', '', '', '', ''),
(14, 'Echanger', 'Légumes', 'choux', 2, 200, 0, 'aaaaaaaaaa', '0000-00-00 00:00:00', '0', '', '', '', ''),
(15, 'Vendre', 'Fruits', 'tomate', 3, 400, 0, 'bonjour voici ma première annoce', '0000-00-00 00:00:00', '0', '', '', '', ''),
(16, 'Echanger', 'Fruits', 'ezfse', 1, 100, 0, 'rzer', '0000-00-00 00:00:00', '0', '', '', '', ''),
(21, 'Vendre et Echanger', 'Fruits', 'Banane', 2, 200, 0, 'bonne banane ', '2015-05-12 01:05:29', '0', '', '', '', ''),
(22, 'Vendre', 'Fruits', 'Melon', 0, 0, 6, '', '2015-05-18 17:18:02', '0', '', '', '', ''),
(23, 'Echanger', 'Fruits', 'Mandarine', 2, 300, 4, 'test bdd', '2015-05-19 16:13:23', '0', '', '', '', ''),
(24, 'Echanger', 'Fruits', 'Cerise', 8, 900, 10, '', '2015-05-19 19:23:59', '', '', '', '', ''),
(25, 'Echanger', 'Fruits', 'Kaki', 6, 900, 4, '', '2015-05-19 19:32:05', '7', '', '', '', ''),
(26, 'Vendre', 'Fruits', 'Litchi', 3, 900, 7, '', '2015-05-19 19:32:27', '7', '', '', '', ''),
(27, 'Vendre et Echanger', 'Fruits', 'Grenade', 3, 900, 5, 'ça marche?', '2015-05-19 23:25:48', '7', '', '', '', ''),
(28, 'Vendre', 'Fruits', 'Cassis', 2, 900, 8, '', '2015-05-19 23:28:10', '7', 'marseille', '', '', ''),
(35, 'Vendre et Echanger', 'Légumes', 'Cresson', 0, 500, 1, '', '2015-06-05 20:04:28', '16', '', 'Alsace', 'Paris', ''),
(36, 'Vendre et Echanger', 'Légumes', 'Artichaut', 1, 100, 2, 'SUPER BON', '2015-06-08 09:46:56', '17', '', 'Nord-Pas-de-Calais', 'Dijon', ''),
(38, 'Echanger', 'Légumes', 'Chou rouge', 1, 100, 1, '', '2015-06-08 10:31:43', '16', '', 'Alsace', 'Paris', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;