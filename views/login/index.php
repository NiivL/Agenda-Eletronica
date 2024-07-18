    <?php

    include("../../config/config.php"); ?>
    
    <?php include(DIRREQ . "Calendario/lib/html/header.php") ?>

    <div class="body-login">
        <form method="POST" action="<?php echo DIRPAGE . 'Calendario/controllers/ControllerConsultUser.php'; ?>">
            <div class="content">
                <h1>Faça seu login</h1>
                <p>Usuário</p>
                <input id="name_user" type="text" placeholder="Usuário" name="name_user">
                <p>Senha</p>
                <input id="password" type="password" placeholder="Senha" name="password">
                <button type="submit" value="Entrar" class="btn-entrar" onclick="addEntrada()">Entrar</button>
                <a href="/Calendario/views/cadastro/index.php">Criar conta</a>

            </div>
            </form>
    </div>


    <?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>