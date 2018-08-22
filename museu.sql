-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jun-2017 às 00:13
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `museu`
--

CREATE TABLE `museu` (
  `idmuseu` int(11) NOT NULL,
  `nomemuseu` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `museu`
--

INSERT INTO `museu` (`idmuseu`, `nomemuseu`, `latitude`, `longitude`) VALUES
(1, 'Museu de Arte de Sao Paulo Assis Chateaubriand', '-23.561409', '-46.655882'),
(2, 'Pinacoteca do Estado de Sao Paulo', '-23.534257', '-46.633982'),
(3, 'Museu da Imigracao do Estado de Sao Paulo', '-23.549715', '-46.612694'),
(4, 'Memorial da America Latina', '-23.526789', '-46.664302'),
(5, 'Museu Catavento - Espaco Cultural da Ciencia', '-23.543895', '-46.627749'),
(6, 'Museu de Microbiologia do Instituto Butantan', '-23.566333', '-46.718629');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`) VALUES
(1, 'ariadne', 'ari@gmail.com', '123456'),
(2, 'teste', 'teste@teste.com', 'teste'),
(29, 'view', 'view@gmail.com', '123456'),
(30, 'ariadne', 'aricandidolira@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `museu`
--
ALTER TABLE `museu`
  ADD PRIMARY KEY (`idmuseu`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `museu`
--
ALTER TABLE `museu`
  MODIFY `idmuseu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
