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
-- Estrutura para tabela `desktop_validation`
--

CREATE TABLE IF NOT EXISTS `desktop_validation` (
`id_desktop_validation` int(11) NOT NULL,
  `id_desktop_software` int(11) NOT NULL,
  `id_system_user` int(11) NOT NULL,
  `desktop_validation_serial` varchar(100) DEFAULT NULL,
  `desktop_validation_status` varchar(45) DEFAULT NULL,
  `desktop_validation_activation` varchar(45) DEFAULT NULL,
  `desktop_validation_	transaction` varchar(100) DEFAULT NULL,
  `desktop_validation_datetime` datetime DEFAULT NULL,
  `desktop_validation_system` varchar(100) DEFAULT NULL,
  `desktop_validation_systemtype` varchar(45) DEFAULT NULL,
  `desktop_validation_username` varchar(45) DEFAULT NULL,
  `desktop_validation_version` varchar(45) DEFAULT NULL,
  `desktop_validation_ip` varchar(45) DEFAULT NULL,
  `desktop_validation_processor` varchar(45) DEFAULT NULL,
  `desktop_validation_rammemory` varchar(45) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Fazendo dump de dados para tabela `desktop_validation`
--

INSERT INTO `desktop_validation` (`id_desktop_validation`, `id_desktop_software`, `id_system_user`, `desktop_validation_serial`, `desktop_validation_status`, `desktop_validation_activation`, `desktop_validation_	transaction`, `desktop_validation_datetime`, `desktop_validation_system`, `desktop_validation_systemtype`, `desktop_validation_username`, `desktop_validation_version`, `desktop_validation_ip`, `desktop_validation_processor`, `desktop_validation_rammemory`) VALUES
(1, 3, 1, '0000-0000-0000-0000', 'TRUE', 'FALSE', NULL, '2017-06-12 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 2, '7VL3-FLAG-R2C6-JF84', 'TRUE', 'TRUE', NULL, '2017-06-12 19:50:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 2, 'XXXX-XXXX-XXXX-XXXX', 'FALSE', 'FALSE', NULL, '2017-06-12 20:09:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 2, 'GFTO-3JHR-UMS9-L1QU', 'TRUE', 'FALSE', NULL, '2017-06-13 01:01:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 3, 2, '9GNR-HFY9-WT0C-35DH', 'TRUE', 'FALSE', NULL, '2017-06-13 01:01:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 3, 'GHI8-ZX7K-E3ZN-FOJC', 'TRUE', 'FALSE', NULL, '2017-06-14 03:18:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 3, 'XXXX-XXXX-XXXX-XXXX', 'FALSE', 'FALSE', NULL, '2017-06-14 17:33:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 3, 1, 'G5LY-MVLB-UWBS-DJ9O', 'TRUE', 'FALSE', NULL, '2017-06-15 22:11:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `desktop_validation`
--
ALTER TABLE `desktop_validation`
 ADD PRIMARY KEY (`id_desktop_validation`), ADD KEY `fk_desktop_validation_desktop_software1_idx` (`id_desktop_software`), ADD KEY `fk_desktop_validation_system_user1_idx` (`id_system_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `desktop_validation`
--
ALTER TABLE `desktop_validation`
MODIFY `id_desktop_validation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
