-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 05:02:30
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
-- Estructura de tabla para la tabla `lodging`
--

CREATE TABLE `lodging` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lodging`
--

INSERT INTO `lodging` (`id`, `name`, `description`, `phone_number`, `location`, `image`) VALUES
(1, 'HOTEL 7 ESPADAS', 'Ven y conoce al Hotel 7 Espadas, un hotel con grandes vistas y además el excelente servicio que te ofrecemos, anímate ven y conócenos. ', '+52 7222845100', 'https://maps.app.goo.gl/XCq58P1wf9Qx78f26', '1700792697_7 ESPADAS.jpeg'),
(2, 'HOSPEDAJE EL CONVENTO', 'Acércate y ven a conocer el hospedaje el convento, un hospedaje muy distinto a los demás, muy buenas habitaciones y todos los servicios de calidad. ', '8006967666', 'https://maps.app.goo.gl/Q8bhCVN3Ln5j71zEA', '1700793162_convento.webp'),
(3, 'HOTEL FARAH', 'Conoce el Hotel Farah, uno de los hoteles más modernos del municipio de Sultepec, te ofrecemos un excelente servicio.', '+52 7223667060', 'https://maps.app.goo.gl/VKjAVpgrCzx3HGfg6', '1700793678_farah.jpg'),
(4, 'HOSPEDAJE JUANITA', 'Si quieres quedarte un un hospedaje bastante económico esta es tu mejor opción, con un cuartos muy acogedores y un buen servicio.  ', '+52 7161480116', 'https://maps.app.goo.gl/C3VByJFUZjcH7Z3H9', '1700794604_juanita.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lodging`
--
ALTER TABLE `lodging`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lodging`
--
ALTER TABLE `lodging`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
