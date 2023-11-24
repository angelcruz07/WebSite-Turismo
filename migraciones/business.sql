-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 15:13:06
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
-- Estructura de tabla para la tabla `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `business`
--

INSERT INTO `business` (`id`, `type`, `name`, `description`, `phone_number`, `location`, `image`) VALUES
(1, 'Tradicional', 'POZOLERIA DOÑA SABI', 'Pozoleria Doña Sabi un excelente restaurante para venir a comer pozole, con un gran sabor tradicional, al igual un precio bastante conveniente', '+52 7221488122', 'https://maps.app.goo.gl/RD9W9yyz8GCk83XC9', '1700832368_pozole.webp'),
(2, 'Mexicana', 'TAQUERIA CARBAJAL´S', 'Quieres probar uno de los mejores tacos, ven y conoce la Taqueria Carbajal´s con unos tacos con excelente sabor', '+52 7221488122', 'https://maps.app.goo.gl/B62yVksbRdznDmca9', '1700832706_tacos.webp'),
(3, 'Tradicional', 'GALLETAS \"FRUTA DE HORNO\" CASA ARELLANO', 'Ven y conoce una de las principales tradiciones de Sultepec, las galletas de horno, las galletas tienen un gran sabor. ', '+52 7161480050', 'https://maps.app.goo.gl/oquKRRaqjDk6d2Cf7', '1700833043_galletas.jpg'),
(4, 'Mexicana', 'COCINA ECONOMICA DOÑA YOLA', 'Conoce la cocina econmica Doña Yola unos excelentes platillos que puedes disgustar ', '+52 7221488122', 'https://maps.app.goo.gl/SQ39KE1mnt5HeTjC7', '1700833487_chilaquiles-verdes-de-avena.jpg'),
(5, 'Oriental', 'RINCION DEL CHINO', 'Ven a consumir comida Oriental El Chino con una gran variedad de platillos que puedes venir a probar en familia', '+52 7225837321', 'https://maps.app.goo.gl/YqFKT4PiLCM2bbJf8', '1700833771_comida-china-cdmx.webp'),
(6, 'Mexicana', 'RESTAURANTE KARY', 'Ven a disgustar uno de los mejores platillos de la zona en el Resturante Kary con unos muy buenos platillos que puedes venir a probar', '+52 7161480514', 'https://maps.app.goo.gl/7uGhfW4ZVNrVKz8F9', '1700834163_kary.jpg'),
(7, 'Bebidas', 'MICHES EL TAMA', 'Ven a consumir bebidas en uno de los mejores bares del municipio de Sultepec donde puedes venir a divertirte con tus amigos y familiares', '+52 7225508963', 'https://maps.app.goo.gl/TXHiLskyMXAQuSzY8', '1700834554_MICHES_TAMA.webp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
