<?php
    include "includes/validacao_sessao.php";
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/nave.ico" type="image/x-icon"/>

    <title>StarQuest - Instruções</title>

    <!-- bootstrap core css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index_entrar.css" rel="stylesheet">
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link href="assets/css/index_cadastro.css" rel="stylesheet">
    <link href="assets/css/pagina_inicial.css" rel="stylesheet">
    <link href="assets/css/pontuacao.css" rel="stylesheet">

    <!-- Customização de estilo para esta página -->
    <link href="assets/css/instrucoes.css" rel="stylesheet">

</head>

<body>
    <section id="corpo">
        <h1>INSTRUÇÕES</h1>
        <div class="row">
            <div class="col-sm-2" id="botoes_voltar_controles">
                <div class="col" >
                    <div class="row">
                        <a href="pagina_inicial.php" class="button orange shield glossy" id="botao_voltar"> <label>MENU</label> </a>
                    </div>
                    <div class="row">
                        <a href="controles.php" class="button orange shield glossy" id="botao_controles"> <label>CONTROLES</label> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-10" id="main_pontuacao">
                <main role="main" class="container" >
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading" style="text-align: left">Objetivo</h4>
                        <p class="text-justify" style="text-indent: 1em">Teste seu conhecimento respondendo o máximo de perguntas que puder para fazer o máximo de pontos possível.</p>
                        <h4 class="alert-heading" style="text-align: left">Como jogar</h4>
                        <p class="text-justify" style="text-indent: 1em">No canto esquerdo estará um quadro onde irá aparecendo uma pergunta de cada vez com três opções de resposta.</p>
                        <p class="text-justify" style="text-indent: 1em">Durante o jogo aparecerão asteroides e cada um terá uma letra das três opções de resposta. Com a nave espacial você deve atirar somente nos asteroides que contenham a letra da resposta correta para pontuar, caso contrário perderá pontos.</p>
                        <p class="text-justify" style="text-indent: 1em">Para visualizar os controles do jogo dê um <i>click</i> no botão <a href="controles.php"><img src="assets/img/botao_controles_80x28.png"></a> ao lado.</p>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>