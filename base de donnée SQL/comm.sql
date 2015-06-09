-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 08 Juin 2015 à 21:50
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `comm`
--

CREATE TABLE `comm` (
  `id_comm` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `id_sujet` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comm`
--

INSERT INTO `comm` (`id_comm`, `contenu`, `id_sujet`) VALUES
(12, ' Tu dois bien les mettre au soleil tout en les arrosant régulièrement :)', 14),
(13, 'Moi aussi je suis interressé', 31),
(14, ' je vous dis ça tout à l''heure les amis !', 31),
(15, ' Salut, j''ai un ami qui à toutes sortes de fruits en culture, contact moi par mail : poisson2@gmail.com', 32),
(16, 'On est dans le cas de 50 calories pour 100g (abricots frais)', 31),
(17, ' Merci beaucoup :)', 32);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`id_comm`), ADD KEY `id_sujet` (`id_sujet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comm`
--
ALTER TABLE `comm`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;