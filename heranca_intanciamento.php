<?php
include_once('heranca_contabancaria.php');

$cb=new ContaBancaria();
$cb->setNumero("2131-5");
$cb->setProprietario("Pedro");

$cp=new ContaPoupanca();
$cp->setNumero("2133-5");
$cp->setProprietario("Joao");
$cp->setSaldo("2139,00");
$cp->setJuros("21%");

$cc=new ContaCorrente();
$cc->setNumero("2234-7");
$cc->setProprietario("Joana");
$cc->setSaldo("1239080,00");
$cc->setTaxa("18%");


?>