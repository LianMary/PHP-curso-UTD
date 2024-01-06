<?php

    #Problema: Luizinho quer saber se ele pode pilotar uma moto, ou não, confomrme sua idade
    #Condição: Idade tem que ser maior ou igula a 18 anos, então ele pode pilotar. Caso ele não seja maior de idade, 

   // $yearsOld = 19;
    $yearsOld = 15

    if ($yearsOld > 17) {
        echo "Você pode sim pilotar uma moto";
    }else{
        $x = 18-$yearsOld; 
        echo "Você não pode pilotar a moto ainda! Espere $x anos para pilortar";
    }

    
?>