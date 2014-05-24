SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
INSERT INTO `admin` (`id`, `usuario`, `contrasena`) VALUES
(1, 'root', '81dc9bdb52d04dc20036dbd8313ed055');

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

INSERT INTO `categorias` (`id_cat`, `cat_nom`) VALUES
(1, 'Baterias'),
(2, 'Memorias'),
(6, 'Disco Rigido'),
(7, 'Monitor'),
(8, 'Fuente'),
(9, 'Parlantes');

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

INSERT INTO `productos` (`id_pro`, `nombre`, `precio`, `oferta`, `img`, `id_cat`, `descripcion`) VALUES
(1, 'Bateria Camara Nicon NH-870', 200, 1, 'bateria.jpg', 1, 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro'),
(2, 'Pendrive 16gb Kingstong', 80, 1, 'kingston.jpg', 2, 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro'),
(3, 'Bateria Camara Nicon NH-870', 200, 1, 'bateria.jpg', 1, 'Tipo\r\nCámara Digital Compacta\r\nPíxeles reales\r\n16 millones\r\nSensor de Imagen\r\nCMOS\r\nTamaño del sensor\r\n1/2.3 in.\r\nPíxeles totales\r\n16.79 millones (aprox.)\r\nLente\r\nLente de cristal NIKKOR ED con zoom óptico de 30x\r\nDistancia Focal del Lente\r\n4.0-120.0 mm (ángulo de visión equivalente al del lente de 22.5-675 mm en formato de 35 mm [135])\r\nNúmero f/ del lente\r\nf/3-5.8\r\nConstrucción del Lente\r\n12 elementos en 9 grupos (2 ED elementos de lente)\r\nZoom del Lente\r\n30x\r\nZoom Digital\r\nHasta 4x (ángulo equivalente a aprox. 2,700mm del lente en un formato de 35mm)\r\nReducción de la Vibración (VR)\r\nDesplazamiento del lente y VR Electrónica (fotografías) \r\nVR por desplazamiento del lente (videos)\r\nReducción de Desenfoque de Movimiento\r\nDetección de Movimiento (imágenes fijas)\r\nEnfoque automático (AF)\r\nAF con detección de contraste\r\nSelección de área de enfoque del enfoque automático (AF)\r\nCentro \r\nPrioridad en el rostro');

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `usuarios` (`id_cliente`, `nombre`, `apellido`, `direccion`, `contraseña`) VALUES
(1, 'facundo', 'rubin', 'Ayala 1312', '1234');


CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `importe` float NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
