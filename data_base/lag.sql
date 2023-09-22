-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 23:45:05
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lag`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

CREATE TABLE `disponibilidad` (
  `id_disponibilidad` int(8) NOT NULL,
  `tipo_disponibilidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipamiento`
--

CREATE TABLE `equipamiento` (
  `id_equipamiento` int(8) NOT NULL,
  `nombre_eq` varchar(30) NOT NULL,
  `precio_eq` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipamiento_x_modelo`
--

CREATE TABLE `equipamiento_x_modelo` (
  `Id_vehiculo` int(8) NOT NULL,
  `id_equipamiento` int(8) NOT NULL,
  `id_tipo_eq` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo_pago`
--

CREATE TABLE `modo_pago` (
  `id_mod_pago` int(8) NOT NULL,
  `nombre_tipo_pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `nit_suc` varchar(15) NOT NULL,
  `nombre_suc` varchar(30) NOT NULL,
  `direccion_suc` varchar(30) NOT NULL,
  `tel_suc` varchar(10) NOT NULL,
  `correo_suc` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipamiento`
--

CREATE TABLE `tipo_equipamiento` (
  `id_tipo_eq` int(8) NOT NULL,
  `nombre_tipo_eq` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_equipamiento`
--

INSERT INTO `tipo_equipamiento` (`id_tipo_eq`, `nombre_tipo_eq`) VALUES
(1, 'Original'),
(2, 'Adicional'),
(3, 'Promocional'),
(4, 'Preferencial'),
(5, 'Premium'),
(6, 'Gold'),
(7, 'De prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `Id_vehiculo` int(8) NOT NULL,
  `marca_veh` varchar(30) NOT NULL,
  `serie_veh` varchar(30) NOT NULL,
  `modelo_veh` varchar(5) NOT NULL,
  `bastidor_veh` varchar(20) NOT NULL,
  `potencia_veh` varchar(20) NOT NULL,
  `motor_veh` varchar(15) NOT NULL,
  `nro_cilindros_veh` varchar(10) NOT NULL,
  `cilindrada_veh` varchar(10) NOT NULL,
  `precio_veh` int(15) NOT NULL,
  `descuento_veh` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`Id_vehiculo`, `marca_veh`, `serie_veh`, `modelo_veh`, `bastidor_veh`, `potencia_veh`, `motor_veh`, `nro_cilindros_veh`, `cilindrada_veh`, `precio_veh`, `descuento_veh`) VALUES
(1, 'Mini', 'jhon cooper', '2024', 'MINI012020', '231HP', '2,0', '4', '1.998cm3', 216900000, '0'),
(2, 'Renault', 'Sandero', '2024', 'RENAULT202402', '111HP', '1.6', '4', '1.598cm3', 60990000, '0'),
(3, 'Chevrolet', 'Blaser RS', '2023', 'blaserrs32023', '308 HP', '3,6', '6', '2.722cm3', 215650000, '0'),
(4, 'Mazda', 'Touring', '2024', 'touring42024', '153HP', '2,0', '4', '1.998cm3', 113950000, '0'),
(5, 'Ford', 'Mustang GT Premium', '2024', 'ford5mgtp2024', '457HP', '5,0', '8', '5.000cm3', 244490000, '0'),
(6, 'Toyota', 'LAND CRUISER', '2023', 'lcrtyt2023', '409HP', '5,0', '8', '3.445cm3', 600500000, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `cedula_ven` varchar(15) NOT NULL,
  `nombre_ven` varchar(20) NOT NULL,
  `apellido_ven` varchar(20) NOT NULL,
  `correo_ven` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(10) NOT NULL,
  `Id_vehiculo` int(8) NOT NULL,
  `nit:_suc` varchar(15) NOT NULL,
  `cedula_ven` varchar(15) NOT NULL,
  `fecha_venta` date NOT NULL,
  `matricula_vehiculo` varchar(15) NOT NULL,
  `precio_eq_add` int(15) NOT NULL,
  `precio_venta` int(15) NOT NULL,
  `id_mod_pago` int(8) NOT NULL,
  `id_disponibilidad` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  ADD PRIMARY KEY (`id_disponibilidad`);

--
-- Indices de la tabla `equipamiento`
--
ALTER TABLE `equipamiento`
  ADD PRIMARY KEY (`id_equipamiento`);

--
-- Indices de la tabla `equipamiento_x_modelo`
--
ALTER TABLE `equipamiento_x_modelo`
  ADD KEY `Id_marca` (`Id_vehiculo`,`id_equipamiento`,`id_tipo_eq`),
  ADD KEY `id_equipamiento` (`id_equipamiento`),
  ADD KEY `id_tipo_eq` (`id_tipo_eq`);

--
-- Indices de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  ADD PRIMARY KEY (`id_mod_pago`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`nit_suc`);

--
-- Indices de la tabla `tipo_equipamiento`
--
ALTER TABLE `tipo_equipamiento`
  ADD PRIMARY KEY (`id_tipo_eq`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`Id_vehiculo`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`cedula_ven`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_marca` (`Id_vehiculo`,`nit:_suc`,`cedula_ven`,`id_mod_pago`,`id_disponibilidad`),
  ADD KEY `nit:_suc` (`nit:_suc`),
  ADD KEY `id_mod_pago` (`id_mod_pago`),
  ADD KEY `id_disponibilidad` (`id_disponibilidad`),
  ADD KEY `cedula_ven` (`cedula_ven`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  MODIFY `id_disponibilidad` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipamiento`
--
ALTER TABLE `equipamiento`
  MODIFY `id_equipamiento` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  MODIFY `id_mod_pago` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_equipamiento`
--
ALTER TABLE `tipo_equipamiento`
  MODIFY `id_tipo_eq` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `Id_vehiculo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipamiento_x_modelo`
--
ALTER TABLE `equipamiento_x_modelo`
  ADD CONSTRAINT `equipamiento_x_modelo_ibfk_1` FOREIGN KEY (`Id_vehiculo`) REFERENCES `vehiculos` (`Id_vehiculo`),
  ADD CONSTRAINT `equipamiento_x_modelo_ibfk_2` FOREIGN KEY (`id_equipamiento`) REFERENCES `equipamiento` (`id_equipamiento`),
  ADD CONSTRAINT `equipamiento_x_modelo_ibfk_3` FOREIGN KEY (`id_tipo_eq`) REFERENCES `tipo_equipamiento` (`id_tipo_eq`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`Id_vehiculo`) REFERENCES `vehiculos` (`Id_vehiculo`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`nit:_suc`) REFERENCES `sucursal` (`nit_suc`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_mod_pago`) REFERENCES `modo_pago` (`id_mod_pago`),
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`id_disponibilidad`) REFERENCES `disponibilidad` (`id_disponibilidad`),
  ADD CONSTRAINT `ventas_ibfk_5` FOREIGN KEY (`cedula_ven`) REFERENCES `vendedores` (`cedula_ven`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
