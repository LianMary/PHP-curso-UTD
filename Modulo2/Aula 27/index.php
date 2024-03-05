<?php

    include_once 'config.php';
    include_once 'validate.php';

    function pageContent(){
        validatePages();
    }

    include_once 'layout.php';


?>