<?php
    include_once("_includes/banco_de_dados.php");

    //Mensagem de erro
    $msg = "";
    $status = "danger";
    $location = "index.php";

    /*
    //Testar o que está sendo recebido
    var_dump($_REQUEST);
    date("Y-m-d");
    echo $data_registro = date("Y-m-d");
    */

    if (isset($_POST["nome"])){
        //Recebe dados cadastrados
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["repeteSenha"];
        $data_nasc = $_POST["data_nasc"];

        //Pegar data do registro
        date_default_timezone_set('America/Sao_Paulo');
        date("Y-m-d");
        $data_registro = date("Y-m-d");

        //Conecta com a base de dados
        $conexao = mysqli_connect("localhost","root","","db_starquest");

        //Verifica no BD se existe nome cadastrado
        $verifica_usuario_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE usuario = '{$usuario}'") or die("ERRO no cadastro verifica_nome_bd");
        $verifica_email_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE email = '{$email}'") or die("ERRO no cadastro verifica_email_bd");

        //Se o resultado for maior que 0, já existe usuário cadastrado
        if (mysqli_num_rows($verifica_usuario_bd) > 0){
            $msg = "O usuário: já existe no cadastro";

        } elseif (mysqli_num_rows($verifica_email_bd) > 0) {
            $msg = "O email: " . $email . " já existe no cadastro.";

        } else {
            echo php_insert("INSERT into jogadores(usuario, nome, email, senha, data_nascimento, data_registro) VALUES('{$usuario}','{$nome}', '{$email}','{$senha}','{$data_nasc}','{$data_registro}')");
            $msg = "Cadastrado com sucesso! Agora efetue o login acima";
            $status = "success";

        }
    }
    var_dump($location) . "<br>";
    var_dump($msg) . "<br>";
    var_dump($status) . "<br>";
    header("Location: $location?mensagem=" . $msg . "& status=" . $status);
?>