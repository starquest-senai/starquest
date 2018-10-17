-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/09/2018 às 02:57
-- Versão do servidor: 5.7.11-log
-- Versão do PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_starquest`
--

CREATE DATABASE db_starquest;
USE db_starquest;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Campo para armazenar id do administrador.',
  `email` varchar(70) NOT NULL COMMENT 'Campo para armazenar email do administrador.',
  `usuario` varchar(30) NOT NULL COMMENT 'Campo para armazenar usuario do administrador.',
  `senha` char(20) NOT NULL COMMENT 'Campo para armazenar a senha do administrador.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para armazenar os dados dos administradores.';

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogadores`
--

CREATE TABLE IF NOT EXISTS `db_starquest`.`jogadores` (
  `usuario` VARCHAR(16) NOT NULL COMMENT 'Campo para armezenar usuário. Limite máximo de 8 caracteres.',
  `nome` VARCHAR(70) NOT NULL COMMENT 'Campo para armazenar nome.',
  `email` VARCHAR(70) NOT NULL COMMENT 'Campo para armazenar email.',
  `senha` CHAR(32) NOT NULL COMMENT 'Campo para armazenar senha criptografada (md5).',
  `data_nascimento` DATE NOT NULL COMMENT 'Campo para armazenar a data de nascimento.',
  `data_registro` DATE NOT NULL COMMENT 'Campo para armazenar a data do registro.',
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`usuario`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Tabela jogadores para armazenar os dados dos jogadores.';


--
-- Fazendo dump de dados para tabela `jogadores`
--

INSERT INTO `jogadores` (`usuario`, `nome`, `email`, `senha`, `data_nascimento`, `data_registro`) VALUES
('Math', 'Matheus Miranda Pereira', 'matheusmirandapereira@gmail.com', '321', '1999-08-17', '2018-09-05'),
('sailorpablo', 'Jose Pablo Alfredo Crema', 'josepabloadr@gmail.com', '123', '1999-10-12', '2018-09-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'Campo para armazenar a id do login dos usuarios. Cada vez que o usuário entrar no jogo, criará um id novo para o usuário.',
  `data` date NOT NULL COMMENT 'Campo para armazenar a data dos logs.',
  `hora` time NOT NULL COMMENT 'Campo para armazenar a hora dos logs.',
  `jogadores_usuario` varchar(16) NOT NULL COMMENT 'Campo estrangeiro para armazenar os usuarios dos jogadores.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para armazenar os logs dos usuarios.';

--
-- Fazendo dump de dados para tabela `logs`
--

INSERT INTO `logs` (`id`, `data`, `hora`, `jogadores_usuario`) VALUES
(0000000001, '2018-09-05', '20:54:48', 'sailorpablo'),
(0000000002, '2018-09-05', '21:10:21', 'Math');

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
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
-- Fazendo dump de dados para tabela `perguntas`
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
(11, 'HTML é uma linguagem de:', 'Programação', 'Marcação', 'Formatação', 'B', 'Programação Web'),
(12, 'Qual a tag utilizada em HTML para criar um link?', '&lt;a&gt; &lt;/a&gt;', '&lt;h1&gt; &lt;/h1&gt;', '&lt;link&gt; &lt;/link&gt;', 'A', 'Programação Web'),
(13, 'Qual dessas linguagens não é uma linguagem de programação web?', 'javascript', 'C', 'Python', 'B', 'Programação Web'),
(14, 'Qual das alternativas a seguir é uma tag de pré formatação de texto em HTML?', '&lt;br&gt;', '&lt;div&gt; &lt;/div&gt;', '&lt;h2&gt; &lt;/h2&gt;', 'C', 'Programação Web'),
(15, 'Qual o nome da linguagem de estilo utilizada em programação web?', 'C#', 'CSS', 'HTML', 'B', 'Programação Web');

-- --------------------------------------------------------

--
-- Estrutura para tabela `progressos`
--

CREATE TABLE `progressos` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'Campo para armazenar id.',
  `fase` tinyint(2) UNSIGNED NOT NULL COMMENT 'Campo para armazenar fase. Cada fase corresponde a uma pergunta.',
  `pontuacao` smallint(5) UNSIGNED NOT NULL COMMENT 'Campo para armazenar pontuação de forma acumulativa.',
  `jogadores_usuario` varchar(16) NOT NULL COMMENT 'Campo estrangeiro para armazenar o usuario dos jogadores.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para armazenar os progressos dos jogadores. Cada jogador só poderá ter um progresso ativo.';

--
-- Fazendo dump de dados para tabela `progressos`
--

INSERT INTO `progressos` (`id`, `fase`, `pontuacao`, `jogadores_usuario`) VALUES
(0000000000, 1, 100, 'Math'),
(0000000002, 1, 20, 'sailorpablo');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- Índices de tabela `jogadores`
--

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_logs_jogadores_idx` (`jogadores_usuario`);

--
-- Índices de tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `progressos`
--
ALTER TABLE `progressos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_progressos_jogadores1_idx` (`jogadores_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar id do administrador.';
--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar a id do login dos usuarios. Cada vez que o usuário entrar no jogo, criará um id novo para o usuário.', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `progressos`
--
ALTER TABLE `progressos`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar id.', AUTO_INCREMENT=3;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_jogadores` FOREIGN KEY (`jogadores_usuario`) REFERENCES `jogadores` (`usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `progressos`
--
ALTER TABLE `progressos`
  ADD CONSTRAINT `fk_progressos_jogadores1` FOREIGN KEY (`jogadores_usuario`) REFERENCES `jogadores` (`usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
