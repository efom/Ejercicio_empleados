<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salario Planta</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="menu"> <div id="contratista"><a href="salarioContratista.php">Contratista</a></div><div id="planta"><a href="salarioPlanta.php">Planta</a></div> </div>

	<h2>Calcular el salario del empleado de planta</h2>
	<form action="Resultado.php" method="post">
		Id empleado:<br>
		<input type="text" name="id" value="" placeholder="id">
		<br>
		Nombre Empleado:<br>
		<input type="text" name="nombre" value="" placeholder="Nombre">
		<br>
		Cargo:<br>
		<input type="text" name="cargo" value="" placeholder="Cargo">
		<br>
		salario_basico:<br>
		<input type="text" name="salario_basico" value="" placeholder="Salario basico">
		<br>
		Extras:<br>
		<input type="text" name="extras" value="" placeholder="Extras">
		<br>
		deducciones:<br>
		<input type="text" name="deducciones" value="" placeholder="Deducciones">
		<br>
		<br>
		<input type="submit" name="planta" value="Valor final planta">
	</form>
</body>
</html>
