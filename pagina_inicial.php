<?php
    include "includes/validacao_sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Página inicial</title>
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="shortcut icon" href="assets/img/nave.ico" type="image/x-icon"/>

    <!-- Customização de estilo para esta página -->
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>

</head>
<body>

    <nav class="navbar navbar-light" style="background-color: transparent;">
        <div class="row">
            <div class="col">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/LogoInicial_sem_satim.png" width="80" height="80" alt="Logo StarQuest">
                </a>
            </div>
            <div class="col" id="div_bem_vindo">
                <div class="navbar-brand float-left"  href="#">
                    <p id="bem_vindo">Seja bem-vindo, <a href="<?php if ($_SESSION['usuario']['usuario'] == "admin"){echo"admin.php";}else{echo "pagina_usuario.php";}?>" id="usuario_bemvindo"> <?php echo "@" . $_SESSION['usuario']['usuario'];?></a>!</p>
                </div>
            </div>
        </div>
    </nav>

    <main role="main" class="container" id="niveis_jogo">
        <div class="col">
            <div class="row">
                <img src="assets/img/starquest_branco_vermelho.png"/>
            </div>
        </div>
    </main>

    <main role="main" class="container" id="botoes_pagina_inicial">
        <!-- LINHA DE CIMA DOS BUTTONS -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="wrapper">
                        <a href="starquest_jogo.php" class="button orange shield glossy" style="padding-left: 4.9em; padding-right: 4.9em;">PLAY</a> <br/>
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
                        <a href="instrucoes.php" class="button orange shield glossy">INSTRUÇÕES</a> <br/>
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