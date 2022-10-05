-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 09:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licenta`
--

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `id` int(8) NOT NULL,
  `nume` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `parola` varchar(200) NOT NULL,
  `imagine` varchar(150) NOT NULL,
  `telefon` int(10) NOT NULL,
  `adresa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`id`, `nume`, `email`, `username`, `parola`, `imagine`, `telefon`, `adresa`) VALUES
(1, 'Popescu Daniel', 'popsdaniel@yahoo.com', 'PopescuD', 'daniel', '', 0, ''),
(2, 'Mihu Daniela', 'bodytechsstudio@gmail.com', 'MihuD', '123', '', 0, ''),
(3, 'Rram', 'robert_luca95@yahoo.com', 'sds', '$2y$10$djfBLEhQpgNtitEsQSSadeRwPKIkm/aSlhIGsspEnGuZRbrpyHvDe', '', 0, ''),
(4, 'Ram', 'ramona.gluca98@gmail.com', 'Rammm', '$2y$10$IYNiNjqvnNDzcS3O/HnFIOEzVDC.txhADrEMpntmweeMwMmJ0AE26', '2.jpg', 756534765, 'Oras Cluj-Napoca, str'),
(5, 'Mihu Daniela', 'ramona.georgiana.luca@stud.ubbcluj.ro', 'MihuDani', '$2y$10$VMBjjdWotqpZCty5ANoxDufyq0DWElpByXnfPN8QwJi9xBljCX86q', '', 7565, ''),
(6, 'Luca Elena', 'elena.luca72@yahoo.com', 'LucaE', '$2y$10$YF9ft9MpNqNmUK8xB7Ls2.R5V8FQaFHS5w.JlwM68aN4d.UhRFYU2', 'dss.jpg', 749428896, 'Oras Cluj-Napoca'),
(9, 'Luca Ramona', 'ramona.luca@gmail.com', 'RamonaL', '$2y$10$6QVPKjvH4rw.TMHiQEDiFuO57R8VILcW2mf/lZoEJU8jA8cWVGMnS', '', 767543123, 'Oraș Cluj-Napoca, strada Luceafărului 11, bloc 2C, scara 2, etaj 1, apartament 9'),
(10, 'Mihu Daniela', 'luca_robert95@yahoo.com', 'Miha', '$2y$10$5eji.B9TLl.hFzA7xXEmBuYJ6H/S7Pm0nsO1AVbTv2qOzDigpgqcG', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(8) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `mesaj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nume`, `email`, `telefon`, `mesaj`) VALUES
(1, 'ds', 'ramona.gluca98@gmail.com', 'ds', 'dsds'),
(2, 'ds', 'ramona.gluca98@gmail.com', 'ds', 'dsds'),
(3, 'ds', 'ramona.gluca98@gmail.com', 'ds', 'dsds'),
(4, 'Rram', '', 'ds', ''),
(45, 'Rram', 'luca_robert95@yahoo.com', '456', 'fggg'),
(46, 'Mihu Daniela', 'ramona.gluca98@gmail.com', '878', 'dss'),
(47, 'Mihu Daniela', 'ramona.gluca98@gmail.com', '878', 'dss'),
(125, 'sas', 'ramona.gluca98@gmail.com', '078676', 'fdf'),
(126, 'Rram', 'ramona.gluca98@gmail.com', '434435', 'fdfd'),
(127, 'Luca Ramona', 'bodytechsstudio@gmail.com', '6557', 'fddfd'),
(128, 'Luca Ramona', 'bodytechsstudio@gmail.com', '6557', 'fddfd'),
(132, 'Mihaila Alexandra', 'ramona.gluca98@gmail.com', 'gjg', 'asssa'),
(133, 'Mihu Daniela', 'ramona.gluca98@gmail.com', '6557', 'xff'),
(142, 'Luca Ramona', 'ramona.gluca98@gmail.com', '878', 'yh'),
(181, 'Rram', 'ramona.gluca98@gmail.com', '434435', 'vccx'),
(194, 'Mihu Daniela', 'bodytechsstudio@gmail.com', '434435', 'gffgf');

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `id` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `pret` varchar(100) NOT NULL,
  `imagine` varchar(100) NOT NULL,
  `cantitate` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cos`
--

INSERT INTO `cos` (`id`, `client_id`, `nume`, `pret`, `imagine`, `cantitate`) VALUES
(54, 4, 'Ganteră hexagonică, 8kg', '150', 'ganterahex.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galerie`
--

CREATE TABLE `galerie` (
  `id` int(8) NOT NULL,
  `imagine` varchar(200) NOT NULL,
  `titlu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galerie`
--

INSERT INTO `galerie` (`id`, `imagine`, `titlu`) VALUES
(1, 'galerie1.jpg', 'Imgine1'),
(2, 'galeriee2.jpg', 'Imagine2'),
(4, 'galerie3.webp', 'ssds'),
(5, 'galerie4.jpg', 'sas'),
(6, 'galerie5.jpg', ''),
(7, 'galerie6.jpg', ''),
(8, 'galerie7.jpg', ''),
(9, 'galerie8.jpg', ''),
(10, 'galerie9.jpg', ''),
(11, 'galerie10.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `id` int(100) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `pret` varchar(100) NOT NULL,
  `imagine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id`, `nume`, `pret`, `imagine`) VALUES
(1, 'Granola proteică', '20', 'granola.jpg'),
(2, 'Spirulină BIO ', '39', 'spirulina.jpg'),
(3, 'Ulei de cocos ', '25', 'uleicocos.jpg'),
(4, 'Baton proteic cu cocos', '10.90', 'batoncocos.jpg'),
(5, 'Baton proteic Crunchy', '12', 'batonuntarahide.png'),
(6, 'Unt de arahide', '31', 'untarahide.jpg'),
(9, 'Granola proteică', '20', 'granola.jpg'),
(10, 'Fursecuri proteice', '11.90', 'fursecuri.jpg'),
(11, 'Ciocolată proteică', '10', 'ciocolata.jpg'),
(12, 'Supă cremă de roșii', '20', 'supa.png'),
(13, 'Supă cremă de morcovi', '20', 'supamorcovi.jpg'),
(14, 'Vitamina C', '36.50', 'vitaminac.jpg'),
(15, 'Vitamina D', '64', 'vitaminad.jpg'),
(16, 'Îndulcitor natural, stevie', '25', 'stevie.jpg'),
(17, 'Aromă naturală de căpșuni', '50', 'aroma.jpg'),
(18, 'Gantere, 8kg', '67.70', 'gantere8.jpg'),
(19, 'Gantere, 2kg', '34', 'gantere2.jpg'),
(20, 'Minge fitness, 65cm', '45', 'minge.jpg'),
(21, 'Coardă sărituri, 3m', '23.90', 'coarda.jpg'),
(22, 'Saltea fitness', '59.90', 'saltea.jpg'),
(23, 'Set 4 benzi elastice', '35', 'benzi.jpg'),
(24, 'Set corzi elastice, 1,5m', '120', 'corzi.jpg'),
(25, 'Geantă sport', '177.90', 'geanta.jpg'),
(26, 'Stepper aerobic', '123', 'stepper.jpg'),
(27, 'Mănuși universale', '60', 'manusi.jpg'),
(28, 'Ganteră hexagonică, 8kg', '150', 'ganterahex.jpg'),
(29, 'Ganteră Kettlebel, 8kg', '135', 'gantera.png');

-- --------------------------------------------------------

--
-- Table structure for table `programare`
--

CREATE TABLE `programare` (
  `id` int(8) NOT NULL,
  `nume` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefon` int(150) NOT NULL,
  `adresa` varchar(200) NOT NULL,
  `clasa` varchar(200) NOT NULL,
  `instructor` varchar(200) NOT NULL,
  `ora` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programare`
--

INSERT INTO `programare` (`id`, `nume`, `username`, `email`, `telefon`, `adresa`, `clasa`, `instructor`, `ora`) VALUES
(1, 'Ram', 'Rammm', 'ramona.gluca98@gmail.com', 756534765, 'Oras Cluj-Napoca, str', 'sddsd', 'ssdsd', 'sd'),
(10, 'Luca Elena', 'LucaE', 'elena.luca72@yahoo.com', 749428894, 'Oras Cluj-Napoca', 'erre', 'rerre', '12:00'),
(24, 'Luca Elena', 'LucaE', 'elena.luca72@yahoo.com', 749428894, 'Oras Cluj-Napoca', 'rtrt', 'rr', '14'),
(25, 'Luca Elena', 'LucaE', 'elena.luca72@yahoo.com', 749428894, 'Oras Cluj-Napoca', 'assaa', 'saasa', '12'),
(26, 'Luca Elena', 'LucaE', 'elena.luca72@yahoo.com', 749428894, 'Oras Cluj-Napoca', 'Body Techs', 'Luca', '12:00'),
(27, 'Ram', 'Rammm', 'ramona.gluca98@gmail.com', 756534765, 'Oras Cluj-Napoca, str', '', '', ''),
(28, 'Ram', 'Rammm', 'ramona.gluca98@gmail.com', 756534765, 'Oras Cluj-Napoca, str', '', '', ''),
(29, 'Ram', 'Rammm', 'ramona.gluca98@gmail.com', 756534765, 'Oras Cluj-Napoca, str', '', '', ''),
(30, 'Luca Ramona', 'RamonaL', 'ramona.luca@gmail.com', 0, '', '', '', ''),
(31, 'Luca Ramona', 'RamonaL', 'ramona.luca@gmail.com', 767543123, 'Oraș Cluj-Napoca, strada Luceafărului 11, bloc 2C, scara 2, etaj 1, apartament 9', '', '', ''),
(39, 'Rramm', '', 'ramona@gmail.com', 749428894, 'cjfd', 'erre', 'sasas', '16:30'),
(40, 'Rramm', '', 'ramona@gmail.com', 749428894, 'Oras Cluj-Napoca', 'erre', 'rerre', '14'),
(41, 'Rramm', '', 'ramona@gmail.com', 7565, 'Oras Cluj-Napoca', 'dsd', 'rerre', '12'),
(45, 'Rramm', '', 'ramona@gmail.com', 749428894, 'cjfd', 'dsd', 'rerre', '14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programare`
--
ALTER TABLE `programare`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `programare`
--
ALTER TABLE `programare`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
