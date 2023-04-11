<?php
class Aluno extends Pessoa{
    private $matricula;

    public function imprimir($qnt){
        return $qnt * 0.9;
    }
    public function setMatricula($m){
        $this->matricula = $m;
    }
    public function getMatricula(){
        return $this->matricula;
    }
}



?>