<?php
include "conn.php";
session_start();


if (isset($_SESSION['username'])) {
  $colname_Usuario = $_SESSION['username'] ; 
}else{
	header('Location: ../index.php?erro');  
}


//SELECIONA USUARIO
$usuario = $pdo->prepare("SELECT * FROM usuarios WHERE nome_usuario = :login");
$usuario->bindParam(':login', $colname_Usuario);
$usuario->execute();
$res_usuario = $usuario->rowCount();
$row_usuario = $usuario->fetch( PDO::FETCH_ASSOC );

$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  $_SESSION['username'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
  unset($_SESSION['username']);
	
  $logoutGoTo = "../index.php?saiu";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}




?>