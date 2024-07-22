<?php
require_once('../login/verificarLogin.php');
include("../../config/config.php"); ?>
<!-- <?php
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


<div class="flex">
    <div class="calendarUser"></div>
    <div class="btn_AddEDelete">
        <button class="btn-showform" onclick="Mudarestado('divForm')"><i class="bi bi-file-earmark-plus"></i></button>
    </div>
</div> <!-- Calendário e botões de adicionar/deletar eventos -->

<!-- Código novo -->

<div id="divForm" style="display: none;">
    <form class="formAdd" method="POST" name="formAdd" id="formAdd" action="<?php echo DIRPAGE . '/Calendario/controllers/ControllerAdd.php'; ?>">
        <input type="hidden" name="id_atividade" id="id_atividade" value="<?php echo $_SESSION['id_user']; ?>"><br>
        Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
        Atividade: <input class="inputAtividade" type="text" name="title" id="title"><br>
        Descrição: <input class="inputDescricao" type="text" name="description" id="description"><br>

        Quanto tempo para finalizar a atividade? <select name="horasAtendimento" id="horasAtendimento">
            <option value="">Selecione</option>
            <option value="1">1h</option>
            <option value="2">2h</option>
            <option value="3">3h</option>
        </select><br>
        <input class="addAtividade" type="submit" value="Adicionar atividade" onclick="verificarCamposPreenchidos()">
    </form>
</div> <!-- Formulario de adicionar eventos -->


<?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>