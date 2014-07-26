-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.0.27-community-nt - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for jpmg
CREATE DATABASE IF NOT EXISTS `jpmg` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jpmg`;


-- Dumping structure for table jpmg.area
CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY  (`area_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.city
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY  (`city_id`),
  KEY `state_id` (`state_id`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.country
CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.employer
CREATE TABLE IF NOT EXISTS `employer` (
  `emp_id` int(11) NOT NULL auto_increment,
  `name` varchar(300) NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY  (`emp_id`),
  KEY `area_id` (`area_id`),
  CONSTRAINT `employer_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `job` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `employer_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.job
CREATE TABLE IF NOT EXISTS `job` (
  `j_id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) default NULL,
  `vacancies` int(11) default NULL,
  `description` varchar(500) default NULL,
  `company` varchar(50) default NULL,
  `salary` bigint(20) default NULL,
  `location` varchar(50) default NULL,
  PRIMARY KEY  (`j_id`),
  KEY `emp_id` (`emp_id`,`vacancies`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.job_skill
CREATE TABLE IF NOT EXISTS `job_skill` (
  `j_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  KEY `j_id` (`j_id`,`skill_id`),
  CONSTRAINT `job_skill_ibfk_1` FOREIGN KEY (`j_id`) REFERENCES `job` (`j_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.po
CREATE TABLE IF NOT EXISTS `po` (
  `po_id` int(11) NOT NULL auto_increment,
  `area_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY  (`po_id`),
  KEY `area_id` (`area_id`),
  CONSTRAINT `po_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.skill
CREATE TABLE IF NOT EXISTS `skill` (
  `skill_id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.state
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY  (`state_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.trainee
CREATE TABLE IF NOT EXISTS `trainee` (
  `trainee_id` int(11) NOT NULL auto_increment,
  `name` int(11) NOT NULL,
  PRIMARY KEY  (`trainee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table jpmg.trainee_skill
CREATE TABLE IF NOT EXISTS `trainee_skill` (
  `trainee_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  KEY `trainee_id` (`trainee_id`,`skill_id`),
  KEY `skill_id` (`skill_id`),
  CONSTRAINT `trainee_skill_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`),
  CONSTRAINT `trainee_skill_ibfk_1` FOREIGN KEY (`trainee_id`) REFERENCES `trainee` (`trainee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
