<?php

    /* Salvar os dados do formulário no arquivo */

    if(isset($_POST['action'])){

        if($_POST['action'] == "insert"){
            
            # Removendo o elemento do array
            unset($_POST['action']);

            # Criando ou abrindo um arquivo
            $handle = fopen("database.clients.txt", 'a+');
            
            # Escrever os dados no arquivo
            //$string = implode(" - ",$_POST);
            fwrite($handle, implode(" - ",$_POST).PHP_EOL);

            # Fechar o arquivo
            fclose($handle);

            # Redirecionar à listagem
            header("location: index.php");

        }elseif($_POST['action'] == "delete"){
        
           

            # Removendo o action
            unset($_POST['action']);

            # Lendo o arquivo txt
            $data = file('database.clients.txt');

            # Remover a linha que eu quero excluir
            unset($data[$_POST['id']]);

            # Apagando o arquivo anterior
            //unlink("database.clients.txt");

            # Recriando o arquivo com a opção "w" para zera-lo   
            $handle = fopen("database.clients.txt","w+");

            # Escrevendo os dados (já sem o elemento removido)
            fwrite($handle, implode("", $data));

            # Fechar o arquivo
            fclose($handle);

            # Redirecionar à listagem
            header("location: index.php");


        }elseif($_POST['action'] == "update"){
            
            
            $id = $_POST['id'];
            # Removendo o action
            unset($_POST['action'], $_POST['id']);

            # Lendo o arquivo txt
            $data = file('database.clients.txt');

            # Realocar os dados novos no id Atual
            $data[$id] = implode(' - ',$_POST).PHP_EOL;

            # Recriando o arquivo com a opção "w" para zera-lo   
            $handle = fopen("database.clients.txt","w+");

            # Escrevendo os dados (já sem o elemento removido)
            fwrite($handle, implode("", $data));

            # Fechar o arquivo
            fclose($handle);

            # Redirecionar à listagem
            header("location: index.php");


        }
    }else{
        echo "Acesso negado";
    }


?>