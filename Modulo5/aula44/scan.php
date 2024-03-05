<?php

    include_once 'Software.php';

    new Software('League of Legends');
    new Software('Vs code');
    new Software("Java JRE");
    new Software("Firefox");

    echo "Softwares encontrados: ".Software::softwaresEncontrados();

    