-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 12-Set-2018 às 00:17
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_starquest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Campo feito para a identificação das perguntas.',
  `perguntas` text NOT NULL COMMENT 'Campo feito para armazenar as perguntas.',
  `alternativa_a` text NOT NULL COMMENT 'Campo feito para armazenar as alternativas.',
  `alternativa_b` text NOT NULL COMMENT 'Campo feito para armazenar as alternativas.',
  `alternativa_c` text NOT NULL COMMENT 'Campo feito para armazenar as alternativas.',
  `alternativa_correta` char(1) NOT NULL COMMENT 'Campo feito para armazenar as alternativas.',
  `tema` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para armazenar as perguntas, Juliana que mandou.';

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `perguntas`, `alternativa_a`, `alternativa_b`, `alternativa_c`, `alternativa_correta`, `tema`) VALUES
(1, 'O que é um espaço na memória para guardar dados?', 'HD', 'RAM', 'Variável', 'C', 'Lógica de Programação'),
(2, 'Algoritmo é uma sequência de passos:', 'Finitos', 'Fechados', 'Infinitos', 'A', 'Lógica de Programação'),
(3, 'Das opções abaixo, qual seria um comando de saída?', 'Escreva (“Starquest”)', 'Leia(saída)', 'se (a>b) entao leia(saída) ', 'A', 'Lógica de Programação'),
(4, 'Qual variável pode armazenar vários dados do mesmo tipo?', 'Caracter', 'Vetor', 'Inteiro', 'B', 'Lógica de Programação'),
(5, 'Qual destes comandos é uma estrutura de repetição?', 'ESCOLHA...CASO', 'SE...FIMSE', 'PARA...FACA', 'C', 'Lógica de Programação'),
(6, 'Qual o comando definido para acessar um atributo da classe em qualquer parte do código?', 'protected', 'public', 'private', 'B', 'Programação Desktop'),
(7, 'Qual dessas linguagens não é uma linguagem de programação desktop?', 'PHP', 'JAVA', 'C++', 'A', 'Programação Desktop'),
(8, 'O que é uma linguagem de alto nível? Uma linguagem próxima da:', 'Linguagem Humana', 'Linguagem de Computador', 'Linguagem de Programação', 'A', 'Programação Desktop'),
(9, 'Qual das seguintes variáveis só aceita números inteiros?', 'Long', 'String', 'Interger', 'C', 'Programação Desktop'),
(10, 'Qual alternativa representa a estrutura de repetição for que, por meio da variável de controle i, percorre o intervalo de 0 até 32, na ordem não decrescente?', 'for(i = 0; i < 32; i++)', 'for(i = 32; i > 0; i--)', 'for(i = 0; i < 33; i++)', 'C', 'Programação Desktop'),
(11, 'HTML é uma linguagem de:', 'Programação', 'Marcação', 'Formatação', 'B', 'Programação Web'),
(12, 'Qual a tag utilizada em HTML para criar um link?', '<a> </a>', '<h1> </h1>', '<link> </link>', 'A', 'Programação Web'),
(13, 'Qual dessas linguagens não é uma linguagem de programação web?', 'javascript', 'C', 'Python', 'B', 'Programação Web'),
(14, 'Qual das alternativas a seguir é uma tag de pré formatação de texto em HTML?', '<br>', '<div> </div>', '<h2> </h2>', 'C', 'Programação Web'),
(15, 'Qual o nome da linguagem de estilo utilizada em programação web?', 'C#', 'CSS', 'HTML', 'B', 'Programação Web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
