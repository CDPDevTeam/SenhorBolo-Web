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

	public function getCoupon($email)
	{
		$sql = new Sql();
		$parametros = array(
			":email" => $email
		);
		$list = $sql->select("SELECT cupons.ID_Cupons, cupons.Valor_Desc, cupom_cliente.ID_Cupom_FK, cupom_cliente.Email_Cli_FK, cliente.email_cli
						FROM cupons, cliente, Cupom_Cliente 
						WHERE cupons.ID_Cupons = cupom_cliente.id_cupom_fk 
						and cupom_cliente.email_cli_fk = cliente.email_cli and cliente.email_cli = :email;", $parametros);
		return $list;
	}

	public function getAdressDois($email)
	{
		$sql = new Sql();
		$parametros = array(
			":email" => $email
		);
		$list = $sql->select("SELECT endereco.Rua, endereco.Numero, endereco.bairro, endereco.Complemento, endereco.CEP, cliente.email_cli, endereco.email_cli_fk 
		FROM endereco, cliente 
		WHERE endereco.email_cli_fk = cliente.email_cli AND cliente.email_cli = :email;", $parametros);
		return $list;
	}

	public function getAdressTres($email)
	{
		$sql = new Sql();
		$parametros = array(
			":email" => $email
		);
		$list = $sql->select("SELECT endereco.Rua, endereco.Numero, endereco.CEP, cliente.email_cli, endereco.email_cli_fk 
		FROM endereco, cliente 
		WHERE endereco.email_cli_fk = cliente.email_cli AND cliente.email_cli = :email;", $parametros);
		return $list;
		
	}

}

?>