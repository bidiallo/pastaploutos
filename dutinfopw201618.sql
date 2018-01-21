-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 19 Janvier 2018 à 19:07
-- Version du serveur: 5.5.58-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dutinfopw201618`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE IF NOT EXISTS `accueil` (
  `idaccueil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `messageaccueil` varchar(250) NOT NULL,
  PRIMARY KEY (`idaccueil`),
  UNIQUE KEY `idaccueil` (`idaccueil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`idaccueil`, `messageaccueil`) VALUES
(0, 'Bonjour, bienvenue !!');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idadmin`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `pseudo`) VALUES
(0, 'bine08'),
(1, 'campao');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `idauteur` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nomauteur` varchar(255) NOT NULL,
  `prenomauteur` varchar(255) NOT NULL,
  PRIMARY KEY (`idauteur`),
  UNIQUE KEY `idauteur` (`idauteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`idauteur`, `nomauteur`, `prenomauteur`) VALUES
(1, 'Rowling', 'J.K'),
(2, 'Fitzgeralds', 'Scott'),
(3, 'Dicker', 'Joel'),
(4, 'Dumas', 'Alexandre');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `idgenre` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nomgenre` varchar(255) NOT NULL,
  PRIMARY KEY (`idgenre`),
  UNIQUE KEY `idgenre` (`idgenre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`idgenre`, `nomgenre`) VALUES
(1, 'Fantastique'),
(2, 'Roman'),
(3, 'Roman Policier');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE IF NOT EXISTS `livre` (
  `idlivre` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `idauteur` bigint(20) unsigned NOT NULL,
  `idgenre` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idlivre`),
  UNIQUE KEY `id` (`idlivre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`idlivre`, `titre`, `resume`, `idauteur`, `idgenre`) VALUES
(2, 'Pauline', 'C''est l''histoire d''une femme blabla', 4, 2),
(3, 'La Verite sur l''affaire Harry Quebert', 'Meurtre d''une jeune fille et d''un ecrivain acuse de son meurtre', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `p_ajouter_recette`
--

CREATE TABLE IF NOT EXISTS `p_ajouter_recette` (
  `id_user` bigint(20) unsigned NOT NULL,
  `id_recette` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_user`,`id_recette`),
  KEY `fk_recette` (`id_recette`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `p_categorie`
--

CREATE TABLE IF NOT EXISTS `p_categorie` (
  `id_cat` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_cat`),
  UNIQUE KEY `nom_categorie` (`nom_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `p_categorie`
--

INSERT INTO `p_categorie` (`id_cat`, `nom_categorie`) VALUES
(3, 'Apéritif'),
(4, 'Dessert'),
(1, 'Entrée'),
(6, 'Halloween'),
(5, 'Noel'),
(2, 'Plat');

-- --------------------------------------------------------

--
-- Structure de la table `p_commenter`
--

CREATE TABLE IF NOT EXISTS `p_commenter` (
  `id_commentaire` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(200) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_recette` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `p_commenter`
--

INSERT INTO `p_commenter` (`id_commentaire`, `commentaire`, `id_user`, `id_recette`) VALUES
(1, 'test commentaire', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `p_composer`
--

CREATE TABLE IF NOT EXISTS `p_composer` (
  `quantite_composer` int(11) DEFAULT NULL,
  `id_ingredient` int(11) NOT NULL,
  `id_recette` int(11) NOT NULL,
  PRIMARY KEY (`id_ingredient`,`id_recette`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `p_consulter`
--

CREATE TABLE IF NOT EXISTS `p_consulter` (
  `id_user` int(11) NOT NULL,
  `id_recette` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_recette`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `p_famille_ingredient`
--

CREATE TABLE IF NOT EXISTS `p_famille_ingredient` (
  `id_familleIngredient` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_familleIngredient` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_familleIngredient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `p_famille_ingredient`
--

INSERT INTO `p_famille_ingredient` (`id_familleIngredient`, `nom_familleIngredient`) VALUES
(1, 'légume'),
(2, 'produit laitier'),
(3, 'fruit'),
(4, 'viande'),
(5, 'poisson'),
(6, 'Céréale'),
(7, 'Féculent'),
(8, 'Boisson'),
(10, 'Epice'),
(11, 'Condiment');

-- --------------------------------------------------------

--
-- Structure de la table `p_favoris`
--

CREATE TABLE IF NOT EXISTS `p_favoris` (
  `id_favoris` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_recette` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_favoris`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `p_favoris`
--

INSERT INTO `p_favoris` (`id_favoris`, `id_recette`, `id_user`) VALUES
(1, 1, 15),
(2, 4, 21),
(3, 1, 15),
(4, 1, 20),
(5, 2, 18),
(6, 2, 22),
(7, 3, 19),
(8, 3, 20),
(9, 4, 15),
(10, 5, 18);

-- --------------------------------------------------------

--
-- Structure de la table `p_ingredient`
--

CREATE TABLE IF NOT EXISTS `p_ingredient` (
  `id_ingredient` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_ingredient` varchar(25) DEFAULT NULL,
  `id_unite` int(11) NOT NULL,
  `id_familleIngredient` int(11) NOT NULL,
  PRIMARY KEY (`id_ingredient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Contenu de la table `p_ingredient`
--

INSERT INTO `p_ingredient` (`id_ingredient`, `nom_ingredient`, `id_unite`, `id_familleIngredient`) VALUES
(1, 'tomate', 1, 1),
(2, 'oignon', 1, 1),
(3, 'patate', 1, 7),
(4, 'Epinard', 1, 1),
(5, 'Concombre', 1, 1),
(6, 'courgette', 1, 1),
(7, 'courge', 1, 1),
(8, 'potiron', 1, 1),
(9, 'Artichaut', 1, 1),
(10, 'Aubergine', 1, 1),
(11, 'Blette', 1, 1),
(12, 'Cardon', 1, 1),
(13, 'lait', 2, 2),
(14, 'Beurre', 1, 2),
(15, 'gruyère', 1, 2),
(16, 'Emmental', 1, 2),
(17, 'Fromage de chèvre', 1, 2),
(18, 'Bleu', 1, 2),
(19, 'Roquefort', 1, 2),
(20, 'Viande haché', 1, 4),
(21, 'Steack', 1, 4),
(22, 'Saucisse de porc', 1, 4),
(23, 'Côte de beuf', 1, 4),
(24, 'Côte de porc', 1, 4),
(25, 'Côte de veau', 1, 4),
(26, 'Beuf', 1, 4),
(27, 'Porc', 1, 4),
(28, 'Veau', 1, 4),
(29, 'Dinde', 1, 4),
(30, 'Poulet', 1, 4),
(31, 'Volaille', 1, 4),
(32, 'Bar', 1, 5),
(33, 'Cabillaud', 1, 5),
(34, 'Carpe', 1, 5),
(35, 'Dorade', 1, 5),
(36, 'Saumon', 1, 5),
(37, 'Féra', 1, 5),
(38, 'Homard', 1, 5),
(39, 'Merlu', 1, 5),
(40, 'Sardine', 1, 5),
(41, 'Thon', 1, 5),
(42, 'Farine', 1, 7),
(43, 'Pâtes', 1, 7),
(44, 'Pain', 1, 7),
(45, 'Eau', 1, 8),
(46, 'Vin blanc', 1, 8),
(47, 'Vin rouge', 1, 8),
(48, 'Ananas', 1, 3),
(49, 'Pomme', 1, 3),
(50, 'Poire', 1, 3),
(51, 'Carotte', 1, 1),
(52, 'Maïs', 1, 6),
(53, 'Mozarella', 1, 9),
(54, 'Seigle', 1, 6),
(55, 'Avoine', 1, 6),
(56, 'Orge', 1, 6),
(57, 'Sel', 1, 11),
(58, 'Poivre', 1, 10),
(59, 'Huile d''olive', 1, 11),
(60, 'Crème fraiche', 1, 2),
(61, 'Vinaigre balsamique', 1, 11),
(62, 'Thym', 1, 11),
(63, 'Agneau', 1, 4),
(64, 'Ail', 1, 11),
(65, 'Echalotte', 1, 11),
(66, 'Canard', 1, 4),
(67, 'Foie gras', 1, 4),
(68, 'Amande', 1, 6),
(69, 'Avocat', 1, 1),
(70, 'Bacon', 1, 4),
(71, 'Baguette', 1, 2),
(72, 'Banane', 1, 3),
(73, 'Basilic', 1, 11),
(74, 'Bière', 2, 8),
(75, 'Biscotte', 1, 2),
(76, 'Oeuf', 1, 4),
(77, 'Blette', 1, 1),
(78, 'Calamar', 1, 5),
(79, 'Camembert', 1, 2),
(80, 'Coulis de tomate', 2, 1),
(81, 'Couscous', 1, 7),
(82, 'Crème épaisse', 2, 2),
(83, 'Crème légère', 1, 2),
(84, 'Curry', 1, 10),
(85, 'Jambon', 1, 4),
(86, 'Feta', 1, 2),
(87, 'lardon', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `p_recette`
--

CREATE TABLE IF NOT EXISTS `p_recette` (
  `id_recette` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre_recette` varchar(30) DEFAULT NULL,
  `description_recette` text,
  `niv_difficulte_recette` int(11) DEFAULT NULL,
  `cout_recette` int(11) DEFAULT NULL,
  `is_vegetarien` tinyint(1) DEFAULT NULL,
  `is_favoris` tinyint(1) NOT NULL,
  `photo_recette` text,
  `nbPersonne_recette` int(11) DEFAULT NULL,
  `id_ingredient` int(11) NOT NULL,
  `recette_publie` tinyint(1) DEFAULT NULL,
  `tpsPreparation_recette` int(11) DEFAULT NULL,
  `tpsCuisson_recette` int(11) DEFAULT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_recette`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `p_recette`
--

INSERT INTO `p_recette` (`id_recette`, `titre_recette`, `description_recette`, `niv_difficulte_recette`, `cout_recette`, `is_vegetarien`, `is_favoris`, `photo_recette`, `nbPersonne_recette`, `id_ingredient`, `recette_publie`, `tpsPreparation_recette`, `tpsCuisson_recette`, `id_cat`) VALUES
(1, 'Pâtes bolognaise', 'Couper et éplucher les tomates.\r\nFaire revenir dans une casserole un fond d''huile d''olive et un oignon épluché. \r\nLaisser boullir ....', 2, 1, 1, 0, 'images/pates3.jpg', 6, 1, 1, 60, 30, 2),
(2, 'Pâtes carbonara', 'Cuire les pâtes dans un grand volume d''oeuf bouillante salée. \r\nEmincer les oignons et les faire revenir à la poêle. Dès qu''ils ont bien dorés, y ajouter les lardons. \r\nPréparer dans un saladier la crème fraîche, les oeufs, le sel, le poivre et mélanger. \r\nRetirer les lardons du feu dès qu''ils sont dorés et les ajouter à la crème. \r\nUne fois les pâtes cuite al dente, les égoutter et y incorporer la crème. \r\nRemettre sur le feu si le plat a refroidi.\r\nServir et bon appétit ! \r\n', 1, 1, 0, 0, 'images/pates12.jpg', 4, 87, 1, 20, 10, 2),
(3, 'Spaghetti de courgettes', 'A l''aide d''une julienne ou d''une mandoline, réaliser des spaghetti de courgettes (la quantité est impressionnante mais ça va réduire à la cuisson). \r\nHacher l''ail finement. \r\nLaver et couper les tomates cerise en 2. \r\nDans une poêle, faire revenir l''ail, le persil et les tomates avec un peu d''huile d''olive. \r\nAjouter les spaghettis et laisser cuire 10-15 minutes en remuant régulièrement. Saler et poivrer. ', 1, 1, 1, 0, 'images/pates.jpg', 4, 6, 1, 35, 10, 2),
(4, 'Spaghetti au saumon', 'Cuire les spaghetti sans gluten Schär dans un grand volume d''eau bouillante salée pendant 9 à 10 minutes. \r\nPendant ce temps, découper le saumon en lanières et en faire revenir la moitié dans le beurre durant quelques petites minutes. Déglacer au vin blanc en écrasant un peu le saumon avec une cuillère. Ajouter le reste du saumon et la crème. Egoutter les pâtes puis les ajouter à la préparation. Remettre sur le feu quelques instants afin que l''ensemble soit bien chaud. ', 2, 2, 0, 0, 'images/pates4.jpg', 4, 36, 1, 30, 9, 2),
(5, 'gratin de pâtes', 'Cuire les coquillettes à l''eau salée. \r\nPendant ce temps, faire revenir les lardons. \r\nCouper la tomate en dés et les champignons en lamelles.\r\nMélanger dans un plat à gratin les légumes, les lardons et les pâtes.\r\nAjouter la crème fraîche.\r\nTerminer par une généreuse couche de gruyère râpé. \r\nEnfourner à four chaud (Th7) et laisser cuire jusqu''à ce que le gruyère prenne une jolie couleur dorée. ', 1, 1, 0, 0, 'images/pates24.jpeg', 2, 16, 1, 15, 10, 2),
(7, 'test', 'test', 1, 1, 1, 0, 'images/test2.jpg', 1, 1, 0, 10, 10, 1),
(8, 'baba', 'baba', 1, 1, 1, 0, 'images/pates20.jpg', 0, 0, 0, 0, 3, 0),
(10, 'Recette de Noël', 'Laver et épépiner les poivrons et les couper en dés. \r\nLes faire revenir dans une casserole à l''huile d''olive. Faire cuire les pâtes. saler, poivrer et mettre des herbes de provence sur les poivrons, baisser le feu et laisser cuire 10 mn. Les poivrons vont confir. \r\nEgoutter les pâtes. Ajouter le chèvre en petits morceaux sur les poivrons et la crème fraîche. \r\nLaisser cuire 2 minutes en remuant et servir sur les pâtes. ', 1, 1, 1, 0, 'images/noel2.jpg', 4, 12, 1, 15, 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `p_token`
--

CREATE TABLE IF NOT EXISTS `p_token` (
  `id_token` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `token` text,
  `date_token` datetime DEFAULT NULL,
  `tps_token` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `p_token`
--

INSERT INTO `p_token` (`id_token`, `token`, `date_token`, `tps_token`) VALUES
(1, NULL, '2018-01-19 12:47:05', 300),
(2, NULL, '2018-01-19 13:04:57', 300);

-- --------------------------------------------------------

--
-- Structure de la table `p_unite`
--

CREATE TABLE IF NOT EXISTS `p_unite` (
  `id_unite` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `valeur_unite` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_unite`),
  UNIQUE KEY `valeur_unite` (`valeur_unite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `p_unite`
--

INSERT INTO `p_unite` (`id_unite`, `valeur_unite`) VALUES
(1, 'gramme'),
(2, 'litre');

-- --------------------------------------------------------

--
-- Structure de la table `p_user`
--

CREATE TABLE IF NOT EXISTS `p_user` (
  `id_user` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `prenom_user` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `pseudo_user` varchar(25) CHARACTER SET utf32 DEFAULT NULL,
  `mail_user` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `mdp_user` varchar(60) CHARACTER SET utf32 DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `p_user`
--

INSERT INTO `p_user` (`id_user`, `nom_user`, `prenom_user`, `pseudo_user`, `mail_user`, `mdp_user`, `admin`) VALUES
(15, 'REZIG', 'Samy', 'srezig', 'samy@gmail.com', '$2y$10$X/5IKG3as7dGMr8zJAbfIuK3D0cNZ4vR7M0s0Q84ldxJq5FXfplv6', 1),
(18, 'pierre', 'paul', 'admin', 'a@gmail.com', '$2y$10$NhWe4qZY9mWnMQBU99Ur6evnzYXTD5mGtBb1QcPIZGGa7vYIzJrda', 1),
(19, 'dupond', 'toto', 'tdupond', 'tdupond@gmail.com', '$2y$10$R86oKZfmhC8OxirqQaKIPuP1Qht.wtRJvkUMTW/c.vLR2gHNJTCaC', 0),
(20, 'Diallo', 'Bineta', 'bine', 'bine@gmail.com', '$2y$10$HvH7DRZ4riZnhUyy8gJoDee.vYvm6yac7eNJop29PGHO3Bhrsv63e', 0),
(21, 'bine', 'bine', 'bineta', 'b@b.b', '$2y$10$PhD602uZ.bu0V79FcMeB.eirxw3.J8gDpW8E8KkympxK32ReOJxEK', 0),
(22, 'cam', 'cam', 'cam', 'cam@cam.c', '$2y$10$DPTw52DhnLaOM/uXx0H4aeu05z/vWq9SA/3Iq.pNwZhT5XXfY4BMi', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `p_ajouter_recette`
--
ALTER TABLE `p_ajouter_recette`
  ADD CONSTRAINT `fk_recette` FOREIGN KEY (`id_recette`) REFERENCES `p_recette` (`id_recette`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `p_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
