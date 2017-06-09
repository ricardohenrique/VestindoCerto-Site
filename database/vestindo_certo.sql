-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para vestindo_certo
CREATE DATABASE IF NOT EXISTS `vestindo_certo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `vestindo_certo`;

-- Copiando estrutura para tabela vestindo_certo.clothe
CREATE TABLE IF NOT EXISTS `clothe` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `fk_type` tinyint(4) NOT NULL,
  `fk_user` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.clothe: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `clothe` DISABLE KEYS */;
INSERT INTO `clothe` (`id`, `image`, `description`, `fk_type`, `fk_user`) VALUES
	(17, 'IMG_5855.jpg', '0', 1, 1),
	(18, 'IMG_5854.jpg', '0', 2, 0),
	(19, 'IMG_5853.jpg', '0', 1, 0),
	(20, 'IMG_5852.jpg', '0', 2, 0),
	(21, 'IMG_5851.jpg', '0', 2, 0),
	(22, 'IMG_5848.jpg', '0', 2, 0),
	(23, 'IMG_5845.jpg', '0', 2, 0),
	(24, 'IMG_5844.jpg', '0', 1, 0),
	(25, 'IMG_5843.jpg', '0', 1, 0),
	(26, 'IMG_5841.jpg', '0', 4, 0),
	(27, 'IMG_5839.jpg', '0', 4, 0),
	(28, 'IMG_5838.jpg', '0', 4, 0),
	(29, 'IMG_5723.jpg', '0', 1, 0),
	(30, 'IMG_5717.jpg', '0', 2, 0),
	(31, 'IMG_5716.jpg', '0', 2, 0),
	(32, 'IMG_5715.jpg', '0', 1, 0),
	(33, 'IMG_5714.jpg', '0', 1, 0),
	(34, 'IMG_5713.jpg', '0', 1, 0),
	(35, 'IMG_5712.jpg', '0', 2, 0),
	(36, 'IMG_5711.jpg', '0', 3, 0),
	(37, 'IMG_5710.jpg', '0', 3, 0),
	(38, 'IMG_5709.jpg', '0', 3, 0),
	(39, 'IMG_5708.jpg', '0', 3, 0);
/*!40000 ALTER TABLE `clothe` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.clothe_event
CREATE TABLE IF NOT EXISTS `clothe_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clothe` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela vestindo_certo.clothe_event: 50 rows
/*!40000 ALTER TABLE `clothe_event` DISABLE KEYS */;
INSERT INTO `clothe_event` (`id`, `clothe`, `event`) VALUES
	(1, 17, 1),
	(2, 17, 2),
	(3, 18, 1),
	(4, 18, 6),
	(5, 19, 1),
	(6, 19, 2),
	(7, 20, 1),
	(8, 20, 2),
	(9, 21, 1),
	(10, 21, 6),
	(11, 22, 1),
	(12, 22, 6),
	(13, 23, 1),
	(14, 23, 6),
	(15, 24, 1),
	(16, 24, 2),
	(17, 25, 1),
	(18, 25, 2),
	(19, 26, 1),
	(20, 26, 2),
	(21, 26, 5),
	(22, 27, 1),
	(23, 27, 2),
	(24, 27, 5),
	(25, 28, 1),
	(26, 28, 2),
	(27, 28, 5),
	(28, 28, 2),
	(29, 28, 5),
	(30, 29, 1),
	(31, 29, 2),
	(32, 29, 3),
	(33, 30, 6),
	(34, 31, 4),
	(35, 32, 1),
	(36, 32, 2),
	(37, 33, 1),
	(38, 33, 2),
	(39, 34, 1),
	(40, 34, 2),
	(41, 35, 1),
	(42, 35, 3),
	(43, 36, 3),
	(44, 36, 4),
	(45, 37, 3),
	(46, 37, 4),
	(47, 38, 3),
	(48, 38, 4),
	(49, 39, 3),
	(50, 39, 4);
/*!40000 ALTER TABLE `clothe_event` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.event
CREATE TABLE IF NOT EXISTS `event` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.event: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` (`id`, `name`) VALUES
	(1, 'Faculdade'),
	(2, 'Trabalho'),
	(3, 'Festa'),
	(4, 'Balada'),
	(5, 'Casamento'),
	(6, 'Academia');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.look
CREATE TABLE IF NOT EXISTS `look` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_event` tinyint(4) NOT NULL,
  `fk_place` tinyint(4) NOT NULL,
  `fk_user` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.look: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `look` DISABLE KEYS */;
/*!40000 ALTER TABLE `look` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.look_clothe
CREATE TABLE IF NOT EXISTS `look_clothe` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_look` smallint(6) NOT NULL,
  `fk_clothe` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.look_clothe: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `look_clothe` DISABLE KEYS */;
/*!40000 ALTER TABLE `look_clothe` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.migrations: 0 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.place
CREATE TABLE IF NOT EXISTS `place` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.place: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `place` DISABLE KEYS */;
INSERT INTO `place` (`id`, `name`) VALUES
	(1, 'Rural'),
	(2, 'Urbano');
/*!40000 ALTER TABLE `place` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.type
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.type: 4 rows
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` (`id`, `name`, `description`) VALUES
	(1, 'Tipo01', 'Camiseta'),
	(2, 'Tipo02', 'Regata'),
	(3, 'Tipo03', 'Shorts'),
	(4, 'Tipo04', 'Calça');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.users: 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(4, 'ricardo mota', 'ricardo.hb@outlook.com', '$2y$10$xiruAxetKCt6blE9uZvqLOscCBpB9Vv4rdvbooc0Dk4/EYxKnAhBa', NULL, '2017-06-09 02:14:29', '2017-06-09 02:14:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.user_clothe
CREATE TABLE IF NOT EXISTS `user_clothe` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_roupa` smallint(6) NOT NULL,
  `fk_usuario` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.user_clothe: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `user_clothe` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_clothe` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
