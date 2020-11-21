-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2018 at 12:55 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vibe_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `atendimento`
--

DROP TABLE IF EXISTS `atendimento`;
CREATE TABLE IF NOT EXISTS `atendimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comentario` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atendimento`
--

INSERT INTO `atendimento` (`id`, `Nome`, `Email`, `Comentario`) VALUES
(20, 'JoÃ£o Garcia', 'joao.garcia.vitor@hotmail.com', 'Ãºltimo teste de software'),
(19, 'caio silva', 'caio@email.com', 'comentario de teste de caio'),
(18, 'Pedro', 'pedro@email.com', 'comentario de teste de pedro');

-- --------------------------------------------------------

--
-- Table structure for table `contas`
--

DROP TABLE IF EXISTS `contas`;
CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contas`
--

INSERT INTO `contas` (`id`, `nome`, `valor`, `data`, `descricao`, `tipo`) VALUES
(1, 'Energia', 100, '2018-06-01', 'Conta de energia', 1),
(2, 'Venda de Cadernos', 175, '2018-06-02', 'Venda de cadernos ', 2),
(3, 'Emprestimo', 150, '2018-01-01', 'EmprÃ©stimo realizado', 1),
(4, 'Venda de Livros', 600, '2018-01-02', 'venda de livros para uma universidade', 2),
(5, 'Conta de telefone', 85, '2018-01-03', 'Conta de telefone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `empresaterceirizada`
--

DROP TABLE IF EXISTS `empresaterceirizada`;
CREATE TABLE IF NOT EXISTS `empresaterceirizada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Empresa` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` bigint(20) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Cep` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresaterceirizada`
--

INSERT INTO `empresaterceirizada` (`id`, `Nome_Empresa`, `Login`, `PASSWORD`, `Email`, `Telefone`, `Cidade`, `Endereco`, `Cep`) VALUES
(1, 'Conserta PC', 'conserta', '123', 'conserta_pc@terceirizada.com', 11988990011, 'city b', 'rua terc', 11111777),
(2, 'Formatacao', 'formatacao', '12345', 'formatacao@terceirizada.com', 88123456789, 'city a', 'rua 10', 22222444);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `nota` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nome`, `nota`, `comentario`) VALUES
(1, 'joao', 5, 'muito boasdfgsdfwesfasd'),
(2, 'pedro', 1, 'asdasssssssssssssssssssssssssssssssss'),
(3, 'pedro', 1, 'terrivel ssssssssssssssssssssssssssssss'),
(4, 'pedro', 3, 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(25) DEFAULT NULL,
  `Login` varchar(25) DEFAULT NULL,
  `PASSWORD` varchar(25) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` bigint(20) DEFAULT NULL,
  `Cidade` varchar(25) DEFAULT NULL,
  `Endereco` varchar(25) DEFAULT NULL,
  `Cep` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fornecedor`
--

INSERT INTO `fornecedor` (`ID`, `Nome`, `Login`, `PASSWORD`, `Email`, `Telefone`, `Cidade`, `Endereco`, `Cep`) VALUES
(3, 'Calculando', 'calcular', '123', 'calcular@fornecedor.com', 33003560178, 'city a', 'rua forn', '99999444'),
(2, 'Papel sustentavel', 'papel', '123', 'papel@fornecedor.com', 33002560178, 'city b', 'rua do papel', '99999111'),
(1, 'Caderno bons', 'caderno', '123', 'caderno@fornecedor.com', 33001560178, 'city a', 'rua america', '99999444'),
(4, 'Tintas Simples', 'tintas', '111', 'tintas_simples@fornecedor.com', 33004560178, 'city c', 'rua central', '88888444'),
(5, 'Tintas de Artistas', 'tintasa', '12345', 'tintas_de_artistas@fornecedor.com', 33005560178, 'city a', 'rua forn', '99999444'),
(6, 'Livro', 'livro', '123', 'livro@fornecedor.com', 33006560178, 'city b', 'rua sem endereco', '99999111'),
(7, 'Borrachas', 'borracha', '12345', 'borracha@fornecedor.com', 33007560178, 'city a', 'rua 78', '99999444');

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  `Salario` float NOT NULL,
  `Admissao` date NOT NULL,
  `Nascimento` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` bigint(20) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Cep` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`id`, `Nome`, `Login`, `PASSWORD`, `Cargo`, `Salario`, `Admissao`, `Nascimento`, `Email`, `Telefone`, `Cidade`, `Endereco`, `Cep`) VALUES
(4, 'Beatriz', 'fun beatriz', '12345', 'contador', 1600.23, '2012-01-02', '1989-01-01', 'beatriz@funcionario.com', 11111111111, 'city a', 'rua 02', 11111113),
(3, 'Vanessa', 'fun vanessa', '123', 'Atendente', 980, '2010-10-05', '1930-11-11', 'vanessa@funcionario.com', 12344444448, 'city c', 'rua 11', 22222222),
(2, 'Pedro', 'fun pedro', '123', 'Vendedor', 1350.03, '2010-02-01', '1998-01-30', 'pedro@funcionario.com', 99123456787, 'city a', 'rua 14', 38810000),
(1, 'JOAO VITOR GARCIA', 'fun', '123', 'Gerente', 2300.15, '2015-01-01', '1998-01-30', 'joao.garcia.vitor@hotmail.com', 99123456782, 'Rio ParanaÃ­ba', 'Rua Joaquim Lopes Da Silva, 207, Ap 201', 38810000),
(5, 'Joaquim', 'fun joaquim', '12345', 'Vendedor', 1350.03, '2017-01-01', '1980-01-01', 'joaquim@funcionario.com', 99123456789, 'city b', 'rua 10', 11111222);

-- --------------------------------------------------------

--
-- Table structure for table `orcamentos`
--

DROP TABLE IF EXISTS `orcamentos`;
CREATE TABLE IF NOT EXISTS `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `nomeServico` varchar(50) NOT NULL,
  `dataSolicitada` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orcamentos`
--

INSERT INTO `orcamentos` (`id`, `login`, `nomeServico`, `dataSolicitada`, `status`) VALUES
(6, 'ana', 'Limpeza notebook', '2018-06-25', 0),
(5, 'joao', 'Limpeza completa', '2018-06-25', 0),
(7, 'joao', 'Remocao de virus', '2018-06-25', 0),
(8, 'joao', 'Remocao de virus', '2018-06-25', 0),
(17, 'joao', 'Limpeza completa', '2018-06-26', 0),
(10, 'ana', 'Instalacao de Software', '2018-06-25', 0),
(11, 'pedro', 'Troca de Sistema Operativo', '2018-06-25', 1),
(12, 'joao', 'Instalacao de Software', '2018-06-25', 1),
(13, 'joao', 'Remocao de virus', '2018-06-25', 3),
(14, 'joao', 'Formatacao Completa', '2018-06-25', 1),
(15, 'joao', 'Formatacao Completa', '2018-06-25', 1),
(18, 'joao', 'Troca de Sistema Operativo', '2018-06-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`, `descricao`) VALUES
(1, 'Caderno receitas', 11, '4506462997_78b71315a5_z.jpg', 'Neste caderno vocÃª podera escrever as suas receitas de seus amigos da sua mÃ£e e de quem vocÃª quiser'),
(2, 'calculadora', 25, '961803221_35814c3ab5_o.jpg', 'Esta calculadora Ã© simples mais te salva nas provas'),
(3, 'caneta preta', 5, '16345351939_09daed5209_z.jpg', 'Caneta para todas as ocasiÃµes'),
(4, 'agenda', 16, '3714779543_c0d882da94_o.jpg', 'Nesta agenda vocÃª pode escrever todos os seus compromissos e o que mais desejar.'),
(5, 'Tintas', 200, '456850323_def896ddb8_o.jpg', 'Tintas de altÃ­ssima qualidade, feitas para vocÃª'),
(6, 'Album', 400, '6912689160_7ebaa6978e_o.png', 'Album de luxo'),
(7, 'caneta tinteiro', 160, '21841621439_55180b1fa4_z.jpg', 'Cores vivas, feita de material resistente'),
(8, 'Caderno Capa dura', 35, '7415405900_a7c51b07f8_z.jpg', 'Caderno de alta qualidade. Produto feito com madeira reflorestada, Ele nÃ£o amassa as folhas Ã© muito bom compre.');

-- --------------------------------------------------------

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `tempo` int(11) NOT NULL,
  `preco` float NOT NULL,
  `descricao` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `tempo`, `preco`, `descricao`) VALUES
(8, 'FormataÃ§Ã£o Completa', 4, 120, 'Limpeza de software e formataÃ§Ã£o.'),
(1, 'Instalacao de Software', 12, 15, 'Realiza a instalacao e configuracao de todos os tipos de software que desejar no seu computador, como ferramentas Office, jogos, programas de e-mail, utilitarios, programas/aplicacoes, etc.'),
(2, 'Formatacao Completa', 2, 125, 'Realiza a formatacao do dispositivo'),
(3, 'Troca de Sistema Operativo', 5, 70, 'Realiza a troca do sistema'),
(4, 'Remocao de virus', 4, 50, 'Realizamos a remocao de virus, cavalos-de-troia, worms, malware, spywares, softwares indesejados e outros codigos maliciosos que esteja no seu computador'),
(9, 'Limpar PC', 20, 75, 'Fazemos uma limpeza bÃ¡sica do computador'),
(5, 'Problemas no HD', 11, 130, 'falha no hd. RealizaÃ§Ã£o e teste e troca de peÃ§a se necessÃ¡rio'),
(10, 'Limpeza completa', 6, 160, 'Fazemos uma limpeza completa do computador'),
(11, 'Limpeza notebook', 2, 100, 'Fazemos uma limpeza no seu notebook');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(25) DEFAULT NULL,
  `Login` varchar(25) DEFAULT NULL,
  `PASSWORD` varchar(25) DEFAULT NULL,
  `Nascimento` date DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefone` bigint(20) DEFAULT NULL,
  `Cidade` varchar(25) DEFAULT NULL,
  `Endereco` varchar(25) DEFAULT NULL,
  `Cep` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nome`, `Login`, `PASSWORD`, `Nascimento`, `Email`, `Telefone`, `Cidade`, `Endereco`, `Cep`) VALUES
(1, 'caio', 'caio', '123', '1998-01-30', 'caio@usuario.com', 22333333211, 'city a', 'rua 56', '99999444'),
(2, 'JoÃ£o Garcia', 'teste', '123', '1998-01-30', 'joaogarcia@usuario.com', 22333333222, 'city b', 'rua aa', '99999442'),
(3, 'lucas', 'lucas', '123', '1998-01-25', 'lucas@usuario.com', 22333333223, 'city c', 'rua b', '99999443'),
(4, 'pedro', 'pedro', '123', '1998-01-25', 'pedro@usuario.com', 22333333224, 'city a', 'rua 2', '99999444'),
(5, 'joao', 'joao', '123', '1998-01-30', 'joao@usuario.com', 22333333225, 'city d', 'rua s', '99999446'),
(6, 'jose', 'jose', '123', '1997-09-01', 'jose@usuario.com', 22333333226, 'city c', 'rua a', '99999443'),
(7, 'Antonio', 'antonio', '2222222', '1941-12-12', 'antonio@usuario.com', 22333333227, 'city d', 'rua aa', '99999441'),
(8, 'usuario', 'user', '123', '2010-01-01', 'usuario@usuario.com', 22333333228, 'city e', 'rua 1', '11199444'),
(9, 'nome', 'usuario', '123', '2012-01-01', 'nome@usuario.com', 88333333222, 'city e', 'rua 12', '11111999'),
(10, 'ana', 'ana', '12345', '2012-01-01', 'ana@usuario.com', 97333333222, 'city e', 'rua do sul', '22222888'),
(11, 'Maria', 'maria', '12345', '1998-02-28', 'maria@usuario.com', 22333333222, 'city c', 'rua 03', '99999444');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
