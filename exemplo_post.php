<?php
    function dobro($n){
    return $n*2;
    }

    function soma($numero1, $numero2){
        return $numero1 + $numero2;
    }

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

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