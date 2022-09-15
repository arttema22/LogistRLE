
--
-- Table structure for table `route_billings`
--

DROP TABLE IF EXISTS `route_billings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `route_billings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_static` tinyint(1) NOT NULL DEFAULT 0,
  `length` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route_billings`
--

LOCK TABLES `route_billings` WRITE;
/*!40000 ALTER TABLE `route_billings` DISABLE KEYS */;
INSERT INTO `route_billings` VALUES (1,'2022-09-01 06:00:00','2022-09-12 10:00:36','пос.Сельхозтехника','г.п.Пикалево',0,460,NULL,NULL,1,NULL),(2,'2022-09-01 06:00:00','2022-09-12 10:00:43','пос.Сельхозтехника','г.п.Синявино',0,237,NULL,NULL,1,NULL),(3,'2022-09-01 06:00:00','2022-09-12 10:01:23','пос.Сельхозтехника','ст.Невская Дубровка',0,234,NULL,NULL,1,NULL),(4,'2022-09-01 06:00:00','2022-09-12 10:01:33','пос.Сельхозтехника','г.Сертолово',0,230,NULL,NULL,1,NULL),(5,'2022-09-01 06:00:00','2022-09-12 10:01:54','пос.Сельхозтехника','пос.Ковалёво',0,220,NULL,NULL,1,NULL),(6,'2022-09-01 06:00:00','2022-09-12 10:02:33','пос.Сельхозтехника','пос.Отрадное',0,224,NULL,NULL,1,NULL),(7,'2022-09-01 06:00:00','2022-09-12 10:03:04','пос.Сельхозтехника','СПб, ул.Партизанская 14',0,210,NULL,NULL,1,NULL),(8,'2022-09-01 06:00:00','2022-09-12 10:03:24','пос.Сельхозтехника','д.Глинка',0,205,NULL,NULL,1,NULL),(9,'2022-09-01 06:00:00','2022-09-12 10:03:42','Волхонское ш.6','д.Шушары',1,NULL,7000.00,NULL,1,NULL),(10,'2022-09-01 06:00:00','2022-09-12 10:03:51','Волхонское ш.6','г.Пушкин',1,NULL,7000.00,NULL,1,NULL),(11,'2022-09-12 09:41:16','2022-09-12 10:04:02','Волхонское ш.6','пос.Сельхозтехника',0,88,NULL,NULL,1,NULL),(12,'2022-09-12 09:43:28','2022-09-12 10:04:20','Волхонское ш.6','пос.Терволово',1,NULL,7000.00,NULL,1,NULL),(13,'2022-09-12 09:43:59','2022-09-12 09:43:59','Волхонское','пр.Пискаревский 150',1,NULL,7000.00,NULL,1,NULL),(15,'2022-09-12 09:47:05','2022-09-12 09:47:05','Волхонское','Невская Дубровка',1,NULL,7000.00,NULL,1,NULL),(16,'2022-09-12 09:47:21','2022-09-12 10:04:51','Волхонское ш.6','СПб, ст.Парнас',1,NULL,7000.00,NULL,1,NULL),(17,'2022-09-12 09:54:49','2022-09-12 09:59:18','д.Вейно','д.Любимец',0,24,NULL,NULL,1,NULL),(18,'2022-09-12 09:55:27','2022-09-12 09:59:29','д.Вейно','г.Сланцы',0,29,NULL,NULL,1,NULL),(19,'2022-09-12 09:55:49','2022-09-12 09:59:49','д.Вейно','пос.Сельхозтехника',0,23,NULL,NULL,1,NULL),(20,'2022-09-12 09:56:52','2022-09-12 09:56:52','пос.Возрождение','д.Кривко',0,130,NULL,NULL,1,NULL),(21,'2022-09-12 10:07:15','2022-09-12 10:07:15','д.Гостицы','пос.Сельхозтехника',0,2,NULL,NULL,1,NULL),(22,'2022-09-12 10:07:23','2022-09-12 10:07:23','пос.Сельхозтехника','д.Гостицы',0,2,NULL,NULL,1,NULL),(23,'2022-09-12 10:07:53','2022-09-12 10:07:53','пос.Сельхозтехника','г.Выборг (Склад Технониколь)',0,182,NULL,NULL,1,NULL),(24,'2022-09-12 10:08:36','2022-09-12 10:09:02','пос.Сельхозтехника','ст.Демешкин Перевоз',0,9,NULL,NULL,1,NULL),(25,'2022-09-12 10:08:49','2022-09-12 10:08:49','ст.Демешкин Перевоз','пос.Сельхозтехника',0,9,NULL,NULL,1,NULL),(26,'2022-09-12 10:09:52','2022-09-12 10:09:52','ст.Демешкин перевоз','д.Новоселье (Сланцевский р-н)',0,31,NULL,NULL,1,NULL),(27,'2022-09-12 10:10:05','2022-09-12 10:10:05','д.Новоселье (Сланцевский р-н)','ст.Демешкин перевоз',0,31,NULL,NULL,1,NULL),(28,'2022-09-12 10:10:34','2022-09-12 10:10:34','г.Ивангород','пос.Сельхозтехника',0,91,NULL,NULL,1,NULL),(29,'2022-09-12 10:21:55','2022-09-12 10:21:55','р.п.Идрица','г.Псков (ч/з Палкино)',0,223,NULL,NULL,1,NULL),(30,'2022-09-12 10:22:08','2022-09-12 10:22:08','р.п.Идрица','Волхонское ш.6',0,484,NULL,NULL,1,NULL),(31,'2022-09-12 10:23:04','2022-09-12 10:23:04','р.п.Идрица','пос.Сельхозтехника',0,365,NULL,NULL,1,NULL),(32,'2022-09-12 10:23:19','2022-09-12 10:23:19','р.п.Идрица','СПб, пр.Дальневосточный',0,492,NULL,NULL,1,NULL),(33,'2022-09-12 10:24:04','2022-09-12 10:24:04','д.Конезерье','ст.Демешкин перевоз',0,193,NULL,NULL,1,NULL),(34,'2022-09-12 10:26:46','2022-09-12 10:26:46','пос.Сельхозтехника','д.Новосаратовка',0,200,NULL,NULL,1,NULL),(35,'2022-09-12 10:27:23','2022-09-12 10:27:23','пос.Сельхозтехника','СПб, промзона Уткина Заводь',0,202,NULL,NULL,1,NULL),(36,'2022-09-12 10:28:12','2022-09-12 10:28:12','пос.Сельхозтехника','пос.Кобралово',0,185,NULL,NULL,1,NULL),(37,'2022-09-12 10:28:49','2022-09-12 10:28:49','пос.Сельхозтехника','р.п.Заплюсье',0,186,NULL,NULL,1,NULL),(38,'2022-09-12 10:33:17','2022-09-12 10:33:45','пос.Сельхозтехника','д.Пеники',0,170,NULL,NULL,1,NULL),(39,'2022-09-12 10:33:32','2022-09-12 10:33:32','пос.Сельхозтехника','д.Оредеж',0,177,NULL,NULL,1,NULL),(40,'2022-09-12 10:34:11','2022-09-12 10:34:11','пос.Сельхозтехника','СПб, Отрадное, Никольское ш.55',0,224,NULL,NULL,1,NULL),(41,'2022-09-12 10:34:49','2022-09-12 10:34:49','пос.Сельхозтехника','Порт \"Бронка\" г.Ломоносов',0,175,NULL,NULL,1,NULL),(43,'2022-09-12 10:35:46','2022-09-12 10:35:46','пос.Сельхозтехника','Петергофское ш.',0,165,NULL,NULL,1,NULL),(44,'2022-09-12 10:35:59','2022-09-12 10:35:59','пос.Сельхозтехника','Ропшинское ш.',0,165,NULL,NULL,1,NULL),(45,'2022-09-12 10:36:36','2022-09-12 10:36:36','пос.Сельхозтехника','д.Старицы',0,141,NULL,NULL,1,NULL),(46,'2022-09-12 10:37:23','2022-09-12 10:37:23','пос.Сельхозтехника','д.Терволово',0,150,NULL,NULL,1,NULL),(47,'2022-09-12 10:38:02','2022-09-12 10:38:02','пос.Сельхозтехника','д.Лаголово',0,155,NULL,NULL,1,NULL),(48,'2022-09-12 10:38:43','2022-09-12 10:38:43','пос.Сельхозтехника','пос.Елизаветино',0,140,NULL,NULL,1,NULL),(49,'2022-09-12 10:39:37','2022-09-12 10:39:37','пос.Сельхозтехника','д.СосновыйБор',0,147,NULL,NULL,1,NULL),(50,'2022-09-12 10:39:47','2022-09-12 10:39:47','пос.Сельхозтехника','д.Кикерино',0,137,NULL,NULL,1,NULL),(51,'2022-09-12 10:40:03','2022-09-12 10:40:03','пос.Сельхозтехника','Порт Усть-Луга',0,134,NULL,NULL,1,NULL),(52,'2022-09-12 10:40:29','2022-09-12 12:56:16','пос.Сельхозтехника','пос.Середка',0,118,NULL,NULL,1,NULL),(53,'2022-09-12 10:41:06','2022-09-12 10:41:06','пос.Сельхозтехника','д.Первомайская',0,109,NULL,NULL,1,NULL),(54,'2022-09-12 10:41:41','2022-09-12 10:41:41','пос.Сельхозтехника','д.Большая Вруда',0,102,NULL,NULL,1,NULL),(55,'2022-09-12 10:42:21','2022-09-12 10:42:21','пос.Сельхозтехника','д.Забредняжье',0,60,NULL,NULL,1,NULL),(56,'2022-09-12 10:42:46','2022-09-12 10:42:46','пос.Сельхозтехника','д.Овсище',0,50,NULL,NULL,1,NULL),(57,'2022-09-12 10:43:09','2022-09-12 10:43:09','пос.Сельхозтехника','д.Шакицы',0,55,NULL,NULL,1,NULL),(58,'2022-09-12 10:43:27','2022-09-12 10:43:27','пос.Сельхозтехника','д.Старополье',0,40,NULL,NULL,1,NULL),(59,'2022-09-12 10:46:31','2022-09-12 10:46:31','пос.Сельхозтехника','пос.Новоселье',0,33,NULL,NULL,1,NULL),(60,'2022-09-12 10:46:51','2022-09-12 10:46:51','пос.Новоселье','пос.Сельхозтехника',0,33,NULL,NULL,1,NULL),(61,'2022-09-12 10:47:24','2022-09-12 10:47:24','пос.Сельхозтехника','Строение',0,220,NULL,NULL,1,NULL),(62,'2022-09-12 10:47:33','2022-09-12 10:47:33','пос.Строение','пос.Сельхозтехника',0,220,NULL,NULL,1,NULL),(63,'2022-09-12 10:48:13','2022-09-12 10:48:13','пос.Новоселье','Волхонское ш.6',0,188,NULL,NULL,1,NULL),(64,'2022-09-12 10:48:26','2022-09-12 10:48:26','Волхонское ш.6','пос.Новоселье',0,188,NULL,NULL,1,NULL),(65,'2022-09-12 10:49:11','2022-09-12 10:49:11','пос.Сельхозтехника','д.Швары',0,397,NULL,NULL,1,NULL),(66,'2022-09-12 10:49:20','2022-09-12 10:49:20','д.Швары','пос.Сельхозтехника',0,397,NULL,NULL,1,NULL),(67,'2022-09-12 10:50:03','2022-09-12 10:50:03','Порт Усть-Луга','пос.Сельхозтехника',0,134,NULL,NULL,1,NULL),(68,'2022-09-12 10:50:43','2022-09-12 10:50:43','д.Криково','пос.Сельхозтехника',0,86,NULL,NULL,1,NULL),(69,'2022-09-12 10:50:51','2022-09-12 10:50:51','пос.Сельхозтехника','д.Криково',0,86,NULL,NULL,1,NULL),(70,'2022-09-12 10:53:12','2022-09-12 10:53:12','пос.Сельхозтехника','д.Белогорка',0,180,NULL,NULL,1,NULL),(71,'2022-09-12 10:53:25','2022-09-12 10:53:25','д.Белогорка','пос.Сельхозтехника',0,180,NULL,NULL,1,NULL),(72,'2022-09-12 10:54:18','2022-09-12 10:54:18','Порт Усть-Луга','д.Малый ЛУЦК',0,63,NULL,NULL,1,NULL),(73,'2022-09-12 10:54:32','2022-09-12 10:54:32','д.Малый ЛУЦК','Порт Усть-Луга',0,63,NULL,NULL,1,NULL),(74,'2022-09-12 10:55:13','2022-09-12 10:55:13','Порт Усть-Луга','пос.Кобралово',0,170,NULL,NULL,1,NULL),(75,'2022-09-12 10:55:33','2022-09-12 10:55:33','пос.Кобралово','Порт Усть-Луга',0,170,NULL,NULL,1,NULL),(76,'2022-09-12 10:56:15','2022-09-12 10:56:15','Порт Усть-Луга','д.Шушары',0,161,NULL,NULL,1,NULL),(77,'2022-09-12 10:57:06','2022-09-12 10:57:06','Порт Усть-Луга','д.Каменка',0,210,NULL,NULL,1,NULL),(78,'2022-09-12 10:59:24','2022-09-12 10:59:24','пос.Сельхозтехника','д.Полично',0,41,NULL,NULL,1,NULL),(79,'2022-09-12 10:59:38','2022-09-12 10:59:38','д.Полично','пос.Сельхозтехника',0,41,NULL,NULL,1,NULL),(80,'2022-09-12 10:59:57','2022-09-12 10:59:57','д.Полично','д.Новоселье',0,50,NULL,NULL,1,NULL),(81,'2022-09-12 11:00:57','2022-09-12 11:00:57','пос.Сельхозтехника','д.Шипино',0,85,NULL,NULL,1,NULL),(82,'2022-09-12 11:01:06','2022-09-12 11:01:06','д.Шипино','пос.Сельхозтехника',0,85,NULL,NULL,1,NULL),(83,'2022-09-12 11:10:01','2022-09-12 11:10:01','пос.Тарайка','пос.Сельхозтехника',0,107,NULL,NULL,1,NULL),(84,'2022-09-12 11:10:11','2022-09-12 11:10:11','пос.Сельхозтехника','пос.Тарайка',0,107,NULL,NULL,1,NULL),(85,'2022-09-12 11:10:31','2022-09-12 11:10:31','Порт Усть-Луга','пос.Тарайка',0,46,NULL,NULL,1,NULL),(86,'2022-09-12 11:10:44','2022-09-12 11:10:44','пос.Тарайка','Порт Усть-Луга',0,46,NULL,NULL,1,NULL),(87,'2022-09-12 11:18:42','2022-09-12 11:18:42','пос.Сельхозтехника','пос.Беседа',0,90,NULL,NULL,1,NULL),(88,'2022-09-12 11:19:00','2022-09-12 11:19:00','пос.Беседа','пос.Сельхозтехника',0,90,NULL,NULL,1,NULL),(89,'2022-09-12 11:19:29','2022-09-12 11:19:29','пос.Сазоново','пос.Сельхозтехника',0,530,NULL,NULL,1,NULL),(90,'2022-09-12 11:19:38','2022-09-12 11:19:38','пос.Сельхозтехника','пос.Сазоново',0,530,NULL,NULL,1,NULL),(91,'2022-09-12 11:21:31','2022-09-12 11:21:31','пос.Сазоново','пос.Сельхозтехника',0,530,NULL,NULL,1,NULL),(92,'2022-09-12 11:21:57','2022-09-12 11:21:57','пос.Сельхозтехника','пос.Серебрянский',0,180,NULL,NULL,1,NULL),(93,'2022-09-12 11:22:06','2022-09-12 11:22:06','пос.Серебрянский','пос.Сельхозтехника',0,180,NULL,NULL,1,NULL),(94,'2022-09-12 11:22:35','2022-09-12 11:22:35','пос.Сельхозтехника','пос.Зуево',0,42,NULL,NULL,1,NULL),(95,'2022-09-12 11:22:44','2022-09-12 11:22:44','пос.Зуево','пос.Сельхозтехника',0,42,NULL,NULL,1,NULL),(96,'2022-09-12 11:22:56','2022-09-12 11:22:56','пос.Середка','пос.Сельхозтехника',0,118,NULL,NULL,1,NULL),(97,'2022-09-12 11:23:06','2022-09-12 11:23:06','пос.Сельхозтехника','пос.Середка',0,118,NULL,NULL,1,NULL),(98,'2022-09-12 11:23:40','2022-09-12 11:23:40','пос.Печоры','пос.Сельхозтехника',0,212,NULL,NULL,1,NULL),(99,'2022-09-12 11:23:50','2022-09-12 11:23:50','пос.Сельхозтехника','пос.Печоры',0,212,NULL,NULL,1,NULL),(100,'2022-09-12 11:25:25','2022-09-12 11:25:25','пос.Швары','г.п.Федоровское',0,500,NULL,NULL,1,NULL),(101,'2022-09-12 11:26:27','2022-09-12 11:26:27','пос.Атрубашка','пос.Сельхозтехника',0,87,NULL,NULL,1,NULL),(102,'2022-09-12 11:26:53','2022-09-12 11:26:53','пос.Ляды','пос.Сельхозтехника',0,79,NULL,NULL,1,NULL),(103,'2022-09-12 11:27:40','2022-09-12 11:27:40','д.Первомайская','пос.Сельхозтехника',0,105,NULL,NULL,1,NULL),(104,'2022-09-12 11:27:48','2022-09-12 11:27:48','пос.Сельхозтехника','д.Первомайская',0,105,NULL,NULL,1,NULL),(107,'2022-09-12 11:29:20','2022-09-12 11:29:20','д.Тикопись','пос.Сельхозтехника',0,75,NULL,NULL,1,NULL),(108,'2022-09-12 11:29:29','2022-09-12 11:29:29','пос.Сельхозтехника','д.Тикопись',0,75,NULL,NULL,1,NULL),(109,'2022-09-12 11:30:12','2022-09-12 11:30:12','д.Кикерицы','пос.Сельхозтехника',0,85,NULL,NULL,1,NULL),(110,'2022-09-12 11:30:23','2022-09-12 11:30:23','пос.Сельхозтехника','д.Кикерицы',0,85,NULL,NULL,1,NULL),(111,'2022-09-12 11:31:10','2022-09-12 11:31:10','пос.Сельхозтехника','пос.Сосновый Бор',0,145,NULL,NULL,1,NULL),(112,'2022-09-12 11:31:28','2022-09-12 11:31:28','пос. Сосновый Бор','пос.Сельхозтехника',0,145,NULL,NULL,1,NULL),(113,'2022-09-12 11:32:12','2022-09-12 11:32:12','пос.Остров','пос.Сельхозтехника',0,225,NULL,NULL,1,NULL),(114,'2022-09-12 11:32:22','2022-09-12 11:32:22','пос.Сельхозтехника','пос.Остров',0,225,NULL,NULL,1,NULL),(115,'2022-09-12 11:33:24','2022-09-12 11:33:24','г.п.Синявино','пос.Сельхозтехника',0,255,NULL,NULL,1,NULL),(116,'2022-09-12 11:33:53','2022-09-12 11:33:53','р.п.Сазоново','пос.Сельхозтехника',0,550,NULL,NULL,1,NULL),(117,'2022-09-12 11:35:12','2022-09-12 11:35:12','пос.Новоселье','Елизаветино',0,158,NULL,NULL,1,NULL),(118,'2022-09-12 11:35:21','2022-09-12 11:35:21','пос.Елизаветино','пос.Новоселье',0,158,NULL,NULL,1,NULL),(119,'2022-09-12 11:35:52','2022-09-12 11:35:52','пос.Осьмино','пос.Новоселье',0,80,NULL,NULL,1,NULL),(120,'2022-09-12 11:36:02','2022-09-12 11:36:02','пос.Новоселье','пос.Осьмино',0,80,NULL,NULL,1,NULL),(121,'2022-09-12 11:37:05','2022-09-12 11:37:05','д.Шипино','пос.Новоселье',0,66,NULL,NULL,1,NULL),(122,'2022-09-12 11:37:28','2022-09-12 11:37:28','д.Полично','пос.Новоселье',0,65,NULL,NULL,1,NULL),(123,'2022-09-12 11:37:54','2022-09-12 11:37:54','д.Сара Лог','пос.Новоселье',0,62,NULL,NULL,1,NULL),(124,'2022-09-12 11:38:15','2022-09-12 11:38:15','д.Брагино','пос.Новоселье',0,57,NULL,NULL,1,NULL),(125,'2022-09-12 11:38:28','2022-09-12 11:38:28','пос.Зуево','пос.Новоселье',0,40,NULL,NULL,1,NULL),(126,'2022-09-12 11:39:00','2022-09-12 11:39:00','пос.Печоры','пос.Новоселье',0,230,NULL,NULL,1,NULL),(127,'2022-09-12 11:39:54','2022-09-12 11:39:54','д.Елемно','пос.Новоселье',0,75,NULL,NULL,1,NULL),(128,'2022-09-12 11:46:42','2022-09-12 11:46:42','д.Первомайская','пос.Новоселье',0,130,NULL,NULL,1,NULL),(129,'2022-09-12 11:47:31','2022-09-12 11:47:31','пос.Серебрянский','пос.Новоселье',0,190,NULL,NULL,1,NULL),(130,'2022-09-12 11:47:41','2022-09-12 11:47:41','пос.Новоселье','пос.Серебрянский',0,190,NULL,NULL,1,NULL),(131,'2022-09-12 11:52:36','2022-09-12 12:58:03','пос.Середка','пос.Новоселье',0,140,NULL,NULL,1,NULL),(132,'2022-09-12 11:56:31','2022-09-12 12:58:00','пос.Середка','тер.Пустой конец',0,140,NULL,NULL,1,NULL),(133,'2022-09-12 11:56:51','2022-09-12 12:57:56','пос.Середка','д.Вейно',0,110,NULL,NULL,1,NULL),(134,'2022-09-12 11:57:46','2022-09-12 12:57:53','пос.Середка','д.Крюково',0,100,NULL,NULL,1,NULL),(135,'2022-09-12 11:59:25','2022-09-12 11:59:25','д.Окуловка','Волхонское ш.6',0,295,NULL,NULL,1,NULL),(136,'2022-09-12 11:59:51','2022-09-12 11:59:51','д.Полищи','Волхонское ш.6',0,288,NULL,NULL,1,NULL),(137,'2022-09-12 12:02:49','2022-09-12 12:02:49','пос.Серебрянский','Порт Усть-Луга',0,230,NULL,NULL,1,NULL),(138,'2022-09-12 12:03:35','2022-09-12 12:03:35','пос.Серебрянский','пос.Новоселье',0,190,NULL,NULL,1,NULL),(139,'2022-09-12 12:03:47','2022-09-12 12:03:47','пос.Серебрянский','д.Выскатка',0,168,NULL,NULL,1,NULL),(140,'2022-09-12 12:04:05','2022-09-12 12:04:05','пос.Серебрянский','д.Тямша',0,164,NULL,NULL,1,NULL),(141,'2022-09-12 12:04:17','2022-09-12 12:04:17','пос.Серебрянский','д.Замошье',0,145,NULL,NULL,1,NULL),(142,'2022-09-12 12:04:33','2022-09-12 12:05:22','пос.Серебрянский','д.Овсище',0,135,NULL,NULL,1,NULL),(143,'2022-09-12 12:05:44','2022-09-12 12:05:44','пос.Серебрянский','д.Шакицы',0,140,NULL,NULL,1,NULL),(144,'2022-09-12 12:05:57','2022-09-12 12:05:57','пос.Серебрянский','д.Поречье',0,130,NULL,NULL,1,NULL),(145,'2022-09-12 12:06:17','2022-09-12 12:06:17','пос.Серебрянский','д.Оредеж',0,74,NULL,NULL,1,NULL),(146,'2022-09-12 12:06:32','2022-09-12 12:06:32','пос.Серебрянский','д.Луга',0,46,NULL,NULL,1,NULL),(147,'2022-09-12 12:08:04','2022-09-12 12:08:04','пос.Атрубашка','пос.Новоселье',0,112,NULL,NULL,1,NULL),(148,'2022-09-12 12:09:07','2022-09-12 12:09:07','пос.Новоселье','д.Кошкино',0,250,NULL,NULL,1,NULL),(149,'2022-09-12 12:09:31','2022-09-12 12:10:17','пос.Новоселье','р.п.Заплюсье',0,189,NULL,NULL,1,NULL),(150,'2022-09-12 12:09:58','2022-09-12 12:09:58','пос.Новоселье','пос.Оредеж',0,185,NULL,NULL,1,NULL),(151,'2022-09-12 12:10:50','2022-09-12 12:10:50','пос.Новоселье','Порт Усть-Луга',0,140,NULL,NULL,1,NULL),(152,'2022-09-12 12:11:09','2022-09-12 12:11:09','пос.Новоселье','д.Овсище',0,56,NULL,NULL,1,NULL),(153,'2022-09-12 12:11:17','2022-09-12 12:11:17','пос.Новоселье','д.Старополье',0,47,NULL,NULL,1,NULL),(154,'2022-09-12 12:12:19','2022-09-12 12:12:19','д.Зуево','д.Печоры',0,218,NULL,NULL,1,NULL),(155,'2022-09-12 12:12:36','2022-09-12 12:12:36','д.Зуево','Порт Усть-Луга',0,150,NULL,NULL,1,NULL),(156,'2022-09-12 12:13:30','2022-09-12 12:13:30','д.Зуево','д.Малый ЛУЦК',0,90,NULL,NULL,1,NULL),(157,'2022-09-12 12:14:11','2022-09-12 12:14:11','д.Атрубашка','д.Шакицы',0,143,NULL,NULL,1,NULL),(158,'2022-09-12 12:14:35','2022-09-12 12:14:35','д.Атрубашка','д.Никольское',0,312,NULL,NULL,1,NULL),(159,'2022-09-12 12:14:47','2022-09-12 12:14:47','д.Атрубашка','д.Поречье',0,132,NULL,NULL,1,NULL),(160,'2022-09-12 12:14:59','2022-09-12 12:14:59','д.Атрубашка','д.Овсище',0,131,NULL,NULL,1,NULL),(161,'2022-09-12 12:15:22','2022-09-12 12:15:22','д.Атрубашка','Монастырёк',0,125,NULL,NULL,1,NULL),(162,'2022-09-12 12:15:35','2022-09-12 12:15:35','д.Атрубашка','д.Замошье',0,121,NULL,NULL,1,NULL),(163,'2022-09-12 12:15:48','2022-09-12 12:15:48','д.Атрубашка','д.Вейно',0,80,NULL,NULL,1,NULL),(164,'2022-09-12 12:22:52','2022-09-12 12:22:52','д.Красный Маяк','д.Овсище',0,68,NULL,NULL,1,NULL),(165,'2022-09-12 12:23:08','2022-09-12 12:23:08','д.Красный Маяк','пос.Сельхозтехника',0,116,NULL,NULL,1,NULL),(166,'2022-09-12 12:24:53','2022-09-12 12:24:53','д.Красный Маяк','д.Старополье',0,75,NULL,NULL,1,NULL),(167,'2022-09-12 12:25:22','2022-09-12 12:25:22','д.Красный Маяк','д.Кобралово',0,120,NULL,NULL,1,NULL),(168,'2022-09-12 12:26:31','2022-09-12 12:26:31','д.Излучье','д.Любимец',0,30,NULL,NULL,1,NULL),(169,'2022-09-12 12:28:47','2022-09-12 12:28:47','д.Малый ЛУЦК','пос.Сельхозтехника',0,63,NULL,NULL,1,NULL),(170,'2022-09-12 12:29:17','2022-09-12 12:29:17','д.Малый ЛУЦК','Александровская горка (Б.ЛУЦК)',0,10,NULL,NULL,1,NULL),(171,'2022-09-12 12:30:23','2022-09-12 12:30:23','д.Малый ЛУЦК','Кобралово',0,130,NULL,NULL,1,NULL),(172,'2022-09-12 12:30:44','2022-09-12 12:30:44','д.Малый ЛУЦК','д.Белогорка',0,110,NULL,NULL,1,NULL),(173,'2022-09-12 12:31:23','2022-09-12 12:31:23','\"ЛЭП\"','д.Старополье',0,76,NULL,NULL,1,NULL),(174,'2022-09-12 12:31:42','2022-09-12 12:31:42','\"ЛЭП\"','пос.Сельхозтехника',0,114,NULL,NULL,1,NULL),(175,'2022-09-12 12:31:58','2022-09-12 12:31:58','пос.Ляды','Волхонское ш.6',0,255,NULL,NULL,1,NULL),(176,'2022-09-12 12:38:29','2022-09-12 12:38:29','пос.Новоселье','д.Иннолово',0,180,NULL,NULL,1,NULL),(177,'2022-09-12 12:38:48','2022-09-12 12:38:48','пос.Новоселье','д.Ропша',0,165,NULL,NULL,1,NULL),(178,'2022-09-12 12:39:40','2022-09-12 12:39:40','пос.Новоселье','д.Овсище',0,57,NULL,NULL,1,NULL),(179,'2022-09-12 12:40:06','2022-09-12 12:40:06','пос.Новоселье','д.Усть-Луга',0,104,NULL,NULL,1,NULL),(180,'2022-09-12 12:40:33','2022-09-12 12:40:33','пос.Новоселье','д.Оредеж',0,185,NULL,NULL,1,NULL),(181,'2022-09-12 12:41:27','2022-09-12 12:41:27','пос.Новоселье','д.Александровская горка',0,80,NULL,NULL,1,NULL),(182,'2022-09-12 12:42:12','2022-09-12 12:42:12','пос.Новоселье','пос.Кобралово',0,205,NULL,NULL,1,NULL),(183,'2022-09-12 12:44:12','2022-09-12 12:44:12','пос.Новоселье','д.Замошье',0,49,NULL,NULL,1,NULL),(184,'2022-09-12 12:44:32','2022-09-12 12:44:32','пос.Новоселье','д.Выскатка',0,21,NULL,NULL,1,NULL),(185,'2022-09-12 12:44:55','2022-09-12 12:57:49','пос.Новоселье','д.Монастырек',0,49,NULL,NULL,1,NULL),(186,'2022-09-12 12:46:06','2022-09-12 12:46:06','пос.Новоселье','д.Александровская горка',0,80,NULL,NULL,1,NULL),(187,'2022-09-12 12:47:57','2022-09-12 12:47:57','пос.Новоселье','г.Сланцы, ул.Ремонтников 1',0,42,NULL,NULL,1,NULL),(188,'2022-09-12 12:49:20','2022-09-12 12:49:20','пос.Новый','пос.Сельхозтезника',0,57,NULL,NULL,1,NULL),(189,'2022-09-12 12:49:42','2022-09-12 12:49:42','пос.Новый','д.Б.Вруда',0,64,NULL,NULL,1,NULL),(190,'2022-09-12 12:50:12','2022-09-12 12:50:12','пос.Новый','СПб, Мурино (Селиванов)',0,216,NULL,NULL,1,NULL),(191,'2022-09-12 12:52:20','2022-09-12 12:52:20','д.Опочка','Волхонское ш.6',0,403,NULL,NULL,1,NULL),(192,'2022-09-12 12:53:13','2022-09-12 12:53:13','пос.Сельхозтехника','д.Потрехново',0,14,NULL,NULL,1,NULL),(193,'2022-09-12 12:54:01','2022-09-12 12:54:01','г.Сланцы, ул.Ремонтников 1','пос.Новоселье',0,42,NULL,NULL,1,NULL),(194,'2022-09-12 12:54:42','2022-09-12 12:54:42','пос.Сельхозтехника','д.Разбегаево',0,158,NULL,NULL,1,NULL),(195,'2022-09-12 12:54:59','2022-09-12 12:54:59','д.Разбегаево','пос.Сельхозтехника',0,79,NULL,NULL,1,NULL),(196,'2022-09-12 12:59:02','2022-09-12 12:59:02','д.Рудница','пос.Сельхозтехника',0,47,NULL,NULL,1,NULL),(197,'2022-09-12 12:59:33','2022-09-12 12:59:33','пос.Сельхозтехника','д.Рудница',0,47,NULL,NULL,1,NULL),(198,'2022-09-12 13:01:59','2022-09-12 13:01:59','пос.Сельхозтехника','г.Сланцы Завод ПетербургЦемент',0,10,NULL,NULL,1,NULL),(199,'2022-09-12 13:03:03','2022-09-12 13:03:03','пос.Сельхозтехника','д.Столбово',0,51,NULL,NULL,1,NULL),(200,'2022-09-12 13:03:12','2022-09-12 13:03:12','д.Столбово','пос.Сельхозтехника',0,51,NULL,NULL,1,NULL),(201,'2022-09-12 13:03:35','2022-09-12 13:03:35','пос.Сельхозтехника','Сорокино',0,50,NULL,NULL,1,NULL),(202,'2022-09-12 13:03:42','2022-09-12 13:03:42','д.Сорокино','пос.Сельхозтехника',0,50,NULL,NULL,1,NULL),(203,'2022-09-12 13:04:46','2022-09-12 13:04:46','д.Устиново (ПсковОбл)','Пушкинские Горы (ПсковОбл)',0,20,NULL,NULL,1,NULL),(204,'2022-09-12 13:05:19','2022-09-12 13:05:19','д.Устиново (ПсковОбл)','д.Подкрестье (ПсковОбл)',0,23,NULL,NULL,1,NULL),(205,'2022-09-12 13:08:06','2022-09-12 13:08:06','д.Устиново','пос.Сельхозтехника',0,295,NULL,NULL,1,NULL),(206,'2022-09-12 13:08:17','2022-09-12 13:08:17','пос.Сельхозтехника','д.Устиново',0,295,NULL,NULL,1,NULL),(207,'2022-09-12 13:11:07','2022-09-12 13:11:07','пос.Сельхозтехника','д.Александровская горка',0,71,NULL,NULL,1,NULL),(208,'2022-09-12 13:12:00','2022-09-12 13:12:00','пос.Сельхозтехника','д.Замошье',0,42,NULL,NULL,1,NULL),(209,'2022-09-12 13:12:22','2022-09-12 13:12:22','пос.Сельхозтехника','д.Выскатка',0,14,NULL,NULL,1,NULL),(210,'2022-09-12 13:14:20','2022-09-12 13:14:20','пос.Сельхозтехника','г.Выборг (база Технониколь)',0,337,NULL,NULL,1,NULL),(211,'2022-09-12 13:16:04','2022-09-12 13:16:04','пос.Сельхозтехника','д.Корабсельки',0,225,NULL,NULL,1,NULL),(212,'2022-09-12 13:17:35','2022-09-12 13:17:35','пос.Сельхозтехника','д.Кривко',0,285,NULL,NULL,1,NULL),(213,'2022-09-12 13:21:29','2022-09-12 13:21:29','пос.Сельхозтехника','д.Поречье',0,53,NULL,NULL,1,NULL),(214,'2022-09-12 13:21:38','2022-09-12 13:21:38','д.Поречье','пос.Сельхозтехника',0,53,NULL,NULL,1,NULL),(215,'2022-09-12 13:28:22','2022-09-12 13:28:22','д.Сорокино (Волховский р-н)','пос.Сельхозтехника',0,340,NULL,NULL,1,NULL);
/*!40000 ALTER TABLE `route_billings` ENABLE KEYS */;
UNLOCK TABLES;

