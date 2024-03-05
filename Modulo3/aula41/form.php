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
		          <a class="nav-link active" aria-current="page" href="inicio.html">Dashboard</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="produtos.html">Produtos</a>
		        </li>
		        
		        <li class="nav-item">
		          <a class="nav-link" href="clientes.html">Clientes</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="venda.html">Venda</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="index.html">Sair</a>
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
					  <div class="card-header bg-success">
					     Cadastro de Cliente
					  </div>
						<div class="card-body">
                            <form action="receive.php" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Nome Completo </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="fullName">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ic:twotone-email" style="color: #198754;"></span> Email </label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="email" required autocomplete="false">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ph:password-fill" style="color: #198754;"></span> Senha </label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="pass">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="solar:password-bold" style="color: #198754;"></span> Confirmação de Senha </label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="confPass">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fa6-solid:address-card" style="color: #198754;"></span> CPF </label>
                                        <input type="text" class="form-control cpf" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="document">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="entypo:address" style="color: #198754;"></span> Endereço </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="address">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="carbon:map" style="color: #198754;"></span> CEP </label>
                                        <input type="text" class="form-control cep" id="exampleFormControlInput1" placeholder1="CEP" name="postalCode">
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ph:phone-fill" style="color: #198754;"></span> Telefone </label>
                                        <input type="text" class="form-control telefone" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="phone">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="mingcute:whatsapp-fill" style="color: #198754;"></span> Whatsapp </label>
                                        <input type="text" class="form-control whatsapp" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="whatsapp">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <p class="text-end">
                                            <button class="btn btn-outline-success">
                                                <span class="iconify" data-icon="material-symbols:save-sharp" style="color: #198754;"></span>
                                                Salvar Dados
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>				
				</div>
			</div>
		</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>
		<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.cpf').mask('000.000.000-00', {reverse: true});
				$('.cep').mask('00000-000');
				$('.telefone').mask('(00) 0000-0000');
				$('.whatsapp').mask('(00) 00000-0000');
			});
		</script>

	</body>
</html>