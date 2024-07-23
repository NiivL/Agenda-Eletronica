<?php
include("../../config/config.php");
require_once('../login/verificarLogin.php');
include(DIRREQ . "Calendario/lib/html/header.php");
?>


<nav class="menuLateral">
    <div class="btn-expandir">
        <i class="bi bi-list-task" id="btn-expandir"></i>
    </div>

    <ul class="listaDeBotoes">
        <li class="item-menu ativo">
            <a href="./home.php">
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


<div class="homeContent">
    <div class="homeContainer">
        <h1 class="logo"><i class="fa-solid fa-n"></i><i class="fa-solid fa-l"></i>Calendar</h1>
        <h1 class="homeTitle">Mais do que um simples calendário on-line grátis</h1>
        <p class="homeParagrafo">Você realmente sabe o que um calendário digital é capaz de fazer? Pense de novo. Planejamento, organização, agendamento, gerenciamento - tudo isso é feito facilmente com o <span>NLcalendar</span>.</p>
        <a href="./index.php" class="btnComecar">Começar<i class="bi bi-arrow-right-short"></i></a>
    </div>
</div>

<?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>