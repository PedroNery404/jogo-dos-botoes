<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jogo Dos Botões - Instruções</title>
		<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">	
		<style type="text/css">
			body{
				background-color: lightblue;
			}
			.Titulo{
				font-size: 40px;
				color: darkblue;
				text-align: center;
				font-family: 'Trade Winds', cursive
			}
			.container {
		        width: 100%;
				display: flex;
			    flex-direction: row;
		        justify-content: center;
			    align-items: center
		  	}
	     	.box {
	     		font-size: 30px;
				text-align: center;
				font-family: 'Pangolin', cursive;
	         	width: 75%;	
	     	}
	     	button{
				background-color: #4DE8AA;
				width: 400px;
				height: 50px;
				font-size: 25px;
				margin:40px;
				color: darkblue;
				border-radius: 50px;
				box-shadow: 10px 10px 10px rgba(0,0,0,0.5);
				font-style: italic;
				font-family: 'Trade Winds', cursive;
			}
			button:hover{
				background-color: gray;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="box">
				<p class="Titulo">Objetivo</p>
				Colorir todos os botoes para avançar para o próximo nível.
				<p class="Titulo">Como Jogar?</p>
				Para jogar escolha um modo de jogo e depois clique nos botoes para colorir ele mesmo e os botoes adjacentes.Continue colorindo eles até todos estarem pintados.
				<p class="Titulo">Tipos de jogos</p>
				1°-Modo de Níveis<br>
				Nesse modo você começa no nível iniciante e quando ganhar vai para um nível mais difícil em seguida até o nível avançado.<br>
				2°-Modo Infinito<br>
				Nesse modo voce pode testar sua capacidade máxima no jogo pois os níveis só acabam quando você desistir.<br>
				3°-Modo Aleatório<br>
				Nesse modo cada nível começa com alguns botoes coloridos e seu desafio sera descobrir novas formas de ganhar porque cada nivel sera cada vez mais imprevisível e desafiador<br>
				4°-Modo Corrida Infinita<br>
				Nesse modo voce poderá aproveitar o modo infinito de maneira diferente,agora existirá um contador para medir sua velociade na resoluçao dos níveis e seu tempo sera registrado na opção de Recordes e os melhores tempos serão exibidos para todos os jogadores.<br>
			</div>
		</div>
		<center><a href="index.php"><button>Voltar</button></a></center>
		<br>
	</body>
</html>