<?php

    $anthony['nome'] = 'Anthony Jefferson';
    $anthony['email'] = "anthony@email.com";
    $anthony['senha'] = sha1("1234");
    $anthony['documento'] = "456.456.456-20"; 
    $anthony['ultimoAcesso'] = date("d-m-Y H:i:s");

    $fernanda['nome'] = 'Fernanda dos Santos';
    $fernanda['email'] = "fernanda@email.com";
    $fernanda['senha'] = sha1("1234");
    $fernanda['documento'] = "456.456.456-39"; 
    $fernanda['ultimoAcesso'] = date("d-m-Y H:i:s");


    session_start();

    $_SESSION["anthony"] = $anthony;
    $_SESSION["fernanda"] = $fernanda;

    
    var_dump($_SESSION);

    session_destroy();

?>