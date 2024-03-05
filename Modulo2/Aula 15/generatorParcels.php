<?php

    $productName = "Box Castelo Animado"; //Tipo String
    $imgUrl=" https://pbs.twimg.com/media/FY9FWrTWIAcl7rJ.jpg ";
   
    $productValue = 119.99; // Tipo double
    $qntParcelas = 12; //Tipo int 

    $parcelValue= number_format (($productValue/$qntParcelas), 2 );

?>

<!DOCTYPE html>
<html>
<head>
	<title> Gerador de Parcelas </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <div class="row mt-5">
            <div class="col-4">
                <h2 class="text-center"> <?=$productName;?> </h2>
                <p class="text-center"><img src="<?=$imgUrl;?>" class="img-fluid"></p>

            </div>

            <div class="col-7" style=" margin-left: 20px;">
                <table class="table table-bordered table-hover table-stripped text-center">
                    <thead>
                        <th>Parcela</th>
                        <th>Valor</th>
                        <th>Açoes</th>
                    </thead>
                    <tbody>
                        <?php for ($t=1; $t<= $qntParcelas; $t++):?>
                            <tr>
                                <td> <?=$t;?>º,</td>
                                <td> R$ <?=$parcelValue;?> </td>
                                <td>
                                    <button class="btn btn-xs btn-success"> Dar Baixa</button>
                                    <button class="btn btn-xs btn-warning"> Imprimir</button>
                                </td>
                            </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>