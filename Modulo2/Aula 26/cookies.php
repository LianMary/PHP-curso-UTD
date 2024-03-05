<?php

  
    
    $boneca['nome'] = "Boneca Barbie Empreendora";
    $boneca['valor'] = 9.99;
    
    if(!isset($_COOKIE['shopping-cart']['one'])){
        $boneca['qtd'] = 0;
    }else{
        $boneca['qtd'] = explode(" - ", $_COOKIE['shopping-cart']['one'])[2];        
    }

    $carrinho['nome'] = "Carro de Corrida Hot Wheels";
    $carrinho['valor'] = 7.99;

    if(!isset($_COOKIE['shopping-cart']['two'])){
        $carrinho['qtd'] = 0;
    }else{
        $carrinho['qtd'] = explode(" - ", $_COOKIE['shopping-cart']['two'])[2];        
    }

    if(isset($_GET['addboneca'])){
        $dados = explode(" - ", $_COOKIE['shopping-cart']['one']);
        $boneca['qtd'] = $dados[2]+1;
    }

    if(isset($_GET['addcarrinho'])){
        $dados = explode(" - ", $_COOKIE['shopping-cart']['two']);
        $carrinho['qtd'] = $dados[2]+1;
    }    

    setcookie("shopping-cart[one]", implode(' - ', $boneca));
    setcookie("shopping-cart[two]", implode(' - ', $carrinho));

    var_dump($_COOKIE['shopping-cart']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="?addboneca=1"> Adicionar Boneca </a>
    <a href="?addcarrinho=1"> Adicionar Carrinho </a>
</body>
</html>