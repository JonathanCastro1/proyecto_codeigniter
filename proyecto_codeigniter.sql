-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2018 a las 03:11:26
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_codeigniter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contabilidad`
--

CREATE TABLE `contabilidad` (
  `id` int(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `ingreso` int(50) NOT NULL,
  `egreso` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contabilidad`
--

INSERT INTO `contabilidad` (`id`, `fecha`, `descripcion`, `ingreso`, `egreso`) VALUES
(2, '31-03-2018', '19 pollos', 5000, 8000),
(7, '02-05-2018', 'actualizo algo ps', 7600, 100),
(8, '03-05-2018', '4 huevos', 800, 1500),
(9, '11-05-2018', '7 tomates', 150, 5678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hubicacion`
--

CREATE TABLE `hubicacion` (
  `id` int(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hubicacion`
--

INSERT INTO `hubicacion` (`id`, `estado`, `ciudad`, `municipio`) VALUES
(1, 'distrito federal', 'caracas', 'libertador'),
(2, 'carabobo', 'valencia', 'ciudad valencia'),
(3, 'zulia', 'maracaibo', 'macacaibo'),
(4, 'aragua', 'araguaita', 'pupusito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `estado`, `ciudad`, `municipio`, `usuario`, `contrasena`) VALUES
(1, 'jonathan', 'castro', 'distrito federal', 'caracas', 'libertador', 'admin', 123),
(10, 'petra', 'perez', 'carabobo', 'valencia', 'ciudad valencia', 'petraica', 456),
(11, 'pepe', 'chacon', 'zulia', 'maracaibo', 'macacaibo', 'pupusito', 777);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contabilidad`
--
ALTER TABLE `contabilidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hubicacion`
--
ALTER TABLE `hubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contabilidad`
--
ALTER TABLE `contabilidad`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `hubicacion`
--
ALTER TABLE `hubicacion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
