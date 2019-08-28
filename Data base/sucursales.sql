-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2019 a las 05:47:53
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL,
  `snombre` varchar(100) NOT NULL,
  `empresa` int(11) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `giro` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ndireccion` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `cp` int(10) NOT NULL,
  `Colonia` varchar(100) NOT NULL,
  `nempleados` int(20) NOT NULL,
  `EstadoE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucursal`, `snombre`, `empresa`, `rfc`, `giro`, `correo`, `telefono`, `direccion`, `ndireccion`, `estado`, `ciudad`, `cp`, `Colonia`, `nempleados`, `EstadoE`) VALUES
(1, 'Desarrollo', 2, 'MEGR950527M06', 'Desarrollo de Software', 'Jmendozag00@gmail.com', '6621039509', 'Av. tecnologico', 1, 'Sonora', 'Hermosillo', 83170, 'tecnologico', 2147483647, '1500'),
(4, 'ith', 1, 'asdas12', 'asdasd', 'ad@asd.com', '1365456', 'asdsa', 2, 'asd', 'asda', 125545, 'asda', 1200, 'w');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `Relempresa` (`empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `Relempresa` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`id_Empresa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
