<?php

    # Criar uma função que some 2 + 2
    function sumTwo(){
       echo "2 + 2 = ".(2+2); 
    }

    # algoritmo da soma para duas parcelas = Parcela + Parcela = total
    function sum($num1, $num2){
        echo "$num1 + $num2 = ".($num1+$num2);
    }

    function mul($num1, $num2){
        $sum = 0; 
        for($k=1;$k<=$num2;$k++){
            $sum += $num1;
        }
        return $sum;
    }
 
    $a = 3;
    $b = 8;

    # Chamada da Função
    echo mul($a, $b);


?>