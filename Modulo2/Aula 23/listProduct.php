<?php

    # Ler o arquivo de dados
    $data = file('database.product.txt');
    
    #Transfoma em String para facilitar a manipulação separando os dados e deixando mais legiveis 
    foreach($data as $string){
        $array = explode(" - " , $string);
        foreach ($array as $a) {
            echo  "$a "."<br>";
        }
        echo "<br>";
    }


?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Inicio </title>
		<link rel="stylesheet" type="text/css" href="../aula18/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
	</head>
	<body>	
		
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-12">					

					<div class="card">
					  <div class="card-header bg-primary">					     
					    Lista de Produtos
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><a href="addProduct.php" class="btn btn-outline-success"> <span class="iconify" data-icon="line-md:plus-square-twotone"></span> Novo Produto </a></li>
					  </ul>
					  <div class="card-body">
                        <table class="table table-bordered table-hover table-stripped" id="myTable">
                            <thead class="text-center">
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Código</th>
                                <th>EAN</th>
                                <th>Preço Compra</th>
                                <th>Preço Venda</th>
                                <th>Estoque</th>
                                <th>Custo</th>
                                <th>Ações</th>
                            </thead>
                            <tbody>
                                <?php foreach($data as $key=>$dt): ?>
                                    <?php $token = base64_encode($dt);?>
                                    <?php $dt = explode(" - ", $dt);?>
                                    <tr>
                                        <td class="text-center"><img src='<?=$dt[6];?>' class="img-fluid" width="50"></td>
                                        <td><?=$dt[0];?></td>
                                        <td><?=$dt[1];?></td>
                                        <td><?=$dt[2];?></td>
                                        <td><?=$dt[3];?></td>
                                        <td><?=$dt[4];?></td>
                                        <td><?=$dt[5];?></td>
                                        <td>R$ <?=number_format((str_replace(",",".",$dt[3])*$dt[5]),2);?></td>
                                        <td>
                                         
                                            <a href="updateProduct.php?id=<?=$key;?>&token=<?=$token;?>" class="btn btn-sm btn-secondary">
                                                <span class="iconify" data-icon="ph:pencil-bold"></span>
                                            </a>

                                            <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal-<?=$key;?>">
                                                <span class="iconify" data-icon="ph:trash-bold"></span>
                                            </button>
                                            <button class="btn btn-sm btn-secondary">
                                                <span class="iconify" data-icon="solar:printer-bold"></span>
                                            </button>                                        
                                        </td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-<?=$key;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="product.php" method="POST">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Excluir Produto
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Tem certeza que deseja excluir o produto 
                                                            <strong><?=$dt[0];?></strong>?
                                                        </div>
                                                        <input type="hidden" name="action" value="delete">
                                                        <input type="hidden" name="id" value="<?=$key;?>">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                            <button type="submit" class="btn btn-danger">Sim, excluir! </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </tr>
                                <?php endforeach;?>
                            </tbody>                            
                        </table>
					  </div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>

	</body>
</html>