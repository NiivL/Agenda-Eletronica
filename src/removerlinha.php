<?php
require_once('pdoconfig.php');

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "SELECT id FROM atividades ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $ultimo_id = $row['id'];

        
        $sql = "DELETE FROM atividades WHERE id = $ultimo_id";

        
        if ($conn->query($sql) === TRUE) {
            echo "Última linha removida com sucesso!";
        } else {
            echo "Erro ao remover a última linha: " . $conn->error;
        }
    } else {
        echo "Nenhuma linha encontrada para remover.";
    }

    
    $conn->close();
}
?>