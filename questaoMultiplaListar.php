<?php

$arquivo = "questaoMultipla.txt";

if (file_exists($arquivo)) {

  $linhas = file($arquivo);

  if (count($linhas) > 0) {
    foreach ($linhas as $linha) {

      $linha = trim($linha);

      $dados = explode("|", $linha);

      echo "<div style='margin-bottom:20px;'>";
      echo "<strong>Pergunta:</strong> " . $dados[0] . "<br>";
      echo "1 - " . $dados[1] . "<br>";
      echo "2 - " . $dados[2] . "<br>";
      echo "3 - " . $dados[3] . "<br>";
      echo "4 - " . $dados[4] . "<br>";
      echo "5 - " . $dados[5] . "<br>";
      echo "</div>";
    }
  } else {
    echo "Nenhuma pergunta cadastrada.";
  }
} else {
  echo "Arquivo de perguntas ainda não existe.";
}
