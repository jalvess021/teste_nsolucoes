-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.31 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para teste_nsolucoes
DROP DATABASE IF EXISTS `teste_nsolucoes`;
CREATE DATABASE IF NOT EXISTS `teste_nsolucoes` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `teste_nsolucoes`;

-- Copiando estrutura para tabela teste_nsolucoes.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_usu` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nvl_acesso` int NOT NULL DEFAULT '0',
  `dt_cadastro` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cep` varchar(9) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `num_localidade` int NOT NULL,
  PRIMARY KEY (`id_usu`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `telefone` (`telefone`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela teste_nsolucoes.usuario: ~5 rows (aproximadamente)
REPLACE INTO `usuario` (`id_usu`, `usuario`, `nome`, `senha`, `cpf`, `email`, `telefone`, `status_usu`, `nvl_acesso`, `dt_cadastro`, `cep`, `num_localidade`) VALUES
	(5, 'admin', 'Administrador Global', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '000.000.000-23', 'admin@gmail.com', '(21) 98183-3466', 'Ativo', 2, '2023-01-10 14:19:45', '23092-600', 2),
	(16, 'jair', 'Jair Campos', '7c222fb2927d828af22f592134e8932480637c0d', '111.111.112-11', 'jaircampos@gmail.com', '(23) 33321-2222', 'Ativo', 2, '2023-01-11 00:41:42', '23092-600', 33),
	(17, 'julio', 'Julio Salmon', '7c222fb2927d828af22f592134e8932480637c0d', '999.923.556-66', 'julios@gmail.com', '(33) 23233-1111', 'Ativo', 1, '2023-01-11 01:21:27', '23092-600', 22),
	(19, 'Amilton', 'Amilton Sampaio', '7c222fb2927d828af22f592134e8932480637c0d', '111.333.222-22', 'amilton@gmail.com', '(23) 33321-2228', 'Ativo', 1, '2023-01-11 03:27:19', '12220-400', 90),
	(20, 'Davi', 'Davi Nunes Correa', '7c222fb2927d828af22f592134e8932480637c0d', '341.233.333-11', 'davinu22n@gmail.com', '(33) 55324-4123', 'Ativo', 1, '2023-01-11 03:28:26', '29100-300', 5),
	(28, 'amanda', 'Amanda Campos', '7c222fb2927d828af22f592134e8932480637c0d', '233.551.555-55', 'amandac12@gmail.com', '(23) 23231-2323', 'Ativo', 2, '2023-01-11 03:44:51', '23092-710', 12),
	(29, 'Vitin', 'Vitor Amaral', '7c222fb2927d828af22f592134e8932480637c0d', '099.230.023-33', 'vitinnam33@ig.com.br', '(12) 33444-1424', 'Ativo', 2, '2023-01-11 03:46:15', '12220-600', 54),
	(30, 'Mello', 'Mateus Mello', '7c222fb2927d828af22f592134e8932480637c0d', '113.555.518-90', 'mellomateus@gmail.com', '(23) 31255-5123', 'Ativo', 2, '2023-01-11 03:47:22', '12220-200', 23),
	(32, 'alisson23', 'Alisson Gama Paiva', '7c222fb2927d828af22f592134e8932480637c0d', '558.093.244-41', 'allisson@gmail.com', '(23) 33123-3333', 'Ativo', 1, '2023-01-11 03:49:49', '21320-300', 12),
	(33, 'amaral', 'Carla Amaral', '7c222fb2927d828af22f592134e8932480637c0d', '123.445.555-55', 'calinha2323@gmail.com', '(11) 98833-3313', 'Ativo', 1, '2023-01-11 03:51:07', '23020-300', 86),
	(34, 'isaac', 'Isaac Ferreira', '7c222fb2927d828af22f592134e8932480637c0d', '400.877.777-77', 'iiisaac@gmail.com', '(22) 33311-1111', 'Ativo', 1, '2023-01-11 03:52:13', '12220-200', 30),
	(35, 'vit0202', 'Vitória Maria', '7c222fb2927d828af22f592134e8932480637c0d', '236.889.991-23', 'vitoria02@gmail.com', '(45) 55512-3123', 'Ativo', 2, '2023-01-11 03:53:11', '20920-200', 31),
	(36, 'letlet', 'Letícia Letrano', '7c222fb2927d828af22f592134e8932480637c0d', '233.123.123-12', 'letlet@hotmail.com', '(33) 33123-1231', 'Ativo', 2, '2023-01-11 03:54:08', '20720-200', 40),
	(37, 'Elvis', 'Elvis Lemos Duart', '7c222fb2927d828af22f592134e8932480637c0d', '333.333.333-14', 'eivisduart@gmail.com', '(33) 15566-7777', 'Ativo', 2, '2023-01-11 03:55:19', '21920-300', 38),
	(40, 'olinda', 'Olinda Camargo', '7c222fb2927d828af22f592134e8932480637c0d', '133.355.155-35', 'olinad@gmail.com', '(31) 98881-3333', 'Ativo', 2, '2023-01-11 05:17:06', '23092-100', 23);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
