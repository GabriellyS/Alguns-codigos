<?php
// variaveis de conexao com banco de dados
$servidor 	= '127.0.0.1:3308';
$usuario 	= 'root';
$senha 	= '';
$bd			= 'bd_secreto';

// criar string de conex�o:
$conn = new mysqli ($servidor, $usuario, $senha, $bd);

?>