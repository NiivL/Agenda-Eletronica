<?php
require_once('../login/verificarLogin.php');
include("../../config/config.php"); ?>

<!-- <?php
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_SESSION['id_user']);
$date = new \DateTime($events['start']);

?> -->
<?php include(DIRREQ . "Calendario/lib/html/header.php") ?>
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
            <a href="#">
                <span class="icon"><i class="bi bi-calendar-event"></i></span>
                <span class="txt-link">Agenda</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
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
                <span class="txt-link">Conta</span>
            </a>
        </li>
    </ul>

</nav> <!-- Menu lateral -->


<div class="flex">
    <div class="calendarUser"></div>
    <div class="btn_AddEDelete">
        <button class="btn-showform" onclick="Mudarestado('divForm')"><i class="bi bi-file-earmark-plus"></i></button><button class="btn-showform" onclick="Mudarestado('formEditOrRemove')"><i class="bi bi-book"></i></i></button>
    </div>
</div> <!-- Calendário e botões de adicionar/deletar eventos -->

<!-- Código novo -->

<div id="divForm" style="display: none;">
    <form class="formAdd" method="POST" name="formAdd" id="formAdd" action="<?php echo DIRPAGE . '/Calendario/controllers/ControllerAdd.php'; ?>">
        <input type="hidden" name="id_atividade" id="id_atividade" value="<?php echo $_SESSION['id_user']; ?>"><br>
        Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
        Atividade: <input type="text" name="title" id="title"><br>
        Descrição: <input type="text" name="description" id="description"><br>

        Quanto tempo para finalizar a atividade? <select name="horasAtendimento" id="horasAtendimento">
            <option value="">Selecione</option>
            <option value="1">1h</option>
            <option value="2">2h</option>
            <option value="3">3h</option>
        </select><br>
        <input type="submit" value="Marcar Consulta">
    </form>
</div> <!-- Formulario de adicionar eventos -->


<div class="formDel" id="formEditOrRemove" style="display: none;">
    <a id="delete" href="<?php echo DIRPAGE . 'Calendario/controllers/ControllerDelete.php?id=' . $_SESSION['id_user']; ?>"><img class="img-trash" src="<?php echo DIRPAGE . 'Calendario/img/button-trash.png' ?>" alt=""></a>

    <form class="formEdit" method="POST" name="formEdit" id="formEdit" action="<?php echo DIRPAGE . '/Calendario/controllers/ControllerEdit.php'; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id_user']; ?>"><br>
        Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
        Nome: <input type="text" name="title" id="title" value="<?php echo $events['title'] ?>"><br>
        Atividade: <input type="text" name="description" id="description" value="<?php echo $events['description'] ?>"><br>


        <input type="submit" value="Confirmar Consulta">
    </form>
</div> <!-- Formulario de Editar ou remover eventos -->


<?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>