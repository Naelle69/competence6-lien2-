-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 03 jan. 2023 à 17:01
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitepokgourmet`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `commentaire` int(40) NOT NULL AUTO_INCREMENT,
  `niveauSatisfaction` int(5) DEFAULT NULL,
  `imageCommande` decimal(10,0) DEFAULT NULL,
  `idRestaurant` int(4) DEFAULT NULL,
  PRIMARY KEY (`commentaire`),
  KEY `FK_Avis_idRestaurant` (`idRestaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(4) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(45) DEFAULT NULL,
  `dateNaissance` int(45) DEFAULT NULL,
  `preferenceClient` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(4) NOT NULL AUTO_INCREMENT,
  `canalCommande` varchar(100) DEFAULT NULL,
  `idFacture` int(4) DEFAULT NULL,
  `idRestaurant` int(4) DEFAULT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `FK_Commande_idFacture` (`idFacture`),
  KEY `FK_Commande_idRestaurant` (`idRestaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandefournisseur`
--

DROP TABLE IF EXISTS `commandefournisseur`;
CREATE TABLE IF NOT EXISTS `commandefournisseur` (
  `idResponsable` int(4) NOT NULL AUTO_INCREMENT,
  `nomResponsable` varchar(40) DEFAULT NULL,
  `detailCommande` varchar(100) DEFAULT NULL,
  `idFournisseur` int(4) DEFAULT NULL,
  `idRestaurant` int(4) DEFAULT NULL,
  PRIMARY KEY (`idResponsable`),
  KEY `FK_CommandeFournisseur_idFournisseur` (`idFournisseur`),
  KEY `FK_CommandeFournisseur_idRestaurant` (`idRestaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `communicationmarketing`
--

DROP TABLE IF EXISTS `communicationmarketing`;
CREATE TABLE IF NOT EXISTS `communicationmarketing` (
  `idCommunication` int(4) NOT NULL AUTO_INCREMENT,
  `typeCommunication` varchar(100) DEFAULT NULL,
  `idRestaurant` int(4) DEFAULT NULL,
  PRIMARY KEY (`idCommunication`),
  KEY `FK_CommunicationMarketing_idRestaurant` (`idRestaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dirige`
--

DROP TABLE IF EXISTS `dirige`;
CREATE TABLE IF NOT EXISTS `dirige` (
  `idManager` int(4) NOT NULL AUTO_INCREMENT,
  `idService` int(4) NOT NULL,
  PRIMARY KEY (`idManager`,`idService`),
  KEY `FK_dirige_idService` (`idService`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `idEmploye` int(4) NOT NULL AUTO_INCREMENT,
  `nomPersonnel` int(50) DEFAULT NULL,
  `telephoneEmploye` int(10) DEFAULT NULL,
  `mailEmploye` varchar(50) DEFAULT NULL,
  `idService` int(4) DEFAULT NULL,
  PRIMARY KEY (`idEmploye`),
  KEY `FK_Equipe_idService` (`idService`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `idFacture` int(4) NOT NULL AUTO_INCREMENT,
  `montant` int(50) DEFAULT NULL,
  `moyenPaiement` int(40) DEFAULT NULL,
  `numeroCB` int(20) DEFAULT NULL,
  `nombreCouvert` int(50) DEFAULT NULL,
  `date` int(10) DEFAULT NULL,
  `numeroTable` int(50) DEFAULT NULL,
  `heure` int(10) DEFAULT NULL,
  PRIMARY KEY (`idFacture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `idFournisseur` int(4) NOT NULL AUTO_INCREMENT,
  `adresseFournisseur` varchar(50) DEFAULT NULL,
  `telephoneFournisseur` int(15) DEFAULT NULL,
  `nomFournisseur` int(10) DEFAULT NULL,
  PRIMARY KEY (`idFournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `idManager` int(4) NOT NULL AUTO_INCREMENT,
  `nomManager` varchar(20) DEFAULT NULL,
  `telephoneManager` varchar(10) DEFAULT NULL,
  `mailManager` varchar(50) DEFAULT NULL,
  `idRestaurant` int(4) DEFAULT NULL,
  PRIMARY KEY (`idManager`),
  KEY `FK_Manager_idRestaurant` (`idRestaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `idrecette` int(4) NOT NULL AUTO_INCREMENT,
  `image` varchar(20) NOT NULL,
  `titre1` text NOT NULL,
  `titre2` text NOT NULL,
  PRIMARY KEY (`idrecette`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`idrecette`, `image`, `titre1`, `titre2`) VALUES
(1, 'poke-saumon2.jpg', 'Recette 1', 'Pok\'Saumon'),
(2, 'poke-thon.jpg', 'Recette 2', 'Pok\'Thon'),
(3, 'poke-vegan.jpg', 'Recette 3', 'Pok\'Vegan');

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `idRestaurant` int(4) NOT NULL AUTO_INCREMENT,
  `idClient` int(4) NOT NULL,
  `canalReservation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idRestaurant`,`idClient`),
  KEY `FK_reserver_idClient` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `idRestaurant` int(4) NOT NULL AUTO_INCREMENT,
  `adresseRestaurant` varchar(250) DEFAULT NULL,
  `nomRestaurant` varchar(50) DEFAULT NULL,
  `telephoneRestaurant` int(10) DEFAULT NULL,
  `mailRestaurant` varchar(25) DEFAULT NULL,
  `dirigeant` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idRestaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `idService` int(4) NOT NULL AUTO_INCREMENT,
  `heureDebut` int(50) DEFAULT NULL,
  `heureFin` int(50) DEFAULT NULL,
  PRIMARY KEY (`idService`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `textearticle`
--

DROP TABLE IF EXISTS `textearticle`;
CREATE TABLE IF NOT EXISTS `textearticle` (
  `idtexte` int(4) NOT NULL,
  `soustitre` text NOT NULL,
  `texte` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_Avis_idRestaurant` FOREIGN KEY (`idRestaurant`) REFERENCES `restaurant` (`idRestaurant`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_Commande_idFacture` FOREIGN KEY (`idFacture`) REFERENCES `facture` (`idFacture`),
  ADD CONSTRAINT `FK_Commande_idRestaurant` FOREIGN KEY (`idRestaurant`) REFERENCES `restaurant` (`idRestaurant`);

--
-- Contraintes pour la table `commandefournisseur`
--
ALTER TABLE `commandefournisseur`
  ADD CONSTRAINT `FK_CommandeFournisseur_idFournisseur` FOREIGN KEY (`idFournisseur`) REFERENCES `fournisseur` (`idFournisseur`),
  ADD CONSTRAINT `FK_CommandeFournisseur_idRestaurant` FOREIGN KEY (`idRestaurant`) REFERENCES `restaurant` (`idRestaurant`);

--
-- Contraintes pour la table `communicationmarketing`
--
ALTER TABLE `communicationmarketing`
  ADD CONSTRAINT `FK_CommunicationMarketing_idRestaurant` FOREIGN KEY (`idRestaurant`) REFERENCES `restaurant` (`idRestaurant`);

--
-- Contraintes pour la table `dirige`
--
ALTER TABLE `dirige`
  ADD CONSTRAINT `FK_dirige_idManager` FOREIGN KEY (`idManager`) REFERENCES `manager` (`idManager`),
  ADD CONSTRAINT `FK_dirige_idService` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `FK_Equipe_idService` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`);

--
-- Contraintes pour la table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `FK_Manager_idRestaurant` FOREIGN KEY (`idRestaurant`) REFERENCES `restaurant` (`idRestaurant`);

--
-- Contraintes pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `FK_reserver_idClient` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`),
  ADD CONSTRAINT `FK_reserver_idRestaurant` FOREIGN KEY (`idRestaurant`) REFERENCES `restaurant` (`idRestaurant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
