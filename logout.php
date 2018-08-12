<?php session_start();

	// limpar as variaveis de sessao:
	unset($_SESSION['user']);
	unset($_SESSION['password']);
	session_destroy();
	
	header("location:login.php");
?>