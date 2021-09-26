-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 26 Σεπ 2021 στις 07:46:14
-- Έκδοση διακομιστή: 5.7.21
-- Έκδοση PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `epignosis`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `application_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `reason` text NOT NULL,
  `status_id` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`application_id`),
  KEY `user_id` (`user_id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `application`
--

INSERT INTO `application` (`application_id`, `date_created`, `date_from`, `date_to`, `reason`, `status_id`, `user_id`) VALUES
(17, '2021-09-25 21:03:50', '2021-09-22', '2021-09-30', 'diakopes leme!', 1, 3),
(18, '2021-09-25 21:04:47', '2021-09-15', '2021-09-20', 'diakopes', 1, 3),
(19, '2021-09-25 21:06:33', '2021-09-08', '2021-09-22', 'diakopes διακοπες', 3, 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `status`
--

INSERT INTO `status` (`status_id`, `name`) VALUES
(1, 'pending'),
(2, 'approved'),
(3, 'rejected');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `user_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_data_id`),
  KEY `user_role_id` (`user_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user_data`
--

INSERT INTO `user_data` (`user_data_id`, `first_name`, `last_name`, `email`, `password`, `user_role_id`) VALUES
(1, 'admin', 'admin', 'admin@test.gr', '123456', 1),
(2, 'admin', 'admin', 'admin@test.gr', '123456', 1),
(3, 'jim', 'jim', 'test@user.gr', '1234', 2);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`user_role_id`),
  KEY `user_role_id` (`user_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `name`) VALUES
(1, 'admin'),
(2, 'employee');

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_data` (`user_data_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`user_role_id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
