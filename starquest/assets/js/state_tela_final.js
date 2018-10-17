class finalState extends Phaser.State{
		
		constructor() {
				super();
				this.button;
				this.proximaFase;				
			}	
		
		create() {
			
			this.scoreText = this.add.text(80,520, 'Pontos:', { font: 'Comic Sans MS', fontSize: '30px', fill: '#FFF' });
			this.scoreText.setText('Pontos: ' + scoreGlobal);				
			this.add.text(130,140, '!! PARABÉNS !!', { font: 'Comic Sans MS', fontSize: '80px', fill: '#FFF' });			
			this.button = this.game.add.button(420,380, "play" ,this.play,this);
			this.add.text(328,440, 'PROXIMA FASE', { font: 'Comic Sans MS', fontSize: '25px', fill: '#FFF' });		
			this.button.anchor.setTo(0.5,0.5);	
			faseGlobal ++;			

			// Botão proxima fase
			this.proximaFase = game.input.keyboard.addKey(Phaser.Keyboard.ENTER);
			this.proximaFase.onDown.add(this.play,this);	
			
			// Botão compartilhar facebook
			var btnFacebook = document.getElementById('btnFace');
			btnFacebook.style.display = 'block'; // mostra a div
		}
		
		play(){		
		
			counter = 5;
			this.game.state.start('jogo');	

			var play = document.getElementById('playjogo');
			play.style.display = 'block'; // mostra a div	
								
			myTimer();
			
			var btnFacebook = document.getElementById('btnFace');
			btnFacebook.style.display = 'none'; // oculta a div
			
			CarregarPerguntas();
			
		}	
		
	};	