

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../styles/telacadastro.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">

</head>
<body>

<form class="content" action="databaseconnect.php" method="POST">
        <h1>Cria sua conta</h1>
        <i class="fa-regular fa-user">
            <input id="usuario" type="text" name="usuario" placeholder="Escolha um nome de usuário">
        </i>
        
        <i class="fa-solid fa-lock">
            <input id="senha" type="password" name="senha" placeholder="Senha">
        </i>
        
        <input type="submit" value="Enviar" class="btn-cadastrar" onclick="addEntrada()"></input>

</form>

  <script src="./telacadastro.js"></script>
</body>
</html>