-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2022 at 07:50 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recursos_uptx1`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `id_administrador` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `contrasenia` varchar(25) NOT NULL,
  `id_rol` int NOT NULL,
  PRIMARY KEY (`id_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre`, `ap_paterno`, `ap_materno`, `telefono`, `email`, `cargo`, `contrasenia`, `id_rol`) VALUES
(1, 'Darien', 'Pérez', 'Cano', '2461234567', 'darien@gmail.com', 'Director Académico', 'darien', 1),
(2, 'Kevin', 'Zecua', 'Pérez', '2461111111', 'kevin@gmail.com', 'Tutor', 'kevin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int NOT NULL AUTO_INCREMENT,
  `matricula` int NOT NULL,
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
  `grupo_recursamiento` varchar(2) DEFAULT NULL,
  `id_rol` int NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `matricula`, `nombre`, `ap_paterno`, `ap_materno`, `contrasenia`, `email`, `telefono`, `sexo`, `cuatrimestre_original`, `grupo_original`, `cuatrimestre_recursamiento`, `grupo_recursamiento`, `id_rol`) VALUES
(1, 1931116192, 'Felipe', 'Calva', 'Lima', 'felipe', 'felipe@gmail.com', '2462183082', 'M', '9', 'A', NULL, NULL, 2),
(2, 1931116210, 'Angel Daniel', 'Vazquez', 'Tapia', 'daniel', 'daniel@gmail.com', '2466666666', 'M', '9', 'B', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `directores`
--

DROP TABLE IF EXISTS `directores`;
CREATE TABLE IF NOT EXISTS `directores` (
  `id_director` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  PRIMARY KEY (`id_director`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `directores`
--

INSERT INTO `directores` (`id_director`, `nombre`, `ap_paterno`, `ap_materno`) VALUES
(3, 'Sergio', 'Ramos', 'García'),
(4, 'Juan Pablo', 'Montoya', 'Roldán');

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `siglas` varchar(25) NOT NULL,
  `creditos` int NOT NULL,
  `cuatrimestre` varchar(10) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `siglas`, `creditos`, `cuatrimestre`) VALUES
(7, 'Tecnologias y Aplicaciones de Internet', 'TYADI', 3, '8'),
(8, 'Expresion Oral y Escrita I', 'EYOEI', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `materias_periodos`
--

DROP TABLE IF EXISTS `materias_periodos`;
CREATE TABLE IF NOT EXISTS `materias_periodos` (
  `id_materia_periodo` int NOT NULL AUTO_INCREMENT,
  `id_materia` int NOT NULL,
  `id_periodo` int NOT NULL,
  PRIMARY KEY (`id_materia_periodo`),
  KEY `id_materia` (`id_materia`),
  KEY `id_periodo` (`id_periodo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materias_periodos`
--

INSERT INTO `materias_periodos` (`id_materia_periodo`, `id_materia`, `id_periodo`) VALUES
(4, 7, 5),
(8, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `periodos_cuatrimestrales`
--

DROP TABLE IF EXISTS `periodos_cuatrimestrales`;
CREATE TABLE IF NOT EXISTS `periodos_cuatrimestrales` (
  `id_periodo` int NOT NULL AUTO_INCREMENT,
  `nombre_periodo` varchar(100) NOT NULL,
  `anio` int NOT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `periodos_cuatrimestrales`
--

INSERT INTO `periodos_cuatrimestrales` (`id_periodo`, `nombre_periodo`, `anio`) VALUES
(5, 'Mayo-Agosto', 2023),
(8, 'Septiembre-Diciembre', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `procesos_solicitudes`
--

DROP TABLE IF EXISTS `procesos_solicitudes`;
CREATE TABLE IF NOT EXISTS `procesos_solicitudes` (
  `id_proceso` int NOT NULL AUTO_INCREMENT,
  `matricula` int NOT NULL,
  `fecha` date NOT NULL,
  `tipo_solicitud` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  `tipo_curso` varchar(20) NOT NULL,
  `programa_educativo` varchar(100) NOT NULL,
  `id_periodo` int NOT NULL,
  `cuatrimestre` varchar(10) DEFAULT NULL,
  `grupo` int DEFAULT NULL,
  `turno` int NOT NULL,
  `id_tutor` int NOT NULL,
  `id_director` int NOT NULL,
  PRIMARY KEY (`id_proceso`),
  KEY `id_director` (`id_director`),
  KEY `procesos_solicitudes_ibfk_2` (`id_periodo`),
  KEY `procesos_solicitudes_ibfk_3` (`id_tutor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `procesos_solicitudes`
--

INSERT INTO `procesos_solicitudes` (`id_proceso`, `matricula`, `fecha`, `tipo_solicitud`, `nombre`, `ap_paterno`, `ap_materno`, `tipo_curso`, `programa_educativo`, `id_periodo`, `cuatrimestre`, `grupo`, `turno`, `id_tutor`, `id_director`) VALUES
(7, 1931116210, '2022-05-25', 0, 'Angel Daniel', 'Vazquez', 'Tapia', 'curso_normal', 'Ing_TI', 5, '1', 0, 0, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tutores`
--

DROP TABLE IF EXISTS `tutores`;
CREATE TABLE IF NOT EXISTS `tutores` (
  `id_tutor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tutor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tutores`
--

INSERT INTO `tutores` (`id_tutor`, `nombre`, `ap_paterno`, `ap_materno`) VALUES
(4, 'Francisco Guillermo', 'Ochoa', 'Magaña'),
(5, 'Sergio Michel', 'Pérez', 'Mendoza ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materias_periodos`
--
ALTER TABLE `materias_periodos`
  ADD CONSTRAINT `materias_periodos_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materias_periodos_ibfk_2` FOREIGN KEY (`id_periodo`) REFERENCES `periodos_cuatrimestrales` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `procesos_solicitudes`
--
ALTER TABLE `procesos_solicitudes`
  ADD CONSTRAINT `procesos_solicitudes_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `directores` (`id_director`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procesos_solicitudes_ibfk_2` FOREIGN KEY (`id_periodo`) REFERENCES `periodos_cuatrimestrales` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procesos_solicitudes_ibfk_3` FOREIGN KEY (`id_tutor`) REFERENCES `tutores` (`id_tutor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
