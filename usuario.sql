-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jul-2018 às 14:41
-- Versão do servidor: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `descricao`) VALUES
(1, 'AndrÃ© Luiz Macedo de Assis', 'andredemcd@hotmail.com', '984061146', 'teste'),
(3, 'Paula', 'Paula@gmail.com', '999000234', 'teste3'),
(6, 'Jones', 'jones@email.com', '999000234', 'teste4'),
(17, 'Anthony', 'anthony@email.com', '984061146', 'teste18'),
(24, 'pedro', 'pedro@email.com', '999000234', 'Alterando dados do usuÃ¡rio'),
(32, 'Junior', 'junior@email.com', '984061146', 'teste 30'),
(33, 'Dulce Medeiros', 'dulcemedeiros13@gmail.com', '999000234', 'testando  cadastro'),
(34, 'Marcela', 'marcela@email.com', '999000234', 'testando  cadastro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
