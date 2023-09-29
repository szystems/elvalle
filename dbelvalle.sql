-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2023 a las 20:33:24
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbelvalle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `idempresa` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `minimo` int(11) NOT NULL,
  `bodega` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `codigo`, `idempresa`, `idcategoria`, `nombre`, `minimo`, `bodega`, `ubicacion`, `descripcion`, `imagen`, `estado`) VALUES
(32, '1', 2, 25, 'Colposcopia', 100, NULL, NULL, NULL, NULL, 'Activo'),
(33, NULL, 2, 25, 'Crioterapia', 100, NULL, NULL, NULL, NULL, 'Activo'),
(34, NULL, 2, 25, 'T Cobre', 100, NULL, NULL, NULL, NULL, 'Activo'),
(35, NULL, 2, 25, 'Histeresonograma', 100, NULL, NULL, NULL, NULL, 'Activo'),
(36, NULL, 2, 25, 'Otros', 100, NULL, NULL, NULL, NULL, 'Activo'),
(37, NULL, 2, 25, 'Tratamiento HPV', 100, NULL, NULL, NULL, NULL, 'Activo'),
(38, NULL, 2, 25, 'Ultrasonido Pelvico', 100, NULL, NULL, NULL, NULL, 'Activo'),
(39, NULL, 2, 25, 'Ultrasonido Obstetrico', 100, NULL, NULL, NULL, NULL, 'Activo'),
(40, NULL, 2, 25, 'Ultrasonido Endovaginal', 100, NULL, NULL, NULL, NULL, 'Activo'),
(41, NULL, 2, 25, 'Vista de Usg', 100, NULL, NULL, NULL, NULL, 'Activo'),
(42, NULL, 2, 25, 'Ultrasonido Estructural', 100, NULL, NULL, NULL, NULL, 'Activo'),
(43, NULL, 2, 25, 'Ultrasonido Transnucal', 100, NULL, NULL, NULL, NULL, 'Activo'),
(44, NULL, 2, 25, 'Protocolo A', 100, NULL, NULL, NULL, NULL, 'Activo'),
(45, NULL, 2, 25, 'Protocolo B', 100, NULL, NULL, NULL, NULL, 'Activo'),
(46, NULL, 2, 25, 'Fototerapia 1 sesion', 100, NULL, NULL, NULL, NULL, 'Activo'),
(47, NULL, 2, 25, 'Fototerapia 6 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(48, NULL, 2, 25, '1 sesion', 100, NULL, NULL, NULL, NULL, 'Activo'),
(49, NULL, 2, 25, '3 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(50, NULL, 2, 25, '5 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(51, NULL, 2, 25, 'Abdomen 1 sesion', 100, NULL, NULL, NULL, NULL, 'Activo'),
(52, NULL, 2, 25, 'Abdomen 5 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(53, NULL, 2, 25, 'Abdomen 10 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(54, NULL, 2, 25, 'Piernas 1 sesion', 100, NULL, NULL, NULL, NULL, 'Activo'),
(55, NULL, 2, 25, 'Piernas 5 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(56, NULL, 2, 25, 'Piernas 10 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(57, NULL, 2, 25, 'Brazos 1 sesion', 100, NULL, NULL, NULL, NULL, 'Activo'),
(58, NULL, 2, 25, 'Brazos 5 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(59, NULL, 2, 25, 'Brazos 10 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(60, NULL, 2, 25, 'Estrias 1 sesion', 100, NULL, NULL, NULL, NULL, 'Activo'),
(61, NULL, 2, 25, 'Estrias 2 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(62, NULL, 2, 25, 'Estrias 4 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(63, NULL, 2, 25, 'Lineas de Expresion 1 sesion', 100, NULL, NULL, NULL, NULL, 'Activo'),
(64, NULL, 2, 25, 'Lineas de expresion 3 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(65, NULL, 2, 25, 'Lineas de exprecion 4 sesiones', 100, NULL, NULL, NULL, NULL, 'Activo'),
(66, NULL, 2, 25, 'Testosterona', 100, NULL, NULL, NULL, NULL, 'Activo'),
(67, NULL, 2, 25, 'Biest (EE)', 100, NULL, NULL, NULL, NULL, 'Activo'),
(68, NULL, 2, 25, 'Testosterona + Antrozol', 100, NULL, NULL, NULL, NULL, 'Activo'),
(69, NULL, 2, 25, 'DHEA', 100, NULL, NULL, NULL, NULL, 'Activo'),
(70, NULL, 2, 25, 'Progesterona', 100, NULL, NULL, NULL, NULL, 'Activo'),
(71, '2', 2, 26, 'Aquavit B6', 10, NULL, NULL, NULL, NULL, 'Activo'),
(72, '3', 2, 26, 'Biocode T 50', 10, NULL, NULL, 'Frasco de AK Cápsulas de 50MG. T3', NULL, 'Activo'),
(73, '4', 2, 26, 'ÓVULO PARA INDUCIR AL PARTO', 10, NULL, NULL, NULL, NULL, 'Activo'),
(74, '5', 2, 26, 'TESTOSTERONA / ESTRADIOL', 10, NULL, NULL, NULL, NULL, 'Activo'),
(75, '6', 2, 26, 'Gynflu D', 10, NULL, NULL, '75 MG. 1000 MG 2 TABLETAS', NULL, 'Activo'),
(76, '7', 2, 26, 'Letrozol', 10, NULL, NULL, 'BLISTER 10 TABLETAS 2.5 ML. CAJA DE 30 TABLETAS', NULL, 'Activo'),
(77, '8', 2, 26, 'Yodocefol', 10, NULL, NULL, '200/400/2 MICROGRAMOS 28 COMPRIMIDOS', NULL, 'Activo'),
(78, '9', 2, 26, 'Qlaira', 10, NULL, NULL, 'VALERATO DE ESTRADIOL CAJA DE 28 COMPRIMIDOS (1 ORIGINAL Y 1 MUESTRA)', NULL, 'Activo'),
(79, '10', 2, 26, 'Femtriol', 10, NULL, NULL, 'CREMA VAGINAL 20 G * 5 APLICADORES', NULL, 'Activo'),
(80, '11', 2, 26, 'Glucosa Tiras', 10, NULL, NULL, 'Caja de 50 tiras para examen de Glucosa', NULL, 'Activo'),
(81, '12', 2, 26, 'Phara Prenat', 10, NULL, NULL, 'CAJA DE 30 TABLETAS RECUBIERTAS', NULL, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idbitacora` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idbitacora`, `idempresa`, `idusuario`, `fecha`, `tipo`, `descripcion`) VALUES
(1, 2, 4, '2022-05-20 11:43:09', 'Seguridad', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Internista, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 0.00'),
(2, 2, 4, '2022-05-20 11:45:16', 'Seguridad', 'Se creo un usuario de Doctor, Nombre: Jessica Maldonado, Email: jmaldonado@gmail.com, Dirección: 64854254, Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 1989-08-16, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10'),
(3, 2, 4, '2022-05-20 11:46:18', 'Seguridad', 'Se creo un usuario de Doctor, Nombre: Alejandra Gomez, Email: agomez@gmail.com, Dirección: , Teléfono: 85423158, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15'),
(4, 2, 4, '2022-05-20 11:47:29', 'Seguridad', 'Se creo un usuario de Doctor, Nombre: Marcela Chacon, Email: mchacon@gmail.com, Dirección: , Teléfono: 32156487, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10'),
(5, 2, 4, '2022-05-20 11:48:26', 'Seguridad', 'Se creo un usuario de Doctor, Nombre: Mishelle Jacobs, Email: mjacobs@gmail.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15'),
(6, 2, 4, '2022-05-20 11:48:43', 'Seguridad', 'Se edito un usuario doctor Nombre: Alejandra Gomez, Email: agomez@gmail.com, Dirección: , Teléfono: 85423158, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(7, 2, 4, '2022-05-20 11:48:56', 'Seguridad', 'Se edito un usuario doctor Nombre: Alejandra Gomez, Email: agomez@gmail.com, Dirección: , Teléfono: 85423158, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(8, 2, 4, '2022-05-20 11:49:07', 'Seguridad', 'Se edito un usuario doctor Nombre: Mishelle Jacobs, Email: mjacobs@gmail.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(9, 2, 4, '2022-05-20 11:49:25', 'Seguridad', 'Se edito un usuario doctor Nombre: Marcela Chacon, Email: mchacon@gmail.com, Dirección: , Teléfono: 32156487, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10.00'),
(10, 2, 4, '2022-05-20 11:52:40', 'Seguridad', 'Se creo un usuario , Nombre: Ana Castillo, Email: acastillo@gmail.com, Dirección: , Teléfono: 35874125, Tipo: Asistente, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 5'),
(11, 2, 4, '2022-05-20 15:44:56', 'Paciente', 'Se creo un paciente, Nombre: Maria Tereza, Sexo: Femenino, Teléfono: , Email: , Dirección: , Fecha Nacimiento: 1994-10-28, Nit: , Estado: Habilitado, DPI: 45687895-8'),
(12, 2, 4, '2022-05-20 15:46:39', 'Paciente', 'Se creo un paciente, Nombre: Catalina de Alcazar, Sexo: Masculino, Teléfono: , Email: , Dirección: , Fecha Nacimiento: 2022-05-20, Nit: , Estado: Habilitado, DPI: 7898787-8'),
(13, 2, 4, '2022-05-20 15:47:54', 'Paciente', 'Se creo un paciente, Nombre: Miriam de Samayoa, Sexo: Femenino, Teléfono: , Email: msamayoa@gmail.com, Dirección: , Fecha Nacimiento: 2007-09-15, Nit: , Estado: Habilitado, DPI: 4897596-9'),
(14, 2, 4, '2022-05-20 15:51:44', 'Ventas', 'Se creo un nuevo rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: '),
(15, 2, 4, '2022-05-20 15:51:56', 'Ventas', 'Se creo un nuevo rubro, Nombre: ULSTRASONIDO, Nota: '),
(16, 2, 4, '2022-05-20 15:52:10', 'Ventas', 'Se creo un nuevo rubro, Nombre: RADIOFRECUENCIA, Nota: '),
(17, 2, 4, '2022-05-20 15:52:46', 'Ventas', 'Se creo un nuevo rubro, Nombre: FACIAL: CONTORNO DE OJOS Y MEJIAS, Nota: '),
(18, 2, 4, '2022-05-20 15:53:02', 'Ventas', 'Se creo un nuevo rubro, Nombre: CORPORAL, Nota: '),
(19, 2, 4, '2022-05-20 15:53:22', 'Ventas', 'Se creo un nuevo rubro, Nombre: FRACCIONADA, Nota: '),
(20, 2, 4, '2022-05-20 15:53:32', 'Ventas', 'Se creo un nuevo rubro, Nombre: PELLETS, Nota: '),
(21, 2, 4, '2022-05-20 15:55:52', 'Almacen', 'Se creo una nueva categoría nueva, Nombre: Servicio, Descripción: '),
(22, 2, 4, '2022-05-20 15:57:52', 'Almacen', 'Se creo un artículo nuevo, Nombre: Colposcopia, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(23, 2, 4, '2022-05-20 15:58:18', 'Almacen', 'Se creo un artículo nuevo, Nombre: Crioterapia, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(24, 2, 4, '2022-05-20 15:58:37', 'Almacen', 'Se creo un artículo nuevo, Nombre: T Cobre, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(25, 2, 4, '2022-05-20 15:59:02', 'Almacen', 'Se creo un artículo nuevo, Nombre: Histeresonograma, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(26, 2, 4, '2022-05-20 16:00:02', 'Almacen', 'Se creo un artículo nuevo, Nombre: Otros, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(27, 2, 4, '2022-05-20 16:00:26', 'Almacen', 'Se creo un artículo nuevo, Nombre: Tratamiento HPV, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(28, 2, 4, '2022-05-20 16:01:21', 'Almacen', 'Se creo un artículo nuevo, Nombre: Ultrasonido Pelvico, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(29, 2, 4, '2022-05-20 16:01:36', 'Almacen', 'Se creo un artículo nuevo, Nombre: Ultrasonido Obstetrico, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(30, 2, 4, '2022-05-20 16:01:52', 'Almacen', 'Se creo un artículo nuevo, Nombre: Ultrasonido Endovaginal, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(31, 2, 4, '2022-05-20 16:02:18', 'Almacen', 'Se creo un artículo nuevo, Nombre: Vista de Usg, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(32, 2, 4, '2022-05-20 16:02:40', 'Almacen', 'Se creo un artículo nuevo, Nombre: Ultrasonido Estructural, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(33, 2, 4, '2022-05-20 16:03:04', 'Almacen', 'Se creo un artículo nuevo, Nombre: Ultrasonido Transnucal, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(34, 2, 4, '2022-05-20 16:03:55', 'Ventas', 'Se elimino un rubro, Nombre: FACIAL: CONTORNO DE OJOS Y MEJIAS'),
(35, 2, 4, '2022-05-20 16:04:13', 'Ventas', 'Se edito un rubro, Nombre: RADIOFRECUENCIA VAGINAL, Nota: '),
(36, 2, 4, '2022-05-20 16:04:44', 'Ventas', 'Se creo un nuevo rubro, Nombre: RADIOFRECUENCIA FACIAL: Contorno de ojos y mejias, Nota: '),
(37, 2, 4, '2022-05-20 16:04:59', 'Ventas', 'Se edito un rubro, Nombre: RADIOFRECUENCIA CORPORAL, Nota: '),
(38, 2, 4, '2022-05-20 16:05:19', 'Ventas', 'Se edito un rubro, Nombre: RADIOFRECUENCIA FRACCIONADA, Nota: '),
(39, 2, 4, '2022-05-20 16:06:07', 'Almacen', 'Se creo un artículo nuevo, Nombre: Protocolo A, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(40, 2, 4, '2022-05-20 16:06:22', 'Almacen', 'Se creo un artículo nuevo, Nombre: Protocolo B, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(41, 2, 4, '2022-05-20 16:06:41', 'Almacen', 'Se creo un artículo nuevo, Nombre: Fototerapia 1 sesion, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(42, 2, 4, '2022-05-20 16:07:08', 'Almacen', 'Se creo un artículo nuevo, Nombre: Fototerapia 6 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(43, 2, 4, '2022-05-20 16:07:56', 'Almacen', 'Se creo un artículo nuevo, Nombre: 1 sesion, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(44, 2, 4, '2022-05-20 16:08:16', 'Almacen', 'Se creo un artículo nuevo, Nombre: 3 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(45, 2, 4, '2022-05-20 16:08:33', 'Almacen', 'Se creo un artículo nuevo, Nombre: 5 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(46, 2, 4, '2022-05-20 16:08:53', 'Almacen', 'Se creo un artículo nuevo, Nombre: Abdomen 1 sesion, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(47, 2, 4, '2022-05-20 16:09:13', 'Almacen', 'Se creo un artículo nuevo, Nombre: Abdomen 5 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(48, 2, 4, '2022-05-20 16:09:27', 'Almacen', 'Se creo un artículo nuevo, Nombre: Abdomen 10 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(49, 2, 4, '2022-05-20 16:09:47', 'Almacen', 'Se creo un artículo nuevo, Nombre: Piernas 1 sesion, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(50, 2, 4, '2022-05-20 16:10:04', 'Almacen', 'Se creo un artículo nuevo, Nombre: Piernas 5 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(51, 2, 4, '2022-05-20 16:10:33', 'Almacen', 'Se creo un artículo nuevo, Nombre: Piernas 10 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(52, 2, 4, '2022-05-20 16:10:54', 'Almacen', 'Se creo un artículo nuevo, Nombre: Brazos 1 sesion, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(53, 2, 4, '2022-05-20 16:11:13', 'Almacen', 'Se creo un artículo nuevo, Nombre: Brazos 5 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(54, 2, 4, '2022-05-20 16:11:29', 'Almacen', 'Se creo un artículo nuevo, Nombre: Brazos 10 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(55, 2, 4, '2022-05-20 16:11:56', 'Almacen', 'Se creo un artículo nuevo, Nombre: Estrias 1 sesion, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(56, 2, 4, '2022-05-20 16:12:12', 'Almacen', 'Se creo un artículo nuevo, Nombre: Estrias 2 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(57, 2, 4, '2022-05-20 16:12:24', 'Almacen', 'Se creo un artículo nuevo, Nombre: Estrias 4 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(58, 2, 4, '2022-05-20 16:12:52', 'Almacen', 'Se creo un artículo nuevo, Nombre: Lineas de Expresion 1 sesion, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(59, 2, 4, '2022-05-20 16:13:13', 'Almacen', 'Se creo un artículo nuevo, Nombre: Lineas de expresion 3 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(60, 2, 4, '2022-05-20 16:13:32', 'Almacen', 'Se creo un artículo nuevo, Nombre: Lineas de exprecion 4 sesiones, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(61, 2, 4, '2022-05-20 16:13:54', 'Almacen', 'Se creo un artículo nuevo, Nombre: Testosterona, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(62, 2, 4, '2022-05-20 16:14:12', 'Almacen', 'Se creo un artículo nuevo, Nombre: Biest (EE), Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(63, 2, 4, '2022-05-20 16:14:44', 'Almacen', 'Se creo un artículo nuevo, Nombre: Testosterona + Antrozol, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(64, 2, 4, '2022-05-20 16:14:56', 'Almacen', 'Se creo un artículo nuevo, Nombre: DHEA, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(65, 2, 4, '2022-05-20 16:15:13', 'Almacen', 'Se creo un artículo nuevo, Nombre: Progesterona, Código: , Stock minimo: 100, Descripción: , Bodega: , Ubicación: '),
(66, 2, 4, '2022-05-20 16:16:28', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Colposcopia'),
(67, 2, 4, '2022-05-20 16:17:09', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Crioterapia'),
(68, 2, 4, '2022-05-20 16:17:26', 'Ventas', 'Se agrego un articulo al rubro, Articulo: T Cobre'),
(69, 2, 4, '2022-05-20 16:17:39', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Histeresonograma'),
(70, 2, 4, '2022-05-20 16:17:53', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Otros'),
(71, 2, 4, '2022-05-20 16:18:16', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Tratamiento HPV'),
(72, 2, 4, '2022-05-20 16:19:21', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Ultrasonido Pelvico'),
(73, 2, 4, '2022-05-20 16:19:33', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Ultrasonido Obstetrico'),
(74, 2, 4, '2022-05-20 16:19:42', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Ultrasonido Endovaginal'),
(75, 2, 4, '2022-05-20 16:19:57', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Vista de Usg'),
(76, 2, 4, '2022-05-20 16:20:11', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Ultrasonido Estructural'),
(77, 2, 4, '2022-05-20 16:20:25', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Ultrasonido Transnucal'),
(78, 2, 4, '2022-05-20 16:21:50', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Protocolo A'),
(79, 2, 4, '2022-05-20 16:22:00', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Protocolo B'),
(80, 2, 4, '2022-05-20 16:22:18', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Fototerapia 1 sesion'),
(81, 2, 4, '2022-05-20 16:22:28', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Fototerapia 6 sesiones'),
(82, 2, 4, '2022-05-20 16:23:40', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Abdomen 1 sesion'),
(83, 2, 4, '2022-05-20 16:23:51', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Abdomen 5 sesiones'),
(84, 2, 4, '2022-05-20 16:24:05', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Abdomen 10 sesiones'),
(85, 2, 4, '2022-05-20 16:24:20', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Piernas 1 sesion'),
(86, 2, 4, '2022-05-20 16:24:30', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Piernas 5 sesiones'),
(87, 2, 4, '2022-05-20 16:24:39', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Piernas 10 sesiones'),
(88, 2, 4, '2022-05-20 16:24:50', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Brazos 1 sesion'),
(89, 2, 4, '2022-05-20 16:24:58', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Brazos 5 sesiones'),
(90, 2, 4, '2022-05-20 16:25:06', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Brazos 10 sesiones'),
(91, 2, 4, '2022-05-20 16:25:54', 'Ventas', 'Se agrego un articulo al rubro, Articulo: 1 sesion'),
(92, 2, 4, '2022-05-20 16:26:07', 'Ventas', 'Se agrego un articulo al rubro, Articulo: 3 sesiones'),
(93, 2, 4, '2022-05-20 16:26:20', 'Ventas', 'Se agrego un articulo al rubro, Articulo: 5 sesiones'),
(94, 2, 4, '2022-05-20 16:26:54', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Estrias 1 sesion'),
(95, 2, 4, '2022-05-20 16:27:07', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Estrias 2 sesiones'),
(96, 2, 4, '2022-05-20 16:27:16', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Estrias 4 sesiones'),
(97, 2, 4, '2022-05-20 16:27:32', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Lineas de Expresion 1 sesion'),
(98, 2, 4, '2022-05-20 16:27:46', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Lineas de expresion 3 sesiones'),
(99, 2, 4, '2022-05-20 16:28:07', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Lineas de exprecion 4 sesiones'),
(100, 2, 4, '2022-05-20 16:28:55', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Testosterona'),
(101, 2, 4, '2022-05-20 16:29:04', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Testosterona + Antrozol'),
(102, 2, 4, '2022-05-20 16:29:14', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Biest (EE)'),
(103, 2, 4, '2022-05-20 16:29:24', 'Ventas', 'Se agrego un articulo al rubro, Articulo: DHEA'),
(104, 2, 4, '2022-05-20 16:29:34', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Progesterona'),
(105, 2, 4, '2022-05-20 16:30:20', 'Ventas', 'Se elimino un artículo del rubro.'),
(106, 2, 4, '2022-05-20 16:31:40', 'Ventas', 'Se creo una orden nueva, Paciente: Maria Tereza, Doctor: Otto Szarata, Total:Q.17750'),
(107, 2, 4, '2022-05-20 16:34:36', 'Almacen', 'Se creo una presentacion nueva, Nombre: Tabletas, Descripcion: '),
(108, 2, 4, '2022-05-20 16:34:47', 'Almacen', 'Se creo una presentacion nueva, Nombre: Solucion Oral, Descripcion: '),
(109, 2, 4, '2022-05-20 16:35:05', 'Almacen', 'Se creo una presentacion nueva, Nombre: Talla M, Descripcion: '),
(110, 2, 4, '2022-05-20 16:35:14', 'Almacen', 'Se creo una presentacion nueva, Nombre: Talla S, Descripcion: '),
(111, 2, 4, '2022-05-20 16:35:25', 'Almacen', 'Se creo una presentacion nueva, Nombre: Talla L, Descripcion: '),
(112, 2, 4, '2022-05-20 16:35:33', 'Almacen', 'Se creo una presentacion nueva, Nombre: Talla XL, Descripcion: '),
(113, 2, 4, '2022-05-20 16:35:57', 'Almacen', 'Se creo una presentacion nueva, Nombre: Ampolla, Descripcion: '),
(114, 2, 4, '2022-05-20 16:47:29', 'Almacen', 'Se creo una presentacion nueva, Nombre: Barra, Descripcion: '),
(115, 2, 4, '2022-05-20 16:47:41', 'Almacen', 'Se creo una presentacion nueva, Nombre: Ovulos, Descripcion: '),
(116, 2, 4, '2022-05-20 16:47:56', 'Almacen', 'Se creo una presentacion nueva, Nombre: Capsulas, Descripcion: '),
(117, 2, 4, '2022-05-20 16:48:16', 'Almacen', 'Se creo una presentacion nueva, Nombre: Crema, Descripcion: '),
(118, 2, 4, '2022-05-20 16:48:35', 'Almacen', 'Se creo una presentacion nueva, Nombre: Blister, Descripcion: '),
(119, 2, 4, '2022-05-20 16:49:06', 'Almacen', 'Se creo una presentacion nueva, Nombre: Bolsa, Descripcion: '),
(120, 2, 4, '2022-05-20 16:49:22', 'Almacen', 'Se creo una presentacion nueva, Nombre: caja, Descripcion: '),
(121, 2, 4, '2022-05-20 16:49:30', 'Almacen', 'Se edito una presentacion, Nombre: Caja, Descripcion: '),
(122, 2, 4, '2022-05-20 16:49:46', 'Almacen', 'Se creo una presentacion nueva, Nombre: Frasco, Descripcion: '),
(123, 2, 4, '2022-05-20 16:50:12', 'Almacen', 'Se creo una presentacion nueva, Nombre: Gotas, Descripcion: '),
(124, 2, 4, '2022-05-20 16:50:23', 'Almacen', 'Se creo una presentacion nueva, Nombre: Comprimidos, Descripcion: '),
(125, 2, 4, '2022-05-20 16:52:33', 'Almacen', 'Se creo una nueva categoría nueva, Nombre: Medicamento, Descripción: '),
(126, 2, 4, '2022-05-20 16:53:03', 'Almacen', 'Se creo un artículo nuevo, Nombre: Aquavit B6, Código: , Stock minimo: 10, Descripción: , Bodega: , Ubicación: '),
(127, 2, 4, '2022-05-20 16:53:23', 'Almacen', 'Se creo una presentacion nueva, Nombre: Gel, Descripcion: '),
(128, 2, 4, '2022-05-20 17:02:34', 'Compras', 'Se creo un proveedor nuevo, Nombre: Amicelco 1, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(129, 2, 4, '2022-05-20 17:03:09', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: 236'),
(130, 2, 4, '2022-05-20 17:03:41', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: 616'),
(131, 2, 4, '2022-05-20 17:03:59', 'Compras', 'Se edito un proveedor, Nombre: Amicelco, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(132, 2, 4, '2022-05-20 17:04:07', 'Compras', 'Se creo un proveedor nuevo, Nombre: Bodega Farmacéutica 1, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(133, 2, 4, '2022-05-20 17:04:15', 'Compras', 'Se edito un proveedor, Nombre: Bodega Farmacéutica, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(134, 2, 4, '2022-05-20 17:04:40', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: Josué García'),
(135, 2, 4, '2022-05-20 17:04:57', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: Doris Sanchinelli'),
(136, 2, 4, '2022-05-20 17:05:49', 'Compras', 'Se creo un proveedor nuevo, Nombre: Lanquetin, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(137, 2, 4, '2022-05-20 17:06:10', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: 079 Roberto Ortiz'),
(138, 2, 4, '2022-05-20 17:06:29', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: Cristian Barrios'),
(139, 2, 4, '2022-05-20 17:07:08', 'Compras', 'Se creo un proveedor nuevo, Nombre: DASA, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(140, 2, 4, '2022-05-20 17:07:27', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: Kevin Ramírez'),
(141, 2, 4, '2022-05-20 17:07:44', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: Astrid Córdoba'),
(142, 2, 4, '2022-05-23 09:40:53', 'Almacen', 'Se creo un artículo nuevo, Nombre: Biocode T 50, Código: , Stock minimo: 10, Descripción: Frasco de AK Cápsulas de 50MG. T3, Bodega: , Ubicación: '),
(143, 2, 4, '2022-05-23 09:41:14', 'Almacen', 'Se creo un artículo nuevo, Nombre: ÓVULO PARA INDUCIR AL PARTO, Código: , Stock minimo: 10, Descripción: , Bodega: , Ubicación: '),
(144, 2, 4, '2022-05-23 09:41:45', 'Almacen', 'Se creo un artículo nuevo, Nombre: TESTOSTERONA/ESTRADIOL, Código: , Stock minimo: 10, Descripción: , Bodega: , Ubicación: '),
(145, 2, 4, '2022-05-23 09:42:20', 'Almacen', 'Se creo un artículo nuevo, Nombre: Gynflu D, Código: , Stock minimo: 10, Descripción: 75 MG. 1000 MG 2 TABLETAS, Bodega: , Ubicación: '),
(146, 2, 4, '2022-05-23 09:42:48', 'Almacen', 'Se creo un artículo nuevo, Nombre: Letrozol, Código: , Stock minimo: 10, Descripción: BLISTER 10 TABLETAS 2.5 ML. CAJA DE 30 TABLETAS, Bodega: , Ubicación: '),
(147, 2, 4, '2022-05-23 09:43:10', 'Almacen', 'Se creo un artículo nuevo, Nombre: Yodocefol, Código: , Stock minimo: 10, Descripción: 200/400/2 MICROGRAMOS 28 COMPRIMIDOS, Bodega: , Ubicación: '),
(148, 2, 4, '2022-05-23 09:43:29', 'Almacen', 'Se creo un artículo nuevo, Nombre: Qlaira, Código: , Stock minimo: 10, Descripción: VALERATO DE ESTRADIOL CAJA DE 28 COMPRIMIDOS (1 ORIGINAL Y 1 MUESTRA), Bodega: , Ubicación: '),
(149, 2, 4, '2022-05-23 09:44:29', 'Almacen', 'Se creo un artículo nuevo, Nombre: Femtriol, Código: , Stock minimo: 10, Descripción: CREMA VAGINAL 20 G * 5 APLICADORES, Bodega: , Ubicación: '),
(150, 2, 4, '2022-05-23 09:44:51', 'Almacen', 'Se creo un artículo nuevo, Nombre: Glucosa Tiras, Código: , Stock minimo: 10, Descripción: Caja de 50 tiras para examen de Glucosa, Bodega: , Ubicación: '),
(151, 2, 4, '2022-05-23 09:45:25', 'Almacen', 'Se creo un artículo nuevo, Nombre: Phara Prenat, Código: , Stock minimo: 10, Descripción: CAJA DE 30 TABLETAS RECUBIERTAS, Bodega: , Ubicación: '),
(152, 2, 4, '2022-05-23 09:58:35', 'Compras', 'Se creo un ingreso nuevo, Proveedor: Amicelco, Comprobante: Factura -, Fecha: 2022-05-23, Total Compra: Q.6700'),
(153, 2, 4, '2022-05-23 10:05:01', 'Compras', 'Se creo un ingreso nuevo, Proveedor: Lanquetin, Comprobante: Factura -, Fecha: 2022-05-23, Total Compra: Q.30000'),
(154, 2, 4, '2022-05-23 10:12:31', 'Almacen', 'Se edito un artículo, Nombre: TESTOSTERONA / ESTRADIOL, Código: 5, Stock minimo: 10, Descripción: , Bodega: , Ubicación: '),
(155, 2, 4, '2022-05-23 10:17:06', 'Ventas', 'Se creo una venta nueva desde una orden, Cliente: Maria Tereza, Comprobante:  -, Fecha: 2022-05-23 10:17:06, Total Venta: Q.17750, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(156, 2, 4, '2022-05-23 10:18:11', 'Ventas', 'Se abono una venta, Cliente: Maria Tereza, Comprobante:  -, Fecha: 2022-05-23, Total Venta: Q.17750.00, Nuevo Abono: Q.10000, Total Abonado: Q.10000, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(157, 2, 4, '2022-05-23 10:19:40', 'Ventas', 'Se creo una venta nueva, Cliente: Maria Tereza, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.225, Abonado: 225.00, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(158, 2, 4, '2022-05-23 10:20:30', 'Ventas', 'Se edito una venta, Cliente: Maria Tereza, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.235, Abonado: Q.225, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(159, 2, 4, '2022-05-23 10:20:44', 'Ventas', 'Se abono una venta, Cliente: Maria Tereza, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.235.00, Nuevo Abono: Q.10.00, Total Abonado: Q.235, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(160, 2, 4, '2022-05-23 10:20:51', 'Ventas', 'Se cerro una venta, Cliente: Maria Tereza, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.235.00, Total Abonado: Q.235.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(161, 2, 4, '2022-05-23 10:21:08', 'Ventas', 'Se abono una venta, Cliente: Maria Tereza, Comprobante:  -, Fecha: 2022-05-23, Total Venta: Q.17750.00, Nuevo Abono: Q.7750.00, Total Abonado: Q.17750, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(162, 2, 4, '2022-05-23 10:44:12', 'Ventas', 'Se creo una venta nueva, Cliente: Miriam de Samayoa, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.200, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(163, 2, 4, '2022-05-23 10:44:26', 'Ventas', 'Se abono una venta, Cliente: Miriam de Samayoa, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.200.00, Nuevo Abono: Q.100, Total Abonado: Q.100, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(164, 2, 4, '2022-05-23 10:44:33', 'Ventas', 'Se abono una venta, Cliente: Miriam de Samayoa, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.200.00, Nuevo Abono: Q.100.00, Total Abonado: Q.200, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(165, 2, 4, '2022-05-23 10:44:47', 'Ventas', 'Se creo una venta nueva, Cliente: Maria Tereza, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.45, Abonado: 45.00, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(166, 2, 4, '2022-05-23 10:44:52', 'Ventas', 'Se cerro una venta, Cliente: Maria Tereza, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.45.00, Total Abonado: Q.45.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(167, 2, 4, '2022-05-23 10:45:46', 'Ventas', 'Se creo una venta nueva, Cliente: Catalina de Alcazar, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.800, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(168, 2, 4, '2022-05-23 10:47:27', 'Ventas', 'Se abono una venta, Cliente: Catalina de Alcazar, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.800.00, Nuevo Abono: Q.800.00, Total Abonado: Q.800, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(169, 2, 4, '2022-05-23 10:47:52', 'Ventas', 'Se creo una venta nueva, Cliente: Catalina de Alcazar, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.400, Abonado: 400.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(170, 2, 4, '2022-05-23 10:48:02', 'Ventas', 'Se cerro una venta, Cliente: Catalina de Alcazar, Comprobante: Factura -, Fecha: 2022-05-23, Total Venta: Q.800.00, Total Abonado: Q.800.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(171, 2, 4, '2022-05-30 19:42:21', 'Paciente', 'Se creo una nueva receta para el paciente:Catalina de Alcazar, Fecha: 30-05-2022'),
(172, 2, 4, '2022-05-30 19:51:52', 'Almacen', 'Se creo una presentacion nueva, Nombre: Caja de ovulos, Descripcion: '),
(173, 2, 4, '2022-05-30 19:55:15', 'Paciente', 'Se creo una nueva receta para el paciente:Catalina de Alcazar, Fecha: 30-05-2022'),
(174, 2, 4, '2022-05-30 20:15:17', 'Paciente', 'Se creo la historia de:Catalina de Alcazar, Fecha: 30-05-2022'),
(175, 2, 4, '2022-05-30 20:30:26', 'Paciente', 'Se creo un examen fisico para el paciente:Maria Tereza, Fecha: 30-05-2022'),
(176, 2, 4, '2022-05-30 20:31:10', 'Paciente', 'Se edito un examen fisico del paciente:Maria Tereza, Fecha: 30-05-2022'),
(177, 2, 4, '2022-05-30 20:33:37', 'Paciente', 'Se edito un examen fisico del paciente:Maria Tereza, Fecha: 30-05-2022'),
(178, 2, 4, '2022-05-30 20:34:03', 'Paciente', 'Se creo un nuevo embarazo para el paciente:Maria Tereza, Fecha: 30-05-2022'),
(179, 2, 4, '2022-05-30 20:38:13', 'Pacientes', 'Se edito la cabecera de embarazo del paciente: Maria Tereza, Fecha: 30-05-2022'),
(180, 2, 4, '2022-05-30 20:41:48', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Maria Tereza, Fecha: 30-05-2022'),
(181, 2, 4, '2022-05-30 20:45:56', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Maria Tereza, Fecha: 30-05-2022'),
(182, 2, 4, '2022-05-30 20:46:18', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Maria Tereza, Fecha: 30-05-2022'),
(183, 2, 4, '2022-05-30 20:47:13', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Maria Tereza, Fecha: 30-05-2022'),
(184, 2, 4, '2022-06-01 11:11:20', 'Seguridad', 'Se edito un usuario doctor Nombre: Alejandra Gomez, Email: agomez@gmail.com, Dirección: , Teléfono: 85423158, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(185, 2, 4, '2022-06-01 11:12:35', 'Seguridad', 'Se edito un usuario doctor Nombre: Jessica Maldonado, Email: jmaldonado@gmail.com, Dirección: 64854254, Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 1989-08-16, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10.00'),
(186, 2, 4, '2022-06-01 11:12:46', 'Seguridad', 'Se edito un usuario doctor Nombre: Marcela Chacon, Email: mchacon@gmail.com, Dirección: , Teléfono: 32156487, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10.00'),
(187, 2, 4, '2022-06-01 11:13:00', 'Seguridad', 'Se edito un usuario doctor Nombre: Mishelle Jacobs, Email: mjacobs@gmail.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(188, 2, 4, '2022-06-01 11:13:18', 'Seguridad', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Internista, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 0.00'),
(189, 2, 4, '2022-06-01 16:50:06', 'Paciente', 'Se creo la historia de:Maria Tereza, Fecha: 01-06-2022'),
(190, 2, 4, '2022-06-01 17:10:43', 'Pacientes', 'Se edito la historia de: Catalina de Alcazar, Fecha: 30-05-2022'),
(191, 2, 4, '2022-06-01 17:16:04', 'Pacientes', 'Se edito la historia de: Catalina de Alcazar, Fecha: 30-05-2022'),
(192, 2, 4, '2022-06-03 10:40:13', 'Pacientes', 'Se edito la historia de: Catalina de Alcazar, Fecha: 30-05-2022'),
(193, 2, 4, '2022-06-03 10:40:33', 'Pacientes', 'Se edito la historia de: Catalina de Alcazar, Fecha: 30-05-2022'),
(194, 2, 4, '2022-06-03 16:50:13', 'Paciente', 'Se creo la historia de:Miriam de Samayoa, Fecha: 03-06-2022'),
(195, 2, 4, '2022-06-03 16:57:07', 'Pacientes', 'Se edito la historia de: Miriam de Samayoa, Fecha: 03-06-2022'),
(196, 2, 4, '2022-06-03 17:09:24', 'Pacientes', 'Se edito la historia de: Miriam de Samayoa, Fecha: 03-06-2022'),
(197, 2, 4, '2022-06-03 17:09:50', 'Pacientes', 'Se edito la historia de: Miriam de Samayoa, Fecha: 03-06-2022'),
(198, 2, 4, '2022-06-03 17:10:34', 'Pacientes', 'Se edito la historia de: Miriam de Samayoa, Fecha: 03-06-2022'),
(199, 2, 4, '2022-06-08 11:13:34', 'Paciente', 'Se creo un examen fisico para el paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(200, 2, 4, '2022-06-08 11:13:52', 'Paciente', 'Se edito un examen fisico del paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(201, 2, 4, '2022-06-08 11:18:10', 'Paciente', 'Se edito un examen fisico del paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(202, 2, 4, '2022-06-08 11:18:20', 'Paciente', 'Se edito un examen fisico del paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(203, 2, 4, '2022-06-08 11:19:04', 'Paciente', 'Se edito un examen fisico del paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(204, 2, 4, '2022-06-08 11:20:13', 'Paciente', 'Se creo un nuevo embarazo para el paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(205, 2, 4, '2022-06-08 11:20:58', 'Pacientes', 'Se edito la cabecera de embarazo del paciente: Catalina de Alcazar, Fecha: 08-06-2022'),
(206, 2, 4, '2022-06-08 11:21:23', 'Pacientes', 'Se edito la cabecera de embarazo del paciente: Catalina de Alcazar, Fecha: 08-06-2022'),
(207, 2, 4, '2022-06-08 11:34:30', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(208, 2, 4, '2022-06-08 11:36:16', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(209, 2, 4, '2022-06-08 11:38:20', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(210, 2, 4, '2022-06-08 11:38:46', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(211, 2, 4, '2022-06-28 10:11:15', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 28-06-2022'),
(212, 2, 4, '2022-06-28 11:19:18', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(213, 2, 4, '2022-06-28 11:19:57', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(214, 2, 4, '2022-06-28 11:23:14', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(215, 2, 4, '2022-06-28 11:23:41', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(216, 2, 4, '2022-06-28 11:25:19', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(217, 2, 4, '2022-06-28 11:29:23', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(218, 2, 4, '2022-06-28 11:29:33', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(219, 2, 4, '2022-06-28 11:30:10', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(220, 2, 4, '2022-06-28 11:30:17', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 28-06-2022'),
(221, 2, 4, '2022-06-28 11:31:05', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(222, 2, 4, '2022-06-28 15:48:30', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 28-06-2022'),
(223, 2, 4, '2022-06-29 10:51:42', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(224, 2, 4, '2022-06-29 11:20:43', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(225, 2, 4, '2022-06-29 11:21:50', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 28-06-2022'),
(226, 2, 4, '2022-06-29 11:32:13', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(227, 2, 4, '2022-06-29 11:32:41', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(228, 2, 4, '2022-06-29 11:39:19', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(229, 2, 4, '2022-06-29 11:40:10', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(230, 2, 4, '2022-06-29 11:40:52', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(231, 2, 4, '2022-06-29 11:41:33', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(232, 2, 4, '2022-06-29 11:42:24', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(233, 2, 4, '2022-06-29 11:42:35', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(234, 2, 4, '2022-06-29 11:46:23', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(235, 2, 4, '2022-06-29 11:48:38', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(236, 2, 4, '2022-06-29 11:49:08', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(237, 2, 4, '2022-06-29 11:52:22', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(238, 2, 4, '2022-06-29 11:54:16', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(239, 2, 4, '2022-06-29 15:59:10', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(240, 2, 4, '2022-06-29 15:59:17', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(241, 2, 4, '2022-06-29 15:59:26', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(242, 2, 4, '2022-06-29 16:23:30', 'Paciente', 'Se creo una nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(243, 2, 4, '2022-06-29 16:24:33', 'Paciente', 'Se creo una nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(244, 2, 4, '2022-06-29 16:24:50', 'Paciente', 'Se creo una nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(245, 2, 4, '2022-06-29 16:39:41', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(246, 2, 4, '2022-06-29 16:39:58', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(247, 2, 4, '2022-06-29 16:40:19', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(248, 2, 4, '2022-06-29 16:41:09', 'Paciente', 'Se creo una nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 29-06-2022'),
(249, 2, 4, '2022-06-30 16:24:56', 'Paciente', 'Se creo un nueva nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 30-06-2022'),
(250, 2, 4, '2022-06-30 16:34:26', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 30-06-2022'),
(251, 2, 4, '2022-06-30 16:35:04', 'Paciente', 'Se creo una nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 30-06-2022'),
(252, 2, 4, '2022-06-30 16:35:41', 'Paciente', 'Se creo un nueva nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 30-06-2022'),
(253, 2, 4, '2022-06-30 16:35:52', 'Paciente', 'Se creo un nueva nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 30-06-2022'),
(254, 2, 4, '2022-07-13 10:53:33', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 13-07-2022'),
(255, 2, 4, '2022-07-13 10:55:30', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 13-07-2022'),
(256, 2, 4, '2022-07-13 10:56:26', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 13-07-2022'),
(257, 2, 4, '2022-07-13 11:20:36', 'Pacientes', 'Se edito la cabecera de ciclo del ciclo de silla electromagnetica del paciente: Catalina de Alcazar, Fecha: 13-07-2022'),
(258, 2, 4, '2022-07-13 11:21:27', 'Pacientes', 'Se edito la cabecera de ciclo del ciclo de silla electromagnetica del paciente: Catalina de Alcazar, Fecha: 13-07-2022'),
(259, 2, 4, '2022-07-13 11:23:24', 'Pacientes', 'Se edito la cabecera de ciclo del ciclo de silla electromagnetica del paciente: Catalina de Alcazar, Fecha: 13-07-2022'),
(260, 2, 4, '2022-07-13 11:23:35', 'Pacientes', 'Se edito la cabecera de ciclo del ciclo de silla electromagnetica del paciente: Catalina de Alcazar, Fecha: 13-07-2022'),
(261, 2, 4, '2022-07-13 11:28:36', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 13-07-2022'),
(262, 2, 4, '2022-07-13 11:28:59', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 13-07-2022'),
(263, 2, 4, '2022-07-15 10:11:50', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(264, 2, 4, '2022-07-15 10:12:29', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(265, 2, 4, '2022-07-15 10:13:43', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(266, 2, 4, '2022-07-15 10:13:55', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(267, 2, 4, '2022-07-15 10:14:43', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(268, 2, 4, '2022-07-15 10:15:37', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(269, 2, 4, '2022-07-15 10:16:27', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(270, 2, 4, '2022-07-15 10:17:22', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(271, 2, 4, '2022-07-15 10:21:40', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(272, 2, 4, '2022-07-15 10:22:45', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(273, 2, 4, '2022-07-15 10:23:43', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(274, 2, 4, '2022-07-15 10:26:15', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(275, 2, 4, '2022-07-15 10:26:42', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(276, 2, 4, '2022-07-15 10:26:51', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(277, 2, 4, '2022-07-15 10:27:14', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(278, 2, 4, '2022-07-15 10:28:25', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(279, 2, 4, '2022-07-15 10:28:34', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 15-07-2022'),
(280, 2, 4, '2022-07-15 10:28:50', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(281, 2, 4, '2022-07-15 10:28:58', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(282, 2, 4, '2022-07-15 10:29:06', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(283, 2, 4, '2022-07-15 10:29:14', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(284, 2, 4, '2022-07-15 10:29:24', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(285, 2, 4, '2022-07-15 10:29:34', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(286, 2, 4, '2022-07-15 10:33:31', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(287, 2, 4, '2022-07-15 10:33:40', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(288, 2, 4, '2022-07-15 10:33:50', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(289, 2, 4, '2022-07-15 10:34:54', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(290, 2, 4, '2022-07-15 10:35:14', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(291, 2, 4, '2022-07-15 10:37:19', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(292, 2, 4, '2022-07-15 10:37:39', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(293, 2, 4, '2022-07-15 10:37:48', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(294, 2, 4, '2022-07-15 10:38:00', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(295, 2, 4, '2022-07-15 10:38:29', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Maria Tereza, Fecha: 15-07-2022'),
(296, 2, 4, '2022-07-15 10:39:40', 'Paciente', 'Se edito un paciente, Nombre: Catalina de Alcazar, Sexo: Masculino, Teléfono: , Email: jalbuerra1@gmail.com, Dirección: , Fecha Nacimiento: 2022-05-20, Nit: 34935037, Estado: Habilitado, DPI: 7898787-8'),
(297, 2, 4, '2022-07-18 09:57:27', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(298, 2, 4, '2022-07-18 10:35:10', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(299, 2, 4, '2022-07-18 10:35:54', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(300, 2, 4, '2022-07-18 10:37:48', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 01-01-1970'),
(301, 2, 4, '2022-07-18 10:39:41', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 01-01-1970'),
(302, 2, 4, '2022-07-18 10:40:38', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 01-01-1970'),
(303, 2, 4, '2022-07-18 10:40:50', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(304, 2, 4, '2022-07-18 10:41:26', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(305, 2, 4, '2022-07-18 10:41:42', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(306, 2, 4, '2022-07-18 10:42:15', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(307, 2, 4, '2022-07-18 10:42:24', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(308, 2, 4, '2022-07-18 10:42:39', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(309, 2, 4, '2022-07-18 10:43:10', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(310, 2, 4, '2022-07-18 10:43:39', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(311, 2, 4, '2022-07-18 10:44:07', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(312, 2, 4, '2022-07-18 10:44:21', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Maria Tereza, Fecha: 18-07-2022'),
(313, 2, 4, '2022-07-22 11:06:48', 'Paciente', 'Se creo un nuevo embarazo para el paciente:Maria Tereza, Fecha: 22-07-2022'),
(314, 2, 4, '2022-07-22 11:08:46', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Maria Tereza, Fecha: 22-07-2022'),
(315, 2, 4, '2022-07-22 11:09:13', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Maria Tereza, Fecha: 22-07-2022'),
(316, 2, 4, '2022-08-09 16:50:22', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(317, 2, 4, '2022-08-09 16:50:50', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(318, 2, 4, '2022-08-09 16:51:03', 'Paciente', 'Se creo un nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(319, 2, 4, '2022-08-09 16:51:23', 'Paciente', 'Se creo un nueva nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(320, 2, 4, '2022-08-09 16:52:24', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(321, 2, 4, '2022-08-09 16:52:40', 'Pacientes', 'Se edito la cabecera de ciclo del ciclo de silla electromagnetica del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(322, 2, 4, '2022-08-09 16:53:14', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(323, 2, 4, '2022-08-09 16:53:29', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(324, 2, 4, '2022-08-09 20:21:55', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 09-08-2022');
INSERT INTO `bitacora` (`idbitacora`, `idempresa`, `idusuario`, `fecha`, `tipo`, `descripcion`) VALUES
(325, 2, 4, '2022-08-09 20:22:28', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(326, 2, 4, '2022-08-09 20:28:36', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(327, 2, 4, '2022-08-09 20:30:47', 'Paciente', 'Se creo un nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(328, 2, 4, '2022-08-09 20:31:19', 'Paciente', 'Se creo un nueva nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(329, 2, 4, '2022-08-09 20:33:24', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(330, 2, 4, '2022-08-09 20:33:54', 'Pacientes', 'Se edito la cabecera de ciclo del ciclo de silla electromagnetica del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(331, 2, 4, '2022-08-09 20:34:46', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(332, 2, 4, '2022-08-09 20:35:43', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(333, 2, 4, '2022-08-09 21:12:25', 'Paciente', 'Se edito un paciente, Nombre: Catalina de Alcazar, Sexo: Femenino, Teléfono: , Email: jalbuerra1@gmail.com, Dirección: , Fecha Nacimiento: 2022-05-20, Nit: 34935037, Estado: Habilitado, DPI: 7898787-8'),
(334, 2, 4, '2022-08-10 11:24:23', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(335, 2, 4, '2022-08-10 11:27:57', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(336, 2, 4, '2022-08-11 16:45:40', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 11-08-2022'),
(337, 2, 4, '2022-08-11 16:47:50', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 11-08-2022'),
(338, 2, 4, '2022-08-11 16:49:18', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 11-08-2022'),
(339, 2, 4, '2022-08-11 16:49:48', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 11-08-2022'),
(340, 2, 4, '2022-08-11 16:51:30', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 11-08-2022'),
(341, 2, 4, '2022-08-16 12:54:17', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(342, 2, 4, '2022-08-16 13:03:14', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(343, 2, 4, '2022-08-16 13:05:47', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(344, 2, 4, '2022-08-16 16:46:31', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(345, 2, 4, '2022-08-16 17:18:28', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(346, 2, 4, '2022-08-16 17:36:04', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(347, 2, 4, '2022-08-16 17:44:33', 'Paciente', 'Se creo un nuevo control de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(348, 2, 4, '2022-08-16 17:45:34', 'Paciente', 'Se creo un nuevo control de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(349, 2, 4, '2022-08-16 17:47:26', 'Paciente', 'Se creo un nuevo control de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(350, 2, 4, '2022-08-16 17:51:13', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(351, 2, 4, '2022-08-16 17:52:43', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 16-08-2022'),
(352, 2, 4, '2022-08-17 10:00:33', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 17-08-2022'),
(353, 2, 4, '2022-08-17 10:01:10', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 17-08-2022'),
(354, 2, 4, '2022-08-17 10:05:42', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 17-08-2022'),
(355, 2, 4, '2022-08-17 10:15:13', 'Paciente', 'Se creo un nuevo control de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 17-08-2022'),
(356, 2, 4, '2022-08-17 10:16:06', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 17-08-2022'),
(357, 2, 4, '2022-08-17 10:16:32', 'Paciente', 'Se creo un nuevo control de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 17-08-2022'),
(358, 2, 4, '2022-08-23 10:37:33', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(359, 2, 4, '2022-08-23 10:38:05', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(360, 2, 4, '2022-08-23 10:42:32', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(361, 2, 4, '2022-08-23 10:43:25', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(362, 2, 4, '2022-08-23 10:44:16', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(363, 2, 4, '2022-08-23 10:45:07', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(364, 2, 4, '2022-08-23 10:48:04', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(365, 2, 4, '2022-08-23 10:48:53', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(366, 2, 4, '2022-08-23 10:50:10', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(367, 2, 4, '2022-08-23 10:54:50', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 23-08-2022'),
(368, 2, 4, '2022-08-24 10:28:15', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(369, 2, 4, '2022-08-24 10:33:35', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(370, 2, 4, '2022-08-24 11:06:11', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(371, 2, 4, '2022-08-24 16:17:31', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(372, 2, 4, '2022-08-24 16:19:04', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(373, 2, 4, '2022-08-24 16:23:47', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(374, 2, 4, '2022-08-24 16:24:35', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(375, 2, 4, '2022-08-24 16:25:05', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(376, 2, 4, '2022-08-24 16:45:02', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(377, 2, 4, '2022-08-24 16:45:26', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(378, 2, 4, '2022-08-24 16:45:47', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(379, 2, 4, '2022-08-24 16:48:42', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(380, 2, 4, '2022-08-24 16:49:10', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(381, 2, 4, '2022-08-24 16:49:53', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(382, 2, 4, '2022-08-24 16:51:13', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(383, 2, 4, '2022-08-24 16:51:40', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(384, 2, 4, '2022-08-24 16:52:08', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(385, 2, 4, '2022-08-24 16:57:20', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(386, 2, 4, '2022-08-24 16:59:05', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(387, 2, 4, '2022-08-24 16:59:28', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(388, 2, 4, '2022-08-24 16:59:43', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(389, 2, 4, '2022-08-24 16:59:57', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(390, 2, 4, '2022-08-24 17:00:16', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(391, 2, 4, '2022-08-24 17:00:43', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(392, 2, 4, '2022-08-24 17:01:16', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(393, 2, 4, '2022-08-24 17:01:42', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(394, 2, 4, '2022-08-24 17:02:27', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(395, 2, 4, '2022-08-24 17:02:48', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 24-08-2022'),
(396, 2, 4, '2022-08-24 17:03:19', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Maria Tereza, Fecha: 24-08-2022'),
(397, 2, 4, '2022-08-24 17:03:34', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Maria Tereza, Fecha: 24-08-2022'),
(398, 2, 4, '2022-08-24 17:03:59', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Maria Tereza, Fecha: 24-08-2022'),
(399, 2, 4, '2022-08-25 10:35:00', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 25-08-2022'),
(400, 2, 4, '2022-08-26 11:18:44', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(401, 2, 4, '2022-08-30 10:45:15', 'Paciente', 'Se edito un examen fisico del paciente:Catalina de Alcazar, Fecha: 08-06-2022'),
(402, 2, 4, '2022-08-30 11:49:24', 'Paciente', 'Se agrego una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(403, 2, 4, '2022-08-30 16:10:02', 'Paciente', 'Se agrego una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(404, 2, 4, '2022-08-30 16:10:18', 'Paciente', 'Se agrego una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(405, 2, 4, '2022-08-30 16:10:34', 'Paciente', 'Se agrego una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(406, 2, 4, '2022-08-30 16:10:52', 'Paciente', 'Se agrego una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(407, 2, 4, '2022-08-30 16:55:53', 'Paciente', 'Se edito una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(408, 2, 4, '2022-08-30 16:56:10', 'Paciente', 'Se edito una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(409, 2, 4, '2022-08-30 17:16:51', 'Paciente', 'Se edito una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 30-08-2022'),
(410, 2, 4, '2022-08-31 16:56:38', 'Paciente', 'Se agrego una imagen de un embarazo para el paciente:Catalina de Alcazar, Fecha: 31-08-2022'),
(411, 2, 4, '2022-08-31 16:57:22', 'Paciente', 'Se agrego una imagen de un embarazo para el paciente:Catalina de Alcazar, Fecha: 31-08-2022'),
(412, 2, 4, '2022-08-31 16:59:11', 'Paciente', 'Se edito una imagen de un embarazo para el paciente:Catalina de Alcazar, Fecha: 31-08-2022'),
(413, 2, 4, '2022-08-31 17:01:03', 'Paciente', 'Se agrego una imagen de un embarazo para el paciente:Catalina de Alcazar, Fecha: 31-08-2022'),
(414, 2, 4, '2022-09-01 15:43:41', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(415, 2, 4, '2022-09-01 15:47:29', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(416, 2, 4, '2022-09-01 16:42:31', 'Paciente', 'Se agrego una imagen de un embarazo para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(417, 2, 4, '2022-09-01 16:43:18', 'Paciente', 'Se agrego una imagen de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(418, 2, 4, '2022-09-01 16:43:34', 'Paciente', 'Se edito una imagen de un climaymeno para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(419, 2, 4, '2022-09-01 16:43:46', 'Paciente', 'Se agrego una imagen de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(420, 2, 4, '2022-09-01 16:44:05', 'Paciente', 'Se agrego una imagen de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(421, 2, 4, '2022-09-01 16:44:17', 'Paciente', 'Se agrego una imagen de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(422, 2, 4, '2022-09-01 16:44:47', 'Paciente', 'Se edito una imagen de un climaymeno para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(423, 2, 4, '2022-09-01 16:46:14', 'Paciente', 'Se edito una imagen de un climaymeno para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(424, 2, 4, '2022-09-01 16:46:41', 'Paciente', 'Se agrego una imagen de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(425, 2, 4, '2022-09-01 16:47:09', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 01-09-2022'),
(426, 2, 4, '2022-09-02 12:22:34', 'Pacientes', 'Se edito la historia de: Catalina de Alcazar, Fecha: 30-05-2022'),
(427, 2, 2, '2022-09-02 16:57:13', 'Ventas', 'Se creo una venta nueva, Cliente: Catalina de Alcazar, Comprobante: Factura -, Fecha: 2022-09-02, Total Venta: Q.1000, Abonado: 500, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(428, 2, 2, '2022-09-02 16:58:44', 'Ventas', 'Se creo una venta nueva, Cliente: Miriam de Samayoa, Comprobante: Factura -, Fecha: 2022-09-02, Total Venta: Q.225, Abonado: 200, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(429, 2, 4, '2022-09-02 17:18:04', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Jessica Maldonado, Fecha y hora: 2022-09-22 16:30:00, Finaliza: 2022-09-22 17:29:00, Estado: Confirmada'),
(430, 2, 4, '2022-09-02 17:18:12', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Jessica Maldonado, Fecha y hora: 2022-09-22 16:30:00, Finaliza: 2022-09-22 17:29:00, Estado: Confirmada, Apuntes: '),
(431, 2, 4, '2022-09-23 09:59:48', 'Paciente', 'Se creo una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(432, 2, 4, '2022-09-23 10:10:58', 'Paciente', 'Se creo una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(433, 2, 4, '2022-09-23 10:12:23', 'Paciente', 'Se creo una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(434, 2, 4, '2022-09-23 10:14:01', 'Paciente', 'Se creo una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(435, 2, 4, '2022-09-23 10:57:48', 'Paciente', 'Se edito una colposcopia del paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(436, 2, 4, '2022-09-23 10:58:33', 'Paciente', 'Se edito una colposcopia del paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(437, 2, 4, '2022-09-23 11:00:24', 'Paciente', 'Se creo una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(438, 2, 4, '2022-09-23 11:00:35', 'Paciente', 'Se edito una colposcopia del paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(439, 2, 4, '2022-09-23 11:01:28', 'Paciente', 'Se agrego una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(440, 2, 4, '2022-09-23 11:01:38', 'Paciente', 'Se agrego una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(441, 2, 4, '2022-09-23 11:12:17', 'Paciente', 'Se edito una imagen de un climaymeno para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(442, 2, 4, '2022-09-23 11:17:47', 'Paciente', 'Se edito una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(443, 2, 4, '2022-09-23 11:17:57', 'Paciente', 'Se edito una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(444, 2, 4, '2022-09-23 11:55:07', 'Paciente', 'Se agrego una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(445, 2, 4, '2022-09-23 11:55:33', 'Paciente', 'Se agrego una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 23-09-2022'),
(446, 2, 4, '2022-09-26 10:37:55', 'Paciente', 'Se creo una colposcopia para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(447, 2, 4, '2022-09-26 10:38:12', 'Paciente', 'Se edito una colposcopia del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(448, 2, 4, '2022-09-26 17:03:42', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(449, 2, 4, '2022-09-26 17:04:56', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(450, 2, 4, '2022-09-26 17:05:28', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(451, 2, 4, '2022-09-26 17:06:35', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(452, 2, 4, '2022-09-26 17:06:53', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(453, 2, 4, '2022-09-26 17:08:02', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(454, 2, 4, '2022-09-26 17:08:13', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(455, 2, 4, '2022-09-26 17:09:03', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(456, 2, 4, '2022-09-26 17:16:20', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(457, 2, 4, '2022-09-26 17:22:58', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(458, 2, 4, '2022-09-26 17:27:17', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(459, 2, 4, '2022-09-26 17:28:01', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(460, 2, 4, '2022-09-26 17:28:35', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(461, 2, 4, '2022-09-26 17:29:45', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(462, 2, 4, '2022-09-26 17:30:00', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(463, 2, 4, '2022-09-26 17:30:06', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(464, 2, 4, '2022-09-26 17:30:21', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(465, 2, 4, '2022-09-26 17:32:03', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(466, 2, 4, '2022-09-26 17:33:29', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(467, 2, 4, '2022-09-26 17:34:06', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(468, 2, 4, '2022-09-26 17:34:24', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(469, 2, 4, '2022-09-27 11:03:24', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 26-09-2022'),
(470, 2, 4, '2022-09-27 11:31:37', 'Paciente', 'Se agrego una imagen de un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(471, 2, 4, '2022-09-27 11:35:13', 'Paciente', 'Se agrego una imagen de un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(472, 2, 4, '2022-09-27 11:46:50', 'Paciente', 'Se edito una imagen de una ultrasonido para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(473, 2, 4, '2022-09-27 11:49:24', 'Paciente', 'Se agrego una imagen de un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(474, 2, 4, '2022-09-27 11:49:45', 'Paciente', 'Se edito una imagen de una ultrasonido para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(475, 2, 4, '2022-09-27 12:20:15', 'Paciente', 'Se agrego una imagen de un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(476, 2, 4, '2022-09-27 12:20:24', 'Paciente', 'Se agrego una imagen de un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(477, 2, 4, '2022-09-27 12:25:25', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Maria Tereza, Fecha: 27-09-2022'),
(478, 2, 4, '2022-09-27 12:25:36', 'Paciente', 'Se agrego una imagen de un ultrasonido obstetrico para el paciente:Maria Tereza, Fecha: 27-09-2022'),
(479, 2, 4, '2022-09-27 12:25:42', 'Paciente', 'Se agrego una imagen de un ultrasonido obstetrico para el paciente:Maria Tereza, Fecha: 27-09-2022'),
(480, 2, 4, '2022-09-27 16:16:59', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(481, 2, 4, '2022-09-27 16:17:03', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(482, 2, 4, '2022-09-27 16:22:12', 'Paciente', 'Se agrego una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(483, 2, 4, '2022-09-27 16:23:26', 'Paciente', 'Se agrego una imagen de una colposcopia para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(484, 2, 4, '2022-09-27 16:28:30', 'Paciente', 'Se creo un nuevo embarazo para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(485, 2, 4, '2022-09-27 16:30:51', 'Paciente', 'Se creo un examen fisico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(486, 2, 4, '2022-09-27 16:31:00', 'Paciente', 'Se agrego una imagen de un examen fisico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(487, 2, 4, '2022-09-27 16:37:16', 'Paciente', 'Se creo un examen fisico para el paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(488, 2, 4, '2022-09-27 16:38:32', 'Pacientes', 'Se edito la historia de: Catalina de Alcazar, Fecha: 30-05-2022'),
(489, 2, 4, '2022-09-27 16:51:59', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(490, 2, 4, '2022-10-04 10:19:27', 'Paciente', 'Se creo una colposcopia para el paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(491, 2, 4, '2022-10-04 10:19:53', 'Paciente', 'Se edito una colposcopia del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(492, 2, 4, '2022-10-04 15:51:29', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(493, 2, 4, '2022-10-04 15:59:21', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(494, 2, 4, '2022-10-04 16:09:11', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(495, 2, 4, '2022-10-04 16:09:26', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(496, 2, 4, '2022-10-04 16:09:42', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(497, 2, 4, '2022-10-04 16:20:34', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(498, 2, 4, '2022-10-04 16:22:47', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(499, 2, 4, '2022-10-04 16:23:53', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(500, 2, 4, '2022-10-04 16:24:07', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(501, 2, 4, '2022-10-04 16:25:21', 'Paciente', 'Se creo un ultrasonido obstetrico para el paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(502, 2, 4, '2022-10-04 16:25:35', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(503, 2, 4, '2022-10-04 16:26:22', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(504, 2, 4, '2022-10-04 16:27:24', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(505, 2, 4, '2022-10-04 16:39:41', 'Paciente', 'Se edito un ultrasonido obstetrico del paciente:Catalina de Alcazar, Fecha: 04-10-2022'),
(506, 2, 4, '2022-10-05 11:21:38', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(507, 2, 4, '2022-10-05 11:26:08', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(508, 2, 4, '2022-10-05 11:26:43', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(509, 2, 4, '2022-10-05 11:29:33', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(510, 2, 4, '2022-10-05 11:30:42', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(511, 2, 4, '2022-10-05 11:30:52', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(512, 2, 4, '2022-10-05 11:31:32', 'Paciente', 'Se edito una sesion de laser para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(513, 2, 4, '2022-10-05 11:32:02', 'Paciente', 'Se edito una sesion de laser para el paciente:Catalina de Alcazar, Fecha: 13-10-2022'),
(514, 2, 4, '2022-10-05 11:32:39', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(515, 2, 4, '2022-10-05 11:35:34', 'Paciente', 'Se creo una nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(516, 2, 4, '2022-10-05 11:37:41', 'Paciente', 'Se creo una nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(517, 2, 4, '2022-10-05 11:40:16', 'Paciente', 'Se creo una nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(518, 2, 4, '2022-10-05 11:43:48', 'Paciente', 'Se creo una nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(519, 2, 4, '2022-10-05 11:47:11', 'Paciente', 'Se creo un nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(520, 2, 4, '2022-10-05 12:12:02', 'Paciente', 'Se creo un nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(521, 2, 4, '2022-10-05 12:13:09', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(522, 2, 4, '2022-10-05 12:13:22', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(523, 2, 4, '2022-10-05 12:13:29', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(524, 2, 4, '2022-10-05 12:15:36', 'Paciente', 'Se creo un nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(525, 2, 4, '2022-10-05 12:15:58', 'Paciente', 'Se edito una sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 05-10-2022'),
(526, 2, 4, '2022-10-05 12:16:11', 'Paciente', 'Se edito una sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 20-10-2022'),
(527, 2, 4, '2022-10-06 10:39:43', 'Paciente', 'Se creo una nueva radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(528, 2, 4, '2022-10-06 10:40:09', 'Pacientes', 'Se edito la cabecera de radiofrecuencia del paciente: Catalina de Alcazar, Fecha: 09-08-2022'),
(529, 2, 4, '2022-10-06 10:40:15', 'Paciente', 'Se creo un nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(530, 2, 4, '2022-10-06 10:40:29', 'Paciente', 'Se edito una sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(531, 2, 4, '2022-10-06 10:40:59', 'Paciente', 'Se creo un nueva sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(532, 2, 4, '2022-10-06 10:41:10', 'Paciente', 'Se creo un nueva nueva sesion de fotomodulacion para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(533, 2, 4, '2022-10-06 10:41:19', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(534, 2, 4, '2022-10-06 10:41:41', 'Paciente', 'Se edito una sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(535, 2, 4, '2022-10-06 10:41:49', 'Paciente', 'Se edito una sesion de radiofrecuencia para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(536, 2, 4, '2022-10-06 10:50:02', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(537, 2, 4, '2022-10-06 10:50:51', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(538, 2, 4, '2022-10-06 11:09:50', 'Paciente', 'Se creo un nuevo estudio de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(539, 2, 4, '2022-10-06 11:15:24', 'Paciente', 'Se edito un examen fisico del paciente:Catalina de Alcazar, Fecha: 27-09-2022'),
(540, 2, 4, '2022-10-06 11:25:03', 'Paciente', 'Se creo un nuevo control climaterio y menopausea del paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(541, 2, 4, '2022-10-06 11:26:06', 'Paciente', 'Se edito un control de climaterio y menopausea para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(542, 2, 4, '2022-10-06 11:27:57', 'Paciente', 'Se creo un examen fisico para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(543, 2, 18, '2022-10-06 11:42:16', 'Paciente', 'Se edito una sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 09-08-2022'),
(544, 2, 18, '2022-10-06 11:42:34', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(545, 2, 18, '2022-10-06 11:42:43', 'Paciente', 'Se creo un nueva sesion de silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(546, 2, 18, '2022-10-06 11:43:38', 'Paciente', 'Se creo un nuevo estudio de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(547, 2, 18, '2022-10-06 11:44:40', 'Paciente', 'Se creo un nuevo cuestionario de incontinencia urinaria del paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(548, 2, 18, '2022-10-06 11:44:47', 'Paciente', 'Se edito un cuestionario de incontinencia urinaria para el paciente:Catalina de Alcazar, Fecha: 06-10-2022'),
(549, 2, 4, '2022-10-20 10:43:17', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 20-10-2022'),
(550, 2, 4, '2022-10-20 10:54:43', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 20-10-2022'),
(551, 2, 4, '2022-10-20 11:06:21', 'Paciente', 'Se creo un nueva sesion de laser para el paciente:Catalina de Alcazar, Fecha: 20-10-2022'),
(552, 2, 4, '2022-10-20 11:10:28', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 20-10-2022'),
(553, 2, 2, '2022-11-04 10:56:34', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-04 11:00:00, Finaliza: 2022-11-04 11:59:00, Estado: Confirmada'),
(554, 2, 2, '2022-11-04 10:56:40', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-04 11:00:00, Finaliza: 2022-11-04 11:59:00, Estado: Confirmada, Apuntes: '),
(555, 2, 2, '2022-11-04 11:41:28', 'Paciente', 'Se edito un paciente, Nombre: Catalina de Alcazar, Sexo: Femenino, Teléfono: , Email: jalbuerra1@gmail.com, Dirección: , Fecha Nacimiento: 2022-05-20, Nit: 34935037, Estado: Habilitado, DPI: 123142353423401'),
(556, 2, 2, '2022-11-04 11:45:38', 'Ventas', 'Se creo una orden nueva, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Total:Q.950'),
(557, 2, 2, '2022-11-05 11:46:57', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Marcela Chacon, Fecha y hora: 2022-11-05 10:00:00, Finaliza: 2022-11-05 10:29:00, Estado: Confirmada'),
(558, 2, 2, '2022-11-05 11:47:00', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Marcela Chacon, Fecha y hora: 2022-11-05 10:00:00, Finaliza: 2022-11-05 10:29:00, Estado: Confirmada, Apuntes: '),
(559, 2, 2, '2022-11-05 11:53:44', 'Compras', 'Se creo un ingreso nuevo, Proveedor: Bodega Farmacéutica, Comprobante: Factura -, Fecha: 2022-11-05, Total Compra: Q.400'),
(560, 2, 2, '2022-11-14 16:09:58', 'Ventas', 'Se edito un rubro, Nombre: 5. PELLETS, Nota: '),
(561, 2, 2, '2022-11-14 16:10:08', 'Ventas', 'Se edito un rubro, Nombre: 1. ULSTRASONIDO, Nota: '),
(562, 2, 2, '2022-11-14 16:10:20', 'Ventas', 'Se edito un rubro, Nombre: 2. PROCEDIMIENTOS GINECOLOGICOS, Nota: '),
(563, 2, 2, '2022-11-14 16:10:30', 'Ventas', 'Se edito un rubro, Nombre: 3. RADIOFRECUENCIA CORPORAL, Nota: '),
(564, 2, 2, '2022-11-14 16:10:38', 'Ventas', 'Se edito un rubro, Nombre: 4. RADIOFRECUENCIA VAGINAL, Nota: '),
(565, 2, 2, '2022-11-14 16:10:54', 'Ventas', 'Se edito un rubro, Nombre: 6. RADIOFRECUENCIA FRACCIONADA, Nota: '),
(566, 2, 2, '2022-11-14 16:17:06', 'Ventas', 'Se edito una orden, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Total:Q.1350'),
(567, 2, 2, '2022-11-14 16:45:56', 'Ventas', 'Se creo una orden nueva, Paciente: Maria Tereza, Doctor: Jessica Maldonado, Total:Q.6950'),
(568, 2, 2, '2022-11-14 16:51:22', 'Ventas', 'Se edito una orden, Paciente: Maria Tereza, Doctor: Jessica Maldonado, Total:Q.6950'),
(569, 2, 2, '2022-11-14 16:53:19', 'Ventas', 'Se edito un rubro, Nombre: 7. RADIOFRECUENCIA FACIAL, Nota: '),
(570, 2, 2, '2022-11-15 16:38:17', 'Ventas', 'Se edito un rubro, Nombre: 1. ULSTRASONIDO, Nota: Esta es una nota de ultrasonido solo para probar como sale'),
(571, 2, 2, '2022-11-22 12:21:55', 'Citas', 'Se Cancelo una cita, Fecha y Hora: 22-11-2022 10:30 AM - 11:29 AM, Doctor: Otto Szarata, Paciente: Miriam de Samayoa, Usuario: Otto Szarata'),
(572, 2, 2, '2022-11-22 12:23:42', 'Citas', 'Se Cancelo una cita, Fecha y Hora: 22-11-2022 10:00 AM - 11:29 AM, Doctor: Alejandra Gomez, Paciente: Catalina de Alcazar, Usuario: Otto Szarata'),
(573, 2, 2, '2022-11-22 12:30:14', 'Citas', 'Se creo una cita, Paciente: Maria Tereza, Doctor: Jessica Maldonado, Fecha y hora: 2022-11-22 17:30:00, Finaliza: 22-11-2022 18:59:00, Estado: Confirmada'),
(574, 2, 2, '2022-11-22 15:41:12', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 10:15:00, Finaliza: 22-11-2022 11:44:00, Estado: Confirmada'),
(575, 2, 2, '2022-11-22 15:41:19', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 10:15:00, Finaliza: 2022-11-22 10:44:00, Estado: Confirmada, Apuntes: '),
(576, 2, 2, '2022-11-22 15:52:59', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 10:45:00, Finaliza: 22-11-2022 11:14:00, Estado: Confirmada'),
(577, 2, 2, '2022-11-22 17:27:10', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 3:15:00, Finaliza: 23-11-2022 04:44:00, Estado: Confirmada'),
(578, 2, 2, '2022-11-22 17:31:18', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 03:15:00, Finaliza: 23-11-2022 04:44:00, Estado: Confirmada, Apuntes: '),
(579, 2, 2, '2022-11-22 17:34:30', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 10:00:00, Finaliza: 23-11-2022 11:29:00, Estado: Confirmada, Apuntes: '),
(580, 2, 2, '2022-11-22 17:35:28', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 1:00:00, Finaliza: 22-11-2022 01:44:00, Estado: Confirmada'),
(581, 2, 2, '2022-11-22 17:35:36', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 01:00:00, Finaliza: 22-11-2022 01:44:00, Estado: Confirmada, Apuntes: '),
(582, 2, 2, '2022-11-22 17:36:37', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 01:00:00, Finaliza: 22-11-2022 02:29:00, Estado: Confirmada, Apuntes: '),
(583, 2, 2, '2022-11-22 17:37:15', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 01:30:00, Finaliza: 22-11-2022 02:29:00, Estado: Confirmada, Apuntes: '),
(584, 2, 2, '2022-11-22 17:40:01', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 1:00:00, Finaliza: 22-11-2022 01:29:00, Estado: Confirmada'),
(585, 2, 2, '2022-11-22 17:40:05', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 01:00:00, Finaliza: 22-11-2022 01:29:00, Estado: Confirmada, Apuntes: '),
(586, 2, 2, '2022-11-22 17:44:17', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-22 3:00:00, Finaliza: 22-11-2022 03:29:00, Estado: Confirmada, Apuntes: '),
(587, 2, 2, '2022-11-23 09:51:23', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 8:00:00, Finaliza: 23-11-2022 09:59:00, Estado: Confirmada'),
(588, 2, 2, '2022-11-23 09:59:16', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 08:30:00, Finaliza: 23-11-2022 10:29:00, Estado: Confirmada, Apuntes: '),
(589, 2, 2, '2022-11-23 09:59:43', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 10:30:00, Finaliza: 23-11-2022 11:29:00, Estado: Confirmada'),
(590, 2, 2, '2022-11-23 09:59:57', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 10:30:00, Finaliza: 23-11-2022 11:29:00, Estado: Confirmada, Apuntes: '),
(591, 2, 2, '2022-11-23 10:00:11', 'Citas', 'Se Cancelo una cita, Fecha y Hora: 23-11-2022 10:30 AM - 11:29 AM, Doctor: Otto Szarata, Paciente: Catalina de Alcazar, Usuario: Otto Szarata'),
(592, 2, 2, '2022-11-23 10:01:15', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 10:30:00, Finaliza: 23-11-2022 11:59:00, Estado: Confirmada'),
(593, 2, 2, '2022-11-23 10:01:24', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-23 10:30:00, Finaliza: 23-11-2022 12:29:00, Estado: Confirmada, Apuntes: '),
(594, 2, 2, '2022-11-23 10:28:28', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Jessica Maldonado, Fecha y hora: 2022-11-23 10:00:00, Finaliza: 23-11-2022 10:59:00, Estado: Confirmada'),
(595, 2, 2, '2022-11-23 10:28:31', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Jessica Maldonado, Fecha y hora: 2022-11-23 10:00:00, Finaliza: 23-11-2022 10:59:00, Estado: Confirmada, Apuntes: '),
(596, 2, 2, '2022-11-23 10:51:33', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-21 10:15:00, Finaliza: 21-11-2022 10:59:00, Estado: Confirmada'),
(597, 2, 2, '2022-11-23 10:51:36', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Otto Szarata, Fecha y hora: 2022-11-21 10:15:00, Finaliza: 21-11-2022 10:59:00, Estado: Confirmada, Apuntes: '),
(598, 2, 2, '2022-11-23 10:52:40', 'Citas', 'Se creo una cita, Paciente: Catalina de Alcazar, Doctor: Jessica Maldonado, Fecha y hora: 2022-11-21 10:15:00, Finaliza: 21-11-2022 11:44:00, Estado: Confirmada'),
(599, 2, 2, '2022-11-23 10:52:49', 'Citas', 'Se edito una cita, Paciente: Catalina de Alcazar, Doctor: Jessica Maldonado, Fecha y hora: 2022-11-21 10:15:00, Finaliza: 21-11-2022 11:44:00, Estado: Confirmada, Apuntes: '),
(600, 2, 2, '2022-11-23 11:18:31', 'Citas', 'Se creo una cita, Paciente: Maria Tereza, Doctor: Alejandra Gomez, Fecha y hora: 2022-11-22 2:15:00, Finaliza: 22-11-2022 02:59:00, Estado: Confirmada'),
(601, 2, 2, '2022-11-23 11:18:33', 'Citas', 'Se edito una cita, Paciente: Maria Tereza, Doctor: Alejandra Gomez, Fecha y hora: 2022-11-22 02:15:00, Finaliza: 22-11-2022 02:59:00, Estado: Confirmada, Apuntes: '),
(602, 2, 2, '2022-11-23 11:44:35', 'Citas', 'Se creo una cita, Paciente: Maria Tereza, Doctor: Jessica Maldonado, Fecha y hora: 2020-06-17 5:30:00, Finaliza: 17-06-2020 06:14:00, Estado: Confirmada'),
(603, 2, 2, '2022-11-23 11:44:38', 'Citas', 'Se edito una cita, Paciente: Maria Tereza, Doctor: Jessica Maldonado, Fecha y hora: 2020-06-17 05:30:00, Finaliza: 17-06-2020 06:14:00, Estado: Confirmada, Apuntes: '),
(604, 2, 2, '2022-11-24 10:34:44', 'Seguridad', 'Se creo un usuario de Doctor, Nombre: prueba, Email: prueba@prueba.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 5'),
(605, 2, 2, '2022-11-24 10:34:50', 'Seguridad', 'Se elimino un doctor, Nombre: prueba'),
(606, 2, 2, '2022-11-24 10:40:03', 'Seguridad', 'Se edito un usuario doctor Nombre: Alejandra Gomez, Email: agomez@gmail.comgfd, Dirección: , Teléfono: 85423158, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(607, 2, 2, '2022-11-24 11:20:45', 'Seguridad', 'Se creo un usuario , Nombre: prueba, Email: prueba@prueba.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 5'),
(608, 2, 2, '2022-11-24 11:22:50', 'Seguridad', 'Se edito un usuario: Nombre: prueba, Email: prueba@prueba.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 5.00'),
(609, 2, 2, '2022-11-24 11:22:57', 'Seguridad', 'Se edito un usuario: Nombre: prueba, Email: prueba@prueba.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 5.00'),
(610, 2, 2, '2022-11-24 11:27:17', 'Seguridad', 'Se creo un usuario , Nombre: p2, Email: p2@p2.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 3'),
(611, 2, 2, '2022-11-24 11:30:05', 'Seguridad', 'Se creo un usuario de Doctor, Nombre: doc, Email: doc@doc.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 43'),
(612, 2, 2, '2022-11-24 11:31:02', 'Seguridad', 'Se edito un usuario doctor Nombre: doc, Email: doc@doc.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 43.00'),
(613, 2, 2, '2022-11-24 11:31:09', 'Seguridad', 'Se edito un usuario doctor Nombre: doc, Email: doc@doc.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-11-24, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 43.00'),
(614, 2, 2, '2022-11-24 11:31:29', 'Seguridad', 'Se edito un usuario: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 20.00'),
(615, 2, 2, '2022-11-24 11:32:17', 'Seguridad', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Internista, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 0.00'),
(616, 2, 2, '2022-11-24 11:32:24', 'Seguridad', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Internista, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 0.00'),
(617, 2, 2, '2022-11-24 11:32:31', 'Seguridad', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Internista, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 0.00'),
(618, 2, 2, '2022-11-24 11:33:43', 'Seguridad', 'Se edito un usuario doctor Nombre: Alejandra Gomez, Email: agomez@gmail.comgfd, Dirección: , Teléfono: 85423158, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(619, 2, 2, '2022-11-24 11:33:51', 'Seguridad', 'Se edito un usuario doctor Nombre: Jessica Maldonado, Email: jmaldonado@gmail.com, Dirección: 64854254, Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 1989-08-16, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10.00'),
(620, 2, 2, '2022-11-24 11:33:58', 'Seguridad', 'Se edito un usuario doctor Nombre: Marcela Chacon, Email: mchacon@gmail.com, Dirección: , Teléfono: 32156487, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10.00'),
(621, 2, 2, '2022-11-24 11:34:04', 'Seguridad', 'Se edito un usuario doctor Nombre: Mishelle Jacobs, Email: mjacobs@gmail.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(622, 2, 2, '2022-11-24 11:34:18', 'Seguridad', 'Se edito un usuario: Nombre: Ana Castillo, Email: szotto18@gmail.com, Dirección: , Teléfono: 35874125, Tipo: Asistente, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 5.00'),
(623, 2, 2, '2022-11-24 11:45:06', 'Seguridad', 'Se edito un usuario doctor Nombre: Mishelle Jacobs, Email: mjacobs@gmail.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 2022-05-20, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 15.00'),
(624, 2, 4, '2022-11-24 11:50:22', 'Paciente', 'Se creo una nuevo ciclo para silla electromagnetica para el paciente:Catalina de Alcazar, Fecha: 24-11-2022'),
(625, 2, 2, '2022-11-28 10:00:51', 'Seguridad', 'Se creo un usuario de Doctor, Nombre: prueba, Email: docpru@doc.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Urólogo, Fecha Nacimiento: 2022-11-28, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10'),
(626, 2, 2, '2022-11-28 10:01:54', 'Ventas', 'Se creo una orden nueva, Paciente: Maria Tereza, Doctor: prueba, Total:Q.2625'),
(627, 2, 2, '2022-11-28 10:31:16', 'Citas', 'Se creo una cita, Paciente: Maria Tereza, Doctor: prueba, Fecha y hora: 2022-11-28 4:15:00, Finaliza: 28-11-2022 05:44:00, Estado: Confirmada'),
(628, 2, 2, '2022-11-28 10:31:19', 'Citas', 'Se edito una cita, Paciente: Maria Tereza, Doctor: prueba, Fecha y hora: 2022-11-28 04:15:00, Finaliza: 28-11-2022 05:44:00, Estado: Confirmada, Apuntes: ');
INSERT INTO `bitacora` (`idbitacora`, `idempresa`, `idusuario`, `fecha`, `tipo`, `descripcion`) VALUES
(629, 2, 2, '2022-11-28 17:57:56', 'Ventas', 'Se creo una orden nueva, Paciente: paciente prueba, Doctor: Otto Szarata, Total:Q.1300'),
(630, 2, 2, '2022-11-29 10:13:16', 'Ventas', 'Se creo una venta nueva, Cliente: paciente prueba, Comprobante: Factura -, Fecha: 2022-11-29, Total Venta: Q.100, Abonado: 100.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(631, 2, 2, '2022-12-05 12:07:02', 'Ventas', 'Se edito una orden, Paciente: Maria Tereza, Doctor: prueba, Total:Q.2625'),
(632, 2, 2, '2023-05-30 19:41:07', 'Compras', 'Se creo un ingreso nuevo, Proveedor: Bodega Farmacéutica, Comprobante: Factura -, Fecha: 2023-05-30, Total Compra: Q.30'),
(633, 2, 2, '2023-05-31 10:47:49', 'Compras', 'Se creo un ingreso nuevo, Proveedor: Bodega Farmacéutica, Comprobante: Factura -, Fecha: 2023-05-31, Total Compra: Q.590'),
(634, 2, 2, '2023-05-31 11:15:38', 'Compras', 'Se creo un ingreso nuevo, Proveedor: Bodega Farmacéutica, Comprobante: Factura -, Fecha: 2023-05-31, Total Compra: Q.580'),
(635, 2, 2, '2023-05-31 11:18:55', 'Compras', 'Se creo un ingreso nuevo, Proveedor: Amicelco, Comprobante: Factura -, Fecha: 2023-05-31, Total Compra: Q.250');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `condicion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `idempresa`, `nombre`, `descripcion`, `imagen`, `condicion`) VALUES
(25, 2, 'Servicio', NULL, NULL, '1'),
(26, 2, 'Medicamento', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idcita` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `estado_cita` varchar(20) NOT NULL,
  `apuntes` varchar(1000) DEFAULT NULL,
  `turno` int(11) DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idcita`, `idusuario`, `iddoctor`, `idpaciente`, `fecha_inicio`, `fecha_fin`, `estado_cita`, `apuntes`, `turno`, `estado`) VALUES
(37, 2, 4, 7, '2022-11-22 01:30:00', '2022-11-22 02:29:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(38, 2, 4, 7, '2022-11-22 03:00:00', '2022-11-22 03:29:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(39, 2, 4, 7, '2022-11-23 08:30:00', '2022-11-23 10:29:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(40, 2, 4, 7, '2022-11-23 10:30:00', '2022-11-23 11:29:00', 'Cancelada', NULL, NULL, 'Cancelada'),
(41, 2, 4, 7, '2022-11-23 10:30:00', '2022-11-23 12:29:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(42, 2, 14, 7, '2022-11-23 10:00:00', '2022-11-23 10:59:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(43, 2, 4, 7, '2022-11-21 10:15:00', '2022-11-21 10:59:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(44, 2, 14, 7, '2022-11-21 10:15:00', '2022-11-21 11:44:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(45, 2, 15, 6, '2022-11-22 02:15:00', '2022-11-22 02:59:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(46, 2, 14, 6, '2020-06-17 05:30:00', '2020-06-17 06:14:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(47, 2, 41, 6, '2022-11-28 04:15:00', '2022-11-28 05:44:00', 'Confirmada', NULL, NULL, 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `climaymeno`
--

CREATE TABLE `climaymeno` (
  `idclimaymeno` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `climaymeno`
--

INSERT INTO `climaymeno` (`idclimaymeno`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`) VALUES
(6, 7, 4, 4, '2022-08-17'),
(7, 7, 4, 4, '2022-09-27'),
(8, 7, 4, 4, '2022-09-27'),
(9, 7, 4, 4, '2022-10-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `climaymeno_control`
--

CREATE TABLE `climaymeno_control` (
  `idclimaymeno_control` int(11) NOT NULL,
  `idclimaymeno` int(11) NOT NULL,
  `numero_control` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `bochornos` varchar(5) DEFAULT NULL,
  `bochornos_escala` varchar(5) DEFAULT NULL,
  `depresion` varchar(5) DEFAULT NULL,
  `depresion_escala` varchar(5) DEFAULT NULL,
  `irritabilidad` varchar(5) DEFAULT NULL,
  `irritabilidad_escala` varchar(5) DEFAULT NULL,
  `perdida_libido` varchar(5) DEFAULT NULL,
  `perdida_libido_escala` varchar(5) DEFAULT NULL,
  `sequedad_vaginal` varchar(5) DEFAULT NULL,
  `sequedad_vaginal_escala` varchar(5) DEFAULT NULL,
  `insomnio` varchar(5) DEFAULT NULL,
  `insomnio_escala` varchar(5) DEFAULT NULL,
  `cefalea` varchar(5) DEFAULT NULL,
  `cefalea_escala` varchar(5) DEFAULT NULL,
  `fatiga` varchar(5) DEFAULT NULL,
  `fatiga_escala` varchar(5) DEFAULT NULL,
  `artralgias_mialgias` varchar(5) DEFAULT NULL,
  `artralgias_mialgias_escala` varchar(5) DEFAULT NULL,
  `trastornos_miccionales` varchar(5) DEFAULT NULL,
  `trastornos_miccionales_escala` varchar(5) DEFAULT NULL,
  `otros` varchar(5) DEFAULT NULL,
  `otros_si` varchar(200) DEFAULT NULL,
  `peso` decimal(10,0) NOT NULL,
  `talla` decimal(10,0) NOT NULL,
  `presion_arterial` varchar(10) DEFAULT NULL,
  `temperatura` int(11) NOT NULL,
  `frecuencia_cardiaca` int(11) NOT NULL,
  `cara` varchar(50) DEFAULT NULL,
  `mamas` varchar(50) DEFAULT NULL,
  `torax` varchar(50) DEFAULT NULL,
  `abdomen` varchar(50) DEFAULT NULL,
  `vulva` varchar(50) DEFAULT NULL,
  `utero_anexos` varchar(50) DEFAULT NULL,
  `varices` varchar(50) DEFAULT NULL,
  `flujo_vaginal_ph` varchar(50) DEFAULT NULL,
  `hallazgos` varchar(500) DEFAULT NULL,
  `fecha_laboratorios` date NOT NULL,
  `hemograma` varchar(50) DEFAULT NULL,
  `examen_orina` varchar(50) DEFAULT NULL,
  `glicemia_curva_glicemica` varchar(50) DEFAULT NULL,
  `insulina` varchar(50) DEFAULT NULL,
  `panel_lipidos` varchar(50) DEFAULT NULL,
  `transaminasas` varchar(50) DEFAULT NULL,
  `citologia_cervicovaginal` varchar(50) DEFAULT NULL,
  `mamografia` varchar(50) DEFAULT NULL,
  `fsh` varchar(50) DEFAULT NULL,
  `lh` varchar(50) DEFAULT NULL,
  `pruebas_tiroideas` varchar(50) DEFAULT NULL,
  `prolactina` varchar(50) DEFAULT NULL,
  `densitometria_osea` varchar(50) DEFAULT NULL,
  `ultrasonografia_pelvica` varchar(50) DEFAULT NULL,
  `escala_homa` varchar(50) DEFAULT NULL,
  `otros_laboratorio` varchar(100) DEFAULT NULL,
  `acos` varchar(100) DEFAULT NULL,
  `tratamiento_infecciones` varchar(100) DEFAULT NULL,
  `trh_tipo_dosis` varchar(300) DEFAULT NULL,
  `tratamiento_osteoporosis` varchar(100) DEFAULT NULL,
  `calcio` varchar(100) DEFAULT NULL,
  `vitamina_d` varchar(100) DEFAULT NULL,
  `aspirina` varchar(100) DEFAULT NULL,
  `tratamiento_hta` varchar(100) DEFAULT NULL,
  `tratamiento_diabetes` varchar(100) DEFAULT NULL,
  `jabones_intimos` varchar(100) DEFAULT NULL,
  `nota_adicionales` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `climaymeno_control`
--

INSERT INTO `climaymeno_control` (`idclimaymeno_control`, `idclimaymeno`, `numero_control`, `fecha`, `bochornos`, `bochornos_escala`, `depresion`, `depresion_escala`, `irritabilidad`, `irritabilidad_escala`, `perdida_libido`, `perdida_libido_escala`, `sequedad_vaginal`, `sequedad_vaginal_escala`, `insomnio`, `insomnio_escala`, `cefalea`, `cefalea_escala`, `fatiga`, `fatiga_escala`, `artralgias_mialgias`, `artralgias_mialgias_escala`, `trastornos_miccionales`, `trastornos_miccionales_escala`, `otros`, `otros_si`, `peso`, `talla`, `presion_arterial`, `temperatura`, `frecuencia_cardiaca`, `cara`, `mamas`, `torax`, `abdomen`, `vulva`, `utero_anexos`, `varices`, `flujo_vaginal_ph`, `hallazgos`, `fecha_laboratorios`, `hemograma`, `examen_orina`, `glicemia_curva_glicemica`, `insulina`, `panel_lipidos`, `transaminasas`, `citologia_cervicovaginal`, `mamografia`, `fsh`, `lh`, `pruebas_tiroideas`, `prolactina`, `densitometria_osea`, `ultrasonografia_pelvica`, `escala_homa`, `otros_laboratorio`, `acos`, `tratamiento_infecciones`, `trh_tipo_dosis`, `tratamiento_osteoporosis`, `calcio`, `vitamina_d`, `aspirina`, `tratamiento_hta`, `tratamiento_diabetes`, `jabones_intimos`, `nota_adicionales`) VALUES
(10, 6, 1, '2022-08-17', 'SI', NULL, 'NO', '+', 'SI', '++', 'NO', '+++', 'SI', NULL, 'NO', '+', 'SI', '++', 'NO', '+++', 'SI', NULL, 'NO', '+', 'SI', 'otros si sinromas', '1', '2', '3', 4, 5, '6', '7', '8', '9', '0', '1', '2', '3', '4', '2022-08-18', '5', '6', '7', '8', '9', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1'),
(11, 6, 2, '2022-08-17', 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, '1', '2', '3', 4, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `climaymeno_img`
--

CREATE TABLE `climaymeno_img` (
  `idclimaymeno_img` int(11) NOT NULL,
  `idclimaymeno` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `climaymeno_img`
--

INSERT INTO `climaymeno_img` (`idclimaymeno_img`, `idclimaymeno`, `imagen`, `descripcion`, `fecha`) VALUES
(1, 6, 'MKPSBpizarron sz.jpg', 'edfg df gdfg d fgdfg dfg', '2022-09-01'),
(3, 6, '2F5NI2195679.jpg', 'hgjghjgjghjg', '2022-09-01'),
(5, 6, '7H8PVclipart84608.png', 'rtyryryrty', '2022-09-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colposcopia`
--

CREATE TABLE `colposcopia` (
  `idcolposcopia` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `union_escamoso_cilindrica` varchar(5) DEFAULT NULL,
  `legrado_endocervical` varchar(200) DEFAULT NULL,
  `colposcopia_insatisfactoria` varchar(100) DEFAULT NULL,
  `hd_eap` tinyint(1) DEFAULT NULL,
  `hd_eam` tinyint(1) DEFAULT NULL,
  `hd_leucoplasia` tinyint(1) DEFAULT NULL,
  `hd_punteando` tinyint(1) DEFAULT NULL,
  `hd_mosaico` tinyint(1) DEFAULT NULL,
  `hd_vasos` tinyint(1) DEFAULT NULL,
  `hd_area` tinyint(1) DEFAULT NULL,
  `hd_otros` tinyint(1) DEFAULT NULL,
  `hd_otros_especificar` varchar(300) DEFAULT NULL,
  `hallazgos_fuera` varchar(500) DEFAULT NULL,
  `carcinoma_invasor` varchar(5) DEFAULT NULL,
  `otros_hallazgos` varchar(500) DEFAULT NULL,
  `dcn_insatisfactoria` tinyint(1) DEFAULT NULL,
  `dcn_insatisfactoria_especifique` varchar(300) DEFAULT NULL,
  `hallazgos_nomales` varchar(300) DEFAULT NULL,
  `inflamacion_infeccion` tinyint(1) DEFAULT NULL,
  `inflamacion_infeccion_especifique` varchar(300) DEFAULT NULL,
  `biopsia` tinyint(1) DEFAULT NULL,
  `numero_localizacion` varchar(100) DEFAULT NULL,
  `legrado` tinyint(1) DEFAULT NULL,
  `otros_hallazgos_colposcopicos` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `colposcopia`
--

INSERT INTO `colposcopia` (`idcolposcopia`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `union_escamoso_cilindrica`, `legrado_endocervical`, `colposcopia_insatisfactoria`, `hd_eap`, `hd_eam`, `hd_leucoplasia`, `hd_punteando`, `hd_mosaico`, `hd_vasos`, `hd_area`, `hd_otros`, `hd_otros_especificar`, `hallazgos_fuera`, `carcinoma_invasor`, `otros_hallazgos`, `dcn_insatisfactoria`, `dcn_insatisfactoria_especifique`, `hallazgos_nomales`, `inflamacion_infeccion`, `inflamacion_infeccion_especifique`, `biopsia`, `numero_localizacion`, `legrado`, `otros_hallazgos_colposcopicos`) VALUES
(5, 7, 4, 4, '2022-09-23', 'SI', NULL, 'Por no haber visto toda la lesión', 1, 0, 1, 0, 1, 0, 1, 0, '1', '2', 'SI', '3', 1, '4', '1', 0, '5', NULL, NULL, NULL, NULL),
(6, 7, 4, 4, '2022-09-26', 'NO', '555555555555555', 'por no haber visto todo la UEC', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 'NO', NULL, 0, NULL, '0', 0, NULL, NULL, NULL, NULL, NULL),
(7, 7, 4, 4, '2022-10-04', 'SI', '1', 'Por no haber visto toda la lesión', 1, 0, 1, 0, 1, 0, 1, 0, '2', '3', 'SI', '4', 1, '5', '1', 1, '6', 0, '2', 0, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colposcopia_img`
--

CREATE TABLE `colposcopia_img` (
  `idcolposcopia_img` int(11) NOT NULL,
  `idcolposcopia` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `colposcopia_img`
--

INSERT INTO `colposcopia_img` (`idcolposcopia_img`, `idcolposcopia`, `imagen`, `descripcion`, `fecha`) VALUES
(3, 5, '2E53Kdesayunos2.jpg', NULL, '2022-09-23'),
(4, 5, 'K08HIofsm.png', NULL, '2022-09-23'),
(5, 6, '1WIS2desayunos.jpg', NULL, '2022-09-27'),
(6, 6, 'Y4DJCdesayunos.jpg', NULL, '2022-09-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `idcontrol` int(11) NOT NULL,
  `idembarazo` int(11) NOT NULL,
  `numero_control` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `semanas` varchar(50) DEFAULT NULL,
  `sueno` varchar(100) DEFAULT NULL,
  `apetito` varchar(100) DEFAULT NULL,
  `estrenimiento` varchar(100) DEFAULT NULL,
  `disuria` varchar(100) DEFAULT NULL,
  `nauseas_vomitos` varchar(100) DEFAULT NULL,
  `flujo_vaginal` varchar(100) DEFAULT NULL,
  `dolor` varchar(100) DEFAULT NULL,
  `otros` varchar(300) DEFAULT NULL,
  `peso` decimal(10,0) DEFAULT NULL,
  `talla` decimal(10,0) DEFAULT NULL,
  `presion_arterial` varchar(10) DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `frecuencia_cardiaca_materna` int(11) DEFAULT NULL,
  `altura_uterina` decimal(10,0) DEFAULT NULL,
  `frecuencia_cardiaca_fetal` int(11) DEFAULT NULL,
  `presentacion_fetal` varchar(15) DEFAULT NULL,
  `movimientos_fetales` varchar(5) DEFAULT NULL,
  `edema_mi` varchar(5) DEFAULT NULL,
  `varices` varchar(5) DEFAULT NULL,
  `flujo_vaginal_ph` int(11) DEFAULT NULL,
  `medicamentos` varchar(500) DEFAULT NULL,
  `especiales` varchar(200) DEFAULT NULL,
  `proxima_cita` date DEFAULT NULL,
  `nota` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`idcontrol`, `idembarazo`, `numero_control`, `fecha`, `semanas`, `sueno`, `apetito`, `estrenimiento`, `disuria`, `nauseas_vomitos`, `flujo_vaginal`, `dolor`, `otros`, `peso`, `talla`, `presion_arterial`, `temperatura`, `frecuencia_cardiaca_materna`, `altura_uterina`, `frecuencia_cardiaca_fetal`, `presentacion_fetal`, `movimientos_fetales`, `edema_mi`, `varices`, `flujo_vaginal_ph`, `medicamentos`, `especiales`, `proxima_cita`, `nota`) VALUES
(17, 30, 1, '2022-05-30', '5 semanas con 5 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110', '140', '100/80', 36, 78, '12', 165, 'Cefalica', '+', 'NO', 'NO', 4, NULL, NULL, '2022-06-24', NULL),
(19, 30, 2, '2022-05-30', '5 semanas con 5 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3/4', 5, 6, '7', 8, 'Cefalica', '+', 'NO', 'NO', 4, NULL, NULL, '2022-05-30', NULL),
(20, 31, 1, '2022-06-08', '0 semanas con 0 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3/4', 5, 6, '7', 8, 'Cefalica', '+', 'NO', 'NO', 9, NULL, NULL, '2022-06-08', NULL),
(22, 32, 1, '2022-07-22', '0 semanas con 0 días', 'fdfg', 'dfgdfg', 'dfgd', 'fgfdf', 'gdf', 'dfg', 'gdf', 'dfgdfgdfg', '160', '2', '89/35', 609, 34, '34', 34, 'Oblicua', '+++', 'SI', 'SI', 45, '3ertrterrt', 'ertert', '2022-07-22', 'ertert'),
(23, 31, 2, '2022-09-01', '12 semanas con 1 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3/4', 5, 6, '7', 8, 'Cefalica', '+', 'NO', 'NO', 8, NULL, NULL, '2022-09-01', NULL),
(26, 33, 1, '2022-10-20', '3 semanas con 2 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3/4', 5, 6, '7', 88, 'Cefalica', '+', 'NO', 'NO', 9, NULL, NULL, '2022-10-20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso`
--

CREATE TABLE `detalle_ingreso` (
  `iddetalle_ingreso` int(11) NOT NULL,
  `idingreso` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `idpresentacion_compra` int(11) NOT NULL,
  `cantidad_compra` int(11) NOT NULL,
  `bonificacion` int(11) NOT NULL,
  `cantidad_total_compra` int(11) NOT NULL,
  `costo_unidad_compra` decimal(11,2) NOT NULL,
  `sub_total_compra` decimal(11,2) NOT NULL,
  `descuento` decimal(11,2) NOT NULL,
  `total_compra` decimal(11,2) NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `idpresentacion_inventario` int(11) NOT NULL,
  `cantidadxunidad` int(11) NOT NULL,
  `total_unidades_inventario` int(11) NOT NULL,
  `costo_unidad_inventario` decimal(11,2) NOT NULL,
  `descripcion_inventario` varchar(200) DEFAULT NULL,
  `precio_sugerido` decimal(11,2) NOT NULL,
  `porcentaje_utilidad` decimal(11,2) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `precio_oferta` decimal(11,2) NOT NULL,
  `estado_oferta` varchar(20) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_ingreso`
--

INSERT INTO `detalle_ingreso` (`iddetalle_ingreso`, `idingreso`, `idarticulo`, `codigo`, `idpresentacion_compra`, `cantidad_compra`, `bonificacion`, `cantidad_total_compra`, `costo_unidad_compra`, `sub_total_compra`, `descuento`, `total_compra`, `fecha_vencimiento`, `idpresentacion_inventario`, `cantidadxunidad`, `total_unidades_inventario`, `costo_unidad_inventario`, `descripcion_inventario`, `precio_sugerido`, `porcentaje_utilidad`, `precio_venta`, `precio_oferta`, `estado_oferta`, `stock`, `estado`) VALUES
(28, 62, 81, NULL, 20, 20, 1, 21, '30.00', '600.00', '0.00', '600.00', '2022-05-23', 20, 1, 21, '28.57', 'CAJA DE 30 TABLETAS RECUBIERTAS', '45.00', '57.50', '45.00', '10.00', 'Inactivo', 12, 'Activo'),
(29, 62, 73, NULL, 15, 100, 10, 110, '60.00', '6000.00', '0.00', '6000.00', '2022-05-23', 15, 1, 110, '54.55', 'Ovulos para inducir al parto unidad', '100.00', '83.33', '100.00', '10.00', 'Inactivo', 98, 'Activo'),
(30, 62, 72, NULL, 21, 1, 0, 1, '100.00', '100.00', '0.00', '100.00', '2022-05-23', 21, 1, 1, '100.00', 'Frasco de AK Cápsulas de 50MG. T3', '200.00', '100.00', '200.00', '10.00', 'Inactivo', 0, 'Activo'),
(31, 63, 74, '555', 20, 100, 0, 100, '300.00', '30000.00', '0.00', '30000.00', '2022-05-23', 20, 1, 100, '300.00', 'testosterona caja de 10 unidades', '400.00', '33.33', '400.00', '10.00', 'Inactivo', 97, 'Activo'),
(32, 64, 40, NULL, 16, 5, 0, 5, '80.00', '400.00', '0.00', '400.00', '2022-11-05', 16, 1, 5, '80.00', NULL, '0.00', '0.00', '80.00', '0.00', 'Inactivo', 5, 'Activo'),
(33, 65, 46, NULL, 17, 1, 0, 1, '40.00', '40.00', '10.00', '30.00', '2024-06-14', 17, 1, 1, '30.00', NULL, '0.00', '0.00', '30.00', '0.00', 'Inactivo', 1, 'Activo'),
(34, 66, 66, NULL, 20, 10, 0, 10, '60.00', '600.00', '10.00', '590.00', '2023-06-16', 20, 1, 10, '59.00', NULL, '60.00', '1.69', '60.00', '10.00', 'Inactivo', 10, 'Activo'),
(35, 67, 54, NULL, 19, 10, 0, 10, '80.00', '800.00', '70.00', '730.00', '2023-07-20', 19, 1, 10, '73.00', NULL, '0.00', '0.00', '73.00', '0.00', 'Inactivo', 10, 'Activo'),
(36, 68, 40, NULL, 17, 5, 0, 5, '100.00', '500.00', '0.00', '500.00', '2023-07-28', 17, 1, 5, '100.00', NULL, '120.00', '20.00', '120.00', '5.00', 'Inactivo', 5, 'Activo'),
(37, 68, 42, NULL, 17, 1, 0, 1, '80.00', '80.00', '0.00', '80.00', '2023-08-02', 17, 1, 1, '80.00', NULL, '100.00', '10.00', '88.00', '5.00', 'Inactivo', 1, 'Activo'),
(38, 69, 42, NULL, 8, 5, 0, 5, '50.00', '250.00', '0.00', '250.00', '2023-09-21', 8, 1, 5, '50.00', NULL, '0.00', '-100.00', '0.00', '5.00', 'Inactivo', 5, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `iddetalle_orden` int(11) NOT NULL,
  `idorden` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `precio_costo` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_orden`
--

INSERT INTO `detalle_orden` (`iddetalle_orden`, `idorden`, `idarticulo`, `cantidad`, `precio_venta`, `precio_costo`) VALUES
(13, 6, 32, 1, '900.00', '0.00'),
(14, 6, 34, 1, '250.00', '0.00'),
(15, 6, 39, 1, '300.00', '0.00'),
(16, 6, 41, 1, '100.00', '0.00'),
(17, 6, 43, 1, '500.00', '0.00'),
(18, 6, 44, 1, '1500.00', '0.00'),
(19, 6, 46, 1, '150.00', '0.00'),
(20, 6, 51, 1, '250.00', '0.00'),
(21, 6, 53, 1, '2000.00', '0.00'),
(22, 6, 55, 1, '1100.00', '0.00'),
(23, 6, 57, 1, '250.00', '0.00'),
(24, 6, 59, 1, '2000.00', '0.00'),
(25, 6, 49, 1, '1100.00', '0.00'),
(26, 6, 61, 1, '1700.00', '0.00'),
(27, 6, 63, 1, '950.00', '0.00'),
(28, 6, 65, 1, '3200.00', '0.00'),
(29, 6, 68, 1, '1000.00', '0.00'),
(30, 6, 69, 1, '500.00', '0.00'),
(31, 7, 48, 1, '450.00', '0.00'),
(32, 7, 67, 1, '500.00', '0.00'),
(33, 7, 40, 1, '400.00', '0.00'),
(34, 8, 35, 1, '750.00', '0.00'),
(35, 8, 39, 1, '300.00', '0.00'),
(36, 8, 47, 1, '850.00', '0.00'),
(37, 8, 57, 1, '250.00', '0.00'),
(38, 8, 49, 1, '1100.00', '0.00'),
(39, 8, 65, 1, '3200.00', '0.00'),
(40, 8, 66, 1, '500.00', '0.00'),
(41, 9, 37, 1, '75.00', '0.00'),
(42, 9, 42, 1, '550.00', '0.00'),
(43, 9, 53, 1, '2000.00', '0.00'),
(44, 10, 39, 1, '300.00', '0.00'),
(45, 10, 68, 1, '1000.00', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `iddetalle_venta` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `idpresentacion` int(11) DEFAULT NULL,
  `iddetalle_ingreso` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `precio_compra` decimal(11,2) NOT NULL,
  `precio_oferta` decimal(11,2) NOT NULL,
  `descuento` decimal(11,2) NOT NULL,
  `agregado` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`iddetalle_venta`, `idventa`, `idarticulo`, `idpresentacion`, `iddetalle_ingreso`, `cantidad`, `precio_venta`, `precio_compra`, `precio_oferta`, `descuento`, `agregado`) VALUES
(24, 9, 32, NULL, NULL, 1, '900.00', '0.00', '0.00', '0.00', 'SI'),
(25, 9, 34, NULL, NULL, 1, '250.00', '0.00', '0.00', '0.00', 'SI'),
(26, 9, 39, NULL, NULL, 1, '300.00', '0.00', '0.00', '0.00', 'SI'),
(27, 9, 41, NULL, NULL, 1, '100.00', '0.00', '0.00', '0.00', 'SI'),
(28, 9, 43, NULL, NULL, 1, '500.00', '0.00', '0.00', '0.00', 'SI'),
(29, 9, 44, NULL, NULL, 1, '1500.00', '0.00', '0.00', '0.00', 'SI'),
(30, 9, 46, NULL, NULL, 1, '150.00', '0.00', '0.00', '0.00', 'SI'),
(31, 9, 51, NULL, NULL, 1, '250.00', '0.00', '0.00', '0.00', 'SI'),
(32, 9, 53, NULL, NULL, 1, '2000.00', '0.00', '0.00', '0.00', 'SI'),
(33, 9, 55, NULL, NULL, 1, '1100.00', '0.00', '0.00', '0.00', 'SI'),
(34, 9, 57, NULL, NULL, 1, '250.00', '0.00', '0.00', '0.00', 'SI'),
(35, 9, 59, NULL, NULL, 1, '2000.00', '0.00', '0.00', '0.00', 'SI'),
(36, 9, 49, NULL, NULL, 1, '1100.00', '0.00', '0.00', '0.00', 'SI'),
(37, 9, 61, NULL, NULL, 1, '1700.00', '0.00', '0.00', '0.00', 'SI'),
(38, 9, 63, NULL, NULL, 1, '950.00', '0.00', '0.00', '0.00', 'SI'),
(39, 9, 65, NULL, NULL, 1, '3200.00', '0.00', '0.00', '0.00', 'SI'),
(40, 9, 68, NULL, NULL, 1, '1000.00', '0.00', '0.00', '0.00', 'SI'),
(41, 9, 69, NULL, NULL, 1, '500.00', '0.00', '0.00', '0.00', 'SI'),
(42, 10, 81, 20, 28, 3, '45.00', '28.57', '0.00', '0.00', 'SI'),
(43, 10, 73, 15, 29, 1, '100.00', '54.55', '0.00', '0.00', 'SI'),
(44, 11, 72, 21, 30, 1, '200.00', '100.00', '0.00', '0.00', 'SI'),
(45, 12, 81, 20, 28, 1, '45.00', '28.57', '0.00', '0.00', 'SI'),
(46, 13, 74, 20, 31, 2, '400.00', '300.00', '0.00', '0.00', 'SI'),
(47, 14, 74, 20, 31, 1, '400.00', '300.00', '0.00', '0.00', 'SI'),
(48, 15, 73, 15, 29, 10, '100.00', '54.55', '0.00', '0.00', 'SI'),
(49, 16, 81, 20, 28, 5, '45.00', '28.57', '0.00', '0.00', 'SI'),
(50, 17, 73, 15, 29, 1, '100.00', '54.55', '0.00', '0.00', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `iddias` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `apuntes` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarazo`
--

CREATE TABLE `embarazo` (
  `idembarazo` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fur` date DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `trimestre1` varchar(1000) DEFAULT NULL,
  `trimestre2` varchar(1000) DEFAULT NULL,
  `trimestre3` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `embarazo`
--

INSERT INTO `embarazo` (`idembarazo`, `idpaciente`, `iddoctor`, `idusuario`, `fur`, `fecha`, `trimestre1`, `trimestre2`, `trimestre3`) VALUES
(30, 6, 4, 4, '2022-04-20', '2022-05-30', NULL, NULL, NULL),
(31, 7, 4, 4, '2022-06-08', '2022-06-08', NULL, NULL, NULL),
(32, 6, 4, 4, '2022-07-22', '2022-07-22', NULL, NULL, NULL),
(33, 7, 4, 4, '2022-09-27', '2022-09-27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarazo_img`
--

CREATE TABLE `embarazo_img` (
  `idembarazo_img` int(11) NOT NULL,
  `idembarazo` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `embarazo_img`
--

INSERT INTO `embarazo_img` (`idembarazo_img`, `idembarazo`, `imagen`, `descripcion`, `fecha`) VALUES
(1, 31, 'JT07D741407.jpg', 'ejemplo de imagenddd', '2022-08-31'),
(3, 31, 'OYLVXclipart84608.png', 'rfghfghfghfghfgh', '2022-08-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisico`
--

CREATE TABLE `fisico` (
  `idfisico` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `motivo_consulta` varchar(1000) DEFAULT NULL,
  `peso` decimal(10,0) DEFAULT NULL,
  `talla` decimal(10,0) DEFAULT NULL,
  `perimetro_abdominal` decimal(10,0) DEFAULT NULL,
  `presion_arterial` varchar(10) DEFAULT NULL,
  `frecuencia_cardiaca` int(11) DEFAULT NULL,
  `frecuencia_respiratoria` int(11) DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `saturacion_oxigeno` int(11) DEFAULT NULL,
  `impresion_clinica` varchar(500) NOT NULL,
  `plan_diagnostico` varchar(500) NOT NULL,
  `plan_tratamiento` varchar(500) NOT NULL,
  `recomendaciones_generales` varchar(500) NOT NULL,
  `recomendaciones_especificas` varchar(500) NOT NULL,
  `cabeza_cuello` varchar(200) DEFAULT NULL,
  `tiroides` varchar(200) DEFAULT NULL,
  `mamas_axilas` varchar(200) DEFAULT NULL,
  `cardiopulmonar` varchar(200) DEFAULT NULL,
  `abdomen` varchar(500) DEFAULT NULL,
  `genitales_externos` varchar(200) DEFAULT NULL,
  `especuloscopia` varchar(200) DEFAULT NULL,
  `tacto_bimanual` varchar(500) DEFAULT NULL,
  `miembros_inferiores` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fisico`
--

INSERT INTO `fisico` (`idfisico`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `motivo_consulta`, `peso`, `talla`, `perimetro_abdominal`, `presion_arterial`, `frecuencia_cardiaca`, `frecuencia_respiratoria`, `temperatura`, `saturacion_oxigeno`, `impresion_clinica`, `plan_diagnostico`, `plan_tratamiento`, `recomendaciones_generales`, `recomendaciones_especificas`, `cabeza_cuello`, `tiroides`, `mamas_axilas`, `cardiopulmonar`, `abdomen`, `genitales_externos`, `especuloscopia`, `tacto_bimanual`, `miembros_inferiores`) VALUES
(20, 6, 4, 4, '2022-05-30', 'sdaf asdf asdf', '150', '140', '68', '100/80', 78, 18, 36, 98, 'a dfa d', 'ads fasd', 'f adsf a d', 'ad asdf', 'ad fadf adf', 'asdf asdf', 'asd fadsf', 'asdf asdf', 'ad sfadsf', 'adf adf', 'ad fadf', 'adsf', 'aa dfadf', 'asdf asdf'),
(22, 7, 4, 4, '2022-09-27', 'dfgdfg dgdg dfg dfg', '2', '3', '4', '5/6', 7, 8, 9, 0, 'd fgdf g', 'd fgd', 'g df', 'g dfg', 'dg d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 7, 4, 4, '2022-09-27', 'sdfsdf sfd', '1', '2', '3', '5/4', 6, 7, 8, 9, 's fs', 'sfd s', 'fdsdf', 'sf s', 'f sf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 7, 4, 4, '2022-10-06', 'ASD asd ASD sad ASD', '120', '30', '3', '120/80', 4, 5, 6, 7, 'DSFFASD FASDF', 'ASD FADSF', 'ASDF AD', 'F ASDFASDF', 'ASDF ASDF ASDF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisico_img`
--

CREATE TABLE `fisico_img` (
  `idfisico_img` int(11) NOT NULL,
  `idfisico` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fisico_img`
--

INSERT INTO `fisico_img` (`idfisico_img`, `idfisico`, `imagen`, `descripcion`, `fecha`) VALUES
(4, 21, 'NBYUDFBportada.jpg', 'portada de facebook', '2022-08-30'),
(5, 21, 'COIHWLogoSZ.png', 'este es el logo en solitario', '2022-08-30'),
(6, 21, 'AG6MS741407.jpg', 'este es el logo en negro', '2022-08-30'),
(8, 22, 'T7E6Ddesayunos.jpg', NULL, '2022-09-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `idhistoria` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `procedencia` varchar(50) DEFAULT NULL,
  `escolaridad` varchar(100) DEFAULT NULL,
  `tel_emergencia` varchar(20) DEFAULT NULL,
  `profesion` varchar(50) DEFAULT NULL,
  `motivo` varchar(300) DEFAULT NULL,
  `historia` varchar(1000) DEFAULT NULL,
  `ciclos_regulares` varchar(5) DEFAULT NULL,
  `histerectomia` varchar(5) DEFAULT NULL,
  `mastopatia` varchar(5) DEFAULT NULL,
  `cardiopatias` varchar(5) DEFAULT NULL,
  `cafelea_vascular` varchar(5) DEFAULT NULL,
  `tabaquismo` varchar(5) DEFAULT NULL,
  `tratamiento_quimioradiacion` varchar(5) DEFAULT NULL,
  `ejercicio` varchar(5) DEFAULT NULL,
  `affecciones_ginecologicas` varchar(5) DEFAULT NULL,
  `cancer` varchar(5) DEFAULT NULL,
  `varices_trombosis` varchar(5) DEFAULT NULL,
  `enfermedades_hepaticas` varchar(5) DEFAULT NULL,
  `alcoholismo` varchar(5) DEFAULT NULL,
  `cafeista` varchar(5) DEFAULT NULL,
  `trh` varchar(5) DEFAULT NULL,
  `otros` varchar(5) DEFAULT NULL,
  `otros_texto` varchar(200) DEFAULT NULL,
  `cardiopatias_50anos` varchar(5) DEFAULT NULL,
  `cardiopatias_50anos_quien` varchar(50) DEFAULT NULL,
  `osteoporosis` varchar(5) DEFAULT NULL,
  `osteoporosis_quien` varchar(50) DEFAULT NULL,
  `cancer_mama` varchar(5) DEFAULT NULL,
  `cancer_mama_quien` varchar(50) DEFAULT NULL,
  `cancer_ovario` varchar(5) DEFAULT NULL,
  `cancer_ovario_quien` varchar(50) DEFAULT NULL,
  `diabetes` varchar(5) DEFAULT NULL,
  `diabetes_quien` varchar(50) DEFAULT NULL,
  `hiperlipidemias` varchar(5) DEFAULT NULL,
  `hiperlipidemias_quien` varchar(50) DEFAULT NULL,
  `cancer_endometrial` varchar(5) DEFAULT NULL,
  `cancer_endometrial_quien` varchar(50) DEFAULT NULL,
  `familiares_otros` varchar(300) DEFAULT NULL,
  `gestas` int(11) DEFAULT NULL,
  `vias_resolucion` varchar(500) DEFAULT NULL,
  `hijos_vivos` int(11) DEFAULT NULL,
  `hijos_muertos` int(11) DEFAULT NULL,
  `complicaciones_neonatales` varchar(500) DEFAULT NULL,
  `complicaciones_obstetricos` varchar(1000) DEFAULT NULL,
  `abortos` int(11) DEFAULT NULL,
  `causa` varchar(500) DEFAULT NULL,
  `fur` date DEFAULT NULL,
  `ciclos_cada` int(11) DEFAULT NULL,
  `ciclos_por` int(11) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `cantidad_hemorragia` varchar(15) DEFAULT NULL,
  `frecuencia` varchar(15) DEFAULT NULL,
  `dismenorrea` varchar(5) DEFAULT NULL,
  `activa` varchar(5) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `parejas` int(11) DEFAULT NULL,
  `metodo_anticonceptivo` varchar(5) DEFAULT NULL,
  `metodo_si` varchar(50) DEFAULT NULL,
  `tiempo_ano` int(11) DEFAULT NULL,
  `tiempo_mes` int(11) DEFAULT NULL,
  `efectos_secundarios` varchar(500) DEFAULT NULL,
  `ultimo` date DEFAULT NULL,
  `resultado` varchar(500) DEFAULT NULL,
  `colonoscopia` varchar(5) DEFAULT NULL,
  `colonoscopia_si` varchar(500) DEFAULT NULL,
  `procedimientos` varchar(500) DEFAULT NULL,
  `rendiciones` varchar(300) DEFAULT NULL,
  `revision` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`idhistoria`, `idpaciente`, `fecha`, `estado_civil`, `procedencia`, `escolaridad`, `tel_emergencia`, `profesion`, `motivo`, `historia`, `ciclos_regulares`, `histerectomia`, `mastopatia`, `cardiopatias`, `cafelea_vascular`, `tabaquismo`, `tratamiento_quimioradiacion`, `ejercicio`, `affecciones_ginecologicas`, `cancer`, `varices_trombosis`, `enfermedades_hepaticas`, `alcoholismo`, `cafeista`, `trh`, `otros`, `otros_texto`, `cardiopatias_50anos`, `cardiopatias_50anos_quien`, `osteoporosis`, `osteoporosis_quien`, `cancer_mama`, `cancer_mama_quien`, `cancer_ovario`, `cancer_ovario_quien`, `diabetes`, `diabetes_quien`, `hiperlipidemias`, `hiperlipidemias_quien`, `cancer_endometrial`, `cancer_endometrial_quien`, `familiares_otros`, `gestas`, `vias_resolucion`, `hijos_vivos`, `hijos_muertos`, `complicaciones_neonatales`, `complicaciones_obstetricos`, `abortos`, `causa`, `fur`, `ciclos_cada`, `ciclos_por`, `observaciones`, `cantidad_hemorragia`, `frecuencia`, `dismenorrea`, `activa`, `edad`, `parejas`, `metodo_anticonceptivo`, `metodo_si`, `tiempo_ano`, `tiempo_mes`, `efectos_secundarios`, `ultimo`, `resultado`, `colonoscopia`, `colonoscopia_si`, `procedimientos`, `rendiciones`, `revision`) VALUES
(14, 7, '2022-05-30', 'Soltera', 'Quetzaltenango', 'Media', '76548545', 'Estudiante', 'Dolor de estomago', NULL, 'SI', 'SI', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', NULL, 'SI', 'Mama', 'NO', NULL, 'SI', 'Papa', 'NO', NULL, 'SI', NULL, 'NO', NULL, 'SI', NULL, NULL, 2, 'Cesaria', 2, 0, 'Ninguna', 'Reclampsia', 0, NULL, '2022-05-30', 28, 4, NULL, 'Abundante', 'Frecuente', NULL, 'SI', 18, 3, 'SI', 'Acos', 1, 3, 'No', '2022-05-30', 'Normal', 'SI', 'fghf h fgh fgh fgh', NULL, NULL, NULL),
(15, 6, '2022-06-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, NULL, 1, NULL, 2, 3, NULL, NULL, 4, NULL, '2022-06-01', 5, 6, NULL, 'Abundante', 'Frecuente', NULL, 'NO', 8, 9, 'NO', NULL, 0, 0, NULL, '2022-06-01', NULL, 'NO', NULL, NULL, NULL, NULL),
(16, 8, '2022-06-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'Otros en antecedentes personales editado', 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'NO', NULL, 'otros en antecedentes familiares', 1, NULL, 2, 3, NULL, NULL, 4, NULL, '2022-06-03', 5, 6, 'observaciones antecedentes personales', 'Abundante', 'Frecuente', 'NO', 'NO', 7, 8, 'NO', NULL, 0, 0, NULL, '2022-06-03', NULL, 'NO', NULL, NULL, 'rendicioens en historia papanicolau editado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incontinenciau`
--

CREATE TABLE `incontinenciau` (
  `idincontinenciau` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `incontinenciau`
--

INSERT INTO `incontinenciau` (`idincontinenciau`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`) VALUES
(10, 7, 4, 4, '2022-08-23'),
(11, 7, 4, 4, '2022-08-24'),
(13, 7, 18, 18, '2022-10-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incontinenciau_cuestionario`
--

CREATE TABLE `incontinenciau_cuestionario` (
  `idincontinenciau_cuestionario` int(11) NOT NULL,
  `idincontinenciau` int(11) NOT NULL,
  `numero_cuestionario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `frecuencia` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `medida` int(11) NOT NULL,
  `nunca` int(11) DEFAULT NULL,
  `antes_servicio` int(11) DEFAULT NULL,
  `toser` int(11) DEFAULT NULL,
  `duerme` int(11) DEFAULT NULL,
  `esfuerzos` int(11) DEFAULT NULL,
  `termina` int(11) DEFAULT NULL,
  `sinmotivo` int(11) DEFAULT NULL,
  `continua` int(11) DEFAULT NULL,
  `puntuacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `incontinenciau_cuestionario`
--

INSERT INTO `incontinenciau_cuestionario` (`idincontinenciau_cuestionario`, `idincontinenciau`, `numero_cuestionario`, `fecha`, `frecuencia`, `cantidad`, `medida`, `nunca`, `antes_servicio`, `toser`, `duerme`, `esfuerzos`, `termina`, `sinmotivo`, `continua`, `puntuacion`) VALUES
(10, 10, 1, '2022-08-24', 5, 6, 10, 1, 2, 3, 4, 5, 6, 7, 8, 57),
(11, 10, 2, '2022-08-24', 1, 2, 3, 0, 0, 0, 4, 5, 0, 0, 0, 15),
(12, 11, 1, '2022-08-24', 3, 6, 3, 0, 0, 0, 4, 0, 6, 0, 0, 22),
(15, 10, 3, '2022-08-25', 1, 6, 4, 0, 0, 3, 0, 0, 6, 7, 0, 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `idingreso` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(20) DEFAULT NULL,
  `num_comprobante` varchar(20) DEFAULT NULL,
  `fecha` date NOT NULL,
  `impuesto` decimal(11,2) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`idingreso`, `idempresa`, `idproveedor`, `idusuario`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha`, `impuesto`, `estado`) VALUES
(62, 2, 72, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', 'Activo'),
(63, 2, 74, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', 'Activo'),
(64, 2, 73, 2, 'Factura', NULL, NULL, '2022-11-05', '0.00', 'Activo'),
(65, 2, 73, 2, 'Factura', NULL, NULL, '2023-05-30', '0.00', 'Activo'),
(66, 2, 73, 2, 'Factura', NULL, NULL, '2023-05-31', '0.00', 'Activo'),
(67, 2, 73, 2, 'Factura', NULL, NULL, '2023-05-31', '0.00', 'Activo'),
(68, 2, 73, 2, 'Factura', NULL, NULL, '2023-05-31', '0.00', 'Activo'),
(69, 2, 72, 2, 'Factura', NULL, NULL, '2023-05-31', '0.00', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `idorden` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `codigoeeps` varchar(20) DEFAULT NULL,
  `codigopapanicolau` varchar(20) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `estado_orden` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `total` decimal(11,2) DEFAULT NULL,
  `idventa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`idorden`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `codigoeeps`, `codigopapanicolau`, `observaciones`, `estado_orden`, `estado`, `total`, `idventa`) VALUES
(6, 6, 4, 4, '2022-05-20', NULL, NULL, 'Esta es una observacion', 'Finalizada', 'Habilitada', '17750.00', 9),
(7, 7, 4, 2, '2022-11-04', NULL, NULL, NULL, 'Pendiente', 'Habilitada', '1350.00', NULL),
(8, 6, 14, 2, '2022-11-14', NULL, NULL, NULL, 'Pendiente', 'Habilitada', '6950.00', NULL),
(9, 6, 41, 2, '2022-11-28', NULL, NULL, NULL, 'Pendiente', 'Habilitada', '2625.00', NULL),
(10, 17, 4, 2, '2022-11-28', NULL, NULL, NULL, 'Pendiente', 'Habilitada', '1300.00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dpi` varchar(20) NOT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idpaciente`, `nombre`, `sexo`, `correo`, `telefono`, `direccion`, `fecha_nacimiento`, `dpi`, `nit`, `foto`, `estado`) VALUES
(6, 'Maria Tereza', 'Femenino', NULL, NULL, NULL, '1994-10-28', '45687895-8', NULL, 'OH7APistockphoto-470958260-612x612.jpg', 'Habilitado'),
(7, 'Catalina de Alcazar', 'Femenino', 'jalbuerra1@gmail.com', NULL, NULL, '2022-05-20', '123142353423401', '34935037', '6DBKPistockphoto-856599656-612x612.jpg', 'Habilitado'),
(8, 'Miriam de Samayoa', 'Femenino', 'msamayoa@gmail.com', NULL, NULL, '2007-09-15', '4897596-9', NULL, '1JA0Sistockphoto-473795730-612x612.jpg', 'Habilitado'),
(17, 'paciente prueba', 'Masculino', NULL, NULL, NULL, '2012-11-08', '12326374637827', NULL, NULL, 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ottoszarata@szystems.com', '$2y$10$8lEvXxAC..MedzYzCxWI3uZHtM8tKkPOkAUuJDT12NdsLG2mgzgRG', '2022-11-10 06:14:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipo_documento` varchar(45) DEFAULT NULL,
  `num_documento` varchar(45) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `nombre_cuenta` varchar(45) DEFAULT NULL,
  `numero_cuenta` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `idempresa`, `tipo`, `nombre`, `tipo_documento`, `num_documento`, `direccion`, `telefono`, `email`, `banco`, `nombre_cuenta`, `numero_cuenta`) VALUES
(72, 2, 'Proveedor', 'Amicelco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 2, 'Proveedor', 'Bodega Farmacéutica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 2, 'Proveedor', 'Lanquetin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 2, 'Proveedor', 'DASA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `idpresentacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`idpresentacion`, `nombre`, `descripcion`, `estado`) VALUES
(7, 'Tabletas', NULL, 'Habilitado'),
(8, 'Solucion Oral', NULL, 'Habilitado'),
(9, 'Talla M', NULL, 'Habilitado'),
(10, 'Talla S', NULL, 'Habilitado'),
(11, 'Talla L', NULL, 'Habilitado'),
(12, 'Talla XL', NULL, 'Habilitado'),
(13, 'Ampolla', NULL, 'Habilitado'),
(14, 'Barra', NULL, 'Habilitado'),
(15, 'Ovulos', NULL, 'Habilitado'),
(16, 'Capsulas', NULL, 'Habilitado'),
(17, 'Crema', NULL, 'Habilitado'),
(18, 'Blister', NULL, 'Habilitado'),
(19, 'Bolsa', NULL, 'Habilitado'),
(20, 'Caja', NULL, 'Habilitado'),
(21, 'Frasco', NULL, 'Habilitado'),
(22, 'Gotas', NULL, 'Habilitado'),
(23, 'Comprimidos', NULL, 'Habilitado'),
(24, 'Gel', NULL, 'Habilitado'),
(25, 'Caja de ovulos', NULL, 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radiofrecuencia`
--

CREATE TABLE `radiofrecuencia` (
  `idradiofrecuencia` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `fototipo_piel` varchar(5) DEFAULT NULL,
  `implantes` varchar(5) DEFAULT NULL,
  `implantes_tipo` varchar(50) DEFAULT NULL,
  `marcapasos` varchar(5) DEFAULT NULL,
  `periodo_gestacion` varchar(200) DEFAULT NULL,
  `glaucoma` varchar(200) DEFAULT NULL,
  `neoplasias_procesos_tumorales` varchar(200) DEFAULT NULL,
  `portador_epilepsia` varchar(200) DEFAULT NULL,
  `antecedentes_fotosensibilidad` varchar(200) DEFAULT NULL,
  `tratamientos_acidos` varchar(200) DEFAULT NULL,
  `medicamentos_fotosensibles` varchar(200) DEFAULT NULL,
  `resumen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `radiofrecuencia`
--

INSERT INTO `radiofrecuencia` (`idradiofrecuencia`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `fototipo_piel`, `implantes`, `implantes_tipo`, `marcapasos`, `periodo_gestacion`, `glaucoma`, `neoplasias_procesos_tumorales`, `portador_epilepsia`, `antecedentes_fotosensibilidad`, `tratamientos_acidos`, `medicamentos_fotosensibles`, `resumen`) VALUES
(4, 7, 4, 4, '2022-06-28', 'III', 'SI', 'Senos', 'NO', 'periodo', 'glaucoma', 'neoplasias', 'portador', 'antecedentes', 'tratamientos', 'medicamentos', 'resumen'),
(5, 7, 4, 4, '2022-06-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 7, 4, 4, '2022-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 6, 4, 4, '2022-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 7, 4, 4, '2022-08-09', 'I', 'SI', 'Cadera', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'Resumen de tratamiento de Radioterapia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radiofrecuencia_fotomodulacion`
--

CREATE TABLE `radiofrecuencia_fotomodulacion` (
  `idradiofrecuencia_fotomodulacion` int(11) NOT NULL,
  `idradiofrecuencia` int(11) NOT NULL,
  `numero_sesion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `azul_area` varchar(50) DEFAULT NULL,
  `azul_zona` varchar(100) DEFAULT NULL,
  `azul_jm2` int(11) DEFAULT NULL,
  `azul_tiempo` int(11) DEFAULT NULL,
  `infralight_area` varchar(50) DEFAULT NULL,
  `infralight_zona` varchar(100) DEFAULT NULL,
  `infralight_jm2` int(11) DEFAULT NULL,
  `infralight_tiempo` int(11) DEFAULT NULL,
  `ambar_area` varchar(50) DEFAULT NULL,
  `ambar_zona` varchar(100) DEFAULT NULL,
  `ambar_jm2` int(11) DEFAULT NULL,
  `ambar_tiempo` int(11) DEFAULT NULL,
  `rubylight_area` varchar(50) DEFAULT NULL,
  `rubylight_zona` varchar(100) DEFAULT NULL,
  `rubylight_jm2` int(11) DEFAULT NULL,
  `rubylight_tiempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `radiofrecuencia_fotomodulacion`
--

INSERT INTO `radiofrecuencia_fotomodulacion` (`idradiofrecuencia_fotomodulacion`, `idradiofrecuencia`, `numero_sesion`, `fecha`, `azul_area`, `azul_zona`, `azul_jm2`, `azul_tiempo`, `infralight_area`, `infralight_zona`, `infralight_jm2`, `infralight_tiempo`, `ambar_area`, `ambar_zona`, `ambar_jm2`, `ambar_tiempo`, `rubylight_area`, `rubylight_zona`, `rubylight_jm2`, `rubylight_tiempo`) VALUES
(1, 6, 1, '2022-06-30', 'azularea2', 'azulzona', 12, 22, 'inarea2', 'inzona2', 32, 42, 'amarea2', 'amzona2', 52, 62, 'rubarea2', 'rubzona2', 72, 82),
(2, 6, 2, '2022-06-30', NULL, NULL, 0, 0, NULL, NULL, 0, 0, NULL, NULL, 0, 0, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radiofrecuencia_laser`
--

CREATE TABLE `radiofrecuencia_laser` (
  `idradiofrecuencia_laser` int(11) NOT NULL,
  `idradiofrecuencia` int(11) NOT NULL,
  `numero_sesion` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `zonas_a_tratar` varchar(200) DEFAULT NULL,
  `parametros` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `radiofrecuencia_laser`
--

INSERT INTO `radiofrecuencia_laser` (`idradiofrecuencia_laser`, `idradiofrecuencia`, `numero_sesion`, `fecha`, `tipo`, `area`, `zonas_a_tratar`, `parametros`) VALUES
(10, 6, 1, '2022-10-20', 'Fraccionada', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radiofrecuencia_sesion`
--

CREATE TABLE `radiofrecuencia_sesion` (
  `idradiofrecuencia_sesion` int(11) NOT NULL,
  `idradiofrecuencia` int(11) NOT NULL,
  `numero_sesion` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `monopolar_areas` varchar(50) DEFAULT NULL,
  `monopolar_indicacion` varchar(100) DEFAULT NULL,
  `monopolar_temperatura` int(11) DEFAULT NULL,
  `monopolar_tiempo` int(11) DEFAULT NULL,
  `monopolar_zonas_tratadas` varchar(100) DEFAULT NULL,
  `bipolar_areas` varchar(50) DEFAULT NULL,
  `bipolar_indicacion` varchar(100) DEFAULT NULL,
  `bipolar_temperatura` int(11) DEFAULT NULL,
  `bipolar_tiempo` int(11) DEFAULT NULL,
  `bipolar_zonas_tratadas` varchar(100) DEFAULT NULL,
  `tetrapolar_areas` varchar(50) DEFAULT NULL,
  `tetrapolar_indicacion` varchar(100) DEFAULT NULL,
  `tetrapolar_temperatura` int(11) DEFAULT NULL,
  `tetrapolar_tiempo` int(11) DEFAULT NULL,
  `tetrapolar_zonas_tratadas` varchar(100) DEFAULT NULL,
  `hexapolar_areas` varchar(50) DEFAULT NULL,
  `hexapolar_indicacion` varchar(100) DEFAULT NULL,
  `hexapolar_temperatura` int(11) DEFAULT NULL,
  `hexapolar_tiempo` int(11) DEFAULT NULL,
  `hexapolar_zonas_tratadas` varchar(100) DEFAULT NULL,
  `ginecologico_areas` varchar(50) DEFAULT NULL,
  `ginecologico_indicacion` varchar(100) DEFAULT NULL,
  `ginecologico_temperatura` int(11) DEFAULT NULL,
  `ginecologico_tiempo` int(11) DEFAULT NULL,
  `ginecologico_zonas_tratadas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `radiofrecuencia_sesion`
--

INSERT INTO `radiofrecuencia_sesion` (`idradiofrecuencia_sesion`, `idradiofrecuencia`, `numero_sesion`, `fecha`, `monopolar_areas`, `monopolar_indicacion`, `monopolar_temperatura`, `monopolar_tiempo`, `monopolar_zonas_tratadas`, `bipolar_areas`, `bipolar_indicacion`, `bipolar_temperatura`, `bipolar_tiempo`, `bipolar_zonas_tratadas`, `tetrapolar_areas`, `tetrapolar_indicacion`, `tetrapolar_temperatura`, `tetrapolar_tiempo`, `tetrapolar_zonas_tratadas`, `hexapolar_areas`, `hexapolar_indicacion`, `hexapolar_temperatura`, `hexapolar_tiempo`, `hexapolar_zonas_tratadas`, `ginecologico_areas`, `ginecologico_indicacion`, `ginecologico_temperatura`, `ginecologico_tiempo`, `ginecologico_zonas_tratadas`) VALUES
(12, 4, 1, '2022-06-29', 'mono areas2', 'monoindicacion2', 0, 0, 'monozonas2', 'biareas2', 'biindicacion2', 0, 0, 'bizonas2', 'teareas2', 'teindicacion2', 0, 0, 'tezonas2', 'heareas2', 'heindicacion2', 0, 0, 'hezonas2', 'giareas2', 'giindicacio2', 0, 0, 'gizonas2'),
(14, 4, 2, '2022-06-29', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL),
(15, 4, 3, '2022-06-29', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL),
(16, 4, 4, '2022-06-29', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL),
(19, 6, 1, '2022-06-30', '1', '2', 25, 3, '4', '5', '6', 7, 8, '9', '10', '11', 12, 13, '14', '15', '16', 17, 18, '19', '20', '21', 22, 23, '24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `idreceta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idreceta`, `fecha`, `iddoctor`, `idpaciente`, `idusuario`) VALUES
(21, '2022-05-30', 4, 7, 4),
(22, '2022-05-30', 4, 7, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta_medicamento`
--

CREATE TABLE `receta_medicamento` (
  `idreceta_medicamento` int(11) NOT NULL,
  `idreceta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `presentacion` varchar(50) NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `indicaciones` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `receta_medicamento`
--

INSERT INTO `receta_medicamento` (`idreceta_medicamento`, `idreceta`, `cantidad`, `presentacion`, `medicamento`, `indicaciones`) VALUES
(32, 21, 1, '20', 'Setrasec', '2 capsulas cada 12 horas 2 capsulas cada 12 horas 2 capsulas cada 12 horas 2 capsulas cada 12 horas 2 capsulas cada 12 horas 2 capsulas cada 12 horas'),
(33, 21, 1, '21', 'Lactulosa de Mallenn', '2 cucharadas por la noche'),
(34, 21, 2, '25', 'Clifold', 'Un ovulo cada noche por 14 dias'),
(35, 22, 1, '21', 'Tylenol 500mg', '2 cada 8 horas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubro`
--

CREATE TABLE `rubro` (
  `idrubro` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nota` varchar(500) DEFAULT NULL,
  `estado_rubro` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rubro`
--

INSERT INTO `rubro` (`idrubro`, `nombre`, `nota`, `estado_rubro`, `estado`) VALUES
(4, '2. PROCEDIMIENTOS GINECOLOGICOS', NULL, 'Habilitado', 'Habilitado'),
(5, '1. ULSTRASONIDO', 'Esta es una nota de ultrasonido solo para probar como sale', 'Habilitado', 'Habilitado'),
(6, '4. RADIOFRECUENCIA VAGINAL', NULL, 'Habilitado', 'Habilitado'),
(7, 'FACIAL: CONTORNO DE OJOS Y MEJIAS', NULL, 'Deshabilitado', 'Eliminado'),
(8, '3. RADIOFRECUENCIA CORPORAL', NULL, 'Habilitado', 'Habilitado'),
(9, '6. RADIOFRECUENCIA FRACCIONADA', NULL, 'Habilitado', 'Habilitado'),
(10, '5. PELLETS', NULL, 'Habilitado', 'Habilitado'),
(11, '7. RADIOFRECUENCIA FACIAL', NULL, 'Habilitado', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubro_articulo`
--

CREATE TABLE `rubro_articulo` (
  `idrubro_articulo` int(11) NOT NULL,
  `idrubro` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `precio_costo` decimal(11,2) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rubro_articulo`
--

INSERT INTO `rubro_articulo` (`idrubro_articulo`, `idrubro`, `idarticulo`, `precio_costo`, `precio_venta`, `estado`) VALUES
(12, 4, 32, '0.00', '900.00', NULL),
(13, 4, 33, '0.00', '1000.00', NULL),
(14, 4, 34, '0.00', '250.00', NULL),
(15, 4, 35, '0.00', '750.00', NULL),
(17, 4, 37, '0.00', '75.00', NULL),
(18, 5, 38, '0.00', '300.00', NULL),
(19, 5, 39, '0.00', '300.00', NULL),
(20, 5, 40, '0.00', '400.00', NULL),
(21, 5, 41, '0.00', '100.00', NULL),
(22, 5, 42, '0.00', '550.00', NULL),
(23, 5, 43, '0.00', '500.00', NULL),
(24, 6, 44, '0.00', '1500.00', NULL),
(25, 6, 45, '0.00', '1500.00', NULL),
(26, 6, 46, '0.00', '150.00', NULL),
(27, 6, 47, '0.00', '850.00', NULL),
(28, 8, 51, '0.00', '250.00', NULL),
(29, 8, 52, '0.00', '1100.00', NULL),
(30, 8, 53, '0.00', '2000.00', NULL),
(31, 8, 54, '0.00', '250.00', NULL),
(32, 8, 55, '0.00', '1100.00', NULL),
(33, 8, 56, '0.00', '2000.00', NULL),
(34, 8, 57, '0.00', '250.00', NULL),
(35, 8, 58, '0.00', '1100.00', NULL),
(36, 8, 59, '0.00', '2000.00', NULL),
(37, 11, 48, '0.00', '450.00', NULL),
(38, 11, 49, '0.00', '1100.00', NULL),
(39, 11, 50, '0.00', '2000.00', NULL),
(40, 9, 60, '0.00', '950.00', NULL),
(41, 9, 61, '0.00', '1700.00', NULL),
(42, 9, 62, '0.00', '3200.00', NULL),
(43, 9, 63, '0.00', '950.00', NULL),
(44, 9, 64, '0.00', '1700.00', NULL),
(45, 9, 65, '0.00', '3200.00', NULL),
(46, 10, 66, '0.00', '500.00', NULL),
(47, 10, 68, '0.00', '1000.00', NULL),
(48, 10, 67, '0.00', '500.00', NULL),
(49, 10, 69, '0.00', '500.00', NULL),
(50, 10, 70, '0.00', '500.00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillae_ciclo`
--

CREATE TABLE `sillae_ciclo` (
  `idsillae_ciclo` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ciclo_numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sillae_ciclo`
--

INSERT INTO `sillae_ciclo` (`idsillae_ciclo`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `ciclo_numero`) VALUES
(13, 6, 4, 4, '2022-07-15', 1),
(15, 7, 4, 4, '2022-08-09', 1),
(17, 7, 4, 4, '2022-10-20', 1),
(18, 7, 4, 4, '2022-11-24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillae_ciclo_sesion`
--

CREATE TABLE `sillae_ciclo_sesion` (
  `idsillae_ciclo_sesion` int(11) NOT NULL,
  `idsillae_ciclo` int(11) NOT NULL,
  `numero_sesion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `tesla` decimal(11,2) NOT NULL,
  `minutos` int(11) NOT NULL,
  `observaciones` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sillae_ciclo_sesion`
--

INSERT INTO `sillae_ciclo_sesion` (`idsillae_ciclo_sesion`, `idsillae_ciclo`, `numero_sesion`, `fecha`, `tesla`, `minutos`, `observaciones`) VALUES
(32, 13, 1, '2022-07-18', '33.33', 10, 'dfsdfg sdfgsdf gsdfg'),
(37, 13, 2, '2022-07-18', '33.33', 70, 'sdf gsdf gsf gsfd'),
(40, 15, 1, '2022-08-09', '33.33', 30, 'nada importante'),
(44, 15, 2, '2022-10-06', '33.33', 67, 'dfgfd gdf gd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultrasonido_obstetrico`
--

CREATE TABLE `ultrasonido_obstetrico` (
  `idultrasonido_obstetrico` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `spp` varchar(100) DEFAULT NULL,
  `fcardiaca_fetal` varchar(100) DEFAULT NULL,
  `pubicacion` varchar(100) DEFAULT NULL,
  `liquido_amniotico` varchar(100) DEFAULT NULL,
  `utero_anexos` varchar(100) DEFAULT NULL,
  `cervix` varchar(100) DEFAULT NULL,
  `diametro_biparietal_medida` decimal(11,2) DEFAULT NULL,
  `diametro_biparietal_semanas` int(11) DEFAULT NULL,
  `circunferencia_cefalica_medida` decimal(11,2) DEFAULT NULL,
  `circunferencia_cefalica_semanas` int(11) DEFAULT NULL,
  `circunferencia_abdominal_medida` decimal(11,2) DEFAULT NULL,
  `circunferencia_abdominal_semanas` int(11) DEFAULT NULL,
  `longitud_femoral_medida` decimal(11,2) DEFAULT NULL,
  `longitud_femoral_semanas` int(11) DEFAULT NULL,
  `fetometria` varchar(100) DEFAULT NULL,
  `peso_estimado` varchar(100) DEFAULT NULL,
  `percentilo` varchar(100) DEFAULT NULL,
  `comentarios` varchar(1000) DEFAULT NULL,
  `interpretacion` varchar(1000) DEFAULT NULL,
  `recomendaciones` varchar(1000) DEFAULT NULL,
  `observaciones` tinyint(1) DEFAULT NULL,
  `embarazo_unico` tinyint(1) DEFAULT NULL,
  `embarazo_unico_comentar` varchar(300) DEFAULT NULL,
  `alteraciones_crecimiento` tinyint(1) DEFAULT NULL,
  `alteraciones_crecimiento_comentar` varchar(300) DEFAULT NULL,
  `alteraciones_frecuencia` tinyint(1) DEFAULT NULL,
  `alteraciones_frecuencia_comentar` varchar(300) DEFAULT NULL,
  `placenta` tinyint(1) DEFAULT NULL,
  `placenta_comentar` varchar(300) DEFAULT NULL,
  `liquido` tinyint(1) DEFAULT NULL,
  `liquido_comentar` varchar(300) DEFAULT NULL,
  `prematuro` tinyint(1) DEFAULT NULL,
  `prematuro_comentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ultrasonido_obstetrico`
--

INSERT INTO `ultrasonido_obstetrico` (`idultrasonido_obstetrico`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `spp`, `fcardiaca_fetal`, `pubicacion`, `liquido_amniotico`, `utero_anexos`, `cervix`, `diametro_biparietal_medida`, `diametro_biparietal_semanas`, `circunferencia_cefalica_medida`, `circunferencia_cefalica_semanas`, `circunferencia_abdominal_medida`, `circunferencia_abdominal_semanas`, `longitud_femoral_medida`, `longitud_femoral_semanas`, `fetometria`, `peso_estimado`, `percentilo`, `comentarios`, `interpretacion`, `recomendaciones`, `observaciones`, `embarazo_unico`, `embarazo_unico_comentar`, `alteraciones_crecimiento`, `alteraciones_crecimiento_comentar`, `alteraciones_frecuencia`, `alteraciones_frecuencia_comentar`, `placenta`, `placenta_comentar`, `liquido`, `liquido_comentar`, `prematuro`, `prematuro_comentar`) VALUES
(8, 7, 4, 4, '2022-09-26', '1', '2', '3', '4', '5', '6', '7.00', 8, '9.00', 0, '1.00', 2, '3.00', 4, '5', '6', '7', '8', NULL, '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 6, 4, 4, '2022-09-27', '1', '2', '3', '4', '5', '6', '7.00', 8, '9.00', 0, '1.00', 2, '3.00', 4, '5', '6', '7', '8', NULL, '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 7, 4, 4, '2022-10-04', NULL, NULL, NULL, NULL, NULL, NULL, '1.00', 2, '3.00', 4, '5.00', 6, '7.00', 8, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '6', 1, '5', 0, '4', 1, '3', 0, '2', 1, '1'),
(12, 7, 4, 4, '2022-10-04', NULL, NULL, NULL, NULL, NULL, NULL, '1.00', 2, '3.00', 4, '5.00', 6, '7.00', 8, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '6', 1, '5', 1, '4', 1, '3', 1, '2', 1, '1'),
(13, 7, 4, 4, '2022-10-04', NULL, NULL, NULL, NULL, NULL, NULL, '1.00', 2, '3.00', 4, '5.00', 6, '7.00', 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '6', 1, '5', 1, '4', 1, '3', 1, '2', 1, '1'),
(14, 7, 4, 4, '2022-10-04', NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 0, '0.00', 0, '0.00', 0, '0.00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultrasonido_obstetrico_img`
--

CREATE TABLE `ultrasonido_obstetrico_img` (
  `idultrasonido_obstetrico_img` int(11) NOT NULL,
  `idultrasonido_obstetrico` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ultrasonido_obstetrico_img`
--

INSERT INTO `ultrasonido_obstetrico_img` (`idultrasonido_obstetrico_img`, `idultrasonido_obstetrico`, `imagen`, `descripcion`, `fecha`) VALUES
(4, 8, '35YGAofsm.png', NULL, '2022-09-27'),
(5, 8, 'CM5UZdesayunos.jpg', 'ssdfsdfsf', '2022-09-27'),
(6, 10, '5LQZYdesayunos2.jpg', NULL, '2022-09-27'),
(7, 10, 'WSZYVofsm.png', 'wfsdf sdf sdfs', '2022-09-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `empresa` varchar(45) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `contacto_emergencia` varchar(100) DEFAULT NULL,
  `telefono_emergencia` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(45) NOT NULL,
  `especialidad` varchar(50) DEFAULT NULL,
  `no_colegiado` int(10) DEFAULT NULL,
  `zona_horaria` varchar(45) NOT NULL,
  `moneda` varchar(5) NOT NULL,
  `max_descuento` decimal(11,2) NOT NULL,
  `principal` varchar(5) NOT NULL,
  `activo` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `empresa`, `idempresa`, `telefono`, `direccion`, `fecha_nacimiento`, `contacto_emergencia`, `telefono_emergencia`, `logo`, `tipo_usuario`, `especialidad`, `no_colegiado`, `zona_horaria`, `moneda`, `max_descuento`, `principal`, `activo`) VALUES
(2, 'Otto Szarata', 'YDM5Z5XL2FIMG-20180704-WA0016.jpg', 'ottoszarata@szystems.com', NULL, '$2y$10$HeSJ7./wqC/Vh/wPWIeIwe3bLRL9JyQtYvAJndNJkvNbL6MhH7otm', 'ByjSBZIwtIUqVnEwDrllc303WeSkqnC1buCnBUdSWDxtsHDyVfCaQeAw5Qhv', '2019-12-11 23:33:22', '2022-11-24 23:31:29', 'Clinicas El Valle', 2, NULL, NULL, '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, NULL, 'America/Guatemala', 'Q.', '20.00', 'SI', 'SI'),
(4, 'Otto Szarata', 'VURN71I9JMIMG-20180704-WA0015.jpeg', 'szotto18@hotmail.com', NULL, '$2y$10$dQXpz//eAr1FvXv3nFP.iOX6YuuVRu3yECgGj6glrWIzqOB8bDKCG', 'HOt9FfuLOnXRQhekyA3cTGlWRoOI0kK6pDxxFeuXBbna9egjwXElMNDKkSwL', '2021-09-09 23:33:53', '2022-11-24 23:32:31', 'Clinicas El Valle', 2, '+50242153288', 'diagonal 2 32-22 zona 3', '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Internista', 987465, 'America/Guatemala', 'Q.', '0.00', 'NO', 'SI'),
(14, 'Jessica Maldonado', 'J2NC8depositphotos_157004224-stock-photo-happy-smiling-female-doctor-on.jpg', 'jmaldonado@gmail.com', NULL, '$2y$10$DdyT3cM266xwuQohOHqDqOTH52Hc1MNa2QIJoaNositUGJXRiz16K', NULL, '2022-05-20 23:45:16', '2022-11-24 23:33:51', 'Clinicas El Valle', 2, NULL, '64854254', '1989-08-16', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 98745, 'America/Guatemala', 'Q.', '10.00', 'NO', 'SI'),
(15, 'Alejandra Gomez', '2JEBHdepositphotos_157642492-stock-photo-young-female-doctor.jpg', 'agomez@gmail.comgfd', NULL, '$2y$10$0zvg4Bv79YYnrq9BmCve7.EjIqjUXSUG3zTj0ocAcqnitwKTBZity', NULL, '2022-05-20 23:46:18', '2022-11-24 23:33:43', 'Clinicas El Valle', 2, '85423158', NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 123456, 'America/Guatemala', 'Q.', '15.00', 'NO', 'SI'),
(16, 'Marcela Chacon', '36S4H25087596-portrait-of-a-happy-female-doctor.jpg', 'mchacon@gmail.com', NULL, '$2y$10$z7YZ3u/3CqnSE/EpKuZkR./.FVV8PWZZJj5gXhX67X9bsKObCgUSK', NULL, '2022-05-20 23:47:29', '2022-11-24 23:33:58', 'Clinicas El Valle', 2, '32156487', NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 654786, 'America/Guatemala', 'Q.', '10.00', 'NO', 'SI'),
(17, 'Mishelle Jacobs', 'RZX53doctor-16980324.jpg', 'mjacobs@gmail.com', NULL, '$2y$10$ZTM3boAxnAgBWiYBfoyFWOWSSMvKkwzIzO8LAZHn30Qrduk34O1pa', NULL, '2022-05-20 23:48:26', '2022-11-24 23:45:06', 'Clinicas El Valle', 2, NULL, NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 458562, 'America/Guatemala', 'Q.', '15.00', 'NO', 'NO'),
(18, 'Ana Castillo', 'AYCR9istockphoto-515630181-612x612.jpg', 'szotto18@gmail.com', NULL, '$2y$10$V3oIf8tlb9Pzmc/.tT3GnOEZAX4sFhzsQOcsQWeZUuzx/ao6pY/Z6', '9EoUr1VP1ABJ6Yh4SrQe8YjsRrhGUIUh142BpEBBLxdXHIMJlthWiwnZQCRY', '2022-05-20 23:52:40', '2022-11-24 23:34:18', 'Clinicas El Valle', 2, '35874125', NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Asistente', NULL, NULL, 'America/Guatemala', 'Q.', '5.00', 'NO', 'SI'),
(19, 'prueba', NULL, 'Eliminado', NULL, '$2y$10$9cNn5uSVN8wBxF8ZCmfSQerJ0YhpxX6Ky7PAvfuSEVrnLpVPZ77TC', NULL, '2022-11-24 22:34:44', '2022-11-24 22:34:50', 'Clinicas El Valle', 2, NULL, NULL, '2022-11-24', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', NULL, 'America/Guatemala', 'Q.', '5.00', 'NO', NULL),
(20, 'prueba', NULL, 'prueba@prueba.com', NULL, '$2y$10$zJ07MkdheulRc1fg3SxlPejch/IY1MPrY.dYALXJEP/1HJ/T/.CLi', NULL, '2022-11-24 23:20:45', '2022-11-24 23:22:57', 'Clinicas El Valle', 2, NULL, NULL, '2022-11-24', NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, NULL, 'America/Guatemala', 'Q.', '5.00', 'NO', 'SI'),
(21, 'p2', NULL, 'p2@p2.com', NULL, '$2y$10$HTFcguFle6ERLlybenjA7uBLDm3kqmNh8UY.krRW1bvRTH9UpoSGe', NULL, '2022-11-24 23:27:17', '2022-11-24 23:27:17', 'Clinicas El Valle', 2, NULL, NULL, '2022-11-24', NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, NULL, 'America/Guatemala', 'Q.', '3.00', 'NO', 'NO'),
(22, 'doc', NULL, 'doc@doc.com', NULL, '$2y$10$fNxjkPRvO7LX.s4ddraWQeUwzEiTV32HfShXuZVwMqRO3Q9j4QFjm', NULL, '2022-11-24 23:30:05', '2022-11-24 23:31:09', 'Clinicas El Valle', 2, NULL, NULL, '2022-11-24', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', NULL, 'America/Guatemala', 'Q.', '43.00', 'NO', 'NO'),
(41, 'prueba', NULL, 'docpru@doc.com', NULL, '$2y$10$HuEfRLR3sOL9StXeSj2JduAr.y16Xizx02YpgvdianQoxVaNiFphW', NULL, '2022-11-28 22:00:51', '2022-11-28 22:00:51', 'Clinicas El Valle', 2, NULL, NULL, '2022-11-28', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Urólogo', NULL, 'America/Guatemala', 'Q.', '10.00', 'NO', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `idvendedor` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `codigo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`idvendedor`, `idproveedor`, `nombre`, `telefono`, `email`, `codigo`) VALUES
(16, 72, '236', NULL, NULL, '47002.3'),
(17, 72, '616', NULL, NULL, '47002.3'),
(18, 73, 'Josué García', NULL, NULL, 'C009720'),
(19, 73, 'Doris Sanchinelli', NULL, NULL, 'C009720'),
(20, 74, '079 Roberto Ortiz', NULL, NULL, 'A-79165'),
(21, 74, 'Cristian Barrios', NULL, NULL, 'A-79165'),
(22, 75, 'Kevin Ramírez', NULL, NULL, '9750'),
(23, 75, 'Astrid Córdoba', NULL, NULL, '9750');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(20) DEFAULT NULL,
  `num_comprobante` varchar(20) DEFAULT NULL,
  `fecha` date NOT NULL,
  `impuesto` decimal(11,2) NOT NULL,
  `total_venta` decimal(11,2) NOT NULL,
  `total_compra` decimal(11,2) NOT NULL,
  `total_comision` decimal(11,2) NOT NULL,
  `total_impuesto` decimal(11,2) NOT NULL,
  `abonado` decimal(11,2) NOT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `estadosaldo` varchar(20) NOT NULL,
  `estadoventa` varchar(20) NOT NULL,
  `tipopago` varchar(20) NOT NULL,
  `idorden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `idempresa`, `idcliente`, `idusuario`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha`, `impuesto`, `total_venta`, `total_compra`, `total_comision`, `total_impuesto`, `abonado`, `estado`, `estadosaldo`, `estadoventa`, `tipopago`, `idorden`) VALUES
(9, 2, 6, 4, '', NULL, NULL, '2022-05-23', '0.00', '17750.00', '0.00', '0.00', '0.00', '17750.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', 6),
(10, 2, 6, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', '235.00', '140.26', '0.00', '0.00', '235.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL),
(11, 2, 8, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', '200.00', '100.00', '0.00', '0.00', '200.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL),
(12, 2, 6, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', '45.00', '28.57', '0.00', '0.00', '45.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL),
(13, 2, 7, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', '800.00', '600.00', '0.00', '0.00', '800.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL),
(14, 2, 7, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', '400.00', '300.00', '0.00', '0.00', '400.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL),
(15, 2, 7, 2, 'Factura', NULL, NULL, '2022-09-02', '0.00', '1000.00', '545.50', '0.00', '0.00', '500.00', 'A', 'Pendiente', 'Cerrada', 'Efectivo', NULL),
(16, 2, 8, 2, 'Factura', NULL, NULL, '2022-09-02', '0.00', '225.00', '142.85', '0.00', '0.00', '200.00', 'A', 'Pendiente', 'Abierta', 'Efectivo', NULL),
(17, 2, 17, 2, 'Factura', NULL, NULL, '2022-11-29', '0.00', '100.00', '54.55', '0.00', '0.00', '100.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD KEY `idcategoria` (`idcategoria`) USING BTREE;

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idbitacora`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idcita`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `iddoctor` (`iddoctor`),
  ADD KEY `idpaciente` (`idpaciente`);

--
-- Indices de la tabla `climaymeno`
--
ALTER TABLE `climaymeno`
  ADD PRIMARY KEY (`idclimaymeno`);

--
-- Indices de la tabla `climaymeno_control`
--
ALTER TABLE `climaymeno_control`
  ADD PRIMARY KEY (`idclimaymeno_control`);

--
-- Indices de la tabla `climaymeno_img`
--
ALTER TABLE `climaymeno_img`
  ADD PRIMARY KEY (`idclimaymeno_img`);

--
-- Indices de la tabla `colposcopia`
--
ALTER TABLE `colposcopia`
  ADD PRIMARY KEY (`idcolposcopia`);

--
-- Indices de la tabla `colposcopia_img`
--
ALTER TABLE `colposcopia_img`
  ADD PRIMARY KEY (`idcolposcopia_img`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`idcontrol`);

--
-- Indices de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  ADD PRIMARY KEY (`iddetalle_ingreso`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `idingreso` (`idingreso`,`idarticulo`) USING BTREE;

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD PRIMARY KEY (`iddetalle_orden`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`iddetalle_venta`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `idventa` (`idventa`,`idarticulo`) USING BTREE;

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`iddias`),
  ADD KEY `iddoctor` (`iddoctor`);

--
-- Indices de la tabla `embarazo`
--
ALTER TABLE `embarazo`
  ADD PRIMARY KEY (`idembarazo`);

--
-- Indices de la tabla `embarazo_img`
--
ALTER TABLE `embarazo_img`
  ADD PRIMARY KEY (`idembarazo_img`);

--
-- Indices de la tabla `fisico`
--
ALTER TABLE `fisico`
  ADD PRIMARY KEY (`idfisico`);

--
-- Indices de la tabla `fisico_img`
--
ALTER TABLE `fisico_img`
  ADD PRIMARY KEY (`idfisico_img`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`idhistoria`);

--
-- Indices de la tabla `incontinenciau`
--
ALTER TABLE `incontinenciau`
  ADD PRIMARY KEY (`idincontinenciau`);

--
-- Indices de la tabla `incontinenciau_cuestionario`
--
ALTER TABLE `incontinenciau_cuestionario`
  ADD PRIMARY KEY (`idincontinenciau_cuestionario`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`idingreso`),
  ADD KEY `idproveedor` (`idproveedor`) USING BTREE;

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idorden`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`idpresentacion`);

--
-- Indices de la tabla `radiofrecuencia`
--
ALTER TABLE `radiofrecuencia`
  ADD PRIMARY KEY (`idradiofrecuencia`);

--
-- Indices de la tabla `radiofrecuencia_fotomodulacion`
--
ALTER TABLE `radiofrecuencia_fotomodulacion`
  ADD PRIMARY KEY (`idradiofrecuencia_fotomodulacion`);

--
-- Indices de la tabla `radiofrecuencia_laser`
--
ALTER TABLE `radiofrecuencia_laser`
  ADD PRIMARY KEY (`idradiofrecuencia_laser`);

--
-- Indices de la tabla `radiofrecuencia_sesion`
--
ALTER TABLE `radiofrecuencia_sesion`
  ADD PRIMARY KEY (`idradiofrecuencia_sesion`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`idreceta`);

--
-- Indices de la tabla `receta_medicamento`
--
ALTER TABLE `receta_medicamento`
  ADD PRIMARY KEY (`idreceta_medicamento`);

--
-- Indices de la tabla `rubro`
--
ALTER TABLE `rubro`
  ADD PRIMARY KEY (`idrubro`);

--
-- Indices de la tabla `rubro_articulo`
--
ALTER TABLE `rubro_articulo`
  ADD PRIMARY KEY (`idrubro_articulo`);

--
-- Indices de la tabla `sillae_ciclo`
--
ALTER TABLE `sillae_ciclo`
  ADD PRIMARY KEY (`idsillae_ciclo`);

--
-- Indices de la tabla `sillae_ciclo_sesion`
--
ALTER TABLE `sillae_ciclo_sesion`
  ADD PRIMARY KEY (`idsillae_ciclo_sesion`);

--
-- Indices de la tabla `ultrasonido_obstetrico`
--
ALTER TABLE `ultrasonido_obstetrico`
  ADD PRIMARY KEY (`idultrasonido_obstetrico`);

--
-- Indices de la tabla `ultrasonido_obstetrico_img`
--
ALTER TABLE `ultrasonido_obstetrico_img`
  ADD PRIMARY KEY (`idultrasonido_obstetrico_img`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`idvendedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `idcliente` (`idcliente`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=636;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `climaymeno`
--
ALTER TABLE `climaymeno`
  MODIFY `idclimaymeno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `climaymeno_control`
--
ALTER TABLE `climaymeno_control`
  MODIFY `idclimaymeno_control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `climaymeno_img`
--
ALTER TABLE `climaymeno_img`
  MODIFY `idclimaymeno_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `colposcopia`
--
ALTER TABLE `colposcopia`
  MODIFY `idcolposcopia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `colposcopia_img`
--
ALTER TABLE `colposcopia_img`
  MODIFY `idcolposcopia_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `idcontrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  MODIFY `iddetalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  MODIFY `iddetalle_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `iddetalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `iddias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `embarazo`
--
ALTER TABLE `embarazo`
  MODIFY `idembarazo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `embarazo_img`
--
ALTER TABLE `embarazo_img`
  MODIFY `idembarazo_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `fisico`
--
ALTER TABLE `fisico`
  MODIFY `idfisico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `fisico_img`
--
ALTER TABLE `fisico_img`
  MODIFY `idfisico_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `idhistoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `incontinenciau`
--
ALTER TABLE `incontinenciau`
  MODIFY `idincontinenciau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `incontinenciau_cuestionario`
--
ALTER TABLE `incontinenciau_cuestionario`
  MODIFY `idincontinenciau_cuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `idorden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `idpresentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `radiofrecuencia`
--
ALTER TABLE `radiofrecuencia`
  MODIFY `idradiofrecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `radiofrecuencia_fotomodulacion`
--
ALTER TABLE `radiofrecuencia_fotomodulacion`
  MODIFY `idradiofrecuencia_fotomodulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `radiofrecuencia_laser`
--
ALTER TABLE `radiofrecuencia_laser`
  MODIFY `idradiofrecuencia_laser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `radiofrecuencia_sesion`
--
ALTER TABLE `radiofrecuencia_sesion`
  MODIFY `idradiofrecuencia_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `idreceta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `receta_medicamento`
--
ALTER TABLE `receta_medicamento`
  MODIFY `idreceta_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `rubro`
--
ALTER TABLE `rubro`
  MODIFY `idrubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rubro_articulo`
--
ALTER TABLE `rubro_articulo`
  MODIFY `idrubro_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `sillae_ciclo`
--
ALTER TABLE `sillae_ciclo`
  MODIFY `idsillae_ciclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `sillae_ciclo_sesion`
--
ALTER TABLE `sillae_ciclo_sesion`
  MODIFY `idsillae_ciclo_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `ultrasonido_obstetrico`
--
ALTER TABLE `ultrasonido_obstetrico`
  MODIFY `idultrasonido_obstetrico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ultrasonido_obstetrico_img`
--
ALTER TABLE `ultrasonido_obstetrico_img`
  MODIFY `idultrasonido_obstetrico_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idvendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
