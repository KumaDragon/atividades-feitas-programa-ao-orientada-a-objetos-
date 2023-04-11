<?php
class Cliente{
    //propriedades da classe
    private $nome;
    private $email;
    private $d_nascimento;
    private $telefone;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setDNascimento($d_nascimento){
        $this->d_nascimento = $d_nascimento;
    }

    public function getDNascimento(){
        return $this->d_nascimento;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    
    //metodo da classe
    /*function cadastro($nome, $email, $d_nascimento, $telefone){
    $this->setNome($nome);
    $this->setEmail($email);
    $this->d_nascimento = $this-> $d_nascimento;
    $this->telefone = $this->$telefone;
    return $nome;
}*/
}
    //instância da classe e atribuir os valores
    /*$cliente = new Cliente();
    $cliente->cadastro("Joao", "joaomanero2000@gmail.com", "25/04/2000", "963245-0789");*/

    //mostrar a classe

    $cliente = new Cliente();
    $cliente->setNome("Roberto");
    $cliente->setEmail("robertassogato@gmail.com");
    $cliente->setDNascimento("14/03/1998");
    $cliente->setTelefone("9699154-9080");


    echo $cliente->getNome() . "<br />";
    echo $cliente->getEmail() . "<br />";
    echo $cliente->getDNascimento() . "<br />";
    echo $cliente->getTelefone();

class Funcionario{
    private $nome;
    private $id;
    private $salario;
    private $telefone;


    function gerarBonificacao(){

    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
    
    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    
}

    $func = new Funcionario();
    $func->setNome("Joao");
    $func->setId("079");
    $func->setSalario("14.000");
    $func->setTelefone("9699180-4560");

    echo $func->getNome() . "<br />";
    echo $func->getId() . "<br />";
    echo $func->getSalario() . "<br />";
    echo $func->getTelefone();

class Departamento{
    private $nome;
    private $setor;
    private $qt_func;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function getSetor(){
        return $this->setor;
    }

    public function setQtFunc($qt_func){
        $this->qt_func = $qt_func;
    }

    public function getQtFunc(){
        return $this->qt_func;
    }
    
}
    $dep = new Departamento();
    $dep->setNome("Contabilidade");
    $dep->setSetor("Finanças");
    $dep->setQtFunc("14");

    echo $dep->getNome() . "<br />";
    echo $dep->getSetor() . "<br />";
    echo $dep->getQtFunc();

class Produto{
    private $nome;
    private $numRegistro;
    private $valor;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNumRegistro($numRegistro){
        $this->numRegistro = $numRegistro;
    }

    public function getNumRegistro(){
        return $this->numRegistro;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }
    
    function gerarCodigoBarra(){

    }
}
    $prod = new Produto();
    $prod->setNome("Empréstimo");
    $prod->setNumRegistro("591");
    $prod->setValor("14.000");

    var_dump($prod);
    echo $prod->getNome() . "<br />";
    echo $prod->getNumRegistro() . "<br />";
    echo $prod->getValor();


class ContaBancaria{
    private $nomeCli;
    private $numAgencia;
    private $numConta;
    private $saldo;

    public function setNomeCli($nomeCli){
        $this->nomeCli = $nomeCli;
    }

    public function getNomeCli(){
        return $this->nomeCli;
    }

    public function setNumAgencia($numAgencia){
        $this->numAgencia = $numAgencia;
    }

    public function getNumAgencia(){
        return $this->numAgencia;
    }

    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }

    public function getNumConta(){
        return $this->numConta;
    }
    
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    
    function gerarCodigoBarra(){

    }
}
        function sacar($valor){
        $this->saldo = $this->saldo - $valor;
}

        function depositar($valor){
        $this->saldo = $this->saldo + $valor;
}

    $cb = new ContaBancaria();
    $cb->setNomeCli("Aranaldo");
    $cb->setNumAgencia("2512");
    $cb->setNumConta("14798");
    $cb->setSaldo("0");

    echo $cb->getNomeCli() . "<br />";
    echo $cb->getNumAgencia() . "<br />";
    echo $cb->getNumConta() . "<br />";
    echo $cb->getSaldo();


class Pessoa{
    private $nome;
    private $d_nascimento;
    private $telefone;


    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setDNascimento($d_nascimento){
        $this->d_nascimento = $d_nascimento;
    }

    public function getDNascimento(){
        return $this->d_nascimento;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }
}
    $pessoa = new Pessoa();
    $pessoa->setNome("Carlos");
    $pessoa->setDNascimento("12/09/1993");
    $pessoa->setTelefone("9698129-5624");

    var_dump($pessoa);
    echo $pessoa->getNome() . "<br />";
    echo $pessoa->getDNascimento() . "<br />";
    echo $pessoa->getTelefone();


?>