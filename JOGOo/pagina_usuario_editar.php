<!doctype html>
<?php include "includes/validacao_sessao.php"; 

?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StarQuest - Cadastro</title>

    <!-- bootstrap core css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index_entrar.css" rel="stylesheet">
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link href="assets/css/index_cadastro.css" rel="stylesheet">

    <!-- Customização de estilo para esta página -->

</head>

 


<body>

    <form class="form-signin" action="pagina_usuario_editar2.php" method="post">
        <img src="assets/img/starquest_nave_sprite_100x100.png" class="img-fluid" alt="Responsive image">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome_completo" style="font-weight: bold">Nome Completo</label>
                <input type="text" id="nome_completo" name="nome" class="form-control" placeholder="" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4" style="font-weight: bold">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="" >
            </div>
            <div class="form-group col-md-6">
                <label for="usuario" style="font-weight: bold">Nome de usuário</label><br>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" name="nome_usuario" id="usuario" placeholder="" aria-label="Username" aria-describedby="basic-addon1" disabled >
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="data_nascimento" style="font-weight: bold">Data de nascimento</label><br>
                <input class="form-group col-md-6" id="data_nascimento" name="data_nasc" type="date" >
            </div>
            <div class="form-group col-md-6">
                <label for="senha" style="font-weight: bold">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="" >
            </div>
			
            <button class="btn btn-sm btn-primary btn-block" type="submit" onclick=>Salvar</button>
            <button class="btn btn-sm btn-primary btn-block" type="button" onclick="">Voltar</button>

        </div>
    </form>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>


<script>


function mostrarDados(){
	
  nome = "<?php print_r($_SESSION['usuario']["nome"]); ?>";
  nome_usuario = "<?php print_r($_SESSION['usuario']["usuario"]); ?>";
  senha = "<?php print_r($_SESSION['usuario']["senha"]); ?>";
  email = "<?php print_r($_SESSION['usuario']["email"]); ?>";
  data_nasc ="<?php print_r($_SESSION['usuario']["data_nascimento"]); ?>" ;
	
   document.getElementById("nome_completo").placeholder = nome;
   document.getElementById("inputEmail4").placeholder = email;
   document.getElementById("usuario").placeholder = nome_usuario;
   document.getElementById("data_nascimento").placeholder = data_nasc;
   document.getElementById("senha").placeholder = senha;
  
}

mostrarDados();

</script>

</html>