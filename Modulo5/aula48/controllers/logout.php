<?php

    include_once "../models/Config.php";

    session_start();

    session_destroy();

    header("location: ".Config::urlBase()."?success=session_finished");


?>