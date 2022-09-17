-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: logist
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dir_cargos`
--

DROP TABLE IF EXISTS `dir_cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dir_cargos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dir_cargos_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dir_cargos`
--

LOCK TABLES `dir_cargos` WRITE;
/*!40000 ALTER TABLE `dir_cargos` DISABLE KEYS */;
INSERT INTO `dir_cargos` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','Доска',NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','Брус',NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','Поддоны',NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','Щепа топливная',NULL,1,NULL),(5,'2022-09-01 06:00:00','2022-09-01 06:00:00','Щепа арболит',NULL,1,NULL),(6,'2022-09-01 06:00:00','2022-09-01 06:00:00','Опилки',NULL,1,NULL),(7,'2022-09-01 06:00:00','2022-09-01 06:00:00','Биомасса',NULL,1,NULL),(8,'2022-09-01 06:00:00','2022-09-01 06:00:00','Баланс береза',NULL,1,NULL),(9,'2022-09-01 06:00:00','2022-09-01 06:00:00','Баланс сосна',NULL,1,NULL),(10,'2022-09-01 06:00:00','2022-09-01 06:00:00','Пиловочник',NULL,1,NULL),(11,'2022-09-01 06:00:00','2022-09-01 06:00:00','Тонкомер',NULL,1,NULL),(12,'2022-09-01 06:00:00','2022-09-01 06:00:00','Горбыль',NULL,1,NULL),(13,'2022-09-01 06:00:00','2022-09-01 06:00:00','Дрова',NULL,1,NULL);
/*!40000 ALTER TABLE `dir_cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dir_payers`
--

DROP TABLE IF EXISTS `dir_payers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dir_payers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dir_payers_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dir_payers`
--

LOCK TABLES `dir_payers` WRITE;
/*!40000 ALTER TABLE `dir_payers` DISABLE KEYS */;
INSERT INTO `dir_payers` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','Акватерм',NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','Александровская горка',NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','Вадим',NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','Евро цемент',NULL,1,NULL),(5,'2022-09-01 06:00:00','2022-09-01 06:00:00','Загарулька',NULL,1,NULL);
/*!40000 ALTER TABLE `dir_payers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dir_petrol_stations`
--

DROP TABLE IF EXISTS `dir_petrol_stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dir_petrol_stations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dir_petrol_stations_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dir_petrol_stations`
--

LOCK TABLES `dir_petrol_stations` WRITE;
/*!40000 ALTER TABLE `dir_petrol_stations` DISABLE KEYS */;
INSERT INTO `dir_petrol_stations` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','Газпромнефть',NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','СургутНефтеГаз',NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','Татнефть',NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','Лукойл',NULL,1,NULL);
/*!40000 ALTER TABLE `dir_petrol_stations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dir_services`
--

DROP TABLE IF EXISTS `dir_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dir_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dir_services_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dir_services`
--

LOCK TABLES `dir_services` WRITE;
/*!40000 ALTER TABLE `dir_services` DISABLE KEYS */;
INSERT INTO `dir_services` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','Погрузка',500.00,NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','Разгрузка',500.00,NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','Раскомлевка',500.00,NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','Сортировка',500.00,NULL,1,NULL);
/*!40000 ALTER TABLE `dir_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dir_type_trucks`
--

DROP TABLE IF EXISTS `dir_type_trucks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dir_type_trucks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_service` tinyint(1) NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dir_type_trucks_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dir_type_trucks`
--

LOCK TABLES `dir_type_trucks` WRITE;
/*!40000 ALTER TABLE `dir_type_trucks` DISABLE KEYS */;
INSERT INTO `dir_type_trucks` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','Щеповоз',0,NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','Тент',0,NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','Лесовоз',0,NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','Лесовоз-фишка',1,NULL,1,NULL);
/*!40000 ALTER TABLE `dir_type_trucks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distance_billings`
--

DROP TABLE IF EXISTS `distance_billings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `distance_billings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_truck_id` bigint unsigned NOT NULL,
  `up_15_km` double(8,2) NOT NULL DEFAULT '0.00',
  `up_30_km` double(8,2) NOT NULL DEFAULT '0.00',
  `up_60_km` double(8,2) NOT NULL DEFAULT '0.00',
  `more_60_km` double(8,2) NOT NULL DEFAULT '0.00',
  `more_300_km` double(8,2) NOT NULL DEFAULT '0.00',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `distance_billings_type_truck_id_foreign` (`type_truck_id`),
  CONSTRAINT `distance_billings_type_truck_id_foreign` FOREIGN KEY (`type_truck_id`) REFERENCES `dir_type_trucks` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distance_billings`
--

LOCK TABLES `distance_billings` WRITE;
/*!40000 ALTER TABLE `distance_billings` DISABLE KEYS */;
INSERT INTO `distance_billings` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00',1,4500.00,7000.00,7000.00,115.00,95.00,NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,4000.00,4000.00,110.00,110.00,95.00,NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00',3,4500.00,7000.00,7000.00,120.00,100.00,NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00',4,6000.00,8000.00,10000.00,120.00,100.00,NULL,1,NULL);
/*!40000 ALTER TABLE `distance_billings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_05_27_125834_create_roles_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2022_05_15_165645_create_dir_services_table',1),(7,'2022_05_22_174003_create_dir_type_trucks_table',1),(8,'2022_05_22_174210_create_dir_cargos_table',1),(9,'2022_05_22_200443_create_dir_payers_table',1),(10,'2022_05_26_143141_create_dir_petrol_stations_table',1),(11,'2022_05_29_140204_create_profiles_table',1),(12,'2022_06_03_143412_create_routes_table',1),(13,'2022_06_06_200141_create_distance_billings_table',1),(14,'2022_06_07_101104_create_route_billings_table',1),(15,'2022_06_08_100112_create_refillings_table',1),(16,'2022_06_12_185219_create_services_table',1),(17,'2022_06_14_181140_create_profits_table',1),(18,'2022_07_28_094846_create_salaries_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00',1,'Гусев','Артем','Александрович',89119268188,NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,'Вакуленко','Денис','Сергеевич',89111840145,NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00',3,'Хазиуллин','Андрей','Рафисович',89214432509,NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00',4,'Смирнов','Сергей','Александрович',89215777445,NULL,1,NULL),(5,'2022-09-01 06:00:00','2022-09-01 06:00:00',5,'Карпович','Александр','Иванович',89219811516,NULL,1,NULL),(6,'2022-09-01 06:00:00','2022-09-01 06:00:00',6,'Молчанов','Александр','Антонович',89312629190,NULL,1,NULL),(7,'2022-09-01 06:00:00','2022-09-01 06:00:00',7,'Лукин','Вячеслав','Владимирович',89657711838,NULL,1,NULL),(8,'2022-09-01 06:00:00','2022-09-01 06:00:00',8,'Мещеряков','Алексей','Николаевич',89218600782,NULL,1,NULL),(9,'2022-09-01 06:00:00','2022-09-01 06:00:00',9,'Давыденков','Игорь','Сергеевич',89219762765,NULL,1,NULL),(10,'2022-09-01 06:00:00','2022-09-01 06:00:00',10,'Екимов','Алексей','Сергеевич',89531509048,NULL,1,NULL),(11,'2022-09-01 06:00:00','2022-09-01 06:00:00',11,'Майоров','Иван','Яковлевич',89216540978,NULL,1,NULL),(12,'2022-09-01 06:00:00','2022-09-01 06:00:00',12,'Леонтьев','Александр','Анатольевич',89214270568,NULL,1,NULL),(13,'2022-09-01 06:00:00','2022-09-01 06:00:00',13,'Владимиров','Алексей','Сергеевич',89312148432,NULL,1,NULL),(14,'2022-09-01 06:00:00','2022-09-01 06:00:00',14,'Тилик','Денис','Дмитриевич',89313219697,NULL,1,NULL),(15,'2022-09-01 06:00:00','2022-09-01 06:00:00',15,'Думцев','Игорь','Александрович',89212189981,NULL,1,NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profits`
--

DROP TABLE IF EXISTS `profits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `owner_id` bigint unsigned NOT NULL,
  `driver_id` bigint unsigned NOT NULL,
  `saldo_start` double(8,2) NOT NULL DEFAULT '0.00',
  `sum_salary` double(8,2) DEFAULT NULL,
  `sum_refuelings` double(8,2) DEFAULT NULL,
  `sum_routes` double(8,2) DEFAULT NULL,
  `sum_services` double(8,2) DEFAULT NULL,
  `saldo_end` double(10,2) NOT NULL DEFAULT '0.00',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profits_owner_id_foreign` (`owner_id`),
  KEY `profits_driver_id_foreign` (`driver_id`),
  CONSTRAINT `profits_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`),
  CONSTRAINT `profits_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profits`
--

LOCK TABLES `profits` WRITE;
/*!40000 ALTER TABLE `profits` DISABLE KEYS */;
INSERT INTO `profits` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,1,0.00,NULL,NULL,NULL,NULL,0.00,'Начальная загрузка',1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,2,0.00,NULL,NULL,NULL,NULL,0.00,'Начальная загрузка',1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,3,-37760.00,NULL,NULL,NULL,NULL,-37760.00,'Начальная загрузка',1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,4,139306.00,NULL,NULL,NULL,NULL,139306.00,'Начальная загрузка',1,NULL),(5,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,5,116499.00,NULL,NULL,NULL,NULL,116499.00,'Начальная загрузка',1,NULL),(6,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,6,136836.00,NULL,NULL,NULL,NULL,136836.00,'Начальная загрузка',1,NULL),(7,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,7,332169.00,NULL,NULL,NULL,NULL,332169.00,'Начальная загрузка',1,NULL),(8,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,8,184101.00,NULL,NULL,NULL,NULL,184101.00,'Начальная загрузка',1,NULL),(9,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,9,-75684.00,NULL,NULL,NULL,NULL,-75684.00,'Начальная загрузка',1,NULL),(10,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,10,-13952.00,NULL,NULL,NULL,NULL,-13952.00,'Начальная загрузка',1,NULL),(11,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,11,-34904.00,NULL,NULL,NULL,NULL,-34904.00,'Начальная загрузка',1,NULL),(12,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,12,234862.00,NULL,NULL,NULL,NULL,234862.00,'Начальная загрузка',1,NULL),(13,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,13,116715.00,NULL,NULL,NULL,NULL,116715.00,'Начальная загрузка',1,NULL),(14,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,14,-17122.00,NULL,NULL,NULL,NULL,-17122.00,'Начальная загрузка',1,NULL),(15,'2022-09-01 06:00:00','2022-09-01 06:00:00','2022-09-01',1,15,73662.00,NULL,NULL,NULL,NULL,73662.00,'Начальная загрузка',1,NULL);
/*!40000 ALTER TABLE `profits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refillings`
--

DROP TABLE IF EXISTS `refillings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `refillings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `owner_id` bigint unsigned NOT NULL,
  `driver_id` bigint unsigned NOT NULL,
  `petrol_stations_id` bigint unsigned NOT NULL,
  `num_liters_car_refueling` int NOT NULL,
  `price_car_refueling` double(8,2) NOT NULL,
  `cost_car_refueling` double(8,2) NOT NULL,
  `profit_id` bigint unsigned NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `refillings_owner_id_foreign` (`owner_id`),
  KEY `refillings_driver_id_foreign` (`driver_id`),
  KEY `refillings_petrol_stations_id_foreign` (`petrol_stations_id`),
  CONSTRAINT `refillings_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`),
  CONSTRAINT `refillings_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`),
  CONSTRAINT `refillings_petrol_stations_id_foreign` FOREIGN KEY (`petrol_stations_id`) REFERENCES `dir_petrol_stations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refillings`
--

LOCK TABLES `refillings` WRITE;
/*!40000 ALTER TABLE `refillings` DISABLE KEYS */;
/*!40000 ALTER TABLE `refillings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','Администратор',NULL,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','Водитель',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `route_billings`
--

DROP TABLE IF EXISTS `route_billings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `route_billings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_static` tinyint(1) NOT NULL DEFAULT '0',
  `length` int DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route_billings`
--

LOCK TABLES `route_billings` WRITE;
/*!40000 ALTER TABLE `route_billings` DISABLE KEYS */;
INSERT INTO `route_billings` VALUES (1,'2022-09-01 00:00:00','2022-09-12 04:00:36','пос.Сельхозтехника','г.п.Пикалево',0,460,NULL,NULL,1,NULL),(2,'2022-09-01 00:00:00','2022-09-12 04:00:43','пос.Сельхозтехника','г.п.Синявино',0,237,NULL,NULL,1,NULL),(3,'2022-09-01 00:00:00','2022-09-12 04:01:23','пос.Сельхозтехника','ст.Невская Дубровка',0,234,NULL,NULL,1,NULL),(4,'2022-09-01 00:00:00','2022-09-12 04:01:33','пос.Сельхозтехника','г.Сертолово',0,230,NULL,NULL,1,NULL),(5,'2022-09-01 00:00:00','2022-09-12 04:01:54','пос.Сельхозтехника','пос.Ковалёво',0,220,NULL,NULL,1,NULL),(6,'2022-09-01 00:00:00','2022-09-12 04:02:33','пос.Сельхозтехника','пос.Отрадное',0,224,NULL,NULL,1,NULL),(7,'2022-09-01 00:00:00','2022-09-12 04:03:04','пос.Сельхозтехника','СПб, ул.Партизанская 14',0,210,NULL,NULL,1,NULL),(8,'2022-09-01 00:00:00','2022-09-12 04:03:24','пос.Сельхозтехника','д.Глинка',0,205,NULL,NULL,1,NULL),(9,'2022-09-01 00:00:00','2022-09-12 04:03:42','Волхонское ш.6','д.Шушары',1,NULL,7000.00,NULL,1,NULL),(10,'2022-09-01 00:00:00','2022-09-12 04:03:51','Волхонское ш.6','г.Пушкин',1,NULL,7000.00,NULL,1,NULL),(11,'2022-09-12 03:41:16','2022-09-12 04:04:02','Волхонское ш.6','пос.Сельхозтехника',0,88,NULL,NULL,1,NULL),(12,'2022-09-12 03:43:28','2022-09-12 04:04:20','Волхонское ш.6','пос.Терволово',1,NULL,7000.00,NULL,1,NULL),(13,'2022-09-12 03:43:59','2022-09-12 03:43:59','Волхонское','пр.Пискаревский 150',1,NULL,7000.00,NULL,1,NULL),(15,'2022-09-12 03:47:05','2022-09-12 03:47:05','Волхонское','Невская Дубровка',1,NULL,7000.00,NULL,1,NULL),(16,'2022-09-12 03:47:21','2022-09-12 04:04:51','Волхонское ш.6','СПб, ст.Парнас',1,NULL,7000.00,NULL,1,NULL),(17,'2022-09-12 03:54:49','2022-09-12 03:59:18','д.Вейно','д.Любимец',0,24,NULL,NULL,1,NULL),(18,'2022-09-12 03:55:27','2022-09-12 03:59:29','д.Вейно','г.Сланцы',0,29,NULL,NULL,1,NULL),(19,'2022-09-12 03:55:49','2022-09-12 03:59:49','д.Вейно','пос.Сельхозтехника',0,23,NULL,NULL,1,NULL),(20,'2022-09-12 03:56:52','2022-09-12 03:56:52','пос.Возрождение','д.Кривко',0,130,NULL,NULL,1,NULL),(21,'2022-09-12 04:07:15','2022-09-12 04:07:15','д.Гостицы','пос.Сельхозтехника',0,2,NULL,NULL,1,NULL),(22,'2022-09-12 04:07:23','2022-09-12 04:07:23','пос.Сельхозтехника','д.Гостицы',0,2,NULL,NULL,1,NULL),(23,'2022-09-12 04:07:53','2022-09-12 04:07:53','пос.Сельхозтехника','г.Выборг (Склад Технониколь)',0,182,NULL,NULL,1,NULL),(24,'2022-09-12 04:08:36','2022-09-12 04:09:02','пос.Сельхозтехника','ст.Демешкин Перевоз',0,9,NULL,NULL,1,NULL),(25,'2022-09-12 04:08:49','2022-09-12 04:08:49','ст.Демешкин Перевоз','пос.Сельхозтехника',0,9,NULL,NULL,1,NULL),(26,'2022-09-12 04:09:52','2022-09-15 06:07:19','ст.Демешкин перевоз','д.Новоселье (СКЛАД)',0,31,NULL,NULL,1,NULL),(27,'2022-09-12 04:10:05','2022-09-15 06:07:14','д.Новоселье (СКЛАД)','ст.Демешкин перевоз',0,31,NULL,NULL,1,NULL),(28,'2022-09-12 04:10:34','2022-09-12 04:10:34','г.Ивангород','пос.Сельхозтехника',0,91,NULL,NULL,1,NULL),(29,'2022-09-12 04:21:55','2022-09-12 04:21:55','р.п.Идрица','г.Псков (ч/з Палкино)',0,223,NULL,NULL,1,NULL),(30,'2022-09-12 04:22:08','2022-09-12 04:22:08','р.п.Идрица','Волхонское ш.6',0,484,NULL,NULL,1,NULL),(31,'2022-09-12 04:23:04','2022-09-12 04:23:04','р.п.Идрица','пос.Сельхозтехника',0,365,NULL,NULL,1,NULL),(32,'2022-09-12 04:23:19','2022-09-12 04:23:19','р.п.Идрица','СПб, пр.Дальневосточный',0,492,NULL,NULL,1,NULL),(33,'2022-09-12 04:24:04','2022-09-12 04:24:04','д.Конезерье','ст.Демешкин перевоз',0,193,NULL,NULL,1,NULL),(34,'2022-09-12 04:26:46','2022-09-12 04:26:46','пос.Сельхозтехника','д.Новосаратовка',0,200,NULL,NULL,1,NULL),(35,'2022-09-12 04:27:23','2022-09-12 04:27:23','пос.Сельхозтехника','СПб, промзона Уткина Заводь',0,202,NULL,NULL,1,NULL),(36,'2022-09-12 04:28:12','2022-09-12 04:28:12','пос.Сельхозтехника','пос.Кобралово',0,185,NULL,NULL,1,NULL),(37,'2022-09-12 04:28:49','2022-09-12 04:28:49','пос.Сельхозтехника','р.п.Заплюсье',0,186,NULL,NULL,1,NULL),(38,'2022-09-12 04:33:17','2022-09-12 04:33:45','пос.Сельхозтехника','д.Пеники',0,170,NULL,NULL,1,NULL),(39,'2022-09-12 04:33:32','2022-09-12 04:33:32','пос.Сельхозтехника','д.Оредеж',0,177,NULL,NULL,1,NULL),(40,'2022-09-12 04:34:11','2022-09-12 04:34:11','пос.Сельхозтехника','СПб, Отрадное, Никольское ш.55',0,224,NULL,NULL,1,NULL),(41,'2022-09-12 04:34:49','2022-09-12 04:34:49','пос.Сельхозтехника','Порт \"Бронка\" г.Ломоносов',0,175,NULL,NULL,1,NULL),(43,'2022-09-12 04:35:46','2022-09-12 04:35:46','пос.Сельхозтехника','Петергофское ш.',0,165,NULL,NULL,1,NULL),(44,'2022-09-12 04:35:59','2022-09-12 04:35:59','пос.Сельхозтехника','Ропшинское ш.',0,165,NULL,NULL,1,NULL),(45,'2022-09-12 04:36:36','2022-09-12 04:36:36','пос.Сельхозтехника','д.Старицы',0,141,NULL,NULL,1,NULL),(46,'2022-09-12 04:37:23','2022-09-12 04:37:23','пос.Сельхозтехника','д.Терволово',0,150,NULL,NULL,1,NULL),(47,'2022-09-12 04:38:02','2022-09-12 04:38:02','пос.Сельхозтехника','д.Лаголово',0,155,NULL,NULL,1,NULL),(48,'2022-09-12 04:38:43','2022-09-12 04:38:43','пос.Сельхозтехника','пос.Елизаветино',0,140,NULL,NULL,1,NULL),(49,'2022-09-12 04:39:37','2022-09-12 04:39:37','пос.Сельхозтехника','д.СосновыйБор',0,147,NULL,NULL,1,NULL),(50,'2022-09-12 04:39:47','2022-09-12 04:39:47','пос.Сельхозтехника','д.Кикерино',0,137,NULL,NULL,1,NULL),(51,'2022-09-12 04:40:03','2022-09-12 04:40:03','пос.Сельхозтехника','Порт Усть-Луга',0,134,NULL,NULL,1,NULL),(52,'2022-09-12 04:40:29','2022-09-12 06:56:16','пос.Сельхозтехника','пос.Середка',0,118,NULL,NULL,1,NULL),(53,'2022-09-12 04:41:06','2022-09-12 04:41:06','пос.Сельхозтехника','д.Первомайская',0,109,NULL,NULL,1,NULL),(54,'2022-09-12 04:41:41','2022-09-12 04:41:41','пос.Сельхозтехника','д.Большая Вруда',0,102,NULL,NULL,1,NULL),(55,'2022-09-12 04:42:21','2022-09-12 04:42:21','пос.Сельхозтехника','д.Забредняжье',0,60,NULL,NULL,1,NULL),(56,'2022-09-12 04:42:46','2022-09-12 04:42:46','пос.Сельхозтехника','д.Овсище',0,50,NULL,NULL,1,NULL),(57,'2022-09-12 04:43:09','2022-09-12 04:43:09','пос.Сельхозтехника','д.Шакицы',0,55,NULL,NULL,1,NULL),(58,'2022-09-12 04:43:27','2022-09-12 04:43:27','пос.Сельхозтехника','д.Старополье',0,40,NULL,NULL,1,NULL),(59,'2022-09-12 04:46:31','2022-09-15 06:07:09','пос.Сельхозтехника','д.Новоселье (СКЛАД)',0,33,NULL,NULL,1,NULL),(60,'2022-09-12 04:46:51','2022-09-15 06:06:50','д.Новоселье (СКЛАД)','пос.Сельхозтехника',0,33,NULL,NULL,1,NULL),(61,'2022-09-12 04:47:24','2022-09-12 04:47:24','пос.Сельхозтехника','Строение',0,220,NULL,NULL,1,NULL),(62,'2022-09-12 04:47:33','2022-09-12 04:47:33','пос.Строение','пос.Сельхозтехника',0,220,NULL,NULL,1,NULL),(63,'2022-09-12 04:48:13','2022-09-15 06:06:54','д.Новоселье (СКЛАД)','Волхонское ш.6',0,188,NULL,NULL,1,NULL),(64,'2022-09-12 04:48:26','2022-09-15 06:06:57','Волхонское ш.6','д.Новоселье (СКЛАД)',0,188,NULL,NULL,1,NULL),(65,'2022-09-12 04:49:11','2022-09-12 04:49:11','пос.Сельхозтехника','д.Швары',0,397,NULL,NULL,1,NULL),(66,'2022-09-12 04:49:20','2022-09-12 04:49:20','д.Швары','пос.Сельхозтехника',0,397,NULL,NULL,1,NULL),(67,'2022-09-12 04:50:03','2022-09-12 04:50:03','Порт Усть-Луга','пос.Сельхозтехника',0,134,NULL,NULL,1,NULL),(68,'2022-09-12 04:50:43','2022-09-12 04:50:43','д.Криково','пос.Сельхозтехника',0,86,NULL,NULL,1,NULL),(69,'2022-09-12 04:50:51','2022-09-12 04:50:51','пос.Сельхозтехника','д.Криково',0,86,NULL,NULL,1,NULL),(70,'2022-09-12 04:53:12','2022-09-12 04:53:12','пос.Сельхозтехника','д.Белогорка',0,180,NULL,NULL,1,NULL),(71,'2022-09-12 04:53:25','2022-09-12 04:53:25','д.Белогорка','пос.Сельхозтехника',0,180,NULL,NULL,1,NULL),(72,'2022-09-12 04:54:18','2022-09-12 04:54:18','Порт Усть-Луга','д.Малый ЛУЦК',0,63,NULL,NULL,1,NULL),(73,'2022-09-12 04:54:32','2022-09-12 04:54:32','д.Малый ЛУЦК','Порт Усть-Луга',0,63,NULL,NULL,1,NULL),(74,'2022-09-12 04:55:13','2022-09-12 04:55:13','Порт Усть-Луга','пос.Кобралово',0,170,NULL,NULL,1,NULL),(75,'2022-09-12 04:55:33','2022-09-12 04:55:33','пос.Кобралово','Порт Усть-Луга',0,170,NULL,NULL,1,NULL),(76,'2022-09-12 04:56:15','2022-09-12 04:56:15','Порт Усть-Луга','д.Шушары',0,161,NULL,NULL,1,NULL),(77,'2022-09-12 04:57:06','2022-09-12 04:57:06','Порт Усть-Луга','д.Каменка',0,210,NULL,NULL,1,NULL),(78,'2022-09-12 04:59:24','2022-09-12 04:59:24','пос.Сельхозтехника','д.Полично',0,41,NULL,NULL,1,NULL),(79,'2022-09-12 04:59:38','2022-09-12 04:59:38','д.Полично','пос.Сельхозтехника',0,41,NULL,NULL,1,NULL),(80,'2022-09-12 04:59:57','2022-09-15 06:07:05','д.Полично','д.Новоселье (СКЛАД)',0,50,NULL,NULL,1,NULL),(81,'2022-09-12 05:00:57','2022-09-12 05:00:57','пос.Сельхозтехника','д.Шипино',0,85,NULL,NULL,1,NULL),(82,'2022-09-12 05:01:06','2022-09-12 05:01:06','д.Шипино','пос.Сельхозтехника',0,85,NULL,NULL,1,NULL),(83,'2022-09-12 05:10:01','2022-09-12 05:10:01','пос.Тарайка','пос.Сельхозтехника',0,107,NULL,NULL,1,NULL),(84,'2022-09-12 05:10:11','2022-09-12 05:10:11','пос.Сельхозтехника','пос.Тарайка',0,107,NULL,NULL,1,NULL),(85,'2022-09-12 05:10:31','2022-09-12 05:10:31','Порт Усть-Луга','пос.Тарайка',0,46,NULL,NULL,1,NULL),(86,'2022-09-12 05:10:44','2022-09-12 05:10:44','пос.Тарайка','Порт Усть-Луга',0,46,NULL,NULL,1,NULL),(87,'2022-09-12 05:18:42','2022-09-12 05:18:42','пос.Сельхозтехника','пос.Беседа',0,90,NULL,NULL,1,NULL),(88,'2022-09-12 05:19:00','2022-09-12 05:19:00','пос.Беседа','пос.Сельхозтехника',0,90,NULL,NULL,1,NULL),(89,'2022-09-12 05:19:29','2022-09-12 05:19:29','пос.Сазоново','пос.Сельхозтехника',0,530,NULL,NULL,1,NULL),(90,'2022-09-12 05:19:38','2022-09-12 05:19:38','пос.Сельхозтехника','пос.Сазоново',0,530,NULL,NULL,1,NULL),(91,'2022-09-12 05:21:31','2022-09-12 05:21:31','пос.Сазоново','пос.Сельхозтехника',0,530,NULL,NULL,1,NULL),(92,'2022-09-12 05:21:57','2022-09-12 05:21:57','пос.Сельхозтехника','пос.Серебрянский',0,180,NULL,NULL,1,NULL),(93,'2022-09-12 05:22:06','2022-09-12 05:22:06','пос.Серебрянский','пос.Сельхозтехника',0,180,NULL,NULL,1,NULL),(94,'2022-09-12 05:22:35','2022-09-12 05:22:35','пос.Сельхозтехника','пос.Зуево',0,42,NULL,NULL,1,NULL),(95,'2022-09-12 05:22:44','2022-09-12 05:22:44','пос.Зуево','пос.Сельхозтехника',0,42,NULL,NULL,1,NULL),(96,'2022-09-12 05:22:56','2022-09-12 05:22:56','пос.Середка','пос.Сельхозтехника',0,118,NULL,NULL,1,NULL),(97,'2022-09-12 05:23:06','2022-09-12 05:23:06','пос.Сельхозтехника','пос.Середка',0,118,NULL,NULL,1,NULL),(98,'2022-09-12 05:23:40','2022-09-12 05:23:40','пос.Печоры','пос.Сельхозтехника',0,212,NULL,NULL,1,NULL),(99,'2022-09-12 05:23:50','2022-09-12 05:23:50','пос.Сельхозтехника','пос.Печоры',0,212,NULL,NULL,1,NULL),(100,'2022-09-12 05:25:25','2022-09-12 05:25:25','пос.Швары','г.п.Федоровское',0,500,NULL,NULL,1,NULL),(101,'2022-09-12 05:26:27','2022-09-12 05:26:27','пос.Атрубашка','пос.Сельхозтехника',0,87,NULL,NULL,1,NULL),(102,'2022-09-12 05:26:53','2022-09-12 05:26:53','пос.Ляды','пос.Сельхозтехника',0,79,NULL,NULL,1,NULL),(103,'2022-09-12 05:27:40','2022-09-12 05:27:40','д.Первомайская','пос.Сельхозтехника',0,105,NULL,NULL,1,NULL),(104,'2022-09-12 05:27:48','2022-09-12 05:27:48','пос.Сельхозтехника','д.Первомайская',0,105,NULL,NULL,1,NULL),(107,'2022-09-12 05:29:20','2022-09-12 05:29:20','д.Тикопись','пос.Сельхозтехника',0,75,NULL,NULL,1,NULL),(108,'2022-09-12 05:29:29','2022-09-12 05:29:29','пос.Сельхозтехника','д.Тикопись',0,75,NULL,NULL,1,NULL),(109,'2022-09-12 05:30:12','2022-09-12 05:30:12','д.Кикерицы','пос.Сельхозтехника',0,85,NULL,NULL,1,NULL),(110,'2022-09-12 05:30:23','2022-09-12 05:30:23','пос.Сельхозтехника','д.Кикерицы',0,85,NULL,NULL,1,NULL),(111,'2022-09-12 05:31:10','2022-09-12 05:31:10','пос.Сельхозтехника','пос.Сосновый Бор',0,145,NULL,NULL,1,NULL),(112,'2022-09-12 05:31:28','2022-09-12 05:31:28','пос. Сосновый Бор','пос.Сельхозтехника',0,145,NULL,NULL,1,NULL),(113,'2022-09-12 05:32:12','2022-09-12 05:32:12','пос.Остров','пос.Сельхозтехника',0,225,NULL,NULL,1,NULL),(114,'2022-09-12 05:32:22','2022-09-12 05:32:22','пос.Сельхозтехника','пос.Остров',0,225,NULL,NULL,1,NULL),(115,'2022-09-12 05:33:24','2022-09-12 05:33:24','г.п.Синявино','пос.Сельхозтехника',0,255,NULL,NULL,1,NULL),(116,'2022-09-12 05:33:53','2022-09-12 05:33:53','р.п.Сазоново','пос.Сельхозтехника',0,550,NULL,NULL,1,NULL),(117,'2022-09-12 05:35:12','2022-09-15 06:06:45','д.Новоселье (СКЛАД)','Елизаветино',0,158,NULL,NULL,1,NULL),(118,'2022-09-12 05:35:21','2022-09-15 06:06:39','пос.Елизаветино','д.Новоселье (СКЛАД)',0,158,NULL,NULL,1,NULL),(119,'2022-09-12 05:35:52','2022-09-15 06:06:34','пос.Осьмино','д.Новоселье (СКЛАД)',0,80,NULL,NULL,1,NULL),(120,'2022-09-12 05:36:02','2022-09-15 06:05:03','д.Новоселье (СКЛАД)','пос.Осьмино',0,80,NULL,NULL,1,NULL),(121,'2022-09-12 05:37:05','2022-09-15 06:05:11','д.Шипино','д.Новоселье (СКЛАД)',0,66,NULL,NULL,1,NULL),(122,'2022-09-12 05:37:28','2022-09-15 06:05:16','д.Полично','д.Новоселье (СКЛАД)',0,65,NULL,NULL,1,NULL),(123,'2022-09-12 05:37:54','2022-09-15 06:05:22','д.Сара Лог','д.Новоселье (СКЛАД)',0,62,NULL,NULL,1,NULL),(124,'2022-09-12 05:38:15','2022-09-15 06:05:26','д.Брагино','д.Новоселье (СКЛАД)',0,57,NULL,NULL,1,NULL),(125,'2022-09-12 05:38:28','2022-09-15 06:05:29','пос.Зуево','д.Новоселье (СКЛАД)',0,40,NULL,NULL,1,NULL),(126,'2022-09-12 05:39:00','2022-09-15 06:05:32','пос.Печоры','д.Новоселье (СКЛАД)',0,230,NULL,NULL,1,NULL),(127,'2022-09-12 05:39:54','2022-09-15 06:05:35','д.Елемно','д.Новоселье (СКЛАД)',0,75,NULL,NULL,1,NULL),(128,'2022-09-12 05:46:42','2022-09-15 06:05:39','д.Первомайская','д.Новоселье (СКЛАД)',0,130,NULL,NULL,1,NULL),(129,'2022-09-12 05:47:31','2022-09-15 06:05:44','пос.Серебрянский','д.Новоселье (СКЛАД)',0,190,NULL,NULL,1,NULL),(130,'2022-09-12 05:47:41','2022-09-15 06:05:48','д.Новоселье (СКЛАД)','пос.Серебрянский',0,190,NULL,NULL,1,NULL),(131,'2022-09-12 05:52:36','2022-09-15 06:05:53','пос.Середка','д.Новоселье (СКЛАД)',0,140,NULL,NULL,1,NULL),(132,'2022-09-12 05:56:31','2022-09-12 06:58:00','пос.Середка','тер.Пустой конец',0,140,NULL,NULL,1,NULL),(133,'2022-09-12 05:56:51','2022-09-12 06:57:56','пос.Середка','д.Вейно',0,110,NULL,NULL,1,NULL),(134,'2022-09-12 05:57:46','2022-09-12 06:57:53','пос.Середка','д.Крюково',0,100,NULL,NULL,1,NULL),(135,'2022-09-12 05:59:25','2022-09-12 05:59:25','д.Окуловка','Волхонское ш.6',0,295,NULL,NULL,1,NULL),(136,'2022-09-12 05:59:51','2022-09-12 05:59:51','д.Полищи','Волхонское ш.6',0,288,NULL,NULL,1,NULL),(137,'2022-09-12 06:02:49','2022-09-12 06:02:49','пос.Серебрянский','Порт Усть-Луга',0,230,NULL,NULL,1,NULL),(138,'2022-09-12 06:03:35','2022-09-15 06:05:58','пос.Серебрянский','д.Новоселье (СКЛАД)',0,190,NULL,NULL,1,NULL),(139,'2022-09-12 06:03:47','2022-09-12 06:03:47','пос.Серебрянский','д.Выскатка',0,168,NULL,NULL,1,NULL),(140,'2022-09-12 06:04:05','2022-09-12 06:04:05','пос.Серебрянский','д.Тямша',0,164,NULL,NULL,1,NULL),(141,'2022-09-12 06:04:17','2022-09-12 06:04:17','пос.Серебрянский','д.Замошье',0,145,NULL,NULL,1,NULL),(142,'2022-09-12 06:04:33','2022-09-12 06:05:22','пос.Серебрянский','д.Овсище',0,135,NULL,NULL,1,NULL),(143,'2022-09-12 06:05:44','2022-09-12 06:05:44','пос.Серебрянский','д.Шакицы',0,140,NULL,NULL,1,NULL),(144,'2022-09-12 06:05:57','2022-09-12 06:05:57','пос.Серебрянский','д.Поречье',0,130,NULL,NULL,1,NULL),(145,'2022-09-12 06:06:17','2022-09-12 06:06:17','пос.Серебрянский','д.Оредеж',0,74,NULL,NULL,1,NULL),(146,'2022-09-12 06:06:32','2022-09-12 06:06:32','пос.Серебрянский','д.Луга',0,46,NULL,NULL,1,NULL),(147,'2022-09-12 06:08:04','2022-09-15 06:06:02','пос.Атрубашка','д.Новоселье (СКЛАД)',0,112,NULL,NULL,1,NULL),(148,'2022-09-12 06:09:07','2022-09-15 06:06:06','д.Новоселье (СКЛАД)','д.Кошкино',0,250,NULL,NULL,1,NULL),(149,'2022-09-12 06:09:31','2022-09-15 06:06:11','д.Новоселье (СКЛАД)','р.п.Заплюсье',0,189,NULL,NULL,1,NULL),(150,'2022-09-12 06:09:58','2022-09-15 06:06:14','д.Новоселье (СКЛАД)','пос.Оредеж',0,185,NULL,NULL,1,NULL),(151,'2022-09-12 06:10:50','2022-09-15 06:06:18','д.Новоселье (СКЛАД)','Порт Усть-Луга',0,140,NULL,NULL,1,NULL),(152,'2022-09-12 06:11:09','2022-09-15 06:06:23','д.Новоселье (СКЛАД)','д.Овсище',0,56,NULL,NULL,1,NULL),(153,'2022-09-12 06:11:17','2022-09-15 06:06:29','д.Новоселье (СКЛАД)','д.Старополье',0,47,NULL,NULL,1,NULL),(154,'2022-09-12 06:12:19','2022-09-12 06:12:19','д.Зуево','д.Печоры',0,218,NULL,NULL,1,NULL),(155,'2022-09-12 06:12:36','2022-09-12 06:12:36','д.Зуево','Порт Усть-Луга',0,150,NULL,NULL,1,NULL),(156,'2022-09-12 06:13:30','2022-09-12 06:13:30','д.Зуево','д.Малый ЛУЦК',0,90,NULL,NULL,1,NULL),(157,'2022-09-12 06:14:11','2022-09-12 06:14:11','д.Атрубашка','д.Шакицы',0,143,NULL,NULL,1,NULL),(158,'2022-09-12 06:14:35','2022-09-12 06:14:35','д.Атрубашка','д.Никольское',0,312,NULL,NULL,1,NULL),(159,'2022-09-12 06:14:47','2022-09-12 06:14:47','д.Атрубашка','д.Поречье',0,132,NULL,NULL,1,NULL),(160,'2022-09-12 06:14:59','2022-09-12 06:14:59','д.Атрубашка','д.Овсище',0,131,NULL,NULL,1,NULL),(161,'2022-09-12 06:15:22','2022-09-12 06:15:22','д.Атрубашка','Монастырёк',0,125,NULL,NULL,1,NULL),(162,'2022-09-12 06:15:35','2022-09-12 06:15:35','д.Атрубашка','д.Замошье',0,121,NULL,NULL,1,NULL),(163,'2022-09-12 06:15:48','2022-09-12 06:15:48','д.Атрубашка','д.Вейно',0,80,NULL,NULL,1,NULL),(164,'2022-09-12 06:22:52','2022-09-12 06:22:52','д.Красный Маяк','д.Овсище',0,68,NULL,NULL,1,NULL),(165,'2022-09-12 06:23:08','2022-09-12 06:23:08','д.Красный Маяк','пос.Сельхозтехника',0,116,NULL,NULL,1,NULL),(166,'2022-09-12 06:24:53','2022-09-12 06:24:53','д.Красный Маяк','д.Старополье',0,75,NULL,NULL,1,NULL),(167,'2022-09-12 06:25:22','2022-09-12 06:25:22','д.Красный Маяк','д.Кобралово',0,120,NULL,NULL,1,NULL),(168,'2022-09-12 06:26:31','2022-09-12 06:26:31','д.Излучье','д.Любимец',0,30,NULL,NULL,1,NULL),(169,'2022-09-12 06:28:47','2022-09-12 06:28:47','д.Малый ЛУЦК','пос.Сельхозтехника',0,63,NULL,NULL,1,NULL),(170,'2022-09-12 06:29:17','2022-09-12 06:29:17','д.Малый ЛУЦК','Александровская горка (Б.ЛУЦК)',0,10,NULL,NULL,1,NULL),(171,'2022-09-12 06:30:23','2022-09-12 06:30:23','д.Малый ЛУЦК','Кобралово',0,130,NULL,NULL,1,NULL),(172,'2022-09-12 06:30:44','2022-09-12 06:30:44','д.Малый ЛУЦК','д.Белогорка',0,110,NULL,NULL,1,NULL),(173,'2022-09-12 06:31:23','2022-09-12 06:31:23','\"ЛЭП\"','д.Старополье',0,76,NULL,NULL,1,NULL),(174,'2022-09-12 06:31:42','2022-09-12 06:31:42','\"ЛЭП\"','пос.Сельхозтехника',0,114,NULL,NULL,1,NULL),(175,'2022-09-12 06:31:58','2022-09-12 06:31:58','пос.Ляды','Волхонское ш.6',0,255,NULL,NULL,1,NULL),(176,'2022-09-12 06:38:29','2022-09-15 06:08:45','д.Новоселье (СКЛАД)','д.Иннолово',0,180,NULL,NULL,1,NULL),(177,'2022-09-12 06:38:48','2022-09-15 06:08:51','д.Новоселье (СКЛАД)','д.Ропша',0,165,NULL,NULL,1,NULL),(178,'2022-09-12 06:39:40','2022-09-15 06:08:48','д.Новоселье (СКЛАД)','д.Овсище',0,57,NULL,NULL,1,NULL),(179,'2022-09-12 06:40:06','2022-09-15 06:08:54','д.Новоселье (СКЛАД)','д.Усть-Луга',0,104,NULL,NULL,1,NULL),(180,'2022-09-12 06:40:33','2022-09-15 06:08:57','д.Новоселье (СКЛАД)','д.Оредеж',0,185,NULL,NULL,1,NULL),(181,'2022-09-12 06:41:27','2022-09-15 06:09:00','д.Новоселье (СКЛАД)','д.Александровская горка',0,80,NULL,NULL,1,NULL),(182,'2022-09-12 06:42:12','2022-09-15 06:09:03','д.Новоселье (СКЛАД)','пос.Кобралово',0,205,NULL,NULL,1,NULL),(183,'2022-09-12 06:44:12','2022-09-15 06:09:07','д.Новоселье (СКЛАД)','д.Замошье',0,49,NULL,NULL,1,NULL),(184,'2022-09-12 06:44:32','2022-09-15 06:09:10','д.Новоселье (СКЛАД)','д.Выскатка',0,21,NULL,NULL,1,NULL),(185,'2022-09-12 06:44:55','2022-09-15 06:09:26','д.Новоселье (СКЛАД)','д.Монастырек',0,49,NULL,NULL,1,NULL),(186,'2022-09-12 06:46:06','2022-09-15 06:09:30','д.Новоселье (СКЛАД)','д.Александровская горка',0,80,NULL,NULL,1,NULL),(187,'2022-09-12 06:47:57','2022-09-15 06:09:33','д.Новоселье (СКЛАД)','г.Сланцы, ул.Ремонтников 1',0,42,NULL,NULL,1,NULL),(188,'2022-09-12 06:49:20','2022-09-12 06:49:20','пос.Новый','пос.Сельхозтезника',0,57,NULL,NULL,1,NULL),(189,'2022-09-12 06:49:42','2022-09-12 06:49:42','пос.Новый','д.Б.Вруда',0,64,NULL,NULL,1,NULL),(190,'2022-09-12 06:50:12','2022-09-12 06:50:12','пос.Новый','СПб, Мурино (Селиванов)',0,216,NULL,NULL,1,NULL),(191,'2022-09-12 06:52:20','2022-09-12 06:52:20','д.Опочка','Волхонское ш.6',0,403,NULL,NULL,1,NULL),(192,'2022-09-12 06:53:13','2022-09-12 06:53:13','пос.Сельхозтехника','д.Потрехново',0,14,NULL,NULL,1,NULL),(193,'2022-09-12 06:54:01','2022-09-15 06:09:36','г.Сланцы, ул.Ремонтников 1','д.Новоселье (СКЛАД)',0,42,NULL,NULL,1,NULL),(194,'2022-09-12 06:54:42','2022-09-12 06:54:42','пос.Сельхозтехника','д.Разбегаево',0,158,NULL,NULL,1,NULL),(195,'2022-09-12 06:54:59','2022-09-12 06:54:59','д.Разбегаево','пос.Сельхозтехника',0,79,NULL,NULL,1,NULL),(196,'2022-09-12 06:59:02','2022-09-12 06:59:02','д.Рудница','пос.Сельхозтехника',0,47,NULL,NULL,1,NULL),(197,'2022-09-12 06:59:33','2022-09-12 06:59:33','пос.Сельхозтехника','д.Рудница',0,47,NULL,NULL,1,NULL),(198,'2022-09-12 07:01:59','2022-09-12 07:01:59','пос.Сельхозтехника','г.Сланцы Завод ПетербургЦемент',0,10,NULL,NULL,1,NULL),(199,'2022-09-12 07:03:03','2022-09-12 07:03:03','пос.Сельхозтехника','д.Столбово',0,51,NULL,NULL,1,NULL),(200,'2022-09-12 07:03:12','2022-09-12 07:03:12','д.Столбово','пос.Сельхозтехника',0,51,NULL,NULL,1,NULL),(201,'2022-09-12 07:03:35','2022-09-12 07:03:35','пос.Сельхозтехника','Сорокино',0,50,NULL,NULL,1,NULL),(202,'2022-09-12 07:03:42','2022-09-12 07:03:42','д.Сорокино','пос.Сельхозтехника',0,50,NULL,NULL,1,NULL),(203,'2022-09-12 07:04:46','2022-09-12 07:04:46','д.Устиново (ПсковОбл)','Пушкинские Горы (ПсковОбл)',0,20,NULL,NULL,1,NULL),(204,'2022-09-12 07:05:19','2022-09-12 07:05:19','д.Устиново (ПсковОбл)','д.Подкрестье (ПсковОбл)',0,23,NULL,NULL,1,NULL),(205,'2022-09-12 07:08:06','2022-09-12 07:08:06','д.Устиново','пос.Сельхозтехника',0,295,NULL,NULL,1,NULL),(206,'2022-09-12 07:08:17','2022-09-12 07:08:17','пос.Сельхозтехника','д.Устиново',0,295,NULL,NULL,1,NULL),(207,'2022-09-12 07:11:07','2022-09-12 07:11:07','пос.Сельхозтехника','д.Александровская горка',0,71,NULL,NULL,1,NULL),(208,'2022-09-12 07:12:00','2022-09-12 07:12:00','пос.Сельхозтехника','д.Замошье',0,42,NULL,NULL,1,NULL),(209,'2022-09-12 07:12:22','2022-09-12 07:12:22','пос.Сельхозтехника','д.Выскатка',0,14,NULL,NULL,1,NULL),(210,'2022-09-12 07:14:20','2022-09-12 07:14:20','пос.Сельхозтехника','г.Выборг (база Технониколь)',0,337,NULL,NULL,1,NULL),(211,'2022-09-12 07:16:04','2022-09-12 07:16:04','пос.Сельхозтехника','д.Корабсельки',0,225,NULL,NULL,1,NULL),(212,'2022-09-12 07:17:35','2022-09-12 07:17:35','пос.Сельхозтехника','д.Кривко',0,285,NULL,NULL,1,NULL),(213,'2022-09-12 07:21:29','2022-09-12 07:21:29','пос.Сельхозтехника','д.Поречье',0,53,NULL,NULL,1,NULL),(214,'2022-09-12 07:21:38','2022-09-12 07:21:38','д.Поречье','пос.Сельхозтехника',0,53,NULL,NULL,1,NULL),(215,'2022-09-12 07:28:22','2022-09-12 07:28:22','д.Сорокино (Волховский р-н)','пос.Сельхозтехника',0,340,NULL,NULL,1,NULL),(216,'2022-09-13 04:09:19','2022-09-13 04:09:19','Алтун','Пушгоры',0,24,NULL,NULL,1,NULL),(217,'2022-09-13 04:13:24','2022-09-13 04:13:24','Камено','Казино',0,358,NULL,NULL,1,NULL),(218,'2022-09-14 09:13:58','2022-09-14 09:13:58','Зуево','Любимец',0,43,NULL,NULL,1,NULL),(219,'2022-09-14 09:16:03','2022-09-14 09:16:03','Излучье','Любимец',0,34,NULL,NULL,1,NULL),(220,'2022-09-15 03:47:43','2022-09-15 03:47:43','Территория Пустой Конец (Сланцы)','д.Глинка',0,200,NULL,NULL,1,NULL),(221,'2022-09-15 03:48:19','2022-09-15 03:48:19','Территория Пустой Конец (Сланцы)','д.Кобралово',0,200,NULL,NULL,1,NULL),(222,'2022-09-15 03:49:27','2022-09-15 03:49:27','Территория Пустой Конец (Сланцы)','д.Белогорка (Гатчинский р-н)',0,190,NULL,NULL,1,NULL),(223,'2022-09-15 03:50:28','2022-09-15 03:50:28','Территория Пустой Конец (Сланцы)','д.Яльгелево (с.п.Ропшинское)',0,170,NULL,NULL,1,NULL),(224,'2022-09-15 03:51:27','2022-09-15 03:51:27','Территория Пустой Конец (Сланцы)','п.Елизаветино (Гатчинский р-н)',0,165,NULL,NULL,1,NULL),(225,'2022-09-15 03:52:38','2022-09-15 03:52:38','д.Добручи (Гдовский р-н, ПсковОбл)','Волхонское ш.6',0,200,NULL,NULL,1,NULL),(226,'2022-09-15 03:53:44','2022-09-15 03:53:44','д.Добручи (Гдовский р-н, ПсковОбл)','Печоры (ПсковОбл)',0,185,NULL,NULL,1,NULL),(227,'2022-09-15 03:54:39','2022-09-15 03:54:39','д.Добручи (Гдовский р-н, ПсковОбл)','п.Усть-Луга (Кингисепский р-н)',0,150,NULL,NULL,1,NULL),(228,'2022-09-15 03:55:28','2022-09-15 03:55:28','д.Добручи (Гдовский р-н, ПсковОбл)','д.Овсище (Сланцевский р-н)',0,66,NULL,NULL,1,NULL),(229,'2022-09-15 03:57:03','2022-09-15 03:57:03','д.Партизанская','д.Добручи (Гдовский р-н)',0,65,NULL,NULL,1,NULL),(230,'2022-09-15 03:58:39','2022-09-15 03:58:39','п.Строение (г.п.Тосненский)','д.Овсище (Сланцевский р-н)',0,195,NULL,NULL,1,NULL),(231,'2022-09-15 03:59:22','2022-09-15 03:59:22','п.Строение (г.п.Тосненский)','д.Перебор (с.п.Выскатское)',0,210,NULL,NULL,1,NULL),(232,'2022-09-15 04:00:33','2022-09-15 04:00:33','п.Строение (г.п.Тосненский)','д.Поречье (Кингисепский р-н)',0,160,NULL,NULL,1,NULL),(233,'2022-09-15 04:01:14','2022-09-15 04:01:14','п.Строение (г.п.Тосненский)','п.Усть-Луга',0,200,NULL,NULL,1,NULL),(234,'2022-09-15 04:01:56','2022-09-15 04:01:56','п.Строение (г.п.Тосненский)','д.Монастырек (с.п.Черновское)',0,195,NULL,NULL,1,NULL),(235,'2022-09-15 04:02:40','2022-09-15 04:02:40','п.Строение (г.п.Тосненский)','Шакицы (с.п.Старопольское)',0,190,NULL,NULL,1,NULL),(236,'2022-09-15 04:03:22','2022-09-15 04:03:22','п.Строение (г.п.Тосненский)','д.Никольское (Тосненский р-н)',0,34,NULL,NULL,1,NULL),(237,'2022-09-15 04:05:45','2022-09-15 04:05:45','д.Первомайская (Гдовский р-н)','с.Отрадное, Никольское 55 (СПб)',0,330,NULL,NULL,1,NULL),(238,'2022-09-15 04:06:25','2022-09-15 04:06:25','п.Строение (г.п.Тосненский)','Волхонское ш.6 (СПб)',0,283,NULL,NULL,1,NULL),(239,'2022-09-15 04:07:20','2022-09-15 04:07:20','п.Строение (г.п.Тосненский)','п.Усть-Луга (Кингисепский р-н)',0,228,NULL,NULL,1,NULL),(240,'2022-09-15 04:08:24','2022-09-15 04:08:24','п.Беседа (с.п.Большеврудское)','п.Усть-Луга (Кингисепский р-н)',0,65,NULL,NULL,1,NULL),(241,'2022-09-15 04:09:38','2022-09-15 04:09:38','д.Завердужье (Лусжкий р-н)','п.Усть-Луга (Кингисепский р-н)',0,170,NULL,NULL,1,NULL),(242,'2022-09-15 04:10:55','2022-09-15 06:09:40','п.Беседа','д.Новоселье (СКЛАД)',0,103,NULL,NULL,1,NULL),(243,'2022-09-15 04:13:49','2022-09-15 04:13:49','д.Вейно (Гдовский р-н)','п.Усть-Луга (Кингисепский р-н) (в обход)',0,150,NULL,NULL,1,NULL),(244,'2022-09-15 04:15:54','2022-09-15 04:15:54','д.Зуево (Гдовский р-н)','п.Усть-Луга (Кингисепский р-н)',0,150,NULL,NULL,1,NULL),(245,'2022-09-15 04:16:45','2022-09-15 04:16:45','д.Пушкино (с.п.Осьминское, Лужский р-н)','п.Усть-Луга (Кингисепский р-н)',0,152,NULL,NULL,1,NULL),(246,'2022-09-15 05:01:46','2022-09-15 05:01:46','д.Брея (с.п.Осьминское)','п.Усть-Луга (Кингисепский р-н)',0,144,NULL,NULL,1,NULL),(247,'2022-09-15 05:43:21','2022-09-15 05:43:21','д.Елемно (Лужский р-н)','п.Усть-Луга (Кингисепский р-н)',0,140,NULL,NULL,1,NULL),(248,'2022-09-15 05:43:52','2022-09-15 05:43:52','д.Любочажье (с.п.Осьминское)','п.Усть-Луга (Кингисепский р-н)',0,138,NULL,NULL,1,NULL),(249,'2022-09-15 05:44:45','2022-09-15 05:44:45','ст.Демешкин перевоз','п.Усть-Луга (Кингисепский р-н)',0,132,NULL,NULL,1,NULL),(250,'2022-09-15 05:45:18','2022-09-15 05:45:18','д.Липа (с.п.Осьминское)','п.Усть-Луга (Кингисепский р-н)',0,117,NULL,NULL,1,NULL),(251,'2022-09-15 05:46:03','2022-09-15 05:46:03','г.Сланцы (ул.Заводская)','п.Усть-Луга (Кингисепский р-н)',0,112,NULL,NULL,1,NULL),(252,'2022-09-15 05:46:35','2022-09-15 05:46:35','д.Кикерицы (с.п.Опольевское)','п.Усть-Луга (Кингисепский р-н)',0,41,NULL,NULL,1,NULL),(253,'2022-09-15 05:51:27','2022-09-15 05:51:27','с.Ляды (Плюсский р-н)','д.Шакицы (с.п.Старопольское)',0,216,NULL,NULL,1,NULL),(254,'2022-09-15 05:53:12','2022-09-15 05:53:12','с.Ляды (Плюсский р-н)','д.Овсище (с.п.Старопольское) (70км-др.маршрут)',0,210,NULL,NULL,1,NULL),(255,'2022-09-15 05:55:02','2022-09-15 05:55:02','с.Ляды (Плюсский р-н)','д.Замошье (с.п.Старопольское) (63км-др.маршрут)',0,220,NULL,NULL,1,NULL),(256,'2022-09-15 05:59:10','2022-09-15 05:59:10','Излучье (Гдовский р-н)','Печоры (Псков Обл)',0,217,NULL,NULL,1,NULL),(257,'2022-09-15 05:59:55','2022-09-15 05:59:55','Излучье (Гдовский р-н)','п.Усть-Луга (Кингисепский р-н)',0,141,NULL,NULL,1,NULL),(258,'2022-09-15 06:11:43','2022-09-15 06:11:43','р.п.Струги Красные (ПсковОбл)','с.Никольское (Тосненский р-н)',0,247,NULL,NULL,1,NULL),(259,'2022-09-15 06:12:29','2022-09-15 06:12:29','р.п.Струги Красные (ПсковОбл)','с.Никольское ш.55 (СПб,Тосненский р-н)',0,247,NULL,NULL,1,NULL),(260,'2022-09-15 06:12:58','2022-09-15 06:12:58','р.п.Струги Красные (ПсковОбл)','п.Оредеж (Лужский р-н)',0,126,NULL,NULL,1,NULL),(261,'2022-09-15 06:13:42','2022-09-15 06:13:42','р.п.Струги Красные (ПсковОбл)','р.п.Заплюсье (Плюсский р-н)',0,63,NULL,NULL,1,NULL),(262,'2022-09-15 06:15:41','2022-09-15 06:15:41','г.п.Луга (ЛенОбл)','п.Серебрянский (Лужский р-н)',0,40,NULL,NULL,1,NULL),(263,'2022-09-15 06:16:52','2022-09-15 06:16:52','п.Новый (с.п. Старопольское)','Б.Вруда (Волосовский р-н)',0,64,NULL,NULL,1,NULL),(264,'2022-09-15 06:17:40','2022-09-15 06:17:40','Б.Вруда (Волосовский р-н)','Ковалёво (г.п.Всеволожское)',0,137,NULL,NULL,1,NULL),(265,'2022-09-15 06:18:08','2022-09-15 06:18:08','Б.Вруда (Волосовский р-н)','г.п.Ульяновка (Тосненский р-н)',0,96,NULL,NULL,1,NULL),(266,'2022-09-15 06:19:10','2022-09-15 06:19:10','д.Шипино (с.п. Осьминское)','г.п.Волосово (ЛенОбл)',0,87,NULL,NULL,1,NULL),(267,'2022-09-15 06:30:04','2022-09-15 06:30:04','с.Партизанская (Гдовский р-н)','д.Выскатка (Сланцевский р-н)',0,92,NULL,NULL,1,NULL),(268,'2022-09-15 06:31:14','2022-09-15 06:31:14','р.п.Сазоново (Вологодская Обл)','Волхонское ш.6 (СПб)',0,367,NULL,NULL,1,NULL),(269,'2022-09-15 06:36:12','2022-09-15 06:36:12','Пустошка','СПб, Партизанская 14',0,490,NULL,NULL,1,NULL),(270,'2022-09-15 06:36:50','2022-09-15 06:36:50','Пустошка (Псков Обл)','Волхонское ш.6 (СПб)',0,462,NULL,NULL,1,NULL),(271,'2022-09-15 06:37:01','2022-09-15 06:37:01','Пустошка (Псков Обл)','СПб, Партизанская 14',0,490,NULL,NULL,1,NULL),(272,'2022-09-15 07:02:53','2022-09-15 07:02:53','Новоселье','Труба Газпром',0,111,NULL,NULL,1,NULL),(273,'2022-09-15 08:32:27','2022-09-15 08:32:27','д.Китенки (Палкинский р-н)','СПб, пр.Лахтинский 100',0,380,NULL,NULL,1,NULL),(274,'2022-09-15 08:33:05','2022-09-15 08:33:05','д.Завердужье','Тосно',0,230,NULL,NULL,1,NULL);
/*!40000 ALTER TABLE `route_billings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `routes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `owner_id` bigint unsigned NOT NULL,
  `driver_id` bigint unsigned NOT NULL,
  `dir_type_trucks_id` bigint unsigned NOT NULL,
  `cargo_id` bigint unsigned NOT NULL,
  `payer_id` bigint unsigned NOT NULL,
  `address_loading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_unloading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_length` int NOT NULL DEFAULT '0',
  `price_route` double(8,2) NOT NULL,
  `number_trips` int NOT NULL,
  `unexpected_expenses` double(8,2) NOT NULL DEFAULT '0.00',
  `summ_route` double(8,2) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `profit_id` bigint unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `routes_owner_id_foreign` (`owner_id`),
  KEY `routes_driver_id_foreign` (`driver_id`),
  KEY `routes_dir_type_trucks_id_foreign` (`dir_type_trucks_id`),
  KEY `routes_cargo_id_foreign` (`cargo_id`),
  KEY `routes_payer_id_foreign` (`payer_id`),
  CONSTRAINT `routes_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `dir_cargos` (`id`),
  CONSTRAINT `routes_dir_type_trucks_id_foreign` FOREIGN KEY (`dir_type_trucks_id`) REFERENCES `dir_type_trucks` (`id`),
  CONSTRAINT `routes_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`),
  CONSTRAINT `routes_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`),
  CONSTRAINT `routes_payer_id_foreign` FOREIGN KEY (`payer_id`) REFERENCES `dir_payers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salaries`
--

DROP TABLE IF EXISTS `salaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `salaries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `owner_id` bigint unsigned NOT NULL,
  `driver_id` bigint unsigned NOT NULL,
  `salary` double(8,2) NOT NULL,
  `profit_id` bigint unsigned NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `salaries_owner_id_foreign` (`owner_id`),
  KEY `salaries_driver_id_foreign` (`driver_id`),
  CONSTRAINT `salaries_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`),
  CONSTRAINT `salaries_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salaries`
--

LOCK TABLES `salaries` WRITE;
/*!40000 ALTER TABLE `salaries` DISABLE KEYS */;
/*!40000 ALTER TABLE `salaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `driver_id` bigint unsigned NOT NULL,
  `route_id` bigint unsigned NOT NULL,
  `service_id` bigint unsigned NOT NULL,
  `price` double(8,2) NOT NULL,
  `number_operations` int NOT NULL,
  `sum` double(8,2) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_driver_id_foreign` (`driver_id`),
  KEY `services_route_id_foreign` (`route_id`),
  KEY `services_service_id_foreign` (`service_id`),
  CONSTRAINT `services_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`),
  CONSTRAINT `services_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `dir_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Artem','arttema@mail.ru',NULL,'$2y$10$mWTtP651N9USVq73BrV5wucZb.EMjd8ihb8ZCXvJu2kAkK3Qe8TZ.',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',1,1,NULL),(2,'Denis','dv1840145@gmail.com',NULL,'$2y$10$CYxzO8HhNZXckgWh/.A2wuz3/GGBmmR8UfcFCMGTbmn80Cp2D5mhe',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',1,1,NULL),(3,'060','haziullin.andrei@mail.ru',NULL,'$2y$10$w1PsieUoPsFhdUt/sQSQ8.BVQDcKJyg/JPY1JisJJo06kghKQhjAW',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(4,'548','smirnov@mail.ru',NULL,'$2y$10$ic0SmaggZcl8OjCkDQr8X.zXKAvdZSjzcZQTaQSD1b0RF.27su.km',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(5,'513','sashok568@inbox.ru',NULL,'$2y$10$sb84qWcQCe34vXfAjQJ6EumC1hAK9aJ1zAE8/etJWyH8VcnLCjsNG',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(6,'185','sachamol75@gmail.com',NULL,'$2y$10$//QmYL4zzOkp264eJGM3gexMENoAmvCxswmDEHW2D8w6gbq/hH4yi',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(7,'101','lukin_vyacheslav@mail.ru',NULL,'$2y$10$v4VGSsTr9js7bVfQAbU2E.UKATXRrGi0XA/MJAwcAKywOdjP5710K',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(8,'396','aleksii.99@mail.ru',NULL,'$2y$10$U3O5si9bQdPxZTLCswXXCeJ1rQftQvlMb4x.TdYkDCEjIdViqd0N6',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(9,'579','davydenkov@inbox.ru',NULL,'$2y$10$iZXiTzqE0md88WsOdaqnUuLGRWA43y2kqixnto8NXdV/ptYQFZp82',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(10,'547','alex-1884@mail.ru',NULL,'$2y$10$5NZz4crr7q4V2vFhJIHLqOLk0Nn3oauBgw5ptuE7fTnRQyarejzue',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(11,'294','maiorov.ivan1986@mail.ru',NULL,'$2y$10$wX2pVSNc1OezcPE4T2sC6O2v.1P9b8q42fAheCIPPqnHmkSPB0M4m',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(12,'931','mers862@mail.ru',NULL,'$2y$10$.9F2jkflognZYwnlwyIutOu/thnra1THTtq47sNCobG3xqo5IEtfi',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(13,'097','Vladimirov@inbox.ru',NULL,'$2y$10$40urxvLiZGIMS93aLTkPlOXxJmDoFpYdmo/AssJrShefcEAxW5BP6',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(14,'792','tilik@inbox.ru',NULL,'$2y$10$3pvddULhRZcAUYnR5VttZOyN5givSJT2dLdC5jivxPHDuC.Ain5pW',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(15,'280','dumtsev.igor@bk.ru',NULL,'$2y$10$jkhVZYegaxhhex3BHydtPuED5kpz2lSjhK/eOzjT20mTYx55/MYnq',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL);
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

-- Dump completed on 2022-09-16 16:12:31