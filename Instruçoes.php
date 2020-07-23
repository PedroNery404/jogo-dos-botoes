<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jogo Dos Botões - Instruções</title>
	<style type="text/css">
     	.container {
	        width: 100vw;
	        height: 100vh;
	        background: lightblue;
			display: flex;
		    flex-direction: row;
	        justify-content: center;
		    align-items: center
	  	}
     	.box {
         	width: 300px;
         	height: 300px;
         	background: #fff;
     	}
     	body {
        	margin: 0px;
 		}
 		button{
			background-color: #4DE8AA;
			width: 50px;
			height: 50px;
			font-size:15px;
			margin:40px;
			color: darkblue;
			border-radius: 50px;
			box-shadow: 10px 10px 10px rgba(0,0,0,0.5);
			font-style: italic;
			font-family: 'Trade Winds', cursive;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="box">
			<a href="Jogar.php"><button>Jogar</button></a>
			<br>
			<a href="Instruçoes.php"><button>Instruções</button></a>
			<br>
			<a href="Recordes.php"><button>Recordes</button></a>
			<br>
			<a href="Configuraçoes.php"><button>Configurações</button></a>
			<br>
			<a href="Creditos.php"><button>Créditos</button></a>
		</div>
	</div>
</body>
</html>