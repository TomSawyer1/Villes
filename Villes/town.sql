-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 30 jan. 2023 à 16:37
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `villes`
--

-- --------------------------------------------------------

--
-- Structure de la table `town`
--

CREATE TABLE `town` (
  `id_town` int(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `capital` varchar(100) NOT NULL,
  `pop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `town`
--

INSERT INTO `town` (`id_town`, `nom`, `pays`, `capital`, `pop`) VALUES
(1, 'thomas', 'france', 'paris', '20'),
(2, 'thomas', 'france', 'paris', '20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`id_town`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `town`
--
ALTER TABLE `town`
  MODIFY `id_town` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
