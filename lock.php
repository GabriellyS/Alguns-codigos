<?php session_start();
	if ( empty($_SESSION['user']) || empty($_SESSION['password']) )
	{
		header("location:login.php?error=2");
	}
?>