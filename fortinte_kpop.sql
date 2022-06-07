-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 02 juin 2022 à 17:31
-- Version du serveur :  5.7.38
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fortinte_kpop`
--


DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `DoubleUtilisateur`$$
$$

DROP PROCEDURE IF EXISTS `InsertUtilisateur`$$
$$

DROP PROCEDURE IF EXISTS `ObtenirArtisteParGroupe`$$
$$

DROP PROCEDURE IF EXISTS `ObtenirArtisteParNom`$$
$$

DROP PROCEDURE IF EXISTS `ObtenirUtilisateur`$$
$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE `artiste` (
  `idArtiste` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `groupe` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`idArtiste`, `nom`, `groupe`, `ville`, `date`) VALUES
(1, 'Jimin', 'BTS', 'Hoedong-dong', '13 octobre 1995'),
(2, 'Jungkook', 'BTS', 'Mandeok-dong', '1 septembre 1997'),
(3, 'Jin', 'BTS', 'Gwacheon', '4 décembre 1992'),
(4, 'Taehyung', 'BTS', 'Bisan-dong', '30 décembre 1995'),
(5, 'RM', 'BTS', 'Yeoui-dong', '12 septembre 1994'),
(6, 'J-Hope', 'BTS', 'Ilgok-dong', '18 février 1994'),
(7, 'Suga', 'BTS', 'Taejeon-dong', '9 mars 1993'),
(8, 'Jessi', 'PNATION', 'New York', '17 décembre 1988'),
(9, 'Hwasa', 'Mamamoo', 'Jeonju', '23 juillet 1995'),
(10, 'Moonbyul', 'Mamamoo', 'Bucheon', '22 décembre 1992'),
(11, 'Taeyeon', 'Girl\'s Generation', 'Pyeonghwa', '9 mars 1989'),
(12, 'Tiffany', 'Girl\'s Generation', 'San Francisco', '1 août 1989'),
(13, 'Felix', 'Stray Kids', 'Sydney', '15 septembre 2000'),
(14, 'Hyunjin', 'Stray Kids', 'Seongnae-dong', '20 mars 2000');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `username`, `password`) VALUES
(28, '2035287', '72ec66942271534fe2b5949123f872c8d2a7b0a1d8b5d97c0bfa9595f2ab45d6'),
(33, 'mrkillervortex', 'a30a997579a6d8733555003b7cc698864186fb708731dfdcd14c5e0a22a945e9'),
(34, 'fortin', 'ad48492f018cf4508228074d9ab31d7a6fe1fbcaef7ea7424861c15bfb0f563d'),
(35, 'shawn', 'a30a997579a6d8733555003b7cc698864186fb708731dfdcd14c5e0a22a945e9');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`idArtiste`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `idArtiste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idutilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
