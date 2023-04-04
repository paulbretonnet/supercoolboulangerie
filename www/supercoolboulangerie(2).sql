-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 04 Avril 2023 à 05:21
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `supercoolboulangerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
`id_commande` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse` text NOT NULL,
  `telephone` text NOT NULL,
  `code_postal` varchar(11) NOT NULL,
  `mail` text NOT NULL,
  `ville` text NOT NULL,
  `prix` text NOT NULL,
  `id_produit` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `nom`, `prenom`, `adresse`, `telephone`, `code_postal`, `mail`, `ville`, `prix`, `id_produit`) VALUES
(1, 'paul', 'bretonnet', '4 allée des tournessols', '0708334255', '18000', 'p.b@gmail.com', 'Bourges', '0.00', ''),
(2, 'bretonnet', '4 allÃ©e du coulomier', '0780334255', 'paul', '87000', 'P.bretonnet@gmail.com', 'Limoges', '0.00', ''),
(3, 'bretonnet', '4 allÃ©e du coulomier', '0780334255', 'paul', '87000', 'P.bretonnet@gmail.com', 'Limoges', '0.00', ''),
(4, 'paul', 'p.bretonnet@gmail.com', 'azaeazeazea', 'bretonnet', 'zaeazeaze', 'p.bretonnet@gmail.com', 'azeaze', '0.00', ''),
(5, 'bretonnet', '4 allÃ©e du coulomier', '0780334255', 'paul', '87000', 'P.bretonnet@gmail.com', 'Limoges', '0.00', ''),
(6, 'bretonnet', '4 allÃ©e du coulomier', '0780334255', 'paul', '87000', 'P.bretonnet@gmail.com', 'Limoges', '0.00', ''),
(7, 'azeaze', 'azeaze', 'azeaze', 'azeaze', 'azeazeazeaz', 'zaeaze', 'azeaze', '0.00', ''),
(12, '', '', '', '', '', '', '', '6.4 ', ''),
(13, '', '', '', '', '', '', '', '6.4 ', ''),
(14, '', '', '', '', '', '', '', '6.4 ', ''),
(15, '', '', '', '', '', '', '', '6.4 ', ''),
(16, '', '', '', '', '', '', '', '6.4 ', ''),
(17, '', '', '', '', '', '', '', '100000 ', ''),
(18, '', '', '', '', '', '', '', '100000 ', '');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
`id_produit` int(11) NOT NULL,
  `nom` varchar(150) DEFAULT NULL,
  `recap` text,
  `description` text,
  `prix` decimal(15,2) DEFAULT NULL,
  `image` text,
  `quantité` int(11) DEFAULT NULL,
  `categorie` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom`, `recap`, `description`, `prix`, `image`, `quantité`, `categorie`) VALUES
(1, 'baguette tradition', 'miam une bonne baguette avec tout les aromes du blé cuite de la veille mais surtout avec passion', 'une baguette de 250 g et dont le savoir faire de nos boulanger les plus aguerri l''ont rendu succulente et inoubliable', '0.80', 'http://localhost/images/Baguette-Tradition-2.png', 0, 'pain'),
(2, 'croissant', 'croissant fondant et allechant', 'Les croissants sont de petits pains en pâte levée ou feuilletée, abaissée en triangle, roulée sur elle-même et incurvée en forme de croissant de lune.', '1.00', 'https://www.rondo-online.com/sites/default/files/styles/l/public/2022-09/Croissant%20ungef%C3%BCllt_05055_1.png.webp?itok=rut8dN18', 0, 'vienoiserie'),
(3, 'Paris-Brest', 'pas besoin de faire un si long trajet pour déguster ce dessert de fin gourmet', 'Le paris-brest est une pâtisserie traditionnelle d''origine française, en forme de roue de vélo pour rendre hommage à la course cycliste Paris-Brest-Paris. Elle est composée d''une pâte à choux croquante fourrée d''une crème mousseline pralinée, parsemée d''amandes effilées.', '13.00', 'https://i0.wp.com/www.paris-brest.vn/wp-content/uploads/2021/08/Paris-Brest-Embleme.png?resize=909%2C700&ssl=1', NULL, 'patisserie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `pseudo`, `password`) VALUES
(1, 'prout', 'man', 'proutman', 'ab4f63f9ac65152575886860dde480a1'),
(2, 'paul', 'bretonnet', 'pouletos', '4dd896e9db8b4f2c58519e030312f05f'),
(3, 'boulangerie', 'owner', 'owner', 'b07c4014db3633afecb6f2f6d2878eee'),
(4, 'azeaz', 'zaeaz', 'zaeaze', 'ab4f63f9ac65152575886860dde480a1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
 ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
