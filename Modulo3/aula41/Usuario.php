<?php

    class Usuario {

        public $nome;
        public $email;
        public $senha;
        public $endereco;
        public $cpf;
        public $cep;
        public $telefone;
        public $whatsapp;
        public $ativo = 1;

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
            echo "CEP: ".$this->cep."<br>";
            echo "Telefone: ".$this->telefone."<br>";
            echo "WPP: ".$this->whatsapp."<br>";
            echo ($this->ativo) ? "Usuário Ativo <br>" : "Usuario Bloqueado <br>";       
        }

        public function dadosToArray(){
            return (array) $this;
        }

        public function validaSenha($senha){
            if($this->senha == md5($senha)){
                return true;
            }else{
                return false;
            }
        }

        public function montaTabela(){
            $table = '<table border=2>';
                foreach($this->dadosToArray() as $chave=>$valor):
                $table .= '<tr>
                            <th>'.$chave.'</th>
                            <td>'.$valor.'</td>
                        </tr>';
                endforeach;
            $table .= '</table>';

            return $table;
        }


    }
