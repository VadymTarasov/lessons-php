-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `city` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'Киев'),(2,'Харьков'),(3,'Днепропетровск'),(4,'Донецк'),(5,'Одесса'),(6,'Львов'),(7,'Высокий'),(8,'Алчевск'),(9,'Ахтырка'),(10,'Антрацит'),(11,'Балаклея'),(12,'Бобрка'),(13,'Барановка'),(14,'Верховцево'),(15,'Вижница'),(16,'Гайсин'),(17,'Глиняны'),(18,'Дебальцево'),(19,'Енакиево'),(20,'Житомир'),(21,'Запорожье'),(22,'Зборов'),(23,'Золотоноша'),(24,'Изюм'),(25,'Ирмино'),(26,'Каменское'),(27,'Каховка'),(28,'Кицмань'),(29,'Константиновка'),(30,'Костополь'),(31,'Красный Луч'),(32,'Лозовая'),(33,'Люботин'),(34,'Мерефа'),(35,'Мостиска'),(36,'Немиров'),(37,'Новопсков'),(38,'Обухов'),(39,'Острог'),(40,'Пирятин'),(41,'Попасная'),(42,'Ровно'),(43,'Рубежное'),(44,'Сватово'),(45,'Скадовск'),(46,'Терновка'),(47,'Узин'),(48,'Угнев'),(49,'Фастов'),(50,'Хмельник'),(51,'Христиновка'),(52,'Червоноград'),(53,'Черновцы'),(54,'Шахтёрск'),(55,'Шпола'),(56,'Энергодар'),(57,'Южное'),(58,'Южноукраинск'),(59,'Яготин'),(60,'Ямполь'),(61,'Алушта'),(62,'Алупка');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-29 20:22:29
