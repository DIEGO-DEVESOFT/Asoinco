DROP DATABASE prueba;
-- -----------------------------------------------------
-- Schema bbdd_app_web_compras_linea
-- -----------------------------------------------------
CREATE DATABASE prueba DEFAULT CHARACTER SET utf8 ;
USE prueba ;


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
(1, 1, 'ABARROTES'),
(2, 1, 'FRUVER'),
(3, 1, 'LACTEOS'),
(4, 1, 'CARNES'),
(5, 1, 'ASEO'),
(6, 1, 'POLLO'),
(7, 1, 'GASTOS'),
(8, 1, 'nuevo');

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
(1, 'PAPEL HIGIENICO', 5),
(2, 'JABON DE MANOS', 5),
(3, 'POLLO', 6),
(7, 'ESPINACAS', 1);

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
(1, 1, 'Diego', 'Pinzon', 'Diegos@gmail.com', SHA1('123'), 1);

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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`productos_codigo`),
  ADD KEY `ind_productos_categorias` (`categoria_codigo`);

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
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias` FOREIGN KEY (`categoria_codigo`) REFERENCES `categorias` (`categoria_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles` FOREIGN KEY (`rol_codigo`) REFERENCES `roles` (`rol_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;



