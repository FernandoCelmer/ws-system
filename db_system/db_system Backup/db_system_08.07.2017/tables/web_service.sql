-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 10.129.76.12
-- Tempo de geração: 08/07/2017 às 16:12
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
-- Estrutura para tabela `web_service`
--

CREATE TABLE IF NOT EXISTS `web_service` (
`id_web_global_account` int(11) NOT NULL,
  `id_web_module` int(11) NOT NULL,
  `id_web_account` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `web_service`
--
ALTER TABLE `web_service`
 ADD PRIMARY KEY (`id_web_global_account`), ADD KEY `fk_web_global_account_web_software1_idx` (`id_web_module`), ADD KEY `fk_web_global_account_web_global1_idx` (`id_web_account`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `web_service`
--
ALTER TABLE `web_service`
MODIFY `id_web_global_account` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
