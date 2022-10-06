-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2022 at 09:00 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ventassi`
--

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `referencia_producto` varchar(100) DEFAULT NULL,
  `precio_producto` int DEFAULT NULL,
  `peso_producto` int DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `stock_producto` int DEFAULT NULL,
  `fecha_creacion_producto` date DEFAULT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`idproducto`, `nombre_producto`, `referencia_producto`, `precio_producto`, `peso_producto`, `categoria`, `stock_producto`, `fecha_creacion_producto`) VALUES
(1, 'pan', '001', 100, 11, 'panaderia', 1000, '2022-10-06'),
(10, 'prueba', '0012', 2000, 2, 'panaderia', 100, '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta_producto` int NOT NULL AUTO_INCREMENT,
  `precio_venta` int DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL,
  `producto_idproducto` int NOT NULL,
  PRIMARY KEY (`id_venta_producto`),
  KEY `fk_venta_producto_idx` (`producto_idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`id_venta_producto`, `precio_venta`, `fecha_venta`, `producto_idproducto`) VALUES
(1, 2000, '2022-10-06', 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_producto` FOREIGN KEY (`producto_idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
