-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 juil. 2021 à 00:19
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `steel_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `countact`
--

CREATE TABLE `countact` (
  `id_contact` int(11) NOT NULL,
  `entity` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `the_services` varchar(30) NOT NULL,
  `cours` varchar(45) DEFAULT NULL,
  `problemes` text DEFAULT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `content` text NOT NULL,
  `date_dajj` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id_event`, `img`, `title`, `link`, `content`, `date_dajj`) VALUES
(1, 'events/1.jpg', 'test1', 'google.com', 'this the first one I WNAT TO SEE IF IT WORK', '2021-07-24 23:23:17'),
(2, 'events/2.jpg', 'title2', 'facebook.com', 'sdhfgdshqj sfds jfijfi ', '2021-07-24 23:23:23'),
(6, 'events/4.jpg', '4tile', '', 'wooow nocefdsf', '2021-07-26 09:16:11'),
(7, 'events/5.jpg', '5mpo', '', 'nice my frind ', '2021-07-26 09:16:11'),
(8, 'events/6.jpg', '6', '', 'QS', '2021-07-26 09:34:15'),
(9, 'events/7.jpg', '7', '', 'KJ', '2021-07-26 09:34:15'),
(10, 'events/8.jpg', '8S', '', 'SSSS', '2021-07-26 09:34:15'),
(11, 'events/9.jpg', '9', '', 'yes je suis pas dcc mais pas la ', '2021-07-26 20:20:53'),
(12, 'events/10.jpg', '10', '', '', '2021-07-26 09:34:15'),
(13, 'events/11.jpg', '11', '', '', '2021-07-26 09:34:15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `countact`
--
ALTER TABLE `countact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `countact`
--
ALTER TABLE `countact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
