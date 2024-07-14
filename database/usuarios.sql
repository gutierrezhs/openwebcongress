-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2024 a las 18:16:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `openwebcongress`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `confirmado` tinyint(1) DEFAULT NULL,
  `token` varchar(13) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `confirmado`, `token`, `admin`) VALUES
(1, ' herman', 'gutierrez', 'correo@gmail.com', '$2y$10$mkIU4YRFWqvImErTgbE7rOW0UrbDB2.S.acbv.UqGldlt8EhOWQE6', 1, '0', 1),
(2, ' usuario1nombre', 'usuario1apellido', 'correo1@correo.com', '$2y$10$IzZFzNV1M3fIs16/7DRcdelLGee2GSbMLOHGEYb7rJIH7GGS1joMm', 1, '0', 0),
(3, ' usuario2', 'usuario2apellido', 'usuario2@gmail.com', '$2y$10$qD3F0Jb0QnANpZL0QhKhnuqh1VC0NcrvkPyjTgrAYYhuotvZvoK02', 1, '0', 0),
(4, ' usuario3', 'usuario3', 'usuario3@gmail.com', '$2y$10$NLLTXCy/P8UkpzSGmX0Dteshiy4vWwW2h0OVuXMFqp5pfUQ9iz3gW', 1, '0', 0),
(5, ' usuario1', 'usuario1', 'usuario1@gmail.com', '$2y$10$h7EgLOMFoDbII2UhqK0O2OLOtL2g1BWvLi47Nqjlbo2LgGp0cWINO', 1, '0', 0),
(6, ' usuario4', 'usuario4', 'usuario4@gmail.com', '$2y$10$XdZlHC93kyEGymfywRSl3ufdVca15CBL.ZtAGhbWap8k07OQFtUbC', 1, '0', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
