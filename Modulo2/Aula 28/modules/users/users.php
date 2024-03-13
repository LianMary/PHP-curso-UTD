<?php


    /* Salvar os dados do formulário no arquivo */
    include_once '../../config.php';


    if(isset($_POST['action'])){

        if($_POST['action'] == "insert"){
            
            
            
            # Removendo o elemento do array 
            #Comentario da aluna: Essa verificação vai mandar as fotos e arquivos para outro lugar!
            unset($_POST['action']);

            if($_FILES['file']['name'] != ""){
                $newFile = sha1(date("YmdHis")).".".end(explode(".", $_FILES['file']['name']));
                $_POST['image'] = $newFile;

                if(!is_dir( $pathBase."/uploads/users/profile-pictures")){
                    mkdir( $pathBase."/uploads/users/profile-pictures");
                }
                move_uploaded_file($_FILES['file']['tmp_name'], $pathBase."/uploads/users/profile-pictures/$newFile");
            }
            # Comentario da aluna: Fim da verificação

            $_POST['password'] = sha1($_POST['password']);

            # Criando ou abrindo um arquivo
            $handle = fopen("database.users.txt", 'a+');
            
            # Escrever os dados no arquivo
            //$string = implode(" - ",$_POST);
            fwrite($handle, implode(" - ",$_POST).PHP_EOL);

            # Fechar o arquivo
            fclose($handle);


        }elseif($_POST['action'] == "delete"){       
           

            # Removendo o action
            unset($_POST['action']);

            # Lendo o arquivo txt
            $data = file('database.users.txt');

            # Remover a linha que eu quero excluir
            unset($data[$_POST['id']]);

            # Apagando o arquivo anterior
            //unlink("database.users.txt");

            # Recriando o arquivo com a opção "w" para zera-lo   
            $handle = fopen("database.users.txt","w+");

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

        # Redirecionar à listagem
        header("location: $urlBase/index.php?page=listUsers");

    }else{
        echo "Acesso negado";
    }


?>