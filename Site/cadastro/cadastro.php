<?php 
session_start();
include "conexao.php";


$nome = $_POST['nome'];
$login = $_POST['login'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$foto = "defaultpicture.png";

$query_select = "SELECT email_cli FROM cliente WHERE email_cli = '$login'";

$select = pg_query($bancoCon, $query_select);

$array = pg_fetch_array($select);

 

if($login == "" || $login == null){

  echo"<script language='javascript' type='text/javascript'>alert('favor preencher o campo de login');window.location.href='index.php';</script>";

    }else{

      $query = "INSERT INTO cliente (nome_cli,email_cli,cpf_cli,senha_cli,foto_cli) VALUES ('$nome','$login','$cpf','$senha','$foto')";

      $insert = pg_query($bancoCon, $query);

      if($insert){

        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso, tmj!');window.location.href='index.php'</script>";

      }else{

        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário, mals..');window.location.href=’index.php'</script>";

      }
    }
?>