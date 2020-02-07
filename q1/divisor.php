<?php
  $numero = $_GET["numero"];

  if($numero %10 == 0 && $numero %5 == 0 && $numero %2 == 0){
    echo "O número $numero é divisível por 10, 5 e 2!";
  }
  elseif ($numero %5 == 0) {
    echo "O número $numero é divisível somente por 5!";
  }
  elseif ($numero %2 == 0) {
    echo "O número $numero é divisível somente por 2!";
  }
  else{
    echo "O número $numero não é divisível por 10, 5 ou 2!";
  }
?>


<html>
  <head>
    <title>Resultado</title>
  </head>
  <body>
    <br>
    <br>
    <input type = "button" value = "Voltar" onclick = "history.go(-1)">
  </body>
</html>
