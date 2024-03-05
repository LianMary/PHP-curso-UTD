<?php

    include_once 'LibHtml.php';
   
    LibHtml::abrirTag("html");
        LibHtml::abrirTag("head");
            LibHtml::abrirTag("title");
                LibHtml::escrever("Minha página em HTML - PHP METODO ESTATICO");
            LibHtml::fechaTag("title");
        LibHtml::fechaTag("head");
        LibHtml::abrirTag("body");

            LibHtml::abrirTag("h1");
            LibHtml::escrever("Olá Mundo...");
            LibHtml::fechaTag("h1");

        LibHtml::fechaTag("body");
    LibHtml::fechaTag("html");