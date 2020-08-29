<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		Número 1:
		<input type="number" name="numero_1">
        <br>
        Número 2:
        <input type="number" name="numero_2">
        <br>
        <select name="operacao">
        	<option value="soma">Soma</option>
        	<option value="subtracao">Subtracao</option>
        	<option value="vezes">vezes</option>

        </select>
        <input type="submit">

	</form>
	<?php
if($_POST){
$num1 = $_POST['numero_1'];
$num2 = $_POST['numero_2'];
$operacao = $_POST['operacao'];



	$resultado[0] = $num2 + $num1;

	$resultado[1] = $num2 - $num1;
foreach ($resultado as $resultado) {
	# code...
echo $resultado.'<br>';
}

}
	?>

</body>
</html>