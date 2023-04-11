<?php
abstract class Pessoa{
    protected $nome;
    protected $data_nascimento;

    public abstract function imprimir($qnt);
    

    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setDataNascimento($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }
    public function getDataNascimento(){
        return $this->data_nascimento;
    }
}


?>