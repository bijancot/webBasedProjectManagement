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
  `idItem` varchar(10) NOT NULL,
  `itemName` varchar(100) DEFAULT NULL,
  `itemDescription` varchar(500) DEFAULT NULL,
  `itemIcon` varchar(400) DEFAULT NULL,
  `itemLink` varchar(128) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(10) DEFAULT NULL,
  `editedBy` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_item`
--

LOCK TABLES `mmo_item` WRITE;
/*!40000 ALTER TABLE `mmo_item` DISABLE KEYS */;
INSERT INTO `mmo_item` VALUES ('ITEM0001','Sepatu','Sepatu Game','Sepatu.jpg','haaa','2019-08-28 07:28:00','2019-08-28 07:37:48',NULL,NULL),('ITEM0002','Topi','Topi Game','Topi.jpg','aaa','2019-08-28 07:28:18','2019-08-28 07:37:47',NULL,NULL),('ITEM0003','Pedang','PEdang Gmae','Pedang.jpg','eeee','2019-08-28 07:28:30','2019-08-28 07:37:47',NULL,NULL),('ITEM0004','dasdsad','dasdasd',NULL,'dasdasd','2019-10-22 04:53:33','2019-10-22 04:53:33','','');
/*!40000 ALTER TABLE `mmo_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_job`
--

DROP TABLE IF EXISTS `mmo_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_job` (
  `idJob` varchar(10) NOT NULL,
  `idOperator` varchar(10) DEFAULT NULL,
  `idOrder` varchar(10) DEFAULT NULL,
  `jobParent` varchar(10) DEFAULT NULL,
  `idItem` varchar(10) DEFAULT NULL,
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
INSERT INTO `mmo_job` VALUES ('JOB0001','USR002','ORDE0001',NULL,'ITEM0001','test',0,'10',1000,100,5,'admin','2019-08-28 07:36:29','','2019-08-28 07:36:29','');
/*!40000 ALTER TABLE `mmo_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_job_progress`
--

DROP TABLE IF EXISTS `mmo_job_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_job_progress` (
  `idProgress` varchar(10) NOT NULL,
  `idJob` varchar(10) DEFAULT NULL,
  `itemArchived` varchar(10) DEFAULT NULL,
  `progressDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
INSERT INTO `mmo_job_progress` VALUES ('PROG0001','JOB0001','10','2019-08-28 07:38:32','2019-08-28 07:38:32');
/*!40000 ALTER TABLE `mmo_job_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_menu`
--

DROP TABLE IF EXISTS `mmo_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_menu` (
  `idMenu` varchar(10) NOT NULL,
  `menuName` varchar(45) DEFAULT NULL,
  `menuLink` varchar(100) DEFAULT NULL,
  `menuDesc` varchar(45) DEFAULT NULL,
  `menuParent` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_menu`
--

LOCK TABLES `mmo_menu` WRITE;
/*!40000 ALTER TABLE `mmo_menu` DISABLE KEYS */;
INSERT INTO `mmo_menu` VALUES ('MEN01','Dashboard','localhost/mmo/dashboard',NULL,NULL),('MEN02','Order manajemen','localhost/mmo/order',NULL,NULL),('MEN03','Role Manajemen','localhost/mmo/role',NULL,NULL),('MEN04','Users','localhost/mmo/users',NULL,NULL),('MEN05','Job Management','localhost/mmo/job',NULL,NULL),('MEN06','Progress Report','localhost/mmo/progress',NULL,NULL),('MEN07','Timeline Project','localhost/mmo/timeline',NULL,NULL),('MEN08','Tambah Role','localhost/mmo/tambahrole',NULL,'MEN03');
/*!40000 ALTER TABLE `mmo_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_order`
--

DROP TABLE IF EXISTS `mmo_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_order` (
  `idOrder` varchar(10) NOT NULL,
  `idClient` varchar(10) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `orderNote` varchar(500) NOT NULL,
  `orderStatus` varchar(32) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(10) DEFAULT NULL,
  `updatedBy` varchar(10) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idOrder`),
  KEY `fk_mmo_order_1_idx` (`idClient`),
  CONSTRAINT `fk_mmo_order_1` FOREIGN KEY (`idClient`) REFERENCES `mmo_users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_order`
--

LOCK TABLES `mmo_order` WRITE;
/*!40000 ALTER TABLE `mmo_order` DISABLE KEYS */;
INSERT INTO `mmo_order` VALUES ('ORDE0001','USR003','dollar','300','catatan order','0','panji','panji123','0000-00-00 00:00:00','2019-08-28 07:33:52','admin',NULL,'');
/*!40000 ALTER TABLE `mmo_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_role`
--

DROP TABLE IF EXISTS `mmo_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_role` (
  `idRole` varchar(10) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_role`
--

LOCK TABLES `mmo_role` WRITE;
/*!40000 ALTER TABLE `mmo_role` DISABLE KEYS */;
INSERT INTO `mmo_role` VALUES ('ROLE01','Super Admin','','',NULL,'2019-08-27 16:55:38','2019-10-13 11:56:46','',NULL,NULL,NULL,'super'),('ROLE02','Operator','','',NULL,'2019-08-28 06:07:44','2019-10-13 11:56:46','',NULL,NULL,NULL,'operator'),('ROLE03','client','','',NULL,'2019-08-28 07:26:32','2019-10-13 11:56:46','',NULL,NULL,NULL,'client'),('ROLE04','dsad','dasdsa',NULL,NULL,'2019-10-20 15:13:27','2019-10-21 15:35:56','0','qwe','123','202cb962ac59075b964b07152d234b70','admin'),('ROLE05','dad','dasd',NULL,NULL,'2019-10-21 15:47:24','2019-10-21 23:41:38','0','dasda','dasdas','89defae676abd3e3a42b41df17c40096',NULL);
/*!40000 ALTER TABLE `mmo_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmo_users`
--

DROP TABLE IF EXISTS `mmo_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmo_users` (
  `idUser` varchar(10) NOT NULL,
  `roleId` varchar(10) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `isActive` varchar(128) DEFAULT NULL,
  `createdBy` varchar(10) NOT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` varchar(10) NOT NULL,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `facebook` varchar(100) DEFAULT NULL,
  `discord` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `homeAddress` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `fk_mmo_users_1_idx` (`roleId`),
  CONSTRAINT `fk_mmo_users_1` FOREIGN KEY (`roleId`) REFERENCES `mmo_role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmo_users`
--

LOCK TABLES `mmo_users` WRITE;
/*!40000 ALTER TABLE `mmo_users` DISABLE KEYS */;
INSERT INTO `mmo_users` VALUES ('USR001','ROLE01','admin','admin@mmopilot.com','1','','2019-08-27 17:06:09','','2019-08-27 17:06:09',NULL,NULL,NULL,NULL,'test'),('USR002','ROLE02','Operator1','op1@mmopilot.com','1','','2019-08-28 07:24:08','','2019-08-28 07:24:08',NULL,NULL,NULL,NULL,'test'),('USR003','ROLE03','client','dasdsa','1','','2019-08-28 07:29:35','','2019-08-28 07:29:35',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `mmo_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_role_menu`
--

DROP TABLE IF EXISTS `tr_role_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tr_role_menu` (
  `roleMenuId` varchar(11) NOT NULL,
  `idRole` varchar(10) DEFAULT NULL,
  `idMenu` varchar(45) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`roleMenuId`),
  KEY `fk_tr_role_menu_1_idx` (`idMenu`),
  KEY `fk_tr_role_menu_2_idx` (`idRole`),
  CONSTRAINT `fk_tr_role_menu_1` FOREIGN KEY (`idMenu`) REFERENCES `mmo_menu` (`idMenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tr_role_menu_2` FOREIGN KEY (`idRole`) REFERENCES `mmo_role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_role_menu`
--

LOCK TABLES `tr_role_menu` WRITE;
/*!40000 ALTER TABLE `tr_role_menu` DISABLE KEYS */;
INSERT INTO `tr_role_menu` VALUES ('ROM01','ROLE04','MEN02','2019-10-20 15:13:27','2019-10-20 15:13:27'),('ROM02','ROLE04','MEN08','2019-10-20 15:13:27','2019-10-20 15:13:27'),('ROM03','ROLE04','MEN07','2019-10-20 15:13:27','2019-10-20 15:13:27'),('ROM04','ROLE05','MEN08','2019-10-21 15:47:25','2019-10-21 15:47:25'),('ROM05','ROLE05','MEN04','2019-10-21 15:47:25','2019-10-21 15:47:25'),('ROM06','ROLE05','MEN05','2019-10-21 15:47:25','2019-10-21 15:47:25'),('ROM07','ROLE05','MEN06','2019-10-21 15:47:25','2019-10-21 15:47:25');
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

-- Dump completed on 2019-10-23  8:58:28
