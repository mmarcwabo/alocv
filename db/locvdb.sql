-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 11:20 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locvdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assurance`
--

CREATE TABLE `assurance` (
  `idassurance` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assurance`
--

INSERT INTO `assurance` (`idassurance`, `type`, `description`) VALUES
(1, 'FO', 'full omiom'),
(2, 'RC', 'responsabilité civile');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `numPermi` varchar(15) NOT NULL,
  `dateDeNaissance` date NOT NULL,
  `tel` varchar(15) NOT NULL,
  `genre` char(1) NOT NULL,
  `numNational` varchar(11) NOT NULL,
  `ville_idville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `adresse`, `numPermi`, `dateDeNaissance`, `tel`, `genre`, `numNational`, `ville_idville`) VALUES
(1, 'Passang', 'Clme', 'Himbi II, Du lac', '122348', '2017-09-12', '993803355', 'M', '12344444', 6),
(2, 'Passang', 'Clme', 'Himbi II, Du lac', '122348', '2017-09-12', '993803355', 'M', '12344444', 6),
(3, 'Passang', 'Clme', 'Himbi II, Du lac', '122348', '2017-09-12', '993803355', 'M', '12344444', 6),
(4, 'Passang', 'Clme', 'Himbi II, Du lac', '122348', '2017-09-12', '993803355', 'M', '12344444', 6);

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `idemploye` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `idfacture` int(11) NOT NULL,
  `dateFacturation` date NOT NULL,
  `montantTotal` decimal(10,0) NOT NULL,
  `reservation_idreservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `idreservation` int(11) NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `caution` decimal(10,0) NOT NULL,
  `employe_idemploye` int(11) NOT NULL,
  `client_idclient` int(11) NOT NULL,
  `voiture_idvoiture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(45) NOT NULL,
  `idOfInfos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `idville` int(11) NOT NULL,
  `nomVille` varchar(25) NOT NULL,
  `codePostal` varchar(10) NOT NULL,
  `pays` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`idville`, `nomVille`, `codePostal`, `pays`) VALUES
(1, 'Mons', '7000', 'Belgique'),
(2, 'Paris', '75000', 'France'),
(3, 'Liege', '4000', 'Belgique'),
(4, 'Marche-en-Famenne', '6900', 'Belgique'),
(5, 'Braine-le-Comte', '7090', 'Belgique'),
(6, 'Jemappes', '7012', 'Belgique'),
(7, 'Quaregnon', '7390', 'Belgique'),
(8, 'Namur', '5000', 'Belgique'),
(9, 'Charleroi', '6000', 'Belgique'),
(10, 'maubeuge', '59000', 'Belgique'),
(11, 'bruxelles', '1000', 'Belgique'),
(12, 'Gand', '9000', 'Belgique'),
(13, 'nivelles', '1400', 'Belgique'),
(14, 'hornu', '7301', 'Belgique'),
(15, 'tournai', '7500', 'Belgique'),
(16, 'mouscron', '7700', 'Belgique');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `idvoiture` int(11) NOT NULL,
  `numChassi` varchar(25) NOT NULL,
  `numPlaque` varchar(25) NOT NULL,
  `motorisation` varchar(15) NOT NULL,
  `boite` varchar(15) NOT NULL,
  `puissance` decimal(10,0) NOT NULL,
  `marque` varchar(15) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `categorie` varchar(15) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `assurance_idassurance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`idvoiture`, `numChassi`, `numPlaque`, `motorisation`, `boite`, `puissance`, `marque`, `prix`, `categorie`, `photo`, `assurance_idassurance`) VALUES
(1, '11111111', '1111111', 'diesel', 'automatique', '12', 'BMW', '1111', 'ZZZZZZ', 'default.PNG', 1),
(2, '11111111', '1111111', 'diesel', 'automatique', '12', 'BMW', '1111', 'ZZZZZZ', 'default.PNG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assurance`
--
ALTER TABLE `assurance`
  ADD PRIMARY KEY (`idassurance`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD KEY `fk_client_ville` (`ville_idville`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`idemploye`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idfacture`),
  ADD KEY `fk_facture_reservation1` (`reservation_idreservation`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`),
  ADD KEY `fk_reservation_employe1` (`employe_idemploye`),
  ADD KEY `fk_reservation_client1` (`client_idclient`),
  ADD KEY `fk_reservation_voiture1` (`voiture_idvoiture`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idville`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`idvoiture`),
  ADD KEY `fk_voiture_assurance1` (`assurance_idassurance`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assurance`
--
ALTER TABLE `assurance`
  MODIFY `idassurance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `idville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `idvoiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_client_ville` FOREIGN KEY (`ville_idville`) REFERENCES `ville` (`idville`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_facture_reservation1` FOREIGN KEY (`reservation_idreservation`) REFERENCES `reservation` (`idreservation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_employe1` FOREIGN KEY (`employe_idemploye`) REFERENCES `employe` (`idemploye`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservation_client1` FOREIGN KEY (`client_idclient`) REFERENCES `client` (`idclient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservation_voiture1` FOREIGN KEY (`voiture_idvoiture`) REFERENCES `voiture` (`idvoiture`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `fk_voiture_assurance1` FOREIGN KEY (`assurance_idassurance`) REFERENCES `assurance` (`idassurance`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
