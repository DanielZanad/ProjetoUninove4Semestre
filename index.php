<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <style>
        @import url('./style/style.css');
    </style>
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
  <p style="font-family:Roboto">Ambientado cinco anos após os eventos de The Last of Us (2013), o jogador assume o papel de duas 
    protagonistas em um Estados Unidos pós-apocalíptico: Ellie, que busca por vingança após um evento traumático,
    e Abby, uma soldada que se envolve em um conflito entre uma milícia e um culto.</p>
</div>

</div>


    <div id="quadradao1">
        <img src="./img/the_last_of_us.png" alt="" id="img1" class="imagens">
        <p id="pImg1" class="titulo">Jogo The Last of Us 2</p>
        <p id="p2Img1" class="preco">R$ 200.00</p>
        <button class="sinopse" id="sinopse1">Sinopse</button>
        <a href="" class="adicionar" style="text-decoration: none;">
            Adicionar
            <img src="./img/shopping_cart.ico" />
        </a>
    </div>



    <div id="quadradao2">
        <img src="./img/resident_evil_2.png" alt="" class="imagens" id="img2">
        <p id="pImg2" class="titulo">Jogo Resident Evil Remake</p>
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
        <button id="botaoFooter" onclick="maisVendidos()">
            Veja tudo em mais vendidos
        </button>
    </footer>

</body>



<style>

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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

<script>

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("sinopse1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



function maisVendidos(){
    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    img.src = "./img/narutin.png";
    titulo.innerText = "Mangá Naruto Vol.2";
    preco.innerText = "R$ 30,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    img2.src = "./img/actionfigureace.jpg";
    titulo2.innerHTML = "Action Figure Portgas D. Ace";
    preco2.innerHTML = "R$ 200,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    img3.src = "./img/doismundos.jpg";
    titulo3.innerText = "Livro Dois Mundos Um Herói";
    preco3.innerText = "R$ 30,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    img4.src = "./img/the_last_of_us.png";
    titulo4.innerText = "The Last of Us 2";
    preco4.innerText = "R$ 200,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    img5.src = "./img/boneconeymar.jpg";
    titulo5.innerText = "Boneco Neymar Jr.";
    preco5.innerText = "R$ 200,00";
} 

function destaques(){


    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    img.src = "./img/the_last_of_us.png";
    titulo.innerText = "The Last of Us 2";
    preco.innerText = "R$ 200,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    img2.src = "./img/actionfigureace.jpg";
    titulo2.innerHTML = "Action Figure Portgas D. Ace";
    preco2.innerHTML = "R$ 200,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    img3.src = "./img/boneconeymar.jpg";
    titulo3.innerText = "Boneco Neymar Jr.";
    preco3.innerText = "R$ 200,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    img4.src = "./img/borderlands3.jpg";
    titulo4.innerText = "Borderlands 3";
    preco4.innerText = "R$ 75,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    img5.src = "./img/coachcarter.png";
    titulo5.innerText = "Blu-Ray Coach Carter";
    preco5.innerText = "R$ 140,00";
} 

function superOfertas(){

    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    img.src = "./img/doismundos.jpg";
    titulo.innerText = "Livro Dois Mundos Um Herói";
    preco.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    img2.src = "./img/oinfluenciador.jpg";
    titulo2.innerHTML = "O Influenciador";
    preco2.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    img3.src = "./img/1984.jpg";
    titulo3.innerText = "Livro 1984";
    preco3.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    img4.src = "./img/umabreve.png";
    titulo4.innerText = "Uma breve história sobre o tempo";
    preco4.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    img5.src = "./img/narutin.png";
    titulo5.innerText = "Mangá Naruto Vol.2";
    preco5.innerHTML = "<del>R$ 70,00</del> R$ 30,00";

}

</script>


</html>
