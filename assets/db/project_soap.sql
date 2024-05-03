-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2024 at 02:47 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_soap`
--

-- --------------------------------------------------------

--
-- Table structure for table `formanswers`
--

DROP TABLE IF EXISTS `formanswers`;
CREATE TABLE IF NOT EXISTS `formanswers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `formanswers`
--

INSERT INTO `formanswers` (`id`, `username`, `email`, `phone`, `answer`) VALUES
(1, 'Tomé', 'tome@gmail.cok', '123456789', 'Olá. mensagem teste'),
(2, 'Ricardo', 'ricardo@gmail.com', '123987456', 'Mensagem de Teste JQuery/AJAX'),
(3, 'Tomás', 'tomas@gmail.com', '123456789', 'Teste AJAX'),
(6, 'Frame', 'frame@gmail.com', '123456789', 'Teste Quase Final'),
(19, 'Tomé', 'tome@gmail.com', '123456789', 'Olã, teste');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `weight` int NOT NULL,
  `perfume` tinyint(1) NOT NULL,
  `ingredients` varchar(1000) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `weight`, `perfume`, `ingredients`, `img`) VALUES
(1, 'Sabonete de Mel e Cera de Abelha', 8.50, 140, 0, 'Ingredientes: Sodium Olivate (Azeite), Sodium Cocoate (Óleo de Coco), Sodium palmate (Óleo de Palma biológico e sustentável), Sodium avocadate (Óleo de Abacate), Aqua, Glycerine, Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate (Óleo de Rícino), Camellia sinensis leaf extract (Chá Verde), Parfum, Triticum vulgare grass (Erva Trigo em pó).', 'assets\\imgs\\products\\prodamarelo.png'),
(2, 'Sabonete de Alfazema e Erva Príncipe', 8.50, 140, 0, 'Ingredientes: Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate (Óleo de Rícino), Camellia sinensis leaf extract (Chá Verde), Parfum, Triticum vulgare grass (Erva Trigo em pó), Rosmarinus officinalis oleoresin leaf extract, Hexyl cinnamal, Limonene, Geraniol, Citronellol, Benzyl Salicylate, Eugenol, Alpha-Isomethyl Ionone, Linalool.', 'assets\\imgs\\products\\prodroxo.png'),
(3, 'Sabonete de Groselha Preta e Folha de Tomate', 8.50, 140, 0, 'Ingredientes: Sodium Olivate (Azeite), Sodium Cocoate (Óleo de Coco), Sodium palmate (Óleo de Palma biológico e sustentável), Sodium avocadate (Óleo de Abacate), Aqua, Glycerine, Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate (Óleo de Rícino), Camellia sinensis leaf extract (Chá Verde), Parfum, Triticum vulgare grass (Erva Trigo em pó),', 'assets\\imgs\\products\\prodvermelho.png'),
(4, 'Sabonete de Chá Verde e Sândalo', 8.50, 140, 0, 'Ingredientes: Sodium Olivate (Azeite), Sodium Cocoate (Óleo de Coco), Sodium palmate (Óleo de Palma biológico e sustentável), Sodium avocadate (Óleo de Abacate), Aqua, Glycerine, Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate (Óleo de Rícino), Camellia sinensis leaf extract (Chá Verde), Parfum, Triticum vulgare grass (Erva Trigo em pó),', 'assets\\imgs\\products\\prodverde.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
