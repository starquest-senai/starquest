<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StarQuest - Nova Senha</title>

    <!-- bootstrap core css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link href="assets/css/index_cadastro_confirmacao.css" rel="stylesheet">
    <link href="assets/css/index_nova_senha.css" rel="stylesheet">

    <!-- Customização de estilo para esta página -->
    <link href="assets/css/pagina_usuario_senha.css" rel="stylesheet">

    <script>
        function valida_senha (input){
            if (input.value != document.getElementById('senha').value) {
                input.setCustomValidity('As senhas não conferem, tente novamente.');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>

</head>

<body>

    <main role="main" class="container" id="container_nova_senha">

        <div class="alert alert-warning" role="alert">
            <img src="assets/img/starquest_nave_sprite_100x100.png" class="img-fluid" alt="Responsive image">
            <h3 style="text-align: center; font-weight: bold">EDITAR NOVA SENHA</h3>

            <form action="includes/pagina_usuario_senha.php" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Digite sua nova senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Confirme sua nova senha</label>
                    <input type="password" name="repete_senha" class="form-control" id="senha_confirma" placeholder="Repita a senha" oninput="valida_senha(this)" required>
                </div>

                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-lg btn-secondary btn-block" id="btn_cancelar" type="button" onclick="window.location.href='pagina_usuario.php'">
                                Cancelar
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-lg btn-primary btn-block" id="btn_entrar" type="submit">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </main><!-- /.container -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
