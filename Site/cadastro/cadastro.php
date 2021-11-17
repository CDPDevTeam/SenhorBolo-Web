<?php 
session_start();
include "../class/autenticacao.php";

$user = new User();
$cad = $user->register($_POST['nome'], $_POST['login'], $_POST['cpf'], $_POST['senha'], "defaultpicture.png");
?>