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
-- Estrutura para tabela `support_message`
--

CREATE TABLE IF NOT EXISTS `support_message` (
`id_support_message` int(11) NOT NULL,
  `id_support_ticket` int(11) NOT NULL,
  `id_system_user` int(11) NOT NULL,
  `support_message` longtext,
  `support_message_file` blob,
  `support_message_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `support_message`
--
ALTER TABLE `support_message`
 ADD PRIMARY KEY (`id_support_message`), ADD KEY `fk_support_message_support_ticket1_idx` (`id_support_ticket`), ADD KEY `fk_support_message_system_user1_idx` (`id_system_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `support_message`
--
ALTER TABLE `support_message`
MODIFY `id_support_message` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
