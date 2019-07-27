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
-- Estrutura para tabela `web_user`
--

CREATE TABLE IF NOT EXISTS `web_user` (
`id_web_user` int(11) NOT NULL,
  `id_system_user` int(11) NOT NULL,
  `id_web_global` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `web_user`
--
ALTER TABLE `web_user`
 ADD PRIMARY KEY (`id_web_user`), ADD KEY `fk_web_user_system_user1_idx` (`id_system_user`), ADD KEY `fk_web_user_web_global1_idx` (`id_web_global`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `web_user`
--
ALTER TABLE `web_user`
MODIFY `id_web_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
