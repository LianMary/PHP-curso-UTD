<?php
#Problema: Mostrar os números de 0 até 100 na tela 
#Estrutura de repetição PARA/ DE /ATÉ(For)
/*
for ($inicio=0; $inicio < 4; $inicio++) { 
    echo "Número ".$inicio. "<br>";
}

echo "<hr>"
*/

#Problema 2: Mostrar números de 0 até 100 na tela sem ter o trabalho de corno de fazer tudo a mão
#Estrutura de repetição com condição embutida dentro dela

for ($numero=0; $numero < 101; $numero++) { 
    if ($numero > 1) {
        if ($numero % 2==0) {
            echo "$numero é PAR! | <br>";
        }
    }
}

?>