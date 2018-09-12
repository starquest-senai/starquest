-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 13-Set-2018 às 01:02
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
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Campo para armazenar id do administrador.',
  `email` varchar(70) NOT NULL COMMENT 'Campo para armazenar email do administrador.',
  `usuario` varchar(30) NOT NULL COMMENT 'Campo para armazenar usuario do administrador.',
  `senha` char(20) NOT NULL COMMENT 'Campo para armazenar a senha do administrador.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para armazenar os dados dos administradores.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `usuario` varchar(16) NOT NULL COMMENT 'Campo para armezenar usuário. Limite máximo de 8 caracteres.',
  `nome` varchar(70) NOT NULL COMMENT 'Campo para armazenar nome.',
  `email` varchar(70) NOT NULL COMMENT 'Campo para armazenar email.',
  `senha` char(32) NOT NULL COMMENT 'Campo para armazenar senha criptografada (md5).',
  `data_nascimento` date NOT NULL COMMENT 'Campo para armazenar a data de nascimento.',
  `data_registro` date NOT NULL COMMENT 'Campo para armazenar a data do registro.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela jogadores para armazenar os dados dos jogadores.';

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`usuario`, `nome`, `email`, `senha`, `data_nascimento`, `data_registro`) VALUES
('gabrielSBorges', 'Gabriel Borges', 'borgesgabrielsilva@gmail.com', 'Gab', '1997-10-05', '2018-09-11'),
('marco001', 'Marco AurÃ©lio Mauricio', 'marco@gmail.com', '123', '1980-03-21', '2018-09-11'),
('Math', 'Matheus Miranda Pereira', 'matheusmirandapereira@gmail.com', '321', '1999-08-17', '2018-09-05'),
('sailorpablo', 'Jose Pablo Alfredo Crema', 'josepabloadr@gmail.com', '123', '1999-10-12', '2018-09-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'Campo para armazenar a id do login dos usuarios. Cada vez que o usuário entrar no jogo, criará um id novo para o usuário.',
  `data` date NOT NULL COMMENT 'Campo para armazenar a data dos logs.',
  `hora` time NOT NULL COMMENT 'Campo para armazenar a hora dos logs.',
  `jogadores_usuario` varchar(16) NOT NULL COMMENT 'Campo estrangeiro para armazenar os usuarios dos jogadores.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para armazenar os logs dos usuarios.';

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `data`, `hora`, `jogadores_usuario`) VALUES
(0000000001, '2018-09-05', '20:54:48', 'sailorpablo'),
(0000000002, '2018-09-05', '21:10:21', 'Math');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `progressos`
--

CREATE TABLE `progressos` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'Campo para armazenar id.',
  `nivel` tinyint(1) UNSIGNED NOT NULL COMMENT 'Campo para armazenar nivel.\n1- Lógica de programação\n2- Programação desktop (Java)\n3- Programação web',
  `fase` tinyint(2) UNSIGNED NOT NULL COMMENT 'Campo para armazenar fase. Cada fase corresponde a uma pergunta.',
  `pontuacao` smallint(5) UNSIGNED NOT NULL COMMENT 'Campo para armazenar pontuação de forma acumulativa.',
  `jogadores_usuario` varchar(16) NOT NULL COMMENT 'Campo estrangeiro para armazenar o usuario dos jogadores.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para armazenar os progressos dos jogadores. Cada jogador só poderá ter um progresso ativo.';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- Indexes for table `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`usuario`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_logs_jogadores_idx` (`jogadores_usuario`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progressos`
--
ALTER TABLE `progressos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_progressos_jogadores1_idx` (`jogadores_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar id do administrador.';

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar a id do login dos usuarios. Cada vez que o usuário entrar no jogo, criará um id novo para o usuário.', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `progressos`
--
ALTER TABLE `progressos`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar id.';

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_jogadores` FOREIGN KEY (`jogadores_usuario`) REFERENCES `jogadores` (`usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `progressos`
--
ALTER TABLE `progressos`
  ADD CONSTRAINT `fk_progressos_jogadores1` FOREIGN KEY (`jogadores_usuario`) REFERENCES `jogadores` (`usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
