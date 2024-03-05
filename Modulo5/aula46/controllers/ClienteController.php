<?php

    //include_once '../models/Connect.php';
    //include_once '../models/Manager.php';
    //include_once '../models/Produto.php';


    class ClienteController {

        public static function listagem(){
            $lista = Cliente::listagem();
            include_once 'views/modulos/clientes/lista.php';
        }

        public static function contador(){
            for($a=0;$a<=20;$a++){
                echo "Contando $a <br>";
            }
        }
    }



    // switch($_GET['page']){
    //     case "listagem":
    //         $lista = Produto::listagem();
    //         include_once '../views/modulos/produtos/lista.php';
    //     break;
    // }


?>