
<nav>
    <select name="categoria" id="categoria" onclick="audio()">
        <option value="">Parabens</option>
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
        let id1 = document.getElementById("id:1");
        trocarProduto(titulo, preco, img, id1, "Mangá Naruto Vol.2", "R$ 30,00", "./img/narutin.png", "4");
        preco.innerHTML = "<del>R$ 70,00</del> R$ 50,00";
    
        let titulo2 = document.getElementById("pImg2");
        let preco2 = document.getElementById("p2Img2");
        let img2 = document.getElementById("img2");
        let id2 = document.getElementById("id:2");
        trocarProduto(titulo2, preco2, img2, id2, "Livro 1984", "<del>R$ 70,00</del> R$ 50,00", "./img/1984.jpg", "6");
        preco2.innerHTML = "<del>R$ 70,00</del> R$ 50,00";
        
    
        let titulo3 = document.getElementById("pImg3");
        let preco3 = document.getElementById("p2Img3");
        let img3 = document.getElementById("img3");
        let id3 = document.getElementById("id:3");
        trocarProduto(titulo3, preco3, img3, id3, "Livro Dois Mundos Um Herói", "R$ 30,00", "./img/doismundos.jpg", "7");
        preco3.innerHTML = "<del>R$ 70,00</del> R$ 50,00";
        
    
        let titulo4 = document.getElementById("pImg4");
        let preco4 = document.getElementById("p2Img4");
        let img4 = document.getElementById("img4");
        let id4 = document.getElementById("id:4");
        trocarProduto(titulo4, preco4, img4, id4, "O Influenciador","<del>R$ 70,00</del> R$ 50,00" ,"./img/oinfluenciador.jpg", "8");
        preco4.innerHTML = "<del>R$ 70,00</del> R$ 50,00";
        
    
        let titulo5 = document.getElementById("pImg5");
        let preco5 = document.getElementById("p2Img5");
        let img5 = document.getElementById("img5");
        let id5 = document.getElementById("id:5");
        trocarProduto(titulo5, preco5, img5, id5, "Uma breve história sobre o tempo","<del>R$ 70,00</del> R$ 50,00" ,"./img/umabreve.png", "9");
        preco5.innerHTML = "<del>R$ 70,00</del> R$ 50,00";
        
    } 
    
    function jogos(){
    
        let titulo = document.getElementById("pImg1");
        let preco = document.getElementById("p2Img1");
        let img = document.getElementById("img1");
        let id1 = document.getElementById("id:1");
        trocarProduto(titulo, preco, img, id1, "Battlefield 1", "R$ 150,00", "./img/battlefield_1.png", "3");
        
    
        let titulo2 = document.getElementById("pImg2");
        let preco2 = document.getElementById("p2Img2");
        let img2 = document.getElementById("img2");
        let id2 = document.getElementById("id:2");
        trocarProduto(titulo2, preco2, img2, id2, "The Last of Us 2", "R$ 200,00", "./img/the_last_of_us.png", "1");
    
        let titulo3 = document.getElementById("pImg3");
        let preco3 = document.getElementById("p2Img3");
        let img3 = document.getElementById("img3");
        let id3 = document.getElementById("id:3");
        trocarProduto(titulo3, preco3, img3, id3, "Jogo Hotline Miami","R$ 30,00", "./img/linhaquentemeame.png", "10");
    
        let titulo4 = document.getElementById("pImg4");
        let preco4 = document.getElementById("p2Img4");
        let img4 = document.getElementById("img4");
        let id4 = document.getElementById("id:4");
        trocarProduto(titulo4, preco4, img4, id4, "Resident Evil 2 Remake","R$ 200,00", "./img/resident_evil_2.png", "5");
        
    
        let titulo5 = document.getElementById("pImg5");
        let preco5 = document.getElementById("p2Img5");
        let img5 = document.getElementById("img5");
        let id5 = document.getElementById("id:5");
        trocarProduto(titulo5, preco5, img5, id5, "Borderlands 3","R$ 75,00", "./img/borderlands3.jpg", "11");
    
    }
    
    function brinquedos(){
    
        let titulo = document.getElementById("pImg1");
        let preco = document.getElementById("p2Img1");
        let img = document.getElementById("img1");
        let id1 = document.getElementById("id:1");
        trocarProduto(titulo, preco, img, id1, "Boneco Neymar Jr.", "R$ 200,00", "./img/boneconeymar.jpg", "12");
    
        let titulo2 = document.getElementById("pImg2");
        let preco2 = document.getElementById("p2Img2");
        let img2 = document.getElementById("img2");
        let id2 = document.getElementById("id:2");
        trocarProduto(titulo2, preco2, img2, id2, "Action Figure Jotaro Kujo","R$ 200,00" ,"./img/actionfigurejotaro.jpg", "13");
        
    
        let titulo3 = document.getElementById("pImg3");
        let preco3 = document.getElementById("p2Img3");
        let img3 = document.getElementById("img3");
        let id3 = document.getElementById("id:3");
        trocarProduto(titulo3, preco3, img3, id3, "Action Figure Neptunia","R$ 200,00", "./img/actionfigureneptunia.jpg", "14");
        
    
        let titulo4 = document.getElementById("pImg4");
        let preco4 = document.getElementById("p2Img4");
        let img4 = document.getElementById("img4");
        let id4 = document.getElementById("id:4");
        trocarProduto(titulo4, preco4, img4, id4, "Action Figure Portgas D. Ace","R$ 200,00", "./img/actionfigureace.jpg", "15");
        
    
        let titulo5 = document.getElementById("pImg5");
        let preco5 = document.getElementById("p2Img5");
        let img5 = document.getElementById("img5");
        let id5 = document.getElementById("id:5");
        trocarProduto(titulo5, preco5, img5, id5, "Bonecos Bob Esponja e Lula Molusco bonitão","R$ 175,00" ,"./img/bonecosbobesponja.jpg", "16");
        
    
    }
    
    function filmesESeries(){
    
        let titulo = document.getElementById("pImg1");
        let preco = document.getElementById("p2Img1");
        let img = document.getElementById("img1");
        let id = document.getElementById("id:1");
        trocarProduto(titulo, preco, img, id, "Série Over the Garden Wall","R$ 420,00" ,"./img/capaoverthegarden.jpg", "17");
        
    
        let titulo2 = document.getElementById("pImg2");
        let preco2 = document.getElementById("p2Img2");
        let img2 = document.getElementById("img2");
        let id2= document.getElementById("id:2");
        trocarProduto(titulo2, preco2, img2, id2, "Blu-Ray Shrek 2","R$ 140,00" ,"./img/shrek2bluray.jpeg", "18");
        
    
        let titulo3 = document.getElementById("pImg3");
        let preco3 = document.getElementById("p2Img3");
        let img3 = document.getElementById("img3");
        let id3 = document.getElementById("id:3");
        trocarProduto(titulo3, preco3, img3, id3, "Filme Whiplash","R$ 150,00" ,"./img/whiplashposter.jpg", "19");
    
        let titulo4 = document.getElementById("pImg4");
        let preco4 = document.getElementById("p2Img4");
        let img4 = document.getElementById("img4");
        let id4 = document.getElementById("id:4");
        trocarProduto(titulo4, preco4, img4, id4, "Blu-Ray Coach Carter","R$ 140,00" ,"./img/coachcarter.png", "20");
    
        let titulo5 = document.getElementById("pImg5");
        let preco5 = document.getElementById("p2Img5");
        let img5 = document.getElementById("img5");
        let id5 = document.getElementById("id:5");
        trocarProduto(titulo5, preco5, img5, id5, "Blu-Ray Joker", "R$ 200,00", "./img/blurayjoker.png", "21");
    
        
    }
</script>