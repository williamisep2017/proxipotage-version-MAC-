-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Sam 06 Juin 2015 à 17:42
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `fruit` varchar(255) NOT NULL,
  `image_fruit` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fruits`
--

INSERT INTO `fruits` (`id`, `fruit`, `image_fruit`) VALUES
(1, 'Abricot', 'css/images/abricot.jpg'),
(2, 'Airelle', 'css/images/airelle.jpg'),
(4, 'Ananas', 'css/images/ananas.jpg'),
(5, 'Avocat', 'css/images/avocat.jpg'),
(6, 'Banane', 'css/images/banane.jpg'),
(7, 'Cassis', 'css/images/cassis.jpg'),
(8, 'Cerise', 'css/images/cerise.jpg'),
(9, 'Châtaigne', 'css/images/châtaigne.jpg'),
(10, 'Citron', 'css/images/citron.jpg'),
(11, 'Clémentine', 'css/images/clémentine.jpg'),
(12, 'Datte', 'css/images/dattes.jpg'),
(13, 'Figue', 'css/images/figue.jpg'),
(14, 'Fraise', 'css/images/fraise.jpg'),
(15, 'Framboise', 'css/images/framboise.jpg'),
(16, 'Grenade', 'css/images/grenade.jpg'),
(17, 'Groseille', 'css/images/groseille.jpg'),
(18, 'Kaki', 'css/images/kaki.jpg'),
(19, 'Kiwi', 'css/images/kiwi.jpg'),
(20, 'Litchi', 'css/images/litchi.jpg'),
(21, 'Mandarine', 'css/images/mandarine.jpg'),
(23, 'Melon', 'css/images/melon.jpg'),
(24, 'Mûre', 'css/images/mûre.jpg'),
(26, 'Nèfle', 'css/images/nèfle.jpg'),
(27, 'Noisette', 'css/images/noisette.jpg'),
(28, 'Noix', 'css/images/noix.jpg'),
(29, 'Olive', 'css/images/olive.jpg'),
(30, 'Orange', 'css/images/orange.jpg'),
(31, 'Pamplemousse', 'css/images/pamplemousse.jpg'),
(32, 'Pastèque', 'css/images/pasteque.jpg'),
(33, 'Pêche', 'css/images/peche.jpg'),
(35, 'Poire', 'css/images/poire.jpg'),
(36, 'Pomme', 'css/images/pomme.jpg'),
(37, 'Prune', 'css/images/prune.jpg'),
(38, 'Raisin rouge', 'css/images/raisinR.jpg'),
(39, 'Raisin blanc', 'css/images/raisinB.jpg'),
(40, 'Artichaut', 'css/images/artichaut.jpg'),
(41, 'Asperge', 'css/images/asperge.jpg'),
(43, 'Betterave rouge', 'css/images/betterave_rouge.jpg'),
(44, 'Brocoli', 'css/images/brocoli.jpg'),
(45, 'Carotte', 'css/images/carotte.jpg'),
(46, 'Céleri branche', 'css/images/celeri_branche.jpg'),
(47, 'Chou blanc', 'css/images/chou_blanc.jpg'),
(48, 'Chou-fleur', 'css/images/chou-fleur.jpg'),
(49, 'Chou rouge', 'css/images/chou_rouge.jpg'),
(50, 'Chou vert', 'css/images/chou_vert.jpg'),
(51, 'Choux de Bruxelles', 'css/images/choux_de_bruxelles.jpg'),
(53, 'Concombre', 'css/images/concombre.jpg'),
(54, 'Courgette', 'css/images/courgette.jpg'),
(55, 'Cresson', 'css/images/cresson.jpg'),
(56, 'Echalote', 'css/images/echalote.jpg'),
(57, 'Endive', 'css/images/endive.jpg'),
(58, 'Epinard', 'css/images/epinard.jpg'),
(59, 'Fenouil', 'css/images/fenouil.jpg'),
(60, 'Fèves', 'css/images/fèves.jpg'),
(61, 'Haricots verts', 'css/images/haricots_verts.jpg'),
(62, 'Laitue', 'css/images/laitue.jpg'),
(63, 'Navet', 'css/images/navet.jpg'),
(64, 'Oignon', 'css/images/oignon.jpg'),
(66, 'Petit Oignon', 'css/images/petit_oignon.jpg'),
(67, 'Petits Pois', 'css/images/petits_pois.jpg'),
(68, 'Poireau', 'css/images/poireau.jpg'),
(69, 'Poivrons', 'css/images/poivrons.jpg'),
(70, 'Pomme de terre', 'css/images/pomme_de_terre.jpg'),
(71, 'Potirons', 'css/images/potirons.jpg'),
(72, 'Radis', 'css/images/radis.jpg'),
(73, 'Raifort', 'css/images/raifort.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;