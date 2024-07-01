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
    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
    $sql =  "SELECT * FROM pessoas WHERE user='$usuario' and password='$senha'";
    $sql = $conn->query($sql);
    
    if ($sql->rowCount() == 1) {
        header("Location: home.php");
    } else {
        echo "<script type='javascript'>alert('Usuário ou senha inválida!');";
        header("Location: index.php");
    }
    
    

} catch (PDOException $pe) {
    echo "Erro: " . $pe->getMessage();
}










