<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luan - Projeto de Interfaces WEB</title>
    <link rel="stylesheet" type="text/css" href="stylePainel.css" />
</head>
<body>
    <div class="loginContainer">
        <h1>Formulário de Contato</h1>

        <form method="get" action="index.html">
            <div class="paragrafo">
                <p>Agora que você já completou o cadastro e login você poderá utilizar o formulário abaixo para enviar um feedback!</p>
            </div>
            <label>E-Mail: <?=$_GET["email"]?></label>

            <textarea class="textBox feedback" cols="40" rows="5" placeholder="Digite seu feedback aqui..."></textarea>

            <button class="loginButton" type="submit">Enviar</button>

            <label class="failedAuthMessage"></label>
        </form>
    </div>
</body>
</html>