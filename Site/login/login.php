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
		header("Location: ../home/index.html");
	}
	else{
		header("Location: index.php?error=voce ta escrevendo errado tiw");
	}
}
?>