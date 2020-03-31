-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03-Mar-2020 às 18:33
-- Versão do servidor: 10.2.25-MariaDB
-- versão do PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmontadora`
--

CREATE TABLE `tbmontadora` (
  `id` int(6) NOT NULL,
  `nomeMontadora` varchar(30) NOT NULL,
  `dt_inclusao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbmontadora`
--

INSERT INTO `tbmontadora` (`id`, `nomeMontadora`, `dt_inclusao`) VALUES
(1, 'FORDfggg', '2020-01-01'),
(7, 'Ferrari', '2020-03-02'),
(8, 'fgfdgdg', '2020-03-02'),
(9, 'teste2', '2020-03-03'),
(10, 'joao', '2020-03-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproprietario`
--

CREATE TABLE `tbproprietario` (
  `id` int(6) NOT NULL,
  `nomeProprietario` varchar(50) NOT NULL,
  `foneProprietario` varchar(30) NOT NULL,
  `emailProprietario` varchar(50) NOT NULL,
  `ufProprietario` char(2) NOT NULL,
  `cpnjcpf` varchar(20) NOT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipoveiculos`
--

CREATE TABLE `tbtipoveiculos` (
  `id` int(3) NOT NULL,
  `nomeTipo` varchar(30) NOT NULL,
  `dt_inclusao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbtipoveiculos`
--

INSERT INTO `tbtipoveiculos` (`id`, `nomeTipo`, `dt_inclusao`) VALUES
(1, 'Carro passeio', '2020-03-02'),
(2, 'Motos', '2020-03-02'),
(4, 'Caminhão', '2020-03-02'),
(6, 'dddddd', '2020-03-02'),
(7, 'cabecao', '2020-03-03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbmontadora`
--
ALTER TABLE `tbmontadora`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbproprietario`
--
ALTER TABLE `tbproprietario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbtipoveiculos`
--
ALTER TABLE `tbtipoveiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbmontadora`
--
ALTER TABLE `tbmontadora`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbproprietario`
--
ALTER TABLE `tbproprietario`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtipoveiculos`
--
ALTER TABLE `tbtipoveiculos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
