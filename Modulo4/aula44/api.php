<?php

    include_once 'LibHtml.php';

    $dados = file_get_contents("http://localhost/aula44/endpoint.php?opcao=listar");

    //var_dump($dados);
    $resultado = json_decode($dados, true);

    //var_dump($resultado);

    //$array[] = array("id"=>1,"nome"=>"Anthony");
    LibHtml::abrirTag("link",["href"=>"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css","rel"=>"stylesheet"]);
    LibHtml::abrirTag("div",["class"=>"container"]);
        LibHtml::abrirTag("div",["class"=>"row"]);
            LibHtml::abrirTag("div",["class"=>"col-md-6 offset-md-3"]);        
                LibHtml::criarTabela($resultado, ["class"=>"table table-bordered table-hover"]);
            LibHtml::fechaTag('div');
        LibHtml::fechaTag('div');
    LibHtml::fechaTag('div');
?>