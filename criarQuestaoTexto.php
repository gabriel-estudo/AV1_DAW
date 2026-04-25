<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $pergunta = $_POST["perguntaTexto"];
  $resposta = $_POST["respostaTexto"];

  $linha = $pergunta . "|" . $resposta . PHP_EOL;

  file_put_contents("questaoTexto.txt", $linha, FILE_APPEND);

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
      <label for="perguntaTexto">Insira a pergunta de texto:</label>

      <input type="text" class="input" id="perguntaTexto" name="perguntaTexto">

      <div class="containerRespostaTexto">
        <input type="text" class="input" name="respostaTexto" placeholder="Escreva a resposta: ">
        <button type="submit" class="botao">Enviar pergunta</button>
      </div>
    </form>

    <br><br>

    <a href="index.php" class="voltar">
      Voltar para o menu principal
    </a>
  </div>
</body>

</html>