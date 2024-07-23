<?php
require_once('../login/verificarLogin.php');
include("../../config/config.php");
include(DIRREQ . "Calendario/lib/html/header.php");
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
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

<div class="container">
    <div class="contentEdit">
        <div class="gif-caderno">
            <img class="img-caderno" src="../../img/caderno.gif" alt="gif de um lápis escrevendo no caderno">
        </div>


        <main class="formDel" id="formEditOrRemove">
             <a id="delete" href="<?php echo DIRPAGE . "Calendario/controllers/ControllerDelete.php?id=" . $_GET["id"]; ?>"><i class="bi bi-trash"></i></a>

            <form class="formEdit" method="POST" name="formEdit" id="formEdit" action="<?php echo DIRPAGE . '/Calendario/controllers/ControllerEdit.php'; ?>">
                <h1 class="txtEdit">Altere ou <span>exclua</span> a atividade</h1>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
                Data: <input class="inputEdit" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>">
                Hora: <input class="inputEdit" type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>">
                <input class="inputEdit" type="text" placeholder="Atividade" name="title" id="title" value="<?php echo $events['title']; ?>">
                <textarea rows="6" cols="30" class="inputEdit" placeholder="Digite aqui a descrição da sua atividade" type="text" name="description" id="description" value="<?php echo $events['description']; ?>"></textarea>


                <input class="btnAlterarDados" type="submit" value="Alterar dados">
            </form>
        </main> <!-- Formulario de adicionar eventos -->

    </div>
</div>


<?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>