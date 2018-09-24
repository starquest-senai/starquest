<?php 

include_once("includes/banco_de_dados.php");

if(isset($_GET["jogadores_usuario"]))
{
	$return = select("SELECT * FROM progressos WHERE jogadores_usuario ='{$_GET['jogadores_usuario']}'");
	
	echo "INSERT INTO progressos (id, nivel, fase, pontuacao, jogadores_usuario) VALUES (DEFAULT, {$_GET['nivel']}, {$_GET['fase']}, {$_GET['pontuacao']}, {$_GET['jogadores_usuario']})";
	
	
	php_insert("INSERT INTO progressos (id, nivel, fase, pontuacao, jogadores_usuario) VALUES ('', {$_GET['nivel']}, {$_GET['fase']}, {$_GET['pontuacao']}, {$_GET['jogadores_usuario']})");
	
	if($return != 0){
		
		print_r($return);
		
	}
	else
		echo "Erro ao buscar nome!";
}

if(isset($_GET["jogadores_usuario"]))


?>