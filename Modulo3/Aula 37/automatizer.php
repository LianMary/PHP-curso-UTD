<?php

    require_once 'conexao.php';
    include_once 'crud.php';
  
    $dados = selecionar("clientes", null, null, null);
    
    $titulos = array_keys($dados[0]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabela de Produtos </title>
</head>
<body> 

    <table border="2">
        <thead>
            <?php foreach($titulos as $titulo): ?>
                <th><?=$titulo;?></th>
            <?php endforeach;?>
            <th> Ações </th>
        </thead>

        <tbody>
            <?php foreach($dados as $linha): ?>
                <tr style="<?=$cor;?>">
                    <?php foreach($titulos as $titulo): ?>
                        <td><?=$linha[$titulo];?></td>
                    <?php endforeach;?>                    
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