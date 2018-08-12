<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title></title>
		<meta charset="utf-8"/>
	</head>
	
	<body>
	
		<p>
			<a href="index.php">Home</a> 
		</p>
		
		<?php 
			include 'func.inc.php';
			// chamar função 'verificaErros':
			verificaErros();
		?>
		
		<h2>Efetue o login</h2>
		
		<form name="login" action="validar.php" method="post">
	
			<p>
				<label for="user">Usuário: </label>
				<input type="text" name="user" >
			</p>
			<p>
				<label for="password">Senha: </label>
				<input type="password" name="password" >
			</p>
			
			<button type="submit" name="logar">Logar</button>
	
		</form>
		
	</body>
</html>