<?php

    # Capturar os dados 
    $data['name'] = (isset($_GET['name'])) ? $_GET['name'] : "Sem nome";
    $data['email'] = (isset($_GET['email'])) ? $_GET['email'] : "Sem Email";
    $data['address'] = (isset($_GET['address'])) ? $_GET['address'] : "Sem Endereco";
    $data['document'] = (isset($_GET['document'])) ? $_GET['document'] : "Sem CPF";

    # Criando um arquivo para salvar os dados do cadastro
    $handle = fopen("clients.txt", "a+");

    # Tratar o array para um string
    $string = implode(" - ", $data);

    # Guardando os dados do cadastro
    fwrite($handle, $string.PHP_EOL);

    # fecho o arquivo
    fclose($handle);



?>