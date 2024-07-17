<?php
require_once('../login/verificarLogin.php');
include("../../config/config.php"); ?>
<?php include(DIRREQ . "Calendario/lib/html/header.php") ?>
<?php 
$objEvents=new \Classes\ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
?>



<a id="delete" href="<?php echo DIRPAGE . 'Calendario/controllers/ControllerDelete.php?id=' . $_GET['id']; ?>"><img class="img-trash" src="<?php echo DIRPAGE . 'Calendario/img/button-trash.png' ?>" alt=""></a>

<form class="formEdit" method="POST" name="formEdit" id="formEdit" action="<?php echo DIRPAGE . '/Calendario/controllers/ControllerEdit.php'; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    Nome: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
    Atividade: <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>


    <input type="submit" value="Confirmar Consulta">
</form>


<?php include(DIRREQ . "Calendario/lib/html/footer.php") ?>