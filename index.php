<?php

$usuario = "";

if (isset($_GET["nomeUsuario"])) {
  $usuario = $_GET["nomeUsuario"];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Sistema de jogo corporativo</title>
</head>

<body>

  <?php if ($usuario != "") { ?>
    <h2 class="titulo">Bem-vindo, <?php echo $usuario; ?></h2>
  <?php } ?>

  <h1 class="titulo">Sistema de jogo corporativo</h1>

  <div class="container">
    <div>
      <a href="criarQuestaoMultipla.php" class="link">Criar questão multipla</a>
    </div>
    <div>
      <a href="criarQuestaoTexto.php" class="link">Criar questão de Texto</a>
    </div>
  </div>

  <div class="listarMultipla">
    <h3>Lista de perguntas multipla escolha:</h3>
    <?php
    include("questaoMultiplaListar.php");
    ?>
  </div>

  <div class="listarTexto">
    <h3>Lista de perguntas de texto:</h3>
    <?php
    include("questaoTextoListar.php");
    ?>
  </div>

  <div class="container-secundario">

    <div>
      <a href="cadastrarUsuario.php" class="link">
        Cadastrar Usuário
      </a>
    </div>

    <div>
      <a href="listarUmaPergunta.php" class="link">
        Buscar Uma Pergunta
      </a>
    </div>

    <div>
      <a href="questaoMultiplaEditar.php" class="link">
        Editar Questão Múltipla
      </a>
    </div>

    <div>
      <a href="questaoTextoEditar.php" class="link">
        Editar Questão Texto
      </a>
    </div>

    <div>
      <a href="questaoMultiplaDeletar.php" class="link">
        Excluir Questão Múltipla
      </a>
    </div>

    <div>
      <a href="questaoTextoDeletar.php" class="link">
        Excluir Questão Texto
      </a>
    </div>
  </div>
</body>

</html>