<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST["nomeUsuario"];
  $senha = $_POST["senhaUsuario"];

  $linha = $nome . "|" . $senha . PHP_EOL;

  file_put_contents("usuario.txt", $linha, FILE_APPEND);

  echo "<p>Usuário cadastrado com sucesso!</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Cadastrar usuario</title>
</head>

<body>

  <form action="index.php" method="GET">

    <input type="text" name="nomeUsuario" placeholder="Digite seu nome:" required>

    <br><br>

    <input type="text" name="senhaUsuario" placeholder="Digite sua senha:" required>

    <br><br>

    <button type="submit">
      Enviar
    </button>

  </form>

  <br><br>

  <a href="index.php" class="voltar">
    Voltar para o menu principal
  </a>
</body>

</html>