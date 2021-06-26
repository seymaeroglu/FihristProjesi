CREATE DATABASE `fihrist` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

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

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `people` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*
-- Query: SELECT * FROM fihrist.people
LIMIT 0, 1000

-- Date: 2021-06-26 17:09
*/
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (2,'Dafne Ria','2222','d@d.com','İstanbul',NULL,NULL,'2021-06-25 00:24:09','public/assets/cyaT4k4YoT9urcZyQZwvqzY1x44aJa7cwXDKP7wU.jpg',NULL);
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (3,'Annabella Clara','33335','b@b.com','İzmirr',NULL,NULL,'2021-06-25 00:24:18','public/assets/8aWWbTUU5xO8CdtsAWrF90d3E0u8NFd4hnY5xYmW.png',NULL);
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (4,'Bambi Snow','4444','c@c.com','Ordu',NULL,NULL,'2021-06-25 00:24:30','public/assets/pi0VtTYHGdlabzBOy4SjVNYHZj81CiXNBRSQ5v6u.jpg',NULL);
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (5,'Marina Del Rey','5555','m@m.com','Los Angeles',NULL,NULL,'2021-06-25 00:24:42','public/assets/R2VbGwhIkQb5LgXqAFykZcRop2gaCZLGbFH8ZCD5.png',NULL);
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (6,'Santa Monica','6666','s@s.com','California',NULL,NULL,'2021-06-25 00:25:00','public/assets/ikvIqMyu6EyrEHf9lqvqIxMoZMPop5tqsWBwhGRk.png',NULL);
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (25,'Daisy Sunshine','11111','afdsaf@afjgoe','dfwg',NULL,'2021-06-23 23:05:29','2021-06-25 00:57:46','public/assets/tXufbdAJO6ubrW4TdyYP7GAljf3Xwsj9Own1R6Nd.jpg','222-15-02');
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (40,'Scarlett O\'Hara','6651','sca@sca','efwg',NULL,'2021-06-25 00:36:12','2021-06-25 00:54:07','public/assets/iPScQrIjGn5kGTWfucUizdT2sr6MS3ezr6eJEDvP.jpg','123-15-15');
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (41,'Holly Golightly','1661','klml@jgoer','rgwg',NULL,'2021-06-25 00:37:07','2021-06-25 00:57:31','public/assets/5483hOhZSKBOGaYATeoH74JWj5flrFWwTE8VETFg.jpg','232-44-55');
INSERT INTO `fihrist.people` (`id`,`name`,`regno`,`email`,`address`,`remember_token`,`created_at`,`updated_at`,`photo`,`phone`) VALUES (45,'Marina Del Bay','92828','xxx@yahoo.com','sfewg',NULL,'2021-06-26 13:53:50','2021-06-26 13:56:30','public/assets/ezSc4ULBKStsV8weHKIro7ElMrYUg8GBCO8eDKqA.jpg','152-59-25');


