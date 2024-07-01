<?php
require_once 'pdoconfig.php';
try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $txt_user = $_POST["txt_usuario"];
    $txt_senha = $_POST["txt_senha"];


    if ($txt_user == '' || $txt_senha == '') {
        echo "<script type='javascript'>alert('Por favor preencha todos os dados!');";
        header("Location: telacadastro.php");

    } else {
        $sql = "INSERT INTO pessoas SET user='$txt_user', password='$txt_senha'";
        $sql = $conn->query($sql);

        header("Location: home.php");
    }

} catch (PDOException $pe) {
    echo "Erro: " . $pe->getMessage();
}
