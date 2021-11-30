<?php 
session_start();
require_once ("../class/produto.php");

	$produto = new Produto();
	$bolo = $produto->listCart($_GET['id']);

	$itemArray = array(
		$bolo[0]["id_prod"]=>array(
			'id'=>$bolo[0]["id_prod"], 
			'nome'=>$bolo[0]["nome_prod"], 
			'imagem'=>$bolo[0]["foto_prod"], 
			'cat'=>$bolo[0]["categoria_prod_fk"], 
			'preco'=>$bolo[0]["preco_catprod"], 
			'qtd'=>$_POST["qtd"]
		)
	);

	$teste = null;

	if(!empty($_SESSION["carrinho"])) {
			if(in_array($bolo[0]["id_prod"],array_keys($_SESSION["carrinho"]))) {
				foreach($_SESSION["carrinho"] as $k => $v) {
						if($bolo[0]["id_prod"] == $v['id']) {
							$_SESSION["carrinho"][$k]["qtd"] += $_POST["qtd"];
							$teste = 'Produto repetido';
						}
				}
			} else {
				$_SESSION["carrinho"] = array_merge($_SESSION["carrinho"],$itemArray);
			}
	} else {
		$_SESSION["carrinho"] = $itemArray;
	}

	echo"<script language='javascript' type='text/javascript'>window.location.href='index.php?id=".$_GET['id']."'</script>";
?>