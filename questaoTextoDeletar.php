<?php

$arquivo = "questaoTexto.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $numero = $_POST["numeroPergunta"];

  $linhas = file($arquivo);

  $posicao = $numero - 1;

  if (isset($linhas[$posicao])) {

    unset($linhas[$posicao]);

    $linhas = array_values($linhas);

    file_put_contents($arquivo, implode("", $linhas));

    echo "<p>Pergunta excluída com sucesso!</p>";
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

    <h2>Excluir Pergunta de Texto</h2>

    <input type="number" name="numeroPergunta" placeholder="Número da pergunta" required>

    <br><br>

    <button type="submit">
      Excluir Pergunta
    </button>

  </form>

  <br><br>

  <a href="index.php" class="voltar">
    Voltar para o menu principal
  </a>
</body>

</html>