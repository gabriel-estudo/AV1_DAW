<?php

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $tipo = $_POST["tipoPergunta"];

  $numero = $_POST["numeroPergunta"];

  if ($tipo == "multipla") {
    $arquivo = "questaoMultipla.txt";
  } else {
    $arquivo = "questaoTexto.txt";
  }

  if (file_exists($arquivo)) {

    $linhas = file($arquivo);

    $posicao = $numero - 1;

    if (isset($linhas[$posicao])) {

      $linha = trim($linhas[$posicao]);

      $dados = explode("|", $linha);

      if ($tipo == "multipla") {

        $resultado .= "<h3>Pergunta encontrada:</h3>";
        $resultado .= "<strong>Pergunta:</strong> " . $dados[0] . "<br><br>";

        $resultado .= "1 - " . $dados[1] . "<br>";
        $resultado .= "2 - " . $dados[2] . "<br>";
        $resultado .= "3 - " . $dados[3] . "<br>";
        $resultado .= "4 - " . $dados[4] . "<br>";
        $resultado .= "5 - " . $dados[5] . "<br>";
      } else {

        $resultado .= "<h3>Pergunta encontrada:</h3>";
        $resultado .= "<strong>Pergunta:</strong> " . $dados[0] . "<br><br>";
        $resultado .= "<strong>Resposta:</strong> " . $dados[1];
      }
    } else {

      $resultado = "Pergunta não encontrada.";
    }
  } else {

    $resultado = "Arquivo ainda não existe.";
  }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>listando perguntas</title>
</head>

<body>

  <form method="POST">

    <h2>Buscar Uma Pergunta</h2>

    <label>Escolha o tipo:</label>

    <select name="tipoPergunta" required>
      <option value="multipla">Múltipla Escolha</option>
      <option value="texto">Texto</option>
    </select>

    <br><br>

    <input type="number" name="numeroPergunta" placeholder="Número da pergunta" required>

    <br><br>

    <button type="submit">
      Buscar Pergunta
    </button>

  </form>

  <br>

  <?php

  echo $resultado;
  ?>

  <br><br>

  <a href="index.php" class="voltar">
    Voltar para o menu principal
  </a>
</body>

</html>