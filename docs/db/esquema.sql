-- Created by DiaSql-Dump Version 0.01(Beta)
-- Filename: esquema.sql
-- Created: 2010-08-19

-- clients --
DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`RL` int(11) DEFAULT NULL UNIQUE,
	`person_id` bigint(20) DEFAULT NULL UNIQUE,
	`inscription_date` date DEFAULT NULL,
	`payment_date` date DEFAULT NULL,
	`invited_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- discounts --
DROP TABLE IF EXISTS `discounts`;
CREATE TABLE IF NOT EXISTS `discounts` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`membership_id` int(11) DEFAULT NULL,
	`user_id` int(11) DEFAULT NULL,
	`percentage` int(11) DEFAULT NULL,
	`created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- users --
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`person_id` bigint(20) DEFAULT NULL UNIQUE,
	`username` varchar(20) DEFAULT NULL UNIQUE,
	`password` varchar(32) DEFAULT NULL,
	`salary` decimal(10,2) DEFAULT NULL,
	`join_date` date DEFAULT NULL,
	`position` varchar(20) DEFAULT NULL,
	`schedule` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- providers --
DROP TABLE IF EXISTS `providers`;
CREATE TABLE IF NOT EXISTS `providers` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`name` varchar(20) NOT NULL UNIQUE,
	`handle` varchar(12) DEFAULT NULL,
	`line_of_business` varchar(20) DEFAULT NULL,
	`telephone` varchar(12) DEFAULT NULL,
	`address` varchar(60) DEFAULT NULL,
	`email` varchar(30) DEFAULT NULL,
	`site` varchar(50) DEFAULT NULL,
	`rfc` varchar(30) DEFAULT NULL,
	`description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- apnps_resumes --
DROP TABLE IF EXISTS `apnps_resumes`;
CREATE TABLE IF NOT EXISTS `apnps_resumes` (
	`id` int(11) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`resume_id` bigint(20) NOT NULL,
	`apnp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- apnps --
DROP TABLE IF EXISTS `apnps`;
CREATE TABLE IF NOT EXISTS `apnps` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`concept` varchar(20) DEFAULT NULL,
	`situation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- type_memberships --
DROP TABLE IF EXISTS `type_memberships`;
CREATE TABLE IF NOT EXISTS `type_memberships` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`name` varchar(12) DEFAULT NULL UNIQUE,
	`inscription_payment` decimal(10,2) DEFAULT NULL,
	`monthly_payment` decimal(10,2) DEFAULT NULL,
	`color` varchar(12) DEFAULT NULL,
	`min_users` int(11) DEFAULT NULL,
	`max_users` int(11) DEFAULT NULL,
	`price_for_extra_member` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- people --
DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`first_name` varchar(20) DEFAULT NULL,
	`middle_name` varchar(20) NOT NULL,
	`last_name` varchar(20) DEFAULT NULL,
	`home_telephone` varchar(16) DEFAULT NULL,
	`mobile_telephone` varchar(16) DEFAULT NULL,
	`emergency_number` varchar(16) DEFAULT NULL,
	`address` varchar(100) DEFAULT NULL,
	`email` varchar(30) DEFAULT NULL UNIQUE,
	`marital_status` enum('soltero','casado','viudo','divorciado') DEFAULT NULL,
	`gender` enum('M','F') DEFAULT NULL,
	`fingerprint` varchar(32) DEFAULT NULL,
	`blood_type` varchar(4) DEFAULT NULL,
	`occupation` varchar(20) DEFAULT NULL,
	`birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- apps --
DROP TABLE IF EXISTS `apps`;
CREATE TABLE IF NOT EXISTS `apps` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`patologie_id` bigint(20) NOT NULL,
	`state` varchar(10) DEFAULT NULL,
	`evolution_time` varchar(10) DEFAULT NULL,
	`treatment` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- sales --
DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`product_id` bigint(20) DEFAULT NULL,
	`user_id` bigint(20) DEFAULT NULL,
	`terminal` varchar(10) DEFAULT NULL,
	`concept` text DEFAULT NULL,
	`total` decimal(10,2) DEFAULT NULL,
	`created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- patologies --
DROP TABLE IF EXISTS `patologies`;
CREATE TABLE IF NOT EXISTS `patologies` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`name` varchar(30) DEFAULT NULL,
	`comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- memberships --
DROP TABLE IF EXISTS `memberships`;
CREATE TABLE IF NOT EXISTS `memberships` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`type_membership_id` bigint(20) DEFAULT NULL,
	`client_id` bigint(20) DEFAULT NULL,
	`payment_id` int(11) DEFAULT NULL,
	`created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- interval_accesses --
DROP TABLE IF EXISTS `interval_accesses`;
CREATE TABLE IF NOT EXISTS `interval_accesses` (
	`id` int(11) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`area_id` int(11) DEFAULT NULL,
	`type_membership_id` int(11) DEFAULT NULL,
	`start` time NOT NULL,
	`end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- products --
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`provider_id` bigint(20) DEFAULT NULL,
	`name` varchar(20) DEFAULT NULL,
	`amount` int(11) DEFAULT NULL,
	`stock` int(11) DEFAULT NULL,
	`adquicision_price` decimal(10,2) DEFAULT NULL,
	`selling_price` decimal(10,2) DEFAULT NULL,
	`description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- payments --
DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`name` varchar(40) DEFAULT NULL UNIQUE,
	`description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- resumes --
DROP TABLE IF EXISTS `resumes`;
CREATE TABLE IF NOT EXISTS `resumes` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`client_id` bigint(20) NOT NULL UNIQUE,
	`m_patologies` text DEFAULT NULL,
	`p_patologies` text DEFAULT NULL,
	`dp_list` text DEFAULT NULL,
	`actual_sicknes` text DEFAULT NULL,
	`weight` decimal(10,2) DEFAULT NULL,
	`tail` decimal(10,2) DEFAULT NULL,
	`temp` decimal(10,2) DEFAULT NULL,
	`t_a` decimal(10,2) DEFAULT NULL,
	`sick_organ` text DEFAULT NULL,
	`observations` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- app_resume --
DROP TABLE IF EXISTS `app_resume`;
CREATE TABLE IF NOT EXISTS `app_resume` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`app_id` bigint(20) NOT NULL,
	`resume_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- privileges --
DROP TABLE IF EXISTS `privileges`;
CREATE TABLE IF NOT EXISTS `privileges` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`privileges` varchar(9) DEFAULT NULL,
	`description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- areas --
DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
	`id` bigint(20) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`name` varchar(12) DEFAULT NULL,
	`description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- End SQL-Dump
