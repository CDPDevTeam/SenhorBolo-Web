<?php
require_once("Sql.php");
	

class Perfil
{
	public function getAdress($email)
	{
		$sql = new Sql();
		$parametros = array(
			":email" => $email
		);
		$list = $sql->select("SELECT endereco.Rua, endereco.Numero, endereco.Complemento, endereco.CEP, 
						cliente.email_cli, endereco.email_cli_fk
						FROM endereco, cliente WHERE endereco.email_cli_fk = cliente.email_cli AND cliente.email_cli = :email;", $parametros);
		return $list;
		
	}
}

?>