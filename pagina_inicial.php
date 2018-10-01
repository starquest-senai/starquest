<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Página inicial</title>
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>

    <!-- Customização de estilo para esta página -->
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>

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

    <main role="main" class="container" id="niveis_jogo">
        <div class="col">
            <div class="row">
                <img src="assets/img/indicador_fase.png"/>
            </div>
            <!-- BOOTSTRAP - BARRA DE PROGRESSO -->
            <div class="progress" style="margin-top: 1%">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
            </div>
        </div>
    </main>

    <main role="main" class="container" id="botoes_pagina_inicial">
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
                        <a href="pontuacao.php" class="button orange shield glossy">PONTUAÇÃO</a> <br/>
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
                        <a href="instrucoes.html" class="button orange shield glossy">INSTRUÇÕES</a> <br/>
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
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>