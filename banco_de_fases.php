<?php 

include_once("includes/banco_de_dados.php");

if(isset($_GET["jogadores_usuario"]))
{
	$busca_pontuacao = select("SELECT pontuacao FROM progressos WHERE jogadores_usuario ='{$_GET['jogadores_usuario']}'");
	
	if($busca_pontuacao[0]["pontuacao"] < $_GET['pontuacao']){
		
		php_update("UPDATE progressos SET fase = '{$_GET['fase']}', pontuacao = '{$_GET['pontuacao']}' WHERE jogadores_usuario = '{$_GET['jogadores_usuario']}'");
	}
	else
	{
		php_update("UPDATE progressos SET fase = '{$_GET['fase']}' WHERE jogadores_usuario = '{$_GET['jogadores_usuario']}'");
		
	}
}

?>