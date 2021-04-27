-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 10:14 PM
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
-- Database: `empresa_xpto`
--

-- --------------------------------------------------------

--
-- Table structure for table `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario_entrada` time NOT NULL,
  `horario_saida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `id_usuario`, `data`, `horario_entrada`, `horario_saida`) VALUES
(2, 1, '2021-04-26', '06:00:00', '18:00:00'),
(3, 2, '2021-04-26', '05:00:00', '14:00:00'),
(4, 4, '2021-04-25', '05:00:00', '18:00:00'),
(5, 3, '2021-04-25', '05:00:00', '14:00:00'),
(7, 6, '2021-04-26', '01:00:00', '21:00:00'),
(8, 4, '2021-04-04', '08:00:00', '18:10:00'),
(9, 12, '2021-04-19', '04:00:00', '20:00:00'),
(10, 3, '2021-01-01', '01:00:00', '22:00:00'),
(11, 1, '2021-04-01', '04:00:00', '13:00:00'),
(13, 14, '2021-02-01', '05:00:00', '12:00:00'),
(14, 1, '2017-01-02', '12:00:00', '20:00:00'),
(15, 10, '2019-04-01', '05:00:00', '11:00:00'),
(16, 9, '2017-05-02', '07:00:00', '13:00:00'),
(17, 12, '2018-06-02', '04:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Andriw', 'filipefonsequinha@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Filipe', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'João', 'joao@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Pedro Lopes', 'pedro@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Jorge Lacerda', 'jorge@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Lucas da Silva', 'lucas@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Juca Bala', 'juca@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Gabriel Monteiro', 'gabriel@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'Bruno Garcia', 'bruno@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'Eloisa Leonardo', 'eloisa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'Julia Leonardo', 'julia@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Carlos Vailati', 'carlos@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Ruan Fonseca', 'ruan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Francisco Pereira', 'francisco@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'Higor Jose', 'higor@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'Bruno Ferreira', 'brunof@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'Fernando Sorocaba', 'fernando@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 'João Victor Boll', 'joao1@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
