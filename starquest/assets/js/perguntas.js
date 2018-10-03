<?php
include_once("includes/banco_de_dados.php"); 
$progresso = select ("SELECT * FROM progressos");

?>

//CONFIGURAÇÃO DAS PERGUNTAS E RESPOSTAS


var arrayPerguntas = new Array();


function Pergunta(pPergunta, pOpcaoA, pOpcaoB, pOpcaoC, pResposta){
        this.pergunta = pPergunta;
        this.opcaoA = pOpcaoA;
        this.opcaoB = pOpcaoB;
        this.opcaoC = pOpcaoC;
        this.resposta = pResposta;
}

function manda_pergunta(qual) {
    var num = qual;
    array1 = ["1. O que é um espaço na memória para para guardar dados?", "2. Algoritmo é uma sequência de passos:", "3. Como é chamada uma das formas de representar a lógica de programação?", "4. Das opções abaixo, qual seria um comando de saída?", "5. Qual variável pode armazenar vários dados do mesmo tipo?"];
    array2 = ["Variável", "Finitos", "Portugol", "escreva(''Starquest'');", "Vetor"];
	
    document.getElementById("questao").innerHTML = array1[num];
    document.getElementById("resposta_questao").innerHTML = array2[num];
	
	
    var objPergunta = new Pergunta("1. O que é um espaço na memória para para guardar dados?", "hahha","varivavel", "asa", "B");
    arrayPerguntas.push(objPergunta);


}

//CONFIGURAÇÃO BOTÃO PLAY: ocultar o botão assim que iniciar
function ocultar(){
    manda_pergunta(0);
    var btn = document.getElementById('submeter');
    btn.style.display = 'none'; // oculta a div

}

//JOSÉ - FAZ COM QUE O JOGO COMECE PAUSADO
function despausar(){
	
	game.paused = false;
	
};

function at_prog (pUsuario){
	
	
	contId = contId + 1;
	cont = cont + 1;
	
	
	if (fase = 1){
		
		xmlhttp.open("GET", "banco_de_fases.php?jogadores_usuario=" + pUsuario + "&fase=" + fase + "&pontuacao=" + pontos, true);
		xmlhttp.send();
		
	}
	
};


function nextFase (pUsuario) {
	
	fase =  1;
	var pontos = 0;

	
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.open("GET", "banco_de_fases.php?jogadores_usuario=" + pUsuario + "&fase=" + fase + "&pontuacao=" + pontos, true);
    xmlhttp.send();

}
