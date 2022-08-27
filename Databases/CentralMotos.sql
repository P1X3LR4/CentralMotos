-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10-Dez-2020 às 16:49
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `CentralMotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ALUGUEIS`
--

CREATE TABLE `ALUGUEIS` (
  `id` int(11) NOT NULL,
  `NomeCliente` text NOT NULL,
  `Marca` text NOT NULL,
  `Modelo` text NOT NULL,
  `DataHoraAluguel` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `CLIENTES`
--

CREATE TABLE `CLIENTES` (
  `id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `CPF` text NOT NULL,
  `Telefone` text NOT NULL,
  `Email` text NOT NULL,
  `Senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `FUNCIONARIOS`
--

CREATE TABLE `FUNCIONARIOS` (
  `id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Telefone` text NOT NULL,
  `Email` text NOT NULL,
  `CPF` text NOT NULL,
  `Idade` text NOT NULL,
  `Username` text NOT NULL,
  `Senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ALUGUEIS`
--
ALTER TABLE `ALUGUEIS`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `CLIENTES`
--
ALTER TABLE `CLIENTES`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `FUNCIONARIOS`
--
ALTER TABLE `FUNCIONARIOS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ALUGUEIS`
--
ALTER TABLE `ALUGUEIS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `CLIENTES`
--
ALTER TABLE `CLIENTES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `FUNCIONARIOS`
--
ALTER TABLE `FUNCIONARIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
