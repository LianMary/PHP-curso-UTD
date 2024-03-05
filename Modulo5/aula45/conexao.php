<?php

    //$conn = new PDO("mysql:localhost;database:sistema",'root','');

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=sistema', "root", "");

        //echo "Conectado com sucesso";

        $stmt = $dbh->prepare("SELECT * FROM produtos");
        
        $stmt->execute();

        //$result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data = [];

        if($stmt->rowCount()){
            while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data[] = $result;
            }
        }

        var_dump($data);

    } catch (PDOException $e) {
        // tentar reconectar após algum intervalo, por exemplo
        echo "Erro ao executar: ".$e->getMessage();
    }


