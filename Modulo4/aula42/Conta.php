<?php

    abstract class Conta{

        protected $limite;
        protected $nome;
        protected $agencia;
        protected $conta;

        public function setLimite($limite){
            if($this->validaLimite($limite)){
                $this->limite = $limite;
            }else{
                $this->limite = 0;
            }    
        }

        public function getLimite(){
            return $this->limite;
        }

        private function validaLimite($limite){
            if($limite >= 0){
                return true;
            }else{
                return false;
            }
        }


        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setAgencia($agencia){
            $this->agencia = $agencia;
        }

        public function getAgencia(){
            return $this->agencia;
        }

        public function setConta($conta){
            $this->conta = $conta;
        }

        public function getConta(){
            return $this->conta;
        }

        public function mostraContaTotal(){
            return $this->mostraConta();
        }

        protected function mostraConta(){
            echo "---- Dados da Conta --- <br>";
            echo "Usuario: ".$this->nome."<br>";
            echo "Ag: ".$this->agencia."<br>";
            echo "Conta: ".$this->conta."<br>";
        }


    }