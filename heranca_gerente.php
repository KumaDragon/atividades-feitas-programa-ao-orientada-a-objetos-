<?php
include_once('heranca_funcionario.php');

class Gerente extends Funcionario{
    protected $usuario;
    protected $senha;

    public function calculaBonificacao(){
        return $this->salario * 0.3 + 100;
    }
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


?>