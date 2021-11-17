<?php
require_once("Sql.php");


class User{

	public static function login($email,$senha)
	{
		$sql = new Sql();
		$parametros = array(
			":email" => $email,
			":senha" => $senha
		);
		$results = $sql->select('SELECT * FROM cliente WHERE email_cli=:email AND senha_cli =:senha', $parametros);
		return $results;
	}

	public function register($nome, $email, $cpf, $senha, $foto)
	{
		$sql = new Sql();
		$keys = array($nome, $email, $cpf, $senha, $foto);
		$campoVazio = false;
		$teste = 0;

		foreach($keys as $campo){
		  	if ($campo == null) {
		    	$campoVazio = true;
		  	}
		}
		if($campoVazio){
			echo"<script language='javascript' type='text/javascript'>alert('Preencha todos os campos');window.location.href='index.php';</script>";
		} else {
			$parametros = array(
			":nome" => $nome,
			":email" => $email,
			":cpf" => $cpf,
			":senha" => $senha,
			":foto" => $foto
			);
			$cad = $sql->select('INSERT INTO cliente (nome_cli,email_cli,cpf_cli,senha_cli,foto_cli) VALUES (:nome, :email, :cpf, :senha, :foto)', $parametros);
			echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso');window.location.href='../login/index.php';</script>";
		}
	}
}
?>