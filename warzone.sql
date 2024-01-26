-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 20:26:01
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `warzone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_articulo` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Genero` varchar(200) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_articulo`, `Nombre`, `Genero`, `Descripcion`, `id_usuario`) VALUES
(1, 'Resident evil 4', 'Terror/Horror', 'El argumento del juego nos pone en la piel de Leon Scott Kennedy, sobreviviente del desastre vírico que destruyó a Raccoon City, convertido ahora seis años después de este suceso en un agente del Serv', 1),
(2, 'Zombi u', 'terror/Horror', 'ZombiU es un juego de zombis para Wii U en el que nos enfrentamos a un estallido zombi en Londres.', 1),
(3, 'Donkey Kong contry t', 'Infantil', 'Invasores árticos convirtieron la isla Donkey Kong en una congelada fortaleza, y depende de ti salvar el día.', 1),
(4, 'Mario kart 8', 'Infantil', 'Mario Kart 8 cuenta con 32 circuitos, 16 circuitos nuevos y 16 circuitos retro (renovados de otras entregas de Mario Kart)', 1),
(5, 'Wii sports', 'Deportes', 'Wii Sports es una compilación de minijuegos deportivos, muy sencillos, con la peculiaridad de que todos se controlan con el mando con detección de movimiento de la consola', 1),
(6, 'red 4 remake', 'terror', 'la nueva version de resident evil', 2),
(12, 'w', 'q', 'w', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(6) UNSIGNED NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido_paterno` varchar(30) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Confirmar_contrasena` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nombre`, `Apellido_paterno`, `Telefono`, `Correo`, `Contrasena`, `Confirmar_contrasena`, `reg_date`) VALUES
(1, 'Jesus', 'Bustillos', '5542678151', 'hongovenenoso@live.com', 'Rammstein', 'Rammstein', '2022-05-17 00:50:50'),
(2, 'Yael', 'Franchini', '5569741236', 'yaelfranchini@hotmail.com', 'franchini94', 'franchini94', '2022-05-10 21:10:53'),
(3, 'Diego', 'Zambrano', '5587422116', 'diegorz@hotmail.com', 'diegorz', 'diegorz', '2022-05-10 21:40:20'),
(4, 'Omar', 'Martinez', '5589632545', 'omiguapo@hotmail.com', 'omargarcia', 'omargarcia', '2022-05-10 21:47:52'),
(5, 'Deniss', 'Bautista', '5579631245', 'denissbautista@hotmail.com', 'deniss2006', 'deniss2006', '2022-05-10 21:52:46'),
(6, 'Nibani', 'Buatista', '5523641569', 'nibanini@hotmail..com', 'nibani2000', 'nibani2000', '2022-05-10 22:00:03'),
(7, 'Jhonatan', 'Medina', '5542282833', 'jhonzoids@hotmail.com', 'jhonzoids', 'jhonzoids', '2022-05-10 22:04:12'),
(8, 'Leticia', 'Medina', '5541697852', 'leti_conejita@hotmail.com', 'leticia75', 'leticia75', '2022-05-10 22:06:21'),
(9, 'Gerardo', 'Bustillos', '5531746451', 'gerardorz@hotmail.com', 'gerardordz', 'gerardordz', '2022-05-10 22:17:58'),
(10, 'Juan', 'Perez', '5574369412', 'juanalcachofas@hotmail.com', 'juanito', 'juanito', '2022-05-17 00:35:42'),
(12, 'pepito', 'perez', '2521252125', 'pepito@gmail.com', '123', '123', '2022-06-08 18:08:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
