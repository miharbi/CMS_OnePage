# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.10.10 (MySQL 5.6.19-1~exp1ubuntu2)
# Database: infinity
# Generation Time: 2015-10-01 03:28:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('course','review','us','owners','mision','new','blog','slider','staff','event') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;

INSERT INTO `contents` (`id`, `title`, `content`, `image`, `type`, `created_at`, `updated_at`)
VALUES
	(1,'','','images/slider/slide2.png','slider','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'','','images/slider/slide3.png','slider','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'','','images/slider/slide4.png','slider','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'','','images/slider/slide5.png','slider','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,'','','images/slider/slide6.png','slider','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,'Visión y Misión','<p><strong>Misión:</strong> Somos una academia de baile que tiene como objetivo promover la actividad física y la vida sana, a través de \n					diferentes ritmos.La metodología de las clases está basada en el desarrollo básico de los movimientos, permitiendo que cualquier \n					persona aprenda a disfrutar el baile de manera rápida y entretenida.\n				</p>\n<p><strong>Visión:</strong> Consolidarnos como una de las mejores academias de baile, de manera transversal, que promoverá la adquisición de hábitos \n	saludables a través de la calidad, excelencia y compromiso en el servicio de enseñanza dirigido a todos nuestros usuarios.\n</p>','','mision','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'Karin diaz','Gerente de operaciones y Community Manager','images/us/b1.jpg','owners','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,'Carolina Ovalle','Gerente Comercial','images/us/b2.jpg','owners','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,'Fernanda Landaeta','Directora Ejecutiva','images/us/b3.jpg','owners','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(10,'Nosotras','Somos tres amigas. Carolina Ing. en Adm. de empresas, joven, libre y alocada. Fernanda, Comunicadora Audiovisual \n					y productora por esencia. Karin, Comunicadora Audiovisual y Directora de TV. Nos conocemos hace más de 10 años y hemos logrado cultivar y mantener una gran amistad. Hoy hemos dado un gran paso, gracias a la confianza que existe entre nosotras y aprovechando las capacidades de cada una, para unirnos como socias y emprender un nuevo desafío… nuestro querido y gran Infinity Sport.','','us','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(11,'Zumba','Es una disciplina fitness enfocada por una parte en mantener un cuerpo saludable y por otra en desarrollar, fortalecer y dar flexibilidad al cuerpo mediante movimientos de baile combinados con una serie de rutinas aeróbicas. La zumba utiliza dentro de sus rutinas los principales ritmos latinoamericanos, como lo son la salsa, el merengue, la cumbia, el reggaetón y la samba. En cada sesión de Zumba, se pueden llegar a quemar 1500 calorías.','images/courses/n1.jpg','course','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(12,'Zumba Kids','Ideal para los seguidores de Zumba® más jóvenes. Los niños de entre 7 y 11 años tienen la oportunidad de mantenerse activos y bailar al ritmo de su música favorita.\nLas clases de Zumba® Kids ofrecen rutinas pensadas para niños sobre la base de las coreografías originales de Zumba®. Los pasos se aprenden poco a poco, y agregamos juegos, actividades y elementos de exploración cultural a la estructura de la clase.','images/courses/n3.jpg','course','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(13,'Aerocombat','Es una clase de una hora con intensidad al máximo y una variada combinación de golpes de manos y patadas para transpirar y llevar tu energía al 100%.\nFortalece tus músculos y aumenta tu capacidad aeróbica combinando los movimientos de artes marciales. Trabajarás todo tu cuerpo realizando movimientos de brazos, piernas y desplazamientos en sesiones muy divertidas y con un alto consumo calórico.','images/courses/n2.jpg','course','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(14,'Experiencia en Infinity','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','images/reviews/n1.jpg','review','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(15,'Experiencia en Infinity','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','images/reviews/n2.jpg','review','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(16,'Experiencia en Infinity','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','images/reviews/n3.jpg','review','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(17,'Tiare Murcia','Certificación Zumba B1, año 2012 con 17 años.\nCertificación Pro skills año 2013, en Brasil junto a Beto Pérez.\nCertificación Zumba Kids, año 2014.\nConvención Zumba Orlando, año 2015.\nStaff Zumba Fest (10.000 asistentes) y staff Zensation (1.500 asistentes).\n\"Soy muy alegre y me gusta transmitirle esa alegría a la gente. Me gusta que la gente lo pase bien mientras hace su clase, así que me preocupo de entregar la mayor energía a mis alumnas\".','images/staff/t1.jpg','staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(18,'Oldeni Arnaldi','Titulada de Preparador Físico, año 2012.\nCertificación Zumba B1 y B2.\n\"Me encanta el deporte y que en mis clases la gente lo disfrute al máximo. Trato de entregar la mejor energía y pongo énfasis en el correcto desarrollo de los movimientos\".','images/staff/t2.jpg','staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(19,'Nestor Mateluna','Titulado en Educación Física, Licenciado en Educación.\nInstructor Zumba Fitness (ZIN).\nFutbolista profesional en el año 2012. \nBailarín de Folcklore. \n“Me gusta trabajar la capacidad aeróbica, la tonificación de los músculos y también la coordinación, además de entretener con las distintas coreografías”.','images/staff/t3.jpg','staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(20,'Alexis Barrera','Monitor de Artes Marciales, Cinturón Negro 1º Dan, especialidad Karate – Do 2005\nTitulado de Preparador Físico, año​ 2006.\n​Instructor de Karate - Do ASKA Chile, año 2006.\nTitulado de Profesor de Pedagogía en Educación Física, año 2011.\n​Certificación ​Zumba B1.​\n​\"Soy exigente, y me gusta realizar mis clases con mucha energía. Me gusta preocuparme de que la gente lo pase bien, pero también de que realicen correctamente los movimientos\".','images/staff/t4.jpg','staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(21,'Ceci Caman','Titulada de Preparador Físico.\nCertificación Zumba B1, año 2012.\nCertificación Zumba Kids, año 2015.\nCertificación Zumba Pro Skills, año 2015.\n“Me gusta que la gente lo pase bien y a la vez regalonee su cuerpo y alma haciendo ejercicio sin darse cuenta”.','images/staff/t4.jpg','staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(22,'','','','','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2015_09_18_202414_create_content_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'admin','admin@admin.com','$2y$10$i/XZZvM6IFv3/lMb1vXMB.uGEDB9/6fKfRXrFNbJDg8E4c3Acn.X6',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
