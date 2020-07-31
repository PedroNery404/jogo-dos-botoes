<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
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
			outline: none;
		}
		a{
			text-decoration: none;
		}
		div{
			width: 65%;
			font-size: 30px;
			font-family: 'Pangolin', cursive;
		}
		button:hover{
			background-color: gray;
			cursor: pointer;
		}
		.Titulo{
			font-size: 40px;
			color: darkblue;
			font-family: 'Trade Winds', cursive
		}
	</style>
</head>
<body>
	<center>
		<p class="Titulo">Recordes</p>
		<div>
		<?php
			$con= mysqli_connect("localhost","id13179308_root","abcdeFGHIJ-1234","id13179308_jogodosbotoes");
			$nick=filter_input(INPUT_GET,'Nick', FILTER_SANITIZE_NUMBER_INT);
			$nivel=filter_input(INPUT_GET,'Nivel', FILTER_SANITIZE_NUMBER_INT);
			if(isset($_GET['Nick'])){
  				$nick=addslashes($_GET["Nick"]);
				$Data=[date('Y'),date('n'),date('d')];
				$Hora=[date('H'),date('i'),date('s')];
				$Data2=implode('-', $Data);
				$Hora2=implode(':', $Hora);
				$sql1=mysqli_query($con,"INSERT INTO recordes(Usuario,MaiorNivel,Data) VALUES ('$nick','$nivel','$Data2 $Hora2')") or print mysql_error();
			}
			$sql1=mysqli_query($con,"SELECT * FROM recordes") or print mysql_error();
			$row=mysqli_num_rows($sql1);
			if ($row>0) {
        		while ($linha=mysqli_fetch_array($sql1)) {
            		$Codigo=$linha['Cod_Recorde'];
           			$Usuario=$linha['Usuario'];
            		$Nivel=$linha['MaiorNivel'];
        		}
    		}
    		$comando="SELECT * FROM recordes ORDER BY MaiorNivel desc LIMIT 10";
    		$sql2=mysqli_query($con,$comando) or print mysql_error();
    		while($row_usuario = mysqli_fetch_assoc($sql2)){
            	$Cod_Recorde=$row_usuario['Cod_Recorde'];
            	echo "<a style='text-decoration: none;font-size: 25px;'>Usuario: " . $row_usuario['Usuario'] . "<br>";
            	echo "Maior Nivel: " . $row_usuario['MaiorNivel'] ."<br><hr>";
        }
		?>
		</div>
		<a href="index.php"><button>Voltar</button></a>
	</center>
</body>
</html>