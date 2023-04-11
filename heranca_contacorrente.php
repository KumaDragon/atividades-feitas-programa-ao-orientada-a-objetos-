<?php
class ContaCorrente extends ContaBancaria{
    private $saldo;
    private $taxa;

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setTaxa($taxa){
        $this->taxa = $taxa;
    }
    public function getTaxa(){
        return $this->taxa;
    }
}

?>