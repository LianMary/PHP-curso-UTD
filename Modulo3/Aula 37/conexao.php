<?php

    # Variáveis de conexão
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $banco    = "sistema"; 

    # Criar a conexão
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die(mysqli_connect_error()); 

    //var_dump($conexao);


?>