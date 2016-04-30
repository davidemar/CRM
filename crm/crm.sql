-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2016 at 10:35 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`) VALUES
('david', 'david');

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `factura_id` varchar(6) NOT NULL DEFAULT '',
  `usuario_id` varchar(6) NOT NULL DEFAULT '',
  `orden_id` varchar(6) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
  `orden_id` varchar(6) NOT NULL,
  `idproduct` varchar(6) NOT NULL,
  `producto` varchar(20) NOT NULL,
  `usuario` varchar(6) NOT NULL,
  `impuesto` decimal(3,2) DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(9,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cant` decimal(6,2) DEFAULT NULL,
  `total` decimal(9,2) DEFAULT NULL,
  `costo_envio` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`orden_id`, `idproduct`, `producto`, `usuario`, `impuesto`, `precio`, `subtotal`, `fecha`, `cant`, `total`, `costo_envio`) VALUES
('1', '', '', 'mrilyn', '9.99', '100.00', '110.00', '2016-04-14', '1.00', '210.00', '100.00'),
('12', 'hazTub', 'hazTubular', 'mrilyn', '0.10', '10000.00', '11000.00', '2016-04-30', '1.00', '12000.00', '999.99'),
('13', 'hazTub', 'hazTubular', 'mrilyn', '0.10', '10000.00', '11000.00', '2016-04-30', '1.00', '12000.00', '999.99'),
('2', '', '', 'mrilyn', '9.99', '100.00', '110.00', '2016-04-13', '1.00', '210.00', '100.00'),
('3', '', '', 'mrilyn', '9.99', '100.00', '110.00', '2016-03-13', '1.00', '120000.00', '100.00'),
('4', '', '', 'LKNLK', '8.00', '9.00', '78.00', '2016-12-13', '7.00', '7.00', '2.00'),
('5', '', '', 'David', '9.99', '100.00', '110.40', '2016-07-15', '1.00', '310.40', '200.00'),
('6', '', '', 'LKNLK', '9.99', '21.00', '21.00', '2016-09-16', '100.00', '120000.00', '200.00'),
('7', '', 'hola', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('8', '', '', 'kjnkjn', '7.00', '87.00', '100.00', '2016-11-27', '600.00', '700.00', '80.00'),
('9', '', 'rodill', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `producto_id` varchar(6) NOT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `ncompania` varchar(15) DEFAULT NULL,
  `enstock` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`producto_id`, `precio`, `ncompania`, `enstock`) VALUES
('haztub', '10000.00', 'Asupplier', '200.00'),
('rodill', '50000.00', 'Asupplier', '200.00'),
('secEnd', '40000.00', 'Asupplier', '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `proveedor_id` varchar(6) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `horario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queja`
--

CREATE TABLE `queja` (
  `queja_id` varchar(6) DEFAULT NULL,
  `usuario_id` varchar(6) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `queja` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queja`
--

INSERT INTO `queja` (`queja_id`, `usuario_id`, `fecha`, `queja`) VALUES
('1', 'mrilyn', '2016-04-22', 'esta muy feo el sistema'),
('2', 'mrilyn', '2016-04-22', 'se ve mal'),
('3', 'fresen', '2016-04-22', 'feo sistema\r\n'),
('4', 'mrilyn', '2016-04-30', 'asdasdasdasd'),
('5', 'mrilyn', '2016-04-30', 'esta muy bonito'),
('6', 'mrilyn', '2016-04-30', 'esta muy bonito');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` varchar(6) NOT NULL,
  `ncompania` varchar(15) DEFAULT NULL,
  `contrasena` varchar(14) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pnombre` varchar(15) DEFAULT NULL,
  `papellido` varchar(15) DEFAULT NULL,
  `sapellido` varchar(15) DEFAULT NULL,
  `calle` varchar(10) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `colonia` varchar(10) DEFAULT NULL,
  `ciudad` varchar(15) DEFAULT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `ncompania`, `contrasena`, `email`, `pnombre`, `papellido`, `sapellido`, `calle`, `numero`, `colonia`, `ciudad`, `dia`) VALUES
('d1234', 'pemex', 'hola1234', 'jeje@hotmail.com', 'david', 'martinez', 'hernandez', 'oaxaca', 103, 'asda', 'lkasnd', '2016-01-14'),
('fabian', 'lknasd', 'hola', 'fbian@hotmail.com', 'lkansd', 'lknasd', 'lknasd', 'lknad', 4, 'lkansd', 'lknasda', '2016-02-09'),
('fresen', 'asd', 'hola', 'rlkansdq@hotmail.com', 'lkansd', 'lknasd', 'lknasd', ',nasd', 56, 'lknasd', 'lknasda', '2016-03-10'),
('jeje', 'lkansd', 'lknasd', 'jeje@hotmail.com', 'lkansd', 'lknasd', 'lknasd', 'kansd', 12, 'lkansd', 'lknasd', '2016-04-26'),
('lalo12', 'asda', 'lknasd', 'lalo@hotmail.com', 'lkansd', 'lknasd', 'lknasd', 'lknasd', 4, 'lknasd', 'lknasda', '2014-06-17'),
('mariel', 'zetas', 'hola', 'mariel@hotmail.com', 'alskdna', 'lknas', 'lkasd', 'lknasd', 145, 'lkasd', 'lknasda', '2016-04-20'),
('mrilyn', 'cdg', 'hola', 'marilyn@hotmail.com', 'marilyn', 'garcia', 'medina', 'morelos', 898, 'morelos', 'aldama', '2016-04-13'),
('tajr', 'lkansd', 'lknasd', 'lknasd@hotmail.com', 'lknasd', 'lknasd', 'lknasd', 'lknasd', 4, 'kansd', 'lknasda', '2016-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `vipUsuario`
--

CREATE TABLE `vipUsuario` (
  `usuarioid` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vipUsuario`
--

INSERT INTO `vipUsuario` (`usuarioid`) VALUES
('LKNLK'),
('mrilyn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`factura_id`,`usuario_id`,`orden_id`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`orden_id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indexes for table `vipUsuario`
--
ALTER TABLE `vipUsuario`
ADD PRIMARY KEY (`usuarioid`);
