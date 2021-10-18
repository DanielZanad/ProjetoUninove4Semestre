<?php session_start(); ?>
<header class="menu-principal">
        <img src="./img/WebLivrariaLogo_1.png" id="logo"/>
        <div id="search-box">
            <select name="Todo o site" id="todosite">
                <option value="">Livros</option>
                <option value="">Jogos</option>
                <option value="">Brinquedos</option>
                <option value="">Filmes</option>
                <option value="">Series</option>
            </select>
            <input type="search" placeholder="" id="search-box">
        </div>
        <p>Olá, <?php if(isset($_SESSION["nome"])){echo $_SESSION["nome"];}else{echo "Bem vindo!";}?></p>
        <div id="login">
            <?php if(isset($_SESSION["nome"])){?>
                <img src="./img/carbon_user-filled.png" />
                <p>Boas Compras!</p>
                <a href="../logout.php">Sair?</a>
            <?php }else{ ?>
                <img src="./img/carbon_user-filled.png" />
                <a href="../login.php">Entre</a>
                <p>Ou</p>
                <a href="../cadastro.php">Cadastre-se</a>
            <?php } ?>    
        </div>
        <a href="">
            <img src="./img/clarity_shopping-cart-solid.png" id="carrinho" />
        </a>
</header>