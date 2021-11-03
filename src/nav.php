
<nav>
    <select name="categoria" id="categoria">
        <option value="">Categoria</option>
        <option value="">teste</option>
        <option value="">teste</option>
    </select>
    <div id="links">
        <a href="#" onclick="livro()" >Livros</a>
        <a href="#" onclick="jogos()">Jogos</a>
        <a href="#" onclick="brinquedos()">Brinquedos</a>
        <a href="#" onclick="filmesESeries()">Filmes e Series</a>
    </div>
    
</nav>

<script>

function livro(){
    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    img.src = "./img/narutin.png";
    titulo.innerText = "Mangá Naruto Vol.2";
    preco.innerHTML  = "<del>R$ 50,00</del> R$ 30,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    img2.src = "./img/1984.jpg";
    titulo2.innerHTML = "Livro 1984";
    preco2.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    img3.src = "./img/doismundos.jpg";
    titulo3.innerText = "Livro Dois Mundos Um Herói";
    preco3.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    img4.src = "./img/oinfluenciador.jpg";
    titulo4.innerText = "O Influenciador ";
    preco4.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    img5.src = "./img/umabreve.png";
    titulo5.innerText = "Uma breve história sobre o tempo";
    preco5.innerHTML = "<del>R$ 70,00</del> R$ 50,00";
} 

function jogos(){

    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    img.src = "./img/battlefield_1.png";
    titulo.innerText = "Battlefield 1";
    preco.innerText = "R$ 150,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    img2.src = "./img/the_last_of_us.png";
    titulo2.innerHTML = "The Last of Us 2";
    preco2.innerHTML = "R$ 200,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    img3.src = "./img/linhaquentemeame.png";
    titulo3.innerText = "Jogo Hotline Miami";
    preco3.innerText = "R$ 30,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    img4.src = "./img/resident_evil_2.png";
    titulo4.innerText = "Resident Evil 2 Remake";
    preco4.innerText = "R$ 200,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    img5.src = "./img/borderlands3.jpg";
    titulo5.innerText = "Borderlands 3";
    preco5.innerText = "R$ 75,00";

}

function brinquedos(){

    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    img.src = "./img/boneconeymar.jpg";
    titulo.innerText = "Boneco Neymar Jr.";
    preco.innerText = "R$ 200,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    img2.src = "./img/actionfigurejotaro.jpg";
    titulo2.innerHTML = "Action Figure Jotaro Kujo";
    preco2.innerHTML = "R$ 200,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    img3.src = "./img/actionfigureneptunia.jpg";
    titulo3.innerText = "Action Figure Neptunia";
    preco3.innerText = "R$ 200,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    img4.src = "./img/actionfigureace.jpg";
    titulo4.innerText = "Action Figure Portgas D. Ace";
    preco4.innerText = "R$ 200,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    img5.src = "./img/bonecosbobesponja.jpg";
    titulo5.innerText = "Bonecos Bob Esponja e Lula Molusco bonitão";
    preco5.innerText = "R$ 175,00";


}

function filmesESeries(){

    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    img.src = "./img/capaoverthegarden.jpg";
    titulo.innerText = "Série Over the Garden Wall";
    preco.innerText = "R$ 420,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    img2.src = "./img/shrek2bluray.jpeg";
    titulo2.innerHTML = "Blu-Ray Shrek 2";
    preco2.innerHTML = "R$ 140,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    img3.src = "./img/whiplashposter.jpg";
    titulo3.innerText = "Filme Whiplash";
    preco3.innerText = "R$ 150,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    img4.src = "./img/coachcarter.png";
    titulo4.innerText = "Blu-Ray Coach Carter";
    preco4.innerText = "R$ 140,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    img5.src = "./img/blurayjoker.png";
    titulo5.innerText = "Blu-Ray Joker";
    preco5.innerText = "R$ 140,00";

    
}



</script>