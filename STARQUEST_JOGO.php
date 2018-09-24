<?php
include_once("includes/banco_de_dados.php");

$array_perguntas = select ("SELECT * FROM perguntas ");
$key = array_rand($array_perguntas); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8" />
    <title>STARQUEST</title>

    <link rel="stylesheet" type="text/css" href="assets/css/perguntas.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/pagina_inicial.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="assets/js/phaser.min.js"></script>
 
    <style type="text/css">
        body {
            margin: 15px ;		
        }
		canvas {
			margin: auto auto;					
		}
    </style>
</head>
<body>
    <header id="cabecalho_jogo">
        <div id="logo">
            <p id="Bem-Vindo">Seja bem-vindo, _______________!</p>
        </div>
    </header>

		<div id="perguntas">
            <h1 id="questao"> <?php echo $array_perguntas[$key]["perguntas"] ?>  </h1>
			<div class="container">
			  <div id="alternativas" class="row">
				<div id="respostas" class="col-4">
				  A) <?php echo $array_perguntas[$key]["alternativa_a"] ?>
				</div>
				<div id="respostas" class="col-4">
				  B) <?php echo $array_perguntas[$key]["alternativa_b"] ?>
				</div>
				<div id="respostas" class="col-4">
				  C) <?php echo $array_perguntas[$key]["alternativa_c"] ?>
				</div>
			  </div>
			  </div>
        </div>

        <input type="image" name="submit" id="submeter" class="Submeter2" src="img/play_256x256.png" 
		alt="iniciar_jogo" onclick="ocultar(), despausar(),myTimer()"/>
		
		<div id="btnFace">
			<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fstarquest2018senai.000webhostapp.
		com%2Fcssref%2Fpr_background-image.asp&layout=button_count&size=small&mobile_iframe=
		true&appId=446617082491196&width=113&height=20" width="113" height="20" style="border:none;overflow:hidden" 
		scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
			</iframe>
		
			<div id="botao_compartilhar" class="bt_compartilhar" data-href="starquest2018senai.000webhostapp.com" data-layout="button_count"
			data-size="small" data-mobile-iframe="true"> 
			<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstarquest2018senai.000webhostapp.com%2F&src=sdkpreparse"> </a>		
			</div>
		</div>

    <!-- PROGRAMAÇÃO DO JOGO -->
	
    <script type="text/javascript">
	
    var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example');
	var gameOver = false;
	var scoreGlobal = 0;

	class gameoverState extends Phaser.State{
		
		constructor() {
				super();
				this.button;		
			}	
		
		create() {
			
			this.scoreText = this.add.text(80,520, 'SCORE: 0', { fontSize: '30px', fill: '#FFF' });
			this.scoreText.setText('SCORE: ' + scoreGlobal);			
			this.add.text(130,140, 'GAME OVER :(', { fontSize: '80px', fill: '#FFF' });			
			this.button = this.game.add.button(420,380, "botao_reiniciar" ,this.play,this);
			this.button.anchor.setTo(0.5,0.5);	
			
			// botão compartilhar
			var btnFacebook = document.getElementById('btnFace');
			btnFacebook.style.display = 'block'; // mostra a div
		}
		
		play(){	
			gameOver = true;
			counter = 30;
			retomarJogo();
			myTimer();
			this.game.state.start('jogo');	
			var btnFacebook = document.getElementById('btnFace');
			btnFacebook.style.display = 'none'; // oculta a div
		}	
		
	};		
	
	
	class finalState extends Phaser.State{
		
		constructor() {
				super();
				this.button;		
			}	
		
		create() {
			
			this.scoreText = this.add.text(80,520, 'SCORE: 0', { fontSize: '30px', fill: '#FFF' });
			this.scoreText.setText('SCORE: ' + scoreGlobal);			
			this.add.text(100,140, '!! PARABÉNS !!', { fontSize: '80px', fill: '#FFF' });			
			this.button = this.game.add.button(420,380, "play" ,this.play,this);
			this.button.anchor.setTo(0.5,0.5);	
			
			// botão compartilhar
			var btnFacebook = document.getElementById('btnFace');
			btnFacebook.style.display = 'block'; // mostra a div
		}
		
		play(){		
			gameOver = true;
			counter = 30;
			retomarJogo();
			myTimer();
			this.game.state.start('jogo');	
			var btnFacebook = document.getElementById('btnFace');
			btnFacebook.style.display = 'none'; // oculta a div
		}	
		
	};		
	

    class jogoState extends Phaser.State{
		
		constructor() {
			super();
			this.group;
			this.ship;
			this.weapon;
			this.cursors;
			this.fireButton;
			this.scoreText;
			this.nivelText;
			this.lives;
			this.lives_ship;		
			this.score = 0;
			this.disabledWeapon=false;
			this.tempoText;
			this.myArray = ['A', 'B', 'C'];			
		
		}

		preload() {

			game.load.image('bullet', 'img/tiro.png');
			game.load.image('ship', 'img/nave.png');
			game.load.image('asteroidemedioA','img/AsteroideG_A_70x80.png');
			game.load.image('asteroidemedioB','img/AsteroideG_B_70x80.png');
			game.load.image('asteroidemedioC','img/AsteroideG_C_70x80.png');
			game.load.image('play','img/play-icon_342x342.png');
			game.load.image('botao_reiniciar','img/botao_reiniciar.png');
		}
	
	   create() {	
	   
			//Jogo inicia pausado
			if(!gameOver){			
				game.paused = true;
			}				
			
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
			this.scoreText = this.add.text(10,550, 'SCORE: 0', { fontSize: '30px', fill: '#FFF' });
			this.nivelText = this.add.text(10,500, 'FASE 1', { fontSize: '30px', fill: '#FFF' });
			this.tempoText = this.add.text(10,10, 'Tempo restante:' + counter , { fontSize: '30px', fill: '#FFF' });			
			
			
			//  Vidas
			this.lives = game.add.group();
			game.add.text(game.world.width - 100, 10, 'Vidas: ', { fontSize: '30px', fill: '#fff' });
						
			for (var i = 0; i < 3; i++) 
				{
				    this.lives_ship = this.lives.create(game.world.width - 120 + (46 * i), 70, 'ship');
					this.lives_ship.anchor.setTo(0.5, 0.5);
					this.lives_ship.angle = 90;
					this.alpha = 0.4;
				}		
			
			//  Cursor e botão de tiro
			this.cursors = this.input.keyboard.createCursorKeys();
			this.fireButton = this.input.keyboard.addKey(Phaser.KeyCode.SPACEBAR);		
			
		}

	   criarGrupo(qtd){

			if(this.game != undefined){
				for (var i = 0; i < qtd; i++)
				{
					var c;
					var rand = this.myArray[Math.floor(Math.random() * this.myArray.length)];

						c = this.group.create(this.game.world.randomX-400, this.game.world.randomY-300, 'asteroidemedio'+rand);
						c.data.nome = rand;

					c.name = 'ast' + i;
					c.body.bounce.set(1);
					c.body.collideWorldBounds = false;
					c.body.velocity.setTo(70, 90);

				}
			}

		}	
	
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
				shipP.exists=false;				 		
				game.state.start('GameOver');

			}
		}		

		destruiu(bulletsP,asteroideP){
			bulletsP.kill();
			asteroideP.kill();

			if("<?php echo $array_perguntas[$key]["alternativa_correta"] ?>" == asteroideP.data.nome)
				this.score += 10;
			else
				this.score -= 5;
			this.scoreText.setText('SCORE: ' + this.score);	
			setTimeout(function(){ jogoStateObjeto.criarGrupo(1); }, 3000);		
			scoreGlobal = this.score;			
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
			}

			this.nivelText.setText;
			game.world.wrap(this.ship, 16);
			
			for(var i=0;i<this.group.length;i++){
			
				game.world.wrap(this.group.children[i], 60);
				
			}  
			
		}	
		
		render(){
			this.tempoText.setText("Tempo: " + counter +  " s");       
		}	 

	};		
	
	var jogoStateObjeto = new jogoState();	
	
	game.state.add('TelaFinal',finalState);
	game.state.add('GameOver',gameoverState);
	game.state.add('jogo',jogoStateObjeto);		
	game.state.start('jogo');	
			
		function pausarJogo() {       
			game.paused = true;	       			
		}		
		function retomarJogo() {
			game.paused = false;	
		}	
		function pause(){	
			clearTimeout(timer);	
		}
		
		function despausar(){	
			game.paused = false;	
		}

		function ocultar(){   
			var btn = document.getElementById('submeter');
			btn.style.display = 'none'; // oculta a div
		}
		
		//contador de tempo restante
		var counter = 5;
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
									
					}		
				}			
					
				}, 1000 );			
			}	
		
    </script>	

    <section id="botao_voltar_jogo">
        <a href="" class="button orange shield glossy" style="padding-left: 1em; padding-right: 1em; margin: -7.5% 0% 3% 10%">
		<img src="img/botao_voltar_30x34.png"></a>
        <img id="pausajogo" src="img/pause-icon_512x512.png" onclick="pausarJogo(),pause()">
		<img id="playjogo" src="img/play-icon_342x342.png" onclick="retomarJogo(),myTimer()">
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>