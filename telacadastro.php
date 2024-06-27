<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="telacadastro.css">
    <link rel="stylesheet" href="reset.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">

</head>
<body>
<div class="content">
        <h1>Cria sua conta</h1>
        <i class="fa-regular fa-user">
            <input id="usuario" type="password" placeholder="Escolha um nome de usuário">
        </i>
        
        <i class="fa-solid fa-lock">
            <input id="senha" type="password" placeholder="Senha">
        </i>
        
        <button onclick="addEntrada()">Cadastrar</button>

    </div>

  <script src="./telacadastro.js"></script>
</body>
</html>