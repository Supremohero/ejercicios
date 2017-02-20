-- MySQL dump 10.14  Distrib 5.5.41-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: app
-- ------------------------------------------------------
-- Server version	5.5.41-MariaDB

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
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `enlace` varchar(120) NOT NULL DEFAULT '',
  `tiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `votos` int(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Este es un titulo de base de datos','Nulla odio tellus, auctor sed fringilla eu, convallis ut neque. Nullam in viverra lorem ametLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla odio tellus, auctor sed fringilla eu, convall','/url_id_1.html','0000-00-00 00:00:00',1,'http://localhost/app/photo.png'),(2,'Este es un titulo de base de datos','Una descripcion en bbdd','/url_id_2.html','0000-00-00 00:00:00',2,'http://localhost/app/photo.png'),(3,'Hots ordenados por fecha','esta basado en un ejemplo que desarrollo que estuve viendo','/url_id_3.html','0000-00-00 00:00:00',0,'http://localhost/app/photo.png'),(4,'BBDD titulo','Cnar que mis conocimientos son algos básicos en algunas cosas, sin embargo lo que se y he aprendiendo en esta gran comunidad lo comparto con ustedes, el ejemplo que les pondré a continuación \r\n','/url_id_4.html','0000-00-00 00:00:00',0,'http://localhost/app/photo.png'),(5,'Hots ordenados por fecha','esta basado en un ejemplo que desarrolló ramon hace tiempo ','#url_id_5.html','0000-00-00 00:00:00',4,'http://localhost/app/photo.png'),(6,'Este es un titulo de base de datos','esta basado en un ejemplo que desarrollo que estuve viendo','#url_id_6.html','0000-00-00 00:00:00',6,'http://localhost/app/photo.png'),(7,'Este es un titulo de base de datos','Nulla odio tellus, auctor sed fringilla eu, convallis ut neque. Nullam in viverra lorem ametLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla odio tellus, auctor sed fringilla eu, convall','url_id_7.html','0000-00-00 00:00:00',12,'http://localhost/app/photo.png'),(8,'Este es un titulo de base de datos','Una descripcion en bbdd','url_id_8.html','0000-00-00 00:00:00',20,'http://localhost/app/photo.png'),(9,'Hots ordenados por fecha','esta basado en un ejemplo que desarrollo que estuve viendo','#url_id_9.html','0000-00-00 00:00:00',0,'http://localhost/app/photo.png'),(10,'BBDD titulo','Cnar que mis conocimientos son algos básicos en algunas cosas, sin embargo lo que se y he aprendiendo en esta gran comunidad lo comparto con ustedes, el ejemplo que les pondré a continuación \r\n','#url_id_10.html','0000-00-00 00:00:00',0,'http://localhost/app/photo.png'),(11,'Hots ordenados por fecha','esta basado en un ejemplo que desarrolló ramon hace tiempo ','#url_id_11.html','0000-00-00 00:00:00',4,'http://localhost/app/photo.png'),(12,'Este es un titulo de base de datos','esta basado en un ejemplo que desarrollo que estuve viendo','#url_id_12.html','0000-00-00 00:00:00',6,'http://localhost/app/photo.png'),(14,'@evento s dfg sdfg sdf','sdf gsfdg sdf ','@evento s dfg sdfg sdf','0000-00-00 00:00:00',50,''),(15,'@evento asdf asdfa dsf','a sdfa sdf asdf asd','','0000-00-00 00:00:00',0,''),(18,'@evento as df sdfsdfg',' sdf gsdf gsdfg','','0000-00-00 00:00:00',0,''),(21,'@evento asdf asdf ads','a dfasdf asdfasdfas df','','0000-00-00 00:00:00',0,''),(22,' asdf asdf asdfa','sdf asdf asdf asdf asd','','0000-00-00 00:00:00',0,''),(23,'@evento asdf asd','a sdfasd fasdf a','10','0000-00-00 00:00:00',10,'10'),(24,'@evento as asdf asdf asdf asdf asd','as dfasd fasdf asdf asd','10','0000-00-00 00:00:00',10,'10'),(25,'Nuevo articulo','Esta es la descripcion del articulo','10','0000-00-00 00:00:00',10,'10'),(26,'Nuevo articulo','Esta es la descripcion del articulo','10','0000-00-00 00:00:00',10,'10'),(27,'Nueva publi','asd fasdf asdf','10','0000-00-00 00:00:00',10,'10'),(28,'asdfa sdfa','sdf asdf asdf asd','10','0000-00-00 00:00:00',10,'10'),(29,'asdf','asd fasdf asdf','10','0000-00-00 00:00:00',10,'10'),(30,'as dfasd a','sd fasd fa','10','0000-00-00 00:00:00',10,'10'),(31,'ads fasdf a','sdf asdf','10','0000-00-00 00:00:00',10,'10'),(32,'asdf asdf asdf','a dsfasdf asdf','10','0000-00-00 00:00:00',10,'10'),(33,'asdf asdf asd','asd fasdf asd','10','0000-00-00 00:00:00',10,'10'),(34,'asdf asdf','asd fasdf ','10','2015-11-18 16:47:07',10,'10'),(35,'hola','publicar','10','2015-12-09 19:21:14',0,''),(36,'123','asdf','10','2016-09-07 03:24:35',0,''),(37,'Producto tal','cajon 3','10','2016-09-07 03:29:09',0,''),(38,'ccc','cccc','10','2016-09-07 23:37:37',0,'');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_post` int(10) unsigned NOT NULL,
  `estanteria` varchar(255) NOT NULL,
  `modulo` varchar(255) NOT NULL,
  `cajon` varchar(255) NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pvd` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pvp` varchar(255) NOT NULL,
  `tiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'','','','aas sss ddd sa','123','','2016-09-08 00:07:41',12),(0,'','','','asdf','1234','1234','2016-09-09 11:51:09',0),(0,'','','','Pantalla Samsung Galaxy S7','55','48','2016-09-09 11:52:29',0),(0,'','','','Pantalla Apple Iphone 7','150','190','2016-09-09 11:55:13',11),(0,'4','2','','xxx','12','23','2016-09-09 12:06:27',19),(0,'3','2','2','Pantalla UMI SUPER','70','89','2016-09-09 12:07:37',50),(0,'3','3','3','Pantalla UMI TOUCH','65','85','2016-09-09 12:11:32',50),(0,'2','4','4','Pantalla UMI ROME X','45','55','2016-09-09 12:12:25',26),(0,'2','1','3','Demo','100','150','2016-09-09 12:33:34',50),(0,'3','2','4','Demo 2','100','150','2016-09-09 12:33:44',50),(0,'4','3','1','Demo 2','100','150','2016-09-09 12:33:51',50),(0,'1','4','2','Demo 2','100','150','2016-09-09 12:33:56',50);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,'Default'),(2,'Tecnologia'),(3,'Ayuda'),(4,'Sociedad');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(15) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin','laberinto23'),(2,'demo','demo'),(3,'Anonimo Tres',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-09 14:36:28
