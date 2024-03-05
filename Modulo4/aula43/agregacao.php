<?php

    include_once 'Cesta.php';
    include_once 'Produto.php';

    $carrinho = new Cesta();
    $carrinho->addItem( $p1 = new Produto("Chocolate em barra",2, 5.99));
    $carrinho->addItem( $p2 = new Produto("Cheetos onda Parmesão",2, 1.99));
    $carrinho->addItem( $p1 = new Produto("Coca lata 300ml",1, 3.99));

    echo "##################################################<br>";
    echo "########## NOTA NÃO FISCAL #######################<br>";
    echo "##################################################<br>";

    $total = 0;
    foreach($carrinho->getItens() as $item){
        echo "Item: ".$item->getDescricao()." - ".$item->getEstoque()." - ".$item->getPreco()." - ". ($item->getEstoque() * $item->getPreco())."<br>";
        $total += ($item->getEstoque() * $item->getPreco()); 
    }
    echo "##################################################<br>";
    echo "VALOR TOTAL DA COMPRA: R$ ".$total."<br>";
    echo "##################################################<br>";
