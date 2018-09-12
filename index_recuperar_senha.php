<?php

include "includes/validacao_sessao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Recuperar senha</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/index_recuperar_senha.css"/>
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
        <div id="recuperar_senha">
            <div id="titulo_senha">
                <p>Recupere sua conta</p>
            </div>
            <div id="digite_email">
                <p>Insira seu e-mail para recuperar sua conta. <br/>
                <input type="email" required placeholder="eu@exemplo.com" autofocus></p>
            </div>
            <div id="btn_aceitar_cancelar">
                <div class="botao_recuperar_senha">
                    <button class="btn_recuperar_senha" type="button" style=""><a id="linkar" href="index_confirmacao.php" style="text-decoration: none">Enviar</a></button>
                    <button class="btn_recuperar_senha" type="button" style="background: #6495ed"><a id="linkar" href="index.php" style="text-decoration: none">Cancelar</a></button>
                </div>
            </div>
        </div>
    </section>

    <footer id="rodape">
        <p class="autoria">Copyright &copy; 2018 - StarQuest Ltda.</p>
        <p class="redes-sociais"><a id="linkar" href="https://www.facebook.com/marcomauricio1980" target="_blank"> Facebook</a> |
            <a id="linkar" href="https://twitter.com/_marcomauricio_" target="_blank"> Twitter</a></p>
    </footer>

</body>
</html>