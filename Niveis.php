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
			margin:30px;
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
		<a href="Jogo.php?Modo=1&Valor=2"><button>Iniciante</button></a>
		<br>
		<a href="Jogo.php?Modo=1&Valor=3"><button>Fácil</button></a>
		<br>
		<a href="Jogo.php?Modo=1&Valor=4"><button>Médio</button></a>
		<br>
		<a href="Jogo.php?Modo=1&Valor=5"><button>Difícil</button></a>
		<br>
		<a href="Jogo.php?Modo=1&Valor=6"><button>Avançado</button></a>
		<br>
		<a href="Jogar.php"><button>Voltar</button></a>
	</center>
</body>
</html>