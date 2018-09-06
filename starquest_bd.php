
<xmp>
<pre>

<?php

function select($pQuery){
    //                          servidor  usuário senha  nome do banco
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

//ver as perguntas

$mostrar = select("SELECT * FROM perguntas");
print_r($mostrar);


//jogando as perguntas e repostas dentro de variaveis

$fase = 1;

	$pergunta = select("SELECT id FROM perguntas WHERE id = {$fase}");
	
	print_r($pergunta);
   

?>
</pre>
</xmp>



