-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2023 a las 08:08:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itinerario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE `transporte` (
  `id_ruta` float NOT NULL,
  `origen` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `destino` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `frecuencia_salida` time NOT NULL,
  `tipo_transporte` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transporte`
--

INSERT INTO `transporte` (`id_ruta`, `origen`, `destino`, `frecuencia_salida`, `tipo_transporte`) VALUES
(0, '', '', '00:00:00', ''),
(1.1, 'Universidad Tecnológica de Tecámac', 'Crucero de Reyes', '00:05:00', 'Combi'),
(1.2, 'Universidad Tecnológica de Tecámac', 'Tecámac Paradero', '00:05:00', 'Combi'),
(1.3, 'Universidad Tecnológica Tecámac', 'Tecámac Centro', '00:01:00', 'Combi'),
(1.4, 'Universidad Tecnológica de Tecámac', 'Zumpango Mercado', '00:02:00', 'Combi'),
(1.5, 'Universidad Tecnológica de Tecámac', 'Glorieta Militar', '00:20:00', 'Combi'),
(1.6, 'Universidad Tecnológica Tecámac', 'Hospital IMSS 200', '00:05:00', 'Combi'),
(2.1, 'Tecámac Paradero', 'Universidad Tecnológica Tecámac', '00:02:00', 'Combi'),
(2.2, 'Tecámac Paradero', 'Crucero De Reyes', '00:01:00', 'Combi'),
(2.3, 'Tecámac Paradero', 'Tecámac Centro', '00:01:00', 'Combi'),
(2.4, 'Tecámac Paradero', 'Zumpango Mercado', '00:05:00', 'Combi'),
(2.5, 'Tecámac Paradero', 'Hospital IMSS 200', '00:02:00', 'Combi'),
(3.1, 'Zumpango Mercado', 'Universidad Tecnológica de Tecámac', '00:07:00', 'Combi'),
(3.2, 'Zumpango Mercado', 'Tecámac Paradero', '00:05:00', 'Combi'),
(3.3, 'Zumpango Mercado', 'Hospital IMSS 200', '00:06:00', 'Combi'),
(4.1, 'Glorieta Militar', 'Universidad Tecnológica de Tecámac', '00:10:00', 'Combi'),
(4.2, 'Glorieta Militar', 'Crucero De Reyes', '00:30:00', 'Combi'),
(4.3, 'Glorieta Militar', 'Tecámac Centro', '00:10:00', 'Combi'),
(4.4, 'Universidad Tecnológica de Tecámac', 'Glorieta Militar', '00:15:00', 'Mexibus (direccion Terminal de Pasajeros)'),
(4.5, 'Universidad Tecnológica de Tecámac', 'Ojo De Agua (Terminal)', '00:15:00', 'Mexibus (Direccion Ojo De Agua)'),
(4.6, 'Ojo De Agua (Terminal)', 'Universidad Tecnológica de Tecámac', '00:15:00', 'Mexibus (direccion Terminal De Pasajeros)'),
(4.7, 'Ojo De Agua (Terminal)', 'Universidad Tecnológica de Tecámac', '00:07:00', 'Combi'),
(4.8, 'Ojo De Agua (Terminal)', 'Tecámac Paradero', '00:15:00', 'Mexibus(direccion Terminal de Pasajeros)'),
(4.9, 'Ojo De Agua (Terminal)', 'Tecámac Paradero', '00:07:00', 'Combi'),
(5, 'Ojo De Agua (Terminal)', 'Aeropuerto Internacional Felipe Angeles (AIFA)', '00:15:00', 'Mexibus (direccion Terminal de Pasajeros)'),
(5.1, 'Universidad Tecnológica de Tecámac', 'Crucero de Reyes', '00:12:00', 'Autobus Urbano'),
(5.2, 'Universidad Tecnológica de Tecámac', 'Tecámac Centro', '00:12:00', 'Autobus Urbano'),
(5.3, 'Universidad Tecnológica de Tecámac', 'Hospital IMSS 200', '00:12:00', 'Autobus Urbano'),
(5.4, 'Universidad Tecnológica de Tecámac', 'Ojo De Agua (Terminal)', '00:02:00', 'Combi'),
(5.5, 'Universidad Tecnológica de Tecámac', 'Tizayuca', '00:12:00', 'Autobus Urbano'),
(5.6, 'Tizayuca', 'Universidad Tecnológica de Tecámac', '00:12:00', 'Autobus Urbano');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_ruta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
