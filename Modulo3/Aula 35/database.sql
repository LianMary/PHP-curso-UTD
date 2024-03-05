 -- Operações C.R.U.D

 -- Create
/* COMO CRIAR UM BANCO DE DADOS */
CREATE DATABASE `sistema`;

USE `sistema`;

CREATE TABLE `clientes`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(60),
    `email` VARCHAR(50),
    `cpf` VARCHAR(13) UNIQUE KEY,
    `bairro` VARCHAR(40),
    `dataNascimento` DATE,
    `ativo` BOOLEAN,
    `cadastradoEm` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);


CREATE TABLE `produtos`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(50),
    `codigo` VARCHAR(15),
    `preco` FLOAT(7,2),
    `estoque` INT(4),
    `ativo` BOOLEAN,
    `cadastradoEm` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `vendas`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `dataVenda` DATE,    
    `idCliente` INT,
    `cadastradoEm` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `itensVenda` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `qtd` INT(2),
    `idVenda` INT,
    `idProduto` INT,
    `cadastradoEm` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO `produtos` (`nome`, `codigo`, `preco`,`estoque`, `ativo`)
VALUES
('Biscoito Recheado Amori Morango', '000000000000001',2.99, 480, 1),
('Biscoito Recheado Amori Chocolate', '000000000000002',2.99, 480, 1),
('Biscoito Recheado Amori Escureto', '000000000000003',2.99, 480, 1),
('Biscoito Recheado Amori Flocos', '000000000000004',2.99, 480, 0),
('Refrigerante Lata 300ml Coca-Cola', '000000000000005',3.29, 200, 1),
('Refrigerante Lata 300ml Fanta Uva', '000000000000006',2.99, 150, 1),
('Refrigerante Lata 300ml Fanta Laranja', '000000000000007',2.99, 150, 1),
('Refrigerante Lata 300ml Sprite', '000000000000008',3.19, 300, 1),
('Refrigerante Lata 300ml Kuat', '000000000000009',2.49, 300, 0),
('Salgadinho Cheetos Lua Parmesão P', '000000000000010',1.99, 480, 1),
('Salgadinho Cheetos Onda Requeijão P', '000000000000011',1.99, 480, 1),
('Salgadinho Cheetos Tubo Cheddar P', '000000000000012',1.99, 480, 0),
('Salgadinho Cheetos Bola Mussarela P', '000000000000013',1.99, 480, 1),
('Chocolate Barra Lacta Diamante Negro 300g', '000000000000014',5.99, 480, 1),
('Chocolate Barra Lacta Laka Branco 300g', '000000000000015',5.99, 480, 1),
('Chocolate Barra Garoto Sonho de Valsa Negro 300g', '000000000000016',5.99, 480, 1),
('Chocolate Barra Neste Chockito 300g', '000000000000017',5.99, 480, 0);


INSERT INTO `clientes` (`nome`,`email`,`cpf`,`bairro`,`dataNascimento`,`ativo`) 
VALUES 
('Zezim Quantas', 'zezim@email.com','78945613297','Two Brothers Park','1993-12-04','1'),
('Luizim Quantas', 'huizim@email.com','78945613298','Good Gardem','1993-12-04','1'),
('Hugim Quantas', 'hugim@email.com','789456132979','Two Brothers Park','1993-12-04','1'),
('Maria das Quantas', 'mariadas@email.com','78945613295','Good Gardem','1993-12-04','1'),
('Joaquina Quantas', 'joaquina@email.com','78945613294','Miss Jane','1993-12-04','1');

INSERT INTO `vendas` (`dataVenda`, `idCliente`)
VALUES ('2024-02-01', 3);

INSERT INTO `itensVenda`(`qtd`,`idVenda`,`idProduto`)
VALUES
(10,2,1),
(2,2,2),
(4,2,6),
(2,2,8),
(8,2,15);


INSERT INTO `vendas` (`dataVenda`, `idCliente`)
VALUES ('2024-02-02', 5);

INSERT INTO `itensVenda`(`qtd`,`idVenda`,`idProduto`)
VALUES
(2,1,1),
(2,1,2),
(3,1,6),
(2,1,8),
(3,1,15);



SELECT V.*, C.`nome` FROM `vendas` as V, `clientes` as C
WHERE V.`idCliente` = C.`id` AND V.id = 1;

SELECT C.nome, P.nome, P.preco, I.qtd, (I.qtd*P.preco) as TotalItem 
FROM itensVenda I, produtos P, vendas V, clientes C
WHERE
    V.`idCliente` = C.`id` AND
    I.`idProduto` = P.`id` AND
    I.`idVenda` = V.`id` AND
    V.`id` = 1;

SELECT SUM(I.qtd*P.preco) as TotalVenda 
FROM itensVenda I, produtos P, vendas V, clientes C
WHERE
    V.`idCliente` = C.`id` AND
    I.`idProduto` = P.`id` AND
    I.`idVenda` = V.`id` AND
    V.`id` = 1;