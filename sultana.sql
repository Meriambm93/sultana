-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 05 juil. 2020 à 18:45
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sultana_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `is_new` tinyint(1) NOT NULL
) AUTO_INCREMENT=10 ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clothes`
--

INSERT INTO `clothes` (`id`, `title`, `path`, `price`, `description`, `is_new`) VALUES
(2, 'Soumaya', 'public/images/products/clothes/abaya_tulle.jpg', 125, 'Cette magnifique abaya pour occasions spéciales en édition limitée est tout! Tulle beige avec des fleurs brodées partout, avec une touche de rose et parsemé de cristaux Swarovski. Détaillé avec ruban de velours rose et plumes d\'autruche, droit de la piste.', 0),
(3, 'Jasmine', 'public/images/products/clothes/dubai.jpg', 110, 'Superbe abaya en pur lin dit style \"été\". Une abaya coupe classique avec des fleurs artisanales en brocart blanc.Il s\'agit de déclarations de style sans effort!\r\nédition limitée.', 0),
(4, 'Moulouda', 'public/images/products/clothes/nyc.jpg', 100, 'L\'abaya sportive NYC est parfaitement conçue pour le confort, le style et la modestie. Avec des garnitures en métal doré brillant sur l\'encolure et la fermeture éclair, des détails de poche et des poignets côtelés en coton pour lui donner un look sportif confortable. ', 0),
(5, 'Mériam', 'public/images/products/clothes/abaya_or.jpg', 130, 'La cape par excellence parfaite pour une mariée ou une occasion très spéciale comme l\'Aïd. Brodée à la main avec amour, cette cape est un incontournable! cape en crêpe à col montant ornée sur le devant et le dos des épaules jusqu\'à l\'ouverture du bras. ', 0),
(6, 'Cléopatre', 'public/images/products/new_collection/sequins_tulles.jpg', 145, 'Si vous cherchez à faire une déclaration, alors cette abaya est un must have! Cette magnifique abaya à paillettes d\'or semi-mat en tulle micro plissé de luxe avec tulle souple est tout. Édition limitée!  ', 1),
(7, 'Lalla', 'public/images/products/new_collection/white.jpg', 159, 'Si vous cherchez une abaya à porter lors de votre mariage, alors celle-ci est faite pour vous! Broderie à la main exquise et abaya doublée de soie \"Chikan kari\" finie à la main avec des détails de manches perlés à la main. Longueur 60 \"\r\n\r\nLa longueur et la taille peuvent être faites sur mesure. Envoyez-nous vos coordonnées afin qu\'elles soient parfaites pour votre grand jour.', 1),
(8, 'Sofia', 'public/images/products/new_collection/rosa.jpg', 180, 'Superbe abaya blanche, en crêpe promet de faire gazouiller tout le monde! avec 8 oiseaux brodés individuels sur chaque manche bouffante, passepoil contrasté, poches et épaules dissimulées, bouton dissimulé. Nous avons ajouté des épaulettes souples (amovibles) pour accentuer la tendance actuelle surdimensionnée.', 1),
(9, 'Salma', 'public/images/products/new_collection/vanilla.jpg', 180, 'Cette abaya est tout au sujet du luxe. Magnifiquement conçu en velours de soie léger, avec des détails en tulle de soie, des embellissements de manches brodés à la main et un superbe motif au dos avec votre initiale personnelle. Digne d\'une reine!', 1);

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) AUTO_INCREMENT=10 ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `favorites`
--

INSERT INTO `favorites` (`favorite_id`, `title`, `path`) VALUES
(1, 'Abaya blanche', 'public/images/products/favorite/abaya_blanche_2.jpg'),
(2, 'Abaya brocar', 'public/images/products/favorite/abaya_brocar.jpg'),
(3, 'Abaya beige bleu', 'public/images/products/favorite/beige_bleu.jpg'),
(4, 'Abaya grise', 'public/images/products/favorite/grey1.jpg'),
(5, 'Abaya rose', 'public/images/products/favorite/rose.jpg'),
(6, 'Abaya smoking', 'public/images/products/favorite/smoking.jpg'),
(7, 'Abaya sport', 'public/images/products/favorite/sport.jpg'),
(8, 'Abaya', 'public/images/products/favorite/w18.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `insta_photo`
--

CREATE TABLE `insta_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) AUTO_INCREMENT=10 ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `insta_photo`
--

INSERT INTO `insta_photo` (`id`, `title`, `path`) VALUES
(1, 'Abaya marron', 'public/images/products/instagram/abaya_marron.jpg'),
(2, 'Abaya combinaison', 'public/images/products/instagram/combi.jpg'),
(3, 'Abaya dos', 'public/images/products/instagram/dos.jpg'),
(4, 'Abaya mignon', 'public/images/products/instagram/mignon.png'),
(5, 'Abaya palmier', 'public/images/products/instagram/palmier.png'),
(6, 'Abaya plage', 'public/images/products/instagram/plage.png'),
(7, 'Abaya sequin', 'public/images/products/instagram/sequin.jpg'),
(8, 'Abaya siri', 'public/images/products/instagram/siri.png');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
) AUTO_INCREMENT=3 ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`lastname`, `firstname`, `email`, `pass`, `id`) VALUES
('Hello', 'World', 'helloworld@gmail.com', '$2y$10$9h4ySXo7HaZj3N4mVBz9gO/7dWxwWHY7gJB.8QGiA119A6sF6LlWe', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clothes`
--




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;