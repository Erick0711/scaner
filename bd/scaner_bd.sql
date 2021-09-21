-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2021 a las 01:59:38
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scaner_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `estatura` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `peso` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bmi` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bf` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mm` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bw` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `gv` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `kcal` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `p` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `o` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ma` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `apellido`, `fecha_nac`, `celular`, `edad`, `estatura`, `peso`, `bmi`, `bf`, `mm`, `bw`, `gv`, `bone`, `kcal`, `p`, `o`, `ma`, `genero`, `created_at`) VALUES
(1, 'Maicol Erick', 'Arteaga Guzman', '07/11/1999', '63568888', '21', '1.70', '66', ' 16', '56', '52', '12', '45', '63', '1600', '542', '98', '96', 'Masculino', '2021-09-13 23:07:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
