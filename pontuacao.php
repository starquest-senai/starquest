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
    <nav class="navbar navbar-light" style="background-color: transparent;">
        <div class="row">
            <div class="col">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/LogoInicial_sem_satim.png" width="80" height="80" alt="Logo StarQuest">
                </a>
            </div>
            <div class="col" id="div_bem_vindo">
                <a class="navbar-brand float-left"  href="#">
                    <p id="bem_vindo">Seja bem-vindo, _______________!</p>
                </a>
            </div>
        </div>
    </nav>

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
				
					for($i=1;$i<15;$i++){
				
						echo "
						<tr>
						  <td id='colocacao' style='text-align: center'>$i</td>
						  <td id='colocacao' style='text-align: center'>Mathetinha</td>
					<td id='colocacao' style='text-align: center'>100</td>
				</tr>
						";
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