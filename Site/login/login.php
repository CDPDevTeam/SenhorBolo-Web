<?php

session_start();
include "conexao.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

$sql = "SELECT * FROM cliente WHERE (email_cli='$uname' AND senha_cli ='$pass')";

$result = pg_query($bancoCon, $sql);

if(pg_num_rows($result) == 1)
{
	$row = pg_fetch_assoc($result);
	if($row['email_cli'] == $uname && $row['senha_cli'] == $pass) 
	{
		echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso');window.location.href='../home/index.php'</script>";

            $_SESSION['name'] = $row['nome_cli'];
            $_SESSION['photo'] = $row['foto_cli'];
            $_SESSION['id'] = $row['email_cli'];
}else{
		echo"<script language='javascript' type='text/javascript'>alert('Esse usuário não pode fazer login');window.location.href='../home/index.php'</script>";
	}
}else
{
	echo"<script language='javascript' type='text/javascript'>alert('Usuário e/ou senha incorretos');window.location.href='../login/index.php'</script>";
}
?>