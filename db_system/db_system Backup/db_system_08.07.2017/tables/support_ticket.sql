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
-- Estrutura para tabela `support_ticket`
--

CREATE TABLE IF NOT EXISTS `support_ticket` (
`id_support_ticket` int(11) NOT NULL,
  `id_support_category` int(11) NOT NULL,
  `id_system_user` int(11) NOT NULL,
  `support_ticket_subject` varchar(45) DEFAULT NULL,
  `support_ticket_status` varchar(45) DEFAULT NULL,
  `support_ticket_datetime_open` datetime DEFAULT NULL,
  `support_ticket_datetime_close` datetime DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `support_ticket`
--

INSERT INTO `support_ticket` (`id_support_ticket`, `id_support_category`, `id_system_user`, `support_ticket_subject`, `support_ticket_status`, `support_ticket_datetime_open`, `support_ticket_datetime_close`) VALUES
(1, 1, 2, 'Help', 'TRUE', '2017-06-12 19:50:32', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `support_ticket`
--
ALTER TABLE `support_ticket`
 ADD PRIMARY KEY (`id_support_ticket`), ADD KEY `fk_support_ticket_support_category1_idx` (`id_support_category`), ADD KEY `fk_support_ticket_system_user1_idx` (`id_system_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `support_ticket`
--
ALTER TABLE `support_ticket`
MODIFY `id_support_ticket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
