-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2022 a las 19:07:09
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
(1, 'dfg232', 2, 1, 'portatil hp core i5', 0, 'central', '9ki', 'lkajdfjdfklasjdfklasjdflaksjdf', '', 'Activo'),
(6, '45F4G', 2, 3, 'Mouse XTech Inhalambrico', 0, 'Central', 'A-1', 'Mouse XTech inalambrico 1000dpi', 'G68DWíndice.jpg', 'Activo'),
(7, '6D54G', 2, 3, 'Teclado XTech Inhalambrico', 0, 'Central', 'A-2', 'teclado inhalambrico xtech sin teclado numerico', 'HEINYproduct-4946-01.jpg', 'Activo'),
(8, '897DF4', 2, 3, 'Monitor Samsung 24\" Curvo', 0, 'Central', 'B-22', 'Monitor Samsung de 24\" curvo, resolucion HD 1080, FreeSync, modo Gaming', 'P52RNmonitor-samsung-24-curvo-f390-full-hd-1080-freesync-hdmi-vga-D_NQ_NP_850387-MLA31115228992_062019-Q.jpg', 'Activo'),
(10, '56D4G65DF', 2, 3, 'Impresora Multifuncional Epson Inhalambrica', 0, NULL, NULL, 'impresora multifuncional con tanques de tinta para cada color', 'ELNUK1a.jpg', 'Activo'),
(11, 'D+64GFD', 2, 8, 'XBOX ONE X', 0, NULL, NULL, 'Consola de videojuegos Xbox One X 4k, Dolby Atmos 1 TB', 'RNPSB471937-microsoft-xbox-one-x.jpg', 'Activo'),
(12, 'D54G6D5F', 2, 8, 'PLAY STATION 4 PRO', 0, NULL, NULL, 'Consola de video juegos play station 4 pro 4k reescalado', 'UXWF0BQNGOPS4-Pro-SOURCE-Sony.jpg', 'Activo'),
(13, 'DF8G65DF', 2, 8, 'NINTEDO SWITCH', 0, NULL, NULL, NULL, '2HB0Xthree-modes-in-one.png', 'Activo'),
(14, 'D65F4GDF', 2, 8, 'Play Station Classic', 0, 'Central', 'B-99', 'Play station Clasica con 20 juegos preinstalados', '40WD83max.jpg', 'Activo'),
(15, 'D+6F5G', 2, 8, 'Sega Mega Drive Mini', 0, 'Central', 'D-4', NULL, 'FJWZ6BY3QUíndice.jfif', 'Activo'),
(16, 'D4GF5', 2, 8, 'Atari Mini', 0, 'Central', 'R-5', 'Consolo retro Atari retro', 'MVHLC450_1000.jpg', 'Activo'),
(17, '6345E', 2, 21, 'Hub USB Imexx', 0, 'central', 'L-99', 'Hub USB 3.0', '', 'Activo'),
(18, '63445', 2, 21, 'Hub USB Imexx', 0, 'central', 'L-99', 'Hub USB 3.0', NULL, 'Inactivo'),
(19, '56YI4J', 2, 21, 'Teclado Gaming half', 0, 'Central', 'F99', 'teclado mitad gaming', NULL, 'Activo'),
(20, '+6UI5', 2, 2, 'dsfsdfs', 0, NULL, NULL, NULL, '', 'Inactivo'),
(21, 'G5H4J', 2, 2, 'asdfdfgh', 0, NULL, NULL, NULL, '', 'Inactivo'),
(22, '65GH4', 2, 3, 'werwerwer', 0, NULL, NULL, NULL, '', 'Inactivo'),
(23, '65V4H', 2, 1, 'Cincho negro Guess', 0, NULL, NULL, NULL, 'F42S5wifi.jpg', 'Activo'),
(24, '6FG4H', 2, 2, 'efsdfsdfsdf', 0, NULL, NULL, NULL, NULL, 'Inactivo'),
(25, '8RY4U', 2, 2, '2222', 0, NULL, NULL, NULL, NULL, 'Inactivo'),
(26, '+FG4J', 2, 2, '1111', 0, NULL, NULL, NULL, NULL, 'Inactivo'),
(27, '+F9D', 2, 2, 'cvbxcvb', 0, NULL, NULL, NULL, NULL, 'Inactivo'),
(28, '3R2T1YU8', 2, 9, 'sdfadsfasf', 0, 'sdfsdfsf', NULL, NULL, 'WB06CWIN_20210608_18_04_39_Pro.jpg', 'Inactivo'),
(29, '48Y45FG', 2, 3, 'prueba8', 108, 'atras8', 'abajo8', 'slkdfja;lk ja;lskdjf a;slkdfj as;lkdj f888', '432LXWIN_20210608_18_04_44_Pro.jpg', 'Activo'),
(30, 'F65GH4', 2, 7, 'Ximarin', 10, 'Principal', 'A', 'Ximarin relajante muscular', 'V3IGLFelices Fiestas.png', 'Activo'),
(31, 'g654f', 2, 1, 'Neurobion', 10, NULL, NULL, NULL, NULL, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idbitacora` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idbitacora`, `idempresa`, `idusuario`, `fecha`, `tipo`, `descripcion`) VALUES
(1, 2, 2, '2019-12-11 11:48:54', 'Usuario ', 'Se edito un usuario, Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Documento: -, Dirección: , Teléfono: , tipo: Administrador, Banco: , Nombre Cuenta: , Numero Cuenta: '),
(2, 2, 2, '2019-12-11 11:50:01', 'Configuración ', 'Se edito la configuración, Empresa: Szystems, Zona Horaria: America/Guatemala, Moneda: Q.'),
(3, 2, 2, '2021-09-02 10:48:17', 'Configuración ', 'Se edito la configuración, Empresa: Szystems, Zona Horaria: America/Guatemala, Moneda: Q.'),
(4, 2, 2, '2021-09-02 10:48:29', 'Configuración ', 'Se edito la configuración, Empresa: Clinicas El Valle, Zona Horaria: America/Guatemala, Moneda: Q.'),
(5, 2, 2, '2021-09-09 11:00:47', 'Administrador ', 'Se edito un usuario administrador: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , tipo: Administrador'),
(6, 2, 2, '2021-09-09 11:33:29', 'Usuario', 'Se creo un usuario de Doctor, Nombre: Regina Santander, Email: rsantander@hotmail.com, Dirección: , Teléfono: 456875, tipo: Doctor, Especialidad: Obstetra'),
(7, 2, 2, '2021-09-09 11:33:53', 'Usuario', 'Se creo un usuario de Doctor, Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecologo'),
(8, 2, 4, '2021-09-09 11:41:39', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: , Teléfono: , tipo: Doctor, Especialidad: Ginecologo'),
(9, 2, 4, '2021-09-09 11:41:56', 'Usuario', 'Se edito un usuario doctor Nombre: Banco Industrial Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Ginecologo'),
(10, 2, 4, '2021-09-09 11:43:26', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Ginecologo'),
(11, 2, 4, '2021-09-09 11:43:33', 'Usuario', 'Se elimino un doctor, Nombre: Regina Santander'),
(12, 2, 2, '2021-09-14 11:20:24', 'Usuario', 'Se creo un usuario de Doctor, Nombre: Juan Perez, Email: juanperez@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: 4584234, tipo: Doctor, Especialidad: Ginecologo'),
(13, 2, 2, '2021-09-14 11:20:51', 'Usuario', 'Se creo un usuario , Nombre: Edgar Sajquim, Email: edgars@singular.com.gt, Dirección: , Teléfono: , tipo: Administrador'),
(14, 2, 2, '2021-09-14 11:27:08', 'Usuario', 'Se edito un usuario doctor Nombre: Juan Perez, Email: juanperez@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: 4584234, tipo: Doctor, Especialidad: Ginecologo'),
(15, 2, 2, '2021-09-14 11:27:20', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Ginecologo'),
(16, 2, 2, '2021-09-14 11:27:31', 'Usuario', 'Se edito un usuario doctor Nombre: Juan Perez, Email: juanperez@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: 4584234, tipo: Doctor, Especialidad: Ginecologo'),
(17, 2, 2, '2021-09-14 11:28:18', 'Usuario', 'Se edito un usuario administrador: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , tipo: Administrador'),
(18, 2, 2, '2021-09-14 11:28:58', 'Usuario', 'Se edito un usuario administrador: Nombre: Edgar Sajquim, Email: edgars@singular.com.gt, Dirección: , Teléfono: , tipo: Administrador'),
(19, 2, 2, '2021-09-14 11:29:25', 'Usuario', 'Se edito un usuario administrador: Nombre: Edgar Sajquim, Email: edgars@singular.com.gt, Dirección: , Teléfono: , tipo: Administrador'),
(20, 2, 2, '2021-09-14 11:30:23', 'Usuario', 'Se edito un usuario administrador: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , tipo: Administrador'),
(21, 2, 2, '2021-09-14 11:31:21', 'Usuario', 'Se edito un usuario administrador: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , tipo: Administrador'),
(22, 2, 2, '2021-09-14 11:31:33', 'Usuario', 'Se edito un usuario administrador: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , tipo: Administrador'),
(23, 2, 2, '2021-09-14 11:32:07', 'Usuario', 'Se edito un usuario administrador: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , tipo: Administrador'),
(24, 2, 2, '2021-09-14 11:32:53', 'Usuario', 'Se edito un usuario doctor Nombre: Juan Perez, Email: juanperez@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: 4584234, tipo: Doctor, Especialidad: Ginecologo'),
(25, 2, 2, '2021-09-17 16:51:43', 'Paciente', 'Se creo un paciente, Nombre: Manuel Giron, Sexo: Masculino, Teléfono: , Email: mgiron@hotmail.com, Dirección: , Fecha Nacimiento: 1983-09-30, Nit: , Estado: Habilitado'),
(26, 2, 2, '2021-09-17 17:35:11', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(27, 2, 2, '2021-09-17 17:35:23', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(28, 2, 2, '2021-09-17 17:37:09', 'Paciente', 'Se creo un paciente, Nombre: lolo, Sexo: Masculino, Teléfono: , Email: jalburea1@gmail.com, Dirección: , Fecha Nacimiento: 2021-09-17, Nit: , Estado: Habilitado'),
(29, 2, 2, '2021-09-17 17:37:41', 'Paciente', 'Se edito un paciente, Nombre: lolo, Sexo: Masculino, Teléfono: , Email: jalbuerra@gmail.com, Dirección: , Fecha Nacimiento: 2021-09-17, Nit: , Estado: Habilitado'),
(30, 2, 2, '2021-09-17 17:37:50', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(31, 2, 2, '2021-09-17 17:37:59', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(32, 2, 2, '2021-09-17 17:39:11', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(33, 2, 2, '2021-09-17 17:39:18', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(34, 2, 2, '2021-09-17 17:42:27', 'Paciente', 'Se edito un paciente, Nombre: Mariana Figueroa, Sexo: Femenino, Teléfono: 46545654, Email: mfigueroa@hotmail.com, Dirección: Calle 3 98-33 zona 78 Quetzaltenango, Fecha Nacimiento: 1999-06-25, Nit: 6454654-5, Estado: Habilitado'),
(35, 2, 2, '2021-09-17 17:43:52', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(36, 2, 2, '2021-09-17 17:45:22', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(37, 2, 2, '2021-09-17 17:45:37', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(38, 2, 2, '2021-09-17 17:46:39', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(39, 2, 2, '2021-09-17 17:46:47', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(40, 2, 2, '2021-09-17 17:47:16', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(41, 2, 2, '2021-09-17 17:47:22', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(42, 2, 2, '2021-09-17 17:53:18', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(43, 2, 2, '2021-09-17 18:03:39', 'Paciente', 'Se edito un paciente, Nombre: Mariana Figueroa, Sexo: Femenino, Teléfono: 46545654, Email: mfigueroa@hotmail.com, Dirección: Calle 3 98-33 zona 78 Quetzaltenango, Fecha Nacimiento: 1999-06-25, Nit: 6454654-5, Estado: Habilitado'),
(44, 2, 2, '2021-09-17 18:04:24', 'Paciente', 'Se elimino un huesped, Nombre: lolo'),
(45, 2, 2, '2021-09-17 18:04:39', 'Paciente', 'Se edito un paciente, Nombre: Manuel Giron, Sexo: Masculino, Teléfono: , Email: mgiron@hotmail.com, Dirección: , Fecha Nacimiento: 1983-09-30, Nit: , Estado: Habilitado'),
(46, 2, 2, '2021-09-17 18:05:00', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 2005-06-21, Nit: 4565554-5, Estado: Habilitado'),
(47, 2, 2, '2021-09-17 18:05:27', 'Paciente', 'Se edito un paciente, Nombre: Manuel Giron, Sexo: Masculino, Teléfono: , Email: mgiron@hotmail.com, Dirección: , Fecha Nacimiento: 2000-09-01, Nit: , Estado: Habilitado'),
(48, 2, 2, '2021-09-17 18:06:09', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 1984-08-18, Nit: 4565554-5, Estado: Habilitado'),
(49, 2, 2, '2021-09-21 11:46:51', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Obstetra'),
(50, 2, 2, '2021-09-23 14:41:49', 'Usuario', 'Se creo un usuario , Nombre: Ligia Garcia, Email: lgarcia@hotmail.com, Dirección: , Teléfono: 454745456, tipo: Administrador'),
(51, 2, 2, '2021-09-28 11:43:39', 'Usuario', 'Se creo un usuario , Nombre: Cachito sarner, Email: cachito@hotmail.com, Dirección: cerca de la rotonda, Teléfono: 45665454, Tipo: Asistente, Fecha Nacimiento: 1995-06-30, Contacto Emergencia: Anibal juarez, Telefono Emergencia: 645465454'),
(52, 2, 2, '2021-09-28 11:54:27', 'Usuario', 'Se edito un usuario: Nombre: Cachito sarner4, Email: cachito4@hotmail.com, Dirección: cerca de la rotonda4, Teléfono: 456654544, Tipo: Asistente, Fecha Nacimiento: 1995-06-21, Contacto Emergencia: Anibal juarez4, Telefono Emergencia: 6454654544'),
(53, 2, 2, '2021-09-28 11:54:48', 'Usuario', 'Se edito un usuario: Nombre: Cachito sarner4, Email: cachito4@hotmail.com, Dirección: cerca de la rotonda4, Teléfono: 456654544, Tipo: Asistente, Fecha Nacimiento: 1995-06-21, Contacto Emergencia: Anibal juarez4, Telefono Emergencia: 6454654544'),
(54, 2, 2, '2021-09-28 11:56:38', 'Usuario', 'Se edito un usuario: Nombre: Cachito sarner4, Email: cachito4@hotmail.com, Dirección: cerca de la rotonda4, Teléfono: 456654544, Tipo: Administrador, Fecha Nacimiento: 1995-06-21, Contacto Emergencia: Anibal juarez4, Telefono Emergencia: 6454654544'),
(55, 2, 2, '2021-09-28 12:14:22', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 1984-08-18, Nit: 4565554-5, Estado: Habilitado, DPI: 6546516641625465'),
(56, 2, 2, '2021-09-28 12:15:00', 'Paciente', 'Se creo un paciente, Nombre: adsfasd fasdf adsf, Sexo: Masculino, Teléfono: 64654845, Email: adsfad@hodtmail.com, Dirección: diagonal 2 32-22 zona 3 chi, Fecha Nacimiento: 2004-10-14, Nit: 6546546-5, Estado: Habilitado, DPI: 654654654984'),
(57, 2, 2, '2021-09-28 12:15:13', 'Paciente', 'Se edito un paciente, Nombre: adsfasd fasdf adsf, Sexo: Masculino, Teléfono: 64654845, Email: adsfad@hodtmail.com, Dirección: diagonal 2 32-22 zona 3 chi, Fecha Nacimiento: 2004-10-14, Nit: 6546546-5, Estado: Habilitado, DPI: 6546546549848'),
(58, 2, 2, '2021-09-28 12:15:17', 'Paciente', 'Se elimino un huesped, Nombre: adsfasd fasdf adsf'),
(59, 2, 2, '2021-09-28 12:17:17', 'Usuario', 'Se edito un usuario: Nombre: Ligia Garcia, Email: lgarcia@hotmail.com, Dirección: , Teléfono: 454745456, Tipo: Asistente, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: '),
(60, 2, 2, '2021-09-28 12:18:05', 'Usuario', 'Se creo un usuario , Nombre: dfgdfg gdfg, Email: sdfgsdfg@htoajk.com, Dirección: , Teléfono: , Tipo: Asistente, Fecha Nacimiento: 2021-09-28, Contacto Emergencia: adf adf ad f, Telefono Emergencia: '),
(61, 2, 2, '2021-09-28 12:18:10', 'Usuario', 'Se elimino un Usuario, Nombre: dfgdfg gdfg'),
(62, 2, 2, '2021-10-04 11:41:42', 'Citas', 'Se creo una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-04 12:30:00, Finaliza: 2021-10-04 12:59:00, Estado: Confirmada'),
(63, 2, 2, '2021-10-04 17:10:47', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: orlando queme4, Fecha y hora: 2021-10-04 12:30:00, Finaliza: 2021-10-04 12:59:00, Estado: Confirmada'),
(64, 2, 2, '2021-10-04 17:14:08', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Regina Santander, Fecha y hora: 2021-10-04 12:30:00, Finaliza: 2021-10-04 12:59:00, Estado: Confirmada'),
(65, 2, 2, '2021-10-04 17:25:45', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-04 12:00:00, Finaliza: 2021-10-04 12:29:00, Estado: Confirmada'),
(66, 2, 2, '2021-10-04 17:30:11', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: '),
(67, 2, 2, '2021-10-04 17:30:24', 'Usuario', 'Se edito un usuario doctor Nombre: Juan Perez, Email: juanperez@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: 4584234, tipo: Doctor, Especialidad: Dermatólogo, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: '),
(68, 2, 2, '2021-10-05 16:54:56', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 05:30:00, Finaliza: 2021-10-05 05:59:00, Estado: Confirmada, Apuntes: esta es una prueba'),
(69, 2, 2, '2021-10-05 16:55:12', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: orlando queme4, Fecha y hora: 2021-10-05 05:30:00, Finaliza: 2021-10-05 05:59:00, Estado: Confirmada, Apuntes: esta es una prueba'),
(70, 2, 2, '2021-10-05 16:55:44', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: orlando queme4, Fecha y hora: 2021-10-05 6:00:00, Finaliza: 2021-10-05 6:29:00, Estado: Confirmada, Apuntes: esta es una prueba'),
(71, 2, 2, '2021-10-05 17:01:59', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 6:30:00, Finaliza: 2021-10-05 6:59:00, Estado: Confirmada'),
(72, 2, 2, '2021-10-05 17:02:31', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:30:00, Finaliza: 2021-10-05 06:59:00, Estado: Confirmada, Apuntes: esto es un apunte de la cita'),
(73, 2, 2, '2021-10-05 17:11:30', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:30:00, Finaliza: 2021-10-05 06:59:00, Estado: Espera, Apuntes: esto es un apunte de la cita88'),
(74, 2, 2, '2021-10-05 17:12:02', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:30:00, Finaliza: 2021-10-05 06:59:00, Estado: Espera, Apuntes: esto es un apunte de la cita'),
(75, 2, 2, '2021-10-05 17:13:20', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:30:00, Finaliza: 2021-10-05 06:59:00, Estado: Activa, Apuntes: esto es un apunte de la cita'),
(76, 2, 2, '2021-10-05 17:16:09', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:30:00, Finaliza: 2021-10-05 06:59:00, Estado: Finalizada, Apuntes: esto es un apunte de la cita'),
(77, 2, 2, '2021-10-05 17:19:35', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: orlando queme4, Fecha y hora: 2021-10-05 06:00:00, Finaliza: 2021-10-05 06:29:00, Estado: Espera, Apuntes: esta es una prueba'),
(78, 2, 2, '2021-10-05 17:26:46', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: orlando queme4, Fecha y hora: 2021-10-05 06:00:00, Finaliza: 2021-10-05 06:29:00, Estado: Confirmada, Apuntes: esta es una prueba'),
(79, 2, 2, '2021-10-05 17:27:04', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: orlando queme4, Fecha y hora: 2021-10-05 06:00:00, Finaliza: 2021-10-05 06:29:00, Estado: Espera, Apuntes: esta es una prueba'),
(80, 2, 2, '2021-10-05 17:30:02', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-04 12:00:00, Finaliza: 2021-10-04 12:29:00, Estado: Finalizada, Apuntes: '),
(81, 2, 2, '2021-10-05 17:41:49', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:30:00, Finaliza: 2021-10-05 06:59:00, Estado: Espera, Apuntes: esto es un apunte de la cita'),
(82, 2, 2, '2021-10-05 17:45:15', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: orlando queme4, Fecha y hora: 2021-10-05 06:00:00, Finaliza: 2021-10-05 06:29:00, Estado: Finalizada, Apuntes: esta es una prueba'),
(83, 2, 2, '2021-10-05 17:45:37', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:00:00, Finaliza: 2021-10-05 06:29:00, Estado: Espera, Apuntes: esto es un apunte de la cita'),
(84, 2, 2, '2021-10-05 17:45:57', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-05 06:00:00, Finaliza: 2021-10-05 06:29:00, Estado: Espera, Apuntes: esto es un apunte de la cita'),
(85, 2, 2, '2021-10-05 17:49:39', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Juan Perez, Fecha y hora: 2021-10-05 06:00:00, Finaliza: 2021-10-05 06:29:00, Estado: Activa, Apuntes: esto es un apunte de la cita'),
(86, 2, 2, '2021-10-06 11:00:08', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-04 12:00:00, Finaliza: 2021-10-04 12:29:00, Estado: Finalizada, Apuntes: '),
(87, 2, 2, '2021-10-06 11:30:07', 'Seguridad', 'Se Cancelo una cita, Fecha y Hora: 04-10-2021 12:30 PM - 12:59 PM, Doctor: Regina Santander, Paciente: Manuel Giron, Usuario: Otto Szarata'),
(88, 2, 2, '2021-10-06 11:30:27', 'Seguridad', 'Se Cancelo una cita, Fecha y Hora: 04-10-2021 12:30 PM - 12:59 PM, Doctor: Regina Santander, Paciente: Manuel Giron, Usuario: Otto Szarata'),
(89, 2, 2, '2021-10-06 11:36:50', 'Citas', 'Se Cancelo una cita, Fecha y Hora: 04-10-2021 12:30 PM - 12:59 PM, Doctor: Otto Szarata, Paciente: Jeronimo Albuerra, Usuario: Otto Szarata'),
(90, 2, 2, '2021-10-12 11:56:33', 'Citas', 'Se desbloqueo la fecha: 12-10-2021'),
(91, 2, 2, '2021-10-12 12:03:22', 'Citas', 'Se desbloqueo la fecha: 12-10-2021'),
(92, 2, 2, '2021-10-12 12:04:44', 'Citas', 'Se desbloqueo la fecha: 12-10-2021'),
(93, 2, 2, '2021-10-12 17:54:32', 'Citas', 'Se desbloqueo la fecha: 13-10-2021'),
(94, 2, 2, '2021-10-12 17:59:30', 'Citas', 'Se a Bloqueado una fecha para citas con el Doctor, Nombre: Juan Perez, Fecha: 13-10-2021, Apuntes: '),
(95, 2, 2, '2021-10-12 18:01:12', 'Citas', 'Se a Bloqueado una fecha para citas con el Doctor, Nombre: Juan Perez, Fecha: 14-10-2021, Apuntes: '),
(96, 2, 2, '2021-10-12 18:01:38', 'Citas', 'Se a Bloqueado una fecha para citas con el Doctor, Nombre: Juan Perez, Fecha: 15-10-2021, Apuntes: '),
(97, 2, 2, '2021-10-12 18:04:04', 'Citas', 'Se desbloqueo la fecha: 15-10-2021'),
(98, 2, 2, '2021-10-12 18:04:08', 'Citas', 'Se desbloqueo la fecha: 14-10-2021'),
(99, 2, 2, '2021-10-12 18:04:41', 'Citas', 'Se a Bloqueado una fecha para citas con el Doctor, Nombre: Juan Perez, Fecha: 29-10-2021, Apuntes: tutryurtyurynrtyu ryu ryt urty u'),
(100, 2, 2, '2021-10-13 10:23:43', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-13 7:30:00, Finaliza: 2021-10-13 7:59:00, Estado: Confirmada'),
(101, 2, 2, '2021-10-13 10:26:18', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-13 0:00:00, Finaliza: 2021-10-13 0:29:00, Estado: Confirmada'),
(102, 2, 2, '2021-10-13 10:26:53', 'Citas', 'Se creo una cita, Paciente: Mariana Figueroa, Doctor: Juan Perez, Fecha y hora: 2021-10-13 1:00:00, Finaliza: 2021-10-13 1:29:00, Estado: Confirmada'),
(103, 2, 2, '2021-10-13 10:27:38', 'Citas', 'Se creo una cita, Paciente: Jeronimo Albuerra, Doctor: Juan Perez, Fecha y hora: 2021-10-13 2:30:00, Finaliza: 2021-10-13 2:59:00, Estado: Confirmada'),
(104, 2, 2, '2021-10-13 10:30:02', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-15 2:00:00, Finaliza: 2021-10-15 2:29:00, Estado: Confirmada'),
(105, 2, 2, '2021-10-13 10:36:39', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:00:00, Finaliza: 2021-10-14 02:29:00, Estado: Confirmada, Apuntes: '),
(106, 2, 2, '2021-10-13 10:37:35', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-15 00:00:00, Finaliza: 2021-10-15 00:29:00, Estado: Confirmada, Apuntes: '),
(107, 2, 2, '2021-10-13 10:38:00', 'Citas', 'Se Cancelo una cita, Fecha y Hora: 15-10-2021 00:00 AM - 00:29 AM, Doctor: Juan Perez, Paciente: Manuel Giron, Usuario: Otto Szarata'),
(108, 2, 2, '2021-10-13 10:59:23', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Confirmada, Apuntes: '),
(109, 2, 2, '2021-10-13 10:59:35', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Juan Perez, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Confirmada, Apuntes: '),
(110, 2, 2, '2021-10-13 10:59:49', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Juan Perez, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Confirmada, Apuntes: '),
(111, 2, 2, '2021-10-13 11:02:36', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Activa, Apuntes: '),
(112, 2, 2, '2021-10-13 11:02:52', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(113, 2, 2, '2021-10-13 11:03:40', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(114, 2, 2, '2021-10-13 11:05:11', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(115, 2, 2, '2021-10-13 11:06:04', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(116, 2, 2, '2021-10-13 11:06:33', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(117, 2, 2, '2021-10-13 11:08:47', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(118, 2, 2, '2021-10-13 11:10:09', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(119, 2, 2, '2021-10-13 11:15:18', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(120, 2, 2, '2021-10-13 11:16:25', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(121, 2, 2, '2021-10-13 11:20:02', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(122, 2, 2, '2021-10-13 11:22:29', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(123, 2, 2, '2021-10-13 11:26:25', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(124, 2, 2, '2021-10-13 11:26:38', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(125, 2, 2, '2021-10-13 11:27:02', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(126, 2, 2, '2021-10-13 11:27:31', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(127, 2, 2, '2021-10-13 11:27:49', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Espera, Apuntes: '),
(128, 2, 2, '2021-10-13 11:34:12', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(129, 2, 2, '2021-10-13 11:34:25', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Espera, Apuntes: '),
(130, 2, 2, '2021-10-13 11:34:41', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(131, 2, 2, '2021-10-13 11:35:21', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(132, 2, 2, '2021-10-13 11:35:31', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(133, 2, 2, '2021-10-13 11:38:21', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(134, 2, 2, '2021-10-13 11:38:40', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(135, 2, 2, '2021-10-13 11:40:11', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 2:30:00, Finaliza: 2021-10-14 2:59:00, Estado: Confirmada'),
(136, 2, 2, '2021-10-13 11:41:40', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Espera, Apuntes: '),
(137, 2, 2, '2021-10-13 11:42:10', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Espera, Apuntes: '),
(138, 2, 2, '2021-10-13 11:43:02', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Espera, Apuntes: '),
(139, 2, 2, '2021-10-13 11:44:30', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:00:00, Finaliza: 2021-10-14 02:29:00, Estado: Espera, Apuntes: '),
(140, 2, 2, '2021-10-13 11:44:45', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(141, 2, 2, '2021-10-13 11:44:55', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(142, 2, 2, '2021-10-13 11:45:40', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(143, 2, 2, '2021-10-13 11:45:54', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(144, 2, 2, '2021-10-13 11:46:25', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(145, 2, 2, '2021-10-13 11:46:36', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(146, 2, 2, '2021-10-13 11:46:50', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(147, 2, 2, '2021-10-13 11:49:17', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(148, 2, 2, '2021-10-13 11:49:40', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(149, 2, 2, '2021-10-13 11:49:52', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(150, 2, 2, '2021-10-13 11:50:18', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(151, 2, 2, '2021-10-13 11:51:58', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(152, 2, 2, '2021-10-13 11:52:20', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(153, 2, 2, '2021-10-13 11:53:45', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(154, 2, 2, '2021-10-13 11:54:10', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(155, 2, 2, '2021-10-13 11:55:42', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(156, 2, 2, '2021-10-13 11:56:07', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(157, 2, 2, '2021-10-13 12:00:44', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(158, 2, 2, '2021-10-13 12:01:00', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(159, 2, 2, '2021-10-13 12:01:08', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(160, 2, 2, '2021-10-13 12:04:50', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(161, 2, 2, '2021-10-13 12:05:00', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(162, 2, 2, '2021-10-13 12:05:10', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(163, 2, 2, '2021-10-13 12:05:26', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(164, 2, 2, '2021-10-13 12:05:40', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Espera, Apuntes: '),
(165, 2, 2, '2021-10-13 12:06:46', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:00:00, Finaliza: 2021-10-14 02:29:00, Estado: Espera, Apuntes: '),
(166, 2, 2, '2021-10-13 12:07:02', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Espera, Apuntes: '),
(167, 2, 2, '2021-10-13 12:14:06', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Activa, Apuntes: '),
(168, 2, 2, '2021-10-13 12:14:17', 'Citas', 'Se Cancelo una cita, Fecha y Hora: 13-10-2021 07:30 AM - 07:59 AM, Doctor: Otto Szarata, Paciente: Manuel Giron, Usuario: Otto Szarata'),
(169, 2, 2, '2021-10-13 12:17:43', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(170, 2, 2, '2021-10-13 12:18:09', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(171, 2, 2, '2021-10-13 12:19:14', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(172, 2, 2, '2021-10-13 12:20:49', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Confirmada, Apuntes: '),
(173, 2, 2, '2021-10-13 12:22:18', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Confirmada, Apuntes: '),
(174, 2, 2, '2021-10-13 12:22:32', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Espera, Apuntes: '),
(175, 2, 2, '2021-10-13 12:22:49', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Finalizada, Apuntes: '),
(176, 2, 2, '2021-10-13 12:26:01', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(177, 2, 2, '2021-10-13 12:26:14', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Finalizada, Apuntes: '),
(178, 2, 2, '2021-10-13 12:26:34', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Espera, Apuntes: '),
(179, 2, 2, '2021-10-13 12:26:47', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Espera, Apuntes: '),
(180, 2, 2, '2021-10-13 12:26:59', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Activa, Apuntes: '),
(181, 2, 2, '2021-10-13 12:27:10', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 01:00:00, Finaliza: 2021-10-13 01:29:00, Estado: Finalizada, Apuntes: '),
(182, 2, 2, '2021-10-13 12:27:20', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Activa, Apuntes: '),
(183, 2, 2, '2021-10-13 12:27:32', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-13 07:30:00, Finaliza: 2021-10-13 07:59:00, Estado: Finalizada, Apuntes: '),
(184, 2, 2, '2021-10-13 12:27:43', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Activa, Apuntes: '),
(185, 2, 2, '2021-10-13 12:27:51', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Espera, Apuntes: '),
(186, 2, 2, '2021-10-13 12:28:01', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: orlando queme4, Fecha y hora: 2021-10-13 02:30:00, Finaliza: 2021-10-13 02:59:00, Estado: Finalizada, Apuntes: '),
(187, 2, 2, '2021-10-13 12:28:16', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:00:00, Finaliza: 2021-10-14 02:29:00, Estado: Espera, Apuntes: '),
(188, 2, 2, '2021-10-13 12:28:32', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Espera, Apuntes: '),
(189, 2, 2, '2021-10-13 12:29:06', 'Citas', 'Se creo una cita, Paciente: Jeronimo Albuerra, Doctor: Juan Perez, Fecha y hora: 2021-10-14 4:00:00, Finaliza: 2021-10-14 4:29:00, Estado: Confirmada'),
(190, 2, 2, '2021-10-13 12:29:14', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Juan Perez, Fecha y hora: 2021-10-14 04:00:00, Finaliza: 2021-10-14 04:29:00, Estado: Confirmada, Apuntes: '),
(191, 2, 2, '2021-10-13 12:29:28', 'Citas', 'Se creo una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 12:30:00, Finaliza: 2021-10-14 12:59:00, Estado: Confirmada'),
(192, 2, 2, '2021-10-13 12:29:32', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 12:30:00, Finaliza: 2021-10-14 12:59:00, Estado: Confirmada, Apuntes: '),
(193, 2, 2, '2021-10-13 12:30:04', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Juan Perez, Fecha y hora: 2021-10-14 04:00:00, Finaliza: 2021-10-14 04:29:00, Estado: Espera, Apuntes: '),
(194, 2, 2, '2021-10-13 12:30:24', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 12:30:00, Finaliza: 2021-10-14 12:59:00, Estado: Espera, Apuntes: '),
(195, 2, 2, '2021-10-13 12:30:42', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:00:00, Finaliza: 2021-10-14 02:29:00, Estado: Finalizada, Apuntes: '),
(196, 2, 2, '2021-10-13 12:31:11', 'Citas', 'Se creo una cita, Paciente: Mariana Figueroa, Doctor: Juan Perez, Fecha y hora: 2021-10-14 2:30:00, Finaliza: 2021-10-14 2:59:00, Estado: Confirmada'),
(197, 2, 2, '2021-10-13 12:31:14', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Confirmada, Apuntes: '),
(198, 2, 2, '2021-10-13 12:31:34', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Espera, Apuntes: '),
(199, 2, 2, '2021-10-13 12:32:18', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Otto Szarata, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Activa, Apuntes: '),
(200, 2, 2, '2021-10-13 12:32:38', 'Citas', 'Se edito una cita, Paciente: Mariana Figueroa, Doctor: Juan Perez, Fecha y hora: 2021-10-14 02:30:00, Finaliza: 2021-10-14 02:59:00, Estado: Activa, Apuntes: '),
(201, 2, 2, '2021-10-13 12:34:22', 'Citas', 'Se Cancelo una cita, Fecha y Hora: 14-10-2021 12:30 PM - 12:59 PM, Doctor: Otto Szarata, Paciente: Jeronimo Albuerra, Usuario: Otto Szarata'),
(202, 2, 2, '2021-10-14 10:22:19', 'Citas', 'Se a Bloqueado una fecha para citas con el Doctor, Nombre: Otto Szarata, Fecha: 14-10-2021, Apuntes: Por feriado'),
(203, 2, 2, '2021-10-14 11:36:30', 'Compras', 'Se edito un proveedor, Nombre: Click, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(204, 2, 2, '2021-10-15 10:56:16', 'Categoría', 'Se creo una nueva categoría nueva, Nombre: wqeerger, Descripción: dfgdf gdf gdfg'),
(205, 2, 2, '2021-10-15 10:56:29', 'Categoría', 'Se edito una categoría, Nombre: wqeerger8888, Descripción: dfgdf gdf gdfg888'),
(206, 2, 2, '2021-10-15 10:56:33', 'Categoría', 'Se elimino una categoría, Nombre: wqeerger8888'),
(207, 2, 2, '2021-10-15 11:11:35', 'Artículo ', 'Se edito un artículo, Nombre: Impresora Multifuncional Epson Inhalambrica, Código: 6765454, Stock inicial: 95, Descripción: impresora multifuncional con tanques de tinta para cada color, P. Venta: Q.1500.00, P. Compra: Q.1000.00, P. Oferta: Q.26.00, Oferta Activa: SI, Bodega: , Ubicación: '),
(208, 2, 2, '2021-10-15 11:13:10', 'Artículo ', 'Se creo un artículo nuevo, Nombre: sdfadsfasf, Código: sadfsdfsdf, Stock inicial: 10, Descripción: , P. Venta: Q.10, P. Compra: Q.5, P. Oferta: Q.8, Oferta Activa: SI, Bodega: sdfsdfsf, Ubicación: '),
(209, 2, 2, '2021-10-15 11:13:39', 'Artículo ', 'Se edito un artículo, Nombre: sdfadsfasf, Código: sadfsdfsdf, Stock inicial: 10, Descripción: , P. Venta: Q.10.00, P. Compra: Q.5.00, P. Oferta: Q.8.00, Oferta Activa: SI, Bodega: sdfsdfsf, Ubicación: '),
(210, 2, 2, '2021-10-15 11:13:58', 'Artículo', 'Se elimino un artículo, Nombre: sdfadsfasf'),
(211, 2, 2, '2021-10-15 11:22:52', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Tecnobodega, S.A., Comprobante: Factura -, Fecha: 2021-10-15, Total Compra: Q.9000'),
(212, 2, 2, '2021-10-15 11:23:48', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Tecnobodega, S.A., Comprobante: Factura A1-435456, Fecha: 2021-10-15, Total Compra: Q.4550'),
(213, 2, 2, '2021-10-15 11:24:17', 'Ingreso', 'Se elimino un ingreso, Proveedor: Tecnobodega, S.A., Comprobante: Factura A1-435456, Fecha: 2021-10-15'),
(214, 2, 2, '2021-10-18 10:34:58', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.500, Abonado: 500.00, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(215, 2, 2, '2021-10-18 10:40:05', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.767.75, Abonado: Q.767.75, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(216, 2, 2, '2021-10-18 11:13:20', 'Venta', 'Se edito una venta, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.767.75, Abonado: Q.767.75, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(217, 2, 2, '2021-10-18 11:14:22', 'Venta', 'Se edito una venta, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.861.5, Abonado: Q.861.5, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(218, 2, 2, '2021-10-18 11:19:28', 'Venta', 'Se edito una venta, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.861.5, Abonado: Q.861.5, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(219, 2, 2, '2021-10-18 11:22:34', 'Venta', 'Se edito una venta, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.861.5, Abonado: Q.1040, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(220, 2, 2, '2021-10-18 11:22:47', 'Venta', 'Se abono una venta, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.861.50, Nuevo Abono: Q.-178.50, Total Abonado: Q.861.5, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(221, 2, 2, '2021-10-19 11:11:13', 'Citas', 'Se creo una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-19 12:30:00, Finaliza: 2021-10-19 12:59:00, Estado: Confirmada'),
(222, 2, 2, '2021-10-19 11:12:35', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-19 12:30:00, Finaliza: 2021-10-19 12:59:00, Estado: Confirmada, Apuntes: '),
(223, 2, 2, '2021-10-19 11:12:55', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-19 12:30:00, Finaliza: 2021-10-19 12:59:00, Estado: Activa, Apuntes: '),
(224, 2, 2, '2021-10-19 11:13:06', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-19 12:30:00, Finaliza: 2021-10-19 12:59:00, Estado: Espera, Apuntes: '),
(225, 2, 2, '2021-10-19 11:13:28', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-19 12:30:00, Finaliza: 2021-10-19 12:59:00, Estado: Activa, Apuntes: '),
(226, 2, 2, '2021-10-19 11:13:39', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-19 12:30:00, Finaliza: 2021-10-19 12:59:00, Estado: Activa, Apuntes: '),
(227, 2, 2, '2021-10-19 11:13:55', 'Citas', 'Se edito una cita, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Fecha y hora: 2021-10-19 12:30:00, Finaliza: 2021-10-19 12:59:00, Estado: Finalizada, Apuntes: '),
(228, 2, 2, '2021-10-20 11:16:30', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: '),
(229, 2, 2, '2021-10-20 11:17:16', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata8, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: '),
(230, 2, 2, '2021-10-20 11:17:43', 'Usuario', 'Se edito un usuario doctor Nombre: Otto Szarata, Email: szotto18@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: +50242153288, tipo: Doctor, Especialidad: Ginecólogo y Obstetra, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: '),
(231, 2, 2, '2021-10-20 11:25:52', 'Usuario', 'Se creo un usuario de Doctor, Nombre: Ramon Garcia, Email: rgarcia@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: 464545, tipo: Doctor, Especialidad: Urólogo, Fecha Nacimiento: 2021-10-20, Contacto Emergencia: Maritza, Telefono Emergencia: 65464, Descuento maximo: 10'),
(232, 2, 2, '2021-10-20 11:26:10', 'Usuario', 'Se edito un usuario doctor Nombre: Ramon Garcia, Email: rgarcia@hotmail.com, Dirección: diagonal 2 32-22 zona 3, Teléfono: 464545, tipo: Doctor, Especialidad: Urólogo, Fecha Nacimiento: 2021-10-20, Contacto Emergencia: Maritza, Telefono Emergencia: 65464, Descuento maximo: 15'),
(233, 2, 2, '2021-10-20 11:27:08', 'Usuario', 'Se creo un usuario , Nombre: Angelina Fernandez, Email: afernandez@gmail.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 1994-07-27, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 10'),
(234, 2, 2, '2021-10-20 11:27:21', 'Usuario', 'Se edito un usuario: Nombre: Angelina Fernandez, Email: afernandez@gmail.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 1994-07-27, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 2'),
(235, 2, 2, '2021-10-20 11:28:39', 'Usuario', 'Se edito un usuario: Nombre: Otto Szarata, Email: ottoszarata@szystems.com, Dirección: , Teléfono: , Tipo: Administrador, Fecha Nacimiento: 1970-01-01, Contacto Emergencia: , Telefono Emergencia: , Descuento maximo: 20');
INSERT INTO `bitacora` (`idbitacora`, `idempresa`, `idusuario`, `fecha`, `tipo`, `descripcion`) VALUES
(236, 2, 2, '2021-10-20 11:29:29', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2021-10-20, Total Venta: Q.4400, Abonado: 4400.00, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(237, 2, 2, '2021-10-20 11:32:55', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2021-10-20, Total Venta: Q.14300, Abonado: Q.14300, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(238, 2, 2, '2021-10-20 11:34:22', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2021-10-20, Total Venta: Q.19350, Abonado: Q.23750, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(239, 2, 2, '2021-10-20 11:34:46', 'Venta', 'Se abono una venta, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2021-10-18, Total Venta: Q.683.00, Nuevo Abono: Q.-178.50, Total Abonado: Q.683, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(240, 2, 2, '2021-10-20 11:34:53', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2021-10-20, Total Venta: Q.19350.00, Nuevo Abono: Q.-4400.00, Total Abonado: Q.19350, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(241, 2, 2, '2021-10-20 11:37:23', 'Venta', 'Se cerro una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2021-10-20, Total Venta: Q.19350.00, Total Abonado: Q.19350.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(242, 2, 2, '2021-10-21 11:34:00', 'Categoría', 'Se creo una nueva categoría nueva, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Descripción: '),
(243, 2, 2, '2021-10-21 11:35:07', 'Categoría', 'Se elimino una categoría, Nombre: PROCEDIMIENTOS GINECOLOGICOS'),
(244, 2, 2, '2021-10-21 11:40:26', 'Ventas', 'Se creo un nuevo rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: ASDFSAD FSADFADS F'),
(245, 2, 2, '2021-10-21 11:40:53', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: Este es el rubro de procedimientos ginecologicos'),
(246, 2, 2, '2021-10-21 11:42:34', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: Este es el rubro de procedimientos ginecologicos'),
(247, 2, 2, '2021-10-21 11:42:52', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: Este es el rubro de procedimientos ginecologicos'),
(248, 2, 2, '2021-10-21 11:44:06', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: Este es el rubro de procedimientos ginecologicos'),
(249, 2, 2, '2021-10-21 11:44:12', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: Este es el rubro de procedimientos ginecologicos'),
(250, 2, 2, '2021-10-21 11:44:21', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: Este es el rubro de procedimientos ginecologicos'),
(251, 2, 2, '2021-10-21 11:45:18', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS8, Nota: Este es el rubro de procedimientos ginecologicos8'),
(252, 2, 2, '2021-10-21 11:45:32', 'Ventas', 'Se edito un rubro, Nombre: PROCEDIMIENTOS GINECOLOGICOS, Nota: Este es el rubro de procedimientos ginecologicos'),
(253, 2, 2, '2021-10-21 17:43:43', 'Ventas', 'Se agrego un articulo al rubro, Articulo: portatil hp core i5'),
(254, 2, 2, '2021-10-21 17:50:46', 'Ventas', 'Se agrego un articulo al rubro, Articulo: portatil hp core i5'),
(255, 2, 2, '2021-10-21 17:53:14', 'Ventas', 'Se elimino un artículo del rubro, Articulo: portatil hp core i5'),
(256, 2, 2, '2021-10-21 17:57:32', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Impresora Multifuncional Epson Inhalambrica'),
(257, 2, 2, '2021-10-21 17:57:44', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Mouse XTech Inhalambrico'),
(258, 2, 2, '2021-10-21 17:59:07', 'Ventas', 'Se elimino un artículo del rubro, Articulo: Mouse XTech Inhalambrico'),
(259, 2, 2, '2021-10-21 18:02:10', 'Ventas', 'Se agrego un articulo al rubro, Articulo: portatil hp core i5'),
(260, 2, 2, '2021-10-21 18:02:14', 'Ventas', 'Se elimino un artículo del rubro.'),
(261, 2, 2, '2021-10-21 18:02:20', 'Ventas', 'Se elimino un artículo del rubro.'),
(262, 2, 2, '2021-10-21 18:02:28', 'Ventas', 'Se agrego un articulo al rubro, Articulo: PLAY STATION 4 PRO'),
(263, 2, 2, '2021-11-03 11:50:46', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2021-11-03 2:30:00, Finaliza: 2021-11-03 3:29:00, Estado: Confirmada'),
(264, 2, 2, '2021-11-03 11:50:50', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2021-11-03 02:30:00, Finaliza: 2021-11-03 3:29:00, Estado: Confirmada, Apuntes: '),
(265, 2, 2, '2022-02-15 11:37:50', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: vendedor 1'),
(266, 2, 2, '2022-02-15 11:40:04', 'Compras', 'Se edito un vendedor, Nombre: vendedor 1'),
(267, 2, 2, '2022-02-15 11:40:31', 'Compras', 'Se edito un vendedor, Nombre: vendedor 18'),
(268, 2, 2, '2022-02-15 11:40:50', 'Compras', 'Se edito un vendedor, Nombre: vendedor 1'),
(269, 2, 2, '2022-02-15 11:41:22', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: Vendedor 2'),
(270, 2, 2, '2022-02-15 11:42:38', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: ertyrty'),
(271, 2, 2, '2022-02-15 11:42:57', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: ertyrty'),
(272, 2, 2, '2022-02-15 11:47:08', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: vendedor 1'),
(273, 2, 2, '2022-02-15 11:47:25', 'Compras', 'Se edito un vendedor, Nombre: vendedor 1'),
(274, 2, 2, '2022-02-15 11:48:06', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: vendedor 1'),
(275, 2, 2, '2022-02-15 11:48:28', 'Compras', 'Se edito un vendedor, Nombre: vendedor 18'),
(276, 2, 2, '2022-02-15 11:50:10', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: vendedor 1'),
(277, 2, 2, '2022-02-15 11:50:36', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: vendedor 2'),
(278, 2, 2, '2022-02-15 11:51:20', 'Compras', 'Se edito un vendedor, Nombre: vendedor 2'),
(279, 2, 2, '2022-02-15 11:51:38', 'Compras', 'Se edito un vendedor, Nombre: vendedor 28'),
(280, 2, 2, '2022-02-15 11:52:18', 'Compras', 'Se edito un vendedor, Nombre: vendedor 1'),
(281, 2, 2, '2022-02-15 11:52:48', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: 6'),
(282, 2, 2, '2022-02-15 11:53:00', 'Compras', 'Se edito un vendedor, Nombre: 6'),
(283, 2, 2, '2022-02-15 11:53:07', 'Compras', 'Se edito un vendedor, Nombre: 6'),
(284, 2, 2, '2022-02-15 11:53:07', 'Compras', 'Se edito un vendedor, Nombre: 6'),
(285, 2, 2, '2022-02-15 11:53:08', 'Compras', 'Se edito un vendedor, Nombre: 6'),
(286, 2, 2, '2022-02-15 11:54:07', 'Compras', 'Se edito un proveedor, Nombre: Intelaf, Documento: -, Dirección: , Teléfono: , Email: , Banco: , Nombre Cuenta: , Numero Cuenta: '),
(287, 2, 2, '2022-02-15 11:56:37', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: vendedor 1'),
(288, 2, 2, '2022-02-15 11:57:16', 'Compras', 'Se edito un vendedor, Nombre: vendedor 1'),
(289, 2, 2, '2022-02-15 11:57:35', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: 6'),
(290, 2, 2, '2022-02-16 16:22:13', 'Ventas', 'Se creo un nuevo rubro, Nombre: prueba, Nota: '),
(291, 2, 2, '2022-02-16 16:22:26', 'Ventas', 'Se edito un rubro, Nombre: prueba, Nota: '),
(292, 2, 2, '2022-02-16 17:12:55', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.4500'),
(293, 2, 2, '2022-02-16 17:14:21', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.4500'),
(294, 2, 2, '2022-02-16 17:14:59', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2022-02-17 11:00:00, Finaliza: 2022-02-17 11:59:00, Estado: Confirmada'),
(295, 2, 2, '2022-02-16 17:15:10', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2022-02-17 11:00:00, Finaliza: 2022-02-17 11:59:00, Estado: Confirmada, Apuntes: '),
(296, 2, 2, '2022-02-16 17:15:56', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2022-02-17 11:00:00, Finaliza: 2022-02-17 11:59:00, Estado: Confirmada, Apuntes: '),
(297, 2, 2, '2022-02-16 17:16:20', 'Paciente', 'Se edito un paciente, Nombre: Jeronimo Albuerra, Sexo: Masculino, Teléfono: 45657456, Email: jalbuerra1@gmail.com, Dirección: cerca de la rotonda de burguer king zona 8, Fecha Nacimiento: 1984-08-18, Nit: 4565554-5, Estado: Habilitado, DPI: 6546516641625465'),
(298, 2, 2, '2022-02-17 10:19:44', 'Ventas', 'Se agrego un articulo al rubro, Articulo: portatil hp core i5'),
(299, 2, 2, '2022-02-17 10:20:19', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Monitor Samsung 24\" Curvo'),
(300, 2, 2, '2022-02-17 10:20:25', 'Ventas', 'Se elimino un artículo del rubro.'),
(301, 2, 2, '2022-02-17 10:44:29', 'Ventas', 'Se elimino un artículo del rubro.'),
(302, 2, 2, '2022-02-17 10:44:39', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Mouse XTech Inhalambrico'),
(303, 2, 2, '2022-02-17 11:04:39', 'Venta', 'Se creo una orden nueva, Paciente: Jeronimo Albuerra, Doctor: Regina Santander, Total:Q.3085'),
(304, 2, 2, '2022-02-17 11:06:46', 'Venta', 'Se creo una orden nueva, Paciente: Manuel Giron, Doctor: orlando queme4, Total:Q.3000'),
(305, 2, 2, '2022-02-17 11:20:43', 'Venta', 'Se edito una orden, Paciente: Jeronimo Albuerra, Doctor: Regina Santander, Total:Q.3000'),
(306, 2, 2, '2022-02-17 11:20:54', 'Venta', 'Se edito una orden, Paciente: Jeronimo Albuerra, Doctor: Regina Santander, Total:Q.85'),
(307, 2, 2, '2022-02-17 11:21:14', 'Venta', 'Se edito una orden, Paciente: Jeronimo Albuerra, Doctor: Regina Santander, Total:Q.0'),
(308, 2, 2, '2022-02-17 11:21:29', 'Venta', 'Se edito una orden, Paciente: Jeronimo Albuerra, Doctor: Regina Santander, Total:Q.3085'),
(309, 2, 2, '2022-02-17 16:47:25', 'Almacen', 'Se creo una presentacion nueva, Nombre: Pastilla, Descripcion: Unidad de pastilla de blister'),
(310, 2, 2, '2022-02-17 17:16:23', 'Almacen', 'Se elimino una Presentación, Nombre: Pastilla'),
(311, 2, 2, '2022-02-17 17:17:19', 'Almacen', 'Se creo una presentacion nueva, Nombre: adsfasdf, Descripcion: ds fasd fasd fadsf'),
(312, 2, 2, '2022-02-17 17:17:23', 'Almacen', 'Se elimino una Presentación, Nombre: adsfasdf'),
(313, 2, 2, '2022-02-17 17:18:07', 'Almacen', 'Se creo una presentacion nueva, Nombre: Pastilla, Descripcion: '),
(314, 2, 2, '2022-02-17 17:18:48', 'Almacen', 'Se edito una presentacion, Nombre: Pastilla, Descripcion: Pastilla unidad de blister'),
(315, 2, 2, '2022-02-21 11:02:53', 'Almacen', 'Se creo una presentacion nueva, Nombre: Blister, Descripcion: Blister de pastillas'),
(316, 2, 2, '2022-02-21 11:03:34', 'Almacen', 'Se creo una presentacion nueva, Nombre: Caja, Descripcion: Caja con blisters'),
(317, 2, 2, '2022-02-21 11:03:44', 'Almacen', 'Se creo una presentacion nueva, Nombre: Frasco, Descripcion: '),
(318, 2, 2, '2022-02-25 17:11:41', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Tecnobodega, S.A., Comprobante: Factura -, Fecha: 2022-02-25, Total Compra: Q.100'),
(319, 2, 2, '2022-02-28 12:28:31', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-02-28, Total Compra: Q.150'),
(320, 2, 2, '2022-02-28 12:31:47', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Tecnobodega, S.A., Comprobante: Factura A3-546456456456, Fecha: 2022-02-28, Total Compra: Q.650'),
(321, 2, 2, '2022-03-01 10:48:41', 'Ingreso', 'Se cancelo un ingreso, Proveedor: Tecnobodega, S.A., Comprobante: Factura A3-546456456456, Fecha: 2022-02-28'),
(322, 2, 2, '2022-03-01 17:16:43', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: German'),
(323, 2, 2, '2022-03-03 16:02:40', 'Artículo ', 'Se creo un artículo nuevo, Nombre: prueba, Código: 546435214, Stock minimo: 10, Descripción: slkdfja;lk ja;lskdjf a;slkdfj as;lkdj f, Bodega: atras, Ubicación: abajo'),
(324, 2, 2, '2022-03-03 16:03:39', 'Artículo ', 'Se edito un artículo, Nombre: prueba8, Código: 5464352148, Stock minimo: 108, Descripción: slkdfja;lk ja;lskdjf a;slkdfj as;lkdj f888, Bodega: atras8, Ubicación: abajo8'),
(325, 2, 2, '2022-03-03 16:05:31', 'Artículo ', 'Se edito un artículo, Nombre: prueba8, Código: 5464352148, Stock minimo: 108, Descripción: slkdfja;lk ja;lskdjf a;slkdfj as;lkdj f888, Bodega: atras8, Ubicación: abajo8'),
(326, 2, 2, '2022-03-08 10:40:10', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.146.3, Abonado: 146.30, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(327, 2, 2, '2022-03-08 10:41:53', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.104.5, Abonado: 104.50, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(328, 2, 2, '2022-03-08 10:58:10', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.70.9, Abonado: 70.90, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(329, 2, 2, '2022-03-08 10:59:04', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.70.9, Abonado: 70.90, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(330, 2, 2, '2022-03-08 11:00:23', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.170.9, Abonado: 170.90, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(331, 2, 2, '2022-03-08 11:08:00', 'Venta', 'Se creo una venta nueva, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.70.9, Abonado: 70.90, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(332, 2, 2, '2022-03-08 11:08:19', 'Venta', 'Se creo una venta nueva, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.70.9, Abonado: 70.90, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(333, 2, 2, '2022-03-08 11:15:03', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.20.9, Abonado: 20.90, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(334, 2, 2, '2022-03-08 15:43:19', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-08, Total Venta: Q.120.9, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(335, 2, 2, '2022-03-09 10:20:03', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.191.8, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(336, 2, 2, '2022-03-09 10:20:44', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.141.8, Abonado: 141.80, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(337, 2, 2, '2022-03-09 10:23:44', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-03-09, Total Compra: Q.340'),
(338, 2, 2, '2022-03-09 10:24:41', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.59, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(339, 2, 2, '2022-03-09 16:20:24', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19, Abonado: 19.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(340, 2, 2, '2022-03-09 16:21:42', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19, Abonado: 19.00, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(341, 2, 2, '2022-03-09 16:26:34', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(342, 2, 2, '2022-03-09 16:35:59', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(343, 2, 2, '2022-03-09 16:36:45', 'Venta', 'Se creo una venta nueva, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(344, 2, 2, '2022-03-09 16:37:04', 'Venta', 'Se edito una venta, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.59, Abonado: Q.40, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(345, 2, 2, '2022-03-09 16:40:03', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.100, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(346, 2, 2, '2022-03-09 16:40:45', 'Venta', 'Se abono una venta, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.60.00, Nuevo Abono: Q.10, Total Abonado: Q.10, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(347, 2, 2, '2022-03-09 16:41:19', 'Venta', 'Se creo una venta nueva, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19, Abonado: 5, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(348, 2, 2, '2022-03-09 16:41:42', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19, Abonado: 5, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(349, 2, 2, '2022-03-09 16:42:37', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.49.5, Abonado: Q.45, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(350, 2, 2, '2022-03-09 16:43:26', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.69.5, Abonado: Q.45, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(351, 2, 2, '2022-03-09 16:43:43', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.69.50, Nuevo Abono: Q.24.50, Total Abonado: Q.69.5, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(352, 2, 2, '2022-03-09 16:44:14', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.49.50, Nuevo Abono: Q.-20.00, Total Abonado: Q.49.5, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(353, 2, 2, '2022-03-09 16:45:15', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.61.9, Abonado: Q.69.5, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(354, 2, 2, '2022-03-09 16:46:10', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.79, Abonado: Q.88.5, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(355, 2, 2, '2022-03-09 16:47:01', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.20.00, Nuevo Abono: Q.-68.50, Total Abonado: Q.20, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(356, 2, 2, '2022-03-09 16:47:28', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.39, Abonado: Q.20, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(357, 2, 2, '2022-03-09 16:48:06', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.39, Abonado: Q.39, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(358, 2, 2, '2022-03-09 16:48:35', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.20.00, Nuevo Abono: Q.-19.00, Total Abonado: Q.20, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(359, 2, 2, '2022-03-09 16:51:05', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.59, Abonado: Q.59, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(360, 2, 2, '2022-03-09 17:31:28', 'Venta', 'Se elimino una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.40.00, Abonado: Q.59.00, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(361, 2, 2, '2022-03-10 10:28:28', 'Venta', 'Se abono una venta, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.60.00, Nuevo Abono: Q.50.00, Total Abonado: Q.60, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(362, 2, 2, '2022-03-10 10:28:39', 'Venta', 'Se cerro una venta, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.60.00, Total Abonado: Q.60.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(363, 2, 2, '2022-03-10 10:28:46', 'Venta', 'Se abono una venta, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19.00, Nuevo Abono: Q.14.00, Total Abonado: Q.19, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(364, 2, 2, '2022-03-10 10:29:26', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.3085'),
(365, 2, 2, '2022-03-10 10:36:56', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.3085'),
(366, 2, 2, '2022-03-10 10:37:26', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.3000'),
(367, 2, 2, '2022-03-10 10:40:02', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.3085'),
(368, 2, 2, '2022-03-10 10:40:15', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.85'),
(369, 2, 2, '2022-03-10 10:40:25', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.3085'),
(370, 2, 2, '2022-03-10 10:40:32', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.3000'),
(371, 2, 2, '2022-03-10 10:40:40', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Juan Perez, Total:Q.3085'),
(372, 2, 2, '2022-03-10 10:46:36', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-10 10:46:36, Total Venta: Q.3085, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(373, 2, 2, '2022-03-10 10:50:13', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-10, Total Venta: Q.3085.00, Nuevo Abono: Q.3085.00, Total Abonado: Q.3085, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(374, 2, 2, '2022-03-10 10:50:26', 'Venta', 'Se cerro una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-10, Total Venta: Q.3085.00, Total Abonado: Q.3085.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(375, 2, 2, '2022-03-10 10:53:00', 'Venta', 'Se creo una orden nueva, Paciente: Manuel Giron, Doctor: Ramon Garcia, Total:Q.3085'),
(376, 2, 2, '2022-03-10 10:53:08', 'Venta', 'Se edito una orden, Paciente: Manuel Giron, Doctor: Ramon Garcia, Total:Q.3085'),
(377, 2, 2, '2022-03-10 10:53:18', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Manuel Giron, Comprobante:  -, Fecha: 2022-03-10 10:53:18, Total Venta: Q.3085, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(378, 2, 2, '2022-03-10 10:55:20', 'Venta', 'Se elimino una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-10, Total Venta: Q.3085.00, Abonado: Q.3085.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(379, 2, 2, '2022-03-10 10:55:31', 'Venta', 'Se abono una venta, Cliente: Manuel Giron, Comprobante:  -, Fecha: 2022-03-10, Total Venta: Q.3085.00, Nuevo Abono: Q.3085.00, Total Abonado: Q.3085, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(380, 2, 2, '2022-03-10 10:55:36', 'Venta', 'Se elimino una venta, Cliente: Manuel Giron, Comprobante:  -, Fecha: 2022-03-10, Total Venta: Q.3085.00, Abonado: Q.3085.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(381, 2, 2, '2022-03-10 10:57:11', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.3085'),
(382, 2, 2, '2022-03-10 11:02:57', 'Venta', 'Se creo una orden nueva, Paciente: Jeronimo Albuerra, Doctor: Juan Perez, Total:Q.85'),
(383, 2, 2, '2022-03-10 11:03:29', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-10 11:03:29, Total Venta: Q.3085, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(384, 2, 2, '2022-03-10 11:08:17', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Jeronimo Albuerra, Comprobante:  -, Fecha: 2022-03-10 11:08:17, Total Venta: Q.85, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(385, 2, 2, '2022-03-10 11:09:03', 'Venta', 'Se elimino una venta, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-09, Total Venta: Q.19.00, Abonado: Q.19.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(386, 2, 2, '2022-03-10 11:09:20', 'Venta', 'Se elimino una venta, Cliente: Jeronimo Albuerra, Comprobante:  -, Fecha: 2022-03-10, Total Venta: Q.85.00, Abonado: Q.0.00, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(387, 2, 2, '2022-03-10 11:19:14', 'Venta', 'Se creo una venta nueva, Cliente: Manuel Giron, Comprobante: Factura -, Fecha: 2022-03-10, Total Venta: Q.59, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(388, 2, 2, '2022-03-10 12:04:05', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-10, Total Venta: Q.39, Abonado: 39.00, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(389, 2, 2, '2022-03-10 12:04:21', 'Venta', 'Se creo una venta nueva, Cliente: Jeronimo Albuerra, Comprobante: Factura -, Fecha: 2022-03-10, Total Venta: Q.60, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(390, 2, 2, '2022-03-16 16:16:51', 'Compras', 'Se agrego un nuevo Vendedor, Nombre: Vendedor 2'),
(391, 2, 2, '2022-03-16 16:44:25', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-03-16, Total Compra: Q.170'),
(392, 2, 2, '2022-03-16 17:02:18', 'Ventas', 'Se creo un nuevo rubro, Nombre: RADIO FRECUENCIA, Nota: Estos son los rubros de radio frecuencia'),
(393, 2, 2, '2022-03-16 17:03:14', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Teclado XTech Inhalambrico'),
(394, 2, 2, '2022-03-16 17:03:26', 'Ventas', 'Se agrego un articulo al rubro, Articulo: Monitor Samsung 24\" Curvo'),
(395, 2, 2, '2022-03-16 17:04:35', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.3685'),
(396, 2, 2, '2022-03-16 17:04:58', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.3485'),
(397, 2, 2, '2022-03-16 17:07:56', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-16 17:07:56, Total Venta: Q.3485, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(398, 2, 2, '2022-03-16 17:17:44', 'Venta', 'Se creo una orden nueva, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Total:Q.85'),
(399, 2, 2, '2022-03-16 17:18:09', 'Venta', 'Se edito una orden, Paciente: Jeronimo Albuerra, Doctor: Otto Szarata, Total:Q.285'),
(400, 2, 2, '2022-03-16 17:45:59', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-16, Total Venta: Q.139, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(401, 2, 2, '2022-03-16 17:46:43', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-16, Total Venta: Q.142.15, Abonado: Q.0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(402, 2, 2, '2022-03-16 17:47:04', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-16, Total Venta: Q.142.15, Nuevo Abono: Q.142.15, Total Abonado: Q.142.15, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(403, 2, 2, '2022-03-16 17:47:15', 'Venta', 'Se cerro una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-16, Total Venta: Q.142.15, Total Abonado: Q.142.15, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(404, 2, 2, '2022-03-16 17:47:36', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-16, Total Venta: Q.9.5, Abonado: 9.50, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(405, 2, 2, '2022-03-16 18:39:03', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-16, Total Venta: Q.11.35, Abonado: 5, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(406, 2, 2, '2022-03-22 10:42:09', 'Artículo ', 'Se creo un artículo nuevo, Nombre: Ximarin, Stock minimo: 10, Descripción: Ximarin relajante muscular, Bodega: Principal, Ubicación: A'),
(407, 2, 2, '2022-03-22 10:42:22', 'Artículo ', 'Se edito un artículo, Nombre: Ximarin, Stock minimo: 10, Descripción: Ximarin relajante muscular, Bodega: Principal, Ubicación: A'),
(408, 2, 2, '2022-03-22 10:44:23', 'Artículo ', 'Se edito un artículo, Nombre: Ximarin, Stock minimo: 10, Descripción: Ximarin relajante muscular, Bodega: Principal, Ubicación: A'),
(409, 2, 2, '2022-03-22 11:45:00', 'Artículo ', 'Se creo un artículo nuevo, Nombre: Neurobion, Código: g654f, Stock minimo: 10, Descripción: , Bodega: , Ubicación: '),
(410, 2, 2, '2022-03-23 11:33:44', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-03-23, Total Compra: Q.500'),
(411, 2, 2, '2022-03-23 15:40:25', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-23, Total Venta: Q.6.3, Abonado: 6.30, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(412, 2, 2, '2022-03-23 15:46:30', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-23, Total Venta: Q.11.3, Abonado: Q.11.3, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(413, 2, 2, '2022-03-23 17:15:37', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-16, Total Venta: Q.3485.00, Nuevo Abono: Q.3485.00, Total Abonado: Q.3485, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(414, 2, 2, '2022-03-25 10:43:42', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-03-25, Total Compra: Q.50'),
(415, 2, 2, '2022-03-25 11:04:20', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-03-25, Total Compra: Q.100'),
(416, 2, 2, '2022-03-25 11:06:29', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-03-25, Total Compra: Q.50'),
(417, 2, 2, '2022-03-25 11:09:46', 'Ingreso', 'Se creo un ingreso nuevo, Proveedor: Macrosistemas, Comprobante: Factura -, Fecha: 2022-03-25, Total Compra: Q.100'),
(418, 2, 2, '2022-03-28 11:06:30', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.285'),
(419, 2, 2, '2022-03-28 11:07:42', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:07:42, Total Venta: Q.285, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(420, 2, 2, '2022-03-28 11:11:14', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:11:14, Total Venta: Q.3485, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(421, 2, 2, '2022-03-28 11:15:03', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:15:03, Total Venta: Q.285, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(422, 2, 2, '2022-03-28 11:20:48', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.685'),
(423, 2, 2, '2022-03-28 11:20:55', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:20:55, Total Venta: Q.685, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(424, 2, 2, '2022-03-28 11:30:07', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28, Total Venta: Q.685.00, Nuevo Abono: Q.685.00, Total Abonado: Q.685, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(425, 2, 2, '2022-03-28 11:30:33', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.285'),
(426, 2, 2, '2022-03-28 11:30:38', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:30:38, Total Venta: Q.285, Abonado: 685.00, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(427, 2, 2, '2022-03-28 11:30:56', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28, Total Venta: Q.285.00, Nuevo Abono: Q.-400.00, Total Abonado: Q.285, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(428, 2, 2, '2022-03-28 11:31:18', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.685'),
(429, 2, 2, '2022-03-28 11:31:21', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:31:21, Total Venta: Q.685, Abonado: 285.00, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(430, 2, 2, '2022-03-28 11:31:49', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28, Total Venta: Q.685.00, Nuevo Abono: Q.400.00, Total Abonado: Q.685, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(431, 2, 2, '2022-03-28 11:34:18', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.85'),
(432, 2, 2, '2022-03-28 11:34:43', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.600'),
(433, 2, 2, '2022-03-28 11:34:56', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:34:56, Total Venta: Q.600, Abonado: 685.00, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(434, 2, 2, '2022-03-28 11:44:33', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.85'),
(435, 2, 2, '2022-03-28 11:47:12', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-28 11:47:12, Total Venta: Q.85, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(436, 2, 2, '2022-03-28 15:33:57', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-28, Total Venta: Q.13.2, Abonado: Q.13.2, Estado Saldo: Pagado, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(437, 2, 2, '2022-03-28 15:38:17', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura A1-456456456, Fecha: 2022-03-28, Total Venta: Q.5.7, Abonado: 5.70, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(438, 2, 2, '2022-03-28 15:40:47', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-456456456, Fecha: 2022-03-28, Total Venta: Q.50.7, Abonado: Q.50.7, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(439, 2, 2, '2022-03-28 15:47:11', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-45645645688, Fecha: 2022-03-28, Total Venta: Q.53.85, Abonado: Q.53.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(440, 2, 2, '2022-03-28 15:49:39', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-45645645688, Fecha: 2022-03-28, Total Venta: Q.53.85, Abonado: Q.53.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(441, 2, 2, '2022-03-28 15:49:54', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A12-456456456882, Fecha: 2022-03-28, Total Venta: Q.53.85, Abonado: Q.53.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(442, 2, 2, '2022-03-28 15:50:11', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-45645645688, Fecha: 2022-03-28, Total Venta: Q.113.85, Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(443, 2, 2, '2022-03-28 15:52:00', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A12-456456456882, Fecha: 2022-03-28, Total Venta: Q.113.85, Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(444, 2, 2, '2022-03-28 18:31:04', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-456456456882, Fecha: 2022-03-28, Total Venta: Q.113.85, Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(445, 2, 2, '2022-03-28 20:10:31', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-456456456882, Fecha: 2022-03-28, Total Venta: Q.113.85, Abonado: Q.115.85, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(446, 2, 2, '2022-03-28 20:12:50', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-456456456882, Fecha: 2022-03-28, Total Venta: Q.113.85, Nuevo Abono: Q.-2.00, Total Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(447, 2, 2, '2022-03-29 10:20:19', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A12-456456456882, Fecha: 2022-03-29, Total Venta: Q.113.85, Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(448, 2, 2, '2022-03-29 10:20:39', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-45645645688, Fecha: 2022-03-28, Total Venta: Q.113.85, Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(449, 2, 2, '2022-03-29 11:05:52', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Boleta A12-456456456882, Fecha: 2022-03-28, Total Venta: Q.113.85, Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(450, 2, 2, '2022-03-29 11:13:53', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A1-45645645688, Fecha: 2022-03-28, Total Venta: Q.113.85, Abonado: Q.113.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(451, 2, 2, '2022-03-29 11:14:39', 'Venta', 'Se creo una venta nueva, Cliente: Mariana Figueroa, Comprobante: Factura A4-456456456, Fecha: 2022-03-29, Total Venta: Q.180, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(452, 2, 2, '2022-03-29 11:14:57', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A4-456456456, Fecha: 2022-03-29, Total Venta: Q.183.15, Abonado: Q.0, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(453, 2, 2, '2022-03-29 11:17:39', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura A4-456456456, Fecha: 2022-03-29, Total Venta: Q.199.15, Abonado: Q.16, Estado Saldo: Pendiente, Estado Venta: Abierta, Tipo Pago: Efectivo'),
(454, 2, 2, '2022-03-29 11:18:24', 'Venta', 'Se cerro una venta, Cliente: Mariana Figueroa, Comprobante: Factura A4-456456456, Fecha: 2022-03-29, Total Venta: Q.183.15, Total Abonado: Q.16.00, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(455, 2, 2, '2022-03-29 11:18:32', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante: Factura A4-456456456, Fecha: 2022-03-29, Total Venta: Q.183.15, Nuevo Abono: Q.167.15, Total Abonado: Q.183.15, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(456, 2, 2, '2022-03-29 11:19:04', 'Venta', 'Se creo una orden nueva, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.285'),
(457, 2, 2, '2022-03-29 11:19:19', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.685'),
(458, 2, 2, '2022-03-29 11:19:28', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-29 11:19:28, Total Venta: Q.685, Abonado: 0, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(459, 2, 2, '2022-03-29 11:20:47', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.85'),
(460, 2, 2, '2022-03-29 11:20:56', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-29 11:20:56, Total Venta: Q.85, Abonado: 0.00, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(461, 2, 2, '2022-03-29 11:21:38', 'Venta', 'Se abono una venta, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-29, Total Venta: Q.85.00, Nuevo Abono: Q.85.00, Total Abonado: Q.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(462, 2, 2, '2022-03-29 11:24:32', 'Venta', 'Se edito una venta, Cliente: Mariana Figueroa, Comprobante: Factura -, Fecha: 2022-03-29, Total Venta: Q.85, Abonado: Q.85, Estado Saldo: Pagado, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(463, 2, 2, '2022-03-29 11:24:59', 'Venta', 'Se edito una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.285'),
(464, 2, 2, '2022-03-29 11:25:04', 'Venta', 'Se creo una venta nueva desde una orden, Cliente: Mariana Figueroa, Comprobante:  -, Fecha: 2022-03-29 11:25:04, Total Venta: Q.285, Abonado: 85.00, Estado Saldo: Pendiente, Estado Venta: Cerrada, Tipo Pago: Efectivo'),
(465, 2, 2, '2022-03-29 11:45:43', 'Venta', 'Se creo una orden nueva, Paciente: Manuel Giron, Doctor: Ramon Garcia, Total:Q.3000'),
(466, 2, 2, '2022-03-29 11:47:58', 'Venta', 'Se Cancelo una orden, Paciente: Manuel Giron, Doctor: Ramon Garcia, Total:Q.3000.00'),
(467, 2, 2, '2022-03-29 11:51:50', 'Venta', 'Se Cancelo una orden, Paciente: Mariana Figueroa, Doctor: Otto Szarata, Total:Q.285.00'),
(468, 2, 2, '2022-03-30 10:41:16', 'Citas', 'Se creo una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2022-03-30 10:30:00, Finaliza: 2022-03-30 11:29:00, Estado: Confirmada'),
(469, 2, 2, '2022-03-30 10:41:22', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2022-03-30 10:30:00, Finaliza: 2022-03-30 11:29:00, Estado: Confirmada, Apuntes: '),
(470, 2, 2, '2022-03-30 10:42:33', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2022-03-30 10:30:00, Finaliza: 2022-03-30 11:29:00, Estado: Espera, Apuntes: ');

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
(1, 2, 'Portatiles', 'Computadoras portatiles', NULL, '1'),
(2, 2, 'De Escritorio', 'Computadoras de escritorio', NULL, '1'),
(3, 2, 'Accesorios y perifericos', 'Accesorio es aquello que es secundario, que depende de lo principal', NULL, '1'),
(4, 2, 'hola', 'hola hola hola', NULL, '0'),
(5, 2, 'dsdsfsdfsdfds', 'sdfsdfsdfsdfsdfsdfdsfs', NULL, '0'),
(6, 2, 'perifericos de salida', NULL, NULL, '0'),
(7, 2, 'accesorios de pc', 'lajdflakjdflkajdf', NULL, '1'),
(8, 2, 'Consolas', 'Consolas de video juegos y accesorios', NULL, '1'),
(9, 2, 'Gaming', 'Todo tipo de accesorios para video jugadores', NULL, '1'),
(19, 2, 'mascotas', 'todo tipo de accesorios para mascotas', NULL, '0'),
(20, 2, 'Alimentos', 'Todo tipo de alimentos, para mascotas', NULL, '0'),
(21, 2, 'Perifericos', 'Todo tipo de perifericos para pc', NULL, '1'),
(22, 2, 'al;skdjfa', NULL, 'VIWRLmosaic-geometry-abstract-textute-lines-3d-art.jpg', '1'),
(23, 2, 'wqeerger8888', 'dfgdf gdf gdfg888', '64RBJWIN_20210608_18_04_44_Pro.jpg', '0'),
(24, 2, 'PROCEDIMIENTOS GINECOLOGICOS', NULL, NULL, '0');

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

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idcita`, `idusuario`, `iddoctor`, `idpaciente`, `fecha_inicio`, `fecha_fin`, `estado_cita`, `apuntes`, `turno`, `estado`) VALUES
(1, 2, 9, 2, '2021-10-05 06:00:00', '2021-10-05 06:29:00', 'Finalizada', 'esta es una prueba', NULL, 'Habilitado'),
(2, 2, 4, 1, '2021-10-04 12:30:00', '2021-10-04 12:59:00', 'Cancelada', NULL, NULL, 'Cancelada'),
(3, 2, 9, 3, '2021-10-04 12:30:00', '2021-10-04 12:59:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(4, 2, 3, 3, '2021-10-04 12:30:00', '2021-10-04 12:59:00', 'Cancelada', NULL, NULL, 'Cancelada'),
(5, 2, 4, 3, '2021-10-04 12:00:00', '2021-10-04 12:29:00', 'Finalizada', NULL, NULL, 'Habilitado'),
(6, 2, 5, 2, '2021-10-05 06:00:00', '2021-10-05 06:29:00', 'Activa', 'esto es un apunte de la cita', NULL, 'Habilitado'),
(7, 2, 4, 3, '2021-10-13 07:30:00', '2021-10-13 07:59:00', 'Finalizada', NULL, 2, 'Habilitado'),
(8, 2, 5, 3, '2021-10-15 00:00:00', '2021-10-15 00:29:00', 'Habilitado', NULL, NULL, 'Habilitado'),
(9, 2, 4, 2, '2021-10-13 01:00:00', '2021-10-13 01:29:00', 'Finalizada', NULL, 1, 'Habilitado'),
(10, 2, 9, 1, '2021-10-13 02:30:00', '2021-10-13 02:59:00', 'Finalizada', NULL, 1, 'Habilitado'),
(11, 2, 5, 3, '2021-10-14 02:00:00', '2021-10-14 02:29:00', 'Finalizada', NULL, 1, 'Habilitado'),
(12, 2, 4, 3, '2021-10-14 02:30:00', '2021-10-14 02:59:00', 'Activa', NULL, 1, 'Habilitado'),
(13, 2, 5, 1, '2021-10-14 04:00:00', '2021-10-14 04:29:00', 'Espera', NULL, 2, 'Habilitado'),
(14, 2, 4, 1, '2021-10-14 12:30:00', '2021-10-14 12:59:00', 'Cancelada', NULL, 2, 'Cancelada'),
(15, 2, 5, 2, '2021-10-14 02:30:00', '2021-10-14 02:59:00', 'Activa', NULL, 3, 'Habilitado'),
(16, 2, 4, 1, '2021-10-19 12:30:00', '2021-10-19 12:59:00', 'Finalizada', NULL, 1, 'Habilitado'),
(17, 2, 11, 3, '2021-11-03 02:30:00', '2021-11-03 03:29:00', 'Confirmada', NULL, NULL, 'Habilitado'),
(18, 2, 11, 3, '2022-02-17 11:00:00', '2022-02-17 11:59:00', 'Confirmada', 'hjkhjk hgjk hjk jhk', NULL, 'Habilitado'),
(19, 2, 11, 3, '2022-03-30 10:30:00', '2022-03-30 11:29:00', 'Espera', NULL, 1, 'Habilitado');

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
(8, 51, 7, 'DFG545DF', 5, 5, 1, 6, '50.00', '250.00', '10.00', '240.00', '2023-03-17', 3, 3, 18, '13.33', 'teclado inhalambrico xtech sin teclado numerico', '0.00', '0.00', '20.00', '10.00', 'Inactivo', 9, 'Activo'),
(9, 51, 6, '54654FGFD4', 3, 100, 0, 100, '1.00', '100.00', '0.00', '100.00', '2023-03-17', 3, 1, 100, '1.00', 'Mouse XTech inalambrico 1000dpi', '0.00', '0.00', '2.00', '5.00', 'Activada', 60, 'Activo'),
(10, 52, 10, 'DFG54DFG', 5, 2, 1, 3, '10.00', '20.00', '0.00', '20.00', '2022-09-22', 4, 3, 9, '2.22', 'impresora multifuncional con tanques de tinta para cada color', '0.00', '0.00', '3.15', '10.00', 'Inactivo', 1, 'Activo'),
(11, 52, 6, 'DFG45DFG', 5, 4, 2, 6, '50.00', '200.00', '50.00', '150.00', '2022-09-22', 5, 1, 6, '25.00', 'Mouse XTech inalambrico 1000dpi', '0.00', '0.00', '60.00', '10.00', 'Inactivo', 0, 'Activo'),
(12, 53, 6, '8888', 3, 100, 0, 100, '2.00', '200.00', '0.00', '200.00', '2022-03-23', 3, 1, 100, '2.00', 'Mouse XTech inalambrico 1000dpi', '0.00', '0.00', '5.00', '0.00', 'Inactivo', 99, 'Activo'),
(13, 53, 7, '999999', 5, 10, 0, 10, '30.00', '300.00', '0.00', '300.00', '2022-03-23', 5, 1, 10, '30.00', 'teclado inhalambrico xtech sin teclado numerico', '0.00', '0.00', '50.00', '10.00', 'Inactivo', 10, 'Activo'),
(14, 54, 6, '777', 4, 5, 0, 5, '10.00', '50.00', '0.00', '50.00', '2022-03-25', 4, 1, 5, '10.00', 'Mouse XTech inalambrico 1000dpi', '16.00', '50.00', '15.00', '10.00', 'Inactivo', 5, 'Activo'),
(15, 55, 7, '6D54G', 5, 10, 0, 10, '10.00', '100.00', '0.00', '100.00', '2022-03-25', 5, 1, 10, '10.00', 'teclado inhalambrico xtech sin teclado numerico', '16.00', '50.00', '15.00', '10.00', 'Inactivo', 7, 'Activo'),
(16, 56, 6, '45F4G', 5, 5, 0, 5, '10.00', '50.00', '0.00', '50.00', '2022-03-25', 5, 1, 5, '10.00', 'Mouse XTech inalambrico 1000dpi', '16.00', '60.00', '16.00', '10.00', 'Inactivo', 5, 'Activo'),
(17, 57, 6, '45F4G', 3, 5, 0, 5, '10.00', '50.00', '0.00', '50.00', '2022-03-25', 3, 1, 5, '10.00', 'Mouse XTech inalambrico 1000dpi', '16.50', '50.50', '15.05', '10.00', 'Inactivo', 5, 'Activo'),
(18, 57, 7, '6D54G', 5, 5, 0, 5, '10.00', '50.00', '0.00', '50.00', '2022-03-25', 5, 1, 5, '10.00', 'teclado inhalambrico xtech sin teclado numerico', '15.00', '50.00', '15.00', '10.00', 'Inactivo', 5, 'Activo');

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
(1, 1, 6, 1, '85.00', '45.00'),
(4, 1, 7, 1, '200.00', '0.00'),
(5, 2, 1, 1, '3000.00', '2000.00');

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
(1, 1, 6, 3, 9, 3, '2.00', '1.00', '5.00', '0.30', 'SI'),
(2, 1, 7, 5, 15, 3, '15.00', '10.00', '0.00', '0.00', 'SI'),
(3, 1, 10, 4, 10, 1, '3.15', '2.22', '0.00', '0.00', 'SI'),
(4, 1, 6, 5, 11, 1, '60.00', '25.00', '0.00', '0.00', 'SI'),
(5, 2, 6, 5, 11, 3, '60.00', '25.00', '0.00', '0.00', 'SI'),
(6, 2, 10, 4, 10, 1, '3.15', '2.22', '0.00', '0.00', 'SI'),
(12, 3, 6, NULL, NULL, 1, '85.00', '45.00', '0.00', '0.00', 'SI'),
(13, 3, 7, NULL, NULL, 1, '200.00', '0.00', '0.00', '0.00', 'SI');

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

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`iddias`, `iddoctor`, `fecha`, `apuntes`) VALUES
(4, 5, '2021-10-12', 'dfgdfg df gdfg dfg dfg fdg dfg df'),
(6, 5, '2021-10-13', NULL),
(9, 5, '2021-10-29', 'tutryurtyurynrtyu ryu ryt urty u'),
(10, 4, '2021-10-14', 'Por feriado');

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
(50, 2, 7, 2, 'Factura', 'A3', '546456456456', '2022-02-28', '0.00', 'Activo'),
(51, 2, 3, 2, 'Factura', NULL, NULL, '2022-03-09', '0.00', 'Activo'),
(52, 2, 3, 2, 'Factura', NULL, NULL, '2022-03-16', '0.00', 'Activo'),
(53, 2, 3, 2, 'Factura', NULL, NULL, '2022-03-23', '0.00', 'Activo'),
(54, 2, 3, 2, 'Factura', NULL, NULL, '2022-03-25', '0.00', 'Activo'),
(55, 2, 3, 2, 'Factura', NULL, NULL, '2022-03-25', '0.00', 'Activo'),
(56, 2, 3, 2, 'Factura', NULL, NULL, '2022-03-25', '0.00', 'Activo'),
(57, 2, 3, 2, 'Factura', NULL, NULL, '2022-03-25', '0.00', 'Activo');

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
(1, 2, 4, 2, '2022-03-29', '90802', '90802', 'dgdfg dfgdfg dfg dfg dfg dfg', 'Finalizada', 'Cancelada', '285.00', 3),
(2, 3, 11, 2, '2022-03-29', NULL, NULL, NULL, 'Pendiente', 'Cancelada', '3000.00', NULL);

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
(1, 'Jeronimo Albuerra', 'Masculino', 'jalbuerra1@gmail.com', '45657456', 'cerca de la rotonda de burguer king zona 8', '1984-08-18', '6546516641625465', '4565554-5', 'VL7BXRTD427.jfif', 'Habilitado'),
(2, 'Mariana Figueroa', 'Femenino', 'mfigueroa@hotmail.com', '46545654', 'Calle 3 98-33 zona 78 Quetzaltenango', '1999-06-25', '', '6454654-5', 'KZXMD86CH72.jfif', 'Habilitado'),
(3, 'Manuel Giron', 'Masculino', 'mgiron@hotmail.com', NULL, NULL, '2000-09-01', '', NULL, '8X4JO8GOVI8.jpg', 'Habilitado'),
(4, 'lolo', 'Masculino', 'jalbuerra@gmail.com', NULL, NULL, '2021-09-17', '', NULL, NULL, 'Eliminado'),
(5, 'adsfasd fasdf adsf', 'Masculino', 'adsfad@hodtmail.com', '64654845', 'diagonal 2 32-22 zona 3 chi', '2004-10-14', '6546546549848', '6546546-5', NULL, 'Eliminado');

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
(1, 2, 'Cliente', 'Otto Szarata', NULL, '1676902560901', 'diagonal 2 32-22 zona 3', '42153288', 'ottoszarata@szystems.com', NULL, NULL, NULL),
(3, 2, 'Proveedor', 'Macrosistemas', 'Nit', '64641354', 'rotonda tecun uman', '6546545', 'macro@gmail.com', 'bi', 'macrosistemas', '65454-6454-454'),
(7, 2, 'Proveedor', 'Tecnobodega, S.A.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 'Proveedor', 'Click', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 2, 'Cliente', 'Javier Garcia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 2, 'Cliente', 'ofsm', NULL, NULL, 'quetgo cerca de burguer', '8989898', 'szystems@hotmail.com', 'ofsm', NULL, NULL),
(41, 2, 'Cliente', 'Otto Francisco Szarata Maldonado', NULL, '3493503-7', 'diagonal 2 32-22 zona 3', '42153288', 'szotto18@hotmail.com', NULL, NULL, NULL),
(57, 2, 'Inactivo', 'Jaime castillo', NULL, NULL, 'cerca de la rotonda', '123456', 'jcastillo@hotmail.com', NULL, NULL, NULL),
(63, 2, 'Cliente', 'Otto', '', '', 'diagonal 2 32-22 zona 3', '8989898', 'info@szystems.com', '', '', ''),
(64, 2, 'Cliente', 'miguel aceituno', NULL, NULL, NULL, '45645646', 'miguela@hotmail.com', 'Banco Industrial', 'Szarata', NULL),
(65, 2, 'Cliente', 'Guillermo chacon', NULL, NULL, NULL, NULL, 'gchacon@hotmail.com', NULL, NULL, NULL),
(66, 2, 'Inactivo', 'Alan Aceituno', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 2, 'Proveedor', 'Intelaf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 2, 'Cliente', 'Jorge Dardon', '', '', 'cerca del club', '5646454', 'jdardon@gmail.com', '', '', ''),
(69, 2, 'Cliente', 'Alan castillo', '', '', 'cerca de tu ya sabes', '234234', 'acastilloalan@lhotmail.com', '', '', ''),
(70, 2, 'Cliente', 'Brauilio Garcia', '', '', 'cerca de la pepsui', '343452345', 'bgarcia@hotmail.com', '', '', ''),
(71, 2, 'Cliente', 'Camilo zuniga', NULL, NULL, NULL, '65454', 'czuniga@hogkd.com', NULL, NULL, NULL);

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
(1, 'Pastilla', 'Unidad de pastilla de blister', 'Eliminado'),
(2, 'adsfasdf', 'ds fasd fasd fadsf', 'Eliminado'),
(3, 'Pastilla', 'Pastilla unidad de blister', 'Habilitado'),
(4, 'Blister', 'Blister de pastillas', 'Habilitado'),
(5, 'Caja', 'Caja con blisters', 'Habilitado'),
(6, 'Frasco', NULL, 'Habilitado');

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
(1, 'PROCEDIMIENTOS GINECOLOGICOS', 'Este es el rubro de procedimientos ginecologicos', 'Habilitado', 'Habilitado'),
(2, 'prueba', NULL, 'Habilitado', 'Habilitado'),
(3, 'RADIO FRECUENCIA', 'Estos son los rubros de radio frecuencia', 'Habilitado', 'Habilitado');

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
(7, 2, 1, '2000.00', '3000.00', NULL),
(9, 1, 6, '45.00', '85.00', NULL),
(10, 3, 7, '0.00', '200.00', NULL),
(11, 3, 8, '100.00', '400.00', NULL);

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
  `zona_horaria` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moneda` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_descuento` decimal(11,2) NOT NULL,
  `principal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `empresa`, `idempresa`, `telefono`, `direccion`, `fecha_nacimiento`, `contacto_emergencia`, `telefono_emergencia`, `logo`, `tipo_usuario`, `especialidad`, `zona_horaria`, `moneda`, `max_descuento`, `principal`) VALUES
(2, 'Otto Szarata', 'YDM5Z5XL2FIMG-20180704-WA0016.jpg', 'ottoszarata@szystems.com', NULL, '$2y$10$HeSJ7./wqC/Vh/wPWIeIwe3bLRL9JyQtYvAJndNJkvNbL6MhH7otm', '2sEXZO2zMfckcXap8kezWujAXgNuArjsvW2NfNOsG3qbBOVNJ7YEpAIltETf', '2019-12-11 23:33:22', '2021-10-20 23:28:39', 'Clinicas El Valle', 2, NULL, NULL, '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, 'America/Guatemala', 'Q.', '20.00', 'SI'),
(3, 'Regina Santander', NULL, 'Eliminado', NULL, '$2y$10$0wWPkvCAwhLgivb/yIxyBuWy35CWEeeP12/pE7hxpxnO9ErKPRwoi', NULL, '2021-09-09 23:33:29', '2021-09-09 23:43:33', 'Clinicas El Valle', 2, '456875', NULL, NULL, NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Obstetra', 'America/Guatemala', 'Q.', '0.00', 'NO'),
(4, 'Otto Szarata', 'VURN71I9JMIMG-20180704-WA0015.jpeg', 'szotto18@hotmail.com', NULL, '$2y$10$dQXpz//eAr1FvXv3nFP.iOX6YuuVRu3yECgGj6glrWIzqOB8bDKCG', '5UxmhbTJcpsTCcKZObLdzMKpqaluv0I4KxEpUux9FWiheNBSyYZw0EPVbffw', '2021-09-09 23:33:53', '2021-10-20 23:17:43', 'Clinicas El Valle', 2, '+50242153288', 'diagonal 2 32-22 zona 3', '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 'America/Guatemala', 'Q.', '0.00', 'NO'),
(5, 'Juan Perez', 'NCGW38GOVI8.jpg', 'juanperez@hotmail.com', NULL, '$2y$10$EORa91PVsD/QpGYljVFPu.ydhu4TwaRrMd25WHMe8heVneiiztcxa', NULL, '2021-09-14 23:20:24', '2021-10-05 05:30:24', 'Clinicas El Valle', 2, '4584234', 'diagonal 2 32-22 zona 3', '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Dermatólogo', 'America/Guatemala', 'Q.', '0.00', 'NO'),
(6, 'Edgar Sajquim', 'XPMQ7RTD427.jfif', 'edgars@singular.com.gt', NULL, '$2y$10$q4oDXeZFTJC9zCwP/8BA9.iv0NreTFsiaeQn5GaIxelW5zihXJzTG', NULL, '2021-09-14 23:20:51', '2021-09-14 23:20:51', 'Clinicas El Valle', 2, NULL, NULL, NULL, NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, 'America/Guatemala', 'Q.', '0.00', 'NO'),
(7, 'Ligia Garcia', 'LES2Vlogo.png', 'lgarcia@hotmail.com', NULL, '$2y$10$ruQkhw3a21lQ9keIsrDEuOjCQ8z7.mWpd5EUDhc7sN3sHsrl.7g7q', NULL, '2021-09-24 02:41:49', '2021-09-29 00:17:17', 'Clinicas El Valle', 2, '454745456', NULL, '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Asistente', NULL, 'America/Guatemala', 'Q.', '0.00', 'NO'),
(8, 'Cachito sarner4', NULL, 'cachito4@hotmail.com', NULL, '$2y$10$HhMLY3lARMBV/1UpAwXCIuQEzA4cLWt9JUITmgC5jmeluYSzWm7VS', NULL, '2021-09-28 23:43:39', '2021-09-28 23:56:38', 'Clinicas El Valle', 2, '456654544', 'cerca de la rotonda4', '1995-06-21', 'Anibal juarez4', '6454654544', '1630601297logolargo.png', 'Administrador', NULL, 'America/Guatemala', 'Q.', '0.00', 'NO'),
(9, 'orlando queme4', NULL, 'oqueme4@hotmail.com', NULL, '$2y$10$HrJhbM7RUxrOQEPVRmMM/uohyeH9egq5MzH43LoQHuxNWaXqXWG32', NULL, '2021-09-28 23:44:44', '2021-09-28 23:53:06', 'Clinicas El Valle', 2, '646546544', '190 avenida4', '1999-11-21', 'jorge suchi4', '648215454', '1630601297logolargo.png', 'Doctor', 'Internista', 'America/Guatemala', 'Q.', '0.00', 'NO'),
(10, 'dfgdfg gdfg', NULL, 'Eliminado', NULL, '$2y$10$NNtL8E4hgrzx3vEHjZgb8e/M6cid/RRp7pzGx1PHbk3SFGLHFjx4a', NULL, '2021-09-29 00:18:05', '2021-09-29 00:18:10', 'Clinicas El Valle', 2, NULL, NULL, '2021-09-28', 'adf adf ad f', NULL, '1630601297logolargo.png', 'Asistente', NULL, 'America/Guatemala', 'Q.', '0.00', 'NO'),
(11, 'Ramon Garcia', 'KH2XVWIN_20210608_18_04_44_Pro.jpg', 'rgarcia@hotmail.com', NULL, '$2y$10$/bsxGLCH2LGFzUXzH1raG.6IIRbTptQXeZa4KFQLz0agAd5zwbfZu', NULL, '2021-10-20 23:25:52', '2021-10-20 23:26:10', 'Clinicas El Valle', 2, '464545', 'diagonal 2 32-22 zona 3', '2021-10-20', 'Maritza', '65464', '1630601297logolargo.png', 'Doctor', 'Urólogo', 'America/Guatemala', 'Q.', '15.00', 'NO'),
(12, 'Angelina Fernandez', NULL, 'afernandez@gmail.com', NULL, '$2y$10$5pE856n1SnZ74jC/sOa6/.EuemfKhJlTw266iLq/0YGVAK2s9AiGe', NULL, '2021-10-20 23:27:08', '2021-10-20 23:27:21', 'Clinicas El Valle', 2, NULL, NULL, '1994-07-27', NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, 'America/Guatemala', 'Q.', '2.00', 'NO');

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
(10, 8, 'vendedor 1', '95452156', 'vendedor1@hotmail.com', '6465464FR'),
(12, 7, 'German', '45687556', NULL, 'Garcia'),
(13, 8, 'Vendedor 2', '458562155', NULL, '565485');

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
(1, 2, 2, 2, 'Factura', 'A1', '45645645688', '2022-03-28', '0.00', '113.85', '60.22', '0.00', '0.00', '113.85', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL),
(2, 2, 2, 2, 'Factura', 'A4', '456456456', '2022-03-29', '0.00', '183.15', '77.22', '0.00', '0.00', '183.15', 'A', 'Pagado', 'Cerrada', 'Efectivo', NULL),
(3, 2, 2, 2, '', NULL, NULL, '2022-03-29', '0.00', '285.00', '45.00', '0.00', '0.00', '85.00', 'A', 'Pendiente', 'Cerrada', 'Efectivo', 1);

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
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  MODIFY `iddetalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  MODIFY `iddetalle_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `iddetalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `iddias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `idorden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `idpresentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rubro`
--
ALTER TABLE `rubro`
  MODIFY `idrubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rubro_articulo`
--
ALTER TABLE `rubro_articulo`
  MODIFY `idrubro_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idvendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
