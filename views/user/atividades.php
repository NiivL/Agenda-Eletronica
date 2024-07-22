<?php
include("../../config/config.php");
include(DIRREQ . "Calendario/lib/html/header.php");
$objEvents = new \Classes\ClassEvents();
$events = json_decode($objEvents->getEvents(), true); ?>

<nav class="menuLateral">
    <div class="btn-expandir">
        <i class="bi bi-list-task" id="btn-expandir"></i>
    </div>

    <ul class="listaDeBotoes">
        <li class="item-menu ativo">
            <a href="#">
                <span class="icon"><i class="bi bi-house"></i></span>
                <span class="txt-link">Home</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="./index.php">
                <span class="icon"><i class="bi bi-calendar-event"></i></span>
                <span class="txt-link">Agenda</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="atividades.php">
                <span class="icon"><i class="bi bi-scooter"></i></span>
                <span class="txt-link">Atividades</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-gear"></i></span>
                <span class="txt-link">Configurações</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-person-circle"></i></span>
                <span class="txt-link">Conta</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="/Calendario/views/login/logoff.php">
                <span class="icon"><i class="bi bi-escape"></i></span>
                <span class="txt-link">Sair</span>
            </a>
        </li>
    </ul>

</nav> <!-- Menu lateral -->


<section class="background">
    <div class="sessaoAtividades">
        <div class="gif-caderno-lapis">
            <img class="img-caderno-lapis" src="../../img/CadernoELapis.gif" alt="gif de um lápis escrevendo no caderno">
            <h1>Todas as <span>atividades!</span></h1>
        </div>

        <div class="atividades">
            <?php foreach ($events as $event) {

                echo    '<div class="atividade">' .
                    '<p> Atividade: ' . $event['title'] . '</p>' .
                    '<p> Descrição: ' . $event['description'] . '</p>' .
                    '<p> Data: ' . $event['start'] . '</p>' .
                    '<a id="delete" href="../user/editar.php?id=' . $event['id'] . '"><i class="bi bi-trash"></i></a>' .
                    '</div>';
            }; ?>
        </div>
    </div>
</section> <!-- lista de atividades -->

<?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>