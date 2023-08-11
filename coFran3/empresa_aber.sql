-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-08-2023 a las 00:07:00
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa_aber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opi_clientes`
--

CREATE TABLE `opi_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nom_ape` varchar(1000) NOT NULL,
  `opinion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `opi_clientes`
--

INSERT INTO `opi_clientes` (`id_cliente`, `nom_ape`, `opinion`) VALUES
(1, 'sfvgsrt', 'evtdbvft'),
(2, 'Franco Salvatierra', 'me gusto la calidad de las aberturas'),
(3, 'valentin', 'me atendieron mla'),
(4, 'vrg', 'eht'),
(5, 'ere54w', 'rhedtg'),
(6, 'martin', 'me gusto el producto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `opi_clientes`
--
ALTER TABLE `opi_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `opi_clientes`
--
ALTER TABLE `opi_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
