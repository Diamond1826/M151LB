-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: m151LB
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `classId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`classId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,'UIFZ-626001'),(2,'UIFZ-353003'),(6,'UIFZ-213556'),(5,'Unallocated Students');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_classes_table',1),(2,'2014_10_12_000000_create_students_table',1),(3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `studentsId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classId` int(11) NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`studentsId`),
  KEY `students_classid_foreign` (`classId`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,1,'kzgkFWVmLN','noUcL1xuvi','F1qmPzfckL@gmail.com','Vh5Zm7BHAH','5509','YGGzFyrwFk'),(2,1,'hATXE055TT','GGZFscI1nL','9PBBRNYAZN@gmail.com','8EJHzIiaLT','2313','vJiHcS2DDi'),(3,1,'QmLshXLcg5','KFfEqiKt47','1IRHPiSUtQ@gmail.com','4ugmD0Ycc1','5840','NP8WJvkRQR'),(4,6,'swBbDrb4Q5','WZDSTRi0AE','vGHmuWXY4a@gmail.com','ZIrNLgNr9e','6652','SkW8pKFhXR'),(5,1,'gSD7nESWf1','CsWRMhfXOh','fFKFtoAssu@gmail.com','4jThbTf4CJ','4767','oDoAsYCVqB'),(6,1,'WxbGHv3w62','E97nKkHI8O','ANBLvFoCpF@gmail.com','MRfE09azBE','9927','mSI7fvKAbW'),(7,1,'0jCmk0oqAZ','OMTSB2GNJ1','D11y2cyAvh@gmail.com','mXlmiXBnZK','4962','lZeV6a0ygo'),(8,1,'0sAdPUoANi','w9bxVLVnsx','4ziaLBNCjh@gmail.com','qse37OF0bL','9091','e3kySwfS3v'),(9,1,'BIHuRHCMYn','9WpIEYDGrd','GlX8Ko9Y5u@gmail.com','Nxdsm9xymU','2181','24gm2hA7vK'),(10,1,'2zC8k2HIfs','dS8To8WCJA','zpkuQJUCrc@gmail.com','J91b4Zy0vi','1263','PLmvCJ2t8h'),(11,1,'vIlU3yLOYL','gGlA76OVwy','gj4lPyGyId@gmail.com','Gs74ovZzjr','8868','OuEba0XSq9'),(12,1,'HtBl9tmpMw','jviK9pGEFq','Udy5bIj9Ts@gmail.com','qM6yfgPRLD','6446','DE6NJMhJUY'),(13,1,'lSxPULcrxD','S3EwlgkF2X','0EeEeR3cnk@gmail.com','VQyZP6EmmD','1218','rlgLgSZScA'),(14,1,'hCyouCm1wo','kTmoXr1orm','XhxXjWZ8Z8@gmail.com','eyASUAmOlP','2002','7O5wuURPnI'),(15,1,'mMA9dd11zR','6TKMtOePv1','TcqmoXoMsO@gmail.com','9edK2eeWrQ','1529','B3nNEuy8CP'),(16,1,'ITpzb368Ph','hQYyzVBYBE','aS1kWDr1KL@gmail.com','HulI9u8Rlb','2287','KsG0GYom9B'),(17,1,'9jdf9Cp7Qf','O6r8QJ3sjz','RY1uTsq0go@gmail.com','mGtv1uWAx2','4554','6vFjaCm7kS'),(18,6,'Armend','Ponik','armend@gmx.com','Teststrasse 2','7788','Arbon'),(19,1,'7i9UnUTlPW','WO0NxP2Lz2','Qm4k2jZ7tb@gmail.com','owhSfUHCA1','6461','wdgGAQOK8f'),(20,1,'ZCvEoY919J','atspdHJMBS','UJ1RPhbpA9@gmail.com','rUKQqo9aUE','7445','5DC9s6yE5A'),(21,1,'16VtL9S4GU','pKJfpewkvh','H7MtnDklAR@gmail.com','neZDK85dJj','1841','xMAzmDYuAP'),(22,1,'2NIJZR8GjE','oADXN1Z8H7','nHxtGisRiY@gmail.com','xZW3cABwAP','5034','NRN1tsmYBe'),(23,1,'9oO9o8Qagv','l7Qra4166p','jf1jg1YQ5o@gmail.com','mJZk99ZPYm','9591','SHX5luWuLP'),(24,1,'5UpOQ9UuCk','mHkK5lrqsx','tSWrd3NicK@gmail.com','W3rWgzUMhe','3496','IU1cXP5ZLM'),(25,1,'bGxhbs8EfF','QrMVEp2ijL','ynb2Nv5HHc@gmail.com','NGOi7FFz5D','2256','3k1SCR5pC6'),(26,6,'fghjkl','fghjkl','fghjkl@gmail.com','fghjkl','6655','gvhjbkl'),(36,2,'Joseph','Meier','vbnm@fgh.ch','Meirstrats','5566','cvbn'),(34,2,'Dimitrij','Schaufelberger','diamond1826@hotmail.com','St. Gallerstrasse 25','9400','Rorschacherberg');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Schaufelberger Dimitrij','diamond1826@hotmail.com','$2y$10$eg.nOyROddUkjczb7cAFcODTPtF3K47E2mf0vGoZGYYMyxORQOwrC','uuGrYU0XF70dVuqvGcRTwXzIWiwWQoLwILJeHIWtT911JFGg9hFK05QWAtXE','2017-07-03 14:01:31','2017-07-03 14:01:31');
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

-- Dump completed on 2017-07-06 14:24:47
