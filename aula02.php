<?php 
    $a = 9;
    $b = 18;
    $c = $a * $b;
    $d = $a + $b;
    $e = $c - $d;

    echo $d . "<br>";



    $a = "Olá";
    $b = $a . "mundo!";

    $a = "Olá";
    $a .= "mundo!";

    echo $a . "<br>";

    echo "<h3>Pós-incremento</h3>";
    $a = 5;
    echo "Deve ser 5: " . $a-- . "<br />\n";
    echo "Deve ser 4: " . $a . "<br />\n";

    echo "<h3>Pré-incremento</h3>";
    $a=5;
    echo "Deve ser 4: " . --$a . "<br />\n";
    echo "Deve ser 4: " . $a . "<br />\n";

    echo "<h3>Estrutura de decisão</h3>";
    $a = 7;
    $b = 72;

    if($a > $b){
        echo "$a é maior que $b";
    } elseif($a == $b) {
        echo "$a é igual a $b";
    }else{
        echo "$a é menor que $b";
    }

    echo "<h3>Operador lógico + Operadores relacionais</h3>";
    $idade = 19;
    $identidade = true;

    if($idade > 18 && $identidade == true){
        echo "Pode entrar!";
    }else{
        echo "Não pode entrar!";
    }
    echo "<h3>Laços de repetição: while</h3>";
    $numero = 1;

    while($numero <= 5){
        echo $numero++ . "<br/>";
    }

    $numero = 0;

    while($numero < 5){
        if($numero == 3){
            echo "=>".$numero++. "<br/>";
        }else{
            echo $numero++. "<br/>";
        }
    }

    echo "<h3>Laços de repetição: for</h3>";
    for($numero = 1; $numero<=10; $numero ++){
        echo $numero . "<br/>";
    }

    echo "<h3>Switch</h3>";
    $mes = 2;
    switch($mes){
        case 1:
        echo "Janeiro";
        break;
        case 2:
        echo "Fevereiro";
        break;
        case 3:
        echo "Março";
        break;
    }

    echo "<h3>Laços de repetição: foreach</h3>";

    $itens = array ('Item 1' , 'Item 2', 'Item 3' ,);
    foreach($itens as $item){
        echo $item;
        echo "<br/>";
    }
    $funcionarios = array(
        array("nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true),
        array("nome" => "João", "idade" => 35, "salario" => 3885.27, "ativo" => false),
        array("nome" => "Osvaldo", "idade" => 54, "salario" => 5285.27, "ativo" => true),
    );

    $bonificacao = 20;
    foreach($funcionarios as $funcionario) {
        if($funcionario["ativo"] == true){
            $funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100);

            echo "Funcionario: " . $funcionario["nome"]. " - " .$funcionario["salario"];
        
        }else {
            echo "Funcionario: " . $funcionario["nome"]. " - INATIVO";
            
        } echo "<br/>";
    }
?>