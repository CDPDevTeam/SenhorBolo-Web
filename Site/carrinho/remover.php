<?php 
session_start();
require_once ("../class/produto.php");

    $posicaoBolo = 0;
    $teste = '';

	if(!empty($_SESSION["carrinho"])) {
        unset($_SESSION["carrinho"][$_GET['posicao']]);
	}

    echo"<script language='javascript' type='text/javascript'>window.location.href='index.php'</script>"
?>