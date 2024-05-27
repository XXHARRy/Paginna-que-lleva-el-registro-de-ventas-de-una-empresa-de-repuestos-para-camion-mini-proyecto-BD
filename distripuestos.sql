-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-05-2024 a las 03:08:15
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `distripuestos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_vent`
--

DROP TABLE IF EXISTS `categoria_vent`;
CREATE TABLE IF NOT EXISTS `categoria_vent` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `categoria_producto` varchar(100) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categoria_vent`
--

INSERT INTO `categoria_vent` (`cod`, `categoria_producto`) VALUES
(1, 'perno'),
(2, 'tornillo'),
(3, 'tuercas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_venta`
--

DROP TABLE IF EXISTS `registro_venta`;
CREATE TABLE IF NOT EXISTS `registro_venta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `categoria_producto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `precio_producto` int NOT NULL,
  `cantidad_productos` int NOT NULL,
  `subtotal` int NOT NULL,
  `iva` int NOT NULL,
  `total` int NOT NULL,
  `fecha_de_compra` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registro_venta`
--

INSERT INTO `registro_venta` (`id`, `nombre`, `fecha_ingreso`, `categoria_producto`, `precio_producto`, `cantidad_productos`, `subtotal`, `iva`, `total`, `fecha_de_compra`) VALUES
(39, 'nikolas', '2024-05-26 21:55:34', '3', 1500, 200, 300000, 57000, 357000, '2024-05-01'),
(37, 'harrison', '2024-05-26 21:39:22', '1', 8800, 200, 1760000, 334400, 2094400, '2024-05-26'),
(34, 'kathy', '2024-05-26 12:55:26', '1', 1000, 500, 500000, 95000, 595000, '2024-05-26'),
(32, 'sergio', '2024-05-26 12:50:49', '3', 200, 500, 100000, 19000, 119000, '2024-05-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
