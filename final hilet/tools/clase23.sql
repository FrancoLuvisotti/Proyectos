-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2022 a las 15:15:36
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
-- Base de datos: `clase23`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `gasto_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `gasto` varchar(50) DEFAULT NULL,
  `tipo_gasto` varchar(50) DEFAULT NULL,
  `importe` float(10,2) DEFAULT NULL,
  `imp_total` float(10,2) DEFAULT NULL,
  `fechayhora` datetime DEFAULT NULL,
  `detalle` varchar(300) DEFAULT NULL,
  `medio_pago` varchar(50) DEFAULT NULL,
  `comercio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`gasto_id`, `usuario_id`, `gasto`, `tipo_gasto`, `importe`, `imp_total`, `fechayhora`, `detalle`, `medio_pago`, `comercio`) VALUES
(2, 2, 'Luz', 'Servicios', 3200.00, NULL, '2022-10-03 21:42:26', NULL, NULL, NULL),
(4, 2, 'pan', 'comida', 250.00, NULL, NULL, NULL, NULL, NULL),
(5, 1, 'Agua', 'comida', 1700.00, NULL, NULL, NULL, NULL, NULL),
(7, 1, 'Luz', 'servicios', 9800.00, NULL, NULL, NULL, NULL, NULL),
(9, 1, 'Luz', 'servicios', 2000.00, NULL, NULL, NULL, NULL, NULL),
(12, 1, 'Pan', 'comida', 150.00, NULL, NULL, NULL, NULL, NULL),
(13, 1, 'Agua', 'comida', 50.00, NULL, NULL, NULL, NULL, NULL),
(14, 1, 'pan', 'comida', 200.00, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `ingreso_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `ingreso` varchar(50) DEFAULT NULL,
  `tipo_ingreso` varchar(50) DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `fechayhora` datetime DEFAULT NULL,
  `detalle` varchar(300) DEFAULT NULL,
  `medio_pago` varchar(50) DEFAULT NULL,
  `comercio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`ingreso_id`, `usuario_id`, `ingreso`, `tipo_ingreso`, `importe`, `fechayhora`, `detalle`, `medio_pago`, `comercio`) VALUES
(1, 1, 'trabajo', 'salario', 20000, NULL, NULL, NULL, NULL),
(2, 1, 'trabajo electrico', 'trabajos', 9894, NULL, NULL, NULL, NULL),
(3, 2, 'Sorteo', 'otros', 7000, NULL, NULL, NULL, NULL),
(5, 1, 'changa', 'trab-parcial', 3000, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `pass`, `login`, `logout`) VALUES
(1, 'admin', '1234', '2022-10-17 20:41:28', '2022-10-17 20:41:28'),
(2, 'usuario1', '1234', '2022-10-17 20:41:28', '2022-10-17 20:41:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`gasto_id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`ingreso_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `gasto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `ingreso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
