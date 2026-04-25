<?php

$arquivo = "questaoTexto.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $numero = $_POST["numeroPergunta"];

  $pergunta = $_POST["perguntaTexto"];
  $resposta = $_POST["respostaTexto"];

  $linhas = file($arquivo);

  $novaLinha = $pergunta . "|" . $resposta . PHP_EOL;

  $posicao = $numero - 1;

  if (isset($linhas[$posicao])) {

    $linhas[$posicao] = $novaLinha;

    file_put_contents($arquivo, implode("", $linhas));

    echo "<p>Pergunta alterada com sucesso!</p>";
  } else {
    echo "<p>Pergunta não encontrada.</p>";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>editar questao multipla</title>
</head>

<body>

  <form method="POST">

    <h2>Editar Pergunta de Texto</h2>

    <input type="number" name="numeroPergunta" placeholder="Número da pergunta" required>

    <br><br>

    <input type="text" name="perguntaTexto" placeholder="Nova pergunta" required>

    <br><br>

    <input type="text" name="respostaTexto" placeholder="Nova resposta" required>

    <br><br>

    <button type="submit">
      Alterar Pergunta
    </button>
  </form>

  <br><br>

  <a href="index.php" class="voltar">
    Voltar para o menu principal
  </a>
  </div>
</body>

</html>