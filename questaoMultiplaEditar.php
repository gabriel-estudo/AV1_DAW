<?php

$arquivo = "questaoMultipla.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $numero = $_POST["numeroPergunta"];

  $pergunta = $_POST["perguntaMultipla"];
  $opcao1 = $_POST["primeiraEscolha"];
  $opcao2 = $_POST["segundaEscolha"];
  $opcao3 = $_POST["terceiraEscolha"];
  $opcao4 = $_POST["quartaEscolha"];
  $opcao5 = $_POST["quintaEscolha"];

  $linhas = file($arquivo);

  $novaLinha = $pergunta . "|" .
    $opcao1 . "|" .
    $opcao2 . "|" .
    $opcao3 . "|" .
    $opcao4 . "|" .
    $opcao5 . PHP_EOL;

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

    <h2>Editar Pergunta de Múltipla Escolha</h2>

    <input type="number" name="numeroPergunta" placeholder="Número da pergunta" required>

    <br><br>

    <input type="text" name="perguntaMultipla" placeholder="Nova pergunta" required>

    <br><br>

    <input type="text" name="primeiraEscolha" placeholder="1ª opção" required>

    <br><br>

    <input type="text" name="segundaEscolha" placeholder="2ª opção" required>

    <br><br>

    <input type="text" name="terceiraEscolha" placeholder="3ª opção" required>

    <br><br>

    <input type="text" name="quartaEscolha" placeholder="4ª opção" required>

    <br><br>

    <input type="text" name="quintaEscolha" placeholder="5ª opção" required>

    <br><br>

    <button type="submit">
      Alterar Pergunta
    </button>
  </form>

  <br><br>

  <a href="index.php" class="voltar">
    Voltar para o menu principal
  </a>
</body>

</html>