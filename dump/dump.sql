-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbd
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `idcategory` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'компьютеры'),(2,'Ноутбуки'),(3,'Смартфоны'),(4,'Планшеты'),(5,'Оргтехника'),(6,'Аксесуары');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `commet_author` varchar(50) NOT NULL,
  `comment_text` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `productid` int NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `productid` (`productid`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`idproduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `photos_id` int NOT NULL AUTO_INCREMENT,
  `photos_name` varchar(100) NOT NULL,
  `product_id` int DEFAULT NULL,
  PRIMARY KEY (`photos_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`idproduct`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'ipad1.jpg',11),(2,'ipad2.jpg',11),(3,'ipad3.jpg',11),(4,'ipad4.jpg',11),(5,'ipad5.jpg',11),(6,'iphon1.jpg',9),(7,'iphon2.jpg',9),(8,'iphon3.jpg',9),(9,'iphon4.jpg',9),(10,'iphon5.jpg',9),(11,'mfu1.jpg',12),(12,'mfu2.jpg',12),(13,'mfu3.jpg',12),(14,'mfu4.jpg',12),(15,'mfu5.jpg',12),(16,'rtiton1.jpg',13),(17,'rtiton2.jpg',13),(18,'rtiton3.jpg',13),(19,'rtiton4.jpg',13),(20,'uri1.jpg',10),(21,'uri2.jpg',10),(22,'uri3.jpg',10);
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `idproduct` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_info` varchar(100) NOT NULL,
  `product_main_photo` varchar(200) NOT NULL,
  `count` int DEFAULT NULL,
  `category_idcategory` int NOT NULL,
  PRIMARY KEY (`idproduct`),
  KEY `fk_product_category_idx` (`category_idcategory`),
  CONSTRAINT `fk_product_category` FOREIGN KEY (`category_idcategory`) REFERENCES `category` (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (9,'iphone 11','Совершенно новая система двух камер со сверхширокоугольной камерой. ','iphone.png',12,3),(10,'uriHOME','процессор: Intel Core i5 9400F; частота процессора: 2.9 ГГц (4.1 ГГц, в режиме Turbo); ','comp_uri.png',1,1),(11,'IPAD',' сенсорный экран 10.2\" (25.9 см), разрешение: 2160 x 1620, Multitouch, Wi-Fi, Bluetooth','ipad.png',34,4),(12,'CANON PIXMA MG2540S,','Струйное цветное МФУ CANON PIXMA MG2540S объединяет в себе функционал сканера','mfu.png',66,5),(13,'TRITON','Мощьный игровой ноутбук','triton.png',2,2);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_info`
--

DROP TABLE IF EXISTS `product_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_info` (
  `idproduct_info` int NOT NULL AUTO_INCREMENT,
  `price` decimal(15,2) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `processor_line` varchar(45) DEFAULT NULL,
  `cores_in_processor` int DEFAULT NULL,
  `operation_member` int DEFAULT NULL,
  `type_video_member` varchar(20) DEFAULT NULL,
  `video_member` int DEFAULT NULL,
  `type_member` varchar(20) DEFAULT NULL,
  `sum_member` varchar(10) DEFAULT NULL,
  `operation_sistem` varchar(50) DEFAULT NULL,
  `wifi` tinyint NOT NULL DEFAULT '0',
  `free_devilary` tinyint NOT NULL DEFAULT '0',
  `discounts` tinyint NOT NULL DEFAULT '0',
  `guarantee` tinyint NOT NULL DEFAULT '0',
  `type_devilary` varchar(45) DEFAULT NULL,
  `time_devilary` varchar(45) DEFAULT NULL,
  `screen_size` varchar(45) DEFAULT NULL,
  `screen_resolution` varchar(45) DEFAULT NULL,
  `battery` varchar(45) DEFAULT NULL,
  `card_member` tinyint NOT NULL DEFAULT '0',
  `nfc` tinyint NOT NULL DEFAULT '0',
  `two_sim` tinyint NOT NULL DEFAULT '0',
  `gps` tinyint NOT NULL DEFAULT '0',
  `camera` int DEFAULT NULL,
  `product_idproduct` int NOT NULL,
  PRIMARY KEY (`idproduct_info`),
  KEY `fk_product_info_product1_idx` (`product_idproduct`),
  CONSTRAINT `fk_product_info_product1` FOREIGN KEY (`product_idproduct`) REFERENCES `product` (`idproduct`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_info`
--

LOCK TABLES `product_info` WRITE;
/*!40000 ALTER TABLE `product_info` DISABLE KEYS */;
INSERT INTO `product_info` VALUES (16,1000.00,'apple','Смартфон',NULL,0,NULL,NULL,2,NULL,'16','ios',1,0,1,1,'самовывоз','любое время','26`','1024 - 1080','3000 mA/h',1,1,1,1,12,9),(17,3000.00,'hp','Компьютер','intel',2,16,'Дискретная',8,'SSD','1 ТБ','Windows',1,0,1,1,'самовывоз','любое время','26`',NULL,NULL,1,1,1,1,12,10),(18,1500.00,'apple','Планшет',NULL,0,NULL,NULL,2,NULL,'16 ГБ','ios',1,0,1,1,'самовывоз','любое время','26`','1024 - 1080','3000 mA/h',1,1,1,1,12,11),(19,2000.00,'sony','Оргтехника',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,1,0,1,1,'самовывоз','любое время','26`',NULL,NULL,1,1,1,1,NULL,12),(20,5000.00,'predator','ноутбуки','intel',4,16,'Дискретная',8,'SSD','1 ТБ','Windows',1,0,1,1,'самовывоз','любое время','26`',NULL,NULL,1,1,1,1,12,13);
/*!40000 ALTER TABLE `product_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idusers` int NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','$2y$10$dr5k3LLPOX7OqSzRALa31uoyFSlxYAWj.fN6IKd3ECRLcsHTLmapW','root@gmail.com'),(2,'qwe','$2y$10$0oQH7NhaBq/zEyMGNOoG1OH8MEQfe8hn2vFeIll7w.x/TCLmISk8u','qwe@mail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-07 16:47:16
