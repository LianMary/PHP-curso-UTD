<?php

    include_once 'json.php';

    if(isset($_GET['opcao']) && $_GET['opcao'] == "listar"){
        echo json_encode($data);
    }

    

?>