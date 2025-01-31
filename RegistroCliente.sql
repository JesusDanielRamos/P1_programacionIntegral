\-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-01-2025 a las 18:12:19
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
-- Base de datos: `aeromexico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegistroCliente`
--

CREATE TABLE `RegistroCliente` (
  `ID` int(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `IDboleto` int(10) NOT NULL,
  `partida` varchar(40) NOT NULL,
  `destino` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `RegistroCliente`
--

INSERT INTO `RegistroCliente` (`ID`, `Nombre`, `IDboleto`, `partida`, `destino`) VALUES
(1, 'Cheoe', 2223, 'Juarez', 'Tampico'),
(2, 'Juan', 220341, 'Tampico', 'Cancun'),
(3, 'Lucas', 2123, 'Juarez', 'Tampico '),
(4, 'Lucas', 2123, 'Juarez', 'Tampico ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `RegistroCliente`
--
ALTER TABLE `RegistroCliente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `RegistroCliente`
--
ALTER TABLE `RegistroCliente`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
