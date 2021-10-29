<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <style>
        @import url('./styles/styles.css');
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
        <img src="./img/the_last_of_us.png" alt="" id="img1" class="imagens">
        <p id="pImg1" class="titulo">Jogo The Last of Us 2</p>
        <p id="p2Img1" class="preco">R$ 200.00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
    </div>
    <div id="quadradao2">
        <img src="./img/resident_evil_2.png" alt="" class="imagens" id="img2">
        <p id="pImg2" class="titulo">Jogo Resident Evil 2</p>
        <p id="p2Img2" class="preco">R$ 200,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
    </div>
    <div id="quadradao3">
        <img src="./img/battlefield_1.png" alt="" class="imagens" id="img3">
        <p id="pImg3"  class="titulo">Jogo Battlefield 1</p>
        <p id="p2Img3" class="preco">R$ 150,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
    </div>
    <div id="quadradao4">
        <img src="./img/narutin.png" alt="" class="imagens" id="img4">
        <p id="pImg4"class="titulo">Mangá Naruto Vol.2 </p>
        <p id="p2Img4"class="preco">R$ 30,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
    </div>
    <div id="quadradao5">
        <img src="./img/submundo.png" alt="" class="imagens" id="img5">
        <p id="pImg5"class="titulo">Livro Resident Evil - Submundo</p>
        <p id="p2Img5"class="preco">R$ 150,00</p>
        <button class="sinopse">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
    </div>


    <footer>
        <button id="botaoFooter">
            Veja tudo em mais vendidos
        </button>
    </footer>

</body>




</html>