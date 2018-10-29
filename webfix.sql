-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 29 oct. 2018 à 17:24
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webfix`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `id` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcategory`, `id`, `name`) VALUES
(1, '1', 'action');

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `idmovie` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `video_link` text NOT NULL,
  `cover` varchar(45) NOT NULL,
  `released_at` varchar(45) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`idmovie`, `title`, `description`, `video_link`, `cover`, `released_at`, `category_id`) VALUES
(1, 'Dragon 3 ', 'Agens partis Gerontium Constantius hiemem dubium comitem exulari ambitioso dubium.', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/JiERv2rc80o\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'cover', 'released_at', 1);

-- --------------------------------------------------------

--
-- Structure de la table `movie_has_category`
--

CREATE TABLE `movie_has_category` (
  `movie_idmovie` int(11) NOT NULL,
  `category_idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `id` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `token` datetime NOT NULL,
  `token_expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Index pour la table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idmovie`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `movie_has_category`
--
ALTER TABLE `movie_has_category`
  ADD PRIMARY KEY (`movie_idmovie`,`category_idcategory`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `movie`
--
ALTER TABLE `movie`
  MODIFY `idmovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`idcategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
