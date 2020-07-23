<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Jogo Dos Botões - Menu</title>
	<style type="text/css">
		body{
			background-color: lightblue;
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
		a{
			text-decoration: none;
		}
		button:hover{
			background-color: gray;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<center>
		<br><br>
		<a href="Niveis.php"><button>Modo de Niveis</button></a>
		<br>
		<a href="Jogo.php?Modo=2&Valor=2"><button>Modo Infinito</button></a>
		<br>
		<?php
			$sequencia=[];
			$aleatorio=rand(1,6);
			for ($i=0; $i <$aleatorio ; $i++) {
				$numero=rand(1,4);
				array_push($sequencia, $numero);
			}
			$botoes1=implode('-', $sequencia);
			echo "<a href='Jogo.php?Modo=3&Valor=2&Botoes=$botoes1'><button>Modo Aleatorio</button></a><br>";	
			echo "<a href='Jogo.php?Modo=4&Valor=2&Botoes=$botoes1'><button>Modo Corrida Infinita</button></a><br>";
		?>
		<a href="index.php"><button>Voltar</button></a>
	</center>
</body>
</html>