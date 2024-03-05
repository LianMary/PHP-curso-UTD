<?php

    /* Salvar os dados do formulário no arquivo */

    if(isset($_POST['action'])){

        if($_POST['action'] == "insert"){
            
            # Removendo o elemento do array
            unset($_POST['action']);

            # Criando ou abrindo um arquivo
            $handle = fopen("database.product.txt", 'a+');

            # Validação de Imagem do produto
            $_POST['productImage'] = (empty($_POST['productImage'])) ? 'https://assets.website-files.com/60f8759c80c1dc9d658bb9b2/63330aa587e27eaacccddff9_No%20Product%20Image%20Available.png' : $_POST['productImage'];

            # Escrever os dados no arquivo
            fwrite($handle, implode(" - ",$_POST).PHP_EOL);

            # Fechar o arquivo
            fclose($handle);

            # Redirecionar à listagem
            header("location: listProduct.php");

        }elseif($_POST['action'] == "delete"){
            
        }
    }else{
        echo "Acesso negado";
    }


?>