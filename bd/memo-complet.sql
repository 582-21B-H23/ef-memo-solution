-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `memo_ef`
--
CREATE DATABASE IF NOT EXISTS `memo_ef` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `memo_ef`;

-- --------------------------------------------------------

--
-- Table structure for table `tache`
--

CREATE TABLE `tache` (
  `id` int(11) NOT NULL,
  `texte` varchar(200) NOT NULL COMMENT 'Texte de la tâche.',
  `accomplie` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Valeur 0 pour non-complétée, et 1 pour complétée.',
  `date_ajout` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'La date à laquelle la tâche est ajoutée',
  `utilisateur_id` int(11) DEFAULT NULL COMMENT 'Ce champ n''est pas utilisé dans le TP, ignorez-le!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tache`
--

INSERT INTO `tache` (`id`, `texte`, `accomplie`, `date_ajout`, `utilisateur_id`) VALUES
(1, 'Faire mon rapport d\'impôts', 0, '2023-02-22 12:31:50', NULL),
(12, 'Voir Il grande silenzio', 0, '2023-04-15 17:05:02', NULL),
(20, 'Finir le TP#2', 1, '2023-04-19 20:52:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;
