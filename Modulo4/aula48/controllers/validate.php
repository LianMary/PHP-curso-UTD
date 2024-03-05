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
                $links[] = '<a class="btn btn-danger btn-md"><span class="iconify" data-icon="mdi:trash"></span></a> ';
                $links[] = '<a class="btn btn-warning btn-md"><span class="iconify" data-icon="mdi:edit"></span></a> ';
                
                include_once Config::pathBase()."/views/modulos/produtos/lista.php";
                //LibHtml::criarTabela($lista, ["class"=>'table table-hover table-responsive']);              
            break;

            case 'adicionarProduto':
                $titleSection = "Adicionar Produto";
                include_once Config::pathBase()."/views/modulos/produtos/adicionar.php";
            break;

            case 'atualizarProduto':
                $data = (new Manager)->select_common("produtos", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Atualizar Produto";
                include_once Config::pathBase()."/views/modulos/produtos/atualizar.php";
            break;



            case "listarClientes":
                $titleSection = "Lista de Clientes - 2";
                $lista = (new Manager)->select_common("clientes", null, null, null);
                
                $links[] = '<a class="btn btn-danger btn-md"><span class="iconify" data-icon="mdi:trash"></span></a> ';
                $links[] = '<a class="btn btn-warning btn-md"><span class="iconify" data-icon="mdi:edit"></span></a> ';
                
                
                include_once Config::pathBase()."/views/modulos/clientes/lista.php";
                //LibHtml::criarTabela($lista, ["class"=>'table table-hover table-responsive']);              
            break;

        }


    }


?>