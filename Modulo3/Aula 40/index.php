<?php

    include_once 'Usuario.php';

    # Instanciar um objeto do tipo Usuario;
    $anthony = new Usuario("Anthony Jefferson", "anthony@email.com","123456");
    $anthony->endereco = "Rua Bem Alí, 222";
    $anthony->cpf = "60393507335";
    $anthony->ativo = false;
    $anthony->exibirDados();

    $jonas = new Usuario("Jonas Jefferson","jonas@gmail.com","123456");
    $jonas->endereco = "Rua Bem Alí, 222";
    $jonas->cpf = "60393507335";
    $jonas->ativo = true;
    $jonas->exibirDados();


?>