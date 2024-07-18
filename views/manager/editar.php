<?php
require_once('../login/verificarLogin.php');
include("../../config/config.php"); ?>
<?php include(DIRREQ . "Calendario/lib/html/header.php") ?>
<?php
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
?>

<div class="container">
    <div class="contentEdit">
        <div class="gif-caderno">
            <img class="img-caderno" src="../../img/caderno.gif" alt="gif de um lápis escrevendo no caderno">
        </div>


        <main class="formDel" id="formEditOrRemove">
            <a id="delete" href="<?php echo DIRPAGE . 'Calendario/controllers/ControllerDelete.php?id=' . $_GET['id']; ?>"><i class="bi bi-trash"></i></a>

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