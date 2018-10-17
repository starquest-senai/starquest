<?php

    session_start();

    //Essa página é feita para validar as sessões nas páginas em que para acessar o usuario tem que estar logado.

    if (($_SESSION["id_sessao"] != session_id()) or empty($_SESSION)){
        unset($_SESSION); //tira os valores da variavel.
        session_destroy();
        //$msg = "É necessário fazer login";
        //$status = "danger";
        $location = "error404.html";

        $parametros = '?' . http_build_query(array('mensagem' => $msg, 'status' => $status));
        header("Location: $location" . $parametros);
    };

?>