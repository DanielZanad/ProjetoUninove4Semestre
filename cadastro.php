<?php

if (isset($_POST['cadastro'])) {

    require_once './app/model/Conexao.php';
    require_once './app/model/Usuario.php';
    require_once './app/model/UsuarioModel.php';

    $usuario = new \app\model\Usuario();
    $erros = array();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email invalido";
        echo "Email invalido";
    }

    if ($_POST["senha"] != $_POST["confSenha"]) {
        $erros[] = "As Senhas estão diferentes";
        echo "As Senhas estão diferentes";
    }
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setSenha($_POST['senha']);
    $usuario->setCel($_POST['celular']);
    $usuario->setGenero($_POST['genero']);
    $usuario->setDataNas($_POST['dataNas']);

    if (empty($usuario->getNome()) or empty($usuario->getEmail()) or empty($usuario->getSenha()) or empty($usuario->getCel()) or empty($usuario->getGenero()) or empty($usuario->getDataNas())) {
        $erros[] = "Algum campo esta vazio";
        echo "Algum campo esta vazio";
    }
    echo empty($erros);
    if (empty($erros)) {
        $usuarioDao = new \app\model\UsuarioModel();

        $result = $usuarioDao->create($usuario);
        if ($result["status"] == 200) {
            echo "<script>alert('Cadastrado com Sucesso!')</script>;";
            session_start();
            header("Location: https://web-livraria.herokuapp.com/login.php");
        } else {
            echo "<script>alert('Erro ao Cadastrar, tente novamente!')</script>;";
        }
    } else {
        print_r($erros);
    }
}





?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/stylesCadastro.css">
    <title>Tela de cadastro</title>
</head>


<header id="headerCadastro">
    <img src="./img/WebLivrariaLogo_1.png" id="logo" />
</header>

<body>
    <div id="cadastro">
        <h1 style="padding: 20px;">
            Criar Conta
        </h1>
        <hr style="width: 70%; margin-bottom: 30px;">

        <!--Criando formulario só para testes-->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formCadastro">
            <input type="text" id="nome" name="nome" placeholder="Nome Completo">
            <input type="text" id="email" name="email" placeholder="E-mail">
            <input type="password" id="senha" name="senha" placeholder="Senha">
            <input type="password" id="confSenha" placeholder="Confirmar Senha" name="Confirmar Senha">
            Data de Nascimento<input type="date" id="dataNas" name="dataNas" placeholder="">
            <select name="genero" id="genero" autofocus>
                <option value="Gênero" disabled selected> Gênero
                </option>
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
            <input type="text" id="celular" name="celular" placeholder="Celular">
            <button type="submit" name="cadastro">Cadastre-se</button>
        </form>
    </div>

</body>





</html>

