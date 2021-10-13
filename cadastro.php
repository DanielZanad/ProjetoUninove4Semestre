<?php

if(isset($_POST['cadastro'])){

    require_once './app/model/Conexao.php';
    require_once './app/model/Usuario.php';
    require_once './app/model/UsuarioModel.php';

    $usuario = new \app\model\Usuario();

    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setCel($_POST['celular']);
    $usuario->setGenero($_POST['genero']);
    $usuario->setDataNas($_POST['dataNas']);

    $usuarioDao = new \app\model\UsuarioModel();

    $result = $usuarioDao->create($usuario);
    $result = json_decode($result);
    print_r($result);
    if ($result->status == "true"){
        echo "<script>alert('Cadastrado com Sucesso!')</script>;";
        
    }else{
        echo "<script>alert('Erro ao Cadastrar, tente novamente!')</script>;"; 
    }
    
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
        Data de nascimento: <input type="date" id="dataNas" name="dataNas">
        <label for="genero">Genero:</label>
        <select name="genero" id="genero" autofocus>
            <option value="Masculino">
                Masculino
            </option>
            <option value="Feminino">
                Feminino
            </option>
            <option value="Outros">
                Outros
            </option>
        </select>
        Senha: <input type="password" id="senha" name="senha">
        Confirmar senha: <input type="password">
        <button type="submit" name="cadastro">Cadastre-se</button>
    </form>
</body>
<script>

</script>
</html>