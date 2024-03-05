<?php

    $name = "Anthony Jefferson";
    $sex = "feminino";
    $account = "Conta Corrente";
    $numberAccount = "123456-78";
    $numberAgency  = "0288";
    $receipts = 1000.01;
    $expenses = 1352.99;
    $balance  = 1231389.19;

    $movementType = "receipt";
    $movementValue = 200.93;
    $movementTitle = "Pagamento de Contas";

    if($movementType == 'expense'){
        $balance = $balance - $movementValue;
    }else{
        $balance = $balance + $movementValue;
    }    
?>

<!DOCTYPE html>
<html>
<head>
	<title> Página do Admin </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="alert alert-warning">
			<h2 class="text-center"> Bem vindo, <?= ($sex == 'masculino') ? "Sr." : "Sra."; ?> Anthony </h2>
		</div>

		<div class="row">
			

			<div class="col-6 alert alert-success">
				<h2 class="text-center"> Dépositos na conta </h2>
                <h3 class="text-center">R$ <?=number_format($receipts, 2, ',','.');?></h3>
			</div>

			<div class="col-6 alert alert-danger">
				<h2 class="text-center"> Retiradas da conta </h2>
                <h3 class="text-center">R$ <?=number_format($expenses, 2, ',','.');?></h3>
			</div>

            <div class="col-8 alert alert-primary m-2">
				<h2 class="text-center"> Ultimas movimentações da conta </h2>
                <h3 class="text-center">
                    <ul>
                        <li>Tipo: <?=$movementType;?> </li>
                        <li>Valor: R$ <?=$movementValue;?> </li>
                        <li>Descrição: <?=$movementTitle;?> </li>
                    </ul>
                </h3>
			</div>

            <div class="col-3 alert alert-<?=($balance < 0) ? 'danger':'success';?> p-2 m-2">
				<h2 class="text-center"> Saldo </h2>
                <h3 class="text-center">R$ <?=number_format($balance, 2, ',','.');?></h3>
			</div>
		</div>
	</div>
</body>
</html>