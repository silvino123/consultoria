-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2019 a las 02:03:36
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

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
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_Area` int(11) NOT NULL,
  `anombre` varchar(100) NOT NULL,
  `sucursales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_Area`, `anombre`, `sucursales`) VALUES
(4, 'Calidad2', 1),
(10, 'asds', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `id_cuestionario` int(11) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `edad` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `estudios` varchar(25) NOT NULL,
  `puesto` varchar(30) NOT NULL,
  `area` int(11) NOT NULL,
  `contrato` varchar(20) NOT NULL,
  `personal` varchar(20) NOT NULL,
  `jornada` varchar(15) NOT NULL,
  `experiencia` varchar(25) NOT NULL,
  `dependientes` varchar(10) NOT NULL,
  `general` varchar(20) NOT NULL,
  `q1` varchar(5) NOT NULL,
  `q2` varchar(5) NOT NULL,
  `q3` varchar(5) NOT NULL,
  `q4` varchar(5) NOT NULL,
  `q5` varchar(5) NOT NULL,
  `q6` varchar(5) NOT NULL,
  `q7` varchar(5) NOT NULL,
  `q8` varchar(5) NOT NULL,
  `q9` varchar(5) NOT NULL,
  `q10` varchar(5) NOT NULL,
  `q11` varchar(5) NOT NULL,
  `q12` varchar(5) NOT NULL,
  `q13` varchar(5) NOT NULL,
  `q14` varchar(5) NOT NULL,
  `q15` varchar(5) NOT NULL,
  `q16` varchar(5) NOT NULL,
  `q17` varchar(5) NOT NULL,
  `q18` varchar(5) NOT NULL,
  `q19` varchar(5) NOT NULL,
  `q20` varchar(5) NOT NULL,
  `gq1` int(2) DEFAULT NULL,
  `gq2` int(2) DEFAULT NULL,
  `gq3` int(2) DEFAULT NULL,
  `gq4` int(2) DEFAULT NULL,
  `gq5` int(2) DEFAULT NULL,
  `gq6` int(2) DEFAULT NULL,
  `gq7` int(2) DEFAULT NULL,
  `gq8` int(2) DEFAULT NULL,
  `gq9` int(2) DEFAULT NULL,
  `gq10` int(2) DEFAULT NULL,
  `gq11` int(2) DEFAULT NULL,
  `gq12` int(2) DEFAULT NULL,
  `gq13` int(2) DEFAULT NULL,
  `gq14` int(2) DEFAULT NULL,
  `gq15` int(2) DEFAULT NULL,
  `gq16` int(2) DEFAULT NULL,
  `gq17` int(2) DEFAULT NULL,
  `gq18` int(2) DEFAULT NULL,
  `gq19` int(2) DEFAULT NULL,
  `gq20` int(2) DEFAULT NULL,
  `gq21` int(2) DEFAULT NULL,
  `gq22` int(2) DEFAULT NULL,
  `gq23` int(2) DEFAULT NULL,
  `gq24` int(2) DEFAULT NULL,
  `gq25` int(2) DEFAULT NULL,
  `gq26` int(2) DEFAULT NULL,
  `gq27` int(2) DEFAULT NULL,
  `gq28` int(2) DEFAULT NULL,
  `gq29` int(2) DEFAULT NULL,
  `gq30` int(2) DEFAULT NULL,
  `gq31` int(2) DEFAULT NULL,
  `gq32` int(2) DEFAULT NULL,
  `gq33` int(2) DEFAULT NULL,
  `gq34` int(2) DEFAULT NULL,
  `gq35` int(2) DEFAULT NULL,
  `gq36` int(2) DEFAULT NULL,
  `gq37` int(2) DEFAULT NULL,
  `gq38` int(2) DEFAULT NULL,
  `gq39` int(2) DEFAULT NULL,
  `gq40` int(2) DEFAULT NULL,
  `gqif1` varchar(2) NOT NULL,
  `gq41` int(2) DEFAULT NULL,
  `gq42` int(2) DEFAULT NULL,
  `gq43` int(2) DEFAULT NULL,
  `gqif2` varchar(2) NOT NULL,
  `gq44` int(2) DEFAULT NULL,
  `gq45` int(2) DEFAULT NULL,
  `gq46` int(2) DEFAULT NULL,
  `gq47` int(2) DEFAULT NULL,
  `gq48` int(2) DEFAULT NULL,
  `gq49` int(2) DEFAULT NULL,
  `gq50` int(2) DEFAULT NULL,
  `gq51` int(2) DEFAULT NULL,
  `gq52` int(2) DEFAULT NULL,
  `gq53` int(2) DEFAULT NULL,
  `gq54` int(2) DEFAULT NULL,
  `gq55` int(2) DEFAULT NULL,
  `gq56` int(2) DEFAULT NULL,
  `gq57` int(2) DEFAULT NULL,
  `gq58` int(2) DEFAULT NULL,
  `gq59` int(2) DEFAULT NULL,
  `gq60` int(2) DEFAULT NULL,
  `gq61` int(2) DEFAULT NULL,
  `gq62` int(2) DEFAULT NULL,
  `gq63` int(2) DEFAULT NULL,
  `gq64` int(2) DEFAULT NULL,
  `gq65` int(2) DEFAULT NULL,
  `gq66` int(2) DEFAULT NULL,
  `gq67` int(2) DEFAULT NULL,
  `gq68` int(2) DEFAULT NULL,
  `gq69` int(2) DEFAULT NULL,
  `gq70` int(2) DEFAULT NULL,
  `gq71` int(2) DEFAULT NULL,
  `gq72` int(2) DEFAULT NULL,
  `id_consultor` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_sucursal` int(11) NOT NULL,
  `tipo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuestionario`
--

INSERT INTO `cuestionario` (`id_cuestionario`, `sexo`, `edad`, `estado`, `estudios`, `puesto`, `area`, `contrato`, `personal`, `jornada`, `experiencia`, `dependientes`, `general`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `gq1`, `gq2`, `gq3`, `gq4`, `gq5`, `gq6`, `gq7`, `gq8`, `gq9`, `gq10`, `gq11`, `gq12`, `gq13`, `gq14`, `gq15`, `gq16`, `gq17`, `gq18`, `gq19`, `gq20`, `gq21`, `gq22`, `gq23`, `gq24`, `gq25`, `gq26`, `gq27`, `gq28`, `gq29`, `gq30`, `gq31`, `gq32`, `gq33`, `gq34`, `gq35`, `gq36`, `gq37`, `gq38`, `gq39`, `gq40`, `gqif1`, `gq41`, `gq42`, `gq43`, `gqif2`, `gq44`, `gq45`, `gq46`, `gq47`, `gq48`, `gq49`, `gq50`, `gq51`, `gq52`, `gq53`, `gq54`, `gq55`, `gq56`, `gq57`, `gq58`, `gq59`, `gq60`, `gq61`, `gq62`, `gq63`, `gq64`, `gq65`, `gq66`, `gq67`, `gq68`, `gq69`, `gq70`, `gq71`, `gq72`, `id_consultor`, `id_empresa`, `fecha`, `id_sucursal`, `tipo`) VALUES
(1, 'Masculino', ' 15 a 19', 'Cadado', 'Primaria', 'tecnico', 4, 'Temporal', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'Si', 'No', 'No', 'No', 'No', 'Si', 'Si', 'Si', 'No', 0, 2, 1, 2, 3, 2, 1, 1, 3, 2, 3, 3, 2, 1, 0, 0, 0, 0, 1, 2, 3, 2, 1, 2, 3, 1, 1, 1, 3, 3, 2, 1, 2, 2, 1, 1, 1, 1, 2, 3, 'Si', 2, 2, 1, 'Si', 1, 2, 2, 0, 0, 3, 2, 1, 2, 2, 2, 1, 2, 1, 2, 3, 3, 1, 3, 2, 3, 1, 2, 3, 2, 3, 4, 3, 2, 5, 2, '2019-09-04', 1, 'GRIII'),
(3, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'aaa', 1, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 3, 4, 3, 3, 3, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 3, 3, 4, 4, 4, 4, 3, 'Si', 3, 4, 4, 'Si', 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, '2019-09-06', 1, 'GRIII'),
(4, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'ssss', 1, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 'Si', 4, 4, 4, 'Si', 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, '2019-09-06', 4, 'GRIII'),
(5, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'sssss', 4, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 'Si', 4, 4, 4, 'Si', 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 2, 1, '2019-09-06', 4, 'GRIII'),
(18, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'sss', 10, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 'No', 0, 0, 0, 'No', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 2, '2019-09-06', 1, 'GRII'),
(19, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'ssss', 10, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 'No', 0, 0, 0, 'No', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 2, '2019-09-06', 1, 'GRII'),
(20, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'qqq', 4, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 'No', 0, 0, 0, 'No', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 2, '2019-09-06', 4, 'GRII'),
(21, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'ssss', 1, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 'No', 0, 0, 0, 'No', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 2, '2019-09-07', 1, 'GRII'),
(22, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'sss', 10, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 'No', 0, 0, 0, 'No', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, '2019-09-07', 4, 'GRII'),
(23, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'xxxx', 4, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 0, 4, 4, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No', 0, 0, 0, 'No', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, '2019-09-07', 1, 'GRIII'),
(24, 'Masculino', '15 a 19', 'Casado', 'Primaria', 'sss', 4, 'Tiempo Completo', 'Sindicalizado', 'Nocturno', 'Menos de 6 meses', '1', 'Menos de 6 meses', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 0, 4, 4, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No', 0, 0, 0, 'No', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, '2019-09-07', 1, 'GRIII');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_Empresa` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_Empresa`, `Nombre`) VALUES
(1, 'plasticos del sur'),
(2, 'sycsoft');

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
  `EstadoE` varchar(30) NOT NULL,
  `documento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucursal`, `snombre`, `empresa`, `rfc`, `giro`, `correo`, `telefono`, `direccion`, `ndireccion`, `estado`, `ciudad`, `cp`, `Colonia`, `nempleados`, `EstadoE`, `documento`) VALUES
(1, 'Desarrollo', 2, 'MEGR950527M06', 'Desarrollo de Software', 'Jmendozag00@gmail.com', '6621039509', 'Av. tecnologico', 1, 'Sonora', 'Hermosillo', 83170, 'tecnologico', 60, 'Encuestando', 'AvisoPrivacidad.pdf'),
(4, 'ith', 1, 'asdas12', 'asdasd', 'ad@asd.com', '1365456', 'asdsa', 2, 'asd', 'asda', 125545, 'asda', 30, 'Encuestando', 'Fichaevaluacion.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `id_sucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `password`, `tipo`, `id_sucursal`) VALUES
(1, 'Linda', 'linda@gmail.com', '123123', 'Administrador', 1),
(2, 'Elisaa', 'elisaBaezh@gmail.com', '123456', 'Consultor', 1),
(3, 'ith', 'ith@ith.mx', '1234', 'Empresa', 4),
(5, 'username', 'user@gmail.com', '1111', 'Consultor', 4),
(6, 'Silvino2', 'alexmillanes30@gmail.com', '1234', 'Empresa', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_Area`),
  ADD KEY `Relsucursales` (`sucursales`);

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`id_cuestionario`),
  ADD KEY `relconsultor` (`id_consultor`),
  ADD KEY `relsuc` (`id_sucursal`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_Empresa`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `Relempresa` (`empresa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD KEY `FK_sucursal` (`id_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_Area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `id_cuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_Empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `Relsucursales` FOREIGN KEY (`sucursales`) REFERENCES `sucursales` (`id_sucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD CONSTRAINT `relconsultor` FOREIGN KEY (`id_consultor`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relsuc` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `Relempresa` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`id_Empresa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
