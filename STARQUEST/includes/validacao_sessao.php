<?php
/**
 * Created by PhpStorm.
 * User: marcomauricio
 * Date: 09/09/2018
 * Time: 10:24
 */

    session_start();

    //Essa página é feita para validar as sessões nas páginas em que para acessar o usuario tem que estár logado.

    if (($_SESSION["id_sessao"] != session_id()) or empty($_SESSION)){
        unset($_SESSION); //tira os valores da variavel.
        session_destroy();
        $msg = "É necessário fazer login";
        $status = "danger";
        $location = "index.php";

        $parametros = '?' . http_build_query(array('mensagem' => $msg, 'status' => $status));
        header("Location: $location" . $parametros);
    };

?>