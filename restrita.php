<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title></title>
		<meta charset="utf-8"/>
	</head>
	
	<body>
	
		<p>
			<a href="index.php">Home</a> 
			<a href="restrita.php">Pg Restrita</a> 
			<a href="logout.php">Logout</a>
		</p>
	
		<h2>Bem-vindo, <?php echo $_SESSION['user']; ?>!</h2>
		
		<h3>Se você está lendo isso, parabéns! Você está logado!"</h3>
	
	</body>
</html>