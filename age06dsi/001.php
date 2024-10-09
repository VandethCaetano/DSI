-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/09/2024 às 15:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;1
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Banco de dados: `001`
--
-- --------------------------------------------------------

-- Estrutura para tabela `aluno_concluinte`
--

CREATE TABLE `aluno_concluinte` (
  `id_aluno`  int auto_increment primary key,
  `nome` varchar(45) NOT NULL,
  `nota1` float DEFAULT NULL,
  `nota2` float DEFAULT NULL,
  `nota3` float DEFAULT NULL,
  `nota4` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Despejando dados para a tabela `aluno_concluinte`
--
INSERT INTO 'aluno_concluinte'('nome', 'nota1', 'nota2', 'nota3', 'nota4')
VALUES
('Eduarda', '10', '10', '9', '10'),
('Paulo', '10', '9', '8', '9'),
('Igo', '10', '8', '10', '10'),
('Guilherme', '10', '9', '8', '7'),
('Henrique', '9', '9', '8', '7'),
('Nilson', '10', '9', '10', '9'),
('Ana', '9', '9', '8', '8'),
('Amanda', '8', '9', '9', '8'),
('Carlos', '6', '6', '5', '6'),
('Pedro', '8', '8', '8', '7');





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
