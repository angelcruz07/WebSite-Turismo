-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 05:00:59
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
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `type`, `name`, `description`, `location`, `image`) VALUES
(1, 'Mirador', 'EL MIRADOR ', 'Un lugar de tranquilidad, con una excelente vista ', 'https://maps.app.goo.gl/xRKSsP7wLSSMSa3ZA', '1700795074_MIRADOR.jpg'),
(2, 'Mirador', 'EL MIRADOR ', 'Un lugar lleno de paz para disfrutar junto a tu familia', 'https://maps.app.goo.gl/xRKSsP7wLSSMSa3ZA', '1700795344_park_mirador.jpg'),
(3, 'Parroquia', 'PARROQUIA DE SAN JUAN BAUTISTA', 'Una parroquia muy hermosa, una gran arquitectura del siglo XVII.', 'https://maps.app.goo.gl/mAWJqrw1J6Rn8vev8', '1700795652_juan.jpg'),
(4, 'Parroquia', 'SANTUARIO SEÑOR DE LA SANTA VERACRUZ', 'Un santuario que data del siglo XIX y alberga una imagen del Cristo Negro a la que los devotos le atribuyen varios milagros.', 'https://maps.app.goo.gl/T1moKtMuXBactw6g8', '1700795877_veracruz.jpeg'),
(5, 'Monumentos', 'EL MINERO', 'El minero un monumento hecho a reconocimiento del pueblo con encanto Sultepec', 'https://maps.app.goo.gl/HCzjBLE6JaRvukxv5', '1700796262_minero.jpg'),
(6, 'Parques', 'UNIDAD DEPORTIVA EL CHOCOLATE', 'No hay mejor lugar para practicar futbol que el la unidad deportiva el chocolate ', 'https://maps.app.goo.gl/Zt8ZEFd6CKCHBryN7', '1700796603_CHOCOLATE.jpg'),
(7, 'Monumentos', 'LETRAS SULTEPEC ', 'Monumento al  municipio de Sultepec, las letras SULTEPEC ', 'https://maps.app.goo.gl/6xfXrgYa6Y1N2EAG7', '1700797011_LETRAS.jpg'),
(8, 'Parques', 'PARQUE RECREATIVO EL MIRADOR', 'El parque perfecto para venir a disfrutar un día de campo junto a la familia, lugar con muchos arboles y juegos impresionantes. ', 'https://maps.app.goo.gl/7NchJaJ9GqTQn4XQ7', '1700797444_parque.jpeg'),
(9, 'Parroquia', 'IGLESIA DE LA UNION', 'Una iglesia muy antigua con unas grandes decoraciones, una de las iglesias más bellas de Sultepec', 'https://maps.app.goo.gl/sxA9ngqvRfgi3u2t8', '1700798263_UNION.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
