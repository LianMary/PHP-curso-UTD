<?php

    require_once 'conexao.php';
    include_once 'crud.php';


    $filtros = null;

    if(isset($_GET['filtro'])){
        switch($_GET['filtro']){
            case 1:
                $filtros['ativo'] = '1';
            break;

            case 2:
                $filtros['ativo'] = 0;
            break;

            case 3:
                $filtros = null;
            break;

            case 4:
                $filtros['isDeleted'] = '*';
                //$filtro = "";
            break;    
        }
    }

    $dados = selecionar("produtos", null, $filtros, null);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabela de Produtos </title>
</head>
<body>
    
    <hr>
        <a href="?filtro=3"> Ver Todos </a> | 
        <a href="?filtro=1"> Ver Ativos </a> | 
        <a href="?filtro=2"> Ver Inativos </a> | 
        <a href="?filtro=4"> Ver Deletados </a> | 
    <hr>

    <table border="2">
        <thead>
            <th>id</th>
            <th>nome</th>
            <th>codigo</th>
            <th>preco</th>
            <th>estoque</th>
            <th>ativo</th>
            <th>cadastradoEm</th>
            <th> Ações </th>
        </thead>

        <tbody>
            <?php foreach($dados as $linha): ?>
                <?php $cor = ($linha['estoque'] < 0) ? "color: red; font-weight: bolder;" : "" ;?>
                <tr style="<?=$cor;?>">
                    <td><?=$linha['id'];?></td>
                    <td><?=$linha['nome'];?></td>
                    <td><?=$linha['codigo'];?></td>
                    <td><?=$linha['preco'];?></td>
                    <td><?=$linha['estoque'];?></td>
                    <td><?=($linha['ativo']) ? "Ativo": "Inativo" ;?></td>
                    <td><?=$linha['cadastradoEm'];?></td>
                    <td> 
                        <a href="deletar.php?id=<?=$linha['id'];?>"> Excluir </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>

    </table>    
    <?php
        if(isset($_GET['delete'])){
            if($_GET['delete'] == "ok"){
                echo '<script> alert("Deletado com sucesso!!")</script>';
            }
        }
    ?>

</body>
</html>