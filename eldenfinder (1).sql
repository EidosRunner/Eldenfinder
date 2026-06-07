-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2026 at 07:35 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `label`) VALUES
(2, 'Characters', ''),
(3, 'enemies ', ''),
(4, 'items', ''),
(5, 'lore', '');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `id` int UNSIGNED NOT NULL,
  `creator_id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `main_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'draft',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `theme_id` int UNSIGNED DEFAULT NULL,
  `skill` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `skill FP cost` int DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `upgrade material` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `collection_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `status` varchar(20) DEFAULT 'new',
  `assigned_to` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `category_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `slug`, `label`, `category_id`) VALUES
(25, 'dagger', 'Dagger', 4),
(26, 'straight-sword', 'Straight Sword', 4),
(27, 'greatsword', 'Greatsword', 4),
(28, 'colossal-sword', 'Colossal Sword', 4),
(29, 'thrusting-sword', 'Thrusting Sword', 4),
(30, 'heavy-thrusting-sword', 'Heavy Thrusting Sword', 4),
(31, 'curved-sword', 'Curved Sword', 4),
(32, 'curved-greatsword', 'Curved Greatsword', 4),
(33, 'katana', 'Katana', 4),
(34, 'twinblade', 'Twinblade', 4),
(35, 'hammer', 'Hammer', 4),
(36, 'flail', 'Flail', 4),
(37, 'great-hammer', 'Great Hammer', 4),
(38, 'colossal-weapon', 'Colossal Weapon', 4),
(39, 'axe', 'Axe', 4),
(40, 'greataxe', 'Greataxe', 4),
(41, 'spear', 'Spear', 4),
(42, 'great-spear', 'Great Spear', 4),
(43, 'halberd', 'Halberd', 4),
(44, 'scythe', 'Scythe', 4),
(45, 'fist', 'Fist', 4),
(46, 'claw', 'Claw', 4),
(47, 'whip', 'Whip', 4),
(48, 'torch', 'Torch', 4),
(49, 'light-bow', 'Light Bow', 4),
(50, 'bow', 'Bow', 4),
(51, 'greatbow', 'Greatbow', 4),
(52, 'crossbow', 'Crossbow', 4),
(53, 'ballista', 'Ballista', 4),
(54, 'small-shield', 'Small Shield', 4),
(55, 'medium-shield', 'Medium Shield', 4),
(56, 'greatshield', 'Greatshield', 4),
(57, 'glintstone-staff', 'Glintstone Staff', 4),
(58, 'sacred-seal', 'Sacred Seal', 4),
(59, 'ash-of-war', 'Ash of War', 4),
(60, 'talisman', 'Talisman', 4),
(61, 'arrow', 'Arrow', 4),
(62, 'bolt', 'Bolt', 4),
(63, 'helm', 'Helm', 4),
(64, 'chest-armor', 'Chest Armor', 4),
(65, 'gauntlets', 'Gauntlets', 4),
(66, 'leg-armor', 'Leg Armor', 4),
(67, 'consumable', 'Consumable', 4),
(68, 'flask', 'Flask', 4),
(69, 'crystal-tear', 'Crystal Tear', 4),
(70, 'crafting-material', 'Crafting Material', 4),
(71, 'smithing-stone', 'Smithing Stone', 4),
(72, 'somber-smithing-stone', 'Somber Smithing Stone', 4),
(73, 'glovewort', 'Glovewort', 4),
(74, 'ghost-glovewort', 'Ghost Glovewort', 4),
(75, 'key-item', 'Key Item', 4),
(76, 'stonesword-key', 'Stonesword Key', 4),
(77, 'remembrance', 'Remembrance', 4),
(78, 'whetblade', 'Whetblade', 4),
(79, 'sorcery', 'Sorcery', 4),
(80, 'incantation', 'Incantation', 4),
(81, 'spirit-ash', 'Spirit Ash', 4),
(82, 'npc', 'NPC', 2),
(83, 'merchant', 'Merchant', 2),
(84, 'boss', 'Boss', 2),
(85, 'regular-enemy', 'Regular Enemy', 3),
(86, 'mini-boss', 'Mini Boss', 3),
(87, 'field-boss', 'Field Boss', 3),
(88, 'legacy-dungeon', 'Legacy Dungeon', 5),
(89, 'region', 'Region', 5),
(90, 'faction', 'Faction', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tagged`
--

CREATE TABLE `tagged` (
  `item_id` int UNSIGNED NOT NULL,
  `tag_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `slug`, `label`) VALUES
(1, 'lands between', ''),
(2, 'SoTe', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `theme_id` (`theme_id`),
  ADD KEY `item_ibfk_1` (`category_id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`collection_id`,`item_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tagged`
--
ALTER TABLE `tagged`
  ADD PRIMARY KEY (`item_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `operator` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id`) REFERENCES `operator` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `tag_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `tagged`
--
ALTER TABLE `tagged`
  ADD CONSTRAINT `tagged_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `tagged_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
