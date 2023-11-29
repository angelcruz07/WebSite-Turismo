-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 05:24:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tourism`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `scheduls` varchar(255) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `image` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `type`, `availability`, `scheduls`, `route`, `image`) VALUES
(1, 'Urban', 'Lunes a Domingo', '6:30 a.m - 5:20 p.m', 'SULTEPEC - TEJUPILCO', '1700799065_urban.jpg'),
(2, 'Taxi', 'Lunes a Domingo', '6:30 a.m - 5:20 p.m', 'SULTEPEC - TIXCA', '1700799269_Nissan_Tsuru_Taxi.jpg'),
(3, 'Autobus', 'Lunes a Domingo', '5:00 a.m - 6:30 p-m', 'SULTEPEC - TOLUCA', '1700799511_zinabus.jpeg'),
(4, 'Ruletera', 'Lunes a Viernes', '5:00 a.m - 6:30 p-m', 'SULTEPEC - TIXCA', '1700799716_ruletera.jpeg'),
(5, 'Taxi', 'Lunes a Viernes', '5:00 a.m - 6:30 p-m', 'SULTEPEC - TOLUCA', '1700799781_Nissan_Tsuru_Taxi.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
