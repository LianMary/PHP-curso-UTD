<?php

    require_once 'conexao.php';

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $query = "UPDATE `produtos` SET `isDeleted`='*' WHERE `id`= '$id'";

        $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

        if($resultado){
            header("location: lista.php?delete=ok");
        }else{
            header("location: lista.php?delete=erro");
        }

    }else{
        header("location: lista.php?msg=proibido");
    }

