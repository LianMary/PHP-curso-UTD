<?php

    include_once 'Conta.php';
    include_once 'ContaCorrente.php';
    include_once 'ContaPoupanca.php';

    $romario = new Conta;
    $romario->setLimite(100000);
    $romario->setNome("Romario Paixão");
    $romario->setAgencia("0288");
    $romario->setConta("0174504-3");
    //$romario->setChequeEspecial(1000);

    $romario->mostraContaTotal();
    //var_dump($romario->validaLimite($romario->getLimite()));
    echo "Limite: ".$romario->getLimite()."<br>";

    var_dump($romario);

?>