<?php
include_once('heranca_funcionario.php');

class Secretaria extends Funcionario{
    protected $ramal;

    public function setRamal($ramal){
        $this->ramal = $ramal;
    }
    public function getRamal(){
        return $this->ramal;
    }
}
$funcionario= new Funcionario();
$funcionario->setNome("Joao Pedro");
$funcionario->setSalario("100,00");

$secretaria= new Secretaria();
$secretaria->setNome("Aranilde");
$secretaria->setSalario("300,00");
$secretaria->setRamal("23");

    echo $funcionario->getNome(). "<br />";
    echo $funcionario->getSalario() . "<br />"; 
    echo $secretaria->getNome() . "<br />";
    echo $secretaria->getSalario() . "<br />";
    echo $secretaria->getRamal() . "<br />";



?>