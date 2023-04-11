<?php

include_once('heranca_pessoa.php');
include_once('heranca_aluno.php');
include_once('heranca_professor.php');


$aluno=new Aluno();
$aluno->setNome("Carlos");
$aluno->setDataNascimento("06/04/1998");
$aluno->setMatricula("21354");

echo $aluno->getNome() . "<br />";
echo $aluno->getDataNascimento() . "<br />";
echo $aluno->getMatricula() . "<br />";
echo $aluno->imprimir('10'). "<br />";

$professor=new Professor();
$professor->setNome("Tadeu");
$professor->setDataNascimento("17/09/1978");
$professor->setSalario("4235,00");

echo $professor->getNome() . "<br />";
echo $professor->getDataNascimento() . "<br />";
echo $professor->getSalario() . "<br />";
echo $professor->imprimir('10'). "<br />";




?>