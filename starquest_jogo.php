<?php 

include_once("includes/validacao_sessao.php");

?>

<html lang="pt-br">
<head> 
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="assets/img/nave.ico" type="image/x-icon"/>
    <title>STARQUEST</title>

    <link rel="stylesheet" type="text/css" href="assets/css/perguntas.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/jogo.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
    <script src="assets/js/phaser.min.js"></script>	
	<script src="assets/js/state_game_over.js"></script>	
	<script src="assets/js/state_tela_final.js"></script>	
 
    <style type="text/css">
	
        body {
            margin: 15px ;		
        }
		canvas {
			max-width: 100%;
			margin-left: 20%;			
			border: 4px solid #ffffff;
			border-radius: 20px;
		}
		
    </style>
	
</head>
<body>

	<div id = "perguntas">			
	</div>		
	
	<div id = "btnFace">
	
		<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fsenaichallenge.tk%2Fstarquest
		&layout=button_count&size=large&mobile_iframe=true&width=129&height=28&appId" 
		width="129" height="28"	style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" 
		allow="encrypted-media"></iframe>
		
	</div>

    <!-- PROGRAMAÇÃO DO JOGO -->
	
    <script type="text/javascript">
	var game = new Phaser.Game(850, 590, Phaser.CANVAS, 'phaser-example');	
	var scoreGlobal = 0;
	var faseGlobal = 1;
	var arrayPerguntas = new Array();
	var pergunta;
	var audio1 = new Audio();
	var audio2 = new Audio();
	var audio3 = new Audio();
	var audio4 = new Audio();	
		
	CarregarPerguntas();	
	
	function CarregarFase(){
		
		var nome = "<?php echo $_SESSION['usuario']["usuario"]; ?>";	
		var xhttp = new XMLHttpRequest();
		
		xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
		
				arrayProgresso = JSON.parse(this.responseText);		
				scoreGlobal = parseInt(arrayProgresso[0]["pontuacao"]);
				faseGlobal = parseInt(arrayProgresso[0]["fase"]);	
				faseGlobal ++;
				
				jogoStateObjeto.scoreText.setText('Pontos: ' + scoreGlobal);
				jogoStateObjeto.nivelText.setText('Fase: ' + faseGlobal);								
			
			}	
		};
		
		xhttp.open("GET", "grava_fase.php?jogadores_usuario=" + nome, true);
		xhttp.send();
	
	}		
	
	function CarregarPerguntas (){
		
		var xhttp = new XMLHttpRequest();
		
		xhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200){
				
				arrayPerguntas = JSON.parse(this.responseText);
				pergunta = arrayPerguntas[Math.floor(Math.random()*arrayPerguntas.length)];
				
				var html = '<h1><br>' + pergunta.perguntas + '</h1>';
					html += '<div><br>';
					html += '<div id="alternativas" class="row">';
					html += '<div id="respostas" class="col-12">';
					html += 'A)' + pergunta.alternativa_a;
					html += '</div>';
					html += '</div><br><br>';
					html += '<div id="alternativas" class="row">';
					html += '<div id="respostas" class="col-12">';
					html += 'B)' + pergunta.alternativa_b;
					html += '</div>';
					html += '</div><br><br>';
					html += '<div id="alternativas" class="row">';
					html += '<div id="respostas" class="col-12">';
					html += 'C)' + pergunta.alternativa_c;
					html += '</div>';
					html += '</div><br><br>';
					html += '</div>';
					
				document.getElementById("perguntas").innerHTML = html;
				
				}	
			};
			
			xhttp.open("GET", "manda_pergunta.php", true);
			xhttp.send();
	

	}	
	
	function TocarMusicaGame(){			
			
			audio4.src = "sons/game.mp3";
			audio4.play();
			
	}	
	
	function enviarPontuacao(){			
	
		nome = "<?php print_r($_SESSION['usuario']["usuario"]); ?>";	
		
			var xhttp = new XMLHttpRequest();			
				xhttp.open("GET", "banco_de_fases.php?jogadores_usuario=" + nome + "&fase=" + faseGlobal + "&pontuacao=" + scoreGlobal, true);
				xhttp.send();		
		
	}	
	
	// Inicio state jogo
    class jogoState extends Phaser.State{
		
		constructor() {
			super();
			this.group;
			this.ship;
			this.weapon;
			this.cursors;
			this.fireButton;
			this.pause;	
			this.explosions;			
			this.play;
			this.reiniciar;
			this.lives;
			this.lives_ship;	
			this.disabledWeapon = false;
			this.tempoText;
			this.myArray = ['A', 'B', 'C'];		
			this.scoreText = "";
			this.nivelText = "";
		
		}

		preload() {

			game.load.image('bullet', 'img/tiro.png');
			game.load.image('ship', 'img/nave.png');
			game.load.image('asteroidemedioA','img/AsteroideG_A_70x80.png');
			game.load.image('asteroidemedioB','img/AsteroideG_B_70x80.png');
			game.load.image('asteroidemedioC','img/AsteroideG_C_70x80.png');
			game.load.image('play','img/play-icon_342x342.png');
			game.load.image('botao_reiniciar','img/botao_reiniciar.png');	
			game.load.spritesheet('kaboom', 'img/explode.png', 128, 128);			
	
		}
	
		create() {
	
	   		// Jogo inicia pausado			
			game.paused = true;			
			game.physics.startSystem(Phaser.Physics.ARCADE);

			// Cria asteroides			
			this.group = game.add.physicsGroup(Phaser.Physics.ARCADE);		
			this.criarGrupo(6);			
			game.physics.arcade.enable(this.group);
			

			// Cria nave
			this.ship = this.add.sprite(400, 300, 'ship');
			this.ship.anchor.set(0.5);
			this.game.physics.arcade.enable(this.ship);
			this.ship.body.collideWorldBounds = false;
			this.ship.body.drag.set(70);
			this.ship.body.maxVelocity.set(150);

			//  Cria balas
			this.weapon = game.add.weapon(10,'bullet');

			//  Determina o tipo de bala        
			this.weapon._bulletKillType = Phaser.Weapon.KILL_WORLD_BOUNDS;

			//  Determina a velocidade da bala
			this.weapon.bulletSpeed = 300;

			//  Determina a frequencia de tiros
			this.weapon.fireRate = 100;

			//  Determina que a nave ira disparar as balas
			this.weapon.trackSprite(this.ship, 0, 0, true);

			//  Textos
			this.scoreText = this.add.text(10,550, 'Pontos: ' + scoreGlobal, { font: 'Comic Sans MS', fontSize: '30px', fill: '#FFF' });
			this.nivelText = this.add.text(10,500, 'Fase: ' + faseGlobal, { font: 'Comic Sans MS', fontSize: '30px', fill: '#FFF' });
			this.tempoText = this.add.text(10,10, 'Tempo restante:' + counter , { font: 'Comic Sans MS', fontSize: '30px', fill: '#FFF' });					
				
			//  Vidas				
			this.lives = game.add.group();
			game.add.text(game.world.width - 100, 10, 'Vidas: ', { font: 'Comic Sans MS', fontSize: '30px', fill: '#fff' });			
	
			for (var i = 0; i < 5; i++) 
				
				{
					this.lives_ship = this.lives.create(game.world.width - 210 + (46 * i), 70, 'ship');
					this.lives_ship.anchor.setTo(0.5, 0.5);
					this.lives_ship.angle = 90;
					this.alpha = 0.4;
				}
		
			// Cursor e botão de tiro
			this.cursors = this.input.keyboard.createCursorKeys();
			this.fireButton = this.input.keyboard.addKey(Phaser.KeyCode.SPACEBAR);
			
			// Botão de pause
			this.pause = game.input.keyboard.addKey(Phaser.Keyboard.P);
			this.pause.onDown.add(pausarJogo, this);
			
			// Botão play
			this.play = game.input.keyboard.addKey(Phaser.Keyboard.ENTER);
			this.play.onDown.add(playJogo,this);				

			// Botão reiniciar
			this.reiniciar = game.input.keyboard.addKey(Phaser.Keyboard.R);
			this.reiniciar.onDown.add(reiniciar,this);		
			
			// Criar explosão
			this.explosions = game.add.group();
			this.explosions.createMultiple(30, 'kaboom');
			this.explosions.forEach(setupExplosao, this);
			
			CarregarFase();	
		
		}
		
		criarGrupo(qtd){

			if(this.game != undefined){
				
				for (var i = 0; i < qtd; i++)
				{
					var c;
					var rand = this.myArray[Math.floor(Math.random() * this.myArray.length)];

						c = this.group.create(this.game.world.randomX-450, this.game.world.randomY-450, 'asteroidemedio'+rand);
						c.data.nome = rand;

					c.name = 'ast' + i;
					c.body.bounce.set(1);
					c.body.collideWorldBounds = false;				
					c.body.velocity.setTo(70,70);
				}
				
			}
			
		}			
		
		// Criar sons 
		TocarMusicaTiro(){			
			
			audio1.src = "sons/tiro.WAV";
			audio1.play();
			
		}
		
		TocarMusicaGameOver(){			
			
			audio2.src = "sons/game_over.mp3";
			audio2.play();
			
		}
		
		PausarMusicaGame(){
			
			audio4.pause();
			
		}		
		
		// Criar grupo Asteroides
		colidiu(shipP, asteroideP){		
			
			var live = this.lives.getFirstAlive();

			if (live)
			{
				live.kill();
				asteroideP.kill();
				if (this.lives.countLiving() > 0)
					setTimeout(function(){ jogoStateObjeto.criarGrupo(1); }, 3000);
			}	
	
			// Quando o jogador morre
			if (this.lives.countLiving() < 1)
			{
				shipP.exists = false;	
				pause();			
				game.state.start('GameOver');						
				this.TocarMusicaGameOver();
				this.PausarMusicaGame();
			}
		}		

		destruiu(bulletsP,asteroideP){
			bulletsP.kill();
			asteroideP.kill();
			 
			// Executar explosão 
			var explosion = this.explosions.getFirstExists(false);
			explosion.reset(asteroideP.body.x, asteroideP.body.y);
			explosion.play('kaboom', 30, false, true);

			if(pergunta.alternativa_correta == asteroideP.data.nome)		
  
				scoreGlobal += 10;
				
			else if(scoreGlobal >= 5)			
    
				scoreGlobal -= 5;
				
			else
				
				scoreGlobal = 0;
			
			this.scoreText.setText('Pontos: ' + scoreGlobal);					
			setTimeout(function(){ jogoStateObjeto.criarGrupo(1); }, 3000);					
			
		}
		
		update() {

			game.physics.arcade.collide(this.ship, this.group, this.colidiu, null, this);
			
			game.physics.arcade.overlap(this.weapon.bullets, this.group, this.destruiu, null, this);

			if (this.cursors.up.isDown)
			{
				game.physics.arcade.accelerationFromRotation(this.ship.rotation, 300, this.ship.body.acceleration);
			}
			else
			{
				this.ship.body.acceleration.set(0);
			}

			if (this.cursors.left.isDown)
			{
				this.ship.body.angularVelocity = -500;

			}
			else if (this.cursors.right.isDown)
			{
				this.ship.body.angularVelocity = 500;
			}
			else
			{
				this.ship.body.angularVelocity = 0;
			}

			if (this.fireButton.isDown && !this.disabledWeapon)
			{
				this.weapon.fire();
				this.TocarMusicaTiro();
			}

			this.nivelText.setText;			
			game.world.wrap(this.ship, 16);	
			
			for(var i = 0; i < this.group.length; i++){
			
				game.world.wrap(this.group.children[i], 60);
				
			}  
			
		}	
		
		render(){
			this.tempoText.setText("Tempo: " + counter +  " s");       
		}	 

	};		
	// Fim state jogo
	
	var jogoStateObjeto = new jogoState();	
	
	game.state.add('TelaFinal',finalState);
	game.state.add('GameOver',gameoverState);
	game.state.add('jogo',jogoStateObjeto);	
	game.state.start('jogo');

	function setupExplosao(explode) {

    explode.anchor.x = 0.5;
    explode.anchor.y = 0.5;
    explode.animations.add('kaboom');

	}
	function pausarJogo() { 
	
		var play = document.getElementById('playjogo');
			play.style.display = 'none'; // oculta a div

		var pause = document.getElementById('pausajogo')
			pause.style.display = 'block'; // mostra a div	
		
		var reiniciarGame = document.getElementById('reiniciarjogo')
			reiniciarGame.style.display = 'block'; // mostra a div
		
		game.paused = true;	 
		PausarMusicaGame();
		
	}		
	
	function playJogo() {	
	
		var play = document.getElementById('playjogo');
			play.style.display = 'none'; // oculta a div
		
		var pause = document.getElementById('pausajogo')
			pause.style.display = 'none'; // oculta a div	

		var reiniciarGame = document.getElementById('reiniciarjogo')
			reiniciarGame.style.display = 'none'; // oculta a div		
		
		game.paused = false;
		TocarMusicaGame();
		myTimer();	
		
	}	
	
	function pause(){	
	
		clearTimeout(timer);
		
	}
	
	function TocarMusicaTelaFinal(){			
			
			audio3.src = "sons/tela_final.mp3";
			audio3.play();
			
	}	

	function PausarMusicaGame(){
			
			audio4.pause();
			
	}	
	
	function reiniciar(){
		
		counter = 15;
		scoreGlobal = 0;		
		game.state.start('jogo');
		game.paused = false;
		CarregarPerguntas();
		
		var play = document.getElementById('playjogo');
			play.style.display = 'block'; // mostra a div
			
		var pause = document.getElementById('pausajogo')
			pause.style.display = 'none'; // oculta a div		
			
		var reiniciarGame = document.getElementById('reiniciarjogo')
			reiniciarGame.style.display = 'none'; // oculta a div	
			
	}
	
	//contador de tempo restante
		var counter = 15;
		var timer;
		
	function myTimer() {
	
		timer = setTimeout( function() {
		
		if(game.paused == false){
			counter--;
			if( counter > 0 ) {
				
				myTimer();
				
			}
			else if(counter == 0)
			{				
		
				game.state.start('TelaFinal');					
				enviarPontuacao();	
				TocarMusicaTelaFinal();		
				PausarMusicaGame();
				
			}		
		}			
			
		}, 1000 );			
	}	

    </script>	
	
		<div id = "reiniciarjogo">
			<img id = "reiniciarjogo" src = "img/botao_reiniciar.png" onclick = "reiniciar(),myTimer()">
		</div>

		<div id = "btnVoltar">        
			<a href = "pagina_inicial.php" class = "button orange shield glossy" id = "botao_voltar_menu"  accesskey="v"> <label> MENU </label> </a>
		</div>
		
		<div id = "pausajogo">
			<img id = "pausajogo" src = "img/pause-icon_512x512.png" onclick = "pausarJogo(),pause()">
		</div>
		
		<div id = "playjogo">		
			<img id = "playjogo" src = "img/play-icon_342x342.png" onclick = "playJogo()">			
		</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>
	
</body>
</html>