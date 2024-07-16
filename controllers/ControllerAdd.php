<?php 
include ("../config/config.php");

$objEvents=new \Classes\ClassEvents();
$date=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$time=filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$title=filter_input(INPUT_POST,'title',FILTER_DEFAULT);
$description=filter_input(INPUT_POST,'description',FILTER_DEFAULT);
$horasAtendimento=filter_input(INPUT_POST,'horasAtendimento',FILTER_DEFAULT);
$start=new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));
$id=filter_input(INPUT_POST,'id',FILTER_DEFAULT);


$objEvents->createEvent(
    $id,
    $title,
    $description,
    'black',
    $start->format("Y-m-d H:i:s"),
    $start->modify('+'.$horasAtendimento.'hours')->format("Y-m-d H:i:s"),
    0
);

header("Location: /Calendario/views/user/index.php");