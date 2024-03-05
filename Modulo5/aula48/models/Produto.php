<?php

    class Produto extends Manager {

        public static function listagem(){
            return (new Manager)->select_common("produtos",null,null,null);
        }

        public static function buscaPorId($id){
            return (new Manager)->select_common("produtos",null,["id"=>$id],null);
        }

        public static function insereProduto($produto){
            return (new Manager)->insert_common("produtos",$produto, null);
        }

        public static function atualizarProduto($dados, $id){
            return (new Manager)->update_common("produtos",$dados, ["id"=>$id], null);
        }

        public static function excluirProduto($id){
            return (new Manager)->delete_common("produtos",["id"=>$id], null);
        }


    }

