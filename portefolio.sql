-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 26 Avril 2015 à 16:48
-- Version du serveur :  5.5.33-MariaDB
-- Version de PHP :  5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `portefolio`
--
CREATE DATABASE IF NOT EXISTS `portefolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `portefolio`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('Melo', '96499afb91678375279dd108222754d9864be63e');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE IF NOT EXISTS `projets` (
`id` int(11) NOT NULL,
  `url_project` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `url_project`, `screen`, `title`, `description`, `category`, `date`) VALUES
(2, 'http://localhost:8080/maquette 1/', 'Maquette-1.png', 'Maquette_1', 'Maquette HTML/CSS', 'html', '2015-04-16'),
(3, 'http://localhost:8080/maquette 2/', 'Maquette-2.html.png', 'Maquette 2', 'Maquette 2 en HTML/CSS', 'html', '2015-04-26'),
(4, 'http://localhost:8080/maquette 3/', 'Maquette-3.html.png', 'Maquette 3', 'Maquette en HTML/CSS', 'html', '2015-04-26'),
(5, 'http://localhost:8080/maquette Responsive/', 'Maquette-Responsive.html.png', 'Maquette Responsive', 'Maquette Responsive en HTML/CSS', 'html', '2015-04-26'),
(6, 'http://localhost:8080/jQuery/', 'jQuery.html-.png', 'Jquery', 'Slider,drag`n drop,calculatrice en jquery.', 'js', '2015-04-26'),
(7, 'http://localhost:8080/2048/', '2048.html.png', '2048', 'Jeux 2048 en Javascript', 'js', '2015-04-26'),
(8, 'http://localhost:8080/my meetic/', 'My_meetic.png', 'My Meetic', 'Mini site de rencontre', 'PHP', '2015-04-26'),
(10, 'http://localhost:8080/my weblog/', 'Weblog.png', 'My weblog', 'Blog avec inscription connexion,liste d''articles ...', 'Projet', '2015-04-26'),
(11, 'http://localhost:8080/tweet academie/', 'My_tweeter.png', 'My tweeter', 'UN twitter sans tweet', 'Projet', '2015-04-26'),
(13, 'http://localhost:8080/my maps/', 'My-Maps.png', 'My Maps', 'Site avec l''utilisation de Google Maps API', 'JsA', '2015-04-26'),
(14, 'http://localhost:8080/my paint/', 'My-Paint.png', 'My Paint', 'Paint en Javascript Objet', 'JsA', '2015-04-26'),
(15, 'http://localhost:8080/MVC blog/', 'MVC-Blog.png', 'MVC Blog', 'Blog avec le framework CakePHP, sans CSS.', 'MVC', '2015-04-26'),
(16, 'http://localhost:8080/my cinema/', 'My_cinema.png', 'My Cinema', 'Site de recherche de film,abonnements ..', 'PHP', '2015-04-26');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
