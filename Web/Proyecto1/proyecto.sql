-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2017 a las 04:51:27
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id`, `nombre`, `precio`, `descripcion`, `cantidad`) VALUES
(1, 'Terrario alto', 1300, 'Hermoso terrario de sol', 6),
(2, 'Terrario tropical', 1200, 'Terrario de sol', 24),
(3, 'Terrario corazon', 1100, 'Terrario en forma de corazon', 12),
(4, 'Terrario alto con flor', 1300, 'Terrario de sombra con flor', 5),
(5, 'Terrario tropical con Arena', 1000, 'Terrario de sol con planta tropical', 15),
(6, 'Terrario alto con tapa', 1800, 'Terrario con ciclo de agua y carbon activado integrado', 8),
(7, 'Terrario cuadrado', 700, 'Terrario en forma cuadrado', 9),
(8, 'Terrario especial', 1569, 'Terrario con micro ecosistema', 10),
(9, 'Terrario redondo', 856, 'Terrario de forma redondeada', 11),
(10, 'Terrario con bonsai', 1630, 'Hermoso terrario unico con bonsai bebe', 32),
(11, 'Terrario pecera especial', 910, 'Terrario micro ecosistema en una pecera', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apell_Pater` varchar(15) NOT NULL,
  `apell_Mater` varchar(15) DEFAULT NULL,
  `edad` int(2) NOT NULL,
  `clase` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `email`, `nombre`, `apell_Pater`, `apell_Mater`, `edad`, `clase`) VALUES
(1, 'coral', 'dcrg123', 'coral-ro@hotmail.com', 'Coral', 'Rodriguez', 'Garcia', 20, 1),
(2, 'dulce', 'coral789', 'dulcor@gmai.com', 'Dulce', 'Garcia', NULL, 10, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
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
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
