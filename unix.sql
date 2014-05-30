-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2014 a las 18:46:41
-- Versión del servidor: 5.5.32-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `unix`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `contrasena`) VALUES
(1, 'YWRtaW4=', 'MTIzNA==');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cat`),
  UNIQUE KEY `id_cat` (`id_cat`),
  KEY `id` (`id_cat`),
  KEY `id_2` (`id_cat`),
  KEY `id_cat_2` (`id_cat`),
  KEY `id_cat_3` (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `cat_nom`) VALUES
(1, 'Baterias'),
(2, 'Memorias'),
(6, 'Disco Rigido'),
(7, 'Monitor'),
(8, 'Fuente'),
(9, 'Parlantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_pro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `oferta` tinyint(1) NOT NULL,
  `img` varchar(200) NOT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `descripcion` mediumtext NOT NULL,
  PRIMARY KEY (`id_pro`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `nombre`, `precio`, `oferta`, `img`, `id_cat`, `descripcion`) VALUES
(1, 'Bateria Camara Nicon NH-870', 200, 1, 'bateria.jpg', 1, 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro'),
(2, 'Pendrive 16gb Kingstong', 80, 1, 'kingston.jpg', 2, 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro'),
(3, 'Bateria Camara Nicon NH-870', 200, 1, 'bateria.jpg', 1, 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_cliente`, `nombre`, `apellido`, `direccion`, `contrasena`, `usuario`) VALUES
(1, 'Facundo', 'Rubin', 'Ayala 1312', '81dc9bdb52d04dc20036dbd8313ed055', 'facurubin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `importe` float NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
