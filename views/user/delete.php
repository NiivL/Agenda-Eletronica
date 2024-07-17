<?php 
session_start();

include ("../../config/config.php");




$objEvents=new \Classes\ClassEvents();
$atividades = json_decode($objEvents->getEvents());
$_SESSION['id_atividade'] = $atividades[0]->id_atividade; 
// echo $_SESSION['id_atividade'];

echo $objEvents->getEventsByIdAtividade();
