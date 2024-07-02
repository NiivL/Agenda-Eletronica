<?php
require_once("pdoconfig.php");

try {
    // Conexão com o banco de dados usando PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para buscar dados da coluna 'assunto'
    $stmt = $conn->prepare("SELECT assunto FROM atividades");
    $stmt->execute();

    // Verificar se há resultados e gerar HTML
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>" . htmlspecialchars($row['assunto']) . "</p>";
        }
    } else {
        echo "Nenhum dado encontrado.";
    }

} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

// Fechar a conexão
$conn = null;
?>