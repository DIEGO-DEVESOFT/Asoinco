drop database prueba;
create database prueba;
use prueba;
--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_codigo` int(11) NOT NULL,
  `usuario_codigo` int(11) NOT NULL,
  `nombre_categoria` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_codigo`, `usuario_codigo`, `nombre_categoria`) VALUES
(1, 1, 'PULPAS'),
(2, 1, 'CARNES'),
(3, 1, 'LACTEOS'),
(4, 1, 'FRUVER'),
(5, 1, 'ABARROTES'),
(6, 1, 'POLLO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedores`
--

CREATE TABLE `comedores` (
  `comedores_codigo` int(50) NOT NULL,
  `nombre_comedor` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `comedores`
--

INSERT INTO `comedores` (`comedores_codigo`, `nombre_comedor`) VALUES
(1, 'BUENA VISTA'),
(2, 'NUEVO CHILE'),
(3, 'SEMILLAS'),
(4, 'SANTA CECILIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `facturas_codigo` int(100) NOT NULL,
  `valor_factura` varchar(80) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `fecha` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `categoria_codigo` int(11) NOT NULL,
  `comedores_codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`facturas_codigo`, `valor_factura`, `fecha`, `categoria_codigo`, `comedores_codigo`) VALUES
(123, '1.455.525', '09/10/2023', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `productos_codigo` int(100) NOT NULL,
  `nombre_producto` varchar(80) NOT NULL,
  `categoria_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productos_codigo`, `nombre_producto`, `categoria_codigo`) VALUES
(1, 'PULPA DE LULO', 1),
(2, 'CARNE RES', 2),
(3, 'LECHE', 3),
(4, 'CEBOLLA CABEZONA', 4),
(5, 'ARROZ', 5),
(6, 'PECHUGA', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_codigo` int(11) NOT NULL,
  `rol_nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_codigo`, `rol_nombre`) VALUES
(1, 'Administrador'),
(2, 'Proveedor'),
(3, 'Empleado'),
(4, 'Aspirante'),
(5, 'Coordinador'),
(6, 'Beneficiario'),
(8, 'Inclusor Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `rol_codigo` int(11) NOT NULL,
  `usuario_codigo` int(11) NOT NULL,
  `usuario_nombre` varchar(45) NOT NULL,
  `usuario_apellido` varchar(45) NOT NULL,
  `usuario_correo` varchar(45) NOT NULL,
  `usuario_pass` varchar(200) NOT NULL,
  `usuario_estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`rol_codigo`, `usuario_codigo`, `usuario_nombre`, `usuario_apellido`, `usuario_correo`, `usuario_pass`, `usuario_estado`) VALUES
(1, 1, 'Diego', 'Pinzon', 'Diegos@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_codigo`),
  ADD KEY `ind_CATEGORIAS_USUARIOS` (`categoria_codigo`),
  ADD KEY `fk_CATEGORIAS_USUARIOS` (`usuario_codigo`);

--
-- Indices de la tabla `comedores`
--
ALTER TABLE `comedores`
  ADD PRIMARY KEY (`comedores_codigo`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`facturas_codigo`),
  ADD KEY `fk_facturas_categorias` (`categoria_codigo`),
  ADD KEY `comedores_codigo` (`comedores_codigo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD KEY `fk_productos_categorias` (`categoria_codigo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_codigo`),
  ADD KEY `ind_usuarios_roles` (`rol_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_CATEGORIAS_USUARIOS` FOREIGN KEY (`usuario_codigo`) REFERENCES `usuarios` (`usuario_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`comedores_codigo`) REFERENCES `comedores` (`comedores_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_facturas_categorias` FOREIGN KEY (`categoria_codigo`) REFERENCES `categorias` (`categoria_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias` FOREIGN KEY (`categoria_codigo`) REFERENCES `categorias` (`categoria_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles` FOREIGN KEY (`rol_codigo`) REFERENCES `roles` (`rol_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

