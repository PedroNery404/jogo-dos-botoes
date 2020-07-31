<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Jogo Dos Botões - Menu</title>
	<style type="text/css">
		body{
			background-color: lightblue;
			font-family: 'Pangolin', cursive;	
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
		a{
			text-decoration: none;
		}
		button:hover{
			background-color: gray;
			cursor: pointer;
		}
		.hidden{
			display: none;
		}
		input{
			height: 20px;
			padding: 8px;
			outline: none;
			border-radius:50px; 
			display: block;
		}
	</style>
	<script type="text/javascript">
		function Treino(x) {
			if (document.getElementById(x).style.display=='block') {
				document.getElementById(x).style.display='none';
			} 
			else {
				document.getElementById(x).style.display='block';
			}
		}
	</script>
</head>
<body>
	<center>
		<br><br>
		<a href="Niveis.php"><button>Modo de Niveis</button></a>
		<br>
		<a href="Jogo.php?Modo=2&Valor=2&Botoes=--"><button>Modo Infinito</button></a>
		<br>
		<?php
			$sequencia=[];
			$aleatorio=rand(1,6);
			for ($i=0; $i <$aleatorio ; $i++) {
				$numero=rand(1,4);
				array_push($sequencia, $numero);
			}
			$botoes1=implode('-', $sequencia);
			echo "<a href='Jogo.php?Modo=3&Valor=2&Botoes=$botoes1--'><button>Modo Aleatorio</button></a>";	
		?>
		<br>
		<button onclick="Treino('EscolherNivel')" class="ModoTreino">Modo Treino</button>
		<div class="hidden" id="EscolherNivel">
			<form action="Jogo.php?" method="GET">
				<label style="font-size: 20px;">Escolha o Nível que deseja Começar<br><br></label>
				<input type="number" name="Valor" min="2">
				<button type="submit" style="width: 100px;height: 40px;font-size: 20px;">OK</button>
			</form>
		</div>
		<br>
		<a href="index.php"><button>Voltar</button></a>
	</center>
</body>
</html>