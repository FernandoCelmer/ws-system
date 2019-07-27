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
-- Estrutura para tabela `desktop_software`
--

CREATE TABLE IF NOT EXISTS `desktop_software` (
`id_desktop_software` int(11) NOT NULL,
  `desktop_software_attribute` varchar(45) DEFAULT NULL,
  `desktop_software_description` varchar(45) DEFAULT NULL,
  `desktop_software_status` varchar(45) DEFAULT NULL,
  `desktop_software_version` varchar(45) DEFAULT NULL,
  `desktop_software_message` varchar(45) DEFAULT NULL,
  `desktop_software_link` varchar(45) DEFAULT NULL,
  `desktop_software_value` varchar(45) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `desktop_software`
--

INSERT INTO `desktop_software` (`id_desktop_software`, `desktop_software_attribute`, `desktop_software_description`, `desktop_software_status`, `desktop_software_version`, `desktop_software_message`, `desktop_software_link`, `desktop_software_value`) VALUES
(1, 'TurControl', 'Agendamento de Viagens', 'TRUE', '2.5', NULL, NULL, NULL),
(2, 'WControl', 'Controle Comercial', 'TRUE', '3.0', NULL, NULL, NULL),
(3, 'WouSoftware', 'Teste', 'TRUE', '2.5', '', 'www.wousoftware.com', 'Upgrade');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `desktop_software`
--
ALTER TABLE `desktop_software`
 ADD PRIMARY KEY (`id_desktop_software`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `desktop_software`
--
ALTER TABLE `desktop_software`
MODIFY `id_desktop_software` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
