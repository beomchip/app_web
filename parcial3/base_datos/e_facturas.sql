-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2026 a las 16:43:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e_facturas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`) VALUES
(1, 'laptop'),
(2, 'monitor'),
(3, 'mouse');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulosxfactura`
--

CREATE TABLE `articulosxfactura` (
  `folio_fact` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ;

--
-- Volcado de datos para la tabla `articulosxfactura`
--

INSERT INTO `articulosxfactura` (`folio_fact`, `id_art`, `cantidad`) VALUES
(1, 1, 1),
(1, 1, 1),
(1, 2, 1),
(2, 2, 2),
(3, 3, 5),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `correo_e` varchar(20) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`correo_e`, `rfc`, `nombre`) VALUES
('cliente1@super.com', 'HWHQ010123HIU', 'Cliente1'),
('cliente2@super.com', 'JOKC901123O2S', 'Cliente2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `folio` int(11) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `monto` float NOT NULL
) ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`folio`, `rfc`, `monto`) VALUES
(1, 'HWHQ010123HIU', 22250),
(2, 'HWHQ010123HIU', 879),
(3, 'JOKC901123O2S', 750);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulosxfactura`
--
ALTER TABLE `articulosxfactura`
  ADD KEY `folio_fact` (`folio_fact`,`id_art`),
  ADD KEY `id_art` (`id_art`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`rfc`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `rfc` (`rfc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulosxfactura`
--
ALTER TABLE `articulosxfactura`
  ADD CONSTRAINT `articulosxfactura_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `articulos` (`id`),
  ADD CONSTRAINT `articulosxfactura_ibfk_2` FOREIGN KEY (`folio_fact`) REFERENCES `facturas` (`folio`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`rfc`) REFERENCES `clientes` (`rfc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
