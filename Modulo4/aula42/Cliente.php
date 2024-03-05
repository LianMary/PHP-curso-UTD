<?php

    class Cliente extends Usuario2 {

        public $saldoBonus = 0;

        // public function __construct($nome, $email, $senha){
        //     parent::__construct($nome, $email, $senha);
        // }

        public function exibirDados(){
            parent::exibirDados();
            echo "Saldo de Bonus: ".$this->saldoBonus."<br>";
        }

        public function bonificar($bonus){
            $this->saldoBonus += $bonus;
        }

        public function descontarBonus($desconto){
            $this->saldoBonus -= $desconto;
        }


    }
