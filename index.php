<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            Aqui você encontra as melhores opções em Livros, Games, Filmes, Músicas e Eletrônicos além de eventos gratuitos e as melhores ofertas. Confira!
        </p>
        <button type="button">Mais vendidos</button>
        <button class="btn">Destaques</button>
        <button class="btn">Super ofertas
    </div>

    <div id="quadradao1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum alias quos sed veritatis, beatae natus doloribus. Optio inventore id, incidunt dicta at asperiores omnis hic laborum facilis, cum ipsum similique.</p>
    </div>
</body>
</html>