<?php



    function validarPagina(){

        include_once Config::pathBase()."/models/Connect.php";
        include_once Config::pathBase()."/models/Manager.php";
        include_once Config::pathBase()."/models/LibHtml.php";

        if(!isset($_GET['pagina'])){
            return false;
        }

        switch($_GET['pagina']){

            case "listarProdutos":
                $titleSection = "Lista de Produtos";
                $lista = (new Manager)->select_common("produtos", null, null, null);
                include_once Config::pathBase()."/views/modulos/produtos/lista.php";
                //LibHtml::criarTabela($lista, ["class"=>'table table-hover table-responsive']);              
            break;

            case "listarClientes":
                $titleSection = "Lista de Clientes";
                $lista = (new Manager)->select_common("clientes", null, null, null);
                include_once Config::pathBase()."/views/modulos/clientes/lista.php";
                //LibHtml::criarTabela($lista, ["class"=>'table table-hover table-responsive']);              
            break;

        }


    }


?>