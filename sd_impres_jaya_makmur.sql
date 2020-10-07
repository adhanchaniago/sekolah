/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - sd_impres_jaya_makur
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sd_impres_jaya_makur` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sd_impres_jaya_makur`;

/*Table structure for table `web_article` */

DROP TABLE IF EXISTS `web_article`;

CREATE TABLE `web_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL,
  `article_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `overview` text,
  `description` text,
  `keyword` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `language` varchar(2) NOT NULL DEFAULT 'ID',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `publish_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `unpublish_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `view` int(11) NOT NULL DEFAULT '0',
  `visibility` int(11) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `web_article` */

insert  into `web_article`(`id`,`admin_id`,`article_category`,`name`,`slug`,`overview`,`description`,`keyword`,`tag`,`image`,`language`,`created_at`,`updated_at`,`publish_at`,`unpublish_at`,`view`,`visibility`,`status`) values 
(1,0,2,'berita 1','berita_1',NULL,'<p style=\"text-align:center\"><!--?php echo $ber[\'description\'] ?--><img alt=\"\" src=\"http://localhost/schl1/source/LINK/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png\" style=\"height:204px; width:200px\" /></p>\r\n','','','http://localhost/schl1/source/PENGATURAN/home.jpg','ID','0000-00-00 00:00:00','2020-06-18 12:52:14','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1,1),
(2,0,1,'informasi 1','informasi_1',NULL,'<p>description 2</p>\r\n','','','http://localhost/source/GURU/user.png','ID','0000-00-00 00:00:00','2020-06-17 11:27:05','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1,1),
(3,0,2,'berita 2','berita_2',NULL,'<p><img alt=\"\" src=\"http://localhost/schl1/source/LINK/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png\" style=\"height:137px; width:136px\" xss=\"removed\" /></p>\r\n\r\n<p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>\r\n\r\n<p>Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</p>\r\n\r\n<p>Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</p>\r\n','','','http://localhost/schl1/source/SLIDE/home-banner.jpg','ID','2020-06-17 11:04:54','2020-06-18 12:19:51','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1,1),
(4,0,1,'Informasi 2','Informasi_2',NULL,'<p>description 1</p>\r\n','','','http://localhost/source/GURU/user.png','ID','2020-06-17 11:08:37','2020-06-17 11:09:37','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1,1);

/*Table structure for table `web_article_category` */

DROP TABLE IF EXISTS `web_article_category`;

CREATE TABLE `web_article_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `web_article_category` */

insert  into `web_article_category`(`id`,`name`,`slug`,`status`) values 
(1,'Informasi','informasi',1),
(2,'Berita','berita',1),
(3,'Berita Terkini','Berita_Terkini',1);

/*Table structure for table `web_banner` */

DROP TABLE IF EXISTS `web_banner`;

CREATE TABLE `web_banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL,
  `banner_category_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `description` text,
  `url` varchar(255) NOT NULL,
  `target` int(1) NOT NULL DEFAULT '0',
  `mode` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `language` varchar(2) NOT NULL DEFAULT 'ID',
  `view_quota` int(11) DEFAULT NULL,
  `view_usage` int(11) DEFAULT NULL,
  `click_quota` int(11) DEFAULT NULL,
  `click_usage` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `publish_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `unpublish_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sort` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`),
  KEY `banner_category_id` (`banner_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `web_banner` */

insert  into `web_banner`(`id`,`admin_id`,`banner_category_id`,`name`,`description`,`url`,`target`,`mode`,`image`,`language`,`view_quota`,`view_usage`,`click_quota`,`click_usage`,`created_at`,`updated_at`,`publish_at`,`unpublish_at`,`sort`,`status`) values 
(1,0,2,'asda','<p>Description</p>\r\n','',0,1,'http://localhost/schl1/source/SISWA/applicationsscience_103774.png','ID',NULL,NULL,NULL,NULL,'2020-06-15 12:20:11','2020-06-19 09:39:58','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1),
(2,0,2,'nama','<p>Description</p>\r\n','url',0,1,'http://localhost/schl1/source/PENGATURAN/home.jpg','ID',NULL,NULL,NULL,NULL,'2020-06-15 12:22:22','2020-06-19 09:44:25','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1),
(3,0,2,'zzz','','zzzz',0,1,'http://localhost/schl1/source/PENGATURAN/home.jpg','ID',NULL,NULL,NULL,NULL,'2020-06-19 03:18:59','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1),
(4,0,2,'asda','','',0,1,'http://localhost/schl1/source/PENGATURAN/home.jpg','ID',NULL,NULL,NULL,NULL,'2020-06-19 09:43:15','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1),
(5,0,2,'asda','','',0,1,'http://localhost/schl1/source/PENGATURAN/home.jpg','ID',NULL,NULL,NULL,NULL,'2020-06-19 09:43:27','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,1);

/*Table structure for table `web_banner_category` */

DROP TABLE IF EXISTS `web_banner_category`;

CREATE TABLE `web_banner_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `thum` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `web_banner_category` */

insert  into `web_banner_category`(`id`,`thum`,`name`,`slug`,`status`) values 
(2,'http://localhost/schl1/source/GURU/user.png','Album 1','album_1',1),
(3,'http://localhost/schl1/source/SISWA/applicationsscience_103774.png','Album 2','album_2',1),
(4,'http://localhost/schl1/source/GURU/user.png','Album 3','album_3',1);

/*Table structure for table `web_direktori_alumni` */

DROP TABLE IF EXISTS `web_direktori_alumni`;

CREATE TABLE `web_direktori_alumni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `foto` text,
  `tahun_lulus` varchar(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `web_direktori_alumni` */

insert  into `web_direktori_alumni`(`id`,`nama`,`tempat`,`tanggal_lahir`,`foto`,`tahun_lulus`,`created_at`,`updated_at`,`status`) values 
(1,'Namaa','Sukabumia','2020-06-24','http://localhost/schl1/source/GURU/user.png','2000a','2020-06-15 11:58:34','2020-06-18 06:26:46','1');

/*Table structure for table `web_direktori_guru_staf` */

DROP TABLE IF EXISTS `web_direktori_guru_staf`;

CREATE TABLE `web_direktori_guru_staf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip/nis` int(20) DEFAULT NULL,
  `studi` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `foto` text,
  `kategori` enum('1','2') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `web_direktori_guru_staf` */

insert  into `web_direktori_guru_staf`(`id`,`nama`,`nip/nis`,`studi`,`tempat`,`tanggal_lahir`,`foto`,`kategori`,`created_at`,`updated_at`,`status`) values 
(2,'Feri Pebriansah Nugraha',123456,'1','Sukabumi','2020-06-17','http://localhost/schl1/source/GURU/user.png','1','2020-06-14 10:35:46','2020-06-23 05:58:14','1'),
(3,'Bom-Bom',123456,'3','Sukabumi','1992-02-14','http://localhost/schl1/source/GURU/user.png','2','2020-06-14 10:39:51','2020-06-23 06:01:54','1'),
(4,'Feri Pebriansah Nugraha',123456,'2','Sukabumi','2020-06-14','http://localhost/schl1/source/GURU/user.png','1','2020-06-14 10:46:51','2020-06-23 05:59:39','1');

/*Table structure for table `web_direktori_siswa` */

DROP TABLE IF EXISTS `web_direktori_siswa`;

CREATE TABLE `web_direktori_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nis` int(20) DEFAULT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `foto` text,
  `kelas` varchar(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `web_direktori_siswa` */

insert  into `web_direktori_siswa`(`id`,`nama`,`nis`,`tempat`,`tanggal_lahir`,`foto`,`kelas`,`created_at`,`updated_at`,`status`) values 
(1,'NAmaaaaa',123123,'Tempat','2020-06-16','http://localhost/schl1/source/GURU/user.png','3','2020-06-15 11:46:15','2020-06-24 04:16:26','1');

/*Table structure for table `web_kontak` */

DROP TABLE IF EXISTS `web_kontak`;

CREATE TABLE `web_kontak` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

/*Data for the table `web_kontak` */

insert  into `web_kontak`(`id`,`name`,`email`,`reason`,`phone`,`address`,`description`,`created_at`,`updated_at`,`status`) values 
(55,'nama','feripebriansah@gmail.com','','',NULL,'description','0000-00-00 00:00:00','0000-00-00 00:00:00',1),
(57,'arin','destroyerfery@gmail.com','','',NULL,'aasd','2020-06-19 02:45:29','0000-00-00 00:00:00',0);

/*Table structure for table `web_link` */

DROP TABLE IF EXISTS `web_link`;

CREATE TABLE `web_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` text,
  `url` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `web_link` */

insert  into `web_link`(`id`,`name`,`image`,`url`,`created_at`,`updated_at`,`status`) values 
(1,'Kementrian Pendidikan dan Kebudayaan','http://localhost/schl1/source/LINK/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png','url','2020-06-18 04:05:48','2020-06-18 04:06:53',1),
(2,'Kementrian Pendidikan dan Kebudayaan','http://localhost/schl1/source/LINK/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png','url','2020-06-18 04:06:41',NULL,1);

/*Table structure for table `web_page` */

DROP TABLE IF EXISTS `web_page`;

CREATE TABLE `web_page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL,
  `menu_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `overview` text,
  `description` text,
  `keyword` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `language` varchar(2) NOT NULL DEFAULT 'ID',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `publish_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `unpublish_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visibility` int(11) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `web_page` */

insert  into `web_page`(`id`,`admin_id`,`menu_id`,`name`,`slug`,`mode`,`overview`,`description`,`keyword`,`image`,`language`,`created_at`,`updated_at`,`publish_at`,`unpublish_at`,`visibility`,`status`) values 
(1,0,0,'Home','','',NULL,'<p xss=removed>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p xss=removed>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-18 02:56:29','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(2,0,0,'Profile Lengkap','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 06:54:41','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(3,0,0,'Struktur Organisasi','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 06:57:52','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(4,0,0,'Sejarah','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:03:09','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(5,0,0,'Visi dan Misi','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:03:18','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(6,0,0,'Fasilitas','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:03:23','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(7,0,0,'Prestasi Sekolah','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:13:14','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(8,0,0,'Prestasi Guru','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:13:22','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(9,0,0,'Prestasi Siswa','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:13:29','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(10,0,0,'Osis','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:18:29','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(11,0,0,'Ekstra Kulikuler','','',NULL,'<p>Description</p>\r\n','','default.jpg','ID','0000-00-00 00:00:00','2020-06-14 07:18:36','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),
(12,0,0,'Nama Kepala Sekolah','','',NULL,'<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n','','http://localhost/schl1/source/GURU/user.png','ID','0000-00-00 00:00:00','2020-06-18 04:17:34','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1);

/*Table structure for table `web_pengaturan` */

DROP TABLE IF EXISTS `web_pengaturan`;

CREATE TABLE `web_pengaturan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_web` text,
  `title` varchar(50) NOT NULL,
  `keywords` text,
  `description` text,
  `icon` text,
  `logo` text,
  `bg_home` text,
  `bg_menu` text,
  `alamat` text,
  `telfon` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `web_pengaturan` */

insert  into `web_pengaturan`(`id`,`url_web`,`title`,`keywords`,`description`,`icon`,`logo`,`bg_home`,`bg_menu`,`alamat`,`telfon`,`email`,`updated_at`) values 
(1,'sdimpresjayamakmur.merauke.sch.id','SD INPRES JAYA MAKMUR ','Keywords','Description','http://localhost/schl1/source/PENGATURAN/favicon.png','http://localhost/schl1/source/PENGATURAN/logo.png','http://localhost/schl1/source/PENGATURAN/home.jpg','http://localhost/schl1/source/PENGATURAN/banner.jpg','alamat','1234567890','feripebriansah@gmail.com','2020-06-19 03:44:45');

/*Table structure for table `web_slide` */

DROP TABLE IF EXISTS `web_slide`;

CREATE TABLE `web_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` text,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `star` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `web_slide` */

insert  into `web_slide`(`id`,`name`,`image`,`description`,`created_at`,`updated_at`,`star`,`status`) values 
(1,'Slide 1','http://localhost/schl1/source/SLIDE/home-banner.jpg','<p>Description</p>\r\n','2020-06-18 03:51:13','2020-06-18 03:52:48',1,1),
(2,'Slide 2','http://localhost/schl1/source/SLIDE/home-banner.jpg','<p>Description</p>\r\n','2020-06-18 03:53:12',NULL,NULL,1);

/*Table structure for table `web_studi` */

DROP TABLE IF EXISTS `web_studi`;

CREATE TABLE `web_studi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `web_studi` */

insert  into `web_studi`(`id`,`name`,`slug`,`status`) values 
(1,'Olahraga','olahraga',1),
(2,'Matematika','matematika',1),
(3,'Bahasa Indonesia','bahasa_indonesia',1);

/*Table structure for table `web_tokens` */

DROP TABLE IF EXISTS `web_tokens`;

CREATE TABLE `web_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `id_user` int(20) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `web_tokens` */

insert  into `web_tokens`(`id`,`token`,`id_user`,`created`) values 
(1,'339012083576ab4752ec23637f1f04',2,'2020-06-17'),
(2,'dd6b5eda71efcdc7a1c2b41159b0a7',2,'2020-06-17');

/*Table structure for table `web_user` */

DROP TABLE IF EXISTS `web_user`;

CREATE TABLE `web_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('1','0') DEFAULT '1',
  `foto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `web_user` */

insert  into `web_user`(`id`,`username`,`password`,`nama`,`email`,`status`,`foto`) values 
(1,'feri','7815696ecbf1c96e6894b779456d330e','Feri Pebriansah Nugraha','ferpebriansah@gmail.com','1',NULL),
(2,'bom','d8578edf8458ce06fbc5bb76a58c5ca4','BOM BOM','destroyerfery@gmail.com','1',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
