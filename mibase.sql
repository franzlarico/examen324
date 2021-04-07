-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-04-2021 a las 02:55:32
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `cod` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`cod`, `ciudad`) VALUES
('01', 'La Paz'),
('02', 'Cochabamba'),
('03', 'Beni'),
('04', 'Chuquisaca'),
('05', 'Oruro'),
('06', 'Pando'),
('07', 'Potosi'),
('08', 'Santa Cruz'),
('09', 'Tarija');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `carnet` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contras` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`carnet`, `usuario`, `contras`) VALUES
(8574965, 'jsilva', '456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `carnet` int(11) DEFAULT NULL,
  `sigla` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL,
  `nota3` int(11) DEFAULT NULL,
  `notaf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`carnet`, `sigla`, `nota1`, `nota2`, `nota3`, `notaf`) VALUES
(8332998, 'INF 121', 68, 75, 80, 74),
(8332998, 'INF 111', 85, 86, 90, 87),
(8332998, 'INF 131', 55, 70, 95, 73),
(8745962, 'INF 121', 70, 65, 60, 65),
(8745962, 'INF 111', 85, 45, 90, 73),
(8547963, 'INF 111', 85, 60, 55, 65),
(8332158, 'INF 111', 70, 95, 93, 86),
(1245879, 'INF 142', 85, 45, 75, 68),
(1245879, 'INF 111', 80, 80, 80, 80),
(9658742, 'INF 131', 96, 75, 83, 85),
(9658742, 'INF 142', 93, 55, 80, 76);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `carnet` int(11) NOT NULL,
  `nomcompleto` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechaNac` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `depto` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`carnet`, `nomcompleto`, `fechaNac`, `depto`) VALUES
(1245879, 'Pablo Neruda', '25/08/93', '05'),
(8332158, 'Yajaira Suxo Jaldin', '20/06/90', '01'),
(8332998, 'Franz Larico Luque', '21/10/95', '01'),
(8547963, 'Daniel Guadalajara', '25/09/90', '09'),
(8745962, 'Mikaela Jaldin', '10/09/99', '02'),
(8759632, 'Guillermo Mamani', '06/05/96', '02'),
(9658742, 'Wilson Condori', '03/09/92', '03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `carnet` int(11) DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contra` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`carnet`, `usuario`, `contra`, `color`) VALUES
(8332998, 'fflarico', '123456', '#00FF00'),
(8547963, 'dangal', '256314', '#45C8F5'),
(8745962, 'mikajal', '524871', '#F36D1B'),
(8332158, 'yajito', '654321', '#0000FF'),
(1245879, 'pabloN', '854756', '#60D808'),
(9658742, 'wilcon', '856974', '#60D808'),
(8759632, 'guillemon', '874569', '#E929B8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`carnet`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD KEY `carnet` (`carnet`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`carnet`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`contra`),
  ADD KEY `carnet` (`carnet`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`carnet`) REFERENCES `usuario` (`carnet`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`carnet`) REFERENCES `persona` (`carnet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
