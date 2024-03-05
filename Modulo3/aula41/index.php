<?php

    include_once 'Usuario.php';
    include_once 'Funcionario.php';
    include_once 'Cliente.php';

    $ana = new Funcionario("Ana Cristina", "ana@empresa.com",'1234', 2240.89);
    echo $ana->montaTabela();

    echo "<br>";


    $joao = new Cliente("João", "joao@email.com", '1234');
    $joao->ativo = 1;
    $joao->bonificar(20);
    $joao->descontarBonus(7);
    $joao->bonificar(10);
    echo $joao->montaTabela();


?>