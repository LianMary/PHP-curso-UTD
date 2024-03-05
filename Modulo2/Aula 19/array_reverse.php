<?php

    for($t=0;$t<50;$t++){
        $vetor[] = rand(0,200);
    }

    //$reverse = array_reverse($array);
    function array_reverse2($array){
        $reverse = array();
        for($begin=0,$end=count($array)-1;$end>=0;$begin++,$end--){
            $reverse[$begin] = $array[$end];
        }
        
        return $reverse;
    }

    echo "<pre>";
        print_r($vetor);
    echo "</pre>";
    
    echo "<pre>";
        print_r(array_reverse2($vetor));
    echo "</pre>";


?>