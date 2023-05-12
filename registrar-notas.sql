-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2023 a las 18:31:56
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrar-notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `Estudiante` varchar(20) NOT NULL,
  `Nota` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `Estudiante`, `Nota`) VALUES
(17, 'Fulanito', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `numero_celular` text NOT NULL,
  `correo_electronico` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `numero_celular`, `correo_electronico`, `usuario`, `contraseña`) VALUES
(15, 'pepito', 'moreno', '0000-00-00', '3143707506', 'pepiot@email.com', '@pepito', '123456'),
(23, '', '', '0000-00-00', '0', '', '', ''),
(24, '', '', '0000-00-00', '0', '', '', ''),
(25, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-05', '333', 'jhoab@gmail.com', '@use', '123'),
(26, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-06', '333', 'jhoab@gmail.com', '@use', '123'),
(27, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-12', '57', 'jhoab@gmail.com', '@user', '123'),
(28, 'Jhoan Sebastian', 'García Baracaldo', '2023-03-28', '2147483647', 'jhoab@gmail.com', '@user', '123'),
(29, 'user', 'har', '2023-04-11', '300', 'jhoab@gmail.com', '@users', '123'),
(30, 'Jhoan ', 'García Baracaldo', '2023-04-04', '2147483647', 'jhoab@gmail.com', '@users', '123'),
(31, 'Jhoan Sebastian', 'García Baracaldo', '2023-03-30', '2147483647', 'jhoab@gmail.com', '@use', '123'),
(32, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-13', '3101001010', 'jhoab@gmail.com', '@users', '456'),
(33, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-12', '3101001010', 'jhoab@gmail.com', '@users', '789'),
(34, 'sola', 'allo', '2023-04-11', '3143707506', 'hoab@email.com', '@hoab', '753'),
(35, 'ANdres', 'Hola', '2023-04-20', '3143707506', 'andresb@email.com', '@andres', '159'),
(36, 'Sofi', 'Andre', '1999-06-16', '3101001010', 'hoab@email.com', '@andre', '4862'),
(37, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-05', '3101001010', 'jhoab@gmail.com', '@users', '489'),
(38, 'prueba', 'arroz', '2023-04-12', '3101001010', 'jhoab@gmail.com', '@prueba', '123'),
(39, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-06', '3101001010', 'jhoab@gmail.com', '@andres', '456'),
(40, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-07', '3101001010', 'hoab@email.com', '@users', '456'),
(41, 'Jhoan Sebastian', 'García Baracaldo', '2023-04-12', '3101001010', 'jhoab@gmail.com', '@user', '789'),
(42, 'Aura', 'Rodriguez', '2023-04-05', '3101001010', 'hoab@email.com', '@aura', '123'),
(43, 'julian', 'moreno', '2023-03-30', '3101001010', 'julian@gmail.com', '@julian', '12345'),
(44, 'alexander', 'garcia', '2023-05-11', '3101001010', 'email@hotmail.com', '@user01', '123'),
(45, 'alondra', 'carballo', '8681-06-18', '3101001010', 'email@email.com', '@alondra', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
