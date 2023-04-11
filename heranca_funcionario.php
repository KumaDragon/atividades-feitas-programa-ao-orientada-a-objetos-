<?php
 abstract class Funcionario{
    protected $nome;
    protected $salario;

    /*public function calculaBonificacao(){
        return $this->salario * 0.1;
    }*/
    public abstract function calculaBonificacao();

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }   
}


?>