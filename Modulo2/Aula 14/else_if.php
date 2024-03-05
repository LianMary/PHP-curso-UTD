<?php

    # Problema: Luizinho quer saber se ele pode pilotar uma moto legalmente, ou não, conforme sua idade. 
    # Condição: Idade tem que ser maior ou igual a 18 anos, então uma mensagem informando que ele pode pilotar deve aparecer. Se ele não tiver idade sulficiente, então uma mensagem deve aparecer informando que ele deve aguardar X anos... 

    $yearsOld = rand(10,99);

    # se (condicao for verdade) { executa comandos } 
    # senão { executar comandos para o caso falso }
    
    echo "Idade: ".$yearsOld."<br>";

    if($yearsOld > 17){
       echo "Luizinho pode pilotar a moto!"; 
    }else{             
        echo "Luizinho deve esperar ".(18-$yearsOld)." ano(s) para poder pilotar!";
    }

  



?>