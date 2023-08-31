-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 31 Août 2023 à 20:58
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `albums`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `img` varchar(350) NOT NULL,
  `artiste` varchar(50) NOT NULL,
  `nmbDePistes` int(11) NOT NULL,
  `dateDeSortie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Contenu de la table `albums`
--

INSERT INTO `albums` (`id`, `nom`, `img`, `artiste`, `nmbDePistes`, `dateDeSortie`) VALUES
(1, 'hypochondriac', 'https://hdmusic.cc/uploads/posts/2022-12/1670058726_cover.jpg', 'brakence', 13, '2022-12-02'),
(2, 'punk2', 'https://t2.genius.com/unsafe/600x600/https://images.genius.com/e5d4c78ed60d5bd2a15196e5c2e2df9f.1000x1000x1.jpg', 'brakence', 11, '2020-07-01'),
(3, 'R.Y.C.', 'https://consequenceofsound.net/wp-content/uploads/2019/10/mura-masa-ryc-artwork-cover.jpg?quality=80', 'Mura Masa', 11, '2020-01-17'),
(4, 'Punisher', 'https://s3.amazonaws.com/thumbnails.thecrimson.com/photos/2020/06/28/114108_1345084.jpg.1500x1500_q95_crop-smart_upscale.jpg', 'Phoebe Bridgers', 11, '2020-06-18');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
