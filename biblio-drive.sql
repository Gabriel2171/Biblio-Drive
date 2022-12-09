-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 déc. 2022 à 16:33
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biblio-drive`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `noauteur` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`noauteur`, `nom`, `prenom`) VALUES
(1, 'Verne', 'Jules'),
(2, 'Szac', 'Murielle'),
(3, 'Victor', 'Hugo');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `mel` varchar(40) NOT NULL,
  `nolivre` int(11) NOT NULL,
  `dateemprunt` date NOT NULL,
  `dateretour` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `nolivre` int(11) NOT NULL,
  `noauteur` int(11) NOT NULL,
  `titre` varchar(128) NOT NULL,
  `isbn13` char(13) NOT NULL,
  `anneeparution` int(11) NOT NULL,
  `resume` text NOT NULL,
  `dateajout` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`nolivre`, `noauteur`, `titre`, `isbn13`, `anneeparution`, `resume`, `dateajout`, `image`) VALUES
(1, 1, 'Le Tour du monde en quatre-vingts jours', '978201001580', 2014, 'Le Tour du monde en quatre-vingts jours est un roman d\'aventures de Jules Verne, publié en 1872. Le roman raconte la course autour du monde d\'un gentleman anglais, Phileas Fogg, qui a fait le pari d\'y parvenir en quatre-vingts jours. Il est accompagné par Jean Passepartout, son fidèle domestique français.', '2022-12-09', 'image/tourdumonde.jpg'),
(2, 1, 'Voyage au centre de la Terre', '978225301254', 1972, 'Dans la petite maison du vieux quartier de Hambourg où Axel, jeune homme assez timoré, travaille avec son oncle, l’irascible professeur Lidenbrock, géologue et minéralogiste, dont il aime la pupille, la charmante Graüben, l’ordre des choses est soudain bouleversé.\r\nDans un vieux manuscrit, Lidenbrock trouve un cryptogramme. Arne Saknussemm, célèbre savant islandais du xvie siècle, y révèle que par la cheminée du cratère du Sneffels, volcan éteint d’Islande, il a pénétré jusqu’au centre de la Terre !\r\nLidenbrock s’enflamme...', '2022-12-09', 'image/Voyage au centre de la terre.jpg'),
(3, 3, 'Les Misérables', '9782217710019', 2014, 'En 1815, Jean Valjean est libéré du bagne de Toulon après y avoir purgé une peine de dix-neuf ans : victime d\'un destin tragique, initialement condamné à cinq ans de bagne pour avoir volé un pain afin de nourrir sa famille, il voit sa peine prolongée à la suite de plusieurs tentatives d\'évasion.', '2022-12-09', 'image/les misérables.jpg'),
(4, 2, 'Le feuilleton d\'Hermès', '9782747019262', 2006, 'À peine sorti du ventre de sa mère, le voilà qui saute sur ses pieds et part découvrir le monde. Hermès est un petit curieux, avide de tout connaître, de tout comprendre. Il n’a de cesse de se faire reconnaître et aimer par son père Zeus, et de trouver sa place dans sa grande fratrie compliquée de l’Olympe, où se côtoient demi-frères et sœurs et belle-mère jalouse.\r\n\r\nJ’ai eu envie de l’accompagner dans sa quête, d’être  à ses côtés lorsqu’émerveillé il assiste à la naissance du monde ou des hommes, lorsqu’il découvre la violence et la mort mais aussi l’amour et la joie de vivre. Du fond des Enfers, au sommet de l’Olympe, des mers où navigue le vaisseau de Jason et ses Argonautes,  jusqu’au ciel où caracole Bellérophon sur son Pégase, de la monstrueuse Gorgone qu’affronte Persée jusqu’aux mystérieuses Moires qui tissent le fil de nos vies,  Hermès est celui qui nous guide vers nous-mêmes.', '2022-12-09', 'image/le feuilleton d\'hermes.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `mel` varchar(40) NOT NULL,
  `motdepasse` varchar(100) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `codepostal` int(11) NOT NULL,
  `profil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`noauteur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`mel`,`nolivre`,`dateemprunt`),
  ADD KEY `fk_emprunter_livre` (`nolivre`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`nolivre`),
  ADD KEY `fk_livre_auteur` (`noauteur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`mel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `noauteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `nolivre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `fk_emprunter_livre` FOREIGN KEY (`nolivre`) REFERENCES `livre` (`nolivre`),
  ADD CONSTRAINT `fk_emprunter_utilisateur` FOREIGN KEY (`mel`) REFERENCES `utilisateur` (`mel`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `fk_livre_auteur` FOREIGN KEY (`noauteur`) REFERENCES `auteur` (`noauteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
