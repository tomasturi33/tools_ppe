-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2021 a las 21:59:36
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `primer_empleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) NOT NULL,
  `id_ua` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`, `id_ua`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Tecnicatura Universitaria en Tecnología de Alimentos', 1, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(2, 'Ciclo de Licenciatura en Ciencia y Tecnología de los Alimentos', 1, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(3, 'Análisis Universitario de Alimentos', 2, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(4, 'Tecnicatura Universitaria en Gastronomía', 2, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(5, 'Licenciatura en Ciencia y Tecnología de los Alimentos', 2, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(6, 'Licenciatura en Enfermería', 2, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(7, 'Tecnicatura Universitaria en Biocombustibles', 2, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(8, 'Tecnicatura Universitaria en Elaboración y Producción de Alimentos', 2, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(9, 'Licenciatura en Obstetricia, que se dicta en la Sede Rafaela y en CET Atilra', 3, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(10, 'Técnico Universitario en Automatización y Robótica', 3, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(11, 'Técnico en Composición de Parques y Jardines', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(12, 'Técnico en Diseño de Mobiliario', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(13, 'Técnico en Interiorismo y Decoración', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(14, 'Arquitectura y Urbanismo', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(15, 'Ciclo de Licenciatura en Artes Visuales', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(16, 'Licenciatura en Diseño de la Comunicación Visual', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(17, 'Licenciatura en Diseño Industrial', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(18, 'Arquitectura y Urbanismo', 4, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(19, 'Bioquímica', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(20, 'Licenciatura en Biotecnología', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(21, 'Licenciatura en Nutrición', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(22, 'Licenciatura en Saneamiento Ambiental', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(23, 'Licenciatura en Higiene y Seguridad en el Trabajo', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(24, 'Licenciatura en Administración de la Salud', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(25, 'Licenciatura en Terapia Ocupacional', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(26, 'Licenciatura en Ciencias y Tecnología de los Alimentos', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(27, 'Tecnicatura en Administración de Salud', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(28, 'Tecnicatura en Higiene y Seguridad en el Trabajo', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(29, 'Tecnicatura Universitaria en Salud Ambiental', 5, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(30, 'Tecnicatura en Administración de Empresas Agropecuaria', 6, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(31, 'Tecnicatura en Gestión y Producción Apícola', 6, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(32, 'Tecnicatura en Producción Primaria de Lech', 6, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(33, 'Tecnicatura en Poscosecha de Granos y Semillas.', 6, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(34, 'Ingeniería Agronómica', 6, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(35, 'Contador Público Nacional', 7, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(36, 'Licenciatura en Administración', 7, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(37, 'Licenciatura en Economía', 7, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(38, 'Tecnicatura en Administración y Gestión Pública', 7, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(39, 'Tecnicatura Universitaria en Control y Auditoría Gubernamental', 7, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(40, 'Bibliotecología', 8, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(41, 'Criminología y Seguridad Ciudadana', 8, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(42, 'Martillero Público y Corredor de Comercio', 8, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(43, 'Abogacía', 8, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(44, 'Licenciatura en Trabajo Social', 8, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(45, 'Ciclo de Licenciatura en Producción de BioImágenes', 9, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(46, 'Licenciatura en Obstetricia', 9, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(47, 'Medicina', 9, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(48, 'Técnicatura Universitaria en Cosmiatría y Cosmetología', 9, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(49, 'Tecnicatura Universitaria en Emergencia Prehospitalaria, Rescate y Trauma', 9, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(50, 'Tecnicatura en Higiene y Seguridad Alimentaria', 10, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(51, 'Tecnicatura en Alimentación de Ganado Vacuno', 10, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(52, 'Tecnicatura en Producción Primaria de Leche', 10, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(53, 'Medicina Veterinaria', 10, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(54, 'Letras', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(55, 'Licenciatura en Biodiversidad', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(56, 'Profesorado en Biologia', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(57, 'Profesorado de Geografía', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(58, 'Licenciatura en Geografía', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(59, 'Licenciatura en Historia', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(60, 'Profesorado en Matematicas', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(61, 'Licenciatura en Sociología', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(62, 'Licenciatura en Ciencia Politica', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(63, 'Profesorado en Química', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(64, 'Licenciatura en Trabajo Social', 11, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(65, 'Analista Industrial', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(66, 'Químico Analistal', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(67, 'Ingeniería Química', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(68, 'Ingeniería Industrial', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(69, 'Licenciatura en Química', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(70, 'Licenciatura en Matemática Aplicada', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(71, 'Ingeniería Ambienta', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(72, 'Profesorado en Química', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(73, 'Licenciatura en Física', 13, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(74, 'Ingeniería Ambiental', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(75, 'Ingeniería en Agrimensura', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(76, 'Ingeniería en Informática', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(77, 'Ingeniería en Recursos Hídricos', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(78, 'Analista en Informática', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(79, 'Perito Topocartógrafo', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(80, 'Tecnico Universitario en Automatización y Robótica', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(81, 'Tecnicatura en Informática de Gestión', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(82, 'Tecnicatura en Informática Aplicada a la Gráfica y Animación Digital', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(83, 'Tecnicatura en Informática Aplicada al Diseño Multimedia y de Sitios Web', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(84, 'Tecnicatura en Diseño y Programación de Videojuegos	', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(85, 'Tecnicatura Universitaria en Software Libre', 14, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(86, 'Profesorado de Música', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(87, 'Lic. en Música con orientación en Canto', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(88, 'Lic. en Música con orientación en Clarinete', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(89, 'Lic. en Música con orientación en Composición', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(90, 'Lic. en Música con orientacion en Contrabajo', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(91, 'Lic. en Música con orientación en Dirección Coral', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(92, 'Lic. en Música con orientación en Dirección Orquestal', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(93, 'Lic. en Música con orientación en Flauta', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(94, 'Lic. en Música con orientación en Guitarra', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(95, 'Lic. en Música con orientación en Percusión', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(96, 'Lic. en Música con orientación en Piano', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(97, 'Lic. en Música con orientación en Saxofón', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(98, 'Lic. en Música con orientación en Trombóne', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(99, 'Lic. en Música con orientacion en Viola', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(100, 'Lic. en Música con orientación en Violín', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(101, 'Lic. en Música con orientación en Violoncello', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(102, 'Lic. en Música Popular', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(103, 'Lic. en Sonorización y Grabación', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(104, 'Tec. en Composición con Medios Electroacústicos', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(105, 'Tecnicatura en Arreglos Musicales', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(106, 'Ciclo de Licenciatura en Teoría y Crítica de la Música', 16, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10'),
(107, 'Tecnico en Producción Agropecuaria', 18, 1, '2021-07-28 14:53:10', '2021-07-28 14:53:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curricula`
--

CREATE TABLE `curricula` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courses_trainings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interests_or_additional_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curricula`
--

INSERT INTO `curricula` (`id`, `name`, `lastname`, `address`, `location`, `dni`, `cell_phone`, `date_of_birth`, `email`, `training`, `work_experience`, `languages`, `courses_trainings`, `interests_or_additional_information`, `photo`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'g', 'gfsd', 'gfd', 'gfsd', 'gdf', 'gdsf', '2021-06-08', 'sdnfa@kjsfa', NULL, NULL, NULL, NULL, NULL, 'images/photo_cv/img_perfil.png', NULL, '2021-06-23 14:47:55', '2021-06-23 14:47:55'),
(2, 'Tomas', 'Turi', '25 de Mayo', 'Santa Fe', '33268035', '3425591973', '1987-06-07', 'tturi@unl.edu.ar', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.\r\nLorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'images/photo_cv/1624551330-photo_2019-12-09_10-47-24.jpg', NULL, '2021-06-24 19:15:30', '2021-06-24 19:15:30'),
(3, 'Tomas', 'Turi', '25 de Mayo', 'Santa Fe', '33268035', '3425591973', '1987-06-07', 'tturi@unl.edu.ar', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.\r\nLorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'images/photo_cv/1624551477-photo_2019-12-09_10-47-24.jpg', NULL, '2021-06-24 19:17:57', '2021-06-24 19:17:57'),
(4, 'Tomas', 'Turi', '25 de Mayo', 'Santa Fe', '33268035', '3425591973', '1987-06-07', 'tturi@unl.edu.ar', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.\r\nLorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.Lorem ipsum dolor sit amet consectetur adipiscing elit, porta hac at nisl morbi hendrerit. Odio nullam hendrerit facilisi placerat scelerisque id montes pretium, magnis metus aliquam litora mauris rutrum urna. Sollicitudin cursus eros imperdiet primis ante proin inceptos netus accumsan, dui nam erat a aenean velit integer himenaeos congue, bibendum convallis mus egestas mi senectus fusce fringilla.', 'images/photo_cv/1624551504-photo_2019-12-09_10-47-24.jpg', NULL, '2021-06-24 19:18:24', '2021-06-24 19:18:24'),
(5, 'hdf', 'hdf', 'hfd', 'hf', 'hfg', 'hdf', '2021-06-10', 'hfdhgf@gf', NULL, NULL, NULL, NULL, NULL, 'images/photo_cv/img_perfil.png', NULL, '2021-06-29 14:40:36', '2021-06-29 14:40:36'),
(6, 'hdf', 'hdf', 'hfd', 'hf', 'hfg', 'hdf', '2021-06-10', 'hfdhgf@gf', NULL, NULL, NULL, NULL, NULL, 'images/photo_cv/img_perfil.png', NULL, '2021-06-29 14:40:56', '2021-06-29 14:40:56'),
(7, 'Juan', 'Perez', 'San Martin', 'Santa Fe', '29123456', '342465798465', '1995-06-09', 'juanperez@mail.com', 'Eleifend magnis senectus semper potenti platea commodo, cubilia metus arcu neque rhoncus sodales orci, netus a augue consequat sagittis. Mus odio varius nunc primis sodales curae, malesuada eget rutrum aliquam vel eu tempor, id ullamcorper integer platea felis. Sociis gravida etiam tristique ultrices elementum diam vestibulum sapien quisque turpis, laoreet tempor potenti ut est mattis massa proin aptent.', 'Eleifend magnis senectus semper potenti platea commodo, cubilia metus arcu neque rhoncus sodales orci, netus a augue consequat sagittis. Mus odio varius nunc primis sodales curae, malesuada eget rutrum aliquam vel eu tempor, id ullamcorper integer platea felis. Sociis gravida etiam tristique ultrices elementum diam vestibulum sapien quisque turpis, laoreet tempor potenti ut est mattis massa proin aptent.Eleifend magnis senectus semper potenti platea commodo, cubilia metus arcu neque rhoncus sodales orci, netus a augue consequat sagittis. Mus odio varius nunc primis sodales curae, malesuada eget rutrum aliquam vel eu tempor, id ullamcorper integer platea felis. Sociis gravida etiam tristique ultrices elementum diam vestibulum sapien quisque turpis, laoreet tempor potenti ut est mattis massa proin aptent.', 'Eleifend magnis senectus semper potenti platea commodo, cubilia metus arcu neque rhoncus sodales orci, netus a augue consequat sagittis.', 'Eleifend magnis senectus semper potenti platea commodo, cubilia metus arcu neque rhoncus sodales orci, netus a augue consequat sagittis. Mus odio varius nunc primis sodales curae, malesuada eget rutrum aliquam vel eu tempor, id ullamcorper integer platea felis. Sociis gravida etiam tristique ultrices elementum diam vestibulum sapien quisque turpis, laoreet tempor potenti ut est mattis massa proin aptent.Eleifend magnis senectus semper potenti platea commodo, cubilia metus arcu neque rhoncus sodales orci, netus a augue consequat sagittis. Mus odio varius nunc primis sodales curae, malesuada eget rutrum aliquam vel eu tempor, id ullamcorper integer platea felis. Sociis gravida etiam tristique ultrices elementum diam vestibulum sapien quisque turpis, laoreet tempor potenti ut est mattis massa proin aptent.', 'Eleifend magnis senectus semper potenti platea commodo, cubilia metus arcu neque rhoncus sodales orci, netus a augue consequat sagittis. Mus odio varius nunc primis sodales curae, malesuada eget rutrum aliquam vel eu tempor, id ullamcorper integer platea felis. Sociis gravida etiam tristique ultrices elementum diam vestibulum sapien quisque turpis, laoreet tempor potenti ut est mattis massa proin aptent.', 'images/photo_cv/img_perfil.png', NULL, '2021-06-29 15:01:34', '2021-06-29 15:01:34'),
(8, 'gfdgdsf', 'gfdgfd', 'gfdgfd', 'gdfgfdg', 'tre34643', '6342643346', '2021-06-09', 'fdsgdsf@gfdsgfd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'images/photo_cv/img_perfil.png', NULL, '2021-06-29 18:34:49', '2021-06-29 18:34:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_requeridos`
--

CREATE TABLE `datos_requeridos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` tinyint(1) NOT NULL,
  `lastname` tinyint(1) NOT NULL,
  `dni` tinyint(1) NOT NULL,
  `email` tinyint(1) NOT NULL,
  `phone` tinyint(1) NOT NULL,
  `institution` tinyint(1) NOT NULL,
  `career` tinyint(1) NOT NULL,
  `student` tinyint(1) NOT NULL,
  `encuesta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos_requeridos`
--

INSERT INTO `datos_requeridos` (`id`, `username`, `lastname`, `dni`, `email`, `phone`, `institution`, `career`, `student`, `encuesta_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 1, 0, 0, 0, 0, 2, '2021-08-04 16:22:41', '2021-08-05 18:03:25'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 4, '2021-08-04 16:22:41', '2021-08-06 13:53:28'),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 5, '2021-08-04 16:23:25', '2021-08-18 18:07:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `respuesta_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respuesta_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respuesta_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respuesta_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id`, `name`, `description`, `state`, `slug`, `created_at`, `updated_at`, `respuesta_1`, `respuesta_2`, `respuesta_3`, `respuesta_4`) VALUES
(2, 'Desarrollo de Software', 'Un desarrollador es un programador o una compañía comercial que se dedica a uno o más aspectos del proceso de desarrollo de software. Se trata de un ámbito más amplio de la programación algorítmica.', 1, 'desarrollo-de-software', '2021-06-23 14:44:57', '2021-06-23 14:45:52', NULL, NULL, NULL, NULL),
(4, 'Simulador de entrevista', NULL, 1, 'simulador-de-entrevista', '2021-06-29 18:02:45', '2021-08-03 20:47:28', NULL, NULL, NULL, NULL),
(5, 'Simulador de Entrevistas Laborales', 'Uno de los momentos más decisivos a la hora de conseguir un empleo es la entrevista de trabajo. \nEn UNL te ayudamos a mejorar tus entrevistas laborales y estar mejor preparado(a) para la ocasión.\nAnimate a participar del simulador de entrevistas, respondiendo las preguntas más frecuentes, que hacen los reclutadores.', 1, 'simulador-de-entrevistas-laborales', '2021-06-30 16:04:42', '2021-08-18 17:42:55', 'Tip 1', 'Tip 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_17_202939_create_categories_table', 1),
(5, '2020_11_16_222237_create_posts_table', 1),
(6, '2020_12_30_015033_add_featured_to_posts_table', 1),
(7, '2021_03_24_025744_add_slug_to_posts_table', 1),
(8, '2021_05_26_195727_create_curricula_table', 1),
(9, '2021_05_29_014959_create_encuestas_table', 1),
(10, '2021_06_12_122811_create_preguntas_table', 1),
(11, '2021_06_12_123612_create_opcions_table', 1),
(24, '2021_07_02_112156_add_respuesta_1_to_encuestas_table', 2),
(25, '2021_07_02_113318_add_respuesta_2_to_encuestas_table', 2),
(26, '2021_07_02_113752_add_respuesta_3_to_encuestas_table', 2),
(27, '2021_07_02_113835_add_respuesta_4_to_encuestas_table', 2),
(28, '2021_07_13_201755_create_tips_table', 2),
(29, '2021_07_26_152702_create_respuestas_encuestas_table', 2),
(30, '2021_08_04_014506_create_datos_requeridos_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcions`
--

CREATE TABLE `opcions` (
  `id` int(10) UNSIGNED NOT NULL,
  `opcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `pregunta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `opcions`
--

INSERT INTO `opcions` (`id`, `opcion`, `valor`, `pregunta_id`, `created_at`, `updated_at`) VALUES
(589, 'Es un lenguaje de programación', 20, 148, '2021-08-05 18:03:25', '2021-08-05 18:03:25'),
(590, 'Un framework de desarrollo', 100, 148, '2021-08-05 18:03:25', '2021-08-05 18:03:25'),
(591, 'El nombre de una ciudad en Europa', 0, 148, '2021-08-05 18:03:25', '2021-08-05 18:03:25'),
(592, 'Una librería de programación', 50, 148, '2021-08-05 18:03:25', '2021-08-05 18:03:25'),
(593, 'Una metodología de trabajo', 0, 149, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(594, 'Un programa', 30, 149, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(595, 'Un lenguaje de programación', 100, 149, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(596, 'Una marca de computadoras', 0, 149, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(597, 'Una comunidad de hackers', 30, 150, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(598, 'Un Sistema Operativo', 100, 150, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(599, 'Un programa de Televisión', 0, 150, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(600, 'Un animal oriundo de Asia', 0, 150, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(641, 'No conozco mucho sobre la empresa.', 10, 161, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(642, 'Conozco un poco sobre la empresa.', 25, 161, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(643, 'No conocía la empresa, pero busque información en internet/redes y ahora se sobre lo que hacen, sus productos y algo de sus canales de venta.', 50, 161, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(644, 'Conozco a la empresa, sus productos y además estuve buscando información en internet/redes para interiorizarme un poco más.', 100, 161, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(645, 'Porque vi el anuncio y quise probar.', 10, 162, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(646, 'Porque necesito un trabajo.', 25, 162, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(647, 'Porque estoy en la búsqueda activa de empleo y abierto a las posibilidades que se van presentando.', 50, 162, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(648, 'Porque hace tiempo estoy interesado en encontrar un empleo en una empresa de estas características y me pareció muy interesante la propuesta laboral.', 100, 162, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(649, 'No tengo expectativas. Prefiero ir viendo que pasa.', 10, 163, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(650, 'Obtener el empleo y un ingreso que me permita solventar mis gastos.', 25, 163, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(651, 'Tengo muchas expectativas y ansiedad de trabajar.', 50, 163, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(652, 'Obtener el empleo para poder mostrar mi capacidad de trabajo, poder aprender y crecer laboral y profesionalmente.', 100, 163, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(653, 'Porque ofrecen mejores condiciones que las que tengo actualmente.', 10, 164, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(654, 'Porque me siento preparado para realizar estas funciones.', 25, 164, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(655, 'Porque tengo la experiencia que el puesto requiere y me gustan las funciones.', 50, 164, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(656, 'Porque es una excelente oportunidad para desarrollar mi carrera profesional y siento que puedo aportar conocimientos, ideas y proyectos.', 100, 164, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(657, 'Tengo experiencia previa, pero tuve algunas incidencias y decidí cambiar de trabajo.', 10, 165, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(658, 'No tengo experiencia laboral.', 25, 165, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(659, 'No tengo una experiencia laboral formal, pero me gustaría contarte sobre algunos trabajos/proyectos que estuve haciendo.', 100, 165, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(660, 'Tengo experiencia previa. Me gustaría comentarte algunos logros y objetivos que alcanzamos cómo equipo.', 100, 165, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(661, 'He hecho un análisis, pero no encuentro debilidades que afecten lo laboral.', 10, 166, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(662, 'Comento mis fortalezas y debilidades honestamente, sin mayor análisis.', 50, 166, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(663, 'Expongo dos fortalezas y dos debilidades poniendo énfasis en las dificultades que me representan.', 60, 166, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(664, 'Expongo dos fortalezas y dos debilidades poniendo énfasis en los aspectos a mejorar y el trabajo para superarlo.', 100, 166, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(665, 'No suelo cometer errores.', 10, 167, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(666, 'Trataría de identificar otros responsables que me ayuden a resolverlo.', 25, 167, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(667, 'Expongo el error y propongo una solución.', 100, 167, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(668, 'Asumo mi error y busco ayuda para resolverlo en equipo.', 100, 167, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(669, 'Hago lo que puedo y dejo el resto.', 10, 168, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(670, 'Trabajo más rápido, pero menos eficiente.', 25, 168, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(671, 'Pido ayuda.', 80, 168, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(672, 'Evalúo las tareas y doy un orden de prioridad.', 100, 168, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(673, 'No es posible saberlo en un contexto tan cambiante.', 10, 169, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(674, 'Prometo fidelidad y permanencia en la empresa.', 10, 169, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(675, 'Comento mis proyectos de carrera y aspiraciones.', 70, 169, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(676, 'Hablo sobre mis objetivos laborales a futuro y las oportunidades que el empleo podría darme para aprender/ crecer/ hacer carrera.', 100, 169, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(677, 'Porque soy una persona responsable y trabajadora', 30, 170, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(678, 'Porque aprendo rápido y puedo obtener buenos resultados', 50, 170, '2021-08-06 13:53:31', '2021-08-06 13:53:31'),
(679, 'Basado en lo que me han comentado del puesto, porque tengo la preparación y experiencia indicada', 50, 170, '2021-08-06 13:53:31', '2021-08-06 13:53:31'),
(680, 'Resalto mis ventajas competitivas y lo que puedo aportar al puesto, al equipo de trabajo y a los objetivos de la empresa', 100, 170, '2021-08-06 13:53:31', '2021-08-06 13:53:31'),
(961, 'No conozco mucho sobre la empresa.', 10, 241, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(962, 'No conocía la empresa, pero busque información en internet/redes y ahora se sobre lo que hacen, sus productos y algo de sus canales de venta.', 50, 241, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(963, 'Conozco un poco sobre la empresa.', 25, 241, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(964, 'Conozco a la empresa, sus productos y además estuve buscando información en internet/redes para interiorizarme un poco más.', 100, 241, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(965, 'Porque vi el anuncio y quise probar.', 10, 242, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(966, 'Porque hace tiempo estoy interesado en encontrar un empleo en una empresa de estas características y me pareció muy interesante la propuesta laboral.', 100, 242, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(967, 'Porque necesito un trabajo.', 25, 242, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(968, 'Porque estoy en la búsqueda activa de empleo y abierto a las posibilidades que se van presentando.', 50, 242, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(969, 'Obtener el empleo y un ingreso que me permita solventar mis gastos.', 40, 243, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(970, 'No tengo expectativas. Prefiero ir viendo que pasa.', 10, 243, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(971, 'Obtener el empleo para poder mostrar mi capacidad de trabajo, poder aprender y crecer laboral y profesionalmente.', 100, 243, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(972, 'Tengo muchas expectativas y ansiedad de trabajar.', 50, 243, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(973, 'Porque ofrecen mejores condiciones que las que tengo actualmente.', 10, 244, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(974, 'Porque tengo la experiencia que el puesto requiere y me gustan las funciones.', 80, 244, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(975, 'Porque es una excelente oportunidad para desarrollar mi carrera profesional y siento que puedo aportar conocimientos, ideas y proyectos.', 100, 244, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(976, 'Porque me siento preparado para realizar estas funciones.', 25, 244, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(977, 'Tengo experiencia previa. Me gustaría comentarte algunos logros y objetivos que alcanzamos cómo equipo.', 100, 245, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(978, 'Tengo experiencia previa, pero tuve algunas incidencias y decidí cambiar de trabajo.', 10, 245, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(979, 'No tengo experiencia laboral.', 50, 245, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(980, 'No tengo una experiencia laboral formal, pero me gustaría contarte sobre algunos trabajos/proyectos que estuve haciendo.', 100, 245, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(981, 'Expongo dos fortalezas y dos debilidades poniendo énfasis en las dificultades que me representan.', 60, 246, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(982, 'He hecho un análisis, pero no encuentro debilidades que afecten lo laboral.', 10, 246, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(983, 'Comento mis fortalezas y debilidades honestamente, sin mayor análisis.', 50, 246, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(984, 'Expongo dos fortalezas y dos debilidades poniendo énfasis en los aspectos a mejorar y el trabajo para superarlo.', 100, 246, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(985, 'No suelo cometer errores.', 10, 247, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(986, 'Expongo el error y propongo una solución.', 100, 247, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(987, 'Trataría de identificar otros responsables que me ayuden a resolverlo.', 25, 247, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(988, 'Asumo mi error y busco ayuda para resolverlo en equipo.', 100, 247, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(989, 'Trabajo más rápido, pero menos eficiente.', 25, 248, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(990, 'Hago lo que puedo y dejo el resto.', 10, 248, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(991, 'Evalúo las tareas y doy un orden de prioridad.', 100, 248, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(992, 'Pido ayuda.', 80, 248, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(993, 'No es posible saberlo en un contexto tan cambiante.', 10, 249, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(994, 'Comento mis proyectos de carrera y aspiraciones.', 70, 249, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(995, 'Hablo sobre mis objetivos laborales a futuro y las oportunidades que el empleo podría darme para aprender/ crecer/ hacer carrera.', 100, 249, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(996, 'Prometo fidelidad y permanencia en la empresa.', 10, 249, '2021-08-18 18:07:36', '2021-08-18 18:07:36'),
(997, 'Porque soy una persona responsable y trabajadora.', 30, 250, '2021-08-18 18:07:36', '2021-08-18 18:07:36'),
(998, 'Porque aprendo rápido y puedo obtener buenos resultados.', 50, 250, '2021-08-18 18:07:36', '2021-08-18 18:07:36'),
(999, 'Basado en lo que me han comentado del puesto, porque tengo la preparación y experiencia indicada.', 80, 250, '2021-08-18 18:07:36', '2021-08-18 18:07:36'),
(1000, 'Resalto mis ventajas competitivas y lo que puedo aportar al puesto, al equipo de trabajo y a los objetivos de la empresa.', 100, 250, '2021-08-18 18:07:36', '2021-08-18 18:07:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(10) UNSIGNED NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encuesta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `encuesta_id`, `created_at`, `updated_at`) VALUES
(148, '¿Qué es Laravel?', 2, '2021-08-05 18:03:25', '2021-08-05 18:03:25'),
(149, '¿Qué es Javascript?', 2, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(150, '¿Qué es Linux?', 2, '2021-08-05 18:03:26', '2021-08-05 18:03:26'),
(161, '¿Conoces nuestra empresa y lo que hacemos?', 4, '2021-08-06 13:53:28', '2021-08-06 13:53:28'),
(162, '¿Por qué decidiste enviarnos tu CV?', 4, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(163, '¿Cuáles son tus expectativas respecto a esta posibilidad laboral?', 4, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(164, '¿Por qué te interesa el puesto?', 4, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(165, '¿Podrías contarnos algo sobre tu experiencia laboral previa?', 4, '2021-08-06 13:53:29', '2021-08-06 13:53:29'),
(166, '¿Podrías identificar dos fortalezas y dos debilidades en lo laboral?', 4, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(167, '¿Qué es lo primero que harías si cometes un error en tu trabajo?', 4, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(168, '¿Qué harías si te encuentras sobrepasado de trabajo?', 4, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(169, '¿Dónde te ves en 10 años?', 4, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(170, '¿Por qué debo contratarte a ti?', 4, '2021-08-06 13:53:30', '2021-08-06 13:53:30'),
(241, '¿Conoces nuestra empresa y lo que hacemos?', 5, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(242, '¿Por qué decidiste enviarnos tu CV?', 5, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(243, '¿Cuáles son tus expectativas respecto a esta posibilidad laboral?', 5, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(244, '¿Por qué te interesa el puesto?', 5, '2021-08-18 18:07:34', '2021-08-18 18:07:34'),
(245, '¿Podrías contarnos algo sobre tu experiencia laboral previa?', 5, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(246, '¿Podrías identificar dos fortalezas y dos debilidades en lo laboral?', 5, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(247, '¿Qué es lo primero que harías si cometes un error en tu trabajo?', 5, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(248, '¿Qué harías si te encuentras sobrepasado de trabajo?', 5, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(249, '¿Dónde te ves en 10 años?', 5, '2021-08-18 18:07:35', '2021-08-18 18:07:35'),
(250, '¿Por qué debo contratarte a ti?', 5, '2021-08-18 18:07:36', '2021-08-18 18:07:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_encuestas`
--

CREATE TABLE `respuestas_encuestas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encuesta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `respuestas_encuestas`
--

INSERT INTO `respuestas_encuestas` (`id`, `name`, `lastname`, `dni`, `email`, `phone`, `institution`, `university`, `academic_unit`, `career`, `student`, `result`, `encuesta_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 2, '2021-08-03 19:30:47', '2021-08-03 19:30:47'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '68', 5, '2021-08-03 19:31:18', '2021-08-03 19:31:18'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '59', 5, '2021-08-03 19:34:05', '2021-08-03 19:34:05'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 2, '2021-08-03 20:33:43', '2021-08-03 20:33:43'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 2, '2021-08-04 19:44:04', '2021-08-04 19:44:04'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 2, '2021-08-04 19:45:10', '2021-08-04 19:45:10'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67', 2, '2021-08-06 18:08:01', '2021-08-06 18:08:01'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 2, '2021-08-06 18:08:30', '2021-08-06 18:08:30'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '72', 5, '2021-08-06 18:09:14', '2021-08-06 18:09:14'),
(10, 'Tomas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 2, '2021-08-18 17:08:24', '2021-08-18 17:08:24'),
(11, 'Tomás', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '73', 2, '2021-08-18 17:40:06', '2021-08-18 17:40:06'),
(12, 'Tomas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '49', 5, '2021-08-18 17:42:36', '2021-08-18 17:42:36'),
(13, 'Tomas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '79', 5, '2021-08-18 20:36:18', '2021-08-18 20:36:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tips`
--

CREATE TABLE `tips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encuesta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_academicas`
--

CREATE TABLE `unidad_academicas` (
  `id` int(11) NOT NULL,
  `unidad_academica` text NOT NULL,
  `iniciales` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_academicas`
--

INSERT INTO `unidad_academicas` (`id`, `unidad_academica`, `iniciales`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Centro Universitario Reconquista – Avellaneda', 'CU R-A', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(2, 'Centro Universitario Gálvez', 'CUG', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(3, 'Sede UNL Rafaela – Sunchales', 'CU R-S', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(4, 'Facultad de Arquitectura, Diseño y Urbanismo', 'FADU', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(5, 'Facultad de Bioquímica y Ciencias Biológicas', 'FBCB', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(6, 'Facultad de Ciencias Agrarias', 'FCA', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(7, 'Facultad de Ciencias Económicas', 'FCE', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(8, 'Facultad de Ciencias Jurídicas y Sociales', 'FCJS', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(9, 'Facultad de Ciencias Médicas', 'FCM', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(10, 'Facultad de Ciencias Veterinarias', 'FCV', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(11, 'Facultad de Humanidades y Ciencias', 'FHUC', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(12, 'Facultad de Ciencias Médicas', 'FCM', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(13, 'Facultad de Ingeniería Química', 'FIQ', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(14, 'Facultad de Ingenieria y Ciencias Hidricas', 'FICH', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(15, 'Escuela Superior de Sanidad “Ramón Carrillo”', 'ESS', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(16, 'Instituto Superior de Música', 'ISM', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(17, 'Escuela Industrial Superior', 'EIS', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(18, 'Escuela de Agricultura, Ganadería y Granja', 'EAGG', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22'),
(19, 'Escuela Secundaria de la UNL', 'ES-UNL', 1, '2020-06-29 03:15:22', '2020-06-29 03:15:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tomas', 'tturi@unl.edu.ar', 'admin', NULL, '$2y$10$D0opbKhhyz.BwYGiC60WxOTYhAcGndFtdlAR7i1ke3U0P5lZpcNke', NULL, '2021-06-23 14:33:06', '2021-06-23 14:33:06'),
(2, 'Carolina Donnet', 'cdonnet@unl.edu.ar', 'admin', NULL, '$2y$10$.W7va23yZQ5lJEgV/ZnG7eq99N6DWh8FEE6pbgODNZVSIyeCYkr5i', NULL, '2021-06-23 14:50:28', '2021-06-23 14:50:28'),
(3, 'Joaquin Luengo', 'jluengo@unl.edu.ar', 'admin', NULL, '$2y$10$w4Qux1I.hmiAvXZt5A5DUu3ZzN/QEjEzYUPxYmMIA75DS/el8eIhO', NULL, '2021-06-29 17:47:59', '2021-06-29 17:48:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carrera_unidad_academicas` (`id_ua`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curricula`
--
ALTER TABLE `curricula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_requeridos`
--
ALTER TABLE `datos_requeridos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_requeridos_encuesta_id_foreign` (`encuesta_id`);

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcions`
--
ALTER TABLE `opcions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opcions_pregunta_id_foreign` (`pregunta_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntas_encuesta_id_foreign` (`encuesta_id`);

--
-- Indices de la tabla `respuestas_encuestas`
--
ALTER TABLE `respuestas_encuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `respuestas_encuestas_encuesta_id_foreign` (`encuesta_id`);

--
-- Indices de la tabla `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tips_encuesta_id_foreign` (`encuesta_id`);

--
-- Indices de la tabla `unidad_academicas`
--
ALTER TABLE `unidad_academicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curricula`
--
ALTER TABLE `curricula`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datos_requeridos`
--
ALTER TABLE `datos_requeridos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `opcions`
--
ALTER TABLE `opcions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT de la tabla `respuestas_encuestas`
--
ALTER TABLE `respuestas_encuestas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tips`
--
ALTER TABLE `tips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidad_academicas`
--
ALTER TABLE `unidad_academicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`id_ua`) REFERENCES `unidad_academicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_requeridos`
--
ALTER TABLE `datos_requeridos`
  ADD CONSTRAINT `datos_requeridos_encuesta_id_foreign` FOREIGN KEY (`encuesta_id`) REFERENCES `encuestas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `opcions`
--
ALTER TABLE `opcions`
  ADD CONSTRAINT `opcions_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_encuesta_id_foreign` FOREIGN KEY (`encuesta_id`) REFERENCES `encuestas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `respuestas_encuestas`
--
ALTER TABLE `respuestas_encuestas`
  ADD CONSTRAINT `respuestas_encuestas_encuesta_id_foreign` FOREIGN KEY (`encuesta_id`) REFERENCES `encuestas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tips`
--
ALTER TABLE `tips`
  ADD CONSTRAINT `tips_encuesta_id_foreign` FOREIGN KEY (`encuesta_id`) REFERENCES `encuestas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
