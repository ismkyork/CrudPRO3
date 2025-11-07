-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.4.3 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para leagueofcrud
CREATE DATABASE IF NOT EXISTS `leagueofcrud` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `leagueofcrud`;

-- Volcando estructura para tabla leagueofcrud.tabla_campeones
CREATE TABLE IF NOT EXISTS `tabla_campeones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ruta_imagen` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rol` enum('Top','Jungla','Mid','ADC','Support') DEFAULT NULL,
  `region` enum('Aguasturbias','Ciudad de Bandle','Demacia','Freljord','Vacio','Isla de la Sombra','Ixtal','Jonia','Noxus','Piltover','Shurima','Targon','Zaun') NOT NULL,
  `raza` enum('Humano','Vastaya','Yordle','Darkin','Ascendidos','Ente Vacio','Espiritu/Demonio','Aspecto','Golem/Constructo','Indefinido') NOT NULL,
  `fecha_lanzamiento` date DEFAULT NULL,
  `tipo_daño` enum('magico','fisico','hibrido') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla leagueofcrud.tabla_campeones: ~5 rows (aproximadamente)
INSERT INTO `tabla_campeones` (`id`, `ruta_imagen`, `nombre`, `rol`, `region`, `raza`, `fecha_lanzamiento`, `tipo_daño`) VALUES
	(2, '1762446141_d663e879bd2fa804a181.jpg', 'Yunara', 'ADC', 'Jonia', 'Humano', '2025-07-16', 'magico'),
	(18, '1762398174_0cf5984f4e093249cc40.jpg', 'Jhin', 'ADC', 'Jonia', 'Humano', '2016-02-11', 'fisico'),
	(31, '1762446504_5acdd1eb82c18adf9330.jpg', 'Bardo', 'Support', 'Targon', 'Indefinido', '2016-11-02', 'hibrido'),
	(33, '1762446560_5856710e03744628af9d.jpg', 'Warwick', 'Jungla', 'Zaun', 'Indefinido', '2009-02-21', 'fisico'),
	(36, '1762475421_5b73fc6427d213b7c9c6.jpg', 'LeBlanc', 'Mid', 'Noxus', 'Indefinido', '2010-11-02', 'magico');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
