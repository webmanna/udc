-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for udcdb
CREATE DATABASE IF NOT EXISTS `udcdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `udcdb`;


-- Dumping structure for table udcdb.activities
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT '0',
  `point_value` int(11) DEFAULT NULL,
  `point_factor` float(5,2) DEFAULT NULL,
  `is_bonus` tinyint(1) DEFAULT '0',
  `is_fault` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.activities: ~0 rows (approximately)
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;


-- Dumping structure for table udcdb.activities_games
CREATE TABLE IF NOT EXISTS `activities_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.activities_games: ~0 rows (approximately)
/*!40000 ALTER TABLE `activities_games` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities_games` ENABLE KEYS */;


-- Dumping structure for table udcdb.activities_runs
CREATE TABLE IF NOT EXISTS `activities_runs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `run_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `parent_activity_id` int(11) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `run_id` (`run_id`),
  KEY `parent_activity_id` (`parent_activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.activities_runs: ~0 rows (approximately)
/*!40000 ALTER TABLE `activities_runs` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities_runs` ENABLE KEYS */;


-- Dumping structure for table udcdb.awards
CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.awards: ~0 rows (approximately)
/*!40000 ALTER TABLE `awards` DISABLE KEYS */;
/*!40000 ALTER TABLE `awards` ENABLE KEYS */;


-- Dumping structure for table udcdb.awards_dogs
CREATE TABLE IF NOT EXISTS `awards_dogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_id` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  `is_official` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `award_id` (`award_id`),
  KEY `dog_id` (`dog_id`),
  KEY `is_official` (`is_official`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.awards_dogs: ~0 rows (approximately)
/*!40000 ALTER TABLE `awards_dogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `awards_dogs` ENABLE KEYS */;


-- Dumping structure for table udcdb.awards_handlers
CREATE TABLE IF NOT EXISTS `awards_handlers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_id` int(11) NOT NULL,
  `handler_id` int(11) NOT NULL,
  `is_official` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `award_id` (`award_id`),
  KEY `handler_id` (`handler_id`),
  KEY `is_official` (`is_official`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.awards_handlers: ~0 rows (approximately)
/*!40000 ALTER TABLE `awards_handlers` DISABLE KEYS */;
/*!40000 ALTER TABLE `awards_handlers` ENABLE KEYS */;


-- Dumping structure for table udcdb.awards_team_pairs
CREATE TABLE IF NOT EXISTS `awards_team_pairs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_id` int(11) NOT NULL,
  `team_pair_id` int(11) NOT NULL,
  `is_official` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `award_id` (`award_id`),
  KEY `team_pair_id` (`team_pair_id`),
  KEY `is_official` (`is_official`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.awards_team_pairs: ~0 rows (approximately)
/*!40000 ALTER TABLE `awards_team_pairs` DISABLE KEYS */;
/*!40000 ALTER TABLE `awards_team_pairs` ENABLE KEYS */;


-- Dumping structure for table udcdb.award_conditions
CREATE TABLE IF NOT EXISTS `award_conditions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_id` int(11) DEFAULT NULL,
  `name` int(11) DEFAULT NULL,
  `test_model` int(11) DEFAULT NULL,
  `test_conditions` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `achievement_id` (`award_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.award_conditions: ~0 rows (approximately)
/*!40000 ALTER TABLE `award_conditions` DISABLE KEYS */;
/*!40000 ALTER TABLE `award_conditions` ENABLE KEYS */;


-- Dumping structure for table udcdb.divisions
CREATE TABLE IF NOT EXISTS `divisions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.divisions: ~0 rows (approximately)
/*!40000 ALTER TABLE `divisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `divisions` ENABLE KEYS */;


-- Dumping structure for table udcdb.dogs
CREATE TABLE IF NOT EXISTS `dogs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `breed` varchar(50) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.dogs: ~0 rows (approximately)
/*!40000 ALTER TABLE `dogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `dogs` ENABLE KEYS */;


-- Dumping structure for table udcdb.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tour_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tour_id` (`tour_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.events: ~0 rows (approximately)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;


-- Dumping structure for table udcdb.events_games
CREATE TABLE IF NOT EXISTS `events_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.events_games: ~0 rows (approximately)
/*!40000 ALTER TABLE `events_games` DISABLE KEYS */;
/*!40000 ALTER TABLE `events_games` ENABLE KEYS */;


-- Dumping structure for table udcdb.games
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `is_expired` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `is_expired` (`is_expired`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.games: ~0 rows (approximately)
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
/*!40000 ALTER TABLE `games` ENABLE KEYS */;


-- Dumping structure for table udcdb.handlers
CREATE TABLE IF NOT EXISTS `handlers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wp_user_id` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wp_user_id` (`wp_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.handlers: ~0 rows (approximately)
/*!40000 ALTER TABLE `handlers` DISABLE KEYS */;
/*!40000 ALTER TABLE `handlers` ENABLE KEYS */;


-- Dumping structure for table udcdb.levels
CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.levels: ~0 rows (approximately)
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;


-- Dumping structure for table udcdb.rounds
CREATE TABLE IF NOT EXISTS `rounds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `division_id` (`division_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.rounds: ~0 rows (approximately)
/*!40000 ALTER TABLE `rounds` DISABLE KEYS */;
/*!40000 ALTER TABLE `rounds` ENABLE KEYS */;


-- Dumping structure for table udcdb.round_activities
CREATE TABLE IF NOT EXISTS `round_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.round_activities: ~0 rows (approximately)
/*!40000 ALTER TABLE `round_activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `round_activities` ENABLE KEYS */;


-- Dumping structure for table udcdb.round_statuses
CREATE TABLE IF NOT EXISTS `round_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.round_statuses: ~0 rows (approximately)
/*!40000 ALTER TABLE `round_statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `round_statuses` ENABLE KEYS */;


-- Dumping structure for table udcdb.runs
CREATE TABLE IF NOT EXISTS `runs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `round_id` int(11) NOT NULL,
  `team_pair_id` int(11) NOT NULL,
  `points_total` int(11) DEFAULT NULL,
  `points_bonus` int(11) DEFAULT NULL,
  `points_scored` int(11) DEFAULT NULL,
  `points_faults` int(11) DEFAULT NULL,
  `throws_total` int(11) DEFAULT NULL,
  `throws_scored` int(11) DEFAULT NULL,
  `throws_bonus` int(11) DEFAULT NULL,
  `throws_missed` int(11) DEFAULT NULL,
  `throws_dropped` int(11) DEFAULT NULL,
  `throws_faults` int(11) DEFAULT NULL,
  `time` float(4,2) DEFAULT NULL,
  `is_official` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `round_id` (`round_id`),
  KEY `team_pair_id` (`team_pair_id`),
  KEY `is_official` (`is_official`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.runs: ~0 rows (approximately)
/*!40000 ALTER TABLE `runs` DISABLE KEYS */;
/*!40000 ALTER TABLE `runs` ENABLE KEYS */;


-- Dumping structure for table udcdb.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `handler_id` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `handler_id_dog_id` (`handler_id`,`dog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.teams: ~0 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;


-- Dumping structure for table udcdb.team_pairs
CREATE TABLE IF NOT EXISTS `team_pairs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `handler_id` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `handler_id` (`handler_id`),
  KEY `dog_id` (`dog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.team_pairs: ~0 rows (approximately)
/*!40000 ALTER TABLE `team_pairs` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_pairs` ENABLE KEYS */;


-- Dumping structure for table udcdb.tours
CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table udcdb.tours: ~0 rows (approximately)
/*!40000 ALTER TABLE `tours` DISABLE KEYS */;
/*!40000 ALTER TABLE `tours` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
