<?php

    $GLOBALS["path"] = $_SERVER['DOCUMENT_ROOT'];

    //echo $GLOBALS['path'];

    function show(){
       echo $GLOBALS['path'];
    }

    show();
?>