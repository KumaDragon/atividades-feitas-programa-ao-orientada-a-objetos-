<?php
class Professor extends Pessoa{
    private $salario;

    public function imprimir($qnt){
        return $qnt * 0.6;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }
}


?>