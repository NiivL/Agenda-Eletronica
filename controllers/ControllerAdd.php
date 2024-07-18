<?php 
include ("../config/config.php");

$objEvents=new \Classes\ClassEvents();
$date=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$time=filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$title=filter_input(INPUT_POST,'title',FILTER_DEFAULT);
$description=filter_input(INPUT_POST,'description',FILTER_DEFAULT);
$horasAtendimento=filter_input(INPUT_POST,'horasAtendimento',FILTER_DEFAULT);
$start=new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));
$id_atividade=filter_input(INPUT_POST,'id_atividade',FILTER_DEFAULT);



if ($horasAtendimento == "") {
    header("Location: /Calendario/views/user/index.php");
}else if($title == ""){
    header("Location: /Calendario/views/user/index.php");
}
else if($description == ""){
    header("Location: /Calendario/views/user/index.php");
}

$objEvents->createEvent(
    0,
    $title,
    $description,
    'black',
    $start->format("Y-m-d H:i:s"),
    $start->modify('+'.$horasAtendimento.'hours')->format("Y-m-d H:i:s"),
    $id_atividade
);

header("Location: /Calendario/views/user/index.php");