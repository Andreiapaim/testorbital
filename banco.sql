# MySQL-Front 3.2  (Build 10.2)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;

/*!40101 SET NAMES latin1 */;
/*!40103 SET TIME_ZONE='SYSTEM' */;

# Host: mysql.mestrescoruja.com.br    Database: mestrescoruja
# ------------------------------------------------------
# Server version 5.5.5-10.2.32-MariaDB-log

#
# Table structure for table imoveis
#

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE `imoveis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Valor` int(11) DEFAULT 0,
  `Data` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

#
# Dumping data for table imoveis
#

/*!40101 SET NAMES utf8 */;

INSERT INTO `imoveis` VALUES (1,'Imóveis Disponíveis',94567,'2017-04-28 19:01:00');
INSERT INTO `imoveis` VALUES (2,'Imóveis Alugados',1034,'2017-04-28 19:01:00');
INSERT INTO `imoveis` VALUES (3,'Imóveis Vendidos',321934,'2017-04-28 19:01:00');

/*!40101 SET NAMES latin1 */;


#
# Table structure for table usuarios
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Guid` varchar(50) DEFAULT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT '0',
  `Data` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Dumping data for table usuarios
#

INSERT INTO `usuarios` VALUES (1,'123491093248190328490124','Usuario tal','email@bol.com','senha123',NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
