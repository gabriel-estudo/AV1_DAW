<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/criarQuestaoTexto.css">
</head>
<body>
    <div class="container">
        <form action="index.php">
            <label for="perguntaTexto">Insira a pergunta de texto:</label>
            <input type="text" class="input" id="perguntaTexto">

            <div class="containerRespostaTexto">
                <input type="text" class="input" name="respostaTexto" placeholder="Escreva a resposta: ">
                <button type="submit" class="botao">Enviar pergunta</button>
            </div>
        </form>
    </div>
</body>
</html>
