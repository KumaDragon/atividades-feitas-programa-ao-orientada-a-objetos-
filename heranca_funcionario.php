<?php
 class Funcionario{
    protected $nome;
    protected $salario;

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

    $func = new Funcionario();
    $func->setNome("Joao Costa");
    $func->setSalario("1000,00");

    echo $func->getNome() . "<br />";
    echo $func->getSalario() . "<br />";   
    

?>