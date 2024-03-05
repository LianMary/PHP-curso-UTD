<?php

    function validatePages(){

        if(!isset($_GET['page'])){
            return false;
        }

        switch($_GET['page']){

            case "listProduct":
                $titleSection = "Listagem de Produtos";
                $data = file('modules/products/database.product.txt');
                include_once 'modules/products/list.php';
            break;

            case "addProduct":
                echo "<h1> Cadastro de Produtos </h1>";
            break;
            
            case "editProduct":
                echo "<h1> Edição de Produtos </h1>";
            break;

            case "listClients":
                $titleSection = "Listagem de Clientes";
                include_once 'modules/clients/list.php';
            break;

            case "addClient":
                echo "<h1> Cadastro de Clientes </h1>";
            break;
            
            case "editClient":
                echo "<h1> Edição de Cliente </h1>";
            break;

        }

    }



?>