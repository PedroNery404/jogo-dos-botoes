<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container {
	        width: 100vw;
	        height: 95vh;
	        display: flex;
	        flex-direction: row;
	        justify-content: center;
	        align-items: center;
	    }
	    body {
	       	margin: 0px;
			background-color: lightgreen;
		}
		button{
			background-color: lightgray;
			color: green;
			border:0px;
			width: 90px;
			height: 50px;
			margin-bottom: 10px;
			margin-left: 10px;
			border-radius: 10px;
			cursor: pointer;
		}
		button:hover{
			color: lightgreen;
			background-color: gray;
		}
		a{
			text-decoration: none;
		}
		#Voltar{
			margin-top: 10px;
			font-size: 18px;
			color: green;
			background-color: lightblue;
		}
		#Voltar:hover{
			background-color: deepskyblue;
		}
		#Vitoria{}
		#Vitoria:hover{}
		input{
			text-align: right;
			background-color: lightgreen;
			border: 0px;
			font-size: 30px;
			float: right;
			width: 37px;
			height: 4vh;		
		}
	</style>
	<script type="text/javascript">
		function incrementaCampo( ){
			var segundos =document.getElementById("segundos").value;
			var minutos =document.getElementById("minutos").value;
			var horas =document.getElementById("horas").value;
			document.getElementById("segundos").value =Number(segundos) + 1;
			if (segundos==59){
				document.getElementById("segundos").value =0;
				if (document.getElementById("minutos").value ==false) {
					document.getElementById("minutos").value =1;
					document.getElementById("MinutosDoisPontos").value=':';
				} 
				else {
					document.getElementById("minutos").value =Number(minutos) + 1;
					if(minutos==59){
						document.getElementById("minutos").value =0;
						if (document.getElementById("horas").value ==false) {
							document.getElementById("horas").value =1;
							document.getElementById("HorasDoisPontos").value=':';
						}
						else{
							document.getElementById("horas").value =Number(horas) + 1;
						} 
					}
				}
			}
		}
		setInterval("incrementaCampo( )", 1);
	</script>
</head>
<body>
	<?php 
		echo('<input type="text" id="segundos" value="0" disabled></input>');
		echo "<input id='MinutosDoisPontos' style=width:10px;></input>";
		echo('<input type="text" id="minutos" disabled></input>');
		echo "<input id='HorasDoisPontos' style=width:10px;></input>";
		echo('<input type="text" id="horas" disabled></input>');
		echo "<div class='container'><div class='box'><center>";
		$valor=filter_input(INPUT_GET,'Valor', FILTER_SANITIZE_NUMBER_INT);
		$botoes=filter_input(INPUT_GET,'Botoes', FILTER_SANITIZE_NUMBER_INT);
		$modo=filter_input(INPUT_GET,'Modo', FILTER_SANITIZE_NUMBER_INT);
		$ok=filter_input(INPUT_GET,'ok', FILTER_SANITIZE_NUMBER_INT);
$lista=explode('-', $botoes);
$botoes=implode('-', $lista);
$conferir=[];
for ($i=1; $i <($valor**2)+1; $i++) { 
	array_push($conferir, $i);
}
if($valor==1){
	$valor++;
	echo "<button><a href='Jogo.php?Modo=$modo&Valor=$valor'>1</a></button>";
}
else{
	$contador=0;
	$vitoria=0;
	for($coluna=1;$coluna<$valor+1;$coluna++){
		if($coluna==1){
			$contador+=1;
			$cor=MudarEstado($contador,$botoes);
			if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
			$ar = array($contador,$contador+1,$contador+$valor);
			$ar2=implode("-", $ar);
			echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
		}
		elseif($coluna==$valor){
			$contador+=1;
			$cor=MudarEstado($contador,$botoes);
			if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
			$ar = array($contador,$contador+$valor,$contador-1);
			$ar2=implode("-", $ar);
			echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
		}
		else{
			$contador+=1;
			$cor=MudarEstado($contador,$botoes);
			if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
			$ar = array($contador,$contador-1,$contador+1,$contador+$valor);
			$ar2=implode("-", $ar);
			echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
		}
	}
	echo "<br>";
	for($linha=1;$linha<$valor-1;$linha++){
		for($coluna=1;$coluna<$valor+1;$coluna++){
			if($coluna==1){
				$contador+=1;
				$cor=MudarEstado($contador,$botoes);
				if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
				$ar = array($contador,$contador+1,$contador+$valor,$contador-$valor);
				$ar2=implode("-", $ar);
				echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
			}
			elseif($coluna==$valor){
				$contador+=1;
				$cor=MudarEstado($contador,$botoes);
				if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
				$ar = array($contador,$contador+$valor,$contador-$valor,$contador-1);
				$ar2=implode("-", $ar);
				echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
			}
			else{
				$contador+=1;
				$cor=MudarEstado($contador,$botoes);
				if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
				$ar = array($contador,$contador+$valor,$contador-$valor,$contador-1,$contador+1);
				$ar2=implode("-", $ar);
				echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
			}
		}
		echo "<br>";
	}
	for($coluna=1;$coluna<$valor+1;$coluna++){
		if($coluna==1){
			$contador+=1;
			$cor=MudarEstado($contador,$botoes);
			if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
			$ar = array($contador,$contador+1,$contador-$valor);
				$ar2=implode("-", $ar);
			echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
		}
		elseif($coluna==$valor){
			$contador+=1;
			$cor=MudarEstado($contador,$botoes);
			if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
			$ar = array($contador,$contador-$valor,$contador-1);
				$ar2=implode("-", $ar);
			echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
		}
		else{
			$contador+=1;
			$cor=MudarEstado($contador,$botoes);
			if ($cor=="black") {
				$vitoria+=1;
			}
			else{
				$vitoria-=1;
			}
			$ar = array($contador,$contador-$valor,$contador-1,$contador+1);
				$ar2=implode("-", $ar);
			echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$botoes-$ar2'><button style='background-color:$cor'>$contador</button></a>";
		}
	}
}
function MudarEstado($botao,$botoes){
	$lista=explode('-', $botoes);
	$ar2 = array_count_values($lista);
	if (array_key_exists($botao,$ar2)) {
		if ($ar2[$botao]%2==1) {
			return "black";
		}
		else{
		return "lightgray";
	}
	}
	else{
		return "lightgray";
	}
}
echo "<br><a href='Jogar.php'><button id='Voltar'>Voltar</button></a>";
if ($modo!=3 && $modo!=4) {
	echo "<br><a href='Jogo.php?Modo=$modo&Valor=$valor'><button id='Voltar'>Reiniciar Nivel</button</a>";
}
if ($vitoria==$valor**2 || $ok=="1") {
	echo "<br><a href='Vitoria.php?Modo=$modo&Nivel=$valor'><button type='submit' id=Vitoria>Parabens</button></a>";
}
?>
</center>
        </div>
    </div>
</body>
</html>