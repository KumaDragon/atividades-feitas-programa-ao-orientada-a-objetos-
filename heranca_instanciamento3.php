<?php
    include_once('heranca_funcionario.php');
    include_once('heranca_secretaria.php');
    include_once('heranca_gerente.php');

    $gerente= new Gerente();
    $gerente->setNome("Pedro Silva");
    $gerente->setSalario("2000,00");
    $gerente->setUsuario("psilva");
    $gerente->setSenha("marmota19");

    echo $gerente->calculaBonificacao(). "<br />";
    echo $gerente->getNome() . "<br />";
    echo $gerente->getSalario() . "<br />";
    echo $gerente->getUsuario() . "<br />";
    echo $gerente->getSenha() . "<br />";

    $secretaria= new Secretaria();
    $secretaria->setNome("Aranilde");
    $secretaria->setSalario("2000,00");
    $secretaria->setRamal("23");

    echo $secretaria->calculaBonificacao(). "<br />";
    echo $secretaria->getNome() . "<br />";
    echo $secretaria->getSalario() . "<br />";
    echo $secretaria->getRamal() . "<br />";

        
    



?>