-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: us-cdbr-iron-east-01.cleardb.net    Database: heroku_7fe484b29314a31
-- ------------------------------------------------------
-- Server version	5.5.56-log

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `orderNum` mediumint(9) DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `comment` text COLLATE utf8mb4_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Connor','Robertson','Amelia',5,'055 9360 9187','Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla.'),(2,'Sybill','Weber','Bellevue',9,'0800 610 7745','sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero'),(3,'Deacon','Hayden','Timaru',2,'055 9281 3859','Quisque ornare tortor at risus. Nunc ac sem ut dolor'),(4,'Cameron','Kline','Nizip',3,'07049 823341','dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel,'),(5,'Astra','Baird','Baricella',9,'(01578) 061714','Pellentesque habitant morbi tristique senectus et netus et malesuada fames'),(6,'Nichole','Madden','Emden',1,'0916 062 6992','In ornare sagittis felis. Donec tempor, est ac mattis semper,'),(7,'Grant','Bernard','St. Clears',10,'(01139) 35792','non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit'),(8,'Cassandra','Richards','Lang',2,'(016977) 6009','placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante,'),(9,'Rafael','Brewer','Gonda',4,'0500 901949','eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla'),(10,'Lynn','Hooper','Quinta Normal',2,'07254 114207','risus. In mi pede, nonummy ut, molestie in, tempus eu,'),(11,'Selma','White','Sundrie',6,'(01611) 89292','eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed'),(12,'Shelley','Donovan','Fairbanks',1,'(014041) 97619','Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas'),(13,'Stuart','Tyler','Tongeren',6,'0500 585055','elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum'),(14,'Branden','Benjamin','Afsnee',3,'(0118) 530 6104','Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a'),(15,'Flynn','Mcguire','Traralgon',5,'0800 1111','nisl arcu iaculis enim, sit amet ornare lectus justo eu'),(16,'Ramona','Maynard','Acquafondata',3,'055 1830 2973','Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc'),(17,'Miranda','Rollins','Paupisi',4,'070 3241 4547','euismod est arcu ac orci. Ut semper pretium neque. Morbi'),(18,'Addison','Rasmussen','CŽroux-Mousty',8,'0800 1111','Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu,'),(19,'Ginger','Spears','Chiniot',7,'070 5608 4839','magna a neque. Nullam ut nisi a odio semper cursus.'),(20,'Sydney','Dudley','Estación Central',5,'0800 210286','Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum'),(21,'Isadora','Kirkland','Erie',6,'056 1833 7659','nisi. Cum sociis natoque penatibus et magnis dis parturient montes,'),(22,'Harding','Fischer','Essex',4,'0800 109 3533','porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor'),(23,'Jarrod','Edwards','Trani',3,'0500 765062','a feugiat tellus lorem eu metus. In lorem. Donec elementum,'),(24,'Blythe','Norman','Marcq-en-Baroeul',10,'(01826) 555308','sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus'),(25,'Alden','Benson','Ruthin',2,'055 0618 6601','Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec'),(26,'Candice','Contreras','Bhimavaram',10,'070 5360 8008','eget laoreet posuere, enim nisl elementum purus, accumsan interdum libero'),(27,'Paki','Marks','Sorbo Serpico',2,'0800 162 6888','Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci,'),(28,'Darrel','Vinson','Mulchén',10,'0822 925 8614','Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula.'),(29,'Baker','Green','Vejano',6,'055 8322 1612','Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec'),(30,'Laurel','Donaldson','Latour',5,'056 5218 9088','Pellentesque habitant morbi tristique senectus et netus et malesuada fames'),(31,'Darryl','Black','Governador Valadares',8,'0845 46 43','sit amet ornare lectus justo eu arcu. Morbi sit amet'),(32,'Gwendolyn','Watts','Aisemont',7,'(023) 0594 1938','nisi. Cum sociis natoque penatibus et magnis dis parturient montes,'),(33,'Kylynn','Meadows','Guadalajara',7,'(025) 3889 8318','amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat'),(34,'Reed','Russell','Roosbeek',8,'0845 46 41','nunc. Quisque ornare tortor at risus. Nunc ac sem ut'),(35,'David','Cooke','Santa Vittoria in Matenano',1,'(0119) 686 3808','est arcu ac orci. Ut semper pretium neque. Morbi quis'),(36,'Igor','Owens','Grimaldi',3,'0800 948 4663','non massa non ante bibendum ullamcorper. Duis cursus, diam at'),(37,'Abdul','Bentley','Feira de Santana',5,'(020) 9174 3278','cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut,'),(38,'Dexter','Stanley','Billings',9,'0845 46 46','eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis,'),(39,'Leah','Blankenship','Auburn',6,'0800 525994','ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum'),(40,'Molly','Sutton','Lacombe County',8,'(0119) 506 4907','eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed'),(41,'Blythe','Gray','Borgomaro',10,'0845 46 48','eleifend, nunc risus varius orci, in consequat enim diam vel'),(42,'Silas','Dalton','Bathurst',7,'0500 345507','orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu,'),(43,'Leroy','Fulton','Chetwynd',5,'0800 316 2227','accumsan neque et nunc. Quisque ornare tortor at risus. Nunc'),(44,'Maia','Peters','Legal',7,'(0112) 099 0441','vitae aliquam eros turpis non enim. Mauris quis turpis vitae'),(45,'Lilah','Spencer','Helchteren',2,'0800 362 3318','est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia'),(46,'Samantha','Callahan','Colorno',10,'0845 46 45','lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam.'),(47,'Felix','Walker','Hattersheim am Main',8,'(016977) 8744','auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus'),(48,'Asher','Nolan','Oud-Turnhout',3,'0800 901 6594','erat vitae risus. Duis a mi fringilla mi lacinia mattis.'),(49,'Craig','Lara','Friedrichshafen',4,'076 0185 0099','lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus'),(50,'Fuller','Davis','Lutsel K\'e',6,'0500 871137','orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras'),(51,'Alexis','Franklin','Fogo',10,'070 7609 3123','Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci,'),(52,'Deborah','Pittman','Montgomery',2,'0500 385284','nibh. Donec est mauris, rhoncus id, mollis nec, cursus a,'),(53,'Mira','Spears','Gaziantep',6,'07345 351677','sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris'),(54,'Jena','Wise','Rothes',3,'(0118) 735 3699','congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit'),(55,'Lenore','Calhoun','Meldert',9,'(013113) 31569','hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer,'),(56,'Aubrey','Morris','Sparwood',4,'0327 707 1979','Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum'),(57,'Nevada','Glover','Long Eaton',8,'0800 290 0815','ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et,'),(58,'Fiona','Kennedy','Forio',8,'07624 573924','vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus'),(59,'Kermit','Joseph','Aalen',5,'(0191) 022 7620','semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices'),(60,'Kirsten','Leach','Jackson',7,'(0191) 468 1641','Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus,'),(61,'Mari','Sweet','Lichfield',3,'(020) 0258 5662','nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia'),(62,'Thor','Hendrix','Grangemouth',3,'(01218) 83519','ultricies ornare, elit elit fermentum risus, at fringilla purus mauris'),(63,'Madaline','Fernandez','Freux',6,'076 1868 6905','litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut'),(64,'Rudyard','Mejia','Saint-Oyen',9,'(014814) 03198','nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet.'),(65,'Desirae','Fitzgerald','Castri di Lecce',1,'070 7288 3952','Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque'),(66,'Phillip','Parsons','Monguelfo-Tesido/Welsberg-Taisten',9,'(0110) 204 4830','sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing'),(67,'Robert','Mann','Wellingborough',7,'(01933) 744810','ipsum primis in faucibus orci luctus et ultrices posuere cubilia'),(68,'Dawn','Terrell','Devon',9,'076 5518 2805','ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula.'),(69,'Vincent','Pratt','San Pedro',2,'0500 455967','sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices'),(70,'Emmanuel','Mcdowell','Southend',8,'0800 1111','neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc'),(71,'Autumn','Callahan','Hartlepool',3,'0500 160581','Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est.'),(72,'Trevor','Burke','Jalna',9,'0845 46 45','lectus ante dictum mi, ac mattis velit justo nec ante.'),(73,'Naomi','Shields','Perugia',9,'0800 070934','est, congue a, aliquet vel, vulputate eu, odio. Phasellus at'),(74,'Constance','Harrison','Vlimmeren',9,'(016977) 1796','feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare,'),(75,'Charde','Booker','Dilsen-Stokkem',4,'0800 1111','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices'),(76,'Nolan','Mueller','Malbaie',4,'070 3945 3146','dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales'),(77,'Zeph','Conway','Campochiaro',8,'07624 192509','odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a,'),(78,'Gemma','Little','Rockville',8,'076 1568 7065','Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas'),(79,'Colby','Valentine','Morvi',1,'0300 180 6752','nulla magna, malesuada vel, convallis in, cursus et, eros. Proin'),(80,'Jamalia','Kaufman','St. Pölten',1,'(0117) 616 6802','In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede'),(81,'Orson','Fitzpatrick','Berg',10,'0308 170 2135','facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc'),(82,'Avye','Howe','Tarsus',10,'056 7505 7941','penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec'),(83,'Basil','Stanton','Kitimat',10,'056 3508 1424','diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat.'),(84,'Castor','Guerrero','Vierzon',3,'0845 46 46','tristique senectus et netus et malesuada fames ac turpis egestas.'),(85,'Philip','Lamb','Wilmington',10,'(018715) 31158','a neque. Nullam ut nisi a odio semper cursus. Integer'),(86,'Scott','Pitts','Marbella',3,'(01084) 71450','enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum'),(87,'Gannon','Bell','Picture Butte',3,'(01166) 555411','diam. Pellentesque habitant morbi tristique senectus et netus et malesuada'),(88,'Charde','Hyde','Les Bulles',10,'0347 866 3768','ultricies ornare, elit elit fermentum risus, at fringilla purus mauris'),(89,'Cruz','Hull','Oklahoma City',9,'0958 525 9046','cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis'),(90,'August','Estrada','Gresham',4,'0330 149 2359','felis. Donec tempor, est ac mattis semper, dui lectus rutrum'),(91,'Ross','Mclaughlin','Jamshedpur',10,'0348 994 7343','viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum'),(92,'Jada','Duran','Trevignano Romano',9,'0845 46 40','nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis'),(93,'Lilah','Joyner','Pontevedra',1,'0500 158925','odio. Phasellus at augue id ante dictum cursus. Nunc mauris'),(94,'Bo','Brady','Söderhamn',10,'(01525) 88108','non enim. Mauris quis turpis vitae purus gravida sagittis. Duis'),(95,'Zachary','Bowman','Bomal',10,'0948 248 4130','tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante'),(96,'Lyle','Beard','Bridgwater',4,'055 8342 8344','in molestie tortor nibh sit amet orci. Ut sagittis lobortis'),(97,'Kimberly','Harrell','Cartagena',9,'07624 919153','ornare. Fusce mollis. Duis sit amet diam eu dolor egestas'),(98,'Demetrius','Hodges','Gaasbeek',10,'056 1647 2546','cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam'),(99,'Eagan','Britt','Leke',1,'(016977) 7593','vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean'),(161,'','','',0,'',''),(171,'','','',0,'',''),(181,'test','test','',0,'',''),(191,'test','test','',0,'',''),(201,'test','test','',0,'','');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-18 22:52:18