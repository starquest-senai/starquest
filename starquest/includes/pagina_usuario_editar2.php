<?php
    include("conexao.php");
    include("banco_de_dados.php");
    include ("validacao_sessao.php");


if (isset($_POST["nome"])){

    include("conexao.php");

    //Recebe dados cadastrados
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    //$usuario = $_POST["nome_usuario"];
    //$senha = $_POST["senha"];
    $data_nasc = $_POST["data_nasc"];
    $usuario_sessao = $_SESSION['usuario']["usuario"];

    //Pegar data do registro
    date_default_timezone_set('America/Sao_Paulo');
    date("Y-m-d");
    $data_registro = date("Y-m-d");

    //Verifica no BD se existe nome cadastrado
   // $verifica_usuario_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE usuario = '{$usuario}'") or die("ERRO no cadastro verifica_nome_bd");
    $verifica_email_bd = mysqli_query($conexao, "SELECT * FROM jogadores WHERE email = '{$email}'") or die("ERRO no cadastro verifica_email_bd");

    //Se o resultado for maior que 0, já existe email e/ou usuario cadastrado
    if (mysqli_num_rows($verifica_email_bd) > 0){
        echo "UPDATE jogadores SET nome = '{$nome}', email = '{$email}', data_nascimento = '{$data_nasc}' WHERE usuario = '{$usuario_sessao}' ";
        php_update( "UPDATE jogadores SET nome = '{$nome}', email = '{$email}', data_nascimento = '{$data_nasc}' WHERE usuario = '{$usuario_sessao}' ");
        //$msg = "Sua conta foi criada com sucesso!";
        //$status = "success";
        $location = "../pagina_usuario.php";

        $_SESSION['usuario']["nome"] = $nome;
        //$_SESSION['usuario']["senha"] = $senha;
        $_SESSION['usuario']["data_nascimento"] = $data_nasc;
        $_SESSION['usuario']["email"] = $email;

    }
}

    //$parametros = '?' . http_build_query(array('mensagem' => $msg, 'status' => $status));
    header("Location: $location");
?>