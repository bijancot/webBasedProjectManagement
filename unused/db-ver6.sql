-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: 192.168.79.3    Database: mmopilot
-- ------------------------------------------------------
-- Server version	5.7.27

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
-- Table structure for table `mmo_item`
--

DROP TABLE IF EXISTS `mmo_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_item` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(100) DEFAULT NULL,
  `itemDescription` varchar(500) DEFAULT NULL,
  `itemIcon` varchar(400) DEFAULT NULL,
  `itemLink` varchar(128) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(10) DEFAULT NULL,
  `editedBy` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_item`
--

LOCK TABLES `mmo_item` WRITE;
/*!40000 ALTER TABLE `mmo_item` DISABLE KEYS */;
INSERT INTO `mmo_item` VALUES (2,'dadadasd','dasadfasdas','images/imagemem.png','dasdascxzcwqesx','2019-10-26 11:02:14','2019-10-26 11:02:14',NULL,NULL),(4,'buku','','images/Selection_012.png','dasda','2019-10-28 05:57:51','2019-10-28 05:57:51',NULL,NULL);
/*!40000 ALTER TABLE `mmo_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_job`
--

DROP TABLE IF EXISTS `mmo_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_job` (
  `idJob` int(11) NOT NULL AUTO_INCREMENT,
  `idOperator` int(11) DEFAULT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `jobParent` int(11) DEFAULT NULL,
  `idItem` int(11) DEFAULT NULL,
  `jobDescription` varchar(500) DEFAULT NULL,
  `jobStatus` int(11) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL,
  `itemTarget` int(11) DEFAULT NULL,
  `itemByTime` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `createdBy` varchar(10) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updateBy` varchar(10) NOT NULL,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idJob`),
  KEY `fk_mmo_job_1_idx` (`idOperator`),
  KEY `fk_mmo_job_2_idx` (`idOrder`),
  KEY `fk_mmo_job_3_idx` (`jobParent`),
  KEY `fk_mmo_job_4_idx` (`idItem`),
  CONSTRAINT `fk_mmo_job_1` FOREIGN KEY (`idOperator`) REFERENCES `mmo_users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mmo_job_2` FOREIGN KEY (`idOrder`) REFERENCES `mmo_order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mmo_job_3` FOREIGN KEY (`jobParent`) REFERENCES `mmo_job` (`idJob`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mmo_job_4` FOREIGN KEY (`idItem`) REFERENCES `mmo_item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_job`
--

LOCK TABLES `mmo_job` WRITE;
/*!40000 ALTER TABLE `mmo_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `mmo_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_job_progress`
--

DROP TABLE IF EXISTS `mmo_job_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_job_progress` (
  `idProgress` int(11) NOT NULL AUTO_INCREMENT,
  `idJob` int(11) DEFAULT NULL,
  `itemArchived` varchar(10) DEFAULT NULL,
  `progressDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `progressDesc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProgress`),
  KEY `fk_mmo_job_progress_1_idx` (`idJob`),
  CONSTRAINT `fk_mmo_job_progress_1` FOREIGN KEY (`idJob`) REFERENCES `mmo_job` (`idJob`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_job_progress`
--

LOCK TABLES `mmo_job_progress` WRITE;
/*!40000 ALTER TABLE `mmo_job_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `mmo_job_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_menu`
--

DROP TABLE IF EXISTS `mmo_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_menu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(45) DEFAULT NULL,
  `menuLink` varchar(100) DEFAULT NULL,
  `menuDesc` varchar(45) DEFAULT NULL,
  `menuParent` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_menu`
--

LOCK TABLES `mmo_menu` WRITE;
/*!40000 ALTER TABLE `mmo_menu` DISABLE KEYS */;
INSERT INTO `mmo_menu` VALUES (1,'Dashboard','http://localhost:8983/admin/index.php?mmopilot=dashboard','Dashboard',NULL),(2,'Users','http://localhost:8983/admin/index.php?mmopilot=users','Users',NULL),(3,'Role Management','http://localhost:8983/admin/index.php?mmopilot=managerole','Role',NULL),(5,'Job Progress','http://localhost:8983/admin/index.php?mmopilot=jobprogress','job progress','8'),(6,'Order','http://localhost:8983/admin/index.php?mmopilot=order','Order management',NULL),(7,'Item','http://localhost:8983/admin/index.php?mmopilot=item','Item Management',NULL),(8,'Job','http://localhost:8983/admin/index.php?mmopilot=job','job management',NULL);
/*!40000 ALTER TABLE `mmo_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_operator_shift`
--

DROP TABLE IF EXISTS `mmo_operator_shift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_operator_shift` (
  `idShift` int(11) NOT NULL AUTO_INCREMENT,
  `idJob` int(11) DEFAULT NULL,
  `senin` varchar(45) DEFAULT NULL,
  `selasa` varchar(45) DEFAULT NULL,
  `rabu` varchar(45) DEFAULT NULL,
  `kamis` varchar(45) DEFAULT NULL,
  `jumat` varchar(45) DEFAULT NULL,
  `sabtu` varchar(45) DEFAULT NULL,
  `minggu` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idShift`),
  KEY `fk_mmo_operator_shift_1_idx` (`idJob`),
  CONSTRAINT `fk_mmo_operator_shift_1` FOREIGN KEY (`idJob`) REFERENCES `mmo_job` (`idJob`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_operator_shift`
--

LOCK TABLES `mmo_operator_shift` WRITE;
/*!40000 ALTER TABLE `mmo_operator_shift` DISABLE KEYS */;
INSERT INTO `mmo_operator_shift` VALUES (1,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(8,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(9,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(10,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(11,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(12,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(13,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(14,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(15,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(16,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(17,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(18,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on'),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on'),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on');
/*!40000 ALTER TABLE `mmo_operator_shift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_order`
--

DROP TABLE IF EXISTS `mmo_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_order` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `orderNote` varchar(500) NOT NULL,
  `orderStatus` varchar(32) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(10) DEFAULT NULL,
  `updatedBy` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idOrder`),
  KEY `fk_mmo_order_1_idx` (`idClient`),
  CONSTRAINT `fk_mmo_order_1` FOREIGN KEY (`idClient`) REFERENCES `mmo_users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_order`
--

LOCK TABLES `mmo_order` WRITE;
/*!40000 ALTER TABLE `mmo_order` DISABLE KEYS */;
INSERT INTO `mmo_order` VALUES (2,2,'USD','232131','3123123','1',NULL,NULL,'2019-11-01 06:38:46','2019-11-01 06:38:46','admin',NULL),(3,2,'USD','3213','3123123','1',NULL,NULL,'2019-11-01 06:40:33','2019-11-01 06:40:33','admin',NULL);
/*!40000 ALTER TABLE `mmo_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_role`
--

DROP TABLE IF EXISTS `mmo_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_role` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(128) NOT NULL,
  `roleDesc` varchar(500) NOT NULL,
  `createdBy` varchar(10) DEFAULT NULL,
  `updatedBy` varchar(10) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `passHash` varchar(100) DEFAULT NULL,
  `job` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_role`
--

LOCK TABLES `mmo_role` WRITE;
/*!40000 ALTER TABLE `mmo_role` DISABLE KEYS */;
INSERT INTO `mmo_role` VALUES (1,'dasdasd','dsdads',NULL,NULL,'2019-10-26 06:54:03','2019-10-31 02:15:17','1','dsadsad','dasdasd','0df01ae7dd51cec48fed56952f40842b','admin'),(2,'123','weqwe',NULL,NULL,'2019-10-27 11:46:45','2019-10-31 14:59:14','1','eqweqw','eqweqwe','20fb92b2838715be8cf45679261d646b','operator'),(3,'dasdsd','dasdasd',NULL,NULL,'2019-10-27 13:25:11','2019-10-31 14:59:14','1','dasdadasdasd','dasdadas','2e43738eee28660656e41af3383e5f62','operator'),(6,'Super Admin','SuperAdmin',NULL,NULL,'2019-10-31 14:58:59','2019-10-31 14:59:14','1','admin','admin','21232f297a57a5a743894a0e4a801fc3','SuperAdmin'),(10,'Super','Super Operator',NULL,NULL,'2019-10-31 15:45:14','2019-10-31 15:45:14',NULL,'op1','opeope','f06cc0b9875f9e4a3d2094fcb365db87','operator'),(11,'CLient1','client',NULL,NULL,'2019-11-01 06:16:50','2019-11-01 06:16:50',NULL,'dasd','dasda','8f4031bfc7640c5f267b11b6fe0c2507','client');
/*!40000 ALTER TABLE `mmo_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_users`
--

DROP TABLE IF EXISTS `mmo_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `roleId` int(11) DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `isActive` varchar(128) DEFAULT NULL,
  `createdBy` varchar(10) NOT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` varchar(10) DEFAULT NULL,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `facebook` varchar(100) DEFAULT NULL,
  `discord` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `homeAddress` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `fk_mmo_users_1_idx` (`roleId`),
  CONSTRAINT `fk_mmo_users_1` FOREIGN KEY (`roleId`) REFERENCES `mmo_role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_users`
--

LOCK TABLES `mmo_users` WRITE;
/*!40000 ALTER TABLE `mmo_users` DISABLE KEYS */;
INSERT INTO `mmo_users` VALUES (1,10,'1','1','1','1','2019-10-31 15:45:14','1','2019-10-31 15:45:14','1','1','1','1','1'),(2,11,'Android','panjidia995@gmail.com','1','admin','2019-11-01 06:16:04',NULL,'2019-11-01 06:16:50','panji','panji','panji','0312312','panji');
/*!40000 ALTER TABLE `mmo_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_role_menu`
--

DROP TABLE IF EXISTS `tr_role_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tr_role_menu` (
  `roleMenuId` int(11) NOT NULL AUTO_INCREMENT,
  `idRole` int(11) DEFAULT NULL,
  `idMenu` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`roleMenuId`),
  KEY `fk_tr_role_menu_1_idx` (`idRole`),
  KEY `fk_tr_role_menu_2_idx` (`idMenu`),
  CONSTRAINT `fk_tr_role_menu_1` FOREIGN KEY (`idRole`) REFERENCES `mmo_role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tr_role_menu_2` FOREIGN KEY (`idMenu`) REFERENCES `mmo_menu` (`idMenu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_role_menu`
--

LOCK TABLES `tr_role_menu` WRITE;
/*!40000 ALTER TABLE `tr_role_menu` DISABLE KEYS */;
INSERT INTO `tr_role_menu` VALUES (1,1,5,'2019-10-31 02:15:17','2019-10-31 02:15:17'),(5,2,1,'2019-10-27 11:46:46','2019-10-27 11:46:46'),(6,2,2,'2019-10-27 11:46:46','2019-10-27 11:46:46'),(7,2,8,'2019-10-27 11:46:46','2019-10-27 11:46:46'),(8,2,5,'2019-10-27 11:46:47','2019-10-27 11:46:47'),(9,3,1,'2019-10-27 13:25:12','2019-10-27 13:25:12'),(10,3,2,'2019-10-27 13:25:12','2019-10-27 13:25:12'),(11,3,5,'2019-10-27 13:25:12','2019-10-27 13:25:12'),(13,1,8,'2019-10-31 02:15:17','2019-10-31 02:15:17'),(23,10,7,'2019-10-31 15:45:14','2019-10-31 15:45:14'),(24,10,8,'2019-10-31 15:45:14','2019-10-31 15:45:14'),(25,10,5,'2019-10-31 15:45:14','2019-10-31 15:45:14'),(26,11,5,'2019-11-01 06:16:50','2019-11-01 06:16:50');
/*!40000 ALTER TABLE `tr_role_menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-01 13:42:03
