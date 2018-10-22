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

    <title>StarQuest - Página de Usuário</title>

    <!-- bootstrap core css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index_entrar.css" rel="stylesheet">
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link href="assets/css/index_cadastro.css" rel="stylesheet">
    <link href="assets/css/pagina_usuario.css" rel="stylesheet">

    <!-- Customiza��o de estilo para esta p�gina -->

</head>

 


<body>

    <form class="form-signin" action="includes/pagina_usuario_editar2.php" method="post">
        <img src="assets/img/starquest_nave_sprite_100x100.png" class="img-fluid" alt="Responsive image">
        <h3 style="text-align: center; font-weight: bold">EDITE SUAS INFORMAÇÕES</h3>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome_completo" style="font-weight: bold; color: #ed0e00;">Nome Completo</label>
                <input type="text" id="nome_completo" name="nome" class="form-control" placeholder="" value="<?php echo $_SESSION['usuario']["nome"]; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4" style="font-weight: bold; color: #ed0e00;">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="" value="<?php echo $_SESSION['usuario']["email"]; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="usuario" style="font-weight: bold; color: #bbbabc;">Nome de usuário</label><br>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" name="nome_usuario" id="usuario" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $_SESSION['usuario']["usuario"]; ?>" disabled >
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="data_nascimento" style="font-weight: bold; color: #ed0e00;">Data de nascimento</label><br>
                <input class="form-group col-md-6" id="data_nascimento" name="data_nasc" type="date" value="<?php echo $_SESSION['usuario']["data_nascimento"]; ?>" >
            </div>
            <div class="form-group col-md-6">
                <label for="senha" style="font-weight: bold; color: #ed0e00;">Senha</label>
                <button type="button" class="btn btn-info" id="btn_nova_senha" onclick="location.href='pagina_usuario_senha.php'">Editar senha</button>
            </div>

            <div class="row marco">
                <div class="form-group col-md-6">
                    <button class="btn btn-sm btn-secondary btn-block" type="button" onclick="location.href='pagina_usuario.php';">Voltar</button>
                </div>
                <div class="form-group col-md-6">
                    <button class="btn btn-sm btn-primary btn-block" style="background-color: #15C50B" type="submit">Salvar</button>
                </div>
            </div>

        </div>
    </form>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>