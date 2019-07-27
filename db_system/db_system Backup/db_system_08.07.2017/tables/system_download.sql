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
-- Estrutura para tabela `system_download`
--

CREATE TABLE IF NOT EXISTS `system_download` (
  `system_download_attribute` varchar(45) NOT NULL DEFAULT '0',
  `system_download_date` date NOT NULL DEFAULT '0000-00-00',
  `system_download_number` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `system_download`
--

INSERT INTO `system_download` (`system_download_attribute`, `system_download_date`, `system_download_number`) VALUES
('WControl', '2017-06-16', 4293),
('TurControl', '2017-06-16', 107),
('WouChat', '2017-06-01', 1355),
('WouCrypt', '2017-06-01', 365),
('Software', '2017-06-17', 41);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `system_download`
--
ALTER TABLE `system_download`
 ADD PRIMARY KEY (`system_download_attribute`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
