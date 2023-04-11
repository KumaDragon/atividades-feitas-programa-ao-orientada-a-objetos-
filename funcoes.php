<?php
function nomeDaFuncao(){
    return "Esse é o texto que retornara";
}

$texto = nomeDaFuncao(). "<br/>";

echo $texto;

function retornaNumero(){
    return rand(1,1000). "<br/>";
}
$numero = retornaNumero();
    //echo $numero;

    $numero1 = retornaNumero();
    echo $numero1;
    echo "<br/>";

    $numero2 = retornaNumero();
    echo $numero2;
    echo "<br/>";

    $numero3 = retornaNumero();
    echo $numero3;
    echo "<br/>";
    

    echo $numero1 + $numero2 + $numero3 . "<br/>";

?>
    <h3> Funções </h3>
    <h4> Dobro das funções </h4>

<?php

function dobro($n){
    return $n*2;
}
    echo dobro(12);
    echo "<br/>";
?>
    <h4> Soma das funções</h4>
<?php
    function soma($numero1, $numero2){
        return $numero1 + $numero2;
    }

    $n1 = 2;
    $n2 = 5;
    $n3 = 8;

    $r1 = soma($n1, $n2);
    echo $r1;
    echo "<br/>";

    $r2 = soma($r1, $n3);
    echo $r2;
    echo "<br/>";

    $r3 = soma($r1, $r2);
    echo $r3;
    echo "<br/>";

    $r4 = dobro($r1) + $r3;
    echo $r4;
    echo "<br/>";
?>
    <h4> Outros exemplos </h4>
<?php
    function calcDesconto($valor, $perc_desc){
        $valor_com_desc = $valor * ($perc_desc /100);
        return $valor - $valor_com_desc;
    }
    $desconto = calcDesconto(849, 10);
    echo $desconto;
    echo "<br/>";
?>

    <h4> Funções com Condições</h4>

<?php
    function liberaAcesso($idade, $identidade){
        if($idade > 18 && $identidade == true){
            return"Acesso Permitido!";
        } else {
            return "Acesso Negado!";
        }
    }

    $acesso = liberaAcesso(19, true);
    echo $acesso;
    echo "<br/>";
?>
    <h4> Funções do PHP </h4>
<?php

    /*$data_atual = date("d/m/y");
    echo "Hoje é dia: ".$data_atual;
    echo date("d, F Y");*/

?>
<?php
    $nome = "";
    $telefone = "";

    if(empty($nome)or empty($telefone)){
        echo "Preencha os campos nome e telefone";
    }
?>