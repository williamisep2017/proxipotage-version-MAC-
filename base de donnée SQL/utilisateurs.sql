-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 28 Mai 2015 à 20:48
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dte_de_naissance` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `adresse_mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `num_tel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `admin`, `pseudo`, `nom`, `prenom`, `dte_de_naissance`, `adresse`, `adresse_mail`, `mot_de_passe`, `num_tel`) VALUES
(1, 0, '', 'Andrianasolo', 'Jonathan', '', '', 'andrianasolo@hotmail.fr', 'jonathan', 70707070),
(2, 0, '', 'Andrianasolo', 'Jonathan', '', '', 'andrianasolo@hotmail.fr', 'jonathan', 70707070),
(7, 0, 'poisson', '', '', '11129888', '50 rue du bac', 'poisson@gmail.com', '8ecfdda624c785969184fe0f89422743577148c0', 991817263),
(10, 0, 'grenouille', '', '', '', '', 'grenouille@gmail.com', 'ae76c076acbb8b11275854954d541839133b6c20', 0),
(11, 0, 'poisson2', '', '', '', '', 'poisson2@gmail.com', 'a4ab2e9de58cf38d7cf5f936d1a54de3037a21a8', 0),
(12, 0, 'test3', '', '', '', '', 'test3@gmail.com', 'bc003187c32e37942110b9a59e19c2d0431deedc', 0),
(14, 1, 'administrateur', '', '', '', '', 'administrateur@gmail.com', '2dd07c9ce0189aaacacff6a86a5fc61a8d38d851', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;