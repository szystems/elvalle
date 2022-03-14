-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2022 a las 00:24:16
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
  `idempresa` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `codigo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `minimo` int(11) NOT NULL,
  `bodega` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ubicacion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ultimo_precio_compra` decimal(11,2) NOT NULL,
  `ultimo_precio_venta` decimal(11,2) NOT NULL,
  `ultimo_precio_oferta` decimal(11,2) NOT NULL,
  `oferta_activar` varchar(5) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `idempresa`, `idcategoria`, `codigo`, `nombre`, `stock`, `minimo`, `bodega`, `ubicacion`, `descripcion`, `imagen`, `estado`, `ultimo_precio_compra`, `ultimo_precio_venta`, `ultimo_precio_oferta`, `oferta_activar`) VALUES
(1, 2, 1, '+545645', 'portatil hp core i5', 98, 0, 'central', '9ki', 'lkajdfjdfklasjdfklasjdflaksjdf', '', 'Activo', '2500.00', '5500.00', '0.00', 'NO'),
(6, 2, 3, '456866', 'Mouse XTech Inhalambrico', 1, 0, 'Central', 'A-1', 'Mouse XTech inalambrico 1000dpi', 'G68DWíndice.jpg', 'Activo', '45.50', '75.00', '5.00', 'SI'),
(7, 2, 3, '657674', 'Teclado XTech Inhalambrico', -2, 0, 'Central', 'A-2', 'teclado inhalambrico xtech sin teclado numerico', 'HEINYproduct-4946-01.jpg', 'Activo', '25.00', '50.00', '10.00', 'NO'),
(8, 2, 3, '654564', 'Monitor Samsung 24\" Curvo', 96, 0, 'Central', 'B-22', 'Monitor Samsung de 24\" curvo, resolucion HD 1080, FreeSync, modo Gaming', 'P52RNmonitor-samsung-24-curvo-f390-full-hd-1080-freesync-hdmi-vga-D_NQ_NP_850387-MLA31115228992_062019-Q.jpg', 'Activo', '1000.00', '1600.00', '30.00', 'SI'),
(10, 2, 3, '6765454', 'Impresora Multifuncional Epson Inhalambrica', 95, 0, NULL, NULL, 'impresora multifuncional con tanques de tinta para cada color', 'ELNUK1a.jpg', 'Activo', '1000.00', '1500.00', '26.00', 'SI'),
(11, 2, 8, '655465', 'XBOX ONE X', 94, 0, NULL, NULL, 'Consola de videojuegos Xbox One X 4k, Dolby Atmos 1 TB', 'RNPSB471937-microsoft-xbox-one-x.jpg', 'Activo', '3500.00', '5000.00', '0.00', 'NO'),
(12, 2, 8, '65454', 'PLAY STATION 4 PRO', 98, 0, NULL, NULL, 'Consola de video juegos play station 4 pro 4k reescalado', 'UXWF0BQNGOPS4-Pro-SOURCE-Sony.jpg', 'Activo', '3000.00', '4500.00', '0.00', 'NO'),
(13, 2, 8, '55454', 'NINTEDO SWITCH', 97, 0, NULL, NULL, NULL, '2HB0Xthree-modes-in-one.png', 'Activo', '2000.00', '3500.00', '0.00', 'NO'),
(14, 2, 8, '489874', 'Play Station Classic', 94, 0, 'Central', 'B-99', 'Play station Clasica con 20 juegos preinstalados', '40WD83max.jpg', 'Activo', '100.00', '500.00', '0.00', 'NO'),
(15, 2, 8, '6454', 'Sega Mega Drive Mini', 97, 0, 'Central', 'D-4', NULL, 'FJWZ6BY3QUíndice.jfif', 'Activo', '600.00', '1200.00', '20.00', 'SI'),
(16, 2, 8, '64545', 'Atari Mini', 0, 0, 'Central', 'R-5', 'Consolo retro Atari retro', 'MVHLC450_1000.jpg', 'Activo', '200.00', '600.00', '0.00', 'NO'),
(17, 2, 21, '567564', 'Hub USB Imexx', 99, 0, 'central', 'L-99', 'Hub USB 3.0', '', 'Activo', '25.00', '50.00', '39.00', 'NO'),
(18, 2, 21, '567564', 'Hub USB Imexx', 100, 0, 'central', 'L-99', 'Hub USB 3.0', NULL, 'Inactivo', '25.00', '50.00', '39.00', 'NO'),
(19, 2, 21, '64546', 'Teclado Gaming half', 48, 0, 'Central', 'F99', 'teclado mitad gaming', NULL, 'Activo', '50.00', '125.00', '25.00', 'SI'),
(20, 2, 2, 'sdfsdfsdf', 'dsfsdfs', 5, 0, NULL, NULL, NULL, '', 'Inactivo', '100.00', '200.00', '5.00', 'NO'),
(21, 2, 2, 'dfghdfghdfg', 'asdfdfgh', 10, 0, NULL, NULL, NULL, '', 'Inactivo', '200.00', '500.00', '10.00', 'NO'),
(22, 2, 3, 'werwerwer', 'werwerwer', 4, 0, NULL, NULL, NULL, '', 'Inactivo', '2000.00', '5000.00', '5.00', 'NO'),
(23, 2, 1, '5455', 'Cincho negro Guess', 35, 0, NULL, NULL, NULL, 'F42S5wifi.jpg', 'Activo', '55.00', '105.00', '15.00', 'SI'),
(24, 2, 2, 'sdfsdfsdfsdf', 'efsdfsdfsdf', 5, 0, NULL, NULL, NULL, NULL, 'Inactivo', '5.00', '10.00', '10.00', 'SI'),
(25, 2, 2, '2222', '2222', 5, 0, NULL, NULL, NULL, NULL, 'Inactivo', '14.00', '23.00', '5.00', 'SI'),
(26, 2, 2, '11111', '1111', 5, 0, NULL, NULL, NULL, NULL, 'Inactivo', '11.00', '15.00', '5.00', 'SI'),
(27, 2, 2, 'xcvbxcvb', 'cvbxcvb', 0, 0, NULL, NULL, NULL, NULL, 'Inactivo', '15.00', '20.00', '5.00', 'SI'),
(28, 2, 9, 'sadfsdfsdf', 'sdfadsfasf', 10, 0, 'sdfsdfsf', NULL, NULL, 'WB06CWIN_20210608_18_04_39_Pro.jpg', 'Inactivo', '5.00', '10.00', '8.00', 'SI');

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
(264, 2, 2, '2021-11-03 11:50:50', 'Citas', 'Se edito una cita, Paciente: Manuel Giron, Doctor: Ramon Garcia, Fecha y hora: 2021-11-03 02:30:00, Finaliza: 2021-11-03 3:29:00, Estado: Confirmada, Apuntes: ');

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
(17, 2, 11, 3, '2021-11-03 02:30:00', '2021-11-03 03:29:00', 'Confirmada', NULL, NULL, 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso`
--

CREATE TABLE `detalle_ingreso` (
  `iddetalle_ingreso` int(11) NOT NULL,
  `idingreso` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_compra` decimal(11,2) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `precio_oferta` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_ingreso`
--

INSERT INTO `detalle_ingreso` (`iddetalle_ingreso`, `idingreso`, `idarticulo`, `cantidad`, `precio_compra`, `precio_venta`, `precio_oferta`) VALUES
(1, 1, 12, 3, '3000.00', '4500.00', '0.00'),
(2, 2, 6, 100, '45.50', '75.00', '5.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `iddetalle_venta` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
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

INSERT INTO `detalle_venta` (`iddetalle_venta`, `idventa`, `idarticulo`, `cantidad`, `precio_venta`, `precio_compra`, `precio_oferta`, `descuento`, `agregado`) VALUES
(1, 1, 14, 1, '500.00', '100.00', '0.00', '0.00', 'SI'),
(2, 1, 23, 1, '105.00', '55.00', '15.00', '15.75', 'SI'),
(3, 1, 19, 1, '125.00', '50.00', '25.00', '31.25', 'SI'),
(5, 2, 1, 1, '5500.00', '2500.00', '20.00', '1100.00', 'SI'),
(6, 2, 1, 1, '5500.00', '2500.00', '0.00', '0.00', 'SI'),
(8, 2, 13, 3, '3500.00', '2000.00', '10.00', '1050.00', 'SI');

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
(1, 2, 7, 2, 'Factura', NULL, NULL, '2021-10-15', '0.00', 'A'),
(2, 2, 7, 2, 'Factura', 'A1', '435456', '2021-10-15', '0.00', 'C');

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
(1, 'PROCEDIMIENTOS GINECOLOGICOS', 'Este es el rubro de procedimientos ginecologicos', 'Habilitado', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubro_articulo`
--

CREATE TABLE `rubro_articulo` (
  `idrubro_articulo` int(11) NOT NULL,
  `idrubro` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rubro_articulo`
--

INSERT INTO `rubro_articulo` (`idrubro_articulo`, `idrubro`, `idarticulo`, `estado`) VALUES
(6, 1, 12, NULL);

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
(2, 'Otto Szarata', 'YDM5Z5XL2FIMG-20180704-WA0016.jpg', 'ottoszarata@szystems.com', NULL, '$2y$10$HeSJ7./wqC/Vh/wPWIeIwe3bLRL9JyQtYvAJndNJkvNbL6MhH7otm', 'V847BhNfFOUYedhWX7bEU8kXwCIMbTJmHTLeLV0JcDy5sxAZ8HwKyJFc3yy5', '2019-12-11 23:33:22', '2021-10-20 23:28:39', 'Clinicas El Valle', 2, NULL, NULL, '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Administrador', NULL, 'America/Guatemala', 'Q.', '20.00', 'SI'),
(3, 'Regina Santander', NULL, 'Eliminado', NULL, '$2y$10$0wWPkvCAwhLgivb/yIxyBuWy35CWEeeP12/pE7hxpxnO9ErKPRwoi', NULL, '2021-09-09 23:33:29', '2021-09-09 23:43:33', 'Clinicas El Valle', 2, '456875', NULL, NULL, NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Obstetra', 'America/Guatemala', 'Q.', '0.00', 'NO'),
(4, 'Otto Szarata', 'VURN71I9JMIMG-20180704-WA0015.jpeg', 'szotto18@hotmail.com', NULL, '$2y$10$dQXpz//eAr1FvXv3nFP.iOX6YuuVRu3yECgGj6glrWIzqOB8bDKCG', 'we9hNJFzXzaNdpYaeBmCZnRnGvas4wbTopIyiJ1wvtMFYM8uDA9SfA3acQaC', '2021-09-09 23:33:53', '2021-10-20 23:17:43', 'Clinicas El Valle', 2, '+50242153288', 'diagonal 2 32-22 zona 3', '1970-01-01', NULL, NULL, '1630601297logolargo.png', 'Doctor', 'Ginecólogo y Obstetra', 'America/Guatemala', 'Q.', '0.00', 'NO'),
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
  `tipopago` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `idempresa`, `idcliente`, `idusuario`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha`, `impuesto`, `total_venta`, `total_compra`, `total_comision`, `total_impuesto`, `abonado`, `estado`, `estadosaldo`, `estadoventa`, `tipopago`) VALUES
(1, 2, 3, 2, 'Factura', NULL, NULL, '2021-10-18', '0.00', '683.00', '205.00', '0.00', '0.00', '683.00', 'A', 'Pagado', 'Abierta', 'Efectivo'),
(2, 2, 2, 2, 'Factura', NULL, NULL, '2021-10-20', '0.00', '19350.00', '11000.00', '0.00', '0.00', '19350.00', 'A', 'Pagado', 'Cerrada', 'Efectivo');

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
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  MODIFY `iddetalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `iddetalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `iddias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `rubro`
--
ALTER TABLE `rubro`
  MODIFY `idrubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rubro_articulo`
--
ALTER TABLE `rubro_articulo`
  MODIFY `idrubro_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
