<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Página inicial</title>
    <link rel="stylesheet" type="text/css" href="assets/css/starter-template.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pontuacao.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/controles.css"/>

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
        <h1>CONTROLES</h1>
        <a href="pagina_inicial.php" class="button orange shield glossy" id="botao_voltar"> <label>MENU</label> </a>
        <main role="main" class="container" id="main_pontuacao">
            <div class="container-fluid" id="teclado">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/keyboard_wasd_300x200.png" id="wasd">
                    </div>
                    <div class="col">
                        <img src="assets/img/keyboard_flechas_300x200.png" id="wasd">
                    </div>
                </div>
                <p>Movimentar a nave</p>
            </div>

            <div class="container-fluid" id="botoes">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/keyboard_space_300x100.png" id="teclas">
                    </div>
                    <div class="col">
                        <img src="assets/img/keyboard_Pe.png" id="teclas">
                    </div>
                    <div class="col">
                        <img src="assets/img/keyboard_ENTER.png" id="enter">
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
                        <p id="enter_texto">Jogar</p>
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