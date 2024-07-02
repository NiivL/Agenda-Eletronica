<?php
require_once('pdoconfig.php');
// require_once("databaseconnect.php");
try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $descricao = $_POST["descricao"];
    // $select_id = "SELECT "

    
    if ($descricao == '') {
        echo "Por favor coloque uma descrição.";
        
    }else {
        $sql = "INSERT INTO atividades SET atividade_desc='$descricao'";

        $sql = $conn->query($sql);
        echo "inserido com sucesso";

        // header("Location: home.php");

    }


} catch (PDOException $pe) {
    echo "Erro: " . $pe->getMessage();
}