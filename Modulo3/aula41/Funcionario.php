<?php

    class Funcionario extends Usuario {

        public $salario;
        public $cargo;

        public function __construct($nome, $email, $senha, $salario){
            parent::__construct($nome, $email, $senha);
            $this->salario = $salario;
        }
        
        public function exibirDados(){
            parent::exibirDados();
            echo "Salario: R$ ".$this->salario."<br>";
            echo "Cargo Atual:".$this->cargo."<br>";
        }
    }
