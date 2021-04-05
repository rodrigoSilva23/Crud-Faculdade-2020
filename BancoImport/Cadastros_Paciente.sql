-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24-Nov-2020 às 03:49
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Cadastros_Paciente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `ID` int(11) NOT NULL,
  `CPF` bigint(11) DEFAULT NULL,
  `Nome_Completo` varchar(100) DEFAULT NULL,
  `RG` bigint(11) DEFAULT NULL,
  `Data_Nascimento` date DEFAULT NULL,
  `CEP` bigint(11) DEFAULT NULL,
  `Telefone` bigint(11) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Cartao_Sus` bigint(11) DEFAULT NULL,
  `Numero_Prontuario` bigint(11) DEFAULT NULL,
  `Alergias` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`ID`, `CPF`, `Nome_Completo`, `RG`, `Data_Nascimento`, `CEP`, `Telefone`, `Email`, `Cartao_Sus`, `Numero_Prontuario`, `Alergias`) VALUES
(1, 86016513563, 'RODRIGO DOS SANTOS SILVA', 454, '2020-11-06', 41342495, 456456, 'rodriguinho2456@gmail.com', 45645645, 6876, '123123'),
(3, 86015115606, 'RODRIGO DOS SANTOS SILVA', 4544454541, '2020-11-11', 48898154, 11512111561, 'rodriguinho2456@gmail.com', 14444894125, 56115651605, 'hjhggyb'),
(4, 86015115606, 'RODRIGO DOS SANTOS SILVA', 4544454541, '2020-11-11', 48898154, 11512111561, 'rodriguinho2456@gmail.com', 14444894125, 56115651605, 'hjhggyb'),
(5, 86015115606, 'RODRIGO DOS SANTOS SILVA', 4544454541, '2020-11-11', 48898154, 11512111561, 'rodriguinho2456@gmail.com', 14444894125, 56115651605, 'hjhggyb'),
(6, 86015115606, 'RODRIGO DOS SANTOS SILVA', 4544454541, '2020-11-11', 48898154, 11512111561, 'rodriguinho2456@gmail.com', 14444894125, 56115651605, 'hjhggyb'),
(7, 86015115606, 'RODRIGO DOS SANTOS SILVA', 4544454541, '2020-11-11', 48898154, 11512111561, 'rodriguinho2456@gmail.com', 14444894125, 56115651605, 'hjhggyb'),
(8, 86016412562, 'olaa sou eu!!!', 555989, '2020-11-13', 7869746, 7864534896, 'sdfgdfsgsd', 6786434237, 456456423, 'esrtertdfg'),
(9, 86016412562, 'olaa sou eu!!!', 555989, '2020-11-13', 7869746, 7864534896, 'sdfgdfsgsd', 6786434237, 456456423, 'esrtertdfg'),
(10, 86016412562, 'olaa sou eu!!!', 555989, '2020-11-13', 7869746, 7864534896, 'sdfgdfsgsd', 6786434237, 456456423, 'esrtertdfg'),
(11, 75016582451, 'ricardo oliveira', 8546214112, '2020-11-12', 51461144, 71955659566, 'rodriguinho2456@gmail.com', 51055123151, 11151854118, 'ahahahah');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
