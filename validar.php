<?php session_start(); // inicia a sess�o
	
	// recebe os dados do form de login:
	$user 			= $_POST['user'];
	$password 	= $_POST['password'];
	
	// incluir o arquivo de conex�o:
	include 'conn.php';
	
	// cria o comando sql:
	$sql = "SELECT user, password FROM tb_secreta WHERE user LIKE '$user'  
	AND password LIKE '$password' ";

	// executa o comando sql
	$result = mysqli_query($conn, $sql);
	
	// verifica se foi executado corretamente
	$linhas = mysqli_affected_rows($conn);
	
	if ( $linhas > 0 ) // se maior que zero, encontrou um usuario com estes dados
	{
		// registra as vari�veis de sess�o:
		$_SESSION['user'] 			 = $user;
		$_SESSION['password']  = $password;
		
		// redireciona para a p�gina restrira:
		header("location:restrita.php");
	}
	else // sen�o, n�o foi encontrado nenhum usuario com estes dados
	{
		// redireciona novamente para a pagina de login, informando tbm um cod de erro:
		header ("location:login.php?error=1");
	}
?>