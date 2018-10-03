<?php 

include_once("includes/banco_de_dados.php");

$return = select("SELECT * FROM perguntas");

if($return != 0){
	
	echo json_encode($return);	
	
}
else
	
	echo "Erro ao buscar pergunta!";

?>