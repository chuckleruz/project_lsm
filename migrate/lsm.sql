-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: lsm
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administradores` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `fecha_de_registro` date DEFAULT NULL,
  `nivel` int DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (1,'Juan','Pérez','juanperez@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-01',1),(2,'Ana','García','anagarcia@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-02',1),(3,'Luis','Hernández','luishernandez@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-03',1),(4,'María','Rodríguez','mariarodriguez@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-04',1),(5,'Jorge','Sánchez','jorgesanchez@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-05',1),(6,'Carla','López','carlalopez@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-06',1),(7,'Fernando','Martínez','fernandomartinez@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-07',1),(8,'Adriana','Gómez','adrianagomez@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-08',1),(9,'Pablo','Castillo','pablocastillo@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-09',1),(10,'Sofía','Vargas','sofiavargas@mail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2022-01-10',1);
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `id_curso` int NOT NULL,
  `nombre_del_curso` varchar(255) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `docente_a_cargo` int DEFAULT NULL,
  `fecha_de_inicio` date DEFAULT NULL,
  `fecha_de_finalizacion` date DEFAULT NULL,
  `estado_del_curso` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `docente_a_cargo` (`docente_a_cargo`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`docente_a_cargo`) REFERENCES `docentes` (`id_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Curso 1','Español',1,'2023-06-01','2023-06-30','Activo'),(2,'Curso 2','Matemáticas',2,'2023-07-01','2023-07-31','Inactivo'),(3,'Curso 3','Inglés',3,'2023-08-01','2023-08-31','Activo'),(4,'Curso 4','Probabilidad',4,'2023-09-01','2023-09-30','Inactivo'),(5,'Curso 5','Animación por Computadora',5,'2023-10-01','2023-10-31','Activo'),(6,'Curso 6','Sistemas Operativos II',6,'2023-11-01','2023-11-30','Inactivo'),(7,'Curso 7','Alicaciones Web',7,'2023-12-01','2023-12-31','Activo'),(8,'Curso 8','Redes',8,'2024-01-01','2024-01-31','Inactivo'),(9,'Curso 9','Analisis y Algoritmos',9,'2024-02-01','2024-02-29','Activo'),(10,'Curso 10','Desarrollo móvil',10,'2024-03-01','2024-03-31','Inactivo');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docentes` (
  `id_docente` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `fecha_de_registro` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `nivel` int NOT NULL,
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
INSERT INTO `docentes` VALUES (1,'Juan','Pérez','jperez@gmail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-01-01 00:00:00','activo',2),(2,'María','González','mgonzalez@yahoo.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-02-15 00:00:00','activo',2),(3,'Pedro','López','plopez@hotmail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-03-21 00:00:00','inactivo',2),(4,'Ana','Ramírez','aramirez@gmail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-04-05 00:00:00','activo',2),(5,'Luis','Martínez','lmartinez@yahoo.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-05-12 00:00:00','inactivo',2),(6,'Sara','Gómez','sgomez@hotmail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-06-27 00:00:00','activo',2),(7,'Diego','Hernández','dhernandez@gmail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-07-04 00:00:00','inactivo',2),(8,'Laura','Díaz','ldiaz@yahoo.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-08-19 00:00:00','activo',2),(9,'Javier','García','jgarcia@hotmail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-09-25 00:00:00','activo',2),(10,'Carla','Paz','cpaz@gmail.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2021-10-10 00:00:00','inactivo',2);
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiantes` (
  `id_estudiante` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_de_registro` datetime NOT NULL,
  `estado` int NOT NULL,
  `nivel` int NOT NULL,
  PRIMARY KEY (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,'Diego','Hernández','diego.hernandez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 23:00:00',1,3),(2,'Laura','Sánchez','laura.sanchez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 22:00:00',0,3),(3,'Javier','Fernández','javier.fernandez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 21:00:00',1,3),(4,'Lucía','Gutiérrez','lucia.gutierrez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 20:00:00',1,3),(5,'Mario','Pérez','mario.perez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 19:00:00',0,3),(6,'Carla','Rodríguez','carla.rodriguez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 18:00:00',1,3),(7,'Juan','López','juan.lopez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 17:00:00',1,3),(8,'María','Gómez','maria.gomez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 16:00:00',0,3),(9,'Pedro','Martínez','pedro.martinez@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 15:00:00',1,3),(10,'Ana','García','ana.garcia@example.com','$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2','2023-04-27 14:30:00',1,3);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permisos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idNivel` int NOT NULL,
  `vista` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` VALUES (1,1,'docentes'),(2,1,'alumnos'),(3,1,'cursos'),(4,1,'sesiones'),(5,1,'ajustes'),(6,1,'dashboard');
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-10  8:49:42
