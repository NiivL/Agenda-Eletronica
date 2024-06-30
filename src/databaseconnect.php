<?php
require_once 'pdoconfig.php';
try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    // $id = $_POST["campo1"];
    $user = $_POST["usuario"];
    $senha = $_POST["senha"];


    if ($user == '' || $senha == '') {
        echo "<script type='javascript'>alert('Por favor preencha todos os dados!');";
        header("Location: telacadastro.php");

    } else {
        $sql = "INSERT INTO pessoas SET user='$user', password='$senha'";
        $sql = $conn->query($sql);

        header("Location: home.php");
    }

    // echo "Conectado a $dbname em $host com sucesso.";
} catch (PDOException $pe) {
    echo "Erro: " . $pe->getMessage();
}
