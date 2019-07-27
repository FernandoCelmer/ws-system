-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 10.129.76.12
-- Tempo de geração: 08/07/2017 às 16:10
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
-- Estrutura para tabela `support_category`
--

CREATE TABLE IF NOT EXISTS `support_category` (
`id_support_category` int(11) NOT NULL,
  `support_category_attribute` varchar(45) DEFAULT NULL,
  `support_category_description` varchar(100) DEFAULT NULL,
  `support_category_status` varchar(45) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `support_category`
--

INSERT INTO `support_category` (`id_support_category`, `support_category_attribute`, `support_category_description`, `support_category_status`) VALUES
(1, 'Suporte Tecnico', NULL, 'TRUE'),
(2, 'Financeiro', NULL, 'TRUE'),
(3, 'Reporte de Erros', NULL, 'TRUE'),
(4, 'Outro', NULL, 'TRUE');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `support_category`
--
ALTER TABLE `support_category`
 ADD PRIMARY KEY (`id_support_category`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `support_category`
--
ALTER TABLE `support_category`
MODIFY `id_support_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
