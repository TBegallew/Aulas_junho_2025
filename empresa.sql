-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jul-2025 às 19:50
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `cod_dep` int(11) NOT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `localizacao` varchar(27) DEFAULT NULL,
  `codigofun_ger` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`cod_dep`, `nome`, `localizacao`, `codigofun_ger`) VALUES
(1, 'RH', '2º andar sala 13', 1),
(2, 'Financeiro', '3º andar sala 34', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cod_fun` int(11) NOT NULL,
  `cod_dep` int(11) NOT NULL,
  `primeironome` varchar(20) DEFAULT NULL,
  `segundonome` varchar(20) DEFAULT NULL,
  `ultimonome` varchar(20) DEFAULT NULL,
  `datanasci` date DEFAULT NULL,
  `cpf` bigint(20) DEFAULT NULL,
  `rg` bigint(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `fone` bigint(20) DEFAULT NULL,
  `funcao` varchar(20) DEFAULT NULL,
  `salario` decimal(8,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`cod_fun`, `cod_dep`, `primeironome`, `segundonome`, `ultimonome`, `datanasci`, `cpf`, `rg`, `endereco`, `cep`, `cidade`, `fone`, `funcao`, `salario`) VALUES
(1, 1, 'Genésio', 'Silva', 'Mendes', '2000-05-05', 123456, 313113, 'Rua General Maximus, 99', 84053440, 'Ponta Grossa', 42999887777, ' Gerente', '12000.50'),
(2, 1, 'João', 'Manoel', 'Costa', '2005-07-05', 654321, 422442, 'Rua Paula Xavier, 88', 840455010, 'Ponta Grossa', 42999778888, ' Funcionário', '7000.00'),
(3, 1, 'Maria', 'Julia', 'Moura', '2004-10-20', 124365, 234354, 'Rua Maria de Chargas, 55', 2147483647, 'Ponta Grossa', 429997558989, ' Funcionário', '7000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`cod_dep`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cod_fun`),
  ADD KEY `cod_dep` (`cod_dep`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
