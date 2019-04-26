<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Calculadora</title>
</head>
<body>
<form action="index.php" method="post">
	<input type="text" name="txtn1">
	<select name="opciones">
		<option value="0">Sumar</option>
		<option value="1">Restar</option>
		<option value="2">Multiplicar</option>
		<option value="3">Dividir</option>
	</select>
	<input type="text" name="txtn2">
	<input type="submit" name="calcular" value="calcular">
</form>
</body>
</html>

<?php 
	include("clases.php");
	if (isset($_REQUEST['calcular'])) {
		$n1=$_REQUEST['txtn1'];
		$n2=$_REQUEST['txtn2'];
		$op=$_REQUEST['opciones'];
		
		switch ($op) {
			case 0:echo "$n1 + $n2= ".Matematica::Sumar($n1,$n2);				
				break;
			case 1:echo "$n1 - $n2= ".Matematica::Resta($n1,$n2);				
				break;
			case 2:echo "$n1 * $n2= ".Matematica::Multiplicacion($n1,$n2);
				break;
			case 3:echo "$n1 / $n2= ".Matematica::Division($n1,$n2);
				break;
		}
	}
?>