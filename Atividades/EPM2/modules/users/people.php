<?php
    include_once '../../config.php';

    if(isset($_POST['action'])){

        if($_POST['action'] == 'insert'){

        $_POST['password'] = sha1($_POST["password"]);

            # Criando ou abrindo um arquivo
            $handle = fopen("database.people.txt", 'a+');
            
            # Escrever os dados no arquivo
            //$string = implode(" - ",$_POST);
            fwrite($handle, implode(" - ",$_POST).PHP_EOL);

            # Fechar o arquivo
            fclose($handle);

        }elseif($_POST['action']== "delete"){
            
            # Removendo o action
            unset($_POST['action']);

            # Lendo o arquivo txt
            $data = file('database.users.txt');

            # Remover a linha que eu quero excluir
            unset($data[$_POST['id']]);

            # Apagando o arquivo anterior
            //unlink("database.users.txt");

            # Recriando o arquivo com a opção "w" para zera-lo   
            $handle = fopen("database.people.txt","w+");

            # Escrevendo os dados (já sem o elemento removido)
            fwrite($handle, implode("", $data));

            # Fechar o arquivo
            fclose($handle);

        }elseif($_POST['action'] == "update"){
             
            $id = $_POST['id'];
            # Removendo o action
            unset($_POST['action'], $_POST['id']);

            # Lendo o arquivo txt
            $data = file('database.users.txt');

            # Realocar os dados novos no id Atual
            $data[$id] = implode(' - ',$_POST).PHP_EOL;

            # Recriando o arquivo com a opção "w" para zera-lo   
            $handle = fopen("database.users.txt","w+");

            # Escrevendo os dados (já sem o elemento removido)
            fwrite($handle, implode("", $data));

            # Fechar o arquivo
            fclose($handle);
        }
        header("location: $urlBase/index.php?page=listPeople");
    }else{
        echo "Acesso negado!";
    }

?>