-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2019 a las 04:27:48
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
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `id_cuestionario` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `estudios` varchar(25) NOT NULL,
  `puesto` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `contrato` varchar(20) NOT NULL,
  `personal` varchar(20) NOT NULL,
  `jornada` varchar(15) NOT NULL,
  `experencia` varchar(25) NOT NULL,
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
  `gq1` int(2) NOT NULL,
  `gq2` int(2) NOT NULL,
  `gq3` int(2) NOT NULL,
  `gq4` int(2) NOT NULL,
  `gq5` int(2) NOT NULL,
  `gq6` int(2) NOT NULL,
  `gq7` int(2) NOT NULL,
  `gq8` int(2) NOT NULL,
  `gq9` int(2) NOT NULL,
  `gq10` int(2) NOT NULL,
  `gq11` int(2) NOT NULL,
  `gq12` int(2) NOT NULL,
  `gq13` int(2) NOT NULL,
  `gq14` int(2) NOT NULL,
  `gq15` int(2) NOT NULL,
  `gq16` int(2) NOT NULL,
  `gq17` int(2) NOT NULL,
  `gq18` int(2) NOT NULL,
  `gq19` int(2) NOT NULL,
  `gq20` int(2) NOT NULL,
  `gq21` int(2) NOT NULL,
  `gq22` int(2) NOT NULL,
  `gq23` int(2) NOT NULL,
  `gq24` int(2) NOT NULL,
  `gq25` int(2) NOT NULL,
  `gq26` int(2) NOT NULL,
  `gq27` int(2) NOT NULL,
  `gq28` int(2) NOT NULL,
  `gq29` int(2) NOT NULL,
  `gq30` int(2) NOT NULL,
  `gq31` int(2) NOT NULL,
  `gq32` int(2) NOT NULL,
  `gq33` int(2) NOT NULL,
  `gq34` int(2) NOT NULL,
  `gq35` int(2) NOT NULL,
  `gq36` int(2) NOT NULL,
  `gq37` int(2) NOT NULL,
  `gq38` int(2) NOT NULL,
  `gq39` int(2) NOT NULL,
  `gq40` int(2) NOT NULL,
  `gqif1` varchar(2) NOT NULL,
  `gq41` int(2) NOT NULL,
  `gq42` int(2) NOT NULL,
  `gq43` int(2) NOT NULL,
  `gqif2` varchar(2) NOT NULL,
  `gq44` int(2) NOT NULL,
  `gq45` int(2) NOT NULL,
  `gq46` int(2) NOT NULL,
  `gq47` int(2) NOT NULL,
  `gq48` int(2) NOT NULL,
  `gq49` int(2) NOT NULL,
  `gq50` int(2) NOT NULL,
  `gq51` int(2) NOT NULL,
  `gq52` int(2) NOT NULL,
  `gq53` int(2) NOT NULL,
  `gq54` int(2) NOT NULL,
  `gq55` int(2) NOT NULL,
  `gq56` int(2) NOT NULL,
  `gq57` int(2) NOT NULL,
  `gq58` int(2) NOT NULL,
  `gq59` int(2) NOT NULL,
  `gq60` int(2) NOT NULL,
  `gq61` int(2) NOT NULL,
  `gq62` int(2) NOT NULL,
  `gq63` int(2) NOT NULL,
  `gq64` int(2) NOT NULL,
  `gq65` int(2) NOT NULL,
  `gq66` int(2) NOT NULL,
  `gq67` int(2) NOT NULL,
  `gq68` int(2) NOT NULL,
  `gq69` int(2) NOT NULL,
  `gq70` int(2) NOT NULL,
  `gq71` int(2) NOT NULL,
  `gq72` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`id_cuestionario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `id_cuestionario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
