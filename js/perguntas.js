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
	
	
    pergunta = [];
    alternativa_A = [];
	alternativa_B = [];
	alternativa_C = [];
	alternativa_correta = "A";
	tema = [];
	

    document.getElementById("questao").innerHTML = pergunta[num];
    document.getElementById("alternativa_a").innerHTML = alternativa_A[num];
	document.getElementById("alternativa_b").innerHTML = alternativa_B[num];
	document.getElementById("alternativa_c").innerHTML = alternativa_C[num];


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
