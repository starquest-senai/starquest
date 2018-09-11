<?php
include_once ("_includes/banco_de_dados.php");
?>

<?php
var_dump($_GET["mensagem"]);
var_dump($_GET["status"]);
if(isset($_GET["mensagem"]) && isset($_GET["status"])){
?>

    <div id="msg_erro" class="alert alert-<?php echo $_GET["status"]; ?>" role="alert">
        <?php   echo $_GET["mensagem"];  ?>
    </div>

<?php
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>STARQUEST - Página de login</title>
    <link rel="stylesheet" type="text/css" href="_css/index.css"/>
    <script src="js/index_cadastro.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script>
        function valida_checkbox() {
            var confirmar = document.getElementById("confirmar");
            if (confirmar.checked == true){
                return true;
            } else {
                alert("Deve confirmar se leu os termos de uso.");
                return false;
            }
        }

        function valida_senha (input){
            if (input.value != document.getElementById('senha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>

</head>
<body>

    <header id="cabecalho_inicial">
        <div id="logo">
            <a href="logotipos.html"><img class="logotipo" src="_img/PermanentMarker-BevelEmboss-Stroke-InnerShadow-OuterGlow-WhiteRed-2.png"/></a>

            <div id="login">
                <div class="email">
                    <p>Email</p> <input class="txt_login" type="text" placeholder="E-mail" autofocus/> <br/>
                    <a id="linkar" href="index_recuperar_senha.html" class="esqueceu_senha"><p>Esqueceu a senha?</p></a>
                </div>
                <div class="senha">
                    <p>Senha</p> <input class="txt_login" type="password" placeholder="Senha"/>
                    <a id="linkar" href="pagina_inicial.html"><button type="button" class="btn_logar">Entrar</button></a>
                </div>
            </div>
        </div>
    </header>

    <section id="corpo">
        <div id="apresentacao">
            <img class="nave" src="_img/starquest_nave_sprite_100x100.png"/>
            <iframe src="index_apresentacao_inicial.html" name="janela" id="texto_apresentacao"></iframe>
        </div>
        <div id="cadastro">
                <h1 id="titulo_criarConta">Criar uma nova conta</h1>

            <form id="cadastro_formulario" action="index_cadastro.php" method="POST" onsubmit="return valida_checkbox()">
                <input class="dados" id="nome" name="nome" type="text" required placeholder="Nome completo"/>
                <input class="dados" id="email" name="email" type="email" required placeholder="E-mail"/>
                <input class="dados" id="usuario" name="usuario" type="text" required placeholder="Nome de usuário"/>
                <input class="dados" id="senha" name="senha" title="Senha" type="password" required placeholder="Senha"/>
                <input class="dados" id="repeteSenha" name="repeteSenha" title="Repita a senha" type="password" oninput="valida_senha(this)" required placeholder="Digite novamente a senha"/>
                <input class="data" id="data_nasc" name="data_nasc" type="Date" required/> <br/>

                <input type="checkbox" name="confirmo_leitura" id="confirmar" value="checked"> <a href="index_termosDeUso.html" style="color: #ffffff">Confirmo que li os termos de uso.</a><br><br>

                <input id="botao_cadastro" type="submit" value="Cadastre-se">
            </form>
        </div>
    </section>

    <footer id="rodape">
        <p class="autoria">Copyright &copy; 2018 - StarQuest Ltda.</p>
        <p class="redes-sociais"><a id="linkar" href="https://www.facebook.com/marcomauricio1980" target="_blank"> Facebook</a> |
            <a id="linkar" href="https://twitter.com/_marcomauricio_" target="_blank"> Twitter</a></p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>