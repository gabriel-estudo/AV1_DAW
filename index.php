<?php
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Sistema de jogo corporativo</title>
</head>
<body>

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
</body>
</html>