<?php

include "includes/validacao_sessao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Página inicial</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/highscores.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/controles.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>

</head>
<body>

    <header id="cabecalho_jogo">
        <div id="logo">
            <p id="bemvindo">Seja bem-vindo, _______________!</p>
        </div>
    </header>

    <section id="corpo">
        <h1>CONTROLES</h1>
        <div id="controles">
            <div id="teclado">
                <img src="img/keyboard_wasd_300x200.png">
                <img src="img/keyboard_flechas_300x200.png">
                <p>Movimentar a nave</p>
            </div>

            <div id="botoes">
                <img src="img/keyboard_space_300x100.png">
                <img id="pausa" src="img/keyboard_Pe.png">
                <div id="texto_controles">
                    <p id="atirar">Atirar</p>
                    <p id="pausa_texto">Pausa</p>
                </div>
            </div>
        </div>
        <a href="pagina_inicial.php" class="button orange shield glossy"> <img src="img/botao_voltar_30x34.png"> </a>
    </section>

    <footer id="rodape">
        <p class="autoria">Copyright &copy; 2018 - StarQuest Ltda.</p>
        <p class="redes-sociais"><a id="linkar" href="https://www.facebook.com/marcomauricio1980" target="_blank"> Facebook</a> |
            <a id="linkar" href="https://twitter.com/_marcomauricio_" target="_blank"> Twitter</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>