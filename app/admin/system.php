<?php
if (empty($_SESSION['token'])) {
    header('location: ./');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Page Sale</title>
    <link rel="stylesheet" href="../../assets/css/system.css" />
</head>

<body>

    <div id="container">

        <div class="listMenu">
            <a href="#edit" id="editProduct" class="button">Alterar Produtos</a>
            <a href="#exit" id="exitSystem" class="button">Sair</a>
        </div>

        <div class="form">
            <form>
                <div class="form_inputs">

                    <div class="input">
                        <label>Nome do Produto:</label>
                        <input type="text" id="nameProduct" value="" placeholder="Tênis Nike" />
                    </div>
                    <div class="input">
                        <label>Descrição do Produto:</label>
                        <input type="text" id="textProduct" value="" placeholder="Revestimento de alta Classe" />
                    </div>
                    <div class="input">
                        <label>Preço do Produto:</label>
                        <input type="text" id="valueProduct" value="" placeholder="250.00" />
                    </div>
                    <div class="input">
                        <label>Imagen do Produto:</label>
                        <input type="text" id="imageProduct" value="" placeholder="https://url.com/image.png" />
                    </div>
                    <div class="input">
                        <label>Link do Produto:</label>
                        <input type="text" id="linkProduct" value="" placeholder="https://site.com" />
                    </div>
                    <div class="input">
                        <label>Selecione o Produto:</label>
                        <select id="idProduct">
                            <option value="1">Produto 1</option>
                            <option value="2">Produto 2</option>
                            <option value="3">Produto 3</option>
                            <option value="4">Produto 4</option>
                        </select>
                    </div>
                    <div class="input button">
                        <button type="button" class="btn">Alterar</button>
                    </div>
            </form>
        </div>

    </div>

    </div>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../../assets/js/system.js"></script>
</body>
</html>