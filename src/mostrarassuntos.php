<?php
require_once("pdoconfig.php");

try {
    // Conexão com o banco de dados usando PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para buscar todos os dados da tabela 'atividades'
    $stmt = $conn->prepare("SELECT assunto, atividade_desc, data_inicio,hora_inicio , data_fim, hora_fim, status FROM atividades");
    $stmt->execute();

    // Verificar se há resultados e gerar HTML
    if ($stmt->rowCount() > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Assunto</th><th>Descrição</th><th>Data Início</th><th>Hora Inicio</th><th>Data Fim</th><th>Hora Fim</th><th>Status</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['assunto']) . "</td>";
            echo "<td>" . htmlspecialchars($row['atividade_desc']) . "</td>";
            echo "<td>" . htmlspecialchars($row['data_inicio']) . "</td>";
            echo "<td>" . htmlspecialchars($row['hora_inicio']) . "</td>";
            echo "<td>" . htmlspecialchars($row['data_fim']) . "</td>";
            echo "<td>" . htmlspecialchars($row['hora_fim']) . "</td>";
            echo "<td>" . htmlspecialchars($row['status']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum dado encontrado.";
    }

} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

// Fechar a conexão
$conn = null;
?>