<?php

function php_insert($pQuery){

    $conexao = mysqli_connect("localhost","root","root","db_starquest");
    $dados = mysqli_query($conexao,$pQuery) or die ("ERRO de concexão do insert");

    mysqli_close($conexao);

    return $dados;
}

function select($pQuery){
    //                          servidor/usuário/senha/nome do banco
    $conexao = mysqli_connect("localhost","root","root","db_starquest");
    $dados = mysqli_query ($conexao,$pQuery)or die ("ERRO de conexão do select");
    $arraySelect = array();

    if ($dados -> num_rows > 0){

        while ($row = $dados -> fetch_assoc()){
            $arraySelect[] = $row;
        }
		
    }
    else {
		
        return 0;
		
    }

    mysqli_close($conexao);

    return $arraySelect;

}

function php_update($pQuery){

    $conexao = mysqli_connect("localhost","root","root","db_starquest");
    $dados = mysqli_query($conexao,$pQuery) or die ("ERRO de conexão do update");
    $atualizadas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);

    if($atualizadas > 0){

        return $atualizadas." registro atualizado!";
		
    }
    else{
		
        return "ERRO ao atualizar";
		
    }
}

function php_delete($pQuery){

    $conexao = mysqli_connect("localhost","root","root","db_starquest");
    $dados = mysqli_query($conexao,$pQuery) or die ("ERRO de conexão do delete");
    $deletadas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);

    if($deletadas > 0){

        return $deletadas." registro atualizado!";
		
    }
    else{
		
        return "ERRO ao deletar";
		
    }
}