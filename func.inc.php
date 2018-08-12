<?php

	// função para verificar se a pagina de login recebeu algum erro:
	function verificaErros()
	{
		if ( !empty($_GET['error']) )
		{
			$error = $_GET['error'];
			
			switch ($error)
			{
				case 1:
					echo '<h3>Atenção, login ou senha inválidos!</h3>';
					break;					
				case 2:
					echo '<h3>Por favor, entre com seu login e senha.</h3>';
					break;			
			}// fim switch
		
		}// fim if
	
	}// fim função

?>