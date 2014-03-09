/*
SQLyog Community v11.31 (32 bit)
MySQL - 5.1.63-0ubuntu0.10.04.1 : Database - F5DBpub
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `F5pfx-config` */

DROP TABLE IF EXISTS `F5pfx-config`;

CREATE TABLE `F5pfx-config` (
  `configKey` mediumtext,
  `configData` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `F5pfx-config` */

insert  into `F5pfx-config`(`configKey`,`configData`) values (';;plugin;type;default;all;;',';;pre;run;post;;');

/*Table structure for table `F5pfx-plugins` */

DROP TABLE IF EXISTS `F5pfx-plugins`;

CREATE TABLE `F5pfx-plugins` (
  `runKey` mediumtext,
  `listOrder` int(10) NOT NULL DEFAULT '0',
  `folder` varchar(100) NOT NULL DEFAULT 'NOT',
  `type` varchar(100) NOT NULL DEFAULT 'NOT'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `F5pfx-plugins` */

insert  into `F5pfx-plugins`(`runKey`,`listOrder`,`folder`,`type`) values (';;default;all;;',-10000,'cookie','pre'),(';;default;all;;',-9000,'template','pre'),(';;default;all;;',0,'component','run'),(';;default;all;;',3000,'module','post'),(';;default;all;;',4000,'jsLoad','post'),(';;default;all;;',10000,'template','post');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
