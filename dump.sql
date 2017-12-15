-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: teashop
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `magasin_the`
--

DROP TABLE IF EXISTS `magasin_the`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `magasin_the` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `magasin_id` int(11) DEFAULT NULL,
  `the_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magasin_the`
--

LOCK TABLES `magasin_the` WRITE;
/*!40000 ALTER TABLE `magasin_the` DISABLE KEYS */;
INSERT INTO `magasin_the` VALUES (2,2,1),(3,3,6),(4,4,6),(29,1,7),(30,2,7),(31,1,8),(32,5,8),(33,2,9),(34,3,9),(35,4,9),(42,1,12),(43,2,12),(44,3,12),(48,1,11),(49,2,11),(50,4,11),(51,5,11),(52,2,14),(53,4,14),(54,5,14);
/*!40000 ALTER TABLE `magasin_the` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `magasin_theiere`
--

DROP TABLE IF EXISTS `magasin_theiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `magasin_theiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `magasin_id` int(11) NOT NULL,
  `theiere_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magasin_theiere`
--

LOCK TABLES `magasin_theiere` WRITE;
/*!40000 ALTER TABLE `magasin_theiere` DISABLE KEYS */;
INSERT INTO `magasin_theiere` VALUES (13,2,9),(19,3,13),(20,5,13),(21,1,14),(22,2,14),(23,3,14),(24,4,15),(25,5,15),(34,1,17),(35,2,17),(36,5,18),(37,4,19),(38,3,19),(39,2,20),(40,1,20),(41,1,20);
/*!40000 ALTER TABLE `magasin_theiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `magasins`
--

DROP TABLE IF EXISTS `magasins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `magasins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `magasin` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magasins`
--

LOCK TABLES `magasins` WRITE;
/*!40000 ALTER TABLE `magasins` DISABLE KEYS */;
INSERT INTO `magasins` VALUES (1,'Lyon Confluence'),(2,'Lyon Part-Dieu'),(3,'Annecy'),(4,'Bordeaux'),(5,'Saint-Etienne');
/*!40000 ALTER TABLE `magasins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theieres`
--

DROP TABLE IF EXISTS `theieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theieres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modele` varchar(255) NOT NULL,
  `reference` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` decimal(25,0) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theieres`
--

LOCK TABLES `theieres` WRITE;
/*!40000 ALTER TABLE `theieres` DISABLE KEYS */;
INSERT INTO `theieres` VALUES (9,'Riviera et Bar Cha Dao','chadao43riv','Théière électrique. Capacité 1,2L. Entièrement programmable.',349,18),(13,'Sora Iro Indigo','sorairo219','Théière en fonte. Capacité 0.9L.',80,21),(14,'Taira-Nami','taira12n','Théière bleue en fonte. Capacité 0,6L.',130,9),(15,'Bodum théière verre','bodum331','Théière en verre aveec infuseur. Capacité 1L.',37,25),(17,'Riviera et Bar Fujian','fujian23riv','Théière électrique. Capacité 1L. Infuseur intégré.',129,7),(18,'Krups by Lipton','krups18tita','Coloris Titanium. Machine à thé automatique. Filtration de l\'eau.',149,11),(19,'Simeo CT330','cimeoct330','Théière sans fil. Capacité 1L.',49,8),(20,'Japon - Kanbin','janbin1325j','Théière en fonte. Coloris rouge. Capacité 0,7L.',125,4);
/*!40000 ALTER TABLE `theieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thes`
--

DROP TABLE IF EXISTS `thes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `nom` varchar(45) NOT NULL,
  `reference` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` decimal(25,0) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thes`
--

LOCK TABLES `thes` WRITE;
/*!40000 ALTER TABLE `thes` DISABLE KEYS */;
INSERT INTO `thes` VALUES (1,1,'Mariage Frères','mar3b1','Thé vert citronné aux agrumes',13,6),(7,4,'Kusmi Tea','kusmi331noel','Rooibos de Noël. Saveurs pain d\'épices, orange amère, cerise noire. Gingembre, clous de girofle et baies de rose.',8,35),(8,2,'Kusmi Tea','kusmi1135earl3','Earl grey. Ecorces de citron et huile essentielle de bergamote',14,45),(9,3,'Lov Organic Bio','lovorg1346fa','Saveurs de noix de coco, myrtille et fleur de bleuet.',17,19),(11,1,'Palais des Thés','jardTr28pal','Jardin Tropical. Mélange solaire et gourmand de mangue, d\'ananas, de papaye et de pêche',8,31),(12,5,'Maison Bourgeon bio','van156bourg9','Van Gogh. Infusion aux notes de caramel et de figue.',8,21),(14,1,'Dammann','pacific645dam','Pacific Green (Nouvelle Zélande). Notes de patate douce et de châtaigne.',49,7);
/*!40000 ALTER TABLE `thes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Thé vert'),(2,'Thé noir'),(3,'Thé blanc'),(4,'Roibos'),(5,'Infusion');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-15 15:16:17
