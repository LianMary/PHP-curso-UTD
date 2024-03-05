<?php

    include_once 'Fabricante.php';
    include_once 'Produto.php';

    # Instancioando os objetos
    $chocolate = new Produto("Chocolate em barra 300g",10,5.99);
    $lakta = new Fabricante("Lakta Ind. Co","Rua bem Alí 222",'123456789125125');

    // Associando o produto ao fabricante
    $chocolate->setFabricante($lakta);

    echo "Descrição do Produto: ".$chocolate->getDescricao()."<br>";
    echo "Descrição do Fabricante: ".$chocolate->getFabricante()->getNome()."<br>";


?>