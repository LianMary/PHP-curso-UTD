<?php

    class ContaCorrente extends Conta {

        private $chequeEspecial;

        public function setChequeEspecial($chequeEspecial){
            $this->chequeEspecial = $chequeEspecial;
        }
        
        public function saldo(){
            return $this->chequeEspecial + parent::getLimite();
        }


        public function mostraConta(){
            parent::mostraConta();
        }

        public function getLimiteGeral(){
            return $this->saldo();
        }

    }



?>