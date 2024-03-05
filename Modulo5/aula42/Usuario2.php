<?php

    class Usuario2 {

        protected $nome;
        protected $email;
        protected $senha;
        protected $endereco;
        public $cpf;
        public $cep;
        public $telefone;
        public $whatsapp;
        public $ativo = 1;

       
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }


        public function getSenha(){
            return $this->senha;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->endereco;
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
