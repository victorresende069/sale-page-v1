<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Sale</title>
    <link rel="stylesheet" href="../../assets/css/login.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
</head>

<body>

    <div id="app_login">
        <div class="form">
            <form>
                <div class="form-group">
                    <h2>Acesso Restrito</h2>
                    <div class="input">
                        <label>Usuário:</label>
                        <input type="text" value="" id="usuario" placeholder="Usuário" />
                    </div>
                    <div class="input">
                        <label>Senha:</label>
                        <input type="password" value="" id="senha" placeholder="********" />
                    </div>

                    <div class="input">
                        <button type="button" id="submit">Logar</button>
                    </div>
            </form>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../../assets/js/login.js"></script>
</body>
</html>