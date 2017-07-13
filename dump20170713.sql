-- MySQL dump 10.14  Distrib 5.5.52-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: guarderia
-- ------------------------------------------------------
-- Server version	5.5.52-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accion`
--

DROP TABLE IF EXISTS `accion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion`
--

LOCK TABLES `accion` WRITE;
/*!40000 ALTER TABLE `accion` DISABLE KEYS */;
INSERT INTO `accion` VALUES (1,'COMER','book','Comio normalmente'),(2,'DORMIR','bug','Durmio poco'),(3,'PIS','tint','Hizo pis controlado'),(4,'PRUEBA1','coffe',''),(5,'PRUEBA2','pencil',''),(6,'PRUEBA3','car',''),(7,'PRUEBA4','child','');
/*!40000 ALTER TABLE `accion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `id_persona` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_aula` varchar(100) NOT NULL,
  `turno` smallint(5) unsigned NOT NULL DEFAULT '0',
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_persona`,`id_aula`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (6,'1',1,0,'2017-05-04 13:13:58'),(12,'0',0,0,'2017-05-08 14:10:09'),(13,'0',0,0,'2017-05-10 13:15:00'),(15,'0',0,0,'2017-05-10 13:28:55');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aula` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `capacidad` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aula`
--

LOCK TABLES `aula` WRITE;
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aula_maestro`
--

DROP TABLE IF EXISTS `aula_maestro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aula_maestro` (
  `id_aula` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_maestro` varchar(100) NOT NULL,
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_aula`,`id_maestro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aula_maestro`
--

LOCK TABLES `aula_maestro` WRITE;
/*!40000 ALTER TABLE `aula_maestro` DISABLE KEYS */;
/*!40000 ALTER TABLE `aula_maestro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (1,'Norma Beatriz','Sanchez','facu_carignano@hotmail.com','124564','asd 123','bashid',NULL),(2,'Norma Beatriz','Sanchez','facu_carignano@hotmail.com','124564','asd 123','bashid','asdfasdfasdf'),(3,'Norma Beatriz','Sanchez','facu_carignano@hotmail.com','124564','asd 123','bashid','desde tutor'),(4,'Norma Beatriz','Sanchez','facu_carignano@hotmail.com','124564','asd 123','bashid','desde maestro'),(5,'Norma Beatriz','Sanchez','facu_carignano@hotmail.com','124564','asd 123','bashid','desde establecimiento');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estab_aula`
--

DROP TABLE IF EXISTS `estab_aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estab_aula` (
  `id_estab` bigint(20) NOT NULL,
  `id_aula` bigint(20) NOT NULL,
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_estab`,`id_aula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estab_aula`
--

LOCK TABLES `estab_aula` WRITE;
/*!40000 ALTER TABLE `estab_aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `estab_aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `establecimiento`
--

DROP TABLE IF EXISTS `establecimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `establecimiento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `responsable` bigint(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `establecimiento`
--

LOCK TABLES `establecimiento` WRITE;
/*!40000 ALTER TABLE `establecimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `establecimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento`
--

DROP TABLE IF EXISTS `evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento`
--

LOCK TABLES `evento` WRITE;
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` VALUES (1,'comio','Comió normalmente'),(2,'comio','Comió normalmente'),(3,'comio','Comió normalmente'),(4,'comio','Comió normalmente'),(5,'comio','Comió normalmente'),(6,'comio','Comió normalmente');
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento_persona`
--

DROP TABLE IF EXISTS `evento_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evento_persona` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo` smallint(5) unsigned NOT NULL DEFAULT '0',
  `persona` int(10) unsigned DEFAULT NULL,
  `st` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento_persona`
--

LOCK TABLES `evento_persona` WRITE;
/*!40000 ALTER TABLE `evento_persona` DISABLE KEYS */;
INSERT INTO `evento_persona` VALUES (40,12,4,0,'2017-07-13 22:12:58'),(41,13,4,0,'2017-07-13 22:12:58'),(42,12,4,0,'2017-07-13 22:15:10'),(43,13,4,0,'2017-07-13 22:15:10'),(44,12,4,0,'2017-07-13 22:17:28'),(45,13,4,0,'2017-07-13 22:17:28'),(46,12,4,0,'2017-07-13 22:19:36'),(47,13,4,0,'2017-07-13 22:19:36');
/*!40000 ALTER TABLE `evento_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guarderia`
--

DROP TABLE IF EXISTS `guarderia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guarderia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `responsable` bigint(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guarderia`
--

LOCK TABLES `guarderia` WRITE;
/*!40000 ALTER TABLE `guarderia` DISABLE KEYS */;
/*!40000 ALTER TABLE `guarderia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padre`
--

DROP TABLE IF EXISTS `padre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `padre` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padre`
--

LOCK TABLES `padre` WRITE;
/*!40000 ALTER TABLE `padre` DISABLE KEYS */;
/*!40000 ALTER TABLE `padre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,3,'facc','car',12,'2017-04-25','12312312','asdf','asfd','asdf',NULL),(6,0,'Norma Beatriz','Sanchez',3,'0000-00-00','16206456','facu_carignano@hotmail.com','asd 123','bashid','2017-04-28 01:37:18'),(7,3,'Norma Beatriz','Sanchez',4,'0000-00-00','16206456','facu_carignano@hotmail.com','asd 123','bashid','2017-04-28 01:38:19'),(8,3,'asdf','asd',2,'0000-00-00','123','facu_carignano@hotmail.com','asd 123','bashid','2017-05-03 01:08:21'),(9,2,'uno','uno',10,'0000-00-00','12345645','facu_carignano@hotmail.com','pepe','bahia','2017-05-04 03:14:16'),(10,2,'uno','uno',4,'0000-00-00','12345645','facu_carignano@hotmail.com','pepe','bahia','2017-05-04 13:21:16'),(11,2,'uno','uno',4,'0000-00-00','12345645','facu_carignano@hotmail.com','pepe','bahia','2017-05-04 13:21:53'),(12,1,'','asd',2,'0000-00-00','123456','asd@asd.com','asd 123','bashid','2017-05-08 14:10:09'),(13,1,'facu','pepe',28,'0000-00-00','33920286','facu_carignano@hotmail.com','asd 123','bahia blancca','2017-05-10 13:15:00'),(14,1,'asd','asd',23,'0000-00-00','312456','facu_carignano@hotmail.com','asd 123','bashid','2017-05-10 13:22:10'),(15,1,'Norma Beatriz','Sanchez',4,'0000-00-00','13245664','facu_carignano@hotmail.com','asd 123','bashid','2017-05-10 13:28:55'),(16,0,'Norma Beatriz','Sanchez',4,'0000-00-00','16206456','facu_carignano@hotmail.com','asd 123','bashid','2017-05-12 00:54:09'),(17,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(18,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(19,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(20,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(21,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(22,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(23,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(24,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(25,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(26,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(27,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(28,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(29,0,'tutor','tutor',5,'0000-00-00','12345678','tutor@tutor.com','pepe','bahia','2017-05-12 00:55:16'),(35,2,'maestro','maestro',3,'0000-00-00','16206456','facu_carignano@hotmail.com','asd 123','bashid','2017-05-12 01:00:21'),(36,2,'maestro1','Sanchez',3,'0000-00-00','16206456','facu_carignano@hotmail.com','pepe','bashid','2017-05-12 01:04:45'),(37,0,'tutor2','Sanchez',3,'0000-00-00','16206456','facu_carignano@hotmail.com','pepe','bahia','2017-05-12 01:06:27'),(38,1,'maria','arsis',3,'0000-00-00','1315516351','','','','2017-06-20 15:12:20'),(39,1,'carlos','arsis',3,'0000-00-00','1315516351','','','','2017-06-20 15:12:29');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacion`
--

DROP TABLE IF EXISTS `relacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relacion` (
  `id1` int(10) unsigned NOT NULL,
  `id2` int(10) unsigned NOT NULL,
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id1`,`id2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacion`
--

LOCK TABLES `relacion` WRITE;
/*!40000 ALTER TABLE `relacion` DISABLE KEYS */;
INSERT INTO `relacion` VALUES (6,38,0,'2017-06-20 20:18:25'),(6,39,0,'2017-06-20 20:18:31');
/*!40000 ALTER TABLE `relacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persona` bigint(20) DEFAULT NULL,
  `type` tinyint(2) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('admin','fe01ce2a7fbac8fafaed7c982a04e229',1,1),('tutor','1f6f42334e1709a4e0f9922ad789912b',6,0),('maestro','7a7ea6908e33896ddcc8b82f264f4f7a',36,2),('establecimiento','b181c79e2793c5e0496e25b32ee9982e',6,3);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-13 19:22:48
