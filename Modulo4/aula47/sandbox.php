<?php

    include_once 'models/Connect.php';
    include_once 'models/Manager.php';
    
    include_once 'models/Produto.php';
    include_once 'controllers/ProdutoController.php';
    
    include_once 'models/Cliente.php';
    include_once 'controllers/ClienteController.php';

    if(isset($_GET['rota'])){
        $data = explode("/", $_GET['rota']);
        $string = ucfirst($data[0])."Controller";

        switch($data[1]){
            case 'listagem':
                $string::listagem();
            break;

            case 'contador':
                $string::contador();
            break;
        }
    }


?>