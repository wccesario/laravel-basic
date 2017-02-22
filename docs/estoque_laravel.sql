# Host: localhost  (Version 5.6.26)
# Date: 2017-02-22 00:24:27
# Generator: MySQL-Front 5.3  (Build 5.21)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "back_produtos"
#

DROP TABLE IF EXISTS `back_produtos`;
CREATE TABLE `back_produtos` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `valor` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "back_produtos"
#

/*!40000 ALTER TABLE `back_produtos` DISABLE KEYS */;
INSERT INTO `back_produtos` VALUES (1,'Geladeira','5900.00','Side by Side com gelo na porta',2),(2,'Fog√£o','950.00','Painel autom√°tico e forno el√©trico',5),(3,'Microondas','1520.00','Manda SMS quando termina de esquentar',1);
/*!40000 ALTER TABLE `back_produtos` ENABLE KEYS */;

#
# Structure for table "categorias"
#

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "categorias"
#

INSERT INTO `categorias` VALUES (1,'ELETRONICO','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'ELETRODOMESTICO','0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_12_10_020424_adiciona_tamanho_no_produto',2),('2017_01_02_200319_create_categorias_table',3),('2017_01_02_201936_adiciona_relacionamento_produto_categoria',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "password_resets"
#

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

#
# Structure for table "produtos"
#

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `tamanho` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "produtos"
#

/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Geladeira','5900.00','Side by Side com gelo na porta',2,'200x400',1),(2,'Fog„o','950.00','Painel autom·tico e forno elÈtrico',5,'',1),(3,'Microondas','1520.00','Manda SMS quando termina de esquentar',10,'',1),(46,'Zenfone 3','900','Smartphone',2,'',1),(47,'Playstation 4 Pro','1500','4k Gaming',2,'',1),(48,'Nintendo Switch','1500','A New Way To Play',12,'',1),(49,'Xbox Scorpio','2000','4k Gaming Microsoft',2,'',1),(51,'Mac Mini','1200\'','Belissimo Mac',2,'',1);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "users"
#

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Wesley','wcostacesario@gmail.com','$2y$10$yHKdYAtknNUJA67hurqYweMIOtUEy1Bsj70YtTtJ7w1rgK.PhcNxm','VN6wDf2Do21bIfl1nuSe3mGSD4sVbqEMxxpGCz7Tqy3ZLsz8vxI5RDQcWd67','2016-12-19 19:43:21','2017-01-02 19:49:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
