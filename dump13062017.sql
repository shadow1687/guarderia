-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5144
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para guarderia
CREATE DATABASE IF NOT EXISTS `guarderia` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `guarderia`;

-- Volcando estructura para tabla guarderia.accion
CREATE TABLE IF NOT EXISTS `accion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla guarderia.accion: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `accion` DISABLE KEYS */;
INSERT INTO `accion` (`id`, `tipo`, `descripcion`) VALUES
	(1, 'COMER', 'Comio normalmente'),
	(2, 'DORMIR', 'Durmio poco'),
	(3, 'PIS', 'Hizo pis controlado');
/*!40000 ALTER TABLE `accion` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.alumno
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_persona` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_aula` varchar(100) NOT NULL,
  `turno` smallint(5) unsigned NOT NULL DEFAULT '0',
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_persona`,`id_aula`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla guarderia.alumno: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` (`id_persona`, `id_aula`, `turno`, `st`, `ts`) VALUES
	(6, '1', 1, 0, '2017-05-04 10:13:58'),
	(12, '0', 0, 0, '2017-05-08 11:10:09'),
	(13, '0', 0, 0, '2017-05-10 10:15:00'),
	(15, '0', 0, 0, '2017-05-10 10:28:55');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.aula
CREATE TABLE IF NOT EXISTS `aula` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `capacidad` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla guarderia.aula: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.aula_maestro
CREATE TABLE IF NOT EXISTS `aula_maestro` (
  `id_aula` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_maestro` varchar(100) NOT NULL,
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_aula`,`id_maestro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla guarderia.aula_maestro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aula_maestro` DISABLE KEYS */;
/*!40000 ALTER TABLE `aula_maestro` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla guarderia.contacto: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `direccion`, `ciudad`, `comentario`) VALUES
	(1, 'Norma Beatriz', 'Sanchez', 'facu_carignano@hotmail.com', '124564', 'asd 123', 'bashid', NULL),
	(2, 'Norma Beatriz', 'Sanchez', 'facu_carignano@hotmail.com', '124564', 'asd 123', 'bashid', 'asdfasdfasdf'),
	(3, 'Norma Beatriz', 'Sanchez', 'facu_carignano@hotmail.com', '124564', 'asd 123', 'bashid', 'desde tutor'),
	(4, 'Norma Beatriz', 'Sanchez', 'facu_carignano@hotmail.com', '124564', 'asd 123', 'bashid', 'desde maestro'),
	(5, 'Norma Beatriz', 'Sanchez', 'facu_carignano@hotmail.com', '124564', 'asd 123', 'bashid', 'desde establecimiento');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.establecimiento
CREATE TABLE IF NOT EXISTS `establecimiento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `responsable` bigint(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla guarderia.establecimiento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `establecimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `establecimiento` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.estab_aula
CREATE TABLE IF NOT EXISTS `estab_aula` (
  `id_estab` bigint(20) NOT NULL,
  `id_aula` bigint(20) NOT NULL,
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_estab`,`id_aula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla guarderia.estab_aula: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estab_aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `estab_aula` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla guarderia.evento: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `fecha_hora`, `tipo`, `alumno`, `descripcion`) VALUES
	(1, '2017-05-17 03:00:42', 'comio', 0, 'Comió normalmente'),
	(2, '2017-05-17 03:00:42', 'comio', 0, 'Comió normalmente'),
	(3, '2017-05-17 03:00:42', 'comio', 0, 'Comió normalmente'),
	(4, '2017-05-17 03:09:18', 'comio', 1, 'Comió normalmente'),
	(5, '2017-05-17 03:09:18', 'comio', 2, 'Comió normalmente'),
	(6, '2017-05-17 03:09:18', 'comio', 3, 'Comió normalmente');
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.guarderia
CREATE TABLE IF NOT EXISTS `guarderia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `responsable` bigint(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla guarderia.guarderia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `guarderia` DISABLE KEYS */;
/*!40000 ALTER TABLE `guarderia` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.padre
CREATE TABLE IF NOT EXISTS `padre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla guarderia.padre: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `padre` DISABLE KEYS */;
/*!40000 ALTER TABLE `padre` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla guarderia.persona: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id`, `tipo`, `nombre`, `apellido`, `edad`, `nacimiento`, `dni`, `email`, `direccion`, `ciudad`, `timestamp`) VALUES
	(1, 3, 'facc', 'car', 12, '2017-04-25', '12312312', 'asdf', 'asfd', 'asdf', NULL),
	(6, 0, 'Norma Beatriz', 'Sanchez', 3, '0000-00-00', '16206456', 'facu_carignano@hotmail.com', 'asd 123', 'bashid', '2017-04-27 22:37:18'),
	(7, 3, 'Norma Beatriz', 'Sanchez', 4, '0000-00-00', '16206456', 'facu_carignano@hotmail.com', 'asd 123', 'bashid', '2017-04-27 22:38:19'),
	(8, 3, 'asdf', 'asd', 2, '0000-00-00', '123', 'facu_carignano@hotmail.com', 'asd 123', 'bashid', '2017-05-02 22:08:21'),
	(9, 2, 'uno', 'uno', 10, '0000-00-00', '12345645', 'facu_carignano@hotmail.com', 'pepe', 'bahia', '2017-05-04 00:14:16'),
	(10, 2, 'uno', 'uno', 4, '0000-00-00', '12345645', 'facu_carignano@hotmail.com', 'pepe', 'bahia', '2017-05-04 10:21:16'),
	(11, 2, 'uno', 'uno', 4, '0000-00-00', '12345645', 'facu_carignano@hotmail.com', 'pepe', 'bahia', '2017-05-04 10:21:53'),
	(12, 1, '', 'asd', 2, '0000-00-00', '123456', 'asd@asd.com', 'asd 123', 'bashid', '2017-05-08 11:10:09'),
	(13, 1, 'facu', 'pepe', 28, '0000-00-00', '33920286', 'facu_carignano@hotmail.com', 'asd 123', 'bahia blancca', '2017-05-10 10:15:00'),
	(14, 1, 'asd', 'asd', 23, '0000-00-00', '312456', 'facu_carignano@hotmail.com', 'asd 123', 'bashid', '2017-05-10 10:22:10'),
	(15, 1, 'Norma Beatriz', 'Sanchez', 4, '0000-00-00', '13245664', 'facu_carignano@hotmail.com', 'asd 123', 'bashid', '2017-05-10 10:28:55'),
	(16, 0, 'Norma Beatriz', 'Sanchez', 4, '0000-00-00', '16206456', 'facu_carignano@hotmail.com', 'asd 123', 'bashid', '2017-05-11 21:54:09'),
	(17, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(18, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(19, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(20, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(21, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(22, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(23, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(24, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(25, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(26, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(27, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(28, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(29, 0, 'tutor', 'tutor', 5, '0000-00-00', '12345678', 'tutor@tutor.com', 'pepe', 'bahia', '2017-05-11 21:55:16'),
	(35, 2, 'maestro', 'maestro', 3, '0000-00-00', '16206456', 'facu_carignano@hotmail.com', 'asd 123', 'bashid', '2017-05-11 22:00:21'),
	(36, 2, 'maestro1', 'Sanchez', 3, '0000-00-00', '16206456', 'facu_carignano@hotmail.com', 'pepe', 'bashid', '2017-05-11 22:04:45'),
	(37, 0, 'tutor2', 'Sanchez', 3, '0000-00-00', '16206456', 'facu_carignano@hotmail.com', 'pepe', 'bahia', '2017-05-11 22:06:27');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.relacion
CREATE TABLE IF NOT EXISTS `relacion` (
  `id1` int(10) unsigned NOT NULL,
  `id2` int(10) unsigned NOT NULL,
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id1`,`id2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla guarderia.relacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `relacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `relacion` ENABLE KEYS */;

-- Volcando estructura para tabla guarderia.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persona` bigint(20) DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla guarderia.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`username`, `password`, `persona`, `type`) VALUES
	('admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 1, 'admin');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
