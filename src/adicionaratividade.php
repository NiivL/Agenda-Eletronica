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
    $hora_inicio = $_POST["start-time"];
    $hora_fim = $_POST["end-time"];
    
    if ($descricao == '') {
        echo "Por favor coloque uma descrição.";
        
    }else {
        $sql = "INSERT INTO atividades SET atividade_desc='$descricao', assunto='$assunto', data_inicio='$hora_inicio', data_fim='$hora_fim'";

        $sql = $conn->query($sql);
        echo "<script>mostrarAlerta('Dados carregados com sucesso!');</script>";
        
        header("Location: home.php");

        
    }


} catch (PDOException $pe) {
    echo "Erro: " . $pe->getMessage();
}