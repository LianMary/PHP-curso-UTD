<?php

    include_once 'models/Config.php';
    include_once 'controllers/validate.php';

    session_start();

    if(!isset($_SESSION[sha1('user_data')])){
        header("location: ".Config::urlBase()."?error=access_denied");
    }

    $userData = $_SESSION[sha1('user_data')];

    function pageContent(){
        validarPagina();
    }

    include_once 'views/layout.php';


?>