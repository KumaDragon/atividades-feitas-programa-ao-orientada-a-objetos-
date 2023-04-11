<?php
class ContaBancaria{
    protected $numero;
    protected $proprietario;

    public function setNumero($n){
        $this->numero = $n;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setProprietario($proprietario){
        $this->proprietario = $proprietario;
    }
    public function getProprietario(){
        return $this->proprietario;
    }
}


?>