<?php

    class Software {
        
        private $nome;
        private $id;       
        public static $contador;
        
        public function __construct($nome){
            self::$contador++;
            $this->id = self::$contador;
            $this->nome = $nome;

            echo "Software Encontrado: ".$this->id."<br>";
            echo $this->nome."<br><br>";

        }

        public static function softwaresEncontrados(){
            return self::$contador;
        }

        

    }


