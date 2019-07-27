-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 10.129.76.12
-- Tempo de geração: 08/07/2017 às 16:09
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `system_log`
--

CREATE TABLE IF NOT EXISTS `system_log` (
`id_system_log` int(11) NOT NULL,
  `id_system_user` int(11) NOT NULL,
  `system_log_datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `system_user`
--

CREATE TABLE IF NOT EXISTS `system_user` (
`id_system_user` int(5) NOT NULL,
  `system_user_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `system_user_password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `system_user_level` enum('0','1','2','3','4','5') CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `system_user_status` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `system_user_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `system_user_phone` varchar(21) CHARACTER SET utf8 DEFAULT NULL,
  `system_user_code` varchar(21) CHARACTER SET utf8 DEFAULT '000.000.000-00',
  `system_user_date` varchar(21) DEFAULT NULL,
  `system_user_image` blob,
  `system_user_date_register` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `system_user_date_login` datetime DEFAULT '0000-00-00 00:00:00',
  `system_user_ip` varchar(100) CHARACTER SET utf8 DEFAULT '',
  `system_user_text` longtext
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Fazendo dump de dados para tabela `system_user`
--

INSERT INTO `system_user` (`id_system_user`, `system_user_email`, `system_user_password`, `system_user_level`, `system_user_status`, `system_user_name`, `system_user_phone`, `system_user_code`, `system_user_date`, `system_user_image`, `system_user_date_register`, `system_user_date_login`, `system_user_ip`, `system_user_text`) VALUES
(1, 'wousoftware@gmail.com', '3b9dd8dfe48b070afbba9cf12325b7ef', '1', '1', 'ADMINISTRADOR', '00-00000-0000', '000.000.000-00', '0000-00-00', NULL, '0000-00-00 00:00:00', '2017-07-08 02:44:53', '000.000.000.000', NULL),
(2, 'fernandocelmer@gmail.com', 'b742a7298168189a7a126121d101a928', '0', '1', 'FERNANDO', '00-00000-0000', '000.000.000-00', '0000-00-00', NULL, '0000-00-00 00:00:00', '2017-06-30 03:13:07', '191.5.238.191', NULL),
(3, 'user@gmail.com', 'b742a7298168189a7a126121d101a928', '0', '1', 'USER', '', '', '', NULL, '0000-00-00 00:00:00', '2017-06-14 17:33:12', '191.5.238.233', NULL),
(4, 'paulosilvamaceio@gmail.com', 'SENHA', '0', '1', 'PAULO SILVA', '82-9888-67250', '474.896.344-15', '1967-04-28', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(5, 'junior_barcellos@hotmail.com', 'SENHA', '0', '1', 'JUNIOR BARCELLOS', '00-8277-8869', '002.908.990-26', '1983-05-10', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(6, 'jfjautomotivo@hotmail.com', 'SENHA', '0', '1', 'GABRIELA CAMILA CASS', '16-9939-101', '431.275.078-52', '1995-06-25', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(7, 'erivansilva33@bol.com.br', 'SENHA', '0', '1', 'RAIMUNDO ERIVAN OLIVEIRA DA SILVA', '85-3497-7557', '224.058.363-00', '1962-12-25', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(8, 'linoufpe@gmail.com', 'SENHA', '0', '1', 'NIELITON JANUARIO LINO', '81-8260-0852', '115.624.654-73', '1997-04-07', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(9, 'carloshenriqueheinz@gmail.com', 'SENHA', '0', '1', 'CARLOS HENRIQUE P. LIMA', '98-9873-74171', '123.456.789-00', '1993-02-12', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(10, 'leo_mendes10@hotmail.com.br', 'SENHA', '0', '1', 'LEOANARDO MENDES', '41-9722-3378', '086.456.449-08', '1994-04-13', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(11, 'lan_imperial1@hotmail.com', 'SENHA', '0', '1', 'EVERTON DA SILVA E SILVA', '92-9840-29256', '524.555.992-72', '1983-12-30', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(12, 'designcomputadores@hotmail.com', 'SENHA', '0', '1', 'EDER DREGER DOS SANTOS', '96-7909-445', '824.882.075-00', '1982-07-02', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(13, 'gelomixcubos@gmail.com', 'SENHA', '0', '1', 'THIAGO', '19-9988-71443', '281.202.528-00', '1980-09-16', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(14, 'alr_oliveira@hotmail.com', 'SENHA', '0', '1', 'PAULO OLIVEIRA', '84-3321-6947', '027.157.156-89', '1982-03-24', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(15, 'Joealsoouza30@gmail.com', 'SENHA', '0', '1', 'JOEL SANTOS DE SOUZA', '51-9728-4812', '661.616.220-68', '1970-06-30', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '187.4.30.151', NULL),
(16, 'glesianonf@hotmail.com', 'SENHA', '0', '1', 'GLESIANO', '34-9794-8430', '487.983.534-03', '1983-01-01', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(17, 'rjlages25@yahoo.com.br', 'SENHA', '0', '1', 'RICARDO JULIO DE MIRANDA LAGES', '33-9888-40091', '096.546.107-60', '1980-11-28', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(18, 'n.ideias@oulook.com', 'SENHA', '0', '1', 'FABIANO DOS SANTOS BARANHUK', '41-9613-0882', '056.993.459-14', '1986-12-27', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(19, 'taynaralimabernardesdesa123@gmail.com', 'SENHA', '0', '1', 'TAYNARA LIMA', '31-9950-28428', '118.844.176-04', '1997-10-01', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(20, 'valdoberto10@bol.com.br', 'SENHA', '0', '1', 'VALDOBERTO DA SILVA', '75-3024-5447', '204.097.375-34', '1960-02-10', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(21, 'bellcezario@gmail.com', 'SENHA', '0', '1', 'GELSEMBERG CEZ', '84-9818-42428', '967.924.694-91', '1976-02-12', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(22, 'miguel2santo@hotmail.com', 'SENHA', '0', '1', 'MIGUEL JOSE DOS SANTOS', '42-9108-5228', '035.567.539-01', '1970-09-29', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(23, 'cassiob29@gmail.com', 'SENHA', '0', '1', 'LUIZ C', '51-3022-2233', '013.192.920-89', '1976-03-11', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(24, 'deleilopes2010@hotmail.com', 'SENHA', '0', '1', 'DELEI LOPES DE FARIA', '32-9199-8530', '052.067.066-39', '1982-12-11', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(25, 'greenlot@live.com', 'SENHA', '0', '1', 'THIAGO SILVEIRA LINS DE ARAUJO', '53-9167-7539', '026.141.760-60', '1992-07-15', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(26, 'eclipse_games_@hotmail.com', 'SENHA', '0', '1', 'FABIO', '14-9882-74746', '219.369.898-83', '1982-07-18', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(27, 'abelmuzy@hotmail.com', 'SENHA', '0', '1', 'ABEL MUZY DE OLIVEIRA', '22-2771-7980', '955.570.407-49', '1966-10-24', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(28, 'kaic10@hotmail.com', 'SENHA', '0', '1', 'SAMUEL KAIC COSTA REZENDE', '94-9917-59484', '031.415.455-22', '1997-11-11', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(29, 'zapp.advice@gmail.com', 'SENHA', '0', '1', 'IVERALDO TOLEDO', '95-5909-273', '000.000.000-00', '1971-05-04', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '201.6.65.128', NULL),
(30, 'p.vfilho@hotmail.com', 'SENHA', '0', '1', 'VENILSON RIBEIRO FILHO', '31-9933-66005', '000.000.000-00', '1989-02-18', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '186.206.146.62', NULL),
(31, 'azevedojr@msn.com', 'SENHA', '0', '1', 'OSMAR AZEVEDO', '13-9918-66321', '000.000.000-00', '1978-12-21', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '179.215.124.252', NULL),
(32, 'thata._.rosa@hotmail.com', 'SENHA', '0', '1', 'THAIS ROSA', '35-9998-05456', '000.000.000-00', '1992-07-15', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '189.13.182.239', NULL),
(33, 'carlosdrey@hotmail.com.br', 'SENHA', '0', '1', 'CARLOS DREY', '99-9811-02033', '000.000.000-00', '1974-10-03', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '187.60.126.5', NULL),
(34, 'shadrack.sud@gmail.com', 'SENHA', '0', '1', 'RODRIGO ROSA SILVEIRA', '53-8466-3168', '000.000.000-00', '1989-06-27', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '189.114.102.55', NULL),
(35, 'eltoncostapol@gmail.com', 'SENHA', '0', '1', 'ECS INFORM', '63-9942-7158', '000.000.000-00', '2011-08-11', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(36, 'mariaemilia56@hotmail.com', 'SENHA', '0', '1', 'MARIA EMILIA EMILIA', '03-1308-86937', '000.000.000-00', '1975-01-01', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '187.58.196.208', NULL),
(37, 'aline.dospassos@hotmail.com', 'SENHA', '0', '1', 'ALINE DOS PASSOS CONCEI', '67-9116-7046', '000.000.000-00', '1991-12-22', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '191.253.188.64', NULL),
(38, 'danielartesgames@hotmail.com', 'SENHA', '0', '1', 'DANIEL DOS SANTOS CAMPOS', '75-9913-08104', '000.000.000-00', '1986-01-14', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '131.0.244.6', NULL),
(39, 'hugo.freiitas@live.com', 'SENHA', '0', '1', 'HUGO FREITAS', '85-9837-2043', '000.000.000-00', '1993-07-23', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '191.5.238.201', NULL),
(40, 'salocao@gmail.com', 'SENHA', '0', '1', 'SALOMÃ£O CARLOS SILVEIRA', '98-9088-344', '000.000.000-00', '1978-06-07', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(41, 'nnnsvc2016@gmail.com', 'SENHA', '0', '1', 'ARNOLD JOSE', '21-3358-9665', '000.000.000-00', '1990-03-21', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(42, 'c.ricardodnz@hotmail.com', 'SENHA', '0', '1', 'RICARDO DIONIZIO', '35-9911-98955', '000.000.000-00', '2016-02-11', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '186.193.135.247', NULL),
(43, 'nosnanet@hotmail.com', 'SENHA', '0', '1', 'JESSICA LISBOA', '21-9907-56356', '000.000.000-00', '1992-04-10', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(44, 'davidemoraesbarros@hotmail.com', 'SENHA', '0', '1', 'JOSE LISBOA', '21-9901-53966', '000.000.000-00', '1990-04-19', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '186.237.60.78', NULL),
(45, 'ferrari.com30@gmail.com', 'SENHA', '0', '1', 'EDERSON FARIAS JOENCK', '47-9688-8950', '000.000.000-00', '1982-12-09', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '201.47.76.38', NULL),
(46, 'bocao_bsb@hotmail.com', 'SENHA', '0', '1', 'WILLIAM ONLAY', '61-3323-5524', '000.000.000-00', '1987-05-24', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '187.114.254.194', NULL),
(47, 'alder.cacaroto@hotmail.com', 'SENHA', '0', '1', 'GLEYCE BENEZAR', '92-3681-1209', '000.000.000-00', '1990-07-07', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(48, 'studiocar.automotiva@gmail.com	', 'SENHA', '0', '1', 'FERNANDO WISCH', '11-2715-7944', '000.000.000-00', '1995-04-25', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '187.66.0.228', NULL),
(49, 'teodoro.j.oliveira@gmail.com', 'SENHA', '0', '1', 'TEODORO JOSE DE OLIVEIRA', '12-8878-3674', '000.000.000-00', '1964-03-12', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '179.223.30.106', NULL),
(50, 'aparicioferreira@uol.com.br', 'SENHA', '0', '1', 'APARICIO F. LIMA', '69-3583-1116', '000.000.000-00', '1968-06-03', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '177.44.217.50', 'Entrou em contato recentemente solicitando um software.'),
(51, 'jkulembe@gmail.com', 'SENHA', '0', '1', 'JO GABRIEL', '93-1387-690', '000.000.000-00', '1990-03-20', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '41.63.189.200', NULL),
(52, 'jeff.constantino@live.com', 'SENHA', '0', '1', 'JEFFERSON CONSTANTINO GUIMAR', '64-9306-6969', '000.000.000-00', '1980-11-06', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '177.87.22.181', NULL),
(53, 'lelocaetano@hotmail.com', 'SENHA', '0', '1', 'LELLO CAETANO', '13-9880-16495', '000.000.000-00', '1969-09-30', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '179.97.159.78', NULL),
(54, 'everson@eversonmachado.com.br', 'SENHA', '0', '1', 'EVERSON MACHADO', '11-3721-8649', '000.000.000-00', '1974-06-26', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(55, 'meridionalrecapagem@gmail.com', 'SENHA', '0', '1', 'AILTON ZANIN DE MELLO', '17-9974-66681', '000.000.000-00', '1966-12-20', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '138.36.194.47', NULL),
(56, 'artpiercingtattoo@gmail.com', 'SENHA', '0', '1', 'ART PIERCING TATTOO	', '21-9695-58214', '000.000.000-00', '2016-04-13', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '179.34.118.199', NULL),
(57, 'edgarviaemail@gmail.com', 'SENHA', '0', '1', 'EDGAR ALMEIDA', '31-8579-8518', '000.000.000-00', '1973-10-21', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '201.17.158.69', NULL),
(58, 'acasohp@gmail.com', 'SENHA', '0', '1', 'EVERSON MARCELO', '00-00000-0000', '000.000.000-00', '1982-01-20', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '201.74.142.98', NULL),
(59, 'noemisistema@terra.com.br', 'SENHA', '0', '1', 'NOEMI OLIVEIRA', '11-9945-49934', '000.000.000-00', '2016-09-29', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '000.000.000.000', NULL),
(60, 'piratinigp@gmail.com', '1fc9fda0d7b2b09b80bcbbe9ee495e8a', '0', '1', 'ROBERTO PORTO', '53 32572649', '08031956000162', '2017-06-21', NULL, '2017-06-13 18:58:24', '2017-06-13 19:00:18', '189.114.106.102', NULL),
(63, 'idmjunioor@gmail.com', '65f6fd36974e8b8d4e55bfcb5996445e', '0', '1', 'IRISNALDO DIAS MELO JUNIOR', '(99) 982283889', '03505209333', '1990-07-24', NULL, '2017-07-02 19:24:12', '2017-07-02 19:26:43', '177.185.129.138', NULL),
(64, 'nhdbhd@hotmail.com', 'efaee2c1ff899c2ab419ba81bc011f38', '0', '0', 'ENZO SOUZA', '3838000099', '00000100203', '1999-02-10', NULL, '2017-07-04 20:00:06', '0000-00-00 00:00:00', '177.93.114.137', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `web_account`
--

CREATE TABLE IF NOT EXISTS `web_account` (
`id_web_account` int(11) NOT NULL,
  `web_account_status` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `web_module`
--

CREATE TABLE IF NOT EXISTS `web_module` (
`id_web_module` int(11) NOT NULL,
  `web_module_attribute` varchar(45) DEFAULT NULL,
  `web_module_description` varchar(100) DEFAULT NULL,
  `web_module_status` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `web_service`
--

CREATE TABLE IF NOT EXISTS `web_service` (
`id_web_global_account` int(11) NOT NULL,
  `id_web_module` int(11) NOT NULL,
  `id_web_account` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Índices de tabela `desktop_software`
--
ALTER TABLE `desktop_software`
 ADD PRIMARY KEY (`id_desktop_software`);

--
-- Índices de tabela `desktop_validation`
--
ALTER TABLE `desktop_validation`
 ADD PRIMARY KEY (`id_desktop_validation`), ADD KEY `fk_desktop_validation_desktop_software1_idx` (`id_desktop_software`), ADD KEY `fk_desktop_validation_system_user1_idx` (`id_system_user`);

--
-- Índices de tabela `support_category`
--
ALTER TABLE `support_category`
 ADD PRIMARY KEY (`id_support_category`);

--
-- Índices de tabela `support_message`
--
ALTER TABLE `support_message`
 ADD PRIMARY KEY (`id_support_message`), ADD KEY `fk_support_message_support_ticket1_idx` (`id_support_ticket`), ADD KEY `fk_support_message_system_user1_idx` (`id_system_user`);

--
-- Índices de tabela `support_ticket`
--
ALTER TABLE `support_ticket`
 ADD PRIMARY KEY (`id_support_ticket`), ADD KEY `fk_support_ticket_support_category1_idx` (`id_support_category`), ADD KEY `fk_support_ticket_system_user1_idx` (`id_system_user`);

--
-- Índices de tabela `system_download`
--
ALTER TABLE `system_download`
 ADD PRIMARY KEY (`system_download_attribute`);

--
-- Índices de tabela `system_feedback`
--
ALTER TABLE `system_feedback`
 ADD PRIMARY KEY (`system_feedback_attribute`);

--
-- Índices de tabela `system_log`
--
ALTER TABLE `system_log`
 ADD PRIMARY KEY (`id_system_log`), ADD KEY `fk_system_log_system_user1_idx` (`id_system_user`);

--
-- Índices de tabela `system_user`
--
ALTER TABLE `system_user`
 ADD PRIMARY KEY (`id_system_user`);

--
-- Índices de tabela `web_account`
--
ALTER TABLE `web_account`
 ADD PRIMARY KEY (`id_web_account`);

--
-- Índices de tabela `web_module`
--
ALTER TABLE `web_module`
 ADD PRIMARY KEY (`id_web_module`);

--
-- Índices de tabela `web_service`
--
ALTER TABLE `web_service`
 ADD PRIMARY KEY (`id_web_global_account`), ADD KEY `fk_web_global_account_web_software1_idx` (`id_web_module`), ADD KEY `fk_web_global_account_web_global1_idx` (`id_web_account`);

--
-- Índices de tabela `web_user`
--
ALTER TABLE `web_user`
 ADD PRIMARY KEY (`id_web_user`), ADD KEY `fk_web_user_system_user1_idx` (`id_system_user`), ADD KEY `fk_web_user_web_global1_idx` (`id_web_global`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `desktop_software`
--
ALTER TABLE `desktop_software`
MODIFY `id_desktop_software` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `desktop_validation`
--
ALTER TABLE `desktop_validation`
MODIFY `id_desktop_validation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `support_category`
--
ALTER TABLE `support_category`
MODIFY `id_support_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `support_message`
--
ALTER TABLE `support_message`
MODIFY `id_support_message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `support_ticket`
--
ALTER TABLE `support_ticket`
MODIFY `id_support_ticket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `system_log`
--
ALTER TABLE `system_log`
MODIFY `id_system_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `system_user`
--
ALTER TABLE `system_user`
MODIFY `id_system_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de tabela `web_account`
--
ALTER TABLE `web_account`
MODIFY `id_web_account` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `web_module`
--
ALTER TABLE `web_module`
MODIFY `id_web_module` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `web_service`
--
ALTER TABLE `web_service`
MODIFY `id_web_global_account` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `web_user`
--
ALTER TABLE `web_user`
MODIFY `id_web_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
