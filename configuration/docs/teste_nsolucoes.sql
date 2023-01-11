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

-- Copiando estrutura para tabela teste_nsolucoes.localidade_usu
DROP TABLE IF EXISTS `localidade_usu`;
CREATE TABLE IF NOT EXISTS `localidade_usu` (
  `id_loc_usu` int NOT NULL AUTO_INCREMENT,
  `id_usu` int NOT NULL,
  `cep` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `logradouro` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `complemento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bairro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cidade` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uf` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_loc_usu`),
  UNIQUE KEY `id_usu` (`id_usu`),
  KEY `id_usu_fk` (`id_usu`),
  CONSTRAINT `FK_localidade_usu_usuario` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela teste_nsolucoes.localidade_usu: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela teste_nsolucoes.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_usu` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nvl_acesso` int NOT NULL DEFAULT '0',
  `dt_cadastro` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cep` int NOT NULL,
  PRIMARY KEY (`id_usu`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela teste_nsolucoes.usuario: ~9 rows (aproximadamente)
REPLACE INTO `usuario` (`id_usu`, `usuario`, `nome`, `senha`, `cpf`, `email`, `telefone`, `status_usu`, `nvl_acesso`, `dt_cadastro`, `cep`) VALUES
	(5, 'admin', 'Administrador Global', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '000.000.000-23', 'admin@gmail.com', '(21) 98183-3466', 'Ativo', 2, '2023-01-10 14:19:45', 12345678),
	(6, '".$user."', '".$name."', '".$cript."', '".$cpf."', '".$email."', '".$tel."', '".$status."', 0, '2023-01-10 19:46:40', 0),
	(7, '213', 'sdasdj', 'a0f4f33a14fa610c75ff8cd89b6a54f5df61fcb7', 'asd', '1232332@fmi.com', '12312312333', '1', 2, '2023-01-10 19:48:50', 332123123),
	(8, 'asdas', 'jpop', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', '3232', '312313@', '2323', '1', 1, '2023-01-10 19:49:50', 332123123),
	(9, 'dasd', 'qsdas', 'f37be93b674e3dcd988cba4a7cf66879468c3b35', '2323', 'asdasd', '2323', 'Ativo', 1, '2023-01-10 20:05:56', 323),
	(10, '33323123', '31233', '5e1ca041703ade9dfad6d8fccf66a97b1603ad8e', '12323', '232332', '3333', 'Ativo', 1, '2023-01-10 20:06:16', 1231231),
	(11, 'asdasdas', '3123123', '601f1889667efaebb33b8c12572835da3f027f78', '233123', '23123', '13123', 'Ativo', 1, '2023-01-10 20:06:59', 23123123),
	(12, '123123', '123123', '52fdb9f68c503e11d168fe52035901864c0a4861', '3231', '123123', '333', 'Ativo', 1, '2023-01-10 20:07:09', 2323),
	(13, '555', '353535', '291aecbef783c88bbabed880cfc5ebd134b5d5bc', '31231', '123563477', '421415', 'Ativo', 2, '2023-01-10 20:07:30', 12312),
	(14, '12345', '3532453', '8a0d3733257aeedb1fa29e02835bff9158f5cdc5', '24242', '425564', '12312312', 'Ativo', 1, '2023-01-10 20:07:43', 423423123),
	(15, '2346346', '346346', '63afd0edc0371ad842d7a7ecc76260be4bc3e8c0', '4666', '346346346', '546', 'Ativo', 2, '2023-01-10 20:07:52', 1231556);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
