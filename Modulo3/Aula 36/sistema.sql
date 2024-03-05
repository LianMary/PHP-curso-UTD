-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 06/02/2024 às 23:38
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cpf` varchar(13) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cpf`, `bairro`, `dataNascimento`, `ativo`, `cadastradoEm`) VALUES
(1, 'Zezim Quantas', 'zezim@email.com', '78945613297', 'Two Brothers Park', '1993-12-04', 1, '2024-02-02 22:44:05'),
(2, 'Luizim Quantas', 'huizim@email.com', '78945613298', 'Good Gardem', '1993-12-04', 1, '2024-02-02 22:44:05'),
(3, 'Hugim Quantas', 'hugim@email.com', '789456132979', 'Two Brothers Park', '1993-12-04', 1, '2024-02-02 22:44:05'),
(4, 'Maria das Quantas', 'mariadas@email.com', '78945613295', 'Good Gardem', '1993-12-04', 1, '2024-02-02 22:44:05'),
(5, 'Joaquina Quantas', 'joaquina@email.com', '78945613294', 'Miss Jane', '1993-12-04', 1, '2024-02-02 22:44:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itensvenda`
--

CREATE TABLE `itensvenda` (
  `id` int NOT NULL,
  `qtd` int DEFAULT NULL,
  `idVenda` int DEFAULT NULL,
  `idProduto` int DEFAULT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `itensvenda`
--

INSERT INTO `itensvenda` (`id`, `qtd`, `idVenda`, `idProduto`, `cadastradoEm`) VALUES
(1, 2, 1, 1, '2024-02-02 22:49:14'),
(2, 2, 1, 2, '2024-02-02 22:49:14'),
(3, 3, 1, 6, '2024-02-02 22:49:14'),
(4, 2, 1, 8, '2024-02-02 22:49:14'),
(5, 3, 1, 15, '2024-02-02 22:49:14'),
(6, 10, 2, 1, '2024-02-02 22:55:02'),
(7, 2, 2, 2, '2024-02-02 22:55:02'),
(8, 4, 2, 6, '2024-02-02 22:55:02'),
(9, 2, 2, 8, '2024-02-02 22:55:02'),
(10, 8, 2, 15, '2024-02-02 22:55:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `log_tipo` varchar(25) DEFAULT NULL,
  `log_conteudo` varchar(255) DEFAULT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `logs`
--

INSERT INTO `logs` (`id`, `log_tipo`, `log_conteudo`, `criadoEm`) VALUES
(1, 'TESTE', 'Log Teste 01', '2024-02-05 23:07:16'),
(2, 'TESTE', 'Log Teste 02', '2024-02-05 23:07:16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `codigo` varchar(15) DEFAULT NULL,
  `preco` float(7,2) DEFAULT NULL,
  `estoque` int DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `codigo`, `preco`, `estoque`, `ativo`, `cadastradoEm`) VALUES
(1, 'Bolacha Rechada Amori Morango', 'BR000010001001', 2.89, 480, 1, '2024-02-05 22:38:04'),
(2, 'Biscoito Recheado Amori Chocolate', '000000000000002', 2.99, 480, 1, '2024-02-05 22:38:04'),
(3, 'Biscoito Recheado Amori Escureto', '000000000000003', 2.99, 480, 1, '2024-02-05 22:38:04'),
(5, 'Refrigerante Lata 300ml Coca-Cola', '000000000000005', 3.29, 200, 1, '2024-02-05 22:38:04'),
(6, 'Refrigerante Lata 300ml Fanta Uva', '000000000000006', 2.99, 150, 0, '2024-02-05 22:38:04'),
(7, 'Refrigerante Lata 300ml Fanta Laranja', '000000000000007', 2.99, 150, 1, '2024-02-05 22:38:04'),
(11, 'Salgadinho Cheetos Onda Requeijão P', '000000000000011', 1.99, -1, 1, '2024-02-05 22:38:04'),
(13, 'Salgadinho Cheetos Bola Mussarela P', '000000000000013', 1.99, 480, 1, '2024-02-05 22:38:04'),
(14, 'Chocolate Barra Lacta Diamante Negro 300g', '000000000000014', 5.99, 480, 1, '2024-02-05 22:38:04'),
(15, 'Chocolate Barra Lacta Laka Branco 300g', '000000000000015', 5.99, 480, 1, '2024-02-05 22:38:04'),
(18, 'Pastel de Frango 25cm', 'PST00000000001', 3.99, 100, 1, '2024-02-06 22:49:19'),
(19, 'Pastel de Carne 25cm', 'PST00000000002', 3.99, 100, 0, '2024-02-06 22:52:12'),
(20, 'Pastel de Misto 25 cm', 'PST00000000003', 3.99, 100, 1, '2024-02-06 22:59:33'),
(22, 'Risole de Carne', 'SAL00000000001', 3.99, 100, 1, '2024-02-06 23:18:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `idCliente` int DEFAULT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`, `dataVenda`, `idCliente`, `cadastradoEm`) VALUES
(1, '2024-02-02', 5, '2024-02-02 22:48:51'),
(2, '2024-02-01', 3, '2024-02-02 22:55:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `itensvenda`
--
ALTER TABLE `itensvenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `itensvenda`
--
ALTER TABLE `itensvenda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
