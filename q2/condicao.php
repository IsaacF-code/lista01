<?php
  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];

  $result = $n1 + $n2;

  if($result > 20){
    $novoResult = $result + 8;
    echo "Resultado da adição foi $result, somando 8, fica $novoResult";
  }
  elseif ($result <= 20) {
    $novoResult = $result - 5;
    echo "Resultado da adição foi $result, subtraindo 5, fica $novoResult";
  }
?>

<html>
  <head>
    <title> Resultado </title>
  </head>
  <body>
    <br>
    <br>
    <input type="button" value="Voltar" onclick="history.go(-1)">
  </body>
</html>
