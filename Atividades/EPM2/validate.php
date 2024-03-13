<?php
    #Funcao para valisar paginas
    function validatePages()
    {
        if(!isset($_GET['page'])){
            return false;
        }

        switch($_GET['page']){
            case 'listProducts' :
                $titleSection = "Lista de Compras";
                $data = file('modules/products/database.product.txt');
                include_once 'modules/products/list.php';
            break;

            case 'addProducts' : 
                echo "<h1> Adicionar itens a Lista</h1>";
            break;

            case "editProducts" :
                echo "<h1> Editar Item </h1>";
            break;
            
            case "listPeople" :
                $titleSection = "Integrantes da Compra";
                $data = file('modules/users/database.people.txt');
                include_once 'modules/users/list.php'
            break;

            case "addPeople" :
                $titleSection = " Adicionar Pessoa"; 
                include_once 'modules/users/add.People.php';
            break;

            case "editPeople" :
                echo "h1> Edição de Pessoas</h1>";
            break;
        }

    }

?>