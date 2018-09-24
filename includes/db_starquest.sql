-- MySQL Script generated by MySQL Workbench
-- Sun Sep  9 00:14:05 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_starquest
-- -----------------------------------------------------
-- Desenvolvedores: Diego Moretti, José Pablo Crema, Matheus Miranda Pereira, Marco Aurélio Mauricio.
-- Data de criação: 2018-06-07
-- Data de atualização: 2018-06-14
-- 
-- Versão: 1.0.2 (Atualizado os comentários da tabela progressos nos campos nivel e fase).
-- 
-- Esse é o banco de dados relacional do jogo STARQUEST.
-- Descrição: um jogo com perguntas e respostas para estimular o conhecimento e aprendizado da programação desktop e web.

-- -----------------------------------------------------
-- Schema db_starquest
--
-- Desenvolvedores: Diego Moretti, José Pablo Crema, Matheus Miranda Pereira, Marco Aurélio Mauricio.
-- Data de criação: 2018-06-07
-- Data de atualização: 2018-06-14
-- 
-- Versão: 1.0.2 (Atualizado os comentários da tabela progressos nos campos nivel e fase).
-- 
-- Esse é o banco de dados relacional do jogo STARQUEST.
-- Descrição: um jogo com perguntas e respostas para estimular o conhecimento e aprendizado da programação desktop e web.
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_starquest` DEFAULT CHARACTER SET utf8 ;
USE `db_starquest` ;

-- -----------------------------------------------------
-- Table `db_starquest`.`jogadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_starquest`.`jogadores` (
  `usuario` VARCHAR(8) NOT NULL COMMENT 'Campo para armezenar usuário. Limite máximo de 8 caracteres.',
  `nome` VARCHAR(70) NOT NULL COMMENT 'Campo para armazenar nome.',
  `email` VARCHAR(70) NOT NULL COMMENT 'Campo para armazenar email.',
  `senha` CHAR(32) NOT NULL COMMENT 'Campo para armazenar senha criptografada (md5).',
  `data_nascimento` DATE NOT NULL COMMENT 'Campo para armazenar a data de nascimento.',
  `data_registro` DATE NOT NULL COMMENT 'Campo para armazenar a data do registro.',
  PRIMARY KEY (`usuario`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
COMMENT = 'Tabela jogadores para armazenar os dados dos jogadores.';


-- -----------------------------------------------------
-- Table `db_starquest`.`progressos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_starquest`.`progressos` (
  `id` INT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar id.',
  `nivel` TINYINT(1) UNSIGNED NOT NULL COMMENT 'Campo para armazenar nivel.\n1- Lógica de programação\n2- Programação desktop (Java)\n3- Programação web',
  `fase` TINYINT(2) UNSIGNED NOT NULL COMMENT 'Campo para armazenar fase. Cada fase corresponde a uma pergunta.',
  `pontuacao` SMALLINT(5) UNSIGNED NOT NULL COMMENT 'Campo para armazenar pontuação de forma acumulativa.',
  `jogadores_usuario` VARCHAR(8) NOT NULL COMMENT 'Campo estrangeiro para armazenar o usuario dos jogadores.',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_progressos_jogadores1_idx` (`jogadores_usuario` ASC),
  CONSTRAINT `fk_progressos_jogadores1`
    FOREIGN KEY (`jogadores_usuario`)
    REFERENCES `db_starquest`.`jogadores` (`usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Tabela para armazenar os progressos dos jogadores. Cada jogador só poderá ter um progresso ativo.';


-- -----------------------------------------------------
-- Table `db_starquest`.`logs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_starquest`.`logs` (
  `id` INT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar a id do login dos usuarios. Cada vez que o usuário entrar no jogo, criará um id novo para o usuário.',
  `data` DATE NOT NULL COMMENT 'Campo para armazenar a data dos logs.',
  `hora` TIME NOT NULL COMMENT 'Campo para armazenar a hora dos logs.',
  `jogadores_usuario` VARCHAR(8) NOT NULL COMMENT 'Campo estrangeiro para armazenar os usuarios dos jogadores.',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_logs_jogadores_idx` (`jogadores_usuario` ASC),
  CONSTRAINT `fk_logs_jogadores`
    FOREIGN KEY (`jogadores_usuario`)
    REFERENCES `db_starquest`.`jogadores` (`usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Tabela para armazenar os logs dos usuarios.';


-- -----------------------------------------------------
-- Table `db_starquest`.`administradores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_starquest`.`administradores` (
  `id` TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Campo para armazenar id do administrador.',
  `email` VARCHAR(70) NOT NULL COMMENT 'Campo para armazenar email do administrador.',
  `usuario` VARCHAR(30) NOT NULL COMMENT 'Campo para armazenar usuario do administrador.',
  `senha` CHAR(20) NOT NULL COMMENT 'Campo para armazenar a senha do administrador.',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC))
ENGINE = InnoDB
COMMENT = 'Tabela para armazenar os dados dos administradores.';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;