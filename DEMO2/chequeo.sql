-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2017 a las 11:38:38
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reloj1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequeo`
--

CREATE TABLE `chequeo` (
  `id` int(12) NOT NULL,
  `nombre` varchar(12) NOT NULL,
  `email` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `horaComida` time NOT NULL,
  `regresoComida` time NOT NULL,
  `horaS` time NOT NULL,
  `latitud` varchar(12) NOT NULL,
  `longitud` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chequeo`
--

INSERT INTO `chequeo` (`id`, `nombre`, `email`, `fecha`, `hora`, `horaComida`, `regresoComida`, `horaS`, `latitud`, `longitud`) VALUES
(23, 'Miguel', 'ahuatzi90@gmail', '2005-07-17', '15:07:16', '00:00:00', '00:00:00', '00:00:00', '-123454.2345', '-98.18917809');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
