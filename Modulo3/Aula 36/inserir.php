<?php
    // id 	nome 	codigo 	preco 	estoque 	ativo 	cadastradoEm 	
    require_once 'conexao.php';
?>

<form action="#" method="POST">
    <input type="text" name="nome" placeholder="Nome do Produto"><br>
    <input type="text" name="codigo" placeholder="Codigo do Produto"><br>
    <input type="text" name="preco" placeholder="Preço do Produto"><br>
    <input type="text" name="estoque" placeholder="Estoque do Produto"><br>
    <input type="submit">
</form>
<?php

    if(isset($_POST['nome']) and !empty($_POST['nome'])){

        $nome = $_POST['nome'];
        $codigo = $_POST['codigo'];
        $preco = $_POST['preco'];
        $estoque = $_POST['estoque'];

        $query = "
            INSERT INTO `produtos` (`nome`, `codigo`, `preco`,`estoque`, `ativo`)
            VALUES ('$nome', '$codigo', $preco, $estoque, 1);
        ";

        //echo $query;

        $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

        if($resultado){
            echo "Inserido com sucesso";
        }else{
            echo "Erro ao tentar inserir";
        }
    }
?>