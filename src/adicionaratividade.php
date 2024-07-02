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
    $assunto = $_POST["subject"];
    $data_inicio = $_POST["start-date"];
    $data_fim = $_POST["end-date"];
    $hora_inicio = $_POST["start-time"];
    $hora_fim = $_POST["end-time"];
    $status = $_POST["select-tatus"];
    
    
    if ($descricao == '') {
        echo "Por favor coloque uma descrição.";
        
    }else {
        $sql = "INSERT INTO atividades SET atividade_desc='$descricao', assunto='$assunto', data_inicio='$data_inicio', data_fim='$data_fim', hora_inicio='$hora_inicio', hora_fim='$hora_fim', status='$status'";

        $sql = $conn->query($sql);
        echo "<script>mostrarAlerta('Dados carregados com sucesso!');</script>";
        
        header("Location: home.php");

        
    }


} catch (PDOException $pe) {
    echo "Erro: " . $pe->getMessage();
}