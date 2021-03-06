<?php

if(isset($_POST['btnEntrar'])){
    require_once './app/model/Conexao.php';
    require_once 'app/model/Usuario.php';
    require_once 'app/model/UsuarioModel.php';

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email invalido";
    }


    $erros = array();
    $email = $email;
    $senha = $_POST['senha'];

    if(empty($email) or empty($senha)){
        $erros[] = "O campo email ou senha precisa ser preenchido";
    }
    
    
    if(empty($erros)){
        $usuarioDao = new \app\model\UsuarioModel();
        $data = $usuarioDao->searchEmail($email);
        if($data["status"] == 200){
            $result = $usuarioDao->login($email,$senha);
            if($result["status"] == 200){
                echo $result["msg"];
                session_start();
                $_SESSION['nome'] = $data["conteudo"][0]["nome"];
                $_SESSION['email'] = $data["conteudo"][0]["email"];
                $_SESSION['genero'] = $data["conteudo"][0]["genero"];
                $_SESSION['dataNas'] = $data["conteudo"][0]["dataNas"];
                $_SESSION['celular'] = $data["conteudo"][0]["cel"];
                header("Location: https://web-livraria.herokuapp.com/");
            }else{
                $erros[] = $result["msg"];
            }
        }else{
            $erros[] =  "Usuario inexistente";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".\styles\styleLogin.css">
    <title>Entrar</title>
</head>


<header id="headerCadastro">
    <a href="/index.php">
        <img src="./img/WebLivrariaLogo_1.png" id="logo" />
    </a>
</header>
<body>
    <h1>
        <?php
            if(!empty($erros)){
                foreach ($erros as $erro) {
                    echo "<script>alert('$erro, tente novamente!')</script>";
                }
            }
        ?>  
    </h1>
    <div id="login">
        <h1 style="padding: 20px;">
            Login
        </h1>
        <hr style="width: 70%; margin-bottom: 30px;">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formulario">
            <input type="email" placeholder="email" id="email" name="email">
            <br>
            <input type="password" placeholder="Senha" id="senha" name="senha">
            <br>
            <button id="btnEntrar" name="btnEntrar">Entrar</button>
        </form>
    </div>
    
</body>
</html>