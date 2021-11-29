async function buscarSinopse(id) {
    let data = await fetch("sinopse.json")
        .then(response => response.json())
        .then(json => json);
    console.log(id);
    switch (id) {
        case "1":
            return data[0].sinopse;
            break;
        case "2":
            return data[1].sinopse;
            break;
        case "3":
            return data[2].sinopse;
            break;
        case "4":
            return data[3].sinopse;
            break;
        case "5":
            return data[4].sinopse;
            break;
        case "6":
            return data[5].sinopse;
            break;
        case "7":
            return data[6].sinopse;
            break;
        case "8":
            return data[7].sinopse;
            break;
        case "9":
            return data[8].sinopse;
            break;
        case "10":
            return data[9].sinopse;
            break;
        case "11":
            return data[10].sinopse;
            break;
        case "12":
            return data[11].sinopse;
            break;
        case "13":
            return data[12].sinopse;
            break;
        case "14":
            return data[13].sinopse;
            break;
        case "15":
            return data[14].sinopse;
            break;
        case "16":
            return data[15].sinopse;
            break;
        case "17":
            return data[16].sinopse;
            break;
        case "18":
            return data[17].sinopse;
            break;
        case "19":
            return data[18].sinopse;
            break;
        case "20":
            return data[19].sinopse;
            break;
        case "21":
            return data[20].sinopse;
            break;
        default:
            alert("ALGUMA COISA DEU MUITO ERRADO AAAAAAAAAAAAAAAAAAAAAA");
            break;
    }



}

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn1 = document.getElementsByClassName("sinopse")[0];
var btn2 = document.getElementsByClassName("sinopse")[1];
var btn3 = document.getElementsByClassName("sinopse")[2];
var btn4 = document.getElementsByClassName("sinopse")[3];
var btn5 = document.getElementsByClassName("sinopse")[4];

btn1.onclick = async function() {

    let id = document.getElementById("id:1").textContent;
    console.log(id);
    let texto = await buscarSinopse(id);
    let elemento = document.getElementById("sinopseP");
    modal.style.display = "block";
    elemento.innerText = texto;
}
btn2.onclick = async function() {
    let id = document.getElementById("id:2").textContent;
    let texto = await buscarSinopse(id);
    let elemento = document.getElementById("sinopseP");
    modal.style.display = "block";
    elemento.innerText = texto;
}
btn3.onclick = async function() {
    let id = document.getElementById("id:3").textContent;
    let texto = await buscarSinopse(id);
    let elemento = document.getElementById("sinopseP");
    modal.style.display = "block";
    elemento.innerText = texto;
}
btn4.onclick = async function() {
    let id = document.getElementById("id:4").textContent;
    let texto = await buscarSinopse(id);
    let elemento = document.getElementById("sinopseP");
    modal.style.display = "block";
    elemento.innerText = texto;
}
btn5.onclick = async function() {
    let id = document.getElementById("id:5").textContent;
    let texto = await buscarSinopse(id);
    let elemento = document.getElementById("sinopseP");
    modal.style.display = "block";
    elemento.innerText = texto;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


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

function trocarProduto(titulo, preco, img, id, tituloTexto, precoTexto, imgTexto, idTexto){
    img.src = imgTexto;
    titulo.innerText = tituloTexto;
    preco.innerText = precoTexto;
    id.innerHTML = idTexto;
}


function maisVendidos() {
    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    let id1 = document.getElementById("id:1");
    trocarProduto(titulo, preco, img, id1, "Mangá Naruto Vol.2", "R$ 30,00", "./img/narutin.png", "4");


    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    let id2 = document.getElementById("id:2");
    trocarProduto(titulo2, preco2, img2, id2, "Action Figure Portgas D. Ace", "R$ 200,00", "./img/actionfigureace.jpg", "15");
    

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    let id3 = document.getElementById("id:3");
    trocarProduto(titulo3, preco3, img3, id3, "Livro Dois Mundos Um Herói", "R$ 30,00", "./img/doismundos.jpg", "7");
    

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    let id4 = document.getElementById("id:4");
    trocarProduto(titulo4, preco4, img4, id4, "The Last of Us 2", "R$ 200,00", "./img/the_last_of_us.png", "1");
    

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    let id5 = document.getElementById("id:5");
    trocarProduto(titulo5, preco5, img5, id5, "Boneco Neymar Jr.", "R$ 200,00", "./img/boneconeymar.jpg", "12");
    
}

function destaques() {

    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    let id = document.getElementById("id:1");
    trocarProduto(titulo, preco, img, id, "The Last of Us 2", "R$ 200,00", "./img/the_last_of_us.png", "1");

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    let id2 = document.getElementById("id:2");
    trocarProduto(titulo2, preco2, img2, id2, "Action Figure Portgas D. Ace","R$ 200,00" ,"./img/actionfigureace.jpg", "15");


    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    let id3 = document.getElementById("id:3");
    trocarProduto(titulo3, preco3, img3, id3, "Boneco Neymar Jr.","R$ 200,00", "./img/boneconeymar.jpg", "12");

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    let id4 = document.getElementById("id:4");
    trocarProduto(titulo4, preco4, img4, id4, "Borderlands 3","R$ 75,00", "./img/borderlands3.jpg", "11");

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    let id5 = document.getElementById("id:5");
    trocarProduto(titulo5, preco5, img5, id5, "Blu-Ray Coach Carter","R$ 140.00" ,"./img/coachcarter.png", "20");

}

function superOfertas() {

    let titulo = document.getElementById("pImg1");
    let preco = document.getElementById("p2Img1");
    let img = document.getElementById("img1");
    let id = document.getElementById("id:1");
    trocarProduto(titulo, preco, img, id, "Livro Dois Mundos Um Herói","<del>R$ 70,00</del> R$ 50,00" ,"./img/doismundos.jpg", "7");
    preco.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo2 = document.getElementById("pImg2");
    let preco2 = document.getElementById("p2Img2");
    let img2 = document.getElementById("img2");
    let id2 = document.getElementById("id:2");
    trocarProduto(titulo2, preco2, img2, id2, "O Influenciador","<del>R$ 70,00</del> R$ 50,00" ,"./img/oinfluenciador.jpg", "8");
    preco2.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo3 = document.getElementById("pImg3");
    let preco3 = document.getElementById("p2Img3");
    let img3 = document.getElementById("img3");
    let id3 = document.getElementById("id:3");
    trocarProduto(titulo3, preco3, img3, id3, "Livro 1984","<del>R$ 70,00</del> R$ 50,00" ,"./img/1984.jpg", "6");
    preco3.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo4 = document.getElementById("pImg4");
    let preco4 = document.getElementById("p2Img4");
    let img4 = document.getElementById("img4");
    let id4 = document.getElementById("id:4");
    trocarProduto(titulo4, preco4, img4, id4, "Uma breve história sobre o tempo","<del>R$ 70,00</del> R$ 50,00" ,"./img/umabreve.png", "9");
    preco4.innerHTML = "<del>R$ 70,00</del> R$ 50,00";

    let titulo5 = document.getElementById("pImg5");
    let preco5 = document.getElementById("p2Img5");
    let img5 = document.getElementById("img5");
    let id5 = document.getElementById("id:5");
    trocarProduto(titulo5, preco5, img5, id5, "Mangá Naruto Vol.2","<del>R$ 70,00</del> R$ 50,00" ,"./img/narutin.png", "4");
    preco5.innerHTML = "<del>R$ 70,00</del> R$ 50,00";


    function audio(){
        var audio = new Audio("../bemtevi.mp3");
        audio.play();
    }

    
    
    
    
}