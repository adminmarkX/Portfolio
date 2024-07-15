-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for travel_agency
DROP DATABASE IF EXISTS `travel_agency`;
CREATE DATABASE IF NOT EXISTS `travel_agency` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `travel_agency`;

-- Dumping structure for table travel_agency.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_of_product` varchar(50) NOT NULL,
  `price` int DEFAULT NULL,
  `mainimage` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image1` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image2` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image3` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image4` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `available` int DEFAULT NULL,
  `fromCity` varchar(50) DEFAULT NULL,
  `toCity` varchar(50) DEFAULT NULL,
  `duration` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table travel_agency.products: ~12 rows (approximately)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `name_of_product`, `price`, `mainimage`, `image1`, `image2`, `image3`, `image4`, `startDate`, `endDate`, `available`, `fromCity`, `toCity`, `duration`) VALUES
	(1, 'Cairo', 250, 'C:\\laragon\\www\\uiProject\\uiProject\\images\\welcome.png', NULL, NULL, NULL, NULL, '2023-01-30', '2023-02-11', 10, 'Chania', 'Cairo', 12),
	(2, 'Amsterdam', 450, 'C:\\laragon\\www\\uiProject\\uiProject\\images\\amsterdam.png', NULL, NULL, NULL, NULL, '2023-01-18', '2023-01-30', 14, 'Tirana', 'Amsterdam', 12),
	(3, 'Paris', 650, NULL, NULL, NULL, NULL, NULL, '2023-01-18', '2023-01-25', 21, 'Athens', 'Paris', 6),
	(4, 'Athens', 350, NULL, NULL, NULL, NULL, NULL, '2023-01-21', '2023-01-25', 10, 'London', 'Athens', 4),
	(5, 'Jerusalem', 450, NULL, NULL, NULL, NULL, NULL, '2023-01-22', '2023-01-25', 10, 'Heraklion', 'Telaviv', 3),
	(6, 'Moscow', 20, NULL, NULL, NULL, NULL, NULL, '2023-01-26', '2023-01-31', 10, 'Athens', 'Moscow', 5),
	(7, 'New york', 750, NULL, NULL, NULL, NULL, NULL, '2023-02-11', '2023-02-17', 10, 'Berlin', 'New york', 6),
	(8, 'Los Angeles', 1200, NULL, NULL, NULL, NULL, NULL, '2023-01-21', '2023-01-25', 11, 'Athens', 'Los Angeles', 4),
	(9, 'Sidney', 1600, NULL, NULL, NULL, NULL, NULL, '2023-01-30', '2023-02-10', 10, 'Athens', 'Sydney', 11),
	(10, 'Patra', 200, NULL, NULL, NULL, NULL, NULL, '2023-01-20', '2023-01-25', 13, 'Athens', 'Patra', 5),
	(11, 'Berlin', 240, NULL, NULL, NULL, NULL, NULL, '2023-01-26', '2023-01-30', 5, 'London', 'Berlin', 4),
	(12, 'London', 800, 'C:\\laragon\\www\\uiProject\\uiProject\\images\\destinations', NULL, NULL, NULL, NULL, '2023-02-15', '2023-02-20', 7, 'Chania', 'London', 5);

-- Dumping structure for table travel_agency.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `passwords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `tk` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `date_of_registered` date DEFAULT NULL,
  `last_seen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table travel_agency.users: ~12 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `username`, `passwords`, `email`, `name`, `lastname`, `phone`, `address`, `tk`, `country`, `date_of_registered`, `last_seen`) VALUES
	(4, 'adminxex', 'epFfQ#PZLX&eVhtr9F', 'tp4720@edu.hmu.gr', 'admin', 'admin', '6949944363', 'admin', '', 'greece', '2023-01-16', NULL),
	(5, 'kwstas', 'giannisup', 'amdin@gmail.com', 'admin', 'papi', '6949944363', 'admin', '13', 'greece', '2023-01-16', NULL),
	(6, 'kwstas', 'giannisup', 'amdin@gmail.com', 'admin', 'papi', '6949944363', 'admin', '13', 'greece', '2023-01-17', NULL),
	(7, 'admin', '$2y$10$dkx2mkKGG9vQtmSanCOMgOGFfC8s4PE6HoF.UodgWRPiwfZR1tS3m', 'tp4720@edu.hmu.gr', 'admin', 'admin', '6949944363', 'admin', '13', 'greece', '2023-01-17', NULL),
	(8, 'admin111', '$2y$10$n7oQZT6yHY6s9QeHXehk3ONr.NO.VypO.6jb4AR1T.APinuhtlkAW', 'd@gmail.com', 'admin', 'admin', '6949944363', 'admin', '13', 'greece', '2023-01-17', NULL),
	(9, 'stelios', '$2y$10$oDX/Km2aWLNyo0kiMQU8gObQZ3f7I5oB6NWGGzpVNi077uhKPgTmO', 'sdas@gmail.com', 'admin', 'admin', '6949944363', 'admin', '13', 'greece', '2023-01-17', NULL),
	(10, 'stelios2', '$2y$10$tEf0svVOB7doXpzGnGb5JuXi3UnneD1KHhhLUbDOcjQEGedIETXH2', 'tp4720@edu.hmu.gr', 'admin', 'admin', 'admin', 'amdin', 'admin', 'admin', '2023-01-17', NULL),
	(11, 'constantinospap', '$2y$10$IO192gTta2pdf3JVi96EvuuLBMUkJO5LRMi.jBGPRe4UorjAgOsTe', 'tp4720@edu.hmu.gr', 'Costas', 'Papi', '6949944363', 'Anagnostou Mantaka 32', '73135', 'Greece', '2023-01-17', NULL),
	(12, 'adminxex1234', '$2y$10$EKKhWS8ZGaj2ABL2V1/VnOMfovr3hPz.0WKofWz7auHp0vXiZ6C9u', 'tp4720@edu.hmu.gr', 'admin', 'admin', 'admin', 'Anagnostou Mantaka 32', '73135', '6949944363', '2023-01-17', NULL),
	(13, 'giannis996', '$2y$10$DQjhJq0J/4K8xqSMDsN01.UMdT0qWr80HQbpHWyuHkPF98l4bXZCu', 'tp4720@edu.hmu.gr', 'Giannis', 'Papadakis', '6949944363', 'Anagnostou Mantaka 32', '73135', 'Greece', '2023-01-17', NULL),
	(14, 'makis1234', '$2y$10$FwFil7MlqmvulhEqihjNyOX4MYZBtUp/6iJXOlHWGRLoHdnd.zm7q', 'tp4720@edu.hmu.gr', 'Makis', 'Kotas', '6949944363', 'Anagnostou Mantaka 32', '73135', 'Greece', '2023-01-17', NULL),
	(15, 'makis12345', '$2y$10$qOtPH/Hrd4y93n8RJJ.xaO4bICrPEB/DeTTabAruMyG225veDxc4S', 'tp4720@edu.hmu.gr', 'Makis', 'Kotas', '6949944363', 'Anagnostou Mantaka 32', '73135', 'Greece', '2023-01-17', NULL);

-- Dumping structure for table travel_agency.user_purschace_products
DROP TABLE IF EXISTS `user_purschace_products`;
CREATE TABLE IF NOT EXISTS `user_purschace_products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) DEFAULT '0',
  `date_of_purchase` date NOT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table travel_agency.user_purschace_products: ~8 rows (approximately)
DELETE FROM `user_purschace_products`;
INSERT INTO `user_purschace_products` (`id`, `product_name`, `date_of_purchase`, `user_id`) VALUES
	(1, 'Cairo', '2023-01-17', NULL),
	(2, 'Cairo', '2023-01-17', NULL),
	(3, 'Cairo', '2023-01-17', NULL),
	(4, 'Cairo', '2023-01-17', NULL),
	(5, 'Cairo', '2023-01-17', NULL),
	(20, 'Cairo', '2023-01-18', NULL),
	(21, 'Cairo', '2023-01-18', NULL),
	(26, NULL, '2023-01-18', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
