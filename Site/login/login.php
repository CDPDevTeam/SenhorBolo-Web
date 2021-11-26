<?php

session_start();
include "../class/autenticacao.php";

$user = new User();

$login = $user->login($_POST['uname'],$_POST['password']);


if(count($login) == 1){
	if($login[0]['email_cli'] == $_POST['uname'] && $login[0]['senha_cli'] == $_POST['password']) 
	{
		echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso');window.location.href='../home/index.php'</script>";
	    $_SESSION['name'] = $login[0]['nome_cli'];
	    $_SESSION['photo'] = $login[0]['foto_cli'];
	    $_SESSION['id'] = $login[0]['email_cli'];
	    $_SESSION['cpf'] = $login[0]['cpf_cli'];
	}
	else
	{
		echo"<script language='javascript' type='text/javascript'>alert('Esse usuário não pode fazer login');window.location.href='../home/index.php'</script>";
	}
}else{
	echo"<script language='javascript' type='text/javascript'>alert('Usuário e/ou senha incorretos');window.location.href='../home/index.php'</script>";
}


?>