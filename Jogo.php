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
			color: green;
			border:0px;
			width: 90px;
			height: 50px;
			margin-bottom: 10px;
			margin-left: 10px;
			border-radius: 10px;
			cursor: pointer;
			outline: none;
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
</head>
<body>
	<?php 
		$valor=filter_input(INPUT_GET,'Valor', FILTER_SANITIZE_NUMBER_INT);
		$botoes=filter_input(INPUT_GET,'Botoes', FILTER_SANITIZE_NUMBER_INT);
		if (empty($botoes)) {
			$botoes='--';
		}
		$modo=filter_input(INPUT_GET,'Modo', FILTER_SANITIZE_NUMBER_INT);
		if (empty($modo)) {
			$modo='4';
		}
		$ok=filter_input(INPUT_GET,'ok', FILTER_SANITIZE_NUMBER_INT);
		echo "<div class='container'><div class='box'><center>";

		$v=[$botoes];
		$t=implode('--', $v);
		$r=explode('--', $t);
		$antes=$r[0];
		$novo=$r[1];
		$novo=$r[1];
		$antes1=explode('-', $antes);
		$novo1=explode('-', $novo);
		$diferenca=array_diff($antes1, $novo1);
		$diferenca2=array_diff($novo1, $antes1);
		$resultado=array_merge($diferenca,$diferenca2);
		sort($resultado);
		$link=implode('-', $resultado);//Valor enviado para a url para alterar a cor dos botoes
		$final=implode('', $resultado);
		$progresso=strval($final);//Comparar com o objetivo para saber se o usuario passou de fase
		//FIM
		$conferir=[];
		for ($i=1; $i <($valor**2)+1; $i++) { 
			array_push($conferir, $i);
		}
		$b=implode('', $conferir);
		$objetivo=strval($b);

if($valor==1){
	$valor++;
	echo "<button><a href='Jogo.php?Modo=$modo&Valor=$valor'>1</a></button>";
}
else{
	$contador=0;
	for ($i=0; $i <$valor ; $i++) { 
		for ($o=0; $o <$valor ; $o++) { 
			$contador+=1;
			$cor=MudaCor($contador,$resultado);
			$coloridos=LinkBotoes($contador,$valor);
			$coloridos2=implode('-', $coloridos);
			echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=$link--$coloridos2'><button style='background-color:$cor'>$contador</button></a>";
			
		}
		echo("<br>");
	}
}
echo "<br><a href='Jogar.php'><button id='Voltar'>Voltar</button></a>";
if ($modo!=3) {
	echo "<a href='Jogo.php?Modo=$modo&Valor=$valor&Botoes=--'><button id='Voltar'>Reiniciar</button</a>";	
}
if ($progresso==$objetivo) {
	echo "<a href='Vitoria.php?Modo=$modo&Nivel=$valor'><button id='Voltar'>Parabens</button></a>";
}
function MudaCor($contador,$resultado){
	if (in_array($contador, $resultado)) {
		return "black";
	}
	return "lightgray";
}
function LinkBotoes($contador,$valor){
	$a=$contador-$valor;
	$b=$contador-1;
	$c=$contador;
	$d=$contador+1;
	$e=$contador+$valor;
	$BotoesColoridos=[];
	if ($a>0) {
		array_push($BotoesColoridos, $a);
	}
	if ($b>0 && $b%$valor!=0) {
		array_push($BotoesColoridos, $b);
	}
	array_push($BotoesColoridos, $c);
	if ($d<=$valor**2 && $d%$valor!=1) {
		array_push($BotoesColoridos, $d);
	}
	if ($e<=$valor**2) {
		array_push($BotoesColoridos, $e);
	}
	return $BotoesColoridos;
}
?>
</center>
        </div>
    </div>
</body>
</html>