<?php

    //var_dump($_POST);
    include_once '../models/Config.php';
    include_once Config::pathBase()."/models/Connect.php";
    include_once Config::pathBase()."/models/Manager.php";

    $manager = new Manager;

    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    $login = $manager->select_common("usuarios", null, ["email"=>$email], " limit 1");

    if(!$login){
        //echo "sem ocorrencias com esse email";
        header("location: ".Config::urlBase()."?error=login_error");
    }elseif($login[0]["senha"] != sha1($senha)){
        //echo "erro de senha";
        header("location: ".Config::urlBase()."?error=login_error");
    }else{
        
        session_start();
        unset($login[0]['senha']);
        $_SESSION[sha1("user_data")] = $login;
        header("location: ".Config::urlBase());
    
    }



?>