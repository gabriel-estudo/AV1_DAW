<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $pergunta = $_POST["perguntaMultipla"];
  $opcao1 = $_POST["primeiraEscolha"];
  $opcao2 = $_POST["segundaEscolha"];
  $opcao3 = $_POST["terceiraEscolha"];
  $opcao4 = $_POST["quartaEscolha"];
  $opcao5 = $_POST["quintaEscolha"];

  $linha = $pergunta . "|" .
    $opcao1 . "|" .
    $opcao2 . "|" .
    $opcao3 . "|" .
    $opcao4 . "|" .
    $opcao5 . PHP_EOL;

  file_put_contents("questaoMultipla.txt", $linha, FILE_APPEND);

  echo "<p>Pergunta salva com sucesso!</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <form method="POST">
      <label for="perguntaMultipla">Insira a pergunta de multipla escolha:</label>

      <input type="text" class="input" id="perguntaMultipla" name="perguntaMultipla">

      <div class="containerRespostasMultipla">

        <input type="text" class="input" name="primeiraEscolha" placeholder="Escreva a 1 escolha: ">
        <input type="text" class="input" name="segundaEscolha" placeholder="Escreva a 2 escolha: ">
        <input type="text" class="input" name="terceiraEscolha" placeholder="Escreva a 3 escolha: ">
        <input type="text" class="input" name="quartaEscolha" placeholder="Escreva a 4 escolha: ">
        <input type="text" class="input" name="quintaEscolha" placeholder="Escreva a 5 escolha: ">

        <button type="submit" class="botao">
          Enviar pergunta
        </button>

      </div>
    </form>

    <br><br>

    <a href="index.php" class="voltar">
      Voltar para o menu principal
    </a>
  </div>
</body>

</html>