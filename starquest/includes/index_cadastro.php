<?php
    include_once("banco_de_dados.php");
    header('Content-Type: text/html; charset=utf-8');

/*
//Testar o que está sendo recebido
var_dump($_REQUEST);
date("Y-m-d");
echo $data_registro = date("Y-m-d");
*/

    if (isset($_POST["nome"])){

        include "conexao.php";

        //Mensagem de erro
        $msg = "";
        $status = "danger";
        $location = "../index.php";

        //Recebe dados cadastrados
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $repeteSenha = $_POST["repeteSenha"];
        $data_nasc = $_POST["data_nasc"];

        //Pegar data do registro
        date_default_timezone_set('America/Sao_Paulo');
        date("Y-m-d");
        $data_registro = date("Y-m-d");

        //Verifica no BD se existe nome cadastrado
        $verifica_usuario_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE usuario = '{$usuario}'") or die("ERRO no cadastro verifica_nome_bd");
        $verifica_email_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE email = '{$email}'") or die("ERRO no cadastro verifica_email_bd");

        //Se o resultado for maior que 0, já existe email e/ou usuario cadastrado
        if (mysqli_num_rows($verifica_email_bd) > 0){
            $msg = "O email " . $email . " já existe no cadastro.";
        } elseif (mysqli_num_rows($verifica_usuario_bd) > 0) {
            $msg = "O usuário " . $usuario . " já existe no cadastro";
        } else {
            echo php_insert("INSERT into jogadores(usuario, nome, email, senha, data_nascimento, data_registro) VALUES('{$usuario}','{$nome}', '{$email}','{$senha}','{$data_nasc}','{$data_registro}')");
            $msg = "Sua conta foi criada com sucesso!";
            $status = "success";
            $location = "../index_cadastro_confirmacao.php";
        }
    }

    $parametros = '?' . http_build_query(array('mensagem' => $msg, 'status' => $status));
    header("Location: $location" . $parametros);
?>