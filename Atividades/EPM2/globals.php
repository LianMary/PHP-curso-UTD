<?php
    
    $GLOBALS ["path"] = $_SERVER['DOCUMENT_ROOT'];
    
    #Função para mostrar o path
    function show(){
        echo $GLOBALS['path'];
    }

    show();

?>