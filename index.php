<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <title>Página Inicial</title>
</head>

<body>
    <?php include_once './src/header.php'; ?>
    <?php include_once './src/nav.php'; ?>
    <div id="anuncio" onclick="superOfertas()" style="cursor:pointer;">
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
        <button class="btn" type="button" onclick="maisVendidos()">Mais vendidos</button>
        <button class="btn" type="button" onclick="destaques()">Destaques</button>
        <button class="btn" type="button" onclick="superOfertas()">Super ofertas</button>
    </div>

    <div id="myModal" class="modal">

        <div class="sinopses">
            <span class="close">&times;</span>
            <p style="font-family:Roboto" id="sinopseP"></p>
        </div>

    </div>


    <div id="quadradao1">
        <img src="./img/the_last_of_us.png" alt="" id="img1" class="imagens">
        <p id="pImg1" class="titulo">Jogo The Last of Us 2</p>
        <p id="p2Img1" class="preco">R$ 200.00</p>
        <button class="sinopse" id="1">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;" onclick="teste()">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
        <p hidden id="id:1">1</p>
    </div>



    <div id="quadradao2">
        <img src="./img/resident_evil_2.png" alt="" class="imagens" id="img2">
        <p id="pImg2" class="titulo">Jogo Resident Evil Remake</p>
        <p id="p2Img2" class="preco">R$ 200,00</p>
        <button class="sinopse" id="2">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
        <p hidden id="id:2">2</p>
    </div>
    <div id="quadradao3">
        <img src="./img/battlefield_1.png" alt="" class="imagens" id="img3">
        <p id="pImg3" class="titulo">Jogo Battlefield 1</p>
        <p id="p2Img3" class="preco">R$ 150,00</p>
        <button class="sinopse" id="3">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
        <p hidden id="id:3">3</p>
    </div>
    <div id="quadradao4">
        <img src="./img/narutin.png" alt="" class="imagens" id="img4">
        <p id="pImg4" class="titulo">Mangá Naruto Vol.2 </p>
        <p id="p2Img4" class="preco">R$ 30,00</p>
        <button class="sinopse" id="4">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
        <p hidden id="id:4">4</p>
    </div>
    <div id="quadradao5">
        <img src="./img/submundo.png" alt="" class="imagens" id="img5">
        <p id="pImg5" class="titulo">Livro Resident Evil - Submundo</p>
        <p id="p2Img5" class="preco">R$ 150,00</p>
        <button class="sinopse" id="5">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
        <p hidden id="id:5">5</p>
    </div>


    <footer>
        <button id="botaoFooter" onclick="maisVendidos()">
            Veja tudo em mais vendidos
        </button>
    </footer>

</body>



<style>
    img#logo {
        position: absolute;
        display: inline;
        width: 291px;
        height: 103px;
        left: 40%;
        top: 9px;
    }

    select#categoria {
        width: 150px;
        background-color: #7AD3F0;
        display: inline;
        padding: 3px 0px 5px 0px;
        margin-left: 100px;
        text-decoration: none;
        border: 1px solid #7AD3F0;
        color: #7AD3F0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.1em;
        font-weight: bold;
    }



    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    .sinopses {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }


    button.sinopse {
        cursor: pointer;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script src="./js/app.js"></script>


</html>