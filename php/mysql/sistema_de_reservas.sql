-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2024 a las 19:33:00
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_de_reservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id` int(60) NOT NULL,
  `habitacion_simple` varchar(60) NOT NULL,
  `habitacion_doble` varchar(60) NOT NULL,
  `cliente` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id`, `habitacion_simple`, `habitacion_doble`, `cliente`) VALUES
(137, '01-01-2024', '', 'Mansilla'),
(138, '02-01-2024', '', 'Mansilla'),
(139, '03-01-2024', '', 'Mansilla'),
(140, '04-01-2024', '', 'Mansilla'),
(141, '05-01-2024', '', 'Mansilla'),
(142, '21-01-2024', '', 'Mansilla'),
(143, '22-01-2024', '', 'Mansilla'),
(144, '23-01-2024', '', 'Mansilla'),
(145, '24-01-2024', '', 'Mansilla'),
(146, '25-01-2024', '', 'Mansilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(60) NOT NULL,
  `cliente` varchar(60) NOT NULL,
  `tipo_habitacion` varchar(60) NOT NULL,
  `check_in` varchar(60) NOT NULL,
  `check_out` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `cliente`, `tipo_habitacion`, `check_in`, `check_out`) VALUES
(59, 'Mansilla', 'habitacion_simple', '2024-01-01', '2024-01-05'),
(60, 'Mansilla', 'habitacion_simple', '2024-01-21', '2024-01-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(60) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `contraseña` varchar(60) NOT NULL,
  `img_perfil` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
