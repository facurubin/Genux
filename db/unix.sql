-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-05-2014 a las 00:38:18
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `oferta` tinyint(1) NOT NULL,
  `img` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `oferta`, `img`, `categoria`, `descripcion`) VALUES
(1, 'Bateria Camara Nicon NH-870', 200, 1, 'bateria.jpg', 'Baterias', 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro'),
(2, 'Pendrive 16gb Kingstong', 80, 1, 'kingston.jpg', 'Pendrives', 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro'),
(3, 'Bateria Camara Nicon NH-870', 200, 1, 'bateria.jpg', 'Baterias', 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
