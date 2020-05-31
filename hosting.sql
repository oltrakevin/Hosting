-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2020 a las 13:24:14
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hosting`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `prInserir_Pla` (IN `p_PlaHosting` VARCHAR(50), IN `p_quota` INT, IN `p_Preu` INT, IN `p_nWebs` INT, IN `p_nEmails` INT, IN `p_anchoBanda` INT, IN `p_basesDatos` INT, IN `p_procesador` VARCHAR(100), IN `p_memoria` VARCHAR(100), IN `p_sslIncluido` INT, IN `p_copiaSeguridad` INT, IN `p_Webmail` INT, IN `p_Subdominis` INT, IN `p_ComtesFTP` INT, IN `p_Inodos` INT, IN `p_accesSSH` INT, IN `p_Cronjobs` INT, IN `p_compatibleWordPress` INT, IN `p_soport` INT)  BEGIN
	insert into plans(PlaHosting, quota, Preu, nWebs, nEmails, anchoBanda, basesDatos, procesador, memoria, sslIncluido, copiaSeguridad, Webmail, Subdominis, ComtesFTP, Inodos, accesSSH, Cronjobs, compatibleWordPress, soport) 
    values (p_PlaHosting, p_quota, p_Preu, p_nWebs, p_nEmails, p_anchoBanda, p_basesDatos, p_procesador, p_memoria, p_sslIncluido, p_copiaSeguridad, p_Webmail, p_Subdominis, p_ComtesFTP, p_Inodos, p_accesSSH, p_Cronjobs, p_compatibleWordPress, p_soport);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL,
  `dni` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cognoms` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefon` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `adreca` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `localitat` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `domini` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ipAddress` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `dataAlta` date NOT NULL,
  `plaHosting` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`idClient`, `dni`, `nom`, `cognoms`, `email`, `telefon`, `adreca`, `localitat`, `cp`, `pais`, `domini`, `ipAddress`, `dataAlta`, `plaHosting`) VALUES
(1, '8748242292', 'Flin', 'Antwis', 'fantwis0@amazon.com', '5454094180', '4855 Fisk Crossing', 'Celorico de Basto', 45595, 'Portugal', 'nature.com', '98.72.165.25', '2019-10-10', '2'),
(2, '1939631440', 'Owen', 'Myrtle', 'omyrtle1@nationalgeographic.com', '6505297960', '21869 5th Center', 'Marataizes', 76641, 'Brazil', 'ibm.com', '160.183.15.114', '2019-11-24', '3'),
(3, '5559782238', 'Veronica', 'Totterdell', 'vtotterdell2@buzzfeed.com', '4909381663', '937 Paget Road', 'Jalapa', 61034, 'Nicaragua', 'dagondesign.com', '51.92.95.221', '2020-04-09', '2'),
(4, '5281773682', 'Falito', 'Yarwood', 'fyarwood3@archive.org', '8911516184', '90 Jenna Place', 'Huddinge', 55957, 'Sweden', 'msu.edu', '30.220.68.61', '2019-10-23', '2'),
(5, '9671164811', 'Waly', 'Barkshire', 'wbarkshire4@tripod.com', '1576690643', '217 Fieldstone Park', 'Quillabamba', 89082, 'Peru', 'odnoklassniki.ru', '84.50.182.175', '2019-07-07', '1'),
(6, '5924275493', 'Prudence', 'Cooke', 'pcooke5@about.com', '6451540047', '07910 Melby Point', 'Charleroi', 71929, 'Belgium', 'house.gov', '187.88.118.9', '2019-12-09', '1'),
(7, '7666671288', 'Loren', 'McGroarty', 'lmcgroarty6@creativecommons.org', '3838810770', '69 Carioca Terrace', 'Pai do Vento', 76442, 'Portugal', 'opera.com', '90.123.33.237', '2020-04-25', '1'),
(8, '3876501598', 'Hillel', 'Sturney', 'hsturney7@twitpic.com', '4039131475', '80 Lotheville Drive', 'Wawa', 51404, 'Nigeria', 'slashdot.org', '55.155.166.169', '2019-10-25', '1'),
(9, '0828921687', 'Edd', 'Garrick', 'egarrick8@topsy.com', '5521901471', '21545 Russell Pass', 'Jianmin', 80458, 'China', 'de.vu', '163.63.91.129', '2020-03-29', '3'),
(10, '8769332924', 'Benjamin', 'Drillingcourt', 'bdrillingcourt9@ca.gov', '6355715288', '3613 Gulseth Circle', 'Baixo Guandu', 26478, 'Brazil', 'bbb.org', '113.24.223.138', '2020-04-02', '3'),
(85, '', 'Kevin oltra ValentÃ­n', '', '', '', '', 'Xativa', 46800, 'EspaÃ±a', '', '20931890g', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacio`
--

CREATE TABLE `facturacio` (
  `numFactura` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `dataFactura` date NOT NULL,
  `totalFactura` int(11) NOT NULL,
  `pagada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `facturacio`
--

INSERT INTO `facturacio` (`numFactura`, `idClient`, `dataFactura`, `totalFactura`, `pagada`) VALUES
(1, 1, '2028-08-20', 8384, 0),
(2, 2, '2030-10-20', 578, 0),
(3, 3, '2008-04-20', 5189, 0),
(4, 4, '2022-08-20', 5436, 1),
(5, 5, '2030-09-20', 1553, 0),
(6, 6, '2009-10-20', 3001, 1),
(7, 7, '2028-05-19', 7597, 1),
(8, 8, '2025-05-20', 6270, 1),
(9, 9, '2005-09-20', 3755, 1),
(10, 10, '2024-05-19', 2837, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans`
--

CREATE TABLE `plans` (
  `idPlan` int(11) NOT NULL,
  `plaHosting` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `quota` int(11) NOT NULL,
  `Preu` int(11) NOT NULL,
  `nWebs` int(11) NOT NULL,
  `nEmails` int(11) NOT NULL,
  `anchoBanda` int(11) NOT NULL,
  `basesDatos` int(11) NOT NULL,
  `procesador` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `memoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `sslIncluido` int(11) NOT NULL,
  `copiaSeguridad` int(11) NOT NULL,
  `Webmail` int(11) NOT NULL,
  `Subdominis` int(11) NOT NULL,
  `ComtesFTP` int(11) NOT NULL,
  `Inodos` int(11) NOT NULL,
  `accesSSH` int(11) NOT NULL,
  `Cronjobs` int(11) NOT NULL,
  `compatibleWordPress` int(11) NOT NULL,
  `soport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `plans`
--

INSERT INTO `plans` (`idPlan`, `plaHosting`, `quota`, `Preu`, `nWebs`, `nEmails`, `anchoBanda`, `basesDatos`, `procesador`, `memoria`, `sslIncluido`, `copiaSeguridad`, `Webmail`, `Subdominis`, `ComtesFTP`, `Inodos`, `accesSSH`, `Cronjobs`, `compatibleWordPress`, `soport`) VALUES
(1, 'Starter', 10, 10, 1, 1, 100, 1, 'AMD 2990WX a 3.0 GHz', '1,5', 0, 1, 15, 1, 15, 1, 0, 15, 0, 0),
(2, 'Avançat', 20, 20, 25, 25, 200, 25, 'AMD 2990WX a 4.2 GHz', '4', 1, 2, 25, 2, 25, 2, 1, 25, 0, 1),
(3, 'Empresa', 30, 30, 3, 35, 500, 35, 'XEON E-2288G 5.0 GHz', '8', 1, 3, 3, 35, 35, 3, 1, 35, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`) VALUES
(5, 'juan', 'juan@gmail.com', '$2y$10$jjK0nf2RhaQlbqLaPooF0uzvoBj1fBcX79t6pVyDEM8iGuxI3alQi'),
(6, 'oscar', 'oscar@gmail.com', '$2y$10$4fRRbYyFL1K7YkFpRlXdR.iwqabPyWsjzBZDRPvAaSYGa3fwWWxQW'),
(7, 'paco', 'paco@gmail.com', '$2y$10$SW012u6qDHqk4ackdZn.BeyXVQ/jhyVgm.gUuaCj1ZErVl.RMY7hO');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_clients`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_clients` (
`nom` varchar(50)
,`cognoms` varchar(100)
,`email` varchar(50)
,`pais` varchar(50)
,`domini` varchar(50)
,`Preu` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_clients`
--
DROP TABLE IF EXISTS `vista_clients`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_clients`  AS  select `c`.`nom` AS `nom`,`c`.`cognoms` AS `cognoms`,`c`.`email` AS `email`,`c`.`pais` AS `pais`,`c`.`domini` AS `domini`,`p`.`Preu` AS `Preu` from (`clients` `c` join `plans` `p` on((`c`.`plaHosting` = `p`.`idPlan`))) order by `c`.`plaHosting` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idClient`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `email` (`email`,`domini`,`ipAddress`);

--
-- Indices de la tabla `facturacio`
--
ALTER TABLE `facturacio`
  ADD PRIMARY KEY (`numFactura`,`idClient`);

--
-- Indices de la tabla `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`idPlan`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `facturacio`
--
ALTER TABLE `facturacio`
  MODIFY `numFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `idPlan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
