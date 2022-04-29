-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 avr. 2022 à 20:30
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sc`
--

-- --------------------------------------------------------

--
-- Structure de la table `entrees`
--

CREATE TABLE `entrees` (
  `id` int(11) NOT NULL,
  `datation` timestamp NOT NULL DEFAULT current_timestamp(),
  `codeBadge` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entrees`
--

INSERT INTO `entrees` (`id`, `datation`, `codeBadge`) VALUES
(1, '2022-04-28 17:45:48', 'E8C67A66'),
(2, '2022-04-28 18:18:41', '69646E2E'),
(3, '2022-04-28 18:18:48', '69696B4E');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idEtudiant` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `codeBadge` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nom`, `prenom`, `codeBadge`) VALUES
(1, 'MARTON COULIS', 'Wendy', '696902CE'),
(2, 'HILLION', 'Yannik', '6960AB0E'),
(3, 'LAGRAND', 'Mathis', 'E8C67A66'),
(4, 'MAUGEE', 'Killian', '69646E2E'),
(5, 'LENROUILLY', 'Kylian', '---'),
(6, 'THIVET VALBON', 'Kyllian', '696178FE'),
(7, 'OLIVIERI', 'Kenji', '69696B4E'),
(8, 'SAINTE ROSE', 'Simeon', '6962081E'),
(9, 'JUHEL', 'Yanis', '695FE5FE'),
(10, 'LAMON', 'Noorham', '---'),
(11, 'VATON', 'Melvyn', '6960136E'),
(13, 'CARIN', 'Matthew', '6963562E'),
(14, 'DELRIC', 'Elie', '6960E60E'),
(15, 'ETIENNE', 'Steven', '6941EB2E'),
(16, 'FRANCOIS', 'Yannis', '6963A46E'),
(17, 'JEANNE-LOUISE', 'Lucas', '6964779E'),
(18, 'BELLANCE', 'Mathieu', '695F619E'),
(19, 'BOBE', 'Wilson', '6967D16E'),
(20, 'CLEMENTINE', 'Dynan', '6967D2AE'),
(21, 'GRATIEN', 'Jean-Eude', '69601BEE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `entrees`
--
ALTER TABLE `entrees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idEtudiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entrees`
--
ALTER TABLE `entrees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idEtudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
