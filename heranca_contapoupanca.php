<?php
class ContaPoupanca extends ContaBancaria{
    private $saldo;
    private $juros_cdi;

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }    
    public function setJuros($juros_cdi){
        $this->juros = $juros_cdi;
    }
    public function getJuros(){
        return $this->juros;
    }
}

?>