<?php

    include_once 'Produto.php';
    include_once 'Caracteristica.php';

    $chocolate = new Produto("Chocolate em barra 300g", 10, 5.99);
    $chocolate->addCaracteristica("Açucar","30g");
    $chocolate->addCaracteristica("Sódio","0g");
    $chocolate->addCaracteristica("Outros","10g");
    
    echo "Descrição do Produto: ".$chocolate->getDescricao()."<br>";

    foreach($chocolate->getCaracteristicas() as $c){
        echo "Caracteristica: ".$c->getNome()." - ".$c->getValor()."<br>";
    }




?>