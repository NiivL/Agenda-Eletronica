<?php 
session_start();

include ("../../config/config.php");


$id_user_atividades = (int)$_SESSION['id_user'];
// var_dump($id_user_atividades);

$objEvents=new \Classes\ClassEvents();
echo $objEvents->getEvents();


?>