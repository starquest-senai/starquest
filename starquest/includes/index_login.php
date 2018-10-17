<?php
    include_once ("banco_de_dados.php");
    $email_login = $_POST['email'];
    $senha_login = $_POST['senha'];
    $msg_login = "";
    $status_login = "danger";
    $link_login = "../index_entrar.php";

    if($email_login == ''){
        $msg_login = "Informe seu e-mail cadastrado.";
    }else if($senha_login == ''){
        $msg_login = "Informe sua senha cadastrada.";
    }else{
        include "conexao.php";
        header('Content-Type: text/html; charset=utf-8');

        //Verifica no BD se existe nome cadastrado
        $verifica_email_bd = mysqli_query($conexao,"SELECT * FROM jogadores WHERE email = '{$email_login}' AND senha = '{$senha_login}'") or die("ERRO no cadastro verifica_email_bd");

        if(mysqli_num_rows($verifica_email_bd)>0){
            $dados = mysqli_fetch_array($verifica_email_bd);

            //Dar "unset" para que a senha não seja visualizada.
            unset($dados["senha"]);
            unset($dados[3]);

            session_start(); //Apartir de aqui a variável $_SESSION está abilitada, não antes.
            $_SESSION['email'] = $email_login; //nunca armazenar a senha por segurança.
            $_SESSION['id_sessao'] = session_id(); //é o que vai fazer de você único no servidor. Sempre criar.
            $_SESSION['usuario'] = $dados;


            //TESTAR A SESSÃO
            //var_dump($dados);
            //var_dump($_SESSION);
            //die();

            $link_login = "../pagina_inicial.php";

            //DIRECIONAMENTO PARA PÁGINA INICIAL
            //$parametros = '?' . http_build_query(array('mensagem' => $msg, 'status' => $status));
            header("Location: $link_login");
        }else{
            $msg_login = "Usuário ou senha incorretos.";

            //DIRECIONAMENTO PARA PÁGINA DE LOGIN
            $parametros_login = '?' . http_build_query(array('mensagem_login' => $msg_login, 'status_login' => $status_login));
            header("Location: $link_login" . $parametros_login);
        }

    }


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
