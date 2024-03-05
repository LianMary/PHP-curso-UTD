<?php
    // id 	nome 	codigo 	preco 	estoque 	ativo 	cadastradoEm 	
    require_once 'conexao.php';
    include_once 'crud.php';
?>

<form action="#" method="POST">
    <input type="text" name="nome" placeholder="Nome do Produto"><br>
    <input type="text" name="codigo" placeholder="Codigo do Produto"><br>
    <input type="text" name="preco" placeholder="Preço do Produto"><br>
    <input type="text" name="estoque" placeholder="Estoque do Produto"><br>
    <!-- <input type="hidden" name="ativo" value="1"> -->
    <input type="hidden" name="isDeleted" value="">
    <input type="submit">
</form>
<?php

    if(isset($_POST['nome']) and !empty($_POST['nome'])){
        
        $_POST['ativo'] = ($_POST['estoque'] > 0) ? '1' : '0';

        $resultado = inserir("produtos", $_POST);

        if($resultado){
            echo "Inserido com sucesso";
        }else{
            echo "Erro ao tentar inserir";
        }
    }
?>