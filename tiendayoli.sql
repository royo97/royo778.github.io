-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2022 a las 22:53:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendayoli`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(80) NOT NULL,
  `Categoria` varchar(80) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `precio` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Categoria`, `nombre`, `precio`) VALUES
(23, 'Granos', 'Arroz', '5000'),
(49, 'Otros', 'Aceite', '400 - 1/4'),
(2, 'Mekatos', 'Papa Margarita', '1300'),
(892, 'Gaseosas', 'Gaseosa 1.5L', '3500'),
(628, 'Gaseosas', 'Coca Cola 3L', '7000'),
(133, 'Mekatos', 'RisadaT', '2000'),
(626, 'Granos', 'Frijol Negro', '2500 L'),
(4, 'Verduras', 'Tomate', '2000'),
(288, 'Otros', 'Maracuya', '2300');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
