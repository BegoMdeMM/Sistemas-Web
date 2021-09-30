
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2015 a las 18:49:14
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u528395024_quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Pregunta` varchar(50) NOT NULL,
  `Respuesta` varchar(50) NOT NULL,
  `Complejidad` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`Email`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`Id`, `Email`, `Pregunta`, `Respuesta`, `Complejidad`) VALUES
(24, 'alahueca001@ikasle.ehu.es', 'Me la juego?', 'no deberia2', 1),
(23, 'alahueca001@ikasle.ehu.es', 'Me la juego?', 'no deberia2', 1),
(22, 'alahueca001@ikasle.ehu.es', 'Me la juego?', 'no deberia2', 1),
(21, 'mama001@ikasle.ehu.es', 'de que color es el caballo blanco de santiago?', 'Blanco', 7),
(20, 'mama001@ikasle.ehu.es', 'de que color es el caballo blanco de santiago?', 'Blanco', 7),
(19, 'mama001@ikasle.ehu.es', 'de que color es el caballo blanco de santiago?', 'Blanco', 7),
(18, 'alahueca001@ikasle.ehu.es', 'X', 'Y', 1),
(17, 'alahueca001@ikasle.ehu.es', 'Esto chuta?', 'Si!!', 1),
(16, 'emanostijeras001@ikasle.ehu.es', 'Me la juego?', 'no deberia', 2),
(25, 'mama001@ikasle.ehu.es', 'qué tiempo hará mañana?', 'mucho sol', 8),
(26, 'aa111@ikasle.ehu.es', 'a', 'a', 1),
(27, 'aa111@ikasle.ehu.es', 'b', 'b', 1),
(28, 'aa111@ikasle.ehu.es', 'c', 'c', 1),
(29, 'aa111@ikasle.ehu.es', 'd', 'd', 1),
(30, 'aa111@ikasle.ehu.es', 'e', 'e', 1),
(31, 'aa111@ikasle.ehu.es', 'f', 'f', 1),
(32, 'aaa001@ikasle.ehu.es', 'Mi nombre', 'Jose Angel', 1),
(33, 'aaa001@ikasle.ehu.es', 'Mi nombre', 'Jose Angel', 1),
(34, 'aaa001@ikasle.ehu.es', 'a', 'a', 1),
(35, 'aaa001@ikasle.ehu.es', 'ccxzc', 'xzcxz', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `useronline`
--

CREATE TABLE IF NOT EXISTS `useronline` (
  `tiempo` int(15) NOT NULL DEFAULT '0',
  `ip` varchar(40) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`tiempo`),
  KEY `ip` (`ip`),
  KEY `file` (`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `useronline`
--

INSERT INTO `useronline` (`tiempo`, `ip`, `file`) VALUES
(1447084774, '150.70.173.55', '/cont_user.php'),
(1447084672, '158.227.112.231', '/cont_user.php'),
(1447084671, '158.227.112.231', '/cont_user.php'),
(1447084670, '158.227.112.231', '/cont_user.php'),
(1447084669, '158.227.112.231', '/cont_user.php'),
(1447084668, '158.227.112.231', '/cont_user.php'),
(1447084667, '158.227.112.231', '/cont_user.php'),
(1447084666, '158.227.112.231', '/cont_user.php'),
(1447084665, '158.227.112.231', '/cont_user.php'),
(1447084664, '158.227.112.231', '/cont_user.php'),
(1447084663, '158.227.112.231', '/cont_user.php'),
(1447084662, '158.227.112.231', '/cont_user.php'),
(1447084661, '158.227.112.231', '/cont_user.php'),
(1447084660, '158.227.112.231', '/cont_user.php'),
(1447084659, '158.227.112.231', '/cont_user.php'),
(1447084658, '158.227.112.231', '/cont_user.php'),
(1447084657, '158.227.112.231', '/cont_user.php'),
(1447084656, '158.227.112.231', '/cont_user.php'),
(1447084655, '158.227.112.231', '/cont_user.php'),
(1447084654, '158.227.112.231', '/cont_user.php'),
(1447084653, '158.227.112.231', '/cont_user.php'),
(1447084652, '158.227.112.231', '/cont_user.php'),
(1447084651, '158.227.112.231', '/cont_user.php'),
(1447084650, '158.227.112.231', '/cont_user.php'),
(1447084649, '158.227.112.231', '/cont_user.php'),
(1447084648, '158.227.112.231', '/cont_user.php'),
(1447084647, '158.227.112.231', '/cont_user.php'),
(1447084646, '158.227.112.231', '/cont_user.php'),
(1447084645, '158.227.112.231', '/cont_user.php'),
(1447084644, '158.227.112.231', '/cont_user.php'),
(1447084643, '158.227.112.231', '/cont_user.php'),
(1447084642, '158.227.112.231', '/cont_user.php'),
(1447084641, '158.227.112.231', '/cont_user.php'),
(1447084640, '158.227.112.231', '/cont_user.php'),
(1447084639, '158.227.112.231', '/cont_user.php'),
(1447084638, '158.227.112.231', '/cont_user.php'),
(1447084637, '158.227.112.231', '/cont_user.php'),
(1447084636, '158.227.112.231', '/cont_user.php'),
(1447084635, '158.227.112.231', '/cont_user.php'),
(1447084634, '158.227.112.231', '/cont_user.php'),
(1447084633, '158.227.112.231', '/cont_user.php'),
(1447084632, '158.227.112.231', '/cont_user.php'),
(1447084631, '158.227.112.231', '/cont_user.php'),
(1447084630, '158.227.112.231', '/cont_user.php'),
(1447084629, '158.227.112.231', '/cont_user.php'),
(1447084628, '158.227.112.231', '/cont_user.php'),
(1447084627, '158.227.112.231', '/cont_user.php'),
(1447084626, '158.227.112.231', '/cont_user.php'),
(1447084625, '158.227.112.231', '/cont_user.php'),
(1447084624, '158.227.112.231', '/cont_user.php'),
(1447084623, '158.227.112.231', '/cont_user.php'),
(1447084622, '158.227.112.231', '/cont_user.php'),
(1447084621, '158.227.112.231', '/cont_user.php'),
(1447084620, '158.227.112.231', '/cont_user.php'),
(1447084619, '158.227.112.231', '/cont_user.php'),
(1447084618, '158.227.112.231', '/cont_user.php'),
(1447084617, '158.227.112.231', '/cont_user.php'),
(1447084616, '158.227.112.231', '/cont_user.php'),
(1447084615, '158.227.112.231', '/cont_user.php'),
(1447084614, '158.227.112.231', '/cont_user.php'),
(1447084613, '158.227.112.231', '/cont_user.php'),
(1447084612, '158.227.112.231', '/cont_user.php'),
(1447084611, '158.227.112.231', '/cont_user.php'),
(1447084610, '158.227.112.231', '/cont_user.php'),
(1447084609, '158.227.112.231', '/cont_user.php'),
(1447084608, '158.227.112.231', '/cont_user.php'),
(1447084607, '158.227.112.231', '/cont_user.php'),
(1447084606, '158.227.112.231', '/cont_user.php'),
(1447084605, '158.227.112.231', '/cont_user.php'),
(1447084604, '158.227.112.231', '/cont_user.php'),
(1447084603, '158.227.112.231', '/cont_user.php'),
(1447084602, '158.227.112.231', '/cont_user.php'),
(1447084600, '158.227.112.231', '/cont_user.php'),
(1447084599, '158.227.112.231', '/cont_user.php'),
(1447084598, '158.227.112.231', '/cont_user.php'),
(1447084597, '158.227.112.231', '/cont_user.php'),
(1447084596, '158.227.112.231', '/cont_user.php'),
(1447084595, '158.227.112.231', '/cont_user.php'),
(1447084594, '158.227.112.231', '/cont_user.php'),
(1447084593, '158.227.112.231', '/cont_user.php'),
(1447084592, '158.227.112.231', '/cont_user.php'),
(1447084591, '158.227.112.231', '/cont_user.php'),
(1447084590, '158.227.112.231', '/cont_user.php'),
(1447084589, '158.227.112.231', '/cont_user.php'),
(1447084588, '158.227.112.231', '/cont_user.php'),
(1447084587, '158.227.112.231', '/cont_user.php'),
(1447084586, '158.227.112.231', '/cont_user.php'),
(1447084585, '158.227.112.231', '/cont_user.php'),
(1447084584, '158.227.112.231', '/cont_user.php'),
(1447084583, '158.227.112.231', '/cont_user.php'),
(1447084582, '158.227.112.231', '/cont_user.php'),
(1447084581, '158.227.112.231', '/cont_user.php'),
(1447084580, '158.227.112.231', '/cont_user.php'),
(1447084579, '158.227.112.231', '/cont_user.php'),
(1447084578, '158.227.112.231', '/cont_user.php'),
(1447084577, '158.227.112.231', '/cont_user.php'),
(1447084576, '158.227.112.231', '/cont_user.php'),
(1447084575, '158.227.112.231', '/cont_user.php'),
(1447084574, '158.227.112.231', '/cont_user.php'),
(1447084601, '158.227.112.231', '/cont_user.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Foto` varchar(50) DEFAULT NULL,
  `Especialidad` varchar(30) DEFAULT NULL,
  `Tecnologias` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre`, `Apellidos`, `Pass`, `Telefono`, `Email`, `Foto`, `Especialidad`, `Tecnologias`) VALUES
('Laura', 'Lux', '123456', '777555333', 'lala003@ikasle.ehu.es', 'uploads/foto-carnet.jpg', NULL, NULL),
('Mario Afonso', 'Afonso', '', '630845759', 'mafonso001@ikasle.ehu.es', NULL, NULL, NULL),
('Angelina', 'Jolie', '444555', '444555999', 'ajolie001@ikasle.ehu.es', 'uploaded/ajolie.jpg', NULL, NULL),
('mario', 'afons', '123456', '444555888', 'mafonso0111@ikasle.ehu.es', 'uploads/', NULL, NULL),
('Leo', 'Harlem', '123456', '630673526', 'Leoharlem001@ikasle.ehu.es', 'uploaded/image.jpg', NULL, NULL),
('Megan', 'Fox', '111222333', '111222333', 'meganfox004@ikasle.ehu.eus', 'uploaded/MeganFox.jpg', NULL, NULL),
('Eustaquio', 'Paquirri', 'zztio22', '666999888', 'lala002@ikasle.ehu.es', NULL, NULL, NULL),
('Iker', 'Lluvia', 'rrtoooeeee', '777888555', 'illuvia001@ikasle.ehu.es', NULL, NULL, NULL),
('Mecanica', 'Bermejo', 'trescientos', '699699699', 'aciaerre002@ikasle.ehu.es', NULL, NULL, NULL),
('Hector', 'DeTroya', '123456', '444999222', 'hdetroya@ikasle.ehu.es', 'uploaded/troy1.jpg', NULL, NULL),
('Jose', 'Vadillo Zorita', 'zaqwsx', '999999999', 'javadillo001@ikasle.ehu.eus', 'uploaded/logo.jpg', NULL, NULL),
('Errotabarri', 'Ermua', '123456', '698541287', 'eermua001@ikasle.ehu.es', 'uploaded/todos_juntos.jpg', NULL, NULL),
('', 'Afonso', '123456', '', '', 'uploads/', NULL, NULL),
('cereza', 'palo', '123456', '555666888', 'mafonso021@ikasle.ehu.es', NULL, NULL, NULL),
('aasseerr', 'asdef', '123456', '123456789', 'mafonso031@ikasle.ehu.es', 'uploads/ajolie.jpg', NULL, NULL),
('weqwe', 'qwewqe', '32342424', '232323232', 'mafonso037@ikasle.ehu.es', 'uploads/foto-carnet.jpg', NULL, NULL),
('', 'uuu', '', '', 'mafonso091@ikasle.ehu.es', 'uploads/', NULL, NULL),
('mario', 'afons', '123456', '444555888', 'mafonso097@ikasle.ehu.es', 'uploads/', NULL, NULL),
('mario', 'afons', '123456', '444555888', 'mafonso098@ikasle.ehu.es', 'uploads/', NULL, NULL),
('mario', 'afons', '123456', '444555888', 'mafonso099@ikasle.ehu.es', 'uploads/', NULL, NULL),
('Marta', 'Afonso', '123456', '888888888', 'mafonso101@ikasle.ehu.es', NULL, NULL, NULL),
('Iker', 'Afonso', '123456', '630845759', 'mafonso301@ikasle.ehu.es', 'uploads/foto-carnet.jpgfoto-carnet.jpg', NULL, NULL),
('Eus2taquio', 'Afonso', '123456', '777888555', 'mafonso31@ikasle.ehu.es', 'uploads/foto-carnet.jpg', NULL, NULL),
('dgdfgdfg', 'Afonso', '22', '2323', 'mafonso345@ikasle.ehu.es', 'uploads/', NULL, NULL),
('Eustaquio', 'Afonso', '123456', '777888555', 'mafonso601@ikasle.ehu.es', 'uploads/foto-carnet.jpg', NULL, NULL),
('cereza2', 'palo2', '123456', '555666888', 'mafonso921@ikasle.ehu.es', '', NULL, NULL),
('aasseerr', 'asdef', '646856', '123456789', 'mafonso991@ikasle.ehu.es', 'uploads/ajolie.jpg', NULL, NULL),
('Megan', 'Fox', '123456', '698869886', 'meganfox001@ikasle.ehu.eus', 'uploads/MeganFox.jpg', NULL, NULL),
('defe', 'Afonso', '123456', '555555555', 'mortadelo032@ikasle.ehu.es', NULL, NULL, NULL),
('Eduardo', 'Manostijeras', '123456', '630845759', 'emanostijeras001@ikasle.ehu.es', 'uploads/Eduardo-Manostijeras_120907.jpg', NULL, NULL),
('aaa', 'aaa aaa', 'zaqwsx', '999999999', 'aaa001@ikasle.ehu.es', 'uploads/', NULL, NULL),
('aaa', 'aaa a a', '123456', '121211122', 'aa001@ikasle.ehu.eus', 'uploads/', NULL, NULL),
('Almudena', 'Lahueca', '123456', '630845759', 'alahueca001@ikasle.ehu.es', 'uploads/Aldea.png', NULL, NULL),
('TOÑI', 'BARREIRA LORENZO', '123456', '659392438', 'mama001@ikasle.ehu.es', 'uploads/', NULL, NULL),
('aa', 'a a a', '123456', '123456789', 'aa111@ikasle.ehu.es', 'uploads/Chrysanthemum.jpg', NULL, NULL),
('cxczx', 'sdfsd ds', 'zaqwsx', '656565656', 'jvadillo001@ikasle.ehu.es', 'uploads/', NULL, NULL),
('aaa', 'aaa aaa', 'zaqwsx', '777777777', 'javadillo001@ikasle.ehu.es', 'uploads/', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
