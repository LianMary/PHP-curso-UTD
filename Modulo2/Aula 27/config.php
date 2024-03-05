<?php

    # Configurações do Sistema
    $projectName = "Stock Power";
    $projectFolderName = "aula27"; 
    $version = "0.1";

    $urlBase  = "http://".$_SERVER['SERVER_NAME']."/".$projectFolderName;
    $pathBase = $_SERVER['DOCUMENT_ROOT']."/".$projectFolderName;

    $GLOBALS['urlBase'] = $urlBase;
    $GLOBALS['pathBase'] = $pathBase;
    
    

?>