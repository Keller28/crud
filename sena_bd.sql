-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2022 a las 00:19:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprindices`
--

CREATE TABLE `aprindices` (
  `apre_id` int(10) NOT NULL,
  `apre_tipoid` char(3) NOT NULL,
  `apre_numid` char(20) NOT NULL,
  `apre_nombres` char(60) NOT NULL,
  `apre_apellidos` char(60) NOT NULL,
  `apre_direccion` char(80) NOT NULL,
  `apre_telefono` char(20) NOT NULL,
  `apre_ficha` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aprindices`
--

INSERT INTO `aprindices` (`apre_id`, `apre_tipoid`, `apre_numid`, `apre_nombres`, `apre_apellidos`, `apre_direccion`, `apre_telefono`, `apre_ficha`) VALUES
(1, 'CC', '1045573223', 'Optimus', 'Prime', 'calle 22', '3014356766', 2012),
(2, 'TI', '1078965774', 'Goku', 'Son', 'cll 10', '3014567365', 1122);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `ficha_numero` int(10) NOT NULL,
  `ficha_programa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`ficha_numero`, `ficha_programa`) VALUES
(1122, 2),
(2012, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `programa_id` int(10) NOT NULL,
  `programa_nombre` char(20) NOT NULL,
  `programa_tipo` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`programa_id`, `programa_nombre`, `programa_tipo`) VALUES
(1, 'Adsi', 'tecnologo'),
(3, 'Adso', 'tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposprograma`
--

CREATE TABLE `tiposprograma` (
  `tiposp_id` int(10) NOT NULL,
  `tiposp_tipo` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposprograma`
--

INSERT INTO `tiposprograma` (`tiposp_id`, `tiposp_tipo`) VALUES
(1, 'presencial'),
(2, 'virtual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usua_id` int(10) NOT NULL,
  `usua_nomuser` char(50) NOT NULL,
  `usua_contra` varchar(20) NOT NULL,
  `usua_tipo` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usua_id`, `usua_nomuser`, `usua_contra`, `usua_tipo`) VALUES
(1, 'ADMIN', '12345', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprindices`
--
ALTER TABLE `aprindices`
  ADD PRIMARY KEY (`apre_id`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`ficha_numero`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`programa_id`);

--
-- Indices de la tabla `tiposprograma`
--
ALTER TABLE `tiposprograma`
  ADD PRIMARY KEY (`tiposp_id`),
  ADD KEY `tiposp_tipo` (`tiposp_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usua_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprindices`
--
ALTER TABLE `aprindices`
  MODIFY `apre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `programa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiposprograma`
--
ALTER TABLE `tiposprograma`
  MODIFY `tiposp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usua_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
