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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>

</head>
<body>

    <header id="cabecalho_jogo">
        <div id="logo">
            <p id="bemvindo">Seja bem-vindo, _______________!</p>
        </div>
    </header>

    <section id="corpo">
        <header>
            <div id="logo_inicial">
                <div id="semsatim">
                    <img id="logo_central" src="img/LogoInicial_sem_satim.png"/> <br/>
                </div>
                <div id="indicador">
                    <img src="img/indicador_fase.png"/>
                </div>
                <!-- BOOTSTRAP - BARRA DE PROGRESSO -->
                <div class="progress" style="margin-top: 1%">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
            </div>
        </header>
        <section id="corpo_interno">
            <!-- LINHA DE CIMA DOS BUTTONS -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="wrapper">
                            <a href="STARQUEST_JOGO.php" class="button orange shield glossy" style="padding-left: 4.9em; padding-right: 4.9em;">PLAY</a> <br/>
                        </div>
                    </div>
                    <div class="col">
                        <!-- DEIXAR ESTA COLUNA VAZIA -->
                    </div>
                    <div class="col">
                        <div id="wrapper">
                            <a href="highscores.php" class="button orange shield glossy">HIGHSCORES</a> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LINHA DO MEIO DOS BUTTONS -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- DEIXAR ESTA COLUNA VAZIA -->
                    </div>
                    <div class="col">
                        <div id="wrapper">
                            <a href="controles.php" class="button orange shield glossy" style="padding-left: 3.2em; padding-right: 3.2em;">CONTROLES</a> <br/>
                        </div>
                    </div>
                    <div class="col">
                        <!-- DEIXAR ESTA COLUNA VAZIA -->
                    </div>
                </div>
            </div>

            <!-- LINHA DE BAIXO DOS BUTTONS -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="wrapper">
                            <a href="controles.php" class="button orange shield glossy">INSTRUÇÕES</a> <br/>
                        </div>
                    </div>
                    <div class="col">
                        <!-- DEIXAR ESTA COLUNA VAZIA -->
                    </div>
                    <div class="col">
                        <div id="wrapper">
                            <a href="includes/logout.php" class="button orange shield glossy" style="padding-left: 4.9em; padding-right: 4.9em;">SAIR</a> <br/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <footer id="rodape">
        <p class="autoria">Copyright &copy; 2018 - StarQuest Ltda.</p>
        <p class="redes-sociais"><a id="linkar" href="https://www.facebook.com/marcomauricio1980" target="_blank"> Facebook</a> |
            <a id="linkar" href="https://twitter.com/_marcomauricio_" target="_blank"> Twitter</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>