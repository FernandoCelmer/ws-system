-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 10.129.76.12
-- Tempo de geração: 08/07/2017 às 16:11
-- Versão do servidor: 5.6.26-log
-- Versão do PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `db_system`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `system_feedback`
--

CREATE TABLE IF NOT EXISTS `system_feedback` (
  `system_feedback_attribute` varchar(45) NOT NULL DEFAULT '0',
  `system_feedback_date` date NOT NULL DEFAULT '0000-00-00',
  `system_feedback_number` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `system_feedback`
--

INSERT INTO `system_feedback` (`system_feedback_attribute`, `system_feedback_date`, `system_feedback_number`) VALUES
('Home', '2017-07-08', 7119),
('Sobre', '2017-07-03', 332),
('Contato', '2017-07-03', 515),
('Videos', '2017-07-05', 400),
('WControl', '2017-07-07', 1976),
('TurControl', '2017-07-06', 951);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `system_feedback`
--
ALTER TABLE `system_feedback`
 ADD PRIMARY KEY (`system_feedback_attribute`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
