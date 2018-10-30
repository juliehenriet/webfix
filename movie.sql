-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 oct. 2018 à 17:30
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
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
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

INSERT INTO `movie` (`id`, `title`, `description`, `video_link`, `cover`, `released_at`, `category_id`) VALUES
(1, 'Dragon 3 ', 'Agens partis Gerontium Constantius hiemem dubium comitem exulari ambitioso dubium.', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/JiERv2rc80o\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'cover', 'released_at', 1),
(3, 'a dog\'s way home', 'dfdsfhdskqfhkdsqfhkjdsfdsf', '  <iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/SS0rTQz_Ggw\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '', '', 0),
(4, 'Aquaman', 'scdvfswvwxvxcvdfgsdgdfgfsdgfdsgrfdsgfdsgfsdgfdsg', '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/Ur7sXaC0t6E\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '', '', 0),
(5, 'the king would be king', 'dsfdsqsqdqDFGHYJUIKOLPML/?JHNFGBVDCSXQWaz\'Ã¨yuhndsx', '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/JMGsCDGYjO0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '', '', 0),
(6, 'broly', 'edscfdsfqdsfds<f', '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/tY7qf9Cd21g\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
