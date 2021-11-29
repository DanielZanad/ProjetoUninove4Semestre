<?php
session_start(); 
if (isset($_SESSION["nome"])) {
    session_start();
}
?>
<header class="menu-principal">
        <img src="./img/WebLivrariaLogo_1.png" id="logo"/>
        <p>Olá, <?php if(isset($_SESSION["nome"])){echo $_SESSION["nome"];}else{echo "Bem vindo!";}?></p>
        <div id="login">
            <?php if(isset($_SESSION["nome"])){?>
                <img src="./img/carbon_user-filled.png" />
                <p>Boas Compras!</p>
                <a href="../logout.php">Sair?</a>
            <?php }else{ ?>
                <img src="./img/carbon_user-filled.png" />
                <a href="login.php">Entre</a>
                <p>Ou</p>
                <a href="cadastro.php">Cadastre-se</a>
            <?php } ?>    
        </div>
        <a href="">
            <img src="./img/clarity_shopping-cart-solid.png" id="carrinho" />
        </a>
</header>
