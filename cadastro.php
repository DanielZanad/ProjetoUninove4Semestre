<?php

if(isset($_POST['cadastro'])){

    require_once './app/model/Conexao.php';
    require_once './app/model/Usuario.php';
    require_once './app/model/UsuarioModel.php';

    $usuario = new \app\model\Usuario();

    $usuario->setId(2);
    $usuario->setNome("teste");
    $usuario->setEmail("testes");
    $usuario->setSenha("testes");
    $usuario->setCel("testse");
    $usuario->setGenero("testse");
    $usuario->setDataNas("2001-03-03");

    $usuarioDao = new \app\model\UsuarioModel();

    $usuarioDao->create($usuario);
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
</head>
<body>
    <!--Criando formulario só para testes-->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        nome: <input type="text" id="nome" name="nome">
        Email: <input type="email" id="email" name="email">
        Celular: <input type="text" id="celular" name="celular">
        Data de nascimento: <input type="text" id="dataNas" name="dataNas">
        Senha: <input type="password" id="senha" name="senha">
        Confirmar senha: <input type="password">
        <button type="submit" name="cadastro">Cadastre-se</button>
    </form>
</body>
</html>