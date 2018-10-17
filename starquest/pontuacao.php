<?php

include ("includes/banco_de_dados.php");
include ("includes/conexao.php");
include ("includes/validacao_sessao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Página inicial</title>
    <link rel="stylesheet" type="text/css" href="assets/css/starter-template.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pontuacao.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>

</head>

<body>
    <section id="corpo">
        <h1>PONTUAÇÃO</h1>
        <a href="pagina_inicial.php" class="button orange shield glossy" id="botao_voltar"> <label>MENU</label> </a>
        <main role="main" class="container" id="main_pontuacao">
            <div class="container-fluid">
            
			<table class="table table-black">
			  <thead>
				<tr class="header">
					<th>
						Colocação
					</th>
					<th style="padding-left:315px">
						Jogador
					</th>
					<th style="padding-left:600px">
						Pontos
					</th>
				</tr>
			  </thead>
			  <tbody>
				
				<?php
				
				$usuario = (string) $_SESSION['usuario']["usuario"];
				
				$ranking = select ("SELECT pontuacao, jogadores_usuario FROM progressos ORDER BY pontuacao DESC");
			
				$num_registros = count($ranking);

				
					for($j=0;$j<$num_registros;$j++){
						$colocacao = $j+1;
						
					$teste = ($ranking[$j]['jogadores_usuario']);

					
						if($teste == $usuario){
					
						echo "

						<tr>
						  <td id='corsim' style='text-align: center'>$colocacao<span>º</span></td> 
						  <td id='corsim' style='text-align: center'> {$ranking[$j]['jogadores_usuario']} </td> 
						  <td id='corsim' style='text-align: center'> {$ranking[$j]['pontuacao']} </td>
						</tr>
						
						";
						
						} else {
							
						echo "

						<tr>
						  <td id='colocacao' style='text-align: center'>$colocacao<span>º</span></td> 
						  <td id='colocacao' style='text-align: center'> {$ranking[$j]['jogadores_usuario']} </td> 
						  <td id='colocacao' style='text-align: center'> {$ranking[$j]['pontuacao']} </td>
						</tr>	
						
						";
						
						}
					}
				
				?>
				
			  </tbody>
			</table>
        </main>
    </section>
	

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>