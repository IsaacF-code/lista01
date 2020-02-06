<?php
  $nome = $_GET["nome"];
  $idade = $_GET["idade"];
  $sexo = $_GET["sexo"];

  if($idade < 18 && $sexo = "f"){
    echo "Acesso negado";
  }
  elseif ($idade >= 18 && $sexo = "f") {
    echo "Acesso permitido";
  }
?>
