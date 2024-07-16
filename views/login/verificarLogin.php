<?php

session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["id_user"]) || !isset($_SESSION["name_user"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: /Calendario/views/login/index.php");
exit;
}