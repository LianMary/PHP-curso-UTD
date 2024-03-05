--  UPDATE 
UPDATE 
    `produtos`
SET 
    `nome` = 'Bolacha Rechada Amori Morango',
    `codigo` = 'BR000010001001';

--  Removendo uma tabela do banco de dados
DROP TABLE `produtos`;

--  UPDATE CONDICIONAL
UPDATE 
    `produtos`
SET 
    `nome` = 'Bolacha Rechada Amori Morango',
    `codigo` = 'BR000010001001',
    `preco` = 2.89
WHERE
    `id` = 1;


-- DELETE
DELETE FROM `produtos`;

-- LIMPAR (ESVAZIAR A TABELA)
TRUNCATE TABLE `produtos`;

-- DELETANDO REGISTOS
DELETE FROM `produtos` WHERE `ativo` = 0;







