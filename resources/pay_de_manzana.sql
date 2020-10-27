-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2020 a las 16:53:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pay_de_manzana`
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
  `Personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Id_profesor` int(11) NOT NULL,
  `Título` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` enum('Masculino','Femenino','Sin especificar') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  MODIFY `Id_calificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `Id_carrera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `Id_materia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `Id_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `Id_profesor` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `comentario_post` FOREIGN KEY (`Post`) REFERENCES `post` (`Id_Post`),
  ADD CONSTRAINT `comentario_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `post_manzana`
--
ALTER TABLE `post_manzana`
  ADD CONSTRAINT `manzana_post` FOREIGN KEY (`Post`) REFERENCES `post` (`Id_Post`),
  ADD CONSTRAINT `manzana_post_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);

--
-- Filtros para la tabla `post_notificacion`
--
ALTER TABLE `post_notificacion`
  ADD CONSTRAINT `notificacion_post` FOREIGN KEY (`Post`) REFERENCES `post` (`Id_Post`),
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
