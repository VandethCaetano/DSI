
-- Banco de dados: `agenda6dsi`

-- Estrutura para tabela `aluno_concluinte` 

CREATE TABLE `aluno_concluinte` (
  `id_aluno`  int auto_increment primary key,
  `nome` varchar(45) NOT NULL,
  `nota1` float DEFAULT NULL,
  `nota2` float DEFAULT NULL,
  `nota3` float DEFAULT NULL,
  `nota4` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Despejando dados para a tabela `aluno_concluinte`

INSERT INTO `aluno_concluinte` (`id_aluno`, `nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES
(1, 'Eduarda', 10, 10, 9, 10),
(2, 'Paulo', 10, 9, 8, 9),
(3, 'Igo', 10, 8, 10, 10),
(4, 'Guilherme', 10, 9, 8, 7),
(5, 'Henrique', 9, 9, 8, 7),
(6, 'Nilson', 10, 9, 10, 9),
(7, 'Ana', 9, 9, 8, 8),
(8, 'Amanda', 8, 9, 9, 8),
(9, 'Carlos', 6, 6, 5, 6);


