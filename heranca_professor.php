<?php
class Professor extends Pessoa{
    private $salario;

    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }
}


?>