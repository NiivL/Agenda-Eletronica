

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../styles/telacadastro.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

</head>
<body>

<form class="content" action="databaseconnect.php" method="POST">
        <h1>Cria sua conta</h1>
        <i class="bi bi-person">
            <input id="usuario" type="text" name="txt_usuario" placeholder="Escolha um nome de usuário">
        </i>
        
        <i class="bi bi-key">
            <input id="senha" type="password" name="txt_senha" placeholder="Senha">
        </i>
        
        <input type="submit" value="Enviar" class="btn-cadastrar" onclick="addEntrada()"></input>

</form>

  <script src="./telacadastro.js"></script>
</body>
</html>