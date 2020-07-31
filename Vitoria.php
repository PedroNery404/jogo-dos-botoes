<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
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
			font-family: 'Pangolin', cursive;
			font-size: 30px;
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
	<div class="container">
        <div class="box">
	<center>
		<?php
			$nivel=filter_input(INPUT_GET,'Nivel', FILTER_SANITIZE_NUMBER_INT);
			$modo=filter_input(INPUT_GET,'Modo', FILTER_SANITIZE_NUMBER_INT);
			if ($nivel==6 && $modo==1) {
				echo "Parabéns<br>";
				echo "Você terminou o modo de níveis<br>";
				echo "Experimente outros modos para mais desafios<br>";
			}
			else{
				echo "<p>Parabéns por ter passado de nível</p>
					  <p>O que você deseja fazer agora?</p>";
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
					echo "<a href='Jogo.php?Modo=$modo&Valor=$nivel&Botoes=$botoes1--'><button>Ir Para o Próximo Nivel</button></a><br>";
				}
				else{
					echo "<a href='Jogo.php?Modo=$modo&Valor=$nivel&Botoes=--'><button>Ir Para o Próximo Nivel</button></a><br>";
				}
				if ($modo==2) {
						$con= mysqli_connect("localhost","id13179308_root","abcdeFGHIJ-1234","id13179308_jogodosbotoes");
						$sql1=mysqli_query($con,"SELECT MaiorNivel FROM recordes WHERE MaiorNivel<='$nivel'") or print mysql_error();
						if (mysqli_num_rows($sql1)>=5) {
							$nivel2=$nivel-1;
							$Recorde="\"Recorde\"";
					echo "<button onclick='Treino($Recorde)'>Registrar nos Recordes</button>
						<div class='hidden' id='Recorde'>
						<form action='Recordes.php?' method='GET'>
						<label style='font-size: 20px;'>Digite o nome que voce quer colocar nos Recordes<br><br></label>
						<label style='font-size: 20px;'>OBS:Para se registrar voce precisa terminar essa corrida ou seja caso se registre voce nao podera continuar avançando e tera que começar do inicio pra tentar entrar nos recordes denovo<br><br></label>
						<input type='text' name='Nick' max='20'>
						<input type='text' name='Nivel' max='20' class=hidden value='$nivel2'>
						<button type='submit' style='width: 100px;height: 40px;font-size: 20px;'>OK</button>
						</form>
						</div>";
						}
					}
				if ($modo==4) {
					$EscolherNivel="\"EscolherNivel\"";
					echo "<button onclick='Treino($EscolherNivel)'>Escolher Nivel</button>
						<div class='hidden' id='EscolherNivel'>
						<form action='Jogo.php?' method='GET'>
						<label style='font-size: 20px;'>Escolha o Nível que deseja continuar<br><br></label>
						<input type='number' name='Valor' min='2'>
						<button type='submit' style='width: 100px;height: 40px;font-size: 20px;'>OK</button>
						</form>
						</div><br>";
				}
				}
		?>
		<a href="index.php"><button>Voltar ao Menu Principal</button></a>
		
	</center>
</div>
</div>
</body>
</html>