-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2026 at 07:30 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eldenfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `main_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'draft',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `theme_id` int UNSIGNED DEFAULT NULL,
  `skill` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `skill FP cost` int DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `upgrade material` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `slug`, `label`, `short_description`, `content`, `main_image`, `status`, `created_at`, `updated_at`, `category_id`, `theme_id`, `skill`, `skill FP cost`, `weight`, `upgrade material`) VALUES
(4, 'dark-moon-greatsword', 'Dark Moon Greatsword', 'Légendaire épée à deux mains infusée de la lune sombre.', 'Une épée colossale offerte par Ranni la Sorcière. Elle inflige des dégâts magiques et de glace supplémentaires. Son skill invoque le froid lunaire sur la lame.', NULL, 'published', NULL, NULL, 4, 1, 'Moonlight Greatsword', 32, 10, 'Somber Smithing Stone'),
(5, 'rivers-of-blood', 'Rivers of Blood', 'Katana maudit qui répand le saignement en volutes de sang.', 'Katana à la lame tachée de sang obtenu auprès de Bloody Finger Okina. Inflige des dégâts de saignement redoutables. Son skill projette des lacérations de sang à distance.', NULL, 'published', NULL, NULL, 4, 1, 'Corpse Piler', 17, 7, 'Somber Smithing Stone'),
(6, 'blasphemous-blade', 'Blasphemous Blade', 'Épée hérétique forgée dans la chair des dieux.', 'Grande épée obtenue en transposant l\'âme de Rykard, Seigneur du Blasphème. Elle soigne le porteur à chaque ennemi tué et projette des flammes lors de son skill.', NULL, 'published', NULL, NULL, 4, 1, 'Taker\'s Flames', 30, 13, 'Somber Smithing Stone'),
(7, 'moonveil', 'moonveil', 'Katana aux reflets de lune, redoutable pour les mages guerriers.', 'Katana magique obtenu dans les Mines de Gael Tunnel. Parfait pour les builds Intelligence. Son skill projette un flash de lame lumineux capable de briser la garde.', NULL, 'published', NULL, NULL, 4, 1, 'Transient Moonlight', 15, 6, 'Somber Smithing Stone'),
(8, 'starscourge-greatsword', 'starscourge-greatsword', 'Épée gravitationnelle du Seigneur des Étoiles Radahn.', 'Arme légendaire obtenue en transposant l\'âme de Starscourge Radahn. Peut être maniée en double en combinant deux épées. Son skill génère un vortex gravitationnel.', NULL, 'published', NULL, NULL, 4, 1, 'Starcaller Cry', NULL, 18, 'Somber Smithing Stone'),
(9, 'grafted-blade-greatsword', 'Grafted Blade Greatsword', 'Colosse de métal forgé d\'innombrables épées entremêlées.', 'Épée géante obtenue en vainquant Leonine Misbegotten au Château Morne. L\'une des armes les plus lourdes du jeu. Son skill renforce temporairement toutes les statistiques du joueur.', NULL, 'published', NULL, NULL, 4, 1, 'Oath of Vengeance', 40, 21, 'Smithing Stone'),
(10, 'Sword of Night and Flame', 'Sword of Night and Flame', 'Épée légendaire maîtrisant à la fois la magie et le feu.', 'Épée droite trouvée dans le Château Caria. Elle possède deux skills distincts : un rayon de lune magique et une rafale de flammes. Idéale pour les builds hybrides Intelligence/Foi.', NULL, 'published', NULL, NULL, 4, 1, 'Night-and-Flame Stance', 32, 4, 'Somber Smithing Stone'),
(11, 'Eleonora\'s Poleblade', 'Eleonora\'s Poleblade', 'Hallebarde jumelle portée par la Bloody Finger Eleonora.', 'Arme double obtenue en vainquant Eleonora. Inflige des dégâts de feu et de saignement simultanément. Son skill enchaîne une danse de lames tourbillonnantes dévastatrice.', NULL, 'published', NULL, NULL, 4, 1, 'Bloodblade Dance', 23, 8, 'Somber Smithing Stone'),
(12, 'Ruins Greatsword', 'Ruins Greatsword', 'Fragment de ruine gravitationnel d\'une puissance écrasante', 'Épée colossale obtenue en vainquant les Valiant Gargoyles. L\'une des meilleures armes pour les builds Force. Son skill génère une onde de choc gravitationnelle au sol.', NULL, 'published', NULL, NULL, 4, 1, 'Wave of Destruction', 30, 23, 'Somber Smithing Stone'),
(13, 'Hand of Malenia', 'Hand of Malenia', ' Katana prothétique de Malenia, Lame de Miquella', 'Arme légendaire obtenue en transposant l\'âme de Malenia. Katana capable de soigner le porteur à chaque coup porté, même bloqué. Son skill reproduit le légendaire Scarlet Aeonia.', NULL, 'published', NULL, NULL, 4, 1, 'Waterfowl Dance', 26, 7, 'Somber Smithing Stone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `theme_id` (`theme_id`),
  ADD KEY `item_ibfk_1` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
