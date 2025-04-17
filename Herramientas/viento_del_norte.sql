-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2025 a las 17:22:26
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
-- Base de datos: `viento_del_norte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `NombreCategoria` varchar(25) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `NombreCategoria`, `Descripcion`) VALUES
(1, 'Lácteos', 'Quesos, cremas y productos derivados de la leche'),
(2, 'Tortillas y Masas', 'Masa para tortillas, tamales y antojitos'),
(3, 'Salsas y Condimentos', 'Salsas tradicionales y especias'),
(4, 'Carnes Frías', 'Chorizo, jamón y embutidos'),
(5, 'Panadería', 'Pan tradicional y dulce'),
(6, 'Botanas', 'Papas, cacahuates y frituras'),
(7, 'Café y Té', 'Café de grano y tés aromáticos'),
(8, 'Licores', 'Bebidas alcohólicas tradicionales'),
(9, 'Artesanías', 'Productos hechos a mano'),
(10, 'Limpieza', 'Productos de limpieza del hogar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ClienteID` int(11) NOT NULL,
  `NombreCliente` varchar(50) DEFAULT NULL,
  `NombreContacto` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Ciudad` varchar(20) DEFAULT NULL,
  `CodigoPostal` varchar(10) DEFAULT NULL,
  `Pais` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ClienteID`, `NombreCliente`, `NombreContacto`, `Direccion`, `Ciudad`, `CodigoPostal`, `Pais`) VALUES
(1, 'Restaurante El Cardenal', 'Fernando Gutiérrez', 'Calle Palma 23', 'CDMX', '06000', 'México'),
(2, 'Tienda La Esquina', 'Carmen Rojas', 'Av. Hidalgo 456', 'Querétaro', '76000', 'México'),
(3, 'Hotel Mayaland', 'Roberto Castillo', 'Carretera Mérida-Cancún Km 45', 'Yucatán', '97751', 'México'),
(4, 'Cafetería El Jarocho', 'Lucía Méndez', 'Av. Universidad 780', 'Veracruz', '91700', 'México'),
(5, 'Mercado de San Juan', 'Javier Ortega', 'Calle Ernesto Pugibet 21', 'CDMX', '06050', 'México'),
(6, 'Tianguis Cultural del Chopo', 'Alejandra Núñez', 'Calle Aldama 211', 'CDMX', '06470', 'México'),
(7, 'Supermercados Chedraui', 'Luis Ángel Pérez', 'Plaza Las Américas', 'Xalapa', '91194', 'México'),
(8, 'Tienda de Conveniencia OXXO', 'Marco Sánchez', 'Blvd. Benito Juárez 2345', 'Tijuana', '22000', 'México'),
(9, 'Casa de Eventos Hacienda', 'Patricia Morales', 'Carretera a Dolores 12', 'San Miguel', '37700', 'México'),
(10, 'Comedor Industrial Santa Fe', 'Ricardo Chávez', 'Av. Vasco de Quiroga 3800', 'CDMX', '01219', 'México'),
(11, 'Escuela Gastronómica Mexicana', 'Chef Alonso', 'Calle Saburit 45', 'Puebla', '72530', 'México'),
(12, 'Tienda de Vinos La Europea', 'Sara Cortés', 'Av. Patriotismo 45', 'CDMX', '03810', 'México'),
(13, 'Abarrotes Don Ramón', 'Ramón Valdez', 'Callejón del Diablo 67', 'Guadalajara', '44100', 'México'),
(14, 'Hotel Boutique Azul', 'Mariana Cruz', 'Callejón de la Luz 3', 'Oaxaca', '68000', 'México'),
(15, 'Cafetería El Moro', 'Diego Jiménez', 'Eje Central Lázaro Cárdenas 42', 'CDMX', '06000', 'México');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallespedido`
--

CREATE TABLE `detallespedido` (
  `DetallePedidoID` int(11) NOT NULL,
  `PedidoID` int(11) DEFAULT NULL,
  `ProductoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallespedido`
--

INSERT INTO `detallespedido` (`DetallePedidoID`, `PedidoID`, `ProductoID`, `Cantidad`) VALUES
(1, 1, 5, 2),
(2, 1, 12, 5),
(3, 1, 8, 3),
(4, 2, 3, 4),
(5, 2, 17, 2),
(6, 3, 11, 10),
(7, 3, 19, 5),
(8, 4, 7, 3),
(9, 4, 15, 2),
(10, 4, 9, 4),
(11, 5, 2, 6),
(12, 5, 14, 2),
(13, 6, 6, 1),
(14, 6, 13, 3),
(15, 7, 10, 4),
(16, 7, 18, 2),
(17, 8, 4, 8),
(18, 8, 16, 1),
(19, 9, 1, 3),
(20, 9, 20, 5),
(21, 10, 5, 2),
(22, 10, 12, 4),
(23, 11, 7, 3),
(24, 11, 9, 2),
(25, 11, 15, 3),
(26, 12, 18, 6),
(27, 12, 3, 2),
(28, 13, 14, 4),
(29, 13, 6, 1),
(30, 14, 11, 5),
(31, 14, 19, 3),
(32, 15, 8, 10),
(33, 15, 17, 4),
(34, 16, 2, 5),
(35, 16, 10, 2),
(36, 17, 13, 3),
(37, 17, 5, 4),
(38, 18, 16, 2),
(39, 18, 7, 3),
(40, 19, 4, 6),
(41, 19, 12, 4),
(42, 20, 9, 5),
(43, 20, 15, 2),
(44, 21, 1, 3),
(45, 21, 18, 4),
(46, 22, 3, 6),
(47, 22, 14, 2),
(48, 23, 6, 1),
(49, 23, 11, 5),
(50, 24, 19, 3),
(51, 24, 8, 4),
(52, 25, 17, 2),
(53, 25, 5, 3),
(54, 26, 10, 4),
(55, 26, 2, 2),
(56, 27, 15, 5),
(57, 27, 7, 3),
(58, 28, 12, 6),
(59, 28, 16, 1),
(60, 29, 9, 4),
(61, 29, 13, 2),
(62, 30, 4, 8),
(63, 30, 20, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `EmpleadoID` int(11) NOT NULL,
  `Apellido` varchar(15) DEFAULT NULL,
  `Nombre` varchar(15) DEFAULT NULL,
  `FechaNacimiento` datetime DEFAULT NULL,
  `Foto` varchar(25) DEFAULT NULL,
  `Notas` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`EmpleadoID`, `Apellido`, `Nombre`, `FechaNacimiento`, `Foto`, `Notas`) VALUES
(1, 'Hernández', 'Gabriela', '1988-03-12 00:00:00', 'gaby.jpg', 'Gerente de ventas'),
(2, 'Torres', 'Oscar', '1995-11-25 00:00:00', 'oscar.jpg', 'Almacenista'),
(3, 'Vargas', 'Isabel', '1992-07-18 00:00:00', 'isa.jpg', 'Atención a proveedores'),
(4, 'Castro', 'Rodrigo', '1980-09-05 00:00:00', 'rodrigo.jpg', 'Logística'),
(5, 'Morales', 'Adriana', '1998-02-28 00:00:00', 'adri.jpg', 'Atención telefónica'),
(6, 'Jiménez', 'Pablo', '1993-12-15 00:00:00', 'pablo.jpg', 'Soporte técnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `PedidoID` int(11) NOT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `EmpleadoID` int(11) DEFAULT NULL,
  `FechaPedido` datetime DEFAULT NULL,
  `TransportistaID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`PedidoID`, `ClienteID`, `EmpleadoID`, `FechaPedido`, `TransportistaID`) VALUES
(1, 5, 3, '2024-01-05 00:00:00', 2),
(2, 2, 2, '2024-01-07 00:00:00', 1),
(3, 8, 4, '2024-01-09 00:00:00', 3),
(4, 12, 1, '2024-01-12 00:00:00', 4),
(5, 3, 3, '2024-01-15 00:00:00', 5),
(6, 7, 2, '2024-01-18 00:00:00', 2),
(7, 15, 4, '2024-01-20 00:00:00', 1),
(8, 4, 1, '2024-01-22 00:00:00', 3),
(9, 11, 3, '2024-01-25 00:00:00', 4),
(10, 6, 2, '2024-01-28 00:00:00', 5),
(11, 9, 4, '2024-02-01 00:00:00', 2),
(12, 13, 1, '2024-02-03 00:00:00', 1),
(13, 10, 3, '2024-02-06 00:00:00', 3),
(14, 14, 2, '2024-02-09 00:00:00', 4),
(15, 1, 4, '2024-02-12 00:00:00', 5),
(16, 5, 1, '2024-02-15 00:00:00', 2),
(17, 2, 3, '2024-02-18 00:00:00', 1),
(18, 8, 2, '2024-02-20 00:00:00', 3),
(19, 12, 4, '2024-02-23 00:00:00', 4),
(20, 3, 1, '2024-02-25 00:00:00', 5),
(21, 7, 3, '2024-02-28 00:00:00', 2),
(22, 15, 2, '2024-03-01 00:00:00', 1),
(23, 4, 4, '2024-03-04 00:00:00', 3),
(24, 11, 1, '2024-03-07 00:00:00', 4),
(25, 6, 3, '2024-03-10 00:00:00', 5),
(26, 9, 2, '2024-03-13 00:00:00', 2),
(27, 13, 4, '2024-03-16 00:00:00', 1),
(28, 10, 1, '2024-03-19 00:00:00', 3),
(29, 14, 3, '2024-03-22 00:00:00', 4),
(30, 1, 2, '2024-03-25 00:00:00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ProductoID` int(11) NOT NULL,
  `NombreProducto` varchar(50) DEFAULT NULL,
  `ProveedorID` int(11) DEFAULT NULL,
  `CategoriaID` int(11) DEFAULT NULL,
  `Unidad` varchar(25) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ProductoID`, `NombreProducto`, `ProveedorID`, `CategoriaID`, `Unidad`, `Precio`) VALUES
(1, 'Mole poblano en pasta', 5, 4, 'Frasco 500g', 89.90),
(2, 'Queso fresco ranchero', 6, 1, 'Pieza 1kg', 125.00),
(3, 'Café tostado Chiapas', 7, 8, 'Bolsa 500g', 145.50),
(4, 'Tortillas de maíz hechas a mano', 8, 2, 'Paquete 1kg', 28.00),
(5, 'Mezcal artesanal espadín', 1, 9, 'Botella 750ml', 450.00),
(6, 'Alebrijes de madera pintados', 2, 10, 'Pieza mediana', 350.00),
(7, 'Chorizo verde toluqueño', 6, 5, 'Paquete 500g', 78.90),
(8, 'Pan de muerto tradicional', 3, 6, 'Pieza grande', 65.00),
(9, 'Salsa habanero yachi', 5, 4, 'Frasco 250g', 45.00),
(10, 'Tequila reposado 100% agave', 4, 9, 'Botella 1L', 320.00),
(11, 'Cacahuates enchilados', 4, 7, 'Bolsa 200g', 25.50),
(12, 'Atole de vainilla en polvo', 5, 2, 'Bolsa 400g', 32.75),
(13, 'Aceite de aguacate premium', 6, 4, 'Botella 500ml', 180.00),
(14, 'Tamales oaxaqueños surtidos', 8, 2, 'Paquete 6 piezas', 85.00),
(15, 'Jamaica natural deshidratada', 5, 4, 'Bolsa 250g', 42.30),
(16, 'Artesanía de barro negro', 7, 10, 'Juego de 3 piezas', 275.00),
(17, 'Crema ácida estilo casero', 6, 1, 'Frasco 400g', 38.50),
(18, 'Cajeta quemada de Celaya', 1, 3, 'Frasco 380g', 68.00),
(19, 'Mix de chiles secos', 5, 4, 'Bolsa 150g', 29.90),
(20, 'Palomitas naturales', 4, 7, 'Bolsa 1kg', 55.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ProveedorID` int(11) NOT NULL,
  `NombreProveedor` varchar(50) DEFAULT NULL,
  `NombreContacto` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Ciudad` varchar(20) DEFAULT NULL,
  `CodigoPostal` varchar(10) DEFAULT NULL,
  `Pais` varchar(15) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ProveedorID`, `NombreProveedor`, `NombreContacto`, `Direccion`, `Ciudad`, `CodigoPostal`, `Pais`, `Telefono`) VALUES
(1, 'Mole Doña María', 'Ana Beltrán', 'Calle Independencia 78', 'Puebla', '72000', 'México', '222-345-6789'),
(2, 'Quesos San Carlos', 'Carlos Ruiz', 'Carretera a León 45', 'Guanajuato', '36250', 'México', '473-112-2334'),
(3, 'Café de Chiapas', 'María López', 'Av. Central 560', 'Tuxtla Gutiérrez', '29000', 'México', '961-445-5667'),
(4, 'Tortillas La Abuelita', 'Rosario Méndez', 'Callejón del Beso 8', 'Guanajuato', '36000', 'México', '473-778-8990'),
(5, 'Artisan Mexican Crafts', 'Luisa Fernández', 'Av. Tulum 205', 'Cancún', '77500', 'México', '998-112-2334'),
(6, 'Cervecería Colima', 'Jorge Ríos', 'Blvd. Costero 1200', 'Manzanillo', '28200', 'México', '314-445-5667'),
(7, 'Dulces Yucatecos', 'Sofía Pech', 'Calle 60 #405', 'Mérida', '97000', 'México', '999-778-8990'),
(8, 'Aceites La Esperanza', 'Roberto Navarro', 'Av. Industrial 789', 'Monterrey', '64000', 'México', '81-1122-3344');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportistas`
--

CREATE TABLE `transportistas` (
  `TransportistaID` int(11) NOT NULL,
  `NombreTransportista` varchar(25) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `transportistas`
--

INSERT INTO `transportistas` (`TransportistaID`, `NombreTransportista`, `Telefono`) VALUES
(1, 'FedEx México', '800-900-3339'),
(2, 'Paquetexpress', '55-2456-7890'),
(3, 'Estrella Blanca', '800-507-5500'),
(4, 'RedPack', '800-013-3333'),
(5, 'UPS México', '800-902-7700');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ClienteID`);

--
-- Indices de la tabla `detallespedido`
--
ALTER TABLE `detallespedido`
  ADD PRIMARY KEY (`DetallePedidoID`),
  ADD KEY `PedidoID` (`PedidoID`),
  ADD KEY `ProductoID` (`ProductoID`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`EmpleadoID`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`PedidoID`),
  ADD KEY `EmpleadoID` (`EmpleadoID`),
  ADD KEY `ClienteID` (`ClienteID`),
  ADD KEY `TransportistaID` (`TransportistaID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProductoID`),
  ADD KEY `CategoriaID` (`CategoriaID`),
  ADD KEY `ProveedorID` (`ProveedorID`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ProveedorID`);

--
-- Indices de la tabla `transportistas`
--
ALTER TABLE `transportistas`
  ADD PRIMARY KEY (`TransportistaID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ClienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `detallespedido`
--
ALTER TABLE `detallespedido`
  MODIFY `DetallePedidoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `EmpleadoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `PedidoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ProveedorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `transportistas`
--
ALTER TABLE `transportistas`
  MODIFY `TransportistaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallespedido`
--
ALTER TABLE `detallespedido`
  ADD CONSTRAINT `detallespedido_ibfk_1` FOREIGN KEY (`PedidoID`) REFERENCES `pedidos` (`PedidoID`),
  ADD CONSTRAINT `detallespedido_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ProductoID`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`EmpleadoID`) REFERENCES `empleados` (`EmpleadoID`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ClienteID`) REFERENCES `clientes` (`ClienteID`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`TransportistaID`) REFERENCES `transportistas` (`TransportistaID`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`CategoriaID`) REFERENCES `categorias` (`CategoriaID`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`ProveedorID`) REFERENCES `proveedores` (`ProveedorID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
