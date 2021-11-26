<?php
	if($_SERVER['REQUEST_METHOD'] == "post" and isset($_POST['insert']))
    {
    	session_destroy();
        session_unset();
        echo"<script language='javascript' type='text/javascript'>alert('Desconectado com sucesso');window.location.href='../home/index.php'</script>";
    }
?>