<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Jogo Dos Botões - Menu</title>
	<style type="text/css">
		.container {
	        width: 100vw;
	        height: 100vh;
	        display: flex;
	        flex-direction: row;
	        justify-content: center;
	        align-items: center
	    }
		body{
			margin: 0px;
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
	<div class="container">
        <div class="box">
	<center>
		<?php
			$nivel=filter_input(INPUT_GET,'Nivel', FILTER_SANITIZE_NUMBER_INT);
			$modo=filter_input(INPUT_GET,'Modo', FILTER_SANITIZE_NUMBER_INT);
			if ($nivel==6 && $modo==1) {
				echo "Parabens<br>";
				echo "Voce terminou o modo de niveis<br>";
				echo "Modo Infinito,Modo Corrida Infinita e Modo Aleatório foram desbloqueados<br>";
				echo "Experimente outros modos para mais desafios<br>";
			}
			else{
				echo "<p>Parabens por ter passado de nivel</p>
					<p>O que voce deseja fazer agora?</p>
					<br><br>";
				$nivel+=1;
				if ($modo==3) {
					$sequencia=[];
					$calculo=($nivel**2)+$nivel;
					$aleatorio=rand(1,$calculo);
					for ($i=0; $i <$aleatorio ; $i++) { 
						$numero=rand(1,$nivel**2);
						array_push($sequencia, $numero);
					}
					$botoes1=implode('-', $sequencia);
					echo "<a href='Jogo.php?Modo=$modo&Valor=$nivel&Botoes=$botoes1'><button>Ir Para o Próximo Nivel</button></a>";
				}
				else{
					echo "<a href='Jogo.php?Modo=$modo&Valor=$nivel'><button>Ir Para o Próximo Nivel</button></a><br>";
				}
			}
		?>
		<a href="index.php"><button>Voltar ao Menu Principal</button></a>
		
	</center>
</div>
</div>
</body>
</html>