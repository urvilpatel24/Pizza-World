/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.21-MariaDB : Database - pizza
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pizza` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pizza`;

/*Table structure for table `myorder` */

DROP TABLE IF EXISTS `myorder`;

CREATE TABLE `myorder` (
  `order_id` int(1) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) DEFAULT '',
  `crust` varchar(100) DEFAULT '',
  `size` varchar(100) DEFAULT '',
  `qty` int(10) DEFAULT NULL,
  `topping` varchar(1000) DEFAULT '',
  `total` int(10) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `myorder` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(200) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) DEFAULT '',
  `email` varchar(1000) DEFAULT '',
  `password` varchar(1000) DEFAULT '',
  `mobileNo` varchar(1000) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
