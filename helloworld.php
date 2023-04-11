<html>
  <head>
    <title>Teste PHP</title>
  </head>
  <body>
    <h4> Exemplo 1 </h4>
    <?php echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
     $var_int =12.54;
      echo $var_int . "<br>";?>
      <h4> Exemplo 2 </h4>

    <?php
    $array = array("Maçã", "Banana", "Melancia");

      echo $array[0] . "<br>";
      echo $array[1] . "<br>";
      echo $array[2] . "<br>";
      ?>
      <h4> Exemplo 3 </h4>
    <?php
    $exemplo = array(
      "cidade"  =>"Macapá",
      "estado"  =>"Amapá",
      "habitantes"  =>100000,
      "mcdonald"  =>false
    );
    echo $exemplo["cidade"] . "<br>";
    echo $exemplo["estado"] . "<br>";

    ?>
    <h4> Exemplo 4 </h4>
    <?php
        $cidades = array(
          array(
            "cidade" => "Macapá",
            "estado" => "Amapá",
            "habitantes" => 700000,
            "mcdonald" => false),

          array(
            "cidade" => "Belém",
            "estado" => "Pará",
            "habitantes" => 700000,
            "mcdonald" => true)
          );
        $cidades[] = array(
          "cidade" => "Santana",
          "estado" => "Amapá",
          "habitantes" => 700000,
          "mcdonald"=> false);
        
          print_r($cidades);
         
      echo $cidades[0]["cidade"];
      echo $cidades[1]["mcdonald"];

      //echo $cidades[0][2];
      //echo $cidades[1][2];
      ?>
    <h4> Exemplo 5 </h4>
    <?php 
      $a = 3;
      $b = 3;
      $c = $a * $b; //resultado é 9
      $d = $a + $b; //resultado é 6
      $e = $c - $d; //resultado é 3
      
      echo $a;
    ?>
    <h4> Exemplo 6 </h4>
    <?php /*
    echo "<h3>Pós incremento</h3>";
    $a = 5;
    echo "Deve ser 5: " . $a++; . "<br />\n";
    echo "Deve ser 6: " . $a . "<br />\n";

    echo "<h3>Pré-incremento</h3>"*/


    ?>
  <?php 
    $a = 4;
    $b = 4;

    if($a > $b){
      echo "$a é maior que $b";
    }else{
      echo "$a é menor que $b";
    }

  ?>
  </body>
</html>