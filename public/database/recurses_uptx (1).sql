-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2022 a las 12:25:41
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recurses_uptx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `contrasenia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre`, `ap_paterno`, `ap_materno`, `telefono`, `email`, `cargo`, `contrasenia`) VALUES
(1, 'Darien', 'Perez', 'Cano', '2461234567', 'darien@gmail.com', 'Director Academico', 'darien'),
(2, 'Kevin', 'Zecua', 'Perez', '2461111111', 'kevin@gmail.com', 'Tutor', 'kevin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(5) NOT NULL,
  `matricula` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `cuatrimestre_original` varchar(10) DEFAULT NULL,
  `grupo_original` varchar(2) DEFAULT NULL,
  `cuatrimestre_recursamiento` varchar(10) DEFAULT NULL,
  `grupo_recursamiento` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `matricula`, `nombre`, `ap_paterno`, `ap_materno`, `contrasenia`, `email`, `telefono`, `sexo`, `cuatrimestre_original`, `grupo_original`, `cuatrimestre_recursamiento`, `grupo_recursamiento`) VALUES
(1, 1931116192, 'Felipe', 'Calva', 'Lima', 'felipe', 'felipe@gmail.com', '2462183082', 'M', '9', 'A', NULL, NULL),
(2, 1931116210, 'Angel Daniel', 'Vazquez', 'Tapia', 'daniel', 'daniel@gmail.com', '2466666666', 'M', '9', 'B', NULL, NULL),
(3, 1931111111, 'Alumno', 'X', 'Y', 'abc', 'prueba@gmail.com', '2461412321', 'M', '8', 'A', NULL, NULL),
(4, 0, 'a', 'a', 'a', 'a', 'a@gmail.com', '1', 'F', '1', '1', NULL, NULL),
(5, 0, 'Alumno 2', 'a', 'a', 'a', 'a@gmail.com', '1', 'M', '2', 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

CREATE TABLE `directores` (
  `id_director` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `siglas` varchar(25) NOT NULL,
  `creditos` int(10) NOT NULL,
  `cuatrimestre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `siglas`, `creditos`, `cuatrimestre`) VALUES
(2, 'a', 'a', 2, 'a'),
(3, 'A', 'B', 2, 'D'),
(4, 'CA', 'DA', 1, 'B'),
(5, 'a', 'a', 2, 'a'),
(6, 'a', 'a', 5, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_periodos`
--

CREATE TABLE `materias_periodos` (
  `id_materia_periodo` int(5) NOT NULL,
  `id_materia` int(5) NOT NULL,
  `id_periodo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos_cuatrimestrales`
--

CREATE TABLE `periodos_cuatrimestrales` (
  `id_periodo` int(5) NOT NULL,
  `nombre_periodo` varchar(100) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodos_cuatrimestrales`
--

INSERT INTO `periodos_cuatrimestrales` (`id_periodo`, `nombre_periodo`, `anio`) VALUES
(2, 'may-jul2', 2023),
(4, 'a', 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_solicitudes`
--

CREATE TABLE `procesos_solicitudes` (
  `id_proceso` int(5) NOT NULL,
  `matricula` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_solicitud` int(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  `tipo_curso` varchar(20) NOT NULL,
  `programa_educativo` varchar(100) NOT NULL,
  `id_periodo` int(5) NOT NULL,
  `cuatrimestre` varchar(10) DEFAULT NULL,
  `grupo` int(2) DEFAULT NULL,
  `turno` int(25) NOT NULL,
  `id_tutor` int(5) NOT NULL,
  `id_director` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id_tutor` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`id_director`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `materias_periodos`
--
ALTER TABLE `materias_periodos`
  ADD PRIMARY KEY (`id_materia_periodo`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_periodo` (`id_periodo`);

--
-- Indices de la tabla `periodos_cuatrimestrales`
--
ALTER TABLE `periodos_cuatrimestrales`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `procesos_solicitudes`
--
ALTER TABLE `procesos_solicitudes`
  ADD PRIMARY KEY (`id_proceso`),
  ADD KEY `id_director` (`id_director`),
  ADD KEY `id_periodo` (`id_periodo`),
  ADD KEY `id_tutor` (`id_tutor`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id_tutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `id_director` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `materias_periodos`
--
ALTER TABLE `materias_periodos`
  MODIFY `id_materia_periodo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodos_cuatrimestrales`
--
ALTER TABLE `periodos_cuatrimestrales`
  MODIFY `id_periodo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `procesos_solicitudes`
--
ALTER TABLE `procesos_solicitudes`
  MODIFY `id_proceso` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id_tutor` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias_periodos`
--
ALTER TABLE `materias_periodos`
  ADD CONSTRAINT `materias_periodos_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materias_periodos_ibfk_2` FOREIGN KEY (`id_periodo`) REFERENCES `periodos_cuatrimestrales` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `procesos_solicitudes`
--
ALTER TABLE `procesos_solicitudes`
  ADD CONSTRAINT `procesos_solicitudes_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `directores` (`id_director`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procesos_solicitudes_ibfk_2` FOREIGN KEY (`id_periodo`) REFERENCES `periodos_cuatrimestrales` (`id_periodo`),
  ADD CONSTRAINT `procesos_solicitudes_ibfk_3` FOREIGN KEY (`id_tutor`) REFERENCES `tutores` (`id_tutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
