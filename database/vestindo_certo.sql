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

-- Copiando estrutura para tabela vestindo_certo.clima
CREATE TABLE IF NOT EXISTS `clima` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.clima: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `clima` DISABLE KEYS */;
INSERT INTO `clima` (`id`, `nome`) VALUES
	(1, 'Sol'),
	(2, 'Chuva'),
	(3, 'Nublado'),
	(4, 'Seco');
/*!40000 ALTER TABLE `clima` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.evento: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `nome`) VALUES
	(1, 'Faculdade'),
	(2, 'Trabalho'),
	(3, 'Festa'),
	(4, 'Balada'),
	(5, 'Casamento'),
	(6, 'Academia');
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.local
CREATE TABLE IF NOT EXISTS `local` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.local: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` (`id`, `nome`) VALUES
	(1, 'Cidade Grande'),
	(2, 'Cidade Interior'),
	(3, 'Chácara / Sítio');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.look
CREATE TABLE IF NOT EXISTS `look` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_clima` tinyint(4) NOT NULL,
  `fk_evento` tinyint(4) NOT NULL,
  `fk_local` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.look: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `look` DISABLE KEYS */;
/*!40000 ALTER TABLE `look` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.look_roupa
CREATE TABLE IF NOT EXISTS `look_roupa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_look` smallint(6) NOT NULL,
  `fk_roupa` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.look_roupa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `look_roupa` DISABLE KEYS */;
/*!40000 ALTER TABLE `look_roupa` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.roupa
CREATE TABLE IF NOT EXISTS `roupa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `fk_clima` tinyint(4) NOT NULL,
  `fk_evento` tinyint(4) NOT NULL,
  `fk_local` tinyint(4) NOT NULL,
  `fk_tipo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.roupa: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `roupa` DISABLE KEYS */;
INSERT INTO `roupa` (`id`, `imagem`, `descricao`, `fk_clima`, `fk_evento`, `fk_local`, `fk_tipo`) VALUES
	(5, '1481317876423.jpg', NULL, 3, 1, 1, 1),
	(6, '1481317919652.jpg', NULL, 1, 1, 1, 1),
	(7, '1481317955872.jpg', NULL, 1, 1, 1, 2),
	(8, '1481317977995.jpg', NULL, 1, 1, 1, 2),
	(9, '1481318117988.jpg', NULL, 2, 2, 2, 1),
	(10, '1481318145754.jpg', NULL, 3, 2, 2, 2),
	(11, '1481318198703.jpg', NULL, 3, 2, 2, 1),
	(12, '1481320289051.jpg', NULL, 3, 1, 1, 1),
	(13, '1481320334946.jpg', NULL, 3, 1, 1, 2);
/*!40000 ALTER TABLE `roupa` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.tipo
CREATE TABLE IF NOT EXISTS `tipo` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.tipo: 2 rows
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` (`id`, `nome`, `descricao`) VALUES
	(1, 'Tipo 01', 'Camisa, Camiseta, Camisa de manga cumprida, Blusa, Jaco'),
	(2, 'Tipo 02', 'Bermuda, Short, Calça');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'TESTE', 'teste@teste.com', '123456'),
	(2, 'TESTE', 'teste@teste.com', '123456'),
	(3, 'TESTE', 'teste@teste.com', '123456'),
	(4, 'Tatiana', 'tati@gmail.com', '123456');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.usuario_look
CREATE TABLE IF NOT EXISTS `usuario_look` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_usuario` smallint(6) NOT NULL,
  `fk_look` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.usuario_look: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario_look` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_look` ENABLE KEYS */;

-- Copiando estrutura para tabela vestindo_certo.usuario_roupa
CREATE TABLE IF NOT EXISTS `usuario_roupa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_roupa` smallint(6) NOT NULL,
  `fk_usuario` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela vestindo_certo.usuario_roupa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario_roupa` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_roupa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
