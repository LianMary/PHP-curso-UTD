<?php

    class Cesta {

        private $data;
        private $itens;

        public function __construct(){
            $this->data = date('Y-m-d H:i:s');
            $this->itens = array();
        }

        public function addItem(Produto $p){
            $this->itens[] = $p;
        }

        public function getItens(){
            return $this->itens;
        }

        public function getData(){
            return $this->data;
        }

    }
