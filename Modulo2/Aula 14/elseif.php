<?php

    # Problema: Eu preciso saber a faixa descritiva de uma determinada idade
    # Condições:
    # 0  - 12 : Criança
    # 13 - 18 : Adolescente
    # 19 - 59 : Adulto
    # 60 - 99 : Idoso
    # > 99 : Matusalém

    $yearsOld = rand(0, 150);

    echo "Idade: ".$yearsOld."<br>";

    // if($yearsOld < 13){
    //     echo "Você é uma criança.";
    // }else{
    //     if($yearsOld < 19){
    //         echo "Você é um Adolescente.";
    //     }else{
    //         if($yearsOld < 60){
    //             echo "Você é um Adulto.";
    //         }else{                
    //             if($yearsOld < 100){
    //                 echo "Você é um Idoso";
    //             }else{
    //                 echo "Você é um Matusalém!!!";
    //             }
    //         }
    //     }
    // }
    
    if($yearsOld < 13){
        echo "Você é uma criança.";
    }elseif($yearsOld < 19){
        echo "Você é um Adolescente.";
    }elseif($yearsOld < 60){
        echo "Você é um Adulto.";
    }elseif($yearsOld < 100){
        echo "Você é um Idoso.";
    }else{
        echo "Você é um Matusalém!!!";
    }



?>