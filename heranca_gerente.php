<?php
include_once('heranca_funcionario.php');

class Gerente extends Funcionario{
    protected $usuario;
    protected $senha;

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function getUsuario(){
        return $this->usuario;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }
}
    $funcionario= new Funcionario();
    $funcionario->setNome("Joao Costa");
    $funcionario->setSalario("1000,00");

    $gerente= new Gerente();
    $gerente->setNome("Pedro Silva");
    $gerente->setSalario("1000,00");
    $gerente->setUsuario("psilva");
    $gerente->setSenha("marmota19");

    echo $funcionario->getNome() . "<br />";
    echo $funcionario->getSalario() . "<br />"; 
    echo $gerente->getNome() . "<br />";
    echo $gerente->getSalario() . "<br />";
    echo $gerente->getUsuario() . "<br />";
    echo $gerente->getSenha() . "<br />";




?>