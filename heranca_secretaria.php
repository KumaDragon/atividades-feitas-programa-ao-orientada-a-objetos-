<?php
include_once('heranca_funcionario.php');

class Secretaria extends Funcionario{
    protected $ramal;

    public function calculaBonificacao(){
        return $this->salario * 0.2 + 100;
    }

    public function setRamal($ramal){
        $this->ramal = $ramal;
    }
    public function getRamal(){
        return $this->ramal;
    }
}

?>