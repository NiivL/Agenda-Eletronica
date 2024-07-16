<?php 
include ("../config/config.php");

$objEvents=new \Classes\ClassEvents();
$id_user=filter_input(INPUT_POST,'id_user',FILTER_DEFAULT);
$name_user=filter_input(INPUT_POST,'name_user',FILTER_DEFAULT);
$name=filter_input(INPUT_POST,'name',FILTER_DEFAULT);
$password=filter_input(INPUT_POST,'password',FILTER_DEFAULT);


$objEvents->createUser(
    0,
    $name_user,
    $name,
    $password
);