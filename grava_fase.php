<?php 

include_once("includes/banco_de_dados.php");

if(isset($_GET["jogadores_usuario"])){
	
	$return = select("SELECT pontuacao,fase FROM progressos WHERE jogadores_usuario ='{$_GET['jogadores_usuario']}'");

	if($return != 0){
		
		echo json_encode($return);	
	}	

}

?>