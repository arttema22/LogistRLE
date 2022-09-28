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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `owner_id` bigint unsigned NOT NULL,
  `driver_id` bigint unsigned NOT NULL,
  `saldo_start` double(8,2) NOT NULL DEFAULT '0.00',
  `sum_salary` double(8,2) NOT NULL DEFAULT '0.00',
  `sum_refuelings` double(8,2) NOT NULL DEFAULT '0.00',
  `sum_routes` double(8,2) NOT NULL DEFAULT '0.00',
  `sum_services` double(8,2) NOT NULL DEFAULT '0.00',
  `sum_accrual` double(8,2) NOT NULL DEFAULT '0.00',
  `sum_amount` double(8,2) NOT NULL DEFAULT '0.00',
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
INSERT INTO `profits` VALUES (1,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,1,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'Начальная загрузка',1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,2,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'Начальная загрузка',1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,3,-37760.00,0.00,0.00,0.00,0.00,0.00,0.00,-37760.00,'Начальная загрузка',1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,4,139306.00,0.00,0.00,0.00,0.00,0.00,0.00,139306.00,'Начальная загрузка',1,NULL),(5,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,5,116499.00,0.00,0.00,0.00,0.00,0.00,0.00,116499.00,'Начальная загрузка',1,NULL),(6,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,6,136836.00,0.00,0.00,0.00,0.00,0.00,0.00,136836.00,'Начальная загрузка',1,NULL),(7,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,7,332169.00,0.00,0.00,0.00,0.00,0.00,0.00,332169.00,'Начальная загрузка',1,NULL),(8,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,8,184101.00,0.00,0.00,0.00,0.00,0.00,0.00,184101.00,'Начальная загрузка',1,NULL),(9,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,9,-75684.00,0.00,0.00,0.00,0.00,0.00,0.00,-75684.00,'Начальная загрузка',1,NULL),(10,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,10,-13952.00,0.00,0.00,0.00,0.00,0.00,0.00,-13952.00,'Начальная загрузка',1,NULL),(11,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,11,-34904.00,0.00,0.00,0.00,0.00,0.00,0.00,-34904.00,'Начальная загрузка',1,NULL),(12,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,12,234862.00,0.00,0.00,0.00,0.00,0.00,0.00,234862.00,'Начальная загрузка',1,NULL),(13,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,13,116715.00,0.00,0.00,0.00,0.00,0.00,0.00,116715.00,'Начальная загрузка',1,NULL),(14,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,14,-17122.00,0.00,0.00,0.00,0.00,0.00,0.00,-17122.00,'Начальная загрузка',1,NULL),(15,'2022-09-01 06:00:00','2022-09-01 06:00:00','Старт','2022-09-01',1,15,73662.00,0.00,0.00,0.00,0.00,0.00,0.00,73662.00,'Начальная загрузка',1,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refillings`
--

LOCK TABLES `refillings` WRITE;
/*!40000 ALTER TABLE `refillings` DISABLE KEYS */;
INSERT INTO `refillings` VALUES (1,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-14',1,3,1,10,10.00,100.00,0,NULL,1,NULL),(2,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-14',1,3,1,10,10.00,100.00,0,NULL,1,NULL),(3,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-14',1,3,1,10,10.00,100.00,0,NULL,1,NULL),(4,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-14',1,3,1,10,10.00,100.00,0,NULL,1,NULL),(5,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-14',1,3,1,10,10.00,100.00,0,NULL,1,NULL);
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
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_static` tinyint(1) NOT NULL DEFAULT '0',
  `length` int DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route_billings`
--

LOCK TABLES `route_billings` WRITE;
/*!40000 ALTER TABLE `route_billings` DISABLE KEYS */;
INSERT INTO `route_billings` VALUES (1,'2022-09-02 06:00:00','2022-09-02 06:00:00','СХТ','Пикалево',0,460,NULL,NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-01 06:00:00','СХТ','Синявино',0,237,NULL,NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-01 06:00:00','СХТ','Невская Дубровка',0,234,NULL,NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-01 06:00:00','СХТ','Сертолово (ЛСР)',0,230,NULL,NULL,1,NULL),(5,'2022-09-03 06:00:00','2022-09-03 06:00:00','СХТ','Ковалево',0,220,NULL,NULL,1,NULL),(6,'2022-09-01 06:00:00','2022-09-01 06:00:00','СХТ','Отрадное',0,224,NULL,NULL,1,NULL),(7,'2022-09-04 06:00:00','2022-09-04 06:00:00','СХТ','СПб, Партизанская 14',0,210,NULL,NULL,1,NULL),(8,'2022-09-01 06:00:00','2022-09-01 06:00:00','СХТ','Глинка',0,205,NULL,NULL,1,NULL),(9,'2022-09-01 06:00:00','2022-09-01 06:00:00','Волхонское','Шушары',1,NULL,7000.00,NULL,1,NULL),(10,'2022-09-04 06:01:00','2022-09-04 06:01:00','Волхонское','Пушкин',1,NULL,7000.00,NULL,1,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
INSERT INTO `routes` VALUES (1,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,1,1,1,'Kira Lemke PhD','Dr. Dangelo Dibbert',77,999.99,1,0.00,888.00,NULL,0,1,NULL),(2,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,1,1,1,'Amelia VonRueden','Dr. Karen Weber I',77,999.99,1,0.00,888.00,NULL,0,1,NULL),(3,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,1,1,1,'Fleta Satterfield','Dr. Ivy Wilkinson III',77,999.99,1,0.00,888.00,NULL,0,1,NULL),(4,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,1,1,1,'Rachel Auer','Prof. Carli Carter IV',77,999.99,1,0.00,888.00,NULL,0,1,NULL),(5,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,1,1,1,'Malinda Ferry','Marjolaine Tremblay DVM',77,999.99,1,0.00,888.00,NULL,0,1,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salaries`
--

LOCK TABLES `salaries` WRITE;
/*!40000 ALTER TABLE `salaries` DISABLE KEYS */;
INSERT INTO `salaries` VALUES (1,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,15000.00,0,NULL,1,NULL),(2,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,15000.00,0,NULL,1,NULL),(3,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,15000.00,0,NULL,1,NULL),(4,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,15000.00,0,NULL,1,NULL),(5,'2022-09-27 09:58:24','2022-09-27 09:58:24','2022-09-27',1,3,15000.00,0,NULL,1,NULL);
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
INSERT INTO `users` VALUES (1,'Artem','arttema@mail.ru',NULL,'$2y$10$sNVS8iXK/buhmA6Wm0BSZOAq3VxSzkF/xBOBsC3ZU8OC5Q.nxl6Sq',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',1,1,NULL),(2,'Denis','dv1840145@gmail.com',NULL,'$2y$10$nAxF3xxFOD19W.LZuLroDeoKOdqbnL8aCfW1MaoAdL0k3rMTseSkG',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',1,1,NULL),(3,'060','haziullin.andrei@mail.ru',NULL,'$2y$10$6/E0EbiN93FVx0KsLDJS0eeMJZQ53RxdPTIU9QJLXT53js9N3.uUe',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(4,'548','smirnov@mail.ru',NULL,'$2y$10$JZVDJ8YYAJmvqRYFFW78oO/1RviEsZJ7izM.NfBgiKl8ruUfFwvHe',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(5,'513','sashok568@inbox.ru',NULL,'$2y$10$ENKIwyF7TsqmYgmuS6sKpuadk0jReqeAUDKm./Ag0dq7NIOm6vDlC',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(6,'185','sachamol75@gmail.com',NULL,'$2y$10$qvD8eMZybAVBRY25nQo.x.rE9gX1kPhtwMU/lbMt0ngqVrpCAoAGa',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(7,'101','lukin_vyacheslav@mail.ru',NULL,'$2y$10$VrEeBzdgYOanmhgkqC4LJeqOKEz7P999JrHJ.KGgNzNX0kE/0dfXC',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(8,'396','aleksii.99@mail.ru',NULL,'$2y$10$y6RZB1OiacK04p3eS7z.i.7epR/MilWVt0T5f5gwZQawOc/v8fNcu',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(9,'579','davydenkov@inbox.ru',NULL,'$2y$10$VSesVjFNrptUM4r/0ut1yuuLL.3y2b3d/HRbj2WNV9OhzGsxHUsoe',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(10,'547','alex-1884@mail.ru',NULL,'$2y$10$Ye2WPFyc/mstpSWQIy6QqeC3Sp94u5kAPZXbcU8xf1pY4CU84uC6G',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(11,'294','maiorov.ivan1986@mail.ru',NULL,'$2y$10$NJUid0N6aEbBNs04uGi0S.hbCx7pTK9ZPrZtoorfD2i55XLYk5n.q',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(12,'931','mers862@mail.ru',NULL,'$2y$10$h4hgqPDkW4EVFToHvPmaseMl9Yu8Tr.5wXYm9wS3OGtb0BjbNnNMe',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(13,'097','Vladimirov@inbox.ru',NULL,'$2y$10$0WD0sZlUqXNnjc2C7y/TLuIllFZZfevCWIOtr9JtaHHtWGFSSe2py',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(14,'792','tilik@inbox.ru',NULL,'$2y$10$WR6lpM6rMY591oTSk/ZfVOF9Dd37oh9IWTAm/GdJfpe64vfDgSlSa',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL),(15,'280','dumtsev.igor@bk.ru',NULL,'$2y$10$5t0yjdbhl7KW/zjht6I5duAvawwe4WHc6TRflSelk69Z0Qy.iab9K',NULL,'2022-09-01 06:00:00','2022-09-01 06:00:00',2,1,NULL);
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

-- Dump completed on 2022-09-27 12:58:53
