-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 08 Juin 2015 à 21:52
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id_sujet` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `contenu` text NOT NULL,
  `id_categories` int(11) NOT NULL,
  `heure` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sujet`
--

INSERT INTO `sujet` (`id_sujet`, `name`, `contenu`, `id_categories`, `heure`) VALUES
(14, 'Culture de Fraise', ' Bonjour, je ne comprend pas comment faire pour cultiver des fraises. Quelqu''un aurait une idée ?', 0, '0000-00-00'),
(31, 'Abricot', ' Quelqu''un connait-il leur apport nutritionnel ?', 0, '0000-00-00'),
(32, 'Recherche de Figues', ' Bonjour amis cultivateurs, je suis à la recherche de figues en région Parisienne, et je ne trouve pas de vendeur pour l''instant. Quelqu''un aurait un contact ? Merci d''avance', 0, '0000-00-00'),
(33, 'Livre potager', ' Bonjour, je viens de publier un livre "L''art du potager" aux éditions foulio, je pense qu''il intéressera une bonne partie de la communauté !', 0, '0000-00-00'),
(34, 'Cerisier', 'Quel terreau choisir pour les cerisier\r\n', 0, '0000-00-00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id_sujet`), ADD KEY `id_categorie` (`id_categories`), ADD KEY `id_categories` (`id_categories`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;