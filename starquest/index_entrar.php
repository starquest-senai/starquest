<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StarQuest - Entrar</title>

    <!-- bootstrap core css -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customização de estilo para esta página -->
    <link href="assets/css/index_entrar.css" rel="stylesheet">

</head>

<body class="text-center">

    <main role="main" class="container">
        <form class="form-signin" name="login" action="includes/index_login.php" method="post">
            <img src="assets/img/starquest_nave_sprite_100x100.png" class="img-fluid" alt="Responsive image">
            <?php
                if(isset($_GET["mensagem_login"]) && isset($_GET["status_login"])){
            ?>

                <div id="msg_erro" class="alert alert-<?php echo $_GET["status_login"]; ?>" role="alert">
                    <?php   echo $_GET["mensagem_login"];  ?>
                </div>

            <?php
                }
            ?>
            <h1 class="h3 mb-3 font-weight-normal">Informe seus dados para acessar sua conta</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="seu@email.com" required autofocus oninput="campo_preenchido()">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
            <div class="checkbox mb-3" id="confirmar">
                <label>
                    <a href="#modal_recuperar_senha" data-toggle="modal">Esqueci a senha</a>
                </label>
            </div>
            <hr>
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="enviar_recuperar_senha">Entrar</button>
            <button class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location.href='index.php'" id="enviar_recuperar_senha">Cancelar</button>
        </form>
    </main><!-- /.container -->

    <!-- MODAL RECUPERAR SENHA -->
    <div class="modal fade" id="modal_recuperar_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: #000000">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Digite seu e-mail cadastrado para recuperar sua senha de acesso.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">E-mail:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="margin-left: auto; margin-right: auto">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="enviar_recuperar_senha" onclick="window.location.href='index_recuperar_confirmacao.php'">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
