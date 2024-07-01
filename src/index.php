<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/telaLogin.css">
    <link rel="stylesheet" href="../styles/reset.css">
</head>

<body>
    <form action="login.php" method="POST">
        <div class="content">
            <h1>Faça seu login</h1>
            <p>Usuário</p>
            <input id=usuarioCadastrado type="text" placeholder="Usuário" name="usuario">
            <p>Senha</p>
            <input id="senhaCadastrada" type="password" placeholder="Senha" name="senha">
            <button type="submit" value="Entrar" class="btn-entrar" onclick="addEntrada()">Entrar</button>
            <a href="">
            </a>
            <a href="./telacadastro.php">Criar conta</a>

        </div>
    </form>

    <script src="./telalogin.js"></script>

</body>

</html>