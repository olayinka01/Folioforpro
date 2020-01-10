-- MySQL dump 10.13  Distrib 5.6.29, for Win32 (AMD64)
--
-- Host: localhost    Database: folioforpro52
-- ------------------------------------------------------
-- Server version	5.6.29

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
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'none','Select Country','NULL','2019-06-21 10:07:55','2019-06-21 10:07:55'),(2,'nigeria00','Nigeria','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2019_12_10_133830_create_password_reminders_table',1),('2019_12_10_134414_create_professions_table',1),('2019_12_10_140456_create_users_table',1),('2019_12_10_141023_create_projects_table',1),('2019_12_10_141302_create_portfolios_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reminders`
--

DROP TABLE IF EXISTS `password_reminders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reminders`
--

LOCK TABLES `password_reminders` WRITE;
/*!40000 ALTER TABLE `password_reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolios` (
  `pfid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `proj_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proj_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pfid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolios`
--

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` VALUES (1,'1','FFP20204885261','Lawal Idris','Artwork Store','Database Schema','5e15e3286962a.png','The tables, and structure of the database',NULL,NULL,NULL);
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professions`
--

DROP TABLE IF EXISTS `professions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profession_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professions`
--

LOCK TABLES `professions` WRITE;
/*!40000 ALTER TABLE `professions` DISABLE KEYS */;
INSERT INTO `professions` VALUES (1,'Select Profession',NULL,NULL),(2,'Architectural Engineer',NULL,NULL),(3,'Production Engineer',NULL,NULL),(4,'Software Engineer',NULL,NULL),(5,'Automobile Engineer',NULL,NULL),(6,'Civil Engineer',NULL,NULL),(7,'Electrical Engineer',NULL,NULL),(8,'Industrial Engineer',NULL,NULL),(9,'Computer Engineer',NULL,NULL),(10,'Microbiologist',NULL,NULL),(11,'Food Scientist',NULL,NULL),(12,'Geologist',NULL,NULL),(13,'Environmental Scientist',NULL,NULL);
/*!40000 ALTER TABLE `professions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pro_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proj_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'FFP20204885261','Artwork Store','www.yarth.com',NULL,NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` VALUES (1,'none','none','State/Province','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'abi00','nigeria00','Abia','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'fct00','nigeria00','Abuja FCT','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'ada00','nigeria00','Adamawa','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'akw00','nigeria00','Akwa Ibom','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'ana00','nigeria00','Anambra','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'bau00','nigeria00','Bauchi','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'ben00','nigeria00','Benue','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'bor00','nigeria00','Borno','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'cro00','nigeria00','Cross River','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'del00','nigeria00','Delta','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'ebo00','nigeria00','Ebonyi','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,'edo00','nigeria00','Edo','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,'eki00','nigeria00','Ekiti','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,'enu00','nigeria00','Enugu','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,'gom00','nigeria00','Gombe','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,'imo00','nigeria00','Imo','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'jig00','nigeria00','Jigawa','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,'kad00','nigeria00','Kaduna','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,'kan00','nigeria00','Kano','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,'kat00','nigeria00','Katsina','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,'keb00','nigeria00','Kebbi','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,'kog00','nigeria00','Kogi','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,'kwa00','nigeria00','Kwara','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,'ogu00','nigeria00','Ogun','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,'ond00','nigeria00','Ondo','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,'osu00','nigeria00','Osun','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,'oyo00','nigeria00','Oyo','NULL','0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,'lag00','nigeria00','Lagos',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pro_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession_id` int(10) unsigned DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_me` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `users_profession_id_foreign` (`profession_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'FFP20204885261',4,'Idris','Olayinka','Lawal','','yimicsidris@gmail.com','','$2y$10$gVUYmelWbqI4DmiCJ8mSVu7Yzt6RyDvEvi.qT0ld5awXgbRpkOH/m','08088786699','Software Engineer','','5e15e0caae2d0.png','5e15e091a2fc4.png','','Nigeria','','Egbeda','10 Ishola street','male','','','1','1',NULL,'2020-01-08 12:23:05','2020-01-08 12:23:05'),(2,'',NULL,'','','','','','admin','$2y$10$h4oqgoBg8UMwR0Jkqv1GqevMi6Cz.1qRjUFLkJs7Wzz6Y5dDnFWzq','','','','','','','','','','','','','','2','',NULL,'2020-01-08 12:25:28','2020-01-08 12:25:28'),(3,'',NULL,'','','','','','olayinka02','$2y$10$0q/CFOISFdx6uBJjGsuwQOkPDmo/jTkiTFY.343.MDwo222LDOw6G','','','','','','','','','','','','','','2','',NULL,'2020-01-08 12:26:34','2020-01-08 12:26:34');
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

-- Dump completed on 2020-01-10 16:39:42
