CREATE DATABASE  IF NOT EXISTS `gym` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gym`;
-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: gym
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Igor Babko','i.i.babko@gmail.com','$2y$10$FkRcxYCUC28KmRglHfbZjuFqPfYNgEN1uc2hUmoM8TX7q6bk89Z7u','QUQOwSAYfIEw2vg2iaukrhF0oHnpDovbJszawF2BEv0MJFRcbgozGT2UkQbx','2016-04-27 03:25:12','2016-04-27 06:55:05'),(3,'Jeck','24jeka24djjeck@gmail.com','$2y$10$AJ2gaUHY2ZBp0orSLkMHieupk3yuc/faYjgpj.d9J5PGEWpytig/e',NULL,'2016-04-27 04:33:37','2016-04-27 04:33:37'),(4,'MadaraUA','yra_uzumaki@i.ua','$2y$10$9L.utBWcmFL5xcf0oYOvg.9G9s42N/uOTUa6WruFT7kMBZjFR9K.C','2YeAvIkhCOWxD4tmPrsJrkpUBNR91xVUwUa7ozSL5AsAJ4jMbbPQ8o0DOGSE','2016-04-27 07:40:22','2016-04-27 07:40:30'),(5,'Eugeny','24jeka24djjec2k@gmail.com','$2y$10$dSqYG6t21Ai66CVl78FMnujIyVg63FyK5otgCKk3BH0fhUx5X/5ZG','ObcZXER79wzf5GdemHharRsNREE6KJfrc54ufmDBc6NvNBB3oZl0ZQwurobE','2016-05-02 18:54:50','2016-05-03 05:20:08');
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

-- Dump completed on 2016-05-04  5:42:26
