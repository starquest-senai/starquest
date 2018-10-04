<?php 

include_once("includes/banco_de_dados.php");

if(isset($_GET["usuario"]))
{
	$return = select("SELECT * FROM jogadores WHERE usuario ='{$_GET['usuario']}'");
	
	php_update("UPDATE progressos SET fase = '{$_GET['fase']}', pontuacao = '{$_GET['pontuacao']}' WHERE jogadores_usuario = '{$_GET['jogadores_usuario']}'");
	
	if($return != 0){
		
		print_r($return);
		
	}
	else
		
		echo "Erro ao buscar nome!";
}

if(isset($_GET["jogadores_usuario"]))


?>