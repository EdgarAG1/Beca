-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-12-2020 a las 03:38:46
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15552161_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass`
--

CREATE TABLE `usuarios_pass` (
  `ID` int(11) NOT NULL,
  `USUARIOS` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_pass`
--

INSERT INTO `usuarios_pass` (`ID`, `USUARIOS`, `PASSWORD`) VALUES
(1, 'Edgar', 'Morat2203');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass2`
--

CREATE TABLE `usuarios_pass2` (
  `ID` int(50) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `A_Paterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `A_Materno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_nacimiento` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_sol` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Edad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Domicilio` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `T_Celular` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `T_Casa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Estudios` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Op_Estudi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_pass2`
--

INSERT INTO `usuarios_pass2` (`ID`, `Nombre`, `A_Paterno`, `A_Materno`, `Fecha_nacimiento`, `Fecha_sol`, `Edad`, `Domicilio`, `Email`, `T_Celular`, `T_Casa`, `Estudios`, `Op_Estudi`) VALUES
(1, 'Edgar Ivan', 'Aguilar', 'Guzman', '2003-03-22', '14-12-2020', '17', 'Calle trigal #42, Colonia el granero, Granjas Cor', 'edgarivan2294@gmail.com', '5515245378', '(551) 524-5378', 'Secundaria', 'Nobel'),
(2, 'Yukio', 'Sanchez', 'Gomez', '2003-02-26', '14-12-2020', '17', 'Calle Republica Mexicana, 55705, Sin numero', 'yukiosanchezgomez@gmail.com', '5617924231', '5586260892', 'Primaria', 'Colegio Cumbres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_pass2`
--
ALTER TABLE `usuarios_pass2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios_pass2`
--
ALTER TABLE `usuarios_pass2`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
