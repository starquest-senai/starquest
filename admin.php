<?php
//include "includes/validacao_sessao.php";
include "includes/admin_select_usuario.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/nave.ico" type="image/x-icon"/>

    <title>StarQuest - ADMINISTRADOR</title>

    <!-- bootstrap core css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index_entrar.css" rel="stylesheet">
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link href="assets/css/index_cadastro.css" rel="stylesheet">

    <!-- Customização de estilo para esta página -->
    <link href="assets/css/admin.css" rel="stylesheet">

    <script>
        function buscaUsuario(pUsuario) {
            if (pUsuario.length == 0) {
                document.getElementById("nome").innerHTML = "";
                return;
            } else {

                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("nome").innerHTML = this.responseText;
                        buscaLogs(pUsuario);
                        buscaProgressos(pUsuario);
                    }
                };
                xmlhttp.open("GET", "includes/admin_busca_usuario.php?usuario=" + pUsuario, true);
                xmlhttp.send();

            }
        }

        function buscaLogs(pLogs) {
            if (pLogs.length == 0) {
                document.getElementById("nome").innerHTML = "";
                return;
            } else {

                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("logs").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "includes/admin_busca_logs.php?usuario=" + pLogs, true);
                xmlhttp.send();

            }
        }

        function buscaProgressos(pProgressos) {
            if (pProgressos.length == 0) {
                document.getElementById("progressos").innerHTML = "";
                return;
            } else {

                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("progressos").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "includes/admin_busca_progressos.php?usuario=" + pProgressos, true);
                xmlhttp.send();

            }
        }
    </script>

</head>
<body>

    <form class="form-signin" action="" method="">
        <div class="row">
            <div class="col-1 logo">
                <img src="assets/img/starquest_nave_sprite_100x100.png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-4 titulo">
                <h3 style="text-align: center; font-weight: bold">ADMINISTRADOR</h3>
            </div>
        </div>
        <div class="row dados" style="border: 1px solid black">
            <div id="coluna_usuarios" class="col-sm-3" style="border: 1px solid black">

                <table class="table" id="table_cabecalho">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome de usuário</th>
                    </tr>
                    </thead>
                </table>

                <table class="table">
                    <tbody>
                        <?php
                        $i = 1;
                        while ($fetch = mysqli_fetch_row($usuarios)){
                        ?>
                        <?php
                            foreach ($fetch as $value){
                        ?>
                                <tr id="tr_usuario">
                                <th scope="col" id="th_num_usuario"><?php echo $i++?></th>
                                <td id="td_num_usuario"><input type="button" id="input_usuario" value="<?php echo $value ?>" onclick="buscaUsuario(this.value)"></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-9" style="border: 1px solid black">
                <div class="row">
                    <div class="col" style="width: 100%; max-width: 500px; padding: 0px; margin: 5px 5px 0px 5px;">
                        <div class="form-group col dadosUsuario" style="padding: 0px">
                            <label id="nome" style="width: 100%; max-width: 500px; margin-bottom: 0px"></label>
                        </div>
                    </div>
                    <div class="col" style="width: 100%; max-width: 500px; padding: 0px; overflow: auto; margin: 5px">
                        <div class="form-group col logsUsuario" style="width: 100%; max-width: 500px; margin: 0px; padding: 0px">
                            <label id="logs" style="width: 100%; max-width: 500px; margin: 0px"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="width: 100%; max-width: 425px; padding: 0px; margin: 5px;">
                        <div class="form-group col dadosUsuario" style="padding: 0px">
                            <label id="progressos" style="width: 100%; max-width: 500px; margin-bottom: 0px"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 1%">
            <div class="col"></div>
            <div class="col"><a href="pagina_inicial.php" id="botao_admin_link"><button class="btn btn-sm btn-primary btn-block" type="button" id="botao_admin">Ir para o Jogo</button></a></div>
            <div class="col"><a href="includes/logout.php" id="botao_admin_link"><button class="btn btn-sm btn-primary btn-block" type="button" id="botao_admin">Sair</button></a></div>
            <div class="col"></div>
        </div>
    </form>


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>