<?php

$arquivo = "questaoTexto.txt";

if (file_exists($arquivo)) {

  $linhas = file($arquivo);

  if (count($linhas) > 0) {
    foreach ($linhas as $linha) {

      $linha = trim($linha);

      $dados = explode("|", $linha);

      echo "<div style='margin-bottom:20px;'>";
      echo "<strong>Pergunta:</strong> " . $dados[0] . "<br>";
      echo "<strong>Resposta:</strong> " . $dados[1] . "<br>";
      echo "</div>";
    }
  } else {
    echo "Nenhuma pergunta cadastrada.";
  }
} else {
  echo "Arquivo de perguntas ainda não existe.";
}
