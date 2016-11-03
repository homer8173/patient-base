-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: kine
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.12.04.1

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `filename` varchar(512) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--
-- WHERE:   0 = 1

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traumas`
--

DROP TABLE IF EXISTS `traumas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traumas` (
  `id_trauma` int(11) NOT NULL AUTO_INCREMENT,
  `id_image` int(11) NOT NULL,
  `x` int(4) NOT NULL COMMENT 'position en %',
  `y` int(4) NOT NULL COMMENT 'position en %',
  `size` float NOT NULL DEFAULT '100',
  `rotation` float DEFAULT '0',
  `title` varchar(256) NOT NULL,
  `min_value` float NOT NULL,
  `max_value` float NOT NULL,
  `units` varchar(10) NOT NULL DEFAULT '°',
  `unit_title` varchar(256) NOT NULL DEFAULT 'Angle en degré',
  PRIMARY KEY (`id_trauma`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traumas`
--
-- WHERE:   0 = 1

LOCK TABLES `traumas` WRITE;
/*!40000 ALTER TABLE `traumas` DISABLE KEYS */;
/*!40000 ALTER TABLE `traumas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_histos`
--

DROP TABLE IF EXISTS `user_histos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_histos` (
  `id_histo` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_ut` int(11) NOT NULL,
  `id_trauma` int(11) NOT NULL,
  `max_value` float NOT NULL,
  `min_value` float NOT NULL,
  `unit` varchar(10) NOT NULL,
  `private_info` longtext NOT NULL,
  `patient_info` longtext NOT NULL,
  `dday` date DEFAULT NULL,
  PRIMARY KEY (`id_histo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_histos`
--
-- WHERE:   0 = 1

LOCK TABLES `user_histos` WRITE;
/*!40000 ALTER TABLE `user_histos` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_histos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_traumas`
--

DROP TABLE IF EXISTS `user_traumas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_traumas` (
  `id_ut` int(11) NOT NULL AUTO_INCREMENT,
  `id_trauma` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `origine` longtext NOT NULL,
  PRIMARY KEY (`id_ut`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_traumas`
--
-- WHERE:   0 = 1

LOCK TABLES `user_traumas` WRITE;
/*!40000 ALTER TABLE `user_traumas` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_traumas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `user_group` int(4) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `sex` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `picture` varchar(512) NOT NULL DEFAULT 'profil/default.png',
  `telephone` varchar(32) NOT NULL,
  `prefersms` int(1) NOT NULL DEFAULT '0',
  `comment` longtext NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `user` (`user`(200))
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--
-- WHERE:   0 = 1

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_group`
--

DROP TABLE IF EXISTS `users_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_group` (
  `id_user_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id_user_group`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_group`
--
-- WHERE:   0 = 1

LOCK TABLES `users_group` WRITE;
/*!40000 ALTER TABLE `users_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_parents`
--

DROP TABLE IF EXISTS `users_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_parents`
--
-- WHERE:   0 = 1

LOCK TABLES `users_parents` WRITE;
/*!40000 ALTER TABLE `users_parents` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'kine'
--

--
-- Dumping routines for database 'kine'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-03 19:26:55
