<?php
    # Problema: Preciso saber aq faixa descritiva de uma determinada idade
    #Condições
        # 0 -12 - Criança 
        # 13 -18 -Adolescente 
        # 19- 59 - Adulto
        # 60 -99 - Idoso
        # >99 - Matusalém

    $Idade: rand(0, 117);

    echo "Idade:" .$Idade "<br>";
    
    if( $Idade < 13){
       echo "Você é uma criança" 
    }elseif($Idade < 19){
       echo "Vocẽ é um adolescente"
    }elseif( $Idade < 60){
        echo "Você é um Adulto"
    }elseif ($Idade < 99) {
        echo "Você é um idoso"
    }else{
        echo "Matusalém, é você?"
    }





?>