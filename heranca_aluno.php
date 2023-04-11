<?php
class Aluno extends Pessoa{
    private $matricula;

    public function setMatricula($m){
        $this->matricula = $m;
    }
    public function getMatricula(){
        return $this->matricula;
    }
}



?>