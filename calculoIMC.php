<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo do IMC</title>
</head>
<body>
	<?php 
	echo "Seu IMC foi calculado";
	echo "<br/>";

	$Peso = $_POST['peso'];
	$altura = $_POST['altura'];

	echo "<b>Seu peso é: </b>".$Peso;
	echo "<br/>";
	echo "<b>Sua altura é: </b>".$Altura;

	$IMC = $peso / ($Altura * $Altura);

	echo "<br/>";
	echo "<b>Seu IMC é igual a: ".$IMC;
	echo "<br/>";

	if ($IMC > 25) {
		echo '<img src="pessoasaudavel.jpg">';
	}else echo "Você está saudável!";
		echo "<br/>";
		echo '<img src="saudavel.jpeg" width="25%">';
 ?>
</body>
</html>