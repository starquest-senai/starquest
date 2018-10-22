<?php
    include "includes/validacao_sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/nave.ico" type="image/x-icon"/>
    <title>STARQUEST - Página inicial</title>

    <link rel="stylesheet" type="text/css" href="assets/css/starter-template.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pontuacao.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/controles.css"/>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>

</head>

<body>
    <section id="corpo">
        <h1>CONTROLES</h1>
        <a href="pagina_inicial.php" class="button orange shield glossy" id="botao_voltar"> <label>MENU</label> </a>
        <main role="main" class="container" id="main_pontuacao">
            <div class="container-fluid" id="teclado">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/keyboard_flechas_300x200.png" id="wasd" title="Flechas direcionais para mover a nave" alt="Setas">
                    </div>
                    <div class="col">
                        <img src="assets/img/keyboard_ENTER.png" id="enter" title="Tecla ENTER para iniciar o jogo" alt="Enter" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Mover a nave</p>
                    </div>
                    <div class="col">
                        <p id="enter_texto">Jogar</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid" id="botoes">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/keyboard_space_300x100.png" id="teclas" title="Barra de espaço para atirar" alt="Barra de espaço">
                    </div>
                    <div class="col">
                        <img src="assets/img/keyboard_Pe.png" id="teclas" title="Tecla 'P' para pausar o jogo" alt="Tecla 'P'">
                    </div>
                    <div class="col">
                        <img src="assets/img/keyboard_r.png" id="teclas" title="Tecla 'R' para reiciar o jogo" alt="Tecla 'R'">
                    </div>
                </div>
                <div class="row" id="texto_controles">
                    <div class="col">
                        <p id="atirar">Atirar</p>
                    </div>
                    <div class="col">
                        <p id="pausa_texto">Pausa</p>
                    </div>
                    <div class="col">
                        <p id="reiniciar_texto">Reiniciar</p>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>