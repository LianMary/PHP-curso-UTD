<?php

    # Abrir um arquivo
    $handle = fopen("imagem.pgm", "a+");



    # Escrever no arquivo
    fwrite($handle, "P2 ".PHP_EOL);
    fwrite($handle, "dir".PHP_EOL);
    fwrite($handle, "pause".PHP_EOL);


    # Fechar o arquivo
    fclose($handle);    


?>