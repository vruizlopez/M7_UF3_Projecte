-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 11:41 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ConfiguradorOnline`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesorios`
--

CREATE TABLE `accesorios` (
  `vehiculoid` int(11) NOT NULL,
  `accesorioId` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `tapiceria` varchar(15) NOT NULL,
  `asientos` varchar(15) NOT NULL,
  `audio` varchar(15) NOT NULL,
  `confort` varchar(15) NOT NULL,
  `nevagacion` varchar(15) NOT NULL,
  `seguridad` varchar(15) NOT NULL,
  `llantas` varchar(15) NOT NULL,
  `equipamientoExterior` varchar(15) NOT NULL,
  `equipamientoInterior` varchar(15) NOT NULL,
  `transporte` varchar(15) NOT NULL,
  `navegacionMultimedia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `clienteId` int(11) NOT NULL,
  `nombre` varchar(15) CHARACTER SET utf32 COLLATE utf32_spanish_ci DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf32 COLLATE utf32_spanish_ci DEFAULT NULL,
  `apellido1` varchar(15) CHARACTER SET utf32 COLLATE utf32_spanish_ci DEFAULT NULL,
  `apellido2` varchar(15) CHARACTER SET utf32 COLLATE utf32_spanish_ci DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET utf32 COLLATE utf32_spanish_ci DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`clienteId`, `nombre`, `password`, `apellido1`, `apellido2`, `fechaNacimiento`, `correo`, `telefono`) VALUES
(1, 'Victor', '12345v', 'Ruiz', 'Lopez', '1994-03-08', 'victor.ruiz@gmail.com', 934770154),
(7, 'Dani', '12345v', 'Martin', 'Perez', '1994-03-08', 'dani@gmail.com', 934770154),
(9, 'Lluis', '12345v', 'Puig', 'Ferrer', '1994-03-08', 'lluis@gmail.com', 934770154);

-- --------------------------------------------------------

--
-- Table structure for table `vehiculos`
--

CREATE TABLE `vehiculos` (
  `vehiculoid` int(11) NOT NULL,
  `modelo` varchar(15) DEFAULT NULL,
  `version` varchar(15) DEFAULT NULL,
  `motor` varchar(100) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehiculos`
--

INSERT INTO `vehiculos` (`vehiculoid`, `modelo`, `version`, `motor`, `precio`) VALUES
(1, 'León', 'Style', 'Leon 2.0 TDI CR 150 CV (110 KW) Start/Stop Style', 21000),
(2, 'León', 'Reference', 'Leon 1.4 TGI GNC 110 CV (81 KW) Start/Stop Reference', 18240),
(3, 'León', 'Xcellence', 'Leon 2.0 TDI CR 150 CV (110 KW) Start/Stop Xcellence', 22510),
(4, 'León', 'FR', 'Leon 2.0 TDI CR 184 CV (135 KW) Start/Stop FR', 23530);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `ventaId` int(11) NOT NULL,
  `clienteId` int(11) NOT NULL,
  `precio` double NOT NULL,
  `precioTotal` double NOT NULL,
  `precioFinal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ventasAccesorios`
--

CREATE TABLE `ventasAccesorios` (
  `ventaId` int(11) NOT NULL,
  `accesorioId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ventasVehiculos`
--

CREATE TABLE `ventasVehiculos` (
  `ventaId` int(11) NOT NULL,
  `vehiculoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesorios`
--
ALTER TABLE `accesorios`
  ADD PRIMARY KEY (`vehiculoid`,`accesorioId`),
  ADD UNIQUE KEY `accesorioId` (`accesorioId`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`clienteId`),
  ADD UNIQUE KEY `clienteId` (`clienteId`);

--
-- Indexes for table `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`vehiculoid`),
  ADD UNIQUE KEY `vehiculoid` (`vehiculoid`),
  ADD UNIQUE KEY `vehiculoid_2` (`vehiculoid`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ventaId`,`clienteId`),
  ADD UNIQUE KEY `ventaId` (`ventaId`),
  ADD UNIQUE KEY `clienteId` (`clienteId`);

--
-- Indexes for table `ventasAccesorios`
--
ALTER TABLE `ventasAccesorios`
  ADD PRIMARY KEY (`ventaId`,`accesorioId`),
  ADD KEY `accesorioId` (`accesorioId`);

--
-- Indexes for table `ventasVehiculos`
--
ALTER TABLE `ventasVehiculos`
  ADD PRIMARY KEY (`ventaId`,`vehiculoId`),
  ADD KEY `vehiculoId` (`vehiculoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesorios`
--
ALTER TABLE `accesorios`
  MODIFY `accesorioId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `clienteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `vehiculoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ventaId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accesorios`
--
ALTER TABLE `accesorios`
  ADD CONSTRAINT `accesorios_ibfk_1` FOREIGN KEY (`vehiculoid`) REFERENCES `vehiculos` (`vehiculoid`);

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`clienteId`) REFERENCES `usuarios` (`clienteId`);

--
-- Constraints for table `ventasAccesorios`
--
ALTER TABLE `ventasAccesorios`
  ADD CONSTRAINT `ventasAccesorios_ibfk_1` FOREIGN KEY (`accesorioId`) REFERENCES `accesorios` (`accesorioId`),
  ADD CONSTRAINT `ventasAccesorios_ibfk_2` FOREIGN KEY (`ventaId`) REFERENCES `ventas` (`ventaId`);

--
-- Constraints for table `ventasVehiculos`
--
ALTER TABLE `ventasVehiculos`
  ADD CONSTRAINT `ventasVehiculos_ibfk_2` FOREIGN KEY (`ventaId`) REFERENCES `ventas` (`ventaId`),
  ADD CONSTRAINT `ventasVehiculos_ibfk_3` FOREIGN KEY (`vehiculoId`) REFERENCES `vehiculos` (`vehiculoid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
