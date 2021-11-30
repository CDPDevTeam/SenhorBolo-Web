<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['desconectar']))
    {
        func();
    }

    function func()
    {
        session_start();
        session_unset();
        session_destroy();

        echo"<script language='javascript' type='text/javascript'>alert('Desconectado com sucesso');window.location.href='../home/index.php'</script>";
    }
?>