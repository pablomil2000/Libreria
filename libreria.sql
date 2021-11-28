-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 18:28:27
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nom_categoria`) VALUES
(1, 'Informática'),
(2, 'Novela Historica'),
(3, 'Internet'),
(4, 'Comedia'),
(5, 'Gastronomia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallespedido`
--

CREATE TABLE `detallesPedido` (
  `id_pedido` int(11),
  `id_producto` int(11),
  `cantidad` int(11),
  PRIMARY KEY(id_pedido, id_producto)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `isbn` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `imagen` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`isbn`, `titulo`, `descripcion`, `precio`, `autor`, `id_categoria`, `imagen`) VALUES
('9788415414', 'Ajax. Manual imprescindible', 'AJAX es el acrónimo de Asynchronous JavaScript and XML, y hace referencia a una combinación de tecnologías que facilitan el diseño de aplicaciones Web con ciertas características avanzadas. Proporciona a los desarrolladores la capacidad de crear interfaces de usuario más sofisticadas y con respuesta casi inmediata. Este libro muestra cómo utilizar Ajax sin importar cuál sea su nivel actual de conocimientos. Comienza explicando qué es Ajax y qué mejoras ofrece, para introducirse poco a poco en JavaScript, XML, JSON o Ruby on Rails. Verá también cómo optimizar páginas Web hechas con Ajax para un mejor posicionamiento en los buscadores. De un modo eminentemente práctico, aprenderá cuáles son los casos más comunes y los problemas más frecuentes con los que se puede encontrar desarrollando con Ajax. Por último, verá qué importancia tiene Ajax dentro de la Web 2.0 y por qué las más grandes empresas del sector Internet, como Google, han elegido Ajax.', 26.95, 'Javier Mellado Dominguez', 1, 'images/2.jpg'),
('9788441530', 'Joomla Programación. El libro oficial', 'Esta es una guía de consulta que recopila instrucciones paso a paso para múltiples proyectos, desde tareas como aplicar un override a una plantilla, hasta las técnicas más innovadoras que incluyen componentes, MVC y la estructura de Joomla! Todo el código está disponible en el sitio Web del libro', 54.5, 'Mark Dexter Louis Landry', 1, 'images/1.jpg'),
('9788441532', 'Desarrollo de Juegos en HTML5', 'Descubrirá lo que supone hacer un juego al que todo el mundo quiera jugar. Trabajará de la mano de expertos programadores utilizando JavaScript, HTML5, WebGL y CSS3. A medida que vaya completando los proyectos, no aprenderá solamente a crear simples juegos, sino que podrá desarrollar juegos fantásticos.', 31.5, 'Kuryanovich, Egor.', 1, 'images/3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11),
  importe varchar(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`isbn`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
