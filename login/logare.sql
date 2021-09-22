# Host: 127.0.0.1  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2019-04-25 10:43:04
# Generator: MySQL-Front 5.4  (Build 2.5)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "dash_text"
#

CREATE TABLE `dash_text` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_id` varchar(255) DEFAULT NULL,
  `content_text` varchar(255) DEFAULT NULL,
  `titlu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "dash_text"
#

INSERT INTO `dash_text` VALUES (1,'1','BIne ai venit, Gigel!','Dash admin'),(2,'2','BIne ai venit, utilizator de tip utilizator!','Dash utilzator');

#
# Structure for table "drepturi"
#

CREATE TABLE `drepturi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdPage` varchar(255) DEFAULT NULL,
  `IdUser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "drepturi"
#

INSERT INTO `drepturi` VALUES (1,'1','1'),(2,'2','1'),(3,'1','2'),(4,'3','1'),(5,'3','2'),(6,'4','1'),(7,'4','2');

#
# Structure for table "pagini"
#

CREATE TABLE `pagini` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nume_meniu` varchar(255) DEFAULT NULL,
  `pagina` varchar(255) DEFAULT NULL,
  `Meniu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "pagini"
#

INSERT INTO `pagini` VALUES (1,'funct1','func1.php','1'),(2,'func2','func2.php','1'),(3,'funct3','f3.php','1'),(4,'home','dashboard.php','0');

#
# Structure for table "user_types"
#

CREATE TABLE `user_types` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) DEFAULT NULL,
  `redirect` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "user_types"
#

INSERT INTO `user_types` VALUES (1,'admin','dashboard.php'),(2,'user','dashboard.php');

#
# Structure for table "users"
#

CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'admin','admin','admin','1'),(2,'user','user','user','2');
