<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Dashboard </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">
		    	<img src="https://w7.pngwing.com/pngs/627/683/png-transparent-cardboard-box-packaging-and-labeling-package-delivery-packaging-miscellaneous-cardboard-warehouse.png" class="img-fluid" width="50">
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="inicio.html"><span class="iconify" data-icon="lets-icons:chart-fill"></span> Dashboard</a>
		        </li>
		        
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            <span class="iconify" data-icon="icon-park-outline:ad-product"></span> Produtos
		          </a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="produtos.html"> <span class="iconify" data-icon="ep:list"></span> Lista de Produtos </a></li>
		            <li><a class="dropdown-item" href="novoProduto.html"><span class="iconify" data-icon="clarity:plus-circle-solid"></span> Novo Produto</a></li>
		          </ul>
		        </li>

		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            <span class="iconify" data-icon="fa-solid:users"></span> Clientes
		          </a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="clientes.html"> <span class="iconify" data-icon="ep:list"></span> Lista de Clientes </a></li>
		            <li><a class="dropdown-item" href="novoCliente.html"><span class="iconify" data-icon="clarity:plus-circle-solid"></span> Novo Cliente</a></li>
		          </ul>
		        </li>

		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            <span class="iconify" data-icon="mdi:truck"></span> Fornecedores
		          </a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="#"> <span class="iconify" data-icon="ep:list"></span> Lista de Fornecedores </a></li>
		            <li><a class="dropdown-item" href="#"><span class="iconify" data-icon="clarity:plus-circle-solid"></span> Novo Fornecedor</a></li>
		          </ul>
		        </li>
		        

		        <li class="nav-item">
		          <a class="nav-link" href="venda.html">
		          	<span class="iconify" data-icon="mdi:point-of-sale"></span> Venda</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="index.html"> <span class="iconify" data-icon="fa-solid:power-off"></span> Sair</a>
		        </li>		        
		      </ul>
		      <form class="d-flex" role="search">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
		      </form>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
					  <div class="card-header bg-primary">
					     Cadastro de Produto
					  </div>
						<div class="card-body">
						    <div class="row">
						    	<div class="col-6">
								    <div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fluent-mdl2:product-variant" style="color: #4461e0;"></span> Nome do Produto</label>
									  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto">
									</div>

								</div>

								<div class="col-6">
								    <div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ri:barcode-line" style="color: #4461e0;"></span> Código do Produto</label>
									  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder1="Codigo do Produto">
									</div>
								</div>

								<div class="col-6 mt-2">
								    <div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="vaadin:stock" style="color: #4461e0;"></span> Estoque </label>
									  <input type="email" class="form-control estoque" id="exampleFormControlInput1" placeholder1="Estoque do Produto">
									</div>
								</div>

								<div class="col-6 mt-2">
								    <div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="eos-icons:container" style="color: #4461e0;"></span> Preço de Compra </label>
									  <input type="text" class="form-control preco" id="exampleFormControlInput1" placeholder1="Preço de Compra">
									</div>
								</div>

								<div class="col-6 mt-2">
								    <div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="solar:tag-price-bold" style="color: #4461e0;"></span> Preço de Venda </label>
									  <input type="text" class="form-control preco" id="exampleFormControlInput1" placeholder1="Preço de Venda">
									</div>
								</div>

								<div class="col-12 mt-3">
									<p class="text-end">
										<button class="btn btn-outline-primary">
											<span class="iconify" data-icon="material-symbols:save-sharp" style="color: #4461e0;"></span>
											Salvar Dados
										</button>
									</p>
								</div>
						  	</div>
						</div>
					</div>				
				</div>
			</div>
		</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>
		<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
			  $('.preco').mask('000.000.000.000.000,00', {reverse: true});
			  $('.estoque').mask('00000', {reverse: true});
			});
		</script>

	</body>
</html>