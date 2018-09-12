<?php
    $email_login = $_POST['email'];
    $senha_login = $_POST['senha'];
    $msg_login = "";
    $status_login = "danger";
    $link_login = "../index.php";

    if($email_login == ""){
        $msg_login = "Informe seu e-mail cadastrado.";
    }else if($senha_login == ""){
        $msg_login = "Informe sua senha cadastrada.";
    }else{
        include "conexao.php";

        //Verifica no BD se existe nome cadastrado
        $verifica_email_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE email = '{$email_login}'") or die("ERRO no cadastro verifica_email_bd");
        $verifica_senha_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE senha = '{$senha_login}'") or die("ERRO no cadastro verifica_senha_bd");

        if((mysqli_num_rows($verifica_email_bd)>0) and (mysqli_num_rows($verifica_senha_bd)>0)){
            session_start(); //Apartir de aqui a variável $_SESSION está abilitada, não antes.
            $_SESSION['email'] = $email_login; //nunca armazenar a senha por segurança.
            $_SESSION['id_sessao'] = session_id(); //é o que vai fazer de você único no servidor. Sempre criar.

            //TESTAR A SESSÃO
            //var_dump($_SESSION);
            //die();

            $link_login = "../pagina_inicial.php";
        }else{
            $msg_login = "Usuário ou senha incorretos.";
            $status_login = "danger";
            $link_login = "../index.php";
        }

    }


    $parametros = '?' . http_build_query(array('mensagem_login' => $msg_login, 'status_login' => $status_login));
    header("Location: $link_login" . $parametros);

    //header do professor
    //header("Location: $link?mensagem=".$msg."&status=".$status);


    /*
    testes:
      var_dump($array);
      print_r($array);
    */
    /*
      Não está completo o processo de autenticação. Falta utilizar as sessões e fazer as
      devidas validações.
    */

?>
