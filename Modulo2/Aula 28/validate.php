<?php

    function validatePages(){

        if(!isset($_GET['page'])){
            return false;
        }

        switch($_GET['page']){

            case "listProducts":
                $titleSection = "Listagem de Produtos";
                $data = file('modules/products/database.product.txt');
                include_once 'modules/products/list.php';
            break;

            case "addProducts":
                echo "<h1> Cadastro de Produtos </h1>";
            break;
            
            case "editProducts":
                echo "<h1> Edição de Produtos </h1>";
            break;

            case "listClients":
                $titleSection = "Listagem de Clientes";
                include_once 'modules/clients/list.php';
            break;

            case "addClients":
                echo "<h1> Cadastro de Clientes </h1>";
            break;
            
            case "editClients":
                echo "<h1> Edição de Cliente </h1>";
            break;

            case "listUsers":
                $titleSection = "Listagem de Usuários";
                $data = file('modules/users/database.users.txt');
                include_once 'modules/users/list.php';
            break;

            case "addUsers":
                $titleSection = "Adicionar Usuário";
                include_once 'modules/users/addUser.php';
            break;
            
            case "editUsers":
                echo "<h1> Edição de Usuários </h1>";
            break;

        }

    }



?>