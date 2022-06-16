-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 19:10:59
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

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
  `codigo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idempresa` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `minimo` int(11) NOT NULL,
  `bodega` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ubicacion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(210, 2, 4, '2022-06-08 11:38:46', 'Paciente', 'Se creo un nuevo control de embarazo para el paciente:Catalina de Alcazar, Fecha: 08-06-2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
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
  `estado_cita` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apuntes` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `turno` int(11) DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `idcontrol` int(11) NOT NULL,
  `idembarazo` int(11) NOT NULL,
  `numero_control` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `semanas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sueno` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apetito` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estrenimiento` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `disuria` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nauseas_vomitos` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `flujo_vaginal` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dolor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `otros` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `peso` decimal(10,0) DEFAULT NULL,
  `talla` decimal(10,0) DEFAULT NULL,
  `presion_arterial` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `frecuencia_cardiaca_materna` int(11) DEFAULT NULL,
  `altura_uterina` decimal(10,0) DEFAULT NULL,
  `frecuencia_cardiaca_fetal` int(11) DEFAULT NULL,
  `presentacion_fetal` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `movimientos_fetales` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `edema_mi` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `varices` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `flujo_vaginal_ph` int(11) DEFAULT NULL,
  `medicamentos` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `especiales` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `proxima_cita` date DEFAULT NULL,
  `nota` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`idcontrol`, `idembarazo`, `numero_control`, `fecha`, `semanas`, `sueno`, `apetito`, `estrenimiento`, `disuria`, `nauseas_vomitos`, `flujo_vaginal`, `dolor`, `otros`, `peso`, `talla`, `presion_arterial`, `temperatura`, `frecuencia_cardiaca_materna`, `altura_uterina`, `frecuencia_cardiaca_fetal`, `presentacion_fetal`, `movimientos_fetales`, `edema_mi`, `varices`, `flujo_vaginal_ph`, `medicamentos`, `especiales`, `proxima_cita`, `nota`) VALUES
(17, 30, 1, '2022-05-30', '5 semanas con 5 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110', '140', '100/80', 36, 78, '12', 165, 'Cefalica', '+', 'NO', 'NO', 4, NULL, NULL, '2022-06-24', NULL),
(19, 30, 2, '2022-05-30', '5 semanas con 5 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3/4', 5, 6, '7', 8, 'Cefalica', '+', 'NO', 'NO', 4, NULL, NULL, '2022-05-30', NULL),
(20, 31, 1, '2022-06-08', '0 semanas con 0 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3/4', 5, 6, '7', 8, 'Cefalica', '+', 'NO', 'NO', 9, NULL, NULL, '2022-06-08', NULL),
(21, 31, 2, '2022-06-08', '0 semanas con 0 días', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3/4', 5, 6, '7', 8, 'Cefalica', '+', 'NO', 'NO', 9, NULL, NULL, '2022-06-08', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso`
--

CREATE TABLE `detalle_ingreso` (
  `iddetalle_ingreso` int(11) NOT NULL,
  `idingreso` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `codigo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
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
  `descripcion_inventario` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio_sugerido` decimal(11,2) NOT NULL,
  `porcentaje_utilidad` decimal(11,2) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `precio_oferta` decimal(11,2) NOT NULL,
  `estado_oferta` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_ingreso`
--

INSERT INTO `detalle_ingreso` (`iddetalle_ingreso`, `idingreso`, `idarticulo`, `codigo`, `idpresentacion_compra`, `cantidad_compra`, `bonificacion`, `cantidad_total_compra`, `costo_unidad_compra`, `sub_total_compra`, `descuento`, `total_compra`, `fecha_vencimiento`, `idpresentacion_inventario`, `cantidadxunidad`, `total_unidades_inventario`, `costo_unidad_inventario`, `descripcion_inventario`, `precio_sugerido`, `porcentaje_utilidad`, `precio_venta`, `precio_oferta`, `estado_oferta`, `stock`, `estado`) VALUES
(28, 62, 81, NULL, 20, 20, 1, 21, '30.00', '600.00', '0.00', '600.00', '2022-05-23', 20, 1, 21, '28.57', 'CAJA DE 30 TABLETAS RECUBIERTAS', '45.00', '57.50', '45.00', '10.00', 'Inactivo', 17, 'Activo'),
(29, 62, 73, NULL, 15, 100, 10, 110, '60.00', '6000.00', '0.00', '6000.00', '2022-05-23', 15, 1, 110, '54.55', 'Ovulos para inducir al parto unidad', '100.00', '83.33', '100.00', '10.00', 'Inactivo', 109, 'Activo'),
(30, 62, 72, NULL, 21, 1, 0, 1, '100.00', '100.00', '0.00', '100.00', '2022-05-23', 21, 1, 1, '100.00', 'Frasco de AK Cápsulas de 50MG. T3', '200.00', '100.00', '200.00', '10.00', 'Inactivo', 0, 'Activo'),
(31, 63, 74, '555', 20, 100, 0, 100, '300.00', '30000.00', '0.00', '30000.00', '2022-05-23', 20, 1, 100, '300.00', 'testosterona caja de 10 unidades', '400.00', '33.33', '400.00', '10.00', 'Inactivo', 97, 'Activo');

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
(30, 6, 69, 1, '500.00', '0.00');

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
  `agregado` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL
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
(47, 14, 74, 20, 31, 1, '400.00', '300.00', '0.00', '0.00', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `iddias` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `apuntes` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
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
  `trimestre1` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `trimestre2` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `trimestre3` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `embarazo`
--

INSERT INTO `embarazo` (`idembarazo`, `idpaciente`, `iddoctor`, `idusuario`, `fur`, `fecha`, `trimestre1`, `trimestre2`, `trimestre3`) VALUES
(30, 6, 4, 4, '2022-04-20', '2022-05-30', NULL, NULL, NULL),
(31, 7, 4, 4, '2022-06-08', '2022-06-08', NULL, NULL, NULL);

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
  `motivo_consulta` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `peso` decimal(10,0) DEFAULT NULL,
  `talla` decimal(10,0) DEFAULT NULL,
  `perimetro_abdominal` decimal(10,0) DEFAULT NULL,
  `presion_arterial` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `frecuencia_cardiaca` int(11) DEFAULT NULL,
  `frecuencia_respiratoria` int(11) DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `saturacion_oxigeno` int(11) DEFAULT NULL,
  `impresion_clinica` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `plan_diagnostico` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `plan_tratamiento` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `recomendaciones_generales` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `recomendaciones_especificas` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `cabeza_cuello` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tiroides` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `mamas_axilas` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cardiopulmonar` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `abdomen` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `genitales_externos` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `especuloscopia` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tacto_bimanual` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `miembros_inferiores` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fisico`
--

INSERT INTO `fisico` (`idfisico`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `motivo_consulta`, `peso`, `talla`, `perimetro_abdominal`, `presion_arterial`, `frecuencia_cardiaca`, `frecuencia_respiratoria`, `temperatura`, `saturacion_oxigeno`, `impresion_clinica`, `plan_diagnostico`, `plan_tratamiento`, `recomendaciones_generales`, `recomendaciones_especificas`, `cabeza_cuello`, `tiroides`, `mamas_axilas`, `cardiopulmonar`, `abdomen`, `genitales_externos`, `especuloscopia`, `tacto_bimanual`, `miembros_inferiores`) VALUES
(20, 6, 4, 4, '2022-05-30', 'sdaf asdf asdf', '150', '140', '68', '100/80', 78, 18, 36, 98, 'a dfa d', 'ads fasd', 'f adsf a d', 'ad asdf', 'ad fadf adf', 'asdf asdf', 'asd fadsf', 'asdf asdf', 'ad sfadsf', 'adf adf', 'ad fadf', 'adsf', 'aa dfadf', 'asdf asdf'),
(21, 7, 4, 4, '2022-06-08', 'sdfsd fsd fsdf sdf sdf s', '1', '2', '3', '4', 5, 7, 8, 9, 'sdf sdf s', 'df sdf', 'sd fsd f', 's dfs fs', 'dfsdf sdf sdf s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `idhistoria` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado_civil` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `procedencia` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `escolaridad` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tel_emergencia` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `profesion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `motivo` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `historia` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ciclos_regulares` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `histerectomia` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `mastopatia` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cardiopatias` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cafelea_vascular` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tabaquismo` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tratamiento_quimioradiacion` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ejercicio` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `affecciones_ginecologicas` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancer` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `varices_trombosis` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `enfermedades_hepaticas` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `alcoholismo` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cafeista` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `trh` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `otros` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `otros_texto` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cardiopatias_50anos` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cardiopatias_50anos_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `osteoporosis` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `osteoporosis_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancer_mama` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancer_mama_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancer_ovario` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancer_ovario_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diabetes` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diabetes_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hiperlipidemias` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hiperlipidemias_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancer_endometrial` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancer_endometrial_quien` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `familiares_otros` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `gestas` int(11) DEFAULT NULL,
  `vias_resolucion` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hijos_vivos` int(11) DEFAULT NULL,
  `hijos_muertos` int(11) DEFAULT NULL,
  `complicaciones_neonatales` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `complicaciones_obstetricos` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `abortos` int(11) DEFAULT NULL,
  `causa` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fur` date DEFAULT NULL,
  `ciclos_cada` int(11) DEFAULT NULL,
  `ciclos_por` int(11) DEFAULT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cantidad_hemorragia` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `frecuencia` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dismenorrea` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activa` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `parejas` int(11) DEFAULT NULL,
  `metodo_anticonceptivo` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `metodo_si` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tiempo_ano` int(11) DEFAULT NULL,
  `tiempo_mes` int(11) DEFAULT NULL,
  `efectos_secundarios` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ultimo` date DEFAULT NULL,
  `resultado` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `colonoscopia` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `colonoscopia_si` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `procedimientos` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rendiciones` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `revision` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL
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
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `idingreso` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tipo_comprobante` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `serie_comprobante` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `num_comprobante` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `impuesto` decimal(11,2) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`idingreso`, `idempresa`, `idproveedor`, `idusuario`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha`, `impuesto`, `estado`) VALUES
(62, 2, 72, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', 'Activo'),
(63, 2, 74, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `codigoeeps` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codigopapanicolau` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado_orden` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `total` decimal(11,2) DEFAULT NULL,
  `idventa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`idorden`, `idpaciente`, `iddoctor`, `idusuario`, `fecha`, `codigoeeps`, `codigopapanicolau`, `observaciones`, `estado_orden`, `estado`, `total`, `idventa`) VALUES
(6, 6, 4, 4, '2022-05-20', NULL, NULL, 'Esta es una observacion', 'Finalizada', 'Habilitada', '17750.00', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dpi` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idpaciente`, `nombre`, `sexo`, `correo`, `telefono`, `direccion`, `fecha_nacimiento`, `dpi`, `nit`, `foto`, `estado`) VALUES
(6, 'Maria Tereza', 'Femenino', NULL, NULL, NULL, '1994-10-28', '45687895-8', NULL, 'OH7APistockphoto-470958260-612x612.jpg', 'Habilitado'),
(7, 'Catalina de Alcazar', 'Masculino', NULL, NULL, NULL, '2022-05-20', '7898787-8', NULL, '6DBKPistockphoto-856599656-612x612.jpg', 'Habilitado'),
(8, 'Miriam de Samayoa', 'Femenino', 'msamayoa@gmail.com', NULL, NULL, '2007-09-15', '4897596-9', NULL, '1JA0Sistockphoto-473795730-612x612.jpg', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ottoszarata@szystems.com', '$2y$10$CJb.qRdm0K0YbG0vP6Pue.COaMXl7hgQOeuSoSDUxEhUtGY2UrtHe', '2020-05-14 04:26:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_documento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `num_documento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `banco` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre_cuenta` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_cuenta` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
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
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
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
  `fototipo_piel` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `implantes` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `implantes_tipo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `marcapasos` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `periodo_gestacion` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `galucoma` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `neoplasias_procesos_tumorales` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `portador_epilepsia` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `antecedentes_fotosensibilidad` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tratamientos_acidos` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `medicamentos_fotosensibles` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `resumen` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radiofrecuencia_fotomodulacion`
--

CREATE TABLE `radiofrecuencia_fotomodulacion` (
  `idradiofrecuencia_fotomodulacion` int(11) NOT NULL,
  `idradiofrecuencia` int(11) NOT NULL,
  `numero_sesion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `azul_area` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `azul_zona` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `azul_jm2` int(11) DEFAULT NULL,
  `azul_tiempo` int(11) DEFAULT NULL,
  `infralight_area` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `infralight_zona` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `infralight_jm2` int(11) DEFAULT NULL,
  `infralight_tiempo` int(11) DEFAULT NULL,
  `ambar_area` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ambar_zona` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ambar_jm2` int(11) DEFAULT NULL,
  `ambar_tiempo` int(11) DEFAULT NULL,
  `rubylight_area` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rubylight_zona` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rubylight_jm2` int(11) DEFAULT NULL,
  `rubylight_tiempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radiofrecuencia_sesion`
--

CREATE TABLE `radiofrecuencia_sesion` (
  `idradiofrecuencia_sesion` int(11) NOT NULL,
  `idradiofrecuencia` int(11) NOT NULL,
  `numero_sesion` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `monopolar_areas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `monopolar_indicacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `monopolar_temperatura` int(11) DEFAULT NULL,
  `monopolar_tiempo` int(11) DEFAULT NULL,
  `monopolar_zonas_tratadas` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `bipolar_areas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `bipolar_indicacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `bipolar_temperatura` int(11) DEFAULT NULL,
  `bipolar_tiempo` int(11) DEFAULT NULL,
  `bipolar_zonas_tratadas` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tetrapolar_areas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tetrapolar_indicacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tetrapolar_temperatura` int(11) DEFAULT NULL,
  `tetrapolar_tiempo` int(11) DEFAULT NULL,
  `tetrapolar_zonas_tratadas` int(11) DEFAULT NULL,
  `hexapolar_areas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hexapolar_indicacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hexapolar_temperatura` int(11) DEFAULT NULL,
  `hexapolar_tiempo` int(11) DEFAULT NULL,
  `hexapolar_zonas_tratadas` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ginecologico_areas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ginecologico_indicacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ginecologico_temperatura` int(11) DEFAULT NULL,
  `ginecologico_tiempo` int(11) DEFAULT NULL,
  `ginecologico_zonas_tratadas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  `presentacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `medicamento` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `indicaciones` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
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
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nota` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado_rubro` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rubro`
--

INSERT INTO `rubro` (`idrubro`, `nombre`, `nota`, `estado_rubro`, `estado`) VALUES
(4, 'PROCEDIMIENTOS GINECOLOGICOS', NULL, 'Habilitado', 'Habilitado'),
(5, 'ULSTRASONIDO', NULL, 'Habilitado', 'Habilitado'),
(6, 'RADIOFRECUENCIA VAGINAL', NULL, 'Habilitado', 'Habilitado'),
(7, 'FACIAL: CONTORNO DE OJOS Y MEJIAS', NULL, 'Deshabilitado', 'Eliminado'),
(8, 'RADIOFRECUENCIA CORPORAL', NULL, 'Habilitado', 'Habilitado'),
(9, 'RADIOFRECUENCIA FRACCIONADA', NULL, 'Habilitado', 'Habilitado'),
(10, 'PELLETS', NULL, 'Habilitado', 'Habilitado'),
(11, 'RADIOFRECUENCIA FACIAL: Contorno de ojos y mejias', NULL, 'Habilitado', 'Habilitado');

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
  `estado` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idempresa` int(11) NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `contacto_emergencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_emergencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_usuario` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_colegiado` int(10) DEFAULT NULL,
  `zona_horaria` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneda` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_descuento` decimal(11,2) NOT NULL,
  `principal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `empresa`, `idempresa`, `telefono`, `direccion`, `fecha_nacimiento`, `contacto_emergencia`, `telefono_emergencia`, `logo`, `tipo_usuario`, `especialidad`, `no_colegiado`, `zona_horaria`, `moneda`, `max_descuento`, `principal`) VALUES
(2, 'Otto Szarata', 'YDM5Z5XL2FIMG-20180704-WA0016.jpg', 'ottoszarata@szystems.com', NULL, '$2y$10$HeSJ7./wqC/Vh/wPWIeIwe3bLRL9JyQtYvAJndNJkvNbL6MhH7otm', '7bZwocxfKJNkUzBO4GmLKcjWIN5KtKRFQARC9hVtYM1JXnNut6sxdZGHTDhG', '2019-12-11 23:33:22', '2021-10-20 23:28:39', 'Clinicas El Valle', 2, NULL, NULL, '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, NULL, 'America/Guatemala', 'Q.', '20.00', 'SI'),
(4, 'Otto Szarata', 'VURN71I9JMIMG-20180704-WA0015.jpeg', 'szotto18@hotmail.com', NULL, '$2y$10$dQXpz//eAr1FvXv3nFP.iOX6YuuVRu3yECgGj6glrWIzqOB8bDKCG', 'IhFx3k8dtCF5tZ3PcP5MbPyVzC098huB9sUZ4qerGctebTWKmUPHGyToxf5z', '2021-09-09 23:33:53', '2022-06-01 23:13:18', 'Clinicas El Valle', 2, '+50242153288', 'diagonal 2 32-22 zona 3', '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Internista', 987465, 'America/Guatemala', 'Q.', '0.00', 'NO'),
(14, 'Jessica Maldonado', 'J2NC8depositphotos_157004224-stock-photo-happy-smiling-female-doctor-on.jpg', 'jmaldonado@gmail.com', NULL, '$2y$10$DdyT3cM266xwuQohOHqDqOTH52Hc1MNa2QIJoaNositUGJXRiz16K', NULL, '2022-05-20 23:45:16', '2022-06-01 23:12:35', 'Clinicas El Valle', 2, NULL, '64854254', '1989-08-16', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 98745, 'America/Guatemala', 'Q.', '10.00', 'NO'),
(15, 'Alejandra Gomez', '2JEBHdepositphotos_157642492-stock-photo-young-female-doctor.jpg', 'agomez@gmail.com', NULL, '$2y$10$0zvg4Bv79YYnrq9BmCve7.EjIqjUXSUG3zTj0ocAcqnitwKTBZity', NULL, '2022-05-20 23:46:18', '2022-06-01 23:11:20', 'Clinicas El Valle', 2, '85423158', NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 123456, 'America/Guatemala', 'Q.', '15.00', 'NO'),
(16, 'Marcela Chacon', '36S4H25087596-portrait-of-a-happy-female-doctor.jpg', 'mchacon@gmail.com', NULL, '$2y$10$z7YZ3u/3CqnSE/EpKuZkR./.FVV8PWZZJj5gXhX67X9bsKObCgUSK', NULL, '2022-05-20 23:47:29', '2022-06-01 23:12:46', 'Clinicas El Valle', 2, '32156487', NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 654786, 'America/Guatemala', 'Q.', '10.00', 'NO'),
(17, 'Mishelle Jacobs', 'RZX53doctor-16980324.jpg', 'mjacobs@gmail.com', NULL, '$2y$10$ZTM3boAxnAgBWiYBfoyFWOWSSMvKkwzIzO8LAZHn30Qrduk34O1pa', NULL, '2022-05-20 23:48:26', '2022-06-01 23:13:00', 'Clinicas El Valle', 2, NULL, NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 458562, 'America/Guatemala', 'Q.', '15.00', 'NO'),
(18, 'Ana Castillo', 'AYCR9istockphoto-515630181-612x612.jpg', 'acastillo@gmail.com', NULL, '$2y$10$Pw/3ttoR6ezl6fXzrvz4xejczbRIQbAfStydXy7VvRZXsI0aPFHBC', NULL, '2022-05-20 23:52:40', '2022-05-20 23:52:40', 'Clinicas El Valle', 2, '35874125', NULL, '2022-05-20', NULL, NULL, '1630601297logolargo.png', 'Asistente', NULL, NULL, 'America/Guatemala', 'Q.', '5.00', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `idvendedor` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
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
  `tipo_comprobante` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `serie_comprobante` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `num_comprobante` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `impuesto` decimal(11,2) NOT NULL,
  `total_venta` decimal(11,2) NOT NULL,
  `total_compra` decimal(11,2) NOT NULL,
  `total_comision` decimal(11,2) NOT NULL,
  `total_impuesto` decimal(11,2) NOT NULL,
  `abonado` decimal(11,2) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estadosaldo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estadoventa` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `tipopago` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
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
(14, 2, 7, 4, 'Factura', NULL, NULL, '2022-05-23', '0.00', '400.00', '300.00', '0.00', '0.00', '400.00', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL);

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
-- Indices de la tabla `fisico`
--
ALTER TABLE `fisico`
  ADD PRIMARY KEY (`idfisico`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`idhistoria`);

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
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `idcontrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  MODIFY `iddetalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  MODIFY `iddetalle_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `iddetalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `iddias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `embarazo`
--
ALTER TABLE `embarazo`
  MODIFY `idembarazo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `fisico`
--
ALTER TABLE `fisico`
  MODIFY `idfisico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `idhistoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `idorden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `idradiofrecuencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `radiofrecuencia_fotomodulacion`
--
ALTER TABLE `radiofrecuencia_fotomodulacion`
  MODIFY `idradiofrecuencia_fotomodulacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `radiofrecuencia_sesion`
--
ALTER TABLE `radiofrecuencia_sesion`
  MODIFY `idradiofrecuencia_sesion` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idvendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
