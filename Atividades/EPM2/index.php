<?php
    include_once 'config.php';
    include_once 'validate.php';

    $pageTitle = "Sistema - ".$projectName;

    funtion pageContent(){
        validatePages();
    }

    include_once 'layout.php';

?>