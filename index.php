<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <style>


div#anuncio > h2{
    text-align: center;
    font-family: 'Roboto', sans-serif;
    color: white;
    display: inline;
    font-style: normal;
    font-weight: bold;
    font-size: 2em;
    line-height: 47px;
    position: absolute;
    left: 100px;
    top: 75px;
 
}

        div#quadradao1{
        position: absolute;
        top: 750px;
        border: 5px solid #66b5cf;
        width: 200px;
        height: 299px;
        left: 7%;
    }
    div#quadradao2{
        position: absolute;
        top: 750px;
        border: 5px solid #66b5cf;
        width: 200px;
        height: 299px;
        left: 25%;
    }
    div#quadradao3{
        position: absolute;
        top: 750px;
        border: 5px solid #66b5cf;
        width: 200px;
        height: 299px;
        left: 43%;
    }
    div#quadradao4{
        position: absolute;
        top: 750px;
        border: 5px solid #66b5cf;
        width: 200px;
        height: 299px;
        left: 61%;
    }
    div#quadradao5{
        position: absolute;
        top: 750px;
        border: 5px solid #66b5cf;
        width: 200px;
        height: 299px;
        left: 79%;
    }
    img.imagens{
        width: 65%;
        height: 50%;
        margin-left: 36px;
        margin-top: 18px;
    }
    p#titulo{
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 10px;
        margin-top: 8px;
        font-weight: bold;
    }
    p#preco{
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 10px;
        margin-top: 8px;
    }
    button.sinopse{
        background-color: white;
        color: black;
        border: 1px solid #66b5cf;
        padding: 7px;
        margin-left: 10px;
        margin-top: 5px;
    }
    a.adicionar{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.1em;
        background-color: #66b5cf;
        color: white;
        padding: 6px;
        margin-top: 9px;
        margin-left: 6px;
    }

    footer{
        position: absolute;
        top: 1080px;
        left: 39.8%;
        padding: 25px;

        
    }
    #botaoFooter{
        background-color: white;
        border: 2px solid #66b5cf;
        color: black;
        width: 290px;
        height: 47px;
        font-size: 1.1em;
        font-weight: bold;
        cursor: pointer;

    }

    </style>
    <title>Página Inicial</title>
</head>
<body>
    <?php include_once './src/header.php'; ?>
    <?php include_once './src/nav.php'; ?>
    <div id="anuncio"> 
        <h2>
            Livros com até 20% de Desconto
        </h2>
        <img id="anuncioimagem" src="./img/anuncio.png"> 
    </div>

    <div id="procura">
        <h2>
            Livros e mais livros
        </h2>
        <p>
            Aqui você encontra as melhores opções em Livros, Games, Filmes além de eventos gratuitos e as melhores ofertas. Confira!
        </p>
        <button type="button">Mais vendidos</button>
        <button class="btn">Destaques</button>
        <button class="btn">Super ofertas
    </div>

    <div id="quadradao1">
        <img src="./img/the_last_of_us.png" alt="" class="imagens">
        <p id="titulo">Jogo The Last of Us 2</p>
        <p id="preco">R$ 200.00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico"/>
        </a>
    </div>
    <div id="quadradao2">
        <img src="./img/resident_evil_2.png" alt="" class="imagens">
        <p id="titulo">Jogo Resident Evil 2</p>
        <p id="preco">R$ 200,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico"/>
        </a>
    </div>
    <div id="quadradao3">
        <img src="./img/battlefield_1.png" alt="" class="imagens">
        <p id="titulo">Jogo Battlefield 1</p>
        <p id="preco">R$ 150,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico"/>
        </a>
    </div>
    <div id="quadradao4">
        <img src="./img/narutin.png" alt="" class="imagens">
        <p id="titulo">Mangá Naruto Vol.2 </p>
        <p id="preco">R$ 30,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico"/>
        </a>
    </div>
    <div id="quadradao5">
        <img src="./img/submundo.png" alt="" class="imagens">
        <p id="titulo">Livro Resident Evil - Submundo</p>
        <p id="preco">R$ 150,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico"/>
        </a>
    </div>


    <footer>
        <button id="botaoFooter">
            Veja tudo em mais vendidos
        </button>
    </footer>

</body>
</html>