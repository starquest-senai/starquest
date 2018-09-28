<?php
include_once("includes/banco_de_dados.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>STARQUEST - Página de login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
    <script src="assets/js/index_cadastro.js"></script>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >


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
            <a href="logotipos.php"><img class="logotipo" src="img/PermanentMarker-BevelEmboss-Stroke-InnerShadow-OuterGlow-WhiteRed-2.png"/></a>

                <form id="login" action="includes/index_login.php" method="POST">
                    <div id="msg_erro_base">
                        <?php
                        if(isset($_GET["mensagem_login"]) && isset($_GET["status_login"])){
                            ?>

                            <div id="msg_erro_login" class="alert alert-<?php echo $_GET["status_login"]; ?>" role="alert">
                                <?php   echo $_GET["mensagem_login"];  ?>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                    <div class="email">
                        <label>Email</label><br>
                        <input class="txt_login" type="text" name="email" placeholder="E-mail" autofocus/> <br/>
                        <a id="linkar" href="index_recuperar_senha.php" class="esqueceu_senha"><p>Esqueceu a senha?</p></a>
                    </div>

                    <div class="senha">
                        <label>Senha</label><br>
                        <input class="txt_login" type="password" name="senha" placeholder="Senha"/>
                        <input class="btn_logar" type="submit" value="Entrar">
                    </div>
                </form>
        </div>
    </header>

    <section id="corpo">
        <div id="apresentacao">
            <img class="nave" src="img/starquest_nave_sprite_100x100.png"/>
            <iframe src="index_apresentacao_inicial.php" name="janela" id="texto_apresentacao"></iframe>
        </div>

        <div id="cadastro">
            <h1 id="titulo_criarConta">Criar uma nova conta</h1>

            <?php
            if(isset($_GET["mensagem"]) && isset($_GET["status"])){
            ?>

                <div id="msg_erro" class="alert alert-<?php echo $_GET["status"]; ?>" role="alert">
                    <?php   echo $_GET["mensagem"];  ?>
                </div>

            <?php
            }
            ?>

            <form id="cadastro_formulario" action="includes/index_cadastro.php" method="POST" onsubmit="return valida_checkbox()">
                <input class="dados" id="nome" name="nome" type="text" required placeholder="Nome completo"/>
                <input class="dados" id="email" name="email" type="email" required placeholder="E-mail"/>
                <input class="dados" id="usuario" name="usuario" type="text" required placeholder="Nome de usuário"/>
                <input class="dados" id="senha" name="senha" title="Senha" type="password" required placeholder="Senha"/>
                <input class="dados" id="repeteSenha" name="repeteSenha" title="Repita a senha" type="password" oninput="valida_senha(this)" required placeholder="Digite novamente a senha"/>
                <input class="data" id="data_nasc" name="data_nasc" type="Date" required/> <br/>

                <input type="checkbox" name="confirmo_leitura" id="confirmar" value="checked"> <a href="index_termosDeUso.php" style="color: #ffffff">Confirmo que li os termos de uso.</a><br><br>

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
    <script src="assets/js/bootstrap.min.js" ></script>
</body>
</html>