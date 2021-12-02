-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 10:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtortilleriamr`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientem`
--

CREATE TABLE `clientem` (
  `idcliente` int(7) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(35) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `num_tel` int(10) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `idventa` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `empleadom`
--

CREATE TABLE `empleadom` (
  `idempleado` int(7) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `fecha_nac` date NOT NULL,
  `num_telefono` int(10) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `repartidorm`
--

CREATE TABLE `repartidorm` (
  `idrepartidor` int(7) NOT NULL,
  `nombre_negocio` int(20) NOT NULL,
  `correo` int(40) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` int(40) NOT NULL,
  `preferencia_entrega` date NOT NULL,
  `idventa` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ventam`
--

CREATE TABLE `ventam` (
  `idventa` int(7) NOT NULL,
  `fecha_venta` date NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `productos` varchar(50) NOT NULL,
  `cantidad_productos` int(10) NOT NULL,
  `descuento` varchar(10) NOT NULL,
  `ventatotal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientem`
--
ALTER TABLE `clientem`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `empleadom`
--
ALTER TABLE `empleadom`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indexes for table `repartidorm`
--
ALTER TABLE `repartidorm`
  ADD PRIMARY KEY (`idrepartidor`);

--
-- Indexes for table `ventam`
--
ALTER TABLE `ventam`
  ADD PRIMARY KEY (`idventa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientem`
--
ALTER TABLE `clientem`
  MODIFY `idcliente` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleadom`
--
ALTER TABLE `empleadom`
  MODIFY `idempleado` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repartidorm`
--
ALTER TABLE `repartidorm`
  MODIFY `idrepartidor` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ventam`
--
ALTER TABLE `ventam`
  MODIFY `idventa` int(7) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
