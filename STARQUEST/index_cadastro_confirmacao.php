<?php
    include_once("includes/banco_de_dados.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Confirmação de email</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/index_recuperar_senha.css"/>

    <script src="assets/js/index_cadastro.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <header id="cabecalho_inicial">
        <div id="logo">
            <a href="logotipos.php"><img class="logotipo" src="img/PermanentMarker-BevelEmboss-Stroke-InnerShadow-OuterGlow-WhiteRed-2.png"/></a>

            <form id="login" action="includes/index_login.php" method="POST">
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
        <div id="mensagem_de_erro">
            <?php
            if(isset($_GET["mensagem"]) && isset($_GET["status"])){
            ?>
                <div id="msg_erro" class="alert alert-<?php echo $_GET["status"]; ?>" role="alert">
                    <?php   echo $_GET["mensagem"];  ?>
                </div>
            <?php
            }
            ?>
        </div>

        <div id="confirma_cadastro">

            <div id="titulo_senha">
                <p>Confirme sua conta antes de fazer login</p>
            </div>
            <div id="digite_email">
                <p style="margin: 20px 18% 20px 18%; text-align: justify">Um e-mail de confirmação foi enviado para o endereço de e-mail que você forneceu. Confirme a sua conta clicando no link enviado e logo após faça login.</p>
            </div>
            <div id="div_div_btn_ok">
                <div class="div_btn_ok">
                    <button class="btn_recuperar_senha" type="button" style=""><a id="linkar" href="index.php" style="text-decoration: none">OK</a></button>
                </div>
            </div>
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