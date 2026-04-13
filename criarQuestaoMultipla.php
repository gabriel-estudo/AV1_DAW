<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/criarQuestaoMultipla.css">
</head>
<body>
    <div class="container">
        <form action="index.php">
            
            <label for="perguntaMultipla">Insira a pergunta de multipla escolha:</label>
            <input type="text" class="input" id="perguntaMultipla">
            
            <div class="containerRespostasMultipla">
                <input type="text" class="input" name="primeiraEscolha" placeholder="Escreva a 1 escolha: ">
                <input type="text" class="input" name="segundaEscolha" placeholder="Escreva a 2 escolha: ">
                <input type="text" class="input" name="terceiraEscolha" placeholder="Escreva a 3 escolha: ">
                <input type="text" class="input" name="quartaEscolha" placeholder="Escreva a 4 escolha: ">
                <input type="text" class="input" name="quintaEscolha" placeholder="Escreva a 5 escolha: ">

                <button type="submit" class="botao">Enviar pergunta</button>
            </div>
        </form>
    </div>
</body>
</html>