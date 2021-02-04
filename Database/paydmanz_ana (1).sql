-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-02-2021 a las 13:54:30
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paydmanz_ana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `Id_calificacion` int(11) NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Estatus` enum('Aprobada','Reprobada') COLLATE utf8_spanish_ci NOT NULL,
  `Materia` int(11) NOT NULL,
  `Profesor` int(11) NOT NULL,
  `Estrellas` int(11) NOT NULL,
  `Opinion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `Manzana` enum('No','Buena','Mala') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `Id_carrera` int(11) NOT NULL,
  `Nombre_carrera` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nombre_corto` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Semestres` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`Id_carrera`, `Nombre_carrera`, `Nombre_corto`, `Semestres`) VALUES
(1, 'Ingeniería en Sistemas Computacionales', 'Sistemas', 9),
(2, 'Ingeniería en Tecnologías de la Información y Comunicaciones', 'TICs', 9),
(3, 'Ingeniería Electrónica', 'Electrónica', 9),
(4, 'Ingeniería Mecatrónica', 'Mecatrónica', 9),
(5, 'Ingeniería Electromecánica', 'Electromecánica', 9),
(6, 'Ingeniería en Logística', 'Logística', 9),
(7, 'Ingeniería Industrial', 'Industrial', 9),
(8, 'Ingeniería en Gestión Empresarial', 'Gestión', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `Id_materia` int(11) NOT NULL,
  `Nombre_materia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`Id_materia`, `Nombre_materia`, `Semestre`, `Carrera`) VALUES
(1, 'CÁLCULO DIFERENCIAL', 1, 1),
(2, 'FUNDAMENTOS DE PROGRAMACIÓN', 1, 1),
(3, 'MATEMÁTICAS DISCRETAS', 1, 1),
(4, 'TALLER DE ADMINISTRACIÓN', 1, 1),
(5, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 1),
(6, 'TALLER DE ÉTICA', 1, 1),
(7, 'CÁLCULO INTEGRAL', 2, 1),
(8, 'ÁLGEBRA LINEAL', 2, 1),
(9, 'PROGRAMACIÓN ORIENTADA A OBJETOS', 2, 1),
(10, 'CONTABILIDAD FINANCIERA', 2, 1),
(11, 'QUÍMICA', 2, 1),
(12, 'PROBABILIDAD Y ESTADÍSTICA', 2, 1),
(13, 'CÁLCULO VECTORIAL', 3, 1),
(14, 'ESTRUCTURA DE DATOS', 3, 1),
(15, 'FÍSICA GENERAL', 3, 1),
(16, 'INVESTIGACIÓN DE OPERACIONES', 3, 1),
(17, 'CULTURA EMPRESARIAL', 3, 1),
(18, 'DESARROLLO SUSTENTABLE', 3, 1),
(19, 'ECUACIONES DIFERENCIALES', 4, 1),
(20, 'TÓPICOS AVANZADOS DE PROGRAMACIÓN', 4, 1),
(21, 'PRINCIPIOS ELÉCTRICOS Y APLICACIONES DIGITALES', 4, 1),
(22, 'FUNDAMENTOS DE BASE DE DATOS', 4, 1),
(23, 'SIMULACIÓN', 4, 1),
(24, 'MÉTODOS NUMÉRICOS', 4, 1),
(25, 'ARQUITECTURA DE COMPUTADORAS', 5, 1),
(26, 'TALLER DE BASE DE DATOS', 5, 1),
(27, 'GRAFICACIÓN', 5, 1),
(28, 'FUNDAMENTOS DE TELECOMUNICACIONES', 5, 1),
(29, 'FUNDAMENTOS DE INGENIERÍA DE SOFTWARE', 5, 1),
(30, 'SISTEMAS OPERATIVOS', 5, 1),
(31, 'LENGUAJES DE INTERFAZ', 6, 1),
(32, 'ADMINISTRACIÓN DE BASE DE DATOS', 6, 1),
(33, 'REDES DE COMPUTADORAS', 6, 1),
(34, 'TALLER DE SISTEMAS OPERATIVOS', 6, 1),
(35, 'INGENIERÍA DE SOFTWARE', 6, 1),
(36, 'LENGUAJES Y AUTÓMATAS I', 6, 1),
(37, 'SISTEMAS PROGRAMABLES', 7, 1),
(38, 'BASES DE DATOS AVANZADAS', 7, 1),
(39, 'CONMUTACIÓN Y ENRUTAMIENTO EN REDES DE DATOS', 7, 1),
(40, 'GESTIÓN DE PROYECTOS DE SOFTWARE', 7, 1),
(41, 'LENGUAJES Y AUTÓMATAS II', 7, 1),
(42, 'TALLER DE INVESTIGACIÓN I', 7, 1),
(43, 'ADMINISTRACIÓN DE REDES', 8, 1),
(44, 'TALLER DE INVESTIGACIÓN II', 8, 1),
(45, 'PROGRAMACIÓN LÓGICA Y FUNCIONAL', 8, 1),
(46, 'PROGRAMACIÓN WEB', 8, 1),
(47, 'DESARROLLO DE APLICACIONES EMPRESARIALES', 8, 1),
(48, 'INTELIGENCIA ARTIFICIAL', 9, 1),
(49, 'PROGRAMACIÓN WEB AVANZADA', 9, 1),
(50, 'ARQUITECTURA DE APLICACIONES EMPRESARIALES', 9, 1),
(51, 'DESARROLLO DE APLICACIONES PARA DISPOSITIVOS MÓVILES', 9, 1),
(52, 'CÁLCULO DIFERENCIAL', 1, 8),
(53, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 8),
(54, 'DESARROLLO HUMANO', 1, 8),
(55, 'FUNDAMENTOS DE GESTIÓN EMPRESARIAL', 1, 8),
(56, 'LEGISLACIÓN LABORAL', 1, 8),
(57, 'FUNDAMENTOS DE QUÍMICA', 1, 8),
(58, 'CÁLCULO INTEGRAL', 2, 8),
(59, 'CONTABILIDAD ORIENTADA A LOS NEGOCIOS', 2, 8),
(60, 'SOFTWARE DE APLICACIÓN EJECUTIVO', 2, 8),
(61, 'MARCO LEGAL DE LAS ORGANIZACIONES', 2, 8),
(62, 'TALLER DE ÉTICA', 2, 8),
(63, 'FUNDAMENTOS DE FÍSICA', 2, 8),
(64, 'COSTOS EMPRESARIALES', 3, 8),
(65, 'HABILIDADES DIRECTIVAS I', 3, 8),
(66, 'PROBABILIDAD Y ESTADÍSTICA DESCRIPTIVA', 3, 8),
(67, 'ECONOMÍA EMPRESARIAL', 3, 8),
(68, 'ÁLGEBRA LINEAL', 3, 8),
(69, 'DINÁMICA SOCIAL', 3, 8),
(70, 'HABILIDADES DIRECTIVAS II', 4, 8),
(71, 'ESTADÍSTICA INFERENCIAL I', 4, 8),
(72, 'ENTORNO MACROECONÓMICO', 4, 8),
(73, 'INVESTIGACIÓN DE OPERACIONES', 4, 8),
(74, 'INSTRUMENTOS DE PRESUPUESTACIÓN EMPRESARIAL', 4, 8),
(75, 'INGENIERÍA ECONÓMICA', 4, 8),
(76, 'GESTIÓN DEL CAPITAL HUMANO', 5, 8),
(77, 'ESTADÍSTICA INFERENCIAL II', 5, 8),
(78, 'INGENIERÍA DE PROCESOS', 5, 8),
(79, 'MERCADOTECNIA', 5, 8),
(80, 'FINANZAS EN LAS ORGANIZACIONES', 5, 8),
(81, 'TALLER DE INVESTIGACIÓN I', 5, 8),
(82, 'ADMINISTRACIÓN DE LA SALUD Y SEGURIDAD OCUPACIONAL', 6, 8),
(83, 'GESTIÓN DE LA PRODUCCIÓN', 6, 8),
(84, 'SISTEMAS DE INFORMACIÓN DE MERCADOTECNIA', 6, 8),
(85, 'TALLER DE INVESTIGACIÓN II', 6, 8),
(86, 'EL EMPRENDEDOR Y LA INNOVACIÓN', 6, 8),
(87, 'DISEÑO ORGANIZACIONAL', 6, 8),
(88, 'DESARROLLO SUSTENTABLE', 7, 8),
(89, 'GESTIÓN DE LA PRODUCCIÓN II', 7, 8),
(90, 'CALIDAD APLICADA A LA GESTIÓN EMPRESARIAL', 7, 8),
(91, 'MERCADOTECNIA ELECTRÓNICA', 7, 8),
(92, 'PLAN DE NEGOCIOS', 7, 8),
(93, 'GESTIÓN ESTRATÉGICA', 7, 8),
(94, 'SEMINARIO DE INNOVACIÓN DE PROCESOS', 8, 8),
(95, 'SEMINARIO DE CONSULTORÍA ORGANIZACIONAL', 8, 8),
(96, 'GESTIÓN DEL CONOCIMIENTO', 8, 8),
(97, 'ESTRATEGIAS FINANCIERAS Y COSTOS DE CALIDAD', 8, 8),
(98, 'CALIDAD APLICADA A LA GESTIÓN EMPRESARIAL II', 8, 8),
(99, 'CADENA DE SUMINISTROS', 9, 8),
(100, 'SEMINARIO DE LA GESTIÓN ESTRATÉGICA', 9, 8),
(101, 'SEMINARIO DE CALIDAD APLICADA A LA GESTIÓN EMPRESARIAL', 9, 8),
(102, 'INTRODUCCIÓN A LA INGENIERÍA EN LOGÍSTICA', 1, 6),
(103, 'CÁLCULO DIFERENCIAL', 1, 6),
(104, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 6),
(105, 'TALLER DE ÉTICA', 1, 6),
(106, 'FUNDAMENTOS DE ADMINISTRACIÓN', 1, 6),
(107, 'ECONOMÍA', 1, 6),
(108, 'CADENA DE SUMINISTRO', 2, 6),
(109, 'CÁLCULO INTEGRAL', 2, 6),
(110, 'DIBUJO ASISTIDO POR COMPUTADORA', 2, 6),
(111, 'FUNDAMENTOS DE DERECHO', 2, 6),
(112, 'QUÍMICA', 2, 6),
(113, 'BASES DE DATOS', 2, 6),
(114, 'MECÁNICA CLÁSICA', 3, 6),
(115, 'ÁLGEBRA LINEAL', 3, 6),
(116, 'PROBABILIDAD Y ESTADÍSTICA', 3, 6),
(117, 'COMPRAS', 3, 6),
(118, 'ENTORNO ECONÓMICO', 3, 6),
(119, 'MERCADOTECNIA', 3, 6),
(120, 'TÓPICOS DE INGENIERÍA MECÁNICA', 4, 6),
(121, 'LEGISLACIÓN ADUANERA', 4, 6),
(122, 'HIGIENE Y SEGURIDAD', 4, 6),
(123, 'ESTADÍSTICA INFERENCIAL I', 4, 6),
(124, 'INVENTARIOS', 4, 6),
(125, 'SERVICIO AL CLIENTE', 4, 6),
(126, 'TOPOLOGÍA DEL PRODUCTO', 5, 6),
(127, 'INVESTIGACIÓN DE OPERACIONES I', 5, 6),
(128, 'ESTADÍSTICA INFERENCIAL II', 5, 6),
(129, 'ALMACENES', 5, 6),
(130, 'CONTABILIDAD Y COSTOS', 5, 6),
(131, 'DESARROLLO HUMANO Y ORGANIZACIONAL', 5, 6),
(132, 'TALLER DE INVESTIGACIÓN I', 6, 6),
(133, 'INVESTIGACIÓN DE OPERACIONES II', 6, 6),
(134, 'INGENIERÍA ECONÓMICA', 6, 6),
(135, 'FINANZAS', 6, 6),
(136, 'TRÁFICO Y TRANSPORTE', 6, 6),
(137, 'EMPAQUE, ENVASE Y EMBALAJE', 6, 6),
(138, 'COMERCIO INTERNACIONAL', 7, 6),
(139, 'MODELOS DE SIMULACIÓN Y LOGÍSTICA', 7, 6),
(140, 'PROCESOS DE FABRICACIÓN Y MANEJO DE MATERIALES', 7, 6),
(141, 'GEOGRAFÍA PARA EL TRANSPORTE', 7, 6),
(142, 'DESARROLLO SUSTENTABLE', 7, 6),
(143, 'PROGRAMACIÓN DE PROCESOS PRODUCTIVOS', 7, 6),
(144, 'TALLER DE INVESTIGACIÓN II', 8, 6),
(145, 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS', 8, 6),
(146, 'INNOVACIÓN', 8, 6),
(147, 'CULTURA DE CALIDAD', 8, 6),
(148, 'LOGÍSTICA INTEGRAL', 8, 6),
(149, 'LOGÍSTICA INVERSA', 8, 6),
(150, 'GESTIÓN DE PROYECTOS', 9, 6),
(151, 'GESTIÓN DE LAS OPERACIONES LOGÍSTICAS', 9, 6),
(152, 'TEMAS SELECTOS DE LOGÍSTICA', 9, 6),
(153, 'CONFIABILIDAD EN LA CADENA DE SUMINISTRO', 9, 6),
(154, 'TALLER DE ÉTICA', 1, 5),
(155, 'CÁLCULO DIFERENCIAL', 1, 5),
(156, 'INTRODUCCIÓN A LA PROGRAMACIÓN', 1, 5),
(157, 'DESARROLLO SUSTENTABLE', 1, 5),
(158, 'QUÍMICA', 1, 5),
(159, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 5),
(160, 'ESTÁTICA', 2, 5),
(161, 'CÁLCULO INTEGRAL', 2, 5),
(162, 'ÁLGEBRA LINEAL', 2, 5),
(163, 'METROLOGÍA Y NORMALIZACIÓN', 2, 5),
(164, 'TECNOLOGÍA DE LOS MATERIALES', 2, 5),
(165, 'DIBUJO ELECTROMECÁNICO', 2, 5),
(166, 'DINÁMICA', 3, 5),
(167, 'CÁLCULO VECTORIAL', 3, 5),
(168, 'PROCESOS DE MANUFACTURA', 3, 5),
(169, 'ELECTRICIDAD Y MAGNETISMO', 3, 5),
(170, 'MECÁNICA DE MATERIALES', 3, 5),
(171, 'PROBABILIDAD Y ESTADÍSTICA', 3, 5),
(172, 'ANÁLISIS Y SÍNTESIS DE MECANISMOS', 4, 5),
(173, 'ECUACIONES DIFERENCIALES', 4, 5),
(174, 'TERMODINÁMICA', 4, 5),
(175, 'ANÁLISIS DE CIRCUITOS ELÉCTRICOS DE CD', 4, 5),
(176, 'MECÁNICA DE FLUIDOS', 4, 5),
(177, 'ELECTRÓNICA ANALÓGICA', 4, 5),
(178, 'DISEÑO DE ELEMENTOS DE MÁQUINAS', 5, 5),
(179, 'DISEÑO E INGENIERÍA ASISTIDOS POR COMPUTADORA', 5, 5),
(180, 'TRANSFERENCIA DE CALOR', 5, 5),
(181, 'ANÁLISIS DE CIRCUITOS ELÉCTRICOS DE CA', 5, 5),
(182, 'SISTEMAS Y MÁQUINAS DE FLUIDOS', 5, 5),
(183, 'ELECTRÓNICA DIGITAL', 5, 5),
(184, 'MÁQUINAS Y EQUIPOS TÉRMICOS I', 6, 5),
(185, 'AHORRO DE ENERGÍA', 6, 5),
(186, 'INSTALACIONES ELÉCTRICAS', 6, 5),
(187, 'MÁQUINAS ELÉCTRICAS', 6, 5),
(188, 'ADMINISTRACIÓN Y TÉCNICAS DE MANTENIMIENTO', 6, 5),
(189, 'TALLER DE INVESTIGACIÓN I', 6, 5),
(190, 'MÁQUINAS Y EQUIPOS TÉRMICOS II', 7, 5),
(191, 'SISTEMAS ELÉCTRICOS DE POTENCIA', 7, 5),
(192, 'CONTROLES ELÉCTRICOS', 7, 5),
(193, 'INGENIERÍA DE CONTROL CLÁSICO', 7, 5),
(194, 'TALLER DE INVESTIGACIÓN II', 7, 5),
(195, 'REFRIGERACIÓN Y AIRE ACONDICIONADO', 8, 5),
(196, 'SUBESTACIONES ELÉCTRICAS', 8, 5),
(197, 'SISTEMAS HIDRÁULICOS Y NEUMÁTICOS DE POTENCIA', 8, 5),
(198, 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS', 8, 5),
(199, 'CÁLCULO DIFERENCIAL', 1, 3),
(200, 'MECÁNICA CLÁSICA', 1, 3),
(201, 'QUÍMICA', 1, 3),
(202, 'TALLER DE ÉTICA', 1, 3),
(203, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 3),
(204, 'COMUNICACIÓN HUMANA', 1, 3),
(205, 'CÁLCULO INTEGRAL', 2, 3),
(206, 'PROBABILIDAD Y ESTADÍSTICA', 2, 3),
(207, 'DESARROLLO SUSTENTABLE', 2, 3),
(208, 'MEDICIONES ELÉCTRICAS', 2, 3),
(209, 'TÓPICOS SELECTOS DE FÍSICA', 2, 3),
(210, 'DESARROLLO HUMANO', 2, 3),
(211, 'CÁLCULO VECTORIAL', 3, 3),
(212, 'ELECTROMAGNETISMO', 3, 3),
(213, 'ÁLGEBRA LINEAL', 3, 3),
(214, 'FÍSICA DE SEMICONDUCTORES', 3, 3),
(215, 'PROGRAMACIÓN ESTRUCTURADA', 3, 3),
(216, 'ECUACIONES DIFERENCIALES', 4, 3),
(217, 'CIRCUITOS ELÉCTRICOS I', 4, 3),
(218, 'MARCO LEGAL DE LA EMPRESA', 4, 3),
(219, 'ANÁLISIS NUMÉRICO', 4, 3),
(220, 'DISEÑO DIGITAL', 4, 3),
(221, 'PROGRAMACIÓN VISUAL', 4, 3),
(222, 'CIRCUITOS ELÉCTRICOS II', 5, 3),
(223, 'DIODOS Y TRANSISTORES', 5, 3),
(224, 'TEORÍA ELECTROMAGNÉTICA', 5, 3),
(225, 'MÁQUINAS ELÉCTRICAS', 5, 3),
(226, 'DISEÑO DIGITAL CON VHDL', 5, 3),
(227, 'DESARROLLO PROFESIONAL', 5, 3),
(228, 'CONTROL I', 6, 3),
(229, 'DISEÑO CON TRANSISTORES', 6, 3),
(230, 'FUNDAMENTOS FINANCIEROS', 6, 3),
(231, 'MICROCONTROLADORES', 6, 3),
(232, 'TALLER DE INVESTIGACIÓN I', 6, 3),
(233, 'CONTROL II', 7, 3),
(234, 'AMPLIFICADORES OPERACIONALES', 7, 3),
(235, 'INSTRUMENTACIÓN', 7, 3),
(236, 'OPTOELECTRÓNICA', 7, 3),
(237, 'INTRODUCCIÓN A LAS TELECOMUNICACIONES', 7, 3),
(238, 'TALLER DE INVESTIGACIÓN II', 7, 3),
(239, 'CONTROL DIGITAL', 8, 3),
(240, 'CONTROLADORES LÓGICOS PROGRAMABLES', 8, 3),
(241, 'ELECTRÓNICA DE POTENCIA', 8, 3),
(242, 'ADMINISTRACIÓN GERENCIAL', 8, 3),
(243, 'DESARROLLO Y EVALUACIÓN DE PROYECTOS', 9, 3),
(244, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 7),
(245, 'TALLER DE ÉTICA', 1, 7),
(246, 'CÁLCULO DIFERENCIAL', 1, 7),
(247, 'TALLER DE HERRAMIENTAS INTELECTUALES', 1, 7),
(248, 'QUÍMICA', 1, 7),
(249, 'DIBUJO INDUSTRIAL', 1, 7),
(250, 'ELECTRICIDAD Y ELECTRÓNICA INDUSTRIAL', 2, 7),
(251, 'PROPIEDADES DE LOS MATERIALES', 2, 7),
(252, 'CÁLCULO INTEGRAL', 2, 7),
(253, 'PROBABILIDAD Y ESTADÍSTICA', 2, 7),
(254, 'ANÁLISIS DE LA REALIDAD NACIONAL', 2, 7),
(255, 'TALLER DE LIDERAZGO', 2, 7),
(256, 'METROLOGÍA Y NORMALIZACIÓN', 3, 7),
(257, 'ÁLGEBRA LINEAL', 3, 7),
(258, 'CÁLCULO VECTORIAL', 3, 7),
(259, 'ECONOMÍA', 3, 7),
(260, 'ESTADÍSTICA INFERENCIAL I', 3, 7),
(261, 'ESTUDIO DEL TRABAJO I', 3, 7),
(262, 'PROCESOS DE FABRICACIÓN', 4, 7),
(263, 'FÍSICA', 4, 7),
(264, 'ALGORITMOS Y LENGUAJES DE PROGRAMACIÓN', 4, 7),
(265, 'INVESTIGACIÓN DE OPERACIONES I', 4, 7),
(266, 'ESTADÍSTICA INFERENCIAL II', 4, 7),
(267, 'ESTUDIO DEL TRABAJO II', 4, 7),
(268, 'HIGIENE Y SEGURIDAD INDUSTRIAL', 4, 7),
(269, 'ADMINISTRACIÓN DE PROYECTOS', 5, 7),
(270, 'GESTIÓN DE COSTOS', 5, 7),
(271, 'ADMINISTRACIÓN DE LAS OPERACIONES I', 5, 7),
(272, 'INVESTIGACIÓN DE OPERACIONES II', 5, 7),
(273, 'CONTROL ESTADÍSTICO DE LA CALIDAD', 5, 7),
(274, 'ERGONOMÍA', 5, 7),
(275, 'DESARROLLO SUSTENTABLE', 5, 7),
(276, 'TALLER DE INVESTIGACIÓN I', 6, 7),
(277, 'INGENIERÍA ECONÓMICA', 6, 7),
(278, 'ADMINISTRACIÓN DE LAS OPERACIONES II', 6, 7),
(279, 'SIMULACIÓN', 6, 7),
(280, 'ADMINISTRACIÓN DEL MANTENIMIENTO', 6, 7),
(281, 'MERCADOTECNIA', 6, 7),
(282, 'TALLER DE INVESTIGACIÓN II', 7, 7),
(283, 'PLANEACIÓN FINANCIERA', 7, 7),
(284, 'PLANEACIÓN Y DISEÑO DE INSTALACIONES', 7, 7),
(285, 'SISTEMAS DE MANUFACTURA', 7, 7),
(286, 'LOGÍSTICA Y CADENAS DE SUMINISTRO', 7, 7),
(287, 'GESTIÓN DE LOS SISTEMAS DE CALIDAD', 7, 7),
(288, 'INGENIERÍA DE SISTEMAS', 7, 7),
(289, 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS', 8, 7),
(290, 'RELACIONES INDUSTRIALES', 8, 7),
(291, 'QUÍMICA', 1, 4),
(292, 'CÁLCULO DIFERENCIAL', 1, 4),
(293, 'TALLER DE ÉTICA', 1, 4),
(294, 'DIBUJO ASISTIDO POR COMPUTADORA', 1, 4),
(295, 'METROLOGÍA Y NORMALIZACIÓN', 1, 4),
(296, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 4),
(297, 'CÁLCULO INTEGRAL', 2, 4),
(298, 'ÁLGEBRA LINEAL', 2, 4),
(299, 'CIENCIA E INGENIERÍA DE MATERIALES', 2, 4),
(300, 'PROGRAMACIÓN BÁSICA', 2, 4),
(301, 'ESTADÍSTICA Y CONTROL DE CALIDAD', 2, 4),
(302, 'ADMINISTRACIÓN Y CONTABILIDAD', 2, 4),
(303, 'CÁLCULO VECTORIAL', 3, 4),
(304, 'PROCESOS DE FABRICACIÓN', 3, 4),
(305, 'ELECTROMAGNETISMO', 3, 4),
(306, 'ESTÁTICA', 3, 4),
(307, 'MÉTODOS NUMÉRICOS', 3, 4),
(308, 'DESARROLLO SUSTENTABLE', 3, 4),
(309, 'ECUACIONES DIFERENCIALES', 4, 4),
(310, 'FUNDAMENTOS DE TERMODINÁMICA', 4, 4),
(311, 'MECÁNICA DE MATERIALES', 4, 4),
(312, 'DINÁMICA', 4, 4),
(313, 'ANÁLISIS DE CIRCUITOS ELÉCTRICOS', 4, 4),
(314, 'MÁQUINAS ELÉCTRICAS', 5, 4),
(315, 'ELECTRÓNICA ANALÓGICA', 5, 4),
(316, 'MECANISMOS', 5, 4),
(317, 'ANÁLISIS DE FLUIDOS', 5, 4),
(318, 'TALLER DE INVESTIGACIÓN I', 5, 4),
(319, 'ELECTRÓNICA DE POTENCIA APLICADA', 6, 4),
(320, 'INSTRUMENTACIÓN', 6, 4),
(321, 'DISEÑO DE ELEMENTOS MECÁNICOS', 6, 4),
(322, 'ELECTRÓNICA DIGITAL', 6, 4),
(323, 'VIBRACIONES MECÁNICAS', 6, 4),
(324, 'TALLER DE INVESTIGACIÓN II', 6, 4),
(325, 'DINÁMICA DE SISTEMAS', 7, 4),
(326, 'MANUFACTURA AVANZADA', 7, 4),
(327, 'CIRCUITOS HIDRÁULICOS Y NEUMÁTICOS', 7, 4),
(328, 'MANTENIMIENTO', 7, 4),
(329, 'MICROCONTROLADORES', 7, 4),
(330, 'PROGRAMACIÓN AVANZADA', 7, 4),
(331, 'CONTROL', 8, 4),
(332, 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS', 8, 4),
(333, 'CONTROLADORES LÓGICOS PROGRAMABLES', 8, 4),
(334, 'ROBÓTICA', 9, 4),
(335, 'CÁLCULO DIFERENCIAL', 1, 2),
(336, 'FUNDAMENTOS de PROGRAMACIÓN', 1, 2),
(337, 'MATEMÁTICAS DISCRETAS I', 1, 2),
(338, 'INTRODUCCIÓN A LAS TIC´S', 1, 2),
(339, 'TALLER DE ÉTICA', 1, 2),
(340, 'FUNDAMENTOS DE INVESTIGACIÓN', 1, 2),
(341, 'CÁLCULO INTEGRAL', 2, 2),
(342, 'PROGRAMACIÓN ORIENTADA A OBJETOS', 2, 2),
(343, 'MATEMÁTICAS DISCRETAS II', 2, 2),
(344, 'ÁLGEBRA LINEAL', 2, 2),
(345, 'PROBABILIDAD Y ESTADÍSTICA', 2, 2),
(346, 'CONTABILIDAD Y COSTOS', 2, 2),
(347, 'ESTRUCTURAS Y ORGANIZACIÓN DE DATOS', 3, 2),
(348, 'MATEMÁTICAS PARA LA TOMA DE DECISIONES', 3, 2),
(349, 'FUNDAMENTOS DE BASE DE DATOS', 3, 2),
(350, 'ELECTRICIDAD Y MAGNETISMO', 3, 2),
(351, 'ADMINISTRACIÓN GERENCIAL', 3, 2),
(352, 'MATEMÁTICAS APLICADAS A COMUNICACIONES', 4, 2),
(353, 'PROGRAMACIÓN II', 4, 2),
(354, 'FUNDAMENTOS DE REDES', 4, 2),
(355, 'TALLER DE BASE DE DATOS', 4, 2),
(356, 'CIRCUITOS ELÉCTRICOS Y ELECTRÓNICOS', 4, 2),
(357, 'INGENIERÍA DE SOFTWARE', 4, 2),
(358, 'ANÁLISIS DE SEÑALES Y SISTEMAS DE COMUNICACIÓN', 5, 2),
(359, 'ADMINISTRACIÓN DE PROYECTOS', 5, 2),
(360, 'REDES DE COMPUTADORAS', 5, 2),
(361, 'BASE DE DATOS DISTRIBUIDAS', 5, 2),
(362, 'ARQUITECTURA DE COMPUTADORAS', 5, 2),
(363, 'TALLER DE INGENIERÍA DE SOFTWARE', 5, 2),
(364, 'TELECOMUNICACIONES', 6, 2),
(365, 'PROGRAMACIÓN WEB', 6, 2),
(366, 'DESARROLLO DE EMPRENDEDORES', 6, 2),
(367, 'SISTEMAS OPERATIVOS I', 6, 2),
(368, 'DESARROLLO SUSTENTABLE', 6, 2),
(369, 'TECNOLOGÍAS INALÁMBRICAS', 6, 2),
(370, 'REDES EMERGENTES', 7, 2),
(371, 'DESARROLLO DE APLICACIONES PARA DISPOSITIVOS MÓVILES', 7, 2),
(372, 'TALLER DE INVESTIGACIÓN I', 7, 2),
(373, 'SISTEMAS OPERATIVOS II', 7, 2),
(374, 'NEGOCIOS ELECTRÓNICOS I', 7, 2),
(375, 'INTERACCIÓN HUMANO COMPUTADORA', 7, 2),
(376, 'ADMINISTRACIÓN Y SEGURIDAD DE REDES', 8, 2),
(377, 'AUDITORÍA EN TECNOLOGÍAS DE LA INFORMACIÓN', 8, 2),
(378, 'TALLER DE INVESTIGACIÓN II', 8, 2),
(379, 'INGENIERÍA DEL CONOCIMIENTO', 8, 2),
(380, 'NEGOCIOS ELECTRÓNICOS II', 8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `Id_post` int(11) NOT NULL,
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Carrera` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Comentario` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen_ruta` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_comentario`
--

CREATE TABLE `post_comentario` (
  `Post` int(11) NOT NULL,
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Comentario` varchar(400) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_manzana`
--

CREATE TABLE `post_manzana` (
  `Post` int(11) NOT NULL,
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Manzana` enum('Buena','Mala') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_notificacion`
--

CREATE TABLE `post_notificacion` (
  `Post` int(11) NOT NULL,
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Personas` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Tipo` enum('Manzana','Comentario') COLLATE utf8_spanish_ci NOT NULL,
  `Visto` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Id_profesor` int(11) NOT NULL,
  `Titulo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` enum('Masculino','Femenino','Sin especificar') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Id_profesor`, `Titulo`, `Nombre`, `Sexo`) VALUES
(1, 'Ing.', 'Juan Manuel Luna Valle', 'Masculino'),
(2, 'Lic.', 'Silvia Villalpando Contreras', 'Femenino'),
(3, 'Lic.', 'Patricia Donato Jiménez', 'Femenino'),
(4, 'Ing.', 'Luis García Márquez', 'Masculino'),
(5, 'Ing.', 'Luis Roberto Gallegos Muñoz', 'Masculino'),
(6, 'Dr.', 'Víctor Manuel Zamudio Rodríguez', 'Masculino'),
(7, 'Dr.', 'Carlos Lino Ramírez', 'Masculino'),
(8, 'Ing.', 'Luz del Carmen Ruiz Gaytan', 'Femenino'),
(9, 'Ing.', 'José Antonio Calderón Guzmán', 'Masculino'),
(10, 'Ing.', 'José Luis Servín Lara', 'Masculino'),
(11, 'Ing.', 'Israel Esteban López', 'Masculino'),
(12, 'C.P.', 'Karina Estrada Tolentino', 'Femenino'),
(13, 'Lic.', 'Claudia Araceli Caudillo Peñaflor', 'Femenino'),
(14, 'Ing.', 'Juan José Vallejo Nuñez', 'Masculino'),
(15, 'Lic.', 'María Eugenia Pérez Parra', 'Femenino'),
(17, 'Lic.', 'Lilia Berenice Rodríguez Ramírez', 'Femenino'),
(18, 'Ing.', 'María Raquel Hernández Segura', 'Femenino'),
(19, 'Ing.', 'Jesús Enrique Ramírez Mendez', 'Masculino'),
(20, 'Ing.', 'José Alfredo Gasca González', 'Masculino'),
(21, 'Ing.', 'Humberto León López', 'Masculino'),
(22, 'Ing.', 'Guillermo García Rodríguez', 'Masculino'),
(23, 'Ing.', 'Guillermina Hernández Hernández', 'Femenino'),
(24, 'Lic.', 'Mariana Guadalupe García Vargas', 'Femenino'),
(25, 'Ing.', 'Mónica de los Dolores Rodríguez Chávez', 'Femenino'),
(26, 'Lic.', 'Daniel Arturo Olivares Vera', 'Masculino'),
(27, 'Lic.', 'María Guadalupe Barrón Urrutia', 'Femenino'),
(28, 'C.P.', 'Ma. del Carmen Villalpando Valadez', 'Femenino'),
(29, 'M.I.I', 'Lilia Angélica Vázquez Gutiérrez', 'Femenino'),
(30, 'Ing.', 'José de Jesús Mayagoitia Barragán', 'Masculino'),
(31, 'Lic.', 'Lorena Rocha Gutiérrez', 'Femenino'),
(32, 'Lic.', 'Rosa María Pérez Rodríguez', 'Femenino'),
(33, 'Ing.', 'Domingo Garcia Ornelas', 'Masculino'),
(34, 'Lic.', 'Mireya Lozano Saldana', 'Femenino'),
(35, 'Ing.', 'Hugo Muñoz Rodríguez', 'Masculino'),
(36, 'Ing.', 'Jesús Eduardo Aldape', 'Masculino'),
(37, 'Ing.', 'José Hurtado Martínez', 'Masculino'),
(38, 'Ing.', 'José Luis Araiza Guzmán', 'Masculino'),
(39, 'Ing.', 'Juan Manuel Edmundo Martínez Camacho', 'Masculino'),
(40, 'Ing.', 'Karla Angélica García Barrón', 'Femenino'),
(41, 'Ing.', 'Leopoldo David Tapia Torres', 'Masculino'),
(42, 'Ing.', 'Marcela Palacios Ortega', 'Femenino'),
(43, 'Ing.', 'María Elena García Sotelo', 'Femenino'),
(44, 'Ing.', 'Mónica Gutiérrez Del Real', 'Femenino'),
(45, 'Ing.', 'Noé César Estrada Quiroz', 'Masculino'),
(46, 'Ing.', 'Pablo Gregorio Pérez Campos', 'Masculino'),
(47, 'Ing.', 'Ramón Díaz Hernández', 'Masculino'),
(48, 'Ing.', 'Roberto Robledo Pérez', 'Masculino'),
(49, 'Ing.', 'Rubén Trujillo Corona', 'Masculino'),
(50, 'Ing.', 'Yaret Viridiana Alonso Rangel', 'Femenino'),
(51, 'Ing.', 'Juan Pablo Cordero Hernández', 'Masculino'),
(52, 'Lic.', 'Nayeli Martínez Aguilar', 'Femenino'),
(53, 'Ing.', 'Monica Salgado Solis', 'Femenino'),
(54, 'Ing.', 'Alejandro Garcia Trujillo', 'Masculino'),
(55, 'Ing.', 'Primitivo Del Ángel Soto', 'Masculino'),
(56, 'Lic.', 'Edgar Manuel Delgado Tolentino', 'Masculino'),
(57, 'Ing.', 'Felipe Ortega', 'Masculino'),
(58, 'Ing.', 'Irma Yareni Gómez Fuentes', 'Femenino'),
(59, 'Ing.', 'Adolfo Gamiño Guerrero', 'Masculino'),
(60, 'Ing.', 'Ana Columba Zurita Martínez Aguilar', 'Femenino'),
(61, 'Ing.', 'Angélica Benita Hernández Carranza', 'Femenino'),
(62, 'Ing.', 'Angélica María Ortiz Gaucin', 'Femenino'),
(63, 'Ing.', 'Antonio Águila Reyes', 'Masculino'),
(64, 'Ing.', 'Carlos Rafael Levy Rojas', 'Masculino'),
(65, 'Ing.', 'David Everardo Lugo Pedroza', 'Masculino'),
(66, 'Ing.', 'Edna Militza Martínez Prado', 'Femenino'),
(67, 'Ing.', 'Elizabeth Castellanos Nolasco', 'Femenino'),
(68, 'Ing.', 'Eugenio Conrado Marin González', 'Masculino'),
(69, 'Ing.', 'Flor Karina Juárez Cárdenas', 'Femenino'),
(70, 'Ing.', 'Guadalupe Efraín Bermúdez', 'Masculino'),
(71, 'Ing.', 'Irma De Jesús Ramírez Álvarez', 'Femenino'),
(72, 'Ing.', 'Jose Alejandro Rodriguez Renteria', 'Masculino'),
(73, 'Ing.', 'José Gerardo Carpio Flores', 'Masculino'),
(74, 'Ing.', 'Juan Carlos Aguilera Cruz', 'Masculino'),
(75, 'Ing.', 'Juan Pablo Murillo Ruiz', 'Masculino'),
(76, 'Ing.', 'Laura Juárez Guerra', 'Femenino'),
(77, 'Ing.', 'Laura Patricia Guevara Rangel', 'Femenino'),
(78, 'Ing.', 'Ma. Concepción Sandoval Solís', 'Femenino'),
(79, 'Ing.', 'Ma. Verónica Tapia Ibarra', 'Femenino'),
(80, 'Lic.', 'María De Jesús Belén Murillo Hernández', 'Femenino'),
(81, 'Ing.', 'María Minerva Saucedo Torres', 'Femenino'),
(82, 'Ing.', 'Miguel Ángel Vázquez Rivas', 'Masculino'),
(83, 'Ing.', 'Paola Virginia Galván Jaramillo', 'Femenino'),
(84, 'Ing.', 'Patricia María Castillo Martínez', 'Femenino'),
(85, 'Ing.', 'Rafael Rodríguez Gallegos', 'Masculino'),
(86, 'Ing.', 'Rogelio Infante Medina', 'Masculino'),
(87, 'Ing.', 'Roxana Noemi Moreno Real', 'Femenino'),
(88, 'Ing.', 'Ruth Sáez De Nanclares Rodríguez', 'Femenino'),
(89, 'Ing.', 'José Luis Suarez y Gomez', 'Masculino'),
(90, 'Ing.', 'Francisco Santos', 'Masculino'),
(91, 'Ing.', 'Luis Munive', 'Masculino'),
(92, 'Ing.', 'Deny Martínez Trejo', 'Sin especificar'),
(93, 'Ing.', 'Luis Eduardo Gutiérrez Ayala', 'Masculino'),
(94, 'Ing.', 'Miguel Salvador Gómez Díaz', 'Masculino'),
(95, 'Ing.', 'Abigail García Rangel', 'Femenino'),
(96, 'Lic.', 'Adriana Edurne Macias García', 'Femenino'),
(97, 'Lic.', 'Alma Violeta García Márquez', 'Femenino'),
(98, 'Lic.', 'Annel Ramos Gándara', 'Sin especificar'),
(99, 'Lic.', 'Celia Ibarra Díaz', 'Femenino'),
(100, 'Lic.', 'Eduardo Rodríguez Arguello', 'Masculino'),
(101, 'Lic.', 'Fabiola Hilda Esther Mares Rodríguez', 'Femenino'),
(102, 'Lic.', 'Gustavo Adolfo Rodríguez Muñoz', 'Masculino'),
(103, 'Lic.', 'Irma García Ahumada', 'Femenino'),
(104, 'Lic.', 'Ismael Bustos Razo', 'Masculino'),
(105, 'Ing.', 'Félix López Rocha', 'Masculino'),
(106, 'Ing.', 'Joel Rico Pérez', 'Masculino'),
(107, 'Lic.', 'Jorge Alfaro Gomez', 'Masculino'),
(108, 'Ing.', 'Jorge Max Novelo Acosta', 'Masculino'),
(109, 'Ing.', 'José Fernando Aguiñaga Rodríguez', 'Masculino'),
(110, 'Lic.', 'Julio Cesar González Sánchez', 'Masculino'),
(111, 'Lic.', 'Laura Estela López Vela', 'Femenino'),
(112, 'Lic.', 'Liliana Sánchez Vázquez', 'Femenino'),
(113, 'Ing.', 'Luis Alberto Montalvo Cabrera', 'Masculino'),
(114, 'Ing.', 'Luis Carlos Padierna García', 'Masculino'),
(115, 'Ing.', 'Luz María Trinidad Pérez Alvarado', 'Femenino'),
(116, 'Lic.', 'Ma. Isabel Cristina Cárdenas Salazar', 'Femenino'),
(117, 'Lic.', 'Ma. De Los Ángeles Gómez Castro', 'Femenino'),
(118, 'Mtra.', 'Margarita Sarabia Saldaña', 'Femenino'),
(119, 'Lic.', 'María De Lourdes Esther Rodríguez Bueno Cervantes', 'Femenino'),
(120, 'Arq.', 'María Del Carmen Virginia Cervantes Salgado', 'Femenino'),
(121, 'Lic.', 'María Elena Martínez Hernández', 'Femenino'),
(122, 'Ing.', 'María Lorena Cazares Coss Y León', 'Femenino'),
(123, 'Ing.', 'María Magdalena Valdivia Murillo', 'Femenino'),
(124, 'Ing.', 'María Noemí Albarrán Granados', 'Femenino'),
(125, 'Ing.', 'Mariana Rodríguez Ramírez', 'Femenino'),
(126, 'Ing.', 'Martha Alicia Rocha Sánchez', 'Femenino'),
(127, 'Mtra.', 'Martha Beatriz González Nava', 'Femenino'),
(128, 'Lic.', 'Miguel Ángel Ortiz Gaucin', 'Masculino'),
(129, 'Lic.', 'Nelly Guadalupe Ramírez Gómez', 'Femenino'),
(130, 'C.P.', 'Ofelia Alatorre Herrera', 'Femenino'),
(131, 'Ing.', 'Oscar Andrés Morales Reyes', 'Masculino'),
(132, 'Lic.', 'Petra Sandoval Flores', 'Femenino'),
(133, 'Lic.', 'René Álvarez Aguirre', 'Masculino'),
(134, 'Lic.', 'Rolando Becerra Ramírez', 'Masculino'),
(135, 'Lic.', 'Silvia Yasmin Macias Garcia', 'Femenino'),
(136, 'Lic.', 'Silvina Lucia López Villagómez', 'Femenino'),
(137, 'Ing.', 'Víctor Ulises Muñoz Brizuela', 'Masculino'),
(138, 'Lic.', 'Virginia Rodríguez Moreno', 'Femenino'),
(139, 'Ing.', 'Carla Patricia Ordaz Picón', 'Femenino'),
(140, 'Lic.', 'Patricia Quintero Marquez', 'Femenino'),
(141, 'Ing.', 'Miguel Ángel Vázquez Olguín', 'Masculino'),
(142, 'Mtro.', 'Edgar Quiroz Juarez', 'Masculino'),
(143, 'Ing.', 'Guillermo Eduardo Méndez Zamora', 'Masculino'),
(144, 'Ing.', 'Ivett Adriana Hidalgo Montenegro', 'Femenino'),
(145, 'Ing.', 'Eduardo Perez Pintor', 'Masculino'),
(146, 'C.P.', 'Pedro Galindo Peña', 'Masculino'),
(147, 'Lic.', 'Claudia Lizette Torres González', 'Femenino'),
(148, 'Lic.', 'Guadalupe Nila', 'Femenino'),
(149, 'Ing.', 'Roberto Barrón Rios', 'Masculino'),
(150, 'Lic.', 'Miguel Ángel Rodríguez Anguiano', 'Masculino'),
(151, 'Ing.', 'Ricardo Guzmán Torres', 'Masculino'),
(152, 'Ing.', 'Alejandro Torres Pérez', 'Masculino'),
(153, 'Ing.', 'Ana Cecilia Ruiz Segoviano', 'Femenino'),
(154, 'Ing.', 'Araceli Guerrero Cabrera', 'Femenino'),
(155, 'Ing.', 'Brenda Rosario Hernández Palafox', 'Femenino'),
(156, 'Ing.', 'Cirino Silva Tovar', 'Masculino'),
(157, 'Ing.', 'Francisco Meza Navarro', 'Masculino'),
(158, 'Ing.', 'Graciano Ramírez Bravo', 'Masculino'),
(159, 'Ing.', 'Héctor Federico Godínez Cabrera', 'Masculino'),
(160, 'Ing.', 'Iván Aguilar Carrillo', 'Masculino'),
(161, 'Ing.', 'Jesús Hernández Ibarra', 'Masculino'),
(162, 'Ing.', 'José De Jesús Cardona Delgado', 'Masculino'),
(163, 'Ing.', 'José Luis Torres Gutiérrez', 'Masculino'),
(164, 'Ing.', 'José Ramon Tapia Torres', 'Masculino'),
(165, 'Ing.', 'Juan Carlos Ayala Martínez', 'Masculino'),
(166, 'Ing.', 'Juan Ignacio Guízar Ruiz', 'Masculino'),
(167, 'Ing.', 'Juan José Ramírez Zermeño', 'Masculino'),
(168, 'Ing.', 'María Alicia Ríos Constantino', 'Femenino'),
(169, 'Ing.', 'Martha Patricia Hurtado Martínez', 'Femenino'),
(170, 'Ing.', 'Osccar Salvador Torres Muñoz', 'Masculino'),
(171, 'Lic.', 'Raquel Alatorre Herrera', 'Femenino'),
(172, 'Ing.', 'Rubén Águeda Altuzar', 'Masculino'),
(173, 'Ing.', 'Juan de Dios Paz Salinas', 'Masculino'),
(174, 'Lic.', 'Roxana Contreras', 'Femenino'),
(175, 'Ing.', 'Cruz Yuliana Calderón Hermosillo', 'Femenino'),
(176, 'Ing.', 'Francisco Alejandro Ramírez Diaz', 'Masculino'),
(177, 'Ing.', 'Juan Miguel Pérez Núñez', 'Masculino'),
(178, 'Ing.', 'Miguel Rosales Ciceña', 'Masculino'),
(179, 'C.P.', 'Jesús Ernesto De la Rosa García', 'Masculino'),
(180, 'Lic.', 'Jose Luis Perez Torres', 'Masculino'),
(181, 'Lic.', 'Claudia Díaz', 'Femenino'),
(182, 'Ing.', 'Leonel Villanueva Rios', 'Masculino'),
(183, 'Ing.', 'Rodolfo Rodríguez Padilla', 'Masculino'),
(184, 'Ing.', 'Jesús Israel Alba Reyes', 'Masculino'),
(185, 'Ing.', 'Francisco Alfredo Granados Ramírez', 'Masculino'),
(186, 'Ing.', 'José Fernando Hernández Rodríguez', 'Masculino'),
(187, 'Ing.', 'Myriam Aidee Huizar Kolldell', 'Femenino'),
(188, 'Ing.', 'Antonio Lona Gámez', 'Masculino'),
(189, 'Ing.', 'Denisse Medina López', 'Femenino'),
(190, 'Ing.', 'Saul Ruiz Berbena', 'Masculino'),
(191, 'Ing.', 'Manuel Sambrano Sánchez', 'Masculino'),
(192, 'Ing.', 'Hilda Sánchez Palomares', 'Femenino'),
(193, 'Ing.', 'Iván Vigueras Montaño', 'Masculino'),
(194, 'Ing.', 'José Luis Villanueva Rodríguez', 'Masculino'),
(195, 'Lic.', 'Analía Zamudio Carrera', 'Femenino'),
(196, 'Lic.', 'César Agustín Arroyo Rico', 'Masculino'),
(197, 'Lic.', 'José Antonio Donato Montiel', 'Masculino'),
(198, 'Lic.', 'Marío Hernández Rocha', 'Masculino'),
(199, 'Lic.', 'Martha Beatriz López Mena', 'Femenino'),
(200, 'Lic.', 'Cristina Araceli Gutierrez Vazque6', 'Femenino'),
(201, 'Lic.', 'Martin Martinez', 'Masculino'),
(202, 'Lic.', 'Silvia Guadalupe Ruiz Palacio', 'Femenino'),
(203, 'Ing.', 'Felipe De Jesús Bonilla Aguilar', 'Masculino'),
(204, 'Ing.', 'Oscar Armando Calcanas Lerma', 'Masculino'),
(205, 'Ing.', 'Ángel Ignacio Estrada Lujano', 'Masculino'),
(206, 'Ing.', 'Eduardo Estrada Palomino', 'Masculino'),
(207, 'Ing.', 'Gustavo Adolfo Garnica Arista', 'Masculino'),
(208, 'Ing.', 'Fernando Gómez Guerra', 'Masculino'),
(209, 'Ing.', 'Juan López Flores', 'Masculino'),
(210, 'Ing.', 'Juan Martínez Ávila', 'Masculino'),
(211, 'Ing.', 'Juan Manuel Meza Muñoz', 'Masculino'),
(212, 'Ing.', 'Adolfo Montesinos', 'Masculino'),
(213, 'Ing.', 'Juan Antonio Pérez López', 'Masculino'),
(214, 'Ing.', 'Cesar MauricioReyes Mendoza', 'Masculino'),
(215, 'Ing.', 'Bulmaro Aranda Cervantes', 'Masculino'),
(216, 'Dr.', 'Miguel Ángel Casillas Araiza', 'Masculino'),
(217, 'Dr.', 'Josué Del Valle Hernández', 'Masculino'),
(218, 'Ing.', 'Luis Miguel González Ortiz', 'Masculino'),
(219, 'Ing.', 'Gerardo De Jesús Loza Angulo', 'Masculino'),
(220, 'Ing.', 'Fernando Martínez Arias', 'Masculino'),
(221, 'Ing.', 'Antonio Martínez Báez', 'Masculino'),
(222, 'Dr.', 'Rogelio Navarro Rizo', 'Masculino'),
(223, 'Ing.', 'Adrián Pérez Benavidez', 'Masculino'),
(224, 'Ing.', 'Julián Rentería Hernández', 'Masculino'),
(225, 'Ing.', 'Luis Omar Rojas Juárez', 'Masculino'),
(226, 'Ing.', 'Rubén Eugenio Valdivia Hernández', 'Masculino'),
(227, 'Ing.', 'Juan Mauricio Valtierra Domínguez', 'Masculino'),
(228, 'Ing.', 'Ricardo Vázquez González', 'Masculino'),
(229, 'Ing.', 'José Luis Villaseñor Ortega', 'Masculino'),
(230, 'Dr.', 'Antonio Zamarrón Ramírez', 'Masculino'),
(231, 'Ing.', 'Gerardo Gutiérrez Torres', 'Masculino'),
(232, 'Ing.', 'Francisco Chávez Gutiérrez', 'Masculino'),
(233, 'Ing.', 'Sorangel Fischer Hernández', 'Sin especificar'),
(234, 'Ing.', 'Enrique Hernández Parra', 'Masculino'),
(235, 'Ing.', 'Sandra Jaqueline López Cervera', 'Femenino'),
(236, 'Ing.', 'Alan López Martínez', 'Masculino'),
(237, 'Ing.', 'Francisco Carlos Mejía Alanís', 'Masculino'),
(238, 'Ing.', 'Dante José Migoni León', 'Masculino'),
(239, 'Ing.', 'Jorge Daniel Moreno Gómez', 'Masculino'),
(240, 'Ing.', 'Terán Gustavo Moreno González', 'Masculino'),
(241, 'Ing.', 'Hul Padilla Gómez', 'Sin especificar'),
(242, 'Dr.', 'Leonardo Pérez Mayen', 'Masculino'),
(243, 'Ing.', 'Marco Antonio Pérez Tovar', 'Masculino'),
(244, 'Ing.', 'Hugo Marcel Saavedra Hernández', 'Masculino'),
(245, 'Ing.', 'Omar Sistos Iñiguez', 'Masculino'),
(246, 'Ing.', 'Carlos Zamarripa Ramírez', 'Masculino'),
(247, 'Ing.', 'Gerardo David Aguayo Rios', 'Masculino'),
(248, 'Ing.', 'Luis Gabino Landeros Aranda', 'Masculino'),
(249, 'Ing.', 'José Elías Martínez Arias', 'Masculino'),
(250, 'Ing.', 'Jorge Mendoza Zapata', 'Masculino'),
(251, 'Ing.', 'Laura Teresa Morfín Lomelí', 'Femenino'),
(252, 'Ing.', 'José de Jesús Sandoval Palomares', 'Masculino'),
(253, 'Ing.', 'Carlos Alberto Trujillo Castellanos', 'Masculino'),
(254, 'Dr.', 'David Asael Gutierrez Hernández', 'Masculino'),
(255, 'Ing.', 'Leonardo Meza Muñoz', 'Masculino'),
(256, 'Dr.', 'Alfonso Rojas Dominguez', 'Masculino'),
(257, 'Dr.', 'Raul Santiago', 'Masculino'),
(258, 'Dr.', 'Héctor José Puga Soberanes', 'Masculino'),
(259, 'Dr.', 'Ignacio Hernández Bautista', 'Masculino'),
(260, 'Dra.', 'María del Rosario Baltazar Flores', 'Femenino'),
(261, 'Dr.', 'Juan Francisco Mosiño', 'Masculino'),
(262, 'Dr.', 'Manuel Ornelas Rodríguez', 'Masculino'),
(263, 'Lic.', 'José Luis Urbina Hurtado', 'Masculino'),
(264, 'Lic.', 'Angélica Josefina Pérez Flores', 'Femenino'),
(265, 'Ing.', 'Ma. Concepción Sánchez Cano', 'Femenino'),
(266, 'Lic.', 'Héctor Guadalupe Nava Martínez', 'Masculino'),
(267, 'Lic.', 'Francisco Javier Valdez Mena', 'Masculino'),
(268, 'Ing.', 'Rafael Aguilar Rojo', 'Masculino'),
(269, 'Ing.', 'Omar Antonio Espinoza Carranza', 'Masculino'),
(270, 'Ing.', 'José Daniel García Guzmán', 'Masculino'),
(271, 'Ing.', 'Alma Dionicia Guerrero Cano', 'Femenino'),
(272, 'Ing.', 'Cristian Jhovany Olivares Basulto', 'Masculino'),
(273, 'Ing.', 'Esteban Misael Orozco Alonso', 'Masculino'),
(274, 'Ing.', 'Edgar Picón Rangel', 'Masculino'),
(275, 'Ing.', 'Jorge Arturo Rocha Quezada', 'Masculino'),
(276, 'Ing.', 'Etna Dafne Yañez Roldan', 'Femenino'),
(277, 'Ing.', 'Rosalia María Rosalía OLiva Ramos', 'Femenino'),
(278, 'Ing.', 'Maricela Guzmán Rocha', 'Femenino'),
(279, 'Mtro.', 'Noé Guadalupe Aldana Murillo', 'Masculino'),
(280, 'Ing.', 'Adan Israel Godinez Mena', 'Masculino'),
(281, 'Mtro.', 'Javier Iván Manzanares Cuadros', 'Masculino'),
(282, 'Ing.', 'Miguel Ángel Peña López', 'Masculino'),
(283, 'Ing.', 'María de los Ángeles Arellano Vera', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_carrera`
--

CREATE TABLE `profesor_carrera` (
  `Profesor` int(11) NOT NULL,
  `Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `No_control` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` enum('Masculino','Femenino','Sin especificar') COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Carrera` int(11) NOT NULL,
  `Anio_ingreso` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_password`
--

CREATE TABLE `usuario_password` (
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_presentacion`
--

CREATE TABLE `usuario_presentacion` (
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen_ruta` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_verificar`
--

CREATE TABLE `usuario_verificar` (
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(7) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`Id_calificacion`),
  ADD KEY `Materia` (`Materia`),
  ADD KEY `Profesor` (`Profesor`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Id_carrera`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`Id_materia`),
  ADD KEY `Carrera` (`Carrera`);
ALTER TABLE `materia` ADD FULLTEXT KEY `Nombre_materia` (`Nombre_materia`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Id_post`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `post_comentario`
--
ALTER TABLE `post_comentario`
  ADD KEY `Post` (`Post`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `post_manzana`
--
ALTER TABLE `post_manzana`
  ADD KEY `Post` (`Post`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `post_notificacion`
--
ALTER TABLE `post_notificacion`
  ADD KEY `Post` (`Post`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Id_profesor`);
ALTER TABLE `profesor` ADD FULLTEXT KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `profesor_carrera`
--
ALTER TABLE `profesor_carrera`
  ADD KEY `Profesor` (`Profesor`),
  ADD KEY `Carrera` (`Carrera`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`No_control`),
  ADD KEY `Carrera` (`Carrera`);
ALTER TABLE `usuario` ADD FULLTEXT KEY `Nombre` (`Nombre`,`Apellido`);

--
-- Indices de la tabla `usuario_password`
--
ALTER TABLE `usuario_password`
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `usuario_presentacion`
--
ALTER TABLE `usuario_presentacion`
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `usuario_verificar`
--
ALTER TABLE `usuario_verificar`
  ADD KEY `Usuario` (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `Id_calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `Id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `Id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `Id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `Id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_materia` FOREIGN KEY (`Materia`) REFERENCES `materia` (`Id_materia`),
  ADD CONSTRAINT `calificacion_profesor` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Id_profesor`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia` FOREIGN KEY (`Carrera`) REFERENCES `carrera` (`Id_carrera`);

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `post_comentario`
--
ALTER TABLE `post_comentario`
  ADD CONSTRAINT `comentario_post` FOREIGN KEY (`Post`) REFERENCES `post` (`Id_post`),
  ADD CONSTRAINT `comentario_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `post_manzana`
--
ALTER TABLE `post_manzana`
  ADD CONSTRAINT `manzana_post` FOREIGN KEY (`Post`) REFERENCES `post` (`Id_post`),
  ADD CONSTRAINT `manzana_post_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `post_notificacion`
--
ALTER TABLE `post_notificacion`
  ADD CONSTRAINT `notificacion_post` FOREIGN KEY (`Post`) REFERENCES `post` (`Id_post`),
  ADD CONSTRAINT `notificacion_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `profesor_carrera`
--
ALTER TABLE `profesor_carrera`
  ADD CONSTRAINT `profesor_carrera` FOREIGN KEY (`Carrera`) REFERENCES `carrera` (`Id_carrera`),
  ADD CONSTRAINT `profesor_prof` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Id_profesor`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_carrera` FOREIGN KEY (`Carrera`) REFERENCES `carrera` (`Id_carrera`);

--
-- Filtros para la tabla `usuario_password`
--
ALTER TABLE `usuario_password`
  ADD CONSTRAINT `password_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `usuario_presentacion`
--
ALTER TABLE `usuario_presentacion`
  ADD CONSTRAINT `presentacion_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `usuario_verificar`
--
ALTER TABLE `usuario_verificar`
  ADD CONSTRAINT `usuario_verificar_ibfk_1` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
