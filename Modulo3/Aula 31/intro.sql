 -- Operações C.R.U.D

 -- Create
/* COMO CRIAR UM BANCO DE DADOS */
CREATE DATABASE `utdTeste2024`;

USE `utdTeste2024`;


-- CRIANDO UMA TABELA (Nome, CPF, Email, Bairro, Ativo, dataNascimento, DataCadastro);
-- CREATE TABLE `tableName` (
--     `field1` TYPE COMPLEMENTS... ,
--     `field2` TYPE COMPLEMENTS...,
--     ...,
--     `fieldN` TYPE COMPLEMENTS...
-- ); 20240131

-- INT, CHAR, DATE, VARCHAR, FLOAT, BOOLEAN, TIMESTAMP, TEXT...
CREATE TABLE `usuarios`(
    `nome` VARCHAR(60),
    `email` VARCHAR(50),
    `cpf` VARCHAR(13),
    `bairro` VARCHAR(40),
    `dataNascimento` DATE,
    `ativo` BOOLEAN,
    `cadastradoEm` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);


CREATE TABLE `produtos`(
    `nome` VARCHAR(50),
    `codigo` VARCHAR(15),
    `preco` FLOAT(7,2),
    `estoque` INT(4),
    `ativo` BOOLEAN,
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




-- INSERINDO DADOS NO BANCO DE DADOS
INSERT INTO `tableName` (`field1`,`field2`,...,`fieldN`) VALUES ('field1','field2',...,'fieldn');

INSERT INTO `usuarios` (`nome`,`email`,`cpf`,`bairro`,`dataNascimento`,`ativo`) 
VALUES ('Anthony Jefferson', 'anthony@email.com','78945613299','Two Brothers Park','1993-12-04','1');

INSERT INTO `usuarios` (`nome`,`email`,`cpf`,`bairro`,`dataNascimento`,`ativo`) 
VALUES 
('Zezim Quantas', 'Zezim@email.com','78945613297','Two Brothers Park','1993-12-04','1'),
('Luizim Quantas', 'Luizim@email.com','78945613297','Two Brothers Park','1993-12-04','1'),
('Hugim Quantas', 'Hugim@email.com','78945613297','Two Brothers Park','1993-12-04','1'),
('Maria das Quantas', 'mariadas@email.com','78945613297','Two Brothers Park','1993-12-04','1'),
('Joaquina Quantas', 'joaquina@email.com','78945613297','Two Brothers Park','1993-12-04','1');

INSERT INTO `usuarios` (`nome`,`email`,`cpf`,`bairro`,`dataNascimento`,`ativo`) 
VALUES ('Anthony Jefferson', 'anthony@email.com','78945613299','Two Brothers Park','1993/12/04');

-- Read
SELECT { * | fieldNames } FROM {tableName};

SELECT * FROM `usuarios`;

--  Filtrando os registros... ( WHERE )
SELECT * FROM `produtos` WHERE `ativo` = 1;

-- CLAUSULA LIKE
SELECT * FROM `produtos` WHERE `nome` LIKE 'Biscoito%' 
SELECT * FROM `produtos` WHERE `nome` LIKE '%300 g' 

--  ordenando registros
SELECT * FROM `produtos` ORDER BY `nome` DESC

-- Condições Multiplas
SELECT * FROM `produtos` WHERE `preco` < 3 AND `nome` LIKE 'Refrigerante%' AND `ativo`= 1

/* 
    Tabela verdade "E" ou "AND"
    P Q P^Q 
    V V V
    V F F
    F V F
    F F F

    Tabela verdade "OU" ou "OR"
    P Q PvQ 
    V V V
    V F V
    F V V
    F F F

    Tabela verdade "NÃO" ou "NOT"
    P ~P 
    V F
    F V
    
*/

 -- Update
 -- Delete

 -- Structured Query Language (SQL)




