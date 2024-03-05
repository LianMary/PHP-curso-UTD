<?php

    class Cliente extends Manager {

        public static function listagem(){
            return (new Manager)->select_common("clientes",null,null,null);
        }

        public static function buscaPorId($id){
            return (new Manager)->select_common("clientes",null,["id"=>$id],null);
        }

        public static function insereCliente($cliente){
            return (new Manager)->insert_common("clientes",$cliente, null);
        }

        public static function atualizarCliente($dados, $id){
            return (new Manager)->update_common("clientes",$dados, ["id"=>$id], null);
        }

        public static function excluirCliente($id){
            return (new Manager)->delete_common("clientes",["id"=>$id], null);
        }


    }

