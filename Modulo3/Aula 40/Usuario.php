<?php

    class Usuario {

        public $nome;
        public $email;
        public $senha;
        public $endereco;
        public $cpf;
        public $ativo;

        # Metodo construtor da classe
        public function __construct($nome, $email, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = md5($senha);
        }

        # Criando o método exibir dados
        public function exibirDados(){
            
            echo "Nome: ".$this->nome."<br>";
            echo "Email: ".$this->email."<br>";
            echo "Endereço: ".$this->endereco."<br>";
            echo "Senha: ".$this->senha."<br>";
            echo "CPF: ".$this->cpf."<br>";
            echo ($this->ativo) ? "Usuário Ativo" : "Usuario Bloqueado";
            echo "<hr>";
        
        }

    }
