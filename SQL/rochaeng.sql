-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: roseanne
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `discography`
--

DROP TABLE IF EXISTS `discography`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discography` (
  `MusicID` int NOT NULL AUTO_INCREMENT,
  `SongName` varchar(500) NOT NULL,
  `Artist` varchar(500) NOT NULL,
  `Album` varchar(500) NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Duration` varchar(500) NOT NULL,
  `Genre` varchar(500) NOT NULL,
  `Language` varchar(500) NOT NULL,
  PRIMARY KEY (`MusicID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discography`
--

LOCK TABLES `discography` WRITE;
/*!40000 ALTER TABLE `discography` DISABLE KEYS */;
INSERT INTO `discography` VALUES (1,'How You Like That','BLACKPINK','THE ALBUM','2020-10-02','3:03','K-Pop','Korean, English'),(2,'Ice Cream','BLACKPINK, Selena Gomez','THE ALBUM','2020-10-02','2:58','K-Pop','English, Korean'),(3,'Pretty Savage','BLACKPINK','THE ALBUM','2020-10-02','3:19','K-Pop','Korean, English'),(4,'Lovesick Girls','BLACKPINK','THE ALBUM','2020-10-02','3:13','K-Pop','Korean, English'),(5,'Bet You Wanna','BLACKPINK, Cardi B','THE ALBUM','2020-10-02','2:39','K-Pop','English'),(6,'Crazy Over You','BLACKPINK','THE ALBUM','2020-10-02','2:44','K-Pop','English'),(7,'Love To Hate Me','BLACKPINK','THE ALBUM','2020-10-02','2:50','K-Pop','English'),(8,'You Never Know','BLACKPINK','THE ALBUM','2020-10-02','3:49','K-Pop','Korean, English'),(9,'Kill this Love','BLACKPINK','KILL THIS LOVE','2019-04-05','3:09','K-Pop','Korean, English'),(10,'Don\'t Know What To Do','BLACKPINK','KILL THIS LOVE','2019-04-05','3:21','K-Pop','Korean, English'),(11,'Kick It','BLACKPINK','KILL THIS LOVE','2019-04-05','3:11','K-Pop','Korean, English'),(12,'Hope Not','BLACKPINK','KILL THIS LOVE','2019-04-05','3:11','K-Pop','Korean, English'),(13,'DDU-DU-DDU-DU','BLACKPINK','SQUARE UP','2018-06-15','3:29','K-Pop','Korean, English'),(14,'Forever Young','BLACKPINK','SQUARE UP','2018-06-15','3:57','K-Pop','Korean, English'),(15,'Really','BLACKPINK','SQUARE UP','2018-06-15','3:18','K-Pop','Korean, English'),(16,'See You Later','BLACKPINK','SQUARE UP','2018-06-15','3:19','K-Pop','Korean, English'),(17,'So Hot (THEBLACKLABEL Remix)','BLACKPINK','So Hot (THEBLACKLABEL Remix)','2017-12-25','2:24','K-Pop','Korean, English'),(18,'As If It\'s Your Last','BLACKPINK','As If It\'s Your Last','2017-06-22','3:33','K-Pop','Korean, English'),(19,'Boombayah','BLACKPINK','SQUARE ONE','2016-08-08','4:01','K-Pop','Korean, English'),(20,'Playing With Fire','SQUARE TWO','THE ALBUM','2016-11-01','3:17','K-Pop','Korean, English'),(21,'Whistle','BLACKPINK','SQUARE ONE','2016-08-08','3:32','K-Pop','Korean, English'),(22,'Stay','BLACKPINK','SQUARE TWO','2016-11-01','3:50','K-Pop','Korean, English'),(23,'Kiss and Make Up','Dua Lipa, BLACKPINK','Dua Lipa (Complete Edition)','2018-10-19','3:09','K-Pop','English, Korean'),(24,'Sour Candy','Lady Gaga, BLACKPINK','Chromatica','2020-05-29','2:38','K-Pop','English, Korean'),(25,'On The Ground','ROSÉ','-R-','2021-03-12','2:48','Pop','English'),(26,'Gone','ROSÉ','-R-','2021-03-12','3:27','Pop','English');
/*!40000 ALTER TABLE `discography` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-04  3:06:49
