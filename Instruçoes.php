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
				outline: none;
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
				Colorir todos os botões para avançar para o próximo nível.
				<p class="Titulo">Como Jogar?</p>
				Para jogar escolha um modo de jogo e depois clique nos botões para colorir ele mesmo e os botões adjacentes.Continue colorindo eles até todos estarem pintados.
				<p class="Titulo">Tipos de jogos</p>
				1°-Modo de Níveis<br>
				Nesse modo você começa no nível iniciante e quando ganhar vai para um nível mais difícil em seguida até o nível avançado.<br>
				2°-Modo Infinito<br>
				Nesse modo você pode testar sua capacidade máxima no jogo pois os níveis só acabam quando você desistir.<br>
				3°-Modo Aleatório<br>
				Nesse modo cada nível começa com alguns botões coloridos e seu desafio será descobrir novas formas de ganhar já que cada nível sera cada vez mais imprevisível e desafiador.<br>
				4°-Modo Treino<br>
				Nesse modo você pode ir diretamente para o nível que desejar pra treinar suas habilidades sem ter que começar desde o início.<br>
			</div>
		</div>
		<center><a href="index.php"><button>Voltar</button></a></center>
		<br>
	</body>
</html>