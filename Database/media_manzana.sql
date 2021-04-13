-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2021 a las 23:56:21
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
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `mm_basicos`(
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Signo_zodiacal` enum('Aries','Tauro', 'Géminis','Cáncer', 'Leo','Virgo',
                    'Libra','Escorpio', 'Sagitario','Capricornio', 'Acuario','Piscis') COLLATE utf8_spanish_ci NOT NULL,
  `Redes` text COLLATE utf8_spanish_ci NOT NULL,
  `Preferencias` enum('Hombres','Mujeres', 'Ambos') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
--
-- Indices de la tabla `post`
--
ALTER TABLE `mm_basicos`
  ADD KEY `Usuario` (`Usuario`);

--
ALTER TABLE `mm_basicos`
  ADD CONSTRAINT `mm_basicos_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);
COMMIT;


CREATE TABLE `mm_test1`(
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
--
-- Indices de la tabla `post`
--
ALTER TABLE `mm_test1`
  ADD KEY `Usuario` (`Usuario`);

--
ALTER TABLE `mm_test1`
  ADD CONSTRAINT `mm_test1_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);
COMMIT;

CREATE TABLE `mm_test2`(
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
--
-- Indices de la tabla `post`
--
ALTER TABLE `mm_test2`
  ADD KEY `Usuario` (`Usuario`);

--
ALTER TABLE `mm_test2`
  ADD CONSTRAINT `mm_test2_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);
COMMIT;

CREATE TABLE `mm_test3`(
  `Usuario` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
--
-- Indices de la tabla `post`
--
ALTER TABLE `mm_test3`
  ADD KEY `Usuario` (`Usuario`);

--
ALTER TABLE `mm_test3`
  ADD CONSTRAINT `mm_test3_usuario` FOREIGN KEY (`Usuario`) REFERENCES `usuario` (`No_control`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
