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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_item`
--

LOCK TABLES `mmo_item` WRITE;
/*!40000 ALTER TABLE `mmo_item` DISABLE KEYS */;
INSERT INTO `mmo_item` VALUES (2,'dadadasd','dasadfasdas','images/imagemem.png','dasdascxzcwqesx','2019-10-26 11:02:14','2019-10-26 11:02:14',NULL,NULL),(4,'buku','','images/Selection_012.png','dasda','2019-10-28 05:57:51','2019-10-28 05:57:51',NULL,NULL),(5,'Tas','','images/imagemem.png','tas','2019-11-04 13:17:14','2019-11-04 13:17:14',NULL,NULL);
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
  `priority` int(11) DEFAULT NULL,
  `createdBy` varchar(10) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updateBy` varchar(10) DEFAULT NULL,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idJob`),
  KEY `fk_mmo_job_1_idx` (`idOperator`),
  KEY `fk_mmo_job_2_idx` (`idOrder`),
  KEY `fk_mmo_job_3_idx` (`jobParent`),
  KEY `fk_mmo_job_4_idx` (`idItem`),
  CONSTRAINT `fk_mmo_job_1` FOREIGN KEY (`idOperator`) REFERENCES `mmo_users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mmo_job_2` FOREIGN KEY (`idOrder`) REFERENCES `mmo_order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mmo_job_3` FOREIGN KEY (`jobParent`) REFERENCES `mmo_job` (`idJob`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mmo_job_4` FOREIGN KEY (`idItem`) REFERENCES `mmo_item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_job`
--

LOCK TABLES `mmo_job` WRITE;
/*!40000 ALTER TABLE `mmo_job` DISABLE KEYS */;
INSERT INTO `mmo_job` VALUES (1,1,1,NULL,4,'qwqw',1,'2019-11-19',123,5,'admin','2019-11-04 14:49:53',NULL,'2019-11-04 14:49:53');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_menu`
--

LOCK TABLES `mmo_menu` WRITE;
/*!40000 ALTER TABLE `mmo_menu` DISABLE KEYS */;
INSERT INTO `mmo_menu` VALUES (9,'Job','-','-',NULL),(10,'Manage Job','?mmopilot=managejob',NULL,'9'),(11,'Add Job','?mmopilot=addjob',NULL,'9'),(12,'Job Progress','?mmopilot=jobprogress',NULL,'9'),(13,'Progress Report','?mmopilot=progressreport',NULL,'9'),(14,'Item','-',NULL,NULL),(15,'Manage Item','?mmopilot=manageitem',NULL,'14'),(16,'Add Item','?mmopilot=additem',NULL,'14'),(17,'Order',NULL,NULL,NULL),(18,'Manage Order','?mmopilot=manageorder',NULL,'17'),(19,'Add Order','?mmopilot=addorder',NULL,'17'),(20,'Role',NULL,NULL,NULL),(21,'Manage Role','?mmopilot=managerole',NULL,'20'),(22,'Add Role','?mmopilot=addrole',NULL,'20'),(23,'Users',NULL,NULL,NULL),(24,'Manage Users','?mmopilot=manageusers',NULL,'23'),(25,'Add Users','?mmopilot=addusers',NULL,'23');
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_operator_shift`
--

LOCK TABLES `mmo_operator_shift` WRITE;
/*!40000 ALTER TABLE `mmo_operator_shift` DISABLE KEYS */;
INSERT INTO `mmo_operator_shift` VALUES (1,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(8,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(9,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(10,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(11,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(12,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(13,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(14,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(15,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(16,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(17,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(18,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on'),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on'),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on'),(22,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(23,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(24,NULL,'on',NULL,NULL,NULL,NULL,NULL,NULL),(25,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(26,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(27,NULL,NULL,'on',NULL,NULL,NULL,NULL,NULL),(28,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(29,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(30,NULL,NULL,NULL,'on',NULL,NULL,NULL,NULL),(31,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(32,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(33,NULL,NULL,NULL,NULL,'on',NULL,NULL,NULL),(34,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(35,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(36,NULL,NULL,NULL,NULL,NULL,'on',NULL,NULL),(37,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(38,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(39,NULL,NULL,NULL,NULL,NULL,NULL,'on',NULL),(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on'),(41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on'),(42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'on');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_order`
--

LOCK TABLES `mmo_order` WRITE;
/*!40000 ALTER TABLE `mmo_order` DISABLE KEYS */;
INSERT INTO `mmo_order` VALUES (1,2,'USD','123','123','1',NULL,NULL,'2019-11-04 14:49:28','2019-11-04 14:49:28','admin',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_role`
--

LOCK TABLES `mmo_role` WRITE;
/*!40000 ALTER TABLE `mmo_role` DISABLE KEYS */;
INSERT INTO `mmo_role` VALUES (6,'Super Admin','SuperAdmin',NULL,NULL,'2019-10-31 14:58:59','2019-10-31 14:59:14','1','admin','admin','21232f297a57a5a743894a0e4a801fc3','SuperAdmin'),(12,'test','123',NULL,NULL,'2019-11-04 10:24:57','2019-11-04 10:24:57',NULL,'monic123','monic123','b49f4761381336551e1f041dff6139e6','admin'),(13,'123','123',NULL,NULL,'2019-11-04 11:31:22','2019-11-04 11:31:22',NULL,'qwer','1234','81dc9bdb52d04dc20036dbd8313ed055','client'),(14,'coba','coba',NULL,NULL,'2019-11-04 13:14:07','2019-11-04 13:14:07',NULL,'coba','coba123','a3040f90cc20fa672fe31efcae41d2db','operator'),(15,'qweqe','wqwqeqweqeqw',NULL,NULL,'2019-11-04 14:47:12','2019-11-04 14:47:12',NULL,'panji','panji','d6b16b990a41b83f81a58d38ad7265f1','operator'),(16,'sdadasd','dasdasd',NULL,NULL,'2019-11-04 14:49:06','2019-11-04 14:49:06',NULL,'qa','qa','8264ee52f589f4c0191aa94f87aa1aeb','client');
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
INSERT INTO `mmo_users` VALUES (1,15,'1212','121212@gmail.com','1','admin','2019-11-04 14:46:20',NULL,'2019-11-04 14:47:12','1212','21212','212','102121','asd'),(2,16,'asd','asd@gmail.com','1','admin','2019-11-04 14:48:16',NULL,'2019-11-04 14:49:06','12','1212','1212','3','asd');
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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_role_menu`
--

LOCK TABLES `tr_role_menu` WRITE;
/*!40000 ALTER TABLE `tr_role_menu` DISABLE KEYS */;
INSERT INTO `tr_role_menu` VALUES (27,12,9,'2019-11-04 10:24:57','2019-11-04 10:24:57'),(28,12,10,'2019-11-04 10:24:57','2019-11-04 10:24:57'),(29,12,11,'2019-11-04 10:24:57','2019-11-04 10:24:57'),(30,12,12,'2019-11-04 10:24:57','2019-11-04 10:24:57'),(31,12,13,'2019-11-04 10:24:57','2019-11-04 10:24:57'),(32,12,14,'2019-11-04 10:24:57','2019-11-04 10:24:57'),(33,12,15,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(34,12,16,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(35,12,17,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(36,12,18,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(37,12,19,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(38,12,20,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(39,12,21,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(40,12,22,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(41,12,23,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(42,12,24,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(43,12,25,'2019-11-04 10:24:58','2019-11-04 10:24:58'),(44,6,9,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(45,6,10,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(46,6,11,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(47,6,12,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(48,6,13,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(49,6,14,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(50,6,15,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(51,6,16,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(52,6,17,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(53,6,18,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(54,6,19,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(55,6,20,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(56,6,21,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(57,6,22,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(58,6,23,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(59,6,24,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(60,6,25,'2019-11-04 10:42:41','2019-11-04 10:42:41'),(61,13,9,'2019-11-04 11:31:22','2019-11-04 11:31:22'),(62,13,10,'2019-11-04 11:31:22','2019-11-04 11:31:22'),(63,14,9,'2019-11-04 13:14:08','2019-11-04 13:14:08'),(64,14,12,'2019-11-04 13:14:08','2019-11-04 13:14:08'),(65,14,13,'2019-11-04 13:14:08','2019-11-04 13:14:08'),(66,14,14,'2019-11-04 13:14:08','2019-11-04 13:14:08'),(67,14,15,'2019-11-04 13:14:08','2019-11-04 13:14:08'),(68,14,16,'2019-11-04 13:14:08','2019-11-04 13:14:08'),(69,15,9,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(70,15,10,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(71,15,11,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(72,15,12,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(73,15,13,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(74,15,14,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(75,15,15,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(76,15,16,'2019-11-04 14:47:12','2019-11-04 14:47:12'),(77,16,9,'2019-11-04 14:49:06','2019-11-04 14:49:06'),(78,16,10,'2019-11-04 14:49:06','2019-11-04 14:49:06'),(79,16,11,'2019-11-04 14:49:06','2019-11-04 14:49:06');
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

-- Dump completed on 2019-11-05 23:56:56
