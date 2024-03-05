<?php

    $name = "anthony jefferson gonçalves nascimento de moura";

    // echo "Tamanho: ".strlen($name)."<br>";
    // echo "Maiuscula: ".strtoupper($name)."<br>";
    // echo "Primeira Letra Maiuscula: ".ucfirst($name)."<br>";
    // echo "A letra de cada palavra Maiuscula: ".ucwords($name)."<br>";

    // Convertendo uma string para array
    $array = explode(" ",$name);

    // Convertendo um array para string
    $frutas = ["banana","caju","damasco","elefante","figo"];

    # Removendo uma posição específica    
    unset($frutas[3]);

    # Adicionando um elemento no começo do arrray
    array_unshift($frutas, "abacate");

    # Adicionando um elemento no final do arrray
    array_push($frutas,"goiaba");

    # Mostrando a string depois das inserções
    $string = implode(" - ", $frutas);
    echo $string;
    echo "<br>";

    # Removendo um elemento no começo do arrray
    array_shift($frutas);

    # Removendo um elemento no final do arrray
    array_pop($frutas);
    
    // Mostrando a string depois das remoções
    $string = implode(" - ", $frutas);

    echo $string;


    //print_r($array);


    // $pedaco = substr($name, 0, -5);
    // echo $array[5];
    // echo "Tamanho: ".strlen($name)."<br>";
    // echo "Tamanho: ".strlen($name)."<br>";

?>