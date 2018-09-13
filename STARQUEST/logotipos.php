<?php
include "includes/validacao_sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>STARQUEST - Logotipos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
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
        <div class="container">
            <div class="col">
                <img class="logotipo" src="img/Jura-Bold-Drop5px.png"/>
                <img class="logotipo" src="img/Jura-Bold-Drop5px-Shadow.png"/>
                <img class="logotipo" src="img/Orbitron-Metalico-Branco.png"/>
                <img class="logotipo" src="img/PermanentMarker-BevelEmboss-OuterGlow.png"/>
                <img class="logotipo" src="img/PermanentMarker-BevelEmboss-Stroke-InnerShadow-OuterGlow-WhiteBlue-2.png"/>
                <img class="logotipo" src="img/PermanentMarker-BevelEmboss-Stroke-OuterGlow.png"/>
            </div>
            <div class="col">
                <img class="logotipo" src="img/Orbitron-Medium-Drop5px.png"/>
                <img class="logotipo" src="img/Orbitron-Metal-Red.png"/>
                <img class="logotipo" src="img/Orbitron-Metalico-Stroke-Branco.png"/>
                <img class="logotipo" src="img/PermanentMarker-BevelEmboss-Stroke-InnerShadow-OuterGlow-2.png"/>
                <img class="logotipo" src="img/PermanentMarker-BevelEmboss-Stroke-InnerShadow-OuterGlow-WhiteRed-2.png"/>
                <img class="logotipo" src="img/PermanentMarker-BevelEmboss-Stroke-OuterGlow-2.png"/>
            </div>
            <div class="col">
                <img src="img/LogoInicial_com_satin_e_transparency300x263.png"/>
                <img src="img/LogoInicial_com_satin_300x263.png"/>
                <img src="img/LogoInicial_sem_satin_300x263.png"/>
                <img src="img/LogoInicial_sem_satim_outerglow.png"/>
                <img src="img/LogoInicial_sem_satim.png"/>
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