<?php
    session_start();
    include("../../config/config.php"); ?>
    <?php include(DIRREQ . "Calendario/lib/html/header.php") ?>


<div class="body-cadastro">
    <form class="content" method="POST" action="<?php echo DIRPAGE . '/Calendario/controllers/ControllerLogin.php'; ?>">
        <h1>Cria sua conta</h1>
        <i class="bi bi-person">
            <input id="usuario" type="text" name="name_user" placeholder="Escolha um nome de usuário">
        </i>

        <i class="bi bi-person">
            <input id="nome_user" type="text" name="name" placeholder="Digite seu nome">
        </i>

        <i class="bi bi-key">
            <input id="senha" type="password" name="password" placeholder="Senha">
        </i>

        <input type="submit" value="Enviar" class="btn-cadastrar" onclick="addEntrada()"></input>

    </form>
</div>


<?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>